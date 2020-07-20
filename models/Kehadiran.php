<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "kehadiran".
 *
 * @property int $mahasiswa_NIM
 * @property int $mata_kuliah_kodemk
 * @property string $keterangan
 *
 * @property Mahasiswa $mahasiswaNIM
 * @property MataKuliah $mataKuliahKodemk
 */
class Kehadiran extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'kehadiran';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['mahasiswa_NIM', 'mata_kuliah_kodemk', 'keterangan'], 'required'],
            [['mahasiswa_NIM', 'mata_kuliah_kodemk'], 'integer'],
            [['keterangan'], 'string', 'max' => 45],
            [['mahasiswa_NIM', 'mata_kuliah_kodemk'], 'unique', 'targetAttribute' => ['mahasiswa_NIM', 'mata_kuliah_kodemk']],
            [['mahasiswa_NIM'], 'exist', 'skipOnError' => true, 'targetClass' => Mahasiswa::className(), 'targetAttribute' => ['mahasiswa_NIM' => 'NIM']],
            [['mata_kuliah_kodemk'], 'exist', 'skipOnError' => true, 'targetClass' => MataKuliah::className(), 'targetAttribute' => ['mata_kuliah_kodemk' => 'kode_mk']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'mahasiswa_NIM' => 'Mahasiswa Nim',
            'mata_kuliah_kodemk' => 'Mata Kuliah Kodemk',
            'keterangan' => 'Keterangan',
        ];
    }

    /**
     * Gets query for [[MahasiswaNIM]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMahasiswaNIM()
    {
        return $this->hasOne(Mahasiswa::className(), ['NIM' => 'mahasiswa_NIM']);
    }

    /**
     * Gets query for [[MataKuliahKodemk]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMataKuliahKodemk()
    {
        return $this->hasOne(MataKuliah::className(), ['kode_mk' => 'mata_kuliah_kodemk']);
    }
}
