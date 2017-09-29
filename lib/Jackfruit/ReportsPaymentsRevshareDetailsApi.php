<?php
/**
 * ReportsPaymentsRevshareDetailsApi
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
 * ReportsPaymentsRevshareDetailsApi Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ReportsPaymentsRevshareDetailsApi
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
     * @return ReportsPaymentsRevshareDetailsApi
     */
    public function setApiClient(\Swagger\Client\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation reportPaymentsCpa
     *
     * 
     *
     * @param string[] $transactionTypes Revshare transaction types (required)
     * @param \Swagger\Client\Model\Pagination $pagination A JSON encoded array with the columns to group data on (eg. [\&quot;period\&quot;,\&quot;alias\&quot;]) (required)
     * @param \Swagger\Client\Model\Sort4 $sort A JSON encoded object with the column to sort on and the sort direction (eg. {\&quot;col\&quot;:\&quot;id\&quot;,\&quot;dir\&quot;:\&quot;DESC\&quot;}) (required)
     * @param string $payments A payment fid (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return \Swagger\Client\Model\PaymentsDetailsRevshareDatas
     */
    public function reportPaymentsCpa($transactionTypes, $pagination, $sort, $payments)
    {
        list($response) = $this->reportPaymentsCpaWithHttpInfo($transactionTypes, $pagination, $sort, $payments);
        return $response;
    }

    /**
     * Operation reportPaymentsCpaWithHttpInfo
     *
     * 
     *
     * @param string[] $transactionTypes Revshare transaction types (required)
     * @param \Swagger\Client\Model\Pagination $pagination A JSON encoded array with the columns to group data on (eg. [\&quot;period\&quot;,\&quot;alias\&quot;]) (required)
     * @param \Swagger\Client\Model\Sort4 $sort A JSON encoded object with the column to sort on and the sort direction (eg. {\&quot;col\&quot;:\&quot;id\&quot;,\&quot;dir\&quot;:\&quot;DESC\&quot;}) (required)
     * @param string $payments A payment fid (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of \Swagger\Client\Model\PaymentsDetailsRevshareDatas, HTTP status code, HTTP response headers (array of strings)
     */
    public function reportPaymentsCpaWithHttpInfo($transactionTypes, $pagination, $sort, $payments)
    {
        // verify the required parameter 'transactionTypes' is set
        if ($transactionTypes === null) {
            throw new \InvalidArgumentException('Missing the required parameter $transactionTypes when calling reportPaymentsCpa');
        }
        // verify the required parameter 'pagination' is set
        if ($pagination === null) {
            throw new \InvalidArgumentException('Missing the required parameter $pagination when calling reportPaymentsCpa');
        }
        // verify the required parameter 'sort' is set
        if ($sort === null) {
            throw new \InvalidArgumentException('Missing the required parameter $sort when calling reportPaymentsCpa');
        }
        // verify the required parameter 'payments' is set
        if ($payments === null) {
            throw new \InvalidArgumentException('Missing the required parameter $payments when calling reportPaymentsCpa');
        }
        // parse inputs
        $resourcePath = "/reports/payments/details/revshare";
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
        if (is_array($transactionTypes)) {
            $transactionTypes = $this->apiClient->getSerializer()->serializeCollection($transactionTypes, 'csv', true);
        }
        if ($transactionTypes !== null) {
            $queryParams['transactionTypes'] = $this->apiClient->getSerializer()->toQueryValue($transactionTypes);
        }
        // query params
        if ($payments !== null) {
            $queryParams['payments'] = $this->apiClient->getSerializer()->toQueryValue($payments);
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // body params
        $_tempBody = null;
        if (isset($pagination)) {
            $_tempBody = $pagination;
        }
// body params
        $_tempBody = null;
        if (isset($sort)) {
            $_tempBody = $sort;
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
                '\Swagger\Client\Model\PaymentsDetailsRevshareDatas',
                '/reports/payments/details/revshare'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\PaymentsDetailsRevshareDatas', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\PaymentsDetailsRevshareDatas', $e->getResponseHeaders());
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
     * Operation reportPaymentsCpa_0
     *
     * 
     *
     * @param string[] $transactionTypes Revshare transaction types (required)
     * @param \Swagger\Client\Model\Pagination $pagination A JSON encoded array with the columns to group data on (eg. [\&quot;period\&quot;,\&quot;alias\&quot;]) (required)
     * @param \Swagger\Client\Model\Sort4 $sort A JSON encoded object with the column to sort on and the sort direction (eg. {\&quot;col\&quot;:\&quot;id\&quot;,\&quot;dir\&quot;:\&quot;DESC\&quot;}) (required)
     * @param string $payments A payment fid (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return \Swagger\Client\Model\PaymentsTotalsData
     */
    public function reportPaymentsCpa_0($transactionTypes, $pagination, $sort, $payments)
    {
        list($response) = $this->reportPaymentsCpa_0WithHttpInfo($transactionTypes, $pagination, $sort, $payments);
        return $response;
    }

    /**
     * Operation reportPaymentsCpa_0WithHttpInfo
     *
     * 
     *
     * @param string[] $transactionTypes Revshare transaction types (required)
     * @param \Swagger\Client\Model\Pagination $pagination A JSON encoded array with the columns to group data on (eg. [\&quot;period\&quot;,\&quot;alias\&quot;]) (required)
     * @param \Swagger\Client\Model\Sort4 $sort A JSON encoded object with the column to sort on and the sort direction (eg. {\&quot;col\&quot;:\&quot;id\&quot;,\&quot;dir\&quot;:\&quot;DESC\&quot;}) (required)
     * @param string $payments A payment fid (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of \Swagger\Client\Model\PaymentsTotalsData, HTTP status code, HTTP response headers (array of strings)
     */
    public function reportPaymentsCpa_0WithHttpInfo($transactionTypes, $pagination, $sort, $payments)
    {
        // verify the required parameter 'transactionTypes' is set
        if ($transactionTypes === null) {
            throw new \InvalidArgumentException('Missing the required parameter $transactionTypes when calling reportPaymentsCpa_0');
        }
        // verify the required parameter 'pagination' is set
        if ($pagination === null) {
            throw new \InvalidArgumentException('Missing the required parameter $pagination when calling reportPaymentsCpa_0');
        }
        // verify the required parameter 'sort' is set
        if ($sort === null) {
            throw new \InvalidArgumentException('Missing the required parameter $sort when calling reportPaymentsCpa_0');
        }
        // verify the required parameter 'payments' is set
        if ($payments === null) {
            throw new \InvalidArgumentException('Missing the required parameter $payments when calling reportPaymentsCpa_0');
        }
        // parse inputs
        $resourcePath = "/reports/payments/details/revshare/totals";
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
        if (is_array($transactionTypes)) {
            $transactionTypes = $this->apiClient->getSerializer()->serializeCollection($transactionTypes, 'csv', true);
        }
        if ($transactionTypes !== null) {
            $queryParams['transactionTypes'] = $this->apiClient->getSerializer()->toQueryValue($transactionTypes);
        }
        // query params
        if ($payments !== null) {
            $queryParams['payments'] = $this->apiClient->getSerializer()->toQueryValue($payments);
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // body params
        $_tempBody = null;
        if (isset($pagination)) {
            $_tempBody = $pagination;
        }
// body params
        $_tempBody = null;
        if (isset($sort)) {
            $_tempBody = $sort;
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
                '\Swagger\Client\Model\PaymentsTotalsData',
                '/reports/payments/details/revshare/totals'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\PaymentsTotalsData', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\PaymentsTotalsData', $e->getResponseHeaders());
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
     * Operation reportsPaymentsCount
     *
     * 
     *
     * @param string[] $transactionTypes Revshare transaction types (required)
     * @param \Swagger\Client\Model\Pagination $pagination A JSON encoded array with the columns to group data on (eg. [\&quot;period\&quot;,\&quot;alias\&quot;]) (required)
     * @param \Swagger\Client\Model\Sort4 $sort A JSON encoded object with the column to sort on and the sort direction (eg. {\&quot;col\&quot;:\&quot;id\&quot;,\&quot;dir\&quot;:\&quot;DESC\&quot;}) (required)
     * @param string $payments A payment fid (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return \Swagger\Client\Model\CountData
     */
    public function reportsPaymentsCount($transactionTypes, $pagination, $sort, $payments)
    {
        list($response) = $this->reportsPaymentsCountWithHttpInfo($transactionTypes, $pagination, $sort, $payments);
        return $response;
    }

    /**
     * Operation reportsPaymentsCountWithHttpInfo
     *
     * 
     *
     * @param string[] $transactionTypes Revshare transaction types (required)
     * @param \Swagger\Client\Model\Pagination $pagination A JSON encoded array with the columns to group data on (eg. [\&quot;period\&quot;,\&quot;alias\&quot;]) (required)
     * @param \Swagger\Client\Model\Sort4 $sort A JSON encoded object with the column to sort on and the sort direction (eg. {\&quot;col\&quot;:\&quot;id\&quot;,\&quot;dir\&quot;:\&quot;DESC\&quot;}) (required)
     * @param string $payments A payment fid (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of \Swagger\Client\Model\CountData, HTTP status code, HTTP response headers (array of strings)
     */
    public function reportsPaymentsCountWithHttpInfo($transactionTypes, $pagination, $sort, $payments)
    {
        // verify the required parameter 'transactionTypes' is set
        if ($transactionTypes === null) {
            throw new \InvalidArgumentException('Missing the required parameter $transactionTypes when calling reportsPaymentsCount');
        }
        // verify the required parameter 'pagination' is set
        if ($pagination === null) {
            throw new \InvalidArgumentException('Missing the required parameter $pagination when calling reportsPaymentsCount');
        }
        // verify the required parameter 'sort' is set
        if ($sort === null) {
            throw new \InvalidArgumentException('Missing the required parameter $sort when calling reportsPaymentsCount');
        }
        // verify the required parameter 'payments' is set
        if ($payments === null) {
            throw new \InvalidArgumentException('Missing the required parameter $payments when calling reportsPaymentsCount');
        }
        // parse inputs
        $resourcePath = "/reports/payments/details/revshare/count";
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
        if (is_array($transactionTypes)) {
            $transactionTypes = $this->apiClient->getSerializer()->serializeCollection($transactionTypes, 'csv', true);
        }
        if ($transactionTypes !== null) {
            $queryParams['transactionTypes'] = $this->apiClient->getSerializer()->toQueryValue($transactionTypes);
        }
        // query params
        if ($payments !== null) {
            $queryParams['payments'] = $this->apiClient->getSerializer()->toQueryValue($payments);
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // body params
        $_tempBody = null;
        if (isset($pagination)) {
            $_tempBody = $pagination;
        }
// body params
        $_tempBody = null;
        if (isset($sort)) {
            $_tempBody = $sort;
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
                '/reports/payments/details/revshare/count'
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

    /**
     * Operation reportsPaymentsExport
     *
     * 
     *
     * @param string[] $transactionTypes Revshare transaction types (required)
     * @param \Swagger\Client\Model\Pagination $pagination A JSON encoded array with the columns to group data on (eg. [\&quot;period\&quot;,\&quot;alias\&quot;]) (required)
     * @param \Swagger\Client\Model\Sort4 $sort A JSON encoded object with the column to sort on and the sort direction (eg. {\&quot;col\&quot;:\&quot;id\&quot;,\&quot;dir\&quot;:\&quot;DESC\&quot;}) (required)
     * @param string $payments A payment fid (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return \Swagger\Client\Model\ExportData
     */
    public function reportsPaymentsExport($transactionTypes, $pagination, $sort, $payments)
    {
        list($response) = $this->reportsPaymentsExportWithHttpInfo($transactionTypes, $pagination, $sort, $payments);
        return $response;
    }

    /**
     * Operation reportsPaymentsExportWithHttpInfo
     *
     * 
     *
     * @param string[] $transactionTypes Revshare transaction types (required)
     * @param \Swagger\Client\Model\Pagination $pagination A JSON encoded array with the columns to group data on (eg. [\&quot;period\&quot;,\&quot;alias\&quot;]) (required)
     * @param \Swagger\Client\Model\Sort4 $sort A JSON encoded object with the column to sort on and the sort direction (eg. {\&quot;col\&quot;:\&quot;id\&quot;,\&quot;dir\&quot;:\&quot;DESC\&quot;}) (required)
     * @param string $payments A payment fid (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of \Swagger\Client\Model\ExportData, HTTP status code, HTTP response headers (array of strings)
     */
    public function reportsPaymentsExportWithHttpInfo($transactionTypes, $pagination, $sort, $payments)
    {
        // verify the required parameter 'transactionTypes' is set
        if ($transactionTypes === null) {
            throw new \InvalidArgumentException('Missing the required parameter $transactionTypes when calling reportsPaymentsExport');
        }
        // verify the required parameter 'pagination' is set
        if ($pagination === null) {
            throw new \InvalidArgumentException('Missing the required parameter $pagination when calling reportsPaymentsExport');
        }
        // verify the required parameter 'sort' is set
        if ($sort === null) {
            throw new \InvalidArgumentException('Missing the required parameter $sort when calling reportsPaymentsExport');
        }
        // verify the required parameter 'payments' is set
        if ($payments === null) {
            throw new \InvalidArgumentException('Missing the required parameter $payments when calling reportsPaymentsExport');
        }
        // parse inputs
        $resourcePath = "/reports/payments/details/revshare/export";
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
        if (is_array($transactionTypes)) {
            $transactionTypes = $this->apiClient->getSerializer()->serializeCollection($transactionTypes, 'csv', true);
        }
        if ($transactionTypes !== null) {
            $queryParams['transactionTypes'] = $this->apiClient->getSerializer()->toQueryValue($transactionTypes);
        }
        // query params
        if ($payments !== null) {
            $queryParams['payments'] = $this->apiClient->getSerializer()->toQueryValue($payments);
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // body params
        $_tempBody = null;
        if (isset($pagination)) {
            $_tempBody = $pagination;
        }
// body params
        $_tempBody = null;
        if (isset($sort)) {
            $_tempBody = $sort;
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
                '\Swagger\Client\Model\ExportData',
                '/reports/payments/details/revshare/export'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\ExportData', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\ExportData', $e->getResponseHeaders());
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
