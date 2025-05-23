<?php

declare(strict_types=1);

/*
 * SampleAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace SampleAPILib\Models;

use SampleAPILib\ApiHelper;
use stdClass;

class Pricing implements \JsonSerializable
{
    /**
     * @var float|null
     */
    private $price;

    /**
     * @var string|null
     */
    private $currency;

    /**
     * Returns Price.
     */
    public function getPrice(): ?float
    {
        return $this->price;
    }

    /**
     * Sets Price.
     *
     * @maps price
     */
    public function setPrice(?float $price): void
    {
        $this->price = $price;
    }

    /**
     * Returns Currency.
     */
    public function getCurrency(): ?string
    {
        return $this->currency;
    }

    /**
     * Sets Currency.
     *
     * @maps currency
     */
    public function setCurrency(?string $currency): void
    {
        $this->currency = $currency;
    }

    /**
     * Converts the Pricing object to a human-readable string representation.
     *
     * @return string The string representation of the Pricing object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify('Pricing', ['price' => $this->price, 'currency' => $this->currency]);
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
        if (isset($this->price)) {
            $json['price']    = $this->price;
        }
        if (isset($this->currency)) {
            $json['currency'] = $this->currency;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
