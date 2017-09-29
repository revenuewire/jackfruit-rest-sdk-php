# Swagger\Client\ReportsConversionsApi

All URIs are relative to *https://localhost/rest/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**reportsConversionsDaily**](ReportsConversionsApi.md#reportsConversionsDaily) | **GET** /reports/conversions/daily | 
[**reportsConversionsHourly**](ReportsConversionsApi.md#reportsConversionsHourly) | **GET** /reports/conversions/hourly | 
[**reportsConversionsHourly_0**](ReportsConversionsApi.md#reportsConversionsHourly_0) | **GET** /reports/conversions/register/totals | 
[**reportsConversionsRegister**](ReportsConversionsApi.md#reportsConversionsRegister) | **GET** /reports/conversions/register | 
[**reportsConversionsRegisterCount**](ReportsConversionsApi.md#reportsConversionsRegisterCount) | **GET** /reports/conversions/register/count | 
[**reportsConversionsRegisterExport**](ReportsConversionsApi.md#reportsConversionsRegisterExport) | **GET** /reports/conversions/register/export | 
[**reportsConversionsRegisterGraph**](ReportsConversionsApi.md#reportsConversionsRegisterGraph) | **GET** /reports/conversions/register/graph | 


# **reportsConversionsDaily**
> \Swagger\Client\Model\ConversionsDailyOrHourlyDatas reportsConversionsDaily($startDate, $endDate)



Get a summary of the most recent seven days of cpa conversions and reversals and revshare transactions

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

$api_instance = new Swagger\Client\Api\ReportsConversionsApi();
$startDate = "startDate_example"; // string | Start date (YYYY-MM-DD)
$endDate = "endDate_example"; // string | End date (YYYY-MM-DD)

try {
    $result = $api_instance->reportsConversionsDaily($startDate, $endDate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsConversionsApi->reportsConversionsDaily: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **startDate** | **string**| Start date (YYYY-MM-DD) |
 **endDate** | **string**| End date (YYYY-MM-DD) |

### Return type

[**\Swagger\Client\Model\ConversionsDailyOrHourlyDatas**](../Model/ConversionsDailyOrHourlyDatas.md)

### Authorization

[JWT](../../README.md#JWT), [API-KEY](../../README.md#API-KEY)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **reportsConversionsHourly**
> \Swagger\Client\Model\ConversionsDailyOrHourlyDatas reportsConversionsHourly($startDate, $endDate, $startHour, $endHour)



Get a summary of the most recent seven hours of cpa conversions and reversals and revshare transactions

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

$api_instance = new Swagger\Client\Api\ReportsConversionsApi();
$startDate = "startDate_example"; // string | Start date (YYYY-MM-DD)
$endDate = "endDate_example"; // string | End date (YYYY-MM-DD)
$startHour = "startHour_example"; // string | Start hour (HH)
$endHour = "endHour_example"; // string | End hour (HH)

try {
    $result = $api_instance->reportsConversionsHourly($startDate, $endDate, $startHour, $endHour);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsConversionsApi->reportsConversionsHourly: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **startDate** | **string**| Start date (YYYY-MM-DD) |
 **endDate** | **string**| End date (YYYY-MM-DD) |
 **startHour** | **string**| Start hour (HH) |
 **endHour** | **string**| End hour (HH) |

### Return type

[**\Swagger\Client\Model\ConversionsDailyOrHourlyDatas**](../Model/ConversionsDailyOrHourlyDatas.md)

### Authorization

[JWT](../../README.md#JWT), [API-KEY](../../README.md#API-KEY)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **reportsConversionsHourly_0**
> \Swagger\Client\Model\ConversionsRegisterTotalsDatas reportsConversionsHourly_0($offers, $aliases, $geos, $zones, $os, $transactionTypes, $subIds, $range, $start, $end, $graphScale, $sort, $searchText, $pagination)



Get summary (totals) conversions and reversals data and revshare transactions data

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

$api_instance = new Swagger\Client\Api\ReportsConversionsApi();
$offers = array("offers_example"); // string[] | A JSON encoded array of offer IDs (eg [\"1\",\"2\"])
$aliases = array("aliases_example"); // string[] | A JSON encoded array of alias IDs (eg [\"1\",\"2\"])
$geos = array("geos_example"); // string[] | A JSON encoded array of country (US and CA may also include region) IDs (eg [\"CA\",\"US-WA\"])
$zones = array("zones_example"); // string[] | A JSON encoded array of continent names (eg [\"North America\", \"Asia\"])
$os = array("os_example"); // string[] | A JSON encoded array of os names (eg [\"Linux\", \"Mac OSX\"])
$transactionTypes = array("transactionTypes_example"); // string[] | Revshare and CPA transaction types
$subIds = "subIds_example"; // string | A JSON encoded array of sub IDs (eg [\"this is my sub ID\", \"this is an alternate sub ID\"])
$range = "range_example"; // string | The english name for the period being searched, encoded in camel case (eg. lastMonth or customRange)
$start = "start_example"; // string | Start date (YYYY-MM-DD)
$end = "end_example"; // string | End date (YYYY-MM-DD)
$graphScale = "graphScale_example"; // string | The x-axis scale to use for graph data for a geographical map
$sort = new \Swagger\Client\Model\Sort1(); // \Swagger\Client\Model\Sort1 | A JSON encoded object with the column to sort on and the sort direction (eg. {\"col\":\"sales\",\"dir\":\"DESC\"})
$searchText = "searchText_example"; // string | The sub ID or order reference to search for
$pagination = new \Swagger\Client\Model\Pagination(); // \Swagger\Client\Model\Pagination | A JSON encoded array with the columns to group data on (eg. [\"period\",\"alias\"])

try {
    $result = $api_instance->reportsConversionsHourly_0($offers, $aliases, $geos, $zones, $os, $transactionTypes, $subIds, $range, $start, $end, $graphScale, $sort, $searchText, $pagination);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsConversionsApi->reportsConversionsHourly_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **offers** | [**string[]**](../Model/string.md)| A JSON encoded array of offer IDs (eg [\&quot;1\&quot;,\&quot;2\&quot;]) |
 **aliases** | [**string[]**](../Model/string.md)| A JSON encoded array of alias IDs (eg [\&quot;1\&quot;,\&quot;2\&quot;]) |
 **geos** | [**string[]**](../Model/string.md)| A JSON encoded array of country (US and CA may also include region) IDs (eg [\&quot;CA\&quot;,\&quot;US-WA\&quot;]) |
 **zones** | [**string[]**](../Model/string.md)| A JSON encoded array of continent names (eg [\&quot;North America\&quot;, \&quot;Asia\&quot;]) |
 **os** | [**string[]**](../Model/string.md)| A JSON encoded array of os names (eg [\&quot;Linux\&quot;, \&quot;Mac OSX\&quot;]) |
 **transactionTypes** | [**string[]**](../Model/string.md)| Revshare and CPA transaction types |
 **subIds** | **string**| A JSON encoded array of sub IDs (eg [\&quot;this is my sub ID\&quot;, \&quot;this is an alternate sub ID\&quot;]) |
 **range** | **string**| The english name for the period being searched, encoded in camel case (eg. lastMonth or customRange) |
 **start** | **string**| Start date (YYYY-MM-DD) |
 **end** | **string**| End date (YYYY-MM-DD) |
 **graphScale** | **string**| The x-axis scale to use for graph data for a geographical map |
 **sort** | [**\Swagger\Client\Model\Sort1**](../Model/\Swagger\Client\Model\Sort1.md)| A JSON encoded object with the column to sort on and the sort direction (eg. {\&quot;col\&quot;:\&quot;sales\&quot;,\&quot;dir\&quot;:\&quot;DESC\&quot;}) |
 **searchText** | **string**| The sub ID or order reference to search for |
 **pagination** | [**\Swagger\Client\Model\Pagination**](../Model/\Swagger\Client\Model\Pagination.md)| A JSON encoded array with the columns to group data on (eg. [\&quot;period\&quot;,\&quot;alias\&quot;]) |

### Return type

[**\Swagger\Client\Model\ConversionsRegisterTotalsDatas**](../Model/ConversionsRegisterTotalsDatas.md)

### Authorization

[JWT](../../README.md#JWT), [API-KEY](../../README.md#API-KEY)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **reportsConversionsRegister**
> \Swagger\Client\Model\ConversionsRegisterDatas reportsConversionsRegister($offers, $aliases, $geos, $zones, $os, $transactionTypes, $subIds, $range, $start, $end, $graphScale, $sort, $searchText, $pagination)



Get a list of cpa conversions and reversals and revshare transactions

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

$api_instance = new Swagger\Client\Api\ReportsConversionsApi();
$offers = array("offers_example"); // string[] | A JSON encoded array of offer IDs (eg [\"1\",\"2\"])
$aliases = array("aliases_example"); // string[] | A JSON encoded array of alias IDs (eg [\"1\",\"2\"])
$geos = array("geos_example"); // string[] | A JSON encoded array of country (US and CA may also include region) IDs (eg [\"CA\",\"US-WA\"])
$zones = array("zones_example"); // string[] | A JSON encoded array of continent names (eg [\"North America\", \"Asia\"])
$os = array("os_example"); // string[] | A JSON encoded array of os names (eg [\"Linux\", \"Mac OSX\"])
$transactionTypes = array("transactionTypes_example"); // string[] | Revshare and CPA transaction types
$subIds = "subIds_example"; // string | A JSON encoded array of sub IDs (eg [\"this is my sub ID\", \"this is an alternate sub ID\"])
$range = "range_example"; // string | The english name for the period being searched, encoded in camel case (eg. lastMonth or customRange)
$start = "start_example"; // string | Start date (YYYY-MM-DD)
$end = "end_example"; // string | End date (YYYY-MM-DD)
$graphScale = "graphScale_example"; // string | The x-axis scale to use for graph data for a geographical map
$sort = new \Swagger\Client\Model\Sort1(); // \Swagger\Client\Model\Sort1 | A JSON encoded object with the column to sort on and the sort direction (eg. {\"col\":\"sales\",\"dir\":\"DESC\"})
$searchText = "searchText_example"; // string | The sub ID or order reference to search for
$pagination = new \Swagger\Client\Model\Pagination(); // \Swagger\Client\Model\Pagination | A JSON encoded array with the columns to group data on (eg. [\"period\",\"alias\"])

try {
    $result = $api_instance->reportsConversionsRegister($offers, $aliases, $geos, $zones, $os, $transactionTypes, $subIds, $range, $start, $end, $graphScale, $sort, $searchText, $pagination);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsConversionsApi->reportsConversionsRegister: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **offers** | [**string[]**](../Model/string.md)| A JSON encoded array of offer IDs (eg [\&quot;1\&quot;,\&quot;2\&quot;]) |
 **aliases** | [**string[]**](../Model/string.md)| A JSON encoded array of alias IDs (eg [\&quot;1\&quot;,\&quot;2\&quot;]) |
 **geos** | [**string[]**](../Model/string.md)| A JSON encoded array of country (US and CA may also include region) IDs (eg [\&quot;CA\&quot;,\&quot;US-WA\&quot;]) |
 **zones** | [**string[]**](../Model/string.md)| A JSON encoded array of continent names (eg [\&quot;North America\&quot;, \&quot;Asia\&quot;]) |
 **os** | [**string[]**](../Model/string.md)| A JSON encoded array of os names (eg [\&quot;Linux\&quot;, \&quot;Mac OSX\&quot;]) |
 **transactionTypes** | [**string[]**](../Model/string.md)| Revshare and CPA transaction types |
 **subIds** | **string**| A JSON encoded array of sub IDs (eg [\&quot;this is my sub ID\&quot;, \&quot;this is an alternate sub ID\&quot;]) |
 **range** | **string**| The english name for the period being searched, encoded in camel case (eg. lastMonth or customRange) |
 **start** | **string**| Start date (YYYY-MM-DD) |
 **end** | **string**| End date (YYYY-MM-DD) |
 **graphScale** | **string**| The x-axis scale to use for graph data for a geographical map |
 **sort** | [**\Swagger\Client\Model\Sort1**](../Model/\Swagger\Client\Model\Sort1.md)| A JSON encoded object with the column to sort on and the sort direction (eg. {\&quot;col\&quot;:\&quot;sales\&quot;,\&quot;dir\&quot;:\&quot;DESC\&quot;}) |
 **searchText** | **string**| The sub ID or order reference to search for |
 **pagination** | [**\Swagger\Client\Model\Pagination**](../Model/\Swagger\Client\Model\Pagination.md)| A JSON encoded array with the columns to group data on (eg. [\&quot;period\&quot;,\&quot;alias\&quot;]) |

### Return type

[**\Swagger\Client\Model\ConversionsRegisterDatas**](../Model/ConversionsRegisterDatas.md)

### Authorization

[JWT](../../README.md#JWT), [API-KEY](../../README.md#API-KEY)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **reportsConversionsRegisterCount**
> \Swagger\Client\Model\CountData reportsConversionsRegisterCount($offers, $aliases, $geos, $zones, $os, $transactionTypes, $subIds, $range, $start, $end, $graphScale, $sort, $searchText, $pagination)



Get a total number of conversions and reversals and revshare transactions

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

$api_instance = new Swagger\Client\Api\ReportsConversionsApi();
$offers = array("offers_example"); // string[] | A JSON encoded array of offer IDs (eg [\"1\",\"2\"])
$aliases = array("aliases_example"); // string[] | A JSON encoded array of alias IDs (eg [\"1\",\"2\"])
$geos = array("geos_example"); // string[] | A JSON encoded array of country (US and CA may also include region) IDs (eg [\"CA\",\"US-WA\"])
$zones = array("zones_example"); // string[] | A JSON encoded array of continent names (eg [\"North America\", \"Asia\"])
$os = array("os_example"); // string[] | A JSON encoded array of os names (eg [\"Linux\", \"Mac OSX\"])
$transactionTypes = array("transactionTypes_example"); // string[] | Revshare and CPA transaction types
$subIds = "subIds_example"; // string | A JSON encoded array of sub IDs (eg [\"this is my sub ID\", \"this is an alternate sub ID\"])
$range = "range_example"; // string | The english name for the period being searched, encoded in camel case (eg. lastMonth or customRange)
$start = "start_example"; // string | Start date (YYYY-MM-DD)
$end = "end_example"; // string | End date (YYYY-MM-DD)
$graphScale = "graphScale_example"; // string | The x-axis scale to use for graph data for a geographical map
$sort = new \Swagger\Client\Model\Sort1(); // \Swagger\Client\Model\Sort1 | A JSON encoded object with the column to sort on and the sort direction (eg. {\"col\":\"sales\",\"dir\":\"DESC\"})
$searchText = "searchText_example"; // string | The sub ID or order reference to search for
$pagination = new \Swagger\Client\Model\Pagination(); // \Swagger\Client\Model\Pagination | A JSON encoded array with the columns to group data on (eg. [\"period\",\"alias\"])

try {
    $result = $api_instance->reportsConversionsRegisterCount($offers, $aliases, $geos, $zones, $os, $transactionTypes, $subIds, $range, $start, $end, $graphScale, $sort, $searchText, $pagination);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsConversionsApi->reportsConversionsRegisterCount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **offers** | [**string[]**](../Model/string.md)| A JSON encoded array of offer IDs (eg [\&quot;1\&quot;,\&quot;2\&quot;]) |
 **aliases** | [**string[]**](../Model/string.md)| A JSON encoded array of alias IDs (eg [\&quot;1\&quot;,\&quot;2\&quot;]) |
 **geos** | [**string[]**](../Model/string.md)| A JSON encoded array of country (US and CA may also include region) IDs (eg [\&quot;CA\&quot;,\&quot;US-WA\&quot;]) |
 **zones** | [**string[]**](../Model/string.md)| A JSON encoded array of continent names (eg [\&quot;North America\&quot;, \&quot;Asia\&quot;]) |
 **os** | [**string[]**](../Model/string.md)| A JSON encoded array of os names (eg [\&quot;Linux\&quot;, \&quot;Mac OSX\&quot;]) |
 **transactionTypes** | [**string[]**](../Model/string.md)| Revshare and CPA transaction types |
 **subIds** | **string**| A JSON encoded array of sub IDs (eg [\&quot;this is my sub ID\&quot;, \&quot;this is an alternate sub ID\&quot;]) |
 **range** | **string**| The english name for the period being searched, encoded in camel case (eg. lastMonth or customRange) |
 **start** | **string**| Start date (YYYY-MM-DD) |
 **end** | **string**| End date (YYYY-MM-DD) |
 **graphScale** | **string**| The x-axis scale to use for graph data for a geographical map |
 **sort** | [**\Swagger\Client\Model\Sort1**](../Model/\Swagger\Client\Model\Sort1.md)| A JSON encoded object with the column to sort on and the sort direction (eg. {\&quot;col\&quot;:\&quot;sales\&quot;,\&quot;dir\&quot;:\&quot;DESC\&quot;}) |
 **searchText** | **string**| The sub ID or order reference to search for |
 **pagination** | [**\Swagger\Client\Model\Pagination**](../Model/\Swagger\Client\Model\Pagination.md)| A JSON encoded array with the columns to group data on (eg. [\&quot;period\&quot;,\&quot;alias\&quot;]) |

### Return type

[**\Swagger\Client\Model\CountData**](../Model/CountData.md)

### Authorization

[JWT](../../README.md#JWT), [API-KEY](../../README.md#API-KEY)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **reportsConversionsRegisterExport**
> \Swagger\Client\Model\ExportData reportsConversionsRegisterExport($offers, $aliases, $geos, $zones, $os, $transactionTypes, $subIds, $range, $start, $end, $graphScale, $sort, $searchText, $pagination)



Get a list of cpa conversions and reversals and revshare transactions

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

$api_instance = new Swagger\Client\Api\ReportsConversionsApi();
$offers = array("offers_example"); // string[] | A JSON encoded array of offer IDs (eg [\"1\",\"2\"])
$aliases = array("aliases_example"); // string[] | A JSON encoded array of alias IDs (eg [\"1\",\"2\"])
$geos = array("geos_example"); // string[] | A JSON encoded array of country (US and CA may also include region) IDs (eg [\"CA\",\"US-WA\"])
$zones = array("zones_example"); // string[] | A JSON encoded array of continent names (eg [\"North America\", \"Asia\"])
$os = array("os_example"); // string[] | A JSON encoded array of os names (eg [\"Linux\", \"Mac OSX\"])
$transactionTypes = array("transactionTypes_example"); // string[] | Revshare and CPA transaction types
$subIds = "subIds_example"; // string | A JSON encoded array of sub IDs (eg [\"this is my sub ID\", \"this is an alternate sub ID\"])
$range = "range_example"; // string | The english name for the period being searched, encoded in camel case (eg. lastMonth or customRange)
$start = "start_example"; // string | Start date (YYYY-MM-DD)
$end = "end_example"; // string | End date (YYYY-MM-DD)
$graphScale = "graphScale_example"; // string | The x-axis scale to use for graph data for a geographical map
$sort = new \Swagger\Client\Model\Sort1(); // \Swagger\Client\Model\Sort1 | A JSON encoded object with the column to sort on and the sort direction (eg. {\"col\":\"sales\",\"dir\":\"DESC\"})
$searchText = "searchText_example"; // string | The sub ID or order reference to search for
$pagination = new \Swagger\Client\Model\Pagination(); // \Swagger\Client\Model\Pagination | A JSON encoded array with the columns to group data on (eg. [\"period\",\"alias\"])

try {
    $result = $api_instance->reportsConversionsRegisterExport($offers, $aliases, $geos, $zones, $os, $transactionTypes, $subIds, $range, $start, $end, $graphScale, $sort, $searchText, $pagination);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsConversionsApi->reportsConversionsRegisterExport: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **offers** | [**string[]**](../Model/string.md)| A JSON encoded array of offer IDs (eg [\&quot;1\&quot;,\&quot;2\&quot;]) |
 **aliases** | [**string[]**](../Model/string.md)| A JSON encoded array of alias IDs (eg [\&quot;1\&quot;,\&quot;2\&quot;]) |
 **geos** | [**string[]**](../Model/string.md)| A JSON encoded array of country (US and CA may also include region) IDs (eg [\&quot;CA\&quot;,\&quot;US-WA\&quot;]) |
 **zones** | [**string[]**](../Model/string.md)| A JSON encoded array of continent names (eg [\&quot;North America\&quot;, \&quot;Asia\&quot;]) |
 **os** | [**string[]**](../Model/string.md)| A JSON encoded array of os names (eg [\&quot;Linux\&quot;, \&quot;Mac OSX\&quot;]) |
 **transactionTypes** | [**string[]**](../Model/string.md)| Revshare and CPA transaction types |
 **subIds** | **string**| A JSON encoded array of sub IDs (eg [\&quot;this is my sub ID\&quot;, \&quot;this is an alternate sub ID\&quot;]) |
 **range** | **string**| The english name for the period being searched, encoded in camel case (eg. lastMonth or customRange) |
 **start** | **string**| Start date (YYYY-MM-DD) |
 **end** | **string**| End date (YYYY-MM-DD) |
 **graphScale** | **string**| The x-axis scale to use for graph data for a geographical map |
 **sort** | [**\Swagger\Client\Model\Sort1**](../Model/\Swagger\Client\Model\Sort1.md)| A JSON encoded object with the column to sort on and the sort direction (eg. {\&quot;col\&quot;:\&quot;sales\&quot;,\&quot;dir\&quot;:\&quot;DESC\&quot;}) |
 **searchText** | **string**| The sub ID or order reference to search for |
 **pagination** | [**\Swagger\Client\Model\Pagination**](../Model/\Swagger\Client\Model\Pagination.md)| A JSON encoded array with the columns to group data on (eg. [\&quot;period\&quot;,\&quot;alias\&quot;]) |

### Return type

[**\Swagger\Client\Model\ExportData**](../Model/ExportData.md)

### Authorization

[JWT](../../README.md#JWT), [API-KEY](../../README.md#API-KEY)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **reportsConversionsRegisterGraph**
> \Swagger\Client\Model\ConversionsRegisterGraphDatas reportsConversionsRegisterGraph($offers, $aliases, $geos, $zones, $os, $transactionTypes, $subIds, $range, $start, $end, $graphScale, $sort, $searchText, $pagination)



Get summary conversion and reversal and revshare transaction data formatted for use in a graph

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

$api_instance = new Swagger\Client\Api\ReportsConversionsApi();
$offers = array("offers_example"); // string[] | A JSON encoded array of offer IDs (eg [\"1\",\"2\"])
$aliases = array("aliases_example"); // string[] | A JSON encoded array of alias IDs (eg [\"1\",\"2\"])
$geos = array("geos_example"); // string[] | A JSON encoded array of country (US and CA may also include region) IDs (eg [\"CA\",\"US-WA\"])
$zones = array("zones_example"); // string[] | A JSON encoded array of continent names (eg [\"North America\", \"Asia\"])
$os = array("os_example"); // string[] | A JSON encoded array of os names (eg [\"Linux\", \"Mac OSX\"])
$transactionTypes = array("transactionTypes_example"); // string[] | Revshare and CPA transaction types
$subIds = "subIds_example"; // string | A JSON encoded array of sub IDs (eg [\"this is my sub ID\", \"this is an alternate sub ID\"])
$range = "range_example"; // string | The english name for the period being searched, encoded in camel case (eg. lastMonth or customRange)
$start = "start_example"; // string | Start date (YYYY-MM-DD)
$end = "end_example"; // string | End date (YYYY-MM-DD)
$graphScale = "graphScale_example"; // string | The x-axis scale to use for graph data for a geographical map
$sort = new \Swagger\Client\Model\Sort1(); // \Swagger\Client\Model\Sort1 | A JSON encoded object with the column to sort on and the sort direction (eg. {\"col\":\"sales\",\"dir\":\"DESC\"})
$searchText = "searchText_example"; // string | The sub ID or order reference to search for
$pagination = new \Swagger\Client\Model\Pagination(); // \Swagger\Client\Model\Pagination | A JSON encoded array with the columns to group data on (eg. [\"period\",\"alias\"])

try {
    $result = $api_instance->reportsConversionsRegisterGraph($offers, $aliases, $geos, $zones, $os, $transactionTypes, $subIds, $range, $start, $end, $graphScale, $sort, $searchText, $pagination);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsConversionsApi->reportsConversionsRegisterGraph: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **offers** | [**string[]**](../Model/string.md)| A JSON encoded array of offer IDs (eg [\&quot;1\&quot;,\&quot;2\&quot;]) |
 **aliases** | [**string[]**](../Model/string.md)| A JSON encoded array of alias IDs (eg [\&quot;1\&quot;,\&quot;2\&quot;]) |
 **geos** | [**string[]**](../Model/string.md)| A JSON encoded array of country (US and CA may also include region) IDs (eg [\&quot;CA\&quot;,\&quot;US-WA\&quot;]) |
 **zones** | [**string[]**](../Model/string.md)| A JSON encoded array of continent names (eg [\&quot;North America\&quot;, \&quot;Asia\&quot;]) |
 **os** | [**string[]**](../Model/string.md)| A JSON encoded array of os names (eg [\&quot;Linux\&quot;, \&quot;Mac OSX\&quot;]) |
 **transactionTypes** | [**string[]**](../Model/string.md)| Revshare and CPA transaction types |
 **subIds** | **string**| A JSON encoded array of sub IDs (eg [\&quot;this is my sub ID\&quot;, \&quot;this is an alternate sub ID\&quot;]) |
 **range** | **string**| The english name for the period being searched, encoded in camel case (eg. lastMonth or customRange) |
 **start** | **string**| Start date (YYYY-MM-DD) |
 **end** | **string**| End date (YYYY-MM-DD) |
 **graphScale** | **string**| The x-axis scale to use for graph data for a geographical map |
 **sort** | [**\Swagger\Client\Model\Sort1**](../Model/\Swagger\Client\Model\Sort1.md)| A JSON encoded object with the column to sort on and the sort direction (eg. {\&quot;col\&quot;:\&quot;sales\&quot;,\&quot;dir\&quot;:\&quot;DESC\&quot;}) |
 **searchText** | **string**| The sub ID or order reference to search for |
 **pagination** | [**\Swagger\Client\Model\Pagination**](../Model/\Swagger\Client\Model\Pagination.md)| A JSON encoded array with the columns to group data on (eg. [\&quot;period\&quot;,\&quot;alias\&quot;]) |

### Return type

[**\Swagger\Client\Model\ConversionsRegisterGraphDatas**](../Model/ConversionsRegisterGraphDatas.md)

### Authorization

[JWT](../../README.md#JWT), [API-KEY](../../README.md#API-KEY)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

