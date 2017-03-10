
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>{{$class_course['real_course_name']}}用户评价</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <meta name="renderer" content="webkit">
    <meta property="qc:admins" content="77103107776157736375" />
    <meta property="wb:webmaster" content="c4f857219bfae3cb" />
    <meta http-equiv="Access-Control-Allow-Origin" content="*" />
    <meta name="keywords" content="{{$class_course['real_course_name']}}" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="{{$class_course['real_course_intro']}}" />

    <link rel="stylesheet" href="{{asset('home')}}/Content/moco.min.css" type="text/css" />
    <script type="text/javascript" src="{{asset('home')}}/Scripts/jquery.stellar.min.js"></script>
    <script src="{{asset('home')}}/Scripts/ssologin.js"></script>
    <script type="text/javascript" src="{{asset('home')}}/Scripts/common.js"></script>
    <script src="{{asset('admin')}}/js/jquery.min.js?v=2.1.4"></script>
    <style type="text/css">
        .moco-modal-info {
            font-size: 14px;
            line-height: 20px;
        }
    </style>

    <script type="text/javascript">
        var OP_CONFIG={"module":"class","page":"evaluation"};
        OP_CONFIG.isLogin = 0;
        var isLogin = 0;
        var _msg_unread = 0;
        var _not_unread = 0;
        var _cartFlag = 0;
        var seajsTimestamp="v=20170227522";
    </script>



    <link rel="stylesheet" href="{{asset('home')}}/Content/9a2c07a806f74b5ca5371f8344f17cac.css" type="text/css" />
</head>
<body >

@include('home.layouts.header')


<div class="course-class-infos pale-color">
    <div class="w pr">
        <div class="path">
            <a href="/">实战</a>
            <i class="path-split">\</i><span>{{$class_course['real_course_name']}}</span>
        </div>

        <div class="extra">
            <div class="share-action l bdsharebuttonbox bdshare-button-style0-16" data-bd-bind="1439263858135">
                <a href="javascript:;" class="share wx js-share sz-weixin" data-cmd="weixin" title="分享到微信">
                </a>
                <a href="javascript:;" class="share qq js-share sz-qq" data-cmd="qzone" title="分享到QQ空间">
                </a>

                <a href="javascript:;" class="share sina js-share sz-weibo" data-cmd="tsina" title="分享到新浪微博">
                </a>
            </div>
        </div>

        <div class='info-warp tc'>



            <div class='hide'>
                <h1 class="l">{{$class_course['real_course_name']}}</h1>
            </div>


            <div class='tc'>
                <div class="statics clearfix">
                    <div class="static-item first">
                        <span class="meta">难度</span>
                        <span class="meta-value"><strong>{{$class_course['real_course_level']}}</strong></span>
                    </div>
                    <div class="static-item static-time">
                        <span class="meta">时长</span>
                        <span class="meta-value"><strong>{{$class_course['real_course_time']}}小时</strong></span>
                        <em></em>
                    </div>
                    <div class="static-item">
                        <span class="meta">学习人数</span>
                        <span class="meta-value"><strong>{{$class_course['real_course_people_number']}}</strong></span>
                        <em></em>
                    </div>
                    <div class="static-item">
                        <span class="meta">评分</span>
                        <span class="meta-value"><strong>{{$class_course['real_course_grade']}}分</strong></span>

                        <em></em>
                    </div>
                </div>
            </div>

            <div class="price-box">
				<span class="num clearfix">


					<span class="discount-price">
						<span class="baseline baseliner0">
						<span class="new-y">&yen;</span>
						<span class="cur-price"><b>{{$class_course['real_course_price']}}</b></span>
						</span>
					</span>


									</span>
            </div>

            <div class="clearfix btnwarp">
                <a href="javascript:;" class="js-buy-trigger buy-class-btn class-btn1" data-cid="84" data-pay="0" id="buy-trigger">
                    <span>立即购买</span>
                </a>

                <a href='javascript:;' class='js-addcart addcart' data-cid='57' data-type='1'>
                    <span class='line'></span>
                    <i class='sz-add-shopping-cart'>加入购物车</i>
                </a>

                <div class="preview-tip">
                </div>
            </div>
        </div>
    </div>
    <script>
        $(".class-btn1").click(function(){
            var id = '{{$course_id}}';
            var url = '{{url('home/pay/comfirm_order')}}';
            location.href=url+'?course_id='+id;
        })
    </script>
    <div class="info-bg" id="js-info-bg">
        <div class="cover-img-wrap" style="background-image:url({{asset('home')}}{{$class_course['real_course_picture']}})"></div>
    </div>
</div>

