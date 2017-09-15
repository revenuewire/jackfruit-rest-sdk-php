# Swagger\Client\CatalogApi

All URIs are relative to *https://localhost/rest/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**catalogOfferGet**](CatalogApi.md#catalogOfferGet) | **GET** /catalog/{id} | 
[**catalogOffersGet**](CatalogApi.md#catalogOffersGet) | **GET** /catalog | 
[**newOffersGet**](CatalogApi.md#newOffersGet) | **GET** /catalog/new-offers | 
[**newOffersPut**](CatalogApi.md#newOffersPut) | **PUT** /catalog/new-offers | 
[**topOffersGet**](CatalogApi.md#topOffersGet) | **GET** /catalog/top-offers | 
[**topOffersPut**](CatalogApi.md#topOffersPut) | **PUT** /catalog/top-offers | 


# **catalogOfferGet**
> \Swagger\Client\Model\InlineResponse2004 catalogOfferGet($id, $affiliateAccountId)



Gets `Offer` objects

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

$api_instance = new Swagger\Client\Api\CatalogApi();
$id = 56; // int | Catalog offer ID
$affiliateAccountId = 56; // int | Affiliate Group Account ID (internal use only)

try {
    $result = $api_instance->catalogOfferGet($id, $affiliateAccountId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogApi->catalogOfferGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Catalog offer ID |
 **affiliateAccountId** | **int**| Affiliate Group Account ID (internal use only) | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2004**](../Model/InlineResponse2004.md)

### Authorization

[JWT](../../README.md#JWT), [API-KEY](../../README.md#API-KEY)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **catalogOffersGet**
> \Swagger\Client\Model\InlineResponse2003 catalogOffersGet($keyword, $offerTypes, $productCategories, $languages, $geos, $promoMethods, $payoutMin, $payoutMax, $percentMin, $percentMax, $couponsOnly, $privateOnly)



Gets `Offer` objects

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

$api_instance = new Swagger\Client\Api\CatalogApi();
$keyword = "keyword_example"; // string | Search criteria keyword
$offerTypes = "offerTypes_example"; // string | Filter results by offer types. Can include RevShare or any CPA offer type. \\  JSON-formatted array (case insensitive). eg: `[\"RevShare\", \"Install\"]` (case insensitive)
$productCategories = ""; // string | Filter results by product category fids.  JSON-formatted array (case insensitive). eg: `[\"live_support\", \"antivirus\"]`
$languages = "languages_example"; // string | Filter results on (RevShare) language codes. Doesn't affect CPA results.  JSON-formatted array (case insensitive). eg: `[\"EN\", \"FR\"]`
$geos = "geos_example"; // string | Filter results on (CPA) geo codes. Doesn't affect RevShare results.  JSON-formatted array (case insensitive). eg: `[\"US\", \"CA\"]`
$promoMethods = "promoMethods_example"; // string | Filter results on promotional methods.  JSON-formatted array (case insensitive). eg: `[\"Email\", \"SEO\", 'Paid Search']`
$payoutMin = 56; // int | Minimum fixed payout. Doesn't affect %-based payout results.
$payoutMax = 56; // int | Maximum fixed payout. Doesn't affect %-based payout results.
$percentMin = 56; // int | Minimum percentage payout. Doesn't affect fixed payout results.
$percentMax = 56; // int | Maximum percentage payout. Doesn't affect fixed payout results.
$couponsOnly = true; // bool | Show only products with coupons. RevShare only, CPA offers will be filtered out..
$privateOnly = true; // bool | Show only private network products.

try {
    $result = $api_instance->catalogOffersGet($keyword, $offerTypes, $productCategories, $languages, $geos, $promoMethods, $payoutMin, $payoutMax, $percentMin, $percentMax, $couponsOnly, $privateOnly);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogApi->catalogOffersGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **keyword** | **string**| Search criteria keyword | [optional]
 **offerTypes** | **string**| Filter results by offer types. Can include RevShare or any CPA offer type. \\  JSON-formatted array (case insensitive). eg: &#x60;[\&quot;RevShare\&quot;, \&quot;Install\&quot;]&#x60; (case insensitive) | [optional]
 **productCategories** | **string**| Filter results by product category fids.  JSON-formatted array (case insensitive). eg: &#x60;[\&quot;live_support\&quot;, \&quot;antivirus\&quot;]&#x60; | [optional] [default to ]
 **languages** | **string**| Filter results on (RevShare) language codes. Doesn&#39;t affect CPA results.  JSON-formatted array (case insensitive). eg: &#x60;[\&quot;EN\&quot;, \&quot;FR\&quot;]&#x60; | [optional]
 **geos** | **string**| Filter results on (CPA) geo codes. Doesn&#39;t affect RevShare results.  JSON-formatted array (case insensitive). eg: &#x60;[\&quot;US\&quot;, \&quot;CA\&quot;]&#x60; | [optional]
 **promoMethods** | **string**| Filter results on promotional methods.  JSON-formatted array (case insensitive). eg: &#x60;[\&quot;Email\&quot;, \&quot;SEO\&quot;, &#39;Paid Search&#39;]&#x60; | [optional]
 **payoutMin** | **int**| Minimum fixed payout. Doesn&#39;t affect %-based payout results. | [optional]
 **payoutMax** | **int**| Maximum fixed payout. Doesn&#39;t affect %-based payout results. | [optional]
 **percentMin** | **int**| Minimum percentage payout. Doesn&#39;t affect fixed payout results. | [optional]
 **percentMax** | **int**| Maximum percentage payout. Doesn&#39;t affect fixed payout results. | [optional]
 **couponsOnly** | **bool**| Show only products with coupons. RevShare only, CPA offers will be filtered out.. | [optional]
 **privateOnly** | **bool**| Show only private network products. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2003**](../Model/InlineResponse2003.md)

### Authorization

[JWT](../../README.md#JWT), [API-KEY](../../README.md#API-KEY)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **newOffersGet**
> \Swagger\Client\Model\InlineResponse2003 newOffersGet()



Gets featured new offers list

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

$api_instance = new Swagger\Client\Api\CatalogApi();

try {
    $result = $api_instance->newOffersGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogApi->newOffersGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\InlineResponse2003**](../Model/InlineResponse2003.md)

### Authorization

[JWT](../../README.md#JWT), [API-KEY](../../README.md#API-KEY)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **newOffersPut**
> \Swagger\Client\Model\InlineResponse2001 newOffersPut($offers)



Saves featured new offers list

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

$api_instance = new Swagger\Client\Api\CatalogApi();
$offers = "offers_example"; // string | Top offer catalog IDs (can save up to 7)  JSON-formatted array of IDs. eg: `[9, 84]`

try {
    $result = $api_instance->newOffersPut($offers);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogApi->newOffersPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **offers** | **string**| Top offer catalog IDs (can save up to 7)  JSON-formatted array of IDs. eg: &#x60;[9, 84]&#x60; |

### Return type

[**\Swagger\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[JWT](../../README.md#JWT), [API-KEY](../../README.md#API-KEY)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **topOffersGet**
> \Swagger\Client\Model\InlineResponse2003 topOffersGet()



Gets featured top offers list

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

$api_instance = new Swagger\Client\Api\CatalogApi();

try {
    $result = $api_instance->topOffersGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogApi->topOffersGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\InlineResponse2003**](../Model/InlineResponse2003.md)

### Authorization

[JWT](../../README.md#JWT), [API-KEY](../../README.md#API-KEY)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **topOffersPut**
> \Swagger\Client\Model\InlineResponse2001 topOffersPut($offers)



Saves featured top offers list

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

$api_instance = new Swagger\Client\Api\CatalogApi();
$offers = "offers_example"; // string | Top offer catalog IDs (can save up to 7)  JSON-formatted array of IDs. eg: `[9, 84]`

try {
    $result = $api_instance->topOffersPut($offers);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogApi->topOffersPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **offers** | **string**| Top offer catalog IDs (can save up to 7)  JSON-formatted array of IDs. eg: &#x60;[9, 84]&#x60; |

### Return type

[**\Swagger\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[JWT](../../README.md#JWT), [API-KEY](../../README.md#API-KEY)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

