<!DOCTYPE html>
<html lang="zh-CN">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{asset('homes')}}/img/asset-favicon.ico">
    <title>在线教育网</title>
    <link rel="stylesheet" href="{{asset('homes')}}/plugins/normalize-css/normalize.css" />
    <link rel="stylesheet" href="{{asset('homes')}}/plugins/bootstrap/dist/css/bootstrap.css" />
    <link rel="stylesheet" href="{{asset('homes')}}/css/page-learing-personal.css" />
</head>

<body>
    <!-- 页面头部 -->
    <!--头部导航-->
    <header>
        <div class=" learingHeader">
            <nav class="navbar container">
                <div class="navbar-left"><img src="{{asset('homes')}}/img/asset-logoIco.png" alt=""></div>
                <div class="navbar-left">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="travel.index.html" target="_blank">首页</a></li>
                        <li><a href="#">课程</a></li>
                        <li><a href="#">职业测评</a></li>
                        <li><a href="#">学习中心</a></li>
                    </ul>
                </div>
                <div class="navbar-left"><input type="text" class="input-search" placeholder="输入查询关键词"><input type="submit" class="search-buttom"></div>
                <div class="navbar-right"><a href="#">登录</a><a href="#">注册</a></div>
            </nav>
        </div>
    </header>
    <div class="personal-header" style="background-image: url({{asset('homes')}}/img/asset-temp1.jpg);">
        <div class="personal-info">
            <p>
                <h1>吴雪</h1>
            </p>
            <p>Web前端工程师 学习时长 48小时35分</p>
        </div>
        <!--<div class="container">-->
        <!--<div class="col-lg-2"><img src="{{asset('homes')}}/img/logoIco.png" alt=""></div>-->
        <!--<div class="col-lg-4 title text-left">学习中心</div>-->
        <!--<div class="col-lg-6 text-right"><input type="text" class="input-search" placeholder="输入查询关键词"><input type="submit" class="search-buttom"></div>-->
        <!--</div>-->
    </div>
    <!-- 页面 -->
    <div class="container" style="background: #fff;">
        <div class="personal-nav pull-left">
            <div class="nav nav-stacked text-left">
                <div class="my-ico"><img src="{{asset('homes')}}/img/asset-myimg.jpg" alt=""></div>
                <div class="item">
                    <li class="active"><a href="" class="glyphicon glyphicon-tower"> 我的课程<i class="pull-right">></i></a></li>
                    <li><a href="" class="glyphicon glyphicon-list-alt"> 全部课程<i class="pull-right">></i></a> </li>
                    <li><a href="" class="glyphicon glyphicon-cog"> 设置<i class="pull-right">></i></a></li>
                    <li><a href="" class="glyphicon glyphicon-log-out"> 退出<i class="pull-right">></i></a></li>
                </div>
            </div>
        </div>
        <div class="personal-content pull-right">
            <div class="personal-cont">
                <div class="top">
                    <div class="tit"><span>最近学习课程</span></div>
                    <div class="top-cont">
                        <div class="col-lg-8">
                            <div class="imgIco"><img src="{{asset('homes')}}/img/widget-timg.jpeg" width="50" height="50" alt=""></div>
                            <div class="title">继续学习 程序语言设计</div>
                            <div class="about">正在学习 使用对象 <span>结束日期: 2017.06.05</span></div>
                            <div class="rate">
                                <li class="active"></li>
                                <li></li>
                                <li></li>
                                <li></li><span>1/4 已完成部分</span></div>
                        </div>
                        <div class="col-lg-4 text-right">
                            <a href="#" class="btn btn-primary"> 继续学习</a>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="my-course">
                    <div class="tit"><span class="active hv-poin">我加入的课程</span><span class="nv-poin">我购买的课程</span></div>
                    <div class="cont">
                    @foreach($data as $v)
                        <div class="col-lg-6">
                            <div class="item">
                                <div class="imgIco"><img src="{{asset('homes')}}/img/widget-timg.jpeg" width="50" height="50" alt=""></div>
                                <div class="title">{{$v->live_course}}</div>
                                <div class="about">{{$v->live_desc}}</div>
                                <div class="time">开始日期:{{date('Y-m-d H:i:s',$v->start_time)}}<br/>结束日期:{{date('Y-m-d H:i:s',$v->end_time)}}</div>
                                <div class="rate">
                                    <li class="active"></li>
                                    <li></li>
                                    <li></li>
                                    <li></li><span>1/4 已完成部分</span></div>
                                <div class="text-center">
                                @if($v->access==1)
                                <a href="{{url('person/livecourse/play/'.$v->stream_id)}}" class="btn btn-primary">进入直播间</a>
                                @else
                                 <a href="#" disabled class="btn btn-primary">未开始或已结束</a>
                                @endif
                                </div>
                            </div>
                        </div>
                       
                    @endforeach

                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="my-collection">
                    <div class="tit"><span>我收藏的课程</span></div>
                    <div class="cont">
                        <div class="col-lg-6">
                            <div class="item">
                                <div class="title">iOS应用开发入门</div>
                                <div class="about">正在学习 使用对象</div>
                                <div class="time">结束日期: 2017.06.05</div>
                                <div class="rate">
                                    <li class="active"></li>
                                    <li></li>
                                    <li></li>
                                    <li></li><span>1/4 已完成部分</span></div>
                                <div class="text-center"><a href="#" class="btn btn-primary">继续学习</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="go-problem-feedback">
                帮助和常见问题 <a href="#" class="">问题反馈</a>
            </div>
        </div>
    </div>
    <!-- 页面 css js -->
    <script type="text/javascript" src="{{asset('homes')}}/plugins/jquery/dist/jquery.js"></script>
    <script type="text/javascript" src="{{asset('homes')}}/plugins/bootstrap/dist/js/bootstrap.js"></script>
    <script>
        $(function() {
            $(window).scroll(function() {
                console.log($(this)[0].scrollY);
                if ($(this)[0].scrollY > 155) {
                    console.log(1);
                    $('.personal-nav').css({
                        'position': 'fixed',
                        'top': 10
                    });
                    $('.personal-nav img').css({
                        'width': '140',
                        'height': '140'
                    });
                } else if ($(this)[0].scrollY <= 155) {
                    console.log(2)
                    $('.personal-nav').css({
                        'position': 'relative',
                        'top': -160
                    });
                    $('.personal-nav img').css({
                        'width': '180',
                        'height': '180'
                    });
                };
            })
        })
    </script>
</body>