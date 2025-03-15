<?php

namespace App\Http\ViewComposers;
use Auth;
use Illuminate\View\View;


class SigninComposer
{
    public function compose(View $view)
    {
        $form_data = [
            ['label' => '名前','name' => 'name'],
            ['label' => 'メールアドレス','name' => 'email'],
            ['label' => 'パスワード','name' => 'password'],
            ['label' => 'パスワード(再入力)','name' => 'password_re']
        ];

        $view->with('form_data', $form_data);
    }

}