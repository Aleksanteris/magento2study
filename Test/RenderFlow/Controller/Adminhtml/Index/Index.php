<?php
/**
 * Created by PhpStorm.
 * User: dimasik
 * Date: 10.11.18
 * Time: 14.37
 */

namespace Test\RenderFlow\Controller\Adminhtml\Index;

use Magento\Backend\App\Action;

class Index extends Action
{
    public function execute()
    {
        $result = $this->resultFactory->create('page');
        return $result;
    }
}