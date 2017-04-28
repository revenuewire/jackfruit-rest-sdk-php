# Swagger\Client\DefaultApi

All URIs are relative to *https://localhost/rest/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**geoInfoCountriesCountryCodeStatesGet**](DefaultApi.md#geoInfoCountriesCountryCodeStatesGet) | **GET** /geo-info/countries/{countryCode}/states | 
[**geoInfoCountriesGet**](DefaultApi.md#geoInfoCountriesGet) | **GET** /geo-info/countries | 
[**geoInfoCountriesStatesGet**](DefaultApi.md#geoInfoCountriesStatesGet) | **GET** /geo-info/countries/states | 
[**geoInfoSupportedLanguagesGet**](DefaultApi.md#geoInfoSupportedLanguagesGet) | **GET** /geo-info/supported-languages | 


# **geoInfoCountriesCountryCodeStatesGet**
> \Swagger\Client\Model\State[] geoInfoCountriesCountryCodeStatesGet($country_code)



Get state options for a country available in the platform

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIKeyHeader
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Authorization-JWT', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Authorization-JWT', 'Bearer');

$api_instance = new Swagger\Client\Api\DefaultApi();
$country_code = "country_code_example"; // string | 

try {
    $result = $api_instance->geoInfoCountriesCountryCodeStatesGet($country_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->geoInfoCountriesCountryCodeStatesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **country_code** | **string**|  |

### Return type

[**\Swagger\Client\Model\State[]**](../Model/State.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

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

// Configure API key authorization: APIKeyHeader
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Authorization-JWT', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Authorization-JWT', 'Bearer');

$api_instance = new Swagger\Client\Api\DefaultApi();

try {
    $result = $api_instance->geoInfoCountriesGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->geoInfoCountriesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\Country[]**](../Model/Country.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

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

// Configure API key authorization: APIKeyHeader
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Authorization-JWT', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Authorization-JWT', 'Bearer');

$api_instance = new Swagger\Client\Api\DefaultApi();

try {
    $result = $api_instance->geoInfoCountriesStatesGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->geoInfoCountriesStatesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\States**](../Model/States.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

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

// Configure API key authorization: APIKeyHeader
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Authorization-JWT', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Authorization-JWT', 'Bearer');

$api_instance = new Swagger\Client\Api\DefaultApi();

try {
    $result = $api_instance->geoInfoSupportedLanguagesGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->geoInfoSupportedLanguagesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\SupportedLanguage[]**](../Model/SupportedLanguage.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

