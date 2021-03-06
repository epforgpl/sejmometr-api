<?php
/**
 * DataSet: Orzeczenia Sądu Najwyższego
 * Baza orzeczeń Sądu Najwyższego w Polsce
 *
 * @package Objects\ep_SnOrzeczenia
 * @version 0.1 alpha build 99
 * @author Sejmometr REST API lib Generator 1.0 <biuro@epf.org.pl>
 * @link sejmometr.pl
 *
 * @method ep_SnOrzeczenia cleanFilters()
 * @method ep_SnOrzeczenia cleanQueryString()
 * @method ep_SnOrzeczenia cleanSort()
 * @method ep_SnOrzeczenia cleanResponseType()
 * @method ep_SnOrzeczenia cleanLimit()
 * @method ep_SnOrzeczenia cleanPage()
 */

class ep_SnOrzeczenia extends ep_Dataset
{
	/** 
	 * Data
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
	const FORMA = 'f_forma';
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
	const ITEM_ID = 'f_item_id';
	/** 
	 * 
	 * 
	 *  
	 */
	const IZBY_STR = 'f_izby_str';
	/** 
	 * 
	 * 
	 *  
	 */
	const JEDNOSTKA_STR = 'f_jednostka_str';
	/** 
	 * 
	 * 
	 *  
	 */
	const ORZECZENIE_SN_FORMA_ID = 'f_orzeczenie_sn_forma_id';
	/** 
	 * 
	 * 
	 *  
	 */
	const ORZECZENIE_SN_JEDNOSTKA_ID = 'f_orzeczenie_sn_jednostka_id';
	/** 
	 * 
	 * 
	 *  
	 */
	const ORZECZENIE_SN_SKLAD_ID = 'f_orzeczenie_sn_sklad_id';
	/** 
	 * 
	 * 
	 *  
	 */
	const PRZEWODNICZACY = 'f_przewodniczacy';
	/** 
	 * 
	 * 
	 *  
	 */
	const PRZEWODNICZACY_ID = 'f_przewodniczacy_id';
	/** 
	 * 
	 * 
	 *  
	 */
	const SPRAWOZDAWCY_STR = 'f_sprawozdawcy_str';
	/** 
	 * Sygnatura
	 * 
	 *  
	 */
	const SYGNATURA = 'f_sygnatura';
	/** 
	 * 
	 * 
	 *  
	 */
	const WSPOLSPRAWOZDAWCY_STR = 'f_wspolsprawozdawcy_str';
    /**
     * Konstruktor
     *
     * @param array $config ustawienia konfiguracyjne
     * @see ep_DatasetObject::__construct()
     */
    public function __construct($config = null)
    {
        $this->alias = 'sn_orzeczenia';
        parent::__construct($config);

    }

    /**
     * Zwraca tablicę gotowych obiektów
     * @return array|ep_SnOrzeczenie[]
     */
    public function getObjects()
    {
        $objects = $this->response->getBodyObjects();
        foreach ($objects as $object) {
            if (isset($object['data'])) {
                array_push($this->objects, new ep_SnOrzeczenie($object));
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
 * Obiekt: Orzeczenia Sądu Najwyższego
 * Baza orzeczeń Sądu Najwyższego w Polsce
 *
 * Klasa pojedynczego obiektu
 *
 *
 * @package Objects\ep_SnOrzeczenie
 * @version 0.1 alpha build 99
 * @author Sejmometr REST API lib Generator 1.0 <biuro@epf.org.pl>
 * @link sejmometr.pl
 *
 * @property string $data
 * @property string $dokument_id
 * @property string $forma
 * @property string $id
 * @property string $item_id
 * @property string $izby_str
 * @property string $jednostka_str
 * @property string $orzeczenie_sn_forma_id
 * @property string $orzeczenie_sn_jednostka_id
 * @property string $orzeczenie_sn_sklad_id
 * @property string $przewodniczacy
 * @property string $przewodniczacy_id
 * @property string $sprawozdawcy_str
 * @property string $sygnatura
 * @property string $wspolsprawozdawcy_str
 */
class ep_SnOrzeczenie extends ep_Object
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
        $this->alias = 'sn_orzeczenia';
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
     * @return ep_SnOrzeczenie
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
     * @return ep_SnOrzeczenie
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