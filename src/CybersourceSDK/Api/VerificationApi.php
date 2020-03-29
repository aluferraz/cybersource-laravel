<?php
/**
 * VerificationApi
 * PHP version 5
 *
 * @category Class
 * @package  Incevio\Cybersource\CybersourceSDK
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Incevio\Cybersource\CybersourceSDK Merged Spec
 *
 * All Incevio\Cybersource\CybersourceSDK API specs merged together. These are available at https://developer.cybersource.com/api/reference/api-reference.html
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

namespace Incevio\Cybersource\CybersourceSDK\Api;

use \Incevio\Cybersource\CybersourceSDK\ApiClient;
use \Incevio\Cybersource\CybersourceSDK\ApiException;
use \Incevio\Cybersource\CybersourceSDK\Configuration;
use \Incevio\Cybersource\CybersourceSDK\ObjectSerializer;

/**
 * VerificationApi Class Doc Comment
 *
 * @category Class
 * @package  Incevio\Cybersource\CybersourceSDK
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class VerificationApi
{
    /**
     * API Client
     *
     * @var \Incevio\Cybersource\CybersourceSDK\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     *
     * @param \Incevio\Cybersource\CybersourceSDK\ApiClient|null $apiClient The api client to use
     */
    public function __construct(\Incevio\Cybersource\CybersourceSDK\ApiClient $apiClient = null)
    {
        if ($apiClient === null) {
            $apiClient = new ApiClient();
        }

        $this->apiClient = $apiClient;
    }

    /**
     * Get API client
     *
     * @return \Incevio\Cybersource\CybersourceSDK\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param \Incevio\Cybersource\CybersourceSDK\ApiClient $apiClient set the API client
     *
     * @return VerificationApi
     */
    public function setApiClient(\Incevio\Cybersource\CybersourceSDK\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation validateExportCompliance
     *
     * Validate export compliance
     *
     * @param \Incevio\Cybersource\CybersourceSDK\Model\ValidateExportComplianceRequest $validateExportComplianceRequest  (required)
     * @throws \Incevio\Cybersource\CybersourceSDK\ApiException on non-2xx response
     * @return array of \Incevio\Cybersource\CybersourceSDK\Model\RiskV1ExportComplianceInquiriesPost201Response, HTTP status code, HTTP response headers (array of strings)
     */
    public function validateExportCompliance($validateExportComplianceRequest)
    {
        list($response, $statusCode, $httpHeader) = $this->validateExportComplianceWithHttpInfo($validateExportComplianceRequest);
        return [$response, $statusCode, $httpHeader];
    }

    /**
     * Operation validateExportComplianceWithHttpInfo
     *
     * Validate export compliance
     *
     * @param \Incevio\Cybersource\CybersourceSDK\Model\ValidateExportComplianceRequest $validateExportComplianceRequest  (required)
     * @throws \Incevio\Cybersource\CybersourceSDK\ApiException on non-2xx response
     * @return array of \Incevio\Cybersource\CybersourceSDK\Model\RiskV1ExportComplianceInquiriesPost201Response, HTTP status code, HTTP response headers (array of strings)
     */
    public function validateExportComplianceWithHttpInfo($validateExportComplianceRequest)
    {
        // verify the required parameter 'validateExportComplianceRequest' is set
        if ($validateExportComplianceRequest === null) {
            throw new \InvalidArgumentException('Missing the required parameter $validateExportComplianceRequest when calling validateExportCompliance');
        }
        // parse inputs
        $resourcePath = "/risk/v1/export-compliance-inquiries";
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
        if (isset($validateExportComplianceRequest)) {
            $_tempBody = $validateExportComplianceRequest;
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
                '\Incevio\Cybersource\CybersourceSDK\Model\RiskV1ExportComplianceInquiriesPost201Response',
                '/risk/v1/export-compliance-inquiries'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Incevio\Cybersource\CybersourceSDK\Model\RiskV1ExportComplianceInquiriesPost201Response', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 201:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Incevio\Cybersource\CybersourceSDK\Model\RiskV1ExportComplianceInquiriesPost201Response', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Incevio\Cybersource\CybersourceSDK\Model\RiskV1DecisionsPost400Response', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 502:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Incevio\Cybersource\CybersourceSDK\Model\PtsV2PaymentsPost502Response', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation verifyCustomerAddress
     *
     * Verify customer address
     *
     * @param \Incevio\Cybersource\CybersourceSDK\Model\VerifyCustomerAddressRequest $verifyCustomerAddressRequest  (required)
     * @throws \Incevio\Cybersource\CybersourceSDK\ApiException on non-2xx response
     * @return array of \Incevio\Cybersource\CybersourceSDK\Model\RiskV1AddressVerificationsPost201Response, HTTP status code, HTTP response headers (array of strings)
     */
    public function verifyCustomerAddress($verifyCustomerAddressRequest)
    {
        list($response, $statusCode, $httpHeader) = $this->verifyCustomerAddressWithHttpInfo($verifyCustomerAddressRequest);
        return [$response, $statusCode, $httpHeader];
    }

    /**
     * Operation verifyCustomerAddressWithHttpInfo
     *
     * Verify customer address
     *
     * @param \Incevio\Cybersource\CybersourceSDK\Model\VerifyCustomerAddressRequest $verifyCustomerAddressRequest  (required)
     * @throws \Incevio\Cybersource\CybersourceSDK\ApiException on non-2xx response
     * @return array of \Incevio\Cybersource\CybersourceSDK\Model\RiskV1AddressVerificationsPost201Response, HTTP status code, HTTP response headers (array of strings)
     */
    public function verifyCustomerAddressWithHttpInfo($verifyCustomerAddressRequest)
    {
        // verify the required parameter 'verifyCustomerAddressRequest' is set
        if ($verifyCustomerAddressRequest === null) {
            throw new \InvalidArgumentException('Missing the required parameter $verifyCustomerAddressRequest when calling verifyCustomerAddress');
        }
        // parse inputs
        $resourcePath = "/risk/v1/address-verifications";
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
        if (isset($verifyCustomerAddressRequest)) {
            $_tempBody = $verifyCustomerAddressRequest;
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
                '\Incevio\Cybersource\CybersourceSDK\Model\RiskV1AddressVerificationsPost201Response',
                '/risk/v1/address-verifications'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Incevio\Cybersource\CybersourceSDK\Model\RiskV1AddressVerificationsPost201Response', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 201:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Incevio\Cybersource\CybersourceSDK\Model\RiskV1AddressVerificationsPost201Response', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Incevio\Cybersource\CybersourceSDK\Model\RiskV1DecisionsPost400Response', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 502:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Incevio\Cybersource\CybersourceSDK\Model\PtsV2PaymentsPost502Response', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}
