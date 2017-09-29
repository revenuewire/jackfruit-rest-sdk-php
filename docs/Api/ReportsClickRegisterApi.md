# Swagger\Client\ReportsClickRegisterApi

All URIs are relative to *https://localhost/rest/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**reportsClickRegister**](ReportsClickRegisterApi.md#reportsClickRegister) | **GET** /reports/clickregister | 
[**reportsClickRegisterGetCount**](ReportsClickRegisterApi.md#reportsClickRegisterGetCount) | **GET** /reports/clickregister/count | 


# **reportsClickRegister**
> \Swagger\Client\Model\ClickRegisterDatas reportsClickRegister($offers, $aliases, $merchants, $geos, $zones, $merchants2, $os, $subIds, $searchText, $range, $start, $end, $sort, $searchText2, $pagination)



Get a list of linker hits both for revshare and CPA offers

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: JWT
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Authorization-JWT', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Authorization-JWT', 'Bearer');
// Configure API key authorization: API-KEY
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$api_instance = new Swagger\Client\Api\ReportsClickRegisterApi();
$offers = array("offers_example"); // string[] | A JSON encoded array of offer IDs (eg [\"1\",\"2\"])
$aliases = array("aliases_example"); // string[] | A JSON encoded array of alias IDs (eg [\"1\",\"2\"])
$merchants = array("merchants_example"); // string[] | A JSON encoded array of merchant IDs (eg [\"1\",\"22\"])
$geos = array("geos_example"); // string[] | A JSON encoded array of country (US and CA may also include region) IDs (eg [\"CA\",\"US-WA\"])
$zones = array("zones_example"); // string[] | A JSON encoded array of continent names (eg [\"North America\", \"Asia\"])
$merchants2 = array("merchants_example"); // string[] | A JSON encoded array of language codes (eg [\"en\"])
$os = array("os_example"); // string[] | A JSON encoded array of os names (eg [\"Linux\", \"Mac OSX\"])
$subIds = "subIds_example"; // string | A JSON encoded array of sub IDs (eg [\"this is my sub ID\", \"this is an alternate sub ID\"])
$searchText = "searchText_example"; // string | The IP or order reference to search for
$range = "range_example"; // string | The english name for the period being searched, encoded in camel case (eg. lastMonth or customRange)
$start = "start_example"; // string | Start date (YYYY-MM-DD)
$end = "end_example"; // string | End date (YYYY-MM-DD)
$sort = new \Swagger\Client\Model\Sort(); // \Swagger\Client\Model\Sort | A JSON encoded object with the column to sort on and the sort direction (eg. {\"col\":\"sales\",\"dir\":\"DESC\"})
$searchText2 = "searchText_example"; // string | The IP or order reference to search for
$pagination = new \Swagger\Client\Model\Pagination(); // \Swagger\Client\Model\Pagination | A JSON encoded array with the columns to group data on (eg. [\"period\",\"alias\"])

