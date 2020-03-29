<?php
/**
 * Riskv1decisionsBuyerInformation
 *
 * PHP version 5
 *
 * @category Class
 * @package  Incevio\Cybersource\CybersourceSDK
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Incevio\Cybersource\CybersourceSDK Merged Spec
 *
 * All Incevio\Cybersource\CybersourceSDK API specs merged together. These are available at https://developer.cybersource.com/api/reference/api-reference.html
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

namespace Incevio\Cybersource\CybersourceSDK\Model;

use \ArrayAccess;

/**
 * Riskv1decisionsBuyerInformation Class Doc Comment
 *
 * @category    Class
 * @description Contains information about the buyer.
 * @package     Incevio\Cybersource\CybersourceSDK
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Riskv1decisionsBuyerInformation implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'riskv1decisions_buyerInformation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'username' => 'string',
        'hashedPassword' => 'string',
        'dateOfBirth' => 'string',
        'personalIdentification' => '\Incevio\Cybersource\CybersourceSDK\Model\Ptsv2paymentsBuyerInformationPersonalIdentification[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'username' => null,
        'hashedPassword' => null,
        'dateOfBirth' => null,
        'personalIdentification' => null
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
        'username' => 'username',
        'hashedPassword' => 'hashedPassword',
        'dateOfBirth' => 'dateOfBirth',
        'personalIdentification' => 'personalIdentification'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'username' => 'setUsername',
        'hashedPassword' => 'setHashedPassword',
        'dateOfBirth' => 'setDateOfBirth',
        'personalIdentification' => 'setPersonalIdentification'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'username' => 'getUsername',
        'hashedPassword' => 'getHashedPassword',
        'dateOfBirth' => 'getDateOfBirth',
        'personalIdentification' => 'getPersonalIdentification'
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
        $this->container['username'] = isset($data['username']) ? $data['username'] : null;
        $this->container['hashedPassword'] = isset($data['hashedPassword']) ? $data['hashedPassword'] : null;
        $this->container['dateOfBirth'] = isset($data['dateOfBirth']) ? $data['dateOfBirth'] : null;
        $this->container['personalIdentification'] = isset($data['personalIdentification']) ? $data['personalIdentification'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if (!is_null($this->container['username']) && (strlen($this->container['username']) > 255)) {
            $invalid_properties[] = "invalid value for 'username', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['hashedPassword']) && (strlen($this->container['hashedPassword']) > 100)) {
            $invalid_properties[] = "invalid value for 'hashedPassword', the character length must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['dateOfBirth']) && (strlen($this->container['dateOfBirth']) > 8)) {
            $invalid_properties[] = "invalid value for 'dateOfBirth', the character length must be smaller than or equal to 8.";
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

        if (strlen($this->container['username']) > 255) {
            return false;
        }
        if (strlen($this->container['hashedPassword']) > 100) {
            return false;
        }
        if (strlen($this->container['dateOfBirth']) > 8) {
            return false;
        }
        return true;
    }


    /**
     * Gets username
     * @return string
     */
    public function getUsername()
    {
        return $this->container['username'];
    }

    /**
     * Sets username
     * @param string $username Specifies the customer account user name.
     * @return $this
     */
    public function setUsername($username)
    {
        if (!is_null($username) && (strlen($username) > 255)) {
            throw new \InvalidArgumentException('invalid length for $username when calling Riskv1decisionsBuyerInformation., must be smaller than or equal to 255.');
        }

        $this->container['username'] = $username;

        return $this;
    }

    /**
     * Gets hashedPassword
     * @return string
     */
    public function getHashedPassword()
    {
        return $this->container['hashedPassword'];
    }

    /**
     * Sets hashedPassword
     * @param string $hashedPassword The merchant's password that Incevio\Cybersource\CybersourceSDK hashes and stores as a hashed password.  For details about this field, see the `customer_password` field description in _Decision Manager Using the SCMP API Developer Guide_ on the [Incevio\Cybersource\CybersourceSDK Business Center.](https://ebc2.cybersource.com/ebc2/) Click **Decision Manager** > **Documentation** > **Guides** > _Decision Manager Using the SCMP API Developer Guide_ (PDF link).
     * @return $this
     */
    public function setHashedPassword($hashedPassword)
    {
        if (!is_null($hashedPassword) && (strlen($hashedPassword) > 100)) {
            throw new \InvalidArgumentException('invalid length for $hashedPassword when calling Riskv1decisionsBuyerInformation., must be smaller than or equal to 100.');
        }

        $this->container['hashedPassword'] = $hashedPassword;

        return $this;
    }

    /**
     * Gets dateOfBirth
     * @return string
     */
    public function getDateOfBirth()
    {
        return $this->container['dateOfBirth'];
    }

    /**
     * Sets dateOfBirth
     * @param string $dateOfBirth Recipient’s date of birth. **Format**: `YYYYMMDD`.  This field is a `pass-through`, which means that Incevio\Cybersource\CybersourceSDK ensures that the value is eight numeric characters but otherwise does not verify the value or modify it in any way before sending it to the processor. If the field is not required for the transaction, Incevio\Cybersource\CybersourceSDK does not forward it to the processor.  For more details, see `recipient_date_of_birth` field description in the [Credit Card Services Using the SCMP API Guide.](https://apps.cybersource.com/library/documentation/dev_guides/CC_Svcs_SCMP_API/html/)
     * @return $this
     */
    public function setDateOfBirth($dateOfBirth)
    {
        if (!is_null($dateOfBirth) && (strlen($dateOfBirth) > 8)) {
            throw new \InvalidArgumentException('invalid length for $dateOfBirth when calling Riskv1decisionsBuyerInformation., must be smaller than or equal to 8.');
        }

        $this->container['dateOfBirth'] = $dateOfBirth;

        return $this;
    }

    /**
     * Gets personalIdentification
     * @return \Incevio\Cybersource\CybersourceSDK\Model\Ptsv2paymentsBuyerInformationPersonalIdentification[]
     */
    public function getPersonalIdentification()
    {
        return $this->container['personalIdentification'];
    }

    /**
     * Sets personalIdentification
     * @param \Incevio\Cybersource\CybersourceSDK\Model\Ptsv2paymentsBuyerInformationPersonalIdentification[] $personalIdentification
     * @return $this
     */
    public function setPersonalIdentification($personalIdentification)
    {
        $this->container['personalIdentification'] = $personalIdentification;

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
            return json_encode(\Incevio\Cybersource\CybersourceSDK\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Incevio\Cybersource\CybersourceSDK\ObjectSerializer::sanitizeForSerialization($this));
    }
}


