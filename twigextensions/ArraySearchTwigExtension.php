<?php
/**
 * Array Search plugin for Craft CMS
 *
 * Array Search Twig Extension
 *
 * @author    @cole007
 * @copyright Copyright (c) 2017 @cole007
 * @link      http://ournameismud.co.uk/
 * @package   ArraySearch
 * @since     1.0.0
 */

namespace Craft;

use Twig_Extension;
use Twig_Filter_Method;

class ArraySearchTwigExtension extends \Twig_Extension
{
    /**
     * @return string The extension name
     */
    public function getName()
    {
        return 'ArraySearch';
    }

    /**
     * @return array
     */
    public function getFilters()
    {
        return array(
            'arraySearch' => new \Twig_Filter_Method($this, 'arraySearch'),
        );
    }

    /**
    * @return array
     */
    public function getFunctions()
    {
        return array(
            'arraySearch' => new \Twig_Function_Method($this, 'arraySearch'),
        );
    }

    /**
     * @return string
     */
    public function arraySearch($array,$value)
    {
        return array_search($value,$array);
    }
}