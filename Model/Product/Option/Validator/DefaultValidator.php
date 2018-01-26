<?php

namespace Luckyduck\NegativeOptionValue\Model\Product\Option\Validator;

use Magento\Catalog\Model\Product\Option\Validator\DefaultValidator as OptionValidator;
use Magento\Catalog\Model\Product\Option;

class DefaultValidator extends OptionValidator
{
    protected function isNegative($value)
    {
        return false;
    }
}