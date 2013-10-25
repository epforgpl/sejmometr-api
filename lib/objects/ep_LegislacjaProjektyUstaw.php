<?php
/**
 * DataSet: Projekty ustaw
 * Kompleksowy wgląd w proces legislacyjny w Polsce. Baza projektów ustaw, na wszystkich etapach prac legislacyjnych.
 *
 * @package Objects\epLegislacjaProjektyUstaw
 * @version 0.1 alpha build 93
 * @author Sejmometr REST API lib Generator 1.0 <biuro@epf.org.pl>
 * @link sejmometr.pl
 *
 * @method epLegislacjaProjektyUstaw cleanFilters()
 * @method epLegislacjaProjektyUstaw cleanQueryString()
 * @method epLegislacjaProjektyUstaw cleanSort()
 * @method epLegislacjaProjektyUstaw cleanResponseType()
 * @method epLegislacjaProjektyUstaw cleanLimit()
 * @method epLegislacjaProjektyUstaw cleanPage()
 */

class epLegislacjaProjektyUstaw extends epDataset
{
	/** 
	 * Autor projektu
	 * 
	 *  
	 */
	const INSTYTUCJE_ID = 'f_instytucje_id';
	/** 
	 * 
	 * 
	 *  
	 */
	const AUTORZY_HTML = 'f_autorzy_html';
	/** 
	 * 
	 * 
	 *  
	 */
	const AUTORZY_STR = 'f_autorzy_str';
	/** 
	 * 
	 * 
	 *  
	 */
	const AUTOR_TYP_ID = 'f_autor_typ_id';
	/** 
	 * Data rozpoczęcia prac
	 * 
	 *  
	 */
	const DATA = 'f_data';
	/** 
	 * Identyfikator dokumentu zawierającego najbardziej aktualny tekst projektu
	 * 
	 *  
	 */
	const DOKUMENT_ID = 'f_dokument_id';
	/** 
	 * 
	 * 
	 *  
	 */
	const DRUKI_STR = 'f_druki_str';
	/** 
	 * 
	 * 
	 *  
	 */
	const DRUK_ID = 'f_druk_id';
	/** 
	 * Faza prac
	 * 
	 *  
	 */
	const FAZA_ID = 'f_faza_id';
	/** 
	 * 
	 * 
	 *  
	 */
	const ID = 'f_id';
	/** 
	 * 
	 * 
	 *  
	 */
	const KONSULTACJE_DLUGOSC = 'f_konsultacje_dlugosc';
	/** 
	 * 
	 * 
	 *  
	 */
	const KONSULTACJE_STATUS = 'f_konsultacje_status';
	/** 
	 * 
	 * 
	 *  
	 */
	const KONSULTACJE_STR = 'f_konsultacje_str';
	/** 
	 * 
	 * 
	 *  
	 */
	const MP_DATA = 'f_mp_data';
	/** 
	 * 
	 * 
	 *  
	 */
	const NADRZEDNY = 'f_nadrzedny';
	/** 
	 * 
	 * 
	 *  
	 */
	const NADRZEDNY_PROJEKT_ID = 'f_nadrzedny_projekt_id';
	/** 
	 * Opis
	 * 
	 *  
	 */
	const OPIS = 'f_opis';
	/** 
	 * 
	 * 
	 *  
	 */
	const OPIS_SKROCONY = 'f_opis_skrocony';
	/** 
	 * 
	 * 
	 *  
	 */
	const OSTATNIA_TRESC_ETAP_ID = 'f_ostatnia_tresc_etap_id';
	/** 
	 * 
	 * 
	 *  
	 */
	const OSTATNI_ETAP_ID = 'f_ostatni_etap_id';
	/** 
	 * 
	 * 
	 *  
	 */
	const PODRZEDNY = 'f_podrzedny';
	/** 
	 * 
	 * 
	 *  
	 */
	const RCL_PROJEKT_ID = 'f_rcl_projekt_id';
	/** 
	 * 
	 * 
	 *  
	 */
	const STATUS_DATA = 'f_status_data';
	/** 
	 * Status
	 * 
	 *  
	 */
	const STATUS_ID = 'f_status_id';
	/** 
	 * 
	 * 
	 *  
	 */
	const STATUS_STR = 'f_status_str';
	/** 
	 * 
	 * 
	 *  
	 */
	const TYP_ID = 'f_typ_id';
	/** 
	 * Tytuł
	 * 
	 *  
	 */
	const TYTUL = 'f_tytul';
	/** 
	 * 
	 * 
	 *  
	 */
	const TYTUL_SKROCONY = 'f_tytul_skrocony';
	/** 
	 * 
	 * 
	 *  
	 */
	const WNIESIONY_PROJEKT_ID = 'f_wniesiony_projekt_id';
	/** 
	 * Zmieniane ustawy
	 * 
	 *  
	 */
	const USTAWY_ID = 'f_ustawy_id';
    /**
     * Konstruktor
     *
     * @param array $config ustawienia konfiguracyjne
     * @see epDatasetObject::__construct()
     */
    public function __construct($config = null)
    {
        $this->alias = 'legislacja_projekty_ustaw';
        parent::__construct($config);

    }

