<?php
$db = new
\atk4\data\Persistence_SQL('mysql:dbname=heroku_35a63eb77fee245; host=eu-mm-auto-fra-02-c.cleardb.net','bfa11752c77b7d','77c43c35');
class Friends extends \atk4\data\Model {
  public $table = 'denis';
  function init() {
    parent::init();
    $this->addField('name');
    $this->addField('surname');
    $this->addField('email');
    $this->addField('phone_number');
    $this->addField('birthday',['type'=>'date']);
    $this->addField('notes',['type'=>'text']);
    $this->addField('age');
  }
}
