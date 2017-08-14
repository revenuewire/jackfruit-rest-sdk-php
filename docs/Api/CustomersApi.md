# Swagger\Client\CustomersApi

All URIs are relative to *https://localhost/rest/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getCustomer**](CustomersApi.md#getCustomer) | **GET** /customers/{customerId} | 
[**getCustomersForMerchant**](CustomersApi.md#getCustomersForMerchant) | **GET** /customers | 
[**getOffers**](CustomersApi.md#getOffers) | **GET** /customers/{customerUserId}/offers | 
[**getTransactions**](CustomersApi.md#getTransactions) | **GET** /customers/{customerUserId}/transactions | 
[**updateShippingAddress**](CustomersApi.md#updateShippingAddress) | **PUT** /customers/{customerId}/address/{transactionId} | 


# **getCustomer**
> \Swagger\Client\Model\Customer getCustomer($customerId)



Get a customer object

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

$api_instance = new Swagger\Client\Api\CustomersApi();
$customerId = 56; // int | Customer id

try {
    $result = $api_instance->getCustomer($customerId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->getCustomer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customerId** | **int**| Customer id |

### Return type

[**\Swagger\Client\Model\Customer**](../Model/Customer.md)

### Authorization

[JWT](../../README.md#JWT), [API-KEY](../../README.md#API-KEY)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCustomersForMerchant**
> \Swagger\Client\Model\CustomersRespone getCustomersForMerchant()



Get list of Customers for a merchant

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

$api_instance = new Swagger\Client\Api\CustomersApi();

try {
    $result = $api_instance->getCustomersForMerchant();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->getCustomersForMerchant: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\CustomersRespone**](../Model/CustomersRespone.md)

### Authorization

[JWT](../../README.md#JWT), [API-KEY](../../README.md#API-KEY)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOffers**
> \Swagger\Client\Model\CustomerOffers getOffers($customerUserId)



Get a list of Offers purchased by the customer

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

$api_instance = new Swagger\Client\Api\CustomersApi();
$customerUserId = "customerUserId_example"; // string | Customer user id

try {
    $result = $api_instance->getOffers($customerUserId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->getOffers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customerUserId** | **string**| Customer user id |

### Return type

[**\Swagger\Client\Model\CustomerOffers**](../Model/CustomerOffers.md)

### Authorization

[JWT](../../README.md#JWT), [API-KEY](../../README.md#API-KEY)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTransactions**
> \Swagger\Client\Model\CustomerTransactions getTransactions($customerUserId)



Get a list of Transactions purchased by the customer

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

$api_instance = new Swagger\Client\Api\CustomersApi();
$customerUserId = 56; // int | Customer user id

try {
    $result = $api_instance->getTransactions($customerUserId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->getTransactions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customerUserId** | **int**| Customer user id |

### Return type

[**\Swagger\Client\Model\CustomerTransactions**](../Model/CustomerTransactions.md)

### Authorization

[JWT](../../README.md#JWT), [API-KEY](../../README.md#API-KEY)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateShippingAddress**
> \Swagger\Client\Model\CustomerAddress updateShippingAddress($customerId, $transactionId, $name, $address, $countryCode, $city, $postalCode)



Update customer group account oder shipping address

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

$api_instance = new Swagger\Client\Api\CustomersApi();
$customerId = 56; // int | Customer id
$transactionId = 56; // int | transaction id
$name = "name_example"; // string | Customer's name
$address = "address_example"; // string | Customer's address
$countryCode = "countryCode_example"; // string | Country code
$city = "city_example"; // string | City
$postalCode = "postalCode_example"; // string | Postal code

try {
    $result = $api_instance->updateShippingAddress($customerId, $transactionId, $name, $address, $countryCode, $city, $postalCode);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->updateShippingAddress: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customerId** | **int**| Customer id |
 **transactionId** | **int**| transaction id |
 **name** | **string**| Customer&#39;s name |
 **address** | **string**| Customer&#39;s address |
 **countryCode** | **string**| Country code |
 **city** | **string**| City |
 **postalCode** | **string**| Postal code |

### Return type

[**\Swagger\Client\Model\CustomerAddress**](../Model/CustomerAddress.md)

### Authorization

[JWT](../../README.md#JWT), [API-KEY](../../README.md#API-KEY)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