<div class='course-infos-t'>
    <div id='Anchor'></div>
    <div class="comp-tab-t js-comp-tab">
        <ul class='clearfix'>
            <li class="comp-tab-item-first comp-tab-item ">
                <a href="{{url('home/class')}}?real_course_id={{$course_id}}">课程介绍</a>
            </li>
            <li class="comp-tab-item ">
                <a href="{{url('home/class/chapter')}}?real_course_id={{$course_id}}">课程章节</a>
            </li>
            <li class="comp-tab-item active">
                <a href="{{url('home/class/commit')}}?real_course_id={{$course_id}}">用户评价</a>
                <span>50</span>
            </li>
        </ul>
    </div>

    <div class='js-fixed course-fixed-nav hide'>
        <h3 class='fixed-course-name' title='{{$class_course['real_course_name']}}'>{{$class_course['real_course_name']}}</h3>

        <ul class='fixed-nav clearfix'>
            <li class="fixed-nav-item-first fixed-nav-item ml0 ">
                <a href="{{asset('class')}}?real_course_id={{$course_id}}">课程介绍</a>
            </li>
            <li class="fixed-nav-item ">
                <a href="/class/chapter/57.html#Anchor">课程章节</a>
            </li>
            <li class="fixed-nav-item active">
                <a href="/class/57.html#Prchor">课程咨询</a>
                <span>30</span>
            </li>
            <li class="fixed-nav-item ">
                <a href="{{url('home/class/commit')}}?real_course_id={{$course_id}}">用户评价</a>
                <span>50</span>
            </li>

        </ul>

        <div class="goumai">
            <a href="javascript:;" class="js-buy-trigger fixed-nav-btn fixed-btn1" data-cid="57" data-pay="0" id="buy-trigger">
                <span>立即购买</span>
            </a>

            <a href='javascript:;' class='js-addcart addcart' data-cid='57' data-type='1'>
                <span class='line'></span>
                <i class='sz-add-shopping-cart'></i>
            </a>

        </div>
    </div>


    <div class="infolayout clearfix">

        <div class="w">
            <div class="comp-tabs-pannel class-tab-pannel course-cmt">
                <div class="cmt-bar clearfix">
                    <div class="score l">
                        <span class="hd">综合评分：</span>
    			<span class="num">
				10.0</span>
    			<span class="stars">
									 																		<i class="sz-star on"></i>
												<i class="sz-star on"></i>
												<i class="sz-star on"></i>
												<i class="sz-star on"></i>
												<i class="sz-star on"></i>
                    <!--<i class="sz-star on"></i><i class="sz-star on"></i><i class="sz-star on"></i><i class="sz-star on"></i><i class="sz-star on"></i>-->
    			</span>

                        <span class="scoreitem">内容实用：10.0</span>
                        <span class="scoreitem">通俗易懂：10.0</span>
                        <span class="scoreitem">逻辑清晰：10.0</span>
                    </div>
                    <div class="studentnum r">
                        <span><b>42</b> 位同学参与评价</span>
                    </div>
                </div>
                <div class="cmt-wrap">
                    <ul class="cmt-list">
                        <li class="cmt-post" data-commentid="1840">
                            <div class="inner">
                                <div class="hd">
                                    <a href="javascript:void();"><img src="{{asset('home')}}/Picture/533e4c1500010baf02200220-100-100.jpg" alt="cuicuinever" class="pic"></a>
                                    <a href="javascript:void();" class="name">cuicuinever</a>
                                    <div class="stars">
                                        <i class="sz-star on"></i>
                                        <i class="sz-star on"></i>
                                        <i class="sz-star on"></i>
                                        <i class="sz-star on"></i>
                                        <i class="sz-star on"></i>

                                    </div>
                                </div>
                                <p class="cmt-txt">真的是不错的教程，之前也开发过几个项目，在开发过程中使用第三方的框架比较多，对框架的实现原理了解比较少，尤其是对封装自己的okhttp通信工具涉及到的思想，对以后的开发自己框架有很大的好处；我觉得在代码封装这块没有太多的优化，代码有一定的冗余，还有就是实现某些功能的时候可能有多种方案实现，可以选择几种分析一下他们的适用场景然后在使用，如fragment的切换项目中使用fragment显示和隐藏实现的，当前比较流行的是ViewPager+fragment实现；希望老师以后的课程中可以捎带着讲讲。</p>
                                <div class="ft clearfix">
                                    <span>时间：5天前</span>
                                </div>

                                <div class="treply">
                                    <span>[讲师回复]</span>：<label class="js-reply-value">感谢同学的评价，其实使用viewpager切换是更简单的一种方式，而且慕课网上已经有许多类似的课程，所以没有在咱们的实战课中体现，当然如果学员想听我讲，那是完全可以的，嘿嘿。</label>
                                </div>
                            </div>
                        </li>
                        <li class="cmt-post" data-commentid="1839">
                            <div class="inner">
                                <div class="hd">
                                    <a href="javascript:void();"><img src="{{asset('home')}}/Picture/545862fe00017c2602200220-100-100.jpg" alt="没有朋友的攻城狮" class="pic"></a>
                                    <a href="javascript:void();" class="name">没有朋友的攻城狮</a>
                                    <div class="stars">
                                        <i class="sz-star on"></i>
                                        <i class="sz-star on"></i>
                                        <i class="sz-star on"></i>
                                        <i class="sz-star on"></i>
                                        <i class="sz-star on"></i>

                                    </div>
                                </div>
                                <p class="cmt-txt">作为一个即将工作的初学者，课程让我对android有了新的认识，满满的干货，其实作为一个初学者很多地方不是很明白，甚至很多东西压根就没有用过，有的也是初次接触，但更重要的是老师的编程思想，当学会了实用OKHttp更是兴奋的不行。群里很活跃只要有问题就有吊大的给回答，感谢老师，期待下一次实战课程。</p>
                                <div class="ft clearfix">
                                    <span>时间：5天前</span>
                                </div>

                                <div class="treply">
                                    <span>[讲师回复]</span>：<label class="js-reply-value">多谢同学支持，老师下一门课程，你一定要支持喔，嘿嘿。</label>
                                </div>
                            </div>
                        </li>
                        <li class="cmt-post" data-commentid="1822">
                            <div class="inner">
                                <div class="hd">
                                    <a href="javascript:void();"><img src="{{asset('home')}}/Picture/576b568b000153f501000100-100-100.jpg" alt="尛飛俠" class="pic"></a>
                                    <a href="javascript:void();" class="name">尛飛俠</a>
                                    <div class="stars">
                                        <i class="sz-star on"></i>
                                        <i class="sz-star on"></i>
                                        <i class="sz-star on"></i>
                                        <i class="sz-star on"></i>
                                        <i class="sz-star on"></i>

                                    </div>
                                </div>
                                <p class="cmt-txt">非常实用的一门课程，学到了很多实际开发经验以及设计思想等，封装的各个组件也可以在其他项目中直接复用，绝对的干货，给老师108个赞，强烈推荐！期待 qndroid 老师的下一门课程！</p>
                                <div class="ft clearfix">
                                    <span>时间：6天前</span>
                                </div>

                                <div class="treply">
                                    <span>[讲师回复]</span>：<label class="js-reply-value">多谢同学的支持，能为你们带来收获我很高兴，学习中有任何问题都可以及时的群里提出来，我会及时的为大家解答。</label>
                                </div>
                            </div>
                        </li>
                        <li class="cmt-post" data-commentid="1725">
                            <div class="inner">
                                <div class="hd">
                                    <a href="javascript:void();"><img src="{{asset('home')}}/Picture/54584dad0001dd7802200220-100-100.jpg" alt="小豪丶" class="pic"></a>
                                    <a href="javascript:void();" class="name">小豪丶</a>
                                    <div class="stars">
                                        <i class="sz-star on"></i>
                                        <i class="sz-star on"></i>
                                        <i class="sz-star on"></i>
                                        <i class="sz-star on"></i>
                                        <i class="sz-star on"></i>

                                    </div>
                                </div>
                                <p class="cmt-txt">最近才购买的课程，刚把网络框架看完，觉得收获的挺多的 ，以前老是用现成的框架，如okgo，xuitils等，现在能自己封装一个网络框架，还是很有成就感的。关键老师开发思路很明确，每一步该干嘛都讲的很清楚，能很快的了解一个实际项目的开发流程，比我之前在网上找开源项目敲有效率多了，最后我只想说，老师真的很热情，很棒</p>
                                <div class="ft clearfix">
                                    <span>时间：2017-02-14 23:00:47</span>
                                </div>

                                <div class="treply">
                                    <span>[讲师回复]</span>：<label class="js-reply-value">多谢你的鼓励，能给你带来收获我很高兴，学习中有任何有疑问的地方都可以在群里向我提问，继续加油。</label>
                                </div>
                            </div>
                        </li>
                        <li class="cmt-post" data-commentid="1685">
                            <div class="inner">
                                <div class="hd">
                                    <a href="javascript:void();"><img src="{{asset('home')}}/Picture/55f414230001e95901000100-100-100.jpg" alt="醉程那YOUNG" class="pic"></a>
                                    <a href="javascript:void();" class="name">醉程那YOUNG</a>
                                    <div class="stars">
                                        <i class="sz-star on"></i>
                                        <i class="sz-star on"></i>
                                        <i class="sz-star on"></i>
                                        <i class="sz-star on"></i>
                                        <i class="sz-star on"></i>

                                    </div>
                                </div>
                                <p class="cmt-txt">太及时了，真的都是干货，不仅学会了搭建项目框架，还收获了很多项目实战经验，以后面试绝对有底气！</p>
                                <div class="ft clearfix">
                                    <span>时间：2017-02-12 13:05:43</span>
                                </div>

                                <div class="treply">
                                    <span>[讲师回复]</span>：<label class="js-reply-value">嘿嘿，学完以后面试对你来说绝对是小case，如果想了解面试相关的经验，技巧也可以QQ向老师咨询的。</label>
                                </div>
                            </div>
                        </li>
                        <li class="cmt-post" data-commentid="1830">
                            <div class="inner">
                                <div class="hd">
                                    <a href="javascript:void();"><img src="{{asset('home')}}/Picture/560a19c30001572801000100-100-100.jpg" alt="Wanyummy" class="pic"></a>
                                    <a href="javascript:void();" class="name">Wanyummy</a>
                                    <div class="stars">
                                        <i class="sz-star on"></i>
                                        <i class="sz-star on"></i>
                                        <i class="sz-star on"></i>
                                        <i class="sz-star on"></i>
                                        <i class="sz-star on"></i>

                                    </div>
                                </div>
                                <p class="cmt-txt">老师真的很好！在群里经常帮助大家  ，课程让我对安卓封装有了新的认识， 我学了好几门实战的，这么课程是我觉得最值得。 非常感谢老师能出这门课程！ 加油 想进大公司！</p>
                                <div class="ft clearfix">
                                    <span>时间：6天前</span>
                                </div>

                                <div class="treply">
                                    <span>[讲师回复]</span>：<label class="js-reply-value">加油，学完以后，简历发我喔，嘿嘿。</label>
                                </div>
                            </div>
                        </li>
                        <li class="cmt-post" data-commentid="1828">
                            <div class="inner">
                                <div class="hd">
                                    <a href="javascript:void();"><img src="{{asset('home')}}/Picture/5458506b0001de5502200220-100-100.jpg" alt="南昌bighuan" class="pic"></a>
                                    <a href="javascript:void();" class="name">南昌bighuan</a>
                                    <div class="stars">
                                        <i class="sz-star on"></i>
                                        <i class="sz-star on"></i>
                                        <i class="sz-star on"></i>
                                        <i class="sz-star on"></i>
                                        <i class="sz-star on"></i>

                                    </div>
                                </div>
                                <p class="cmt-txt">满满的干货,技术点很多,值的大家学习,也能学到很多宝贵的经验,而这些经验必须要在实战中才能get到.有投资才会有回报,暑假肯定把这个项目写到简历里拿去实习.加油吧,南昌-bighuan!一定要学完,不然就亏大了</p>
                                <div class="ft clearfix">
                                    <span>时间：6天前</span>
                                </div>

                                <div class="treply">
                                    <span>[讲师回复]</span>：<label class="js-reply-value">嗯，花钱了就一定要学完，让投资有所值，学习中有什么问题第一时间跟我沟通，加油！</label>
                                </div>
                            </div>
                        </li>
                        <li class="cmt-post" data-commentid="1760">
                            <div class="inner">
                                <div class="hd">
                                    <a href="javascript:void();"><img src="{{asset('home')}}/Picture/58a86ecb0001b88404190419-100-100.jpg" alt="叶为正啊" class="pic"></a>
                                    <a href="javascript:void();" class="name">叶为正啊</a>
                                    <div class="stars">
                                        <i class="sz-star on"></i>
                                        <i class="sz-star on"></i>
                                        <i class="sz-star on"></i>
                                        <i class="sz-star on"></i>
                                        <i class="sz-star on"></i>

                                    </div>
                                </div>
                                <p class="cmt-txt">虽然只看了一部分，但已经感受到老师的魅力了，非常的不错，快学完老刘的第三方SDK开发，立刻就买了老师的课程一起看，对前面学习的内容有了更深的体会！总之非常值得入手！</p>
                                <div class="ft clearfix">
                                    <span>时间：2017-02-16 22:58:06</span>
                                </div>

                                <div class="treply">
                                    <span>[讲师回复]</span>：<label class="js-reply-value">嗯，这本来就是一门进阶的课程，很高兴能够帮到你，学习中有任何问题随时在群里提出。</label>
                                </div>
                            </div>
                        </li>
                        <li class="cmt-post" data-commentid="1751">
                            <div class="inner">
                                <div class="hd">
                                    <a href="javascript:void();"><img src="{{asset('home')}}/Picture/533e4d710001322402000200-100-100.jpg" alt="imSunLight" class="pic"></a>
                                    <a href="javascript:void();" class="name">imSunLight</a>
                                    <div class="stars">
                                        <i class="sz-star on"></i>
                                        <i class="sz-star on"></i>
                                        <i class="sz-star on"></i>
                                        <i class="sz-star on"></i>
                                        <i class="sz-star on"></i>

                                    </div>
                                </div>
                                <p class="cmt-txt">学习老师这门课程我自己感觉收获很大的，不仅能学到各种边边角角的小技巧，还能学到各种封装的思想。好好消化，感觉我能成长很多，打算学完之后好好总结，再去实践一下，仿写别的app</p>
                                <div class="ft clearfix">
                                    <span>时间：2017-02-16 17:53:33</span>
                                </div>

                                <div class="treply">
                                    <span>[讲师回复]</span>：<label class="js-reply-value">厉害了我的哥，好好学习，有啥问题及时提出来，我会及时的为大家答疑，加油。</label>
                                </div>
                            </div>
                        </li>
                        <li class="cmt-post" data-commentid="1736">
                            <div class="inner">
                                <div class="hd">
                                    <a href="javascript:void();"><img src="{{asset('home')}}/Picture/571b26240001460201000100-100-100.jpg" alt="深海__" class="pic"></a>
                                    <a href="javascript:void();" class="name">深海__</a>
                                    <div class="stars">
                                        <i class="sz-star on"></i>
                                        <i class="sz-star on"></i>
                                        <i class="sz-star on"></i>
                                        <i class="sz-star on"></i>
                                        <i class="sz-star on"></i>

                                    </div>
                                </div>
                                <p class="cmt-txt">首先我来给强哥留下个问题， 请看我慕课头像来猜猜我是哪个。。 哈哈、  课程挺不错 非常适合进阶、另外还可以与一线老牛做朋友， 群里聊天气氛非常好，有问题可以一起解答。。</p>
                                <div class="ft clearfix">
                                    <span>时间：2017-02-15 18:56:34</span>
                                </div>

                                <div class="treply">
                                    <span>[讲师回复]</span>：<label class="js-reply-value">你这个问题太简单了，哈哈，嗯，学习中有啥问题提出来，一起交流。学习顺利。</label>
                                </div>
                            </div>
                        </li>
                        <li class="cmt-post" data-commentid="1730">
                            <div class="inner">
                                <div class="hd">
                                    <a href="javascript:void();"><img src="{{asset('home')}}/Picture/567673b30001d5ba04190419-100-100.jpg" alt="Sword_man" class="pic"></a>
                                    <a href="javascript:void();" class="name">Sword_man</a>
                                    <div class="stars">
                                        <i class="sz-star on"></i>
                                        <i class="sz-star on"></i>
                                        <i class="sz-star on"></i>
                                        <i class="sz-star on"></i>
                                        <i class="sz-star on"></i>

                                    </div>
                                </div>
                                <p class="cmt-txt">老师讲的质量还是很高，比较支持UI设置相关知识的跳过，学过你自然懂这方面知识难度，老师能把好多项目经验，实用工具拿出来分享，，还有组件化的思想，这就感觉课程很值了。群内氛围也不错，别的就不夸了，好像捧臭脚似的，哈哈。
                                    话说，学android的人太多了。多写代码，早日进阶中高级。</p>
                                <div class="ft clearfix">
                                    <span>时间：2017-02-15 11:27:21</span>
                                </div>

                                <div class="treply">
                                    <span>[讲师回复]</span>：<label class="js-reply-value">多谢同学的支持，能给你带来新收获很高兴，认真学习课程，有什么问题都可以在咱们的群里提出来，会及时为大家解决。</label>
                                </div>
                            </div>
                        </li>
                        <li class="cmt-post" data-commentid="1722">
                            <div class="inner">
                                <div class="hd">
                                    <a href="javascript:void();"><img src="{{asset('home')}}/Picture/5869a50300016ab301800180-100-100.jpg" alt="weibo_随心者随心行_0" class="pic"></a>
                                    <a href="javascript:void();" class="name">weibo_随心者随心行_0</a>
                                    <div class="stars">
                                        <i class="sz-star on"></i>
                                        <i class="sz-star on"></i>
                                        <i class="sz-star on"></i>
                                        <i class="sz-star on"></i>
                                        <i class="sz-star on"></i>

                                    </div>
                                </div>
                                <p class="cmt-txt">我个人感受：
                                    1.老师很好，但是说实话，开头的网络框架确实比较复杂，因为我是自学，所以从来没想过要把网络层架构独立出来，所以这里受教了。2.老师在开头自己都说了要注意自己的包命名和文件放在对应的包里面，可是您直接跳过了创建这些步骤。可是我得找啊，老师您直接跳的下一个类了，我却得暂停，看老师的源码这个类创建在哪个包里面。（当然也可能是我的基础不扎实）
                                    3.整体整个项目我觉得还是可以，因为讲解很多实用的框架。4。我个人认为，为什么在页面布局要跳过呢？对我这种UI做的很渣的人来说，我就特别需要去学习UI布局。最后我这样说。课程好是好，就是真的需要很夯实的基础。我真的希望老师可以照顾那些基础不牢的人。</p>
                                <div class="ft clearfix">
                                    <span>时间：2017-02-14 16:10:28</span>
                                </div>

                                <div class="treply">
                                    <span>[讲师回复]</span>：<label class="js-reply-value">同学你好，首先对你提的几个问题，老师给你回答一下，第一个网络框架的基础使用其实慕课网包括老师自己都有免费课详细的讲解了对应框架的基本用法，所以就没有在实战课中过多去讲解这些基本的东西，希望同学可以注意一下我的免费课。2.老师提到了包等的命名规则想的是，同学可以看到视频中的代码就知道如何命名了，而且这个规范只是相对的，我主要就是提一下应该如何去命名。3.页面布局跳过是我觉得大部分的同学应该是比较了解这块的，每个人的基础不一样，如果老师实战课里花太多时间去写布局的话，会有其它学员来说老师的，望同学理解。关于如何布局这块其实有许多资料学习的。最后，有任何疑问都可以在QQ群里提出来，我会详细的给你解答。</label>
                                </div>
                            </div>
                        </li>
                        <li class="cmt-post" data-commentid="1721">
                            <div class="inner">
                                <div class="hd">
                                    <a href="javascript:void();"><img src="{{asset('home')}}/Picture/569e04da0001a90201000100-100-100.jpg" alt="android是一匹孤狼" class="pic"></a>
                                    <a href="javascript:void();" class="name">android是一匹孤狼</a>
                                    <div class="stars">
                                        <i class="sz-star on"></i>
                                        <i class="sz-star on"></i>
                                        <i class="sz-star on"></i>
                                        <i class="sz-star on"></i>
                                        <i class="sz-star on"></i>

                                    </div>
                                </div>
                                <p class="cmt-txt">许久没上慕课，近日却发现了不错的收费课程，这种一整个项目的课程比起单个知识点学习更加深刻、全面。之前在github上学习了几个小项目练手，发现不如qndroid老师这个项目，组件化思想，抽离sdk，视频这方面.....说实话，之前根本没有意识到，给了自己一个新的认知，学习之路漫漫啊，在此谢过qndroid老师了（老师在群里很热情哦^.^）</p>
                                <div class="ft clearfix">
                                    <span>时间：2017-02-14 15:52:05</span>
                                </div>

                                <div class="treply">
                                    <span>[讲师回复]</span>：<label class="js-reply-value">嘿嘿，课程能够给你带来收获我很高兴，希望你认真的把课程都学习完，学习中有什么问题都可以在群里提出来，一起加油</label>
                                </div>
                            </div>
                        </li>
                        <li class="cmt-post" data-commentid="1718">
                            <div class="inner">
                                <div class="hd">
                                    <a href="javascript:void();"><img src="{{asset('home')}}/Picture/5333a0aa000121d702000200-100-100.jpg" alt="慕粉3285667" class="pic"></a>
                                    <a href="javascript:void();" class="name">慕粉3285667</a>
                                    <div class="stars">
                                        <i class="sz-star on"></i>
                                        <i class="sz-star on"></i>
                                        <i class="sz-star on"></i>
                                        <i class="sz-star on"></i>
                                        <i class="sz-star on"></i>

                                    </div>
                                </div>
                                <p class="cmt-txt">主要是冲着组件化开发思想来学习了，课程的概况都看过了，也刚看完第一章，其中老师建议在大型项目中尽量不要使用注解框架的说法刷新了我以为堆砌框架就好的观念，很好的课程，要是能再加些热修复技术，RxJava+retrofit，还有MVP模式等流行的技术进去就更好了（有点要求太多了呵）！不过确实很不错，还有老师的热心答疑解惑</p>
                                <div class="ft clearfix">
                                    <span>时间：2017-02-14 12:22:34</span>
                                </div>

                                <div class="treply">
                                    <span>[讲师回复]</span>：<label class="js-reply-value">同学你好，本项目已经可以支持热修复，如果觉得有必要老师可以补录到我们的课程中去，rxjava更重要是的一种链式编程思想，实际中还没有特别广的用开，后续可以为大家提供一些免费课学习即可，retrofit和Resetful接口Api配合才好用，否则有老师里封装的Okhttp框架足够了，Mvp模式了解即可，不实用，会造成类爆炸，说明同学很认真的看了，继续加油。</label>
                                </div>
                            </div>
                        </li>
                        <li class="cmt-post" data-commentid="1694">
                            <div class="inner">
                                <div class="hd">
                                    <a href="javascript:void();"><img src="{{asset('home')}}/Picture/5333a1a90001c8d802000200-100-100.jpg" alt="极道人鱼" class="pic"></a>
                                    <a href="javascript:void();" class="name">极道人鱼</a>
                                    <div class="stars">
                                        <i class="sz-star on"></i>
                                        <i class="sz-star on"></i>
                                        <i class="sz-star on"></i>
                                        <i class="sz-star on"></i>
                                        <i class="sz-star on"></i>

                                    </div>
                                </div>
                                <p class="cmt-txt">这视频真的很适合大家学习！从零到完成！整个思路很清晰！讲解很清楚老师也分享了很多经验！避免了自己在很多地方遇到的坑！有些其他方面的问题老师也非常悉心的讲解！真棒！希望老师的下一们实战课快点出！！！</p>
                                <div class="ft clearfix">
                                    <span>时间：2017-02-12 23:45:01</span>
                                </div>

                                <div class="treply">
                                    <span>[讲师回复]</span>：<label class="js-reply-value">谢谢同学的支持，在学习中遇到的任何问题都可以在群里或者单独向我提问，我会第一时间为大家进行解答。祝学习顺利</label>
                                </div>
                            </div>
                        </li>
                        <li class="cmt-post" data-commentid="1865">
                            <div class="inner">
                                <div class="hd">
                                    <a href="javascript:void();"><img src="{{asset('home')}}/Picture/56c1e56b00013dae01000100-100-100.jpg" alt="qq_master" class="pic"></a>
                                    <a href="javascript:void();" class="name">qq_master</a>
                                    <div class="stars">
                                        <i class="sz-star on"></i>
                                        <i class="sz-star on"></i>
                                        <i class="sz-star on"></i>
                                        <i class="sz-star on"></i>
                                        <i class="sz-star on"></i>

                                    </div>
                                </div>
                                <p class="cmt-txt">很好，封装的思想在其他开发方面其实都是试用的，现在做的java EE开发，项目架构很多地方仔细想想都有很多共同点</p>
                                <div class="ft clearfix">
                                    <span>时间：2天前</span>
                                </div>

                                <div class="treply">
                                    <span>[讲师回复]</span>：<label class="js-reply-value">是的，思想是适用于任何语言的，都可以以组件化搭积木的方式去开发任何一个应用而不一定必须是android应用。</label>
                                </div>
                            </div>
                        </li>
                        <li class="cmt-post" data-commentid="1838">
                            <div class="inner">
                                <div class="hd">
                                    <a href="javascript:void();"><img src="{{asset('home')}}/Picture/56c5ca780001aa8904650412-100-100.jpg" alt="乔布奇" class="pic"></a>
                                    <a href="javascript:void();" class="name">乔布奇</a>
                                    <div class="stars">
                                        <i class="sz-star on"></i>
                                        <i class="sz-star on"></i>
                                        <i class="sz-star on"></i>
                                        <i class="sz-star on"></i>
                                        <i class="sz-star on"></i>

                                    </div>
                                </div>
                                <p class="cmt-txt">课程很实用，贴近公司中的真实项目，老师的开发流程和开发的思想很好，从中学到了封装的方法，很喜欢老师的课程，赞一个！</p>
                                <div class="ft clearfix">
                                    <span>时间：5天前</span>
                                </div>

                                <div class="treply">
                                    <span>[讲师回复]</span>：<label class="js-reply-value">谢谢同学的支持，学习中有任何问题，及时的群里提出来，加油。</label>
                                </div>
                            </div>
                        </li>
                        <li class="cmt-post" data-commentid="1832">
                            <div class="inner">
                                <div class="hd">
                                    <a href="javascript:void();"><img src="{{asset('home')}}/Picture/544258020001294001000099-100-100.jpg" alt="慕哥哥" class="pic"></a>
                                    <a href="javascript:void();" class="name">慕哥哥</a>
                                    <div class="stars">
                                        <i class="sz-star on"></i>
                                        <i class="sz-star on"></i>
                                        <i class="sz-star on"></i>
                                        <i class="sz-star on"></i>
                                        <i class="sz-star on"></i>

                                    </div>
                                </div>
                                <p class="cmt-txt">能学到自己需要的，就是最好的。
                                    除了开发知识，我学到最多的就是编程思想，在架构师的路上又迈进了一大步。攒一个。</p>
                                <div class="ft clearfix">
                                    <span>时间：6天前</span>
                                </div>

                                <div class="treply">
                                    <span>[讲师回复]</span>：<label class="js-reply-value">对的，开发功能只是入门级别的要求，如何合理的搭建我们的项目，才是进阶之路，加油！</label>
                                </div>
                            </div>
                        </li>
                        <li class="cmt-post" data-commentid="1795">
                            <div class="inner">
                                <div class="hd">
                                    <a href="javascript:void();"><img src="{{asset('home')}}/Picture/57b685c90001741b02790279-100-100.jpg" alt="_stack_overflow_" class="pic"></a>
                                    <a href="javascript:void();" class="name">_stack_overflow_</a>
                                    <div class="stars">
                                        <i class="sz-star on"></i>
                                        <i class="sz-star on"></i>
                                        <i class="sz-star on"></i>
                                        <i class="sz-star on"></i>
                                        <i class="sz-star on"></i>

                                    </div>
                                </div>
                                <p class="cmt-txt">看完了一遍,现在能把工程运行了，发现自己还是有很多不足，看的时候懂了，看完就忘了，还得再看几遍，争取把它肯透</p>
                                <div class="ft clearfix">
                                    <span>时间：8天前</span>
                                </div>

                                <div class="treply">
                                    <span>[讲师回复]</span>：<label class="js-reply-value">对的，一次不行就两次，多次，总有看懂的时候，注意学习的过程中多做笔记，加油。</label>
                                </div>
                            </div>
                        </li>
                        <li class="cmt-post" data-commentid="1698">
                            <div class="inner">
                                <div class="hd">
                                    <a href="javascript:void();"><img src="{{asset('home')}}/Picture/55951f6f0001f87101000100-100-100.jpg" alt="pcDack" class="pic"></a>
                                    <a href="javascript:void();" class="name">pcDack</a>
                                    <div class="stars">
                                        <i class="sz-star on"></i>
                                        <i class="sz-star on"></i>
                                        <i class="sz-star on"></i>
                                        <i class="sz-star on"></i>
                                        <i class="sz-star on"></i>

                                    </div>
                                </div>
                                <p class="cmt-txt">项目很好，老师只讲干货，findViewById之类的不讲，适合进阶。穿插很多企业用到的知识点，和作者的经验，很好</p>
                                <div class="ft clearfix">
                                    <span>时间：2017-02-13 09:41:05</span>
                                </div>

                                <div class="treply">
                                    <span>[讲师回复]</span>：<label class="js-reply-value">嗯，如果有课程以前的问题想了解也是可以问的，我也会把我看到的一些新技术分享到群里供大家拓宽视野。</label>
                                </div>
                            </div>
                        </li>
                    </ul>

                    <div class="page"><span class="disabled_page">首页</span><span class="disabled_page">上一页</span><a href="javascript:void(0)" class="active">1</a><a href="84.html?page=2">2</a><a href="84.html?page=3">3</a><a href="84.html?page=2">下一页</a><a href="84.html?page=3">尾页</a></div>
                </div>
            </div>
            ﻿<div class="recommendcourse">
                <!-- 讲师 -->
                <div class="recom-box">
                    <h3 class="box-tit">讲师</h3>
                    <div class="box-bd">
                        <div class="tea-inst">
                            <div class="medias">
                                <a href="http://www.imooc.com/t/1102391" data-href="http://www.imooc.com/space/teacher/id/1102391" target="_blank">
                                    <img src="{{asset('home')}}/Picture/5333a0350001692e02200220-100-100.jpg" class="media" alt="">
                                    <span class="name">qndroid</span>
                                    <i class="ic sz-imooc"></i>
                                </a>
                                <span class="job">移动开发工程师</span>
                            </div>
                            <p class="desc">android高级工程师，五年开发经验，一直在从事android App的开发，热爱App开发，对应用开发有自己的经验积累，擅长App的调优工作，一直在CSDN上写一些技术型博客，在github上有自己的一些小项目，乐于分享</p>
                        </div>
                    </div><!-- 讲师 end -->
                    <!-- 课前必学 -->
                    <div class="js-prelearn" data-id="84">

                    </div>


                </div>
            </div>
        </div>

    </div>





    <div id="footer">
        <div class="waper">
            <div class="footerwaper clearfix">
                <div class="followus r">
                    <a class="followus-weixin" href="javascript:;"  target="_blank" title="微信">
                        <div class="flw-weixin-box"></div>
                    </a>
                    <a class="followus-weibo" href="http://weibo.com/u/3306361973"  target="_blank" title="新浪微博"></a>
                    <a class="followus-qzone" href="http://user.qzone.qq.com/1059809142/" target="_blank" title="QQ空间"></a>
                </div>
                <div class="footer_intro l">
                    <div class="footer_link">
                        <ul>
                            <li><a href="http://www.imooc.com/" target="_blank">网站首页</a></li>
                            <li><a href="http://www.imooc.com/about/cooperate" target="_blank" title="企业合作">企业合作</a></li>
                            <li><a href="http://www.imooc.com/about/job" target="_blank">人才招聘</a></li>
                            <li> <a href="http://www.imooc.com/about/contact" target="_blank">联系我们</a></li>
                            <li> <a href="http://www.imooc.com/about/recruit" target="_blank">讲师招募</a></li>
                            <li> <a href="http://coding.imooc.com/user/faq" target="_blank">常见问题</a></li>
                            <li> <a href="http://www.imooc.com/user/feedback" target="_blank">意见反馈</a></li>
                            <li><a href="http://daxue.imooc.com/" target="_blank">慕课大学</a></li>
                            <li> <a href="http://www.imooc.com/about/friendly" target="_blank">友情链接</a></li>
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
        <a href="http://www.imooc.com/mobile/app" target="_blank" class="elevator-app" >
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
@include("home.layouts.signin")


    <script src="{{asset('home')}}/Scripts/ssologin.js"></script>
    <script type="text/javascript" src="{{asset('home')}}/Scripts/common.js"></script>
    <script>
        requirejs.config({
            urlArgs:seajsTimestamp,
            baseUrl: '/static/module/',
            skipDataMain: true,
            waitSeconds: 0,
            paths: {
                lib: '/static/lib',
                jwplayer: '/static/lib/jwplayer/1.0.0/jwplayer.js',
                ide: '/static/lib/ide/dest/ide.min.js',
                juicer: '/static/lib/juicer/juicer.min.js',
                ace:'/static/lib/ace1.2.6/ace.js',
                autocomplete:'/static/lib/util/autocomplete.js',
                validate:'/static/lib/util/validate.js',
                placeholder:'/static/lib/util/placeholder.js',
                modalbutton:'/static/lib/util/modal.button.js',
                scrollbar: '/static/lib/scrollbar/jquery.scrollbar.js',
                ueditor: '/static/lib/ueditor/ueditor.final.min.js',
                store: '/static/lib/store/store.min.js',
                pagination: '/static/lib/pagination/jquery.pagination.js',
                SyntaxHighlighter:'/static/lib/ueditor/third-party/SyntaxHighlighter/shCore.js',
                socketio: '/static/lib/socket.io/1.3.6/socket.io.min.js',
                clipbord: '/static/lib/clipboard/dist/clipboard.min.js',
                swfobject: '/static/lib/swfobject/2.2/swfobject.min.js',
                jqueryValidate: '/static/lib/jquery-validate/jquery.validate.min.js'
            },
            shim: {
                'ide': {
                    exports: 'ide'
                },
                'swfobject': {
                    exports: 'swfobject'
                }
            }
        });
    </script>




    <script>
        var cid = "84";
    </script>
    <script>/*RESOURCE_MAP*/</script>
    <script data-entry="evaluation/index/index">requirejs(['evaluation/index/index', 'class/index']);</script>


    <div class="comp-modal-overlay"></div>
    <div class="modal modal-buy" id="before-buy-modal">
        <div class="inner">
            <div class="header">
                <strong class="tit">购买课程</strong>
                <a href="javascript:;" class="help">帮助？</a>
            </div>
            <div class="content">
                <div class="infos">
                    <span class="name">{{$class_course['real_course_name']}}</span>
                <span class="price">
																	<i>&yen;</i><b>269</b><i>.00</i>
								</span>
                <span class="deadline">

					                </span>
                </div>
            </div>
            <div class="footer">
                <a href="javascript:;" class="cancel-btn" rel="modal:close">取消</a>
                <a data-href="/pay/buynow/cid/84" href='javascript:;' class="go-pay-btn">去支付</a>
            </div>
        </div>
    </div>

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
