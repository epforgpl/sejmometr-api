<?php


/**
 * Bazowa klasa do nawiązywania połączeń HTTP
 *
 * Może być używana jako singleton lub jako normalna instancja
 * @example ep_Socket::getInstance()
 * @example $o = new ep_Socket()
 *
 * @package \HttpNetwork
 * @version 0.1
 * @author Adam Ciezkowski <adam.ciezkowski@epf.org.pl>
 * @link sejmometr.pl
 *
 * @example $o = new ep_Socket(array('request' => array('url' => 'http://example.com')));<br/>$o->request();
 *
 */
class ep_Socket
{
    /**
     * Url do API sejmometru
     *
     * @var string
     * @const
     */
    const API_BASE_URL = '{protocol}://sejmometr.pl/';
    /**
     * Ustawienia domyślne
     *
     * @var array
     * @access protected
     */
    protected $_settingsDefault = array(
        'throwExceptions' => true,
        'request' => array(
            'protocol' => 'http', # http|https
            'url' => '', # partial url {object}/{params}
            'query' => null, # dodatkowe parametry w GET juz jako urlencoded string
            'post' => null, # post jako urlencoded string
            'userAgent' => API_LIB_USER_AGENT,
        ),
        'responseFormat' => FORMAT_JSON,
        'headers' => array(
            'Accept: application/vnd.EPF_API.v1+json', # json|xml
        ),
        'curl' => array(
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_HEADER => true,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_AUTOREFERER => true,
            CURLOPT_CONNECTTIMEOUT => 10,
            CURLOPT_TIMEOUT => 10,
            CURLOPT_MAXREDIRS => 3,
            CURLINFO_HEADER_OUT => true,
            CURLOPT_POST => true,
            CURLOPT_HTTP200ALIASES => array(200)
        ),
    );

    /**
     * Resource do cURL'a
     *
     * @var curl_handle
     */
    protected $_curlObject = null;

    /**
     * Obiekt ustawień
     *
     * @see ep_Socket::_settingsDefault
     * @var ArrayObject
     */
    public $settings = null;

    /**
     * Obiekt odpowiedzi
     * @var ep_SocketResponse
     */
    public $response = null;

    /**
     * Instancja obiektu do singletona
     *
     * @var ep_Socket
     * @staticvar
     * @access protected
     */
    protected static $_instance = null;

    /**
     * Zwraca instancje obiektu ep_Socket
     *
     * @param array $config - zestaw parametrow do konfiguracji
     * @see ep_Socket::_settings
     * @return ep_Socket
     */
    public static function getSocket($config = array())
    {
        if (is_null(self::$_instance)) {
            return self::$_instance = new ep_Socket($config);
        } else {
            return self::$_instance;
        }
    }

    /**
     * Konstruktor
     *
     * @param array $config
     * @see ep_Socket::getSocket()
     */
    public function __construct($config = array())
    {
        $this->setConfig($config);
    }

    /**
     * Setter dla ustawień
     *
     * @param array $config
     * @see ep_Socket::getSocket()
     * @return void
     */
    public function setConfig($config = array())
    {
        if (is_null($config)) {
            $config = array();
        }
        $this->_settingsDefault = array_replace_recursive($this->_settingsDefault, $config);
        $this->settings = new ArrayObject($this->_settingsDefault, ArrayObject::ARRAY_AS_PROPS);
    }

    /**
     * Wykonuje żądanie
     *
     * @param array $config
     * @return ep_SocketResponse
     *
     */
    public function request($config = array())
    {
        if (!empty($config)) {
            $this->setConfig($config);
        }

        echo(preg_replace('/\{protocol\}/', $this->settings->request['protocol'],ep_Socket::API_BASE_URL) . $this->settings->request['url'] . '?' . $this->settings->request['post'] . $this->settings->request['query']);
        $this->_curlObject = curl_init(preg_replace('/\{protocol\}/', $this->settings->request['protocol'],ep_Socket::API_BASE_URL) . $this->settings->request['url'] . '?' . $this->settings->request['query']);
        curl_setopt($this->_curlObject, CURLOPT_POSTFIELDS, $this->settings->request['post']);
        curl_setopt_array($this->_curlObject, $this->settings->curl);
        curl_setopt($this->_curlObject, CURLOPT_USERAGENT, $this->settings->request['userAgent']);
        curl_setopt($this->_curlObject, CURLOPT_HTTPHEADER, $this->settings->headers);
        $r = curl_exec($this->_curlObject);
        if ($this->settings->responseFormat == FORMAT_JSON) {
            $this->response = new ep_SocketResponseJSON($r, $this->_curlObject, array('throwExceptions' => $this->settings->throwExceptions));
        } else {
            $this->response = new ep_SocketResponseXML($r, $this->_curlObject, array('throwExceptions' => $this->settings->throwExceptions));
        }
        return $this->response;

    }
}

