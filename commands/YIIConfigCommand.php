<?php
class YIIConfigCommand extends CConsoleCommand {

    public function getHelp() {
        echo <<<EOS
n/a
EOS;
    }

    public function actionWrite(){
        /** @var $confmodule  YIIConfigModule*/
        $confmodule = Yii::app()->getModule('config');
        $confmodule->writeConfig();
        print 'Config was written to disk '.$confmodule->generateto;
    }

    public function actionShow(){
        /** @var $confmodule  YIIConfigModule*/
        $confmodule = Yii::app()->getModule('config');
        $config = $confmodule->getCurrentConfig();
        $jsonconfig = json_decode($config,true);
        print json_encode($jsonconfig, JSON_PRETTY_PRINT);
    }

}

?>