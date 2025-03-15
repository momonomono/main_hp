@extends('layout.app')

@section('title','テストページ')

@section('content')
    <div class="l-container">
        <form method="post">
            @csrf

            <x-test label="名前" name="name" 
                :error="$errors->has('name') ? $errors->first('name') : ''" 
            />
            <x-button message="送信"/>
        </form>
    </div>
@endsection