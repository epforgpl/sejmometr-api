<?php
/**
 * DataSet: Posłowie
 * Posłowie na Sejm RP
 *
 * @package Objects\epPoslowie
 * @version 0.1 alpha build 93
 * @author Sejmometr REST API lib Generator 1.0 <biuro@epf.org.pl>
 * @link sejmometr.pl
 *
 * @method epPoslowie cleanFilters()
 * @method epPoslowie cleanQueryString()
 * @method epPoslowie cleanSort()
 * @method epPoslowie cleanResponseType()
 * @method epPoslowie cleanLimit()
 * @method epPoslowie cleanPage()
 */

class epPoslowie extends epDataset
{
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
	const LUDZIE_SLUG = 'f_ludzie_slug';
	/** 
	 * 
	 * 
	 *  
	 */
	const LUDZIE_POSLOWIE_MOWCA_ID = 'f_ludzie_poslowie_mowca_id';
	/** 
	 * 
	 * HTML zawierający dane teleadresowe biur poselskich posła.
	 *  
	 */
	const BIURO_HTML = 'f_biuro_html';
	/** 
	 * Data urodzenia
	 * Data urodzenia posła.
	 *  
	 */
	const DATA_URODZENIA = 'f_data_urodzenia';
	/** 
	 * 
	 * 
	 *  
	 */
	const DOPELNIACZ = 'f_dopelniacz';
	/** 
	 * Frekwencja na posiedzeniach Sejmu
	 * Stosunek liczby głosowań opuszczonych przez posła, do liczby wszystkich głosowań, w którym poseł miał obowiązek uczestniczyć.
	 *  
	 */
	const FREKWENCJA = 'f_frekwencja';
	/** 
	 * 
	 * Identyfikator w eP_API.
	 *  
	 */
	const ID = 'f_id';
	/** 
	 * 
	 * Drugie imię posła.
	 *  
	 */
	const IMIE_DRUGIE = 'f_imie_drugie';
	/** 
	 * 
	 * Pierwsze imię posła.
	 *  
	 */
	const IMIE_PIERWSZE = 'f_imie_pierwsze';
	/** 
	 * Klub
	 * Identyfikator eP_API klubu parlamentarnego, do którego poseł należy.
	 *  
	 */
	const KLUB_ID = 'f_klub_id';
	/** 
	 * Liczba głosów otrzymanych w wyborach do Sejmu
	 * 
	 *  
	 */
	const LICZBA_GLOSOW = 'f_liczba_glosow';
	/** 
	 * 
	 * Liczba głosowań, w których poseł miał obowiązek uczestniczyć.
	 *  
	 */
	const LICZBA_GLOSOWAN = 'f_liczba_glosowan';
	/** 
	 * Liczba opuszczonych głosowań
	 * Liczba głosowań, w których poseł nie uczestniczył.
	 *  
	 */
	const LICZBA_GLOSOWAN_OPUSZCZONYCH = 'f_liczba_glosowan_opuszczonych';
	/** 
	 * Liczba buntów
	 * Liczba głosowań, w których poseł głosował przeciwnie do większości swojego klubu.
	 *  
	 */
	const LICZBA_GLOSOWAN_ZBUNTOWANYCH = 'f_liczba_glosowan_zbuntowanych';
	/** 
	 * 
	 * 
	 *  
	 */
	const LICZBA_KOMISJI = 'f_liczba_komisji';
	/** 
	 * 
	 * 
	 *  
	 */
	const LICZBA_PODKOMISJI = 'f_liczba_podkomisji';
	/** 
	 * Liczba złożonych projektów uchwał
	 * Liczba projektów uchwał, pod którymi podpisał się poseł.
	 *  
	 */
	const LICZBA_PROJEKTOW_UCHWAL = 'f_liczba_projektow_uchwal';
	/** 
	 * Liczba złożonych projektów ustaw
	 * Liczba projektów ustaw, pod którymi podpisał się poseł.
	 *  
	 */
	const LICZBA_PROJEKTOW_USTAW = 'f_liczba_projektow_ustaw';
	/** 
	 * Liczba słów wypowiedzianych na forum Sejmu
	 * Liczba słów, które poseł wypowiedział na forum Sejmu.
	 *  
	 */
	const LICZBA_SLOW = 'f_liczba_slow';
	/** 
	 * Liczba złożonych wniosków
	 * Liczba wniosków, pod którymi podpisał się poseł.
	 *  
	 */
	const LICZBA_WNIOSKOW = 'f_liczba_wnioskow';
	/** 
	 * Liczba wypowiedzi na forum Sejmu
	 * Liczba wypowiedzi, wygłoszonych przez posła na forum Sejmu.
	 *  
	 */
	const LICZBA_WYPOWIEDZI = 'f_liczba_wypowiedzi';
	/** 
	 * 
	 * 
	 *  
	 */
	const MANDAT_WYGASL = 'f_mandat_wygasl';
	/** 
	 * Miejsce urodzenia
	 * Miejsce urodzenia posła.
	 *  
	 */
	const MIEJSCE_URODZENIA = 'f_miejsce_urodzenia';
	/** 
	 * Miejsce zamieszkania
	 * Miejsce zamieszkania posła.
	 *  
	 */
	const MIEJSCE_ZAMIESZKANIA = 'f_miejsce_zamieszkania';
	/** 
	 * 
	 * 
	 *  
	 */
	const MOWCA_ID = 'f_mowca_id';
	/** 
	 * Imię, nazwisko
	 * Imię i nazwisko posła.
	 *  
	 */
	const NAZWA = 'f_nazwa';
	/** 
	 * Nazwisko, imię
	 * Nazwisko i imię posła.
	 *  
	 */
	const NAZWA_ODWROCONA = 'f_nazwa_odwrocona';
	/** 
	 * 
	 * Nazwisko posła.
	 *  
	 */
	const NAZWISKO = 'f_nazwisko';
	/** 
	 * Numer na liście wyborczej w wyborach do Sejmu
	 * Numer na liście, z której poseł dostał się do Sejmu.
	 *  
	 */
	const NUMER_NA_LISCIE = 'f_numer_na_liscie';
	/** 
	 * Numer okręgu wyborczego
	 * Numer okręgu wyborczego, z którego poseł dostał się do Sejmu.
	 *  
	 */
	const OKREG_WYBORCZY_NUMER = 'f_okreg_wyborczy_numer';
	/** 
	 * 
	 * 
	 *  
	 */
	const PKW_KOMITET_ID = 'f_pkw_komitet_id';
	/** 
	 * 
	 * 
	 *  
	 */
	const PKW_NR_LISTY = 'f_pkw_nr_listy';
	/** 
	 * Płeć
	 * Płeć posła.
	 *  
	 */
	const PLEC = 'f_plec';
	/** 
	 * Poparcie w okręgu
	 * Stosunek liczby głosów oddanych na posła, w wyborach parlamentarnych, do liczby wszystkich uprawnionych do głosowania w okręgu wyborczym.
	 *  
	 */
	const PROCENT_GLOSOW = 'f_procent_glosow';
	/** 
	 * 
	 * Identyfikator eP_API okręgu wyborczego, z którego poseł dostał się do Sejmu.
	 *  
	 */
	const SEJM_OKREG_ID = 'f_sejm_okreg_id';
	/** 
	 * Zawód
	 * Zawód wykonywany przez posła.
	 *  
	 */
	const ZAWOD = 'f_zawod';
	/** 
	 * Zbuntowanie
	 * Stosunek liczby głosowań, w których poseł głosował przeciwnie do większości swojego klubu, do liczby wszystkich głosowań, w których poseł miał obowiązek uczestniczyć.
	 *  
	 */
	const ZBUNTOWANIE = 'f_zbuntowanie';
	/** 
	 * 
	 * 
	 *  
	 */
	const SEJM_KLUBY_ID = 'f_sejm_kluby_id';
	/** 
	 * 
	 * 
	 *  
	 */
	const SEJM_KLUBY_NAZWA = 'f_sejm_kluby_nazwa';
	/** 
	 * 
	 * 
	 *  
	 */
	const SEJM_KLUBY_SKROT = 'f_sejm_kluby_skrot';
    /**
     * Konstruktor
     *
     * @param array $config ustawienia konfiguracyjne
     * @see epDatasetObject::__construct()
     */
    public function __construct($config = null)
    {
        $this->alias = 'poslowie';
        parent::__construct($config);

    }

