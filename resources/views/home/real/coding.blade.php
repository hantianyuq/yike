
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>
        实战课程_慕课网</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <meta name="renderer" content="webkit">
    <meta property="qc:admins" content="77103107776157736375" />
    <meta property="wb:webmaster" content="c4f857219bfae3cb" />
    <meta http-equiv="Access-Control-Allow-Origin" content="*" />
    <meta name="keywords" content="慕课网,实战课程,慕课实战,MOOC实战,移动实战,php实战,web前端实战,html5实战课程,java实战,python实战" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="慕课网实战课程结合视频快捷方便的体验,并与视频同步学习,边编程边看视频" />

    <link rel="stylesheet" href="{{asset('home')}}/Content/moco.min.css" type="text/css" />
    <script type="text/javascript" src="{{asset('home')}}/Scripts/jquery.stellar.min.js"></script>
    <script src="{{asset('home')}}/Scripts/ssologin.js"></script>
    <script type="text/javascript" src="{{asset('home')}}/Scripts/common.js"></script>
    <script src="{{asset('admin')}}/js/jquery.min.js?v=2.1.4"></script>
    <link rel="stylesheet" href="{{asset('home')}}/Content/style.css" type="text/css" media="screen">
    <style type="text/css">
        .moco-modal-info {
            font-size: 14px;
            line-height: 20px;
        }
    </style>



    <script type="text/javascript">
        var OP_CONFIG={"module":"index","page":"index"};
        OP_CONFIG.isLogin = 0;
        var isLogin = 0;
        var _msg_unread = 0;
        var _not_unread = 0;
        var _cartFlag = 0;
        var seajsTimestamp="v=20170201916";
    </script>



    <link rel="stylesheet" href="{{asset('home')}}/Content/c588d3b17a134fcdb6883d84f9681c48.css" type="text/css" />
</head>
<body >

@include("home.layouts.header")
<!-- 顶部banner轮播 -->
<div class="container">
    <div style="position: relative;" class="slideshow grid_12">
        <div class="holder" style="">
            <!-- 主体部分 -->
            <div id="wowslider-container">
                <div class="ws_images">
                    <ul>
                        @foreach($turns as $key => $value)
                        <li>
                            <a href="#overview">
                                <img src="{{asset('')}}{{$value['real_turns_path']}}" alt="123" title="" />
                            </a>
                        </li>
                       @endforeach
                    </ul>
                </div>
                <div class="ws_bullets">
                    <div>
                        @foreach($turns as $key => $value)
                        <a href="#">
                            <img src="{{asset('')}}{{$value['real_turns_path']}}" alt="CSS3 Slider" />
                        </a>
                        @endforeach
                    </div>
                </div>
            </div>
            <script type="text/javascript" src="{{asset('home')}}/Scripts/wowslider.js">
            </script>
            <script type="text/javascript" src="{{asset('home')}}/Scripts/script.js">
            </script>
            <!-- 主体部分. -->
        </div>
    </div>
