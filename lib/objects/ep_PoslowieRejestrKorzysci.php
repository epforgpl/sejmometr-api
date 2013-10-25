<?php
/**
 * DataSet: Rejestr korzysci posłów
 * Dokumenty z opisami korzyści przyjmowanych przez posłów na Sejm 7-mej kadencji
 *
 * @package Objects\ep_PoslowieRejestrKorzysci
 * @version 0.1 alpha build 99
 * @author Sejmometr REST API lib Generator 1.0 <biuro@epf.org.pl>
 * @link sejmometr.pl
 *
 * @method ep_PoslowieRejestrKorzysci cleanFilters()
 * @method ep_PoslowieRejestrKorzysci cleanQueryString()
 * @method ep_PoslowieRejestrKorzysci cleanSort()
 * @method ep_PoslowieRejestrKorzysci cleanResponseType()
 * @method ep_PoslowieRejestrKorzysci cleanLimit()
 * @method ep_PoslowieRejestrKorzysci cleanPage()
 */

class ep_PoslowieRejestrKorzysci extends ep_Dataset
{
	/** 
	 * 
	 * 
	 *  
	 */
	const LUDZIE_POSLOWIE_MOWCA_ID = 'f_ludzie_poslowie_mowca_id';
	/** 
	 * 
	 * 
	 *  
	 */
	const POSLOWIE_DOPELNIACZ = 'f_poslowie_dopelniacz';
	/** 
	 * 
	 * 
	 *  
	 */
	const POSLOWIE_ID = 'f_poslowie_id';
	/** 
	 * 
	 * 
	 *  
	 */
	const POSLOWIE_KLUB_ID = 'f_poslowie_klub_id';
	/** 
	 * 
	 * 
	 *  
	 */
	const POSLOWIE_MOWCA_ID = 'f_poslowie_mowca_id';
	/** 
	 * 
	 * 
	 *  
	 */
	const POSLOWIE_NAZWA = 'f_poslowie_nazwa';
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
	const ID = 'f_id';
	/** 
	 * 
	 * 
	 *  
	 */
	const LABEL = 'f_label';
	/** 
	 * 
	 * 
	 *  
	 */
	const POSEL_ID = 'f_posel_id';
	/** 
	 * 
	 * 
	 *  
	 */
	const SEJM_KLUBY_NAZWA = 'f_sejm_kluby_nazwa';
	/** 
	 * 
	 * 
	 *  
	 */
	const SEJM_KLUBY_SKROT = 'f_sejm_kluby_skrot';
    /**
     * Konstruktor
     *
     * @param array $config ustawienia konfiguracyjne
     * @see ep_DatasetObject::__construct()
     */
    public function __construct($config = null)
    {
        $this->alias = 'poslowie_rejestr_korzysci';
        parent::__construct($config);

    }

    /**
     * Zwraca tablicę gotowych obiektów
     * @return array|ep_PoselRejestrKorzysci[]
     */
    public function getObjects()
    {
        $objects = $this->response->getBodyObjects();
        foreach ($objects as $object) {
            if (isset($object['data'])) {
                array_push($this->objects, new ep_PoselRejestrKorzysci($object));
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
 * Obiekt: Rejestr korzysci posłów
 * Dokumenty z opisami korzyści przyjmowanych przez posłów na Sejm 7-mej kadencji
 *
 * Klasa pojedynczego obiektu
 *
 *
 * @package Objects\ep_PoselRejestrKorzysci
 * @version 0.1 alpha build 99
 * @author Sejmometr REST API lib Generator 1.0 <biuro@epf.org.pl>
 * @link sejmometr.pl
 *
 * @property string $ludzie_poslowie_mowca_id $fieldset
 * @property string $poslowie_dopelniacz $fieldset
 * @property string $poslowie_id $fieldset
 * @property string $poslowie_klub_id $fieldset
 * @property string $poslowie_mowca_id $fieldset
 * @property string $poslowie_nazwa $fieldset
 * @property string $data
 * @property string $dokument_id
 * @property string $id
 * @property string $label
 * @property string $posel_id
 * @property string $sejm_kluby_nazwa $fieldset
 * @property string $sejm_kluby_skrot $fieldset
 */
class ep_PoselRejestrKorzysci extends ep_Object
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
        $this->alias = 'poslowie_rejestr_korzysci';
        parent::__construct($data);
    }

    /**
     * Magiczna metoda do pobierania danych koncowych obiektu
     * @param string $arg
     * @return mixed
     */
    public function __get($arg)
    {
		if($arg == 'ludzie_poslowie_mowca_id') { return $this->data['ludzie_poslowie.mowca_id']; }
		if($arg == 'poslowie_dopelniacz') { return $this->data['poslowie.dopelniacz']; }
		if($arg == 'poslowie_id') { return $this->data['poslowie.id']; }
		if($arg == 'poslowie_klub_id') { return $this->data['poslowie.klub_id']; }
		if($arg == 'poslowie_mowca_id') { return $this->data['poslowie.mowca_id']; }
		if($arg == 'poslowie_nazwa') { return $this->data['poslowie.nazwa']; }
		if($arg == 'sejm_kluby_nazwa') { return $this->data['sejm_kluby.nazwa']; }
		if($arg == 'sejm_kluby_skrot') { return $this->data['sejm_kluby.skrot']; }
        return $this->data->{$arg};
    }

    /**
     * Funkcja do zaladowania jednego konkretnego dokumentu
     *
     * @param int $id
     * @return ep_PoselRejestrKorzysci
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
     * @return ep_PoselRejestrKorzysci
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