# Swagger\Client\TrackingsApi

All URIs are relative to *https://localhost/rest/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**postbackTest**](TrackingsApi.md#postbackTest) | **POST** /trackings/{id}/test | 
[**trackingsAdd**](TrackingsApi.md#trackingsAdd) | **POST** /trackings | 
[**trackingsDelete**](TrackingsApi.md#trackingsDelete) | **DELETE** /trackings/{id} | 
[**trackingsGet**](TrackingsApi.md#trackingsGet) | **GET** /trackings | 
[**trackingsUpdate**](TrackingsApi.md#trackingsUpdate) | **PUT** /trackings/{id} | 


# **postbackTest**
> \Swagger\Client\Model\InlineResponse2009 postbackTest($id, $destinationId, $catalogId, $clickId, $subId, $subId2, $subId3)



Send a test postback to a tracking (for GET type only)

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

$api_instance = new Swagger\Client\Api\TrackingsApi();
$id = "id_example"; // string | Tracking ID
$destinationId = 56; // int | Test destination ID
$catalogId = 56; // int | Catalog offer ID
$clickId = "clickId_example"; // string | click ID
$subId = "subId_example"; // string | sub ID
$subId2 = "subId2_example"; // string | sub ID 2
$subId3 = "subId3_example"; // string | sub ID 3

try {
    $result = $api_instance->postbackTest($id, $destinationId, $catalogId, $clickId, $subId, $subId2, $subId3);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TrackingsApi->postbackTest: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Tracking ID |
 **destinationId** | **int**| Test destination ID |
 **catalogId** | **int**| Catalog offer ID |
 **clickId** | **string**| click ID | [optional]
 **subId** | **string**| sub ID | [optional]
 **subId2** | **string**| sub ID 2 | [optional]
 **subId3** | **string**| sub ID 3 | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2009**](../Model/InlineResponse2009.md)

### Authorization

[JWT](../../README.md#JWT), [API-KEY](../../README.md#API-KEY)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **trackingsAdd**
> \Swagger\Client\Model\InlineResponse2007 trackingsAdd($catalogId, $type, $data)



Add a new tracking

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

$api_instance = new Swagger\Client\Api\TrackingsApi();
$catalogId = "catalogId_example"; // string | Offer's catalog ID
$type = "type_example"; // string | Tracking type
$data = "data_example"; // string | Tracking specific data

try {
    $result = $api_instance->trackingsAdd($catalogId, $type, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TrackingsApi->trackingsAdd: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **catalogId** | **string**| Offer&#39;s catalog ID |
 **type** | **string**| Tracking type |
 **data** | **string**| Tracking specific data |

### Return type

[**\Swagger\Client\Model\InlineResponse2007**](../Model/InlineResponse2007.md)

### Authorization

[JWT](../../README.md#JWT), [API-KEY](../../README.md#API-KEY)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **trackingsDelete**
> \Swagger\Client\Model\InlineResponse2005 trackingsDelete($id)



Delete a Tracking

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

$api_instance = new Swagger\Client\Api\TrackingsApi();
$id = "id_example"; // string | Tracking ID

try {
    $result = $api_instance->trackingsDelete($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TrackingsApi->trackingsDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Tracking ID |

### Return type

[**\Swagger\Client\Model\InlineResponse2005**](../Model/InlineResponse2005.md)

### Authorization

[JWT](../../README.md#JWT), [API-KEY](../../README.md#API-KEY)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **trackingsGet**
> \Swagger\Client\Model\InlineResponse2006 trackingsGet($catalogId)



Get list of `Tracking` objects.

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

$api_instance = new Swagger\Client\Api\TrackingsApi();
$catalogId = "catalogId_example"; // string | Offer's catalog ID

try {
    $result = $api_instance->trackingsGet($catalogId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TrackingsApi->trackingsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **catalogId** | **string**| Offer&#39;s catalog ID |

### Return type

[**\Swagger\Client\Model\InlineResponse2006**](../Model/InlineResponse2006.md)

### Authorization

[JWT](../../README.md#JWT), [API-KEY](../../README.md#API-KEY)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **trackingsUpdate**
> \Swagger\Client\Model\InlineResponse2008 trackingsUpdate($id, $data)



Update a tracking

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

$api_instance = new Swagger\Client\Api\TrackingsApi();
$id = "id_example"; // string | Tracking ID
$data = "data_example"; // string | Tracking specific data

try {
    $result = $api_instance->trackingsUpdate($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TrackingsApi->trackingsUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Tracking ID |
 **data** | **string**| Tracking specific data |

### Return type

[**\Swagger\Client\Model\InlineResponse2008**](../Model/InlineResponse2008.md)

### Authorization

[JWT](../../README.md#JWT), [API-KEY](../../README.md#API-KEY)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

