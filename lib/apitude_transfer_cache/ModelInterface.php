<?php
/**
 * ModelInterface
 *
 * PHP version 5
 *
 * @category Class
 * @package  transfercache\apitude_transfer_cache
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Transfer Cache API
 *
 * # APItude Transfer Cache API  APItude also includes now the ability to download the transfers content & portfolio. This API will provide you with availability to **cache and download the routes operated by transfer services and as well as the rest of the static content**, like terminals, pickup points and such.  APItude transfers CACHE API is designed to provide Hotelbeds Group clients with a set of API calls to download:   * Routes * Pickup points * Hotels * Currencies * Master Data (Transfer types, Categories & Vehicle types) * Locations (countries, destinations & terminals)  APItude Transfers CACHE API is delivered via HTTPS GET requests. Reesponse data is returned in JSON, allowing you to easily build requests and parse responses in a standard way by using the tools included with most of the modern languages. Every exposed HTTP resource allows every client to create paginated responses by means of using offset & limit attributes.
 *
 * OpenAPI spec version: 1.0
 * Contact: integrations.btb@hotelbeds.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.24
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace transfercache\apitude_transfer_cache;

/**
 * Interface abstracting model access.
 *
 * @package transfercache\apitude_transfer_cache
 * @author  Swagger Codegen team
 */
interface ModelInterface
{
    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName();

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes();

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats();

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     *
     * @return array
     */
    public static function attributeMap();

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters();

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters();

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array
     */
    public function listInvalidProperties();

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool
     */
    public function valid();
}
