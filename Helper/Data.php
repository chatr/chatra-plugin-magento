<?php

namespace Chatra\Livechat\Helper;

use Magento\Framework\App\Helper\AbstractHelper;
use Magento\Store\Model\ScopeInterface;

class Data extends AbstractHelper
{
    public function getConfigValue($field)
    {
        return $this->scopeConfig->getValue($field, ScopeInterface::SCOPE_STORE);
    }
}
