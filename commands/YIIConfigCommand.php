<?php
class YIIConfigCommand extends CConsoleCommand {

    public function getHelp() {
        echo <<<EOS
n/a
EOS;
    }

    /**
     * Creates data folders
     * @param type $args
     */
    public function run($args) {

        $appPath = realpath(Yii::getPathOfAlias('application') . DIRECTORY_SEPARATOR );
        echo "\nApp Path '{$appPath}'...\n";        
    }

}

?>