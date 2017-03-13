
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>
        实战开发课程_IT培训精品课程_易课网课程
    </title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <meta name="renderer" content="webkit">
    <meta property="qc:admins" content="77103107776157736375" />
    <meta property="wb:webmaster" content="c4f857219bfae3cb" />
    <meta http-equiv="Access-Control-Allow-Origin" content="*" />
    <meta http-equiv="Cache-Control" content="no-transform " />

    <meta name="Keywords" content="" />


    <meta name="Description" content="意课网精品课程，为您提供专业的IT实战开发课程，包含前端开发、后端开发、移动端开发、数据处理、图像处理等各方面IT技能，课程全面、制作精良、讲解通俗易懂。"/>








    <link rel="stylesheet" href="{{asset('home')}}/Content/moco.min.css" type="text/css" />

    <script type="text/javascript">

        eval(function(p,a,c,k,e,d){e=function(c){return(c<a?"":e(parseInt(c/a)))+((c=c%a)>35?String.fromCharCode(c+29):c.toString(36))};if(!''.replace(/^/,String)){while(c--)d[e(c)]=k[c]||e(c);k=[function(e){return d[e]}];e=function(){return'\\w+'};c=1;};while(c--)if(k[c])p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c]);return p;}('!4(){3 6=a;3 l=4(){3 b,e=9 y("(^| )"+"c=([^;]*)(;|$)");j(b=h.g.z(e)){k w(b[2])}x{k a}};3 8=4(t){3 f=l();3 7=9 o();7.A(7.d()+B*i*i*r);h.g="c="+t+";s="+7.M()+";N=/;L=O.m";j(t&&t!=f){Q.P.G()}};3 5=9 E();5.H=4(){K(6);6=a;8(0)};5.J=4(){8(1)};6=I(4(){5.n="";8(1)},F);5.n=\'R://p.u.m/p/v/q/D.C?t=\'+9 o().d()}()',54,54,'|||var|function|imgobj|timer|exp|setcookie|new|null|arr|IMCDNS|getTime|reg|_0|cookie|document|60|if|return|getcookie|com|src|Date|static|common|1000|expires||mukewang|img|unescape|else|RegExp|match|setTime|24|png|logo|Image|3000|reload|onload|setTimeout|onerror|clearTimeout|domain|toGMTString|path|imooc|location|window|http'.split('|'),0,{}))

    </script>


    <script type="text/javascript">

        var OP_CONFIG={"module":"course","page":"list"};
        var isLogin = 0;
        var is_choice = "";
        var seajsTimestamp="v=2016022402352";
        var _msg_unread = 0;
        var _not_unread = 0;
        var _cart_num = 0;
    </script>






    <link rel="stylesheet" href="{{asset('home')}}/Content/874c4a79c7864be6aff9a020dcb07dc5.css" type="text/css" />
</head>
<body  id="List_courseId">

@include('home.layouts.header')

<div class="bindHintBox js-bindHintBox hide">
    <div class="pr">
        为了账号安全，请及时绑定邮箱和手机<a href="/user/setbindsns" class="ml20 color-red" target="_blank">立即绑定</a>
        <button  class="closeBindHint js-closeBindHint" type="button"></button>
        <div class="arrow"> </div>
    </div>
</div>



