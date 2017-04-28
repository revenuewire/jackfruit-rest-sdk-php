# Swagger\Client\ProfilesApi

All URIs are relative to *https://localhost/rest/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**profilesChangePasswordPut**](ProfilesApi.md#profilesChangePasswordPut) | **PUT** /profiles/change-password | 
[**profilesGet**](ProfilesApi.md#profilesGet) | **GET** /profiles | 
[**profilesPut**](ProfilesApi.md#profilesPut) | **PUT** /profiles | 


# **profilesChangePasswordPut**
> \Swagger\Client\Model\Profile profilesChangePasswordPut($current_password, $new_password, $confirm_password)



Update `Profiles` password.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIKeyHeader
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Authorization-JWT', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Authorization-JWT', 'Bearer');

$api_instance = new Swagger\Client\Api\ProfilesApi();
$current_password = "current_password_example"; // string | User's current password
$new_password = "new_password_example"; // string | User's new password
$confirm_password = "confirm_password_example"; // string | User's confirm password

try {
    $result = $api_instance->profilesChangePasswordPut($current_password, $new_password, $confirm_password);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfilesApi->profilesChangePasswordPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **current_password** | **string**| User&#39;s current password |
 **new_password** | **string**| User&#39;s new password |
 **confirm_password** | **string**| User&#39;s confirm password |

### Return type

[**\Swagger\Client\Model\Profile**](../Model/Profile.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **profilesGet**
> \Swagger\Client\Model\Profile profilesGet()



Gets `Profiles` object.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIKeyHeader
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Authorization-JWT', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Authorization-JWT', 'Bearer');

$api_instance = new Swagger\Client\Api\ProfilesApi();

try {
    $result = $api_instance->profilesGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfilesApi->profilesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\Profile**](../Model/Profile.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **profilesPut**
> \Swagger\Client\Model\Profile profilesPut($first_name, $last_name, $email, $timezone, $default_dashboard, $default_product_view)



Update `Profiles` object.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIKeyHeader
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Authorization-JWT', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Authorization-JWT', 'Bearer');

$api_instance = new Swagger\Client\Api\ProfilesApi();
$first_name = "first_name_example"; // string | User's first name
$last_name = "last_name_example"; // string | User's lastname
$email = "email_example"; // string | User's email
$timezone = "timezone_example"; // string | Setup your timezone.
$default_dashboard = "default_dashboard_example"; // string | User's default dashboard
$default_product_view = "default_product_view_example"; // string | User's default product view.

try {
    $result = $api_instance->profilesPut($first_name, $last_name, $email, $timezone, $default_dashboard, $default_product_view);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfilesApi->profilesPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **first_name** | **string**| User&#39;s first name |
 **last_name** | **string**| User&#39;s lastname |
 **email** | **string**| User&#39;s email |
 **timezone** | **string**| Setup your timezone. | [optional]
 **default_dashboard** | **string**| User&#39;s default dashboard | [optional]
 **default_product_view** | **string**| User&#39;s default product view. | [optional]

### Return type

[**\Swagger\Client\Model\Profile**](../Model/Profile.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

