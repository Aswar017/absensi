<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mata_kuliah".
 *
 * @property int $kode_mk
 * @property string $nama
 * @property int $dosen_id
 *
 * @property Kehadiran[] $kehadirans
 * @property Mahasiswa[] $mahasiswaNIMs
 * @property Dosen $dosen
 */
class MataKuliah extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mata_kuliah';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kode_mk', 'nama', 'dosen_id'], 'required'],
            [['kode_mk', 'dosen_id'], 'integer'],
            [['nama'], 'string', 'max' => 45],
            [['kode_mk', 'nama'], 'unique', 'targetAttribute' => ['kode_mk', 'nama']],
            [['dosen_id'], 'exist', 'skipOnError' => true, 'targetClass' => Dosen::className(), 'targetAttribute' => ['dosen_id' => 'Nip_dosen']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'kode_mk' => 'Kode Mk',
            'nama' => 'Nama',
            'dosen_id' => 'Dosen ID',
        ];
    }

    /**
     * Gets query for [[Kehadirans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKehadirans()
    {
        return $this->hasMany(Kehadiran::className(), ['mata_kuliah_kodemk' => 'kode_mk']);
    }

    /**
     * Gets query for [[MahasiswaNIMs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMahasiswaNIMs()
    {
        return $this->hasMany(Mahasiswa::className(), ['NIM' => 'mahasiswa_NIM'])->viaTable('kehadiran', ['mata_kuliah_kodemk' => 'kode_mk']);
    }

    /**
     * Gets query for [[Dosen]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDosen()
    {
        return $this->hasOne(Dosen::className(), ['Nip_dosen' => 'dosen_id']);
    }
}
