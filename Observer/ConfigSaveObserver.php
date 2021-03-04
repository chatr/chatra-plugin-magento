<?php

namespace Chatra\Livechat\Observer;

use Magento\Framework\Event\ObserverInterface;
use Magento\Framework\Event\Observer;
use Magento\Framework\App\Cache\Manager as CacheManager;

class ConfigSaveObserver implements ObserverInterface
{
    protected $cacheManager;

    public function __construct(CacheManager $cacheManager)
    {
        $this->cacheManager = $cacheManager;
    }

    public function execute(Observer $observer)
    {
        $this->cacheManager->clean($this->cacheManager->getAvailableTypes());
    }
}
