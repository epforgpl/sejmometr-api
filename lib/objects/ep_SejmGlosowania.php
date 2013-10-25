<?php
/**
 * DataSet: Głosowania w Sejmie
 * Głosowania przeprowadzone w Sejmie 7-mej kadencji
 *
 * @package Objects\epSejmGlosowania
 * @version 0.1 alpha build 93
 * @author Sejmometr REST API lib Generator 1.0 <biuro@epf.org.pl>
 * @link sejmometr.pl
 *
 * @method epSejmGlosowania cleanFilters()
 * @method epSejmGlosowania cleanQueryString()
 * @method epSejmGlosowania cleanSort()
 * @method epSejmGlosowania cleanResponseType()
 * @method epSejmGlosowania cleanLimit()
 * @method epSejmGlosowania cleanPage()
 */

class epSejmGlosowania extends epDataset
{
	/** 
	 * Czas
	 * Czas przeprowadzenia głosowania.
	 *  
	 */
	const CZAS = 'f_czas';
	/** 
	 * 
	 * Identyfikator eP_API debaty sejmowej, w ramach której odbyło się głosowanie.
	 *  
	 */
	const DEBATA_ID = 'f_debata_id';
	/** 
	 * 
	 * Identyfikator eP_API dnia obrad, w ramach którego odbyło się głosowanie.
	 *  
	 */
	const DZIEN_ID = 'f_dzien_id';
	/** 
	 * Liczba głosujących
	 * Liczba oddanych głosów.
	 *  
	 */
	const G = 'f_g';
	/** 
	 * 
	 * Identyfikator eP_API głosowania.
	 *  
	 */
	const ID = 'f_id';
	/** 
	 * Liczba uprawnionych do głosu
	 * Liczba posłów uprawnionych do głosowania.
	 *  
	 */
	const L = 'f_l';
	/** 
	 * Liczba nieobecnych
	 * Liczba nieobecnych posłów.
	 *  
	 */
	const N = 'f_n';
	/** 
	 * Numer
	 * Numer głosowania.
	 *  
	 */
	const NUMER = 'f_numer';
	/** 
	 * 
	 * 
	 *  
	 */
	const P = 'f_p';
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
	 * Typ głosowania
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
	 * Liczba posłów, którzy wstrzymali się od głosu
	 * 
	 *  
	 */
	const W = 'f_w';
	/** 
	 * Większość bezwględna
	 * Większość bezwględna.
	 *  
	 */
	const WB = 'f_wb';
	/** 
	 * 
	 * null
	 *  
	 */
	const WYNIK_ID = 'f_wynik_id';
	/** 
	 * 
	 * 
	 *  
	 */
	const WYSTAPIENIE_ID = 'f_wystapienie_id';
	/** 
	 * 
	 * 
	 *  
	 */
	const Z = 'f_z';
	/** 
	 * 
	 * 
	 *  
	 */
	const SEJM_GLOSOWANIA_TYPY_ID = 'f_sejm_glosowania_typy_id';
	/** 
	 * 
	 * 
	 *  
	 */
	const SEJM_GLOSOWANIA_TYPY_NAZWA = 'f_sejm_glosowania_typy_nazwa';
	/** 
	 * 
	 * 
	 *  
	 */
	const SEJM_POSIEDZENIA_ID = 'f_sejm_posiedzenia_id';
	/** 
	 * 
	 * 
	 *  
	 */
	const SEJM_POSIEDZENIA_TYTUL = 'f_sejm_posiedzenia_tytul';
    /**
     * Konstruktor
     *
     * @param array $config ustawienia konfiguracyjne
     * @see epDatasetObject::__construct()
     */
    public function __construct($config = null)
    {
        $this->alias = 'sejm_glosowania';
        parent::__construct($config);

    }

    /**
     * Zwraca tablicę gotowych obiektów
     * @return array|epSejmGlosowanie[]
     */
    public function getObjects()
    {
        $objects = $this->response->getBodyObjects();
        foreach ($objects as $object) {
            if (isset($object['data'])) {
                array_push($this->objects, new epSejmGlosowanie($object));
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
 * Obiekt: Głosowania w Sejmie
 * Głosowania przeprowadzone w Sejmie 7-mej kadencji
 *
 * Klasa pojedynczego obiektu
 *
 *
 * @package Objects\epSejmGlosowanie
 * @version 0.1 alpha build 93
 * @author Sejmometr REST API lib Generator 1.0 <biuro@epf.org.pl>
 * @link sejmometr.pl
 *
 * @property string $czas
 * @property string $debata_id
 * @property string $dzien_id
 * @property string $g
 * @property string $id
 * @property string $l
 * @property string $n
 * @property string $numer
 * @property string $p
 * @property string $posiedzenie_id
 * @property string $punkt_id
 * @property string $typ_id
 * @property string $tytul
 * @property string $w
 * @property string $wb
 * @property string $wynik_id
 * @property string $wystapienie_id
 * @property string $z
 * @property string $sejm_glosowania_typy_id $fieldset
 * @property string $sejm_glosowania_typy_nazwa $fieldset
 * @property string $sejm_posiedzenia_id $fieldset
 * @property string $sejm_posiedzenia_tytul $fieldset
 */
class epSejmGlosowanie extends epObject
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
        $this->alias = 'sejm_glosowania';
        parent::__construct($data);
    }

    /**
     * Magiczna metoda do pobierania danych koncowych obiektu
     * @param string $arg
     * @return mixed
     */
    public function __get($arg)
    {
		if($arg == 'sejm_glosowania_typy_id') { return $this->data['sejm_glosowania_typy.id']; }
		if($arg == 'sejm_glosowania_typy_nazwa') { return $this->data['sejm_glosowania_typy.nazwa']; }
		if($arg == 'sejm_posiedzenia_id') { return $this->data['sejm_posiedzenia.id']; }
		if($arg == 'sejm_posiedzenia_tytul') { return $this->data['sejm_posiedzenia.tytul']; }
        return $this->data->{$arg};
    }

    /**
     * Funkcja do zaladowania jednego konkretnego dokumentu
     *
     * @param int $id
     * @return epSejmGlosowanie
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
     * @return epSejmGlosowanie
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