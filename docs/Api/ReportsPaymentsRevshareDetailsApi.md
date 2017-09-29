# Swagger\Client\ReportsPaymentsRevshareDetailsApi

All URIs are relative to *https://localhost/rest/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**reportPaymentsCpa**](ReportsPaymentsRevshareDetailsApi.md#reportPaymentsCpa) | **GET** /reports/payments/details/revshare | 
[**reportPaymentsCpa_0**](ReportsPaymentsRevshareDetailsApi.md#reportPaymentsCpa_0) | **GET** /reports/payments/details/revshare/totals | 
[**reportsPaymentsCount**](ReportsPaymentsRevshareDetailsApi.md#reportsPaymentsCount) | **GET** /reports/payments/details/revshare/count | 
[**reportsPaymentsExport**](ReportsPaymentsRevshareDetailsApi.md#reportsPaymentsExport) | **GET** /reports/payments/details/revshare/export | 


# **reportPaymentsCpa**
> \Swagger\Client\Model\PaymentsDetailsRevshareDatas reportPaymentsCpa($transactionTypes, $pagination, $sort, $payments)



Get a list of revshare transactions for a payment period

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

$api_instance = new Swagger\Client\Api\ReportsPaymentsRevshareDetailsApi();
$transactionTypes = array("transactionTypes_example"); // string[] | Revshare transaction types
$pagination = new \Swagger\Client\Model\Pagination(); // \Swagger\Client\Model\Pagination | A JSON encoded array with the columns to group data on (eg. [\"period\",\"alias\"])
$sort = new \Swagger\Client\Model\Sort4(); // \Swagger\Client\Model\Sort4 | A JSON encoded object with the column to sort on and the sort direction (eg. {\"col\":\"id\",\"dir\":\"DESC\"})
$payments = "payments_example"; // string | A payment fid

try {
    $result = $api_instance->reportPaymentsCpa($transactionTypes, $pagination, $sort, $payments);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsPaymentsRevshareDetailsApi->reportPaymentsCpa: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **transactionTypes** | [**string[]**](../Model/string.md)| Revshare transaction types |
 **pagination** | [**\Swagger\Client\Model\Pagination**](../Model/\Swagger\Client\Model\Pagination.md)| A JSON encoded array with the columns to group data on (eg. [\&quot;period\&quot;,\&quot;alias\&quot;]) |
 **sort** | [**\Swagger\Client\Model\Sort4**](../Model/\Swagger\Client\Model\Sort4.md)| A JSON encoded object with the column to sort on and the sort direction (eg. {\&quot;col\&quot;:\&quot;id\&quot;,\&quot;dir\&quot;:\&quot;DESC\&quot;}) |
 **payments** | **string**| A payment fid |

### Return type

[**\Swagger\Client\Model\PaymentsDetailsRevshareDatas**](../Model/PaymentsDetailsRevshareDatas.md)

### Authorization

[JWT](../../README.md#JWT), [API-KEY](../../README.md#API-KEY)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **reportPaymentsCpa_0**
> \Swagger\Client\Model\PaymentsTotalsData reportPaymentsCpa_0($transactionTypes, $pagination, $sort, $payments)



Get summarized totals of payments data for revshare offers

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

$api_instance = new Swagger\Client\Api\ReportsPaymentsRevshareDetailsApi();
$transactionTypes = array("transactionTypes_example"); // string[] | Revshare transaction types
$pagination = new \Swagger\Client\Model\Pagination(); // \Swagger\Client\Model\Pagination | A JSON encoded array with the columns to group data on (eg. [\"period\",\"alias\"])
$sort = new \Swagger\Client\Model\Sort4(); // \Swagger\Client\Model\Sort4 | A JSON encoded object with the column to sort on and the sort direction (eg. {\"col\":\"id\",\"dir\":\"DESC\"})
$payments = "payments_example"; // string | A payment fid

try {
    $result = $api_instance->reportPaymentsCpa_0($transactionTypes, $pagination, $sort, $payments);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsPaymentsRevshareDetailsApi->reportPaymentsCpa_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **transactionTypes** | [**string[]**](../Model/string.md)| Revshare transaction types |
 **pagination** | [**\Swagger\Client\Model\Pagination**](../Model/\Swagger\Client\Model\Pagination.md)| A JSON encoded array with the columns to group data on (eg. [\&quot;period\&quot;,\&quot;alias\&quot;]) |
 **sort** | [**\Swagger\Client\Model\Sort4**](../Model/\Swagger\Client\Model\Sort4.md)| A JSON encoded object with the column to sort on and the sort direction (eg. {\&quot;col\&quot;:\&quot;id\&quot;,\&quot;dir\&quot;:\&quot;DESC\&quot;}) |
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
> \Swagger\Client\Model\CountData reportsPaymentsCount($transactionTypes, $pagination, $sort, $payments)



Get the total number of revshare transactions

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

$api_instance = new Swagger\Client\Api\ReportsPaymentsRevshareDetailsApi();
$transactionTypes = array("transactionTypes_example"); // string[] | Revshare transaction types
$pagination = new \Swagger\Client\Model\Pagination(); // \Swagger\Client\Model\Pagination | A JSON encoded array with the columns to group data on (eg. [\"period\",\"alias\"])
$sort = new \Swagger\Client\Model\Sort4(); // \Swagger\Client\Model\Sort4 | A JSON encoded object with the column to sort on and the sort direction (eg. {\"col\":\"id\",\"dir\":\"DESC\"})
$payments = "payments_example"; // string | A payment fid

try {
    $result = $api_instance->reportsPaymentsCount($transactionTypes, $pagination, $sort, $payments);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsPaymentsRevshareDetailsApi->reportsPaymentsCount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **transactionTypes** | [**string[]**](../Model/string.md)| Revshare transaction types |
 **pagination** | [**\Swagger\Client\Model\Pagination**](../Model/\Swagger\Client\Model\Pagination.md)| A JSON encoded array with the columns to group data on (eg. [\&quot;period\&quot;,\&quot;alias\&quot;]) |
 **sort** | [**\Swagger\Client\Model\Sort4**](../Model/\Swagger\Client\Model\Sort4.md)| A JSON encoded object with the column to sort on and the sort direction (eg. {\&quot;col\&quot;:\&quot;id\&quot;,\&quot;dir\&quot;:\&quot;DESC\&quot;}) |
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
> \Swagger\Client\Model\ExportData reportsPaymentsExport($transactionTypes, $pagination, $sort, $payments)



Get a link to download revshare payment details information

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

$api_instance = new Swagger\Client\Api\ReportsPaymentsRevshareDetailsApi();
$transactionTypes = array("transactionTypes_example"); // string[] | Revshare transaction types
$pagination = new \Swagger\Client\Model\Pagination(); // \Swagger\Client\Model\Pagination | A JSON encoded array with the columns to group data on (eg. [\"period\",\"alias\"])
$sort = new \Swagger\Client\Model\Sort4(); // \Swagger\Client\Model\Sort4 | A JSON encoded object with the column to sort on and the sort direction (eg. {\"col\":\"id\",\"dir\":\"DESC\"})
$payments = "payments_example"; // string | A payment fid

try {
    $result = $api_instance->reportsPaymentsExport($transactionTypes, $pagination, $sort, $payments);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsPaymentsRevshareDetailsApi->reportsPaymentsExport: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **transactionTypes** | [**string[]**](../Model/string.md)| Revshare transaction types |
 **pagination** | [**\Swagger\Client\Model\Pagination**](../Model/\Swagger\Client\Model\Pagination.md)| A JSON encoded array with the columns to group data on (eg. [\&quot;period\&quot;,\&quot;alias\&quot;]) |
 **sort** | [**\Swagger\Client\Model\Sort4**](../Model/\Swagger\Client\Model\Sort4.md)| A JSON encoded object with the column to sort on and the sort direction (eg. {\&quot;col\&quot;:\&quot;id\&quot;,\&quot;dir\&quot;:\&quot;DESC\&quot;}) |
 **payments** | **string**| A payment fid |

### Return type

[**\Swagger\Client\Model\ExportData**](../Model/ExportData.md)

### Authorization

[JWT](../../README.md#JWT), [API-KEY](../../README.md#API-KEY)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