<div id="main">

    <div class="wrap ">
        <div class="top">
            <div class="course-content">
                <div class="course-nav-box">
                    <div class="course-nav-row clearfix">
                        <span class="hd l">方向：</span>
                        <div class="bd">
                            <ul class="">
                                <li class="course-nav-item <?php echo $tid == 0 && empty($bid) ? "on" : ""?>">
                                    <a href="{{url('home/section/lists')}}?tid=0">全部</a>
                                </li>

                                @foreach($top as $k=>$v)
                                <li class="course-nav-item
                                     <?php if($cate['pid'] == $v['category_id']){echo "on";}?>">
                                    <a href="{{url('home/section/lists')}}?tid={{$v['category_id']}}" data-ct="photo">{{$v['category_name']}}</a>
                                </li>
                                @endforeach

                            </ul>
                        </div>
                    </div>
                    <div class="course-nav-row clearfix">
                        <span class="hd l">分类：</span>
                        <div class="bd">
                            <ul class="">
                                <li class="course-nav-item <?php echo $bid == 0 ? "on" : ""?>">
                                    <a href="{{url('home/section/lists')}}?bid=0">全部</a>
                                </li>

                                @foreach($body as $k=>$v)
                                <li class="course-nav-item <?php if($cate['category_name'] == $v['category_name']){echo "on";}?>">
                                    <a href="{{url('home/section/lists')}}?bid={{$v['category_id']}}" data-id=7 data-ct=fe>{{$v['category_name']}}</a>
                                </li>
                                @endforeach




                            </ul>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>

    <div class="container">
        <div class="course-tool-bar clearfix">
            <div class="tool-left l">
                <a href="/course/list?sort=last" class="sort-item">最新</a>
                <a href="/course/list?sort=pop" class="sort-item active">最热</a>
            </div>
            <div class="l">
                        <span class="tool-item" style="display: none;">
                            <a class="follow-learn tool-chk" href="javascript:void(0);">跟我学</a>
                        </span>
            </div>
            <div class="tool-right r">

                        <span class="tool-item total-num">
                            共<b>678</b>个课程
                        </span>
                <span class="tool-item tool-pager">
                                                        <span class="pager-num">
                                <b class="pager-cur">1</b>/<em class="pager-total">28</em>
                            </span>
                                                        <a href="javascript:void(0)" class="pager-action pager-prev  disabled"><i class="icon-left2"></i></a>

                                                        <a href="/course/list?page=2" class="pager-action pager-next"><i class="icon-right2"></i></a>
                                                    </span>
            </div>
        </div>
        <div class="course-list">
            <div class="moco-course-list">
                <ul class="clearfix">





                    <div class='moco-course-wrap szcoursewrap'>
                        <a href='http://coding.imooc.com/class/62.html' target="_blank" class='szcourse-cart active'>
                            <div class='szcourse-cart-A'>
                                <div class='szcourse-cart-b'>
                                    <div class="szcourse-p1 clearfix">
                                        <i class="imv2-war"></i>
                                        <span>实战课程</span>
                                    </div>
                                    <div class="szcourse-p2">Python高级编程技巧实战</div>
                                    <div class='szcourse-p3'>精选50个python训练任务，提升实战技能与高效编程技巧</div>
                                    <div class='szcourse-bottom clearfix'>
                                        <span class='l'>806人在学</span>
                                        <span class='r'>￥168.00</span>
                                    </div>
                                </div>
                                <div class='szcourse-cart-o'></div>
                                <div class='shizhanpic' style='background-image: url(Images/57bd5f4300013d9e05400300-360-202.jpg);'></div>
                            </div>

                            <div class='szcourse-cart-B'>
                                <div>
                                    <div class="szcourse-name clearfix">Python高级编程技巧实战</div>
                                    <div class='szcourse-bottom clearfix'>
                                        <span class='l'>806人在学</span>
                                        <span class='r'>￥168.00</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href='http://coding.imooc.com/class/57.html' target="_blank" class='szcourse-cart '>
                            <div class='szcourse-cart-A'>
                                <div class='szcourse-cart-b'>
                                    <div class="szcourse-p1 clearfix">
                                        <i class="imv2-war"></i>
                                        <span>实战课程</span>
                                    </div>
                                    <div class="szcourse-p2">Yii2.0打造完整电商平台</div>
                                    <div class='szcourse-p3'>购物、下单、支付、收货...各功能模块开发，打造京东式电商平台</div>
                                    <div class='szcourse-bottom clearfix'>
                                        <span class='l'>830人在学</span>
                                        <span class='r'>￥268.00</span>
                                    </div>
                                </div>
                                <div class='szcourse-cart-o'></div>
                                <div class='shizhanpic' style='background-image: url(Images/579190240001d51d05400300-360-202.jpg);'></div>
                            </div>

                            <div class='szcourse-cart-B'>
                                <div>
                                    <div class="szcourse-name clearfix">Yii2.0打造完整电商平台</div>
                                    <div class='szcourse-bottom clearfix'>
                                        <span class='l'>830人在学</span>
                                        <span class='r'>￥268.00</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href='http://coding.imooc.com/class/48.html' target="_blank" class='szcourse-cart '>
                            <div class='szcourse-cart-A'>
                                <div class='szcourse-cart-b'>
                                    <div class="szcourse-p1 clearfix">
                                        <i class="imv2-war"></i>
                                        <span>实战课程</span>
                                    </div>
                                    <div class="szcourse-p2">前端后台ThinkPHP开发整站</div>
                                    <div class='szcourse-p3'>用PHP+MySQL+Ajax开完新闻资讯整站，实现“小全栈”的梦想</div>
                                    <div class='szcourse-bottom clearfix'>
                                        <span class='l'>2314人在学</span>
                                        <span class='r'>￥128.00</span>
                                    </div>
                                </div>
                                <div class='szcourse-cart-o'></div>
                                <div class='shizhanpic' style='background-image: url(Images/576376440001766205400300-360-202.jpg);'></div>
                            </div>

                            <div class='szcourse-cart-B'>
                                <div>
                                    <div class="szcourse-name clearfix">前端后台ThinkPHP开发整站</div>
                                    <div class='szcourse-bottom clearfix'>
                                        <span class='l'>2314人在学</span>
                                        <span class='r'>￥128.00</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href='http://coding.imooc.com/class/76.html' target="_blank" class='szcourse-cart '>
                            <div class='szcourse-cart-A'>
                                <div class='szcourse-cart-b'>
                                    <div class="szcourse-p1 clearfix">
                                        <i class="imv2-war"></i>
                                        <span>实战课程</span>
                                    </div>
                                    <div class="szcourse-p2">Android5.0+高级动画开发 矢量图动画 轨迹动画 路径变换</div>
                                    <div class='szcourse-p3'>Android5.0高级动画开发精髓，技术原理+实战技巧详解</div>
                                    <div class='szcourse-bottom clearfix'>
                                        <span class='l'>240人在学</span>
                                        <span class='r'>￥99.00</span>
                                    </div>
                                </div>
                                <div class='szcourse-cart-o'></div>
                                <div class='shizhanpic' style='background-image: url(Images/5847b10c000199ec05400300-360-202.jpg);'></div>
                            </div>

                            <div class='szcourse-cart-B'>
                                <div>
                                    <div class="szcourse-name clearfix">Android5.0+高级动画开发 矢量图动画 轨迹动画 路径变换</div>
                                    <div class='szcourse-bottom clearfix'>
                                        <span class='l'>240人在学</span>
                                        <span class='r'>￥99.00</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                    @foreach($res as $val)

                    <div class='index-card-container course-card-container container '>

                        <a class='course-card'
                           href="{{url('learnShow')}}?id=<?= $val['course_id']?>">

                            <div class='course-card-top cart-color orange'>
                                <i class='imv2-war'></i>
                                <span>{{$cate['category_name']}}</span>
                            </div>

                            <div class='course-card-content'>
                                <h3 class='course-card-name'>{{$val['course_name']}}</h3>
                                <p title='{{$val['course_intro']}}'>{{$val['course_intro']}}</p>
                                <div class='clearfix course-card-bottom'>
                                    <div class='course-card-info'>
                                        {{$val['course_rank']}}<span>·</span>
                                        {{$val['learn_num']}}人在学
                                    </div>

                                </div>
                            </div>
                        </a>
                        <img src='{{asset('home')}}/Picture/new.png' class='course-cart-new'/>


                        <div class='course-card-bk'>
                            <img src='{{asset('home')}}/Picture/cover050_s.jpg' />
                        </div>
                    </div>

                    @endforeach

                </ul>
            </div>
            <div class="page">

            {{$res->appends(['tid' => $tid,'bid'=>$bid])->render()}}




        </div>

    </div>

