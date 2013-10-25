<?php
/**
 * DataSet: Raporty Najwyższej Izby Kontroli
 * Raporty i wystąpienia pokontrolne publikowane przez Najwyższą Izbę Kontroli
 *
 * @package Objects\ep_NikRaporty
 * @version 0.1 alpha build 99
 * @author Sejmometr REST API lib Generator 1.0 <biuro@epf.org.pl>
 * @link sejmometr.pl
 *
 * @method ep_NikRaporty cleanFilters()
 * @method ep_NikRaporty cleanQueryString()
 * @method ep_NikRaporty cleanSort()
 * @method ep_NikRaporty cleanResponseType()
 * @method ep_NikRaporty cleanLimit()
 * @method ep_NikRaporty cleanPage()
 */

class ep_NikRaporty extends ep_Dataset
{
	/** 
	 * Data moderacji raportu
	 * 
	 * Data ostatniej zmiany dokumentu 
	 */
	const DATA_MODERACJI = 'f_data_moderacji';
	/** 
	 * Data publikacji raportu
	 * 
	 * Data publikacji dokumentu 
	 */
	const DATA_PUBLIKACJI = 'f_data_publikacji';
	/** 
	 * 
	 * 
	 * ID głównego dokumentu z zawartością raportu 
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
	const NIK_ID = 'f_nik_id';
	/** 
	 * Numer raportu
	 * 
	 *  
	 */
	const NUMER = 'f_numer';
	/** 
	 * 
	 * 
	 *  
	 */
	const PDF_ID = 'f_pdf_id';
	/** 
	 * Tytuł raportu
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
        $this->alias = 'nik_raporty';
        parent::__construct($config);

    }

    /**
     * Zwraca tablicę gotowych obiektów
     * @return array|ep_NikRaport[]
     */
    public function getObjects()
    {
        $objects = $this->response->getBodyObjects();
        foreach ($objects as $object) {
            if (isset($object['data'])) {
                array_push($this->objects, new ep_NikRaport($object));
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
 * Obiekt: Raporty Najwyższej Izby Kontroli
 * Raporty i wystąpienia pokontrolne publikowane przez Najwyższą Izbę Kontroli
 *
 * Klasa pojedynczego obiektu
 *
 *
 * @package Objects\ep_NikRaport
 * @version 0.1 alpha build 99
 * @author Sejmometr REST API lib Generator 1.0 <biuro@epf.org.pl>
 * @link sejmometr.pl
 *
 * @property string $data_moderacji
 * @property string $data_publikacji
 * @property string $dokument_id
 * @property string $id
 * @property string $nik_id
 * @property string $numer
 * @property string $pdf_id
 * @property string $tytul
 */
class ep_NikRaport extends ep_Object
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
        $this->alias = 'nik_raporty';
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
     * @return ep_NikRaport
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
     * @return ep_NikRaport
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