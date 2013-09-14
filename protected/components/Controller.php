<?php
/**
 * Controller is the customized base controller class.
 * All controller classes for this application should extend from this base class.
 */
class Controller extends CController
{
	/**
	 * @var string the default layout for the controller view. Defaults to '//layouts/column1',
	 * meaning using a single column layout. See 'protected/views/layouts/column1.php'.
	 */
	public $layout='//layouts/column1';
	/**
	 * @var array context menu items. This property will be assigned to {@link CMenu::items}.
	 */
	public $menu=array();
	/**
	 * @var array the breadcrumbs of the current page. The value of this property will
	 * be assigned to {@link CBreadcrumbs::links}. Please refer to {@link CBreadcrumbs::links}
	 * for more details on how to specify this property.
	 */
	public $breadcrumbs=array();

    protected $_entityName;

    public function actionAdd(){
        $entity = new $this->_entityName;
        if (!empty($_POST[$this->_entityName])) {
            $entity->attributes = $_POST[$this->_entityName];
            try {
                if (!$entity->save()) {
                    throw new Exception(CVarDumper::dump($entity->getErrors()));
                };
                Yii::app()->user->setFlash('success', Yii::t('messages','entity.added'));
                $this->redirect('index');
            } catch (Exception $e) {
                Yii::app()->user->setFlash('error', Yii::t('messages','error.save') . $e->getMessage());
            }
            $this->redirect($this->createUrl('/'));
        } else {
            $this->render('add', [
                'entity' => $entity,
            ]);
        }
    }

    public function actionDelete($id)
    {
        $className = $this->_entityName;
        $entity = $className::model()->findByPk($id);
        try {
            if (!$entity->delete()) {
                throw new Exception(CVarDumper::dump($entity->getErrors()));
            }
            Yii::app()->user->setFlash('success', Yii::t('messages','entity.deleted'));
        } catch (Exception $e) {
            Yii::app()->user->setFlash('error', Yii::t('messages','error.delete') . $e->getMessage());
        }
        $this->redirect($this->createUrl('index'));
    }
}