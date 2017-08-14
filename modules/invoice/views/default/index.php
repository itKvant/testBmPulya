<?php
    use yii\widgets\ActiveForm;
    use yii\helpers\Html;
?>
<div class="invoice-default-index">
    <h1>Заполните ваши реквизиты:</h1>
    <?php
    //print_r($model);
    // создаем форму для записи реквизитов
    $PayreqForm = ActiveForm::begin();?>
    <?= $PayreqForm->field($PayreqFormFilds, 'Name')  ->label('Название компании')?>
    <?= $PayreqForm->field($PayreqFormFilds, 'Adress')->label('Адрес')?>
    <?= $PayreqForm->field($PayreqFormFilds, 'INN')   ->label('ИНН')?>
    <?= $PayreqForm->field($PayreqFormFilds, 'KPP')   ->label('КПП')?>
    <?= $PayreqForm->field($PayreqFormFilds, 'PayInv')->label('Номер расчетного счета')?>
    <?= $PayreqForm->field($PayreqFormFilds, 'KorInv')->label('Номер кор.счета')?>
    <?= $PayreqForm->field($PayreqFormFilds, 'BIC')   ->label('БИК')?>
    <?= $PayreqForm->field($PayreqFormFilds, 'Bank')  ->label('Название Банка')?>
    <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    <?php ActiveForm::end();?>
</div>
