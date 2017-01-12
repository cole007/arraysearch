# Array Search plugin for Craft CMS

Plugin to provide filter replicating the PHP array_search function

![Screenshot](resources/screenshots/plugin_logo.png)

## Installation

To install Array Search, follow these steps:

1. Download & unzip the file and place the `arraysearch` directory into your `craft/plugins` directory
2.  -OR- do a `git clone ???` directly into your `craft/plugins` folder.  You can then update it with `git pull`
3.  -OR- install with Composer via `composer require /arraysearch`
4. Install plugin in the Craft Control Panel under Settings > Plugins
5. The plugin folder should be named `arraysearch` for Craft to see it.  GitHub recently started appending `-master` (the branch name) to the name of the folder for zip file downloads.

Array Search works on Craft 2.4.x and Craft 2.5.x.

## Array Search Overview

A simple twig filter to return the key for a specific value within an array.

## Using Array Search

Use as per the PHP [array_search](http://php.net/manual/en/function.array-search.php) function, eg

    {% set colours = ['green','blue','red'] %}
    {{ colours|arraySearch('red') }} // will return 2
    {{ colours|arraySearch('green') }} // will return 0

## Acknowledgments

Icon by IconDots: https://thenounproject.com/search/?q=array+search&i=760875

Brought to you by [@cole007](http://ournameismud.co.uk/)
