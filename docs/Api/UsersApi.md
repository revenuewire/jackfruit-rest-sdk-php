# Swagger\Client\UsersApi

All URIs are relative to *https://localhost/rest/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**usersForgetPasswordPost**](UsersApi.md#usersForgetPasswordPost) | **POST** /users/forget-password | 
[**usersIdGet**](UsersApi.md#usersIdGet) | **GET** /users/{id} | 
[**usersIdPut**](UsersApi.md#usersIdPut) | **PUT** /users/{id} | 
[**usersIdUpdatePasswordPut**](UsersApi.md#usersIdUpdatePasswordPut) | **PUT** /users/{id}/update-password | 
[**usersLoginPost**](UsersApi.md#usersLoginPost) | **POST** /users/login | 
[**usersOrderLoginPost**](UsersApi.md#usersOrderLoginPost) | **POST** /users/order-login | 
[**usersResetPasswordPost**](UsersApi.md#usersResetPasswordPost) | **POST** /users/reset-password | 
[**usersSignUpPost**](UsersApi.md#usersSignUpPost) | **POST** /users/sign-up | 
[**usersVerifyPut**](UsersApi.md#usersVerifyPut) | **PUT** /users/verify | 


# **usersForgetPasswordPost**
> \Swagger\Client\Model\Response[] usersForgetPasswordPost($email)



Forgot my password

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIKeyHeader
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Authorization-JWT', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Authorization-JWT', 'Bearer');

$api_instance = new Swagger\Client\Api\UsersApi();
$email = "email_example"; // string | Your email address

try {
    $result = $api_instance->usersForgetPasswordPost($email);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->usersForgetPasswordPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **email** | **string**| Your email address | [optional]

### Return type

[**\Swagger\Client\Model\Response[]**](../Model/Response.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **usersIdGet**
> \Swagger\Client\Model\Profile[] usersIdGet($id)



Get User

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIKeyHeader
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Authorization-JWT', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Authorization-JWT', 'Bearer');

$api_instance = new Swagger\Client\Api\UsersApi();
$id = "id_example"; // string | Users Id

try {
    $result = $api_instance->usersIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->usersIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Users Id |

### Return type

[**\Swagger\Client\Model\Profile[]**](../Model/Profile.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **usersIdPut**
> \Swagger\Client\Model\Profile[] usersIdPut($id, $first_name, $last_name, $language)



Update User

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIKeyHeader
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Authorization-JWT', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Authorization-JWT', 'Bearer');

$api_instance = new Swagger\Client\Api\UsersApi();
$id = 56; // int | 
$first_name = "first_name_example"; // string | Customer's new first name
$last_name = "last_name_example"; // string | Customer's new last name
$language = "language_example"; // string | Preferred Language code for the user

try {
    $result = $api_instance->usersIdPut($id, $first_name, $last_name, $language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->usersIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **first_name** | **string**| Customer&#39;s new first name |
 **last_name** | **string**| Customer&#39;s new last name |
 **language** | **string**| Preferred Language code for the user | [optional]

### Return type

[**\Swagger\Client\Model\Profile[]**](../Model/Profile.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **usersIdUpdatePasswordPut**
> \Swagger\Client\Model\Profile[] usersIdUpdatePasswordPut($id, $old_password, $new_password)



Change password

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIKeyHeader
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Authorization-JWT', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Authorization-JWT', 'Bearer');

$api_instance = new Swagger\Client\Api\UsersApi();
$id = 56; // int | User id
$old_password = "old_password_example"; // string | Your current password
$new_password = "new_password_example"; // string | your new password

try {
    $result = $api_instance->usersIdUpdatePasswordPut($id, $old_password, $new_password);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->usersIdUpdatePasswordPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| User id |
 **old_password** | **string**| Your current password |
 **new_password** | **string**| your new password |

### Return type

[**\Swagger\Client\Model\Profile[]**](../Model/Profile.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **usersLoginPost**
> \Swagger\Client\Model\Identity usersLoginPost($username, $password, $account_id)



Login an user

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIKeyHeader
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Authorization-JWT', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Authorization-JWT', 'Bearer');

$api_instance = new Swagger\Client\Api\UsersApi();
$username = "username_example"; // string | User name
$password = "password_example"; // string | User password
$account_id = "account_id_example"; // string | User Account Id

try {
    $result = $api_instance->usersLoginPost($username, $password, $account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->usersLoginPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **username** | **string**| User name |
 **password** | **string**| User password |
 **account_id** | **string**| User Account Id | [optional]

### Return type

[**\Swagger\Client\Model\Identity**](../Model/Identity.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **usersOrderLoginPost**
> \Swagger\Client\Model\Identity usersOrderLoginPost($order_reference, $first_six_cc, $postcode)



Login an user by order reference

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIKeyHeader
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Authorization-JWT', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Authorization-JWT', 'Bearer');

$api_instance = new Swagger\Client\Api\UsersApi();
$order_reference = "order_reference_example"; // string | Order reference
$first_six_cc = "first_six_cc_example"; // string | First six digits of card number
$postcode = "postcode_example"; // string | Postcode/Zip

try {
    $result = $api_instance->usersOrderLoginPost($order_reference, $first_six_cc, $postcode);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->usersOrderLoginPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_reference** | **string**| Order reference |
 **first_six_cc** | **string**| First six digits of card number |
 **postcode** | **string**| Postcode/Zip |

### Return type

[**\Swagger\Client\Model\Identity**](../Model/Identity.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **usersResetPasswordPost**
> \Swagger\Client\Model\Profile usersResetPasswordPost($email, $token, $password)



Reset my password

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIKeyHeader
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Authorization-JWT', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Authorization-JWT', 'Bearer');

$api_instance = new Swagger\Client\Api\UsersApi();
$email = "email_example"; // string | Your email address
$token = "token_example"; // string | Your verificaton token
$password = "password_example"; // string | Your new password

try {
    $result = $api_instance->usersResetPasswordPost($email, $token, $password);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->usersResetPasswordPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **email** | **string**| Your email address | [optional]
 **token** | **string**| Your verificaton token | [optional]
 **password** | **string**| Your new password | [optional]

### Return type

[**\Swagger\Client\Model\Profile**](../Model/Profile.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **usersSignUpPost**
> \Swagger\Client\Model\Profile[] usersSignUpPost($email, $password, $first_name, $last_name, $language)



Sign up a customer

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIKeyHeader
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Authorization-JWT', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Authorization-JWT', 'Bearer');

$api_instance = new Swagger\Client\Api\UsersApi();
$email = "email_example"; // string | User's email
$password = "password_example"; // string | User's password
$first_name = "first_name_example"; // string | First Name
$last_name = "last_name_example"; // string | First Name
$language = "language_example"; // string | Preferred Language code for the user

try {
    $result = $api_instance->usersSignUpPost($email, $password, $first_name, $last_name, $language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->usersSignUpPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **email** | **string**| User&#39;s email |
 **password** | **string**| User&#39;s password |
 **first_name** | **string**| First Name | [optional]
 **last_name** | **string**| First Name | [optional]
 **language** | **string**| Preferred Language code for the user | [optional]

### Return type

[**\Swagger\Client\Model\Profile[]**](../Model/Profile.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **usersVerifyPut**
> \Swagger\Client\Model\Profile usersVerifyPut($email, $token)



Verify an user account

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIKeyHeader
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Authorization-JWT', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Authorization-JWT', 'Bearer');

$api_instance = new Swagger\Client\Api\UsersApi();
$email = "email_example"; // string | User email
$token = "token_example"; // string | Token generated when creating a customer user

try {
    $result = $api_instance->usersVerifyPut($email, $token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->usersVerifyPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **email** | **string**| User email |
 **token** | **string**| Token generated when creating a customer user |

### Return type

[**\Swagger\Client\Model\Profile**](../Model/Profile.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

