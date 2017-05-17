# Swagger\Client\DomainsApi

All URIs are relative to *https://localhost/rest/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**domainsDelete**](DomainsApi.md#domainsDelete) | **DELETE** /domains/{id} | 
[**domainsEmailIdDelete**](DomainsApi.md#domainsEmailIdDelete) | **DELETE** /domains/email/{id} | 
[**domainsEmailPost**](DomainsApi.md#domainsEmailPost) | **POST** /domains/email | 
[**domainsGet**](DomainsApi.md#domainsGet) | **GET** /domains | 
[**domainsGet_0**](DomainsApi.md#domainsGet_0) | **GET** /domains/{id} | 
[**domainsIdUploadCertPost**](DomainsApi.md#domainsIdUploadCertPost) | **POST** /domains/{id}/upload-cert | 
[**domainsPost**](DomainsApi.md#domainsPost) | **POST** /domains | 
[**domainsUpdate**](DomainsApi.md#domainsUpdate) | **PUT** /domains/{id} | 


# **domainsDelete**
> \Swagger\Client\Model\Domain[] domainsDelete($id)



Get a `Domain`.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\DomainsApi();
$id = "id_example"; // string | 

try {
    $result = $api_instance->domainsDelete($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainsApi->domainsDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\Swagger\Client\Model\Domain[]**](../Model/Domain.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **domainsEmailIdDelete**
> \Swagger\Client\Model\Domain domainsEmailIdDelete($id)



Delete a `Email` for the domain.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\DomainsApi();
$id = "id_example"; // string | Email address

try {
    $result = $api_instance->domainsEmailIdDelete($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainsApi->domainsEmailIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Email address |

### Return type

[**\Swagger\Client\Model\Domain**](../Model/Domain.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **domainsEmailPost**
> \Swagger\Client\Model\Domain domainsEmailPost($labels)



Create a `Email` for the domain.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\DomainsApi();
$labels = new \Swagger\Client\Model\NewDomain(); // \Swagger\Client\Model\NewDomain | Json Formatted body

try {
    $result = $api_instance->domainsEmailPost($labels);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainsApi->domainsEmailPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **labels** | [**\Swagger\Client\Model\NewDomain**](../Model/\Swagger\Client\Model\NewDomain.md)| Json Formatted body |

### Return type

[**\Swagger\Client\Model\Domain**](../Model/Domain.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **domainsGet**
> \Swagger\Client\Model\Domain[] domainsGet()



Get `Domain` objects.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: API-KEY
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$api_instance = new Swagger\Client\Api\DomainsApi();

try {
    $result = $api_instance->domainsGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainsApi->domainsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\Domain[]**](../Model/Domain.md)

### Authorization

[API-KEY](../../README.md#API-KEY)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **domainsGet_0**
> \Swagger\Client\Model\Domain[] domainsGet_0($id)



Delete `Domain`.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\DomainsApi();
$id = "id_example"; // string | 

try {
    $result = $api_instance->domainsGet_0($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainsApi->domainsGet_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\Swagger\Client\Model\Domain[]**](../Model/Domain.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **domainsIdUploadCertPost**
> \Swagger\Client\Model\Domain domainsIdUploadCertPost($id, $cert, $key)



Update `Domain` certificate.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\DomainsApi();
$id = "id_example"; // string | 
$cert = "/path/to/file.txt"; // \SplFileObject | Certificate
$key = "/path/to/file.txt"; // \SplFileObject | Certificate private key

try {
    $result = $api_instance->domainsIdUploadCertPost($id, $cert, $key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainsApi->domainsIdUploadCertPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **cert** | **\SplFileObject**| Certificate |
 **key** | **\SplFileObject**| Certificate private key |

### Return type

[**\Swagger\Client\Model\Domain**](../Model/Domain.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: multipart/form-data, application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **domainsPost**
> \Swagger\Client\Model\Domain[] domainsPost($domain, $type, $cert, $key)



Create `Domain` objects.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\DomainsApi();
$domain = "domain_example"; // string | Domain
$type = "type_example"; // string | Domain type
$cert = "/path/to/file.txt"; // \SplFileObject | Certificate
$key = "/path/to/file.txt"; // \SplFileObject | Certificate private key

try {
    $result = $api_instance->domainsPost($domain, $type, $cert, $key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainsApi->domainsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **domain** | **string**| Domain |
 **type** | **string**| Domain type |
 **cert** | **\SplFileObject**| Certificate |
 **key** | **\SplFileObject**| Certificate private key |

### Return type

[**\Swagger\Client\Model\Domain[]**](../Model/Domain.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: multipart/form-data, application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **domainsUpdate**
> \Swagger\Client\Model\Domain domainsUpdate($id, $status, $hop)



Update `Domain` status.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\DomainsApi();
$id = "id_example"; // string | 
$status = "status_example"; // string | Status of the domain
$hop = "on"; // string | Whether to turn of hop for linker, by default, it should be on unless you know what you are doing.

try {
    $result = $api_instance->domainsUpdate($id, $status, $hop);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainsApi->domainsUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **status** | **string**| Status of the domain | [optional]
 **hop** | **string**| Whether to turn of hop for linker, by default, it should be on unless you know what you are doing. | [optional] [default to on]

### Return type

[**\Swagger\Client\Model\Domain**](../Model/Domain.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

