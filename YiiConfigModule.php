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
			'yiiconfig.components.*',
			'yiiconfig.components.behaviors.*',
			'yiiconfig.components.dataproviders.*',
			'yiiconfig.controllers.*',
			'yiiconfig.models.*',
		));


	}


	/**
	* @return the current version.
	*/
	public function getVersion()
	{
		return '1.0.0';
	}
}
