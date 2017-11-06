<?php
/**
 * MerchantsApi
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
 * MerchantsApi Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class MerchantsApi
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
     * @return MerchantsApi
     */
    public function setApiClient(\Swagger\Client\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation createAffiliateBlock
     *
     * Create merchant affiliate block
     *
     * @param int $merchantId Merchant group account id (required)
     * @param int $affiliateId Affiliate group account id (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return \Swagger\Client\Model\Merchant
     */
    public function createAffiliateBlock($merchantId, $affiliateId)
    {
        list($response) = $this->createAffiliateBlockWithHttpInfo($merchantId, $affiliateId);
        return $response;
    }

    /**
     * Operation createAffiliateBlockWithHttpInfo
     *
     * Create merchant affiliate block
     *
     * @param int $merchantId Merchant group account id (required)
     * @param int $affiliateId Affiliate group account id (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of \Swagger\Client\Model\Merchant, HTTP status code, HTTP response headers (array of strings)
     */
    public function createAffiliateBlockWithHttpInfo($merchantId, $affiliateId)
    {
        // verify the required parameter 'merchantId' is set
        if ($merchantId === null) {
            throw new \InvalidArgumentException('Missing the required parameter $merchantId when calling createAffiliateBlock');
        }
        // verify the required parameter 'affiliateId' is set
        if ($affiliateId === null) {
            throw new \InvalidArgumentException('Missing the required parameter $affiliateId when calling createAffiliateBlock');
        }
        // parse inputs
        $resourcePath = "/merchants/{merchantId}/block-affiliate/";
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
        if ($merchantId !== null) {
            $resourcePath = str_replace(
                "{" . "merchantId" . "}",
                $this->apiClient->getSerializer()->toPathValue($merchantId),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // form params
        if ($affiliateId !== null) {
            $formParams['affiliateId'] = $this->apiClient->getSerializer()->toFormValue($affiliateId);
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
                '\Swagger\Client\Model\Merchant',
                '/merchants/{merchantId}/block-affiliate/'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\Merchant', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\Merchant', $e->getResponseHeaders());
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
     * Operation deleteAffiliateBlock
     *
     * Delete Merchant Affiliate Block
     *
     * @param int $merchantId Merchant id (required)
     * @param int $blockId Block id (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return \Swagger\Client\Model\Merchant
     */
    public function deleteAffiliateBlock($merchantId, $blockId)
    {
        list($response) = $this->deleteAffiliateBlockWithHttpInfo($merchantId, $blockId);
        return $response;
    }

    /**
     * Operation deleteAffiliateBlockWithHttpInfo
     *
     * Delete Merchant Affiliate Block
     *
     * @param int $merchantId Merchant id (required)
     * @param int $blockId Block id (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of \Swagger\Client\Model\Merchant, HTTP status code, HTTP response headers (array of strings)
     */
    public function deleteAffiliateBlockWithHttpInfo($merchantId, $blockId)
    {
        // verify the required parameter 'merchantId' is set
        if ($merchantId === null) {
            throw new \InvalidArgumentException('Missing the required parameter $merchantId when calling deleteAffiliateBlock');
        }
        // verify the required parameter 'blockId' is set
        if ($blockId === null) {
            throw new \InvalidArgumentException('Missing the required parameter $blockId when calling deleteAffiliateBlock');
        }
        // parse inputs
        $resourcePath = "/merchants/{merchantId}/block-affiliate/{blockId}/";
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
        if ($merchantId !== null) {
            $resourcePath = str_replace(
                "{" . "merchantId" . "}",
                $this->apiClient->getSerializer()->toPathValue($merchantId),
                $resourcePath
            );
        }
        // path params
        if ($blockId !== null) {
            $resourcePath = str_replace(
                "{" . "blockId" . "}",
                $this->apiClient->getSerializer()->toPathValue($blockId),
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
                'DELETE',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\Model\Merchant',
                '/merchants/{merchantId}/block-affiliate/{blockId}/'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\Merchant', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\Merchant', $e->getResponseHeaders());
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
     * Operation getMerchant
     *
     * Get merchant info
     *
     * @param int $merchantId Merchant group account id (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return \Swagger\Client\Model\MerchantDetailsResponse
     */
    public function getMerchant($merchantId)
    {
        list($response) = $this->getMerchantWithHttpInfo($merchantId);
        return $response;
    }

    /**
     * Operation getMerchantWithHttpInfo
     *
     * Get merchant info
     *
     * @param int $merchantId Merchant group account id (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of \Swagger\Client\Model\MerchantDetailsResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getMerchantWithHttpInfo($merchantId)
    {
        // verify the required parameter 'merchantId' is set
        if ($merchantId === null) {
            throw new \InvalidArgumentException('Missing the required parameter $merchantId when calling getMerchant');
        }
        // parse inputs
        $resourcePath = "/merchants/{merchantId}";
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
        if ($merchantId !== null) {
            $resourcePath = str_replace(
                "{" . "merchantId" . "}",
                $this->apiClient->getSerializer()->toPathValue($merchantId),
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
                '\Swagger\Client\Model\MerchantDetailsResponse',
                '/merchants/{merchantId}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\MerchantDetailsResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\MerchantDetailsResponse', $e->getResponseHeaders());
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