/**
 * Bazowa klasa odpowiedzi HTTP
 *
 * @package \HttpNetwork
 * @abstract
 * @version 0.1
 * @author Adam Ciezkowski <adam.ciezkowski@epf.org.pl>
 * @link sejmometr.pl
 *
 * @method bool is200()
 * @method bool is500()
 * @method bool is400()
 * @method array getBodyObjects()
 * @method int getInfoTs()
 * @method string getInfoSig()
 * @method string getInfoVersion()
 * @method mixed getInfoStatus()
 * @method int getResponseCode()
 * @property mixed content
 * @property float responseTime
 * @property string calledUrl
 * @property mixed raw
 */

abstract class ep_SocketResponse
{
    /**
     * Curl handle, z żądania
     * @var null|resource
     */
    protected $_curlObj = null;
    /**
     * Ustawienia domyślne
     *
     * @var array
     */
    protected $_settingsDefault = array(
        'throwExceptions' => true,
    );
    /**
     * Obiekt ustawień
     *
     * @see ep_SocketResponse::_settingsDefault
     * @var ArrayObject
     */
    public $settings = null;
    /**
     * Nagłówki odpowiedzi
     *
     * @var array|ArrayObject
     */
    public $headers = array();
    /**
     * Odpowiedź info+body
     * @var array|ArrayObject
     */
    public $response = null;
    /**
     * Odpowiedź - cześć informacyjna
     * @var array|ArrayObject
     */
    public $info = null;
    /**
     * Odpowiedź - treść właściwa
     * @var array|ArrayObject
     */
    public $body = null;

    /**
     * Konstruktor wraz z parsowaniem
     *
     * @param array|null|object $response
     * @param resource $curl_handle
     * @param array $settings
     */
    public function __construct($response, &$curl_handle, $settings = array())
    {
        $this->_curlObj = $curl_handle;
        $this->settings = new ArrayObject(array_replace_recursive($this->_settingsDefault, $settings), ArrayObject::ARRAY_AS_PROPS);
        if ($this->parse($response)) {
            $this->headers = new ArrayObject($this->headers, ArrayObject::ARRAY_AS_PROPS);
        }
    }

    /**
     * Getter do wartości z response
     * <ul>
     *      <li>mixed: content - czyli tresc odpowiedzi</li>
     *      <li>int: responseCode - kod naglowka HTTP @example 200</li>
     *      <li>float: responseTime - czas wykonania żądania wg. cURL'a</li>
     *      <li>string: calledUrl - url pod, które zostało wysłane żądzanie</li>
     *      <li>mixed: raw - surowa odpowiedz, bez żadnego post procesowania</li>
     * </ul>
     *
     * @param $var
     * @return mixed
     */
    public function __get($var)
    {
        return $this->response->{$var};
    }

    /**
     * Funkcja parsująca nagłówki i body
     *
     * @param string $response - wynik dzialania cURL'a
     * @return bool
     * @throws ep_SocketException
     * @throws ep_SocketEmptyResponseException
     */
    protected function parse($response)
    {
        $raw = $response;
        $response = preg_split('/\r\n\r\n/', $response, -1, PREG_SPLIT_NO_EMPTY);
        if (!is_array($response) || count($response) < 2) {
            if ($this->settings->throwExceptions) {
                throw new ep_SocketEmptyResponseException;
            } else {
                return false;
            }
        } else {
            $this->response = array(
                'content' => array_pop($response),
                'responseCode' => curl_getinfo($this->_curlObj, CURLINFO_HTTP_CODE),
                'responseTime' => curl_getinfo($this->_curlObj, CURLINFO_TOTAL_TIME),
                'calledUrl' => curl_getinfo($this->_curlObj, CURLINFO_EFFECTIVE_URL),
                'raw' => $raw,
            );
            $this->response = new ArrayObject($this->response, ArrayObject::ARRAY_AS_PROPS);
            $headers = preg_split('/\r\n/', $response[0], -1, PREG_SPLIT_NO_EMPTY);
            array_shift($headers);
            $tmp = array();
            foreach ($headers as $header) {
                @list($key, $value) = preg_split('/\: /', $header, -1, PREG_SPLIT_NO_EMPTY);
                $tmp[str_replace('-', '', lcfirst($key))] = $value;
            }
            $this->headers = $tmp;
            return true;

        }

    }