try {
    $result = $api_instance->reportsClickRegister($offers, $aliases, $merchants, $geos, $zones, $merchants2, $os, $subIds, $searchText, $range, $start, $end, $sort, $searchText2, $pagination);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsClickRegisterApi->reportsClickRegister: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **offers** | [**string[]**](../Model/string.md)| A JSON encoded array of offer IDs (eg [\&quot;1\&quot;,\&quot;2\&quot;]) |
 **aliases** | [**string[]**](../Model/string.md)| A JSON encoded array of alias IDs (eg [\&quot;1\&quot;,\&quot;2\&quot;]) |
 **merchants** | [**string[]**](../Model/string.md)| A JSON encoded array of merchant IDs (eg [\&quot;1\&quot;,\&quot;22\&quot;]) |
 **geos** | [**string[]**](../Model/string.md)| A JSON encoded array of country (US and CA may also include region) IDs (eg [\&quot;CA\&quot;,\&quot;US-WA\&quot;]) |
 **zones** | [**string[]**](../Model/string.md)| A JSON encoded array of continent names (eg [\&quot;North America\&quot;, \&quot;Asia\&quot;]) |
 **merchants2** | [**string[]**](../Model/string.md)| A JSON encoded array of language codes (eg [\&quot;en\&quot;]) |
 **os** | [**string[]**](../Model/string.md)| A JSON encoded array of os names (eg [\&quot;Linux\&quot;, \&quot;Mac OSX\&quot;]) |
 **subIds** | **string**| A JSON encoded array of sub IDs (eg [\&quot;this is my sub ID\&quot;, \&quot;this is an alternate sub ID\&quot;]) |
 **searchText** | **string**| The IP or order reference to search for |
 **range** | **string**| The english name for the period being searched, encoded in camel case (eg. lastMonth or customRange) |
 **start** | **string**| Start date (YYYY-MM-DD) |
 **end** | **string**| End date (YYYY-MM-DD) |
 **sort** | [**\Swagger\Client\Model\Sort**](../Model/\Swagger\Client\Model\Sort.md)| A JSON encoded object with the column to sort on and the sort direction (eg. {\&quot;col\&quot;:\&quot;sales\&quot;,\&quot;dir\&quot;:\&quot;DESC\&quot;}) |
 **searchText2** | **string**| The IP or order reference to search for |
 **pagination** | [**\Swagger\Client\Model\Pagination**](../Model/\Swagger\Client\Model\Pagination.md)| A JSON encoded array with the columns to group data on (eg. [\&quot;period\&quot;,\&quot;alias\&quot;]) |

### Return type

[**\Swagger\Client\Model\ClickRegisterDatas**](../Model/ClickRegisterDatas.md)

### Authorization

[JWT](../../README.md#JWT), [API-KEY](../../README.md#API-KEY)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **reportsClickRegisterGetCount**
> \Swagger\Client\Model\CountData reportsClickRegisterGetCount($offers, $aliases, $merchants, $geos, $zones, $merchants2, $os, $subIds, $searchText, $range, $start, $end, $sort, $searchText2, $pagination)



Get a count of the total number of linker hits both for revshare and CPA offers

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: JWT
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Authorization-JWT', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Authorization-JWT', 'Bearer');
// Configure API key authorization: API-KEY
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$api_instance = new Swagger\Client\Api\ReportsClickRegisterApi();
$offers = array("offers_example"); // string[] | A JSON encoded array of offer IDs (eg [\"1\",\"2\"])
$aliases = array("aliases_example"); // string[] | A JSON encoded array of alias IDs (eg [\"1\",\"2\"])
$merchants = array("merchants_example"); // string[] | A JSON encoded array of merchant IDs (eg [\"1\",\"22\"])
$geos = array("geos_example"); // string[] | A JSON encoded array of country (US and CA may also include region) IDs (eg [\"CA\",\"US-WA\"])
$zones = array("zones_example"); // string[] | A JSON encoded array of continent names (eg [\"North America\", \"Asia\"])
$merchants2 = array("merchants_example"); // string[] | A JSON encoded array of language codes (eg [\"en\"])
$os = array("os_example"); // string[] | A JSON encoded array of os names (eg [\"Linux\", \"Mac OSX\"])
$subIds = "subIds_example"; // string | A JSON encoded array of sub IDs (eg [\"this is my sub ID\", \"this is an alternate sub ID\"])
$searchText = "searchText_example"; // string | The IP or order reference to search for
$range = "range_example"; // string | The english name for the period being searched, encoded in camel case (eg. lastMonth or customRange)
$start = "start_example"; // string | Start date (YYYY-MM-DD)
$end = "end_example"; // string | End date (YYYY-MM-DD)
$sort = new \Swagger\Client\Model\Sort(); // \Swagger\Client\Model\Sort | A JSON encoded object with the column to sort on and the sort direction (eg. {\"col\":\"sales\",\"dir\":\"DESC\"})
$searchText2 = "searchText_example"; // string | The IP or order reference to search for
$pagination = new \Swagger\Client\Model\Pagination(); // \Swagger\Client\Model\Pagination | A JSON encoded array with the columns to group data on (eg. [\"period\",\"alias\"])

try {
    $result = $api_instance->reportsClickRegisterGetCount($offers, $aliases, $merchants, $geos, $zones, $merchants2, $os, $subIds, $searchText, $range, $start, $end, $sort, $searchText2, $pagination);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsClickRegisterApi->reportsClickRegisterGetCount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **offers** | [**string[]**](../Model/string.md)| A JSON encoded array of offer IDs (eg [\&quot;1\&quot;,\&quot;2\&quot;]) |
 **aliases** | [**string[]**](../Model/string.md)| A JSON encoded array of alias IDs (eg [\&quot;1\&quot;,\&quot;2\&quot;]) |
 **merchants** | [**string[]**](../Model/string.md)| A JSON encoded array of merchant IDs (eg [\&quot;1\&quot;,\&quot;22\&quot;]) |
 **geos** | [**string[]**](../Model/string.md)| A JSON encoded array of country (US and CA may also include region) IDs (eg [\&quot;CA\&quot;,\&quot;US-WA\&quot;]) |
 **zones** | [**string[]**](../Model/string.md)| A JSON encoded array of continent names (eg [\&quot;North America\&quot;, \&quot;Asia\&quot;]) |
 **merchants2** | [**string[]**](../Model/string.md)| A JSON encoded array of language codes (eg [\&quot;en\&quot;]) |
 **os** | [**string[]**](../Model/string.md)| A JSON encoded array of os names (eg [\&quot;Linux\&quot;, \&quot;Mac OSX\&quot;]) |
 **subIds** | **string**| A JSON encoded array of sub IDs (eg [\&quot;this is my sub ID\&quot;, \&quot;this is an alternate sub ID\&quot;]) |
 **searchText** | **string**| The IP or order reference to search for |
 **range** | **string**| The english name for the period being searched, encoded in camel case (eg. lastMonth or customRange) |
 **start** | **string**| Start date (YYYY-MM-DD) |
 **end** | **string**| End date (YYYY-MM-DD) |
 **sort** | [**\Swagger\Client\Model\Sort**](../Model/\Swagger\Client\Model\Sort.md)| A JSON encoded object with the column to sort on and the sort direction (eg. {\&quot;col\&quot;:\&quot;sales\&quot;,\&quot;dir\&quot;:\&quot;DESC\&quot;}) |
 **searchText2** | **string**| The IP or order reference to search for |
 **pagination** | [**\Swagger\Client\Model\Pagination**](../Model/\Swagger\Client\Model\Pagination.md)| A JSON encoded array with the columns to group data on (eg. [\&quot;period\&quot;,\&quot;alias\&quot;]) |

### Return type

[**\Swagger\Client\Model\CountData**](../Model/CountData.md)

### Authorization

[JWT](../../README.md#JWT), [API-KEY](../../README.md#API-KEY)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