    /**
     * Zwraca tablicę gotowych obiektów
     * @return array|epPosel[]
     */
    public function getObjects()
    {
        $objects = $this->response->getBodyObjects();
        foreach ($objects as $object) {
            if (isset($object['data'])) {
                array_push($this->objects, new epPosel($object));
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
 * Obiekt: Posłowie
 * Posłowie na Sejm RP
 *
 * Klasa pojedynczego obiektu
 *
 *
 * @package Objects\epPosel
 * @version 0.1 alpha build 93
 * @author Sejmometr REST API lib Generator 1.0 <biuro@epf.org.pl>
 * @link sejmometr.pl
 *
 * @property string $ludzie_id $fieldset
 * @property string $ludzie_nazwa $fieldset
 * @property string $ludzie_slug $fieldset
 * @property string $ludzie_poslowie_mowca_id $fieldset
 * @property string $biuro_html
 * @property string $data_urodzenia
 * @property string $dopelniacz
 * @property string $frekwencja
 * @property string $id
 * @property string $imie_drugie
 * @property string $imie_pierwsze
 * @property string $klub_id
 * @property string $liczba_glosow
 * @property string $liczba_glosowan
 * @property string $liczba_glosowan_opuszczonych
 * @property string $liczba_glosowan_zbuntowanych
 * @property string $liczba_komisji
 * @property string $liczba_podkomisji
 * @property string $liczba_projektow_uchwal
 * @property string $liczba_projektow_ustaw
 * @property string $liczba_slow
 * @property string $liczba_wnioskow
 * @property string $liczba_wypowiedzi
 * @property string $mandat_wygasl
 * @property string $miejsce_urodzenia
 * @property string $miejsce_zamieszkania
 * @property string $mowca_id
 * @property string $nazwa
 * @property string $nazwa_odwrocona
 * @property string $nazwisko
 * @property string $numer_na_liscie
 * @property string $okreg_wyborczy_numer
 * @property string $pkw_komitet_id
 * @property string $pkw_nr_listy
 * @property string $plec
 * @property string $procent_glosow
 * @property string $sejm_okreg_id
 * @property string $zawod
 * @property string $zbuntowanie
 * @property string $sejm_kluby_id $fieldset
 * @property string $sejm_kluby_nazwa $fieldset
 * @property string $sejm_kluby_skrot $fieldset
 */
class epPosel extends epObject
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
        $this->alias = 'poslowie';
        parent::__construct($data);
    }

    /**
     * Magiczna metoda do pobierania danych koncowych obiektu
     * @param string $arg
     * @return mixed
     */
    public function __get($arg)
    {
		if($arg == 'ludzie_id') { return $this->data['ludzie.id']; }
		if($arg == 'ludzie_nazwa') { return $this->data['ludzie.nazwa']; }
		if($arg == 'ludzie_slug') { return $this->data['ludzie.slug']; }
		if($arg == 'ludzie_poslowie_mowca_id') { return $this->data['ludzie_poslowie.mowca_id']; }
		if($arg == 'sejm_kluby_id') { return $this->data['sejm_kluby.id']; }
		if($arg == 'sejm_kluby_nazwa') { return $this->data['sejm_kluby.nazwa']; }
		if($arg == 'sejm_kluby_skrot') { return $this->data['sejm_kluby.skrot']; }
        return $this->data->{$arg};
    }

    /**
     * Funkcja do zaladowania jednego konkretnego dokumentu
     *
     * @param int $id
     * @return epPosel
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
     * @return epPosel
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