
<?php 
class m010212_193444_initiate extends EDbMigration
{ 
    public function up() 
    { 
        $this->execute("CREATE TABLE `configmigrations` (  `ConfigID` BIGINT UNSIGNED NULL AUTO_INCREMENT,  `ConfigJSON` TEXT NOT NULL,  `ConfigChanged` TIMESTAMP NOT NULL,  `ConfigComment` VARCHAR(255) NOT NULL,  PRIMARY KEY (`ConfigID`) ) COLLATE='utf8_general_ci' ENGINE=InnoDB ROW_FORMAT=DEFAULT;");

        $this->execute('insert into configmigrations (ConfigJSON, ConfigComment) values( \'{   \"basePath\": \"$applicationDirectory.\\\"\\/protected\\\"\",   \"name\": \"YII nano application\",   \"theme\": \"classic\",   \"language\": \"en\",   \"preload\": [     \"log\"   ],   \"import\": [     \"application.models.*\",     \"application.components.*\",     \"application.controllers.*\",     \"zii.widgets.*\"   ],   \"aliases\": {     \"vendor\": \"webroot.vendor\",     \"bootstrap\": \"application.vendor.crisu83.yii-bootstrap\"   },   \"modules\": {     \"gii\": {       \"class\": \"system.gii.GiiModule\",       \"password\": \"q\",       \"ipFilters\": [         \"127.0.0.1\",         \"::1\"       ],       \"generatorPaths\": [         \"vendor.voronenko.yii_gii_migrate\"       ]     }   },   \"components\": {     \"errorHandler\": {       \"errorAction\": \"site\\/error\"     },     \"themeManager\": {       \"class\": \"CThemeManager\",       \"basePath\": \"$applicationDirectory.\\\"\\/themes\\\"\",       \"baseUrl\": \"$baseurl.\\\"\\/themes\\\"\"     },     \"db\": {       \"connectionString\": \"mysql:host=localhost;dbname=composer\",       \"emulatePrepare\": true,       \"username\": \"root\",       \"password\": \"root\",       \"charset\": \"utf8\"     },     \"urlManager\": {       \"urlFormat\": \"path\",       \"showScriptName\": true,       \"rules\": {         \"\\/\": \"\\/\",         \"\\/\\/\": \"\\/\"       }     }   },   \"params\": {     \"adminEmail\": \"webmaster@example.com\"   } }\',  \'Initial Setup\');');          
         
    } 
     

    public function down() 
    { 
        echo "m130212_193444_initiate does not support migration down.\n"; 
        return false; 
         
        $this->execute(""); 
    } 

    /* 
    // Use safeUp/safeDown to do migration with transaction 
    public function safeUp() 
    { 
    } 

    public function safeDown() 
    { 
    } 
    */ 
} 