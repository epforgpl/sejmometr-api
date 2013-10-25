<?php
/**
 * DataSet: Zamrażarka Marszałka
 * Projekty ustaw i uchwał, które wpłyneły do Sejmu, ale nie zostały skierowane do pierwszego czytania.
 *
 * @package Objects\ep_ZamrazarkaProjekty
 * @version 0.1 alpha build 99
 * @author Sejmometr REST API lib Generator 1.0 <biuro@epf.org.pl>
 * @link sejmometr.pl
 *
 * @method ep_ZamrazarkaProjekty cleanFilters()
 * @method ep_ZamrazarkaProjekty cleanQueryString()
 * @method ep_ZamrazarkaProjekty cleanSort()
 * @method ep_ZamrazarkaProjekty cleanResponseType()
 * @method ep_ZamrazarkaProjekty cleanLimit()
 * @method ep_ZamrazarkaProjekty cleanPage()
 */

class ep_ZamrazarkaProjekty extends ep_Dataset
{
	/** 
	 * 
	 * 
	 *  
	 */
	const AUTORZY_STR = 'f_autorzy_str';
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
	const PROJEKT_ID = 'f_projekt_id';
	/** 
	 * 
	 * 
	 *  
	 */
	const REPREZENTANT_FUNKCJA_ID = 'f_reprezentant_funkcja_id';
	/** 
	 * 
	 * 
	 *  
	 */
	const REPREZENTANT_ID = 'f_reprezentant_id';
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
	const TYTUL_SKROCONY = 'f_tytul_skrocony';
	/** 
	 * 
	 * 
	 *  
	 */
	const ZAMRAZARKA = 'f_zamrazarka';
    /**
     * Konstruktor
     *
     * @param array $config ustawienia konfiguracyjne
     * @see ep_DatasetObject::__construct()
     */
    public function __construct($config = null)
    {
        $this->alias = 'sejm_zamrazarka';
        parent::__construct($config);

    }

    /**
     * Zwraca tablicę gotowych obiektów
     * @return array|ep_ZamrazarkaProjekt[]
     */
    public function getObjects()
    {
        $objects = $this->response->getBodyObjects();
        foreach ($objects as $object) {
            if (isset($object['data'])) {
                array_push($this->objects, new ep_ZamrazarkaProjekt($object));
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
 * Obiekt: Zamrażarka Marszałka
 * Projekty ustaw i uchwał, które wpłyneły do Sejmu, ale nie zostały skierowane do pierwszego czytania.
 *
 * Klasa pojedynczego obiektu
 *
 *
 * @package Objects\ep_ZamrazarkaProjekt
 * @version 0.1 alpha build 99
 * @author Sejmometr REST API lib Generator 1.0 <biuro@epf.org.pl>
 * @link sejmometr.pl
 *
 * @property string $autorzy_str
 * @property string $data
 * @property string $dokument_id
 * @property string $druk_id
 * @property string $id
 * @property string $opis
 * @property string $projekt_id
 * @property string $reprezentant_funkcja_id
 * @property string $reprezentant_id
 * @property string $typ_id
 * @property string $tytul
 * @property string $tytul_skrocony
 * @property string $zamrazarka
 */
class ep_ZamrazarkaProjekt extends ep_Object
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
        $this->alias = 'sejm_zamrazarka';
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
     * @return ep_ZamrazarkaProjekt
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
     * @return ep_ZamrazarkaProjekt
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