<?php

namespace Akhil\Configuration\Block;

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
use Magento\Framework\View\Element\Template;

class Getconfig extends Template {

    protected $scopeConfig;

    public function _prepareLayout() {
        $this->pageConfig->getTitle()->set(__('My Custom Module Configurations'));
    }

    public function __construct(\Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig, \Magento\Framework\View\Element\Template\Context $context, array $data = []) {
        parent::__construct($context, $data);
        $this->scopeConfig = $scopeConfig;
    }

    public function getTextValue() {
        return $this->scopeConfig->getValue('my_section/general/custom_text', \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
    }

    public function getImageValue() {
        return $this->scopeConfig->getValue('my_section/general/custom_img', \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
    }

}
