<?php
/**
 * OrdersApi
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * RevenueWire JackFruit REST API (Alpha)
 *
 * This API *does not* represent the final product. Some of the APIs listed below are *highly experimental* and *will likely change* before the final release. They may come with *crashes and bugs* and may potentially cause *data loss*.
 *
 * OpenAPI spec version: v1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Jackfruit;

use \Swagger\Client\ApiClient;
use \Swagger\Client\ApiException;
use \Swagger\Client\Configuration;
use \Swagger\Client\ObjectSerializer;

/**
 * OrdersApi Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class OrdersApi
{
    /**
     * API Client
     *
     * @var \Swagger\Client\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     *
     * @param \Swagger\Client\ApiClient|null $apiClient The api client to use
     */
    public function __construct(\Swagger\Client\ApiClient $apiClient = null)
    {
        if ($apiClient === null) {
            $apiClient = new ApiClient();
        }

        $this->apiClient = $apiClient;
    }

    /**
     * Get API client
     *
     * @return \Swagger\Client\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param \Swagger\Client\ApiClient $apiClient set the API client
     *
     * @return OrdersApi
     */
    public function setApiClient(\Swagger\Client\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation ordersCustomerEmailEmailGet
     *
     * 
     *
     * @param string $email Customer email (required)
     * @param string $merchantFid Merchant fid (optional) (optional)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return \Swagger\Client\Model\CustomerOrders[]
     */
    public function ordersCustomerEmailEmailGet($email, $merchantFid = null)
    {
        list($response) = $this->ordersCustomerEmailEmailGetWithHttpInfo($email, $merchantFid);
        return $response;
    }

    /**
     * Operation ordersCustomerEmailEmailGetWithHttpInfo
     *
     * 
     *
     * @param string $email Customer email (required)
     * @param string $merchantFid Merchant fid (optional) (optional)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of \Swagger\Client\Model\CustomerOrders[], HTTP status code, HTTP response headers (array of strings)
     */
    public function ordersCustomerEmailEmailGetWithHttpInfo($email, $merchantFid = null)
    {
        // verify the required parameter 'email' is set
        if ($email === null) {
            throw new \InvalidArgumentException('Missing the required parameter $email when calling ordersCustomerEmailEmailGet');
        }
        // parse inputs
        $resourcePath = "/orders/customer-email/{email}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // query params
        if ($merchantFid !== null) {
            $queryParams['merchantFid'] = $this->apiClient->getSerializer()->toQueryValue($merchantFid);
        }
        // path params
        if ($email !== null) {
            $resourcePath = str_replace(
                "{" . "email" . "}",
                $this->apiClient->getSerializer()->toPathValue($email),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('X-Authorization-JWT');
        if (strlen($apiKey) !== 0) {
            $headerParams['X-Authorization-JWT'] = $apiKey;
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('X-API-KEY');
        if (strlen($apiKey) !== 0) {
            $headerParams['X-API-KEY'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\Model\CustomerOrders[]',
                '/orders/customer-email/{email}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\CustomerOrders[]', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\CustomerOrders[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\Error', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation ordersOrderIdGet
     *
     * 
     *
     * @param int $orderId Order id (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return \Swagger\Client\Model\Transaction[]
     */
    public function ordersOrderIdGet($orderId)
    {
        list($response) = $this->ordersOrderIdGetWithHttpInfo($orderId);
        return $response;
    }

    /**
     * Operation ordersOrderIdGetWithHttpInfo
     *
     * 
     *
     * @param int $orderId Order id (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of \Swagger\Client\Model\Transaction[], HTTP status code, HTTP response headers (array of strings)
     */
    public function ordersOrderIdGetWithHttpInfo($orderId)
    {
        // verify the required parameter 'orderId' is set
        if ($orderId === null) {
            throw new \InvalidArgumentException('Missing the required parameter $orderId when calling ordersOrderIdGet');
        }
        // parse inputs
        $resourcePath = "/orders/{orderId}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // path params
        if ($orderId !== null) {
            $resourcePath = str_replace(
                "{" . "orderId" . "}",
                $this->apiClient->getSerializer()->toPathValue($orderId),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('X-Authorization-JWT');
        if (strlen($apiKey) !== 0) {
            $headerParams['X-Authorization-JWT'] = $apiKey;
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('X-API-KEY');
        if (strlen($apiKey) !== 0) {
            $headerParams['X-API-KEY'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\Model\Transaction[]',
                '/orders/{orderId}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\Transaction[]', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\Transaction[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\Error', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation ordersPurchaseLookupPost
     *
     * 
     *
     * @param string $email email (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return \Swagger\Client\Model\Response[]
     */
    public function ordersPurchaseLookupPost($email)
    {
        list($response) = $this->ordersPurchaseLookupPostWithHttpInfo($email);
        return $response;
    }

    /**
     * Operation ordersPurchaseLookupPostWithHttpInfo
     *
     * 
     *
     * @param string $email email (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of \Swagger\Client\Model\Response[], HTTP status code, HTTP response headers (array of strings)
     */
    public function ordersPurchaseLookupPostWithHttpInfo($email)
    {
        // verify the required parameter 'email' is set
        if ($email === null) {
            throw new \InvalidArgumentException('Missing the required parameter $email when calling ordersPurchaseLookupPost');
        }
        // parse inputs
        $resourcePath = "/orders/purchase-lookup";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['multipart/form-data']);

        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // form params
        if ($email !== null) {
            $formParams['email'] = $this->apiClient->getSerializer()->toFormValue($email);
        }
        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('X-Authorization-JWT');
        if (strlen($apiKey) !== 0) {
            $headerParams['X-Authorization-JWT'] = $apiKey;
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('X-API-KEY');
        if (strlen($apiKey) !== 0) {
            $headerParams['X-API-KEY'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\Model\Response[]',
                '/orders/purchase-lookup'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\Response[]', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\Response[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\Error', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}