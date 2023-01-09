<?php

/**
 * @Author: nguyen
 * @Date:   2020-04-24 09:45:19
 * @Last Modified by: Alex Dong
 * @Last Modified time: 2023-01-09 10:48:46
 */

namespace Magepow\Community\Block\Adminhtml\System;

class Feed extends \Magento\Config\Block\System\Config\Form\Field
{


    /**
     * @return string
     */
    public function render(\Magento\Framework\Data\Form\Element\AbstractElement $element)
    {
        try {


            $html = "
                    <div class='magepow_feed'></div>
                    <script type='text/javascript'>
                        require(['jquery', 'magepow/slick', 'magepow/feed']);
                    </script>
      		";

            return $html;
        } catch (Exception $e) {

            return $e->getMessage();
        }
    }
}