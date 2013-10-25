<?php
/**
 * DataSet: Portale
 * Monitorowane portale
 *
 * @package Objects\ep_CrawlerSites
 * @version 0.1 alpha build 99
 * @author Sejmometr REST API lib Generator 1.0 <biuro@epf.org.pl>
 * @link sejmometr.pl
 *
 * @method ep_CrawlerSites cleanFilters()
 * @method ep_CrawlerSites cleanQueryString()
 * @method ep_CrawlerSites cleanSort()
 * @method ep_CrawlerSites cleanResponseType()
 * @method ep_CrawlerSites cleanLimit()
 * @method ep_CrawlerSites cleanPage()
 */

class ep_CrawlerSites extends ep_Dataset
{
	/** 
	 * 
	 * 
	 * Data pobrania ostatniej, nowej treści z danego portalu przez crawler 
	 */
	const DATA_MODYFIKACJI = 'f_data_modyfikacji';
	/** 
	 * 
	 * 
	 *  
	 */
	const ID = 'f_id';
	/** 
	 * 
	 * 
	 * Liczba stron (adresów URL) w portalu 
	 */
	const LICZBA_DOKUMENTOW = 'f_liczba_dokumentow';
	/** 
	 * 
	 * 
	 * Liczba linków w danym portalu 
	 */
	const LICZBA_LINKOW = 'f_liczba_linkow';
	/** 
	 * 
	 * 
	 * Nazwa portalu 
	 */
	const NAZWA = 'f_nazwa';
	/** 
	 * 
	 * 
	 * Główny adres URL portalu 
	 */
	const URL = 'f_url';
    /**
     * Konstruktor
     *
     * @param array $config ustawienia konfiguracyjne
     * @see ep_DatasetObject::__construct()
     */
    public function __construct($config = null)
    {
        $this->alias = 'crawler_sites';
        parent::__construct($config);

    }

    /**
     * Zwraca tablicę gotowych obiektów
     * @return array|ep_CrawlerSite[]
     */
    public function getObjects()
    {
        $objects = $this->response->getBodyObjects();
        foreach ($objects as $object) {
            if (isset($object['data'])) {
                array_push($this->objects, new ep_CrawlerSite($object));
            }
        }
        return $this->objects;
    }
}



/**
 *
 * Jeszcze nie ma generacji
 * {%ENUMS%}
 *
 *
 */

/**
 * Obiekt: Portale
 * Monitorowane portale
 *
 * Klasa pojedynczego obiektu
 *
 *
 * @package Objects\ep_CrawlerSite
 * @version 0.1 alpha build 99
 * @author Sejmometr REST API lib Generator 1.0 <biuro@epf.org.pl>
 * @link sejmometr.pl
 *
 * @property string $data_modyfikacji
 * @property string $id
 * @property string $liczba_dokumentow
 * @property string $liczba_linkow
 * @property string $nazwa
 * @property string $url
 */
class ep_CrawlerSite extends ep_Object
{
    /**
     * Pola obiektu
     * @var array|ArrayObject
     */
    public $data;
    /**
     * Dostępne warstwy
     *
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
     * Kontruktor, nic ciekawego, keep going
     * @param array $data  - dane z odpowiedzi
     */
    public function __construct($data = array())
    {
        $this->alias = 'crawler_sites';
        parent::__construct($data);
    }

    /**
     * Magiczna metoda do pobierania danych koncowych obiektu
     * @param string $arg
     * @return mixed
     */
    public function __get($arg)
    {

        return $this->data->{$arg};
    }

    /**
     * Funkcja do zaladowania jednego konkretnego dokumentu
     *
     * @param int $id
     * @return ep_CrawlerSite
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
     * @return ep_CrawlerSite
     */
    public function loadLayer($layer)
    {
        $socket = $this->createLayerSocket($layer);
        $this->response = $socket->request();
        $body = $this->response->getBody();
        $body['id'] = $body['data']['id'];
        $this->__construct($body);
        return $this;
    }
}
?>