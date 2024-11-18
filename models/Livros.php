<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "livros".
 *
 * @property int $id
 * @property string $titulo
 * @property int|null $autor_id
 * @property string|null $descricao
 * @property string|null $data_publicacao
 *
 * @property Autores $autor
 */
class Livros extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'livros';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['titulo'], 'required'],
            [['autor_id'], 'integer'],
            [['descricao'], 'string'],
            [['data_publicacao'], 'safe'],
            [['titulo'], 'string', 'max' => 255],
            [['autor_id'], 'exist', 'skipOnError' => true, 'targetClass' => Autores::class, 'targetAttribute' => ['autor_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'titulo' => 'Titulo',
            'autor_id' => 'Autor ID',
            'descricao' => 'Descricao',
            'data_publicacao' => 'Data Publicacao',
        ];
    }

    /**
     * Gets query for [[Autor]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAutor()
    {
        return $this->hasOne(Autores::class, ['id' => 'autor_id']);
    }
}
