# Swagger\Client\ReportsRevshareApi

All URIs are relative to *https://localhost/rest/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**reportsRevshareSummary**](ReportsRevshareApi.md#reportsRevshareSummary) | **GET** /reports/revshare/summary | 
[**reportsRevshareSummary_0**](ReportsRevshareApi.md#reportsRevshareSummary_0) | **GET** /reports/revshare | 
[**reportsRevshareSummary_1**](ReportsRevshareApi.md#reportsRevshareSummary_1) | **GET** /reports/revshare/graph | 
[**reportsRevshareSummary_2**](ReportsRevshareApi.md#reportsRevshareSummary_2) | **GET** /reports/revshare/count | 
[**reportsRevshareSummary_3**](ReportsRevshareApi.md#reportsRevshareSummary_3) | **GET** /reports/revshare/totals | 
[**reportsRevshareSummary_4**](ReportsRevshareApi.md#reportsRevshareSummary_4) | **GET** /reports/revshare/export | 


# **reportsRevshareSummary**
> \Swagger\Client\Model\RevshareSummaryDatas reportsRevshareSummary()



Get summarized performance data for revshare offers for today, yesterday, last thirty days, this month and last month

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

$api_instance = new Swagger\Client\Api\ReportsRevshareApi();

try {
    $result = $api_instance->reportsRevshareSummary();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsRevshareApi->reportsRevshareSummary: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\RevshareSummaryDatas**](../Model/RevshareSummaryDatas.md)

### Authorization

[JWT](../../README.md#JWT), [API-KEY](../../README.md#API-KEY)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **reportsRevshareSummary_0**
> \Swagger\Client\Model\RevshareDatas reportsRevshareSummary_0($start, $end, $offers, $aliases, $graphScale, $graphMetric, $sort, $groupableColumns, $pagination)



Get summarized performance data for revshare offers

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

$api_instance = new Swagger\Client\Api\ReportsRevshareApi();
$start = "start_example"; // string | Start date (YYYY-MM-DD)
$end = "end_example"; // string | End date (YYYY-MM-DD)
$offers = array("offers_example"); // string[] | A JSON encoded array of offer IDs (eg [\"1\",\"2\"])
$aliases = array("aliases_example"); // string[] | A JSON encoded array of alias IDs (eg [\"1\",\"2\"])
$graphScale = "graphScale_example"; // string | The x-axis scale to use for graph data. Also defines the length of 'period' when grouping on 'period'.
$graphMetric = array("graphMetric_example"); // string[] | The y-axis metrics to use for graph data. A JSON encoded array of one or two strings (eg. [\"col1\",\"col2\"])
$sort = new \Swagger\Client\Model\Sort(); // \Swagger\Client\Model\Sort | A JSON encoded object with the column to sort on and the sort direction (eg. {\"col\":\"sales\",\"dir\":\"DESC\"})
$groupableColumns = array("groupableColumns_example"); // string[] | A JSON encoded array with the columns to group data on (eg. [\"period\",\"alias\"])
$pagination = new \Swagger\Client\Model\Pagination(); // \Swagger\Client\Model\Pagination | A JSON encoded array with the columns to group data on (eg. [\"period\",\"alias\"])

try {
    $result = $api_instance->reportsRevshareSummary_0($start, $end, $offers, $aliases, $graphScale, $graphMetric, $sort, $groupableColumns, $pagination);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsRevshareApi->reportsRevshareSummary_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **start** | **string**| Start date (YYYY-MM-DD) |
 **end** | **string**| End date (YYYY-MM-DD) |
 **offers** | [**string[]**](../Model/string.md)| A JSON encoded array of offer IDs (eg [\&quot;1\&quot;,\&quot;2\&quot;]) |
 **aliases** | [**string[]**](../Model/string.md)| A JSON encoded array of alias IDs (eg [\&quot;1\&quot;,\&quot;2\&quot;]) |
 **graphScale** | **string**| The x-axis scale to use for graph data. Also defines the length of &#39;period&#39; when grouping on &#39;period&#39;. |
 **graphMetric** | [**string[]**](../Model/string.md)| The y-axis metrics to use for graph data. A JSON encoded array of one or two strings (eg. [\&quot;col1\&quot;,\&quot;col2\&quot;]) |
 **sort** | [**\Swagger\Client\Model\Sort**](../Model/\Swagger\Client\Model\Sort.md)| A JSON encoded object with the column to sort on and the sort direction (eg. {\&quot;col\&quot;:\&quot;sales\&quot;,\&quot;dir\&quot;:\&quot;DESC\&quot;}) |
 **groupableColumns** | [**string[]**](../Model/string.md)| A JSON encoded array with the columns to group data on (eg. [\&quot;period\&quot;,\&quot;alias\&quot;]) |
 **pagination** | [**\Swagger\Client\Model\Pagination**](../Model/\Swagger\Client\Model\Pagination.md)| A JSON encoded array with the columns to group data on (eg. [\&quot;period\&quot;,\&quot;alias\&quot;]) |

### Return type

[**\Swagger\Client\Model\RevshareDatas**](../Model/RevshareDatas.md)

### Authorization

[JWT](../../README.md#JWT), [API-KEY](../../README.md#API-KEY)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **reportsRevshareSummary_1**
> \Swagger\Client\Model\RevshareGraphDatas reportsRevshareSummary_1($start, $end, $offers, $aliases, $graphScale, $graphMetric, $sort, $groupableColumns, $pagination)



Get summarized performance data for revshare offers formatted for use in a graph

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

$api_instance = new Swagger\Client\Api\ReportsRevshareApi();
$start = "start_example"; // string | Start date (YYYY-MM-DD)
$end = "end_example"; // string | End date (YYYY-MM-DD)
$offers = array("offers_example"); // string[] | A JSON encoded array of offer IDs (eg [\"1\",\"2\"])
$aliases = array("aliases_example"); // string[] | A JSON encoded array of alias IDs (eg [\"1\",\"2\"])
$graphScale = "graphScale_example"; // string | The x-axis scale to use for graph data. Also defines the length of 'period' when grouping on 'period'.
$graphMetric = array("graphMetric_example"); // string[] | The y-axis metrics to use for graph data. A JSON encoded array of one or two strings (eg. [\"col1\",\"col2\"])
$sort = new \Swagger\Client\Model\Sort(); // \Swagger\Client\Model\Sort | A JSON encoded object with the column to sort on and the sort direction (eg. {\"col\":\"sales\",\"dir\":\"DESC\"})
$groupableColumns = array("groupableColumns_example"); // string[] | A JSON encoded array with the columns to group data on (eg. [\"period\",\"alias\"])
$pagination = new \Swagger\Client\Model\Pagination(); // \Swagger\Client\Model\Pagination | A JSON encoded array with the columns to group data on (eg. [\"period\",\"alias\"])

try {
    $result = $api_instance->reportsRevshareSummary_1($start, $end, $offers, $aliases, $graphScale, $graphMetric, $sort, $groupableColumns, $pagination);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsRevshareApi->reportsRevshareSummary_1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **start** | **string**| Start date (YYYY-MM-DD) |
 **end** | **string**| End date (YYYY-MM-DD) |
 **offers** | [**string[]**](../Model/string.md)| A JSON encoded array of offer IDs (eg [\&quot;1\&quot;,\&quot;2\&quot;]) |
 **aliases** | [**string[]**](../Model/string.md)| A JSON encoded array of alias IDs (eg [\&quot;1\&quot;,\&quot;2\&quot;]) |
 **graphScale** | **string**| The x-axis scale to use for graph data. Also defines the length of &#39;period&#39; when grouping on &#39;period&#39;. |
 **graphMetric** | [**string[]**](../Model/string.md)| The y-axis metrics to use for graph data. A JSON encoded array of one or two strings (eg. [\&quot;col1\&quot;,\&quot;col2\&quot;]) |
 **sort** | [**\Swagger\Client\Model\Sort**](../Model/\Swagger\Client\Model\Sort.md)| A JSON encoded object with the column to sort on and the sort direction (eg. {\&quot;col\&quot;:\&quot;sales\&quot;,\&quot;dir\&quot;:\&quot;DESC\&quot;}) |
 **groupableColumns** | [**string[]**](../Model/string.md)| A JSON encoded array with the columns to group data on (eg. [\&quot;period\&quot;,\&quot;alias\&quot;]) |
 **pagination** | [**\Swagger\Client\Model\Pagination**](../Model/\Swagger\Client\Model\Pagination.md)| A JSON encoded array with the columns to group data on (eg. [\&quot;period\&quot;,\&quot;alias\&quot;]) |

### Return type

[**\Swagger\Client\Model\RevshareGraphDatas**](../Model/RevshareGraphDatas.md)

### Authorization

[JWT](../../README.md#JWT), [API-KEY](../../README.md#API-KEY)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **reportsRevshareSummary_2**
> \Swagger\Client\Model\RevshareCountData reportsRevshareSummary_2($start, $end, $offers, $aliases, $graphScale, $graphMetric, $sort, $groupableColumns, $pagination)



Get the total number of rows in the report on performance data for revshare offers

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

$api_instance = new Swagger\Client\Api\ReportsRevshareApi();
$start = "start_example"; // string | Start date (YYYY-MM-DD)
$end = "end_example"; // string | End date (YYYY-MM-DD)
$offers = array("offers_example"); // string[] | A JSON encoded array of offer IDs (eg [\"1\",\"2\"])
$aliases = array("aliases_example"); // string[] | A JSON encoded array of alias IDs (eg [\"1\",\"2\"])
$graphScale = "graphScale_example"; // string | The x-axis scale to use for graph data. Also defines the length of 'period' when grouping on 'period'.
$graphMetric = array("graphMetric_example"); // string[] | The y-axis metrics to use for graph data. A JSON encoded array of one or two strings (eg. [\"col1\",\"col2\"])
$sort = new \Swagger\Client\Model\Sort(); // \Swagger\Client\Model\Sort | A JSON encoded object with the column to sort on and the sort direction (eg. {\"col\":\"sales\",\"dir\":\"DESC\"})
$groupableColumns = array("groupableColumns_example"); // string[] | A JSON encoded array with the columns to group data on (eg. [\"period\",\"alias\"])
$pagination = new \Swagger\Client\Model\Pagination(); // \Swagger\Client\Model\Pagination | A JSON encoded array with the columns to group data on (eg. [\"period\",\"alias\"])

try {
    $result = $api_instance->reportsRevshareSummary_2($start, $end, $offers, $aliases, $graphScale, $graphMetric, $sort, $groupableColumns, $pagination);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsRevshareApi->reportsRevshareSummary_2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **start** | **string**| Start date (YYYY-MM-DD) |
 **end** | **string**| End date (YYYY-MM-DD) |
 **offers** | [**string[]**](../Model/string.md)| A JSON encoded array of offer IDs (eg [\&quot;1\&quot;,\&quot;2\&quot;]) |
 **aliases** | [**string[]**](../Model/string.md)| A JSON encoded array of alias IDs (eg [\&quot;1\&quot;,\&quot;2\&quot;]) |
 **graphScale** | **string**| The x-axis scale to use for graph data. Also defines the length of &#39;period&#39; when grouping on &#39;period&#39;. |
 **graphMetric** | [**string[]**](../Model/string.md)| The y-axis metrics to use for graph data. A JSON encoded array of one or two strings (eg. [\&quot;col1\&quot;,\&quot;col2\&quot;]) |
 **sort** | [**\Swagger\Client\Model\Sort**](../Model/\Swagger\Client\Model\Sort.md)| A JSON encoded object with the column to sort on and the sort direction (eg. {\&quot;col\&quot;:\&quot;sales\&quot;,\&quot;dir\&quot;:\&quot;DESC\&quot;}) |
 **groupableColumns** | [**string[]**](../Model/string.md)| A JSON encoded array with the columns to group data on (eg. [\&quot;period\&quot;,\&quot;alias\&quot;]) |
 **pagination** | [**\Swagger\Client\Model\Pagination**](../Model/\Swagger\Client\Model\Pagination.md)| A JSON encoded array with the columns to group data on (eg. [\&quot;period\&quot;,\&quot;alias\&quot;]) |

### Return type

[**\Swagger\Client\Model\RevshareCountData**](../Model/RevshareCountData.md)

### Authorization

[JWT](../../README.md#JWT), [API-KEY](../../README.md#API-KEY)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **reportsRevshareSummary_3**
> \Swagger\Client\Model\RevshareTotalsData reportsRevshareSummary_3($start, $end, $offers, $aliases, $graphScale, $graphMetric, $sort, $groupableColumns, $pagination)



Get summarized totals of performance data for revshare offers

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

$api_instance = new Swagger\Client\Api\ReportsRevshareApi();
$start = "start_example"; // string | Start date (YYYY-MM-DD)
$end = "end_example"; // string | End date (YYYY-MM-DD)
$offers = array("offers_example"); // string[] | A JSON encoded array of offer IDs (eg [\"1\",\"2\"])
$aliases = array("aliases_example"); // string[] | A JSON encoded array of alias IDs (eg [\"1\",\"2\"])
$graphScale = "graphScale_example"; // string | The x-axis scale to use for graph data. Also defines the length of 'period' when grouping on 'period'.
$graphMetric = array("graphMetric_example"); // string[] | The y-axis metrics to use for graph data. A JSON encoded array of one or two strings (eg. [\"col1\",\"col2\"])
$sort = new \Swagger\Client\Model\Sort(); // \Swagger\Client\Model\Sort | A JSON encoded object with the column to sort on and the sort direction (eg. {\"col\":\"sales\",\"dir\":\"DESC\"})
$groupableColumns = array("groupableColumns_example"); // string[] | A JSON encoded array with the columns to group data on (eg. [\"period\",\"alias\"])
$pagination = new \Swagger\Client\Model\Pagination(); // \Swagger\Client\Model\Pagination | A JSON encoded array with the columns to group data on (eg. [\"period\",\"alias\"])

try {
    $result = $api_instance->reportsRevshareSummary_3($start, $end, $offers, $aliases, $graphScale, $graphMetric, $sort, $groupableColumns, $pagination);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsRevshareApi->reportsRevshareSummary_3: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **start** | **string**| Start date (YYYY-MM-DD) |
 **end** | **string**| End date (YYYY-MM-DD) |
 **offers** | [**string[]**](../Model/string.md)| A JSON encoded array of offer IDs (eg [\&quot;1\&quot;,\&quot;2\&quot;]) |
 **aliases** | [**string[]**](../Model/string.md)| A JSON encoded array of alias IDs (eg [\&quot;1\&quot;,\&quot;2\&quot;]) |
 **graphScale** | **string**| The x-axis scale to use for graph data. Also defines the length of &#39;period&#39; when grouping on &#39;period&#39;. |
 **graphMetric** | [**string[]**](../Model/string.md)| The y-axis metrics to use for graph data. A JSON encoded array of one or two strings (eg. [\&quot;col1\&quot;,\&quot;col2\&quot;]) |
 **sort** | [**\Swagger\Client\Model\Sort**](../Model/\Swagger\Client\Model\Sort.md)| A JSON encoded object with the column to sort on and the sort direction (eg. {\&quot;col\&quot;:\&quot;sales\&quot;,\&quot;dir\&quot;:\&quot;DESC\&quot;}) |
 **groupableColumns** | [**string[]**](../Model/string.md)| A JSON encoded array with the columns to group data on (eg. [\&quot;period\&quot;,\&quot;alias\&quot;]) |
 **pagination** | [**\Swagger\Client\Model\Pagination**](../Model/\Swagger\Client\Model\Pagination.md)| A JSON encoded array with the columns to group data on (eg. [\&quot;period\&quot;,\&quot;alias\&quot;]) |

### Return type

[**\Swagger\Client\Model\RevshareTotalsData**](../Model/RevshareTotalsData.md)

### Authorization

[JWT](../../README.md#JWT), [API-KEY](../../README.md#API-KEY)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **reportsRevshareSummary_4**
> \Swagger\Client\Model\RevshareExportData reportsRevshareSummary_4($start, $end, $offers, $aliases, $graphScale, $graphMetric, $sort, $groupableColumns, $pagination)



Get a link to download a report of summarized performance data for revshare offers

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

$api_instance = new Swagger\Client\Api\ReportsRevshareApi();
$start = "start_example"; // string | Start date (YYYY-MM-DD)
$end = "end_example"; // string | End date (YYYY-MM-DD)
$offers = array("offers_example"); // string[] | A JSON encoded array of offer IDs (eg [\"1\",\"2\"])
$aliases = array("aliases_example"); // string[] | A JSON encoded array of alias IDs (eg [\"1\",\"2\"])
$graphScale = "graphScale_example"; // string | The x-axis scale to use for graph data. Also defines the length of 'period' when grouping on 'period'.
$graphMetric = array("graphMetric_example"); // string[] | The y-axis metrics to use for graph data. A JSON encoded array of one or two strings (eg. [\"col1\",\"col2\"])
$sort = new \Swagger\Client\Model\Sort(); // \Swagger\Client\Model\Sort | A JSON encoded object with the column to sort on and the sort direction (eg. {\"col\":\"sales\",\"dir\":\"DESC\"})
$groupableColumns = array("groupableColumns_example"); // string[] | A JSON encoded array with the columns to group data on (eg. [\"period\",\"alias\"])
$pagination = new \Swagger\Client\Model\Pagination(); // \Swagger\Client\Model\Pagination | A JSON encoded array with the columns to group data on (eg. [\"period\",\"alias\"])

try {
    $result = $api_instance->reportsRevshareSummary_4($start, $end, $offers, $aliases, $graphScale, $graphMetric, $sort, $groupableColumns, $pagination);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsRevshareApi->reportsRevshareSummary_4: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **start** | **string**| Start date (YYYY-MM-DD) |
 **end** | **string**| End date (YYYY-MM-DD) |
 **offers** | [**string[]**](../Model/string.md)| A JSON encoded array of offer IDs (eg [\&quot;1\&quot;,\&quot;2\&quot;]) |
 **aliases** | [**string[]**](../Model/string.md)| A JSON encoded array of alias IDs (eg [\&quot;1\&quot;,\&quot;2\&quot;]) |
 **graphScale** | **string**| The x-axis scale to use for graph data. Also defines the length of &#39;period&#39; when grouping on &#39;period&#39;. |
 **graphMetric** | [**string[]**](../Model/string.md)| The y-axis metrics to use for graph data. A JSON encoded array of one or two strings (eg. [\&quot;col1\&quot;,\&quot;col2\&quot;]) |
 **sort** | [**\Swagger\Client\Model\Sort**](../Model/\Swagger\Client\Model\Sort.md)| A JSON encoded object with the column to sort on and the sort direction (eg. {\&quot;col\&quot;:\&quot;sales\&quot;,\&quot;dir\&quot;:\&quot;DESC\&quot;}) |
 **groupableColumns** | [**string[]**](../Model/string.md)| A JSON encoded array with the columns to group data on (eg. [\&quot;period\&quot;,\&quot;alias\&quot;]) |
 **pagination** | [**\Swagger\Client\Model\Pagination**](../Model/\Swagger\Client\Model\Pagination.md)| A JSON encoded array with the columns to group data on (eg. [\&quot;period\&quot;,\&quot;alias\&quot;]) |

### Return type

[**\Swagger\Client\Model\RevshareExportData**](../Model/RevshareExportData.md)

### Authorization

[JWT](../../README.md#JWT), [API-KEY](../../README.md#API-KEY)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

