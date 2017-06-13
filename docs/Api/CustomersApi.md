# Swagger\Client\CustomersApi

All URIs are relative to *https://localhost/rest/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**customersCustomerIdAddressTransactionIdPut**](CustomersApi.md#customersCustomerIdAddressTransactionIdPut) | **PUT** /customers/{customerId}/address/{transactionId} | 
[**customersCustomerIdGet**](CustomersApi.md#customersCustomerIdGet) | **GET** /customers/{customerId} | 
[**customersCustomerUserIdOffersGet**](CustomersApi.md#customersCustomerUserIdOffersGet) | **GET** /customers/{customerUserId}/offers | 
[**customersCustomerUserIdTransactionsGet**](CustomersApi.md#customersCustomerUserIdTransactionsGet) | **GET** /customers/{customerUserId}/transactions | 
[**customersGet**](CustomersApi.md#customersGet) | **GET** /customers | 


# **customersCustomerIdAddressTransactionIdPut**
> \Swagger\Client\Model\CustomerAddress customersCustomerIdAddressTransactionIdPut($customerId, $transactionId, $name, $address, $countryCode, $city, $postalCode)



Update customer group account address

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
$customerId = "customerId_example"; // string | Customer id
$transactionId = 56; // int | transaction id
$name = "name_example"; // string | Customer's name
$address = "address_example"; // string | Customer's address
$countryCode = "countryCode_example"; // string | Country code
$city = "city_example"; // string | City
$postalCode = "postalCode_example"; // string | Postal code

try {
    $result = $api_instance->customersCustomerIdAddressTransactionIdPut($customerId, $transactionId, $name, $address, $countryCode, $city, $postalCode);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->customersCustomerIdAddressTransactionIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customerId** | **string**| Customer id |
 **transactionId** | **int**| transaction id |
 **name** | **string**| Customer&#39;s name | [optional]
 **address** | **string**| Customer&#39;s address | [optional]
 **countryCode** | **string**| Country code | [optional]
 **city** | **string**| City | [optional]
 **postalCode** | **string**| Postal code | [optional]

### Return type

[**\Swagger\Client\Model\CustomerAddress**](../Model/CustomerAddress.md)

### Authorization

[JWT](../../README.md#JWT), [API-KEY](../../README.md#API-KEY)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customersCustomerIdGet**
> \Swagger\Client\Model\Customer customersCustomerIdGet($customerId)



Get a `Customer` object.

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
$customerId = "customerId_example"; // string | Customer id

try {
    $result = $api_instance->customersCustomerIdGet($customerId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->customersCustomerIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customerId** | **string**| Customer id |

### Return type

[**\Swagger\Client\Model\Customer**](../Model/Customer.md)

### Authorization

[JWT](../../README.md#JWT), [API-KEY](../../README.md#API-KEY)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customersCustomerUserIdOffersGet**
> \Swagger\Client\Model\CustomerOffers customersCustomerUserIdOffersGet($customerUserId)



Get a list of `Offers` purchased by the customer.

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
    $result = $api_instance->customersCustomerUserIdOffersGet($customerUserId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->customersCustomerUserIdOffersGet: ', $e->getMessage(), PHP_EOL;
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

# **customersCustomerUserIdTransactionsGet**
> \Swagger\Client\Model\Transaction[] customersCustomerUserIdTransactionsGet($customerUserId, $accountId)



Get a list of `Transactions` purchased by the customer.

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
$accountId = 3.4; // float | Merchant account id

try {
    $result = $api_instance->customersCustomerUserIdTransactionsGet($customerUserId, $accountId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->customersCustomerUserIdTransactionsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customerUserId** | **string**| Customer user id |
 **accountId** | **float**| Merchant account id | [optional]

### Return type

[**\Swagger\Client\Model\Transaction[]**](../Model/Transaction.md)

### Authorization

[JWT](../../README.md#JWT), [API-KEY](../../README.md#API-KEY)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customersGet**
> \Swagger\Client\Model\Customer[] customersGet($email, $name, $postCode, $phone, $page, $sort)



Get list of `Customers` objects.

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
$email = "email_example"; // string | Customer's Email
$name = "name_example"; // string | Customer's Name
$postCode = "postCode_example"; // string | Customer's Post code
$phone = "phone_example"; // string | Customer's phone
$page = 1; // int | Page number
$sort = "-created,email"; // string | Multiple sorting indicators separated by comma

try {
    $result = $api_instance->customersGet($email, $name, $postCode, $phone, $page, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->customersGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **email** | **string**| Customer&#39;s Email | [optional]
 **name** | **string**| Customer&#39;s Name | [optional]
 **postCode** | **string**| Customer&#39;s Post code | [optional]
 **phone** | **string**| Customer&#39;s phone | [optional]
 **page** | **int**| Page number | [optional] [default to 1]
 **sort** | **string**| Multiple sorting indicators separated by comma | [optional] [default to -created,email]

### Return type

[**\Swagger\Client\Model\Customer[]**](../Model/Customer.md)

### Authorization

[JWT](../../README.md#JWT), [API-KEY](../../README.md#API-KEY)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

