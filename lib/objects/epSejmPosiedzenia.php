<?php
/**
 * DataSet: Posiedzenia Sejmu
 * Baza posiedzeń Sejmu 7-mej kadencji
 *
 * @package Objects\epSejmPosiedzenia
 * @version 0.1 alpha build 93
 * @author Sejmometr REST API lib Generator 1.0 <biuro@epf.org.pl>
 * @link sejmometr.pl
 *
 * @method epSejmPosiedzenia cleanFilters()
 * @method epSejmPosiedzenia cleanQueryString()
 * @method epSejmPosiedzenia cleanSort()
 * @method epSejmPosiedzenia cleanResponseType()
 * @method epSejmPosiedzenia cleanLimit()
 * @method epSejmPosiedzenia cleanPage()
 */

class epSejmPosiedzenia extends epDataset
{
	/** 
	 * Data rozpoczęcia
	 * 
	 *  
	 */
	const DATA_START = 'f_data_start';
	/** 
	 * Data zakończenia
	 * 
	 *  
	 */
	const DATA_STOP = 'f_data_stop';
	/** 
	 * 
	 * 
	 *  
	 */
	const DATA_STR = 'f_data_str';
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
	const IMG = 'f_img';
	/** 
	 * 
	 * 
	 *  
	 */
	const INFORMACJA_MARSZALKA_ID = 'f_informacja_marszalka_id';
	/** 
	 * 
	 * 
	 *  
	 */
	const KOMUNIKAT_ID = 'f_komunikat_id';
	/** 
	 * Liczba głosowań
	 * 
	 *  
	 */
	const LICZBA_GLOSOWAN = 'f_liczba_glosowan';
	/** 
	 * 
	 * 
	 *  
	 */
	const LICZBA_ODRZUCONYCH_INNE = 'f_liczba_odrzuconych_inne';
	/** 
	 * 
	 * 
	 *  
	 */
	const LICZBA_ODRZUCONYCH_POWOLAN_ODWOLAN = 'f_liczba_odrzuconych_powolan_odwolan';
	/** 
	 * 
	 * 
	 *  
	 */
	const LICZBA_ODRZUCONYCH_REFERENDOW = 'f_liczba_odrzuconych_referendow';
	/** 
	 * 
	 * 
	 *  
	 */
	const LICZBA_ODRZUCONYCH_SPRAWOZDAN_KONTROLNYCH = 'f_liczba_odrzuconych_sprawozdan_kontrolnych';
	/** 
	 * 
	 * 
	 *  
	 */
	const LICZBA_ODRZUCONYCH_UCHWAL = 'f_liczba_odrzuconych_uchwal';
	/** 
	 * 
	 * 
	 *  
	 */
	const LICZBA_ODRZUCONYCH_UMOW = 'f_liczba_odrzuconych_umow';
	/** 
	 * 
	 * 
	 *  
	 */
	const LICZBA_ODRZUCONYCH_USTAW = 'f_liczba_odrzuconych_ustaw';
	/** 
	 * 
	 * 
	 *  
	 */
	const LICZBA_ODRZUCONYCH_ZMIAN_KOMISJI = 'f_liczba_odrzuconych_zmian_komisji';
	/** 
	 * 
	 * 
	 *  
	 */
	const LICZBA_PRZYJETYCH_INNE = 'f_liczba_przyjetych_inne';
	/** 
	 * 
	 * 
	 *  
	 */
	const LICZBA_PRZYJETYCH_POWOLAN_ODWOLAN = 'f_liczba_przyjetych_powolan_odwolan';
	/** 
	 * 
	 * 
	 *  
	 */
	const LICZBA_PRZYJETYCH_REFERENDOW = 'f_liczba_przyjetych_referendow';
	/** 
	 * 
	 * 
	 *  
	 */
	const LICZBA_PRZYJETYCH_SPRAWOZDAN_KONTROLNYCH = 'f_liczba_przyjetych_sprawozdan_kontrolnych';
	/** 
	 * 
	 * 
	 *  
	 */
	const LICZBA_PRZYJETYCH_UCHWAL = 'f_liczba_przyjetych_uchwal';
	/** 
	 * 
	 * 
	 *  
	 */
	const LICZBA_PRZYJETYCH_USTAW = 'f_liczba_przyjetych_ustaw';
	/** 
	 * 
	 * 
	 *  
	 */
	const LICZBA_PRZYJETYCH_ZMIAN_KOMISJI = 'f_liczba_przyjetych_zmian_komisji';
	/** 
	 * Liczba punktów porządku dziennego
	 * 
	 *  
	 */
	const LICZBA_PUNKTOW = 'f_liczba_punktow';
	/** 
	 * 
	 * 
	 *  
	 */
	const LICZBA_RATYFIKOWANYCH_UMOW = 'f_liczba_ratyfikowanych_umow';
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
	const OPIS = 'f_opis';
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
	const ZAPOWIEDZ = 'f_zapowiedz';
    /**
     * Konstruktor
     *
     * @param array $config ustawienia konfiguracyjne
     * @see epDatasetObject::__construct()
     */
    public function __construct($config = null)
    {
        $this->alias = 'sejm_posiedzenia';
        parent::__construct($config);

    }

    /**
     * Zwraca tablicę gotowych obiektów
     * @return array|epSejmPosiedzenie[]
     */
    public function getObjects()
    {
        $objects = $this->response->getBodyObjects();
        foreach ($objects as $object) {
            if (isset($object['data'])) {
                array_push($this->objects, new epSejmPosiedzenie($object));
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
 * Obiekt: Posiedzenia Sejmu
 * Baza posiedzeń Sejmu 7-mej kadencji
 *
 * Klasa pojedynczego obiektu
 *
 *
 * @package Objects\epSejmPosiedzenie
 * @version 0.1 alpha build 93
 * @author Sejmometr REST API lib Generator 1.0 <biuro@epf.org.pl>
 * @link sejmometr.pl
 *
 * @property string $data_start
 * @property string $data_stop
 * @property string $data_str
 * @property string $id
 * @property string $img
 * @property string $informacja_marszalka_id
 * @property string $komunikat_id
 * @property string $liczba_glosowan
 * @property string $liczba_odrzuconych_inne
 * @property string $liczba_odrzuconych_powolan_odwolan
 * @property string $liczba_odrzuconych_referendow
 * @property string $liczba_odrzuconych_sprawozdan_kontrolnych
 * @property string $liczba_odrzuconych_uchwal
 * @property string $liczba_odrzuconych_umow
 * @property string $liczba_odrzuconych_ustaw
 * @property string $liczba_odrzuconych_zmian_komisji
 * @property string $liczba_przyjetych_inne
 * @property string $liczba_przyjetych_powolan_odwolan
 * @property string $liczba_przyjetych_referendow
 * @property string $liczba_przyjetych_sprawozdan_kontrolnych
 * @property string $liczba_przyjetych_uchwal
 * @property string $liczba_przyjetych_ustaw
 * @property string $liczba_przyjetych_zmian_komisji
 * @property string $liczba_punktow
 * @property string $liczba_ratyfikowanych_umow
 * @property string $liczba_wystapien
 * @property string $opis
 * @property string $tytul
 * @property string $zapowiedz
 */
class epSejmPosiedzenie extends epObject
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
        $this->alias = 'sejm_posiedzenia';
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
     * @return epSejmPosiedzenie
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
     * @return epSejmPosiedzenie
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