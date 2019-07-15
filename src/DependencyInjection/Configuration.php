<?php
/**
 * @category  HackOro
 * @package   YotpoBundle
 * @author    Chris Rossi <chris.rossi@aligent.com.au>
 * @copyright 2019 Aligent Consulting & Friends of Oro
 * @license   http://opensource.org/licenses/MIT MIT
 */

namespace HackOro\YotpoBundle\DependencyInjection;

use Oro\Bundle\ConfigBundle\Config\ConfigManager;
use Oro\Bundle\ConfigBundle\DependencyInjection\SettingsBuilder;
use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{
    const REVIEW_WIDGET_ENABLED = 'review_widget_enabled'; // Enable/disable JS Reviews Widget
    const PDP_RATINGS_WIDGET_ENABLED = 'pdp_ratings_widget_enabled'; // Enabled/disable JS Star Ratings Widget on PDP
    const CONVERSION_TRACKING_ENABLED = 'conversion_tracking_enabled'; // Enable/disable JS Conversion Tracking
    const JS_APP_KEY = 'js_app_key'; // Public app key for JS widgets

    /**
     * Generates the configuration tree builder.
     *
     * @return TreeBuilder The tree builder
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root(HackOroYotpoExtension::ALIAS);

        SettingsBuilder::append(
            $rootNode,
            [
                self::REVIEW_WIDGET_ENABLED              => ['type' => 'boolean', 'value' => false],
                self::PDP_RATINGS_WIDGET_ENABLED         => ['type' => 'boolean', 'value' => false],
                self::CONVERSION_TRACKING_ENABLED        => ['type' => 'boolean', 'value' => false],
                self::JS_APP_KEY                         => ['type' => 'scalar', 'value' => null],
            ]
        );
        return $treeBuilder;
    }


    /**
     * @param string $key
     * @return string
     */
    public static function getConfigKeyByName($key)
    {
        return implode(ConfigManager::SECTION_MODEL_SEPARATOR, [HackOroYotpoExtension::ALIAS, $key]);
    }
}
