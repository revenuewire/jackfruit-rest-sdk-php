# SwaggerClient-php
This API *does not* represent the final product. Some of the APIs listed below are *highly experimental* and *will likely change* before the final release. They may come with *crashes and bugs* and may potentially cause *data loss*.

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

// Configure API key authorization: JWT
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Authorization-JWT', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Authorization-JWT', 'Bearer');
// Configure API key authorization: API-KEY
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$api_instance = new Swagger\Client\Api\BillingsApi();
$billingInfoId = 56; // int | bill info id for the recurring transaction item
$cardHolderFullName = "cardHolderFullName_example"; // string | Card's holder full name
$cardNumber = "cardNumber_example"; // string | Credit Card number
$cardExpiry = "cardExpiry_example"; // string | Credit Card expiry
$cardCCV = "cardCCV_example"; // string | Credit CCV (optional)
$recurringTransactionItemId = "recurringTransactionItemId_example"; // string | recurring transaction item to be updated (optional)
$postalCode = "postalCode_example"; // string | Postal code (optional)

try {
    $result = $api_instance->billingInfoUpdate($billingInfoId, $cardHolderFullName, $cardNumber, $cardExpiry, $cardCCV, $recurringTransactionItemId, $postalCode);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillingsApi->billingInfoUpdate: ', $e->getMessage(), PHP_EOL;
}

