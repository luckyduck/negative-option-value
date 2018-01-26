<?php

namespace Luckyduck\NegativeOptionValue\Model\Product\Option\Validator;

use Magento\Catalog\Model\Product\Option\Validator\DefaultValidator as OptionValidator;
use Magento\Catalog\Model\Product\Option;

class DefaultValidator extends OptionValidator
{
    protected function validateOptionValue(Option $option)
    {
        // allow negative values
        return $this->isInRange($option->getPriceType(), $this->priceTypes);
    }
}