</div>
<!-- 顶部轮播end -->
<!--课程列表-->
<?php  $arr['id']=-1;
$result=$result?:$arr ?>
<div class="w index-main">
    <div class="cato-nav-box clearfix">
        <div class="cato-nav-row">
            <ul class="">
                @if($result['id']==-1)
                    <li class="cato-nav-item on">
                        <a href="{{url('home/direction')}}?id=-1">全部</a>
                    </li>
                @else
                    <li class="cato-nav-item">
                        <a href="{{url('home/direction')}}?id=-1">全部</a>
                    </li>
                @endif
                @foreach($direction as $key => $value)
                    @if($result['id']==$value['direction_id'])
                        <li class="cato-nav-item on">
                            <a href="{{url('home/direction')}}?id=<?=$value['direction_id']?>" data-ct="">{{$value['direction_name']}}</a>
                        </li>
                    @else
                        <li class="cato-nav-item">
                            <a href="{{url('home/direction')}}?id=<?=$value['direction_id']?>" data-ct="">{{$value['direction_name']}}</a>
                        </li>
                    @endif
                @endforeach
            </ul>
        </div>
    </div>
    <script>

    </script>
    <div class="index-list-wrap">
        <div class="moco-course-list clearfix">
            @foreach($course as $key => $val)
                @if($val['real_course_pid']==$result['id'])
                    <div class="moco-course-wrap">
                        <a href="{{url('home/class')}}?real_course_id=<?=$val['real_course_id']?>">
                            <div class="moco-course-box">
                                <img  alt="{{$val['real_course_name']}}" src="{{asset('home').$val['real_course_thum']}}"  height="124" width="100%">
                                <div class="moco-course-intro">
                                    <h3>
                                        {{$val['real_course_name']}}
                                    </h3>
                                    <p>{{$val['real_course_intro']}}</p>
                                </div>
                                <div class="moco-course-bottom">
                                    <span class="l color-red">￥{{$val['real_course_price']}}</span>
                                    <span class="r">{{$val['real_course_people_number']}}人学习</span>
                                </div>
                            </div>
                        </a>
                    </div>
                @elseif($result['id']==-1)
                    <div class="moco-course-wrap">
                        <a href="{{url('home/class')}}?real_course_id=<?=$val['real_course_id']?>">
                            <div class="moco-course-box">
                                <img  alt="{{$val['real_course_name']}}" src="{{asset('home').$val['real_course_thum']}}"  height="124" width="100%">
                                <div class="moco-course-intro">
                                    <h3>
                                        {{$val['real_course_name']}}
                                    </h3>
                                    <p>{{$val['real_course_intro']}}</p>
                                </div>
                                <div class="moco-course-bottom">
                                    <span class="l color-red">￥{{$val['real_course_price']}}</span>
                                    <span class="r">{{$val['real_course_people_number']}}人学习</span>
                                </div>
                            </div>
                        </a>
                    </div>
                    @endif
                    @endforeach


            <!--<div class="non-open">
                <div class="waiting-icon">
                    <i class="sz-hourglass_empty"></i>
                </div>
                <h2>更多实战课程已上路</h2>
                <p>敬请期待</p>
            </div>-->
        </div>
    </div>
    <div class="recom-box clearfix">
        <div class="r right-pic js-play">
            <img src="{{asset('home')}}/Picture/recom2.png" />
        </div>
        <a href="/product" target="_blank" class="r"><img src="{{asset('home')}}/Picture/recom1.png" /></a>

    </div>
</div>
<!-- 课程列表end -->
<!--老师介绍-->
<div class="index-teacher home-slideshow" data-stellar-background-ratio="0">
    <div class="w index-main">
        <div class="index-teacher-title">
            <h2>配得上大牛称号的讲师来教你</h2>
            <p>实战课讲师均来自阿里、百度、腾讯、京东、小米等一线互联网公司，<br/>具有多年技术积淀及开发经验，手把手带你做真实项目，让你告别零项目经验。</p>
        </div>
        <ul class="star-item">
            <li>
                <span class="teacher-pic" style="background:#fff url({{asset('home')}}/Images/583fbd5d000116fe01400140-200-200.jpg) no-repeat center center;background-size:100% 100%;"></span>
                <div class="star-info">
                    <h3>七月在夏天</h3>
                    <p>神秘讲师“七月”</p>
                    <span>作为微信小程序第一波开发者，他受邀编写小程序开发书籍，不久就会出版。八年研发及团队管理经验，做过程序员、当过项目经理、技术总监、CTO的开发者，他喜欢写代码带来成就感。</span>
                    <div class="start-course">
                        <a href="/class/75.html" title="微信小程序入门与实战  常用组件 API 开发技巧 项目实战">微信小程序入门与实战  常用组件 API 开发技巧 项目实战</a>

                    </div>
                </div>
            </li>
            <li>
                <span class="teacher-pic" style="background:#fff url({{asset('home')}}/Images/58639ce20001fce901510152-200-200.jpg) no-repeat center center;background-size:100% 100%;"></span>
                <div class="star-info">
                    <h3>__bobby</h3>
                    <p>django专家</p>
					<span>具有多年django开发的经验， 一直致力于通过django完成web全栈开发。