    /**
     * Zwraca tablicę gotowych obiektów
     * @return array|epLegislacjaProjektUstawy[]
     */
    public function getObjects()
    {
        $objects = $this->response->getBodyObjects();
        foreach ($objects as $object) {
            if (isset($object['data'])) {
                array_push($this->objects, new epLegislacjaProjektUstawy($object));
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
 * Obiekt: Projekty ustaw
 * Kompleksowy wgląd w proces legislacyjny w Polsce. Baza projektów ustaw, na wszystkich etapach prac legislacyjnych.
 *
 * Klasa pojedynczego obiektu
 *
 *
 * @package Objects\epLegislacjaProjektUstawy
 * @version 0.1 alpha build 93
 * @author Sejmometr REST API lib Generator 1.0 <biuro@epf.org.pl>
 * @link sejmometr.pl
 *
 * @property string $instytucje_id $fieldset
 * @property string $autorzy_html
 * @property string $autorzy_str
 * @property string $autor_typ_id
 * @property string $data
 * @property string $dokument_id
 * @property string $druki_str
 * @property string $druk_id
 * @property string $faza_id
 * @property string $id
 * @property string $konsultacje_dlugosc
 * @property string $konsultacje_status
 * @property string $konsultacje_str
 * @property string $mp_data
 * @property string $nadrzedny
 * @property string $nadrzedny_projekt_id
 * @property string $opis
 * @property string $opis_skrocony
 * @property string $ostatnia_tresc_etap_id
 * @property string $ostatni_etap_id
 * @property string $podrzedny
 * @property string $rcl_projekt_id
 * @property string $status_data
 * @property string $status_id
 * @property string $status_str
 * @property string $typ_id
 * @property string $tytul
 * @property string $tytul_skrocony
 * @property string $wniesiony_projekt_id
 * @property string $ustawy_id $fieldset
 */
class epLegislacjaProjektUstawy extends epObject
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
        $this->alias = 'legislacja_projekty_ustaw';
        parent::__construct($data);
    }

    /**
     * Magiczna metoda do pobierania danych koncowych obiektu
     * @param string $arg
     * @return mixed
     */
    public function __get($arg)
    {
		if($arg == 'instytucje_id') { return $this->data['instytucje.id']; }
		if($arg == 'ustawy_id') { return $this->data['ustawy.id']; }
        return $this->data->{$arg};
    }

    /**
     * Funkcja do zaladowania jednego konkretnego dokumentu
     *
     * @param int $id
     * @return epLegislacjaProjektUstawy
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
     * @return epLegislacjaProjektUstawy
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