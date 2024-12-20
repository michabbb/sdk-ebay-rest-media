<?php
/**
 * Error
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  macropage\SDKs\ebay\rest\media
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Media API
 *
 * The <b>Media API</b> lets sellers to create, upload, and retrieve files, including:<ul><li>videos</li><li>documents (for GPSR regulations)</li></ul>
 *
 * The version of the OpenAPI document: v1_beta.2.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.4.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace macropage\SDKs\ebay\rest\media\Model;

use \ArrayAccess;
use \macropage\SDKs\ebay\rest\media\ObjectSerializer;

/**
 * Error Class Doc Comment
 *
 * @category Class
 * @description This type defines the fields that can be returned in an error.
 * @package  macropage\SDKs\ebay\rest\media
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class Error implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Error';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'category' => 'string',
        'domain' => 'string',
        'errorId' => 'int',
        'inputRefIds' => 'string[]',
        'longMessage' => 'string',
        'message' => 'string',
        'outputRefIds' => 'string[]',
        'parameters' => '\macropage\SDKs\ebay\rest\media\Model\ErrorParameter[]',
        'subdomain' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'category' => null,
        'domain' => null,
        'errorId' => 'int32',
        'inputRefIds' => null,
        'longMessage' => null,
        'message' => null,
        'outputRefIds' => null,
        'parameters' => null,
        'subdomain' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'category' => 'category',
        'domain' => 'domain',
        'errorId' => 'errorId',
        'inputRefIds' => 'inputRefIds',
        'longMessage' => 'longMessage',
        'message' => 'message',
        'outputRefIds' => 'outputRefIds',
        'parameters' => 'parameters',
        'subdomain' => 'subdomain'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'category' => 'setCategory',
        'domain' => 'setDomain',
        'errorId' => 'setErrorId',
        'inputRefIds' => 'setInputRefIds',
        'longMessage' => 'setLongMessage',
        'message' => 'setMessage',
        'outputRefIds' => 'setOutputRefIds',
        'parameters' => 'setParameters',
        'subdomain' => 'setSubdomain'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'category' => 'getCategory',
        'domain' => 'getDomain',
        'errorId' => 'getErrorId',
        'inputRefIds' => 'getInputRefIds',
        'longMessage' => 'getLongMessage',
        'message' => 'getMessage',
        'outputRefIds' => 'getOutputRefIds',
        'parameters' => 'getParameters',
        'subdomain' => 'getSubdomain'
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
        return self::$openAPIModelName;
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
        $this->container['category'] = $data['category'] ?? null;
        $this->container['domain'] = $data['domain'] ?? null;
        $this->container['errorId'] = $data['errorId'] ?? null;
        $this->container['inputRefIds'] = $data['inputRefIds'] ?? null;
        $this->container['longMessage'] = $data['longMessage'] ?? null;
        $this->container['message'] = $data['message'] ?? null;
        $this->container['outputRefIds'] = $data['outputRefIds'] ?? null;
        $this->container['parameters'] = $data['parameters'] ?? null;
        $this->container['subdomain'] = $data['subdomain'] ?? null;
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
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets category
     *
     * @return string|null
     */
    public function getCategory()
    {
        return $this->container['category'];
    }

    /**
     * Sets category
     *
     * @param string|null $category Identifies the type of erro.
     *
     * @return self
     */
    public function setCategory($category)
    {
        $this->container['category'] = $category;

        return $this;
    }

    /**
     * Gets domain
     *
     * @return string|null
     */
    public function getDomain()
    {
        return $this->container['domain'];
    }

    /**
     * Sets domain
     *
     * @param string|null $domain Name for the primary system where the error occurred. This is relevant for application errors.
     *
     * @return self
     */
    public function setDomain($domain)
    {
        $this->container['domain'] = $domain;

        return $this;
    }

    /**
     * Gets errorId
     *
     * @return int|null
     */
    public function getErrorId()
    {
        return $this->container['errorId'];
    }

    /**
     * Sets errorId
     *
     * @param int|null $errorId A unique number to identify the error.
     *
     * @return self
     */
    public function setErrorId($errorId)
    {
        $this->container['errorId'] = $errorId;

        return $this;
    }

    /**
     * Gets inputRefIds
     *
     * @return string[]|null
     */
    public function getInputRefIds()
    {
        return $this->container['inputRefIds'];
    }

    /**
     * Sets inputRefIds
     *
     * @param string[]|null $inputRefIds An array of request elements most closely associated to the error.
     *
     * @return self
     */
    public function setInputRefIds($inputRefIds)
    {
        $this->container['inputRefIds'] = $inputRefIds;

        return $this;
    }

    /**
     * Gets longMessage
     *
     * @return string|null
     */
    public function getLongMessage()
    {
        return $this->container['longMessage'];
    }

    /**
     * Sets longMessage
     *
     * @param string|null $longMessage A more detailed explanation of the error.
     *
     * @return self
     */
    public function setLongMessage($longMessage)
    {
        $this->container['longMessage'] = $longMessage;

        return $this;
    }

    /**
     * Gets message
     *
     * @return string|null
     */
    public function getMessage()
    {
        return $this->container['message'];
    }

    /**
     * Sets message
     *
     * @param string|null $message Information on how to correct the problem, in the end user's terms and language where applicable.
     *
     * @return self
     */
    public function setMessage($message)
    {
        $this->container['message'] = $message;

        return $this;
    }

    /**
     * Gets outputRefIds
     *
     * @return string[]|null
     */
    public function getOutputRefIds()
    {
        return $this->container['outputRefIds'];
    }

    /**
     * Sets outputRefIds
     *
     * @param string[]|null $outputRefIds An array of request elements most closely associated to the error.
     *
     * @return self
     */
    public function setOutputRefIds($outputRefIds)
    {
        $this->container['outputRefIds'] = $outputRefIds;

        return $this;
    }

    /**
     * Gets parameters
     *
     * @return \macropage\SDKs\ebay\rest\media\Model\ErrorParameter[]|null
     */
    public function getParameters()
    {
        return $this->container['parameters'];
    }

    /**
     * Sets parameters
     *
     * @param \macropage\SDKs\ebay\rest\media\Model\ErrorParameter[]|null $parameters An array of name/value pairs that describe details the error condition. These are useful when multiple errors are returned.
     *
     * @return self
     */
    public function setParameters($parameters)
    {
        $this->container['parameters'] = $parameters;

        return $this;
    }

    /**
     * Gets subdomain
     *
     * @return string|null
     */
    public function getSubdomain()
    {
        return $this->container['subdomain'];
    }

    /**
     * Sets subdomain
     *
     * @param string|null $subdomain Further helps indicate which subsystem the error is coming from. System subcategories include: Initialization, Serialization, Security, Monitoring, Rate Limiting, etc.
     *
     * @return self
     */
    public function setSubdomain($subdomain)
    {
        $this->container['subdomain'] = $subdomain;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
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
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
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
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


