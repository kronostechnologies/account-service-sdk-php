# Equisoft\SDK\AccountService\UserApi

All URIs are relative to *http://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getUser**](UserApi.md#getUser) | **GET** /users/{uuid} | Get detailed information about a user account.



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

