<?php
/**
 * DataSet: Strony
 * Strony monitorowanych portali
 *
 * @package Objects\epCrawlerPages
 * @version 0.1 alpha build 93
 * @author Sejmometr REST API lib Generator 1.0 <biuro@epf.org.pl>
 * @link sejmometr.pl
 *
 * @method epCrawlerPages cleanFilters()
 * @method epCrawlerPages cleanQueryString()
 * @method epCrawlerPages cleanSort()
 * @method epCrawlerPages cleanResponseType()
 * @method epCrawlerPages cleanLimit()
 * @method epCrawlerPages cleanPage()
 */

class epCrawlerPages extends epDataset
{
	/** 
	 * 
	 * 
	 * Typ zawartości strony (zgodny z MIME) 
	 */
	const CONTENT_TYPE = 'f_content_type';
	/** 
	 * 
	 * 
	 * Data pobrania ostatniej wersji strony przez crawler 
	 */
	const DATA_MODYFIKACJI = 'f_data_modyfikacji';
	/** 
	 * 
	 * 
	 * Data pierwszego pobrania strony przez crawler 
	 */
	const DATA_UTWORZENIA = 'f_data_utworzenia';
	/** 
	 * 
	 * 
	 *  
	 */
	const ID = 'f_id';
	/** 
	 * 
	 * 
	 * Rozmiar kodu HTML strony (w bajtach) 
	 */
	const LICZBA_ROZMIAR = 'f_liczba_rozmiar';
	/** 
	 * 
	 * 
	 * Hash MD5 wygenerowany z adresu URL strony 
	 */
	const MD5_URL = 'f_md5_url';
	/** 
	 * 
	 * 
	 * Adres URL poprzedniej strony, którą pobrał crawler i która zawierała link do danej strony 
	 */
	const REFERER = 'f_referer';
	/** 
	 * 
	 * 
	 * ID portalu (	
	 * @see epCrawlerSites 
	 * ), którego częścią jest strona 
	 */
	const SITE_ID = 'f_site_id';
	/** 
	 * 
	 * 
	 * Tytuł strony (na podstawie znaczika TITLE w kodzie HTML strony) 
	 */
	const TITLE = 'f_title';
	/** 
	 * 
	 * 
	 * Adres URL strony 
	 */
	const URL = 'f_url';
	/** 
	 * 
	 * 
	 * Nazwa portalu 
	 */
	const CRAWLER_SITES_NAZWA = 'f_crawler_sites_nazwa';
    /**
     * Konstruktor
     *
     * @param array $config ustawienia konfiguracyjne
     * @see epDatasetObject::__construct()
     */
    public function __construct($config = null)
    {
        $this->alias = 'crawler_pages';
        parent::__construct($config);

    }

    /**
     * Zwraca tablicę gotowych obiektów
     * @return array|epCrawlerPage[]
     */
    public function getObjects()
    {
        $objects = $this->response->getBodyObjects();
        foreach ($objects as $object) {
            if (isset($object['data'])) {
                array_push($this->objects, new epCrawlerPage($object));
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
 * Obiekt: Strony
 * Strony monitorowanych portali
 *
 * Klasa pojedynczego obiektu
 *
 *
 * @package Objects\epCrawlerPage
 * @version 0.1 alpha build 93
 * @author Sejmometr REST API lib Generator 1.0 <biuro@epf.org.pl>
 * @link sejmometr.pl
 *
 * @property string $content_type
 * @property string $data_modyfikacji
 * @property string $data_utworzenia
 * @property string $id
 * @property string $liczba_rozmiar
 * @property string $md5_url
 * @property string $referer
 * @property string $site_id
 * @property string $title
 * @property string $url
 * @property string $crawler_sites_nazwa $fieldset
 */
class epCrawlerPage extends epObject
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
        $this->alias = 'crawler_pages';
        parent::__construct($data);
    }

    /**
     * Magiczna metoda do pobierania danych koncowych obiektu
     * @param string $arg
     * @return mixed
     */
    public function __get($arg)
    {
		if($arg == 'crawler_sites_nazwa') { return $this->data['crawler_sites.nazwa']; }
        return $this->data->{$arg};
    }

    /**
     * Funkcja do zaladowania jednego konkretnego dokumentu
     *
     * @param int $id
     * @return epCrawlerPage
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
     * @return epCrawlerPage
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