    /**
     * Magiczny akcesor do dostepu pol odpowiedzi np.
     *
     * @example is500 = ($this->responseCode == 500)
     * @example getBody<fieldname> = $this->body->field_name
     * @example getInfo<fieldname> = $this->info->field_name
     * @example getBodyObjects();
     * @example getInfoVersion();
     *
     * @see ep_SocketResponse::getBody()
     * @see ep_SocketResponset::getInfo()
     *
     * @param string $func funkcja
     * @param array|string $args argumenty
     * @return bool
     * @throws ErrorException
     */
    public function __call($func, $args)
    {
        $match = array();
        if (preg_match('/is([a-zA-Z0-9]+)/', $func, $match)) {
            $match = array_pop($match);
            return $this->response->responseCode == $match;
        } else if (preg_match('/getBody([a-zA-z]+)/', $func, $match)) {
            try {
                return $this->getBody(strtolower(array_pop($match)));
            } catch (Exception $e) {
                throw new ErrorException('Undefined body field %s', strtolower($match));
            }
        } else if (preg_match('/getInfo([a-zA-z]+)/', $func, $match)) {
            try {
                return $this->getInfo(strtolower(array_pop($match)));
            } catch (Exception $e) {
                throw new ErrorException('Undefined info field %s', strtolower($match));
            }
        } else {
            throw new ErrorException(sprintf('Undefined function %s', $func));
        }
    }

    /**
     * Alias dla ep_SocketResponse::is200()
     *
     * @see ep_SocketResponse::__call()
     * @return bool
     */
    public function isOk()
    {
        return $this->is200();
    }

    /**
     * Zwraca tresc requesta
     * <ul>
     *     <li>array: objects - wlasciwa tresc zapytania, obiekty</li>
     * </ul>
     *
     * @param string $field, konkretne pole
     * @return ArrayObject
     */
    public function getBody($field = null)
    {
        return (is_null($field)) ? (array)$this->body : $this->body->{$field};
    }

    /**
     * Dostępne pola
     * <ul>
     *      <li>total:int - całkowita ilość rekordów odpowiadających zapytaniu</li>
     *      <li>limit:int - ustawiony limit rekordów ( może być inny niż przy wysyłaniu żądania, ze względu na górny limit serwera )</li>
     *      <li>page:int - aktualna strona</li>
     *      <li>total_pages:int - liczba wszystkich stron</li>
     * </ul>
     * @param null|string $field - string nazwa pola
     * @return float
     */
    public function getPagination($field = null) {
        if(is_null($field)) {
            return $this->body->pagination;
        } else {
            if($field == 'total_pages') {
                return (int)ceil($this->body->pagination['total'] / $this->body->pagination['limit']);
            }
            return $this->body->pagination[$field];
        }
    }

    /**
     * NOT YET
     * Zwraca informacje zwiazane z requestem
     * <ul>
     *     <li>int: ts - timestamp servera</li>
     *     <li>string: sig - unikatowa sygnatura dla zapytania</li>
     *     <li>string: version - serverowa wersja biblioteki</li>
     *     <li>mixed: status - status odpowiedzi</li>
     *
     * </ul>
     * @param string $field, konkretne pole
     * @return array|string
     */
    public function getInfo($field = null)
    {
        return (is_null($field)) ? (array)$this->info : $this->info->{$field};
    }


}

