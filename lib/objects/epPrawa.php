<?php
/**
 * DataSet: Prawo w publikatorach
 * Akty prawne publikowane w Dzienniku Ustaw i Monitorze Polskim. Zawiera połączone bazy Rządowego Centrum Legislacyjnego oraz Kancelarii Sejmu (baza ISAP).
 *
 * @package Objects\epPrawa
 * @version 0.1 alpha build 93
 * @author Sejmometr REST API lib Generator 1.0 <biuro@epf.org.pl>
 * @link sejmometr.pl
 *
 * @method epPrawa cleanFilters()
 * @method epPrawa cleanQueryString()
 * @method epPrawa cleanSort()
 * @method epPrawa cleanResponseType()
 * @method epPrawa cleanLimit()
 * @method epPrawa cleanPage()
 */

class epPrawa extends epDataset
{
	/** 
	 * Organ wydający
	 * 
	 *  
	 */
	const AUTOR_ID = 'f_autor_id';
	/** 
	 * 
	 * 
	 *  
	 */
	const AUTOR_NAZWA = 'f_autor_nazwa';
	/** 
	 * Data publikacji
	 * 
	 *  
	 */
	const DATA_PUBLIKACJI = 'f_data_publikacji';
	/** 
	 * Data wejścia w życie
	 * 
	 *  
	 */
	const DATA_WEJSCIA_W_ZYCIE = 'f_data_wejscia_w_zycie';
	/** 
	 * Data wydania
	 * 
	 *  
	 */
	const DATA_WYDANIA = 'f_data_wydania';
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
	const ID = 'f_id';
	/** 
	 * Data obowiązywania (ISAP)
	 * 
	 *  
	 */
	const ISAP_DATA_OBOWIAZYWANIA = 'f_isap_data_obowiazywania';
	/** 
	 * 
	 * 
	 *  
	 */
	const ISAP_DATA_OGLOSZENIA = 'f_isap_data_ogloszenia';
	/** 
	 * Data uchylenia (ISAP)
	 * 
	 *  
	 */
	const ISAP_DATA_UCHYLENIA = 'f_isap_data_uchylenia';
	/** 
	 * Data wejścia w życie (ISAP)
	 * 
	 *  
	 */
	const ISAP_DATA_WEJSCIA_W_ZYCIE = 'f_isap_data_wejscia_w_zycie';
	/** 
	 * 
	 * 
	 *  
	 */
	const ISAP_DATA_WYDANIA = 'f_isap_data_wydania';
	/** 
	 * Data wygaśnięcia (ISAP)
	 * 
	 *  
	 */
	const ISAP_DATA_WYGASNIECIA = 'f_isap_data_wygasniecia';
	/** 
	 * 
	 * 
	 *  
	 */
	const ISAP_ID = 'f_isap_id';
	/** 
	 * 
	 * 
	 *  
	 */
	const ISAP_ORGAN_UPRAWNIONY_STR = 'f_isap_organ_uprawniony_str';
	/** 
	 * 
	 * 
	 *  
	 */
	const ISAP_ORGAN_WYDAJACY_STR = 'f_isap_organ_wydajacy_str';
	/** 
	 * 
	 * 
	 *  
	 */
	const ISAP_ORGAN_ZOBOWIAZANY_STR = 'f_isap_organ_zobowiazany_str';
	/** 
	 * 
	 * 
	 *  
	 */
	const ISAP_PLIK_DOKUMENT_ID = 'f_isap_plik_dokument_id';
	/** 
	 * 
	 * 
	 *  
	 */
	const ISAP_PLIK_ID = 'f_isap_plik_id';
	/** 
	 * 
	 * 
	 *  
	 */
	const ISAP_STATUS_STR = 'f_isap_status_str';
	/** 
	 * 
	 * 
	 *  
	 */
	const ISAP_UWAGI_STR = 'f_isap_uwagi_str';
	/** 
	 * 
	 * 
	 *  
	 */
	const LABEL = 'f_label';
	/** 
	 * 
	 * 
	 *  
	 */
	const LABEL_HTML = 'f_label_html';
	/** 
	 * 
	 * 
	 *  
	 */
	const LICZBA_ZALACZNIKOW = 'f_liczba_zalacznikow';
	/** 
	 * 
	 * 
	 *  
	 */
	const NR = 'f_nr';
	/** 
	 * 
	 * 
	 *  
	 */
	const POZ = 'f_poz';
	/** 
	 * 
	 * 
	 *  
	 */
	const ROK = 'f_rok';
	/** 
	 * 
	 * 
	 *  
	 */
	const STATUS_ID = 'f_status_id';
	/** 
	 * Sygnatura
	 * 
	 *  
	 */
	const SYGNATURA = 'f_sygnatura';
	/** 
	 * Typ aktu prawnego
	 * 
	 *  
	 */
	const TYP_ID = 'f_typ_id';
	/** 
	 * 
	 * 
	 *  
	 */
	const TYP_NAZWA = 'f_typ_nazwa';
	/** 
	 * Tytuł
	 * 
	 *  
	 */
	const TYTUL = 'f_tytul';
	/** 
	 * Tytuł skrócony
	 * 
	 *  
	 */
	const TYTUL_SKROCONY = 'f_tytul_skrocony';
	/** 
	 * 
	 * 
	 *  
	 */
	const ZRODLO = 'f_zrodlo';
    /**
     * Konstruktor
     *
     * @param array $config ustawienia konfiguracyjne
     * @see epDatasetObject::__construct()
     */
    public function __construct($config = null)
    {
        $this->alias = 'prawo';
        parent::__construct($config);

    }

