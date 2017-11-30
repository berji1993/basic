<?php

/* @var $this \yii\web\View */
/* @var $content string */
use yii\helpers\Url;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);


?>
<?= $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    

    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?> | AFOZ By TWC</title>
    <?= $this->head() ?>
</head>



     <body>
            

             <?= $this->beginBody() ?>
             
                    <?php 

                    include("includes/_header.php"); 

                     ?>
                        <section>
                            <div class="mainwrapper">
                                <?php
                                  
                                  include("includes/_leftpanel.php"); 

                                   ?>   
                                <div class="mainpanel">
                          
                              <?php echo $content ?>
                                </div><!-- mainpanel -->
                            </div><!-- mainwrapper -->
                        </section>
            <?= $this->endBody() ?>
    </body>

     
</html>
<?= $this->endPage() ?>
