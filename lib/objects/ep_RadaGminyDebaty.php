<?php
/**
 * DataSet: Debaty na posiedzeniach rad gmin
 * Debaty prowadzone na posiedzeniach rad gmin
 *
 * @package Objects\epRadaGminyDebaty
 * @version 0.1 alpha build 93
 * @author Sejmometr REST API lib Generator 1.0 <biuro@epf.org.pl>
 * @link sejmometr.pl
 *
 * @method epRadaGminyDebaty cleanFilters()
 * @method epRadaGminyDebaty cleanQueryString()
 * @method epRadaGminyDebaty cleanSort()
 * @method epRadaGminyDebaty cleanResponseType()
 * @method epRadaGminyDebaty cleanLimit()
 * @method epRadaGminyDebaty cleanPage()
 */

class epRadaGminyDebaty extends epDataset
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
	const ID = 'f_id';
	/** 
	 * 
	 * 
	 *  
	 */
	const KOLEJNOSC = 'f_kolejnosc';
	/** 
	 * 
	 * 
	 *  
	 */
	const NUMER_PUNKTU = 'f_numer_punktu';
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
	const POSIEDZENIE_ID = 'f_posiedzenie_id';
	/** 
	 * 
	 * 
	 *  
	 */
	const TAG = 'f_tag';
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
	const YT_VIDEO_ID = 'f_yt_video_id';
	/** 
	 * 
	 * 
	 *  
	 */
	const RADY_GMIN_POSIEDZENIA_DATA = 'f_rady_gmin_posiedzenia_data';
	/** 
	 * 
	 * 
	 *  
	 */
	const RADY_GMIN_POSIEDZENIA_GMINA_ID = 'f_rady_gmin_posiedzenia_gmina_id';
	/** 
	 * 
	 * 
	 *  
	 */
	const RADY_GMIN_POSIEDZENIA_ID = 'f_rady_gmin_posiedzenia_id';
	/** 
	 * 
	 * 
	 *  
	 */
	const RADY_GMIN_POSIEDZENIA_NUMER = 'f_rady_gmin_posiedzenia_numer';
	/** 
	 * 
	 * 
	 *  
	 */
	const RADY_GMIN_POSIEDZENIA_TAG = 'f_rady_gmin_posiedzenia_tag';
	/** 
	 * 
	 * 
	 *  
	 */
	const RADY_GMIN_POSIEDZENIA_YT_PLAYLIST_ID = 'f_rady_gmin_posiedzenia_yt_playlist_id';
    /**
     * Konstruktor
     *
     * @param array $config ustawienia konfiguracyjne
     * @see epDatasetObject::__construct()
     */
    public function __construct($config = null)
    {
        $this->alias = 'rady_gmin_debaty';
        parent::__construct($config);

    }

    /**
     * Zwraca tablicę gotowych obiektów
     * @return array|epRadaGminyDebata[]
     */
    public function getObjects()
    {
        $objects = $this->response->getBodyObjects();
        foreach ($objects as $object) {
            if (isset($object['data'])) {
                array_push($this->objects, new epRadaGminyDebata($object));
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
 * Obiekt: Debaty na posiedzeniach rad gmin
 * Debaty prowadzone na posiedzeniach rad gmin
 *
 * Klasa pojedynczego obiektu
 *
 *
 * @package Objects\epRadaGminyDebata
 * @version 0.1 alpha build 93
 * @author Sejmometr REST API lib Generator 1.0 <biuro@epf.org.pl>
 * @link sejmometr.pl
 *
 * @property string $gminy_id $fieldset
 * @property string $gminy_nazwa $fieldset
 * @property string $gminy_rada_nazwa_dopelniacz $fieldset
 * @property string $id
 * @property string $kolejnosc
 * @property string $numer_punktu
 * @property string $opis
 * @property string $posiedzenie_id
 * @property string $tag
 * @property string $tytul
 * @property string $yt_video_id
 * @property string $rady_gmin_posiedzenia_data $fieldset
 * @property string $rady_gmin_posiedzenia_gmina_id $fieldset
 * @property string $rady_gmin_posiedzenia_id $fieldset
 * @property string $rady_gmin_posiedzenia_numer $fieldset
 * @property string $rady_gmin_posiedzenia_tag $fieldset
 * @property string $rady_gmin_posiedzenia_yt_playlist_id $fieldset
 */
class epRadaGminyDebata extends epObject
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
        $this->alias = 'rady_gmin_debaty';
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
		if($arg == 'rady_gmin_posiedzenia_data') { return $this->data['rady_gmin_posiedzenia.data']; }
		if($arg == 'rady_gmin_posiedzenia_gmina_id') { return $this->data['rady_gmin_posiedzenia.gmina_id']; }
		if($arg == 'rady_gmin_posiedzenia_id') { return $this->data['rady_gmin_posiedzenia.id']; }
		if($arg == 'rady_gmin_posiedzenia_numer') { return $this->data['rady_gmin_posiedzenia.numer']; }
		if($arg == 'rady_gmin_posiedzenia_tag') { return $this->data['rady_gmin_posiedzenia.tag']; }
		if($arg == 'rady_gmin_posiedzenia_yt_playlist_id') { return $this->data['rady_gmin_posiedzenia.yt_playlist_id']; }
        return $this->data->{$arg};
    }

    /**
     * Funkcja do zaladowania jednego konkretnego dokumentu
     *
     * @param int $id
     * @return epRadaGminyDebata
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
     * @return epRadaGminyDebata
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