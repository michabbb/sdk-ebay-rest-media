# # Error

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**category** | **string** | Identifies the type of erro. | [optional]
**domain** | **string** | Name for the primary system where the error occurred. This is relevant for application errors. | [optional]
**errorId** | **int** | A unique number to identify the error. | [optional]
**inputRefIds** | **string[]** | An array of request elements most closely associated to the error. | [optional]
**longMessage** | **string** | A more detailed explanation of the error. | [optional]
**message** | **string** | Information on how to correct the problem, in the end user&#39;s terms and language where applicable. | [optional]
**outputRefIds** | **string[]** | An array of request elements most closely associated to the error. | [optional]
**parameters** | [**\macropage\SDKs\ebay\rest\media\Model\ErrorParameter[]**](ErrorParameter.md) | An array of name/value pairs that describe details the error condition. These are useful when multiple errors are returned. | [optional]
**subdomain** | **string** | Further helps indicate which subsystem the error is coming from. System subcategories include: Initialization, Serialization, Security, Monitoring, Rate Limiting, etc. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
