<?php 
namespace Haque\Cybersource\Services;

use Haque\Cybersource\Resources\ExternalConfiguration;

use Haque\Cybersource\CybersourceSDK\ApiClient;
use Haque\Cybersource\CybersourceSDK\Api\PaymentsApi;
use Haque\Cybersource\CybersourceSDK\Model\Ptsv2paymentsClientReferenceInformation;
use Haque\Cybersource\CybersourceSDK\Model\Ptsv2paymentsProcessingInformation;
use Haque\Cybersource\CybersourceSDK\Model\Ptsv2paymentsOrderInformationAmountDetails;
use Haque\Cybersource\CybersourceSDK\Model\Ptsv2paymentsOrderInformationBillTo;
use Haque\Cybersource\CybersourceSDK\Model\Ptsv2paymentsOrderInformation;
use Haque\Cybersource\CybersourceSDK\Model\Ptsv2paymentsPaymentInformationCard;
use Haque\Cybersource\CybersourceSDK\Model\Ptsv2paymentsPaymentInformation;
use Haque\Cybersource\CybersourceSDK\Model\CreatePaymentRequest;

class CybersourcePaymentsService
{
	private function getProcessingInformation($flag = "true")
	{
		$processingInformationArr = [
			"commerceIndicator" => "internet"
		];

		if($flag == "true") {
			$processingInformationArr['capture'] = true;
		}

		return $processingInformationArr;
	}

	public function processPayment($cliRefInfoArr, $amountDetailsArr, $billtoArr, $paymentCardInfo, $flag)
	{
	    $commonElement = new ExternalConfiguration;
	    $config = $commonElement->ConnectionHost();
		$merchantConfig = $commonElement->merchantConfigObject();
		$apiclient = new ApiClient($config, $merchantConfig);
		
	    $api_instance = new PaymentsApi($apiclient);

	    $client_reference_information = new Ptsv2paymentsClientReferenceInformation($cliRefInfoArr);
	    $processingInformation = new Ptsv2paymentsProcessingInformation($this->getProcessingInformation($flag));
	    $amountDetInfo = new Ptsv2paymentsOrderInformationAmountDetails($amountDetailsArr);
	    $billto = new Ptsv2paymentsOrderInformationBillTo($billtoArr);
		
	    $orderInfoArr = [
			"amountDetails" => $amountDetInfo, 
			"billTo"        => $billto
		];
	    $order_information = new Ptsv2paymentsOrderInformation($orderInfoArr);
	    
	    $card = new Ptsv2paymentsPaymentInformationCard($paymentCardInfo);
	    $paymentInfoArr = [
			"card" => $card
	    ];
	    $payment_information = new Ptsv2paymentsPaymentInformation($paymentInfoArr);

	    $paymentRequestArr = [
			"clientReferenceInformation" => $client_reference_information, 
			"orderInformation"           => $order_information, 
			"paymentInformation"         => $payment_information, 
			"processingInformation"      => $processingInformation
		];
	    $paymentRequest = new CreatePaymentRequest($paymentRequestArr);
		
	    $api_response = list($response, $statusCode, $httpHeader) = null;
		
	    try {
	        $api_response = $api_instance->createPayment($paymentRequest);

	        if ($flag == "true" || $flag == "notallow") {
	            return $api_response[0]['id'];
	        }

	        return $api_response;
	    }
	    catch(Cybersource\ApiException $e)
	    {
	        print_r($e->getResponseBody());
	        print_r($e->getMessage());
	    }
	}
}