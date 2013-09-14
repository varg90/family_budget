<?php

class PurchaseController extends Controller
{

    protected $_entityName = 'Purchase';
    public function actionIndex()
    {
        $todaysDate = date('Y-m-d');

        $criteria = new CDbCriteria();
        $criteria->condition = 'date = :date';
        $criteria->params = [
            ':date' => $todaysDate,
        ];
        $criteria->order = 'name DESC';
        $criteria->limit = 5;

        $purchasesDataProvider = Purchase::model()->search($criteria);

        $this->render('index', [
            'purchasesDataProvider' => $purchasesDataProvider,
        ]);
    }

}
