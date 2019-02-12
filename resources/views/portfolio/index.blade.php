@extends('layouts.app')
@section('content')

<div class="row" style="margin: 0 auto; background-image:url('/image/port-title.jpg'); height:585px;">
    <div class="container">
        <div class="row ptpage" >
            <div class="col-7" style="padding-top:55px;">
                <span class="title-font ">
                    Enjoys MAKE<span class="blue">IT</span>'s<br>
                    Portfolio
                </span>
            </div>        
        </div>
        <div class="row ptpage" style="margin-top:27px;">
            <span class="subtitle-font">
                MAKEIT는 클라이언트와의 인연을 소중히하고<br>
                만족시킬 준비가 되어있습니다
            </span>
        </div>
    </div>
</div>
<div class="container reldiv">
    <div class="row" style="margin-top:50px;">
        
        <img src="/image/sublogo.png" alt="">
        <div class="reldiv">
            <strong class="port-title">포트폴리오</strong>
        </div>
    </div>
    <div class="row" style="margin:30px 0 30px 0;">
        <div class="col-5">
        <ul class="port-li">
            <li class="btn fil-cat" data-rel="all">All</li>
            <li class="btn fil-cat" data-rel="app">App</li>
            <li class="btn fil-cat" data-rel="web">Web</li>
            <li class="btn fil-cat" data-rel="response">Responsive</li>
        </ul>
    </div>
    </div>

    
    
    <div id="portfolio" class="row " >
        @foreach ($portfolio as $item)
        <div>
            <div class="tile col-2 port-box scale-anm {{ $item['category'] }} all" style="background: url('{{$item['main_image'] }}')">
                <div class="port-hover">
                    <p class="title-p">{{ $item['title'] }}</p>
                    
                    <p class="link-p">이동</p>
                    
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
<div class="row part" style="height:502px;">
    <div class="container">
        <div class="row" style="padding:35px 0 55px 0; ">
            <img src="/image/sublogo.png" alt="">
            
            <div class="reldiv" style="">
                <span class="port-title">와 인연이 닿은 파트너</span>
            </div>
        </div>
        <div class="row">
            <img src="/image/part-group.png">
        </div>
    </div>
</div>
<div id="portpop">
        팝업<br>
        <br><br><br><br><br>
        테스트<br><br><br><br>
        테스트<br><br><br><br>
        테스트<br><br><br><br>
        테스트<br><br><br><br>
        테스트<br><br><br><br>
        테스트<br><br><br><br>
       
    </div>
@include('main.6')
@endsection