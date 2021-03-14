<?php
/**
 * RoutePortfolioApi
 * PHP version 5
 *
 * @category Class
 * @package  transfercache
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

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use transfercache\ApiException;
use transfercache\Configuration;
use transfercache\HeaderSelector;
use transfercache\ObjectSerializer;

/**
 * RoutePortfolioApi Class Doc Comment
 *
 * @category Class
 * @package  transfercache
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class RoutePortfolioApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation route
     *
     * Route portfolio
     *
     * @param  string[] $fields Fields that will be informed in the response object. (required)
     * @param  string $destination_code Destination code(s) that will be returned in the response object, if it(they) exist(s). (required)
     * @param  int $offset Used for pagination. Index of the item from which the list will be generated in the response object. (optional, default to 1)
     * @param  int $limit Used for pagination. Number of items from the index indicated by the offset parameter that will be included in the response object. (optional, default to 1)
     *
     * @throws \transfercache\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \transfercache\apitude_transfer_cache\Route
     */
    public function route($fields, $destination_code, $offset = '1', $limit = '1')
    {
        list($response) = $this->routeWithHttpInfo($fields, $destination_code, $offset, $limit);
        return $response;
    }

    /**
     * Operation routeWithHttpInfo
     *
     * Route portfolio
     *
     * @param  string[] $fields Fields that will be informed in the response object. (required)
     * @param  string $destination_code Destination code(s) that will be returned in the response object, if it(they) exist(s). (required)
     * @param  int $offset Used for pagination. Index of the item from which the list will be generated in the response object. (optional, default to 1)
     * @param  int $limit Used for pagination. Number of items from the index indicated by the offset parameter that will be included in the response object. (optional, default to 1)
     *
     * @throws \transfercache\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \transfercache\apitude_transfer_cache\Route, HTTP status code, HTTP response headers (array of strings)
     */
    public function routeWithHttpInfo($fields, $destination_code, $offset = '1', $limit = '1')
    {
        $returnType = '\transfercache\apitude_transfer_cache\Route';
        $request = $this->routeRequest($fields, $destination_code, $offset, $limit);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if (!in_array($returnType, ['string','integer','bool'])) {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\transfercache\apitude_transfer_cache\Route',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\transfercache\apitude_transfer_cache\ErrorDTO',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\transfercache\apitude_transfer_cache\ErrorDTO',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\transfercache\apitude_transfer_cache\ErrorDTO',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation routeAsync
     *
     * Route portfolio
     *
     * @param  string[] $fields Fields that will be informed in the response object. (required)
     * @param  string $destination_code Destination code(s) that will be returned in the response object, if it(they) exist(s). (required)
     * @param  int $offset Used for pagination. Index of the item from which the list will be generated in the response object. (optional, default to 1)
     * @param  int $limit Used for pagination. Number of items from the index indicated by the offset parameter that will be included in the response object. (optional, default to 1)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function routeAsync($fields, $destination_code, $offset = '1', $limit = '1')
    {
        return $this->routeAsyncWithHttpInfo($fields, $destination_code, $offset, $limit)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation routeAsyncWithHttpInfo
     *
     * Route portfolio
     *
     * @param  string[] $fields Fields that will be informed in the response object. (required)
     * @param  string $destination_code Destination code(s) that will be returned in the response object, if it(they) exist(s). (required)
     * @param  int $offset Used for pagination. Index of the item from which the list will be generated in the response object. (optional, default to 1)
     * @param  int $limit Used for pagination. Number of items from the index indicated by the offset parameter that will be included in the response object. (optional, default to 1)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function routeAsyncWithHttpInfo($fields, $destination_code, $offset = '1', $limit = '1')
    {
        $returnType = '\transfercache\apitude_transfer_cache\Route';
        $request = $this->routeRequest($fields, $destination_code, $offset, $limit);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'route'
     *
     * @param  string[] $fields Fields that will be informed in the response object. (required)
     * @param  string $destination_code Destination code(s) that will be returned in the response object, if it(they) exist(s). (required)
     * @param  int $offset Used for pagination. Index of the item from which the list will be generated in the response object. (optional, default to 1)
     * @param  int $limit Used for pagination. Number of items from the index indicated by the offset parameter that will be included in the response object. (optional, default to 1)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function routeRequest($fields, $destination_code, $offset = '1', $limit = '1')
    {
        // verify the required parameter 'fields' is set
        if ($fields === null || (is_array($fields) && count($fields) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $fields when calling route'
            );
        }
        // verify the required parameter 'destination_code' is set
        if ($destination_code === null || (is_array($destination_code) && count($destination_code) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $destination_code when calling route'
            );
        }

        $resourcePath = '/routes';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if (is_array($fields)) {
            $fields = ObjectSerializer::serializeCollection($fields, 'multi', true);
        }
        if ($fields !== null) {
            $queryParams['fields'] = ObjectSerializer::toQueryValue($fields, null);
        }
        // query params
        if ($offset !== null) {
            $queryParams['offset'] = ObjectSerializer::toQueryValue($offset, 'int32');
        }
        // query params
        if ($limit !== null) {
            $queryParams['limit'] = ObjectSerializer::toQueryValue($limit, 'int32');
        }
        // query params
        if ($destination_code !== null) {
            $queryParams['destinationCode'] = ObjectSerializer::toQueryValue($destination_code, null);
        }


        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('Api-key');
        if ($apiKey !== null) {
            $headers['Api-key'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}