现任创业公司的CTO，无论后台开发、前端开发，还是移动端开发，一直致力于通过django和前端打造高效的全端开发技术栈。</span>
                    <div class="start-course">
                        <a href="/class/78.html" title="强力django+杀手级xadmin  打造上线标准的在线教育平台">强力django+杀手级xadmin  打造上线标准的在线教育平台</a>

                    </div>
                </div>
            </li>
            <li>
                <span class="teacher-pic" style="background:#fff url({{asset('home')}}/Images/58a41bf30001060d01400140-200-200.jpg) no-repeat center center;background-size:100% 100%;"></span>
                <div class="star-info">
                    <h3>任志强</h3>
                    <p>Android高级工程师</p>
					<span>多年来一直从事移动互联网开发，现就职于优酷，曾负责旅行箱app、优酷app、优酷广告SDK模块开发，现负责优酷与闲鱼、虾 米等多个公司对接广告SDK，从小白一步步成长为技术大牛，在实践中积累了丰富的跨团队开发经验
</span>
                </div>
            </li>
            <li>
                <span class="teacher-pic" style="background:#fff url({{asset('home')}}/Images/58a421400001a51601400140-200-200.jpg) no-repeat center center;background-size:100% 100%;"></span>
                <div class="star-info">
                    <h3>亚里士朱德</h3>
                    <p>资深前端工程师</p>
                    <span>现任创业公司资深前端工程师，负责前端框架搭建和开发。多年来一直从事B/S系统的开发工作，从jsp全栈到js全栈，从服务端到PC浏览器端再到移动端微信，从定制化开发到前端架构，一路成长踩坑无数，积累了丰富的前后端开发经验，业余时间热衷于技术分享，是《开发者头条》top10专栏作者，个人专栏订阅人数20k+</span>
                    <div class="start-course">
                        <a href="/class/80.html" title="AngularJS仿拉勾网WebApp  开发移动端单页应用">AngularJS仿拉勾网WebApp  开发移动端单页应用</a>

                    </div>
                </div>
            </li>
            <li>
                <span class="teacher-pic" style="background:#fff url({{asset('home')}}/Images/57ea56af00010c3601400140-200-200.jpg) no-repeat center center;background-size:100% 100%;"></span>
                <div class="star-info">
                    <h3>Lyn</h3>
                    <p>百度前端工程师</p>
                    <span>追求代码界面的可扩展性、性能、设计和出色的用户体验，对代码复用、组件化有深入研究，是新技术追求者、代码极客、慕课网明星讲师。</span>
                    <div class="start-course">
                        <a href="/class/15.html" title="组件方式开发 Web App全站 ">组件方式开发 Web App全站 </a>

                    </div>
                </div>
            </li>
            <li>
                <span class="teacher-pic" style="background:#fff url({{asset('home')}}/Images/57ea56bd0001f6cb01400140-200-200.jpg) no-repeat center center;background-size:100% 100%;"></span>
                <div class="star-info">
                    <h3>远人</h3>
                    <p>前端架构师</p>
                    <span>国内最早一批HTML5实践者，先后就职于腾讯、人人网、小米、美团。具有丰富的海量服务前端开发经验，在慕课网拥有近20万学员，是学生眼中的明星讲师。</span>
                    <div class="start-course">
                        <a href="/class/13.html" title="webApp书城整站开发">webApp书城整站开发</a>

                    </div>
                </div>
            </li>
            <li>
                <span class="teacher-pic" style="background:#fff url({{asset('home')}}/Images/57ea56cb0001849501400140-200-200.jpg) no-repeat center center;background-size:100% 100%;"></span>
                <div class="star-info">
                    <h3>Scott</h3>
                    <p>nodejs技术专家</p>
                    <span>是国内最早接触 Node.js 的工程师，也是最早用 Node.js 做开发的工程师之一，拥有大量 Node.js 全站开发经验，是新技术的追求者和传播者，对于课程他认真细致，有着近乎完美的追求。</span>
                    <div class="start-course">
                        <a href="/class/56.html" title="React Native贯穿全栈开发App">React Native贯穿全栈开发App</a>
                        <a href="/class/38.html" title="Node.js七天搞定微信公众号">Node.js七天搞定微信公众号</a>

                    </div>
                </div>
            </li>
            <li>
                <span class="teacher-pic" style="background:#fff url({{asset('home')}}/Images/57ea56d4000174ae01400140-200-200.jpg) no-repeat center center;background-size:100% 100%;"></span>
                <div class="star-info">
                    <h3>singwa</h3>
                    <p>PHP开发工程师</p>
                    <span>拥有丰富的大数据、高并发处理、大型网站架构经验。曾在新浪视频负责PHP开发，CCTV6电影网项目经理，现在某大型知名互联网公司负责大数据流的开发。讲课风格激情澎湃，认真负责。</span>
                    <div class="start-course">
                        <a href="/class/48.html" title="前端后台ThinkPHP开发整站">前端后台ThinkPHP开发整站</a>

                    </div>
                </div>
            </li>
            <li>
                <span class="teacher-pic" style="background:#fff url({{asset('home')}}/Images/57f86da20001310801400140-200-200.jpg) no-repeat center center;background-size:100% 100%;"></span>
                <div class="star-info">
                    <h3>360李捷</h3>
                    <p>PHP高级工程师</p>
                    <span>85后，6年项目开发经验，作为一名程序员的“老师”，他拥有深厚的教学功底。工程师和老师的双重身份，让他更理解学生的痛点，他的课程不仅直击要害，而且简洁易懂，将实践和理论完美结合。</span>
                    <div class="start-course">
                        <a href="/class/57.html" title="Yii2.0打造完整电商平台">Yii2.0打造完整电商平台</a>

                    </div>
                </div>
            </li>
            <li>
                <span class="teacher-pic" style="background:#fff url({{asset('home')}}/Images/57f887c40001341b01400140-200-200.jpg) no-repeat center center;background-size:100% 100%;"></span>
                <div class="star-info">
                    <h3>程序员硕</h3>
                    <p>资深开发工程师/架构师</p>
                    <span>曾就职于全球领先的半导体公司Freescale、清华大学信研院等知名企业及研究机构。是国内著名开源项目skyeye中Python架构的贡献者。具有多年开发及教学双重经验，精通多种语言。</span>
                    <div class="start-course">
                        <a href="/class/62.html" title="Python高级编程技巧实战">Python高级编程技巧实战</a>

                    </div>
                </div>
            </li>
            <li>
                <span class="teacher-pic" style="background:#fff url({{asset('home')}}/Images/57f8888d0001a9b401400140-200-200.jpg) no-repeat center center;background-size:100% 100%;"></span>
                <div class="star-info">
                    <h3>ParryKK</h3>
                    <p>前阿里前端工程师</p>
                    <span>前阿里前端工程师，先后创立饭妈妈、咕咕监控。微软技术社区精英，具有多年实战项目开发与管理经验，从前端到全栈，再到移动端，在追求技术的道路上，他更是发现了Ionic这样的跨平台开发利器，并将其运用的出神入化。</span>
                    <div class="start-course">
                        <a href="/class/83.html" title="React.js入门与实战   开发适配PC端及移动端新闻头条平台">React.js入门与实战   开发适配PC端及移动端新闻头条平台</a>
                        <a href="/class/51.html" title="飞速上手的跨平台App开发">飞速上手的跨平台App开发</a>

                    </div>
                </div>
            </li>
            <li>
                <span class="teacher-pic" style="background:#fff url({{asset('home')}}/Images/57f889ab00018b7f01400140-200-200.jpg) no-repeat center center;background-size:100% 100%;"></span>
                <div class="star-info">
                    <h3>姜维_Wayne</h3>
                    <p>前端架构师</p>
                    <span>10余年互联网从业经验，拥有丰富的前后端开发、敏捷过程、项目管理经验，负责过多个产品和技术团队，一直奋斗在Full Stack道路上，爱技术，爱创业，爱一切新事物，玩过乐队，喜欢折腾！</span>
                    <div class="start-course">
                        <a href="/class/50.html" title="所向披靡的响应式开发">所向披靡的响应式开发</a>

                    </div>
                </div>
            </li>
            <li>
                <span class="teacher-pic" style="background:#fff url({{asset('home')}}/Images/57f88a090001e84201400140-200-200.jpg) no-repeat center center;background-size:100% 100%;"></span>
                <div class="star-info">
                    <h3>sqlercn</h3>
                    <p>数据库架构师</p>
                    <span>进行过千万级的数据处理，在大数据业务，高并发时数据优化等方面拥有丰富的经验。十几年数据库管理经验，曾就职于聚美优品、猫扑、TOM等多家大型互联网公司。</span>
                    <div class="start-course">
                        <a href="/class/79.html" title="高性能可扩展MySQL数据库设计及架构优化 电商项目">高性能可扩展MySQL数据库设计及架构优化 电商项目</a>
                        <a href="/class/49.html" title="扛得住的MySQL数据库架构">扛得住的MySQL数据库架构</a>

                    </div>
                </div>
            </li>
            <li>
                <span class="teacher-pic" style="background:#fff url({{asset('home')}}/Images/57f89af00001f71401400140-200-200.jpg) no-repeat center center;background-size:100% 100%;"></span>
                <div class="star-info">
                    <h3>表严肃</h3>
                    <p>全栈工程师</p>
                    <span>6年全栈开发经历，执迷于新技术研究，新技术的狂热追求者，乐于分享，传道。如果你想以最快的速度熟悉新技术，开阔思维，表严肃就是你近在咫尺的良师益友。</span>
                    <div class="start-course">
                        <a href="/class/72.html" title="6小时用 jQuery 实现小应用">6小时用 jQuery 实现小应用</a>
                        <a href="/class/65.html" title="Laravel和 AngularJS开发全栈知乎">Laravel和 AngularJS开发全栈知乎</a>

                    </div>
                </div>
            </li>
            <li>
                <span class="teacher-pic" style="background:#fff url({{asset('home')}}/Images/57f89b380001922601400140-200-200.jpg) no-repeat center center;background-size:100% 100%;"></span>
                <div class="star-info">
                    <h3>vczero_</h3>
                    <p> 现阿里技术专家</p>
                    <span>拥有多年的前端node·js开发和架构经验，曾在高德地图、携程等大企业就职，做过基础技术架构，带过研发团队。同时对React Native有很深的理解，是《React Native入门与实战》的作者，还是infoQ、OSC等会议讲师。</span>
                    <div class="start-course">
                        <a href="/class/69.html" title="React Native快速开发 厕所在哪App LBS定位 框架封装">React Native快速开发 厕所在哪App LBS定位 框架封装</a>

                    </div>
                </div>
            </li>
            <li>
                <span class="teacher-pic" style="background:#fff url({{asset('home')}}/Images/580f1686000113dd01400140-200-200.jpg) no-repeat center center;background-size:100% 100%;"></span>
                <div class="star-info">
                    <h3>liuyubobobo</h3>
                    <p>全栈工程师</p>
					<span>他是ACM实力得主，曾获ACM省级金奖、亚洲区铜奖。在开发领域卓有建树，对产品设计、前后端、智能算法等领域均有接触，曾制作近20款个人独立App，并全部成功上架。授课风趣清晰，有极强的感染力，享有用户极高的评价“波总出品，必属精品”！
