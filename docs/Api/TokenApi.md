# Swagger\Client\TokenApi

All URIs are relative to *https://localhost/rest/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**tokenGenerate**](TokenApi.md#tokenGenerate) | **POST** /token | 


# **tokenGenerate**
> \Swagger\Client\Model\Token tokenGenerate($username, $password)



Create a new `Token`.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\TokenApi();
$username = "username_example"; // string | User's username
$password = "password_example"; // string | User's password

try {
    $result = $api_instance->tokenGenerate($username, $password);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TokenApi->tokenGenerate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **username** | **string**| User&#39;s username | [optional]
 **password** | **string**| User&#39;s password | [optional]

### Return type

[**\Swagger\Client\Model\Token**](../Model/Token.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

