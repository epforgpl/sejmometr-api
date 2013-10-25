<?php
/**
 * DataSet: Orzeczenia Sądów Powszechnych
 * Baza orzeczeń sądów powszechnych w Polsce
 *
 * @package Objects\ep_SpOrzeczenia
 * @version 0.1 alpha build 99
 * @author Sejmometr REST API lib Generator 1.0 <biuro@epf.org.pl>
 * @link sejmometr.pl
 *
 * @method ep_SpOrzeczenia cleanFilters()
 * @method ep_SpOrzeczenia cleanQueryString()
 * @method ep_SpOrzeczenia cleanSort()
 * @method ep_SpOrzeczenia cleanResponseType()
 * @method ep_SpOrzeczenia cleanLimit()
 * @method ep_SpOrzeczenia cleanPage()
 */

class ep_SpOrzeczenia extends ep_Dataset
{
	/** 
	 * 
	 * 
	 *  
	 */
	const SADY_SP_DOPELNIACZ = 'f_sady_sp_dopelniacz';
	/** 
	 * 
	 * 
	 *  
	 */
	const AKCEPT = 'f_akcept';
	/** 
	 * Data orzeczenia
	 * 
	 *  
	 */
	const DATA = 'f_data';
	/** 
	 * 
	 * 
	 *  
	 */
	const HASLA_TEMATYCZNE = 'f_hasla_tematyczne';
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
	const PODSTAWA_PRAWNA = 'f_podstawa_prawna';
	/** 
	 * 
	 * 
	 *  
	 */
	const SAD = 'f_sad';
	/** 
	 * Sąd
	 * 
	 *  
	 */
	const SAD_SP_ID = 'f_sad_sp_id';
	/** 
	 * 
	 * 
	 *  
	 */
	const STR_IDENT = 'f_str_ident';
	/** 
	 * 
	 * 
	 *  
	 */
	const SYGNATURA = 'f_sygnatura';
	/** 
	 * 
	 * 
	 *  
	 */
	const TEZA = 'f_teza';
	/** 
	 * 
	 * 
	 *  
	 */
	const TYP = 'f_typ';
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
	const WYDZIAL = 'f_wydzial';
    /**
     * Konstruktor
     *
     * @param array $config ustawienia konfiguracyjne
     * @see ep_DatasetObject::__construct()
     */
    public function __construct($config = null)
    {
        $this->alias = 'sp_orzeczenia';
        parent::__construct($config);

    }

    /**
     * Zwraca tablicę gotowych obiektów
     * @return array|ep_SpOrzeczenie[]
     */
    public function getObjects()
    {
        $objects = $this->response->getBodyObjects();
        foreach ($objects as $object) {
            if (isset($object['data'])) {
                array_push($this->objects, new ep_SpOrzeczenie($object));
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
 * Obiekt: Orzeczenia Sądów Powszechnych
 * Baza orzeczeń sądów powszechnych w Polsce
 *
 * Klasa pojedynczego obiektu
 *
 *
 * @package Objects\ep_SpOrzeczenie
 * @version 0.1 alpha build 99
 * @author Sejmometr REST API lib Generator 1.0 <biuro@epf.org.pl>
 * @link sejmometr.pl
 *
 * @property string $sady_sp_dopelniacz $fieldset
 * @property string $akcept
 * @property string $data
 * @property string $hasla_tematyczne
 * @property string $id
 * @property string $podstawa_prawna
 * @property string $sad
 * @property string $sad_sp_id
 * @property string $str_ident
 * @property string $sygnatura
 * @property string $teza
 * @property string $typ
 * @property string $typ_id
 * @property string $wydzial
 */
class ep_SpOrzeczenie extends ep_Object
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
        $this->alias = 'sp_orzeczenia';
        parent::__construct($data);
    }

    /**
     * Magiczna metoda do pobierania danych koncowych obiektu
     * @param string $arg
     * @return mixed
     */
    public function __get($arg)
    {
		if($arg == 'sady_sp_dopelniacz') { return $this->data['sady_sp.dopelniacz']; }
        return $this->data->{$arg};
    }

    /**
     * Funkcja do zaladowania jednego konkretnego dokumentu
     *
     * @param int $id
     * @return ep_SpOrzeczenie
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
     * @return ep_SpOrzeczenie
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