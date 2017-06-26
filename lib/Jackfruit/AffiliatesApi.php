<?php
/**
 * AffiliatesApi
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
 * AffiliatesApi Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AffiliatesApi
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
     * @return AffiliatesApi
     */
    public function setApiClient(\Swagger\Client\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation getAffiliateById
     *
     * 
     *
     * @param int $id Affiliate Id (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return \Swagger\Client\Model\InlineResponse2001
     */
    public function getAffiliateById($id)
    {
        list($response) = $this->getAffiliateByIdWithHttpInfo($id);
        return $response;
    }

    /**
     * Operation getAffiliateByIdWithHttpInfo
     *
     * 
     *
     * @param int $id Affiliate Id (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of \Swagger\Client\Model\InlineResponse2001, HTTP status code, HTTP response headers (array of strings)
     */
    public function getAffiliateByIdWithHttpInfo($id)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling getAffiliateById');
        }
        // parse inputs
        $resourcePath = "/affiliates/{id}";
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
        if ($id !== null) {
            $resourcePath = str_replace(
                "{" . "id" . "}",
                $this->apiClient->getSerializer()->toPathValue($id),
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
                '\Swagger\Client\Model\InlineResponse2001',
                '/affiliates/{id}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\InlineResponse2001', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\InlineResponse2001', $e->getResponseHeaders());
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
     * Operation saveAffiliateById
     *
     * 
     *
     * @param int $id Affiliate ID (required)
     * @param string $companyName Name of affiliate&#39;s company (required)
     * @param string $website Affiliate&#39;s company website (required)
     * @param string $phone Affiliate&#39;s company phone number (required)
     * @param string $contactName Affiliate&#39;s company contact name to receive system notifications from RevenueWire (required)
     * @param string $technicalEmail Affiliate&#39;s company email address to receive system notifications from RevenueWire (required)
     * @param string $address Affiliate&#39;s company address (required)
     * @param string $city Affiliate&#39;s company city (required)
     * @param int $paymentThreshold Minimum amount that Affiliate wants to receive per payment (required)
     * @param string $stateProvince Affiliate&#39;s company country region (if applicable for that country) (optional)
     * @param string $zipPostalCode Affiliate&#39;s company postal code (optional)
     * @param string $gstNumber Affiliate&#39;s Canadian gst tax number (if applicable) (optional)
     * @param string $taxRegion Affiliate&#39;s Canadian province that tax number is registered in (if applicable) (optional)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return \Swagger\Client\Model\InlineResponse2001
     */
    public function saveAffiliateById($id, $companyName, $website, $phone, $contactName, $technicalEmail, $address, $city, $paymentThreshold, $stateProvince = null, $zipPostalCode = null, $gstNumber = null, $taxRegion = null)
    {
        list($response) = $this->saveAffiliateByIdWithHttpInfo($id, $companyName, $website, $phone, $contactName, $technicalEmail, $address, $city, $paymentThreshold, $stateProvince, $zipPostalCode, $gstNumber, $taxRegion);
        return $response;
    }

    /**
     * Operation saveAffiliateByIdWithHttpInfo
     *
     * 
     *
     * @param int $id Affiliate ID (required)
     * @param string $companyName Name of affiliate&#39;s company (required)
     * @param string $website Affiliate&#39;s company website (required)
     * @param string $phone Affiliate&#39;s company phone number (required)
     * @param string $contactName Affiliate&#39;s company contact name to receive system notifications from RevenueWire (required)
     * @param string $technicalEmail Affiliate&#39;s company email address to receive system notifications from RevenueWire (required)
     * @param string $address Affiliate&#39;s company address (required)
     * @param string $city Affiliate&#39;s company city (required)
     * @param int $paymentThreshold Minimum amount that Affiliate wants to receive per payment (required)
     * @param string $stateProvince Affiliate&#39;s company country region (if applicable for that country) (optional)
     * @param string $zipPostalCode Affiliate&#39;s company postal code (optional)
     * @param string $gstNumber Affiliate&#39;s Canadian gst tax number (if applicable) (optional)
     * @param string $taxRegion Affiliate&#39;s Canadian province that tax number is registered in (if applicable) (optional)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of \Swagger\Client\Model\InlineResponse2001, HTTP status code, HTTP response headers (array of strings)
     */
    public function saveAffiliateByIdWithHttpInfo($id, $companyName, $website, $phone, $contactName, $technicalEmail, $address, $city, $paymentThreshold, $stateProvince = null, $zipPostalCode = null, $gstNumber = null, $taxRegion = null)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling saveAffiliateById');
        }
        // verify the required parameter 'companyName' is set
        if ($companyName === null) {
            throw new \InvalidArgumentException('Missing the required parameter $companyName when calling saveAffiliateById');
        }
        // verify the required parameter 'website' is set
        if ($website === null) {
            throw new \InvalidArgumentException('Missing the required parameter $website when calling saveAffiliateById');
        }
        // verify the required parameter 'phone' is set
        if ($phone === null) {
            throw new \InvalidArgumentException('Missing the required parameter $phone when calling saveAffiliateById');
        }
        // verify the required parameter 'contactName' is set
        if ($contactName === null) {
            throw new \InvalidArgumentException('Missing the required parameter $contactName when calling saveAffiliateById');
        }
        // verify the required parameter 'technicalEmail' is set
        if ($technicalEmail === null) {
            throw new \InvalidArgumentException('Missing the required parameter $technicalEmail when calling saveAffiliateById');
        }
        // verify the required parameter 'address' is set
        if ($address === null) {
            throw new \InvalidArgumentException('Missing the required parameter $address when calling saveAffiliateById');
        }
        // verify the required parameter 'city' is set
        if ($city === null) {
            throw new \InvalidArgumentException('Missing the required parameter $city when calling saveAffiliateById');
        }
        // verify the required parameter 'paymentThreshold' is set
        if ($paymentThreshold === null) {
            throw new \InvalidArgumentException('Missing the required parameter $paymentThreshold when calling saveAffiliateById');
        }
        // parse inputs
        $resourcePath = "/affiliates/{id}";
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
        if ($companyName !== null) {
            $queryParams['companyName'] = $this->apiClient->getSerializer()->toQueryValue($companyName);
        }
        // query params
        if ($website !== null) {
            $queryParams['website'] = $this->apiClient->getSerializer()->toQueryValue($website);
        }
        // query params
        if ($phone !== null) {
            $queryParams['phone'] = $this->apiClient->getSerializer()->toQueryValue($phone);
        }
        // query params
        if ($contactName !== null) {
            $queryParams['contactName'] = $this->apiClient->getSerializer()->toQueryValue($contactName);
        }
        // query params
        if ($technicalEmail !== null) {
            $queryParams['technicalEmail'] = $this->apiClient->getSerializer()->toQueryValue($technicalEmail);
        }
        // query params
        if ($address !== null) {
            $queryParams['address'] = $this->apiClient->getSerializer()->toQueryValue($address);
        }
        // query params
        if ($city !== null) {
            $queryParams['city'] = $this->apiClient->getSerializer()->toQueryValue($city);
        }
        // query params
        if ($stateProvince !== null) {
            $queryParams['stateProvince'] = $this->apiClient->getSerializer()->toQueryValue($stateProvince);
        }
        // query params
        if ($zipPostalCode !== null) {
            $queryParams['zipPostalCode'] = $this->apiClient->getSerializer()->toQueryValue($zipPostalCode);
        }
        // query params
        if ($gstNumber !== null) {
            $queryParams['gstNumber'] = $this->apiClient->getSerializer()->toQueryValue($gstNumber);
        }
        // query params
        if ($taxRegion !== null) {
            $queryParams['taxRegion'] = $this->apiClient->getSerializer()->toQueryValue($taxRegion);
        }
        // query params
        if ($paymentThreshold !== null) {
            $queryParams['paymentThreshold'] = $this->apiClient->getSerializer()->toQueryValue($paymentThreshold);
        }
        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                "{" . "id" . "}",
                $this->apiClient->getSerializer()->toPathValue($id),
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
                'PUT',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\Model\InlineResponse2001',
                '/affiliates/{id}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\InlineResponse2001', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\InlineResponse2001', $e->getResponseHeaders());
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