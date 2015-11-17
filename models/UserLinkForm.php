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
            ['link', 'required', 'message' => 'Please input your url in the box~'],
            // the link is compulsory input
            ['link', 'url', 'message' => 
            	'Your url does not look valid to me. If you did not include http:// or https:// this might be the problem~'],
            // the link has to be an URL starting with 'http://' or 'https://'
        ];
    }
}
