<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = 'Login';
?>

<h1><?= Html::encode($this->title) ?></h1>

<p>Bitte fülle die folgenden Felder aus, um dich einzuloggen:</p>

<?php $form = ActiveForm::begin(['id' => 'login-form']); ?>

    <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

    <?= $form->field($model, 'password')->passwordInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
    </div>

<?php ActiveForm::end(); ?>
