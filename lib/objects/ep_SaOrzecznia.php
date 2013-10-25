<?php
/**
 * DataSet: Orzeczenia sądów administracyjnych
 * Baza orzeczeń sądów administracyjnych w Polsce
 *
 * @package Objects\ep_SaOrzecznia
 * @version 0.1 alpha build 99
 * @author Sejmometr REST API lib Generator 1.0 <biuro@epf.org.pl>
 * @link sejmometr.pl
 *
 * @method ep_SaOrzecznia cleanFilters()
 * @method ep_SaOrzecznia cleanQueryString()
 * @method ep_SaOrzecznia cleanSort()
 * @method ep_SaOrzecznia cleanResponseType()
 * @method ep_SaOrzecznia cleanLimit()
 * @method ep_SaOrzecznia cleanPage()
 */

class ep_SaOrzecznia extends ep_Dataset
{
	/** 
	 * Data orzeczenia
	 * 
	 *  
	 */
	const DATA_ORZECZENIA = 'f_data_orzeczenia';
	/** 
	 * Data wpływu
	 * 
	 *  
	 */
	const DATA_WPLYWU = 'f_data_wplywu';
	/** 
	 * Długość postępowania sądowego
	 * 
	 *  
	 */
	const DLUGOSC_ROZPATRYWANIA = 'f_dlugosc_rozpatrywania';
	/** 
	 * 
	 * 
	 *  
	 */
	const HASLA_STR = 'f_hasla_str';
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
	const NSA_ID = 'f_nsa_id';
	/** 
	 * 
	 * 
	 *  
	 */
	const ODREBNE_STATUS = 'f_odrebne_status';
	/** 
	 * 
	 * 
	 *  
	 */
	const PRAWOMOCNE = 'f_prawomocne';
	/** 
	 * 
	 * 
	 *  
	 */
	const SAD_DOPELNIACZ = 'f_sad_dopelniacz';
	/** 
	 * 
	 * 
	 *  
	 */
	const SAD_ID = 'f_sad_id';
	/** 
	 * 
	 * 
	 *  
	 */
	const SAD_NAZWA = 'f_sad_nazwa';
	/** 
	 * 
	 * 
	 *  
	 */
	const SENTENCJA_STATUS = 'f_sentencja_status';
	/** 
	 * Skarżony organ
	 * 
	 *  
	 */
	const SKARZONY_ORGAN_ID = 'f_skarzony_organ_id';
	/** 
	 * 
	 * 
	 *  
	 */
	const SKARZONY_ORGAN_STR = 'f_skarzony_organ_str';
	/** 
	 * Sygnatura
	 * 
	 *  
	 */
	const SYGNATURA = 'f_sygnatura';
	/** 
	 * 
	 * 
	 *  
	 */
	const TEZY_STATUS = 'f_tezy_status';
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
	const TYP_STR = 'f_typ_str';
	/** 
	 * 
	 * 
	 *  
	 */
	const UZASADNIENIE_STATUS = 'f_uzasadnienie_status';
	/** 
	 * 
	 * 
	 *  
	 */
	const UZO_STATUS = 'f_uzo_status';
	/** 
	 * 
	 * 
	 *  
	 */
	const WYNIK_STR = 'f_wynik_str';
    /**
     * Konstruktor
     *
     * @param array $config ustawienia konfiguracyjne
     * @see ep_DatasetObject::__construct()
     */
    public function __construct($config = null)
    {
        $this->alias = 'sa_orzeczenia';
        parent::__construct($config);

    }

    /**
     * Zwraca tablicę gotowych obiektów
     * @return array|ep_SaOrzeczenie[]
     */
    public function getObjects()
    {
        $objects = $this->response->getBodyObjects();
        foreach ($objects as $object) {
            if (isset($object['data'])) {
                array_push($this->objects, new ep_SaOrzeczenie($object));
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
 * Obiekt: Orzeczenia sądów administracyjnych
 * Baza orzeczeń sądów administracyjnych w Polsce
 *
 * Klasa pojedynczego obiektu
 *
 *
 * @package Objects\ep_SaOrzeczenie
 * @version 0.1 alpha build 99
 * @author Sejmometr REST API lib Generator 1.0 <biuro@epf.org.pl>
 * @link sejmometr.pl
 *
 * @property string $data_orzeczenia
 * @property string $data_wplywu
 * @property string $dlugosc_rozpatrywania
 * @property string $hasla_str
 * @property string $id
 * @property string $nsa_id
 * @property string $odrebne_status
 * @property string $prawomocne
 * @property string $sad_dopelniacz
 * @property string $sad_id
 * @property string $sad_nazwa
 * @property string $sentencja_status
 * @property string $skarzony_organ_id
 * @property string $skarzony_organ_str
 * @property string $sygnatura
 * @property string $tezy_status
 * @property string $typ_id
 * @property string $typ_str
 * @property string $uzasadnienie_status
 * @property string $uzo_status
 * @property string $wynik_str
 */
class ep_SaOrzeczenie extends ep_Object
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
        $this->alias = 'sa_orzeczenia';
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
     * @return ep_SaOrzeczenie
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
     * @return ep_SaOrzeczenie
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