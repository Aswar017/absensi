<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "dosen".
 *
 * @property int $Nip_dosen
 * @property string $Nama
 *
 * @property MataKuliah[] $mataKuliahs
 */
class Dosen extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'dosen';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Nip_dosen', 'Nama'], 'required'],
            [['Nip_dosen'], 'integer'],
            [['Nama'], 'string', 'max' => 45],
            [['Nip_dosen'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Nip_dosen' => 'Nip Dosen',
            'Nama' => 'Nama',
        ];
    }

    /**
     * Gets query for [[MataKuliahs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMataKuliahs()
    {
        return $this->hasMany(MataKuliah::className(), ['dosen_id' => 'Nip_dosen']);
    }
}
