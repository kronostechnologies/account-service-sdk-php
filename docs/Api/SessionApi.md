# Equisoft\SDK\AccountService\SessionApi

All URIs are relative to *http://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**activateSession**](SessionApi.md#activateSession) | **POST** /sessions/{uuid}/activate | Allow activation for sessions created with activate&#x3D;false. This may be extended to activate specific services. Inactive sessions are not allowed to be used by first-party application (crm, fna).
[**createSession**](SessionApi.md#createSession) | **POST** /sessions | Create a user session.
[**deleteSession**](SessionApi.md#deleteSession) | **DELETE** /sessions/{uuid} | Delete a user session.
[**getSession**](SessionApi.md#getSession) | **GET** /sessions/{uuid} | Get detailed information about a user session.
[**getSessionSsoToken**](SessionApi.md#getSessionSsoToken) | **GET** /sessions/{uuid}/tokens/{tokenId} | Get a stored sso token for the session
[**impersonateUser**](SessionApi.md#impersonateUser) | **POST** /sessions/{uuid}/impersonate | Impersonate the given user context.
[**revertIdentity**](SessionApi.md#revertIdentity) | **POST** /sessions/{uuid}/revertIdentity | Revert an impersonated session to the context of the \&quot;admin\&quot; user who initiated the impersontation.
[**searchSession**](SessionApi.md#searchSession) | **GET** /sessions | List or search session ids.
[**setSessionSsoToken**](SessionApi.md#setSessionSsoToken) | **PUT** /sessions/{uuid}/tokens/{tokenId} | Store a sso token for the session for a given id/name/type



## activateSession

> activateSession($uuid)

Allow activation for sessions created with activate=false. This may be extended to activate specific services. Inactive sessions are not allowed to be used by first-party application (crm, fna).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Equisoft\SDK\AccountService\Api\SessionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$uuid = 'uuid_example'; // string | 

try {
    $apiInstance->activateSession($uuid);
} catch (Exception $e) {
    echo 'Exception when calling SessionApi->activateSession: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uuid** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## createSession

> \Equisoft\SDK\AccountService\Model\UserSessionResponse createSession($createSessionPayload)

Create a user session.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Equisoft\SDK\AccountService\Api\SessionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$createSessionPayload = new \Equisoft\SDK\AccountService\Model\CreateSessionPayload(); // \Equisoft\SDK\AccountService\Model\CreateSessionPayload | 

try {
    $result = $apiInstance->createSession($createSessionPayload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SessionApi->createSession: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **createSessionPayload** | [**\Equisoft\SDK\AccountService\Model\CreateSessionPayload**](../Model/CreateSessionPayload.md)|  |

### Return type

[**\Equisoft\SDK\AccountService\Model\UserSessionResponse**](../Model/UserSessionResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## deleteSession

> deleteSession($uuid)

Delete a user session.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Equisoft\SDK\AccountService\Api\SessionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$uuid = 'uuid_example'; // string | The user session's identifier

try {
    $apiInstance->deleteSession($uuid);
} catch (Exception $e) {
    echo 'Exception when calling SessionApi->deleteSession: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uuid** | **string**| The user session&#39;s identifier |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getSession

> \Equisoft\SDK\AccountService\Model\UserSessionResponse getSession($uuid)

Get detailed information about a user session.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Equisoft\SDK\AccountService\Api\SessionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$uuid = 'uuid_example'; // string | The user session's identifier

try {
    $result = $apiInstance->getSession($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SessionApi->getSession: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uuid** | **string**| The user session&#39;s identifier |

### Return type

[**\Equisoft\SDK\AccountService\Model\UserSessionResponse**](../Model/UserSessionResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getSessionSsoToken

> \Equisoft\SDK\AccountService\Model\GetSsoTokenResponse getSessionSsoToken($uuid, $tokenId)

Get a stored sso token for the session

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Equisoft\SDK\AccountService\Api\SessionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$uuid = 'uuid_example'; // string | 
$tokenId = 'tokenId_example'; // string | 

try {
    $result = $apiInstance->getSessionSsoToken($uuid, $tokenId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SessionApi->getSessionSsoToken: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uuid** | **string**|  |
 **tokenId** | **string**|  |

### Return type

[**\Equisoft\SDK\AccountService\Model\GetSsoTokenResponse**](../Model/GetSsoTokenResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## impersonateUser

> \Equisoft\SDK\AccountService\Model\ImpersonateUserResponse impersonateUser($uuid, $impersonateUserPayload)

Impersonate the given user context.

For adminstrator with impersonation capability. Impersonate the given user context.  After impersontation, the admin user becomes the \"actor\" and the impersonate user becames the \"user\".  Use /revertIdentity to revert the impersonation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Equisoft\SDK\AccountService\Api\SessionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$uuid = 'uuid_example'; // string | 
$impersonateUserPayload = new \Equisoft\SDK\AccountService\Model\ImpersonateUserPayload(); // \Equisoft\SDK\AccountService\Model\ImpersonateUserPayload | 

try {
    $result = $apiInstance->impersonateUser($uuid, $impersonateUserPayload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SessionApi->impersonateUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uuid** | **string**|  |
 **impersonateUserPayload** | [**\Equisoft\SDK\AccountService\Model\ImpersonateUserPayload**](../Model/ImpersonateUserPayload.md)|  |

### Return type

[**\Equisoft\SDK\AccountService\Model\ImpersonateUserResponse**](../Model/ImpersonateUserResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## revertIdentity

> \Equisoft\SDK\AccountService\Model\RevertIdentityResponse revertIdentity($uuid)

Revert an impersonated session to the context of the \"admin\" user who initiated the impersontation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Equisoft\SDK\AccountService\Api\SessionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$uuid = 'uuid_example'; // string | 

try {
    $result = $apiInstance->revertIdentity($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SessionApi->revertIdentity: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uuid** | **string**|  |

### Return type

[**\Equisoft\SDK\AccountService\Model\RevertIdentityResponse**](../Model/RevertIdentityResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## searchSession

> \Equisoft\SDK\AccountService\Model\SearchSessionResponse searchSession($userUuid, $expired)

List or search session ids.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Equisoft\SDK\AccountService\Api\SessionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$userUuid = ed0af0e4-27cf-49c8-b346-764ac94c63aa; // string | String globally unique identifier of the user.
$expired = True; // bool | List expired sessions

try {
    $result = $apiInstance->searchSession($userUuid, $expired);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SessionApi->searchSession: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userUuid** | **string**| String globally unique identifier of the user. | [optional]
 **expired** | **bool**| List expired sessions | [optional]

### Return type

[**\Equisoft\SDK\AccountService\Model\SearchSessionResponse**](../Model/SearchSessionResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## setSessionSsoToken

> setSessionSsoToken($uuid, $tokenId, $body)

Store a sso token for the session for a given id/name/type

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Equisoft\SDK\AccountService\Api\SessionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$uuid = 'uuid_example'; // string | 
$tokenId = 'tokenId_example'; // string | 
$body = 'body_example'; // string | 

try {
    $apiInstance->setSessionSsoToken($uuid, $tokenId, $body);
} catch (Exception $e) {
    echo 'Exception when calling SessionApi->setSessionSsoToken: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uuid** | **string**|  |
 **tokenId** | **string**|  |
 **body** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: text/plain
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

