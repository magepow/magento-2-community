<?php

/**
 * @Author: nguyen
 * @Date:   2020-06-09 20:10:33
 * @Last Modified by: Alex Dong
 * @Last Modified time: 2023-01-09 10:47:12
 */

namespace Magepow\Community\Model\Config\Source;

class Status
{
    const STATUS_ENABLED = 1;
    const STATUS_DISABLED = 0;

    /**
     * get available statuses.
     *
     * @return []
     */
    public static function getAvailableStatuses()
    {
        return [
            self::STATUS_ENABLED => __('Enabled'), self::STATUS_DISABLED => __('Disabled'),
        ];
    }

    public static function getOptionArray()
    {
        return self::getAvailableStatuses();
    }
}