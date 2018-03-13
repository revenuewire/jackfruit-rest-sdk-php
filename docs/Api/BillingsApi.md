# Swagger\Client\BillingsApi

All URIs are relative to *https://localhost/rest/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**billingInfoAllUpdate**](BillingsApi.md#billingInfoAllUpdate) | **PUT** /billings/update-card | 
[**billingInfoUpdate**](BillingsApi.md#billingInfoUpdate) | **PUT** /billings/{billingInfoId} | 
[**billingInfoUpdatePaypal**](BillingsApi.md#billingInfoUpdatePaypal) | **PUT** /billings/update-paypal | 
[**setUpPaypalUrl**](BillingsApi.md#setUpPaypalUrl) | **POST** /billings/{billingInfoId}/setup-paypal-url | 


# **billingInfoAllUpdate**
> \Swagger\Client\Model\CardUpdateResponse billingInfoAllUpdate($customerEmail, $oldFirstSix, $oldLastFour, $oldCardExpiry, $cardHolderFullName, $cardNumber, $cardExpiry, $cardCCV, $postalCode, $address, $address2, $city, $country, $state)



Update customer billing info and apply changes to all related profiles

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

$api_instance = new Swagger\Client\Api\BillingsApi();
$customerEmail = "customerEmail_example"; // string | Customer email
$oldFirstSix = "oldFirstSix_example"; // string | The first six digits for the old card
$oldLastFour = "oldLastFour_example"; // string | The last four digits for the old card
$oldCardExpiry = "oldCardExpiry_example"; // string | Credit Card expiry for the old card
$cardHolderFullName = "cardHolderFullName_example"; // string | Card holder full name
$cardNumber = "cardNumber_example"; // string | Credit Card number
$cardExpiry = "cardExpiry_example"; // string | Credit Card expiry
$cardCCV = "cardCCV_example"; // string | Credit CCV
$postalCode = "postalCode_example"; // string | Postal code
$address = "address_example"; // string | Billing address one
$address2 = "address2_example"; // string | Billing address two
$city = "city_example"; // string | Billing city
$country = "country_example"; // string | Billing country
$state = "state_example"; // string | Billing state or province

try {
    $result = $api_instance->billingInfoAllUpdate($customerEmail, $oldFirstSix, $oldLastFour, $oldCardExpiry, $cardHolderFullName, $cardNumber, $cardExpiry, $cardCCV, $postalCode, $address, $address2, $city, $country, $state);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillingsApi->billingInfoAllUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customerEmail** | **string**| Customer email |
 **oldFirstSix** | **string**| The first six digits for the old card |
 **oldLastFour** | **string**| The last four digits for the old card |
 **oldCardExpiry** | **string**| Credit Card expiry for the old card |
 **cardHolderFullName** | **string**| Card holder full name |
 **cardNumber** | **string**| Credit Card number |
 **cardExpiry** | **string**| Credit Card expiry |
 **cardCCV** | **string**| Credit CCV | [optional]
 **postalCode** | **string**| Postal code | [optional]
 **address** | **string**| Billing address one | [optional]
 **address2** | **string**| Billing address two | [optional]
 **city** | **string**| Billing city | [optional]
 **country** | **string**| Billing country | [optional]
 **state** | **string**| Billing state or province | [optional]

### Return type

[**\Swagger\Client\Model\CardUpdateResponse**](../Model/CardUpdateResponse.md)

### Authorization

[JWT](../../README.md#JWT), [API-KEY](../../README.md#API-KEY)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **billingInfoUpdate**
> \Swagger\Client\Model\BillInfoResponse billingInfoUpdate($billingInfoId, $cardHolderFullName, $cardNumber, $cardExpiry, $cardCCV, $recurringTransactionItemId, $postalCode, $address, $address2, $city, $country, $state)



Update customer billing info for a recurring profile using redit card

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

$api_instance = new Swagger\Client\Api\BillingsApi();
$billingInfoId = 56; // int | bill info id for the recurring transaction item
$cardHolderFullName = "cardHolderFullName_example"; // string | Card holder full name
$cardNumber = "cardNumber_example"; // string | Credit Card number
$cardExpiry = "cardExpiry_example"; // string | Credit Card expiry
$cardCCV = "cardCCV_example"; // string | Credit CCV
$recurringTransactionItemId = "recurringTransactionItemId_example"; // string | recurring transaction item to be updated
$postalCode = "postalCode_example"; // string | Postal code
$address = "address_example"; // string | Billing address one
$address2 = "address2_example"; // string | Billing address two
$city = "city_example"; // string | Billing city
$country = "country_example"; // string | Billing country
$state = "state_example"; // string | Billing state or province

try {
    $result = $api_instance->billingInfoUpdate($billingInfoId, $cardHolderFullName, $cardNumber, $cardExpiry, $cardCCV, $recurringTransactionItemId, $postalCode, $address, $address2, $city, $country, $state);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillingsApi->billingInfoUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **billingInfoId** | **int**| bill info id for the recurring transaction item |
 **cardHolderFullName** | **string**| Card holder full name |
 **cardNumber** | **string**| Credit Card number |
 **cardExpiry** | **string**| Credit Card expiry |
 **cardCCV** | **string**| Credit CCV | [optional]
 **recurringTransactionItemId** | **string**| recurring transaction item to be updated | [optional]
 **postalCode** | **string**| Postal code | [optional]
 **address** | **string**| Billing address one | [optional]
 **address2** | **string**| Billing address two | [optional]
 **city** | **string**| Billing city | [optional]
 **country** | **string**| Billing country | [optional]
 **state** | **string**| Billing state or province | [optional]

### Return type

[**\Swagger\Client\Model\BillInfoResponse**](../Model/BillInfoResponse.md)

### Authorization

[JWT](../../README.md#JWT), [API-KEY](../../README.md#API-KEY)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **billingInfoUpdatePaypal**
> \Swagger\Client\Model\BillInfoResponse billingInfoUpdatePaypal($ppToken, $token)



Update profile using paypal express

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

$api_instance = new Swagger\Client\Api\BillingsApi();
$ppToken = "ppToken_example"; // string | sale info token generated by our side
$token = "token_example"; // string | token generated by paypal

try {
    $result = $api_instance->billingInfoUpdatePaypal($ppToken, $token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillingsApi->billingInfoUpdatePaypal: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ppToken** | **string**| sale info token generated by our side | [optional]
 **token** | **string**| token generated by paypal | [optional]

### Return type

[**\Swagger\Client\Model\BillInfoResponse**](../Model/BillInfoResponse.md)

### Authorization

[JWT](../../README.md#JWT), [API-KEY](../../README.md#API-KEY)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setUpPaypalUrl**
> \Swagger\Client\Model\PaypalUrl setUpPaypalUrl($billingInfoId, $returnUrl, $cancelUrl, $recurringTransactionItemId)



Generate a paypal express url for updating billing info

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

$api_instance = new Swagger\Client\Api\BillingsApi();
$billingInfoId = 56; // int | billing info id
$returnUrl = "returnUrl_example"; // string | return url if everything goes well in paypal website
$cancelUrl = "cancelUrl_example"; // string | cancel url if customer click cancel button in paypal website
$recurringTransactionItemId = "recurringTransactionItemId_example"; // string | recurring transaction item to be updated

try {
    $result = $api_instance->setUpPaypalUrl($billingInfoId, $returnUrl, $cancelUrl, $recurringTransactionItemId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillingsApi->setUpPaypalUrl: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **billingInfoId** | **int**| billing info id |
 **returnUrl** | **string**| return url if everything goes well in paypal website |
 **cancelUrl** | **string**| cancel url if customer click cancel button in paypal website |
 **recurringTransactionItemId** | **string**| recurring transaction item to be updated |

### Return type

[**\Swagger\Client\Model\PaypalUrl**](../Model/PaypalUrl.md)

### Authorization

[JWT](../../README.md#JWT), [API-KEY](../../README.md#API-KEY)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

