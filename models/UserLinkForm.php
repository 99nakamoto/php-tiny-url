<?php

namespace app\models;

use Yii;
use yii\base\Model;

class UserLinkForm extends Model
{
    public $link;

    public function rules()
    {
        return [
            ['link', 'required']
        ];
    }
}