</div>

<div id="footer" >
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
                        <li><a href="/about/cooperate" target="_blank" title="企业合作">企业合作</a></li>
                        <li><a href="/about/job" target="_blank">人才招聘</a></li>
                        <li> <a href="/about/contact" target="_blank">联系我们</a></li>
                        <li> <a href="/about/recruit" target="_blank">讲师招募</a></li>
                        <li> <a href="/about/faq" target="_blank">常见问题</a></li>
                        <li> <a href="/user/feedback" target="_blank">意见反馈</a></li>
                        <li><a href="http://daxue.imooc.com/" target="_blank">慕课大学</a></li>
                        <li> <a href="/about/friendly" target="_blank">友情链接</a></li>
                        <!--  <li><a href="/corp/index" target="_blank">合作专区</a></li>
                         <li><a href="/about/us" target="_blank">关于我们</a></li> -->
                    </ul>
                </div>
                <p>Copyright © 2017 imooc.com All Rights Reserved | 京ICP备 13046642号-2</p>
            </div>
        </div>
    </div>
</div>


<div id="J_GotoTop" class="elevator">

    <a href="/user/feedback" class="elevator-msg" target="_blank">
        <i class="icon-feedback"></i>
        <span class="">意见反馈</span>
    </a>
    <a href="/about/faq" class="elevator-faq" target="_blank">
        <i class="icon-ques"></i>
        <span class="">常见问题</span>
    </a>
    <a href="http://www.imooc.com/mobile/app" target="_blank" class="elevator-app" >
        <i class="icon-appdownload"></i>
        <span class="">APP下载</span>
        <div class="elevator-app-box"></div>
    </a>
    <a href="javascript:void(0)" class="elevator-weixin no-goto" id="js-elevator-weixin" >
        <i class="icon-wxgzh"></i>
        <span class="">官方微信</span>
        <div class="elevator-weixin-box"></div>
    </a>
    <a href="javascript:void(0)" class="elevator-top no-goto" style="display:none" id="backTop">
        <i class="icon-up2"></i>
        <span class="">返回顶部</span>
    </a>
</div>



<!--script-->
<script src="{{asset('home')}}/Scripts/ssologin.js"></script>
<script type="text/javascript" src="{{asset('home')}}/Scripts/sea.js"></script>
<script type="text/javascript" src="{{asset('home')}}/Scripts/sea_config.js"></script>
<script type="text/javascript">seajs.use("/static/page/"+OP_CONFIG.module+"/"+OP_CONFIG.page);</script>





<div style="display: none">
    <script type="text/javascript">
        var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");
        document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3Ff0cfcccd7b1393990c78efdeebff3968' type='text/javascript'%3E%3C/script%3E"));
        (function (d) {
            window.bd_cpro_rtid="rHT4P1c";
            var s = d.createElement("script");s.type = "text/javascript";s.async = true;s.src = location.protocol + "//cpro.baidu.com/cpro/ui/rt.js";
            var s0 = d.getElementsByTagName("script")[0];s0.parentNode.insertBefore(s, s0);
        })(document);
    </script>
    <script>
        (function(){
            var bp = document.createElement('script');
            bp.src = '//push.zhanzhang.baidu.com/push.js';
            var s = document.getElementsByTagName("script")[0];
            s.parentNode.insertBefore(bp, s);
        })();
    </script>
</div>
</body>
</html>
