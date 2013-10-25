<?php
/**
 * DataSet: Twitty posłów
 * Wpisy posłów na Twitterze
 *
 * @package Objects\epTwitty
 * @version 0.1 alpha build 93
 * @author Sejmometr REST API lib Generator 1.0 <biuro@epf.org.pl>
 * @link sejmometr.pl
 *
 * @method epTwitty cleanFilters()
 * @method epTwitty cleanQueryString()
 * @method epTwitty cleanSort()
 * @method epTwitty cleanResponseType()
 * @method epTwitty cleanLimit()
 * @method epTwitty cleanPage()
 */

class epTwitty extends epDataset
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
	const POSLOWIE_NAZWA = 'f_poslowie_nazwa';
	/** 
	 * 
	 * 
	 *  
	 */
	const SEJM_KLUBY_ID = 'f_sejm_kluby_id';
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
	 * Data publikacji
	 * 
	 *  
	 */
	const CREATED_AT = 'f_created_at';
	/** 
	 * 
	 * 
	 *  
	 */
	const CZAS_USUNIECIA = 'f_czas_usuniecia';
	/** 
	 * 
	 * 
	 *  
	 */
	const HTML = 'f_html';
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
	const LICZBA_SEKUND_DO_USUNIECIA = 'f_liczba_sekund_do_usuniecia';
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
	const TWITTER_USER_ID = 'f_twitter_user_id';
	/** 
	 * 
	 * 
	 *  
	 */
	const TWITT_ID = 'f_twitt_id';
	/** 
	 * 
	 * 
	 *  
	 */
	const USUNIETY = 'f_usuniety';
    /**
     * Konstruktor
     *
     * @param array $config ustawienia konfiguracyjne
     * @see epDatasetObject::__construct()
     */
    public function __construct($config = null)
    {
        $this->alias = 'twitter';
        parent::__construct($config);

    }

    /**
     * Zwraca tablicę gotowych obiektów
     * @return array|epTwitt[]
     */
    public function getObjects()
    {
        $objects = $this->response->getBodyObjects();
        foreach ($objects as $object) {
            if (isset($object['data'])) {
                array_push($this->objects, new epTwitt($object));
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
 * Obiekt: Twitty posłów
 * Wpisy posłów na Twitterze
 *
 * Klasa pojedynczego obiektu
 *
 *
 * @package Objects\epTwitt
 * @version 0.1 alpha build 93
 * @author Sejmometr REST API lib Generator 1.0 <biuro@epf.org.pl>
 * @link sejmometr.pl
 *
 * @property string $ludzie_poslowie_mowca_id $fieldset
 * @property string $poslowie_dopelniacz $fieldset
 * @property string $poslowie_id $fieldset
 * @property string $poslowie_nazwa $fieldset
 * @property string $sejm_kluby_id $fieldset
 * @property string $sejm_kluby_nazwa $fieldset
 * @property string $sejm_kluby_skrot $fieldset
 * @property string $created_at
 * @property string $czas_usuniecia
 * @property string $html
 * @property string $id
 * @property string $liczba_sekund_do_usuniecia
 * @property string $posel_id
 * @property string $twitter_user_id
 * @property string $twitt_id
 * @property string $usuniety
 */
class epTwitt extends epObject
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
        $this->alias = 'twitter';
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
		if($arg == 'poslowie_nazwa') { return $this->data['poslowie.nazwa']; }
		if($arg == 'sejm_kluby_id') { return $this->data['sejm_kluby.id']; }
		if($arg == 'sejm_kluby_nazwa') { return $this->data['sejm_kluby.nazwa']; }
		if($arg == 'sejm_kluby_skrot') { return $this->data['sejm_kluby.skrot']; }
        return $this->data->{$arg};
    }

    /**
     * Funkcja do zaladowania jednego konkretnego dokumentu
     *
     * @param int $id
     * @return epTwitt
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
     * @return epTwitt
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