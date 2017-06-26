# Swagger\Client\AffiliatesApi

All URIs are relative to *https://localhost/rest/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getAffiliateById**](AffiliatesApi.md#getAffiliateById) | **GET** /affiliates/{id} | 
[**saveAffiliateById**](AffiliatesApi.md#saveAffiliateById) | **PUT** /affiliates/{id} | 


# **getAffiliateById**
> \Swagger\Client\Model\InlineResponse2001 getAffiliateById($id)



Get an affiliate's company account information

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

$api_instance = new Swagger\Client\Api\AffiliatesApi();
$id = 56; // int | Affiliate Id

try {
    $result = $api_instance->getAffiliateById($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AffiliatesApi->getAffiliateById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Affiliate Id |

### Return type

[**\Swagger\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[JWT](../../README.md#JWT), [API-KEY](../../README.md#API-KEY)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **saveAffiliateById**
> \Swagger\Client\Model\InlineResponse2001 saveAffiliateById($id, $companyName, $website, $phone, $contactName, $technicalEmail, $address, $city, $paymentThreshold, $stateProvince, $zipPostalCode, $gstNumber, $taxRegion)



Save an affiliate's company account information

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

$api_instance = new Swagger\Client\Api\AffiliatesApi();
$id = 56; // int | Affiliate ID
$companyName = "companyName_example"; // string | Name of affiliate's company
$website = "website_example"; // string | Affiliate's company website
$phone = "phone_example"; // string | Affiliate's company phone number
$contactName = "contactName_example"; // string | Affiliate's company contact name to receive system notifications from RevenueWire
$technicalEmail = "technicalEmail_example"; // string | Affiliate's company email address to receive system notifications from RevenueWire
$address = "address_example"; // string | Affiliate's company address
$city = "city_example"; // string | Affiliate's company city
$paymentThreshold = 56; // int | Minimum amount that Affiliate wants to receive per payment
$stateProvince = "stateProvince_example"; // string | Affiliate's company country region (if applicable for that country)
$zipPostalCode = "zipPostalCode_example"; // string | Affiliate's company postal code
$gstNumber = "gstNumber_example"; // string | Affiliate's Canadian gst tax number (if applicable)
$taxRegion = "taxRegion_example"; // string | Affiliate's Canadian province that tax number is registered in (if applicable)

try {
    $result = $api_instance->saveAffiliateById($id, $companyName, $website, $phone, $contactName, $technicalEmail, $address, $city, $paymentThreshold, $stateProvince, $zipPostalCode, $gstNumber, $taxRegion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AffiliatesApi->saveAffiliateById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Affiliate ID |
 **companyName** | **string**| Name of affiliate&#39;s company |
 **website** | **string**| Affiliate&#39;s company website |
 **phone** | **string**| Affiliate&#39;s company phone number |
 **contactName** | **string**| Affiliate&#39;s company contact name to receive system notifications from RevenueWire |
 **technicalEmail** | **string**| Affiliate&#39;s company email address to receive system notifications from RevenueWire |
 **address** | **string**| Affiliate&#39;s company address |
 **city** | **string**| Affiliate&#39;s company city |
 **paymentThreshold** | **int**| Minimum amount that Affiliate wants to receive per payment |
 **stateProvince** | **string**| Affiliate&#39;s company country region (if applicable for that country) | [optional]
 **zipPostalCode** | **string**| Affiliate&#39;s company postal code | [optional]
 **gstNumber** | **string**| Affiliate&#39;s Canadian gst tax number (if applicable) | [optional]
 **taxRegion** | **string**| Affiliate&#39;s Canadian province that tax number is registered in (if applicable) | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[JWT](../../README.md#JWT), [API-KEY](../../README.md#API-KEY)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