?>
```

## Documentation for API Endpoints

All URIs are relative to *https://localhost/rest/v1*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*BillingsApi* | [**billingInfoUpdate**](docs/Api/BillingsApi.md#billinginfoupdate) | **PUT** /billings/{billingInfoId} | 
*BillingsApi* | [**billingInfoUpdatePaypal**](docs/Api/BillingsApi.md#billinginfoupdatepaypal) | **PUT** /billings/{billingInfoId}/update-paypal | 
*BillingsApi* | [**setUpPaypalUrl**](docs/Api/BillingsApi.md#setuppaypalurl) | **POST** /billings/{billingInfoId}/setup-paypal-url | 
*CustomersApi* | [**customersCustomerIdAddressTransactionIdPut**](docs/Api/CustomersApi.md#customerscustomeridaddresstransactionidput) | **PUT** /customers/{customerId}/address/{transactionId} | 
*CustomersApi* | [**customersCustomerIdGet**](docs/Api/CustomersApi.md#customerscustomeridget) | **GET** /customers/{customerId} | 
*CustomersApi* | [**customersCustomerUserIdOffersGet**](docs/Api/CustomersApi.md#customerscustomeruseridoffersget) | **GET** /customers/{customerUserId}/offers | 
*CustomersApi* | [**customersCustomerUserIdTransactionsGet**](docs/Api/CustomersApi.md#customerscustomeruseridtransactionsget) | **GET** /customers/{customerUserId}/transactions | 
*CustomersApi* | [**customersGet**](docs/Api/CustomersApi.md#customersget) | **GET** /customers | 
*DomainsApi* | [**domainsDelete**](docs/Api/DomainsApi.md#domainsdelete) | **DELETE** /domains/{id} | 
*DomainsApi* | [**domainsEmailIdDelete**](docs/Api/DomainsApi.md#domainsemailiddelete) | **DELETE** /domains/email/{id} | 
*DomainsApi* | [**domainsEmailPost**](docs/Api/DomainsApi.md#domainsemailpost) | **POST** /domains/email | 
*DomainsApi* | [**domainsGet**](docs/Api/DomainsApi.md#domainsget) | **GET** /domains | 
*DomainsApi* | [**domainsGet_0**](docs/Api/DomainsApi.md#domainsget_0) | **GET** /domains/{id} | 
*DomainsApi* | [**domainsIdUploadCertPost**](docs/Api/DomainsApi.md#domainsiduploadcertpost) | **POST** /domains/{id}/upload-cert | 
*DomainsApi* | [**domainsPost**](docs/Api/DomainsApi.md#domainspost) | **POST** /domains | 
*DomainsApi* | [**domainsUpdate**](docs/Api/DomainsApi.md#domainsupdate) | **PUT** /domains/{id} | 
*GEOApi* | [**geoGetCountryList**](docs/Api/GEOApi.md#geogetcountrylist) | **GET** /geo-info/countries | 
*GEOApi* | [**geoGetSupportedLanguages**](docs/Api/GEOApi.md#geogetsupportedlanguages) | **GET** /geo-info/supported-languages | 
*OrdersApi* | [**ordersCustomerEmailEmailGet**](docs/Api/OrdersApi.md#orderscustomeremailemailget) | **GET** /orders/customer-email/{email} | 
*OrdersApi* | [**ordersOrderIdGet**](docs/Api/OrdersApi.md#ordersorderidget) | **GET** /orders/{orderId} | 
*OrdersApi* | [**ordersPurchaseLookupPost**](docs/Api/OrdersApi.md#orderspurchaselookuppost) | **POST** /orders/purchase-lookup | 
*ProfilesApi* | [**profilesChangePasswordPut**](docs/Api/ProfilesApi.md#profileschangepasswordput) | **PUT** /profiles/change-password | 
*ProfilesApi* | [**profilesGet**](docs/Api/ProfilesApi.md#profilesget) | **GET** /profiles | 
*ProfilesApi* | [**profilesPut**](docs/Api/ProfilesApi.md#profilesput) | **PUT** /profiles | 
*SubscriptionsApi* | [**legacySubscriptionCancel**](docs/Api/SubscriptionsApi.md#legacysubscriptioncancel) | **PUT** /subscriptions/legacy/{transactionItemId}/cancel | 
*SubscriptionsApi* | [**subscriptionCancel**](docs/Api/SubscriptionsApi.md#subscriptioncancel) | **PUT** /subscriptions/{recurringTransactionItemId}/cancel | 
*SubscriptionsApi* | [**subscriptionGetOffer**](docs/Api/SubscriptionsApi.md#subscriptiongetoffer) | **GET** /subscriptions/offer/{transactionItemId} | 
*TokenApi* | [**tokenGenerate**](docs/Api/TokenApi.md#tokengenerate) | **POST** /token | 
*UsersApi* | [**customerLogin**](docs/Api/UsersApi.md#customerlogin) | **POST** /users/login | 
*UsersApi* | [**customerOrderLogin**](docs/Api/UsersApi.md#customerorderlogin) | **POST** /users/order-login | 
*UsersApi* | [**customerSignup**](docs/Api/UsersApi.md#customersignup) | **POST** /users/sign-up | 
*UsersApi* | [**userForgotPassword**](docs/Api/UsersApi.md#userforgotpassword) | **POST** /users/forget-password | 
*UsersApi* | [**userGet**](docs/Api/UsersApi.md#userget) | **GET** /users/{id} | 
*UsersApi* | [**userResetPassword**](docs/Api/UsersApi.md#userresetpassword) | **POST** /users/reset-password | 
*UsersApi* | [**userUpdate**](docs/Api/UsersApi.md#userupdate) | **PUT** /users/{id} | 
*UsersApi* | [**userUpdateEmail**](docs/Api/UsersApi.md#userupdateemail) | **PUT** /users/{id}/update-email | 
*UsersApi* | [**userUpdatePassword**](docs/Api/UsersApi.md#userupdatepassword) | **PUT** /users/{id}/update-password | 
*UsersApi* | [**userVerify**](docs/Api/UsersApi.md#userverify) | **PUT** /users/verify | 


## Documentation For Models

 - [BillInfo](docs/Model/BillInfo.md)
 - [Context](docs/Model/Context.md)
 - [Country](docs/Model/Country.md)
 - [CountryList](docs/Model/CountryList.md)
 - [Customer](docs/Model/Customer.md)
 - [CustomerAddress](docs/Model/CustomerAddress.md)
 - [CustomerAddressData](docs/Model/CustomerAddressData.md)
 - [CustomerData](docs/Model/CustomerData.md)
 - [CustomerOffers](docs/Model/CustomerOffers.md)
 - [CustomerOffersData](docs/Model/CustomerOffersData.md)
 - [CustomerOffersRecurringTransactionItem](docs/Model/CustomerOffersRecurringTransactionItem.md)
 - [CustomerOffersTransactionItem](docs/Model/CustomerOffersTransactionItem.md)
 - [CustomerOrder](docs/Model/CustomerOrder.md)
 - [CustomerOrders](docs/Model/CustomerOrders.md)
 - [CustomerPhone](docs/Model/CustomerPhone.md)
 - [CustomerPhoneData](docs/Model/CustomerPhoneData.md)
 - [Domain](docs/Model/Domain.md)
 - [DomainEmail](docs/Model/DomainEmail.md)
 - [DomainEmailLabel](docs/Model/DomainEmailLabel.md)
 - [Error](docs/Model/Error.md)
 - [Identity](docs/Model/Identity.md)
 - [IdentityData](docs/Model/IdentityData.md)
 - [NewDomain](docs/Model/NewDomain.md)
 - [Offer](docs/Model/Offer.md)
 - [PaypalUrl](docs/Model/PaypalUrl.md)
 - [PaypalUrlData](docs/Model/PaypalUrlData.md)
 - [Profile](docs/Model/Profile.md)
 - [Response](docs/Model/Response.md)
 - [State](docs/Model/State.md)
 - [SupportedLanguage](docs/Model/SupportedLanguage.md)
 - [SupportedLanguages](docs/Model/SupportedLanguages.md)
 - [Token](docs/Model/Token.md)
 - [TokenData](docs/Model/TokenData.md)
 - [Transaction](docs/Model/Transaction.md)
 - [TransactionItem](docs/Model/TransactionItem.md)
 - [User](docs/Model/User.md)
 - [UserData](docs/Model/UserData.md)


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




