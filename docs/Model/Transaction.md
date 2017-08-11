# Transaction

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Transaction Id | [optional] 
**type** | **string** | Transaction Type | [optional] 
**date** | [**\DateTime**](\DateTime.md) |  | [optional] 
**reference** | **string** |  | [optional] 
**fullReference** | **string** |  | [optional] 
**merchantName** | **string** |  | [optional] 
**currency** | **string** |  | [optional] 
**supportEmail** | **string** |  | [optional] 
**totalPrice** | **float** |  | [optional] 
**subTotalPrice** | **float** |  | [optional] 
**totalPriceTax** | **float** |  | [optional] 
**totalUSDPrice** | **float** |  | [optional] 
**totalUSDPriceTax** | **float** |  | [optional] 
**gateway** | **string** |  | [optional] 
**gatewayReference** | **string** |  | [optional] 
**extraParameters** | **string** |  | [optional] 
**transactionItems** | [**\Swagger\Client\Model\TransactionItem[]**](TransactionItem.md) |  | [optional] 
**order** | **int** |  | [optional] 
**parentTransactionId** | **int** |  | [optional] 
**shippingAddress** | [**\Swagger\Client\Model\CustomerAddress**](CustomerAddress.md) |  | [optional] 
**billInfo** | [**\Swagger\Client\Model\BillInfo**](BillInfo.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


