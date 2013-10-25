<?php
/**
 * DataSet: Radni gmin
 * Radni gmin w Polsce
 *
 * @package Objects\epRadniGmin
 * @version 0.1 alpha build 93
 * @author Sejmometr REST API lib Generator 1.0 <biuro@epf.org.pl>
 * @link sejmometr.pl
 *
 * @method epRadniGmin cleanFilters()
 * @method epRadniGmin cleanQueryString()
 * @method epRadniGmin cleanSort()
 * @method epRadniGmin cleanResponseType()
 * @method epRadniGmin cleanLimit()
 * @method epRadniGmin cleanPage()
 */

class epRadniGmin extends epDataset
{
	/** 
	 * 
	 * 
	 *  
	 */
	const GMINY_ID = 'f_gminy_id';
	/** 
	 * 
	 * 
	 * Nazwa gminy 
	 */
	const GMINY_NAZWA = 'f_gminy_nazwa';
	/** 
	 * 
	 * 
	 * ID powiatu (	
	 * @see epPowiaty 
	 * ), do którego należy gmina 
	 */
	const GMINY_POWIAT_ID = 'f_gminy_powiat_id';
	/** 
	 * 
	 * 
	 * Pełna nazwa rady gminy 
	 */
	const GMINY_RADA_NAZWA = 'f_gminy_rada_nazwa';
	/** 
	 * 
	 * 
	 * Typ gminy.
	 * Dostępne wartości:
	 * 1 - gmina miejska
	 * 2 - gmina wiejska
	 * 3 - gmina miejsko-wiejska
	 * 4 - gmina miejska, miasto stołeczne 
	 */
	const GMINY_TYP_ID = 'f_gminy_typ_id';
	/** 
	 * 
	 * 
	 * ID województwa (	
	 * @see epWojewodztwa 
	 * ), do którego należy gmina 
	 */
	const GMINY_WOJEWODZTWO_ID = 'f_gminy_wojewodztwo_id';
	/** 
	 * 
	 * 
	 *  
	 */
	const BEZ_WYBOROW = 'f_bez_wyborow';
	/** 
	 * 
	 * 
	 *  
	 */
	const GMINA_ID = 'f_gmina_id';
	/** 
	 * 
	 * 
	 *  
	 */
	const GMINA_ZAMIESZKANIA_ID = 'f_gmina_zamieszkania_id';
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
	const IMIONA = 'f_imiona';
	/** 
	 * 
	 * 
	 *  
	 */
	const KOMITET_ID = 'f_komitet_id';
	/** 
	 * 
	 * 
	 *  
	 */
	const LICZBA_GLOSOW = 'f_liczba_glosow';
	/** 
	 * 
	 * 
	 *  
	 */
	const MIEJSCE_ZAMIESZKANIA = 'f_miejsce_zamieszkania';
	/** 
	 * 
	 * 
	 *  
	 */
	const NAZWA = 'f_nazwa';
	/** 
	 * 
	 * 
	 *  
	 */
	const NAZWA_REV = 'f_nazwa_rev';
	/** 
	 * 
	 * 
	 *  
	 */
	const NAZWISKO = 'f_nazwisko';
	/** 
	 * 
	 * 
	 *  
	 */
	const NUMER_LISTY = 'f_numer_listy';
	/** 
	 * 
	 * 
	 *  
	 */
	const OBYWATELSTWO = 'f_obywatelstwo';
	/** 
	 * 
	 * 
	 *  
	 */
	const OKREG_ID = 'f_okreg_id';
	/** 
	 * 
	 * 
	 *  
	 */
	const OSWIADCZENIE = 'f_oswiadczenie';
	/** 
	 * 
	 * 
	 *  
	 */
	const PLEC = 'f_plec';
	/** 
	 * 
	 * 
	 *  
	 */
	const POPARCIE = 'f_poparcie';
	/** 
	 * 
	 * 
	 *  
	 */
	const POZYCJA = 'f_pozycja';
	/** 
	 * 
	 * 
	 *  
	 */
	const PROCENT_GLOSOW_W_OKREGU = 'f_procent_glosow_w_okregu';
	/** 
	 * 
	 * 
	 *  
	 */
	const ROK_URODZENIA = 'f_rok_urodzenia';
	/** 
	 * 
	 * 
	 *  
	 */
	const WYBRANY = 'f_wybrany';
	/** 
	 * 
	 * 
	 *  
	 */
	const RADY_GMIN_KOMITETY_NAZWA = 'f_rady_gmin_komitety_nazwa';
	/** 
	 * 
	 * 
	 *  
	 */
	const RADY_GMIN_KOMITETY_PARTIA_TYP = 'f_rady_gmin_komitety_partia_typ';
	/** 
	 * 
	 * 
	 *  
	 */
	const RADY_GMIN_KOMITETY_SKROT_NAZWY = 'f_rady_gmin_komitety_skrot_nazwy';
	/** 
	 * 
	 * 
	 *  
	 */
	const RADY_GMIN_KOMITETY_TYP = 'f_rady_gmin_komitety_typ';
	/** 
	 * 
	 * 
	 *  
	 */
	const RADY_GMIN_OKREGI_NR_OKREGU = 'f_rady_gmin_okregi_nr_okregu';
    /**
     * Konstruktor
     *
     * @param array $config ustawienia konfiguracyjne
     * @see epDatasetObject::__construct()
     */
    public function __construct($config = null)
    {
        $this->alias = 'radni_gmin';
        parent::__construct($config);

    }

