# Swagger\Client\ProfilesApi

All URIs are relative to *https://localhost/rest/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**profilesChangePasswordPut**](ProfilesApi.md#profilesChangePasswordPut) | **PUT** /profiles/change-password | 
[**profilesGet**](ProfilesApi.md#profilesGet) | **GET** /profiles | 
[**profilesPut**](ProfilesApi.md#profilesPut) | **PUT** /profiles | 


# **profilesChangePasswordPut**
> \Swagger\Client\Model\Profile profilesChangePasswordPut($currentPassword, $newPassword, $confirmPassword)



Update `Profiles` password.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ProfilesApi();
$currentPassword = "currentPassword_example"; // string | User's current password
$newPassword = "newPassword_example"; // string | User's new password
$confirmPassword = "confirmPassword_example"; // string | User's confirm password

try {
    $result = $api_instance->profilesChangePasswordPut($currentPassword, $newPassword, $confirmPassword);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfilesApi->profilesChangePasswordPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **currentPassword** | **string**| User&#39;s current password |
 **newPassword** | **string**| User&#39;s new password |
 **confirmPassword** | **string**| User&#39;s confirm password |

### Return type

[**\Swagger\Client\Model\Profile**](../Model/Profile.md)

### Authorization

No authorization required

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

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **profilesPut**
> \Swagger\Client\Model\Profile profilesPut($firstName, $lastName, $email, $timezone, $defaultDashboard, $defaultProductView)



Update `Profiles` object.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ProfilesApi();
$firstName = "firstName_example"; // string | User's first name
$lastName = "lastName_example"; // string | User's lastname
$email = "email_example"; // string | User's email
$timezone = "timezone_example"; // string | Setup your timezone.
$defaultDashboard = "defaultDashboard_example"; // string | User's default dashboard
$defaultProductView = "defaultProductView_example"; // string | User's default product view.

try {
    $result = $api_instance->profilesPut($firstName, $lastName, $email, $timezone, $defaultDashboard, $defaultProductView);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfilesApi->profilesPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **firstName** | **string**| User&#39;s first name |
 **lastName** | **string**| User&#39;s lastname |
 **email** | **string**| User&#39;s email |
 **timezone** | **string**| Setup your timezone. | [optional]
 **defaultDashboard** | **string**| User&#39;s default dashboard | [optional]
 **defaultProductView** | **string**| User&#39;s default product view. | [optional]

### Return type

[**\Swagger\Client\Model\Profile**](../Model/Profile.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