    /**
     * Zwraca tablicę gotowych obiektów
     * @return array|epPrawo[]
     */
    public function getObjects()
    {
        $objects = $this->response->getBodyObjects();
        foreach ($objects as $object) {
            if (isset($object['data'])) {
                array_push($this->objects, new epPrawo($object));
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
 * Obiekt: Prawo w publikatorach
 * Akty prawne publikowane w Dzienniku Ustaw i Monitorze Polskim. Zawiera połączone bazy Rządowego Centrum Legislacyjnego oraz Kancelarii Sejmu (baza ISAP).
 *
 * Klasa pojedynczego obiektu
 *
 *
 * @package Objects\epPrawo
 * @version 0.1 alpha build 93
 * @author Sejmometr REST API lib Generator 1.0 <biuro@epf.org.pl>
 * @link sejmometr.pl
 *
 * @property string $autor_id
 * @property string $autor_nazwa
 * @property string $data_publikacji
 * @property string $data_wejscia_w_zycie
 * @property string $data_wydania
 * @property string $dokument_id
 * @property string $id
 * @property string $isap_data_obowiazywania
 * @property string $isap_data_ogloszenia
 * @property string $isap_data_uchylenia
 * @property string $isap_data_wejscia_w_zycie
 * @property string $isap_data_wydania
 * @property string $isap_data_wygasniecia
 * @property string $isap_id
 * @property string $isap_organ_uprawniony_str
 * @property string $isap_organ_wydajacy_str
 * @property string $isap_organ_zobowiazany_str
 * @property string $isap_plik_dokument_id
 * @property string $isap_plik_id
 * @property string $isap_status_str
 * @property string $isap_uwagi_str
 * @property string $label
 * @property string $label_html
 * @property string $liczba_zalacznikow
 * @property string $nr
 * @property string $poz
 * @property string $rok
 * @property string $status_id
 * @property string $sygnatura
 * @property string $typ_id
 * @property string $typ_nazwa
 * @property string $tytul
 * @property string $tytul_skrocony
 * @property string $zrodlo
 */
class epPrawo extends epObject
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
        $this->alias = 'prawo';
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
     * @return epPrawo
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
     * @return epPrawo
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