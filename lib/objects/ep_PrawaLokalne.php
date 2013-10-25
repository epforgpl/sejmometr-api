<?php
/**
 * DataSet: Prawo lokalne
 * Akty prawa lokalnego polskich województw, powiatów i gmin.
 *
 * @package Objects\ep_PrawaLokalne
 * @version 0.1 alpha build 99
 * @author Sejmometr REST API lib Generator 1.0 <biuro@epf.org.pl>
 * @link sejmometr.pl
 *
 * @method ep_PrawaLokalne cleanFilters()
 * @method ep_PrawaLokalne cleanQueryString()
 * @method ep_PrawaLokalne cleanSort()
 * @method ep_PrawaLokalne cleanResponseType()
 * @method ep_PrawaLokalne cleanLimit()
 * @method ep_PrawaLokalne cleanPage()
 */

class ep_PrawaLokalne extends ep_Dataset
{
	/** 
	 * 
	 * 
	 *  
	 */
	const AKT_NUMER = 'f_akt_numer';
	/** 
	 * 
	 * 
	 *  
	 */
	const ARCHIWUM = 'f_archiwum';
	/** 
	 * 
	 * 
	 *  
	 */
	const DATA_WYDANIA = 'f_data_wydania';
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
	const JEDNOSTKA_DOPELNIACZ = 'f_jednostka_dopelniacz';
	/** 
	 * 
	 * 
	 *  
	 */
	const JEDNOSTKA_ID = 'f_jednostka_id';
	/** 
	 * 
	 * 
	 *  
	 */
	const JEDNOSTKA_TYP = 'f_jednostka_typ';
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
	const POWIAT_ID = 'f_powiat_id';
	/** 
	 * 
	 * 
	 *  
	 */
	const ROCZNIK = 'f_rocznik';
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
	const WOJEWODZTWO_ID = 'f_wojewodztwo_id';
    /**
     * Konstruktor
     *
     * @param array $config ustawienia konfiguracyjne
     * @see ep_DatasetObject::__construct()
     */
    public function __construct($config = null)
    {
        $this->alias = 'prawo_lokalne';
        parent::__construct($config);

    }

    /**
     * Zwraca tablicę gotowych obiektów
     * @return array|ep_PrawoLokalne[]
     */
    public function getObjects()
    {
        $objects = $this->response->getBodyObjects();
        foreach ($objects as $object) {
            if (isset($object['data'])) {
                array_push($this->objects, new ep_PrawoLokalne($object));
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
 * Obiekt: Prawo lokalne
 * Akty prawa lokalnego polskich województw, powiatów i gmin.
 *
 * Klasa pojedynczego obiektu
 *
 *
 * @package Objects\ep_PrawoLokalne
 * @version 0.1 alpha build 99
 * @author Sejmometr REST API lib Generator 1.0 <biuro@epf.org.pl>
 * @link sejmometr.pl
 *
 * @property string $akt_numer
 * @property string $archiwum
 * @property string $data_wydania
 * @property string $dokument_id
 * @property string $gmina_id
 * @property string $id
 * @property string $jednostka_dopelniacz
 * @property string $jednostka_id
 * @property string $jednostka_typ
 * @property string $opis
 * @property string $powiat_id
 * @property string $rocznik
 * @property string $typ_id
 * @property string $tytul
 * @property string $tytul_skrocony
 * @property string $wojewodztwo_id
 */
class ep_PrawoLokalne extends ep_Object
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
        $this->alias = 'prawo_lokalne';
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
     * @return ep_PrawoLokalne
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
     * @return ep_PrawoLokalne
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