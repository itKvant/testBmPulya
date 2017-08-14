<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 14.08.2017
 * Time: 1:36
 * Вывод всех созданных счетов пользователяc с сылками на них
 */

?>

<h2>Все счета:</h2>

<?php foreach ($allInvoice as $item) { ?>
    <p> Счет от <?=$item->Date?>  на сумму: <?=$item->Summa?>  <a href="index.php?r=invoice/creatinv/invoice&id=<?=$item->hesh_invoice?> " >посмотреть</a> </p>
<?php } ?>
