<?php
/**
 * DataSet: Portale
 * Monitorowane portale
 *
 * @package Objects\epCrawlerSites
 * @version 0.1 alpha build 93
 * @author Sejmometr REST API lib Generator 1.0 <biuro@epf.org.pl>
 * @link sejmometr.pl
 *
 * @method epCrawlerSites cleanFilters()
 * @method epCrawlerSites cleanQueryString()
 * @method epCrawlerSites cleanSort()
 * @method epCrawlerSites cleanResponseType()
 * @method epCrawlerSites cleanLimit()
 * @method epCrawlerSites cleanPage()
 */

class epCrawlerSites extends epDataset
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
     * @see epDatasetObject::__construct()
     */
    public function __construct($config = null)
    {
        $this->alias = 'crawler_sites';
        parent::__construct($config);

    }

    /**
     * Zwraca tablicę gotowych obiektów
     * @return array|epCrawlerSite[]
     */
    public function getObjects()
    {
        $objects = $this->response->getBodyObjects();
        foreach ($objects as $object) {
            if (isset($object['data'])) {
                array_push($this->objects, new epCrawlerSite($object));
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
 * @package Objects\epCrawlerSite
 * @version 0.1 alpha build 93
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
class epCrawlerSite extends epObject
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
     * @return epCrawlerSite
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
     * @return epCrawlerSite
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