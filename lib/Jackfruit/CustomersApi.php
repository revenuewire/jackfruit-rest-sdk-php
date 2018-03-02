<?php
/**
 * CustomersApi
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
 * CustomersApi Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CustomersApi
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
     * @return CustomersApi
     */
    public function setApiClient(\Swagger\Client\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation getCustomer
     *
     * 
     *
     * @param int $customerId Customer id (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return \Swagger\Client\Model\Customer
     */
    public function getCustomer($customerId)
    {
        list($response) = $this->getCustomerWithHttpInfo($customerId);
        return $response;
    }

    /**
     * Operation getCustomerWithHttpInfo
     *
     * 
     *
     * @param int $customerId Customer id (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of \Swagger\Client\Model\Customer, HTTP status code, HTTP response headers (array of strings)
     */
    public function getCustomerWithHttpInfo($customerId)
    {
        // verify the required parameter 'customerId' is set
        if ($customerId === null) {
            throw new \InvalidArgumentException('Missing the required parameter $customerId when calling getCustomer');
        }
        // parse inputs
        $resourcePath = "/customers/{customerId}";
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
        if ($customerId !== null) {
            $resourcePath = str_replace(
                "{" . "customerId" . "}",
                $this->apiClient->getSerializer()->toPathValue($customerId),
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
                '\Swagger\Client\Model\Customer',
                '/customers/{customerId}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\Customer', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\Customer', $e->getResponseHeaders());
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
     * Operation getCustomersForMerchant
     *
     * 
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return \Swagger\Client\Model\CustomersRespone
     */
    public function getCustomersForMerchant()
    {
        list($response) = $this->getCustomersForMerchantWithHttpInfo();
        return $response;
    }

    /**
     * Operation getCustomersForMerchantWithHttpInfo
     *
     * 
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of \Swagger\Client\Model\CustomersRespone, HTTP status code, HTTP response headers (array of strings)
     */
    public function getCustomersForMerchantWithHttpInfo()
    {
        // parse inputs
        $resourcePath = "/customers";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

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
                '\Swagger\Client\Model\CustomersRespone',
                '/customers'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\CustomersRespone', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\CustomersRespone', $e->getResponseHeaders());
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
     * Operation getOffers
     *
     * 
     *
     * @param string $customerUserId Customer user id (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return \Swagger\Client\Model\CustomerOffers
     */
    public function getOffers($customerUserId)
    {
        list($response) = $this->getOffersWithHttpInfo($customerUserId);
        return $response;
    }

    /**
     * Operation getOffersWithHttpInfo
     *
     * 
     *
     * @param string $customerUserId Customer user id (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of \Swagger\Client\Model\CustomerOffers, HTTP status code, HTTP response headers (array of strings)
     */
    public function getOffersWithHttpInfo($customerUserId)
    {
        // verify the required parameter 'customerUserId' is set
        if ($customerUserId === null) {
            throw new \InvalidArgumentException('Missing the required parameter $customerUserId when calling getOffers');
        }
        // parse inputs
        $resourcePath = "/customers/{customerUserId}/offers";
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
        if ($customerUserId !== null) {
            $resourcePath = str_replace(
                "{" . "customerUserId" . "}",
                $this->apiClient->getSerializer()->toPathValue($customerUserId),
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
                '\Swagger\Client\Model\CustomerOffers',
                '/customers/{customerUserId}/offers'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\CustomerOffers', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\CustomerOffers', $e->getResponseHeaders());
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
     * Operation getTransactions
     *
     * 
     *
     * @param int $customerUserId Customer user id (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return \Swagger\Client\Model\CustomerTransactions
     */
    public function getTransactions($customerUserId)
    {
        list($response) = $this->getTransactionsWithHttpInfo($customerUserId);
        return $response;
    }

    /**
     * Operation getTransactionsWithHttpInfo
     *
     * 
     *
     * @param int $customerUserId Customer user id (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of \Swagger\Client\Model\CustomerTransactions, HTTP status code, HTTP response headers (array of strings)
     */
    public function getTransactionsWithHttpInfo($customerUserId)
    {
        // verify the required parameter 'customerUserId' is set
        if ($customerUserId === null) {
            throw new \InvalidArgumentException('Missing the required parameter $customerUserId when calling getTransactions');
        }
        // parse inputs
        $resourcePath = "/customers/{customerUserId}/transactions";
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
        if ($customerUserId !== null) {
            $resourcePath = str_replace(
                "{" . "customerUserId" . "}",
                $this->apiClient->getSerializer()->toPathValue($customerUserId),
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
                '\Swagger\Client\Model\CustomerTransactions',
                '/customers/{customerUserId}/transactions'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\CustomerTransactions', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\CustomerTransactions', $e->getResponseHeaders());
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
     * Operation updateShippingAddress
     *
     * 
     *
     * @param int $customerId Customer id (required)
     * @param int $transactionId transaction id (required)
     * @param string $name Customer&#39;s name (required)
     * @param string $address Customer&#39;s address (required)
     * @param string $countryCode Country code (required)
     * @param string $city City (required)
     * @param string $postalCode Postal code (required)
     * @param string $regionCode State code (optional)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return \Swagger\Client\Model\CustomerAddress
     */
    public function updateShippingAddress($customerId, $transactionId, $name, $address, $countryCode, $city, $postalCode, $regionCode = null)
    {
        list($response) = $this->updateShippingAddressWithHttpInfo($customerId, $transactionId, $name, $address, $countryCode, $city, $postalCode, $regionCode);
        return $response;
    }

    /**
     * Operation updateShippingAddressWithHttpInfo
     *
     * 
     *
     * @param int $customerId Customer id (required)
     * @param int $transactionId transaction id (required)
     * @param string $name Customer&#39;s name (required)
     * @param string $address Customer&#39;s address (required)
     * @param string $countryCode Country code (required)
     * @param string $city City (required)
     * @param string $postalCode Postal code (required)
     * @param string $regionCode State code (optional)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of \Swagger\Client\Model\CustomerAddress, HTTP status code, HTTP response headers (array of strings)
     */
    public function updateShippingAddressWithHttpInfo($customerId, $transactionId, $name, $address, $countryCode, $city, $postalCode, $regionCode = null)
    {
        // verify the required parameter 'customerId' is set
        if ($customerId === null) {
            throw new \InvalidArgumentException('Missing the required parameter $customerId when calling updateShippingAddress');
        }
        // verify the required parameter 'transactionId' is set
        if ($transactionId === null) {
            throw new \InvalidArgumentException('Missing the required parameter $transactionId when calling updateShippingAddress');
        }
        // verify the required parameter 'name' is set
        if ($name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $name when calling updateShippingAddress');
        }
        // verify the required parameter 'address' is set
        if ($address === null) {
            throw new \InvalidArgumentException('Missing the required parameter $address when calling updateShippingAddress');
        }
        // verify the required parameter 'countryCode' is set
        if ($countryCode === null) {
            throw new \InvalidArgumentException('Missing the required parameter $countryCode when calling updateShippingAddress');
        }
        // verify the required parameter 'city' is set
        if ($city === null) {
            throw new \InvalidArgumentException('Missing the required parameter $city when calling updateShippingAddress');
        }
        // verify the required parameter 'postalCode' is set
        if ($postalCode === null) {
            throw new \InvalidArgumentException('Missing the required parameter $postalCode when calling updateShippingAddress');
        }
        // parse inputs
        $resourcePath = "/customers/{customerId}/address/{transactionId}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/x-www-form-urlencoded']);

        // path params
        if ($customerId !== null) {
            $resourcePath = str_replace(
                "{" . "customerId" . "}",
                $this->apiClient->getSerializer()->toPathValue($customerId),
                $resourcePath
            );
        }
        // path params
        if ($transactionId !== null) {
            $resourcePath = str_replace(
                "{" . "transactionId" . "}",
                $this->apiClient->getSerializer()->toPathValue($transactionId),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // form params
        if ($name !== null) {
            $formParams['name'] = $this->apiClient->getSerializer()->toFormValue($name);
        }
        // form params
        if ($address !== null) {
            $formParams['address'] = $this->apiClient->getSerializer()->toFormValue($address);
        }
        // form params
        if ($countryCode !== null) {
            $formParams['countryCode'] = $this->apiClient->getSerializer()->toFormValue($countryCode);
        }
        // form params
        if ($regionCode !== null) {
            $formParams['regionCode'] = $this->apiClient->getSerializer()->toFormValue($regionCode);
        }
        // form params
        if ($city !== null) {
            $formParams['city'] = $this->apiClient->getSerializer()->toFormValue($city);
        }
        // form params
        if ($postalCode !== null) {
            $formParams['postalCode'] = $this->apiClient->getSerializer()->toFormValue($postalCode);
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
                'PUT',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\Model\CustomerAddress',
                '/customers/{customerId}/address/{transactionId}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\CustomerAddress', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\CustomerAddress', $e->getResponseHeaders());
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
