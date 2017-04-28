# Swagger\Client\GEOApi

All URIs are relative to *https://localhost/rest/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**geoInfoCountriesCountryCodeStatesGet**](GEOApi.md#geoInfoCountriesCountryCodeStatesGet) | **GET** /geo-info/countries/{countryCode}/states | 
[**geoInfoCountriesGet**](GEOApi.md#geoInfoCountriesGet) | **GET** /geo-info/countries | 
[**geoInfoCountriesStatesGet**](GEOApi.md#geoInfoCountriesStatesGet) | **GET** /geo-info/countries/states | 
[**geoInfoSupportedLanguagesGet**](GEOApi.md#geoInfoSupportedLanguagesGet) | **GET** /geo-info/supported-languages | 


# **geoInfoCountriesCountryCodeStatesGet**
> \Swagger\Client\Model\State[] geoInfoCountriesCountryCodeStatesGet($countryCode)



Get state options for a country available in the platform

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\GEOApi();
$countryCode = "countryCode_example"; // string | 

try {
    $result = $api_instance->geoInfoCountriesCountryCodeStatesGet($countryCode);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GEOApi->geoInfoCountriesCountryCodeStatesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **countryCode** | **string**|  |

### Return type

[**\Swagger\Client\Model\State[]**](../Model/State.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **geoInfoCountriesGet**
> \Swagger\Client\Model\Country[] geoInfoCountriesGet()



Get country options available in the platform .

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\GEOApi();

try {
    $result = $api_instance->geoInfoCountriesGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GEOApi->geoInfoCountriesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\Country[]**](../Model/Country.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **geoInfoCountriesStatesGet**
> \Swagger\Client\Model\States geoInfoCountriesStatesGet()



Get state options available in the platform .

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\GEOApi();

try {
    $result = $api_instance->geoInfoCountriesStatesGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GEOApi->geoInfoCountriesStatesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\States**](../Model/States.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **geoInfoSupportedLanguagesGet**
> \Swagger\Client\Model\SupportedLanguage[] geoInfoSupportedLanguagesGet()



Get supported languages in the platform

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\GEOApi();

try {
    $result = $api_instance->geoInfoSupportedLanguagesGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GEOApi->geoInfoSupportedLanguagesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\SupportedLanguage[]**](../Model/SupportedLanguage.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

