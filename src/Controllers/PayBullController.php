<?php

declare(strict_types=1);

/*
 * PaybullLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PaybullLib\Controllers;

use PaybullLib\Exceptions\ApiException;
use PaybullLib\ConfigurationInterface;
use PaybullLib\ApiHelper;
use PaybullLib\Models;
use PaybullLib\Http\HttpRequest;
use PaybullLib\Http\HttpResponse;
use PaybullLib\Http\HttpMethod;
use PaybullLib\Http\HttpContext;
use PaybullLib\Http\HttpCallBack;
use PaybullLib\Server;
use Unirest\Request;

class PayBullController extends BaseController
{
    public function __construct(ConfigurationInterface $config, array $authManagers, ?HttpCallBack $httpCallBack)
    {
        parent::__construct($config, $authManagers, $httpCallBack);
    }

    /**
     * @param Models\GetTokenRequest $body
     *
     * @return mixed Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function getToken(Models\GetTokenRequest $body)
    {
        //prepare query string for API call
        $_queryUrl = $this->config->getBaseUri(Server::APP_PAYBULL) . '/api/token';

        //prepare headers
        $_headers = [
            'user-agent'    => self::$userAgent,
            'Accept'        => 'application/json',
            'Content-Type'    => 'application/json'
        ];

        //json encode body
        $_bodyJson = ApiHelper::serialize($body);

        $_httpRequest = new HttpRequest(HttpMethod::POST, $_headers, $_queryUrl);

        //call on-before Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

        // and invoke the API call request to fetch the response
        try {
            $response = Request::post($_httpRequest->getQueryUrl(), $_httpRequest->getHeaders(), $_bodyJson);
        } catch (\Unirest\Exception $ex) {
            throw new ApiException($ex->getMessage(), $_httpRequest);
        }


        $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
        $_httpContext = new HttpContext($_httpRequest, $_httpResponse);

        //call on-after Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpRequest);
        return $response->body;
    }

    /**
     * @param Models\InstallementRequest $body
     *
     * @return mixed Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function installement(Models\InstallementRequest $body)
    {
        //prepare query string for API call
        $_queryUrl = $this->config->getBaseUri(Server::APP_PAYBULL) . '/api/getpos';

        //prepare headers
        $_headers = [
            'user-agent'    => self::$userAgent,
            'Accept'        => 'application/json',
            'Content-Type'    => 'application/json'
        ];

        //json encode body
        $_bodyJson = ApiHelper::serialize($body);

        $_httpRequest = new HttpRequest(HttpMethod::POST, $_headers, $_queryUrl);

        // Apply authorization to request
        $this->getAuthManager('global')->apply($_httpRequest);

        //call on-before Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

        // and invoke the API call request to fetch the response
        try {
            $response = Request::post($_httpRequest->getQueryUrl(), $_httpRequest->getHeaders(), $_bodyJson);
        } catch (\Unirest\Exception $ex) {
            throw new ApiException($ex->getMessage(), $_httpRequest);
        }


        $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
        $_httpContext = new HttpContext($_httpRequest, $_httpResponse);

        //call on-after Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpRequest);
        return $response->body;
    }

    /**
     * @param Models\CheckOrderStatusRequest $body
     *
     * @return mixed Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function checkOrderStatus(Models\CheckOrderStatusRequest $body)
    {
        //prepare query string for API call
        $_queryUrl = $this->config->getBaseUri(Server::APP_PAYBULL) . '/api/checkstatus';

        //prepare headers
        $_headers = [
            'user-agent'    => self::$userAgent,
            'Accept'        => 'application/json',
            'Content-Type'    => 'application/json'
        ];

        //json encode body
        $_bodyJson = ApiHelper::serialize($body);

        $_httpRequest = new HttpRequest(HttpMethod::POST, $_headers, $_queryUrl);

        // Apply authorization to request
        $this->getAuthManager('global')->apply($_httpRequest);

        //call on-before Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

        // and invoke the API call request to fetch the response
        try {
            $response = Request::post($_httpRequest->getQueryUrl(), $_httpRequest->getHeaders(), $_bodyJson);
        } catch (\Unirest\Exception $ex) {
            throw new ApiException($ex->getMessage(), $_httpRequest);
        }


        $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
        $_httpContext = new HttpContext($_httpRequest, $_httpResponse);

        //call on-after Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpRequest);
        return $response->body;
    }

    /**
     * @param Models\RefundRequest $body
     *
     * @return mixed Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function refund(Models\RefundRequest $body)
    {
        //prepare query string for API call
        $_queryUrl = $this->config->getBaseUri() . '/api/refund';

        //prepare headers
        $_headers = [
            'user-agent'    => self::$userAgent,
            'Accept'        => 'application/json',
            'Content-Type'    => 'application/json'
        ];

        //json encode body
        $_bodyJson = ApiHelper::serialize($body);

        $_httpRequest = new HttpRequest(HttpMethod::POST, $_headers, $_queryUrl);

        // Apply authorization to request
        $this->getAuthManager('global')->apply($_httpRequest);

        //call on-before Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

        // and invoke the API call request to fetch the response
        try {
            $response = Request::post($_httpRequest->getQueryUrl(), $_httpRequest->getHeaders(), $_bodyJson);
        } catch (\Unirest\Exception $ex) {
            throw new ApiException($ex->getMessage(), $_httpRequest);
        }


        $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
        $_httpContext = new HttpContext($_httpRequest, $_httpResponse);

        //call on-after Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpRequest);
        return $response->body;
    }

    /**
     * @return mixed Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function getMerchantCommission()
    {
        //prepare query string for API call
        $_queryUrl = $this->config->getBaseUri(Server::APP_PAYBULL) . '/api/commissions';

        //prepare headers
        $_headers = [
            'user-agent'    => self::$userAgent,
            'Accept'        => 'application/json',
            'Content-Type'    => 'application/json'
        ];

        $_httpRequest = new HttpRequest(HttpMethod::GET, $_headers, $_queryUrl);

        // Apply authorization to request
        $this->getAuthManager('global')->apply($_httpRequest);

        //call on-before Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

        // and invoke the API call request to fetch the response
        try {
            $response = Request::get($_httpRequest->getQueryUrl(), $_httpRequest->getHeaders());
        } catch (\Unirest\Exception $ex) {
            throw new ApiException($ex->getMessage(), $_httpRequest);
        }


        $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
        $_httpContext = new HttpContext($_httpRequest, $_httpResponse);

        //call on-after Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpRequest);
        return $response->body;
    }

    /**
     * @param Models\PaymentWith3DRequest $body
     *
     * @return mixed Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function paymentWith3D(Models\PaymentWith3DRequest $body)
    {
        //prepare query string for API call
        $_queryUrl = $this->config->getBaseUri(Server::APP_PAYBULL) . '/api/paySmart3D';

        //prepare headers
        $_headers = [
            'user-agent'    => self::$userAgent,
            'Accept'        => 'application/json',
            'Content-Type'    => 'application/json'
        ];

        //json encode body
        $_bodyJson = ApiHelper::serialize($body);

        $_httpRequest = new HttpRequest(HttpMethod::POST, $_headers, $_queryUrl);

        //call on-before Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

        // and invoke the API call request to fetch the response
        try {
            $response = Request::post($_httpRequest->getQueryUrl(), $_httpRequest->getHeaders(), $_bodyJson);
        } catch (\Unirest\Exception $ex) {
            throw new ApiException($ex->getMessage(), $_httpRequest);
        }


        $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
        $_httpContext = new HttpContext($_httpRequest, $_httpResponse);

        //call on-after Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpRequest);
        return $response->body;
    }

    /**
     * @param string $merchantKey
     * @param string[] $invoice
     * @param string $currencyCode
     * @param string $name
     * @param string $surname
     *
     * @return mixed Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function payWithPayBull(
        string $merchantKey,
        array $invoice,
        string $currencyCode,
        string $name,
        string $surname
    ) {
        //prepare query string for API call
        $_queryUrl = $this->config->getBaseUri(Server::APP_PAYBULL) . '/purchase/link';

        //prepare headers
        $_headers = [
            'user-agent'    => self::$userAgent,
            'Accept'        => 'application/json'
        ];

        //prepare parameters
        $_parameters = [
            'merchant_key'  => $merchantKey,
            'invoice'       => array_values($invoice),
            'currency_code' => $currencyCode,
            'name'          => $name,
            'surname'       => $surname
        ];

        $_httpRequest = new HttpRequest(HttpMethod::POST, $_headers, $_queryUrl, $_parameters);

        // Apply authorization to request
        $this->getAuthManager('global')->apply($_httpRequest);

        //call on-before Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

        // and invoke the API call request to fetch the response
        try {
            $response = Request::post(
                $_httpRequest->getQueryUrl(),
                $_httpRequest->getHeaders(),
                Request\Body::Form($_parameters)
            );
        } catch (\Unirest\Exception $ex) {
            throw new ApiException($ex->getMessage(), $_httpRequest);
        }


        $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
        $_httpContext = new HttpContext($_httpRequest, $_httpResponse);

        //call on-after Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpRequest);
        return $response->body;
    }

    /**
     * @param Models\PreauthConfirmPaymentAPIRequest $body
     *
     * @return mixed Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function preauthConfirmPaymentAPI(Models\PreauthConfirmPaymentAPIRequest $body)
    {
        //prepare query string for API call
        $_queryUrl = $this->config->getBaseUri(Server::APP_PAYBULL) . '/api/confirmPayment';

        //prepare headers
        $_headers = [
            'user-agent'    => self::$userAgent,
            'Accept'        => 'application/json',
            'Content-Type'    => 'application/json'
        ];

        //json encode body
        $_bodyJson = ApiHelper::serialize($body);

        $_httpRequest = new HttpRequest(HttpMethod::POST, $_headers, $_queryUrl);

        // Apply authorization to request
        $this->getAuthManager('global')->apply($_httpRequest);

        //call on-before Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

        // and invoke the API call request to fetch the response
        try {
            $response = Request::post($_httpRequest->getQueryUrl(), $_httpRequest->getHeaders(), $_bodyJson);
        } catch (\Unirest\Exception $ex) {
            throw new ApiException($ex->getMessage(), $_httpRequest);
        }


        $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
        $_httpContext = new HttpContext($_httpRequest, $_httpResponse);

        //call on-after Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpRequest);
        return $response->body;
    }

    /**
     * @param Models\MerchantActiveInstallementsRequest $body
     *
     * @return mixed Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function merchantActiveInstallements(Models\MerchantActiveInstallementsRequest $body)
    {
        //prepare query string for API call
        $_queryUrl = $this->config->getBaseUri(Server::APP_PAYBULL) . '/api/installments';

        //prepare headers
        $_headers = [
            'user-agent'    => self::$userAgent,
            'Accept'        => 'application/json',
            'Content-Type'    => 'application/json'
        ];

        //json encode body
        $_bodyJson = ApiHelper::serialize($body);

        $_httpRequest = new HttpRequest(HttpMethod::POST, $_headers, $_queryUrl);

        // Apply authorization to request
        $this->getAuthManager('global')->apply($_httpRequest);

        //call on-before Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

        // and invoke the API call request to fetch the response
        try {
            $response = Request::post($_httpRequest->getQueryUrl(), $_httpRequest->getHeaders(), $_bodyJson);
        } catch (\Unirest\Exception $ex) {
            throw new ApiException($ex->getMessage(), $_httpRequest);
        }


        $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
        $_httpContext = new HttpContext($_httpRequest, $_httpResponse);

        //call on-after Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpRequest);
        return $response->body;
    }

    /**
     * @param Models\PaymentWith2DRequest $body
     * @param string $contentType
     *
     * @return mixed Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function paymentWith2D(Models\PaymentWith2DRequest $body, string $contentType)
    {
        //prepare query string for API call
        $_queryUrl = $this->config->getBaseUri() . '/api/paySmart2D';

        //prepare headers
        $_headers = [
            'user-agent'    => self::$userAgent,
            'Accept'        => 'application/json',
            'Content-Type'    => $contentType
        ];

        //json encode body
        $_bodyJson = ApiHelper::serialize($body);

        $_httpRequest = new HttpRequest(HttpMethod::POST, $_headers, $_queryUrl);

        // Apply authorization to request
        $this->getAuthManager('global')->apply($_httpRequest);

        //call on-before Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

        // and invoke the API call request to fetch the response
        try {
            $response = Request::post($_httpRequest->getQueryUrl(), $_httpRequest->getHeaders(), $_bodyJson);
        } catch (\Unirest\Exception $ex) {
            throw new ApiException($ex->getMessage(), $_httpRequest);
        }


        $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
        $_httpContext = new HttpContext($_httpRequest, $_httpResponse);

        //call on-after Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpRequest);
        return $response->body;
    }
}
