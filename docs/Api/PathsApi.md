# Swagger\Client\PathsApi

All URIs are relative to *https://localhost/rest/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createNode**](PathsApi.md#createNode) | **POST** /paths/{pathId}/nodes/ | Create path node
[**createPath**](PathsApi.md#createPath) | **POST** /paths | Create path
[**deleteNode**](PathsApi.md#deleteNode) | **DELETE** /paths/{pathId}/nodes/{nodeId} | Delete a node
[**deletePath**](PathsApi.md#deletePath) | **DELETE** /paths/{pathId}/ | Delete path
[**getAllPaths**](PathsApi.md#getAllPaths) | **GET** /paths | Get Paths
[**getNode**](PathsApi.md#getNode) | **GET** /paths/{pathId}/nodes/{nodeId} | Get a node
[**getNodesInPath**](PathsApi.md#getNodesInPath) | **GET** /paths/{pathId}/nodes/ | Get nodes in a path
[**getPathInfo**](PathsApi.md#getPathInfo) | **GET** /paths/{pathId}/ | Get Path
[**updateNode**](PathsApi.md#updateNode) | **PUT** /paths/{pathId}/nodes/{nodeId} | Update a node
[**updatePath**](PathsApi.md#updatePath) | **PUT** /paths/{pathId}/ | Update path


# **createNode**
> \Swagger\Client\Model\PathNodeObj createNode($pathId, $offerId, $upgradeNodeId, $downgradeNodeId, $upLimit, $downLimit)

Create path node

Create a path node

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

$api_instance = new Swagger\Client\Api\PathsApi();
$pathId = 56; // int | Path Id
$offerId = 56; // int | Offer Id
$upgradeNodeId = 56; // int | Upgrade Node Id of This Node
$downgradeNodeId = 56; // int | Downgrade Node Id of This Node
$upLimit = 56; // int | Up Limit of This Node
$downLimit = 56; // int | Down Limit of This Node

try {
    $result = $api_instance->createNode($pathId, $offerId, $upgradeNodeId, $downgradeNodeId, $upLimit, $downLimit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PathsApi->createNode: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pathId** | **int**| Path Id |
 **offerId** | **int**| Offer Id |
 **upgradeNodeId** | **int**| Upgrade Node Id of This Node | [optional]
 **downgradeNodeId** | **int**| Downgrade Node Id of This Node | [optional]
 **upLimit** | **int**| Up Limit of This Node | [optional]
 **downLimit** | **int**| Down Limit of This Node | [optional]

### Return type

[**\Swagger\Client\Model\PathNodeObj**](../Model/PathNodeObj.md)

### Authorization

[JWT](../../README.md#JWT), [API-KEY](../../README.md#API-KEY)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createPath**
> \Swagger\Client\Model\PathObj createPath($name, $accountId, $status)

Create path

Create a path

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

$api_instance = new Swagger\Client\Api\PathsApi();
$name = "name_example"; // string | Path name
$accountId = 56; // int | Merchant account id
$status = "status_example"; // string | Path status

try {
    $result = $api_instance->createPath($name, $accountId, $status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PathsApi->createPath: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Path name |
 **accountId** | **int**| Merchant account id |
 **status** | **string**| Path status | [optional]

### Return type

[**\Swagger\Client\Model\PathObj**](../Model/PathObj.md)

### Authorization

[JWT](../../README.md#JWT), [API-KEY](../../README.md#API-KEY)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteNode**
> \Swagger\Client\Model\NodeDeleteObj deleteNode($pathId, $nodeId)

Delete a node

Delete a node by a node id

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

$api_instance = new Swagger\Client\Api\PathsApi();
$pathId = 56; // int | Path Id
$nodeId = 56; // int | Node Id

try {
    $result = $api_instance->deleteNode($pathId, $nodeId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PathsApi->deleteNode: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pathId** | **int**| Path Id |
 **nodeId** | **int**| Node Id |

### Return type

[**\Swagger\Client\Model\NodeDeleteObj**](../Model/NodeDeleteObj.md)

### Authorization

[JWT](../../README.md#JWT), [API-KEY](../../README.md#API-KEY)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deletePath**
> \Swagger\Client\Model\PathsDeleteObj deletePath($pathId)

Delete path

Delete a path

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

$api_instance = new Swagger\Client\Api\PathsApi();
$pathId = 56; // int | Path id

try {
    $result = $api_instance->deletePath($pathId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PathsApi->deletePath: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pathId** | **int**| Path id |

### Return type

[**\Swagger\Client\Model\PathsDeleteObj**](../Model/PathsDeleteObj.md)

### Authorization

[JWT](../../README.md#JWT), [API-KEY](../../README.md#API-KEY)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAllPaths**
> \Swagger\Client\Model\AllPathInfos getAllPaths($name, $status)

Get Paths

Get all paths in the system which meet search criteria

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

$api_instance = new Swagger\Client\Api\PathsApi();
$name = "name_example"; // string | Path Name
$status = "status_example"; // string | Path Status

try {
    $result = $api_instance->getAllPaths($name, $status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PathsApi->getAllPaths: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Path Name | [optional]
 **status** | **string**| Path Status | [optional]

### Return type

[**\Swagger\Client\Model\AllPathInfos**](../Model/AllPathInfos.md)

### Authorization

[JWT](../../README.md#JWT), [API-KEY](../../README.md#API-KEY)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getNode**
> \Swagger\Client\Model\PathNodeObj getNode($pathId, $nodeId)

Get a node

Get a node by a node id

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

$api_instance = new Swagger\Client\Api\PathsApi();
$pathId = 56; // int | Path Id
$nodeId = 56; // int | Node Id

try {
    $result = $api_instance->getNode($pathId, $nodeId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PathsApi->getNode: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pathId** | **int**| Path Id |
 **nodeId** | **int**| Node Id |

### Return type

[**\Swagger\Client\Model\PathNodeObj**](../Model/PathNodeObj.md)

### Authorization

[JWT](../../README.md#JWT), [API-KEY](../../README.md#API-KEY)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getNodesInPath**
> \Swagger\Client\Model\AllPathNodes getNodesInPath($pathId)

Get nodes in a path

Get nodes in a path

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

$api_instance = new Swagger\Client\Api\PathsApi();
$pathId = 56; // int | Path Id

try {
    $result = $api_instance->getNodesInPath($pathId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PathsApi->getNodesInPath: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pathId** | **int**| Path Id |

### Return type

[**\Swagger\Client\Model\AllPathNodes**](../Model/AllPathNodes.md)

### Authorization

[JWT](../../README.md#JWT), [API-KEY](../../README.md#API-KEY)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPathInfo**
> \Swagger\Client\Model\PathObj getPathInfo($pathId)

Get Path

Get detailed info for a path

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

$api_instance = new Swagger\Client\Api\PathsApi();
$pathId = 56; // int | Path id

try {
    $result = $api_instance->getPathInfo($pathId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PathsApi->getPathInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pathId** | **int**| Path id |

### Return type

[**\Swagger\Client\Model\PathObj**](../Model/PathObj.md)

### Authorization

[JWT](../../README.md#JWT), [API-KEY](../../README.md#API-KEY)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateNode**
> \Swagger\Client\Model\PathNodeObj updateNode($pathId, $nodeId, $upgradeNodeId, $downgradeNodeId, $upLimit, $downLimit)

Update a node

Update a node

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

$api_instance = new Swagger\Client\Api\PathsApi();
$pathId = 56; // int | Path Id
$nodeId = 56; // int | Node Id
$upgradeNodeId = 56; // int | Upgrade Node Id of This Node
$downgradeNodeId = 56; // int | Downgrade Node Id of This Node
$upLimit = 56; // int | Up Limit of This Node
$downLimit = 56; // int | Down Limit of This Node

try {
    $result = $api_instance->updateNode($pathId, $nodeId, $upgradeNodeId, $downgradeNodeId, $upLimit, $downLimit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PathsApi->updateNode: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pathId** | **int**| Path Id |
 **nodeId** | **int**| Node Id |
 **upgradeNodeId** | **int**| Upgrade Node Id of This Node | [optional]
 **downgradeNodeId** | **int**| Downgrade Node Id of This Node | [optional]
 **upLimit** | **int**| Up Limit of This Node | [optional]
 **downLimit** | **int**| Down Limit of This Node | [optional]

### Return type

[**\Swagger\Client\Model\PathNodeObj**](../Model/PathNodeObj.md)

### Authorization

[JWT](../../README.md#JWT), [API-KEY](../../README.md#API-KEY)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updatePath**
> \Swagger\Client\Model\PathObj updatePath($pathId, $name, $status)

Update path

Update path

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

$api_instance = new Swagger\Client\Api\PathsApi();
$pathId = 56; // int | Path id
$name = "name_example"; // string | path name
$status = "status_example"; // string | path status

try {
    $result = $api_instance->updatePath($pathId, $name, $status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PathsApi->updatePath: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pathId** | **int**| Path id |
 **name** | **string**| path name | [optional]
 **status** | **string**| path status | [optional]

### Return type

[**\Swagger\Client\Model\PathObj**](../Model/PathObj.md)

### Authorization

[JWT](../../README.md#JWT), [API-KEY](../../README.md#API-KEY)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

