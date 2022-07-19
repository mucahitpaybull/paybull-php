# Pay Bull

```php
$payBullController = $client->getPayBullController();
```

## Class Name

`PayBullController`

## Methods

* [Get Token](../../doc/controllers/pay-bull.md#get-token)
* [Installement](../../doc/controllers/pay-bull.md#installement)
* [Check Order Status](../../doc/controllers/pay-bull.md#check-order-status)
* [Refund](../../doc/controllers/pay-bull.md#refund)
* [Get Merchant Commission](../../doc/controllers/pay-bull.md#get-merchant-commission)
* [Payment With 3 D](../../doc/controllers/pay-bull.md#payment-with-3-d)
* [Pay With Pay Bull](../../doc/controllers/pay-bull.md#pay-with-pay-bull)
* [Preauth Confirm Payment API](../../doc/controllers/pay-bull.md#preauth-confirm-payment-api)
* [Merchant Active Installements](../../doc/controllers/pay-bull.md#merchant-active-installements)
* [Payment With 2 D](../../doc/controllers/pay-bull.md#payment-with-2-d)


# Get Token

:information_source: **Note** This endpoint does not require authentication.

```php
function getToken(GetTokenRequest $body)
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`GetTokenRequest`](../../doc/models/get-token-request.md) | Body, Required | - |

## Response Type

`mixed`

## Example Usage

```php
$body_appId = 'c3d81ae3cc3011ef10dcefa31a458d65';
$body_appSecret = '217071ea9f3f2e9b695d8f0039024e64';
$body = new Models\GetTokenRequest(
    $body_appId,
    $body_appSecret
);

$result = $payBullController->getToken($body);
```

## Example Response

```
{
  "status_code": 100,
  "status_description": "Successfully Generated token",
  "data": {
    "token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiI4MyIsImp0aSI6ImI5MGVhOGE4ODI5MDYxMDNiZDcxMGIzYzk3MTRiMjNkNGE2ZDEzMTgxYzQyYWJkZWE4YTEyM2JmODhjYWM4N2E3NmM2MzYwOGEyMWU3NDY1IiwiaWF0IjoxNjU4MjM4NDUwLjU5MjEsIm5iZiI6MTY1ODIzODQ1MC41OTIxLCJleHAiOjE2NTgyNDU2NTAuNTI4Miwic3ViIjoiNiIsInNjb3BlcyI6W119.ojdo2j-kjEr5SKecvn13eOMHfm8E7WKJ5CskJ36K2SgMhAG55bwdbfAaj8pUrXuqtfY8aJU_BON9WscZ2S5a6umqOL9rQ33YuRb3mVPZ5-rsRdE18PgDbPFX_4EQ46VOBCBHX5ey_6S1ssikf87XasT7z_x4XPFYcVkf608E9nCZNltRW-pcjJfynoUHGj4dkADC391g4H9ZRvzMubqE5FiqxMOcSqhh1Z4fnxz18kKvWmevLzfYoy9hNZQfo_6eOW-mBstmDUOVWI9-wvR772Iom_bbwjJoN4xdAiSLrEiy7-cruFP-Wz4HnW66aFEHS5j4ACfS-KwgclfrFcHRp0VgDPjESVXlDKcZWXC2o5vIZzmpRVkKEbcSYj4ZGLoRNj8POchMKIHoJbzgfq_TBz7kLPAWT32e3wh9nLHqku6lvmWeHbBzU1vlNQZCEujs_eFpq0meui592yhY6eo1Lk2Nc2U-6_HjhFBZmTKqZ8lrdZDEDs6ityPzK_ZmUvmURbXmJbrkMuFTDdquKxFezDxYVoNOepdVnDCkmVzZowEI-1jIjxQ7Iq0v7oWN1l426A6Zz1CZPlX3ZyuklXfnbdV5M7l_3EBPscUkmR689ccQmCmIZPqQvaGpFFRPgNsJOO8-S6dfQsF3n66zzUEN47NU0SdGFK6nmc9n0ct4BMw",
    "is_3d": 2,
    "expires_at": "2022-07-19 18:47:30"
  }
}
```


# Installement

```php
function installement(InstallementRequest $body)
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`InstallementRequest`](../../doc/models/installement-request.md) | Body, Required | - |

## Response Type

`mixed`

## Example Usage

```php
$body_creditCard = '534261';
$body_amount = '248.00';
$body_currencyCode = 'TRY';
$body_merchantKey = '$2y$10$w/ODdbTmfubcbUCUq/ia3OoJFMUmkM1UVNBiIQIuLfUlPmaLUT1he';
$body_is2d = 0;
$body = new Models\InstallementRequest(
    $body_creditCard,
    $body_amount,
    $body_currencyCode,
    $body_merchantKey,
    $body_is2d
);

$result = $payBullController->installement($body);
```

## Example Response

```
{
  "status_code": 100,
  "status_description": "Successfull",
  "data": [
    {
      "pos_id": 172,
      "campaign_id": 0,
      "allocation_id": 0,
      "installments_number": 1,
      "card_type": "CREDIT CARD",
      "card_program": "BONUS",
      "card_scheme": "mastercard",
      "payable_amount": 248,
      "hash_key": "c9fd5f8f6343911b:cc30:k2baDTt7nUurICsOA2VLPGUC496hI4B62T64gVzWrC3n7hqR35bB5Pwy41veNFMoE7yzLQP+JCw8jCfY1TJpDEPAiB3__6Y6DvrozLHH+LIw=",
      "amount_to_be_paid": "248.00",
      "currency_code": "TRY",
      "currency_id": 1,
      "title": "Single payment"
    },
    {
      "pos_id": 172,
      "campaign_id": 0,
      "allocation_id": 0,
      "installments_number": 2,
      "card_type": "CREDIT CARD",
      "card_program": "BONUS",
      "card_scheme": "mastercard",
      "payable_amount": 248,
      "hash_key": "ede6b50b22a539c8:b32c:KEmMM0JBRIK7TTRvb87WFKMpIKjp9I6xAcrNfKWQraLU+36WHqw+wRVu0dvWhV0Ip9vQyJEZP3g9Y3910gHdTlA5O4TyAVeJ__b7cE2EijjM=",
      "amount_to_be_paid": "248.00",
      "currency_code": "TRY",
      "currency_id": 1
    },
    {
      "pos_id": 172,
      "campaign_id": 0,
      "allocation_id": 0,
      "installments_number": 3,
      "card_type": "CREDIT CARD",
      "card_program": "BONUS",
      "card_scheme": "mastercard",
      "payable_amount": 248,
      "hash_key": "c5c989e2d731dec5:7a2c:+AkZ8kcHXX497wxvM+BI580khH+HQk3JJ4cL+ZnExOsBF82yvVdP8Nmg__d__t2eDvECtfGbJDin9abscuLcIphV2lZ7TeTE1vVhmF60n9dag=",
      "amount_to_be_paid": "248.00",
      "currency_code": "TRY",
      "currency_id": 1
    },
    {
      "pos_id": 172,
      "campaign_id": 0,
      "allocation_id": 0,
      "installments_number": 4,
      "card_type": "CREDIT CARD",
      "card_program": "BONUS",
      "card_scheme": "mastercard",
      "payable_amount": 248,
      "hash_key": "c7cbf7fc7ee55171:bd09:SwBcTCpQFTw__ZvvgjMUUkEH+FJEIiGskm92At+uu9u5+R6XBjbKy0Nnw5yROfstqBx8y6fbXkJ+tcKf0JC4hx+Q7ESze5BeoJWb4kgf8jxk=",
      "amount_to_be_paid": "248.00",
      "currency_code": "TRY",
      "currency_id": 1
    }
  ]
}
```


# Check Order Status

```php
function checkOrderStatus(CheckOrderStatusRequest $body)
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`CheckOrderStatusRequest`](../../doc/models/check-order-status-request.md) | Body, Required | - |

## Response Type

`mixed`

## Example Usage

```php
$body_merchantKey = '$2y$10$w/ODdbTmfubcbUCUq/ia3OoJFMUmkM1UVNBiIQIuLfUlPmaLUT1he';
$body_invoiceId = '94846';
$body_includePendingStatus = 'true';
$body = new Models\CheckOrderStatusRequest(
    $body_merchantKey,
    $body_invoiceId,
    $body_includePendingStatus
);

$result = $payBullController->checkOrderStatus($body);
```


# Refund

```php
function refund(RefundRequest $body)
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`RefundRequest`](../../doc/models/refund-request.md) | Body, Required | - |

## Response Type

`mixed`

## Example Usage

```php
$body_invoiceId = '9737';
$body_merchantKey = '$2y$10$w/ODdbTmfubcbUCUq/ia3OoJFMUmkM1UVNBiIQIuLfUlPmaLUT1he';
$body_amount = '0.5';
$body = new Models\RefundRequest(
    $body_invoiceId,
    $body_merchantKey,
    $body_amount
);

$result = $payBullController->refund($body);
```

## Example Response

```
{
  "status_code": 100,
  "status_description": "Refund completed successfully",
  "order_no": "15925741639038",
  "invoice_id": "66955",
  "ref_no": "5454545dgdgd545545"
}
```


# Get Merchant Commission

```php
function getMerchantCommission()
```

## Response Type

`mixed`

## Example Usage

```php
$result = $payBullController->getMerchantCommission();
```

## Example Response

```
{
  "status_code": 100,
  "status_description": "successful",
  "data": {
    "1": [
      {
        "card_program": "Bonus",
        "merchant_commission_percentage": "0.0000",
        "merchant_commission_fixed": "0.0000",
        "user_commission_percentage": 0,
        "user_commission_fixed": 0,
        "currency_code": "TRY",
        "installment": 1
      }
    ],
    "2": [
      {
        "card_program": "Bonus",
        "merchant_commission_percentage": "0.0000",
        "merchant_commission_fixed": "0.0000",
        "user_commission_percentage": 0,
        "user_commission_fixed": 0,
        "currency_code": "TRY",
        "installment": 2
      }
    ],
    "3": [
      {
        "card_program": "Bonus",
        "merchant_commission_percentage": "0.0000",
        "merchant_commission_fixed": "0.0000",
        "user_commission_percentage": 0,
        "user_commission_fixed": 0,
        "currency_code": "TRY",
        "installment": 3
      }
    ],
    "4": [
      {
        "card_program": "Bonus",
        "merchant_commission_percentage": "0.0000",
        "merchant_commission_fixed": "0.0000",
        "user_commission_percentage": 0,
        "user_commission_fixed": 0,
        "currency_code": "TRY",
        "installment": 4
      }
    ]
  }
}
```


# Payment With 3 D

:information_source: **Note** This endpoint does not require authentication.

```php
function paymentWith3D(PaymentWith3DRequest $body)
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`PaymentWith3DRequest`](../../doc/models/payment-with-3-d-request.md) | Body, Required | - |

## Response Type

`mixed`

## Example Usage

```php
$body_ccHolderName = 'John Dao';
$body_ccNo = '5406675406675403';
$body_expiryMonth = '12';
$body_expiryYear = '2026';
$body_cvv = '000';
$body_currencyCode = 'TRY';
$body_installmentsNumber = 1;
$body_invoiceId = '5485cdlk554';
$body_invoiceDescription = ' INVOICE TEST DESCRIPTION';
$body_total = 5;
$body_merchantKey = '$2y$10$w/ODdbTmfubcbUCUq/ia3OoJFMUmkM1UVNBiIQIuLfUlPmaLUT1he';
$body_items = [];

$body_items_0_name = 'Item3';
$body_items_0_price = 5;
$body_items_0_quantity = 1;
$body_items_0_description = 'item3 description';
$body_items[0] = new Models\Item(
    $body_items_0_name,
    $body_items_0_price,
    $body_items_0_quantity,
    $body_items_0_description
);

$body_name = 'John';
$body_surname = 'Dao';
$body_hashKey = '661ebbf2acc9d8bc:cb27:47tnM4SnmuVWRq9YMaHo2npFjXr7Nfe04poc__ri3g__R1NylhHZcj0Zu3Eul4K7tPmEV2kRxpiDUa8If4xgxAHyM6j+mJaLGL73FFFxoEEJcwhqr5GYOTbQbT7+G2TtnU';
$body = new Models\PaymentWith3DRequest(
    $body_ccHolderName,
    $body_ccNo,
    $body_expiryMonth,
    $body_expiryYear,
    $body_cvv,
    $body_currencyCode,
    $body_installmentsNumber,
    $body_invoiceId,
    $body_invoiceDescription,
    $body_total,
    $body_merchantKey,
    $body_items,
    $body_name,
    $body_surname,
    $body_hashKey
);

$result = $payBullController->paymentWith3D($body);
```

## Example Response

```
{
  "paybull_status": "1",
  "order_no": "162632108393105",
  "invoice_id": "1626321081825",
  "status_code": "100",
  "status_description": "success",
  "paybull_payment_method": "1",
  "credit_card_no": "535576****7226",
  "transaction_type": "Auth",
  "payment_status": "1",
  "payment_method": "1",
  "error_code": "100",
  "error": "success",
  "hash_key": "a18ed8083e2872ce:e760:dDnLrAvPKQ51rTj3sE2rhfjIf27AAJn3RMKkGDfJWIP7JbCMUoiutBVp9muzqnNp"
}
```


# Pay With Pay Bull

```php
function payWithPayBull(
    string $merchantKey,
    array $invoice,
    string $currencyCode,
    string $name,
    string $surname
)
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `merchantKey` | `string` | Form, Required | - |
| `invoice` | `string[]` | Form, Required | - |
| `currencyCode` | `string` | Form, Required | - |
| `name` | `string` | Form, Required | - |
| `surname` | `string` | Form, Required | - |

## Response Type

`mixed`

## Example Usage

```php
$merchantKey = 'merchant_key8';
$invoice = ['invoice3'];
$currencyCode = 'currency_code4';
$name = 'name0';
$surname = 'surname8';

$result = $payBullController->payWithPayBull($merchantKey, $invoice, $currencyCode, $name, $surname);
```


# Preauth Confirm Payment API

```php
function preauthConfirmPaymentAPI(PreauthConfirmPaymentAPIRequest $body)
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`PreauthConfirmPaymentAPIRequest`](../../doc/models/preauth-confirm-payment-api-request.md) | Body, Required | - |

## Response Type

`mixed`

## Example Usage

```php
$body_invoiceId = '123456';
$body_merchantKey = '$2y$10$w/ODdbTmfubcbUCUq/ia3OoJFMUmkM1UVNBiIQIuLfUlPmaLUT1he';
$body_status = 1;
$body_hashKey = '661ebbf2acc9d8bc:cb27:47tnM4SnmuVWRq9YMaHo2npFjXr7Nfe04poc_ri3g_R1NylhHZcj0Zu3Eul';
$body_total = 97;
$body = new Models\PreauthConfirmPaymentAPIRequest(
    $body_invoiceId,
    $body_merchantKey,
    $body_status,
    $body_hashKey,
    $body_total
);

$result = $payBullController->preauthConfirmPaymentAPI($body);
```


# Merchant Active Installements

```php
function merchantActiveInstallements(MerchantActiveInstallementsRequest $body)
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`MerchantActiveInstallementsRequest`](../../doc/models/merchant-active-installements-request.md) | Body, Required | - |

## Response Type

`mixed`

## Example Usage

```php
$body_merchantKey = '$2y$10$w/ODdbTmfubcbUCUq/ia3OoJFMUmkM1UVNBiIQIuLfUlPmaLUT1he';
$body = new Models\MerchantActiveInstallementsRequest(
    $body_merchantKey
);

$result = $payBullController->merchantActiveInstallements($body);
```


# Payment With 2 D

```php
function paymentWith2D(PaymentWith2DRequest $body, string $contentType)
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`PaymentWith2DRequest`](../../doc/models/payment-with-2-d-request.md) | Body, Required | - |
| `contentType` | `string` | Header, Required | - |

## Response Type

`mixed`

## Example Usage

```php
$body_ccHolderName = 'John Dao';
$body_ccNo = '5406675406675403';
$body_expiryMonth = '12';
$body_expiryYear = '2026';
$body_currencyCode = 'TRY';
$body_installmentsNumber = 1;
$body_invoiceId = '34546434353';
$body_invoiceDescription = 'INVOICE TEST DESCRIPTION';
$body_total = 248.34;
$body_merchantKey = '$2y$10$w/ODdbTmfubcbUCUq/ia3OoJFMUmkM1UVNBiIQIuLfUlPmaLUT1he';
$body_items = [];

$body_items_0_name = 'Item';
$body_items_0_price = 24;
$body_items_0_quantity = 1;
$body_items_0_description = 'item3 description';
$body_items[0] = new Models\Item(
    $body_items_0_name,
    $body_items_0_price,
    $body_items_0_quantity,
    $body_items_0_description
);

$body_name = 'John';
$body_surname = 'Dao';
$body_hashKey = '661ebbf2acc9d8bc:cb27:47tnM4SnmuVWRq9YMaHo2npFjXr7Nfe04poc__ri3g__R1NylhHZcj0Zu3Eul4K7tPmEV2kRxpiDUa8If4xgxAHyM6j+mJaLGL73FFFxoEEJcwhqr5GYOTbQbT7+G2TtnU';
$body = new Models\PaymentWith2DRequest(
    $body_ccHolderName,
    $body_ccNo,
    $body_expiryMonth,
    $body_expiryYear,
    $body_currencyCode,
    $body_installmentsNumber,
    $body_invoiceId,
    $body_invoiceDescription,
    $body_total,
    $body_merchantKey,
    $body_items,
    $body_name,
    $body_surname,
    $body_hashKey
);
$contentType = 'Content-Type2';

$result = $payBullController->paymentWith2D($body, $contentType);
```

