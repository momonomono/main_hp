@extends('layout.app')

@section('title','ログイン')

@section('content')
    <h1 class="c-text__main">Login</h1>
    
    <form method="post">
        <article class="p-gird__signin u-mb-5">
                @csrf

                @foreach ($form_data as $data)
                    <x-input :label="$data['label']" :name="$data['name']" 
                        :error="$errors->has($data['name'])?$errors->first($data['name']):''"
                    />
                @endforeach
        </article>
        
        <x-button message="送信" />
    </form>
@endsection