# Swagger\Client\ReportsPaymentsCPADetailsApi

All URIs are relative to *https://localhost/rest/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**reportPaymentsCpa**](ReportsPaymentsCPADetailsApi.md#reportPaymentsCpa) | **GET** /reports/payments/details/cpa | 
[**reportPaymentsCpa_0**](ReportsPaymentsCPADetailsApi.md#reportPaymentsCpa_0) | **GET** /reports/payments/details/cpa/totals | 
[**reportsPaymentsCount**](ReportsPaymentsCPADetailsApi.md#reportsPaymentsCount) | **GET** /reports/payments/details/cpa/count | 
[**reportsPaymentsExport**](ReportsPaymentsCPADetailsApi.md#reportsPaymentsExport) | **GET** /reports/payments/details/cpa/export | 


# **reportPaymentsCpa**
> \Swagger\Client\Model\PaymentsDetailsCpaDatas reportPaymentsCpa($pagination, $sort, $payments)



Get a list of cpa conversions and reversals for a payment period

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

$api_instance = new Swagger\Client\Api\ReportsPaymentsCPADetailsApi();
$pagination = new \Swagger\Client\Model\Pagination(); // \Swagger\Client\Model\Pagination | A JSON encoded array with the columns to group data on (eg. [\"period\",\"alias\"])
$sort = new \Swagger\Client\Model\Sort3(); // \Swagger\Client\Model\Sort3 | A JSON encoded object with the column to sort on and the sort direction (eg. {\"col\":\"id\",\"dir\":\"DESC\"})
$payments = "payments_example"; // string | A payment fid

try {
    $result = $api_instance->reportPaymentsCpa($pagination, $sort, $payments);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsPaymentsCPADetailsApi->reportPaymentsCpa: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pagination** | [**\Swagger\Client\Model\Pagination**](../Model/\Swagger\Client\Model\Pagination.md)| A JSON encoded array with the columns to group data on (eg. [\&quot;period\&quot;,\&quot;alias\&quot;]) |
 **sort** | [**\Swagger\Client\Model\Sort3**](../Model/\Swagger\Client\Model\Sort3.md)| A JSON encoded object with the column to sort on and the sort direction (eg. {\&quot;col\&quot;:\&quot;id\&quot;,\&quot;dir\&quot;:\&quot;DESC\&quot;}) |
 **payments** | **string**| A payment fid |

### Return type

[**\Swagger\Client\Model\PaymentsDetailsCpaDatas**](../Model/PaymentsDetailsCpaDatas.md)

### Authorization

[JWT](../../README.md#JWT), [API-KEY](../../README.md#API-KEY)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **reportPaymentsCpa_0**
> \Swagger\Client\Model\PaymentsTotalsData reportPaymentsCpa_0($pagination, $sort, $payments)



Get summarized totals of payments data for cpa offers

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

$api_instance = new Swagger\Client\Api\ReportsPaymentsCPADetailsApi();
$pagination = new \Swagger\Client\Model\Pagination(); // \Swagger\Client\Model\Pagination | A JSON encoded array with the columns to group data on (eg. [\"period\",\"alias\"])
$sort = new \Swagger\Client\Model\Sort3(); // \Swagger\Client\Model\Sort3 | A JSON encoded object with the column to sort on and the sort direction (eg. {\"col\":\"id\",\"dir\":\"DESC\"})
$payments = "payments_example"; // string | A payment fid

try {
    $result = $api_instance->reportPaymentsCpa_0($pagination, $sort, $payments);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsPaymentsCPADetailsApi->reportPaymentsCpa_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pagination** | [**\Swagger\Client\Model\Pagination**](../Model/\Swagger\Client\Model\Pagination.md)| A JSON encoded array with the columns to group data on (eg. [\&quot;period\&quot;,\&quot;alias\&quot;]) |
 **sort** | [**\Swagger\Client\Model\Sort3**](../Model/\Swagger\Client\Model\Sort3.md)| A JSON encoded object with the column to sort on and the sort direction (eg. {\&quot;col\&quot;:\&quot;id\&quot;,\&quot;dir\&quot;:\&quot;DESC\&quot;}) |
 **payments** | **string**| A payment fid |

### Return type

[**\Swagger\Client\Model\PaymentsTotalsData**](../Model/PaymentsTotalsData.md)

### Authorization

[JWT](../../README.md#JWT), [API-KEY](../../README.md#API-KEY)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **reportsPaymentsCount**
> \Swagger\Client\Model\CountData reportsPaymentsCount($pagination, $sort, $payments)



Get the total number of conversions and reverals

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

$api_instance = new Swagger\Client\Api\ReportsPaymentsCPADetailsApi();
$pagination = new \Swagger\Client\Model\Pagination(); // \Swagger\Client\Model\Pagination | A JSON encoded array with the columns to group data on (eg. [\"period\",\"alias\"])
$sort = new \Swagger\Client\Model\Sort3(); // \Swagger\Client\Model\Sort3 | A JSON encoded object with the column to sort on and the sort direction (eg. {\"col\":\"id\",\"dir\":\"DESC\"})
$payments = "payments_example"; // string | A payment fid

try {
    $result = $api_instance->reportsPaymentsCount($pagination, $sort, $payments);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsPaymentsCPADetailsApi->reportsPaymentsCount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pagination** | [**\Swagger\Client\Model\Pagination**](../Model/\Swagger\Client\Model\Pagination.md)| A JSON encoded array with the columns to group data on (eg. [\&quot;period\&quot;,\&quot;alias\&quot;]) |
 **sort** | [**\Swagger\Client\Model\Sort3**](../Model/\Swagger\Client\Model\Sort3.md)| A JSON encoded object with the column to sort on and the sort direction (eg. {\&quot;col\&quot;:\&quot;id\&quot;,\&quot;dir\&quot;:\&quot;DESC\&quot;}) |
 **payments** | **string**| A payment fid |

### Return type

[**\Swagger\Client\Model\CountData**](../Model/CountData.md)

### Authorization

[JWT](../../README.md#JWT), [API-KEY](../../README.md#API-KEY)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **reportsPaymentsExport**
> \Swagger\Client\Model\ExportData reportsPaymentsExport($pagination, $sort, $payments)



Get a link to download CPA payment details information

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

$api_instance = new Swagger\Client\Api\ReportsPaymentsCPADetailsApi();
$pagination = new \Swagger\Client\Model\Pagination(); // \Swagger\Client\Model\Pagination | A JSON encoded array with the columns to group data on (eg. [\"period\",\"alias\"])
$sort = new \Swagger\Client\Model\Sort3(); // \Swagger\Client\Model\Sort3 | A JSON encoded object with the column to sort on and the sort direction (eg. {\"col\":\"id\",\"dir\":\"DESC\"})
$payments = "payments_example"; // string | A payment fid

try {
    $result = $api_instance->reportsPaymentsExport($pagination, $sort, $payments);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsPaymentsCPADetailsApi->reportsPaymentsExport: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pagination** | [**\Swagger\Client\Model\Pagination**](../Model/\Swagger\Client\Model\Pagination.md)| A JSON encoded array with the columns to group data on (eg. [\&quot;period\&quot;,\&quot;alias\&quot;]) |
 **sort** | [**\Swagger\Client\Model\Sort3**](../Model/\Swagger\Client\Model\Sort3.md)| A JSON encoded object with the column to sort on and the sort direction (eg. {\&quot;col\&quot;:\&quot;id\&quot;,\&quot;dir\&quot;:\&quot;DESC\&quot;}) |
 **payments** | **string**| A payment fid |

### Return type

[**\Swagger\Client\Model\ExportData**](../Model/ExportData.md)

### Authorization

[JWT](../../README.md#JWT), [API-KEY](../../README.md#API-KEY)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

