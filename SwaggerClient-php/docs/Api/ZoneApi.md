# Swagger\Client\ZoneApi

All URIs are relative to *http://localhost/1.2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**zoneGet**](ZoneApi.md#zoneGet) | **GET** /zone | List available zones


# **zoneGet**
> \Swagger\Client\Model\InlineResponse2001 zoneGet()

List available zones

Returns a list of available zones.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ZoneApi(new \Http\Adapter\Guzzle6\Client());

try {
    $result = $api_instance->zoneGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZoneApi->zoneGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)
