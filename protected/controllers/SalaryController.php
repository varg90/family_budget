<?php

class SalaryController extends Controller
{

    public $defaultAction = 'create';

    public function actionList()
    {
        $salaries = Salary::model()->search();
        $this->render('list', [
            'salaries' => salaries,
        ]);
    }

    public function actionCreate()
    {
        $salary = new Salary();
        if (!empty($_POST['Salary'])) {
            $salary->attributes = $_POST['Salary'];
            try {
                if (!$salary->save()) {
                    throw new Exception(CVarDumper::dump($salary->getErrors()));
                };
                Yii::app()->user->setFlash('success', 'Новая запись успешно добавлена!');
            } catch (Exception $e) {
                Yii::app()->user->setFlash('error', 'Произошла ошибка при сохранении' . $e->getMessage());
                $this->redirect(Yii::app()->request->urlReferrer);
            }
            $this->redirect($this->createUrl('/'));
        } else {
            $this->render('create', [
                'salary' => $salary,
            ]);
        }
    }

}
