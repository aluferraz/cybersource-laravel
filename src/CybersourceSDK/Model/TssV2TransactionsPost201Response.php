<?php
/**
 * TssV2TransactionsPost201Response
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
 * TssV2TransactionsPost201Response Class Doc Comment
 *
 * @category    Class
 * @package     Incevio\Cybersource\CybersourceSDK
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class TssV2TransactionsPost201Response implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'tssV2TransactionsPost201Response';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'searchId' => 'string',
        'save' => 'bool',
        'name' => 'string',
        'timezone' => 'string',
        'query' => 'string',
        'offset' => 'int',
        'limit' => 'int',
        'sort' => 'string',
        'count' => 'int',
        'totalCount' => 'int',
        'status' => 'string',
        'submitTimeUtc' => 'string',
        'embedded' => '\Incevio\Cybersource\CybersourceSDK\Model\TssV2TransactionsPost201ResponseEmbedded',
        'links' => '\Incevio\Cybersource\CybersourceSDK\Model\PtsV2IncrementalAuthorizationPatch201ResponseLinks'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'searchId' => null,
        'save' => null,
        'name' => null,
        'timezone' => null,
        'query' => null,
        'offset' => null,
        'limit' => null,
        'sort' => null,
        'count' => null,
        'totalCount' => null,
        'status' => null,
        'submitTimeUtc' => null,
        'embedded' => null,
        'links' => null
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
        'searchId' => 'searchId',
        'save' => 'save',
        'name' => 'name',
        'timezone' => 'timezone',
        'query' => 'query',
        'offset' => 'offset',
        'limit' => 'limit',
        'sort' => 'sort',
        'count' => 'count',
        'totalCount' => 'totalCount',
        'status' => 'status',
        'submitTimeUtc' => 'submitTimeUtc',
        'embedded' => '_embedded',
        'links' => '_links'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'searchId' => 'setSearchId',
        'save' => 'setSave',
        'name' => 'setName',
        'timezone' => 'setTimezone',
        'query' => 'setQuery',
        'offset' => 'setOffset',
        'limit' => 'setLimit',
        'sort' => 'setSort',
        'count' => 'setCount',
        'totalCount' => 'setTotalCount',
        'status' => 'setStatus',
        'submitTimeUtc' => 'setSubmitTimeUtc',
        'embedded' => 'setEmbedded',
        'links' => 'setLinks'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'searchId' => 'getSearchId',
        'save' => 'getSave',
        'name' => 'getName',
        'timezone' => 'getTimezone',
        'query' => 'getQuery',
        'offset' => 'getOffset',
        'limit' => 'getLimit',
        'sort' => 'getSort',
        'count' => 'getCount',
        'totalCount' => 'getTotalCount',
        'status' => 'getStatus',
        'submitTimeUtc' => 'getSubmitTimeUtc',
        'embedded' => 'getEmbedded',
        'links' => 'getLinks'
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
        $this->container['searchId'] = isset($data['searchId']) ? $data['searchId'] : null;
        $this->container['save'] = isset($data['save']) ? $data['save'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['timezone'] = isset($data['timezone']) ? $data['timezone'] : null;
        $this->container['query'] = isset($data['query']) ? $data['query'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['sort'] = isset($data['sort']) ? $data['sort'] : null;
        $this->container['count'] = isset($data['count']) ? $data['count'] : null;
        $this->container['totalCount'] = isset($data['totalCount']) ? $data['totalCount'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['submitTimeUtc'] = isset($data['submitTimeUtc']) ? $data['submitTimeUtc'] : null;
        $this->container['embedded'] = isset($data['embedded']) ? $data['embedded'] : null;
        $this->container['links'] = isset($data['links']) ? $data['links'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if (!is_null($this->container['searchId']) && (strlen($this->container['searchId']) > 60)) {
            $invalid_properties[] = "invalid value for 'searchId', the character length must be smaller than or equal to 60.";
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

        if (strlen($this->container['searchId']) > 60) {
            return false;
        }
        return true;
    }


    /**
     * Gets searchId
     * @return string
     */
    public function getSearchId()
    {
        return $this->container['searchId'];
    }

    /**
     * Sets searchId
     * @param string $searchId An unique identification number assigned by Incevio\Cybersource\CybersourceSDK to identify each Search request.
     * @return $this
     */
    public function setSearchId($searchId)
    {
        if (!is_null($searchId) && (strlen($searchId) > 60)) {
            throw new \InvalidArgumentException('invalid length for $searchId when calling TssV2TransactionsPost201Response., must be smaller than or equal to 60.');
        }

        $this->container['searchId'] = $searchId;

        return $this;
    }

    /**
     * Gets save
     * @return bool
     */
    public function getSave()
    {
        return $this->container['save'];
    }

    /**
     * Sets save
     * @param bool $save save or not save.
     * @return $this
     */
    public function setSave($save)
    {
        $this->container['save'] = $save;

        return $this;
    }

    /**
     * Gets name
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     * @param string $name The description for this field is not available.
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets timezone
     * @return string
     */
    public function getTimezone()
    {
        return $this->container['timezone'];
    }

    /**
     * Sets timezone
     * @param string $timezone Time Zone in ISO format.
     * @return $this
     */
    public function setTimezone($timezone)
    {
        $this->container['timezone'] = $timezone;

        return $this;
    }

    /**
     * Gets query
     * @return string
     */
    public function getQuery()
    {
        return $this->container['query'];
    }

    /**
     * Sets query
     * @param string $query transaction search query string.
     * @return $this
     */
    public function setQuery($query)
    {
        $this->container['query'] = $query;

        return $this;
    }

    /**
     * Gets offset
     * @return int
     */
    public function getOffset()
    {
        return $this->container['offset'];
    }

    /**
     * Sets offset
     * @param int $offset offset.
     * @return $this
     */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;

        return $this;
    }

    /**
     * Gets limit
     * @return int
     */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
     * Sets limit
     * @param int $limit Limit on number of results.
     * @return $this
     */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;

        return $this;
    }

    /**
     * Gets sort
     * @return string
     */
    public function getSort()
    {
        return $this->container['sort'];
    }

    /**
     * Sets sort
     * @param string $sort A comma separated list of the following form - fieldName1 asc or desc, fieldName2 asc or desc, etc.
     * @return $this
     */
    public function setSort($sort)
    {
        $this->container['sort'] = $sort;

        return $this;
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
     * @param int $count Results for this page, this could be below the limit.
     * @return $this
     */
    public function setCount($count)
    {
        $this->container['count'] = $count;

        return $this;
    }

    /**
     * Gets totalCount
     * @return int
     */
    public function getTotalCount()
    {
        return $this->container['totalCount'];
    }

    /**
     * Sets totalCount
     * @param int $totalCount Total number of results.
     * @return $this
     */
    public function setTotalCount($totalCount)
    {
        $this->container['totalCount'] = $totalCount;

        return $this;
    }

    /**
     * Gets status
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     * @param string $status The status of the submitted transaction.
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets submitTimeUtc
     * @return string
     */
    public function getSubmitTimeUtc()
    {
        return $this->container['submitTimeUtc'];
    }

    /**
     * Sets submitTimeUtc
     * @param string $submitTimeUtc Time of request in UTC. Format: `YYYY-MM-DDThh:mm:ssZ` Example `2016-08-11T22:47:57Z` equals August 11, 2016, at 22:47:57 (10:47:57 p.m.). The `T` separates the date and the time. The `Z` indicates UTC.
     * @return $this
     */
    public function setSubmitTimeUtc($submitTimeUtc)
    {
        $this->container['submitTimeUtc'] = $submitTimeUtc;

        return $this;
    }

    /**
     * Gets embedded
     * @return \Incevio\Cybersource\CybersourceSDK\Model\TssV2TransactionsPost201ResponseEmbedded
     */
    public function getEmbedded()
    {
        return $this->container['embedded'];
    }

    /**
     * Sets embedded
     * @param \Incevio\Cybersource\CybersourceSDK\Model\TssV2TransactionsPost201ResponseEmbedded $embedded
     * @return $this
     */
    public function setEmbedded($embedded)
    {
        $this->container['embedded'] = $embedded;

        return $this;
    }

    /**
     * Gets links
     * @return \Incevio\Cybersource\CybersourceSDK\Model\PtsV2IncrementalAuthorizationPatch201ResponseLinks
     */
    public function getLinks()
    {
        return $this->container['links'];
    }

    /**
     * Sets links
     * @param \Incevio\Cybersource\CybersourceSDK\Model\PtsV2IncrementalAuthorizationPatch201ResponseLinks $links
     * @return $this
     */
    public function setLinks($links)
    {
        $this->container['links'] = $links;

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


