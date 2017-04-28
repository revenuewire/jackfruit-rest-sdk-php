# Swagger\Client\CustomersApi

All URIs are relative to *https://localhost/rest/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**customersCustomerIdAddressTransactionIdPut**](CustomersApi.md#customersCustomerIdAddressTransactionIdPut) | **PUT** /customers/{customerId}/address/{transactionId} | 
[**customersCustomerIdBillingInfoBillingInfoIdPut**](CustomersApi.md#customersCustomerIdBillingInfoBillingInfoIdPut) | **PUT** /customers/{customerId}/billing-info/{billingInfoId} | 
[**customersCustomerIdGet**](CustomersApi.md#customersCustomerIdGet) | **GET** /customers/{customerId} | 
[**customersCustomerUserIdOffersGet**](CustomersApi.md#customersCustomerUserIdOffersGet) | **GET** /customers/{customerUserId}/offers | 
[**customersCustomerUserIdTransactionsGet**](CustomersApi.md#customersCustomerUserIdTransactionsGet) | **GET** /customers/{customerUserId}/transactions | 
[**customersGet**](CustomersApi.md#customersGet) | **GET** /customers | 
[**customersPost**](CustomersApi.md#customersPost) | **POST** /customers/ | 


# **customersCustomerIdAddressTransactionIdPut**
> \Swagger\Client\Model\Customer[] customersCustomerIdAddressTransactionIdPut($customer_id, $transaction_id, $name, $address, $country_code, $city, $postal_code)



Update customer group account address

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIKeyHeader
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Authorization-JWT', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Authorization-JWT', 'Bearer');

$api_instance = new Swagger\Client\Api\CustomersApi();
$customer_id = "customer_id_example"; // string | Customer id
$transaction_id = 56; // int | transaction id
$name = "name_example"; // string | Customer's name
$address = "address_example"; // string | Customer's address
$country_code = "country_code_example"; // string | Country code
$city = "city_example"; // string | City
$postal_code = "postal_code_example"; // string | Postal code

try {
    $result = $api_instance->customersCustomerIdAddressTransactionIdPut($customer_id, $transaction_id, $name, $address, $country_code, $city, $postal_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->customersCustomerIdAddressTransactionIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **string**| Customer id |
 **transaction_id** | **int**| transaction id |
 **name** | **string**| Customer&#39;s name | [optional]
 **address** | **string**| Customer&#39;s address | [optional]
 **country_code** | **string**| Country code | [optional]
 **city** | **string**| City | [optional]
 **postal_code** | **string**| Postal code | [optional]

### Return type

[**\Swagger\Client\Model\Customer[]**](../Model/Customer.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customersCustomerIdBillingInfoBillingInfoIdPut**
> \Swagger\Client\Model\Customer customersCustomerIdBillingInfoBillingInfoIdPut($customer_id, $billing_info_id, $first_name, $last_name, $card_number, $card_expiry, $card_ccv, $selected_gateway, $postal_code)



Update customer billing info for a recurring profile

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIKeyHeader
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Authorization-JWT', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Authorization-JWT', 'Bearer');

$api_instance = new Swagger\Client\Api\CustomersApi();
$customer_id = "customer_id_example"; // string | Customer id
$billing_info_id = 56; // int | bill info id for the recurring transaction item
$first_name = "first_name_example"; // string | Customer's new first name
$last_name = "last_name_example"; // string | Customer's new last name
$card_number = "card_number_example"; // string | Credit Card number
$card_expiry = "card_expiry_example"; // string | Credit Card expiry
$card_ccv = "card_ccv_example"; // string | Credit CCV (optional)
$selected_gateway = "selected_gateway_example"; // string | gateway prefered used to update billinfo (optional)
$postal_code = "postal_code_example"; // string | Postal code (optional)

try {
    $result = $api_instance->customersCustomerIdBillingInfoBillingInfoIdPut($customer_id, $billing_info_id, $first_name, $last_name, $card_number, $card_expiry, $card_ccv, $selected_gateway, $postal_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->customersCustomerIdBillingInfoBillingInfoIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **string**| Customer id |
 **billing_info_id** | **int**| bill info id for the recurring transaction item |
 **first_name** | **string**| Customer&#39;s new first name | [optional]
 **last_name** | **string**| Customer&#39;s new last name | [optional]
 **card_number** | **string**| Credit Card number | [optional]
 **card_expiry** | **string**| Credit Card expiry | [optional]
 **card_ccv** | **string**| Credit CCV (optional) | [optional]
 **selected_gateway** | **string**| gateway prefered used to update billinfo (optional) | [optional]
 **postal_code** | **string**| Postal code (optional) | [optional]

### Return type

[**\Swagger\Client\Model\Customer**](../Model/Customer.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customersCustomerIdGet**
> \Swagger\Client\Model\Customer customersCustomerIdGet($customer_id)



Get a `Customer` object.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIKeyHeader
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Authorization-JWT', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Authorization-JWT', 'Bearer');

$api_instance = new Swagger\Client\Api\CustomersApi();
$customer_id = "customer_id_example"; // string | Customer id

try {
    $result = $api_instance->customersCustomerIdGet($customer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->customersCustomerIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **string**| Customer id |

### Return type

[**\Swagger\Client\Model\Customer**](../Model/Customer.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customersCustomerUserIdOffersGet**
> \Swagger\Client\Model\CustomerOffer[] customersCustomerUserIdOffersGet($customer_user_id)



Get a list of `Offers` purchased by the customer.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIKeyHeader
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Authorization-JWT', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Authorization-JWT', 'Bearer');

$api_instance = new Swagger\Client\Api\CustomersApi();
$customer_user_id = "customer_user_id_example"; // string | Customer user id

try {
    $result = $api_instance->customersCustomerUserIdOffersGet($customer_user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->customersCustomerUserIdOffersGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_user_id** | **string**| Customer user id |

### Return type

[**\Swagger\Client\Model\CustomerOffer[]**](../Model/CustomerOffer.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customersCustomerUserIdTransactionsGet**
> \Swagger\Client\Model\Transaction[] customersCustomerUserIdTransactionsGet($customer_user_id, $account_id)



Get a list of `Transactions` purchased by the customer.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIKeyHeader
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Authorization-JWT', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Authorization-JWT', 'Bearer');

$api_instance = new Swagger\Client\Api\CustomersApi();
$customer_user_id = "customer_user_id_example"; // string | Customer user id
$account_id = 3.4; // float | Merchant account id

try {
    $result = $api_instance->customersCustomerUserIdTransactionsGet($customer_user_id, $account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->customersCustomerUserIdTransactionsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_user_id** | **string**| Customer user id |
 **account_id** | **float**| Merchant account id | [optional]

### Return type

[**\Swagger\Client\Model\Transaction[]**](../Model/Transaction.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customersGet**
> \Swagger\Client\Model\Customer[] customersGet($email, $name, $post_code, $phone, $page, $sort)



Get list of `Customers` objects.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIKeyHeader
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Authorization-JWT', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Authorization-JWT', 'Bearer');

$api_instance = new Swagger\Client\Api\CustomersApi();
$email = "email_example"; // string | Customer's Email
$name = "name_example"; // string | Customer's Name
$post_code = "post_code_example"; // string | Customer's Post code
$phone = "phone_example"; // string | Customer's phone
$page = 1; // int | Page number
$sort = "-created,email"; // string | Multiple sorting indicators separated by comma

try {
    $result = $api_instance->customersGet($email, $name, $post_code, $phone, $page, $sort);
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
 **post_code** | **string**| Customer&#39;s Post code | [optional]
 **phone** | **string**| Customer&#39;s phone | [optional]
 **page** | **int**| Page number | [optional] [default to 1]
 **sort** | **string**| Multiple sorting indicators separated by comma | [optional] [default to -created,email]

### Return type

[**\Swagger\Client\Model\Customer[]**](../Model/Customer.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customersPost**
> \Swagger\Client\Model\Customer[] customersPost($email, $password, $first_name, $last_name)



Create a user for customer

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIKeyHeader
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Authorization-JWT', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Authorization-JWT', 'Bearer');

$api_instance = new Swagger\Client\Api\CustomersApi();
$email = "email_example"; // string | Customer's email
$password = "password_example"; // string | Customer password
$first_name = "first_name_example"; // string | Customer's first name
$last_name = "last_name_example"; // string | Customer's last name

try {
    $result = $api_instance->customersPost($email, $password, $first_name, $last_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->customersPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **email** | **string**| Customer&#39;s email | [optional]
 **password** | **string**| Customer password | [optional]
 **first_name** | **string**| Customer&#39;s first name | [optional]
 **last_name** | **string**| Customer&#39;s last name | [optional]

### Return type

[**\Swagger\Client\Model\Customer[]**](../Model/Customer.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

