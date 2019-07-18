# Equisoft\SDK\AccountService\SessionApi

All URIs are relative to *http://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createSession**](SessionApi.md#createSession) | **POST** /sessions | Create a user session.
[**deleteAllSessions**](SessionApi.md#deleteAllSessions) | **DELETE** /sessions | Delete all sessions
[**deleteSession**](SessionApi.md#deleteSession) | **DELETE** /sessions/{uuid} | Delete a user session.
[**deleteSessionSsoToken**](SessionApi.md#deleteSessionSsoToken) | **DELETE** /sessions/{uuid}/tokens/{tokenId} | Delete a sso token for the session for a given id/name/type
[**enableSession**](SessionApi.md#enableSession) | **POST** /sessions/{uuid}/enable | Allow activation for sessions created with enable&#x3D;false. This may be extended to enable specific services. Disabled sessions are not allowed to be used by first-party application (crm, fna).
[**enableSessionForCrm**](SessionApi.md#enableSessionForCrm) | **POST** /sessions/{uuid}/enable/crm | Enable session for the crm service
[**getSession**](SessionApi.md#getSession) | **GET** /sessions/{uuid} | Get detailed information about a user session.
[**getSessionSsoToken**](SessionApi.md#getSessionSsoToken) | **GET** /sessions/{uuid}/tokens/{tokenId} | Get a stored sso token for the session
[**impersonate**](SessionApi.md#impersonate) | **POST** /sessions/{uuid}/impersonate | Impersonate the given user context.
[**revertIdentity**](SessionApi.md#revertIdentity) | **POST** /sessions/{uuid}/revertIdentity | Revert an impersonated session to the context of the \&quot;admin\&quot; user who initiated the impersontation.
[**setSessionSsoToken**](SessionApi.md#setSessionSsoToken) | **PUT** /sessions/{uuid}/tokens/{tokenId} | Store a sso token for the session for a given id/name/type



## createSession

> \Equisoft\SDK\AccountService\Model\Session createSession($sessionPayload)

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
$sessionPayload = new \Equisoft\SDK\AccountService\Model\SessionPayload(); // \Equisoft\SDK\AccountService\Model\SessionPayload | 

try {
    $result = $apiInstance->createSession($sessionPayload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SessionApi->createSession: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sessionPayload** | [**\Equisoft\SDK\AccountService\Model\SessionPayload**](../Model/SessionPayload.md)|  |

### Return type

[**\Equisoft\SDK\AccountService\Model\Session**](../Model/Session.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## deleteAllSessions

> deleteAllSessions()

Delete all sessions

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Equisoft\SDK\AccountService\Api\SessionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->deleteAllSessions();
} catch (Exception $e) {
    echo 'Exception when calling SessionApi->deleteAllSessions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

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


## deleteSessionSsoToken

> deleteSessionSsoToken($uuid, $tokenId)

Delete a sso token for the session for a given id/name/type

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
    $apiInstance->deleteSessionSsoToken($uuid, $tokenId);
} catch (Exception $e) {
    echo 'Exception when calling SessionApi->deleteSessionSsoToken: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uuid** | **string**|  |
 **tokenId** | **string**|  |

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


## enableSession

> enableSession($uuid)

Allow activation for sessions created with enable=false. This may be extended to enable specific services. Disabled sessions are not allowed to be used by first-party application (crm, fna).

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
    $apiInstance->enableSession($uuid);
} catch (Exception $e) {
    echo 'Exception when calling SessionApi->enableSession: ', $e->getMessage(), PHP_EOL;
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


## enableSessionForCrm

> enableSessionForCrm($uuid, $bumpOldestSession)

Enable session for the crm service

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
$bumpOldestSession = True; // bool | When concurrent access exceeded, delete oldest session

try {
    $apiInstance->enableSessionForCrm($uuid, $bumpOldestSession);
} catch (Exception $e) {
    echo 'Exception when calling SessionApi->enableSessionForCrm: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uuid** | **string**|  |
 **bumpOldestSession** | **bool**| When concurrent access exceeded, delete oldest session | [optional]

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

> \Equisoft\SDK\AccountService\Model\Session getSession($uuid)

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

[**\Equisoft\SDK\AccountService\Model\Session**](../Model/Session.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getSessionSsoToken

> \Equisoft\SDK\AccountService\Model\SsoToken getSessionSsoToken($uuid, $tokenId)

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

[**\Equisoft\SDK\AccountService\Model\SsoToken**](../Model/SsoToken.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## impersonate

> \Equisoft\SDK\AccountService\Model\Session impersonate($uuid, $impersonatePayload)

Impersonate the given user context.

For administrator with impersonation capability. Impersonate the given user context. After impersonation, the admin user becomes the \"actor\" and the impersonated user becomes the \"user\". Use /revertIdentity to revert the impersonation.

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
$impersonatePayload = new \Equisoft\SDK\AccountService\Model\ImpersonatePayload(); // \Equisoft\SDK\AccountService\Model\ImpersonatePayload | 

try {
    $result = $apiInstance->impersonate($uuid, $impersonatePayload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SessionApi->impersonate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uuid** | **string**|  |
 **impersonatePayload** | [**\Equisoft\SDK\AccountService\Model\ImpersonatePayload**](../Model/ImpersonatePayload.md)|  |

### Return type

[**\Equisoft\SDK\AccountService\Model\Session**](../Model/Session.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## revertIdentity

> \Equisoft\SDK\AccountService\Model\Session revertIdentity($uuid)

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

[**\Equisoft\SDK\AccountService\Model\Session**](../Model/Session.md)

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

