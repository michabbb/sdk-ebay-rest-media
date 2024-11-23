# # DocumentResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**documentId** | **string** | The unique ID of the document. | [optional]
**documentMetadata** | [**\macropage\SDKs\ebay\rest\media\Model\DocumentMetadata**](DocumentMetadata.md) |  | [optional]
**documentStatus** | **string** | The status of the document resource.&lt;br&gt;&lt;br&gt;Once a document has been uploaded using the &lt;b&gt;uploadDocument&lt;/b&gt; method, the &lt;b&gt;documentStatus&lt;/b&gt; will be &lt;code&gt;SUBMITTED&lt;/code&gt;. The document will then either be accepted or rejected. Only documents with the status of &lt;code&gt;ACCEPTED&lt;/code&gt; are available to be added to a listing. For implementation help, refer to &lt;a href&#x3D;&#39;https://developer.ebay.com/api-docs/commerce/media/types/api:DocumentStatusEnum&#39;&gt;eBay API documentation&lt;/a&gt; | [optional]
**documentType** | **string** | The type of the document uploaded. For example, &lt;code&gt;USER_GUIDE_OR_MANUAL&lt;/code&gt;. For implementation help, refer to &lt;a href&#x3D;&#39;https://developer.ebay.com/api-docs/commerce/media/types/api:DocumentTypeEnum&#39;&gt;eBay API documentation&lt;/a&gt; | [optional]
**languages** | **string[]** | This array shows the language(s) used in the document. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
