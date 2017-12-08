# Swagger\Client\ProfilesApi

All URIs are relative to *https://localhost/rest/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**profilesSaveAppConfigPut**](ProfilesApi.md#profilesSaveAppConfigPut) | **PUT** /profiles/save-app-config | 


# **profilesSaveAppConfigPut**
> \Swagger\Client\Model\Profile profilesSaveAppConfigPut($app, $config)



Updates a `Profiles` application config.

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

$api_instance = new Swagger\Client\Api\ProfilesApi();
$app = "app_example"; // string | The application name
$config = "config_example"; // string | An encoded array in the format config[<appname>][<key>]=<value>

try {
    $result = $api_instance->profilesSaveAppConfigPut($app, $config);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfilesApi->profilesSaveAppConfigPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app** | **string**| The application name |
 **config** | **string**| An encoded array in the format config[&lt;appname&gt;][&lt;key&gt;]&#x3D;&lt;value&gt; |

### Return type

[**\Swagger\Client\Model\Profile**](../Model/Profile.md)

### Authorization

[JWT](../../README.md#JWT), [API-KEY](../../README.md#API-KEY)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

