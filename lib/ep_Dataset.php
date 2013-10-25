<?php
/**
 * Bazowa klasa reprezentujaca DataSet
 *
 * Klasa zwraca sama siebie dla wszystkich setterow w zwiazku z tym mozliwa jest konstrukcja lancuchowa
 *
 *
 * @example   $o->setFilters(array(..))->setLimit(int)->setPage(int)->find();
 *
 *
 *
 * @package \Objects
 * @version 0.1
 * @author Adam Ciezkowski <adam.ciezkowski@epf.org.pl>
 * @link sejmometr.pl
 *
 * @see ep_DatasetEnum
 *
 * @method ep_Dataset cleanFilters()
 * @method ep_Dataset cleanQueryString()
 * @method ep_Dataset cleanSort()
 * @method ep_Dataset cleanResponseType()
 * @method ep_Dataset cleanLimit()
 * @method ep_Dataset cleanPage()
 * @method ep_Dataset is200()
 * @method ep_Dataset is500()
 * @method ep_Dataset is400()
 * @method array getBodyObjects()
 * @method int getResponseCode()
 * @method mixed getPagination(string)
 * @property mixed $content - content czyli odpowiedź bez nagłówków
 * @property float $responseTime - czas w ms
 * @property string $calledUrl - endpoint w postaci URL'a do, którego odwołało się API
 * @property mixed $raw - surowa odpowiedź serwera
 */

abstract class ep_Dataset extends ep_Search
{

    /**
     * Konstruktor, przyjmuje ustawienia jako parametry
     * @see ep_Dataset::_settingsDefault
     * @param array|int|null $config
     */
    public function __construct($config = null)
    {
        $config['dataSetFilter'] = $this->alias;
        $this->setConfig($config);

    }


    /**
     * Alias, skrót do szybkiego wyszukiwania po pojedynczym polu - zamiast $this->setFilter()->search()
     *
     * @param string $field
     * @param mixed $value
     * @return ep_SocketResponse
     */
    public function searchBy($field, $value)
    {
        return $this->setFilter($field, $value)->search();
    }


    /**
     * Ustawia sortowanie
     *
     * @param array $sort
     * @return $this
     */
    public function setSorting($sort = array())
    {
        $this->_settingsDefault['sort'] = $sort;
        $this->setConfig();
        return $this;
    }

    /**
     * Funkcja wyszukiwania obiektow na podstawie wszystkich ustawionych filtrow
     *
     * @param array|int|null $config
     * @return ep_SocketResponse
     * @abstract
     */
    public function search($config = null)
    {
        $this->setConfig($config);
        $socket = $this->createSearchSocket();
        $this->response = $socket->request();
        return $this->response;
    }

    /**
     * Tworzy socket na potrzebe wykonania żądania
     *
     * @interal
     * @return ep_Socket
     */
    protected function createSearchSocket()
    {
        $post = http_build_query($this->settings->filters) . '&' . http_build_query(array('page' => $this->settings->page, 'limit' => $this->settings->limit, 'output' => $this->settings->output, 'q' => $this->settings->queryString));
        $socket = new ep_Socket(array(
            'request' => array(
                'post' => $post,
                'url' => $this->alias,
                'protocol' => ($this->settings->https) ? 'https' : 'http',
            ),
        ));
        return $socket;
    }

}

/**
 * Bazowa klasa reprezentujaca encję filtrów
 *
 * @package \Objects
 * @version 0.1
 * @author Adam Ciezkowski <adam.ciezkowski@epf.org.pl>
 * @link sejmometr.pl
 *
 * @abstract
 *
 */
abstract class ep_DatasetEnum
{
    /**
     * Możliwość wyłapywania filtrow przez wyszukiwanie w nazwach
     *
     * @example ep_DatasetEnum::getAllMatching('ministerstwo')
     * @param $pattern
     * @return array
     */
    public static function getAllMatching($pattern)
    {
        $r = new ReflectionClass(get_called_class());
        $matches = array();
        foreach ($r->getConstants() as $name => $filter) {
            if (preg_match("/$pattern/", strtolower($name))) {
                array_push($matches, $filter);
            }
        }
        return $matches;

    }
}

/**
 * Encja zawierająca spis dostępnych DataSet
 *
 *
 * @package \Objects
 * @version 0.1
 * @author Adam Ciezkowski <adam.ciezkowski@epf.org.pl>
 * @link sejmometr.pl
 *
 * @abstract
 */
