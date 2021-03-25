# # Session

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**sessionId** | **string** | Globally unique identifier. | [optional] 
**state** | [**\Equisoft\SDK\AccountService\Model\SessionState**](SessionState.md) |  | [optional] 
**created** | [**\DateTime**](\DateTime.md) |  | [optional] 
**suspend** | [**\DateTime**](\DateTime.md) |  | [optional] 
**expire** | [**\DateTime**](\DateTime.md) |  | [optional] 
**cookieDomain** | **string** | Indicate the domain name the session cookie was emitted for. | [optional] 
**user** | [**\Equisoft\SDK\AccountService\Model\User**](User.md) |  | [optional] 
**actor** | [**\Equisoft\SDK\AccountService\Model\User**](User.md) |  | [optional] 
**sso** | [**\Equisoft\SDK\AccountService\Model\SsoProvider**](SsoProvider.md) |  | [optional] 
**enabledForEquisoftConnect** | **bool** | Session is enabled for Equisoft/Connect and is accounted for concurrent access. | [optional] 
**mobile** | **bool** | Indicate that the session is initiated from a mobile device. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


