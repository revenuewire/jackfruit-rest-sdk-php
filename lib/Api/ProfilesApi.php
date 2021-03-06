<?php
/**
 * ProfilesApi
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

namespace Swagger\Client\Api;

use \Swagger\Client\ApiClient;
use \Swagger\Client\ApiException;
use \Swagger\Client\Configuration;
use \Swagger\Client\ObjectSerializer;

/**
 * ProfilesApi Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ProfilesApi
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
     * @return ProfilesApi
     */
    public function setApiClient(\Swagger\Client\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation profilesChangePasswordPut
     *
     * 
     *
     * @param string $currentPassword User&#39;s current password (required)
     * @param string $newPassword User&#39;s new password (required)
     * @param string $confirmPassword User&#39;s confirm password (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return \Swagger\Client\Model\Profile
     */
    public function profilesChangePasswordPut($currentPassword, $newPassword, $confirmPassword)
    {
        list($response) = $this->profilesChangePasswordPutWithHttpInfo($currentPassword, $newPassword, $confirmPassword);
        return $response;
    }

    /**
     * Operation profilesChangePasswordPutWithHttpInfo
     *
     * 
     *
     * @param string $currentPassword User&#39;s current password (required)
     * @param string $newPassword User&#39;s new password (required)
     * @param string $confirmPassword User&#39;s confirm password (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of \Swagger\Client\Model\Profile, HTTP status code, HTTP response headers (array of strings)
     */
    public function profilesChangePasswordPutWithHttpInfo($currentPassword, $newPassword, $confirmPassword)
    {
        // verify the required parameter 'currentPassword' is set
        if ($currentPassword === null) {
            throw new \InvalidArgumentException('Missing the required parameter $currentPassword when calling profilesChangePasswordPut');
        }
        // verify the required parameter 'newPassword' is set
        if ($newPassword === null) {
            throw new \InvalidArgumentException('Missing the required parameter $newPassword when calling profilesChangePasswordPut');
        }
        // verify the required parameter 'confirmPassword' is set
        if ($confirmPassword === null) {
            throw new \InvalidArgumentException('Missing the required parameter $confirmPassword when calling profilesChangePasswordPut');
        }
        // parse inputs
        $resourcePath = "/profiles/change-password";
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
        if ($currentPassword !== null) {
            $queryParams['current_password'] = $this->apiClient->getSerializer()->toQueryValue($currentPassword);
        }
        // query params
        if ($newPassword !== null) {
            $queryParams['new_password'] = $this->apiClient->getSerializer()->toQueryValue($newPassword);
        }
        // query params
        if ($confirmPassword !== null) {
            $queryParams['confirm_password'] = $this->apiClient->getSerializer()->toQueryValue($confirmPassword);
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
                'PUT',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\Model\Profile',
                '/profiles/change-password'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\Profile', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\Profile', $e->getResponseHeaders());
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
     * Operation profilesGet
     *
     * 
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return \Swagger\Client\Model\Profile
     */
    public function profilesGet()
    {
        list($response) = $this->profilesGetWithHttpInfo();
        return $response;
    }

    /**
     * Operation profilesGetWithHttpInfo
     *
     * 
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of \Swagger\Client\Model\Profile, HTTP status code, HTTP response headers (array of strings)
     */
    public function profilesGetWithHttpInfo()
    {
        // parse inputs
        $resourcePath = "/profiles";
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
                '\Swagger\Client\Model\Profile',
                '/profiles'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\Profile', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\Profile', $e->getResponseHeaders());
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
     * Operation profilesPut
     *
     * 
     *
     * @param string $firstName User&#39;s first name (required)
     * @param string $lastName User&#39;s lastname (required)
     * @param string $email User&#39;s email (required)
     * @param string $timezone Setup your timezone. (optional)
     * @param string $defaultDashboard User&#39;s default dashboard (optional)
     * @param string $defaultProductView User&#39;s default product view. (optional)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return \Swagger\Client\Model\Profile
     */
    public function profilesPut($firstName, $lastName, $email, $timezone = null, $defaultDashboard = null, $defaultProductView = null)
    {
        list($response) = $this->profilesPutWithHttpInfo($firstName, $lastName, $email, $timezone, $defaultDashboard, $defaultProductView);
        return $response;
    }

    /**
     * Operation profilesPutWithHttpInfo
     *
     * 
     *
     * @param string $firstName User&#39;s first name (required)
     * @param string $lastName User&#39;s lastname (required)
     * @param string $email User&#39;s email (required)
     * @param string $timezone Setup your timezone. (optional)
     * @param string $defaultDashboard User&#39;s default dashboard (optional)
     * @param string $defaultProductView User&#39;s default product view. (optional)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of \Swagger\Client\Model\Profile, HTTP status code, HTTP response headers (array of strings)
     */
    public function profilesPutWithHttpInfo($firstName, $lastName, $email, $timezone = null, $defaultDashboard = null, $defaultProductView = null)
    {
        // verify the required parameter 'firstName' is set
        if ($firstName === null) {
            throw new \InvalidArgumentException('Missing the required parameter $firstName when calling profilesPut');
        }
        // verify the required parameter 'lastName' is set
        if ($lastName === null) {
            throw new \InvalidArgumentException('Missing the required parameter $lastName when calling profilesPut');
        }
        // verify the required parameter 'email' is set
        if ($email === null) {
            throw new \InvalidArgumentException('Missing the required parameter $email when calling profilesPut');
        }
        // parse inputs
        $resourcePath = "/profiles";
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
        if ($firstName !== null) {
            $queryParams['first_name'] = $this->apiClient->getSerializer()->toQueryValue($firstName);
        }
        // query params
        if ($lastName !== null) {
            $queryParams['last_name'] = $this->apiClient->getSerializer()->toQueryValue($lastName);
        }
        // query params
        if ($email !== null) {
            $queryParams['email'] = $this->apiClient->getSerializer()->toQueryValue($email);
        }
        // query params
        if ($timezone !== null) {
            $queryParams['timezone'] = $this->apiClient->getSerializer()->toQueryValue($timezone);
        }
        // query params
        if ($defaultDashboard !== null) {
            $queryParams['default_dashboard'] = $this->apiClient->getSerializer()->toQueryValue($defaultDashboard);
        }
        // query params
        if ($defaultProductView !== null) {
            $queryParams['default_product_view'] = $this->apiClient->getSerializer()->toQueryValue($defaultProductView);
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
                'PUT',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\Model\Profile',
                '/profiles'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\Profile', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\Profile', $e->getResponseHeaders());
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
