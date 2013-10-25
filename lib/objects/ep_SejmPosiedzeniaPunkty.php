<?php
/**
 * DataSet: Punkty porządku dziennego w Sejmie
 * Punkty porządku dziennego na posiedzeniach Sejmu 7-mej kadencji.
 *
 * @package Objects\ep_SejmPosiedzeniaPunkty
 * @version 0.1 alpha build 99
 * @author Sejmometr REST API lib Generator 1.0 <biuro@epf.org.pl>
 * @link sejmometr.pl
 *
 * @method ep_SejmPosiedzeniaPunkty cleanFilters()
 * @method ep_SejmPosiedzeniaPunkty cleanQueryString()
 * @method ep_SejmPosiedzeniaPunkty cleanSort()
 * @method ep_SejmPosiedzeniaPunkty cleanResponseType()
 * @method ep_SejmPosiedzeniaPunkty cleanLimit()
 * @method ep_SejmPosiedzeniaPunkty cleanPage()
 */

class ep_SejmPosiedzeniaPunkty extends ep_Dataset
{
	/** 
	 * 
	 * 
	 *  
	 */
	const SEJM_POSIEDZENIA_DATA_STR = 'f_sejm_posiedzenia_data_str';
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
	 * 
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
	const DRUK_ID = 'f_druk_id';
	/** 
	 * 
	 * 
	 *  
	 */
	const ID = 'f_id';
	/** 
	 * Kolejność
	 * 
	 *  
	 */
	const KOLEJNOSC = 'f_kolejnosc';
	/** 
	 * 
	 * 
	 *  
	 */
	const LICZBA_DEBAT = 'f_liczba_debat';
	/** 
	 * 
	 * 
	 *  
	 */
	const LICZBA_GLOSOWAN = 'f_liczba_glosowan';
	/** 
	 * 
	 * 
	 *  
	 */
	const LICZBA_SLOW = 'f_liczba_slow';
	/** 
	 * 
	 * 
	 *  
	 */
	const LICZBA_WYSTAPIEN = 'f_liczba_wystapien';
	/** 
	 * 
	 * 
	 *  
	 */
	const NUMER = 'f_numer';
	/** 
	 * 
	 * 
	 *  
	 */
	const NUMER_INT = 'f_numer_int';
	/** 
	 * 
	 * 
	 *  
	 */
	const OPIS = 'f_opis';
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
	const PROMO_WYSTAPIENIE_ID = 'f_promo_wystapienie_id';
	/** 
	 * 
	 * 
	 *  
	 */
	const STATS_STR = 'f_stats_str';
	/** 
	 * 
	 * 
	 *  
	 */
	const STATS_STR_EN = 'f_stats_str_en';
	/** 
	 * 
	 * 
	 *  
	 */
	const STATS_STR_PL = 'f_stats_str_pl';
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
	const TYTUL = 'f_tytul';
	/** 
	 * 
	 * 
	 *  
	 */
	const VIDEO = 'f_video';
    /**
     * Konstruktor
     *
     * @param array $config ustawienia konfiguracyjne
     * @see ep_DatasetObject::__construct()
     */
    public function __construct($config = null)
    {
        $this->alias = 'sejm_posiedzenia_punkty';
        parent::__construct($config);

    }

    /**
     * Zwraca tablicę gotowych obiektów
     * @return array|ep_SejmPosiedzeniePunkt[]
     */
    public function getObjects()
    {
        $objects = $this->response->getBodyObjects();
        foreach ($objects as $object) {
            if (isset($object['data'])) {
                array_push($this->objects, new ep_SejmPosiedzeniePunkt($object));
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
 * Obiekt: Punkty porządku dziennego w Sejmie
 * Punkty porządku dziennego na posiedzeniach Sejmu 7-mej kadencji.
 *
 * Klasa pojedynczego obiektu
 *
 *
 * @package Objects\ep_SejmPosiedzeniePunkt
 * @version 0.1 alpha build 99
 * @author Sejmometr REST API lib Generator 1.0 <biuro@epf.org.pl>
 * @link sejmometr.pl
 *
 * @property string $sejm_posiedzenia_data_str $fieldset
 * @property string $sejm_posiedzenia_id $fieldset
 * @property string $sejm_posiedzenia_tytul $fieldset
 * @property string $data
 * @property string $dokument_id
 * @property string $druk_id
 * @property string $id
 * @property string $kolejnosc
 * @property string $liczba_debat
 * @property string $liczba_glosowan
 * @property string $liczba_slow
 * @property string $liczba_wystapien
 * @property string $numer
 * @property string $numer_int
 * @property string $opis
 * @property string $posiedzenie_id
 * @property string $promo_wystapienie_id
 * @property string $stats_str
 * @property string $stats_str_en
 * @property string $stats_str_pl
 * @property string $typ_id
 * @property string $tytul
 * @property string $video
 */
class ep_SejmPosiedzeniePunkt extends ep_Object
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
        $this->alias = 'sejm_posiedzenia_punkty';
        parent::__construct($data);
    }

    /**
     * Magiczna metoda do pobierania danych koncowych obiektu
     * @param string $arg
     * @return mixed
     */
    public function __get($arg)
    {
		if($arg == 'sejm_posiedzenia_data_str') { return $this->data['sejm_posiedzenia.data_str']; }
		if($arg == 'sejm_posiedzenia_id') { return $this->data['sejm_posiedzenia.id']; }
		if($arg == 'sejm_posiedzenia_tytul') { return $this->data['sejm_posiedzenia.tytul']; }
        return $this->data->{$arg};
    }

    /**
     * Funkcja do zaladowania jednego konkretnego dokumentu
     *
     * @param int $id
     * @return ep_SejmPosiedzeniePunkt
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
     * @return ep_SejmPosiedzeniePunkt
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