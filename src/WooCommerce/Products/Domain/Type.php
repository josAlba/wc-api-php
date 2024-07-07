<?php

namespace Automattic\WooCommerce\Products\Domain;

enum Type: string
{
    case VARIABLE = 'variable';
    case SIMPLE = 'simple';
}
