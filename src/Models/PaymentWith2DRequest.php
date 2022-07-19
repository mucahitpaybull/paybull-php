<?php

declare(strict_types=1);

/*
 * PaybullLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PaybullLib\Models;

use stdClass;

class PaymentWith2DRequest implements \JsonSerializable
{
    /**
     * @var string
     */
    private $ccHolderName;

    /**
     * @var string
     */
    private $ccNo;

    /**
     * @var string
     */
    private $expiryMonth;

    /**
     * @var string
     */
    private $expiryYear;

    /**
     * @var string
     */
    private $currencyCode;

    /**
     * @var int
     */
    private $installmentsNumber;

    /**
     * @var string
     */
    private $invoiceId;

    /**
     * @var string
     */
    private $invoiceDescription;

    /**
     * @var float
     */
    private $total;

    /**
     * @var string
     */
    private $merchantKey;

    /**
     * @var Item[]
     */
    private $items;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $surname;

    /**
     * @var string
     */
    private $hashKey;

    /**
     * @param string $ccHolderName
     * @param string $ccNo
     * @param string $expiryMonth
     * @param string $expiryYear
     * @param string $currencyCode
     * @param int $installmentsNumber
     * @param string $invoiceId
     * @param string $invoiceDescription
     * @param float $total
     * @param string $merchantKey
     * @param Item[] $items
     * @param string $name
     * @param string $surname
     * @param string $hashKey
     */
    public function __construct(
        string $ccHolderName,
        string $ccNo,
        string $expiryMonth,
        string $expiryYear,
        string $currencyCode,
        int $installmentsNumber,
        string $invoiceId,
        string $invoiceDescription,
        float $total,
        string $merchantKey,
        array $items,
        string $name,
        string $surname,
        string $hashKey
    ) {
        $this->ccHolderName = $ccHolderName;
        $this->ccNo = $ccNo;
        $this->expiryMonth = $expiryMonth;
        $this->expiryYear = $expiryYear;
        $this->currencyCode = $currencyCode;
        $this->installmentsNumber = $installmentsNumber;
        $this->invoiceId = $invoiceId;
        $this->invoiceDescription = $invoiceDescription;
        $this->total = $total;
        $this->merchantKey = $merchantKey;
        $this->items = $items;
        $this->name = $name;
        $this->surname = $surname;
        $this->hashKey = $hashKey;
    }

    /**
     * Returns Cc Holder Name.
     */
    public function getCcHolderName(): string
    {
        return $this->ccHolderName;
    }

    /**
     * Sets Cc Holder Name.
     *
     * @required
     * @maps cc_holder_name
     */
    public function setCcHolderName(string $ccHolderName): void
    {
        $this->ccHolderName = $ccHolderName;
    }

    /**
     * Returns Cc No.
     */
    public function getCcNo(): string
    {
        return $this->ccNo;
    }

    /**
     * Sets Cc No.
     *
     * @required
     * @maps cc_no
     */
    public function setCcNo(string $ccNo): void
    {
        $this->ccNo = $ccNo;
    }

    /**
     * Returns Expiry Month.
     */
    public function getExpiryMonth(): string
    {
        return $this->expiryMonth;
    }

    /**
     * Sets Expiry Month.
     *
     * @required
     * @maps expiry_month
     */
    public function setExpiryMonth(string $expiryMonth): void
    {
        $this->expiryMonth = $expiryMonth;
    }

    /**
     * Returns Expiry Year.
     */
    public function getExpiryYear(): string
    {
        return $this->expiryYear;
    }

    /**
     * Sets Expiry Year.
     *
     * @required
     * @maps expiry_year
     */
    public function setExpiryYear(string $expiryYear): void
    {
        $this->expiryYear = $expiryYear;
    }

    /**
     * Returns Currency Code.
     */
    public function getCurrencyCode(): string
    {
        return $this->currencyCode;
    }

    /**
     * Sets Currency Code.
     *
     * @required
     * @maps currency_code
     */
    public function setCurrencyCode(string $currencyCode): void
    {
        $this->currencyCode = $currencyCode;
    }

    /**
     * Returns Installments Number.
     */
    public function getInstallmentsNumber(): int
    {
        return $this->installmentsNumber;
    }

    /**
     * Sets Installments Number.
     *
     * @required
     * @maps installments_number
     */
    public function setInstallmentsNumber(int $installmentsNumber): void
    {
        $this->installmentsNumber = $installmentsNumber;
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
     * Returns Invoice Description.
     */
    public function getInvoiceDescription(): string
    {
        return $this->invoiceDescription;
    }

    /**
     * Sets Invoice Description.
     *
     * @required
     * @maps invoice_description
     */
    public function setInvoiceDescription(string $invoiceDescription): void
    {
        $this->invoiceDescription = $invoiceDescription;
    }

    /**
     * Returns Total.
     */
    public function getTotal(): float
    {
        return $this->total;
    }

    /**
     * Sets Total.
     *
     * @required
     * @maps total
     */
    public function setTotal(float $total): void
    {
        $this->total = $total;
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
     * Returns Items.
     *
     * @return Item[]
     */
    public function getItems(): array
    {
        return $this->items;
    }

    /**
     * Sets Items.
     *
     * @required
     * @maps items
     *
     * @param Item[] $items
     */
    public function setItems(array $items): void
    {
        $this->items = $items;
    }

    /**
     * Returns Name.
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Sets Name.
     *
     * @required
     * @maps name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * Returns Surname.
     */
    public function getSurname(): string
    {
        return $this->surname;
    }

    /**
     * Sets Surname.
     *
     * @required
     * @maps surname
     */
    public function setSurname(string $surname): void
    {
        $this->surname = $surname;
    }

    /**
     * Returns Hash Key.
     */
    public function getHashKey(): string
    {
        return $this->hashKey;
    }

    /**
     * Sets Hash Key.
     *
     * @required
     * @maps hash_key
     */
    public function setHashKey(string $hashKey): void
    {
        $this->hashKey = $hashKey;
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
        $json['cc_holder_name']      = $this->ccHolderName;
        $json['cc_no']               = $this->ccNo;
        $json['expiry_month']        = $this->expiryMonth;
        $json['expiry_year']         = $this->expiryYear;
        $json['currency_code']       = $this->currencyCode;
        $json['installments_number'] = $this->installmentsNumber;
        $json['invoice_id']          = $this->invoiceId;
        $json['invoice_description'] = $this->invoiceDescription;
        $json['total']               = $this->total;
        $json['merchant_key']        = $this->merchantKey;
        $json['items']               = $this->items;
        $json['name']                = $this->name;
        $json['surname']             = $this->surname;
        $json['hash_key']            = $this->hashKey;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
