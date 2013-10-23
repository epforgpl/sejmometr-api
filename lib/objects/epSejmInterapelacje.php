<?php
/**
 * DataSet: Interpelacje
 * Interpelacje to pisma posłów do premiera lub ministrów, zwracające uwagę na konkretny problem. Adresaci mają obowiązek udzielania odpowiedzi na interpelacje poselskie.
 *
 * @package Objects\epSejmInterapelacje
 * @version 0.1 alpha build 93
 * @author Sejmometr REST API lib Generator 1.0 <biuro@epf.org.pl>
 * @link sejmometr.pl
 *
 * @method epSejmInterapelacje cleanFilters()
 * @method epSejmInterapelacje cleanQueryString()
 * @method epSejmInterapelacje cleanSort()
 * @method epSejmInterapelacje cleanResponseType()
 * @method epSejmInterapelacje cleanLimit()
 * @method epSejmInterapelacje cleanPage()
 */

class epSejmInterapelacje extends epDataset
{
	/** 
	 * 
	 * 
	 *  
	 */
	const ADRESACI_STR = 'f_adresaci_str';
	/** 
	 * Data ogłoszenia
	 * 
	 *  
	 */
	const DATA_OGLOSZENIA = 'f_data_ogloszenia';
	/** 
	 * 
	 * 
	 *  
	 */
	const DATA_STATUS = 'f_data_status';
	/** 
	 * Data wpływu
	 * 
	 *  
	 */
	const DATA_WPLYWU = 'f_data_wplywu';
	/** 
	 * 
	 * 
	 *  
	 */
	const ID = 'f_id';
	/** 
	 * Liczba zgłaszających posłów
	 * 
	 *  
	 */
	const LICZBA_POSLOW = 'f_liczba_poslow';
	/** 
	 * 
	 * 
	 *  
	 */
	const MOWCA_ID = 'f_mowca_id';
	/** 
	 * Numer
	 * 
	 *  
	 */
	const NUMER = 'f_numer';
	/** 
	 * 
	 * 
	 *  
	 */
	const OGLOSZENIE_POSIEDZENIE_ID = 'f_ogloszenie_posiedzenie_id';
	/** 
	 * 
	 * 
	 *  
	 */
	const POSLOWIE_STR = 'f_poslowie_str';
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
	const TYP_ID = 'f_typ_id';
	/** 
	 * 
	 * 
	 *  
	 */
	const TYP_NAZWA = 'f_typ_nazwa';
	/** 
	 * Tytuł
	 * 
	 *  
	 */
	const TYTUL = 'f_tytul';
	/** 
	 * 
	 * 
	 *  
	 */
	const TYTUL_SKROCONY = 'f_tytul_skrocony';
    /**
     * Konstruktor
     *
     * @param array $config ustawienia konfiguracyjne
     * @see epDatasetObject::__construct()
     */
    public function __construct($config = null)
    {
        $this->alias = 'sejm_interpelacje';
        parent::__construct($config);

    }

    /**
     * Zwraca tablicę gotowych obiektów
     * @return array|epSejmInterapelacja[]
     */
    public function getObjects()
    {
        $objects = $this->response->getBodyObjects();
        foreach ($objects as $object) {
            if (isset($object['data'])) {
                array_push($this->objects, new epSejmInterapelacja($object));
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
 * Obiekt: Interpelacje
 * Interpelacje to pisma posłów do premiera lub ministrów, zwracające uwagę na konkretny problem. Adresaci mają obowiązek udzielania odpowiedzi na interpelacje poselskie.
 *
 * Klasa pojedynczego obiektu
 *
 *
 * @package Objects\epSejmInterapelacja
 * @version 0.1 alpha build 93
 * @author Sejmometr REST API lib Generator 1.0 <biuro@epf.org.pl>
 * @link sejmometr.pl
 *
 * @property string $adresaci_str
 * @property string $data_ogloszenia
 * @property string $data_status
 * @property string $data_wplywu
 * @property string $id
 * @property string $liczba_poslow
 * @property string $mowca_id
 * @property string $numer
 * @property string $ogloszenie_posiedzenie_id
 * @property string $poslowie_str
 * @property string $skrot
 * @property string $typ_id
 * @property string $typ_nazwa
 * @property string $tytul
 * @property string $tytul_skrocony
 */
class epSejmInterapelacja extends epObject
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
        $this->alias = 'sejm_interpelacje';
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
     * @return epSejmInterapelacja
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
     * @return epSejmInterapelacja
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