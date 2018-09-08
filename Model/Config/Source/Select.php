<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magenest\Movie\Model\Config\Source;

/**
 * @api
 * @since 100.0.2
 */
class Select implements \Magento\Framework\Option\ArrayInterface
{
    public function	toOptionArray()
    {
        return	[
            ['value' =>	null,
                'label' => __('--Please Select--')],

            ['label' => __('Show'),
                'value' => 1],

            ['label' => __('Not-Show'),
                'value' => 2 ],
        ];
    }
}
