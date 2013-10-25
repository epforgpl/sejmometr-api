<?php
/**
 * Bazowa klasa przeszukująca
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
 *
 */

class epSearch
{
    /**
     * Bazowe ustawienia
     *
     * <ul>
     *      <li>array: dataSetFilter - możliwość ustawienia wielu datasetów - ustawianie filtrów mija się wtedy z celem</li>
     *      <li>array: filters - ustawienia dla filtrów na podstawie epDatasetEnum<dataset></li>
     *      <li>string: queryString - słowo do przeszukiwania data setów, np. ZUS</li>
     *      <li>array: sort - array z ustawieniami sortowania, również wykorzystuje encje epDatasetEnum</li>
     *      <li>int: limit - ilsoc obiektow na strone</li>
     *      <li>int: page - strona, ktora chcemy pobrac</li>
     *      <li>string: responseType - typ odpowiedzi jakiej oczekujemy od serwera, aktualnie json|xml</li>
     *      <li>bool: https - czy laczymy po SSL ?</li>
     *      <li>output: filtry czy obiekty czy oba ?</li>
     * </ul>
     * @var array
     */
    protected $_settingsDefault = array(
        'dataSetFilter' => array(), # mozliwosc ustawienia wielu datasetow
        'filters' => array(), # filtry na podstawie odpowiednichh epDatasetEnum<dataset>
        'queryString' => '', # słowo kluczowe do wyszukiwania
        'sort' => array(),
        'limit' => null,
        'page' => null,
        'responseType' => 'json', # json | xml
        'https' => false,
        'output' => array(),
    );


    /**
     * W przypadku odczytywania konkretnego dokumentu
     * jesli pole id jest ustawione na jakis konkretny int to ignorowane sa wszystkie filtry i zaciagany jest
     * jeden konkretny dokument o podanym ID
     *
     * @var int
     */
    public $id = null;
    /**
     * Array z ustawieniami
     *
     * @see epDatasetObject::_settingsDefault
     *
     * @var ArrayObject
     */
    public $settings = null;

    /**
     * Odpowiedz serwera
     * @var epSocketResponse
     */
    public $response = null;

    /**
     * Socket do połączenia
     * @var epSocket
     */
    public $socket = null;

    /**
     * Alias dla datasetu, ustawiany z encji
     * @see epDatasetEnum
     * @var string
     */
    public $alias = null;

    /**
     * Zbiór sprasowanych obiektów z odpowiedzi
     * @var epObject[]
     */
    public $objects = array();

    /**
     * Jeśli użyte wraz z setOutput zwraca same obiekty
     * @var string
     */
    const OUTPUT_OBJECTS = 'objects';
    /**
     * Jeśli użyte wraz z setOutput zwraca same filtry
     */
    const OUTPUT_FILTERS = 'filters';

    /**
     * Konstruktor, przyjmuje ustawienia jako parametry
     * @see epDataset::_settingsDefault
     * @param array|int|null $config
     */
    public function __construct($config = null)
    {
        $this->setConfig($config);

    }

    /**
     * Funkcja wyszukiwania obiektow na podstawie wszystkich ustawionych filtrow
     *
     * @param array|int|null $config
     * @return epSocketResponse
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
     * Ustawia konfigurację
     *
     * @param array|int|null $config
     * @return $this
     */
    protected function setConfig($config = null)
    {
        if (is_null($config)) {
            $config = array();
            $this->_settingsDefault = array_replace_recursive($this->_settingsDefault, $config);
            $this->settings = new ArrayObject($this->_settingsDefault, ArrayObject::ARRAY_AS_PROPS);
        }

        if (is_array($config)) {
            $this->_settingsDefault = array_replace_recursive($this->_settingsDefault, $config);
            $this->settings = new ArrayObject($this->_settingsDefault, ArrayObject::ARRAY_AS_PROPS);
        }
        if (is_numeric($config)) {
            $this->id = $config;
        }
        return $this;
    }

    /**
     * Ustawia wiele filtrow naraz, forma :
     * @example epPrawo::setFilters(array(epPrawo::STATUS => epPrawoStatus::OBOWIAZUJACY))
     *
     * @param array $filters
     * @return $this
     */
    public function setFilters($filters = array())
    {
        foreach ($filters as $field => $value) {
            if(strpos($field,'f_') == 0) { $field = substr($field, 2);}
            $this->setFilter($field, $value);
        }
        $this->setConfig();
        return $this;
    }

