<?php
/**
 * DataSet: Wystąpienia w Sejmie
 * Baza wystąpień w Sejmie 7-mej kadencji. Dla większości wystąpień, dostępny jest materiał video z konkretnym wystąpieniem.
 *
 * @package Objects\epSejmWystapienia
 * @version 0.1 alpha build 93
 * @author Sejmometr REST API lib Generator 1.0 <biuro@epf.org.pl>
 * @link sejmometr.pl
 *
 * @method epSejmWystapienia cleanFilters()
 * @method epSejmWystapienia cleanQueryString()
 * @method epSejmWystapienia cleanSort()
 * @method epSejmWystapienia cleanResponseType()
 * @method epSejmWystapienia cleanLimit()
 * @method epSejmWystapienia cleanPage()
 */

class epSejmWystapienia extends epDataset
{
	/** 
	 * 
	 * 
	 *  
	 */
	const LUDZIE_AVATAR = 'f_ludzie_avatar';
	/** 
	 * 
	 * 
	 *  
	 */
	const LUDZIE_ID = 'f_ludzie_id';
	/** 
	 * 
	 * 
	 *  
	 */
	const LUDZIE_NAZWA = 'f_ludzie_nazwa';
	/** 
	 * 
	 * 
	 *  
	 */
	const LUDZIE_POSEL_ID = 'f_ludzie_posel_id';
	/** 
	 * 
	 * 
	 *  
	 */
	const SEJM_DEBATY_ID = 'f_sejm_debaty_id';
	/** 
	 * 
	 * 
	 *  
	 */
	const SEJM_DEBATY_LICZBA_GLOSOWAN = 'f_sejm_debaty_liczba_glosowan';
	/** 
	 * 
	 * 
	 *  
	 */
	const SEJM_DEBATY_LICZBA_WYSTAPIEN = 'f_sejm_debaty_liczba_wystapien';
	/** 
	 * 
	 * 
	 *  
	 */
	const SEJM_DEBATY_TYP_ID = 'f_sejm_debaty_typ_id';
	/** 
	 * 
	 * 
	 *  
	 */
	const SEJM_DEBATY_TYTUL = 'f_sejm_debaty_tytul';
	/** 
	 * Data
	 * 
	 *  
	 */
	const SEJM_POSIEDZENIA_DNI_DATA = 'f_sejm_posiedzenia_dni_data';
	/** 
	 * 
	 * 
	 *  
	 */
	const SEJM_POSIEDZENIA_DNI_ID = 'f_sejm_posiedzenia_dni_id';
	/** 
	 * 
	 * 
	 *  
	 */
	const SEJM_POSIEDZENIA_DNI_POSIEDZENIE_ID = 'f_sejm_posiedzenia_dni_posiedzenie_id';
	/** 
	 * 
	 * 
	 *  
	 */
	const CZAS_ROZPOCZECIA = 'f_czas_rozpoczecia';
	/** 
	 * 
	 * 
	 *  
	 */
	const CZAS_ZAKONCZENIA = 'f_czas_zakonczenia';
	/** 
	 * 
	 * 
	 *  
	 */
	const CZLOWIEK_ID = 'f_czlowiek_id';
	/** 
	 * 
	 * 
	 *  
	 */
	const DEBATA_ID = 'f_debata_id';
	/** 
	 * 
	 * 
	 *  
	 */
	const DLUGOSC = 'f_dlugosc';
	/** 
	 * 
	 * 
	 *  
	 */
	const DZIEN_SEJMOWY_ID = 'f_dzien_sejmowy_id';
	/** 
	 * Kolejność
	 * 
	 *  
	 */
	const ID = 'f_id';
	/** 
	 * Liczba wypowiedzianych słów
	 * 
	 *  
	 */
	const ILOSC_SLOW = 'f_ilosc_slow';
	/** 
	 * 
	 * 
	 *  
	 */
	const KLUB_ID = 'f_klub_id';
	/** 
	 * 
	 * 
	 *  
	 */
	const KOLEJNOSC = 'f_kolejnosc';
	/** 
	 * 
	 * 
	 *  
	 */
	const POSIEDZENIE_ID = 'f_posiedzenie_id';
	/** 
	 * 
	 * 
	 *  
	 */
	const PUNKT_ID = 'f_punkt_id';
	/** 
	 * 
	 * 
	 *  
	 */
	const SKROT = 'f_skrot';
	/** 
	 * 
	 * 
	 *  
	 */
	const STANOWISKO_ID = 'f_stanowisko_id';
	/** 
	 * 
	 * 
	 *  
	 */
	const VIDEO = 'f_video';
	/** 
	 * 
	 * 
	 *  
	 */
	const YT_ID = 'f_yt_id';
	/** 
	 * 
	 * 
	 *  
	 */
	const YT_PL_ID = 'f_yt_pl_id';
	/** 
	 * 
	 * 
	 *  
	 */
	const STANOWISKA_ID = 'f_stanowiska_id';
	/** 
	 * 
	 * 
	 *  
	 */
	const STANOWISKA_NAZWA = 'f_stanowiska_nazwa';
    /**
     * Konstruktor
     *
     * @param array $config ustawienia konfiguracyjne
     * @see epDatasetObject::__construct()
     */
    public function __construct($config = null)
    {
        $this->alias = 'sejm_wystapienia';
        parent::__construct($config);

    }