</span>
                    <div class="start-course">
                        <a href="/class/71.html" title="算法与数据结构C++精解">算法与数据结构C++精解</a>

                    </div>
                </div>
            </li>

        </ul>
    </div>

    <div class="slide-draw"></div>
</div>
<!-- 老师介绍end -->
<!--用户评价轮播-->
<div class="index-classmate">
    <div class="w index-main">
        <h2>真实的项目开发经历，就是增加收入的凭证</h2>
        <p>无论职场工作还是求职路上，实战课所带给你的项目经验和前沿流行技术，让你比竞争者更有实际经验。</p>
    </div>
    <div class="scroll_div">
        <ul class="pic-content banner-box">
            <li>
                <img src="{{asset('home')}}/Picture/55f26e8c0001cd4a01000100-100-100.jpg">
                <div class="user-content">
                    <h3>qq_星尘丶_0</h3>
                    <div class="student-tag">来自<a href="/class/56.html" target="_blank">React Native贯穿全栈开发App</a></div>
                    <p>目前做的是java， 准备过完年换份前端工作、正式加入前端开发的大军之中。自学node 和 前端 有大半年了，一直没有实践的机会。这个课程看下来感觉对我的帮助蛮大的（逻辑清晰，通俗易懂，老师会分享一些自己的经验），能更好的理顺原来零散的知识点，本人对 es6 的写法非常的有爱，非常期待老师的 es6 升级版本课程的推出~  O(∩_∩)O。</p>
                </div>
            </li>
            <li>
                <img src="{{asset('home')}}/Picture/54585079000110f202200220-100-100.jpg">
                <div class="user-content">
                    <h3>一直被忽略</h3>
                    <div class="student-tag">来自<a href="/class/70.html" target="_blank">Android网络层架构设计实战  基于okhttp3</a></div>
                    <p>工作快两年了，期间有很大一部分的学习都是在慕课网上，个人来说热爱技术，提倡开源。衷心祝愿慕课越做越好。但就这期课程评论一下，这个课程感觉上还是不错的。有些知识nate老师内容上讲的很细，很全面，比自己去总结来的个全面些。感觉很受用，温故而知新，不解释。逻辑上也井井有条，循序渐进，很容易理解。同时我也希望nate老师以后的作品中能在多讲点高阶的编程技巧</p>
                </div>
            </li>
            <li>
                <img src="{{asset('home')}}/Picture/57ffce4b0001aadb07000700-100-100.jpg"/>
                <div class="user-content">
                    <h3>woider</h3>
                    <div class="student-tag">来自<a href="/class/48.html" target="_blank">前端后台ThinkPHP开发整站</a></div>
                    <p>这是我在慕课网买的第一个实战课程，只是一直没怎么认真看过。转眼间大半年过去了，才决定找些业余时间把这个项目认真做一做。不得不说这课程的内容真是非常丰富，每个功能和模块都介绍的相当细致，尤其是需求分析和异步处理对我影响很深。之后我按照自己的想法用Bootstrap3.2和ThinkPHP5.0重构了这个项目（项目地址：https://github.com/woider/ArticleCMS）在做这个项目的过程中踩了很多的坑也收获了很多新的知识，项目完成后更是满满的成就感。最后感谢慕课网发布的精品课程，感谢老师的细心指导，感谢同学们在GitHub上给我点赞。</p>
                </div>
            </li>
            <li>
                <img src="{{asset('home')}}/Picture/54584f7b0001559202200220-100-100.jpg"/>
                <div class="user-content">
                    <h3>爱读书的Iceberg</h3>
                    <div class="student-tag">来自<a href="/class/51.html" target="_blank">飞速上手的跨平台App开发</a></div>
                    <p>老师真的是很感谢你的课程，我们这些小白，提了那么多白痴问题，您还是耐心作答，态度点赞！
                        ionic2算是比较前瞻的前端技术了吧，8月份学习的，学习这个可以平滑的度过到angualrJs2的学习，es6，typeScript,自动化构建工具这些，对于想进阶的前端和开阔眼界的前端，真的是再好不过的课程了。以前的工资只是用Jquery+Bootstrap这些，现在重新换了一份工作，工资翻了翻，也进入了一个气氛比较好的团队，特此来感谢！</p>
                </div>
            </li>
            <li>
                <img src="{{asset('home')}}/Picture/533e4d850001c10602000200-100-100.jpg"/>
                <div class="user-content">
                    <h3>TonyGu</h3>
                    <div class="student-tag">来自<a href="/class/62.html" target="_blank">Python高级编程技巧实战</a></div>
                    <p>国外党来点个赞。非常喜欢老师的讲课方式，干净利落没有废话。目前只看了5个视频，但是很多之前不太清楚的概念都搞清了。感觉这50个视频之后应该对Python语言的掌握有很好的提升。大概是我听过的最好的中文技术课之一。另外问一下老师，基于Python的专项训练都会有哪些内容？大概什么时候能够上线？</p>
                </div>
            </li>
            <li>
                <img src="{{asset('home')}}/Picture/5457a1400001cf5101000100-100-100.jpg"/>
                <div class="user-content">
                    <h3>Franc_Ribery</h3>
                    <div class="student-tag">来自<a href="/class/15.html" target="_blank">组件方式开发 Web App全站 </a></div>
                    <p>特么的？太爽了。。感觉一级棒。。都要激动的说脏话了  这钱花的值。。真值。。学到东西好多。。希望老师继续出JS的教程。。一定还买。。。赞赞。赞赞。赞赞。赞赞。赞赞。赞赞。赞赞。赞赞</p>
                </div>
            </li>
            <li>
                <img src="{{asset('home')}}/Picture/533e4d510001c2ad02000200-100-100.jpg"/>
                <div class="user-content">
                    <h3>Muyy</h3>
                    <div class="student-tag">来自<a href="/class/38.html" target="_blank">Node.js七天搞定微信公众号</a></div>
                    <p>痛苦并快乐地跟完了老师的的建站1期+2期和微信公众号课程(从老师口中学到了好多额外的&quot;知识&quot;,嘻嘻)，到今天差不多1个月了，打心底佩服老师(看了老师的经历，已然成为我心中的榜样)，打算在老师源码基础上把界面美化一番，另外增加些模块功能。年底来杭州找实习，恳请老师给些实习以及方向性的意见。</p>
                </div>
            </li>
            <li>
                <img src="{{asset('home')}}/Picture/545861f00001be3402200220-100-100.jpg"/>
                <div class="user-content">
                    <h3>慕粉1357924680</h3>
                    <div class="student-tag">来自<a href="/class/53.html" target="_blank">Android专项测试-Python篇  10年测试经验讲师</a></div>
                    <p>一直就想系统的学习下Android专项测试和自动化测试，果断get,目前学完专项测试了，内容好实用，已经在工作上应用上了，老师讲的也很清楚，真是物超所值，也期待Java版的Android自动化测试课程！！！</p>
                </div>
            </li>

        </ul>
        <ul class="banner-dots"></ul>
        <a href="javascript:void(0)" tip="0" class="prev i_btn prev_L"></a>
        <a href="javascript:void(0)" tip="1" class="next i_btn next_R"></a>
    </div>
