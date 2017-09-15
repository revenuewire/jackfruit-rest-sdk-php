# Swagger\Client\CPAApplyToRunApi

All URIs are relative to *https://localhost/rest/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**cpaApplyToRunAdd**](CPAApplyToRunApi.md#cpaApplyToRunAdd) | **POST** /cpaapplytorun | 


# **cpaApplyToRunAdd**
> \Swagger\Client\Model\InlineResponse2001 cpaApplyToRunAdd($offerId, $geos, $promoMethods, $additionalDetails, $customCreatives, $affiliateAccountId)



Apply to run a CPA offer as an affiliate

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

$api_instance = new Swagger\Client\Api\CPAApplyToRunApi();
$offerId = 56; // int | Catalog Offer ID
$geos = "geos_example"; // string | geo codes (JSON-formatted array)
$promoMethods = "promoMethods_example"; // string | promotion methods (JSON-formatted array)
$additionalDetails = "additionalDetails_example"; // string | additional comments to include with application
$customCreatives = true; // bool | use custom creatives in campaign
$affiliateAccountId = 56; // int | Affiliate Group Account ID (internal use only)

try {
    $result = $api_instance->cpaApplyToRunAdd($offerId, $geos, $promoMethods, $additionalDetails, $customCreatives, $affiliateAccountId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CPAApplyToRunApi->cpaApplyToRunAdd: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **offerId** | **int**| Catalog Offer ID |
 **geos** | **string**| geo codes (JSON-formatted array) | [optional]
 **promoMethods** | **string**| promotion methods (JSON-formatted array) | [optional]
 **additionalDetails** | **string**| additional comments to include with application | [optional]
 **customCreatives** | **bool**| use custom creatives in campaign | [optional]
 **affiliateAccountId** | **int**| Affiliate Group Account ID (internal use only) | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[JWT](../../README.md#JWT), [API-KEY](../../README.md#API-KEY)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

