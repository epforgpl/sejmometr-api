<?php
/**
 * DataSet: Stacje kolejowe w Polsce
 * Zbiór danych stacji kolejowych zawierający ich nazwy, lokalizajce, a także wykaz przecinających je linii kolejowych.
 *
 * @package Objects\epKolejStacje
 * @version 0.1 alpha build 93
 * @author Sejmometr REST API lib Generator 1.0 <biuro@epf.org.pl>
 * @link sejmometr.pl
 *
 * @method epKolejStacje cleanFilters()
 * @method epKolejStacje cleanQueryString()
 * @method epKolejStacje cleanSort()
 * @method epKolejStacje cleanResponseType()
 * @method epKolejStacje cleanLimit()
 * @method epKolejStacje cleanPage()
 */

class epKolejStacje extends epDataset
{
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
	const LOC_LAT = 'f_loc_lat';
	/** 
	 * 
	 * 
	 *  
	 */
	const LOC_LNG = 'f_loc_lng';
	/** 
	 * 
	 * 
	 *  
	 */
	const NAZWA = 'f_nazwa';
    /**
     * Konstruktor
     *
     * @param array $config ustawienia konfiguracyjne
     * @see epDatasetObject::__construct()
     */
    public function __construct($config = null)
    {
        $this->alias = 'kolej_stacje';
        parent::__construct($config);

    }

    /**
     * Zwraca tablicę gotowych obiektów
     * @return array|epKolejStacja[]
     */
    public function getObjects()
    {
        $objects = $this->response->getBodyObjects();
        foreach ($objects as $object) {
            if (isset($object['data'])) {
                array_push($this->objects, new epKolejStacja($object));
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
 * Obiekt: Stacje kolejowe w Polsce
 * Zbiór danych stacji kolejowych zawierający ich nazwy, lokalizajce, a także wykaz przecinających je linii kolejowych.
 *
 * Klasa pojedynczego obiektu
 *
 *
 * @package Objects\epKolejStacja
 * @version 0.1 alpha build 93
 * @author Sejmometr REST API lib Generator 1.0 <biuro@epf.org.pl>
 * @link sejmometr.pl
 *
 * @property string $id
 * @property string $loc_lat
 * @property string $loc_lng
 * @property string $nazwa
 */
class epKolejStacja extends epObject
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
        $this->alias = 'kolej_stacje';
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
     * @return epKolejStacja
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
     * @return epKolejStacja
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