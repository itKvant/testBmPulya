<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 14.08.2017
 * Time: 10:15
 * Выборка реквизитов пользователя
 */

namespace app\modules\invoice\models ;
use Yii;
use yii\db\ActiveRecord ;

class Paymen extends ActiveRecord {
    public static function tableName()
    {
        return 'payrequser';
    }
}