    /**
     * Ustawia pojedynczy filtr
     *
     * @exmaple @example epPrawo::setFilters(epPrawo::STATUS, epPrawoStatus::OBOWIAZUJACY)
     * @param string $field
     * @param int|string $value
     * @return $this
     */
    public function setFilter($field = null, $value = null)
    {
        if(strpos($field,'f_') == 0) { $field = substr($field, 2);}
        if (!isset($this->_settingsDefault['filters'][$field]) || !is_array($this->_settingsDefault['filters'][$field])) {
            $this->_settingsDefault['filters'][$field] = array();
        }
        $this->_settingsDefault['filters'][$field] = array_merge($this->_settingsDefault['filters'][$field], array($value));
        $this->setConfig();
        return $this;
    }

    /**
     * Zwraca obiekt odpowiedzi serwera
     * @return epSocketResponse|null
     */
    public function getResponseObject()
    {
        return $this->response;
    }

    /**
     * Ustawia słowo kluczowe do wyszukiwania
     * @param null $string
     * @return $this
     */
    public function setQueryString($string = null)
    {
        $this->_settingsDefault['queryString'] = $string;
        $this->setConfig();
        return $this;
    }


    /**
     * Ustawia limit rekordow na strone
     *
     * @param null $limit
     * @return $this
     */
    public function setLimit($limit = null)
    {
        $this->_settingsDefault['limit'] = $limit;
        $this->setConfig();
        return $this;
    }

    /**
     * Ustawia offset strony
     *
     * @param null $page
     * @return $this
     */
    public function setPage($page = null)
    {
        $this->_settingsDefault['page'] = $page;
        $this->setConfig();
        return $this;
    }

    /**
     * Ustawia typ odpowiedzi
     *
     * @param string $response
     * @return $this
     */
    public function setResponseType($response = 'json')
    {
        $this->_settingsDefault['responseType'] = $response;
        $this->setConfig();
        return $this;
    }

    /**
     * Ustawia sposob odpowiedzi w kontekscie filtrow i tresci
     * <ul>
     *      <li>epSearch::OUTPUT_FILTERS - zwraca tylko filtry dostępne dla danego zapytania</li>
     *      <li>epSearch::OUTPUT_OBJECT - zwraca tylko obiekty dostępne dla danego zapytania</li>
     *      <li>array(epSearch::OUTPUT_OBJECT,epSearch::OUTPUT_FILTERS) - domyślnie, zwraca kombinację powyższych</li>
     * </ul>
     * @param array|string|null $output
     * @return $this
     */
    public function setOutput($output = array(epSearch::OUTPUT_FILTERS, epSearch::OUTPUT_OBJECTS))
    {
        $this->_settingsDefault['output'] = $output;
        $this->setConfig();
        return $this;
    }

    /**
     * Tworzy socket na potrzebe wykonania żądania
     *
     * @interal
     * @return epSocket
     */
    protected function createSearchSocket()
    {
        $post = http_build_query(array('page' => $this->settings->page, 'limit' => $this->settings->limit, 'output' => $this->settings->output, 'q' => $this->settings->queryString));
        $socket = new epSocket(array(
            'request' => array(
                'post' => $post,
                'url' => ($this->alias) ? $this->alias : 'dane',
                'protocol' => ($this->settings->https) ? 'https' : 'http',
            ),
        ));
        return $socket;
    }

    /**
     * Magiczna metoda, do używania clean<Funkcja>
     * @param $func
     * @param $args
     * @return $this
     */
    public function __call($func, $args)
    {

        $match = array();
        if (preg_match('/clean([a-zA-Z]+)/', $func, $match)) {
            $fmatch = array_pop($match);
            $fmatch = strtolower($fmatch);
            if (isset($this->_settingsDefault[$fmatch])) {
                $this->_settingsDefault[$fmatch] = array();
            }
        } else if (preg_match('/getPagination/', $func, $match)) {
            /**
             * @see epSocketResponse::getPagination()
             */
            return $this->response->getPagination(array_pop($args));
        }
        $this->setConfig();
        return $this;
    }

    /**
     * Sprawdza czy są dostępne wyniki dla ostatniego zapytania
     * @return bool
     */
    public function hasResults()
    {
        if (count((array)$this->response->getPagination('total')) > 0) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * Get na epDataset wywoluje get na obiekcie epSocketResponse
     * @param $attr
     * @return mixed
     */
    public function __get($attr)
    {
        return $this->response->{$attr};
    }

    /**
     * Zwraca array sparsowanych obiektow
     * @return epObjects[]
     */
    public function getObjects()
    {
        $objects = $this->response->getBodyObjects();
        foreach ($objects as $object) {
            if (isset($object['data'])) {
                array_push($this->objects, new epObject($object));
            }
        }
        return $this->objects;
    }

    /**
     * Alias dla setQueryString
     * @param null $string
     * @return $this
     * @see epSearch::setQueryString()
     */
    public function setQ($string = null)
    {
        return $this->setQueryString($string);
    }

    /**
     * Ustawiamy dataset
     *
     * @param string $alias
     * @return $this
     */
    public function setDataset($alias) {
        $this->alias = $alias;
    }
}