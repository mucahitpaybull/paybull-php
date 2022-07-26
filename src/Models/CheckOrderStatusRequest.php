<?php

declare(strict_types=1);

/*
 * PaybullLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PaybullLib\Models;

use stdClass;

class CheckOrderStatusRequest implements \JsonSerializable
{
    /**
     * @var string
     */
    private $merchantKey;

    /**
     * @var string
     */
    private $invoiceId;

    /**
     * @var string
     */
    private $includePendingStatus;

    /**
     * @param string $merchantKey
     * @param string $invoiceId
     * @param string $includePendingStatus
     */
    public function __construct(string $merchantKey, string $invoiceId, string $includePendingStatus)
    {
        $this->merchantKey = $merchantKey;
        $this->invoiceId = $invoiceId;
        $this->includePendingStatus = $includePendingStatus;
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
     * Returns Include Pending Status.
     */
    public function getIncludePendingStatus(): string
    {
        return $this->includePendingStatus;
    }

    /**
     * Sets Include Pending Status.
     *
     * @required
     * @maps include_pending_status
     */
    public function setIncludePendingStatus(string $includePendingStatus): void
    {
        $this->includePendingStatus = $includePendingStatus;
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
        $json['merchant_key']           = $this->merchantKey;
        $json['invoice_id']             = $this->invoiceId;
        $json['include_pending_status'] = $this->includePendingStatus;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
