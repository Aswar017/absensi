<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mahasiswa".
 *
 * @property int $NIM
 * @property string $nama
 * @property string $jurusan
 * @property string $semester
 * @property string $golongan
 *
 * @property Kehadiran[] $kehadirans
 * @property MataKuliah[] $mataKuliahKodemks
 */
class Mahasiswa extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mahasiswa';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['NIM', 'nama', 'jurusan', 'semester', 'golongan'], 'required'],
            [['NIM'], 'integer'],
            [['nama', 'jurusan', 'semester'], 'string', 'max' => 45],
            [['golongan'], 'string', 'max' => 20],
            [['NIM'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'NIM' => 'Nim',
            'nama' => 'Nama',
            'jurusan' => 'Jurusan',
            'semester' => 'Semester',
            'golongan' => 'Golongan',
        ];
    }

    /**
     * Gets query for [[Kehadirans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKehadirans()
    {
        return $this->hasMany(Kehadiran::className(), ['mahasiswa_NIM' => 'NIM']);
    }

    /**
     * Gets query for [[MataKuliahKodemks]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMataKuliahKodemks()
    {
        return $this->hasMany(MataKuliah::className(), ['kode_mk' => 'mata_kuliah_kodemk'])->viaTable('kehadiran', ['mahasiswa_NIM' => 'NIM']);
    }
}
