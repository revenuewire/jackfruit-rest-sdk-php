# Swagger\Client\CPAAcceptTermsApi

All URIs are relative to *https://localhost/rest/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**cpaTermsAccept**](CPAAcceptTermsApi.md#cpaTermsAccept) | **PUT** /cpaapplytorun/{payoutPolicyId}/accept | 


# **cpaTermsAccept**
> \Swagger\Client\Model\InlineResponse2001 cpaTermsAccept($payoutPolicyId, $affiliateAccountId)



Accept CPA Payout Policy terms and conditions as an affiliate

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

$api_instance = new Swagger\Client\Api\CPAAcceptTermsApi();
$payoutPolicyId = 56; // int | CPA Payout Policy ID
$affiliateAccountId = 56; // int | Affiliate Group Account ID (internal use only)

try {
    $result = $api_instance->cpaTermsAccept($payoutPolicyId, $affiliateAccountId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CPAAcceptTermsApi->cpaTermsAccept: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payoutPolicyId** | **int**| CPA Payout Policy ID |
 **affiliateAccountId** | **int**| Affiliate Group Account ID (internal use only) | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[JWT](../../README.md#JWT), [API-KEY](../../README.md#API-KEY)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

