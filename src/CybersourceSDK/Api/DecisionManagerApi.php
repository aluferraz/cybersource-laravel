<?php
/**
 * DecisionManagerApi
 * PHP version 5
 *
 * @category Class
 * @package  Haque\Cybersource\CybersourceSDK
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Haque\Cybersource\CybersourceSDK Merged Spec
 *
 * All Haque\Cybersource\CybersourceSDK API specs merged together. These are available at https://developer.cybersource.com/api/reference/api-reference.html
 *
 * OpenAPI spec version: 0.0.1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Haque\Cybersource\CybersourceSDK\Api;

use \Haque\Cybersource\CybersourceSDK\ApiClient;
use \Haque\Cybersource\CybersourceSDK\ApiException;
use \Haque\Cybersource\CybersourceSDK\Configuration;
use \Haque\Cybersource\CybersourceSDK\ObjectSerializer;

/**
 * DecisionManagerApi Class Doc Comment
 *
 * @category Class
 * @package  Haque\Cybersource\CybersourceSDK
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DecisionManagerApi
{
    /**
     * API Client
     *
     * @var \Haque\Cybersource\CybersourceSDK\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     *
     * @param \Haque\Cybersource\CybersourceSDK\ApiClient|null $apiClient The api client to use
     */
    public function __construct(\Haque\Cybersource\CybersourceSDK\ApiClient $apiClient = null)
    {
        if ($apiClient === null) {
            $apiClient = new ApiClient();
        }

        $this->apiClient = $apiClient;
    }

    /**
     * Get API client
     *
     * @return \Haque\Cybersource\CybersourceSDK\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param \Haque\Cybersource\CybersourceSDK\ApiClient $apiClient set the API client
     *
     * @return DecisionManagerApi
     */
    public function setApiClient(\Haque\Cybersource\CybersourceSDK\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation addNegative
     *
     * List Management
     *
     * @param string $type The list to be updated. It can be &#39;positive&#39;, &#39;negative&#39; or &#39;review&#39;. (required)
     * @param \Haque\Cybersource\CybersourceSDK\Model\AddNegativeListRequest $addNegativeListRequest  (required)
     * @throws \Haque\Cybersource\CybersourceSDK\ApiException on non-2xx response
     * @return array of \Haque\Cybersource\CybersourceSDK\Model\RiskV1UpdatePost201Response, HTTP status code, HTTP response headers (array of strings)
     */
    public function addNegative($type, $addNegativeListRequest)
    {
        list($response, $statusCode, $httpHeader) = $this->addNegativeWithHttpInfo($type, $addNegativeListRequest);
        return [$response, $statusCode, $httpHeader];
    }

    /**
     * Operation addNegativeWithHttpInfo
     *
     * List Management
     *
     * @param string $type The list to be updated. It can be &#39;positive&#39;, &#39;negative&#39; or &#39;review&#39;. (required)
     * @param \Haque\Cybersource\CybersourceSDK\Model\AddNegativeListRequest $addNegativeListRequest  (required)
     * @throws \Haque\Cybersource\CybersourceSDK\ApiException on non-2xx response
     * @return array of \Haque\Cybersource\CybersourceSDK\Model\RiskV1UpdatePost201Response, HTTP status code, HTTP response headers (array of strings)
     */
    public function addNegativeWithHttpInfo($type, $addNegativeListRequest)
    {
        // verify the required parameter 'type' is set
        if ($type === null) {
            throw new \InvalidArgumentException('Missing the required parameter $type when calling addNegative');
        }
        // verify the required parameter 'addNegativeListRequest' is set
        if ($addNegativeListRequest === null) {
            throw new \InvalidArgumentException('Missing the required parameter $addNegativeListRequest when calling addNegative');
        }
        // parse inputs
        $resourcePath = "/risk/v1/lists/{type}/entries";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/hal+json;charset=utf-8']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json;charset=utf-8']);

        // path params
        if ($type !== null) {
            $resourcePath = str_replace(
                "{" . "type" . "}",
                $this->apiClient->getSerializer()->toPathValue($type),
                $resourcePath
            );
        }
        // body params
        $_tempBody = null;
        if (isset($addNegativeListRequest)) {
            $_tempBody = $addNegativeListRequest;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Haque\Cybersource\CybersourceSDK\Model\RiskV1UpdatePost201Response',
                '/risk/v1/lists/{type}/entries'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Haque\Cybersource\CybersourceSDK\Model\RiskV1UpdatePost201Response', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 201:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Haque\Cybersource\CybersourceSDK\Model\RiskV1UpdatePost201Response', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Haque\Cybersource\CybersourceSDK\Model\RiskV1DecisionsPost400Response', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation createDecisionManagerCase
     *
     * Create Decision Manager Case
     *
     * @param \Haque\Cybersource\CybersourceSDK\Model\CreateDecisionManagerCaseRequest $createDecisionManagerCaseRequest  (required)
     * @throws \Haque\Cybersource\CybersourceSDK\ApiException on non-2xx response
     * @return array of \Haque\Cybersource\CybersourceSDK\Model\RiskV1DecisionsPost201Response, HTTP status code, HTTP response headers (array of strings)
     */
    public function createDecisionManagerCase($createDecisionManagerCaseRequest)
    {
        list($response, $statusCode, $httpHeader) = $this->createDecisionManagerCaseWithHttpInfo($createDecisionManagerCaseRequest);
        return [$response, $statusCode, $httpHeader];
    }

    /**
     * Operation createDecisionManagerCaseWithHttpInfo
     *
     * Create Decision Manager Case
     *
     * @param \Haque\Cybersource\CybersourceSDK\Model\CreateDecisionManagerCaseRequest $createDecisionManagerCaseRequest  (required)
     * @throws \Haque\Cybersource\CybersourceSDK\ApiException on non-2xx response
     * @return array of \Haque\Cybersource\CybersourceSDK\Model\RiskV1DecisionsPost201Response, HTTP status code, HTTP response headers (array of strings)
     */
    public function createDecisionManagerCaseWithHttpInfo($createDecisionManagerCaseRequest)
    {
        // verify the required parameter 'createDecisionManagerCaseRequest' is set
        if ($createDecisionManagerCaseRequest === null) {
            throw new \InvalidArgumentException('Missing the required parameter $createDecisionManagerCaseRequest when calling createDecisionManagerCase');
        }
        // parse inputs
        $resourcePath = "/risk/v1/decisions";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/hal+json;charset=utf-8']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json;charset=utf-8']);

        // body params
        $_tempBody = null;
        if (isset($createDecisionManagerCaseRequest)) {
            $_tempBody = $createDecisionManagerCaseRequest;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Haque\Cybersource\CybersourceSDK\Model\RiskV1DecisionsPost201Response',
                '/risk/v1/decisions'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Haque\Cybersource\CybersourceSDK\Model\RiskV1DecisionsPost201Response', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 201:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Haque\Cybersource\CybersourceSDK\Model\RiskV1DecisionsPost201Response', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Haque\Cybersource\CybersourceSDK\Model\RiskV1DecisionsPost400Response', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 502:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Haque\Cybersource\CybersourceSDK\Model\PtsV2PaymentsPost502Response', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation fraudUpdate
     *
     * Fraud Marking
     *
     * @param string $id Request ID of the transaction that you want to mark as suspect or remove from history. (required)
     * @param \Haque\Cybersource\CybersourceSDK\Model\FraudMarkingActionRequest $fraudMarkingActionRequest  (required)
     * @throws \Haque\Cybersource\CybersourceSDK\ApiException on non-2xx response
     * @return array of \Haque\Cybersource\CybersourceSDK\Model\RiskV1UpdatePost201Response, HTTP status code, HTTP response headers (array of strings)
     */
    public function fraudUpdate($id, $fraudMarkingActionRequest)
    {
        list($response, $statusCode, $httpHeader) = $this->fraudUpdateWithHttpInfo($id, $fraudMarkingActionRequest);
        return [$response, $statusCode, $httpHeader];
    }

    /**
     * Operation fraudUpdateWithHttpInfo
     *
     * Fraud Marking
     *
     * @param string $id Request ID of the transaction that you want to mark as suspect or remove from history. (required)
     * @param \Haque\Cybersource\CybersourceSDK\Model\FraudMarkingActionRequest $fraudMarkingActionRequest  (required)
     * @throws \Haque\Cybersource\CybersourceSDK\ApiException on non-2xx response
     * @return array of \Haque\Cybersource\CybersourceSDK\Model\RiskV1UpdatePost201Response, HTTP status code, HTTP response headers (array of strings)
     */
    public function fraudUpdateWithHttpInfo($id, $fraudMarkingActionRequest)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling fraudUpdate');
        }
        // verify the required parameter 'fraudMarkingActionRequest' is set
        if ($fraudMarkingActionRequest === null) {
            throw new \InvalidArgumentException('Missing the required parameter $fraudMarkingActionRequest when calling fraudUpdate');
        }
        // parse inputs
        $resourcePath = "/risk/v1/decisions/{id}/marking";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/hal+json;charset=utf-8']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json;charset=utf-8']);

        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                "{" . "id" . "}",
                $this->apiClient->getSerializer()->toPathValue($id),
                $resourcePath
            );
        }
        // body params
        $_tempBody = null;
        if (isset($fraudMarkingActionRequest)) {
            $_tempBody = $fraudMarkingActionRequest;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Haque\Cybersource\CybersourceSDK\Model\RiskV1UpdatePost201Response',
                '/risk/v1/decisions/{id}/marking'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Haque\Cybersource\CybersourceSDK\Model\RiskV1UpdatePost201Response', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 201:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Haque\Cybersource\CybersourceSDK\Model\RiskV1UpdatePost201Response', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Haque\Cybersource\CybersourceSDK\Model\RiskV1DecisionsPost400Response', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}