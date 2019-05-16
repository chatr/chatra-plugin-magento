<?php
namespace Chatra\Livechat\Observer;

use Magento\Framework\Event\ObserverInterface;
use Magento\Framework\Event\Observer as EventObserver;
use Psr\Log\LoggerInterface as Logger;
use Magento\Framework\App\Cache\Manager as CacheManager;
use Magento\Framework\App\Cache\Type\Config as CacheTypeConfig;

class ConfigSaveObserver implements ObserverInterface
{
    /**
     * @var Logger
     */
    protected $logger;
	protected $curDir;

    /**
     * @param Logger $logger
     */
    public function __construct(
        Logger $logger,
		\Magento\Framework\Filesystem\DirectoryList $dir
    ) {
        $this->logger = $logger;
		$this->curDir = $dir;
    }

    public function execute(EventObserver $observer)
    {
		$result = exec('/usr/bin/php '.$this->curDir->getRoot().'/bin/magento cache:clean config');
    }
}