<?php
namespace Akhil\Configuration\Controller\Test;
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

use Magento\Framework\View\Result\PageFactory;
use Magento\Framework\App\Action\Context;

class Getconfig extends \Magento\Framework\App\Action\Action
{
    public function execute()
    {
	$this->_view->loadLayout();
	$this->_view->renderLayout();
    }

}
