# Swagger\Client\OrdersApi

All URIs are relative to *https://localhost/rest/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**ordersCustomerEmailEmailGet**](OrdersApi.md#ordersCustomerEmailEmailGet) | **GET** /orders/customer-email/{email} | 
[**ordersOrderIdGet**](OrdersApi.md#ordersOrderIdGet) | **GET** /orders/{orderId} | 


# **ordersCustomerEmailEmailGet**
> \Swagger\Client\Model\CustomerOrders[] ordersCustomerEmailEmailGet($email, $merchant_fid)



Get a list of orders

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIKeyHeader
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Authorization-JWT', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Authorization-JWT', 'Bearer');

$api_instance = new Swagger\Client\Api\OrdersApi();
$email = "email_example"; // string | Customer email
$merchant_fid = "merchant_fid_example"; // string | Merchant fid (optional)

try {
    $result = $api_instance->ordersCustomerEmailEmailGet($email, $merchant_fid);
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
 **merchant_fid** | **string**| Merchant fid (optional) | [optional]

### Return type

[**\Swagger\Client\Model\CustomerOrders[]**](../Model/CustomerOrders.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **ordersOrderIdGet**
> \Swagger\Client\Model\Transaction[] ordersOrderIdGet($order_id)



Get a list of transactions a order has

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIKeyHeader
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Authorization-JWT', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Authorization-JWT', 'Bearer');

$api_instance = new Swagger\Client\Api\OrdersApi();
$order_id = 56; // int | Order id

try {
    $result = $api_instance->ordersOrderIdGet($order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->ordersOrderIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **int**| Order id |

### Return type

[**\Swagger\Client\Model\Transaction[]**](../Model/Transaction.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

