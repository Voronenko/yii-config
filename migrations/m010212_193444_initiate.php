
<?php 
class m010212_193444_initiate extends EDbMigration
{ 
    public function up() 
    { 
        $this->execute("CREATE TABLE `configmigrations` (  `ConfigID` BIGINT UNSIGNED NULL AUTO_INCREMENT,  `ConfigJSON` TEXT NOT NULL,  `ConfigChanged` TIMESTAMP NOT NULL,  `ConfigComment` VARCHAR(255) NOT NULL,  PRIMARY KEY (`ConfigID`) ) COLLATE='utf8_general_ci' ENGINE=InnoDB ROW_FORMAT=DEFAULT;");

        $this->execute('insert into configmigrations (ConfigJSON, ConfigComment) values( \'{    }\',  \'Initial Setup\');');          
         
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