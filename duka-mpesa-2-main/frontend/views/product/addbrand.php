<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\ProductBrand */
/* @var $form ActiveForm */
?>
<div class="addbrand">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'brandName') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- addbrand -->
