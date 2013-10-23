<?php
/**
 * DataSet: Rejestr korzysci senatorów
 * Dokumenty z opisami korzyści przyjmowanych przez senatorów Senatu 8-mej kadencji
 *
 * @package Objects\epSenatRejestryKorzysci
 * @version 0.1 alpha build 93
 * @author Sejmometr REST API lib Generator 1.0 <biuro@epf.org.pl>
 * @link sejmometr.pl
 *
 * @method epSenatRejestryKorzysci cleanFilters()
 * @method epSenatRejestryKorzysci cleanQueryString()
 * @method epSenatRejestryKorzysci cleanSort()
 * @method epSenatRejestryKorzysci cleanResponseType()
 * @method epSenatRejestryKorzysci cleanLimit()
 * @method epSenatRejestryKorzysci cleanPage()
 */

class epSenatRejestryKorzysci extends epDataset
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
	 * 
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
     * @see epDatasetObject::__construct()
     */
    public function __construct($config = null)
    {
        $this->alias = 'senat_rejestr_korzysci';
        parent::__construct($config);

    }

    /**
     * Zwraca tablicę gotowych obiektów
     * @return array|epSenatRejestrKorzysci[]
     */
    public function getObjects()
    {
        $objects = $this->response->getBodyObjects();
        foreach ($objects as $object) {
            if (isset($object['data'])) {
                array_push($this->objects, new epSenatRejestrKorzysci($object));
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
 * Obiekt: Rejestr korzysci senatorów
 * Dokumenty z opisami korzyści przyjmowanych przez senatorów Senatu 8-mej kadencji
 *
 * Klasa pojedynczego obiektu
 *
 *
 * @package Objects\epSenatRejestrKorzysci
 * @version 0.1 alpha build 93
 * @author Sejmometr REST API lib Generator 1.0 <biuro@epf.org.pl>
 * @link sejmometr.pl
 *
 * @property string $senatorowie_id $fieldset
 * @property string $senatorowie_nazwa $fieldset
 * @property string $dokument_id
 * @property string $id
 * @property string $nazwa
 * @property string $senator_id
 */
class epSenatRejestrKorzysci extends epObject
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
        $this->alias = 'senat_rejestr_korzysci';
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
		if($arg == 'senatorowie_nazwa') { return $this->data['senatorowie.nazwa']; }
        return $this->data->{$arg};
    }

    /**
     * Funkcja do zaladowania jednego konkretnego dokumentu
     *
     * @param int $id
     * @return epSenatRejestrKorzysci
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
     * @return epSenatRejestrKorzysci
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