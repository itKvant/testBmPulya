<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 14.08.2017
 * Time: 0:18
 *  форма выставляющая по сумме счет
 */

namespace app\modules\invoice\models ;
use Yii;
use yii\db\ActiveRecord ;

class SummaForm extends ActiveRecord {
    public static function tableName()
    {
        return 'invoice';
    }
    public function rules()
    {
        return [
            ['Date','safe'],
            ['Summa','safe'],
            ['id_user','safe'],
        ];
    }
}


