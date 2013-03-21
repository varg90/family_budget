<?php

/**
 * This is the model class for table "day_summary".
 *
 * The followings are the available columns in table 'day_summary':
 * @property integer $id
 * @property string $date
 * @property double $sum_spend
 */
class Day extends CActiveRecord
{

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return Day the static model class
     */
    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

    /**
     * @return string the associated database table name
     */
    public function tableName()
    {
        return 'day';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules()
    {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            ['date', 'type', 'type' => 'date', 'dateFormat' => 'yyyy-MM-dd'],
            array('date, sum_spend', 'required'),
            array('sum_spend', 'numerical'),
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array('id, date, sum_spend', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations()
    {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'purchases' => array(self::HAS_MANY, 'Purchase', 'sum_id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'id' => 'ID',
            'date' => 'Date',
            'sum_spend' => 'Sum Spend',
        );
    }

    /**
     * Retrieves a list of models based on the current search/filter conditions.
     * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
     */
    public function search()
    {
        // Warning: Please modify the following code to remove attributes that
        // should not be searched.

        $criteria = new CDbCriteria;

        $criteria->compare('id', $this->id);
        $criteria->compare('date', $this->date, true);
        $criteria->compare('sum_spend', $this->sum_spend);
        $criteria->with = 'purchases';

        return new CActiveDataProvider($this, array(
                    'criteria' => $criteria,
                ));
    }

    public function getSummaryPurchasesCost()
    {
        $sumCost = 0;
        foreach ($this->purchases as $purchase) {
            $sumCost += $purchase->cost;
        }
        return $sumCost;
    }

}