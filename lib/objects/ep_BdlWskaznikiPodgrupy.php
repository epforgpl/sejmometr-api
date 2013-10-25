<?php
/**
 * DataSet: Bank Danych Lokalnych
 * Największa w Polsce baza wskaźników dotyczących sytuacji ekonomicznej i społecznej kraju
 *
 * @package Objects\epBdlWskaznikiPodgrupy
 * @version 0.1 alpha build 93
 * @author Sejmometr REST API lib Generator 1.0 <biuro@epf.org.pl>
 * @link sejmometr.pl
 *
 * @method epBdlWskaznikiPodgrupy cleanFilters()
 * @method epBdlWskaznikiPodgrupy cleanQueryString()
 * @method epBdlWskaznikiPodgrupy cleanSort()
 * @method epBdlWskaznikiPodgrupy cleanResponseType()
 * @method epBdlWskaznikiPodgrupy cleanLimit()
 * @method epBdlWskaznikiPodgrupy cleanPage()
 */

class epBdlWskaznikiPodgrupy extends epDataset
{
	/** 
	 * 
	 * 0 - jeśli najnowsze wartości wskaźników w tej podgrupie są mniejsze niż 3 lata, <br/>n1 - jeśli najnowsze wartości wskaźników w tej podgrupie są większe niż 3 lata.
	 *  
	 */
	const ARCHIWUM = 'f_archiwum';
	/** 
	 * 
	 * 
	 *  
	 */
	const DATA_AKTUALIZACJI = 'f_data_aktualizacji';
	/** 
	 * Grupy
	 * Identyfikator eP_API grupy, do której należy podgrupa.
	 *  
	 */
	const GRUPA_ID = 'f_grupa_id';
	/** 
	 * 
	 * 
	 *  
	 */
	const I = 'f_i';
	/** 
	 * 
	 * Identyfikator eP_API podgrupy.
	 *  
	 */
	const ID = 'f_id';
	/** 
	 * Kategorie
	 * Identyfikator eP_API kategorii, do której należy podgrupa.
	 *  
	 */
	const KATEGORIA_ID = 'f_kategoria_id';
	/** 
	 * 
	 * 
	 *  
	 */
	const LICZBA_ROCZNIKOW = 'f_liczba_rocznikow';
	/** 
	 * 
	 * 
	 *  
	 */
	const LICZBA_WYMIAROW = 'f_liczba_wymiarow';
	/** 
	 * 
	 * Okresy za które dostępne są wartości wskaźników w podgrupie.
	 *  
	 */
	const OKRES = 'f_okres';
	/** 
	 * Poziom danych
	 * 
	 *  
	 */
	const POZIOM_ID = 'f_poziom_id';
	/** 
	 * 
	 * 
	 *  
	 */
	const POZIOM_STR = 'f_poziom_str';
	/** 
	 * Nazwa
	 * Nazwa podgrupy.
	 *  
	 */
	const TYTUL = 'f_tytul';
	/** 
	 * 
	 * 
	 *  
	 */
	const YEARSCOUNT = 'f_yearsCount';
	/** 
	 * 
	 * 
	 * Tytuł grupy wskaźników 
	 */
	const BDL_WSKAZNIKI_GRUPY_TYTUL = 'f_bdl_wskazniki_grupy_tytul';
	/** 
	 * 
	 * 
	 * Tytuł kategorii wskaźników 
	 */
	const BDL_WSKAZNIKI_KATEGORIE_TYTUL = 'f_bdl_wskazniki_kategorie_tytul';
    /**
     * Konstruktor
     *
     * @param array $config ustawienia konfiguracyjne
     * @see epDatasetObject::__construct()
     */
    public function __construct($config = null)
    {
        $this->alias = 'bdl_wskazniki';
        parent::__construct($config);

    }

    /**
     * Zwraca tablicę gotowych obiektów
     * @return array|epBdlWskaznikPodgrupy[]
     */
    public function getObjects()
    {
        $objects = $this->response->getBodyObjects();
        foreach ($objects as $object) {
            if (isset($object['data'])) {
                array_push($this->objects, new epBdlWskaznikPodgrupy($object));
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
 * Obiekt: Bank Danych Lokalnych
 * Największa w Polsce baza wskaźników dotyczących sytuacji ekonomicznej i społecznej kraju
 *
 * Klasa pojedynczego obiektu
 *
 *
 * @package Objects\epBdlWskaznikPodgrupy
 * @version 0.1 alpha build 93
 * @author Sejmometr REST API lib Generator 1.0 <biuro@epf.org.pl>
 * @link sejmometr.pl
 *
 * @property string $archiwum
 * @property string $data_aktualizacji
 * @property string $grupa_id
 * @property string $i
 * @property string $id
 * @property string $kategoria_id
 * @property string $liczba_rocznikow
 * @property string $liczba_wymiarow
 * @property string $okres
 * @property string $poziom_id
 * @property string $poziom_str
 * @property string $tytul
 * @property string $yearsCount
 * @property string $bdl_wskazniki_grupy_tytul $fieldset
 * @property string $bdl_wskazniki_kategorie_tytul $fieldset
 */
class epBdlWskaznikPodgrupy extends epObject
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
        $this->alias = 'bdl_wskazniki';
        parent::__construct($data);
    }

    /**
     * Magiczna metoda do pobierania danych koncowych obiektu
     * @param string $arg
     * @return mixed
     */
    public function __get($arg)
    {
		if($arg == 'bdl_wskazniki_grupy_tytul') { return $this->data['bdl_wskazniki_grupy.tytul']; }
		if($arg == 'bdl_wskazniki_kategorie_tytul') { return $this->data['bdl_wskazniki_kategorie.tytul']; }
        return $this->data->{$arg};
    }

    /**
     * Funkcja do zaladowania jednego konkretnego dokumentu
     *
     * @param int $id
     * @return epBdlWskaznikPodgrupy
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
     * @return epBdlWskaznikPodgrupy
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