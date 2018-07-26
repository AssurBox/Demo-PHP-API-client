<?php
/**
 * GreenCardRequestInfo
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
 * GreenCardRequestInfo Class Doc Comment
 *
 * @category Class
 * @description This class represents the loaded information about a request
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class GreenCardRequestInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'GreenCardRequestInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'response_communication' => 'string',
        'attachments' => '\Swagger\Client\Model\Attachment[]',
        'correlation_id' => 'string',
        'licence_plate' => 'string',
        'request_date' => '\DateTime',
        'customer_name' => 'string',
        'insurance_name' => 'string',
        'sender_organization_name' => 'string',
        'has_response' => 'bool',
        'location' => 'string',
        'message_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'response_communication' => null,
        'attachments' => null,
        'correlation_id' => 'uuid',
        'licence_plate' => null,
        'request_date' => 'date-time',
        'customer_name' => null,
        'insurance_name' => null,
        'sender_organization_name' => null,
        'has_response' => null,
        'location' => null,
        'message_id' => 'uuid'
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
        'response_communication' => 'ResponseCommunication',
        'attachments' => 'Attachments',
        'correlation_id' => 'CorrelationId',
        'licence_plate' => 'LicencePlate',
        'request_date' => 'RequestDate',
        'customer_name' => 'CustomerName',
        'insurance_name' => 'InsuranceName',
        'sender_organization_name' => 'SenderOrganizationName',
        'has_response' => 'HasResponse',
        'location' => 'Location',
        'message_id' => 'MessageId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'response_communication' => 'setResponseCommunication',
        'attachments' => 'setAttachments',
        'correlation_id' => 'setCorrelationId',
        'licence_plate' => 'setLicencePlate',
        'request_date' => 'setRequestDate',
        'customer_name' => 'setCustomerName',
        'insurance_name' => 'setInsuranceName',
        'sender_organization_name' => 'setSenderOrganizationName',
        'has_response' => 'setHasResponse',
        'location' => 'setLocation',
        'message_id' => 'setMessageId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'response_communication' => 'getResponseCommunication',
        'attachments' => 'getAttachments',
        'correlation_id' => 'getCorrelationId',
        'licence_plate' => 'getLicencePlate',
        'request_date' => 'getRequestDate',
        'customer_name' => 'getCustomerName',
        'insurance_name' => 'getInsuranceName',
        'sender_organization_name' => 'getSenderOrganizationName',
        'has_response' => 'getHasResponse',
        'location' => 'getLocation',
        'message_id' => 'getMessageId'
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
        $this->container['response_communication'] = isset($data['response_communication']) ? $data['response_communication'] : null;
        $this->container['attachments'] = isset($data['attachments']) ? $data['attachments'] : null;
        $this->container['correlation_id'] = isset($data['correlation_id']) ? $data['correlation_id'] : null;
        $this->container['licence_plate'] = isset($data['licence_plate']) ? $data['licence_plate'] : null;
        $this->container['request_date'] = isset($data['request_date']) ? $data['request_date'] : null;
        $this->container['customer_name'] = isset($data['customer_name']) ? $data['customer_name'] : null;
        $this->container['insurance_name'] = isset($data['insurance_name']) ? $data['insurance_name'] : null;
        $this->container['sender_organization_name'] = isset($data['sender_organization_name']) ? $data['sender_organization_name'] : null;
        $this->container['has_response'] = isset($data['has_response']) ? $data['has_response'] : null;
        $this->container['location'] = isset($data['location']) ? $data['location'] : null;
        $this->container['message_id'] = isset($data['message_id']) ? $data['message_id'] : null;
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
     * Gets response_communication
     *
     * @return string
     */
    public function getResponseCommunication()
    {
        return $this->container['response_communication'];
    }

    /**
     * Sets response_communication
     *
     * @param string $response_communication response_communication
     *
     * @return $this
     */
    public function setResponseCommunication($response_communication)
    {
        $this->container['response_communication'] = $response_communication;

        return $this;
    }

    /**
     * Gets attachments
     *
     * @return \Swagger\Client\Model\Attachment[]
     */
    public function getAttachments()
    {
        return $this->container['attachments'];
    }

    /**
     * Sets attachments
     *
     * @param \Swagger\Client\Model\Attachment[] $attachments attachments
     *
     * @return $this
     */
    public function setAttachments($attachments)
    {
        $this->container['attachments'] = $attachments;

        return $this;
    }

    /**
     * Gets correlation_id
     *
     * @return string
     */
    public function getCorrelationId()
    {
        return $this->container['correlation_id'];
    }

    /**
     * Sets correlation_id
     *
     * @param string $correlation_id The identifier you can use to retrieve the full object
     *
     * @return $this
     */
    public function setCorrelationId($correlation_id)
    {
        $this->container['correlation_id'] = $correlation_id;

        return $this;
    }

    /**
     * Gets licence_plate
     *
     * @return string
     */
    public function getLicencePlate()
    {
        return $this->container['licence_plate'];
    }

    /**
     * Sets licence_plate
     *
     * @param string $licence_plate licence_plate
     *
     * @return $this
     */
    public function setLicencePlate($licence_plate)
    {
        $this->container['licence_plate'] = $licence_plate;

        return $this;
    }

    /**
     * Gets request_date
     *
     * @return \DateTime
     */
    public function getRequestDate()
    {
        return $this->container['request_date'];
    }

    /**
     * Sets request_date
     *
     * @param \DateTime $request_date request_date
     *
     * @return $this
     */
    public function setRequestDate($request_date)
    {
        $this->container['request_date'] = $request_date;

        return $this;
    }

    /**
     * Gets customer_name
     *
     * @return string
     */
    public function getCustomerName()
    {
        return $this->container['customer_name'];
    }

    /**
     * Sets customer_name
     *
     * @param string $customer_name customer_name
     *
     * @return $this
     */
    public function setCustomerName($customer_name)
    {
        $this->container['customer_name'] = $customer_name;

        return $this;
    }

    /**
     * Gets insurance_name
     *
     * @return string
     */
    public function getInsuranceName()
    {
        return $this->container['insurance_name'];
    }

    /**
     * Sets insurance_name
     *
     * @param string $insurance_name Name of the insurer to whom the request was made
     *
     * @return $this
     */
    public function setInsuranceName($insurance_name)
    {
        $this->container['insurance_name'] = $insurance_name;

        return $this;
    }

    /**
     * Gets sender_organization_name
     *
     * @return string
     */
    public function getSenderOrganizationName()
    {
        return $this->container['sender_organization_name'];
    }

    /**
     * Sets sender_organization_name
     *
     * @param string $sender_organization_name Name of the organization that sent the request
     *
     * @return $this
     */
    public function setSenderOrganizationName($sender_organization_name)
    {
        $this->container['sender_organization_name'] = $sender_organization_name;

        return $this;
    }

    /**
     * Gets has_response
     *
     * @return bool
     */
    public function getHasResponse()
    {
        return $this->container['has_response'];
    }

    /**
     * Sets has_response
     *
     * @param bool $has_response This flag indicate whether or not a response is available
     *
     * @return $this
     */
    public function setHasResponse($has_response)
    {
        $this->container['has_response'] = $has_response;

        return $this;
    }

    /**
     * Gets location
     *
     * @return string
     */
    public function getLocation()
    {
        return $this->container['location'];
    }

    /**
     * Sets location
     *
     * @param string $location Location of the ressource  <see href=\"https://github.com/Microsoft/api-guidelines/blob/master/Guidelines.md\" />
     *
     * @return $this
     */
    public function setLocation($location)
    {
        $this->container['location'] = $location;

        return $this;
    }

    /**
     * Gets message_id
     *
     * @return string
     */
    public function getMessageId()
    {
        return $this->container['message_id'];
    }

    /**
     * Sets message_id
     *
     * @param string $message_id Identifier for this specific message
     *
     * @return $this
     */
    public function setMessageId($message_id)
    {
        $this->container['message_id'] = $message_id;

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
