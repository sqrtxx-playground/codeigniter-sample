<?php

class Migration_Add_User extends CI_Migration {

    public function up(){
        $this->dbforge->add_field(array(
            'user_id' => array('type' => 'INT', 'constraint' => 11,
                               'unsigned' => TRUE, 'auto_increment' => TRUE),
            'name'    => array('type' => 'VARCHAR', 'constraint' => '255')
        ));
        $this->dbforge->add_key('user_id', TRUE);

        $this->dbforge->create_table('users', TRUE);
    }

    public function down(){
        $this->dbforge->drop_table('users');
    }

}