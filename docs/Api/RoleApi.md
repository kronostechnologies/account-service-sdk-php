# Equisoft\SDK\AccountService\RoleApi

All URIs are relative to http://localhost.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getRole()**](RoleApi.md#getRole) | **GET** /roles/{uuid} | Get organization role for a given uuid


## `getRole()`

```php
getRole($uuid): \Equisoft\SDK\AccountService\Model\Role
```

Get organization role for a given uuid

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Equisoft\SDK\AccountService\Api\RoleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$uuid = 'uuid_example'; // string | The role identifier

try {
    $result = $apiInstance->getRole($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoleApi->getRole: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uuid** | **string**| The role identifier |

### Return type

[**\Equisoft\SDK\AccountService\Model\Role**](../Model/Role.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
