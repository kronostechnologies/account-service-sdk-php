# Equisoft\SDK\AccountService\ServiceAccountApi

All URIs are relative to http://localhost.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createServiceAccount()**](ServiceAccountApi.md#createServiceAccount) | **POST** /serviceAccounts | Creates a new service account
[**getServiceAccount()**](ServiceAccountApi.md#getServiceAccount) | **GET** /serviceAccounts/{uuid} | Get detailed information about a user account.
[**searchServiceAccount()**](ServiceAccountApi.md#searchServiceAccount) | **GET** /serviceAccounts | Searches service accounts that match ALL params. If none are provided, returns all service accounts
[**updateServiceAccount()**](ServiceAccountApi.md#updateServiceAccount) | **PATCH** /serviceAccounts/{uuid} | Updates a service account by uuid


## `createServiceAccount()`

```php
createServiceAccount($serviceAccountCreationSchema): \Equisoft\SDK\AccountService\Model\ServiceAccountUuidSchema
```

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
$serviceAccountCreationSchema = new \Equisoft\SDK\AccountService\Model\ServiceAccountCreationSchema(); // \Equisoft\SDK\AccountService\Model\ServiceAccountCreationSchema

try {
    $result = $apiInstance->createServiceAccount($serviceAccountCreationSchema);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServiceAccountApi->createServiceAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serviceAccountCreationSchema** | [**\Equisoft\SDK\AccountService\Model\ServiceAccountCreationSchema**](../Model/ServiceAccountCreationSchema.md)|  |

### Return type

[**\Equisoft\SDK\AccountService\Model\ServiceAccountUuidSchema**](../Model/ServiceAccountUuidSchema.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getServiceAccount()`

```php
getServiceAccount($uuid): \Equisoft\SDK\AccountService\Model\ServiceAccountSchema
```

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
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `searchServiceAccount()`

```php
searchServiceAccount($name): \Equisoft\SDK\AccountService\Model\ServiceAccountSchema[]
```

Searches service accounts that match ALL params. If none are provided, returns all service accounts

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Equisoft\SDK\AccountService\Api\ServiceAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = 'name_example'; // string

try {
    $result = $apiInstance->searchServiceAccount($name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServiceAccountApi->searchServiceAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**|  | [optional]

### Return type

[**\Equisoft\SDK\AccountService\Model\ServiceAccountSchema[]**](../Model/ServiceAccountSchema.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateServiceAccount()`

```php
updateServiceAccount($uuid, $serviceAccountUpdateSchema): \Equisoft\SDK\AccountService\Model\ServiceAccountUuidSchema
```

Updates a service account by uuid

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
$serviceAccountUpdateSchema = new \Equisoft\SDK\AccountService\Model\ServiceAccountUpdateSchema(); // \Equisoft\SDK\AccountService\Model\ServiceAccountUpdateSchema

try {
    $result = $apiInstance->updateServiceAccount($uuid, $serviceAccountUpdateSchema);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServiceAccountApi->updateServiceAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uuid** | **string**| Service account identifier |
 **serviceAccountUpdateSchema** | [**\Equisoft\SDK\AccountService\Model\ServiceAccountUpdateSchema**](../Model/ServiceAccountUpdateSchema.md)|  |

### Return type

[**\Equisoft\SDK\AccountService\Model\ServiceAccountUuidSchema**](../Model/ServiceAccountUuidSchema.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
