<?php

namespace app\modules\invoice\controllers;

use Yii;
use yii\web\Controller;
use app\modules\invoice\models\PayreqForm;

/**
 * Форма с платежными реквизитами пользователя
 */
class DefaultController extends Controller
{
    /**
     * Стартовая страница с формой для записи платежных реквизитов
     */
    public function actionIndex()
    {
        $PayreqFormFilds = new PayreqForm();

        if( Yii::$app->request->post() ){
            $PayreqFormFilds->load(Yii::$app->request->post());
            if( $PayreqFormFilds->save(false) ){
                return $this->render('postsave');
            } else {
                Yii::$app->session->setFlash('error', 'Ошибка!');
            }
        }
        return $this->render('index', ['PayreqFormFilds' => $PayreqFormFilds]);
    }

}
