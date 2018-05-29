# Swagger\Client\RefundMigrationssApi

All URIs are relative to *https://localhost/rest/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**refund**](RefundMigrationssApi.md#refund) | **POST** /refundmigrations/{transactionId}/refund/ | Use card info from vault to give customer credit by pavision


# **refund**
> \Swagger\Client\Model\RefundMigrationResponse refund($transactionId, $cardNumber, $cardExpiry)

Use card info from vault to give customer credit by pavision

Use card info from vault to give customer credit by pavision

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

$api_instance = new Swagger\Client\Api\RefundMigrationssApi();
$transactionId = 56; // int | Pending refund transaction id
$cardNumber = "cardNumber_example"; // string | Credit card number
$cardExpiry = "cardExpiry_example"; // string | Card Expiry MMYY

try {
    $result = $api_instance->refund($transactionId, $cardNumber, $cardExpiry);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RefundMigrationssApi->refund: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **transactionId** | **int**| Pending refund transaction id |
 **cardNumber** | **string**| Credit card number |
 **cardExpiry** | **string**| Card Expiry MMYY |

### Return type

[**\Swagger\Client\Model\RefundMigrationResponse**](../Model/RefundMigrationResponse.md)

### Authorization

[JWT](../../README.md#JWT), [API-KEY](../../README.md#API-KEY)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

