<?php

use yii\db\Migration;

/**
 * Handles the creation of table `projects`.
 */
class m161217_201338_create_projects_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('projects', [
            'id' => $this->primaryKey(),
            'project_name' => $this->string(255)->notNull(),
            'description' => $this->string(255)->notNull(),
       'company_id' => $this->addForeignKey('companies_projects','projects','company','id'),

 'status' => $this->addForeignKey('companies_status','projects','status','id'),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('projects');
    }
}
