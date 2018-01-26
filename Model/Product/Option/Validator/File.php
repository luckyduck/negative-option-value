<?php
/**
 * Copyright © 2013-2017 Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Luckyduck\NegativeOptionValue\Model\Product\Option\Validator;

use Magento\Catalog\Model\Product\Option\Validator\File as FileValidator;
use Magento\Catalog\Model\Product\Option;

class File extends FileValidator
{
    /**
     * Validate option type fields
     *
     * @param Option $option
     * @return bool
     */
    protected function validateOptionValue(Option $option)
    {
        $result = parent::validateOptionValue($option);
        return $result && !$this->isNegative($option->getImageSizeX());
    }
}
