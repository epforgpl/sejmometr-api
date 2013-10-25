<?php
/**
 * DataSet: Etapy prac legislacyjnych rządu
 * Wydarzenia w ramach rządowego procesu legislacyjnego
 *
 * @package Objects\ep_RclEtapy
 * @version 0.1 alpha build 99
 * @author Sejmometr REST API lib Generator 1.0 <biuro@epf.org.pl>
 * @link sejmometr.pl
 *
 * @method ep_RclEtapy cleanFilters()
 * @method ep_RclEtapy cleanQueryString()
 * @method ep_RclEtapy cleanSort()
 * @method ep_RclEtapy cleanResponseType()
 * @method ep_RclEtapy cleanLimit()
 * @method ep_RclEtapy cleanPage()
 */

class ep_RclEtapy extends ep_Dataset
{
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
	const ID = 'f_id';
	/** 
	 * 
	 * 
	 *  
	 */
	const LICZBA_DOKUMENTOW = 'f_liczba_dokumentow';
	/** 
	 * 
	 * 
	 *  
	 */
	const LISTA_ID = 'f_lista_id';
	/** 
	 * 
	 * 
	 *  
	 */
	const PROJEKT_ID = 'f_projekt_id';
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
	const TYTUL_PROJEKTU = 'f_tytul_projektu';
	/** 
	 * 
	 * 
	 *  
	 */
	const RCL_ETAPY_TYPY_TYTUL = 'f_rcl_etapy_typy_tytul';
    /**
     * Konstruktor
     *
     * @param array $config ustawienia konfiguracyjne
     * @see ep_DatasetObject::__construct()
     */
    public function __construct($config = null)
    {
        $this->alias = 'rcl_etapy';
        parent::__construct($config);

    }

    /**
     * Zwraca tablicę gotowych obiektów
     * @return array|ep_RclEtap[]
     */
    public function getObjects()
    {
        $objects = $this->response->getBodyObjects();
        foreach ($objects as $object) {
            if (isset($object['data'])) {
                array_push($this->objects, new ep_RclEtap($object));
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
 * Obiekt: Etapy prac legislacyjnych rządu
 * Wydarzenia w ramach rządowego procesu legislacyjnego
 *
 * Klasa pojedynczego obiektu
 *
 *
 * @package Objects\ep_RclEtap
 * @version 0.1 alpha build 99
 * @author Sejmometr REST API lib Generator 1.0 <biuro@epf.org.pl>
 * @link sejmometr.pl
 *
 * @property string $data
 * @property string $dokument_id
 * @property string $id
 * @property string $liczba_dokumentow
 * @property string $lista_id
 * @property string $projekt_id
 * @property string $typ_id
 * @property string $tytul_projektu
 * @property string $rcl_etapy_typy_tytul $fieldset
 */
class ep_RclEtap extends ep_Object
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
        $this->alias = 'rcl_etapy';
        parent::__construct($data);
    }

    /**
     * Magiczna metoda do pobierania danych koncowych obiektu
     * @param string $arg
     * @return mixed
     */
    public function __get($arg)
    {
		if($arg == 'rcl_etapy_typy_tytul') { return $this->data['rcl_etapy_typy.tytul']; }
        return $this->data->{$arg};
    }

    /**
     * Funkcja do zaladowania jednego konkretnego dokumentu
     *
     * @param int $id
     * @return ep_RclEtap
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
     * @return ep_RclEtap
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