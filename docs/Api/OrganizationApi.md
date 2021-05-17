# Equisoft\SDK\AccountService\OrganizationApi

All URIs are relative to http://localhost.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createOrUpdateOrganization()**](OrganizationApi.md#createOrUpdateOrganization) | **PUT** /organizations/{uuid} | Create or update an organization for a given uuid
[**createOrUpdateRole()**](OrganizationApi.md#createOrUpdateRole) | **PUT** /organizations/{uuid}/roles/{roleId} | Create or update organization roles for a given uuid
[**createOrganization()**](OrganizationApi.md#createOrganization) | **POST** /organizations | Creates a new organization
[**createRole()**](OrganizationApi.md#createRole) | **POST** /organizations/{uuid}/roles | Create organization roles for a given uuid
[**getOrganization()**](OrganizationApi.md#getOrganization) | **GET** /organizations/{uuid} | Get detailed information about an organization.
[**listOrganization()**](OrganizationApi.md#listOrganization) | **GET** /organizations | List organizations


## `createOrUpdateOrganization()`

```php
createOrUpdateOrganization($uuid, $createOrUpdateOrganizationPayload): \Equisoft\SDK\AccountService\Model\OrganizationCreated
```

Create or update an organization for a given uuid

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Equisoft\SDK\AccountService\Api\OrganizationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$uuid = 'uuid_example'; // string | The organization identifier
$createOrUpdateOrganizationPayload = new \Equisoft\SDK\AccountService\Model\CreateOrUpdateOrganizationPayload(); // \Equisoft\SDK\AccountService\Model\CreateOrUpdateOrganizationPayload

try {
    $result = $apiInstance->createOrUpdateOrganization($uuid, $createOrUpdateOrganizationPayload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationApi->createOrUpdateOrganization: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uuid** | **string**| The organization identifier |
 **createOrUpdateOrganizationPayload** | [**\Equisoft\SDK\AccountService\Model\CreateOrUpdateOrganizationPayload**](../Model/CreateOrUpdateOrganizationPayload.md)|  |

### Return type

[**\Equisoft\SDK\AccountService\Model\OrganizationCreated**](../Model/OrganizationCreated.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createOrUpdateRole()`

```php
createOrUpdateRole($uuid, $roleId, $createRole): \Equisoft\SDK\AccountService\Model\RoleCreated
```

Create or update organization roles for a given uuid

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Equisoft\SDK\AccountService\Api\OrganizationApi(
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
    echo 'Exception when calling OrganizationApi->createOrUpdateRole: ', $e->getMessage(), PHP_EOL;
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

## `createOrganization()`

```php
createOrganization($createOrganizationPayload): \Equisoft\SDK\AccountService\Model\OrganizationCreated
```

Creates a new organization

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Equisoft\SDK\AccountService\Api\OrganizationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$createOrganizationPayload = new \Equisoft\SDK\AccountService\Model\CreateOrganizationPayload(); // \Equisoft\SDK\AccountService\Model\CreateOrganizationPayload

try {
    $result = $apiInstance->createOrganization($createOrganizationPayload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationApi->createOrganization: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **createOrganizationPayload** | [**\Equisoft\SDK\AccountService\Model\CreateOrganizationPayload**](../Model/CreateOrganizationPayload.md)|  |

### Return type

[**\Equisoft\SDK\AccountService\Model\OrganizationCreated**](../Model/OrganizationCreated.md)

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



$apiInstance = new Equisoft\SDK\AccountService\Api\OrganizationApi(
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
    echo 'Exception when calling OrganizationApi->createRole: ', $e->getMessage(), PHP_EOL;
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

## `getOrganization()`

```php
getOrganization($uuid, $xUserUuid): \Equisoft\SDK\AccountService\Model\Organization
```

Get detailed information about an organization.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Equisoft\SDK\AccountService\Api\OrganizationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$uuid = 'uuid_example'; // string | The organization identifier
$xUserUuid = 'xUserUuid_example'; // string | Uuid of the user for whom the call is made. Used to apply access and security rules

try {
    $result = $apiInstance->getOrganization($uuid, $xUserUuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationApi->getOrganization: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uuid** | **string**| The organization identifier |
 **xUserUuid** | **string**| Uuid of the user for whom the call is made. Used to apply access and security rules | [optional]

### Return type

[**\Equisoft\SDK\AccountService\Model\Organization**](../Model/Organization.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listOrganization()`

```php
listOrganization($max, $pageToken, $parent, $xUserUuid): \Equisoft\SDK\AccountService\Model\ListUserOrganizations
```

List organizations

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Equisoft\SDK\AccountService\Api\OrganizationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$max = 56; // int | Max number of organizations per page.
$pageToken = 'pageToken_example'; // string | Page token to start with.
$parent = 'parent_example'; // string | Parent uuid.
$xUserUuid = 'xUserUuid_example'; // string | Uuid of the user for whom the call is made. Used to apply access and security rules

try {
    $result = $apiInstance->listOrganization($max, $pageToken, $parent, $xUserUuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationApi->listOrganization: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **max** | **int**| Max number of organizations per page. |
 **pageToken** | **string**| Page token to start with. | [optional]
 **parent** | **string**| Parent uuid. | [optional]
 **xUserUuid** | **string**| Uuid of the user for whom the call is made. Used to apply access and security rules | [optional]

### Return type

[**\Equisoft\SDK\AccountService\Model\ListUserOrganizations**](../Model/ListUserOrganizations.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
