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

    public $generateto ;

	public function init()
	{
		// Set required classes for import.
		$this->setImport(array(
			'config.components.*',
			'config.components.behaviors.*',
			'config.components.dataproviders.*',
			'config.controllers.*',
			'config.models.*',
            'config.views.*',
		));


	}



	public function getVersion()
	{
		return '1.0.0';
	}

    public function getGeneratedConfigPath() {
        if ($this->generateto != '') {
        } else {
            $this->generateto = Yii::getPathOfAlias('webroot') . DIRECTORY_SEPARATOR . 'config' . DIRECTORY_SEPARATOR. 'config_generated.php';
        }
        return $this->generateto;
    }

    public function getCurrentConfig(){
        $config = Config::model()->current();
        return $config;
    }


    public function registerConfigUpdate($additionalSet, $comment) {
        $config = $this->getCurrentConfig();
        $theconfig = json_decode($config,true);
        $theconfig  = CMap::mergeArray($theconfig, $additionalSet);

        /** @var $configAR Config */
        $configAR = new Config();
        $configAR->ConfigJSON = json_encode($theconfig,JSON_PRETTY_PRINT);
        $configAR->ConfigComment = $comment;
        $configAR->ConfigChanged = new CDbExpression('NOW()');
        if(!$configAR->save()) {
          throw new exception (print_r($configAR->getErrors(),true));
        }

    }

    public function unregisterConfigPart($removalSet) {

    }


    public function writeConfig(){
        $config = $this->getCurrentConfig();
        $jsonconfig = json_decode($config,true);
        $filecontent = '<?php /* this file was generated automatically. */ $config_generated = ' . var_export($jsonconfig, true) . ';';
        $filecontent = str_replace(array('0 =>', '1 =>', '2 =>', '3 =>', '4 =>', '5 =>', '6 =>', '7 =>', '8 =>', '9 =>', '10 =>', '11 =>', '12 =>', '13 =>', '14 =>'), '', $filecontent);
        file_put_contents($this->getGeneratedConfigPath(), $filecontent);


    }



}
