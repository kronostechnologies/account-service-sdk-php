# # User

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [optional] 
**uuid** | **string** |  | [optional] 
**displayName** | **string** |  | [optional] 
**email** | **string** |  | [optional] 
**mobilePhone** | **string** | Mobile phone used for sms password reset. | [optional] 
**locale** | **string** |  | [optional] 
**state** | [**\Equisoft\SDK\AccountService\Model\UserState**](UserState.md) |  | [optional] 
**roles** | **string[]** | Roles the user is member a member of. | [optional] 
**deletable** | **bool** | User deletion is disabled. | [optional] 
**billable** | **bool** | User is accounted for billing. | [optional] 
**agreement** | [**\Equisoft\SDK\AccountService\Model\UserAgreement**](UserAgreement.md) |  | [optional] 
**created** | [**\DateTime**](\DateTime.md) |  | [optional] 
**services** | [**\Equisoft\SDK\AccountService\Model\ServiceAccessSchema[]**](ServiceAccessSchema.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


