# Swagger\Client\ReportsPerformanceApi

All URIs are relative to *https://localhost/rest/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**reportsPerformance**](ReportsPerformanceApi.md#reportsPerformance) | **GET** /reports/safecartcampaign | 
[**reportsPerformanceCount**](ReportsPerformanceApi.md#reportsPerformanceCount) | **GET** /reports/safecartcampaign/count | 
[**reportsPerformanceExport**](ReportsPerformanceApi.md#reportsPerformanceExport) | **GET** /reports/safecartcampaign/export | 
[**reportsPerformanceGraph**](ReportsPerformanceApi.md#reportsPerformanceGraph) | **GET** /reports/safecartcampaign/graph | 
[**reportsPerformanceSummary**](ReportsPerformanceApi.md#reportsPerformanceSummary) | **GET** /reports/safecartcampaign/summary | 
[**reportsPerformanceTotals**](ReportsPerformanceApi.md#reportsPerformanceTotals) | **GET** /reports/safecartcampaign/totals | 


# **reportsPerformance**
> \Swagger\Client\Model\SafecartCampaignDatas reportsPerformance($start, $end, $offerTypes, $categories, $aliases, $graphScale, $graphMetric, $sort, $groupableColumns, $pagination)



Get summarized performance data for revshare and cpa offers

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

$api_instance = new Swagger\Client\Api\ReportsPerformanceApi();
$start = "start_example"; // string | Start date (YYYY-MM-DD)
$end = "end_example"; // string | End date (YYYY-MM-DD)
$offerTypes = array("offerTypes_example"); // string[] | A JSON encoded array of offer types (eg [\"download\",\"lead\"])
$categories = array("categories_example"); // string[] | A JSON encoded array of offer categories (eg [\"antimalware\",\"drivers\"])
$aliases = array("aliases_example"); // string[] | A JSON encoded array of alias IDs (eg [\"1\",\"2\"])
$graphScale = "graphScale_example"; // string | The x-axis scale to use for graph data. Also defines the length of 'period' when grouping on 'period'.
$graphMetric = array("graphMetric_example"); // string[] | The y-axis metrics to use for graph data. A JSON encoded array of one or two strings (eg. [\"col1\",\"col2\"])
$sort = new \Swagger\Client\Model\Sort1(); // \Swagger\Client\Model\Sort1 | A JSON encoded object with the column to sort on and the sort direction (eg. {\"col\":\"sales\",\"dir\":\"DESC\"})
$groupableColumns = array("groupableColumns_example"); // string[] | A JSON encoded array with the columns to group data on (eg. [\"period\",\"alias\"])
$pagination = new \Swagger\Client\Model\Pagination(); // \Swagger\Client\Model\Pagination | A JSON encoded array with the columns to group data on (eg. [\"period\",\"alias\"])

try {
    $result = $api_instance->reportsPerformance($start, $end, $offerTypes, $categories, $aliases, $graphScale, $graphMetric, $sort, $groupableColumns, $pagination);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsPerformanceApi->reportsPerformance: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **start** | **string**| Start date (YYYY-MM-DD) |
 **end** | **string**| End date (YYYY-MM-DD) |
 **offerTypes** | [**string[]**](../Model/string.md)| A JSON encoded array of offer types (eg [\&quot;download\&quot;,\&quot;lead\&quot;]) |
 **categories** | [**string[]**](../Model/string.md)| A JSON encoded array of offer categories (eg [\&quot;antimalware\&quot;,\&quot;drivers\&quot;]) |
 **aliases** | [**string[]**](../Model/string.md)| A JSON encoded array of alias IDs (eg [\&quot;1\&quot;,\&quot;2\&quot;]) |
 **graphScale** | **string**| The x-axis scale to use for graph data. Also defines the length of &#39;period&#39; when grouping on &#39;period&#39;. |
 **graphMetric** | [**string[]**](../Model/string.md)| The y-axis metrics to use for graph data. A JSON encoded array of one or two strings (eg. [\&quot;col1\&quot;,\&quot;col2\&quot;]) |
 **sort** | [**\Swagger\Client\Model\Sort1**](../Model/\Swagger\Client\Model\Sort1.md)| A JSON encoded object with the column to sort on and the sort direction (eg. {\&quot;col\&quot;:\&quot;sales\&quot;,\&quot;dir\&quot;:\&quot;DESC\&quot;}) |
 **groupableColumns** | [**string[]**](../Model/string.md)| A JSON encoded array with the columns to group data on (eg. [\&quot;period\&quot;,\&quot;alias\&quot;]) |
 **pagination** | [**\Swagger\Client\Model\Pagination**](../Model/\Swagger\Client\Model\Pagination.md)| A JSON encoded array with the columns to group data on (eg. [\&quot;period\&quot;,\&quot;alias\&quot;]) |

### Return type

[**\Swagger\Client\Model\SafecartCampaignDatas**](../Model/SafecartCampaignDatas.md)

### Authorization

[JWT](../../README.md#JWT), [API-KEY](../../README.md#API-KEY)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **reportsPerformanceCount**
> \Swagger\Client\Model\SafecartCampaignCountData reportsPerformanceCount($start, $end, $offerTypes, $categories, $aliases, $graphScale, $graphMetric, $sort, $groupableColumns, $pagination)



Get the total number of rows in the report on performance data for revshare and cpa offers

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

$api_instance = new Swagger\Client\Api\ReportsPerformanceApi();
$start = "start_example"; // string | Start date (YYYY-MM-DD)
$end = "end_example"; // string | End date (YYYY-MM-DD)
$offerTypes = array("offerTypes_example"); // string[] | A JSON encoded array of offer types (eg [\"download\",\"lead\"])
$categories = array("categories_example"); // string[] | A JSON encoded array of offer categories (eg [\"antimalware\",\"drivers\"])
$aliases = array("aliases_example"); // string[] | A JSON encoded array of alias IDs (eg [\"1\",\"2\"])
$graphScale = "graphScale_example"; // string | The x-axis scale to use for graph data. Also defines the length of 'period' when grouping on 'period'.
$graphMetric = array("graphMetric_example"); // string[] | The y-axis metrics to use for graph data. A JSON encoded array of one or two strings (eg. [\"col1\",\"col2\"])
$sort = new \Swagger\Client\Model\Sort1(); // \Swagger\Client\Model\Sort1 | A JSON encoded object with the column to sort on and the sort direction (eg. {\"col\":\"sales\",\"dir\":\"DESC\"})
$groupableColumns = array("groupableColumns_example"); // string[] | A JSON encoded array with the columns to group data on (eg. [\"period\",\"alias\"])
$pagination = new \Swagger\Client\Model\Pagination(); // \Swagger\Client\Model\Pagination | A JSON encoded array with the columns to group data on (eg. [\"period\",\"alias\"])

try {
    $result = $api_instance->reportsPerformanceCount($start, $end, $offerTypes, $categories, $aliases, $graphScale, $graphMetric, $sort, $groupableColumns, $pagination);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsPerformanceApi->reportsPerformanceCount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **start** | **string**| Start date (YYYY-MM-DD) |
 **end** | **string**| End date (YYYY-MM-DD) |
 **offerTypes** | [**string[]**](../Model/string.md)| A JSON encoded array of offer types (eg [\&quot;download\&quot;,\&quot;lead\&quot;]) |
 **categories** | [**string[]**](../Model/string.md)| A JSON encoded array of offer categories (eg [\&quot;antimalware\&quot;,\&quot;drivers\&quot;]) |
 **aliases** | [**string[]**](../Model/string.md)| A JSON encoded array of alias IDs (eg [\&quot;1\&quot;,\&quot;2\&quot;]) |
 **graphScale** | **string**| The x-axis scale to use for graph data. Also defines the length of &#39;period&#39; when grouping on &#39;period&#39;. |
 **graphMetric** | [**string[]**](../Model/string.md)| The y-axis metrics to use for graph data. A JSON encoded array of one or two strings (eg. [\&quot;col1\&quot;,\&quot;col2\&quot;]) |
 **sort** | [**\Swagger\Client\Model\Sort1**](../Model/\Swagger\Client\Model\Sort1.md)| A JSON encoded object with the column to sort on and the sort direction (eg. {\&quot;col\&quot;:\&quot;sales\&quot;,\&quot;dir\&quot;:\&quot;DESC\&quot;}) |
 **groupableColumns** | [**string[]**](../Model/string.md)| A JSON encoded array with the columns to group data on (eg. [\&quot;period\&quot;,\&quot;alias\&quot;]) |
 **pagination** | [**\Swagger\Client\Model\Pagination**](../Model/\Swagger\Client\Model\Pagination.md)| A JSON encoded array with the columns to group data on (eg. [\&quot;period\&quot;,\&quot;alias\&quot;]) |

### Return type

[**\Swagger\Client\Model\SafecartCampaignCountData**](../Model/SafecartCampaignCountData.md)

### Authorization

[JWT](../../README.md#JWT), [API-KEY](../../README.md#API-KEY)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **reportsPerformanceExport**
> \Swagger\Client\Model\SafecartCampaignExportData reportsPerformanceExport($start, $end, $offerTypes, $categories, $aliases, $graphScale, $graphMetric, $sort, $groupableColumns, $pagination)



Get a link to download a report of summarized performance data for revshare and cpa offers

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

$api_instance = new Swagger\Client\Api\ReportsPerformanceApi();
$start = "start_example"; // string | Start date (YYYY-MM-DD)
$end = "end_example"; // string | End date (YYYY-MM-DD)
$offerTypes = array("offerTypes_example"); // string[] | A JSON encoded array of offer types (eg [\"download\",\"lead\"])
$categories = array("categories_example"); // string[] | A JSON encoded array of offer categories (eg [\"antimalware\",\"drivers\"])
$aliases = array("aliases_example"); // string[] | A JSON encoded array of alias IDs (eg [\"1\",\"2\"])
$graphScale = "graphScale_example"; // string | The x-axis scale to use for graph data. Also defines the length of 'period' when grouping on 'period'.
$graphMetric = array("graphMetric_example"); // string[] | The y-axis metrics to use for graph data. A JSON encoded array of one or two strings (eg. [\"col1\",\"col2\"])
$sort = new \Swagger\Client\Model\Sort1(); // \Swagger\Client\Model\Sort1 | A JSON encoded object with the column to sort on and the sort direction (eg. {\"col\":\"sales\",\"dir\":\"DESC\"})
$groupableColumns = array("groupableColumns_example"); // string[] | A JSON encoded array with the columns to group data on (eg. [\"period\",\"alias\"])
$pagination = new \Swagger\Client\Model\Pagination(); // \Swagger\Client\Model\Pagination | A JSON encoded array with the columns to group data on (eg. [\"period\",\"alias\"])

try {
    $result = $api_instance->reportsPerformanceExport($start, $end, $offerTypes, $categories, $aliases, $graphScale, $graphMetric, $sort, $groupableColumns, $pagination);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsPerformanceApi->reportsPerformanceExport: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **start** | **string**| Start date (YYYY-MM-DD) |
 **end** | **string**| End date (YYYY-MM-DD) |
 **offerTypes** | [**string[]**](../Model/string.md)| A JSON encoded array of offer types (eg [\&quot;download\&quot;,\&quot;lead\&quot;]) |
 **categories** | [**string[]**](../Model/string.md)| A JSON encoded array of offer categories (eg [\&quot;antimalware\&quot;,\&quot;drivers\&quot;]) |
 **aliases** | [**string[]**](../Model/string.md)| A JSON encoded array of alias IDs (eg [\&quot;1\&quot;,\&quot;2\&quot;]) |
 **graphScale** | **string**| The x-axis scale to use for graph data. Also defines the length of &#39;period&#39; when grouping on &#39;period&#39;. |
 **graphMetric** | [**string[]**](../Model/string.md)| The y-axis metrics to use for graph data. A JSON encoded array of one or two strings (eg. [\&quot;col1\&quot;,\&quot;col2\&quot;]) |
 **sort** | [**\Swagger\Client\Model\Sort1**](../Model/\Swagger\Client\Model\Sort1.md)| A JSON encoded object with the column to sort on and the sort direction (eg. {\&quot;col\&quot;:\&quot;sales\&quot;,\&quot;dir\&quot;:\&quot;DESC\&quot;}) |
 **groupableColumns** | [**string[]**](../Model/string.md)| A JSON encoded array with the columns to group data on (eg. [\&quot;period\&quot;,\&quot;alias\&quot;]) |
 **pagination** | [**\Swagger\Client\Model\Pagination**](../Model/\Swagger\Client\Model\Pagination.md)| A JSON encoded array with the columns to group data on (eg. [\&quot;period\&quot;,\&quot;alias\&quot;]) |

### Return type

[**\Swagger\Client\Model\SafecartCampaignExportData**](../Model/SafecartCampaignExportData.md)

### Authorization

[JWT](../../README.md#JWT), [API-KEY](../../README.md#API-KEY)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **reportsPerformanceGraph**
> \Swagger\Client\Model\SafecartCampaignGraphDatas reportsPerformanceGraph($start, $end, $offerTypes, $categories, $aliases, $graphScale, $graphMetric, $sort, $groupableColumns, $pagination)



Get summarized performance data for revshare and cpa offers formatted for use in a graph

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

$api_instance = new Swagger\Client\Api\ReportsPerformanceApi();
$start = "start_example"; // string | Start date (YYYY-MM-DD)
$end = "end_example"; // string | End date (YYYY-MM-DD)
$offerTypes = array("offerTypes_example"); // string[] | A JSON encoded array of offer types (eg [\"download\",\"lead\"])
$categories = array("categories_example"); // string[] | A JSON encoded array of offer categories (eg [\"antimalware\",\"drivers\"])
$aliases = array("aliases_example"); // string[] | A JSON encoded array of alias IDs (eg [\"1\",\"2\"])
$graphScale = "graphScale_example"; // string | The x-axis scale to use for graph data. Also defines the length of 'period' when grouping on 'period'.
$graphMetric = array("graphMetric_example"); // string[] | The y-axis metrics to use for graph data. A JSON encoded array of one or two strings (eg. [\"col1\",\"col2\"])
$sort = new \Swagger\Client\Model\Sort1(); // \Swagger\Client\Model\Sort1 | A JSON encoded object with the column to sort on and the sort direction (eg. {\"col\":\"sales\",\"dir\":\"DESC\"})
$groupableColumns = array("groupableColumns_example"); // string[] | A JSON encoded array with the columns to group data on (eg. [\"period\",\"alias\"])
$pagination = new \Swagger\Client\Model\Pagination(); // \Swagger\Client\Model\Pagination | A JSON encoded array with the columns to group data on (eg. [\"period\",\"alias\"])

try {
    $result = $api_instance->reportsPerformanceGraph($start, $end, $offerTypes, $categories, $aliases, $graphScale, $graphMetric, $sort, $groupableColumns, $pagination);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsPerformanceApi->reportsPerformanceGraph: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **start** | **string**| Start date (YYYY-MM-DD) |
 **end** | **string**| End date (YYYY-MM-DD) |
 **offerTypes** | [**string[]**](../Model/string.md)| A JSON encoded array of offer types (eg [\&quot;download\&quot;,\&quot;lead\&quot;]) |
 **categories** | [**string[]**](../Model/string.md)| A JSON encoded array of offer categories (eg [\&quot;antimalware\&quot;,\&quot;drivers\&quot;]) |
 **aliases** | [**string[]**](../Model/string.md)| A JSON encoded array of alias IDs (eg [\&quot;1\&quot;,\&quot;2\&quot;]) |
 **graphScale** | **string**| The x-axis scale to use for graph data. Also defines the length of &#39;period&#39; when grouping on &#39;period&#39;. |
 **graphMetric** | [**string[]**](../Model/string.md)| The y-axis metrics to use for graph data. A JSON encoded array of one or two strings (eg. [\&quot;col1\&quot;,\&quot;col2\&quot;]) |
 **sort** | [**\Swagger\Client\Model\Sort1**](../Model/\Swagger\Client\Model\Sort1.md)| A JSON encoded object with the column to sort on and the sort direction (eg. {\&quot;col\&quot;:\&quot;sales\&quot;,\&quot;dir\&quot;:\&quot;DESC\&quot;}) |
 **groupableColumns** | [**string[]**](../Model/string.md)| A JSON encoded array with the columns to group data on (eg. [\&quot;period\&quot;,\&quot;alias\&quot;]) |
 **pagination** | [**\Swagger\Client\Model\Pagination**](../Model/\Swagger\Client\Model\Pagination.md)| A JSON encoded array with the columns to group data on (eg. [\&quot;period\&quot;,\&quot;alias\&quot;]) |

### Return type

[**\Swagger\Client\Model\SafecartCampaignGraphDatas**](../Model/SafecartCampaignGraphDatas.md)

### Authorization

[JWT](../../README.md#JWT), [API-KEY](../../README.md#API-KEY)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **reportsPerformanceSummary**
> \Swagger\Client\Model\SafecartCampaignSummaryDatas reportsPerformanceSummary($startDate, $endDate, $limit)



Get summarized performance data for theseven revshare and cpa offers that have performed best over the last seven days

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

$api_instance = new Swagger\Client\Api\ReportsPerformanceApi();
$startDate = "startDate_example"; // string | Start date (YYYY-MM-DD)
$endDate = "endDate_example"; // string | End date (YYYY-MM-DD)
$limit = 3.4; // float | The number of results to return

try {
    $result = $api_instance->reportsPerformanceSummary($startDate, $endDate, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsPerformanceApi->reportsPerformanceSummary: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **startDate** | **string**| Start date (YYYY-MM-DD) |
 **endDate** | **string**| End date (YYYY-MM-DD) |
 **limit** | **float**| The number of results to return | [optional]

### Return type

[**\Swagger\Client\Model\SafecartCampaignSummaryDatas**](../Model/SafecartCampaignSummaryDatas.md)

### Authorization

[JWT](../../README.md#JWT), [API-KEY](../../README.md#API-KEY)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **reportsPerformanceTotals**
> \Swagger\Client\Model\SafecartCampaignTotalsData reportsPerformanceTotals($start, $end, $offerTypes, $categories, $aliases, $graphScale, $graphMetric, $sort, $groupableColumns, $pagination)



Get summarized totals of performance data for revshare and cpa offers

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

$api_instance = new Swagger\Client\Api\ReportsPerformanceApi();
$start = "start_example"; // string | Start date (YYYY-MM-DD)
$end = "end_example"; // string | End date (YYYY-MM-DD)
$offerTypes = array("offerTypes_example"); // string[] | A JSON encoded array of offer types (eg [\"download\",\"lead\"])
$categories = array("categories_example"); // string[] | A JSON encoded array of offer categories (eg [\"antimalware\",\"drivers\"])
$aliases = array("aliases_example"); // string[] | A JSON encoded array of alias IDs (eg [\"1\",\"2\"])
$graphScale = "graphScale_example"; // string | The x-axis scale to use for graph data. Also defines the length of 'period' when grouping on 'period'.
$graphMetric = array("graphMetric_example"); // string[] | The y-axis metrics to use for graph data. A JSON encoded array of one or two strings (eg. [\"col1\",\"col2\"])
$sort = new \Swagger\Client\Model\Sort1(); // \Swagger\Client\Model\Sort1 | A JSON encoded object with the column to sort on and the sort direction (eg. {\"col\":\"sales\",\"dir\":\"DESC\"})
$groupableColumns = array("groupableColumns_example"); // string[] | A JSON encoded array with the columns to group data on (eg. [\"period\",\"alias\"])
$pagination = new \Swagger\Client\Model\Pagination(); // \Swagger\Client\Model\Pagination | A JSON encoded array with the columns to group data on (eg. [\"period\",\"alias\"])

try {
    $result = $api_instance->reportsPerformanceTotals($start, $end, $offerTypes, $categories, $aliases, $graphScale, $graphMetric, $sort, $groupableColumns, $pagination);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsPerformanceApi->reportsPerformanceTotals: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **start** | **string**| Start date (YYYY-MM-DD) |
 **end** | **string**| End date (YYYY-MM-DD) |
 **offerTypes** | [**string[]**](../Model/string.md)| A JSON encoded array of offer types (eg [\&quot;download\&quot;,\&quot;lead\&quot;]) |
 **categories** | [**string[]**](../Model/string.md)| A JSON encoded array of offer categories (eg [\&quot;antimalware\&quot;,\&quot;drivers\&quot;]) |
 **aliases** | [**string[]**](../Model/string.md)| A JSON encoded array of alias IDs (eg [\&quot;1\&quot;,\&quot;2\&quot;]) |
 **graphScale** | **string**| The x-axis scale to use for graph data. Also defines the length of &#39;period&#39; when grouping on &#39;period&#39;. |
 **graphMetric** | [**string[]**](../Model/string.md)| The y-axis metrics to use for graph data. A JSON encoded array of one or two strings (eg. [\&quot;col1\&quot;,\&quot;col2\&quot;]) |
 **sort** | [**\Swagger\Client\Model\Sort1**](../Model/\Swagger\Client\Model\Sort1.md)| A JSON encoded object with the column to sort on and the sort direction (eg. {\&quot;col\&quot;:\&quot;sales\&quot;,\&quot;dir\&quot;:\&quot;DESC\&quot;}) |
 **groupableColumns** | [**string[]**](../Model/string.md)| A JSON encoded array with the columns to group data on (eg. [\&quot;period\&quot;,\&quot;alias\&quot;]) |
 **pagination** | [**\Swagger\Client\Model\Pagination**](../Model/\Swagger\Client\Model\Pagination.md)| A JSON encoded array with the columns to group data on (eg. [\&quot;period\&quot;,\&quot;alias\&quot;]) |

### Return type

[**\Swagger\Client\Model\SafecartCampaignTotalsData**](../Model/SafecartCampaignTotalsData.md)

### Authorization

[JWT](../../README.md#JWT), [API-KEY](../../README.md#API-KEY)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

