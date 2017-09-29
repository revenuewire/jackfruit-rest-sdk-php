# Swagger\Client\ReportsPaymentsApi

All URIs are relative to *https://localhost/rest/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**reportsPayments**](ReportsPaymentsApi.md#reportsPayments) | **GET** /reports/payments | 
[**reportsPaymentsCount**](ReportsPaymentsApi.md#reportsPaymentsCount) | **GET** /reports/payments/count | 
[**reportsPaymentsExport**](ReportsPaymentsApi.md#reportsPaymentsExport) | **GET** /reports/payments/export | 
[**reportsPaymentsGraph**](ReportsPaymentsApi.md#reportsPaymentsGraph) | **GET** /reports/payments/graph | 
[**reportsRevshareSummary**](ReportsPaymentsApi.md#reportsRevshareSummary) | **GET** /reports/payments/summary | 


# **reportsPayments**
> \Swagger\Client\Model\PaymentsDatas reportsPayments($pagination, $sort)



Get payments information

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

$api_instance = new Swagger\Client\Api\ReportsPaymentsApi();
$pagination = new \Swagger\Client\Model\Pagination(); // \Swagger\Client\Model\Pagination | A JSON encoded array with the columns to group data on (eg. [\"period\",\"alias\"])
$sort = new \Swagger\Client\Model\Sort2(); // \Swagger\Client\Model\Sort2 | A JSON encoded object with the column to sort on and the sort direction (eg. {\"col\":\"id\",\"dir\":\"DESC\"})

try {
    $result = $api_instance->reportsPayments($pagination, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsPaymentsApi->reportsPayments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pagination** | [**\Swagger\Client\Model\Pagination**](../Model/\Swagger\Client\Model\Pagination.md)| A JSON encoded array with the columns to group data on (eg. [\&quot;period\&quot;,\&quot;alias\&quot;]) |
 **sort** | [**\Swagger\Client\Model\Sort2**](../Model/\Swagger\Client\Model\Sort2.md)| A JSON encoded object with the column to sort on and the sort direction (eg. {\&quot;col\&quot;:\&quot;id\&quot;,\&quot;dir\&quot;:\&quot;DESC\&quot;}) |

### Return type

[**\Swagger\Client\Model\PaymentsDatas**](../Model/PaymentsDatas.md)

### Authorization

[JWT](../../README.md#JWT), [API-KEY](../../README.md#API-KEY)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **reportsPaymentsCount**
> \Swagger\Client\Model\CountData reportsPaymentsCount($pagination, $sort)



Get the total number of payments

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

$api_instance = new Swagger\Client\Api\ReportsPaymentsApi();
$pagination = new \Swagger\Client\Model\Pagination(); // \Swagger\Client\Model\Pagination | A JSON encoded array with the columns to group data on (eg. [\"period\",\"alias\"])
$sort = new \Swagger\Client\Model\Sort2(); // \Swagger\Client\Model\Sort2 | A JSON encoded object with the column to sort on and the sort direction (eg. {\"col\":\"id\",\"dir\":\"DESC\"})

try {
    $result = $api_instance->reportsPaymentsCount($pagination, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsPaymentsApi->reportsPaymentsCount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pagination** | [**\Swagger\Client\Model\Pagination**](../Model/\Swagger\Client\Model\Pagination.md)| A JSON encoded array with the columns to group data on (eg. [\&quot;period\&quot;,\&quot;alias\&quot;]) |
 **sort** | [**\Swagger\Client\Model\Sort2**](../Model/\Swagger\Client\Model\Sort2.md)| A JSON encoded object with the column to sort on and the sort direction (eg. {\&quot;col\&quot;:\&quot;id\&quot;,\&quot;dir\&quot;:\&quot;DESC\&quot;}) |

### Return type

[**\Swagger\Client\Model\CountData**](../Model/CountData.md)

### Authorization

[JWT](../../README.md#JWT), [API-KEY](../../README.md#API-KEY)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **reportsPaymentsExport**
> \Swagger\Client\Model\ExportData reportsPaymentsExport($pagination, $sort)



Get a link to download payment information

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

$api_instance = new Swagger\Client\Api\ReportsPaymentsApi();
$pagination = new \Swagger\Client\Model\Pagination(); // \Swagger\Client\Model\Pagination | A JSON encoded array with the columns to group data on (eg. [\"period\",\"alias\"])
$sort = new \Swagger\Client\Model\Sort2(); // \Swagger\Client\Model\Sort2 | A JSON encoded object with the column to sort on and the sort direction (eg. {\"col\":\"id\",\"dir\":\"DESC\"})

try {
    $result = $api_instance->reportsPaymentsExport($pagination, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsPaymentsApi->reportsPaymentsExport: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pagination** | [**\Swagger\Client\Model\Pagination**](../Model/\Swagger\Client\Model\Pagination.md)| A JSON encoded array with the columns to group data on (eg. [\&quot;period\&quot;,\&quot;alias\&quot;]) |
 **sort** | [**\Swagger\Client\Model\Sort2**](../Model/\Swagger\Client\Model\Sort2.md)| A JSON encoded object with the column to sort on and the sort direction (eg. {\&quot;col\&quot;:\&quot;id\&quot;,\&quot;dir\&quot;:\&quot;DESC\&quot;}) |

### Return type

[**\Swagger\Client\Model\ExportData**](../Model/ExportData.md)

### Authorization

[JWT](../../README.md#JWT), [API-KEY](../../README.md#API-KEY)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **reportsPaymentsGraph**
> \Swagger\Client\Model\PaymentsGraphDatas reportsPaymentsGraph()



Get payment information formatted for use in a graph

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

$api_instance = new Swagger\Client\Api\ReportsPaymentsApi();

try {
    $result = $api_instance->reportsPaymentsGraph();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsPaymentsApi->reportsPaymentsGraph: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\PaymentsGraphDatas**](../Model/PaymentsGraphDatas.md)

### Authorization

[JWT](../../README.md#JWT), [API-KEY](../../README.md#API-KEY)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **reportsRevshareSummary**
> \Swagger\Client\Model\PaymentsSummaryDatas reportsRevshareSummary()



Get The most recent seven payments

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

$api_instance = new Swagger\Client\Api\ReportsPaymentsApi();

try {
    $result = $api_instance->reportsRevshareSummary();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsPaymentsApi->reportsRevshareSummary: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\PaymentsSummaryDatas**](../Model/PaymentsSummaryDatas.md)

### Authorization

[JWT](../../README.md#JWT), [API-KEY](../../README.md#API-KEY)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

