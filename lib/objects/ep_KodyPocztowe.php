<?php
/**
 * DataSet: Kody pocztowe
 * Baza polskich kodów pocztowych, powiązana z rejestrem gmin, powiatów i województw
 *
 * @package Objects\ep_KodyPocztowe
 * @version 0.1 alpha build 99
 * @author Sejmometr REST API lib Generator 1.0 <biuro@epf.org.pl>
 * @link sejmometr.pl
 *
 * @method ep_KodyPocztowe cleanFilters()
 * @method ep_KodyPocztowe cleanQueryString()
 * @method ep_KodyPocztowe cleanSort()
 * @method ep_KodyPocztowe cleanResponseType()
 * @method ep_KodyPocztowe cleanLimit()
 * @method ep_KodyPocztowe cleanPage()
 */

class ep_KodyPocztowe extends ep_Dataset
{
	/** 
	 * 
	 * 
	 * Fraza określająca gminy leżące w obszarze kodu pocztowego 
	 */
	const GMINY = 'f_gminy';
	/** 
	 * 
	 * 
	 *  
	 */
	const ID = 'f_id';
	/** 
	 * 
	 * 
	 * Kod pocztowy jako fraza 
	 */
	const KOD = 'f_kod';
	/** 
	 * Kod pocztowy
	 * 
	 * Kod pocztowy jako liczba całkowita 
	 */
	const KOD_INT = 'f_kod_int';
	/** 
	 * 
	 * 
	 * Liczba gmin leżących w obszarze kodu pocztowego 
	 */
	const LICZBA_GMIN = 'f_liczba_gmin';
	/** 
	 * 
	 * 
	 * Liczba powiatów leżących w obszarze kodu pocztowego 
	 */
	const LICZBA_POWIATOW = 'f_liczba_powiatow';
	/** 
	 * 
	 * 
	 * Fraza określająca miejscowości leżące w obszarze kodu pocztowego (mogą nie być wszystkie) 
	 */
	const MIEJSCOWOSCI_STR = 'f_miejscowosci_str';
	/** 
	 * 
	 * 
	 * Nazwa województwa, w któtym występuje kod pocztowy 
	 */
	const WOJEWODZTWO = 'f_wojewodztwo';
	/** 
	 * 
	 * 
	 * ID województwa (	
	 * @see epWojewodztwa 
	 * ), w którym występuje kod pocztowy 
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
        $this->alias = 'kody_pocztowe';
        parent::__construct($config);

    }

    /**
     * Zwraca tablicę gotowych obiektów
     * @return array|ep_KodPocztowy[]
     */
    public function getObjects()
    {
        $objects = $this->response->getBodyObjects();
        foreach ($objects as $object) {
            if (isset($object['data'])) {
                array_push($this->objects, new ep_KodPocztowy($object));
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
 * Obiekt: Kody pocztowe
 * Baza polskich kodów pocztowych, powiązana z rejestrem gmin, powiatów i województw
 *
 * Klasa pojedynczego obiektu
 *
 *
 * @package Objects\ep_KodPocztowy
 * @version 0.1 alpha build 99
 * @author Sejmometr REST API lib Generator 1.0 <biuro@epf.org.pl>
 * @link sejmometr.pl
 *
 * @property string $gminy
 * @property string $id
 * @property string $kod
 * @property string $kod_int
 * @property string $liczba_gmin
 * @property string $liczba_powiatow
 * @property string $miejscowosci_str
 * @property string $wojewodztwo
 * @property string $wojewodztwo_id
 */
class ep_KodPocztowy extends ep_Object
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
        $this->alias = 'kody_pocztowe';
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
     * @return ep_KodPocztowy
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
     * @return ep_KodPocztowy
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