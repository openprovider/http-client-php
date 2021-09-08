<?php
/**
 * ResellerServiceApi
 * PHP version 5
 *
 * @category Class
 * @package  Openprovider\Api\Rest\Client\Person
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Reseller/Customer
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: 1.0.0-beta
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.0.3
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Openprovider\Api\Rest\Client\Person\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Query;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Openprovider\Api\Rest\Client\Base\ApiException;
use Openprovider\Api\Rest\Client\Base\Configuration;
use Openprovider\Api\Rest\Client\Base\HeaderSelector;
use Openprovider\Api\Rest\Client\Base\ObjectSerializer;

/**
 * ResellerServiceApi Class Doc Comment
 *
 * @category Class
 * @package  Openprovider\Api\Rest\Client\Person
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ResellerServiceApi
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
     * @var int Host index
     */
    protected $hostIndex;

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     * @param int             $host_index (Optional) host index to select the list of hosts if defined in the OpenAPI spec
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null,
        $host_index = 0
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
        $this->hostIndex = $host_index;
    }

    /**
     * Set the host index
     *
     * @param  int Host index (required)
     */
    public function setHostIndex($host_index)
    {
        $this->hostIndex = $host_index;
    }

    /**
     * Get the host index
     *
     * @return Host index
     */
    public function getHostIndex()
    {
        return $this->hostIndex;
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation getReseller
     *
     * Get reseller
     *
     * @param  bool $with_additional_data Retrieves objects with (1) or without (0) additional data. (optional)
     * @param  bool $with_statistics Indicates if reseller statistics should be retrieved. (optional)
     * @param  bool $with_settings Indicates if reseller settings should be retrieved. (optional)
     * @param  bool $with_contacts Indicates if reseller contacts should be retrieved. (optional)
     *
     * @throws \Openprovider\Api\Rest\Client\Base\ApiException; on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Openprovider\Api\Rest\Client\Person\Model\ResellerGetResellerResponse|\Openprovider\Api\Rest\Client\Person\Model\ErrorError
     */
    public function getReseller($with_additional_data = null, $with_statistics = null, $with_settings = null, $with_contacts = null)
    {
        list($response) = $this->getResellerWithHttpInfo($with_additional_data, $with_statistics, $with_settings, $with_contacts);
        return $response;
    }

    /**
     * Operation getResellerWithHttpInfo
     *
     * Get reseller
     *
     * @param  bool $with_additional_data Retrieves objects with (1) or without (0) additional data. (optional)
     * @param  bool $with_statistics Indicates if reseller statistics should be retrieved. (optional)
     * @param  bool $with_settings Indicates if reseller settings should be retrieved. (optional)
     * @param  bool $with_contacts Indicates if reseller contacts should be retrieved. (optional)
     *
     * @throws Openprovider\Api\Rest\Client\Base\ApiException; on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Openprovider\Api\Rest\Client\Person\Model\ResellerGetResellerResponse|\Openprovider\Api\Rest\Client\Person\Model\ErrorError, HTTP status code, HTTP response headers (array of strings)
     */
    public function getResellerWithHttpInfo($with_additional_data = null, $with_statistics = null, $with_settings = null, $with_contacts = null)
    {
        $request = $this->getResellerRequest($with_additional_data, $with_statistics, $with_settings, $with_contacts);

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
            switch($statusCode) {
                case 200:
                    if ('\Openprovider\Api\Rest\Client\Person\Model\ResellerGetResellerResponse' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Openprovider\Api\Rest\Client\Person\Model\ResellerGetResellerResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                default:
                    if ('\Openprovider\Api\Rest\Client\Person\Model\ErrorError' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Openprovider\Api\Rest\Client\Person\Model\ErrorError', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Openprovider\Api\Rest\Client\Person\Model\ResellerGetResellerResponse';
            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
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
                        '\Openprovider\Api\Rest\Client\Person\Model\ResellerGetResellerResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                default:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Openprovider\Api\Rest\Client\Person\Model\ErrorError',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getResellerAsync
     *
     * Get reseller
     *
     * @param  bool $with_additional_data Retrieves objects with (1) or without (0) additional data. (optional)
     * @param  bool $with_statistics Indicates if reseller statistics should be retrieved. (optional)
     * @param  bool $with_settings Indicates if reseller settings should be retrieved. (optional)
     * @param  bool $with_contacts Indicates if reseller contacts should be retrieved. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getResellerAsync($with_additional_data = null, $with_statistics = null, $with_settings = null, $with_contacts = null)
    {
        return $this->getResellerAsyncWithHttpInfo($with_additional_data, $with_statistics, $with_settings, $with_contacts)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getResellerAsyncWithHttpInfo
     *
     * Get reseller
     *
     * @param  bool $with_additional_data Retrieves objects with (1) or without (0) additional data. (optional)
     * @param  bool $with_statistics Indicates if reseller statistics should be retrieved. (optional)
     * @param  bool $with_settings Indicates if reseller settings should be retrieved. (optional)
     * @param  bool $with_contacts Indicates if reseller contacts should be retrieved. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getResellerAsyncWithHttpInfo($with_additional_data = null, $with_statistics = null, $with_settings = null, $with_contacts = null)
    {
        $returnType = '\Openprovider\Api\Rest\Client\Person\Model\ResellerGetResellerResponse';
        $request = $this->getResellerRequest($with_additional_data, $with_statistics, $with_settings, $with_contacts);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
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
     * Create request for operation 'getReseller'
     *
     * @param  bool $with_additional_data Retrieves objects with (1) or without (0) additional data. (optional)
     * @param  bool $with_statistics Indicates if reseller statistics should be retrieved. (optional)
     * @param  bool $with_settings Indicates if reseller settings should be retrieved. (optional)
     * @param  bool $with_contacts Indicates if reseller contacts should be retrieved. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getResellerRequest($with_additional_data = null, $with_statistics = null, $with_settings = null, $with_contacts = null)
    {

        $resourcePath = '/v1beta/resellers';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($with_additional_data !== null) {
            $queryParams['with_additional_data'] = ObjectSerializer::toQueryValue($with_additional_data);
        }
        // query params
        if ($with_statistics !== null) {
            $queryParams['with_statistics'] = ObjectSerializer::toQueryValue($with_statistics);
        }
        // query params
        if ($with_settings !== null) {
            $queryParams['with_settings'] = ObjectSerializer::toQueryValue($with_settings);
        }
        // query params
        if ($with_contacts !== null) {
            $queryParams['with_contacts'] = ObjectSerializer::toQueryValue($with_contacts);
        }


        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($_tempBody));
            } else {
                $httpBody = $_tempBody;
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
                $httpBody = Query::build($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('Authorization');
        if ($apiKey !== null) {
            $headers['Authorization'] = $apiKey;
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

        $query = Query::build($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation updateReseller
     *
     * Update reseller
     *
     * @param  int $id Object ID (required)
     * @param  \Openprovider\Api\Rest\Client\Person\Model\ResellerUpdateResellerRequest $body body (required)
     *
     * @throws \Openprovider\Api\Rest\Client\Base\ApiException; on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Openprovider\Api\Rest\Client\Person\Model\ResellerUpdateResellerResponse|\Openprovider\Api\Rest\Client\Person\Model\ErrorError
     */
    public function updateReseller($id, $body)
    {
        list($response) = $this->updateResellerWithHttpInfo($id, $body);
        return $response;
    }

    /**
     * Operation updateResellerWithHttpInfo
     *
     * Update reseller
     *
     * @param  int $id Object ID (required)
     * @param  \Openprovider\Api\Rest\Client\Person\Model\ResellerUpdateResellerRequest $body (required)
     *
     * @throws Openprovider\Api\Rest\Client\Base\ApiException; on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Openprovider\Api\Rest\Client\Person\Model\ResellerUpdateResellerResponse|\Openprovider\Api\Rest\Client\Person\Model\ErrorError, HTTP status code, HTTP response headers (array of strings)
     */
    public function updateResellerWithHttpInfo($id, $body)
    {
        $request = $this->updateResellerRequest($id, $body);

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
            switch($statusCode) {
                case 200:
                    if ('\Openprovider\Api\Rest\Client\Person\Model\ResellerUpdateResellerResponse' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Openprovider\Api\Rest\Client\Person\Model\ResellerUpdateResellerResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                default:
                    if ('\Openprovider\Api\Rest\Client\Person\Model\ErrorError' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Openprovider\Api\Rest\Client\Person\Model\ErrorError', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Openprovider\Api\Rest\Client\Person\Model\ResellerUpdateResellerResponse';
            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
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
                        '\Openprovider\Api\Rest\Client\Person\Model\ResellerUpdateResellerResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                default:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Openprovider\Api\Rest\Client\Person\Model\ErrorError',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation updateResellerAsync
     *
     * Update reseller
     *
     * @param  int $id Object ID (required)
     * @param  \Openprovider\Api\Rest\Client\Person\Model\ResellerUpdateResellerRequest $body (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateResellerAsync($id, $body)
    {
        return $this->updateResellerAsyncWithHttpInfo($id, $body)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation updateResellerAsyncWithHttpInfo
     *
     * Update reseller
     *
     * @param  int $id Object ID (required)
     * @param  \Openprovider\Api\Rest\Client\Person\Model\ResellerUpdateResellerRequest $body (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateResellerAsyncWithHttpInfo($id, $body)
    {
        $returnType = '\Openprovider\Api\Rest\Client\Person\Model\ResellerUpdateResellerResponse';
        $request = $this->updateResellerRequest($id, $body);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
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
     * Create request for operation 'updateReseller'
     *
     * @param  int $id Object ID (required)
     * @param  \Openprovider\Api\Rest\Client\Person\Model\ResellerUpdateResellerRequest $body (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function updateResellerRequest($id, $body)
    {
        // verify the required parameter 'id' is set
        if ($id === null || (is_array($id) && count($id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id when calling updateReseller'
            );
        }
        // verify the required parameter 'body' is set
        if ($body === null || (is_array($body) && count($body) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $body when calling updateReseller'
            );
        }

        $resourcePath = '/v1beta/resellers/{id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                '{' . 'id' . '}',
                ObjectSerializer::toPathValue($id),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($_tempBody));
            } else {
                $httpBody = $_tempBody;
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
                $httpBody = Query::build($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('Authorization');
        if ($apiKey !== null) {
            $headers['Authorization'] = $apiKey;
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

        $query = Query::build($queryParams);
        return new Request(
            'PUT',
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
