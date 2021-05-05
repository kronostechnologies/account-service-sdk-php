# AccountService PHP SDK

Provides HTTP endpoints to manage User Accounts and User Sessions.


## Installation & Usage

### Requirements

PHP 7.2 and later.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/kronostechnologies/account-service-sdk-php.git"
    }
  ],
  "require": {
    "kronostechnologies/account-service-sdk-php": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/AccountService PHP SDK/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

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

## API Endpoints

All URIs are relative to *http://localhost*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*OrganizationApi* | [**createOrUpdateOrganization**](docs/Api/OrganizationApi.md#createorupdateorganization) | **PUT** /organizations/{uuid} | Create or update an organization for a given uuid
*OrganizationApi* | [**createOrUpdateRole**](docs/Api/OrganizationApi.md#createorupdaterole) | **PUT** /organizations/{uuid}/roles/{roleId} | Create or update organization roles for a given uuid
*OrganizationApi* | [**createOrganization**](docs/Api/OrganizationApi.md#createorganization) | **POST** /organizations | Creates a new organization
*OrganizationApi* | [**createRole**](docs/Api/OrganizationApi.md#createrole) | **POST** /organizations/{uuid}/roles | Create organization roles for a given uuid
*OrganizationApi* | [**getOrganization**](docs/Api/OrganizationApi.md#getorganization) | **GET** /organizations/{uuid} | Get detailed information about an organization.
*OrganizationApi* | [**listOrganization**](docs/Api/OrganizationApi.md#listorganization) | **GET** /organizations | List organizations
*PermissionApi* | [**createOrUpdatePermission**](docs/Api/PermissionApi.md#createorupdatepermission) | **PUT** /permissions/{code} | Create or update a permission for a given code
*ServiceAccountApi* | [**createServiceAccount**](docs/Api/ServiceAccountApi.md#createserviceaccount) | **POST** /serviceAccounts | Creates a new service account
*ServiceAccountApi* | [**getServiceAccount**](docs/Api/ServiceAccountApi.md#getserviceaccount) | **GET** /serviceAccounts/{uuid} | Get detailed information about a user account.
*ServiceAccountApi* | [**searchServiceAccount**](docs/Api/ServiceAccountApi.md#searchserviceaccount) | **GET** /serviceAccounts | Searches service accounts that match ALL params. If none are provided, returns all service accounts
*ServiceAccountApi* | [**updateServiceAccount**](docs/Api/ServiceAccountApi.md#updateserviceaccount) | **PATCH** /serviceAccounts/{uuid} | Updates a service account by uuid
*SessionApi* | [**createSession**](docs/Api/SessionApi.md#createsession) | **POST** /sessions | Create a user session.
*SessionApi* | [**deleteAllSessions**](docs/Api/SessionApi.md#deleteallsessions) | **DELETE** /sessions | Delete all sessions
*SessionApi* | [**deleteExpiredSessions**](docs/Api/SessionApi.md#deleteexpiredsessions) | **DELETE** /sessions/expired | Delete all expired sessions.
*SessionApi* | [**deleteSession**](docs/Api/SessionApi.md#deletesession) | **DELETE** /sessions/{uuid} | Delete a user session.
*SessionApi* | [**deleteSessionSsoToken**](docs/Api/SessionApi.md#deletesessionssotoken) | **DELETE** /sessions/{uuid}/tokens/{tokenId} | Delete a sso token for the session for a given id/name/type
*SessionApi* | [**enableSession**](docs/Api/SessionApi.md#enablesession) | **POST** /sessions/{uuid}/enable | Allow activation for sessions created with enable&#x3D;false. This may be extended to enable specific services. Disabled sessions are not allowed to be used by first-party application (Equisoft/Connect, Equisoft/Plan).
*SessionApi* | [**enableSessionForEquisoftConnect**](docs/Api/SessionApi.md#enablesessionforequisoftconnect) | **POST** /sessions/{uuid}/enable/EQUISOFT_CONNECT | Enable session for the Equisoft/Connect service
*SessionApi* | [**getSession**](docs/Api/SessionApi.md#getsession) | **GET** /sessions/{uuid} | Get detailed information about a user session.
*SessionApi* | [**getSessionSsoToken**](docs/Api/SessionApi.md#getsessionssotoken) | **GET** /sessions/{uuid}/tokens/{tokenId} | Get a stored sso token for the session
*SessionApi* | [**impersonate**](docs/Api/SessionApi.md#impersonate) | **POST** /sessions/{uuid}/impersonate | Impersonate the given user context.
*SessionApi* | [**revertIdentity**](docs/Api/SessionApi.md#revertidentity) | **POST** /sessions/{uuid}/revertIdentity | Revert an impersonated session to the context of the \&quot;admin\&quot; user who initiated the impersonation.
*SessionApi* | [**setSessionSsoToken**](docs/Api/SessionApi.md#setsessionssotoken) | **PUT** /sessions/{uuid}/tokens/{tokenId} | Store a sso token for the session for a given id/name/type
*UserApi* | [**deleteUserSessions**](docs/Api/UserApi.md#deleteusersessions) | **DELETE** /users/{uuid}/sessions | Delete all sessions for the user.
*UserApi* | [**getUser**](docs/Api/UserApi.md#getuser) | **GET** /users/{uuid} | Get detailed information about a user account.
*UserApi* | [**getUserPermissions**](docs/Api/UserApi.md#getuserpermissions) | **GET** /users/{uuid}/permissions | Get user permissions
*UserApi* | [**getUuidById**](docs/Api/UserApi.md#getuuidbyid) | **GET** /users/{id}/uuid | Find an uuid by id.
*UserApi* | [**listUsers**](docs/Api/UserApi.md#listusers) | **GET** /users | Searches accounts that match ALL params. If no search parameters are provided, returns all users.

## Models

- [CreateOrUpdateOrganizationPayload](docs/Model/CreateOrUpdateOrganizationPayload.md)
- [CreateOrUpdatePermissionPayload](docs/Model/CreateOrUpdatePermissionPayload.md)
- [CreateOrganizationPayload](docs/Model/CreateOrganizationPayload.md)
- [CreateRole](docs/Model/CreateRole.md)
- [DatabaseState](docs/Model/DatabaseState.md)
- [EnableEquisoftConnectPayloadSchema](docs/Model/EnableEquisoftConnectPayloadSchema.md)
- [ErrorMessage](docs/Model/ErrorMessage.md)
- [ErrorPayload](docs/Model/ErrorPayload.md)
- [Id](docs/Model/Id.md)
- [ImpersonatePayload](docs/Model/ImpersonatePayload.md)
- [LegacyRoleSchema](docs/Model/LegacyRoleSchema.md)
- [ListOrganizationElement](docs/Model/ListOrganizationElement.md)
- [ListUserOrganizations](docs/Model/ListUserOrganizations.md)
- [LocalizedString](docs/Model/LocalizedString.md)
- [Organization](docs/Model/Organization.md)
- [OrganizationCreated](docs/Model/OrganizationCreated.md)
- [OrganizationPathElement](docs/Model/OrganizationPathElement.md)
- [Path](docs/Model/Path.md)
- [PermissionCreated](docs/Model/PermissionCreated.md)
- [RoleCreated](docs/Model/RoleCreated.md)
- [RolesOnOrganization](docs/Model/RolesOnOrganization.md)
- [ServiceAccess](docs/Model/ServiceAccess.md)
- [ServiceAccountCreationSchema](docs/Model/ServiceAccountCreationSchema.md)
- [ServiceAccountSchema](docs/Model/ServiceAccountSchema.md)
- [ServiceAccountStatus](docs/Model/ServiceAccountStatus.md)
- [ServiceAccountUpdateSchema](docs/Model/ServiceAccountUpdateSchema.md)
- [ServiceAccountUuidSchema](docs/Model/ServiceAccountUuidSchema.md)
- [ServiceName](docs/Model/ServiceName.md)
- [Session](docs/Model/Session.md)
- [SessionPayload](docs/Model/SessionPayload.md)
- [SessionState](docs/Model/SessionState.md)
- [SsoProvider](docs/Model/SsoProvider.md)
- [SsoToken](docs/Model/SsoToken.md)
- [User](docs/Model/User.md)
- [UserAccountPermission](docs/Model/UserAccountPermission.md)
- [UserAccountRole](docs/Model/UserAccountRole.md)
- [UserAccountSearchResult](docs/Model/UserAccountSearchResult.md)
- [UserAgreement](docs/Model/UserAgreement.md)
- [UserAgreementState](docs/Model/UserAgreementState.md)
- [UserPermissions](docs/Model/UserPermissions.md)
- [UserState](docs/Model/UserState.md)

## Authorization
All endpoints do not require authorization.
## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author



## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `0.0`
    - Package version: `0.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
