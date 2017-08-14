<?php

    use yii\widgets\ActiveForm;
    use yii\helpers\Html;
    //print_r($InvoiceForm);
?>

<h1>Формирование счета на оплату:</h1>
<?php $InvoiceForms = ActiveForm::begin(); ?>
<?= $InvoiceForms->field($InvoiceForm, 'Summa')->label('Введите сумму счета') ?>

<?= Html::submitButton('Создать счет', ['class' => 'btn btn-success']) ?>
<?php ActiveForm::end();?>

<a style="margin-top: 30px;" class="btn btn-success" href="index.php?r=invoice/creatinv/allinvoice">Посмотреть все счета</a>