/**
 * Class ep_SocketResponseJSON
 *
 * <p>Klasa odpowiedzi formatu JSON.</p>
 *
 * @example $o = new ep_SocketResponseJSON($json_string, $curl_resource)
 *
 * @package \HttpNetwork
 * @version 0.1
 * @author Adam Ciezkowski <adam.ciezkowski@epf.org.pl>
 * @link sejmometr.pl
 *
 *
 * @method bool is200()
 * @method array getBodyObjects()
 * @method array getInfoTs()
 * @method array getInfoSig()
 * @method array getInfoVersion()
 * @method array getInfoStatus()
 */

class ep_SocketResponseJSON extends ep_SocketResponse
{
    /**
     * Konstruktor
     * @param array|null|object $response
     * @param resource $curl_handle
     * @param array $settings
     */
    public function __construct($response, &$curl_handle, $settings = array())
    {
        parent::__construct($response, $curl_handle, $settings);
        $response = new ArrayObject(json_decode($this->response->content, true), ArrayObject::ARRAY_AS_PROPS);
//        $this->info = new ArrayObject($this->response->info, ArrayObject::ARRAY_AS_PROPS);
        $this->body = new ArrayObject($response->document['content'], ArrayObject::ARRAY_AS_PROPS);
    }
}

/**
 * Class ep_SocketResponseXML
 *
 * <p>Klasa odpowiedzi formatu XML.</p>
 *
 * @example $o = new ep_SocketResponseXML($xml_string, $curl_resource)
 *
 * @package \HttpNetwork
 * @version 0.1
 * @author Adam Ciezkowski <adam.ciezkowski@epf.org.pl>
 * @link sejmometr.pl
 *
 *
 * @method bool is200()
 * @method array getBodyObjects()
 * @method array getInfoTs()
 * @method array getInfoSig()
 * @method array getInfoVersion()
 * @method array getInfoStatus()
 */

class ep_SocketResponseXML extends ep_SocketResponse
{
    /**
     * Konstruktor
     * @param array|null|object $response
     * @param resource $curl_handle
     * @param array $settings
     */
    public function __construct($response, &$curl_handle, $settings = array())
    {
        parent::__construct($response, $curl_handle, $settings);
        $xml = new SimpleXMLElement($this->response->content);
        $response = $xml;
//        $this->info = new ArrayObject($this->response->info, ArrayObject::ARRAY_AS_PROPS);
        $this->body = new ArrayObject($response->document['content'], ArrayObject::ARRAY_AS_PROPS);
    }
}


/**
 * Class ep_SocketException
 *
 * Bazowy wyjatek od ep_Socket
 *
 * @package \HttpNetwork\Exceptions
 * @version 0.1
 * @author Adam Ciezkowski <adam.ciezkowski@epf.org.pl>
 * @link sejmometr.pl
 *
 */
class ep_SocketException extends ErrorException
{
    /**
     * Konstruktor
     * @param null $message
     * @param int $code
     * @param int $severity
     */
    public function __construct($message = null, $code = 0, $severity = E_ERROR)
    {
        if (is_null($message)) {
            $message = 'General ep_Socket exception';
        }
        parent::__construct($message, $code, $severity);
    }
}

/**
 * Class ep_SocketResourceNotFoundException
 *
 * Bazowy wyjatek od ep_Socket
 *
 * @package \HttpNetwork\Exceptions
 * @version 0.1
 * @author Adam Ciezkowski <adam.ciezkowski@epf.org.pl>
 * @link sejmometr.pl
 *
 */
class ep_SocketResourceNotFoundException extends ep_SocketException
{
    /**
     * Konstruktor
     */
    public function __construct()
    {
        parent::__construct('Resource not found!', 404, E_NOTICE);
    }
}

/**
 * Class ep_SocketBadRequestException
 *
 * Bazowy wyjatek od ep_Socket
 *
 * @package \HttpNetwork\Exceptions
 * @version 0.1
 * @author Adam Ciezkowski <adam.ciezkowski@epf.org.pl>
 * @link sejmometr.pl
 *
 */
class ep_SocketBadRequestException extends ep_SocketException
{
    /**
     * Konstruktor
     */
    public function __construct()
    {
        parent::__construct('Bad request', 400);
    }
}

/**
 * Class ep_SocketEmptyResponseException
 */
class ep_SocketEmptyResponseException extends ep_SocketException
{
    /**
     * Konstruktor
     */
    public function __construct()
    {
        parent::__construct('The response from server was empty', 204);
    }
}