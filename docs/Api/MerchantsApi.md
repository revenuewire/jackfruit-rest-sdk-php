# Swagger\Client\MerchantsApi

All URIs are relative to *https://localhost/rest/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createAffiliateBlock**](MerchantsApi.md#createAffiliateBlock) | **POST** /merchants/{merchantId}/block-affiliate/ | Create merchant affiliate block
[**deleteAffiliateBlock**](MerchantsApi.md#deleteAffiliateBlock) | **DELETE** /merchants/{merchantId}/block-affiliate/{blockId}/ | Delete Merchant Affiliate Block
[**getMerchant**](MerchantsApi.md#getMerchant) | **GET** /merchants/{merchantId} | Get merchant info


# **createAffiliateBlock**
> \Swagger\Client\Model\Merchant createAffiliateBlock($merchantId, $affiliateId)

Create merchant affiliate block

Create a block which merchant does not allow affiliate sale products

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

$api_instance = new Swagger\Client\Api\MerchantsApi();
$merchantId = 56; // int | Merchant group account id
$affiliateId = 56; // int | Affiliate group account id

try {
    $result = $api_instance->createAffiliateBlock($merchantId, $affiliateId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MerchantsApi->createAffiliateBlock: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchantId** | **int**| Merchant group account id |
 **affiliateId** | **int**| Affiliate group account id |

### Return type

[**\Swagger\Client\Model\Merchant**](../Model/Merchant.md)

### Authorization

[JWT](../../README.md#JWT), [API-KEY](../../README.md#API-KEY)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteAffiliateBlock**
> \Swagger\Client\Model\Merchant deleteAffiliateBlock($merchantId, $blockId)

Delete Merchant Affiliate Block

Delete merchant affiliate block to make affiliate to sell merchant product again

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

$api_instance = new Swagger\Client\Api\MerchantsApi();
$merchantId = 56; // int | Merchant id
$blockId = 56; // int | Block id

try {
    $result = $api_instance->deleteAffiliateBlock($merchantId, $blockId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MerchantsApi->deleteAffiliateBlock: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchantId** | **int**| Merchant id |
 **blockId** | **int**| Block id |

### Return type

[**\Swagger\Client\Model\Merchant**](../Model/Merchant.md)

### Authorization

[JWT](../../README.md#JWT), [API-KEY](../../README.md#API-KEY)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMerchant**
> \Swagger\Client\Model\MerchantDetailsResponse getMerchant($merchantId)

Get merchant info

Get merchant info

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

$api_instance = new Swagger\Client\Api\MerchantsApi();
$merchantId = 56; // int | Merchant group account id

try {
    $result = $api_instance->getMerchant($merchantId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MerchantsApi->getMerchant: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchantId** | **int**| Merchant group account id |

### Return type

[**\Swagger\Client\Model\MerchantDetailsResponse**](../Model/MerchantDetailsResponse.md)

### Authorization

[JWT](../../README.md#JWT), [API-KEY](../../README.md#API-KEY)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

