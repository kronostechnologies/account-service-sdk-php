# Equisoft\SDK\AccountService\RoleApi

All URIs are relative to http://localhost.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createOrUpdateRole()**](RoleApi.md#createOrUpdateRole) | **PUT** /organizations/{uuid}/roles/{roleId} | Create or update organization roles for a given uuid
[**createRole()**](RoleApi.md#createRole) | **POST** /organizations/{uuid}/roles | Create organization roles for a given uuid
[**getRole()**](RoleApi.md#getRole) | **GET** /roles/{roleId} | Get organization role for a given uuid


## `createOrUpdateRole()`

```php
createOrUpdateRole($uuid, $roleId, $createRole): \Equisoft\SDK\AccountService\Model\RoleCreated
```

Create or update organization roles for a given uuid

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Equisoft\SDK\AccountService\Api\RoleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$uuid = 'uuid_example'; // string
$roleId = 'roleId_example'; // string
$createRole = new \Equisoft\SDK\AccountService\Model\CreateRole(); // \Equisoft\SDK\AccountService\Model\CreateRole

try {
    $result = $apiInstance->createOrUpdateRole($uuid, $roleId, $createRole);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoleApi->createOrUpdateRole: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uuid** | **string**|  |
 **roleId** | **string**|  |
 **createRole** | [**\Equisoft\SDK\AccountService\Model\CreateRole**](../Model/CreateRole.md)|  |

### Return type

[**\Equisoft\SDK\AccountService\Model\RoleCreated**](../Model/RoleCreated.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createRole()`

```php
createRole($uuid, $createRole): \Equisoft\SDK\AccountService\Model\RoleCreated
```

Create organization roles for a given uuid

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Equisoft\SDK\AccountService\Api\RoleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$uuid = 'uuid_example'; // string
$createRole = new \Equisoft\SDK\AccountService\Model\CreateRole(); // \Equisoft\SDK\AccountService\Model\CreateRole

try {
    $result = $apiInstance->createRole($uuid, $createRole);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoleApi->createRole: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uuid** | **string**|  |
 **createRole** | [**\Equisoft\SDK\AccountService\Model\CreateRole**](../Model/CreateRole.md)|  |

### Return type

[**\Equisoft\SDK\AccountService\Model\RoleCreated**](../Model/RoleCreated.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getRole()`

```php
getRole($roleId): \Equisoft\SDK\AccountService\Model\Role
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
$roleId = 'roleId_example'; // string | The role identifier

try {
    $result = $apiInstance->getRole($roleId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoleApi->getRole: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **roleId** | **string**| The role identifier |

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
