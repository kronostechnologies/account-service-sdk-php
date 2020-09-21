# Equisoft\SDK\AccountService\UserApi

All URIs are relative to *http://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteUserSessions**](UserApi.md#deleteUserSessions) | **DELETE** /users/{uuid}/sessions | Delete all sessions for the user.
[**getUser**](UserApi.md#getUser) | **GET** /users/{uuid} | Get detailed information about a user account.
[**getUuidById**](UserApi.md#getUuidById) | **GET** /users/{id}/uuid | Find an uuid by id.
[**listUsers**](UserApi.md#listUsers) | **GET** /users | Searches accounts that match ALL params. If no search parameters are provided, returns all users.



## deleteUserSessions

> deleteUserSessions($uuid)

Delete all sessions for the user.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Equisoft\SDK\AccountService\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$uuid = 'uuid_example'; // string | The user account's identifier

try {
    $apiInstance->deleteUserSessions($uuid);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->deleteUserSessions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uuid** | **string**| The user account&#39;s identifier |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getUser

> \Equisoft\SDK\AccountService\Model\User getUser($uuid)

Get detailed information about a user account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Equisoft\SDK\AccountService\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$uuid = 'uuid_example'; // string | The user account's identifier

try {
    $result = $apiInstance->getUser($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->getUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uuid** | **string**| The user account&#39;s identifier |

### Return type

[**\Equisoft\SDK\AccountService\Model\User**](../Model/User.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getUuidById

> \Equisoft\SDK\AccountService\Model\Id getUuidById($id)

Find an uuid by id.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Equisoft\SDK\AccountService\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | The user account's identifier

try {
    $result = $apiInstance->getUuidById($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->getUuidById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The user account&#39;s identifier |

### Return type

[**\Equisoft\SDK\AccountService\Model\Id**](../Model/Id.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## listUsers

> \Equisoft\SDK\AccountService\Model\UserAccountSearchResult[] listUsers($identifierOrEmail, $identifier, $email)

Searches accounts that match ALL params. If no search parameters are provided, returns all users.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Equisoft\SDK\AccountService\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$identifierOrEmail = 'identifierOrEmail_example'; // string | 
$identifier = 'identifier_example'; // string | 
$email = 'email_example'; // string | 

try {
    $result = $apiInstance->listUsers($identifierOrEmail, $identifier, $email);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->listUsers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **identifierOrEmail** | **string**|  | [optional]
 **identifier** | **string**|  | [optional]
 **email** | **string**|  | [optional]

### Return type

[**\Equisoft\SDK\AccountService\Model\UserAccountSearchResult[]**](../Model/UserAccountSearchResult.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)