class ep_Datasets extends ep_DatasetEnum
{
    const PRAWO_W_PUBLIKATORACH = 'prawo';
    const ORZECZENIA_SADOW_ADMINISTRACYJNYCH = 'sa_orzeczenia';
    const WYSTAPIENIA_W_SEJMIE = 'sejm_wystapienia';
    const KODY_POCZTOWE = 'kody_pocztowe';
    const ORZECZENIA_SADU_NAJWYZSZEGO = 'sn_orzeczenia';
    const ORZECZENIA_SADOW_POWSZECHNYCH = 'sp_orzeczenia';
    const INTERAPELACJE = 'sejm_interapelacje';
    const TEKSTY_JEDNOLITE_USTAW = 'ustawy';
    const GMINY = 'gminy';
    const KOMUNIKATY_KANCELARII_SEJMU = 'sejm_komunikaty';
    const RAPORT_NAJWYZSZEJ_IZBY_KONTROLI = 'nik_raporty';
    const GLOSOWANIA_W_SEJMIE = 'sejm_glosowania';
    const DRUKI_SEJMOWE = 'sejm_druki';
    const BANK_DANYCH_LOKALNYCH = 'bld_wskazniki_podgrupy';
    const PROJEKTY_USTAW = 'legislacja_projekty_ustaw';
    const DRUKI_SENACKIE = 'senat_druki';
    const PUNKTY_PORZADKU_DZIENNEGO_W_SEJMIE = 'sejm_posiedzenia_punkty';
    const POSLOWIE = 'poslowie';
    const PROJEKTY_UCHWAL = 'legislacja_projekty_uchwal';
    const POSIEDZENIA_SEJMU = 'sejm_posiedzenia';
}

/**
 * Klasa pojedynczego obiektu
 *
 *
 * @package \Objects
 * @version 0.1
 * @author Adam Ciezkowski <adam.ciezkowski@epf.org.pl>
 * @link sejmometr.pl
 *
 *
 *
 */
class ep_Object
{

    /**
     * ID obiektu - <strong>unikalne tylko na przestrzeni danego DataSet, nie globalnie</strong>
     * @var int
     */
    public $id;
    /**
     * Pola obiektu
     * @var array|ArrayObject
     */
    public $data;
    /**
     * Dostępne warstwy
     * @var array|ArrayObject
     *
     */
    public $layers;
    /**
     * Wersja
     * @var string
     */
    public $version;

    /**
     * Alias dla datasetu, ustawiany z encji
     * @see ep_DatasetEnum
     * @var string
     */
    public $alias = null;

    /**
     * Ustawia dane na podstawie tablicy
     * @param array $data dane z ep_SocketResponse::getBodyObjects()
     * @see ep_SocketResponse::getBodyObjects()
     */
    public function __construct($data = array())
    {
        if (is_numeric($data)) {
            $this->id = $data;
            $this->loadObjectById();
        }
        if (is_array($data) && !empty($data)) {
            $this->id = $data['id'];
            if(isset($data['_aliases'])) { $data['data']['aliases'] = $data['_aliases'];}
            $this->data = new ArrayObject($data['data'], ArrayObject::ARRAY_AS_PROPS);
            $this->layers = new ArrayObject($data['layers'], ArrayObject::ARRAY_AS_PROPS);
        }
    }

    /**
     * Magiczna metoda do pobierania danych koncowych obiektu
     * @param string $arg
     * @return mixed
     */
    public function __get($arg)
    {
        if (!isset($this->data->{$arg})) {
            $arg = explode('_', $arg);
            $first = array_shift($arg);
            $arg = $first . '.' . implode('_', $arg);
        }
        return $this->data->{$arg};
    }

    /**
     * Funkcja do zaladowania jednego konkretnego dokumentu
     *
     * @param int $id
     * @return ep_Object
     */
    public function loadObjectById($id = null)
    {
        if (!is_null($id)) {
            $this->id = $id;
        }
        $socket = $this->createReadSocket();
        $this->response = $socket->request();
        $body = $this->response->getBody();
        $body['id'] = $body['data']['id'];
        $this->__construct($body);
        return $this;
    }

    /**
     * Ładuje warstwę dla obiektu
     * @param $layer
     * @return ep_Object
     */
    public function loadLayer($layer)
    {
        $socket = $this->createLayerSocket($layer);
        $this->response = $socket->request();
        var_dump($this->response);
        die();
        $body = $this->response->getBody();
        $body['id'] = $body['data']['id'];
        $this->__construct($body);
        return $this;
    }

    /**
     * Tworzy socket do odczytywania pojedynczych dokumentow
     * @return ep_Socket
     * @throws ErrorException
     */
    protected function createReadSocket()
    {
        if (!$this->id) {
            throw new ErrorException("There is no ID set for this document");
        }
        $socket = new ep_Socket(array(
            'request' => array(
                'url' => $this->alias . '/' . $this->id,
            ),
        ));
        return $socket;
    }

    /**
     * Tworzy socket do wczytywania warstaw
     *
     * @param $layer
     * @return ep_Socket
     * @throws ErrorException
     */
    protected function createLayerSocket($layer)
    {
        if (!$this->id) {
            throw new ErrorException("There is no ID set for this document");
        }
        if (!$layer) {
            throw new ErrorException("No layer selected");
        }
        $socket = new ep_Socket(array(
            'request' => array(
                'url' => $this->alias . '/' . $this->id . '/' . $layer,
            ),
        ));
        return $socket;
    }

    /**
     * Ustawiamy dataset
     *
     * @param string $alias
     * @return $this
     */
    public function setDataset($alias) {
        $this->alias = $alias;
        return $this;
    }

}