    /**
     * Zwraca tablicę gotowych obiektów
     * @return array|epSejmWystapienie[]
     */
    public function getObjects()
    {
        $objects = $this->response->getBodyObjects();
        foreach ($objects as $object) {
            if (isset($object['data'])) {
                array_push($this->objects, new epSejmWystapienie($object));
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
 * Obiekt: Wystąpienia w Sejmie
 * Baza wystąpień w Sejmie 7-mej kadencji. Dla większości wystąpień, dostępny jest materiał video z konkretnym wystąpieniem.
 *
 * Klasa pojedynczego obiektu
 *
 *
 * @package Objects\epSejmWystapienie
 * @version 0.1 alpha build 93
 * @author Sejmometr REST API lib Generator 1.0 <biuro@epf.org.pl>
 * @link sejmometr.pl
 *
 * @property string $ludzie_avatar $fieldset
 * @property string $ludzie_id $fieldset
 * @property string $ludzie_nazwa $fieldset
 * @property string $ludzie_posel_id $fieldset
 * @property string $sejm_debaty_id $fieldset
 * @property string $sejm_debaty_liczba_glosowan $fieldset
 * @property string $sejm_debaty_liczba_wystapien $fieldset
 * @property string $sejm_debaty_typ_id $fieldset
 * @property string $sejm_debaty_tytul $fieldset
 * @property string $sejm_posiedzenia_dni_data $fieldset
 * @property string $sejm_posiedzenia_dni_id $fieldset
 * @property string $sejm_posiedzenia_dni_posiedzenie_id $fieldset
 * @property string $czas_rozpoczecia
 * @property string $czas_zakonczenia
 * @property string $czlowiek_id
 * @property string $debata_id
 * @property string $dlugosc
 * @property string $dzien_sejmowy_id
 * @property string $id
 * @property string $ilosc_slow
 * @property string $klub_id
 * @property string $kolejnosc
 * @property string $posiedzenie_id
 * @property string $punkt_id
 * @property string $skrot
 * @property string $stanowisko_id
 * @property string $video
 * @property string $yt_id
 * @property string $yt_pl_id
 * @property string $stanowiska_id $fieldset
 * @property string $stanowiska_nazwa $fieldset
 */
class epSejmWystapienie extends epObject
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
        $this->alias = 'sejm_wystapienia';
        parent::__construct($data);
    }

    /**
     * Magiczna metoda do pobierania danych koncowych obiektu
     * @param string $arg
     * @return mixed
     */
    public function __get($arg)
    {
		if($arg == 'ludzie_avatar') { return $this->data['ludzie.avatar']; }
		if($arg == 'ludzie_id') { return $this->data['ludzie.id']; }
		if($arg == 'ludzie_nazwa') { return $this->data['ludzie.nazwa']; }
		if($arg == 'ludzie_posel_id') { return $this->data['ludzie.posel_id']; }
		if($arg == 'sejm_debaty_id') { return $this->data['sejm_debaty.id']; }
		if($arg == 'sejm_debaty_liczba_glosowan') { return $this->data['sejm_debaty.liczba_glosowan']; }
		if($arg == 'sejm_debaty_liczba_wystapien') { return $this->data['sejm_debaty.liczba_wystapien']; }
		if($arg == 'sejm_debaty_typ_id') { return $this->data['sejm_debaty.typ_id']; }
		if($arg == 'sejm_debaty_tytul') { return $this->data['sejm_debaty.tytul']; }
		if($arg == 'sejm_posiedzenia_dni_data') { return $this->data['sejm_posiedzenia_dni.data']; }
		if($arg == 'sejm_posiedzenia_dni_id') { return $this->data['sejm_posiedzenia_dni.id']; }
		if($arg == 'sejm_posiedzenia_dni_posiedzenie_id') { return $this->data['sejm_posiedzenia_dni.posiedzenie_id']; }
		if($arg == 'stanowiska_id') { return $this->data['stanowiska.id']; }
		if($arg == 'stanowiska_nazwa') { return $this->data['stanowiska.nazwa']; }
        return $this->data->{$arg};
    }

    /**
     * Funkcja do zaladowania jednego konkretnego dokumentu
     *
     * @param int $id
     * @return epSejmWystapienie
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
     * @return epSejmWystapienie
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