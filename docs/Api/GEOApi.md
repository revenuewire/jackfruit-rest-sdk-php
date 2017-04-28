# Swagger\Client\GEOApi

All URIs are relative to *https://localhost/rest/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**geoGetAllStates**](GEOApi.md#geoGetAllStates) | **GET** /geo-info/countries/states | 
[**geoGetAllStatesByCountry**](GEOApi.md#geoGetAllStatesByCountry) | **GET** /geo-info/countries/{countryCode}/states | 
[**geoGetCountryList**](GEOApi.md#geoGetCountryList) | **GET** /geo-info/countries | 
[**geoGetSupportedLanguages**](GEOApi.md#geoGetSupportedLanguages) | **GET** /geo-info/supported-languages | 


# **geoGetAllStates**
> map[string,object] geoGetAllStates()



Get state options available in the platform .

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\GEOApi();

try {
    $result = $api_instance->geoGetAllStates();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GEOApi->geoGetAllStates: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**map[string,object]**](../Model/map.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **geoGetAllStatesByCountry**
> \Swagger\Client\Model\States geoGetAllStatesByCountry($countryCode)



Get state options for a country available in the platform

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\GEOApi();
$countryCode = "countryCode_example"; // string | 

try {
    $result = $api_instance->geoGetAllStatesByCountry($countryCode);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GEOApi->geoGetAllStatesByCountry: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **countryCode** | **string**|  |

### Return type

[**\Swagger\Client\Model\States**](../Model/States.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **geoGetCountryList**
> \Swagger\Client\Model\CountryList geoGetCountryList()



Get country options available in the platform .

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\GEOApi();

try {
    $result = $api_instance->geoGetCountryList();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GEOApi->geoGetCountryList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\CountryList**](../Model/CountryList.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **geoGetSupportedLanguages**
> \Swagger\Client\Model\SupportedLanguages geoGetSupportedLanguages()



Get supported languages in the platform

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\GEOApi();

try {
    $result = $api_instance->geoGetSupportedLanguages();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GEOApi->geoGetSupportedLanguages: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\SupportedLanguages**](../Model/SupportedLanguages.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

