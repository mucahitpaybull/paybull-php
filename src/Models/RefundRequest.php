<?php

declare(strict_types=1);

/*
 * PaybullLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PaybullLib\Models;

use stdClass;

class RefundRequest implements \JsonSerializable
{
    /**
     * @var string
     */
    private $invoiceId;

    /**
     * @var string
     */
    private $merchantKey;

    /**
     * @var string
     */
    private $amount;

    /**
     * @param string $invoiceId
     * @param string $merchantKey
     * @param string $amount
     */
    public function __construct(string $invoiceId, string $merchantKey, string $amount)
    {
        $this->invoiceId = $invoiceId;
        $this->merchantKey = $merchantKey;
        $this->amount = $amount;
    }

    /**
     * Returns Invoice Id.
     */
    public function getInvoiceId(): string
    {
        return $this->invoiceId;
    }

    /**
     * Sets Invoice Id.
     *
     * @required
     * @maps invoice_id
     */
    public function setInvoiceId(string $invoiceId): void
    {
        $this->invoiceId = $invoiceId;
    }

    /**
     * Returns Merchant Key.
     */
    public function getMerchantKey(): string
    {
        return $this->merchantKey;
    }

    /**
     * Sets Merchant Key.
     *
     * @required
     * @maps merchant_key
     */
    public function setMerchantKey(string $merchantKey): void
    {
        $this->merchantKey = $merchantKey;
    }

    /**
     * Returns Amount.
     */
    public function getAmount(): string
    {
        return $this->amount;
    }

    /**
     * Sets Amount.
     *
     * @required
     * @maps amount
     */
    public function setAmount(string $amount): void
    {
        $this->amount = $amount;
    }

    /**
     * Encode this object to JSON
     *
     * @param bool $asArrayWhenEmpty Whether to serialize this model as an array whenever no fields
     *        are set. (default: false)
     *
     * @return array|stdClass
     */
    #[\ReturnTypeWillChange] // @phan-suppress-current-line PhanUndeclaredClassAttribute for (php < 8.1)
    public function jsonSerialize(bool $asArrayWhenEmpty = false)
    {
        $json = [];
        $json['invoice_id']   = $this->invoiceId;
        $json['merchant_key'] = $this->merchantKey;
        $json['amount']       = $this->amount;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}