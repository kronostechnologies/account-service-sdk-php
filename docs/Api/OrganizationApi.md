# Equisoft\SDK\AccountService\OrganizationApi

All URIs are relative to http://localhost.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createOrUpdateOrganization()**](OrganizationApi.md#createOrUpdateOrganization) | **PUT** /organizations/{uuid} | Create or update an organization for a given uuid
[**createOrganization()**](OrganizationApi.md#createOrganization) | **POST** /organizations | Creates a new organization
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

## `getOrganization()`

```php
getOrganization($uuid): \Equisoft\SDK\AccountService\Model\Organization
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

try {
    $result = $apiInstance->getOrganization($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationApi->getOrganization: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uuid** | **string**| The organization identifier |

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
listOrganization($max, $pageToken, $parent): \Equisoft\SDK\AccountService\Model\ListUserOrganizations
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
$max = 56; // int
$pageToken = 'pageToken_example'; // string
$parent = 'parent_example'; // string

try {
    $result = $apiInstance->listOrganization($max, $pageToken, $parent);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationApi->listOrganization: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **max** | **int**|  |
 **pageToken** | **string**|  | [optional]
 **parent** | **string**|  | [optional]

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
