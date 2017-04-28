# Transaction

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Transaction Id | [optional] 
**type** | **string** | Transaction Type | [optional] 
**date** | [**\DateTime**](\DateTime.md) |  | [optional] 
**reference** | **string** |  | [optional] 
**full_reference** | **string** |  | [optional] 
**merchant_namr** | **string** |  | [optional] 
**support_email** | **string** |  | [optional] 
**total_price** | **float** |  | [optional] 
**sub_total_price** | **float** |  | [optional] 
**total_price_tax** | **float** |  | [optional] 
**total_usd_price** | **float** |  | [optional] 
**total_usd_price_tax** | **float** |  | [optional] 
**gateway** | **string** |  | [optional] 
**gateway_reference** | **string** |  | [optional] 
**extra_parameters** | **string** |  | [optional] 
**transaction_items** | [**\Swagger\Client\Model\TransactionItem[]**](TransactionItem.md) |  | [optional] 
**order** | **int** |  | [optional] 
**parent_transaction_id** | **int** |  | [optional] 
**shipping_address** | [**\Swagger\Client\Model\CustomerAddress**](CustomerAddress.md) |  | [optional] 
**bill_info** | [**\Swagger\Client\Model\BillInfo**](BillInfo.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


