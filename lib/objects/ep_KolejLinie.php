<?php
/**
 * DataSet: Linie kolejowe w Polsce
 * Zbiór zawierający listę linii kolejewych wraz z ich rozkładami.
 *
 * @package Objects\ep_KolejLinie
 * @version 0.1 alpha build 99
 * @author Sejmometr REST API lib Generator 1.0 <biuro@epf.org.pl>
 * @link sejmometr.pl
 *
 * @method ep_KolejLinie cleanFilters()
 * @method ep_KolejLinie cleanQueryString()
 * @method ep_KolejLinie cleanSort()
 * @method ep_KolejLinie cleanResponseType()
 * @method ep_KolejLinie cleanLimit()
 * @method ep_KolejLinie cleanPage()
 */

class ep_KolejLinie extends ep_Dataset
{
	/** 
	 * 
	 * 
	 *  
	 */
	const CZAST_START = 'f_czast_start';
	/** 
	 * 
	 * 
	 *  
	 */
	const CZAS_STOP = 'f_czas_stop';
	/** 
	 * 
	 * 
	 *  
	 */
	const DURATION = 'f_duration';
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
	const INFORMACJE = 'f_informacje';
	/** 
	 * 
	 * 
	 *  
	 */
	const LICZBA_STACJI = 'f_liczba_stacji';
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
	const START_STACJA_ID = 'f_start_stacja_id';
	/** 
	 * 
	 * 
	 *  
	 */
	const STOP_STACJA_ID = 'f_stop_stacja_id';
	/** 
	 * 
	 * 
	 *  
	 */
	const TRASA_OPIS = 'f_trasa_opis';
    /**
     * Konstruktor
     *
     * @param array $config ustawienia konfiguracyjne
     * @see ep_DatasetObject::__construct()
     */
    public function __construct($config = null)
    {
        $this->alias = 'kolej_linie';
        parent::__construct($config);

    }

    /**
     * Zwraca tablicę gotowych obiektów
     * @return array|ep_KolejLinia[]
     */
    public function getObjects()
    {
        $objects = $this->response->getBodyObjects();
        foreach ($objects as $object) {
            if (isset($object['data'])) {
                array_push($this->objects, new ep_KolejLinia($object));
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
 * Obiekt: Linie kolejowe w Polsce
 * Zbiór zawierający listę linii kolejewych wraz z ich rozkładami.
 *
 * Klasa pojedynczego obiektu
 *
 *
 * @package Objects\ep_KolejLinia
 * @version 0.1 alpha build 99
 * @author Sejmometr REST API lib Generator 1.0 <biuro@epf.org.pl>
 * @link sejmometr.pl
 *
 * @property string $czast_start
 * @property string $czas_stop
 * @property string $duration
 * @property string $id
 * @property string $informacje
 * @property string $liczba_stacji
 * @property string $nazwa
 * @property string $start_stacja_id
 * @property string $stop_stacja_id
 * @property string $trasa_opis
 */
class ep_KolejLinia extends ep_Object
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
        $this->alias = 'kolej_linie';
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
     * @return ep_KolejLinia
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
     * @return ep_KolejLinia
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