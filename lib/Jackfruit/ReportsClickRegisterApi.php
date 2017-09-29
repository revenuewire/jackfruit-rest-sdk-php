<?php
/**
 * ReportsClickRegisterApi
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
 * ReportsClickRegisterApi Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ReportsClickRegisterApi
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
     * @return ReportsClickRegisterApi
     */
    public function setApiClient(\Swagger\Client\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation reportsClickRegister
     *
     * 
     *
     * @param string[] $offers A JSON encoded array of offer IDs (eg [\&quot;1\&quot;,\&quot;2\&quot;]) (required)
     * @param string[] $aliases A JSON encoded array of alias IDs (eg [\&quot;1\&quot;,\&quot;2\&quot;]) (required)
     * @param string[] $merchants A JSON encoded array of merchant IDs (eg [\&quot;1\&quot;,\&quot;22\&quot;]) (required)
     * @param string[] $geos A JSON encoded array of country (US and CA may also include region) IDs (eg [\&quot;CA\&quot;,\&quot;US-WA\&quot;]) (required)
     * @param string[] $zones A JSON encoded array of continent names (eg [\&quot;North America\&quot;, \&quot;Asia\&quot;]) (required)
     * @param string[] $merchants2 A JSON encoded array of language codes (eg [\&quot;en\&quot;]) (required)
     * @param string[] $os A JSON encoded array of os names (eg [\&quot;Linux\&quot;, \&quot;Mac OSX\&quot;]) (required)
     * @param string $subIds A JSON encoded array of sub IDs (eg [\&quot;this is my sub ID\&quot;, \&quot;this is an alternate sub ID\&quot;]) (required)
     * @param string $searchText The IP or order reference to search for (required)
     * @param string $range The english name for the period being searched, encoded in camel case (eg. lastMonth or customRange) (required)
     * @param string $start Start date (YYYY-MM-DD) (required)
     * @param string $end End date (YYYY-MM-DD) (required)
     * @param \Swagger\Client\Model\Sort $sort A JSON encoded object with the column to sort on and the sort direction (eg. {\&quot;col\&quot;:\&quot;sales\&quot;,\&quot;dir\&quot;:\&quot;DESC\&quot;}) (required)
     * @param string $searchText2 The IP or order reference to search for (required)
     * @param \Swagger\Client\Model\Pagination $pagination A JSON encoded array with the columns to group data on (eg. [\&quot;period\&quot;,\&quot;alias\&quot;]) (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return \Swagger\Client\Model\ClickRegisterDatas
     */
    public function reportsClickRegister($offers, $aliases, $merchants, $geos, $zones, $merchants2, $os, $subIds, $searchText, $range, $start, $end, $sort, $searchText2, $pagination)
    {
        list($response) = $this->reportsClickRegisterWithHttpInfo($offers, $aliases, $merchants, $geos, $zones, $merchants2, $os, $subIds, $searchText, $range, $start, $end, $sort, $searchText2, $pagination);
        return $response;
    }

    /**
     * Operation reportsClickRegisterWithHttpInfo
     *
     * 
     *
     * @param string[] $offers A JSON encoded array of offer IDs (eg [\&quot;1\&quot;,\&quot;2\&quot;]) (required)
     * @param string[] $aliases A JSON encoded array of alias IDs (eg [\&quot;1\&quot;,\&quot;2\&quot;]) (required)
     * @param string[] $merchants A JSON encoded array of merchant IDs (eg [\&quot;1\&quot;,\&quot;22\&quot;]) (required)
     * @param string[] $geos A JSON encoded array of country (US and CA may also include region) IDs (eg [\&quot;CA\&quot;,\&quot;US-WA\&quot;]) (required)
     * @param string[] $zones A JSON encoded array of continent names (eg [\&quot;North America\&quot;, \&quot;Asia\&quot;]) (required)
     * @param string[] $merchants2 A JSON encoded array of language codes (eg [\&quot;en\&quot;]) (required)
     * @param string[] $os A JSON encoded array of os names (eg [\&quot;Linux\&quot;, \&quot;Mac OSX\&quot;]) (required)
     * @param string $subIds A JSON encoded array of sub IDs (eg [\&quot;this is my sub ID\&quot;, \&quot;this is an alternate sub ID\&quot;]) (required)
     * @param string $searchText The IP or order reference to search for (required)
     * @param string $range The english name for the period being searched, encoded in camel case (eg. lastMonth or customRange) (required)
     * @param string $start Start date (YYYY-MM-DD) (required)
     * @param string $end End date (YYYY-MM-DD) (required)
     * @param \Swagger\Client\Model\Sort $sort A JSON encoded object with the column to sort on and the sort direction (eg. {\&quot;col\&quot;:\&quot;sales\&quot;,\&quot;dir\&quot;:\&quot;DESC\&quot;}) (required)
     * @param string $searchText2 The IP or order reference to search for (required)
     * @param \Swagger\Client\Model\Pagination $pagination A JSON encoded array with the columns to group data on (eg. [\&quot;period\&quot;,\&quot;alias\&quot;]) (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of \Swagger\Client\Model\ClickRegisterDatas, HTTP status code, HTTP response headers (array of strings)
     */
    public function reportsClickRegisterWithHttpInfo($offers, $aliases, $merchants, $geos, $zones, $merchants2, $os, $subIds, $searchText, $range, $start, $end, $sort, $searchText2, $pagination)
    {
        // verify the required parameter 'offers' is set
        if ($offers === null) {
            throw new \InvalidArgumentException('Missing the required parameter $offers when calling reportsClickRegister');
        }
        // verify the required parameter 'aliases' is set
        if ($aliases === null) {
            throw new \InvalidArgumentException('Missing the required parameter $aliases when calling reportsClickRegister');
        }
        // verify the required parameter 'merchants' is set
        if ($merchants === null) {
            throw new \InvalidArgumentException('Missing the required parameter $merchants when calling reportsClickRegister');
        }
        // verify the required parameter 'geos' is set
        if ($geos === null) {
            throw new \InvalidArgumentException('Missing the required parameter $geos when calling reportsClickRegister');
        }
        // verify the required parameter 'zones' is set
        if ($zones === null) {
            throw new \InvalidArgumentException('Missing the required parameter $zones when calling reportsClickRegister');
        }
        // verify the required parameter 'merchants2' is set
        if ($merchants2 === null) {
            throw new \InvalidArgumentException('Missing the required parameter $merchants2 when calling reportsClickRegister');
        }
        // verify the required parameter 'os' is set
        if ($os === null) {
            throw new \InvalidArgumentException('Missing the required parameter $os when calling reportsClickRegister');
        }
        // verify the required parameter 'subIds' is set
        if ($subIds === null) {
            throw new \InvalidArgumentException('Missing the required parameter $subIds when calling reportsClickRegister');
        }
        // verify the required parameter 'searchText' is set
        if ($searchText === null) {
            throw new \InvalidArgumentException('Missing the required parameter $searchText when calling reportsClickRegister');
        }
        // verify the required parameter 'range' is set
        if ($range === null) {
            throw new \InvalidArgumentException('Missing the required parameter $range when calling reportsClickRegister');
        }
        // verify the required parameter 'start' is set
        if ($start === null) {
            throw new \InvalidArgumentException('Missing the required parameter $start when calling reportsClickRegister');
        }
        // verify the required parameter 'end' is set
        if ($end === null) {
            throw new \InvalidArgumentException('Missing the required parameter $end when calling reportsClickRegister');
        }
        // verify the required parameter 'sort' is set
        if ($sort === null) {
            throw new \InvalidArgumentException('Missing the required parameter $sort when calling reportsClickRegister');
        }
        // verify the required parameter 'searchText2' is set
        if ($searchText2 === null) {
            throw new \InvalidArgumentException('Missing the required parameter $searchText2 when calling reportsClickRegister');
        }
        // verify the required parameter 'pagination' is set
        if ($pagination === null) {
            throw new \InvalidArgumentException('Missing the required parameter $pagination when calling reportsClickRegister');
        }
        // parse inputs
        $resourcePath = "/reports/clickregister";
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
        if (is_array($offers)) {
            $offers = $this->apiClient->getSerializer()->serializeCollection($offers, 'csv', true);
        }
        if ($offers !== null) {
            $queryParams['offers'] = $this->apiClient->getSerializer()->toQueryValue($offers);
        }
        // query params
        if (is_array($aliases)) {
            $aliases = $this->apiClient->getSerializer()->serializeCollection($aliases, 'csv', true);
        }
        if ($aliases !== null) {
            $queryParams['aliases'] = $this->apiClient->getSerializer()->toQueryValue($aliases);
        }
        // query params
        if (is_array($merchants)) {
            $merchants = $this->apiClient->getSerializer()->serializeCollection($merchants, 'csv', true);
        }
        if ($merchants !== null) {
            $queryParams['merchants'] = $this->apiClient->getSerializer()->toQueryValue($merchants);
        }
        // query params
        if (is_array($geos)) {
            $geos = $this->apiClient->getSerializer()->serializeCollection($geos, 'csv', true);
        }
        if ($geos !== null) {
            $queryParams['geos'] = $this->apiClient->getSerializer()->toQueryValue($geos);
        }
        // query params
        if (is_array($zones)) {
            $zones = $this->apiClient->getSerializer()->serializeCollection($zones, 'csv', true);
        }
        if ($zones !== null) {
            $queryParams['zones'] = $this->apiClient->getSerializer()->toQueryValue($zones);
        }
        // query params
        if (is_array($merchants2)) {
            $merchants2 = $this->apiClient->getSerializer()->serializeCollection($merchants2, 'csv', true);
        }
        if ($merchants2 !== null) {
            $queryParams['merchants'] = $this->apiClient->getSerializer()->toQueryValue($merchants2);
        }
        // query params
        if (is_array($os)) {
            $os = $this->apiClient->getSerializer()->serializeCollection($os, 'csv', true);
        }
        if ($os !== null) {
            $queryParams['os'] = $this->apiClient->getSerializer()->toQueryValue($os);
        }
        // query params
        if ($subIds !== null) {
            $queryParams['subIds'] = $this->apiClient->getSerializer()->toQueryValue($subIds);
        }
        // query params
        if ($searchText !== null) {
            $queryParams['searchText'] = $this->apiClient->getSerializer()->toQueryValue($searchText);
        }
        // query params
        if ($range !== null) {
            $queryParams['range'] = $this->apiClient->getSerializer()->toQueryValue($range);
        }
        // query params
        if ($start !== null) {
            $queryParams['start'] = $this->apiClient->getSerializer()->toQueryValue($start);
        }
        // query params
        if ($end !== null) {
            $queryParams['end'] = $this->apiClient->getSerializer()->toQueryValue($end);
        }
        // query params
        if ($searchText2 !== null) {
            $queryParams['searchText'] = $this->apiClient->getSerializer()->toQueryValue($searchText2);
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // body params
        $_tempBody = null;
        if (isset($sort)) {
            $_tempBody = $sort;
        }
// body params
        $_tempBody = null;
        if (isset($pagination)) {
            $_tempBody = $pagination;
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
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\Model\ClickRegisterDatas',
                '/reports/clickregister'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\ClickRegisterDatas', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\ClickRegisterDatas', $e->getResponseHeaders());
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
     * Operation reportsClickRegisterGetCount
     *
     * 
     *
     * @param string[] $offers A JSON encoded array of offer IDs (eg [\&quot;1\&quot;,\&quot;2\&quot;]) (required)
     * @param string[] $aliases A JSON encoded array of alias IDs (eg [\&quot;1\&quot;,\&quot;2\&quot;]) (required)
     * @param string[] $merchants A JSON encoded array of merchant IDs (eg [\&quot;1\&quot;,\&quot;22\&quot;]) (required)
     * @param string[] $geos A JSON encoded array of country (US and CA may also include region) IDs (eg [\&quot;CA\&quot;,\&quot;US-WA\&quot;]) (required)
     * @param string[] $zones A JSON encoded array of continent names (eg [\&quot;North America\&quot;, \&quot;Asia\&quot;]) (required)
     * @param string[] $merchants2 A JSON encoded array of language codes (eg [\&quot;en\&quot;]) (required)
     * @param string[] $os A JSON encoded array of os names (eg [\&quot;Linux\&quot;, \&quot;Mac OSX\&quot;]) (required)
     * @param string $subIds A JSON encoded array of sub IDs (eg [\&quot;this is my sub ID\&quot;, \&quot;this is an alternate sub ID\&quot;]) (required)
     * @param string $searchText The IP or order reference to search for (required)
     * @param string $range The english name for the period being searched, encoded in camel case (eg. lastMonth or customRange) (required)
     * @param string $start Start date (YYYY-MM-DD) (required)
     * @param string $end End date (YYYY-MM-DD) (required)
     * @param \Swagger\Client\Model\Sort $sort A JSON encoded object with the column to sort on and the sort direction (eg. {\&quot;col\&quot;:\&quot;sales\&quot;,\&quot;dir\&quot;:\&quot;DESC\&quot;}) (required)
     * @param string $searchText2 The IP or order reference to search for (required)
     * @param \Swagger\Client\Model\Pagination $pagination A JSON encoded array with the columns to group data on (eg. [\&quot;period\&quot;,\&quot;alias\&quot;]) (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return \Swagger\Client\Model\CountData
     */
    public function reportsClickRegisterGetCount($offers, $aliases, $merchants, $geos, $zones, $merchants2, $os, $subIds, $searchText, $range, $start, $end, $sort, $searchText2, $pagination)
    {
        list($response) = $this->reportsClickRegisterGetCountWithHttpInfo($offers, $aliases, $merchants, $geos, $zones, $merchants2, $os, $subIds, $searchText, $range, $start, $end, $sort, $searchText2, $pagination);
        return $response;
    }

    /**
     * Operation reportsClickRegisterGetCountWithHttpInfo
     *
     * 
     *
     * @param string[] $offers A JSON encoded array of offer IDs (eg [\&quot;1\&quot;,\&quot;2\&quot;]) (required)
     * @param string[] $aliases A JSON encoded array of alias IDs (eg [\&quot;1\&quot;,\&quot;2\&quot;]) (required)
     * @param string[] $merchants A JSON encoded array of merchant IDs (eg [\&quot;1\&quot;,\&quot;22\&quot;]) (required)
     * @param string[] $geos A JSON encoded array of country (US and CA may also include region) IDs (eg [\&quot;CA\&quot;,\&quot;US-WA\&quot;]) (required)
     * @param string[] $zones A JSON encoded array of continent names (eg [\&quot;North America\&quot;, \&quot;Asia\&quot;]) (required)
     * @param string[] $merchants2 A JSON encoded array of language codes (eg [\&quot;en\&quot;]) (required)
     * @param string[] $os A JSON encoded array of os names (eg [\&quot;Linux\&quot;, \&quot;Mac OSX\&quot;]) (required)
     * @param string $subIds A JSON encoded array of sub IDs (eg [\&quot;this is my sub ID\&quot;, \&quot;this is an alternate sub ID\&quot;]) (required)
     * @param string $searchText The IP or order reference to search for (required)
     * @param string $range The english name for the period being searched, encoded in camel case (eg. lastMonth or customRange) (required)
     * @param string $start Start date (YYYY-MM-DD) (required)
     * @param string $end End date (YYYY-MM-DD) (required)
     * @param \Swagger\Client\Model\Sort $sort A JSON encoded object with the column to sort on and the sort direction (eg. {\&quot;col\&quot;:\&quot;sales\&quot;,\&quot;dir\&quot;:\&quot;DESC\&quot;}) (required)
     * @param string $searchText2 The IP or order reference to search for (required)
     * @param \Swagger\Client\Model\Pagination $pagination A JSON encoded array with the columns to group data on (eg. [\&quot;period\&quot;,\&quot;alias\&quot;]) (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of \Swagger\Client\Model\CountData, HTTP status code, HTTP response headers (array of strings)
     */
    public function reportsClickRegisterGetCountWithHttpInfo($offers, $aliases, $merchants, $geos, $zones, $merchants2, $os, $subIds, $searchText, $range, $start, $end, $sort, $searchText2, $pagination)
    {
        // verify the required parameter 'offers' is set
        if ($offers === null) {
            throw new \InvalidArgumentException('Missing the required parameter $offers when calling reportsClickRegisterGetCount');
        }
        // verify the required parameter 'aliases' is set
        if ($aliases === null) {
            throw new \InvalidArgumentException('Missing the required parameter $aliases when calling reportsClickRegisterGetCount');
        }
        // verify the required parameter 'merchants' is set
        if ($merchants === null) {
            throw new \InvalidArgumentException('Missing the required parameter $merchants when calling reportsClickRegisterGetCount');
        }
        // verify the required parameter 'geos' is set
        if ($geos === null) {
            throw new \InvalidArgumentException('Missing the required parameter $geos when calling reportsClickRegisterGetCount');
        }
        // verify the required parameter 'zones' is set
        if ($zones === null) {
            throw new \InvalidArgumentException('Missing the required parameter $zones when calling reportsClickRegisterGetCount');
        }
        // verify the required parameter 'merchants2' is set
        if ($merchants2 === null) {
            throw new \InvalidArgumentException('Missing the required parameter $merchants2 when calling reportsClickRegisterGetCount');
        }
        // verify the required parameter 'os' is set
        if ($os === null) {
            throw new \InvalidArgumentException('Missing the required parameter $os when calling reportsClickRegisterGetCount');
        }
        // verify the required parameter 'subIds' is set
        if ($subIds === null) {
            throw new \InvalidArgumentException('Missing the required parameter $subIds when calling reportsClickRegisterGetCount');
        }
        // verify the required parameter 'searchText' is set
        if ($searchText === null) {
            throw new \InvalidArgumentException('Missing the required parameter $searchText when calling reportsClickRegisterGetCount');
        }
        // verify the required parameter 'range' is set
        if ($range === null) {
            throw new \InvalidArgumentException('Missing the required parameter $range when calling reportsClickRegisterGetCount');
        }
        // verify the required parameter 'start' is set
        if ($start === null) {
            throw new \InvalidArgumentException('Missing the required parameter $start when calling reportsClickRegisterGetCount');
        }
        // verify the required parameter 'end' is set
        if ($end === null) {
            throw new \InvalidArgumentException('Missing the required parameter $end when calling reportsClickRegisterGetCount');
        }
        // verify the required parameter 'sort' is set
        if ($sort === null) {
            throw new \InvalidArgumentException('Missing the required parameter $sort when calling reportsClickRegisterGetCount');
        }
        // verify the required parameter 'searchText2' is set
        if ($searchText2 === null) {
            throw new \InvalidArgumentException('Missing the required parameter $searchText2 when calling reportsClickRegisterGetCount');
        }
        // verify the required parameter 'pagination' is set
        if ($pagination === null) {
            throw new \InvalidArgumentException('Missing the required parameter $pagination when calling reportsClickRegisterGetCount');
        }
        // parse inputs
        $resourcePath = "/reports/clickregister/count";
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
        if (is_array($offers)) {
            $offers = $this->apiClient->getSerializer()->serializeCollection($offers, 'csv', true);
        }
        if ($offers !== null) {
            $queryParams['offers'] = $this->apiClient->getSerializer()->toQueryValue($offers);
        }
        // query params
        if (is_array($aliases)) {
            $aliases = $this->apiClient->getSerializer()->serializeCollection($aliases, 'csv', true);
        }
        if ($aliases !== null) {
            $queryParams['aliases'] = $this->apiClient->getSerializer()->toQueryValue($aliases);
        }
        // query params
        if (is_array($merchants)) {
            $merchants = $this->apiClient->getSerializer()->serializeCollection($merchants, 'csv', true);
        }
        if ($merchants !== null) {
            $queryParams['merchants'] = $this->apiClient->getSerializer()->toQueryValue($merchants);
        }
        // query params
        if (is_array($geos)) {
            $geos = $this->apiClient->getSerializer()->serializeCollection($geos, 'csv', true);
        }
        if ($geos !== null) {
            $queryParams['geos'] = $this->apiClient->getSerializer()->toQueryValue($geos);
        }
        // query params
        if (is_array($zones)) {
            $zones = $this->apiClient->getSerializer()->serializeCollection($zones, 'csv', true);
        }
        if ($zones !== null) {
            $queryParams['zones'] = $this->apiClient->getSerializer()->toQueryValue($zones);
        }
        // query params
        if (is_array($merchants2)) {
            $merchants2 = $this->apiClient->getSerializer()->serializeCollection($merchants2, 'csv', true);
        }
        if ($merchants2 !== null) {
            $queryParams['merchants'] = $this->apiClient->getSerializer()->toQueryValue($merchants2);
        }
        // query params
        if (is_array($os)) {
            $os = $this->apiClient->getSerializer()->serializeCollection($os, 'csv', true);
        }
        if ($os !== null) {
            $queryParams['os'] = $this->apiClient->getSerializer()->toQueryValue($os);
        }
        // query params
        if ($subIds !== null) {
            $queryParams['subIds'] = $this->apiClient->getSerializer()->toQueryValue($subIds);
        }
        // query params
        if ($searchText !== null) {
            $queryParams['searchText'] = $this->apiClient->getSerializer()->toQueryValue($searchText);
        }
        // query params
        if ($range !== null) {
            $queryParams['range'] = $this->apiClient->getSerializer()->toQueryValue($range);
        }
        // query params
        if ($start !== null) {
            $queryParams['start'] = $this->apiClient->getSerializer()->toQueryValue($start);
        }
        // query params
        if ($end !== null) {
            $queryParams['end'] = $this->apiClient->getSerializer()->toQueryValue($end);
        }
        // query params
        if ($searchText2 !== null) {
            $queryParams['searchText'] = $this->apiClient->getSerializer()->toQueryValue($searchText2);
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // body params
        $_tempBody = null;
        if (isset($sort)) {
            $_tempBody = $sort;
        }
// body params
        $_tempBody = null;
        if (isset($pagination)) {
            $_tempBody = $pagination;
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
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\Model\CountData',
                '/reports/clickregister/count'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\CountData', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\CountData', $e->getResponseHeaders());
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
