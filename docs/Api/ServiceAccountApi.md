# Equisoft\SDK\AccountService\ServiceAccountApi

All URIs are relative to *http://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createServiceAccount**](ServiceAccountApi.md#createServiceAccount) | **POST** /serviceAccounts | Creates a new service account
[**getServiceAccount**](ServiceAccountApi.md#getServiceAccount) | **GET** /serviceAccounts/{uuid} | Get detailed information about a user account.



## createServiceAccount

> \Equisoft\SDK\AccountService\Model\ServiceAccountCreatedSchema createServiceAccount($serviceAccountCreationSchema)

Creates a new service account

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Equisoft\SDK\AccountService\Api\ServiceAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$serviceAccountCreationSchema = new \Equisoft\SDK\AccountService\Model\ServiceAccountCreationSchema(); // \Equisoft\SDK\AccountService\Model\ServiceAccountCreationSchema | 

try {
    $result = $apiInstance->createServiceAccount($serviceAccountCreationSchema);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServiceAccountApi->createServiceAccount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serviceAccountCreationSchema** | [**\Equisoft\SDK\AccountService\Model\ServiceAccountCreationSchema**](../Model/ServiceAccountCreationSchema.md)|  |

### Return type

[**\Equisoft\SDK\AccountService\Model\ServiceAccountCreatedSchema**](../Model/ServiceAccountCreatedSchema.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getServiceAccount

> \Equisoft\SDK\AccountService\Model\ServiceAccountSchema getServiceAccount($uuid)

Get detailed information about a user account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Equisoft\SDK\AccountService\Api\ServiceAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$uuid = 'uuid_example'; // string | Service account identifier

try {
    $result = $apiInstance->getServiceAccount($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServiceAccountApi->getServiceAccount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uuid** | **string**| Service account identifier |

### Return type

[**\Equisoft\SDK\AccountService\Model\ServiceAccountSchema**](../Model/ServiceAccountSchema.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