</div>
<!-- 用户评价end -->
<!-- 视频 -->
<div id="js-index-video" class="video-container">
    <div class="video-wrap" id="js-video-wrap">
        <div id="js-video"></div>
    </div>
    <div class="video-mask"></div>
    <div id="js-video-close" class="video-close sz-close"></div>
</div>
<!-- 视频end -->




<div id="footer">
    <div class="waper">
        <div class="footerwaper clearfix">
            <div class="followus r">
                <a class="followus-weixin" href="javascript:;"  target="_blank" title="微信">
                    <div class="flw-weixin-box"></div>
                </a>
                <a class="followus-weibo" href=""  target="_blank" title="新浪微博"></a>
                <a class="followus-qzone" href="" target="_blank" title="QQ空间"></a>
            </div>
            <div class="footer_intro l">
                <div class="footer_link">
                    <ul>
                        <li><a href="" target="_blank">网站首页</a></li>
                        <li><a href="" target="_blank" title="企业合作">企业合作</a></li>
                        <li><a href="" target="_blank">人才招聘</a></li>
                        <li> <a href="" target="_blank">联系我们</a></li>
                        <li> <a href="" target="_blank">讲师招募</a></li>
                        <li> <a href="" target="_blank">常见问题</a></li>
                        <li> <a href="" target="_blank">意见反馈</a></li>
                        <li><a href="" target="_blank">慕课大学</a></li>
                        <li> <a href="" target="_blank">友情链接</a></li>
                        <!-- <li><a href="http://www.imooc.com/about/us" target="_blank">关于我们</a></li> -->
                    </ul>
                </div>
                <p>Copyright © 2017 imooc.com All Rights Reserved | 京ICP备 13046642号-2</p>
            </div>
        </div>
    </div>
