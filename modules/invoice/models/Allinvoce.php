<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 14.08.2017
 * Time: 1:46
 * Выборка всех счетов пользователя
 */

namespace app\modules\invoice\models ;
use Yii;
use yii\db\ActiveRecord ;

class Allinvoce extends ActiveRecord {
    public static function tableName()
    {
        return 'invoice';
    }
}



