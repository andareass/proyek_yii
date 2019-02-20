<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "mahasiswa".
 *
 * @property string $nim
 * @property string $nama
 * @property integer $kelas
 * @property integer $umur
 */
class Mahasiswa extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'mahasiswa';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nim', 'nama', 'kelas', 'umur'], 'required'],
            [['kelas', 'umur'], 'integer'],
            [['nim'], 'string', 'max' => 20],
            [['nama'], 'string', 'max' => 26],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'nim' => 'Nim',
            'nama' => 'Nama',
            'kelas' => 'Kelas',
            'umur' => 'Umur',
        ];
    }
}
