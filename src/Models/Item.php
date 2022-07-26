<?php

declare(strict_types=1);

/*
 * PaybullLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PaybullLib\Models;

use stdClass;

class Item implements \JsonSerializable
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var float
     */
    private $price;

    /**
     * @var int
     */
    private $quantity;

    /**
     * @var string
     */
    private $description;

    /**
     * @param string $name
     * @param float $price
     * @param int $quantity
     * @param string $description
     */
    public function __construct(string $name, float $price, int $quantity, string $description)
    {
        $this->name = $name;
        $this->price = $price;
        $this->quantity = $quantity;
        $this->description = $description;
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
     * Returns Price.
     */
    public function getPrice(): float
    {
        return $this->price;
    }

    /**
     * Sets Price.
     *
     * @required
     * @maps price
     */
    public function setPrice(float $price): void
    {
        $this->price = $price;
    }

    /**
     * Returns Quantity.
     */
    public function getQuantity(): int
    {
        return $this->quantity;
    }

    /**
     * Sets Quantity.
     *
     * @required
     * @maps quantity
     */
    public function setQuantity(int $quantity): void
    {
        $this->quantity = $quantity;
    }

    /**
     * Returns Description.
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * Sets Description.
     *
     * @required
     * @maps description
     */
    public function setDescription(string $description): void
    {
        $this->description = $description;
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
        $json['name']        = $this->name;
        $json['price']       = $this->price;
        $json['quantity']    = $this->quantity;
        $json['description'] = $this->description;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
