<?php
/**
 * DataSet: Druki w pracach rad gmin
 * Dokumenty nad którymi pracują radni gmin.
 *
 * @package Objects\ep_RadyDruki
 * @version 0.1 alpha build 99
 * @author Sejmometr REST API lib Generator 1.0 <biuro@epf.org.pl>
 * @link sejmometr.pl
 *
 * @method ep_RadyDruki cleanFilters()
 * @method ep_RadyDruki cleanQueryString()
 * @method ep_RadyDruki cleanSort()
 * @method ep_RadyDruki cleanResponseType()
 * @method ep_RadyDruki cleanLimit()
 * @method ep_RadyDruki cleanPage()
 */

class ep_RadyDruki extends ep_Dataset
{
	/** 
	 * 
	 * 
	 *  
	 */
	const GMINY_ID = 'f_gminy_id';
	/** 
	 * 
	 * 
	 * Nazwa gminy 
	 */
	const GMINY_NAZWA = 'f_gminy_nazwa';
	/** 
	 * 
	 * 
	 *  
	 */
	const GMINY_RADA_NAZWA_DOPELNIACZ = 'f_gminy_rada_nazwa_dopelniacz';
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
	const GMINA_ID = 'f_gmina_id';
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
	const NUMER = 'f_numer';
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
     * @see ep_DatasetObject::__construct()
     */
    public function __construct($config = null)
    {
        $this->alias = 'rady_druki';
        parent::__construct($config);

    }

    /**
     * Zwraca tablicę gotowych obiektów
     * @return array|ep_RadaDruk[]
     */
    public function getObjects()
    {
        $objects = $this->response->getBodyObjects();
        foreach ($objects as $object) {
            if (isset($object['data'])) {
                array_push($this->objects, new ep_RadaDruk($object));
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
 * Obiekt: Druki w pracach rad gmin
 * Dokumenty nad którymi pracują radni gmin.
 *
 * Klasa pojedynczego obiektu
 *
 *
 * @package Objects\ep_RadaDruk
 * @version 0.1 alpha build 99
 * @author Sejmometr REST API lib Generator 1.0 <biuro@epf.org.pl>
 * @link sejmometr.pl
 *
 * @property string $gminy_id $fieldset
 * @property string $gminy_nazwa $fieldset
 * @property string $gminy_rada_nazwa_dopelniacz $fieldset
 * @property string $data
 * @property string $dokument_id
 * @property string $gmina_id
 * @property string $id
 * @property string $liczba_dokumentow
 * @property string $numer
 * @property string $opis
 * @property string $tytul
 */
class ep_RadaDruk extends ep_Object
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
        $this->alias = 'rady_druki';
        parent::__construct($data);
    }

    /**
     * Magiczna metoda do pobierania danych koncowych obiektu
     * @param string $arg
     * @return mixed
     */
    public function __get($arg)
    {
		if($arg == 'gminy_id') { return $this->data['gminy.id']; }
		if($arg == 'gminy_nazwa') { return $this->data['gminy.nazwa']; }
		if($arg == 'gminy_rada_nazwa_dopelniacz') { return $this->data['gminy.rada_nazwa_dopelniacz']; }
        return $this->data->{$arg};
    }

    /**
     * Funkcja do zaladowania jednego konkretnego dokumentu
     *
     * @param int $id
     * @return ep_RadaDruk
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
     * @return ep_RadaDruk
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