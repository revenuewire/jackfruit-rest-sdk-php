# Swagger\Client\RebillMigrationssApi

All URIs are relative to *https://localhost/rest/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**rebill**](RebillMigrationssApi.md#rebill) | **POST** /rebillmigrations/{recurringTransactionItemId}/rebill/ | Use card info from vault to enable a paused rebill task


# **rebill**
> \Swagger\Client\Model\RebillMigrationResponse rebill($recurringTransactionItemId, $cardNumber, $cardExpiry, $selectedGateway)

Use card info from vault to enable a paused rebill task

Use card info from vault to enable a paused rebill task

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

$api_instance = new Swagger\Client\Api\RebillMigrationssApi();
$recurringTransactionItemId = 56; // int | Recurring transaction item id
$cardNumber = "cardNumber_example"; // string | Credit card number
$cardExpiry = "cardExpiry_example"; // string | Card Expiry MMYY
$selectedGateway = "selectedGateway_example"; // string | Gateway Name which should be the exact same as what sent by jackfruit

try {
    $result = $api_instance->rebill($recurringTransactionItemId, $cardNumber, $cardExpiry, $selectedGateway);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RebillMigrationssApi->rebill: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **recurringTransactionItemId** | **int**| Recurring transaction item id |
 **cardNumber** | **string**| Credit card number |
 **cardExpiry** | **string**| Card Expiry MMYY |
 **selectedGateway** | **string**| Gateway Name which should be the exact same as what sent by jackfruit |

### Return type

[**\Swagger\Client\Model\RebillMigrationResponse**](../Model/RebillMigrationResponse.md)

### Authorization

[JWT](../../README.md#JWT), [API-KEY](../../README.md#API-KEY)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

