<?php
/**
 * DataSet: Zamówienia Publiczne
 * 
 *
 * @package Objects\epZamowieniaPubliczne
 * @version 0.1 alpha build 93
 * @author Sejmometr REST API lib Generator 1.0 <biuro@epf.org.pl>
 * @link sejmometr.pl
 *
 * @method epZamowieniaPubliczne cleanFilters()
 * @method epZamowieniaPubliczne cleanQueryString()
 * @method epZamowieniaPubliczne cleanSort()
 * @method epZamowieniaPubliczne cleanResponseType()
 * @method epZamowieniaPubliczne cleanLimit()
 * @method epZamowieniaPubliczne cleanPage()
 */

class epZamowieniaPubliczne extends epDataset
{
	/** 
	 * 
	 * 
	 *  
	 */
	const BIULETYN_NR = 'f_biuletyn_nr';
	/** 
	 * 
	 * 
	 *  
	 */
	const CPV1C = 'f_cpv1c';
	/** 
	 * 
	 * 
	 *  
	 */
	const CZAS = 'f_czas';
	/** 
	 * 
	 * 
	 *  
	 */
	const CZAS_DNI = 'f_czas_dni';
	/** 
	 * 
	 * 
	 *  
	 */
	const CZAS_MIESIACE = 'f_czas_miesiace';
	/** 
	 * 
	 * 
	 *  
	 */
	const DATA_PUBLIKACJI = 'f_data_publikacji';
	/** 
	 * 
	 * 
	 *  
	 */
	const DATA_START = 'f_data_start';
	/** 
	 * 
	 * 
	 *  
	 */
	const DATA_STOP = 'f_data_stop';
	/** 
	 * 
	 * 
	 *  
	 */
	const DSZ_WWW = 'f_dsz_www';
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
	const ID = 'f_id';
	/** 
	 * 
	 * 
	 *  
	 */
	const KOD_POCZTOWY_ID = 'f_kod_pocztowy_id';
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
	const OGLOSZENIE = 'f_ogloszenie';
	/** 
	 * 
	 * 
	 *  
	 */
	const OGLOSZENIE_NR = 'f_ogloszenie_nr';
	/** 
	 * 
	 * 
	 *  
	 */
	const POWIAT_ID = 'f_powiat_id';
	/** 
	 * 
	 * 
	 *  
	 */
	const RODZAJ = 'f_rodzaj';
	/** 
	 * 
	 * 
	 *  
	 */
	const RODZAJ_ID = 'f_rodzaj_id';
	/** 
	 * 
	 * 
	 *  
	 */
	const TRYB_ID = 'f_tryb_id';
	/** 
	 * 
	 * 
	 *  
	 */
	const TYP_ID = 'f_typ_id';
	/** 
	 * 
	 * 
	 *  
	 */
	const WADIUM = 'f_wadium';
	/** 
	 * 
	 * 
	 *  
	 */
	const WOJEWODZTWO_ID = 'f_wojewodztwo_id';
	/** 
	 * 
	 * 
	 *  
	 */
	const ZALICZKA = 'f_zaliczka';
	/** 
	 * 
	 * 
	 *  
	 */
	const ZAMAWIAJACY_EMAIL = 'f_zamawiajacy_email';
	/** 
	 * 
	 * 
	 *  
	 */
	const ZAMAWIAJACY_ID = 'f_zamawiajacy_id';
	/** 
	 * 
	 * 
	 *  
	 */
	const ZAMAWIAJACY_KOD_POCZT = 'f_zamawiajacy_kod_poczt';
	/** 
	 * 
	 * 
	 *  
	 */
	const ZAMAWIAJACY_MIEJSCOWOSC = 'f_zamawiajacy_miejscowosc';
	/** 
	 * 
	 * 
	 *  
	 */
	const ZAMAWIAJACY_NAZWA = 'f_zamawiajacy_nazwa';
	/** 
	 * 
	 * 
	 *  
	 */
	const ZAMAWIAJACY_NR_DOMU = 'f_zamawiajacy_nr_domu';
	/** 
	 * 
	 * 
	 *  
	 */
	const ZAMAWIAJACY_NR_MIESZ = 'f_zamawiajacy_nr_miesz';
	/** 
	 * 
	 * 
	 *  
	 */
	const ZAMAWIAJACY_REGON = 'f_zamawiajacy_regon';
	/** 
	 * 
	 * 
	 *  
	 */
	const ZAMAWIAJACY_RODZAJ = 'f_zamawiajacy_rodzaj';
	/** 
	 * 
	 * 
	 *  
	 */
	const ZAMAWIAJACY_TEL = 'f_zamawiajacy_tel';
	/** 
	 * 
	 * 
	 *  
	 */
	const ZAMAWIAJACY_ULICA = 'f_zamawiajacy_ulica';
	/** 
	 * 
	 * 
	 *  
	 */
	const ZAMAWIAJACY_WWW = 'f_zamawiajacy_www';
    /**
     * Konstruktor
     *
     * @param array $config ustawienia konfiguracyjne
     * @see epDatasetObject::__construct()
     */
    public function __construct($config = null)
    {
        $this->alias = 'zamowienia_publiczne';
        parent::__construct($config);

    }

    /**
     * Zwraca tablicę gotowych obiektów
     * @return array|epZamowieniePubliczne[]
     */
    public function getObjects()
    {
        $objects = $this->response->getBodyObjects();
        foreach ($objects as $object) {
            if (isset($object['data'])) {
                array_push($this->objects, new epZamowieniePubliczne($object));
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
 * Obiekt: Zamówienia Publiczne
 * 
 *
 * Klasa pojedynczego obiektu
 *
 *
 * @package Objects\epZamowieniePubliczne
 * @version 0.1 alpha build 93
 * @author Sejmometr REST API lib Generator 1.0 <biuro@epf.org.pl>
 * @link sejmometr.pl
 *
 * @property string $biuletyn_nr
 * @property string $cpv1c
 * @property string $czas
 * @property string $czas_dni
 * @property string $czas_miesiace
 * @property string $data_publikacji
 * @property string $data_start
 * @property string $data_stop
 * @property string $dsz_www
 * @property string $gmina_id
 * @property string $id
 * @property string $kod_pocztowy_id
 * @property string $nazwa
 * @property string $ogloszenie
 * @property string $ogloszenie_nr
 * @property string $powiat_id
 * @property string $rodzaj
 * @property string $rodzaj_id
 * @property string $tryb_id
 * @property string $typ_id
 * @property string $wadium
 * @property string $wojewodztwo_id
 * @property string $zaliczka
 * @property string $zamawiajacy_email
 * @property string $zamawiajacy_id
 * @property string $zamawiajacy_kod_poczt
 * @property string $zamawiajacy_miejscowosc
 * @property string $zamawiajacy_nazwa
 * @property string $zamawiajacy_nr_domu
 * @property string $zamawiajacy_nr_miesz
 * @property string $zamawiajacy_regon
 * @property string $zamawiajacy_rodzaj
 * @property string $zamawiajacy_tel
 * @property string $zamawiajacy_ulica
 * @property string $zamawiajacy_www
 */
class epZamowieniePubliczne extends epObject
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
        $this->alias = 'zamowienia_publiczne';
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
     * @return epZamowieniePubliczne
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
     * @return epZamowieniePubliczne
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