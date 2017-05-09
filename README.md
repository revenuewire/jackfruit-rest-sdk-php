# SwaggerClient-php
No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)

This PHP package is automatically generated by the [Swagger Codegen](https://github.com/swagger-api/swagger-codegen) project:

- API version: v1
- Build package: io.swagger.codegen.languages.PhpClientCodegen

## Requirements

PHP 5.4.0 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com/revenuewire/jackfruit-rest-sdk-php.git"
    }
  ],
  "require": {
    "revenuewire/jackfruit-rest-sdk-php": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/SwaggerClient-php/autoload.php');
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\CustomersApi();
$customerId = "customerId_example"; // string | Customer id
$transactionId = 56; // int | transaction id
$name = "name_example"; // string | Customer's name
$address = "address_example"; // string | Customer's address
$countryCode = "countryCode_example"; // string | Country code
$city = "city_example"; // string | City
$postalCode = "postalCode_example"; // string | Postal code

try {
    $result = $api_instance->customersCustomerIdAddressTransactionIdPut($customerId, $transactionId, $name, $address, $countryCode, $city, $postalCode);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->customersCustomerIdAddressTransactionIdPut: ', $e->getMessage(), PHP_EOL;
}

?>
```

## Documentation for API Endpoints

All URIs are relative to *https://localhost/rest/v1*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*CustomersApi* | [**customersCustomerIdAddressTransactionIdPut**](docs/Api/CustomersApi.md#customerscustomeridaddresstransactionidput) | **PUT** /customers/{customerId}/address/{transactionId} | 
*CustomersApi* | [**customersCustomerIdBillingInfoBillingInfoIdPut**](docs/Api/CustomersApi.md#customerscustomeridbillinginfobillinginfoidput) | **PUT** /customers/{customerId}/billing-info/{billingInfoId} | 
*CustomersApi* | [**customersCustomerIdGet**](docs/Api/CustomersApi.md#customerscustomeridget) | **GET** /customers/{customerId} | 
*CustomersApi* | [**customersCustomerUserIdOffersGet**](docs/Api/CustomersApi.md#customerscustomeruseridoffersget) | **GET** /customers/{customerUserId}/offers | 
*CustomersApi* | [**customersCustomerUserIdTransactionsGet**](docs/Api/CustomersApi.md#customerscustomeruseridtransactionsget) | **GET** /customers/{customerUserId}/transactions | 
*CustomersApi* | [**customersGet**](docs/Api/CustomersApi.md#customersget) | **GET** /customers | 
*DomainsApi* | [**domainsEmailIdDelete**](docs/Api/DomainsApi.md#domainsemailiddelete) | **DELETE** /domains/email/{id} | 
*DomainsApi* | [**domainsEmailPost**](docs/Api/DomainsApi.md#domainsemailpost) | **POST** /domains/email | 
*DomainsApi* | [**domainsGet**](docs/Api/DomainsApi.md#domainsget) | **GET** /domains | 
*DomainsApi* | [**domainsIdDelete**](docs/Api/DomainsApi.md#domainsiddelete) | **DELETE** /domains/{id} | 
*DomainsApi* | [**domainsIdGet**](docs/Api/DomainsApi.md#domainsidget) | **GET** /domains/{id} | 
*DomainsApi* | [**domainsIdPut**](docs/Api/DomainsApi.md#domainsidput) | **PUT** /domains/{id} | 
*DomainsApi* | [**domainsIdUploadCertPost**](docs/Api/DomainsApi.md#domainsiduploadcertpost) | **POST** /domains/{id}/upload-cert | 
*DomainsApi* | [**domainsPost**](docs/Api/DomainsApi.md#domainspost) | **POST** /domains | 
*GEOApi* | [**geoGetCountryList**](docs/Api/GEOApi.md#geogetcountrylist) | **GET** /geo-info/countries | 
*GEOApi* | [**geoGetSupportedLanguages**](docs/Api/GEOApi.md#geogetsupportedlanguages) | **GET** /geo-info/supported-languages | 
*OrdersApi* | [**ordersCustomerEmailEmailGet**](docs/Api/OrdersApi.md#orderscustomeremailemailget) | **GET** /orders/customer-email/{email} | 
*OrdersApi* | [**ordersOrderIdGet**](docs/Api/OrdersApi.md#ordersorderidget) | **GET** /orders/{orderId} | 
*OrdersApi* | [**ordersPurchaseLookupPost**](docs/Api/OrdersApi.md#orderspurchaselookuppost) | **POST** /orders/purchase-lookup | 
*ProfilesApi* | [**profilesChangePasswordPut**](docs/Api/ProfilesApi.md#profileschangepasswordput) | **PUT** /profiles/change-password | 
*ProfilesApi* | [**profilesGet**](docs/Api/ProfilesApi.md#profilesget) | **GET** /profiles | 
*ProfilesApi* | [**profilesPut**](docs/Api/ProfilesApi.md#profilesput) | **PUT** /profiles | 
*SubscriptionsApi* | [**subscriptionsRecurringTransactionItemIdCancelPut**](docs/Api/SubscriptionsApi.md#subscriptionsrecurringtransactionitemidcancelput) | **PUT** /subscriptions/{recurringTransactionItemId}/cancel | 
*TokenApi* | [**tokenGenerate**](docs/Api/TokenApi.md#tokengenerate) | **POST** /token | 
*UsersApi* | [**customerLogin**](docs/Api/UsersApi.md#customerlogin) | **POST** /users/login | 
*UsersApi* | [**customerOrderLogin**](docs/Api/UsersApi.md#customerorderlogin) | **POST** /users/order-login | 
*UsersApi* | [**customerSignup**](docs/Api/UsersApi.md#customersignup) | **POST** /users/sign-up | 
*UsersApi* | [**userForgotPassword**](docs/Api/UsersApi.md#userforgotpassword) | **POST** /users/forget-password | 
*UsersApi* | [**userGet**](docs/Api/UsersApi.md#userget) | **GET** /users/{id} | 
*UsersApi* | [**userResetPassword**](docs/Api/UsersApi.md#userresetpassword) | **POST** /users/reset-password | 
*UsersApi* | [**userUpdate**](docs/Api/UsersApi.md#userupdate) | **PUT** /users/{id} | 
*UsersApi* | [**userUpdatePassword**](docs/Api/UsersApi.md#userupdatepassword) | **PUT** /users/{id}/update-password | 
*UsersApi* | [**userVerify**](docs/Api/UsersApi.md#userverify) | **PUT** /users/verify | 


## Documentation For Models

 - [BillInfo](docs/Model/BillInfo.md)
 - [Country](docs/Model/Country.md)
 - [CountryList](docs/Model/CountryList.md)
 - [Customer](docs/Model/Customer.md)
 - [CustomerAddress](docs/Model/CustomerAddress.md)
 - [CustomerOffer](docs/Model/CustomerOffer.md)
 - [CustomerOrder](docs/Model/CustomerOrder.md)
 - [CustomerOrders](docs/Model/CustomerOrders.md)
 - [CustomerPhone](docs/Model/CustomerPhone.md)
 - [Domain](docs/Model/Domain.md)
 - [DomainEmail](docs/Model/DomainEmail.md)
 - [DomainEmailLabel](docs/Model/DomainEmailLabel.md)
 - [Error](docs/Model/Error.md)
 - [Identity](docs/Model/Identity.md)
 - [IdentityData](docs/Model/IdentityData.md)
 - [NewDomain](docs/Model/NewDomain.md)
 - [Offer](docs/Model/Offer.md)
 - [Profile](docs/Model/Profile.md)
 - [RecurringItem](docs/Model/RecurringItem.md)
 - [Response](docs/Model/Response.md)
 - [State](docs/Model/State.md)
 - [SupportedLanguage](docs/Model/SupportedLanguage.md)
 - [SupportedLanguages](docs/Model/SupportedLanguages.md)
 - [Token](docs/Model/Token.md)
 - [TokenData](docs/Model/TokenData.md)
 - [Transaction](docs/Model/Transaction.md)
 - [TransactionItem](docs/Model/TransactionItem.md)
 - [User](docs/Model/User.md)


## Documentation For Authorization


## API-KEY

- **Type**: API key
- **API key parameter name**: X-API-KEY
- **Location**: HTTP header

## JWT

- **Type**: API key
- **API key parameter name**: X-Authorization-JWT
- **Location**: HTTP header


## Author




