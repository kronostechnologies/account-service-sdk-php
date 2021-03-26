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
**roles** | **string[]** | Roles the user is member a member of. |
**deletable** | **bool** | User deletion is disabled. |
**billable** | **bool** | User is accounted for billing. |
**agreement** | [**\Equisoft\SDK\AccountService\Model\UserAgreement**](UserAgreement.md) |  |
**created** | [**\DateTime**](\DateTime.md) |  | [optional]
**services** | [**\Equisoft\SDK\AccountService\Model\ServiceAccess[]**](ServiceAccess.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
