<?php
/**
 * DataSet: Komunikaty Kancelarii Sejmu
 * Komunikaty przekazywane mediom przez Kancelarię Sejmu
 *
 * @package Objects\epSejmKomunikaty
 * @version 0.1 alpha build 93
 * @author Sejmometr REST API lib Generator 1.0 <biuro@epf.org.pl>
 * @link sejmometr.pl
 *
 * @method epSejmKomunikaty cleanFilters()
 * @method epSejmKomunikaty cleanQueryString()
 * @method epSejmKomunikaty cleanSort()
 * @method epSejmKomunikaty cleanResponseType()
 * @method epSejmKomunikaty cleanLimit()
 * @method epSejmKomunikaty cleanPage()
 */

class epSejmKomunikaty extends epDataset
{
	/** 
	 * 
	 * 
	 *  
	 */
	const DATE = 'f_date';
	/** 
	 * Data opublikowania
	 * 
	 *  
	 */
	const DATETIME = 'f_datetime';
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
	const OPIS = 'f_opis';
	/** 
	 * 
	 * 
	 *  
	 */
	const TYTUL = 'f_tytul';
    /**
     * Konstruktor
     *
     * @param array $config ustawienia konfiguracyjne
     * @see epDatasetObject::__construct()
     */
    public function __construct($config = null)
    {
        $this->alias = 'sejm_komunikaty';
        parent::__construct($config);

    }

    /**
     * Zwraca tablicę gotowych obiektów
     * @return array|epSejmKomunikat[]
     */
    public function getObjects()
    {
        $objects = $this->response->getBodyObjects();
        foreach ($objects as $object) {
            if (isset($object['data'])) {
                array_push($this->objects, new epSejmKomunikat($object));
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
 * Obiekt: Komunikaty Kancelarii Sejmu
 * Komunikaty przekazywane mediom przez Kancelarię Sejmu
 *
 * Klasa pojedynczego obiektu
 *
 *
 * @package Objects\epSejmKomunikat
 * @version 0.1 alpha build 93
 * @author Sejmometr REST API lib Generator 1.0 <biuro@epf.org.pl>
 * @link sejmometr.pl
 *
 * @property string $date
 * @property string $datetime
 * @property string $id
 * @property string $img
 * @property string $opis
 * @property string $tytul
 */
class epSejmKomunikat extends epObject
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
        $this->alias = 'sejm_komunikaty';
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
     * @return epSejmKomunikat
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
     * @return epSejmKomunikat
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