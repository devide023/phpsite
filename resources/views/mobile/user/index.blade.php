@extends('mobile.layout')

@section('title','用户管理')

@section('navbar')
    <div class="navbar">
        <div class="navbar-inner">
            <div class="center">用户列表</div>
        </div>
    </div>
@endsection


@section('page')
    <div class="pages navbar-through toolbar-through">
        <div class="page" data-page="home">
            <div class="page-content">
                <div class="content-block">
                    <div class="list-block">
                        <ul>
                            @foreach($users as $user)
                                <li>
                                    <a href="{{url('m/user_files/'.$user->id)}}"
                                       class="item-link item-content external">
                                        <div class="item-media"><i class="icon icon-f7"></i></div>
                                        <div class="item-inner">
                                            <div class="item-title">{{$user->username}}</div>
                                            <div class="item-after">username</div>
                                        </div>
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection










