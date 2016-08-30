<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "vehicles".
 *
 * @property integer $id
 * @property string $number_plate
 * @property string $registrationdate
 * @property string $owner
 * @property string $Type
 * @property string $Model
 */
class Vehicles extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'vehicles';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['number_plate', 'registrationdate', 'owner', 'Type', 'Model'], 'required'],
            [['registrationdate'], 'safe'],
            [['number_plate'], 'string', 'max' => 20],
            [['owner', 'Type', 'Model'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'number_plate' => 'Number Plate',
            'registrationdate' => 'Registrationdate',
            'owner' => 'Owner',
            'Type' => 'Type',
            'Model' => 'Model',
        ];
    }
}
