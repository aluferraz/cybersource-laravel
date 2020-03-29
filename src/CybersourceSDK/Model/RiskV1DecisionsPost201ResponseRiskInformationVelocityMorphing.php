<?php
/**
 * RiskV1DecisionsPost201ResponseRiskInformationVelocityMorphing
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
 * RiskV1DecisionsPost201ResponseRiskInformationVelocityMorphing Class Doc Comment
 *
 * @category    Class
 * @package     Incevio\Cybersource\CybersourceSDK
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class RiskV1DecisionsPost201ResponseRiskInformationVelocityMorphing implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'riskV1DecisionsPost201Response_riskInformation_velocity_morphing';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'count' => 'int',
        'fieldName' => 'string',
        'informationCode' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'count' => null,
        'fieldName' => null,
        'informationCode' => null
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
        'count' => 'count',
        'fieldName' => 'fieldName',
        'informationCode' => 'informationCode'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'count' => 'setCount',
        'fieldName' => 'setFieldName',
        'informationCode' => 'setInformationCode'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'count' => 'getCount',
        'fieldName' => 'getFieldName',
        'informationCode' => 'getInformationCode'
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
        $this->container['count'] = isset($data['count']) ? $data['count'] : null;
        $this->container['fieldName'] = isset($data['fieldName']) ? $data['fieldName'] : null;
        $this->container['informationCode'] = isset($data['informationCode']) ? $data['informationCode'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if (!is_null($this->container['fieldName']) && (strlen($this->container['fieldName']) > 255)) {
            $invalid_properties[] = "invalid value for 'fieldName', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['informationCode']) && (strlen($this->container['informationCode']) > 255)) {
            $invalid_properties[] = "invalid value for 'informationCode', the character length must be smaller than or equal to 255.";
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

        if (strlen($this->container['fieldName']) > 255) {
            return false;
        }
        if (strlen($this->container['informationCode']) > 255) {
            return false;
        }
        return true;
    }


    /**
     * Gets count
     * @return int
     */
    public function getCount()
    {
        return $this->container['count'];
    }

    /**
     * Sets count
     * @param int $count Morphing count specified by the number #.  **Note** The count is not returned for the initial transaction.  For all possible values, see the `decision_velocity_morphing_#_count` field description in the _Decision Manager Using the SCMP API Developer Guide_ on the [Incevio\Cybersource\CybersourceSDK Business Center.](https://ebc2.cybersource.com/ebc2/) Click **Decision Manager** > **Documentation** > **Guides** > _Decision Manager Using the SCMP API Developer Guide_ (PDF link).
     * @return $this
     */
    public function setCount($count)
    {
        $this->container['count'] = $count;

        return $this;
    }

    /**
     * Gets fieldName
     * @return string
     */
    public function getFieldName()
    {
        return $this->container['fieldName'];
    }

    /**
     * Sets fieldName
     * @param string $fieldName Field name of the morphing element. specified by the setting that you chose in the Velocity Editor.  For all possible values, see the `decisionReply_morphingElement_#_fieldName` field description in the _Decision Manager Using the SCMP API Developer Guide_ on the [Incevio\Cybersource\CybersourceSDK Business Center.](https://ebc2.cybersource.com/ebc2/) Click **Decision Manager** > **Documentation** > **Guides** > _Decision Manager Using the SCMP API Developer Guide_ (PDF link).
     * @return $this
     */
    public function setFieldName($fieldName)
    {
        if (!is_null($fieldName) && (strlen($fieldName) > 255)) {
            throw new \InvalidArgumentException('invalid length for $fieldName when calling RiskV1DecisionsPost201ResponseRiskInformationVelocityMorphing., must be smaller than or equal to 255.');
        }

        $this->container['fieldName'] = $fieldName;

        return $this;
    }

    /**
     * Gets informationCode
     * @return string
     */
    public function getInformationCode()
    {
        return $this->container['informationCode'];
    }

    /**
     * Sets informationCode
     * @param string $informationCode Identifier that Incevio\Cybersource\CybersourceSDK assigned to the velocity rule specified by the number #.  For all possible values, see the `decision_velocity_morphing_#_info_code` field description in the _Decision Manager Using the SCMP API Developer Guide_ on the [Incevio\Cybersource\CybersourceSDK Business Center.](https://ebc2.cybersource.com/ebc2/) Click **Decision Manager** > **Documentation** > **Guides** > _Decision Manager Using the SCMP API Developer Guide_ (PDF link).
     * @return $this
     */
    public function setInformationCode($informationCode)
    {
        if (!is_null($informationCode) && (strlen($informationCode) > 255)) {
            throw new \InvalidArgumentException('invalid length for $informationCode when calling RiskV1DecisionsPost201ResponseRiskInformationVelocityMorphing., must be smaller than or equal to 255.');
        }

        $this->container['informationCode'] = $informationCode;

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


