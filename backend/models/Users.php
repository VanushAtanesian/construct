<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "users".
 *
 * @property integer $id
 * @property string $first_name
 * @property string $last_name
 * @property string $email
 * @property string $password
 * @property string $created at
 * @property integer $last_report
 * @property integer $total_hours
 * @property integer $phone
 * @property integer $whatsapp
 * @property integer $viber
 * @property integer $description
 * @property integer $company
 * @property integer $role
 * @property integer $status
 * @property integer $project
 *
 * @property Company $company0
 * @property Roles $role0
 * @property Status $status0
 * @property Projects $project0
 */
class Users extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'users';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['first_name', 'last_name', 'email', 'password', 'created at', 'last_report', 'total_hours', 'phone', 'whatsapp', 'viber', 'description'], 'required'],
            [['created at'], 'safe'],
            [['last_report', 'total_hours', 'phone', 'whatsapp', 'viber', 'description', 'company', 'role', 'status', 'project'], 'integer'],
            [['first_name', 'last_name'], 'string', 'max' => 50],
            [['email', 'password'], 'string', 'max' => 255],
            [['company'], 'exist', 'skipOnError' => true, 'targetClass' => Company::className(), 'targetAttribute' => ['company' => 'id']],
            [['role'], 'exist', 'skipOnError' => true, 'targetClass' => Roles::className(), 'targetAttribute' => ['role' => 'id']],
            [['status'], 'exist', 'skipOnError' => true, 'targetClass' => Status::className(), 'targetAttribute' => ['status' => 'id']],
            [['project'], 'exist', 'skipOnError' => true, 'targetClass' => Projects::className(), 'targetAttribute' => ['project' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'first_name' => 'First Name',
            'last_name' => 'Last Name',
            'email' => 'Email',
            'password' => 'Password',
            'created at' => 'Created At',
            'last_report' => 'Last Report',
            'total_hours' => 'Total Hours',
            'phone' => 'Phone',
            'whatsapp' => 'Whatsapp',
            'viber' => 'Viber',
            'description' => 'Description',
            'company' => 'Company',
            'role' => 'Role',
            'status' => 'Status',
            'project' => 'Project',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCompany0()
    {
        return $this->hasOne(Company::className(), ['id' => 'company']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRole0()
    {
        return $this->hasOne(Roles::className(), ['id' => 'role']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStatus0()
    {
        return $this->hasOne(Status::className(), ['id' => 'status']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProject0()
    {
        return $this->hasOne(Projects::className(), ['id' => 'project']);
    }
}
