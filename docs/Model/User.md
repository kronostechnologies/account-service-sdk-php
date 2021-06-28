# # User

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  |
**uuid** | **string** |  |
**displayName** | **string** |  |
**email** | **string** |  |
**mobilePhone** | **string** | Mobile phone used for sms password reset. | [optional]
**locale** | **string** |  |
**state** | [**\Equisoft\SDK\AccountService\Model\UserState**](UserState.md) |  |
**locked** | **bool** |  |
**legacyRoles** | **string[]** | Legacy roles the user is member of |
**deletable** | **bool** | User deletion is disabled. |
**billable** | **bool** | User is accounted for billing. |
**agreement** | [**\Equisoft\SDK\AccountService\Model\UserAgreement**](UserAgreement.md) |  |
**created** | [**\DateTime**](\DateTime.md) |  | [optional]
**services** | [**\Equisoft\SDK\AccountService\Model\ServiceAccess[]**](ServiceAccess.md) |  |
**servicesUsers** | [**\Equisoft\SDK\AccountService\Model\UserServiceAssociation[]**](UserServiceAssociation.md) |  |
**authType** | **string** |  |
**ssoProvider** | [**\Equisoft\SDK\AccountService\Model\UserSsoProvider**](UserSsoProvider.md) |  | [optional]
**ssoIdentifier** | **string** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
