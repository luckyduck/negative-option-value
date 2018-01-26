<?php
/**
 * Copyright © 2013-2017 Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Luckyduck\NegativeOptionValue\Model\Product\Option\Validator;

use Magento\Catalog\Model\Product\Option\Validator\Select as SelectValidator;

use Magento\Catalog\Model\Product\Option;

class Select extends SelectValidator
{
    /**
     * Validate option price
     *
     * @param string $priceType
     * @param int $price
     * @param int $storeId
     * @return bool
     */
    protected function isValidOptionPrice($priceType, $price, $storeId)
    {
        // we should be able to remove website values for default store fallback
        if ($storeId > \Magento\Store\Model\Store::DEFAULT_STORE_ID && $priceType === null && $price === null) {
            return true;
        }
        if (!$this->isInRange($priceType, $this->priceTypes)) {
            return false;
        }

        return true;
    }
}
