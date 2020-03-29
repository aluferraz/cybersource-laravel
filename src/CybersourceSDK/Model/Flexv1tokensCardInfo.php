<?php
/**
 * Flexv1tokensCardInfo
 *
 * PHP version 5
 *
 * @category Class
 * @package  Haque\Cybersource\CybersourceSDK
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Haque\Cybersource\CybersourceSDK Merged Spec
 *
 * All Haque\Cybersource\CybersourceSDK API specs merged together. These are available at https://developer.cybersource.com/api/reference/api-reference.html
 *
 * OpenAPI spec version: 0.0.1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Haque\Cybersource\CybersourceSDK\Model;

use \ArrayAccess;

/**
 * Flexv1tokensCardInfo Class Doc Comment
 *
 * @category    Class
 * @package     Haque\Cybersource\CybersourceSDK
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Flexv1tokensCardInfo implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'flexv1tokens_cardInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'cardNumber' => 'string',
        'cardExpirationMonth' => 'string',
        'cardExpirationYear' => 'string',
        'cardType' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'cardNumber' => null,
        'cardExpirationMonth' => null,
        'cardExpirationYear' => null,
        'cardType' => null
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'cardNumber' => 'cardNumber',
        'cardExpirationMonth' => 'cardExpirationMonth',
        'cardExpirationYear' => 'cardExpirationYear',
        'cardType' => 'cardType'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'cardNumber' => 'setCardNumber',
        'cardExpirationMonth' => 'setCardExpirationMonth',
        'cardExpirationYear' => 'setCardExpirationYear',
        'cardType' => 'setCardType'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'cardNumber' => 'getCardNumber',
        'cardExpirationMonth' => 'getCardExpirationMonth',
        'cardExpirationYear' => 'getCardExpirationYear',
        'cardType' => 'getCardType'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['cardNumber'] = isset($data['cardNumber']) ? $data['cardNumber'] : null;
        $this->container['cardExpirationMonth'] = isset($data['cardExpirationMonth']) ? $data['cardExpirationMonth'] : null;
        $this->container['cardExpirationYear'] = isset($data['cardExpirationYear']) ? $data['cardExpirationYear'] : null;
        $this->container['cardType'] = isset($data['cardType']) ? $data['cardType'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['cardNumber'] === null) {
            $invalid_properties[] = "'cardNumber' can't be null";
        }
        if ($this->container['cardType'] === null) {
            $invalid_properties[] = "'cardType' can't be null";
        }
        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        if ($this->container['cardNumber'] === null) {
            return false;
        }
        if ($this->container['cardType'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets cardNumber
     * @return string
     */
    public function getCardNumber()
    {
        return $this->container['cardNumber'];
    }

    /**
     * Sets cardNumber
     * @param string $cardNumber Encrypted or plain text card number. If the encryption type of “None” was used in the Generate Key request, this value can be set to the plaintext card number/Personal Account Number (PAN). If the encryption type of RsaOaep256 was used in the Generate Key request, this value needs to be the RSA OAEP 256 encrypted card number. The card number should be encrypted on the cardholders’ device. The [WebCrypto API] (https://github.com/Haque\Cybersource\CybersourceSDK/cybersource-flex-samples/blob/master/java/spring-boot/src/main/resources/public/flex.js) can be used with the JWK obtained in the Generate Key request.
     * @return $this
     */
    public function setCardNumber($cardNumber)
    {
        $this->container['cardNumber'] = $cardNumber;

        return $this;
    }

    /**
     * Gets cardExpirationMonth
     * @return string
     */
    public function getCardExpirationMonth()
    {
        return $this->container['cardExpirationMonth'];
    }

    /**
     * Sets cardExpirationMonth
     * @param string $cardExpirationMonth Two digit expiration month
     * @return $this
     */
    public function setCardExpirationMonth($cardExpirationMonth)
    {
        $this->container['cardExpirationMonth'] = $cardExpirationMonth;

        return $this;
    }

    /**
     * Gets cardExpirationYear
     * @return string
     */
    public function getCardExpirationYear()
    {
        return $this->container['cardExpirationYear'];
    }

    /**
     * Sets cardExpirationYear
     * @param string $cardExpirationYear Four digit expiration year
     * @return $this
     */
    public function setCardExpirationYear($cardExpirationYear)
    {
        $this->container['cardExpirationYear'] = $cardExpirationYear;

        return $this;
    }

    /**
     * Gets cardType
     * @return string
     */
    public function getCardType()
    {
        return $this->container['cardType'];
    }

    /**
     * Sets cardType
     * @param string $cardType Card Type. This field is required. Refer to the Haque\Cybersource\CybersourceSDK Credit Card Services documentation for supported card types.
     * @return $this
     */
    public function setCardType($cardType)
    {
        $this->container['cardType'] = $cardType;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
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
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\Haque\Cybersource\CybersourceSDK\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Haque\Cybersource\CybersourceSDK\ObjectSerializer::sanitizeForSerialization($this));
    }
}

