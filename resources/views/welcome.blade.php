@extends('layouts.app')

@section('content')
    @if (Auth::check())
         <h3>タスクを作製しましょう</h3>
         @include('tasks.index')
    @else
        <div class="center jumbotron">
            <div class="text-center">
                <h1>タスクを管理しよう</h1>
                {{-- ユーザ登録ページへのリンク --}}
                {!! link_to_route('signup.get', 'Sign up now!', [], ['class' => 'btn btn-lg btn-primary']) !!}
            </div>
        </div>
    @endif
@endsection