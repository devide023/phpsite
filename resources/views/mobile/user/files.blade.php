@extends('mobile.layout')

@section('title','用户文件')

@section('navbar')
    <div class="navbar">
        <div class="navbar-inner">
            <div class="left">
                <a href="{{url('m/user/index')}}" class="link icon-only external">
                    <i class="icon icon-back"></i>
                </a>
            </div>
            <div class="center">用户文件</div>
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
                            @foreach($files as $file)
                                <li>
                                    <a href="#" class="item-link item-content">
                                        <div class="item-media"><i class="icon icon-f7"></i></div>
                                        <div class="item-inner">
                                            <div class="item-title">{{$file->filename}}</div>
                                            <div class="item-after">{{$file->id}}</div>
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
