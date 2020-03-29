<?php
/**
 * ReportSubscriptionsApi
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
 * ReportSubscriptionsApi Class Doc Comment
 *
 * @category Class
 * @package  Haque\Cybersource\CybersourceSDK
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ReportSubscriptionsApi
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
     * @return ReportSubscriptionsApi
     */
    public function setApiClient(\Haque\Cybersource\CybersourceSDK\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation createStandardOrClassicSubscription
     *
     * Create a Standard or Classic Subscription
     *
     * @param \Haque\Cybersource\CybersourceSDK\Model\PredefinedSubscriptionRequestBean $predefinedSubscriptionRequestBean Report subscription request payload (required)
     * @param string $organizationId Valid Cybersource Organization Id (optional)
     * @throws \Haque\Cybersource\CybersourceSDK\ApiException on non-2xx response
     * @return array of void, HTTP status code, HTTP response headers (array of strings)
     */
    public function createStandardOrClassicSubscription($predefinedSubscriptionRequestBean, $organizationId = null)
    {
        list($response, $statusCode, $httpHeader) = $this->createStandardOrClassicSubscriptionWithHttpInfo($predefinedSubscriptionRequestBean, $organizationId);
        return [$response, $statusCode, $httpHeader];
    }

    /**
     * Operation createStandardOrClassicSubscriptionWithHttpInfo
     *
     * Create a Standard or Classic Subscription
     *
     * @param \Haque\Cybersource\CybersourceSDK\Model\PredefinedSubscriptionRequestBean $predefinedSubscriptionRequestBean Report subscription request payload (required)
     * @param string $organizationId Valid Cybersource Organization Id (optional)
     * @throws \Haque\Cybersource\CybersourceSDK\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function createStandardOrClassicSubscriptionWithHttpInfo($predefinedSubscriptionRequestBean, $organizationId = null)
    {
        // verify the required parameter 'predefinedSubscriptionRequestBean' is set
        if ($predefinedSubscriptionRequestBean === null) {
            throw new \InvalidArgumentException('Missing the required parameter $predefinedSubscriptionRequestBean when calling createStandardOrClassicSubscription');
        }
        if (!is_null($organizationId) && (strlen($organizationId) > 32)) {
            throw new \InvalidArgumentException('invalid length for "$organizationId" when calling ReportSubscriptionsApi.createStandardOrClassicSubscription, must be smaller than or equal to 32.');
        }
        if (!is_null($organizationId) && (strlen($organizationId) < 1)) {
            throw new \InvalidArgumentException('invalid length for "$organizationId" when calling ReportSubscriptionsApi.createStandardOrClassicSubscription, must be bigger than or equal to 1.');
        }
        if (!is_null($organizationId) && !preg_match("/[a-zA-Z0-9-_]+/", $organizationId)) {
            throw new \InvalidArgumentException("invalid value for \"organizationId\" when calling ReportSubscriptionsApi.createStandardOrClassicSubscription, must conform to the pattern /[a-zA-Z0-9-_]+/.");
        }

        // parse inputs
        $resourcePath = "/reporting/v3/predefined-report-subscriptions";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/hal+json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json;charset=utf-8']);

        // query params
        if ($organizationId !== null) {
            $queryParams['organizationId'] = $this->apiClient->getSerializer()->toQueryValue($organizationId);
        }
        // body params
        $_tempBody = null;
        if (isset($predefinedSubscriptionRequestBean)) {
            $_tempBody = $predefinedSubscriptionRequestBean;
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
                'PUT',
                $queryParams,
                $httpBody,
                $headerParams,
                null,
                '/reporting/v3/predefined-report-subscriptions'
            );

            return [$response, $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Haque\Cybersource\CybersourceSDK\Model\InlineResponse4001', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation createSubscription
     *
     * Create Report Subscription for a Report Name by Organization
     *
     * @param \Haque\Cybersource\CybersourceSDK\Model\CreateReportSubscriptionRequest $createReportSubscriptionRequest Report subscription request payload (required)
     * @param string $organizationId Valid Cybersource Organization Id (optional)
     * @throws \Haque\Cybersource\CybersourceSDK\ApiException on non-2xx response
     * @return array of void, HTTP status code, HTTP response headers (array of strings)
     */
    public function createSubscription($createReportSubscriptionRequest, $organizationId = null)
    {
        list($response, $statusCode, $httpHeader) = $this->createSubscriptionWithHttpInfo($createReportSubscriptionRequest, $organizationId);
        return [$response, $statusCode, $httpHeader];
    }

    /**
     * Operation createSubscriptionWithHttpInfo
     *
     * Create Report Subscription for a Report Name by Organization
     *
     * @param \Haque\Cybersource\CybersourceSDK\Model\CreateReportSubscriptionRequest $createReportSubscriptionRequest Report subscription request payload (required)
     * @param string $organizationId Valid Cybersource Organization Id (optional)
     * @throws \Haque\Cybersource\CybersourceSDK\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function createSubscriptionWithHttpInfo($createReportSubscriptionRequest, $organizationId = null)
    {
        // verify the required parameter 'createReportSubscriptionRequest' is set
        if ($createReportSubscriptionRequest === null) {
            throw new \InvalidArgumentException('Missing the required parameter $createReportSubscriptionRequest when calling createSubscription');
        }
        if (!is_null($organizationId) && (strlen($organizationId) > 32)) {
            throw new \InvalidArgumentException('invalid length for "$organizationId" when calling ReportSubscriptionsApi.createSubscription, must be smaller than or equal to 32.');
        }
        if (!is_null($organizationId) && (strlen($organizationId) < 1)) {
            throw new \InvalidArgumentException('invalid length for "$organizationId" when calling ReportSubscriptionsApi.createSubscription, must be bigger than or equal to 1.');
        }
        if (!is_null($organizationId) && !preg_match("/[a-zA-Z0-9-_]+/", $organizationId)) {
            throw new \InvalidArgumentException("invalid value for \"organizationId\" when calling ReportSubscriptionsApi.createSubscription, must conform to the pattern /[a-zA-Z0-9-_]+/.");
        }

        // parse inputs
        $resourcePath = "/reporting/v3/report-subscriptions";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/hal+json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // query params
        if ($organizationId !== null) {
            $queryParams['organizationId'] = $this->apiClient->getSerializer()->toQueryValue($organizationId);
        }
        // body params
        $_tempBody = null;
        if (isset($createReportSubscriptionRequest)) {
            $_tempBody = $createReportSubscriptionRequest;
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
                'PUT',
                $queryParams,
                $httpBody,
                $headerParams,
                null,
                '/reporting/v3/report-subscriptions'
            );

            return [$response, $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Haque\Cybersource\CybersourceSDK\Model\InlineResponse4001', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation deleteSubscription
     *
     * Delete Subscription of a Report Name by Organization
     *
     * @param string $reportName Name of the Report to Delete (required)
     * @throws \Haque\Cybersource\CybersourceSDK\ApiException on non-2xx response
     * @return array of void, HTTP status code, HTTP response headers (array of strings)
     */
    public function deleteSubscription($reportName)
    {
        list($response, $statusCode, $httpHeader) = $this->deleteSubscriptionWithHttpInfo($reportName);
        return [$response, $statusCode, $httpHeader];
    }

    /**
     * Operation deleteSubscriptionWithHttpInfo
     *
     * Delete Subscription of a Report Name by Organization
     *
     * @param string $reportName Name of the Report to Delete (required)
     * @throws \Haque\Cybersource\CybersourceSDK\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function deleteSubscriptionWithHttpInfo($reportName)
    {
        // verify the required parameter 'reportName' is set
        if ($reportName === null) {
            throw new \InvalidArgumentException('Missing the required parameter $reportName when calling deleteSubscription');
        }
        if ((strlen($reportName) > 80)) {
            throw new \InvalidArgumentException('invalid length for "$reportName" when calling ReportSubscriptionsApi.deleteSubscription, must be smaller than or equal to 80.');
        }
        if ((strlen($reportName) < 1)) {
            throw new \InvalidArgumentException('invalid length for "$reportName" when calling ReportSubscriptionsApi.deleteSubscription, must be bigger than or equal to 1.');
        }
        if (!preg_match("/[a-zA-Z0-9-_+]+/", $reportName)) {
            throw new \InvalidArgumentException("invalid value for \"reportName\" when calling ReportSubscriptionsApi.deleteSubscription, must conform to the pattern /[a-zA-Z0-9-_+]+/.");
        }

        // parse inputs
        $resourcePath = "/reporting/v3/report-subscriptions/{reportName}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/hal+json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json;charset=utf-8']);

        // path params
        if ($reportName !== null) {
            $resourcePath = str_replace(
                "{" . "reportName" . "}",
                $this->apiClient->getSerializer()->toPathValue($reportName),
                $resourcePath
            );
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
                'DELETE',
                $queryParams,
                $httpBody,
                $headerParams,
                null,
                '/reporting/v3/report-subscriptions/{reportName}'
            );

            return [$response, $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Haque\Cybersource\CybersourceSDK\Model\Reportingv3ReportDownloadsGet400Response', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Haque\Cybersource\CybersourceSDK\Model\Reportingv3ReportDownloadsGet400Response', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getAllSubscriptions
     *
     * Get All Subscriptions
     *
     * @throws \Haque\Cybersource\CybersourceSDK\ApiException on non-2xx response
     * @return array of \Haque\Cybersource\CybersourceSDK\Model\ReportingV3ReportSubscriptionsGet200Response, HTTP status code, HTTP response headers (array of strings)
     */
    public function getAllSubscriptions()
    {
        list($response, $statusCode, $httpHeader) = $this->getAllSubscriptionsWithHttpInfo();
        return [$response, $statusCode, $httpHeader];
    }

    /**
     * Operation getAllSubscriptionsWithHttpInfo
     *
     * Get All Subscriptions
     *
     * @throws \Haque\Cybersource\CybersourceSDK\ApiException on non-2xx response
     * @return array of \Haque\Cybersource\CybersourceSDK\Model\ReportingV3ReportSubscriptionsGet200Response, HTTP status code, HTTP response headers (array of strings)
     */
    public function getAllSubscriptionsWithHttpInfo()
    {
        // parse inputs
        $resourcePath = "/reporting/v3/report-subscriptions";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/hal+json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json;charset=utf-8']);


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
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Haque\Cybersource\CybersourceSDK\Model\ReportingV3ReportSubscriptionsGet200Response',
                '/reporting/v3/report-subscriptions'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Haque\Cybersource\CybersourceSDK\Model\ReportingV3ReportSubscriptionsGet200Response', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Haque\Cybersource\CybersourceSDK\Model\ReportingV3ReportSubscriptionsGet200Response', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Haque\Cybersource\CybersourceSDK\Model\Reportingv3ReportDownloadsGet400Response', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getSubscription
     *
     * Get Subscription for Report Name
     *
     * @param string $reportName Name of the Report to Retrieve (required)
     * @throws \Haque\Cybersource\CybersourceSDK\ApiException on non-2xx response
     * @return array of \Haque\Cybersource\CybersourceSDK\Model\ReportingV3ReportSubscriptionsGet200ResponseSubscriptions, HTTP status code, HTTP response headers (array of strings)
     */
    public function getSubscription($reportName)
    {
        list($response, $statusCode, $httpHeader) = $this->getSubscriptionWithHttpInfo($reportName);
        return [$response, $statusCode, $httpHeader];
    }

    /**
     * Operation getSubscriptionWithHttpInfo
     *
     * Get Subscription for Report Name
     *
     * @param string $reportName Name of the Report to Retrieve (required)
     * @throws \Haque\Cybersource\CybersourceSDK\ApiException on non-2xx response
     * @return array of \Haque\Cybersource\CybersourceSDK\Model\ReportingV3ReportSubscriptionsGet200ResponseSubscriptions, HTTP status code, HTTP response headers (array of strings)
     */
    public function getSubscriptionWithHttpInfo($reportName)
    {
        // verify the required parameter 'reportName' is set
        if ($reportName === null) {
            throw new \InvalidArgumentException('Missing the required parameter $reportName when calling getSubscription');
        }
        if ((strlen($reportName) > 80)) {
            throw new \InvalidArgumentException('invalid length for "$reportName" when calling ReportSubscriptionsApi.getSubscription, must be smaller than or equal to 80.');
        }
        if ((strlen($reportName) < 1)) {
            throw new \InvalidArgumentException('invalid length for "$reportName" when calling ReportSubscriptionsApi.getSubscription, must be bigger than or equal to 1.');
        }
        if (!preg_match("/[a-zA-Z0-9-_+]+/", $reportName)) {
            throw new \InvalidArgumentException("invalid value for \"reportName\" when calling ReportSubscriptionsApi.getSubscription, must conform to the pattern /[a-zA-Z0-9-_+]+/.");
        }

        // parse inputs
        $resourcePath = "/reporting/v3/report-subscriptions/{reportName}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/hal+json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json;charset=utf-8']);

        // path params
        if ($reportName !== null) {
            $resourcePath = str_replace(
                "{" . "reportName" . "}",
                $this->apiClient->getSerializer()->toPathValue($reportName),
                $resourcePath
            );
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
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Haque\Cybersource\CybersourceSDK\Model\ReportingV3ReportSubscriptionsGet200ResponseSubscriptions',
                '/reporting/v3/report-subscriptions/{reportName}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Haque\Cybersource\CybersourceSDK\Model\ReportingV3ReportSubscriptionsGet200ResponseSubscriptions', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Haque\Cybersource\CybersourceSDK\Model\ReportingV3ReportSubscriptionsGet200ResponseSubscriptions', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Haque\Cybersource\CybersourceSDK\Model\Reportingv3ReportDownloadsGet400Response', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}