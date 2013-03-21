<?php

class DayController extends Controller
{

    public function actionIndex()
    {
        $days = Day::model()->findAll();
        $this->render('index', [
            'days' => $days,
        ]);
    }

}
