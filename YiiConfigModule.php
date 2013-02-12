<?php
/**
* YIIConfig module class file.
*
*
* DO NOT CHANGE THE DEFAULT CONFIGURATION VALUES!
* 
* You may overload the module configuration values in your YIIConfig-module
* configuration like so:
* 
* 'modules'=>array(
*     'yiiconfig'=>array(
*         'param'=>'value',
*     ),
* ),
*/
class YIIConfigModule extends CWebModule
{

    private $debug = false;

	public function init()
	{
		// Set required classes for import.
		$this->setImport(array(
			'config.components.*',
			'config.components.behaviors.*',
			'config.components.dataproviders.*',
			'config.controllers.*',
			'config.models.*',
		));


	}


	/**
	* @return the current version.
	*/
	public function getVersion()
	{
		return '1.0.0';
	}

        public function current() {
           $current = config::model()->current()->ConfigJSON;
           return $current;

        }
}
