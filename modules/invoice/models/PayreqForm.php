<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 13.08.2017
 * Time: 17:48
 * Форма для записи платежных реквизитов пользователя в БД
 */

namespace app\modules\invoice\models ;
use Yii;
use yii\db\ActiveRecord ;

class PayreqForm extends ActiveRecord {

   public static function tableName()
   {
       return 'payrequser';
   }

   public function rules()
   {
       return [
           ['Name','safe'],
           ['INN','safe'],
           ['Adress','safe'],
           ['KPP','safe'],
           ['PayInv','safe'],
           ['KorInv','safe'],
           ['BIC','safe'],
           ['Bank','safe'],
       ];
   }

}
