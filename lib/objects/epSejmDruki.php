<?php
/**
 * DataSet: Druki sejmowe
 * Druki sejmowe to materiały urzędowe dokumentujące prace Sejmu
 *
 * @package Objects\epSejmDruki
 * @version 0.1 alpha build 93
 * @author Sejmometr REST API lib Generator 1.0 <biuro@epf.org.pl>
 * @link sejmometr.pl
 *
 * @method epSejmDruki cleanFilters()
 * @method epSejmDruki cleanQueryString()
 * @method epSejmDruki cleanSort()
 * @method epSejmDruki cleanResponseType()
 * @method epSejmDruki cleanLimit()
 * @method epSejmDruki cleanPage()
 */

class epSejmDruki extends epDataset
{
	/** 
	 * 
	 * Ciąg tekstowy zawierający listę autorów druku.
	 *  
	 */
	const AUTORZY_STR = 'f_autorzy_str';
	/** 
	 * Data
	 * Data wydania druku
	 *  
	 */
	const DATA = 'f_data';
	/** 
	 * 
	 * 
	 *  
	 */
	const DATA_PUBLIKACJI = 'f_data_publikacji';
	/** 
	 * 
	 * Identyfikator eP_API dokumentu zawierającego treść druku.
	 *  
	 */
	const DOKUMENT_ID = 'f_dokument_id';
	/** 
	 * 
	 * Identyfikator eP_API druku.
	 *  
	 */
	const ID = 'f_id';
	/** 
	 * 
	 * Numer druku jako tekst.
	 *  
	 */
	const NUMER = 'f_numer';
	/** 
	 * Numer
	 * Numer druku jako liczba.
	 *  
	 */
	const NUMER_INT = 'f_numer_int';
	/** 
	 * 
	 * Opis druku.
	 *  
	 */
	const OPIS = 'f_opis';
	/** 
	 * Typ druku
	 * Identyfikator eP_API typu druku.
	 *  
	 */
	const TYP_ID = 'f_typ_id';
	/** 
	 * Tytuł
	 * Tytuł druku.
	 *  
	 */
	const TYTUL = 'f_tytul';
	/** 
	 * 
	 * Skrócony tytuł druku.
	 *  
	 */
	const TYTUL_SKROCONY = 'f_tytul_skrocony';
	/** 
	 * 
	 * 
	 *  
	 */
	const SEJM_DRUKI_TYPY_DRUK_TYP_NAZWA = 'f_sejm_druki_typy_druk_typ_nazwa';
    /**
     * Konstruktor
     *
     * @param array $config ustawienia konfiguracyjne
     * @see epDatasetObject::__construct()
     */
    public function __construct($config = null)
    {
        $this->alias = 'sejm_druki';
        parent::__construct($config);

    }

    /**
     * Zwraca tablicę gotowych obiektów
     * @return array|epSejmDruk[]
     */
    public function getObjects()
    {
        $objects = $this->response->getBodyObjects();
        foreach ($objects as $object) {
            if (isset($object['data'])) {
                array_push($this->objects, new epSejmDruk($object));
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
 * Obiekt: Druki sejmowe
 * Druki sejmowe to materiały urzędowe dokumentujące prace Sejmu
 *
 * Klasa pojedynczego obiektu
 *
 *
 * @package Objects\epSejmDruk
 * @version 0.1 alpha build 93
 * @author Sejmometr REST API lib Generator 1.0 <biuro@epf.org.pl>
 * @link sejmometr.pl
 *
 * @property string $autorzy_str
 * @property string $data
 * @property string $data_publikacji
 * @property string $dokument_id
 * @property string $id
 * @property string $numer
 * @property string $numer_int
 * @property string $opis
 * @property string $typ_id
 * @property string $tytul
 * @property string $tytul_skrocony
 * @property string $sejm_druki_typy_druk_typ_nazwa $fieldset
 */
class epSejmDruk extends epObject
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
        $this->alias = 'sejm_druki';
        parent::__construct($data);
    }

    /**
     * Magiczna metoda do pobierania danych koncowych obiektu
     * @param string $arg
     * @return mixed
     */
    public function __get($arg)
    {
		if($arg == 'sejm_druki_typy_druk_typ_nazwa') { return $this->data['sejm_druki_typy.druk_typ_nazwa']; }
        return $this->data->{$arg};
    }

    /**
     * Funkcja do zaladowania jednego konkretnego dokumentu
     *
     * @param int $id
     * @return epSejmDruk
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
     * @return epSejmDruk
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