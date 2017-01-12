<?php
/**
 * Array Search plugin for Craft CMS
 *
 * Plugin to provide filter replicating the PHP array_search function
 *
 * @author    @cole007
 * @copyright Copyright (c) 2017 @cole007
 * @link      http://ournameismud.co.uk/
 * @package   ArraySearch
 * @since     1.0.0
 */

namespace Craft;

class ArraySearchPlugin extends BasePlugin
{
    /**
     * @return mixed
     */
    public function init()
    {
        parent::init();
    }

    /**
     * @return mixed
     */
    public function getName()
    {
         return Craft::t('Array Search');
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return Craft::t('Plugin to provide filter replicating the PHP array_search function');
    }

    /**
     * @return string
     */
    public function getDocumentationUrl()
    {
        return '???';
    }

    /**
     * @return string
     */
    public function getReleaseFeedUrl()
    {
        return '???';
    }

    /**
     * @return string
     */
    public function getVersion()
    {
        return '1.0.0';
    }

    /**
     * @return string
     */
    public function getSchemaVersion()
    {
        return '1.0.0';
    }

    /**
     * @return string
     */
    public function getDeveloper()
    {
        return '@cole007';
    }

    /**
     * @return string
     */
    public function getDeveloperUrl()
    {
        return 'http://ournameismud.co.uk/';
    }

    /**
     * @return bool
     */
    public function hasCpSection()
    {
        return false;
    }

    /**
     * @return mixed
     */
    public function addTwigExtension()
    {
        Craft::import('plugins.arraysearch.twigextensions.ArraySearchTwigExtension');

        return new ArraySearchTwigExtension();
    }

    /**
     */
    public function onBeforeInstall()
    {
    }

    /**
     */
    public function onAfterInstall()
    {
    }

    /**
     */
    public function onBeforeUninstall()
    {
    }

    /**
     */
    public function onAfterUninstall()
    {
    }
}