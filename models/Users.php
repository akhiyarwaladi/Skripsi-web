<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "users".
 *
 * @property integer $id
 * @property string $name
 * @property string $email
 * @property string $password_hash
 * @property string $api_key
 * @property string $gcm_registration_id
 * @property integer $status
 * @property string $created_at
 */
class Users extends \yii\db\ActiveRecord implements \yii\web\IdentityInterface
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
            [['email', 'password_hash', 'api_key'], 'required'],
            [['password_hash', 'gcm_registration_id'], 'string'],
            [['status'], 'integer'],
            [['created_at'], 'safe'],
            [['name'], 'string', 'max' => 250],
            [['email'], 'string', 'max' => 255],
            [['api_key'], 'string', 'max' => 32],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'email' => 'Email',
            'password_hash' => 'Password Hash',
            'api_key' => 'Api Key',
            'gcm_registration_id' => 'Gcm Registration ID',
            'status' => 'Status',
            'created_at' => 'Created At',
        ];
    }

    public function getAuthKey() {
        throw new \yii\base\NotSupportedException();
    }

    public function getId() {
        return $this->id;
    }

    public function validateAuthKey($authKey) {
        throw new \yii\base\NotSupportedException();
    }

    public static function findIdentity($id) {
        return self::findOne($id);
    }

    public static function findIdentityByAccessToken($token, $type = null) {
        throw new \yii\base\NotSupportedException();
    }
    
    public static function findByUsername($username){
        return self::findOne(['name'=>$username]);
    }
        
    public function validatePassword($password){
        return $this->password_hash == md5($password);
    }
}