</div>


<div id="J_GotoTop" class="elevator">

    <a href="/user/feedback" class="elevator-msg"  target="_blank" >
        <i class="sz-feedback"></i>
        <span class="">意见反馈</span>
    </a>
    <a href="/user/faq" class="elevator-faq"  target="_blank" >
        <i class="sz-help_outline"></i>
        <span class="">常见问题</span>
    </a>
    <a href="" target="_blank" class="elevator-app" >
        <i class="sz-appdownload"></i>
        <span class="">APP下载</span>
        <div class="elevator-app-box"></div>
    </a>
    <a href="javascript:void(0)" class="elevator-weixin no-goto" id="js-elevator-weixin" >
        <i class="sz-weixigzh"></i>
        <span class="">官方微信</span>
        <div class="elevator-weixin-box"></div>
    </a>
    <a href="javascript:void(0)" class="elevator-top no-goto" style="display:none" id="backTop">
        <i class="sz-arrow-up"></i>
        <span class="">返回顶部</span>
    </a>
</div>

@include("home.layouts.signin");



<script type="text/javascript" src="{{asset('home')}}/Scripts/require.js"></script>
<script src='{{asset('home')}}/Scripts/jquery.min.js'></script>
<script src="{{asset('home')}}/Scripts/ssologin.js"></script>
<script type="text/javascript" src="{{asset('home')}}/Scripts/common.js"></script>
<script>
    requirejs.config({
        urlArgs: requirejsTimestamp,
        baseUrl: '/static/module/',
        skipDataMain: true,
        waitSeconds: 0,
        paths: {
            lib: '/static/lib',
            socketio: '/static/lib/socket.io/1.3.6/socket.io.min.js',
            store: '/static/lib/store/store.min.js',
            ueditor: '/static/lib/ueditor/ueditor.final.min.js',
            moco: '/static/moco/v1.0/dist/js/moco.min.js',
            scrollbar: '/static/lib/scrollbar/jquery.scrollbar.js',
            juicer: '/static/lib/juicer/juicer.min.js',
            ace: '/static/lib/ace/src-min-noconflict/ace.js',
            //ace: '/static/lib/ace/src/ace.js',
            pagination: '/static/lib/pagination/jquery.pagination.js',
            swfobject: '/static/lib/swfobject/2.2/swfobject.min.js',
            uploader: '/static/lib/webuploader/0.1.5/webuploader.js',

            jwplayer: '/static/lib/jwplayer/1.0.0/jwplayer.js',
            ide: '/static/lib/ide/dest/ide.min.js',
            autocomplete:'/static/lib/util/autocomplete.js',
            validate:'/static/lib/util/validate.js',
            placeholder:'/static/lib/util/placeholder.js',
            modalbutton:'/static/lib/util/modal.button.js',
            scrollbar: '/static/lib/scrollbar/jquery.scrollbar.js',
            SyntaxHighlighter:'/static/lib/ueditor/third-party/SyntaxHighlighter/shCore.js',
            socketio: '/static/lib/socket.io/1.3.6/socket.io.min.js',
            clipbord: '/static/lib/clipboard/dist/clipboard.min.js',
            jqueryValidate: '/static/lib/jquery-validate/jquery.validate.min.js'
        },
        shim: {
            'swfobject': {
                exports: 'swfobject'
            }
        }
    });
</script>


<div style="display: none">
    <script>
        var _hmt = _hmt || [];
        (function() {
            var hm = document.createElement("script");
            hm.src = "//hm.baidu.com/hm.js?c1c5f01e0fc4d75fd5cbb16f2e713d56";
            var s = document.getElementsByTagName("script")[0];
            s.parentNode.insertBefore(hm, s);
        })();
    </script>
</div>

</body>
</html>
dqw