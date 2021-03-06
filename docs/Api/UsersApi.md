# Swagger\Client\UsersApi

All URIs are relative to *https://localhost/rest/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**customerLogin**](UsersApi.md#customerLogin) | **POST** /users/login | 
[**customerOrderLogin**](UsersApi.md#customerOrderLogin) | **POST** /users/order-login | 
[**customerSignup**](UsersApi.md#customerSignup) | **POST** /users/sign-up | 
[**userForgotPassword**](UsersApi.md#userForgotPassword) | **POST** /users/forget-password | 
[**userGet**](UsersApi.md#userGet) | **GET** /users/{id} | 
[**userResetPassword**](UsersApi.md#userResetPassword) | **POST** /users/reset-password | 
[**userSaveAppConfig**](UsersApi.md#userSaveAppConfig) | **PUT** /users/{id}/save-app-config | 
[**userUpdate**](UsersApi.md#userUpdate) | **PUT** /users/{id} | 
[**userUpdateEmail**](UsersApi.md#userUpdateEmail) | **POST** /users/{id}/update-email | 
[**userUpdateEmailConfirm**](UsersApi.md#userUpdateEmailConfirm) | **PUT** /users/{id}/update-email/{token} | 
[**userUpdatePassword**](UsersApi.md#userUpdatePassword) | **PUT** /users/{id}/update-password | 
[**userVerify**](UsersApi.md#userVerify) | **PUT** /users/verify | 


# **customerLogin**
> \Swagger\Client\Model\Identity customerLogin($username, $password, $accountId)



Login an user

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

$api_instance = new Swagger\Client\Api\UsersApi();
$username = "username_example"; // string | User name
$password = "password_example"; // string | User password
$accountId = "accountId_example"; // string | User Account Id

try {
    $result = $api_instance->customerLogin($username, $password, $accountId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->customerLogin: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **username** | **string**| User name |
 **password** | **string**| User password |
 **accountId** | **string**| User Account Id | [optional]

### Return type

[**\Swagger\Client\Model\Identity**](../Model/Identity.md)

### Authorization

[JWT](../../README.md#JWT), [API-KEY](../../README.md#API-KEY)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerOrderLogin**
> \Swagger\Client\Model\Identity customerOrderLogin($orderReference, $lastFourCC, $postCode)



Login an user by order reference

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

$api_instance = new Swagger\Client\Api\UsersApi();
$orderReference = "orderReference_example"; // string | Order reference
$lastFourCC = "lastFourCC_example"; // string | Last four CC digets
$postCode = "postCode_example"; // string | Postcode/Zip

try {
    $result = $api_instance->customerOrderLogin($orderReference, $lastFourCC, $postCode);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->customerOrderLogin: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **orderReference** | **string**| Order reference |
 **lastFourCC** | **string**| Last four CC digets |
 **postCode** | **string**| Postcode/Zip |

### Return type

[**\Swagger\Client\Model\Identity**](../Model/Identity.md)

### Authorization

[JWT](../../README.md#JWT), [API-KEY](../../README.md#API-KEY)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerSignup**
> \Swagger\Client\Model\User customerSignup($email, $password, $firstName, $lastName, $language)



Sign up a customer

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

$api_instance = new Swagger\Client\Api\UsersApi();
$email = "email_example"; // string | User's email
$password = "password_example"; // string | User's password
$firstName = "firstName_example"; // string | First Name
$lastName = "lastName_example"; // string | First Name
$language = "language_example"; // string | Preferred Language code for the user

try {
    $result = $api_instance->customerSignup($email, $password, $firstName, $lastName, $language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->customerSignup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **email** | **string**| User&#39;s email |
 **password** | **string**| User&#39;s password |
 **firstName** | **string**| First Name | [optional]
 **lastName** | **string**| First Name | [optional]
 **language** | **string**| Preferred Language code for the user | [optional]

### Return type

[**\Swagger\Client\Model\User**](../Model/User.md)

### Authorization

[JWT](../../README.md#JWT), [API-KEY](../../README.md#API-KEY)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userForgotPassword**
> \Swagger\Client\Model\UserForgetPassword userForgotPassword($email)



Forgot my password

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

$api_instance = new Swagger\Client\Api\UsersApi();
$email = "email_example"; // string | Your email address

try {
    $result = $api_instance->userForgotPassword($email);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->userForgotPassword: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **email** | **string**| Your email address | [optional]

### Return type

[**\Swagger\Client\Model\UserForgetPassword**](../Model/UserForgetPassword.md)

### Authorization

[JWT](../../README.md#JWT), [API-KEY](../../README.md#API-KEY)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userGet**
> \Swagger\Client\Model\User userGet($id)



Get User

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

$api_instance = new Swagger\Client\Api\UsersApi();
$id = "id_example"; // string | Users Id

try {
    $result = $api_instance->userGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->userGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Users Id |

### Return type

[**\Swagger\Client\Model\User**](../Model/User.md)

### Authorization

[JWT](../../README.md#JWT), [API-KEY](../../README.md#API-KEY)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userResetPassword**
> \Swagger\Client\Model\User userResetPassword($email, $token, $password)



Reset my password

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

$api_instance = new Swagger\Client\Api\UsersApi();
$email = "email_example"; // string | Your email address
$token = "token_example"; // string | Your verificaton token
$password = "password_example"; // string | Your new password

try {
    $result = $api_instance->userResetPassword($email, $token, $password);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->userResetPassword: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\User**](../Model/User.md)

### Authorization

[JWT](../../README.md#JWT), [API-KEY](../../README.md#API-KEY)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userSaveAppConfig**
> \Swagger\Client\Model\User userSaveAppConfig($id, $app, $config)



Updates a `Users` application config.

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

$api_instance = new Swagger\Client\Api\UsersApi();
$id = 56; // int | User id
$app = "app_example"; // string | The application name
$config = "config_example"; // string | An encoded array in the format config[<appname>][<key>]=<value>

try {
    $result = $api_instance->userSaveAppConfig($id, $app, $config);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->userSaveAppConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| User id |
 **app** | **string**| The application name |
 **config** | **string**| An encoded array in the format config[&lt;appname&gt;][&lt;key&gt;]&#x3D;&lt;value&gt; |

### Return type

[**\Swagger\Client\Model\User**](../Model/User.md)

### Authorization

[JWT](../../README.md#JWT), [API-KEY](../../README.md#API-KEY)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userUpdate**
> \Swagger\Client\Model\User userUpdate($id, $accountFullName, $email, $timezone, $defaultDashboard, $defaultProductView, $language)



Update User

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

$api_instance = new Swagger\Client\Api\UsersApi();
$id = 56; // int | 
$accountFullName = "accountFullName_example"; // string | User's name
$email = "email_example"; // string | User's contact email
$timezone = "timezone_example"; // string | Setup your timezone.
$defaultDashboard = "defaultDashboard_example"; // string | User's default dashboard
$defaultProductView = "defaultProductView_example"; // string | User's default product view.
$language = "language_example"; // string | Preferred Language code for the user

try {
    $result = $api_instance->userUpdate($id, $accountFullName, $email, $timezone, $defaultDashboard, $defaultProductView, $language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->userUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **accountFullName** | **string**| User&#39;s name | [optional]
 **email** | **string**| User&#39;s contact email | [optional]
 **timezone** | **string**| Setup your timezone. | [optional]
 **defaultDashboard** | **string**| User&#39;s default dashboard | [optional]
 **defaultProductView** | **string**| User&#39;s default product view. | [optional]
 **language** | **string**| Preferred Language code for the user | [optional]

### Return type

[**\Swagger\Client\Model\User**](../Model/User.md)

### Authorization

[JWT](../../README.md#JWT), [API-KEY](../../README.md#API-KEY)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userUpdateEmail**
> \Swagger\Client\Model\UpdateEmailResponse userUpdateEmail($id, $newEmail)



request email change

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

$api_instance = new Swagger\Client\Api\UsersApi();
$id = 56; // int | User id
$newEmail = "newEmail_example"; // string | New email address

try {
    $result = $api_instance->userUpdateEmail($id, $newEmail);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->userUpdateEmail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| User id |
 **newEmail** | **string**| New email address |

### Return type

[**\Swagger\Client\Model\UpdateEmailResponse**](../Model/UpdateEmailResponse.md)

### Authorization

[JWT](../../README.md#JWT), [API-KEY](../../README.md#API-KEY)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userUpdateEmailConfirm**
> \Swagger\Client\Model\User userUpdateEmailConfirm($id, $token)



confirm email change

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

$api_instance = new Swagger\Client\Api\UsersApi();
$id = 56; // int | User id
$token = "token_example"; // string | Token generated when creating email update request

try {
    $result = $api_instance->userUpdateEmailConfirm($id, $token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->userUpdateEmailConfirm: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| User id |
 **token** | **string**| Token generated when creating email update request |

### Return type

[**\Swagger\Client\Model\User**](../Model/User.md)

### Authorization

[JWT](../../README.md#JWT), [API-KEY](../../README.md#API-KEY)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userUpdatePassword**
> \Swagger\Client\Model\User userUpdatePassword($id, $oldPassword, $newPassword)



Change password

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

$api_instance = new Swagger\Client\Api\UsersApi();
$id = 56; // int | User id
$oldPassword = "oldPassword_example"; // string | Your current password
$newPassword = "newPassword_example"; // string | your new password

try {
    $result = $api_instance->userUpdatePassword($id, $oldPassword, $newPassword);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->userUpdatePassword: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| User id |
 **oldPassword** | **string**| Your current password |
 **newPassword** | **string**| your new password |

### Return type

[**\Swagger\Client\Model\User**](../Model/User.md)

### Authorization

[JWT](../../README.md#JWT), [API-KEY](../../README.md#API-KEY)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userVerify**
> \Swagger\Client\Model\User userVerify($email, $token)



Verify an user account

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

$api_instance = new Swagger\Client\Api\UsersApi();
$email = "email_example"; // string | User email
$token = "token_example"; // string | Token generated when creating a customer user

try {
    $result = $api_instance->userVerify($email, $token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->userVerify: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **email** | **string**| User email |
 **token** | **string**| Token generated when creating a customer user |

### Return type

[**\Swagger\Client\Model\User**](../Model/User.md)

### Authorization

[JWT](../../README.md#JWT), [API-KEY](../../README.md#API-KEY)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

