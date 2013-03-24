<?php /* @var $this Controller */ ?>
<?php Yii::app()->bootstrap->register(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="language" content="en" />

        <!-- blueprint CSS framework -->
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
        <!--[if lt IE 8]>
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
        <![endif]-->

        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />

        <title><?php echo CHtml::encode($this->pageTitle); ?></title>
    </head>

    <body>

        <div class="container" id="page">

            <div id="header">
                <div class="row">
                    <div class="span-6" style="margin-left: 50px">
                        <h1><?php echo CHtml::encode(Yii::app()->name); ?></h1>
                    </div>
                    <br>
                        <div class="span-45">
                            <?php
                            $this->widget('bootstrap.widgets.TbButton', [
                                'label' => 'Новая затрата',
                                'url' => Yii::app()->createUrl('/purchase/create'),
                                'size' => TbButton::SIZE_LARGE,
                                'type' => TbButton::TYPE_INFO,
                                'icon' => 'icon-shopping-cart icon-white',
                                'htmlOptions' => [
                                    'width' => 200,
                                    ],
                            ]);
                            ?>
                        </div>
                        <div class="span-45">
                            <?php
                            $this->widget('bootstrap.widgets.TbButton', [
                                'label' => 'Статистика',
                                'url' => '#',
                                'size' => TbButton::SIZE_LARGE,
                                'type' => TbButton::TYPE_INFO,
                                'icon' => 'icon-th-list icon-white',
                            ]);
                            ?>
                        </div>
                        <div class="span-4">
                            <?php
                            $this->widget('bootstrap.widgets.TbButton', [
                                'label' => 'Зарплата',
                                'url' => '#',
                                'size' => TbButton::SIZE_LARGE,
                                'type' => TbButton::TYPE_INFO,
                                'icon' => 'icon-plus icon-white',
                            ]);
                            ?>
                        </div>
                </div>
            </div><!-- header -->
            <?php echo $content; ?>

            <div class="clear"></div>

        </div><!-- page -->

    </body>
</html>
