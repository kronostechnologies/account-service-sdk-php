# Equisoft\SDK\AccountService\OrganizationRoleApi

All URIs are relative to http://localhost.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createOrUpdateRole()**](OrganizationRoleApi.md#createOrUpdateRole) | **PUT** /organizations/{organisationId}/roles/{roleId} | Create or update organization roles for a given uuid
[**createRole()**](OrganizationRoleApi.md#createRole) | **POST** /organizations/{organizationId}/roles | Create organization roles for a given uuid


## `createOrUpdateRole()`

```php
createOrUpdateRole($organisationId, $roleId, $createRole): \Equisoft\SDK\AccountService\Model\RoleCreated
```

Create or update organization roles for a given uuid

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Equisoft\SDK\AccountService\Api\OrganizationRoleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$organisationId = 'organisationId_example'; // string
$roleId = 'roleId_example'; // string
$createRole = new \Equisoft\SDK\AccountService\Model\CreateRole(); // \Equisoft\SDK\AccountService\Model\CreateRole

try {
    $result = $apiInstance->createOrUpdateRole($organisationId, $roleId, $createRole);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationRoleApi->createOrUpdateRole: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organisationId** | **string**|  |
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
createRole($organizationId, $createRole): \Equisoft\SDK\AccountService\Model\RoleCreated
```

Create organization roles for a given uuid

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Equisoft\SDK\AccountService\Api\OrganizationRoleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$organizationId = 'organizationId_example'; // string
$createRole = new \Equisoft\SDK\AccountService\Model\CreateRole(); // \Equisoft\SDK\AccountService\Model\CreateRole

try {
    $result = $apiInstance->createRole($organizationId, $createRole);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationRoleApi->createRole: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organizationId** | **string**|  |
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
