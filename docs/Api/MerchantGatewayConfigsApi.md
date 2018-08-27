# Swagger\Client\MerchantGatewayConfigsApi

All URIs are relative to *https://localhost/rest/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**activate**](MerchantGatewayConfigsApi.md#activate) | **POST** /merchantgatewayconfigs/{clientId}/versions/{versionId}/activate/ | Activate the gateway policy for a merchant


# **activate**
> \Swagger\Client\Model\ActivateGatewayResponse activate($clientId, $versionId)

Activate the gateway policy for a merchant

Activate the gateway policy for a merchant

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

$api_instance = new Swagger\Client\Api\MerchantGatewayConfigsApi();
$clientId = "clientId_example"; // string | client Id
$versionId = "versionId_example"; // string | version Id

try {
    $result = $api_instance->activate($clientId, $versionId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MerchantGatewayConfigsApi->activate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **clientId** | **string**| client Id |
 **versionId** | **string**| version Id |

### Return type

[**\Swagger\Client\Model\ActivateGatewayResponse**](../Model/ActivateGatewayResponse.md)

### Authorization

[JWT](../../README.md#JWT), [API-KEY](../../README.md#API-KEY)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

