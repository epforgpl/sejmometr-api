<?php
/**
 * DataSet: Teksty jednolite ustaw
 * Teksty wszystkich, obowiązujących ustaw, ujednolicone przez pracowników Kancelarii Sejmu (baza ISAP).
 *
 * @package Objects\epUstawy
 * @version 0.1 alpha build 93
 * @author Sejmometr REST API lib Generator 1.0 <biuro@epf.org.pl>
 * @link sejmometr.pl
 *
 * @method epUstawy cleanFilters()
 * @method epUstawy cleanQueryString()
 * @method epUstawy cleanSort()
 * @method epUstawy cleanResponseType()
 * @method epUstawy cleanLimit()
 * @method epUstawy cleanPage()
 */

class epUstawy extends epDataset
{
	/** 
	 * Data publikacji
	 * 
	 *  
	 */
	const PRAWO_DATA_PUBLIKACJI = 'f_prawo_data_publikacji';
	/** 
	 * 
	 * 
	 *  
	 */
	const PRAWO_DATA_WEJSCIA_W_ZYCIE = 'f_prawo_data_wejscia_w_zycie';
	/** 
	 * Data wydania
	 * 
	 *  
	 */
	const PRAWO_DATA_WYDANIA = 'f_prawo_data_wydania';
	/** 
	 * 
	 * 
	 *  
	 */
	const PRAWO_ISAP_UWAGI_STR = 'f_prawo_isap_uwagi_str';
	/** 
	 * 
	 * 
	 *  
	 */
	const PRAWO_STATUS_ID = 'f_prawo_status_id';
	/** 
	 * Sygnatura
	 * 
	 *  
	 */
	const PRAWO_SYGNATURA = 'f_prawo_sygnatura';
	/** 
	 * Tytuł
	 * 
	 *  
	 */
	const PRAWO_TYTUL = 'f_prawo_tytul';
	/** 
	 * 
	 * 
	 *  
	 */
	const PRAWO_TYTUL_SKROCONY = 'f_prawo_tytul_skrocony';
	/** 
	 * 
	 * 
	 * ID dokumentu, zawierającego aktualny tekst, jednolity ustawy 
	 */
	const DOKUMENT_ID = 'f_dokument_id';
	/** 
	 * 
	 * 
	 *  
	 */
	const ID = 'f_id';
	/** 
	 * 
	 * 
	 * ID aktu prawnego (	
	 * @see epPrawo 
	 * ), będącego publikacją pierwszej wersji ustawy 
	 */
	const PRAWO_ID = 'f_prawo_id';
	/** 
	 * 
	 * 
	 *  
	 */
	const TYP_ID = 'f_typ_id';
    /**
     * Konstruktor
     *
     * @param array $config ustawienia konfiguracyjne
     * @see epDatasetObject::__construct()
     */
    public function __construct($config = null)
    {
        $this->alias = 'ustawy';
        parent::__construct($config);

    }

    /**
     * Zwraca tablicę gotowych obiektów
     * @return array|epUstawa[]
     */
    public function getObjects()
    {
        $objects = $this->response->getBodyObjects();
        foreach ($objects as $object) {
            if (isset($object['data'])) {
                array_push($this->objects, new epUstawa($object));
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
 * Obiekt: Teksty jednolite ustaw
 * Teksty wszystkich, obowiązujących ustaw, ujednolicone przez pracowników Kancelarii Sejmu (baza ISAP).
 *
 * Klasa pojedynczego obiektu
 *
 *
 * @package Objects\epUstawa
 * @version 0.1 alpha build 93
 * @author Sejmometr REST API lib Generator 1.0 <biuro@epf.org.pl>
 * @link sejmometr.pl
 *
 * @property string $prawo_data_publikacji $fieldset
 * @property string $prawo_data_wejscia_w_zycie $fieldset
 * @property string $prawo_data_wydania $fieldset
 * @property string $prawo_isap_uwagi_str $fieldset
 * @property string $prawo_status_id $fieldset
 * @property string $prawo_sygnatura $fieldset
 * @property string $prawo_tytul $fieldset
 * @property string $prawo_tytul_skrocony $fieldset
 * @property string $dokument_id
 * @property string $id
 * @property string $prawo_id
 * @property string $typ_id
 */
class epUstawa extends epObject
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
        $this->alias = 'ustawy';
        parent::__construct($data);
    }

    /**
     * Magiczna metoda do pobierania danych koncowych obiektu
     * @param string $arg
     * @return mixed
     */
    public function __get($arg)
    {
		if($arg == 'prawo_data_publikacji') { return $this->data['prawo.data_publikacji']; }
		if($arg == 'prawo_data_wejscia_w_zycie') { return $this->data['prawo.data_wejscia_w_zycie']; }
		if($arg == 'prawo_data_wydania') { return $this->data['prawo.data_wydania']; }
		if($arg == 'prawo_isap_uwagi_str') { return $this->data['prawo.isap_uwagi_str']; }
		if($arg == 'prawo_status_id') { return $this->data['prawo.status_id']; }
		if($arg == 'prawo_sygnatura') { return $this->data['prawo.sygnatura']; }
		if($arg == 'prawo_tytul') { return $this->data['prawo.tytul']; }
		if($arg == 'prawo_tytul_skrocony') { return $this->data['prawo.tytul_skrocony']; }
        return $this->data->{$arg};
    }

    /**
     * Funkcja do zaladowania jednego konkretnego dokumentu
     *
     * @param int $id
     * @return epUstawa
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
     * @return epUstawa
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