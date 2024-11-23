# macropage\SDKs\ebay\rest\media\DocumentApi

All URIs are relative to https://apim.ebay.com/commerce/media/v1_beta.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createDocument()**](DocumentApi.md#createDocument) | **POST** /document | 
[**getDocument()**](DocumentApi.md#getDocument) | **GET** /document/{document_id} | 
[**uploadDocument()**](DocumentApi.md#uploadDocument) | **POST** /document/{document_id}/upload | 


## `createDocument()`

```php
createDocument($contentType, $createDocumentRequest): \macropage\SDKs\ebay\rest\media\Model\CreateDocumentResponse
```



This method stages a document to be uploaded, and requires the type of document to be uploaded, and the language(s) that the document contains. A successful call returns a <b>documentId</b> value that is then used as a path parameter in an <a href=\" /api-docs/commerce/media/resources/document/methods/uploadDocument\" >uploadDocument</a> call.<p>When a document is successfully created, the method returns the HTTP Status Code <code>201 Created.</code> The method returns <b>documentId</b> in the response payload, which you can use to retrieve the document resource. This ID is also returned in the <b>location</b> header, for convenience.</p><div class=\"msgbox_important\"><p class=\"msgbox_importantInDiv\" data-mc-autonum=\"&lt;b&gt;&lt;span style=&quot;color: #dd1e31;&quot; class=&quot;mcFormatColor&quot;&gt;Important! &lt;/span&gt;&lt;/b&gt;\"><span class=\"autonumber\"><span><b><span style=\"color: #dd1e31;\" class=\"mcFormatColor\">Important!</span></b></span></span> Make sure to capture the document ID value returned in the response payload. This value is required to use the other methods in the <b>document</b> resource, and also needed to associate a document to a listing using the Trading and Inventory APIs.</p></div><p>To upload a created document, use the document ID returned from this method's response with the <a href=\" /api-docs/commerce/media/resources/document/methods/uploadDocument\" >uploadDocument</a> method. See <a href=\"/api-docs/sell/static/inventory/managing-document-media.html\" target=\"_blank\">Managing documents</a> for information on creating, uploading, and adding documents to listings.</p>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = macropage\SDKs\ebay\rest\media\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new macropage\SDKs\ebay\rest\media\Api\DocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contentType = 'contentType_example'; // string | This header indicates the format of the request body provided by the client. Its value should be set to <b>application/json</b>. <br><br> For more information, refer to <a href=\"/api-docs/static/rest-request-components.html#HTTP\" target=\"_blank \">HTTP request headers</a>.
$createDocumentRequest = new \macropage\SDKs\ebay\rest\media\Model\CreateDocumentRequest(); // \macropage\SDKs\ebay\rest\media\Model\CreateDocumentRequest

try {
    $result = $apiInstance->createDocument($contentType, $createDocumentRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentApi->createDocument: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contentType** | **string**| This header indicates the format of the request body provided by the client. Its value should be set to &lt;b&gt;application/json&lt;/b&gt;. &lt;br&gt;&lt;br&gt; For more information, refer to &lt;a href&#x3D;\&quot;/api-docs/static/rest-request-components.html#HTTP\&quot; target&#x3D;\&quot;_blank \&quot;&gt;HTTP request headers&lt;/a&gt;. |
 **createDocumentRequest** | [**\macropage\SDKs\ebay\rest\media\Model\CreateDocumentRequest**](../Model/CreateDocumentRequest.md)|  | [optional]

### Return type

[**\macropage\SDKs\ebay\rest\media\Model\CreateDocumentResponse**](../Model/CreateDocumentResponse.md)

### Authorization

[api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDocument()`

```php
getDocument($documentId): \macropage\SDKs\ebay\rest\media\Model\DocumentResponse
```



This method retrieves the current <b>status</b> and metadata of the specified document.<br><br><div class=\"msgbox_important\"><p class=\"msgbox_importantInDiv\" data-mc-autonum=\"&lt;b&gt;&lt;span style=&quot;color: #dd1e31;&quot; class=&quot;mcFormatColor&quot;&gt;Important! &lt;/span&gt;&lt;/b&gt;\"><span class=\"autonumber\"><span><b><span style=\"color: #dd1e31;\" class=\"mcFormatColor\">Important!</span></b></span></span> The document ID value returned in the response payload of the <a href=\"/api-docs/commerce/media/resources/document/methods/createDocument\">createDocument</a> method is a required input path parameter for this method.</p></div><p>See <a href=\"/api-docs/sell/static/inventory/managing-document-media.html\" target=\"_blank\">Managing documents</a> for additional information.</p>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = macropage\SDKs\ebay\rest\media\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new macropage\SDKs\ebay\rest\media\Api\DocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$documentId = 'documentId_example'; // string | The unique identifier of the document for which status and metadata is being retrieved.<br><br>This value is returned in the response of the <a href=\"/api-docs/commerce/media/resources/document/methods/createDocument\" target=\"_blank\">createDocument</a> method.

try {
    $result = $apiInstance->getDocument($documentId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentApi->getDocument: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **documentId** | **string**| The unique identifier of the document for which status and metadata is being retrieved.&lt;br&gt;&lt;br&gt;This value is returned in the response of the &lt;a href&#x3D;\&quot;/api-docs/commerce/media/resources/document/methods/createDocument\&quot; target&#x3D;\&quot;_blank\&quot;&gt;createDocument&lt;/a&gt; method. |

### Return type

[**\macropage\SDKs\ebay\rest\media\Model\DocumentResponse**](../Model/DocumentResponse.md)

### Authorization

[api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `uploadDocument()`

```php
uploadDocument($documentId, $contentType): \macropage\SDKs\ebay\rest\media\Model\DocumentResponse
```



This method associates the specified file with the specified document ID and uploads the input file. After the file has been uploaded, the processing of the file begins. Supported file types include .PDF, .JPEG/.JPG, and .PNG.<br><br><span class=\"tablenote\"><span style=\"color:#004680\"><strong>Note:</strong></span> The document ID value returned in the response of the <a href=\"/api-docs/commerce/media/resources/document/methods/createDocument\">createDocument</a> method is a required input path parameter for this method. This value is also returned in the <b>location</b> header of the <b>createDocument</b> response payload.</span><br>A successful upload returns the HTTP Status Code <code>200 OK</code>.<br><p>See <a href=\"/api-docs/sell/static/inventory/managing-document-media.html\" target=\"_blank\">Managing documents</a> for additional information.</p> <span class=\"tablenote\"><b>Note:</b> You must use a <strong>Content-Type</strong> header with its value set to <b>multipart/form-data</b>.</p></span></p>This call does not have a JSON Request payload but uploads the file as form-data. For example:<br /> <pre>file: @&quot;/C:/Users/.../drone_user_warranty.pdf&quot;</pre>See <a href=\"/api-docs/commerce/media/resources/document/methods/uploadDocument#h2-samples\">Samples</a> for information.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = macropage\SDKs\ebay\rest\media\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new macropage\SDKs\ebay\rest\media\Api\DocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$documentId = 'documentId_example'; // string | The unique identifier of the document to be uploaded.<br><br>This value is returned in the response of the <a href=\"/api-docs/commerce/media/resources/document/methods/createDocument\" target=\"_blank\">createDocument</a> method.
$contentType = 'contentType_example'; // string | This header indicates the format of the request body provided by the client. Its value should be set to <b>multipart/form-data</b>. <br><br> For more information, refer to <a href=\"/api-docs/static/rest-request-components.html#HTTP\" target=\"_blank \">HTTP request headers</a>.

try {
    $result = $apiInstance->uploadDocument($documentId, $contentType);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentApi->uploadDocument: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **documentId** | **string**| The unique identifier of the document to be uploaded.&lt;br&gt;&lt;br&gt;This value is returned in the response of the &lt;a href&#x3D;\&quot;/api-docs/commerce/media/resources/document/methods/createDocument\&quot; target&#x3D;\&quot;_blank\&quot;&gt;createDocument&lt;/a&gt; method. |
 **contentType** | **string**| This header indicates the format of the request body provided by the client. Its value should be set to &lt;b&gt;multipart/form-data&lt;/b&gt;. &lt;br&gt;&lt;br&gt; For more information, refer to &lt;a href&#x3D;\&quot;/api-docs/static/rest-request-components.html#HTTP\&quot; target&#x3D;\&quot;_blank \&quot;&gt;HTTP request headers&lt;/a&gt;. |

### Return type

[**\macropage\SDKs\ebay\rest\media\Model\DocumentResponse**](../Model/DocumentResponse.md)

### Authorization

[api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
