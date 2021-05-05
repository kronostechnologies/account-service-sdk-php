# # SessionPayload

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**userUuid** | **string** | Globally unique identifier. |
**enable** | **bool** |  | [optional]
**sso** | [**\Equisoft\SDK\AccountService\Model\SsoProvider**](SsoProvider.md) |  | [optional]
**publicComputer** | **bool** | Indicate that the session is initiated from a public computer. | [optional]
**mobileDevice** | **bool** | Indicate that the session is initiated from a mobile device. | [optional]
**cookieDomain** | **string** | Indicate the domain name the session cookie was emitted for. If null, the cookie is assumed to be on the current hostname. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
