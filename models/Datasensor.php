<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "datasensor".
 *
 * @property integer $id
 * @property integer $id_alat
 * @property integer $Hpsp
 * @property integer $Hpc
 * @property double $Uk
 * @property string $created_at
 *
 * @property Alatuser $idAlat
 */
class Datasensor extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'datasensor';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'id_alat', 'Hpsp', 'Hpc', 'Uk'], 'required'],
            [['id', 'id_alat', 'Hpsp', 'Hpc'], 'integer'],
            [['Uk'], 'number'],
            [['created_at'], 'safe'],
            [['id_alat'], 'exist', 'skipOnError' => true, 'targetClass' => Alatuser::className(), 'targetAttribute' => ['id_alat' => 'id']],
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
            'Hpsp' => 'Hpsp',
            'Hpc' => 'Hpc',
            'Uk' => 'Uk',
            'created_at' => 'Created At',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdAlat()
    {
        return $this->hasOne(Alatuser::className(), ['id' => 'id_alat']);
    }
}