    /**
     * Zwraca tablicę gotowych obiektów
     * @return array|epRadnyGminy[]
     */
    public function getObjects()
    {
        $objects = $this->response->getBodyObjects();
        foreach ($objects as $object) {
            if (isset($object['data'])) {
                array_push($this->objects, new epRadnyGminy($object));
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
 * Obiekt: Radni gmin
 * Radni gmin w Polsce
 *
 * Klasa pojedynczego obiektu
 *
 *
 * @package Objects\epRadnyGminy
 * @version 0.1 alpha build 93
 * @author Sejmometr REST API lib Generator 1.0 <biuro@epf.org.pl>
 * @link sejmometr.pl
 *
 * @property string $gminy_id $fieldset
 * @property string $gminy_nazwa $fieldset
 * @property string $gminy_powiat_id $fieldset
 * @property string $gminy_rada_nazwa $fieldset
 * @property string $gminy_typ_id $fieldset
 * @property string $gminy_wojewodztwo_id $fieldset
 * @property string $bez_wyborow
 * @property string $gmina_id
 * @property string $gmina_zamieszkania_id
 * @property string $id
 * @property string $imiona
 * @property string $komitet_id
 * @property string $liczba_glosow
 * @property string $miejsce_zamieszkania
 * @property string $nazwa
 * @property string $nazwa_rev
 * @property string $nazwisko
 * @property string $numer_listy
 * @property string $obywatelstwo
 * @property string $okreg_id
 * @property string $oswiadczenie
 * @property string $plec
 * @property string $poparcie
 * @property string $pozycja
 * @property string $procent_glosow_w_okregu
 * @property string $rok_urodzenia
 * @property string $wybrany
 * @property string $rady_gmin_komitety_nazwa $fieldset
 * @property string $rady_gmin_komitety_partia_typ $fieldset
 * @property string $rady_gmin_komitety_skrot_nazwy $fieldset
 * @property string $rady_gmin_komitety_typ $fieldset
 * @property string $rady_gmin_okregi_nr_okregu $fieldset
 */
class epRadnyGminy extends epObject
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
        $this->alias = 'radni_gmin';
        parent::__construct($data);
    }

    /**
     * Magiczna metoda do pobierania danych koncowych obiektu
     * @param string $arg
     * @return mixed
     */
    public function __get($arg)
    {
		if($arg == 'gminy_id') { return $this->data['gminy.id']; }
		if($arg == 'gminy_nazwa') { return $this->data['gminy.nazwa']; }
		if($arg == 'gminy_powiat_id') { return $this->data['gminy.powiat_id']; }
		if($arg == 'gminy_rada_nazwa') { return $this->data['gminy.rada_nazwa']; }
		if($arg == 'gminy_typ_id') { return $this->data['gminy.typ_id']; }
		if($arg == 'gminy_wojewodztwo_id') { return $this->data['gminy.wojewodztwo_id']; }
		if($arg == 'rady_gmin_komitety_nazwa') { return $this->data['rady_gmin_komitety.nazwa']; }
		if($arg == 'rady_gmin_komitety_partia_typ') { return $this->data['rady_gmin_komitety.partia_typ']; }
		if($arg == 'rady_gmin_komitety_skrot_nazwy') { return $this->data['rady_gmin_komitety.skrot_nazwy']; }
		if($arg == 'rady_gmin_komitety_typ') { return $this->data['rady_gmin_komitety.typ']; }
		if($arg == 'rady_gmin_okregi_nr_okregu') { return $this->data['rady_gmin_okregi.nr_okregu']; }
        return $this->data->{$arg};
    }

    /**
     * Funkcja do zaladowania jednego konkretnego dokumentu
     *
     * @param int $id
     * @return epRadnyGminy
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
     * @return epRadnyGminy
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