<?php
/**
 * DataSet: Projekty uchwał
 * Baza projektów uchwał złożonych w Sejmie 7-ej kadencji.
 *
 * @package Objects\epLegislacjaProjektyUchwal
 * @version 0.1 alpha build 93
 * @author Sejmometr REST API lib Generator 1.0 <biuro@epf.org.pl>
 * @link sejmometr.pl
 *
 * @method epLegislacjaProjektyUchwal cleanFilters()
 * @method epLegislacjaProjektyUchwal cleanQueryString()
 * @method epLegislacjaProjektyUchwal cleanSort()
 * @method epLegislacjaProjektyUchwal cleanResponseType()
 * @method epLegislacjaProjektyUchwal cleanLimit()
 * @method epLegislacjaProjektyUchwal cleanPage()
 */

class epLegislacjaProjektyUchwal extends epDataset
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
	 * Kod HTML zawierający nazwy i avatary autorów projektu 
	 */
	const AUTORZY_HTML = 'f_autorzy_html';
	/** 
	 * 
	 * 
	 * Fraza, zawierająca nazwy autorów projektu 
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
	 * 
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
	const ID = 'f_id';
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
	 * Status
	 * 
	 *  
	 */
	const STATUS_ID = 'f_status_id';
	/** 
	 * 
	 * 
	 * Fraza określająca aktualny stan prac nad projektem 
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
	 * Tytuł projektu 
	 */
	const TYTUL = 'f_tytul';
	/** 
	 * 
	 * 
	 *  
	 */
	const TYTUL_SKROCONY = 'f_tytul_skrocony';
    /**
     * Konstruktor
     *
     * @param array $config ustawienia konfiguracyjne
     * @see epDatasetObject::__construct()
     */
    public function __construct($config = null)
    {
        $this->alias = 'legislacja_projekty_uchwal';
        parent::__construct($config);

    }

    /**
     * Zwraca tablicę gotowych obiektów
     * @return array|epLegislacjaProjektUchwaly[]
     */
    public function getObjects()
    {
        $objects = $this->response->getBodyObjects();
        foreach ($objects as $object) {
            if (isset($object['data'])) {
                array_push($this->objects, new epLegislacjaProjektUchwaly($object));
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
 * Obiekt: Projekty uchwał
 * Baza projektów uchwał złożonych w Sejmie 7-ej kadencji.
 *
 * Klasa pojedynczego obiektu
 *
 *
 * @package Objects\epLegislacjaProjektUchwaly
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
 * @property string $id
 * @property string $nadrzedny
 * @property string $nadrzedny_projekt_id
 * @property string $opis
 * @property string $opis_skrocony
 * @property string $ostatnia_tresc_etap_id
 * @property string $ostatni_etap_id
 * @property string $podrzedny
 * @property string $rcl_projekt_id
 * @property string $status_id
 * @property string $status_str
 * @property string $typ_id
 * @property string $tytul
 * @property string $tytul_skrocony
 */
class epLegislacjaProjektUchwaly extends epObject
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
        $this->alias = 'legislacja_projekty_uchwal';
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
        return $this->data->{$arg};
    }

    /**
     * Funkcja do zaladowania jednego konkretnego dokumentu
     *
     * @param int $id
     * @return epLegislacjaProjektUchwaly
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
     * @return epLegislacjaProjektUchwaly
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