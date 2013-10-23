<?php
/**
 * DataSet: Gminy
 * Baza gmin w Polsce, kompatybilna z rejestrami TERYT i NTS. Zawiera dane teleadresowe oraz przestrzenne
 *
 * @package Objects\epGminy
 * @version 0.1 alpha build 93
 * @author Sejmometr REST API lib Generator 1.0 <biuro@epf.org.pl>
 * @link sejmometr.pl
 *
 * @method epGminy cleanFilters()
 * @method epGminy cleanQueryString()
 * @method epGminy cleanSort()
 * @method epGminy cleanResponseType()
 * @method epGminy cleanLimit()
 * @method epGminy cleanPage()
 */

class epGminy extends epDataset
{
	/** 
	 * 
	 * Adres urzędu gminy
	 * Adres urzędu gminy 
	 */
	const ADRES = 'f_adres';
	/** 
	 * 
	 * Adres www Biuletyu Informacji Publicznej gminy
	 * Adres URL Biuletynu Informacji Publicznej gminy 
	 */
	const BIP_WWW = 'f_bip_www';
	/** 
	 * 
	 * Dochody roczne gminy [zł]
	 * Roczne dochody gminy osiągnięte w ostatnim roku, dla którego są znane 
	 */
	const DOCHODY_ROCZNE = 'f_dochody_roczne';
	/** 
	 * 
	 * Adres email
	 * Główny adres email urzędu gminy 
	 */
	const EMAIL = 'f_email';
	/** 
	 * 
	 * Numer faxu
	 * Główny numer FAX urzędu gminy 
	 */
	const FAX = 'f_fax';
	/** 
	 * 
	 * Identyfikator eP_API gminy
	 *  
	 */
	const ID = 'f_id';
	/** 
	 * 
	 * Liczba ludności, według <a href="/bdl_wskazniki_wariacje/222878">spisu powszechnego 2011</a>
	 * Liczba ludności gminy w ostatnim roku, dla którego jest znana 
	 */
	const LICZBA_LUDNOSCI = 'f_liczba_ludnosci';
	/** 
	 * Nazwa
	 * Nazwa gminy
	 * Nazwa gminy 
	 */
	const NAZWA = 'f_nazwa';
	/** 
	 * 
	 * Pełna nazwa urzędu gminy

	 * Pełna nazwa urzędu gminy 
	 */
	const NAZWA_URZEDU = 'f_nazwa_urzedu';
	/** 
	 * 
	 * Kod NTS
	 * Kod NTS gminy 
	 */
	const NTS = 'f_nts';
	/** 
	 * 
	 * Identyfikator eP_API powiatu, do którego należy gmina 
	 * ID powiatu (	
	 * @see epPowiaty 
	 * ), do którego należy gmina 
	 */
	const POWIAT_ID = 'f_powiat_id';
	/** 
	 * 
	 * Powierzchnia gminy [km2]
	 * Powierzchnia gminy w m2, w ostatnim roku, dla którego jest znana 
	 */
	const POWIERZCHNIA = 'f_powierzchnia';
	/** 
	 * 
	 * Pełna nazwa rady gminnej
	 * Pełna nazwa rady gminy 
	 */
	const RADA_NAZWA = 'f_rada_nazwa';
	/** 
	 * 
	 * 
	 * Nazwa stanowiska szefa gminy.
	 * Dostępne wartości:
	 * 1 - Burmistrz
	 * 2 - Prezydent
	 * 3 - Wójt 
	 */
	const SZEF_STANOWISKO_ID = 'f_szef_stanowisko_id';
	/** 
	 * 
	 * Numer telefonu
	 * Główny numer telefoniczny do urzędu gminy 
	 */
	const TELEFON = 'f_telefon';
	/** 
	 * 
	 * Kod TERYT
	 * Kod TERYT gminy 
	 */
	const TERYT = 'f_teryt';
	/** 
	 * 
	 * 1 - gmina miejska<br/>
2 - gmina wiejska<br/>
3 - gmina miejsko-wiejska<br/>
4 - gmina miejska, miasto stołeczne
	 * Typ gminy.
	 * Dostępne wartości:
	 * 1 - gmina miejska
	 * 2 - gmina wiejska
	 * 3 - gmina miejsko-wiejska
	 * 4 - gmina miejska, miasto stołeczne 
	 */
	const TYP_ID = 'f_typ_id';
	/** 
	 * 
	 * Identyfikator eP_API województwa, do którego należy gmina
	 * ID województwa (	
	 * @see epWojewodztwa 
	 * ), do którego należy gmina 
	 */
	const WOJEWODZTWO_ID = 'f_wojewodztwo_id';
	/** 
	 * 
	 * Wydatki roczne [zł]
	 * Wydatki gminy, w ostatnim roku, dla którego są znane 
	 */
	const WYDATKI_ROCZNE = 'f_wydatki_roczne';
	/** 
	 * 
	 * Zadłużenie roczne [zł]
	 * Zadłużenie gminy, osiągnięte w ostatnim roku, dla którego jest znane 
	 */
	const ZADLUZENIE_ROCZNE = 'f_zadluzenie_roczne';
	/** 
	 * Powiat
	 * 
	 *  
	 */
	const POWIATY_ID = 'f_powiaty_id';
	/** 
	 * 
	 * 
	 * Nazwa powiatu 
	 */
	const POWIATY_NAZWA = 'f_powiaty_nazwa';
	/** 
	 * 
	 * 
	 * ID okręgu w wyborach do Sejmu (	
	 * @see epSejmOkregi 
	 * ), to którego w całości należy powiat 
	 */
	const POWIATY_SEJM_OKREG_ID = 'f_powiaty_sejm_okreg_id';
	/** 
	 * Województwo
	 * 
	 *  
	 */
	const WOJEWODZTWA_ID = 'f_wojewodztwa_id';
	/** 
	 * 
	 * 
	 * Nazwa województwa 
	 */
	const WOJEWODZTWA_NAZWA = 'f_wojewodztwa_nazwa';
    /**
     * Konstruktor
     *
     * @param array $config ustawienia konfiguracyjne
     * @see epDatasetObject::__construct()
     */
    public function __construct($config = null)
    {
        $this->alias = 'gminy';
        parent::__construct($config);

    }

