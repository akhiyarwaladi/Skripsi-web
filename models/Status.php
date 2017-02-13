<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "status".
 *
 * @property integer $id
 * @property string $message
 * @property integer $permissions
 * @property integer $created_at
 * @property integer $updated_at
 */

class Status extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'status';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'message', 'created_at', 'updated_at'], 'required'],
            [['id', 'permissions', 'created_at', 'updated_at'], 'integer'],
            [['message'], 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'message' => 'Message',
            'permissions' => 'Permissions',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
    public function getPermissions() {
      return array (self::PERMISSIONS_PRIVATE=>'Private',self::PERMISSIONS_PUBLIC=>'Public');
    }
    const PERMISSIONS_PRIVATE = 10;
    const PERMISSIONS_PUBLIC = 20; 
    
    public function getPermissionsLabel($permissions) {
        if ($permissions==self::PERMISSIONS_PUBLIC) {
            return 'Public';
        } else {
            return 'Private';        
        }
    }
}
