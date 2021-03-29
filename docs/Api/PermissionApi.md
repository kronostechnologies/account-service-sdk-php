# Equisoft\SDK\AccountService\PermissionApi

All URIs are relative to http://localhost.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createOrUpdatePermission()**](PermissionApi.md#createOrUpdatePermission) | **PUT** /permissions/{code} | Create or update a permission for a given code


## `createOrUpdatePermission()`

```php
createOrUpdatePermission($code, $createOrUpdatePermissionPayload): \Equisoft\SDK\AccountService\Model\PermissionCreated
```

Create or update a permission for a given code

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Equisoft\SDK\AccountService\Api\PermissionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$code = 'code_example'; // string | The permission code
$createOrUpdatePermissionPayload = new \Equisoft\SDK\AccountService\Model\CreateOrUpdatePermissionPayload(); // \Equisoft\SDK\AccountService\Model\CreateOrUpdatePermissionPayload

try {
    $result = $apiInstance->createOrUpdatePermission($code, $createOrUpdatePermissionPayload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PermissionApi->createOrUpdatePermission: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **code** | **string**| The permission code |
 **createOrUpdatePermissionPayload** | [**\Equisoft\SDK\AccountService\Model\CreateOrUpdatePermissionPayload**](../Model/CreateOrUpdatePermissionPayload.md)|  |

### Return type

[**\Equisoft\SDK\AccountService\Model\PermissionCreated**](../Model/PermissionCreated.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