    /**
     * Zwraca tablicę gotowych obiektów
     * @return array|epGmina[]
     */
    public function getObjects()
    {
        $objects = $this->response->getBodyObjects();
        foreach ($objects as $object) {
            if (isset($object['data'])) {
                array_push($this->objects, new epGmina($object));
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
 * Obiekt: Gminy
 * Baza gmin w Polsce, kompatybilna z rejestrami TERYT i NTS. Zawiera dane teleadresowe oraz przestrzenne
 *
 * Klasa pojedynczego obiektu
 *
 *
 * @package Objects\epGmina
 * @version 0.1 alpha build 93
 * @author Sejmometr REST API lib Generator 1.0 <biuro@epf.org.pl>
 * @link sejmometr.pl
 *
 * @property string $adres
 * @property string $bip_www
 * @property string $dochody_roczne
 * @property string $email
 * @property string $fax
 * @property string $id
 * @property string $liczba_ludnosci
 * @property string $nazwa
 * @property string $nazwa_urzedu
 * @property string $nts
 * @property string $powiat_id
 * @property string $powierzchnia
 * @property string $rada_nazwa
 * @property string $szef_stanowisko_id
 * @property string $telefon
 * @property string $teryt
 * @property string $typ_id
 * @property string $wojewodztwo_id
 * @property string $wydatki_roczne
 * @property string $zadluzenie_roczne
 * @property string $powiaty_id $fieldset
 * @property string $powiaty_nazwa $fieldset
 * @property string $powiaty_sejm_okreg_id $fieldset
 * @property string $wojewodztwa_id $fieldset
 * @property string $wojewodztwa_nazwa $fieldset
 */
class epGmina extends epObject
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
        $this->alias = 'gminy';
        parent::__construct($data);
    }

    /**
     * Magiczna metoda do pobierania danych koncowych obiektu
     * @param string $arg
     * @return mixed
     */
    public function __get($arg)
    {
		if($arg == 'powiaty_id') { return $this->data['powiaty.id']; }
		if($arg == 'powiaty_nazwa') { return $this->data['powiaty.nazwa']; }
		if($arg == 'powiaty_sejm_okreg_id') { return $this->data['powiaty.sejm_okreg_id']; }
		if($arg == 'wojewodztwa_id') { return $this->data['wojewodztwa.id']; }
		if($arg == 'wojewodztwa_nazwa') { return $this->data['wojewodztwa.nazwa']; }
        return $this->data->{$arg};
    }

    /**
     * Funkcja do zaladowania jednego konkretnego dokumentu
     *
     * @param int $id
     * @return epGmina
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
     * @return epGmina
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