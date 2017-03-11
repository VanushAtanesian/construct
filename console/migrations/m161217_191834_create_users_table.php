<?php

use yii\db\Migration;

/**
 * Handles the creation of table `users`.
 */
class m161217_191834_create_users_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('users', [
            'id' => $this->primaryKey(),
            'first_name'=>$this->string(50)->notNull(),
            'last_name'=>$this->string(50)->notNull(),
            'email'=>$this->string(255)->notNull(),
            'password'=>$this->string(255)->notNull(),
            'created at'=>$this->dateTime()->notNull(),
 'company'=>$this->addForeignKey('users_company_id','users','company','id'),
        'projetcs'=>$this->addForeignKey('users_projects_id','users','projects','id'),
  'status'=>$this->addForeignKey('users_status_id','users','status','id'),
  'roles'=>$this->addForeignKey('users_roles_id','users','roles','id'),
            'last_report'=>$this->integer(50)->notNull(),
            'total_hours'=>$this->integer(25)->notNull(),
            'phone'=>$this->integer(55)->notNull(),
            'whatsapp'=>$this->integer(55)->notNull(),
            'viber'=>$this->integer(55)->notNull(),
            'description'=>$this->integer(255)->notNull(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('users');
    }
}
