<?php
class YIIConfigCommand extends CConsoleCommand {

    public function getHelp() {
        echo <<<EOS
n/a
EOS;
    }

     public function actionHelp() {
       echo <<<EOS
            
         This utility generates config file
EOS;
     }


     public function actionIndex() {
       echo 'Generating...';
       Yii::app()->getModule('config')->current();
     }


    /**
     * Creates data folders
     * @param type $args

    public function run($args) {

        $appPath = realpath(Yii::getPathOfAlias('application') . DIRECTORY_SEPARATOR );
        echo "\nApp Path '{$appPath}'...\n";        
    }
     */
}

?>