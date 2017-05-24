# Swagger\Client\OrdersApi

All URIs are relative to *https://localhost/rest/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**ordersCustomerEmailEmailGet**](OrdersApi.md#ordersCustomerEmailEmailGet) | **GET** /orders/customer-email/{email} | 
[**ordersOrderIdGet**](OrdersApi.md#ordersOrderIdGet) | **GET** /orders/{orderId} | 
[**ordersPurchaseLookupPost**](OrdersApi.md#ordersPurchaseLookupPost) | **POST** /orders/purchase-lookup | 


# **ordersCustomerEmailEmailGet**
> \Swagger\Client\Model\CustomerOrders[] ordersCustomerEmailEmailGet($email, $merchantFid)



Get a list of orders

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

$api_instance = new Swagger\Client\Api\OrdersApi();
$email = "email_example"; // string | Customer email
$merchantFid = "merchantFid_example"; // string | Merchant fid (optional)

try {
    $result = $api_instance->ordersCustomerEmailEmailGet($email, $merchantFid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->ordersCustomerEmailEmailGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **email** | **string**| Customer email |
 **merchantFid** | **string**| Merchant fid (optional) | [optional]

### Return type

[**\Swagger\Client\Model\CustomerOrders[]**](../Model/CustomerOrders.md)

### Authorization

[JWT](../../README.md#JWT), [API-KEY](../../README.md#API-KEY)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **ordersOrderIdGet**
> \Swagger\Client\Model\Transaction[] ordersOrderIdGet($orderId)



Get a list of transactions a order has

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

$api_instance = new Swagger\Client\Api\OrdersApi();
$orderId = 56; // int | Order id

try {
    $result = $api_instance->ordersOrderIdGet($orderId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->ordersOrderIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **orderId** | **int**| Order id |

### Return type

[**\Swagger\Client\Model\Transaction[]**](../Model/Transaction.md)

### Authorization

[JWT](../../README.md#JWT), [API-KEY](../../README.md#API-KEY)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **ordersPurchaseLookupPost**
> \Swagger\Client\Model\Response[] ordersPurchaseLookupPost($email)



Look up order info by email and send it

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

$api_instance = new Swagger\Client\Api\OrdersApi();
$email = "email_example"; // string | email

try {
    $result = $api_instance->ordersPurchaseLookupPost($email);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->ordersPurchaseLookupPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **email** | **string**| email |

### Return type

[**\Swagger\Client\Model\Response[]**](../Model/Response.md)

### Authorization

[JWT](../../README.md#JWT), [API-KEY](../../README.md#API-KEY)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

