<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "alatuser".
 *
 * @property integer $id
 * @property string $id_alat
 * @property integer $id_user
 * @property string $nama
 *
 * @property User $idUser
 * @property Datasensor[] $datasensors
 */
class Alatuser extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'alatuser';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_alat', 'id_user', 'nama'], 'required'],
            [['id_user'], 'integer'],
            [['id_alat', 'nama'], 'string', 'max' => 32],
            [['id_user'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['id_user' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_alat' => 'Id Alat',
            'id_user' => 'Id User',
            'nama' => 'Nama',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdUser()
    {
        return $this->hasOne(User::className(), ['id' => 'id_user']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDatasensors()
    {
        return $this->hasMany(Datasensor::className(), ['id_alat' => 'id']);
    }
}
