<?php

namespace App\Http\ViewComposers;
use Auth;
use Illuminate\View\View;


class LoginComposer
{
    public function compose(View $view)
    {
        $form_data = [
            ['label' => '名前','name' => 'name'],
            ['label' => 'パスワード','name' => 'password']
        ];

        $view->with('form_data', $form_data);
    }

}