<?php

/**
 * @Author: Alex Dong
 * @Date:   2020-07-14 19:36:33
 * @Last Modified by: Alex Dong
 * @Last Modified time: 2023-01-09 10:46:59
 */

namespace Magepow\Community\Model\Config\Source;

class Truefalse implements \Magento\Framework\Option\ArrayInterface
{
    /**
     * Options getter
     *
     * @return array
     */
    public function toOptionArray()
    {
        return [['value' => 'true', 'label' => __('True')], ['value' => 'false', 'label' => __('False')]];
    }

    /**
     * Get options in "key-value" format
     *
     * @return array
     */
    public function toArray()
    {
        return ['false' => __('No'), 'true' => __('Yes')];
    }
}