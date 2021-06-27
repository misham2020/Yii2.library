<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "material".
 *
 * @property int $id
 * @property string $name
 * @property string $author
 * @property string $description
 * @property int $category_id
 * @property int $type_id
 *
 * @property Category $category
 * @property Type $type
 */
class Material extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'material';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'author', 'description', 'category_id', 'type_id'], 'required'],
            [['description'], 'string'],
            [['category_id', 'type_id'], 'integer'],
            [['name'], 'string', 'max' => 255],
            [['author'], 'string', 'max' => 256],
            [['category_id'], 'exist', 'skipOnError' => true, 'targetClass' => Category::className(), 'targetAttribute' => ['category_id' => 'id']],
            [['type_id'], 'exist', 'skipOnError' => true, 'targetClass' => Type::className(), 'targetAttribute' => ['type_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Название',
            'author' => 'Автор',
            'description' => 'Описание',
            'category_id' => 'Категория',
            'type_id' => 'Тип',
        ];
    }

    /**
     * Gets query for [[Category]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCategory()
    {
        return $this->hasOne(Category::className(), ['id' => 'category_id']);
    }

    /**
     * Gets query for [[Type]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getType()
    {
        return $this->hasOne(Type::className(), ['id' => 'type_id']);
    }
}
