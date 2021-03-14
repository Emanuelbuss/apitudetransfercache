# transfercache\DestinationsPortfolioApi

All URIs are relative to *https://api.test.hotelbeds.com/transfer-cache-api/1.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**destination**](DestinationsPortfolioApi.md#destination) | **GET** /locations/destinations | Destination portfolio

# **destination**
> \transfercache\apitude_transfer_cache\DestinationDTO destination($fields, $language, $offset, $limit, $country_codes, $codes)

Destination portfolio

Returns a Response with a list of destinations

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Api-key
$config = transfercache\Configuration::getDefaultConfiguration()->setApiKey('Api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = transfercache\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Api-key', 'Bearer');

$apiInstance = new transfercache\apitude_transfer_cache\DestinationsPortfolioApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fields = array("fields_example"); // string[] | Fields that will be informed in the response object.
$language = "en"; // string | Language ISO code in which the response data will be translated into in the response object.
$offset = 1; // int | Used for pagination. Index of the item from which the list will be generated in the response object.
$limit = 1; // int | Used for pagination. Number of items from the index indicated by the offset parameter that will be included in the response object.
$country_codes = array("country_codes_example"); // string[] | Specific country code(s) that will be returned in the response object, if it(they) exist(s).
$codes = array("codes_example"); // string[] | Specific destination code(s) that will be returned in the response object, if it(they) exist(s).

try {
    $result = $apiInstance->destination($fields, $language, $offset, $limit, $country_codes, $codes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DestinationsPortfolioApi->destination: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fields** | [**string[]**](../Model/string.md)| Fields that will be informed in the response object. |
 **language** | **string**| Language ISO code in which the response data will be translated into in the response object. | [default to en]
 **offset** | **int**| Used for pagination. Index of the item from which the list will be generated in the response object. | [optional] [default to 1]
 **limit** | **int**| Used for pagination. Number of items from the index indicated by the offset parameter that will be included in the response object. | [optional] [default to 1]
 **country_codes** | [**string[]**](../Model/string.md)| Specific country code(s) that will be returned in the response object, if it(they) exist(s). | [optional]
 **codes** | [**string[]**](../Model/string.md)| Specific destination code(s) that will be returned in the response object, if it(they) exist(s). | [optional]

### Return type

[**\transfercache\apitude_transfer_cache\DestinationDTO**](../Model/DestinationDTO.md)

### Authorization

[Api-key](../../README.md#Api-key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

