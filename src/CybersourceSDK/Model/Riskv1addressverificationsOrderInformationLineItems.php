<?php
/**
 * Riskv1addressverificationsOrderInformationLineItems
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
 * Riskv1addressverificationsOrderInformationLineItems Class Doc Comment
 *
 * @category    Class
 * @package     Incevio\Cybersource\CybersourceSDK
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Riskv1addressverificationsOrderInformationLineItems implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'riskv1addressverifications_orderInformation_lineItems';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'unitPrice' => 'string',
        'quantity' => 'int',
        'productSKU' => 'string',
        'productRisk' => 'string',
        'productName' => 'string',
        'productCode' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'unitPrice' => null,
        'quantity' => null,
        'productSKU' => null,
        'productRisk' => null,
        'productName' => null,
        'productCode' => null
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
        'unitPrice' => 'unitPrice',
        'quantity' => 'quantity',
        'productSKU' => 'productSKU',
        'productRisk' => 'productRisk',
        'productName' => 'productName',
        'productCode' => 'productCode'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'unitPrice' => 'setUnitPrice',
        'quantity' => 'setQuantity',
        'productSKU' => 'setProductSKU',
        'productRisk' => 'setProductRisk',
        'productName' => 'setProductName',
        'productCode' => 'setProductCode'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'unitPrice' => 'getUnitPrice',
        'quantity' => 'getQuantity',
        'productSKU' => 'getProductSKU',
        'productRisk' => 'getProductRisk',
        'productName' => 'getProductName',
        'productCode' => 'getProductCode'
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
        $this->container['unitPrice'] = isset($data['unitPrice']) ? $data['unitPrice'] : null;
        $this->container['quantity'] = isset($data['quantity']) ? $data['quantity'] : null;
        $this->container['productSKU'] = isset($data['productSKU']) ? $data['productSKU'] : null;
        $this->container['productRisk'] = isset($data['productRisk']) ? $data['productRisk'] : null;
        $this->container['productName'] = isset($data['productName']) ? $data['productName'] : null;
        $this->container['productCode'] = isset($data['productCode']) ? $data['productCode'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['unitPrice'] === null) {
            $invalid_properties[] = "'unitPrice' can't be null";
        }
        if ((strlen($this->container['unitPrice']) > 15)) {
            $invalid_properties[] = "invalid value for 'unitPrice', the character length must be smaller than or equal to 15.";
        }

        if (!is_null($this->container['quantity']) && ($this->container['quantity'] > 999999999)) {
            $invalid_properties[] = "invalid value for 'quantity', must be smaller than or equal to 999999999.";
        }

        if (!is_null($this->container['quantity']) && ($this->container['quantity'] < 1)) {
            $invalid_properties[] = "invalid value for 'quantity', must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['productSKU']) && (strlen($this->container['productSKU']) > 255)) {
            $invalid_properties[] = "invalid value for 'productSKU', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['productRisk']) && (strlen($this->container['productRisk']) > 6)) {
            $invalid_properties[] = "invalid value for 'productRisk', the character length must be smaller than or equal to 6.";
        }

        if (!is_null($this->container['productName']) && (strlen($this->container['productName']) > 255)) {
            $invalid_properties[] = "invalid value for 'productName', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['productCode']) && (strlen($this->container['productCode']) > 255)) {
            $invalid_properties[] = "invalid value for 'productCode', the character length must be smaller than or equal to 255.";
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

        if ($this->container['unitPrice'] === null) {
            return false;
        }
        if (strlen($this->container['unitPrice']) > 15) {
            return false;
        }
        if ($this->container['quantity'] > 999999999) {
            return false;
        }
        if ($this->container['quantity'] < 1) {
            return false;
        }
        if (strlen($this->container['productSKU']) > 255) {
            return false;
        }
        if (strlen($this->container['productRisk']) > 6) {
            return false;
        }
        if (strlen($this->container['productName']) > 255) {
            return false;
        }
        if (strlen($this->container['productCode']) > 255) {
            return false;
        }
        return true;
    }


    /**
     * Gets unitPrice
     * @return string
     */
    public function getUnitPrice()
    {
        return $this->container['unitPrice'];
    }

    /**
     * Sets unitPrice
     * @param string $unitPrice Per-item price of the product. This value cannot be negative. You can include a decimal point (.), but you cannot include any other special characters. Incevio\Cybersource\CybersourceSDK truncates the amount to the correct number of decimal places.  For processor-specific information, see the `amount` field description in [Credit Card Services Using the SCMP API.](http://apps.cybersource.com/library/documentation/dev_guides/CC_Svcs_SCMP_API/html)  **Important** Some processors have specific requirements and limitations, such as maximum amounts and maximum field lengths. See these guides for details: - [Merchant Descriptors Using the SCMP API Guide] (https://apps.cybersource.com/library/documentation/dev_guides/Merchant_Descriptors_SCMP_API/html/) - \"Capture Information for Specific Processors\" section in the [Credit Card Services Using the SCMP API Guide](https://apps.cybersource.com/library/documentation/dev_guides/CC_Svcs_SCMP_API/html/)  #### DCC with a Third-Party Provider Set this field to the converted amount that was returned by the DCC provider. You must include either the 1st line item in the order and this field, or the request-level field `orderInformation.amountDetails.totalAmount` in your request. For details, see \"Dynamic Currency Conversion with a Third Party Provider\" in the [Credit Card Services Using the SCMP API Guide.](https://apps.cybersource.com/library/documentation/dev_guides/CC_Svcs_SCMP_API/html/)  #### FDMS South If you accept IDR or CLP currencies, see the entry for FDMS South in the [Merchant Descriptors Using the SCMP API Guide.] (https://apps.cybersource.com/library/documentation/dev_guides/Merchant_Descriptors_SCMP_API/html/)  #### Zero Amount Authorizations If your processor supports zero amount authorizations, you can set this field to 0 for the authorization to check if the card is lost or stolen. See \"Zero Amount Authorizations\" in the [Credit Card Services Using the SCMP API Guide.](https://apps.cybersource.com/library/documentation/dev_guides/CC_Svcs_SCMP_API/html/)
     * @return $this
     */
    public function setUnitPrice($unitPrice)
    {
        if ((strlen($unitPrice) > 15)) {
            throw new \InvalidArgumentException('invalid length for $unitPrice when calling Riskv1addressverificationsOrderInformationLineItems., must be smaller than or equal to 15.');
        }

        $this->container['unitPrice'] = $unitPrice;

        return $this;
    }

    /**
     * Gets quantity
     * @return int
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     * @param int $quantity Number of units for this order.  The default is `1`. For an authorization or capture transaction (`processingOptions.capture` is set to `true` or `false`), this field is required when _orderInformation.lineItems[].productCode_ is not set to **default** or one of the other values that are related to shipping and/or handling.  When orderInformation.lineItems[].productCode is \"gift_card\", this is the total count of individual prepaid gift cards purchased.
     * @return $this
     */
    public function setQuantity($quantity)
    {

        if (!is_null($quantity) && ($quantity > 999999999)) {
            throw new \InvalidArgumentException('invalid value for $quantity when calling Riskv1addressverificationsOrderInformationLineItems., must be smaller than or equal to 999999999.');
        }
        if (!is_null($quantity) && ($quantity < 1)) {
            throw new \InvalidArgumentException('invalid value for $quantity when calling Riskv1addressverificationsOrderInformationLineItems., must be bigger than or equal to 1.');
        }

        $this->container['quantity'] = $quantity;

        return $this;
    }

    /**
     * Gets productSKU
     * @return string
     */
    public function getProductSKU()
    {
        return $this->container['productSKU'];
    }

    /**
     * Sets productSKU
     * @param string $productSKU Stock Keeping Unit (SKU) code for the product.  For an authorization or capture transaction (`processingOptions.capture` is set to `true` or `false`), this field is required when _orderInformation.lineItems[].productCode_ is not set to **default** or one of the other values that are related to shipping and/or handling.
     * @return $this
     */
    public function setProductSKU($productSKU)
    {
        if (!is_null($productSKU) && (strlen($productSKU) > 255)) {
            throw new \InvalidArgumentException('invalid length for $productSKU when calling Riskv1addressverificationsOrderInformationLineItems., must be smaller than or equal to 255.');
        }

        $this->container['productSKU'] = $productSKU;

        return $this;
    }

    /**
     * Gets productRisk
     * @return string
     */
    public function getProductRisk()
    {
        return $this->container['productRisk'];
    }

    /**
     * Sets productRisk
     * @param string $productRisk Indicates the level of risk for the product. This field can contain one of the following values: - `low`: The product is associated with few chargebacks. - `normal`: The product is associated with a normal number of chargebacks. - `high`: The product is associated with many chargebacks.
     * @return $this
     */
    public function setProductRisk($productRisk)
    {
        if (!is_null($productRisk) && (strlen($productRisk) > 6)) {
            throw new \InvalidArgumentException('invalid length for $productRisk when calling Riskv1addressverificationsOrderInformationLineItems., must be smaller than or equal to 6.');
        }

        $this->container['productRisk'] = $productRisk;

        return $this;
    }

    /**
     * Gets productName
     * @return string
     */
    public function getProductName()
    {
        return $this->container['productName'];
    }

    /**
     * Sets productName
     * @param string $productName For an authorization or capture transaction (`processingOptions.capture` is set to `true` or `false`), this field is required when `orderInformation.lineItems[].productCode` is not set to `default` or one of the other values that are related to shipping and/or handling.
     * @return $this
     */
    public function setProductName($productName)
    {
        if (!is_null($productName) && (strlen($productName) > 255)) {
            throw new \InvalidArgumentException('invalid length for $productName when calling Riskv1addressverificationsOrderInformationLineItems., must be smaller than or equal to 255.');
        }

        $this->container['productName'] = $productName;

        return $this;
    }

    /**
     * Gets productCode
     * @return string
     */
    public function getProductCode()
    {
        return $this->container['productCode'];
    }

    /**
     * Sets productCode
     * @param string $productCode Type of product. This value is used to determine the category that the product is in: electronic, handling, physical, service, or shipping. The default value is **default**. If you are performing an authorization transaction (`processingOptions.capture` is set to `false`), and you set this field to a value other than default or any of the values related to shipping and handling, then the fields `quantity`, `productName`, and `productSku` are required. It can also have a value of \"gift_card\".  For details, see the `product_code` field description in the [Credit Card Services Using the SCMP API Guide.](https://apps.cybersource.com/library/documentation/dev_guides/CC_Svcs_SCMP_API/html/)
     * @return $this
     */
    public function setProductCode($productCode)
    {
        if (!is_null($productCode) && (strlen($productCode) > 255)) {
            throw new \InvalidArgumentException('invalid length for $productCode when calling Riskv1addressverificationsOrderInformationLineItems., must be smaller than or equal to 255.');
        }

        $this->container['productCode'] = $productCode;

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


