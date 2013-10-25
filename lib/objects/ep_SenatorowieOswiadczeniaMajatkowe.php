<?php
/**
 * DataSet: Oświadczenia majątkowe senatorów
 * Oświadczenia majątkowe senatorów Senatu 7-mej kadencji
 *
 * @package Objects\ep_SenatorowieOswiadczeniaMajatkowe
 * @version 0.1 alpha build 99
 * @author Sejmometr REST API lib Generator 1.0 <biuro@epf.org.pl>
 * @link sejmometr.pl
 *
 * @method ep_SenatorowieOswiadczeniaMajatkowe cleanFilters()
 * @method ep_SenatorowieOswiadczeniaMajatkowe cleanQueryString()
 * @method ep_SenatorowieOswiadczeniaMajatkowe cleanSort()
 * @method ep_SenatorowieOswiadczeniaMajatkowe cleanResponseType()
 * @method ep_SenatorowieOswiadczeniaMajatkowe cleanLimit()
 * @method ep_SenatorowieOswiadczeniaMajatkowe cleanPage()
 */

class ep_SenatorowieOswiadczeniaMajatkowe extends ep_Dataset
{
	/** 
	 * 
	 * 
	 *  
	 */
	const SENATOROWIE_ID = 'f_senatorowie_id';
	/** 
	 * 
	 * 
	 *  
	 */
	const SENATOROWIE_MOWCA_ID = 'f_senatorowie_mowca_id';
	/** 
	 * Imię i nazwisko
	 * 
	 *  
	 */
	const SENATOROWIE_NAZWA = 'f_senatorowie_nazwa';
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
	 * Nazwa
	 * 
	 *  
	 */
	const NAZWA = 'f_nazwa';
	/** 
	 * 
	 * 
	 *  
	 */
	const SENATOR_ID = 'f_senator_id';
    /**
     * Konstruktor
     *
     * @param array $config ustawienia konfiguracyjne
     * @see ep_DatasetObject::__construct()
     */
    public function __construct($config = null)
    {
        $this->alias = 'senatorowie_oswiadczenia_majatkowe';
        parent::__construct($config);

    }

    /**
     * Zwraca tablicę gotowych obiektów
     * @return array|ep_SenatorowieOswiadczenieMajatkowe[]
     */
    public function getObjects()
    {
        $objects = $this->response->getBodyObjects();
        foreach ($objects as $object) {
            if (isset($object['data'])) {
                array_push($this->objects, new ep_SenatorowieOswiadczenieMajatkowe($object));
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
 * Obiekt: Oświadczenia majątkowe senatorów
 * Oświadczenia majątkowe senatorów Senatu 7-mej kadencji
 *
 * Klasa pojedynczego obiektu
 *
 *
 * @package Objects\ep_SenatorowieOswiadczenieMajatkowe
 * @version 0.1 alpha build 99
 * @author Sejmometr REST API lib Generator 1.0 <biuro@epf.org.pl>
 * @link sejmometr.pl
 *
 * @property string $senatorowie_id $fieldset
 * @property string $senatorowie_mowca_id $fieldset
 * @property string $senatorowie_nazwa $fieldset
 * @property string $dokument_id
 * @property string $id
 * @property string $nazwa
 * @property string $senator_id
 */
class ep_SenatorowieOswiadczenieMajatkowe extends ep_Object
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
        $this->alias = 'senatorowie_oswiadczenia_majatkowe';
        parent::__construct($data);
    }

    /**
     * Magiczna metoda do pobierania danych koncowych obiektu
     * @param string $arg
     * @return mixed
     */
    public function __get($arg)
    {
		if($arg == 'senatorowie_id') { return $this->data['senatorowie.id']; }
		if($arg == 'senatorowie_mowca_id') { return $this->data['senatorowie.mowca_id']; }
		if($arg == 'senatorowie_nazwa') { return $this->data['senatorowie.nazwa']; }
        return $this->data->{$arg};
    }

    /**
     * Funkcja do zaladowania jednego konkretnego dokumentu
     *
     * @param int $id
     * @return ep_SenatorowieOswiadczenieMajatkowe
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
     * @return ep_SenatorowieOswiadczenieMajatkowe
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