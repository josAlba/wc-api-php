<?php

namespace Automattic\WooCommerce\Orders\Domain;

use DateTime;
use DateTimeInterface;

class Filter
{
    public function __construct(public ?DateTime $after)
    {

    }

    public function getAfter(): ?string
    {
        return $this->after?->format(DateTimeInterface::ATOM);
    }
}
