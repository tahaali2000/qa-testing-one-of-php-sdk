<?php

declare(strict_types=1);

/*
 * SampleAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace SampleAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use SampleAPILib\Models\Pricing2;

/**
 * Builder for model Pricing2
 *
 * @see Pricing2
 */
class Pricing2Builder
{
    /**
     * @var Pricing2
     */
    private $instance;

    private function __construct(Pricing2 $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Pricing 2 Builder object.
     */
    public static function init(): self
    {
        return new self(new Pricing2());
    }

    /**
     * Sets tax field.
     *
     * @param float|null $value
     */
    public function tax(?float $value): self
    {
        $this->instance->setTax($value);
        return $this;
    }

    /**
     * Sets tax Rate field.
     *
     * @param float|null $value
     */
    public function taxRate(?float $value): self
    {
        $this->instance->setTaxRate($value);
        return $this;
    }

    /**
     * Initializes a new Pricing 2 object.
     */
    public function build(): Pricing2
    {
        return CoreHelper::clone($this->instance);
    }
}
