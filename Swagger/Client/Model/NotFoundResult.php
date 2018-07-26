<?php
/**
 * NotFoundResult
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Assurbox API V1
 *
 * AssurBox Developer Documentation    # Introduction    Description of AssurBox RESTful API.    # Base Urls    Prod : https://api.assurbox.net/    Sandbox : https://api-sandbox.assurbox.net/    # Current limitations:    AssurBox service does not support cross origin headers for security reasons, therefore it is not possible to use Swagger UI and make API calls directly from browser.    # Conventions    All dates are UTC dates.    # Errors    | Code        | Signification           | More  |  | ------------- |:-------------:| -----:|  | 200      | Ok | The operation succeeded |  | 400 | Bad Request | Someting was wrong on the client side : Check your code |  | 401      | Unauthorized      |   Not autorized to access (maybe not authentified) |  | 403 | Forbidden     |    You are not allowed to do the operation |  | 500 | Internal Server Error | Something went wrong in the AssurBox system |      In addition to the http code, a detail is usually returned with more information    # User types    The AssurBox Api can be used by two types of users : Insurances and Non-Insurances (partners).    The AssurBox Api will react according to the type of user making a call.    # Authentication    OAuth2 - an open protocol to allow secure authorization in a simple and standard method from web, mobile and desktop applications.      ## Obtaining an api ClientId and ClientSecret    In order to use the api, you need to obtain credentials.    You need to log-in the AssurBox web application with the primary owner account (or ask the owner to do it for you).    If you don't have an account yet : [ask for one](mailto:account@assurbox.net?subject=Account_Request)      Once you are logged-in, go to the settings, click on api keys.    Now, click on “create a client”.    Give a name to the client (this name is only there for you, you can create several api credentials, to used them with different applications you want to integrate AssurBox in)    Once you click “create the client”, the client will be saved.    The client id and client secret will be shown to you one time only, it’s not possible to retrieve the secret after that, so be sure to save it somewhere)    [Check an example here.](http://assurbox.net/screenshot-obtenir-les-cle-api/)    ## Using ClientId and ClientSecret    When you have the credentials, you can access the api, following the Oahth2 flow    Before creating a request to an endpoint, you need to get an access token, when you have the token you need to present is to the endpoint you are calling using an authentication header (key: authentication , value : “bearer [the token]“)    [baseurl]/ouath/token    ## Using the token    Each call to the api must use the bearer token. It contains the identity of your api client and the api reacts according to this identity
 *
 * OpenAPI spec version: v1
 * Contact: support@assurbox.net
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 1.0.15
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * NotFoundResult Class Doc Comment
 *
 * @category Class
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class NotFoundResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'NotFoundResult';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'request' => 'object'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'request' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'request' => 'Request'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'request' => 'setRequest'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'request' => 'getRequest'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['request'] = isset($data['request']) ? $data['request'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        return true;
    }


    /**
     * Gets request
     *
     * @return object
     */
    public function getRequest()
    {
        return $this->container['request'];
    }

    /**
     * Sets request
     *
     * @param object $request request
     *
     * @return $this
     */
    public function setRequest($request)
    {
        $this->container['request'] = $request;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param  integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param  integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param  integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
