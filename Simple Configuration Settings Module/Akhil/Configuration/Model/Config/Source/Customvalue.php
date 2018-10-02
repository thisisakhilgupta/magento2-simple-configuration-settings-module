<?php
namespace Akhil\Configuration\Model\Config\Source;
/**
 * Akhil Gupta
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL)
 * This is available through the world-wide-web at this URL:
 * http://opensource.org/licenses/OSL-3.0  Open Software License (OSL)
 *
 * DISCLAIMER**
 *
 * @category   MAGENTO2 Simple CONFIGURATION MODULE
 * @package    MAGENTO2 Simple CONFIGURATION MODULE
 * @url       https://www.youtube.com/user/thisisakhilgupta/
 * @author    Akhil Gupta
 */

class Customvalue implements \Magento\Framework\Option\ArrayInterface
{
    /**
     * @return array
     */
    public function toOptionArray()
    {

        return [
            ['value' => 0, 'label' => __('Element 1')],
            ['value' => 1, 'label' => __('Element 2')],
            ['value' => 2, 'label' => __('Element 3')],
        ];
    }
}
