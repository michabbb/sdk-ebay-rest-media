# # CreateDocumentResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**documentId** | **string** | The unique identifier of the document to be uploaded.&lt;br&gt;&lt;br&gt;This value is returned in the response and &lt;b&gt;location&lt;/b&gt; header of the &lt;b&gt;createDocument&lt;/b&gt; method. This ID can be used with the &lt;b&gt;getDocument&lt;/b&gt; and &lt;b&gt;uploadDocument&lt;/b&gt; methods, and to add an uploaded document to a listing. See &lt;a href&#x3D;\&quot;/api-docs/sell/static/inventory/managing-document-media.html#add-documents\&quot; target&#x3D;\&quot;_blank\&quot;&gt;Adding documents to listings&lt;/a&gt; for more information. | [optional]
**documentStatus** | **string** | The status of the document resource. For example, the value &lt;code&gt;PENDING_UPLOAD&lt;/code&gt; is the initial state when the reference to the document has been created. For implementation help, refer to &lt;a href&#x3D;&#39;https://developer.ebay.com/api-docs/commerce/media/types/api:DocumentStatusEnum&#39;&gt;eBay API documentation&lt;/a&gt; | [optional]
**documentType** | **string** | The type of the document uploaded. For example, &lt;code&gt;USER_GUIDE_OR_MANUAL&lt;/code&gt;. For implementation help, refer to &lt;a href&#x3D;&#39;https://developer.ebay.com/api-docs/commerce/media/types/api:DocumentTypeEnum&#39;&gt;eBay API documentation&lt;/a&gt; | [optional]
**languages** | **string[]** | This array shows the language(s) used in the document. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
