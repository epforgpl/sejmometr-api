<?php
/**
 * DataSet: Druki senackie
 * Druki senackie to materiały urzędowe dokumentujące prace Senatu
 *
 * @package Objects\ep_SenatDruki
 * @version 0.1 alpha build 99
 * @author Sejmometr REST API lib Generator 1.0 <biuro@epf.org.pl>
 * @link sejmometr.pl
 *
 * @method ep_SenatDruki cleanFilters()
 * @method ep_SenatDruki cleanQueryString()
 * @method ep_SenatDruki cleanSort()
 * @method ep_SenatDruki cleanResponseType()
 * @method ep_SenatDruki cleanLimit()
 * @method ep_SenatDruki cleanPage()
 */

class ep_SenatDruki extends ep_Dataset
{
	/** 
	 * Data
	 * Data wydania druku.
	 *  
	 */
	const DATA = 'f_data';
	/** 
	 * 
	 * Identyfikator eP_API dokumentu, zawierającego treść druku.
	 *  
	 */
	const DOKUMENT_ID = 'f_dokument_id';
	/** 
	 * 
	 * Identyfikator eP_API druku.
	 *  
	 */
	const ID = 'f_id';
	/** 
	 * Numer
	 * Numer druku.
	 *  
	 */
	const NUMER = 'f_numer';
	/** 
	 * Tytuł
	 * Tytuł druku.
	 *  
	 */
	const TYTUL = 'f_tytul';
    /**
     * Konstruktor
     *
     * @param array $config ustawienia konfiguracyjne
     * @see ep_DatasetObject::__construct()
     */
    public function __construct($config = null)
    {
        $this->alias = 'senat_druki';
        parent::__construct($config);

    }

    /**
     * Zwraca tablicę gotowych obiektów
     * @return array|ep_SenatDruk[]
     */
    public function getObjects()
    {
        $objects = $this->response->getBodyObjects();
        foreach ($objects as $object) {
            if (isset($object['data'])) {
                array_push($this->objects, new ep_SenatDruk($object));
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
 * Obiekt: Druki senackie
 * Druki senackie to materiały urzędowe dokumentujące prace Senatu
 *
 * Klasa pojedynczego obiektu
 *
 *
 * @package Objects\ep_SenatDruk
 * @version 0.1 alpha build 99
 * @author Sejmometr REST API lib Generator 1.0 <biuro@epf.org.pl>
 * @link sejmometr.pl
 *
 * @property string $data
 * @property string $dokument_id
 * @property string $id
 * @property string $numer
 * @property string $tytul
 */
class ep_SenatDruk extends ep_Object
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
        $this->alias = 'senat_druki';
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
     * @return ep_SenatDruk
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
     * @return ep_SenatDruk
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