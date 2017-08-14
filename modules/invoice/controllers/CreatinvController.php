<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 14.08.2017
 * Time: 0:04
 * Создание счета по введенной пользователем сумме
 */

namespace app\modules\invoice\controllers;

use app\modules\invoice\models\Allinvoce;
use app\modules\invoice\models\Paymen;
use app\modules\invoice\models\PayreqForm;
use app\modules\invoice\models\SummaForm;
use Yii;
use yii\web\Controller;

class  CreatinvController extends Controller {

    public function actionIndex()
    {
        $InvoiceForm = new SummaForm();
        // после отправки данных формы записываем их в БД
        if( Yii::$app->request->post() ){
            $InvoiceForm->load(Yii::$app->request->post());
            $InvoiceForm->id_user = 1;
            $InvoiceForm->Date = date('d m Y');
            $rndPs = rand(1000, 9999);
            $hashInv = $rndPs."".date('dmY');
            // делаем инкальный хеш для счета, что бы его можно было найти
            $InvoiceForm->hesh_invoice = $hashInv;
            if( $InvoiceForm->save(false) ){
                return $this->render('postsave', ['hrefHash' => $hashInv]);
            } else {
                Yii::$app->session->setFlash('error', 'Ошибка!');
            }
        }
        return $this->render('index', ['InvoiceForm' => $InvoiceForm]);
    }
    // экшн для вывода всех созданных счетов пользователя
    public function actionAllinvoice(){
        $allInvoice = Allinvoce::find()->all();
        return $this->render('allinvoice', ['allInvoice'=>$allInvoice]);
    }
    // Экшн для вывода счета по ссылке
    public function actionInvoice(){
        // хеш счета получаем по ссылке мет GET
        $hesh = Yii::$app->request->get('id');
        // получаем информацию по счету фильтруя его по хеш
        $Invoice = Allinvoce::find()->asArray()->where(['hesh_invoice'=>$hesh])->all();
        // получив ИД пользователя делаем выборку его реквизитов
        $PayUser = Paymen::find()->asArray()->where(['id_user'=>$Invoice[0]['id_user']])->all();
        $Invoice[1] = $PayUser[0];
        return $this->render('invoice', ['invoice'=>$Invoice]);
    }
}