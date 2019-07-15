<?php
/**
 * @category  HackOro
 * @package   YotpoBundle
 * @author    Chris Rossi <chris.rossi@aligent.com.au>
 * @copyright 2019 Aligent Consulting & Friends of Oro
 * @license   http://opensource.org/licenses/MIT MIT
 */

namespace HackOro\YotpoBundle\Layout\DataProvider;

use HackOro\YotpoBundle\DependencyInjection\Configuration;
use Oro\Bundle\ConfigBundle\Config\ConfigManager;

class YotpoDataProvider
{
    /** @var ConfigManager */
    private $configManager;

    /**
     * @param ConfigManager $configManager
     */
    public function __construct(ConfigManager $configManager)
    {
        $this->configManager = $configManager;
    }

    /**
     * @return boolean
     */
    public function isReviewWidgetEnabled()
    {
        return (bool)$this->getConfigValue(Configuration::REVIEW_WIDGET_ENABLED, false);
    }

    /**
     * @return boolean
     */
    public function isProductPageRatingsWidgetEnabled()
    {
        return (bool)$this->getConfigValue(Configuration::PDP_RATINGS_WIDGET_ENABLED, false);
    }

    /**
     * @return boolean
     */
    public function isConversionTrackingEnabled()
    {
        return (bool)$this->getConfigValue(Configuration::CONVERSION_TRACKING_ENABLED, false);
    }

    /**
     * @return string
     */
    public function getAppKey()
    {
        return (string)$this->getConfigValue(Configuration::JS_APP_KEY, '');
    }

    /**
     * @param string $name
     * @param string $default |null
     * @return mixed
     */
    protected function getConfigValue(string $name, string $default = null)
    {
        return $this->configManager->get(Configuration::getConfigKeyByName($name), $default);
    }
}

