<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 14.08.2017
 * Time: 9:39
 * Шаблон отдельного счета
 * в базе нет отдельных товаров/услуг, а есть только общая сумма
 * поэтому принимаем, что у нас одна услуга и общая сумма это ее стоиомость
 */
//print_r($invoice);
?>

<ul class="list-unstyled">
    <li>Продавец : ООО "ООО"</li>
    <li>Адрес: Россия</li>
    <li>ИНН 213001001</li>
    <li>КПП 21300101</li>
    <li>Расчетный счет: 456245666000000</li>
    <li>Кор. счет: 54654654648513</li>
    <li>БИК 409652</li>
    <li>Банк: Альфа банк</li>
</ul>

<ul class="list-unstyled">
    <li>Покупатель : <?=$invoice[1]['Name']?></li>
    <li>Адрес: <?=$invoice[1]['Adress']?></li>
    <li>ИНН <?=$invoice[1]['INN']?></li>
    <li>КПП <?=$invoice[1]['KPP']?></li>
    <li>Расчетный счет: <?=$invoice[1]['PayInv']?></li>
    <li>Кор. счет: <?=$invoice[1]['KorInv']?></li>
    <li>БИК <?=$invoice[1]['BIC']?></li>
    <li>Банк: <?=$invoice[1]['Bank']?></li>
</ul>
<h1>Счет № от </h1>
<table class="table">
    <thead>
    <tr>
        <td>#</td>
        <td>Наименование</td>
        <td>ед.изм</td>
        <td>Кол-во</td>
        <td>Цена</td>
        <td>Сумма</td>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td>1</td>
        <td>Оказание услуг по обслуживанию комп. техники</td>
        <td>усл.</td>
        <td>1</td>
        <td><?=$invoice[0]['Summa']?></td>
        <td><?=$invoice[0]['Summa']?></td>
    </tr>
    <tr>
        <td colspan="2">
            Итого:
        </td>
        <td></td>
        <td></td>
        <td></td>
        <td><?=$invoice[0]['Summa']?></td>
    </tr>
    </tbody>
</table>
<p>Сумма прописью: </p>