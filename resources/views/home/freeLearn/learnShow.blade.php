
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>
            Java入门第二季_Java视频教程-慕课网
    </title>
<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
<meta name="renderer" content="webkit">
<meta property="qc:admins" content="77103107776157736375" />
<meta property="wb:webmaster" content="c4f857219bfae3cb" />
<meta http-equiv="Access-Control-Allow-Origin" content="*" />
<meta http-equiv="Cache-Control" content="no-transform " />

<meta name="Keywords" content="" />

<meta name="description" content="本课程是程序猿质变课程，理解面向对象的思想，掌握面向对象的基本原则以及 Java 面向对象编程基本实现原理，熟练使用封装、继承、多态面向对象三大特性" />







<link rel="stylesheet" href="{{asset('new')}}/css/moco.min.css" type="text/css" />

<script type="text/javascript">

eval(function(p,a,c,k,e,d){e=function(c){return(c<a?"":e(parseInt(c/a)))+((c=c%a)>35?String.fromCharCode(c+29):c.toString(36))};if(!''.replace(/^/,String)){while(c--)d[e(c)]=k[c]||e(c);k=[function(e){return d[e]}];e=function(){return'\\w+'};c=1;};while(c--)if(k[c])p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c]);return p;}('!4(){3 6=a;3 l=4(){3 b,e=9 y("(^| )"+"c=([^;]*)(;|$)");j(b=h.g.z(e)){k w(b[2])}x{k a}};3 8=4(t){3 f=l();3 7=9 o();7.A(7.d()+B*i*i*r);h.g="c="+t+";s="+7.M()+";N=/;L=O.m";j(t&&t!=f){Q.P.G()}};3 5=9 E();5.H=4(){K(6);6=a;8(0)};5.J=4(){8(1)};6=I(4(){5.n="";8(1)},F);5.n=\'R://p.u.m/p/v/q/D.C?t=\'+9 o().d()}()',54,54,'|||var|function|imgobj|timer|exp|setcookie|new|null|arr|IMCDNS|getTime|reg|_0|cookie|document|60|if|return|getcookie|com|src|Date|static|common|1000|expires||mukewang|img|unescape|else|RegExp|match|setTime|24|png|logo|Image|3000|reload|onload|setTimeout|onerror|clearTimeout|domain|toGMTString|path|imooc|location|window|http'.split('|'),0,{}))

</script>


<script type="text/javascript">

var OP_CONFIG={"module":"course","page":"learn"};
var isLogin = 0;
var is_choice = "";
var seajsTimestamp="v=2017022402353";
var _msg_unread = 0; 
var _not_unread = 0; 
var _cart_num = 0;
</script>








<script>
/*学习页通用配置*/
var GC = {
  course: {
    id: 124,
    name: 'Java入门第二季',
    pic: '',
    video_url: ''
  },
  classmates: 20 // 你的同学一页显示数量
};


</script>
<script>

var hasLearn;
    hasLearn = 0;

</script>




<link rel="stylesheet" href="{{asset('new')}}/css/bc3226f9870a402eb27619e960abe5f1.css" type="text/css" />
</head>
<body >

<div id="header">
    <div class="page-container" id="nav">
        <div id="logo" class="logo"><a href="/" target="_self" class="hide-text" title="首页">慕课网</a></div>


        <button type="button" class="navbar-toggle visible-xs-block js-show-menu" >
            <i class="icon-menu"></i>
        </button>
        <ul class="nav-item">
                        <li class="set-btn visible-xs-block"><a href="/user/newlogin" target="_self">登录</a> / <a href="/user/newsignup" target="_self">注册</a></li>
                        
            <li>
                <a href="/course/list" class="active" target="_self">课程</a>
            </li>
            <li><a href="/course/program" class="program-nav " target="_self">职业路径<i class="icn-new"></i></a></li>
            <li>
                <a href="http://coding.imooc.com" target="_self">实战</a>
            </li>
            <li><a href="/wenda"  target="_self">猿问</a></li>
            <li><a href="/article"  target="_self">手记</a></li>
            
        </ul>
                <div id="login-area">
            <ul class="header-unlogin clearfix">
                <li class="shop-cart" id="shop-cart">
                    <a href="http://order.imooc.com/pay/cart" class="shop-cart-icon" target="_blank">
                        <span class="icon-shopping-cart js-endcart"></span>
                        <span class="shopping_icon js-cart-num" data-ordernum="0"  data-cartnum="0" style='display: none'>0</span>
                        <span>购物车</span>
                    </a>
                    <div class="my-cart" id="js-my-cart"></div>
                </li>
                <li class="header-signin">
                    <a href="#" id="js-signin-btn">登录</a>
                </li>
                <li class="header-signup">
                    <a href="#" id="js-signup-btn">注册</a>
                </li>
            </ul>
        </div>
                <div class='search-warp clearfix' style='min-width: 32px; height: 60px;'>
                            <div class="pa searchTags" >
                                    <a href="http://class.imooc.com/sc/17" target="_blank">安卓网络</a>
                                </div>
            
            <div class="search-area" data-search="top-banner">
                <input class="search-input" data-suggest-trigger="suggest-trigger"      type="text" autocomplete="off">
                <input type='hidden' class='btn_search' data-search-btn="search-btn" />
                <ul class="search-area-result" data-suggest-result="suggest-result">
                </ul>
            </div>
            <div class='showhide-search' data-show='no'><i class='icon-search'></i></div>
        </div>
    </div>
</div>

<div class="bindHintBox js-bindHintBox hide">
    <div class="pr">
        为了账号安全，请及时绑定邮箱和手机<a href="/user/setbindsns" class="ml20 color-red" target="_blank">立即绑定</a>
        <button  class="closeBindHint js-closeBindHint" type="button"></button>
        <div class="arrow"> </div>
    </div>
</div>


<div id="main">

<div class="course-infos">
    <div class="w pr">
        <div class="path">  
            <a href="/course/list">课程</a>
                        <i class="path-split">\</i><a href="/course/list?c=be">后端开发</a>
                                    <i class="path-split">\</i><a href="/course/list?c=java">Java</a>
                        <i class="path-split">\</i><a href="/learn/124"><span>Java入门第二季</a></span>
        </div>
        <div class="hd clearfix">
            <h2 class="l">Java入门第二季</h2>
                    </div>

        <div class="statics clearfix">
            
                        <div class="moco-btn l learn-btn green-btn red-btn"> 
                <a href="/video/2161" class="J-learn-course">开始学习</a>
                <em></em>
                <i class="follow-action js-follow-action"></i>
            </div>
                        
            
                        
            <div class="static-item l">
                <span class="meta">学习人数</span>
                <span class="meta-value js-learn-num"></span>
                            </div>
            <div class="static-item l">
                <span class="meta">难度级别</span>
                <span class="meta-value">初级</span>
                <em></em>
            </div>
            <div class="static-item l">
                <span class="meta">课程时长</span>
                <span class="meta-value"> 4小时 0分</span>
                <em></em>
            </div>
            <div class="static-item l score-btn">
                <span class="meta">综合评分</span>
                <span class="meta-value">9.6</span>
                <em></em>
                
                                
                <div class="score-wrap icon-drop_up triangle">
                    <div class="score-box">
                        <a href="/coursescore/124" class="person-num">
                            <span class="person-num l">1421人评价</span>
                        </a>
                                                                                <a href="/coursescore/124?page=1" class="evaluation-btn r">查看评价</a>
                                                                            <div class="score-detail-box">
                            <div class="score-static-item">
                                <span class="meta-value">9.8</span>
                                <span class="meta">内容实用</span>
                            </div>
                            <div class="score-static-item">
                                <span class="meta-value">9.5</span>
                                <span class="meta">简洁易懂</span>
                                <em></em>
                            </div>
                            <div class="score-static-item">
                                <span class="meta-value">9.4</span>
                                <span class="meta">逻辑清晰</span>
                                <em></em>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
            
        </div>
        <div class="extra">
            <!-- credit -->
            <div class="share-rl-tips share-posi js-share-statue">
                <span class="icon-drop_up share-triangle"></span>
                <span>分享即可 +</span><strong>1积分</strong>
            </div>
            <!-- share -->
            <div class="share-action r bdsharebuttonbox">
                <a href="javascript:;" class="share wx js-share icon-share-weichat" data-cmd="weixin"></a>
                <a href="javascript:;" class="share qq js-share icon-share-qq" data-cmd="qzone"></a>
                <a href="javascript:;" class="share sina js-share icon-share-weibo" data-cmd="tsina"></a>
            </div>
        </div>
    </div>
    <div class="info-bg" id="js-info-bg">
        <div class="cover-img-wrap">
        <img data-src="picture/57036062000139a406000338.jpg" alt="" style="display: none" id="js-cover-img">
        </div>
        <div class="cover-mask"></div>
    </div>
    
        
</div>


<div class="course-info-main clearfix w">
    <div class="content-wrap">
        <div class="content">
                            <div id="notice" class="clearfix">
        <div class="l">
            <strong>课程公告 : </strong> 
            <a  href="javascript:void(0)">Java 第三季都上线啦</a> 
        </div> 
    </div>
<!-- 课程公告 -->
                        <!-- 课程简介 -->
            <div class="course-brief">
                <p class="auto-wrap">简介：本课程是程序猿质变课程，理解面向对象的思想，掌握面向对象的基本原则以及 Java 面向对象编程基本实现原理，熟练使用封装、继承、多态面向对象三大特性，带你进一步探索 Java 世界的奥秘！
</p>
            </div>
            <!-- 课程简介 end -->
            <div class="mod-tab-menu ">
    <ul class="course-menu clearfix">
        <li><a class="ui-tabs-active active" id="learnOn"  href="/learn/124"><span>章节</span></a></li>
        <li><a id="commentOn" class="" href="/comment/124"><span>评论</span></a></li>
        <li><a id="qaOn" class="" href="/qa/124/t/1?page=1"><span>问答</span></a></li>
        <li><a id="noteOn" class="" href="/note/124?sort=last&page=1"><span>笔记</span></a></li>
        <!--
        <li><a id="wikiOn" class="" href="/wiki/124">WIKI</a></li>
        -->
    </ul>
    
</div><!-- 课程面板 -->
            <!-- 课程章节 -->
            <div class="mod-chapters">
                                        <div class="chapter chapter-active">
                    <!-- 章节标题 -->
                    <h3>
                        
                        <span class="icon-drop_down js-close"></span>
                        <strong>
                            <i class="icon-chapter"></i>
                            第1章 类和对象
                            <div class="icon-info chapter-info">
                                <i class="icon-drop_up triangle">
                                    <div class="chapter-introubox">
                                        <div class="chapter-content">本章内容主要讲解 Java 在面向对象编程中的基本语法，面向对象设计程序的思路</div>
                                    </div>
                                </i>
                            </div>
                        </strong>
                        
                    </h3>
                    <!-- 章节标题 end -->
                    <!-- 章节小节 -->
                                        <ul class="video">
                                                <li data-media-id="2161">
                                                            <a href='/video/2161' class="J-media-item">
                                    <i class="icon-video type"></i>
                                    1-1 什么是类和对象 
                                                                            (07:36)
                                                                        
                                                                        <button class="r moco-btn moco-btn-red preview-btn">开始学习</button>
                                                                        
                                </a>
                                                        <!-- 未登录时 -->
                            <!-- <a target="_blank" href="/video/1430" class="J-media-item studyvideo">1-1 Java简介 (05:49)
                                <button class="r moco-btn moco-btn-blue preview-btn">预览</button>
                            </a> -->
                        </li>
                                                <li data-media-id="2183">
                                                            <a href='/video/2183' class="J-media-item">
                                    <i class="icon-video type"></i>
                                    1-2 如何定义 Java 中的类 
                                                                            (07:18)
                                                                        
                                                                        <button class="r moco-btn moco-btn-red preview-btn">开始学习</button>
                                                                        
                                </a>
                                                        <!-- 未登录时 -->
                            <!-- <a target="_blank" href="/video/1430" class="J-media-item studyvideo">1-1 Java简介 (05:49)
                                <button class="r moco-btn moco-btn-blue preview-btn">预览</button>
                            </a> -->
                        </li>
                                                <li data-media-id="2220">
                                                            <a href='/video/2220' class="J-media-item">
                                    <i class="icon-video type"></i>
                                    1-3 如何使用 Java 中的对象 
                                                                            (04:45)
                                                                        
                                                                        <button class="r moco-btn moco-btn-red preview-btn">开始学习</button>
                                                                        
                                </a>
                                                        <!-- 未登录时 -->
                            <!-- <a target="_blank" href="/video/1430" class="J-media-item studyvideo">1-1 Java简介 (05:49)
                                <button class="r moco-btn moco-btn-blue preview-btn">预览</button>
                            </a> -->
                        </li>
                                                <li data-media-id="2383">
                                                            <a href='/ceping/2383' class="J-media-item">
                                    <i class="icon-test type"></i>
                                    1-4 练习题
                                    
                                                                        <button class="r moco-btn moco-btn-red preview-btn">开始学习</button>
                                                                        
                                </a>
                                                        <!-- 未登录时 -->
                            <!-- <a target="_blank" href="/video/1430" class="J-media-item studyvideo">1-1 Java简介 (05:49)
                                <button class="r moco-btn moco-btn-blue preview-btn">预览</button>
                            </a> -->
                        </li>
                                                <li data-media-id="2218">
                                                            <a href='/video/2218' class="J-media-item">
                                    <i class="icon-video type"></i>
                                    1-5 Java 中的成员变量和局部变量 
                                                                            (07:13)
                                                                        
                                                                        <button class="r moco-btn moco-btn-red preview-btn">开始学习</button>
                                                                        
                                </a>
                                                        <!-- 未登录时 -->
                            <!-- <a target="_blank" href="/video/1430" class="J-media-item studyvideo">1-1 Java简介 (05:49)
                                <button class="r moco-btn moco-btn-blue preview-btn">预览</button>
                            </a> -->
                        </li>
                                                <li data-media-id="2247">
                                                            <a href='/video/2247' class="J-media-item">
                                    <i class="icon-video type"></i>
                                    1-6 Java 中的构造方法 
                                                                            (11:01)
                                                                        
                                                                        <button class="r moco-btn moco-btn-red preview-btn">开始学习</button>
                                                                        
                                </a>
                                                        <!-- 未登录时 -->
                            <!-- <a target="_blank" href="/video/1430" class="J-media-item studyvideo">1-1 Java简介 (05:49)
                                <button class="r moco-btn moco-btn-blue preview-btn">预览</button>
                            </a> -->
                        </li>
                                                <li data-media-id="1842">
                                                            <a href='/code/1842' class="J-media-item">
                                    <i class="icon-code type"></i>
                                    1-7 Java 中的 static 使用之静态变量
                                    
                                                                        <button class="r moco-btn moco-btn-red preview-btn">开始学习</button>
                                                                        
                                </a>
                                                        <!-- 未登录时 -->
                            <!-- <a target="_blank" href="/video/1430" class="J-media-item studyvideo">1-1 Java简介 (05:49)
                                <button class="r moco-btn moco-btn-blue preview-btn">预览</button>
                            </a> -->
                        </li>
                                                <li data-media-id="1889">
                                                            <a href='/ceping/1889' class="J-media-item">
                                    <i class="icon-test type"></i>
                                    1-8 练习题
                                    
                                                                        <button class="r moco-btn moco-btn-red preview-btn">开始学习</button>
                                                                        
                                </a>
                                                        <!-- 未登录时 -->
                            <!-- <a target="_blank" href="/video/1430" class="J-media-item studyvideo">1-1 Java简介 (05:49)
                                <button class="r moco-btn moco-btn-blue preview-btn">预览</button>
                            </a> -->
                        </li>
                                                <li data-media-id="1843">
                                                            <a href='/code/1843' class="J-media-item">
                                    <i class="icon-code type"></i>
                                    1-9 Java 中的 static 使用之静态方法
                                    
                                                                        <button class="r moco-btn moco-btn-red preview-btn">开始学习</button>
                                                                        
                                </a>
                                                        <!-- 未登录时 -->
                            <!-- <a target="_blank" href="/video/1430" class="J-media-item studyvideo">1-1 Java简介 (05:49)
                                <button class="r moco-btn moco-btn-blue preview-btn">预览</button>
                            </a> -->
                        </li>
                                                <li data-media-id="1852">
                                                            <a href='/code/1852' class="J-media-item">
                                    <i class="icon-code type"></i>
                                    1-10 Java 中的 static 使用之静态初始化块
                                    
                                                                        <button class="r moco-btn moco-btn-red preview-btn">开始学习</button>
                                                                        
                                </a>
                                                        <!-- 未登录时 -->
                            <!-- <a target="_blank" href="/video/1430" class="J-media-item studyvideo">1-1 Java简介 (05:49)
                                <button class="r moco-btn moco-btn-blue preview-btn">预览</button>
                            </a> -->
                        </li>
                                            </ul>
                                        <!-- 章节小节 end -->
                </div>
                            <div class="chapter ">
                    <!-- 章节标题 -->
                    <h3>
                        
                        <span class="icon-drop_down js-close"></span>
                        <strong>
                            <i class="icon-chapter"></i>
                            第2章 封装
                            <div class="icon-info chapter-info">
                                <i class="icon-drop_up triangle">
                                    <div class="chapter-introubox">
                                        <div class="chapter-content">封装的意思是说对象数据和操作该数据的指令都是对象自身的一部分，封装能够实现尽可能对外部世界隐藏数据</div>
                                    </div>
                                </i>
                            </div>
                        </strong>
                        
                    </h3>
                    <!-- 章节标题 end -->
                    <!-- 章节小节 -->
                                        <ul class="video">
                                                <li data-media-id="2360">
                                                            <a href='/video/2360' class="J-media-item">
                                    <i class="icon-video type"></i>
                                    2-1 什么是 Java 中的封装 
                                                                            (05:53)
                                                                        
                                                                        <button class="r moco-btn moco-btn-red preview-btn">开始学习</button>
                                                                        
                                </a>
                                                        <!-- 未登录时 -->
                            <!-- <a target="_blank" href="/video/1430" class="J-media-item studyvideo">1-1 Java简介 (05:49)
                                <button class="r moco-btn moco-btn-blue preview-btn">预览</button>
                            </a> -->
                        </li>
                                                <li data-media-id="2371">
                                                            <a href='/video/2371' class="J-media-item">
                                    <i class="icon-video type"></i>
                                    2-2 使用包管理 Java 中的类 
                                                                            (06:45)
                                                                        
                                                                        <button class="r moco-btn moco-btn-red preview-btn">开始学习</button>
                                                                        
                                </a>
                                                        <!-- 未登录时 -->
                            <!-- <a target="_blank" href="/video/1430" class="J-media-item studyvideo">1-1 Java简介 (05:49)
                                <button class="r moco-btn moco-btn-blue preview-btn">预览</button>
                            </a> -->
                        </li>
                                                <li data-media-id="2385">
                                                            <a href='/video/2385' class="J-media-item">
                                    <i class="icon-video type"></i>
                                    2-3 Java 中的访问修饰符 
                                                                            (04:48)
                                                                        
                                                                        <button class="r moco-btn moco-btn-red preview-btn">开始学习</button>
                                                                        
                                </a>
                                                        <!-- 未登录时 -->
                            <!-- <a target="_blank" href="/video/1430" class="J-media-item studyvideo">1-1 Java简介 (05:49)
                                <button class="r moco-btn moco-btn-blue preview-btn">预览</button>
                            </a> -->
                        </li>
                                                <li data-media-id="2397">
                                                            <a href='/video/2397' class="J-media-item">
                                    <i class="icon-video type"></i>
                                    2-4 Java 中的 this 关键字 
                                                                            (02:50)
                                                                        
                                                                        <button class="r moco-btn moco-btn-red preview-btn">开始学习</button>
                                                                        
                                </a>
                                                        <!-- 未登录时 -->
                            <!-- <a target="_blank" href="/video/1430" class="J-media-item studyvideo">1-1 Java简介 (05:49)
                                <button class="r moco-btn moco-btn-blue preview-btn">预览</button>
                            </a> -->
                        </li>
                                                <li data-media-id="2090">
                                                            <a href='/code/2090' class="J-media-item">
                                    <i class="icon-code type"></i>
                                    2-5 什么是 Java 中的内部类
                                    
                                                                        <button class="r moco-btn moco-btn-red preview-btn">开始学习</button>
                                                                        
                                </a>
                                                        <!-- 未登录时 -->
                            <!-- <a target="_blank" href="/video/1430" class="J-media-item studyvideo">1-1 Java简介 (05:49)
                                <button class="r moco-btn moco-btn-blue preview-btn">预览</button>
                            </a> -->
                        </li>
                                                <li data-media-id="2092">
                                                            <a href='/code/2092' class="J-media-item">
                                    <i class="icon-code type"></i>
                                    2-6 Java 中的成员内部类
                                    
                                                                        <button class="r moco-btn moco-btn-red preview-btn">开始学习</button>
                                                                        
                                </a>
                                                        <!-- 未登录时 -->
                            <!-- <a target="_blank" href="/video/1430" class="J-media-item studyvideo">1-1 Java简介 (05:49)
                                <button class="r moco-btn moco-btn-blue preview-btn">预览</button>
                            </a> -->
                        </li>
                                                <li data-media-id="2095">
                                                            <a href='/code/2095' class="J-media-item">
                                    <i class="icon-code type"></i>
                                    2-7 Java 中的静态内部类
                                    
                                                                        <button class="r moco-btn moco-btn-red preview-btn">开始学习</button>
                                                                        
                                </a>
                                                        <!-- 未登录时 -->
                            <!-- <a target="_blank" href="/video/1430" class="J-media-item studyvideo">1-1 Java简介 (05:49)
                                <button class="r moco-btn moco-btn-blue preview-btn">预览</button>
                            </a> -->
                        </li>
                                                <li data-media-id="2096">
                                                            <a href='/code/2096' class="J-media-item">
                                    <i class="icon-code type"></i>
                                    2-8 Java 中的方法内部类
                                    
                                                                        <button class="r moco-btn moco-btn-red preview-btn">开始学习</button>
                                                                        
                                </a>
                                                        <!-- 未登录时 -->
                            <!-- <a target="_blank" href="/video/1430" class="J-media-item studyvideo">1-1 Java简介 (05:49)
                                <button class="r moco-btn moco-btn-blue preview-btn">预览</button>
                            </a> -->
                        </li>
                                                <li data-media-id="2099">
                                                            <a href='/ceping/2099' class="J-media-item">
                                    <i class="icon-test type"></i>
                                    2-9 练习题
                                    
                                                                        <button class="r moco-btn moco-btn-red preview-btn">开始学习</button>
                                                                        
                                </a>
                                                        <!-- 未登录时 -->
                            <!-- <a target="_blank" href="/video/1430" class="J-media-item studyvideo">1-1 Java简介 (05:49)
                                <button class="r moco-btn moco-btn-blue preview-btn">预览</button>
                            </a> -->
                        </li>
                                            </ul>
                                        <!-- 章节小节 end -->
                </div>
                            <div class="chapter ">
                    <!-- 章节标题 -->
                    <h3>
                        
                        <span class="icon-drop_down js-close"></span>
                        <strong>
                            <i class="icon-chapter"></i>
                            第3章 继承
                            <div class="icon-info chapter-info">
                                <i class="icon-drop_up triangle">
                                    <div class="chapter-introubox">
                                        <div class="chapter-content">继承是面向对象程序设计能够提高软件开发效率的重要原因之一</div>
                                    </div>
                                </i>
                            </div>
                        </strong>
                        
                    </h3>
                    <!-- 章节标题 end -->
                    <!-- 章节小节 -->
                                        <ul class="video">
                                                <li data-media-id="2523">
                                                            <a href='/video/2523' class="J-media-item">
                                    <i class="icon-video type"></i>
                                    3-1 Java 中的继承 
                                                                            (06:28)
                                                                        
                                                                        <button class="r moco-btn moco-btn-red preview-btn">开始学习</button>
                                                                        
                                </a>
                                                        <!-- 未登录时 -->
                            <!-- <a target="_blank" href="/video/1430" class="J-media-item studyvideo">1-1 Java简介 (05:49)
                                <button class="r moco-btn moco-btn-blue preview-btn">预览</button>
                            </a> -->
                        </li>
                                                <li data-media-id="2524">
                                                            <a href='/video/2524' class="J-media-item">
                                    <i class="icon-video type"></i>
                                    3-2 Java 中的方法重写 
                                                                            (02:25)
                                                                        
                                                                        <button class="r moco-btn moco-btn-red preview-btn">开始学习</button>
                                                                        
                                </a>
                                                        <!-- 未登录时 -->
                            <!-- <a target="_blank" href="/video/1430" class="J-media-item studyvideo">1-1 Java简介 (05:49)
                                <button class="r moco-btn moco-btn-blue preview-btn">预览</button>
                            </a> -->
                        </li>
                                                <li data-media-id="2639">
                                                            <a href='/ceping/2639' class="J-media-item">
                                    <i class="icon-test type"></i>
                                    3-3 练习题
                                    
                                                                        <button class="r moco-btn moco-btn-red preview-btn">开始学习</button>
                                                                        
                                </a>
                                                        <!-- 未登录时 -->
                            <!-- <a target="_blank" href="/video/1430" class="J-media-item studyvideo">1-1 Java简介 (05:49)
                                <button class="r moco-btn moco-btn-blue preview-btn">预览</button>
                            </a> -->
                        </li>
                                                <li data-media-id="2643">
                                                            <a href='/video/2643' class="J-media-item">
                                    <i class="icon-video type"></i>
                                    3-4 Java 中的继承初始化顺序 
                                                                            (04:45)
                                                                        
                                                                        <button class="r moco-btn moco-btn-red preview-btn">开始学习</button>
                                                                        
                                </a>
                                                        <!-- 未登录时 -->
                            <!-- <a target="_blank" href="/video/1430" class="J-media-item studyvideo">1-1 Java简介 (05:49)
                                <button class="r moco-btn moco-btn-blue preview-btn">预览</button>
                            </a> -->
                        </li>
                                                <li data-media-id="2644">
                                                            <a href='/video/2644' class="J-media-item">
                                    <i class="icon-video type"></i>
                                    3-5 Java 中的 final 的使用 
                                                                            (05:11)
                                                                        
                                                                        <button class="r moco-btn moco-btn-red preview-btn">开始学习</button>
                                                                        
                                </a>
                                                        <!-- 未登录时 -->
                            <!-- <a target="_blank" href="/video/1430" class="J-media-item studyvideo">1-1 Java简介 (05:49)
                                <button class="r moco-btn moco-btn-blue preview-btn">预览</button>
                            </a> -->
                        </li>
                                                <li data-media-id="2690">
                                                            <a href='/ceping/2690' class="J-media-item">
                                    <i class="icon-test type"></i>
                                    3-6 练习题
                                    
                                                                        <button class="r moco-btn moco-btn-red preview-btn">开始学习</button>
                                                                        
                                </a>
                                                        <!-- 未登录时 -->
                            <!-- <a target="_blank" href="/video/1430" class="J-media-item studyvideo">1-1 Java简介 (05:49)
                                <button class="r moco-btn moco-btn-blue preview-btn">预览</button>
                            </a> -->
                        </li>
                                                <li data-media-id="2675">
                                                            <a href='/video/2675' class="J-media-item">
                                    <i class="icon-video type"></i>
                                    3-7 Java 中的 super 的使用 
                                                                            (07:18)
                                                                        
                                                                        <button class="r moco-btn moco-btn-red preview-btn">开始学习</button>
                                                                        
                                </a>
                                                        <!-- 未登录时 -->
                            <!-- <a target="_blank" href="/video/1430" class="J-media-item studyvideo">1-1 Java简介 (05:49)
                                <button class="r moco-btn moco-btn-blue preview-btn">预览</button>
                            </a> -->
                        </li>
                                                <li data-media-id="2676">
                                                            <a href='/video/2676' class="J-media-item">
                                    <i class="icon-video type"></i>
                                    3-8 Java 中的 Object 类 Ⅰ 
                                                                            (04:02)
                                                                        
                                                                        <button class="r moco-btn moco-btn-red preview-btn">开始学习</button>
                                                                        
                                </a>
                                                        <!-- 未登录时 -->
                            <!-- <a target="_blank" href="/video/1430" class="J-media-item studyvideo">1-1 Java简介 (05:49)
                                <button class="r moco-btn moco-btn-blue preview-btn">预览</button>
                            </a> -->
                        </li>
                                                <li data-media-id="2763">
                                                            <a href='/video/2763' class="J-media-item">
                                    <i class="icon-video type"></i>
                                    3-9 Java 中的 Object 类 Ⅱ 
                                                                            (10:46)
                                                                        
                                                                        <button class="r moco-btn moco-btn-red preview-btn">开始学习</button>
                                                                        
                                </a>
                                                        <!-- 未登录时 -->
                            <!-- <a target="_blank" href="/video/1430" class="J-media-item studyvideo">1-1 Java简介 (05:49)
                                <button class="r moco-btn moco-btn-blue preview-btn">预览</button>
                            </a> -->
                        </li>
                                                <li data-media-id="2689">
                                                            <a href='/ceping/2689' class="J-media-item">
                                    <i class="icon-test type"></i>
                                    3-10 练习题
                                    
                                                                        <button class="r moco-btn moco-btn-red preview-btn">开始学习</button>
                                                                        
                                </a>
                                                        <!-- 未登录时 -->
                            <!-- <a target="_blank" href="/video/1430" class="J-media-item studyvideo">1-1 Java简介 (05:49)
                                <button class="r moco-btn moco-btn-blue preview-btn">预览</button>
                            </a> -->
                        </li>
                                            </ul>
                                        <!-- 章节小节 end -->
                </div>
                            <div class="chapter ">
                    <!-- 章节标题 -->
                    <h3>
                        
                        <span class="icon-drop_down js-close"></span>
                        <strong>
                            <i class="icon-chapter"></i>
                            第4章 多态
                            <div class="icon-info chapter-info">
                                <i class="icon-drop_up triangle">
                                    <div class="chapter-introubox">
                                        <div class="chapter-content">多态性是允许你将父对象设置成为和一个或更多的他的子对象相等的技术，赋值之后，父对象就可以根据当前赋值给它的子对象的特性以不同的方式运作</div>
                                    </div>
                                </i>
                            </div>
                        </strong>
                        
                    </h3>
                    <!-- 章节标题 end -->
                    <!-- 章节小节 -->
                                        <ul class="video">
                                                <li data-media-id="2684">
                                                            <a href='/video/2684' class="J-media-item">
                                    <i class="icon-video type"></i>
                                    4-1 Java 中的多态 
                                                                            (09:27)
                                                                        
                                                                        <button class="r moco-btn moco-btn-red preview-btn">开始学习</button>
                                                                        
                                </a>
                                                        <!-- 未登录时 -->
                            <!-- <a target="_blank" href="/video/1430" class="J-media-item studyvideo">1-1 Java简介 (05:49)
                                <button class="r moco-btn moco-btn-blue preview-btn">预览</button>
                            </a> -->
                        </li>
                                                <li data-media-id="2687">
                                                            <a href='/video/2687' class="J-media-item">
                                    <i class="icon-video type"></i>
                                    4-2 多态中的引用类型转换 
                                                                            (08:20)
                                                                        
                                                                        <button class="r moco-btn moco-btn-red preview-btn">开始学习</button>
                                                                        
                                </a>
                                                        <!-- 未登录时 -->
                            <!-- <a target="_blank" href="/video/1430" class="J-media-item studyvideo">1-1 Java简介 (05:49)
                                <button class="r moco-btn moco-btn-blue preview-btn">预览</button>
                            </a> -->
                        </li>
                                                <li data-media-id="2752">
                                                            <a href='/video/2752' class="J-media-item">
                                    <i class="icon-video type"></i>
                                    4-3 Java  中的抽象类 
                                                                            (07:03)
                                                                        
                                                                        <button class="r moco-btn moco-btn-red preview-btn">开始学习</button>
                                                                        
                                </a>
                                                        <!-- 未登录时 -->
                            <!-- <a target="_blank" href="/video/1430" class="J-media-item studyvideo">1-1 Java简介 (05:49)
                                <button class="r moco-btn moco-btn-blue preview-btn">预览</button>
                            </a> -->
                        </li>
                                                <li data-media-id="2760">
                                                            <a href='/ceping/2760' class="J-media-item">
                                    <i class="icon-test type"></i>
                                    4-4 练习题
                                    
                                                                        <button class="r moco-btn moco-btn-red preview-btn">开始学习</button>
                                                                        
                                </a>
                                                        <!-- 未登录时 -->
                            <!-- <a target="_blank" href="/video/1430" class="J-media-item studyvideo">1-1 Java简介 (05:49)
                                <button class="r moco-btn moco-btn-blue preview-btn">预览</button>
                            </a> -->
                        </li>
                                                <li data-media-id="2789">
                                                            <a href='/video/2789' class="J-media-item">
                                    <i class="icon-video type"></i>
                                    4-5 Java 中的接口 
                                                                            (13:04)
                                                                        
                                                                        <button class="r moco-btn moco-btn-red preview-btn">开始学习</button>
                                                                        
                                </a>
                                                        <!-- 未登录时 -->
                            <!-- <a target="_blank" href="/video/1430" class="J-media-item studyvideo">1-1 Java简介 (05:49)
                                <button class="r moco-btn moco-btn-blue preview-btn">预览</button>
                            </a> -->
                        </li>
                                                <li data-media-id="2790">
                                                            <a href='/ceping/2790' class="J-media-item">
                                    <i class="icon-test type"></i>
                                    4-6 练习题
                                    
                                                                        <button class="r moco-btn moco-btn-red preview-btn">开始学习</button>
                                                                        
                                </a>
                                                        <!-- 未登录时 -->
                            <!-- <a target="_blank" href="/video/1430" class="J-media-item studyvideo">1-1 Java简介 (05:49)
                                <button class="r moco-btn moco-btn-blue preview-btn">预览</button>
                            </a> -->
                        </li>
                                                <li data-media-id="3029">
                                                            <a href='/video/3029' class="J-media-item">
                                    <i class="icon-video type"></i>
                                    4-7 UML 简介 
                                                                            (15:48)
                                                                        
                                                                        <button class="r moco-btn moco-btn-red preview-btn">开始学习</button>
                                                                        
                                </a>
                                                        <!-- 未登录时 -->
                            <!-- <a target="_blank" href="/video/1430" class="J-media-item studyvideo">1-1 Java简介 (05:49)
                                <button class="r moco-btn moco-btn-blue preview-btn">预览</button>
                            </a> -->
                        </li>
                                            </ul>
                                        <!-- 章节小节 end -->
                </div>
                            <div class="chapter ">
                    <!-- 章节标题 -->
                    <h3>
                        
                        <span class="icon-drop_down js-close"></span>
                        <strong>
                            <i class="icon-chapter"></i>
                            第5章 阶段练习
                            <div class="icon-info chapter-info">
                                <i class="icon-drop_up triangle">
                                    <div class="chapter-introubox">
                                        <div class="chapter-content">通过人类继承关系的案例进一步学习Java中的面向对象</div>
                                    </div>
                                </i>
                            </div>
                        </strong>
                        
                    </h3>
                    <!-- 章节标题 end -->
                    <!-- 章节小节 -->
                                        <ul class="video">
                                                <li data-media-id="6223">
                                                            <a href='/video/6223' class="J-media-item">
                                    <i class="icon-video type"></i>
                                    5-1 阶段练习 
                                                                            (02:17)
                                                                        
                                                                        <button class="r moco-btn moco-btn-red preview-btn">开始学习</button>
                                                                        
                                </a>
                                                        <!-- 未登录时 -->
                            <!-- <a target="_blank" href="/video/1430" class="J-media-item studyvideo">1-1 Java简介 (05:49)
                                <button class="r moco-btn moco-btn-blue preview-btn">预览</button>
                            </a> -->
                        </li>
                                                <li data-media-id="6224">
                                                            <a href='/video/6224' class="J-media-item">
                                    <i class="icon-video type"></i>
                                    5-2 代码实现 
                                                                            (08:20)
                                                                        
                                                                        <button class="r moco-btn moco-btn-red preview-btn">开始学习</button>
                                                                        
                                </a>
                                                        <!-- 未登录时 -->
                            <!-- <a target="_blank" href="/video/1430" class="J-media-item studyvideo">1-1 Java简介 (05:49)
                                <button class="r moco-btn moco-btn-blue preview-btn">预览</button>
                            </a> -->
                        </li>
                                            </ul>
                                        <!-- 章节小节 end -->
                </div>
                            <div class="chapter ">
                    <!-- 章节标题 -->
                    <h3>
                        
                        <span class="icon-drop_down js-close"></span>
                        <strong>
                            <i class="icon-chapter"></i>
                            第6章 项目实战
                            <div class="icon-info chapter-info">
                                <i class="icon-drop_up triangle">
                                    <div class="chapter-introubox">
                                        <div class="chapter-content">综合实战项目，编写属于你的“答答租车系统”，快来加入吧！！</div>
                                    </div>
                                </i>
                            </div>
                        </strong>
                        
                    </h3>
                    <!-- 章节标题 end -->
                    <!-- 章节小节 -->
                                        <ul class="video">
                                                <li data-media-id="3334">
                                                            <a href='/video/3334' class="J-media-item">
                                    <i class="icon-video type"></i>
                                    6-1 综合练习 
                                                                            (09:07)
                                                                        
                                                                        <button class="r moco-btn moco-btn-red preview-btn">开始学习</button>
                                                                        
                                </a>
                                                        <!-- 未登录时 -->
                            <!-- <a target="_blank" href="/video/1430" class="J-media-item studyvideo">1-1 Java简介 (05:49)
                                <button class="r moco-btn moco-btn-blue preview-btn">预览</button>
                            </a> -->
                        </li>
                                                <li data-media-id="5114">
                                                            <a href='/video/5114' class="J-media-item">
                                    <i class="icon-video type"></i>
                                    6-2 项目问题解析 1 
                                                                            (03:01)
                                                                        
                                                                        <button class="r moco-btn moco-btn-red preview-btn">开始学习</button>
                                                                        
                                </a>
                                                        <!-- 未登录时 -->
                            <!-- <a target="_blank" href="/video/1430" class="J-media-item studyvideo">1-1 Java简介 (05:49)
                                <button class="r moco-btn moco-btn-blue preview-btn">预览</button>
                            </a> -->
                        </li>
                                            </ul>
                                        <!-- 章节小节 end -->
                </div>
                                    </div>
            <!-- 课程章节 end -->
        </div><!--content end-->
        <div class="aside r">
            <div class="bd">
    
        
        <div class="box mb40 js-usercard-box">
        <h4>讲师提示</h4>
                        <div class="teacher-info">
            <a href="/u/194288/courses?sort=publish" target="_blank" >
                <img data-userid="194288" class="js-usercard-dialog" src="picture/539f9dd90001fc8401400140-80-80.jpg" width="80" height="80">
            </a>
            <span class="tit">
                <a href="/u/194288/courses?sort=publish" target="_blank">小慕</a><i class="icon-imooc"></i>
            </span>
            <span class="job">JAVA开发工程师</span>
        </div>
                <div class="teacher-info">
            <a href="/u/112258/courses?sort=publish" target="_blank" >
                <img data-userid="112258" class="js-usercard-dialog" src="picture/535f03950001915501400140-80-80.jpg" width="80" height="80">
            </a>
            <span class="tit">
                <a href="/u/112258/courses?sort=publish" target="_blank">laurenyang</a><i class="icon-imooc"></i>
            </span>
            <span class="job">JAVA开发工程师</span>
        </div>
                                <div class="course-info-tip">
                        <dl class="first">
                <dt>课程须知</dt>
                <dd class="autowrap">本课程是Java开发的基础，需要大家：掌握 Java 基本语法的使用。如果您是新手，建议先移步 《Java入门第一季》
</dd>
            </dl>
                                    <dl>
                <dt>老师告诉你能学到什么？</dt>
                <dd class="autowrap">• 掌握 Java 基本语法和编程思路
• 熟练运用面向对象程序设计思想
</dd>
            </dl>
                    </div>
            </div>
    
    <div class="js-recom-box"></div>

</div>        </div>
    </div>
    <div class="clear"></div>

</div>
<!-- 视频介绍 -->
<div id="js-video-wrap" class="video pop-video" style="display:none">
    <div class="video_box" id="js-video"></div>
    <a href="javascript:;" class="pop-close icon-close"></a>
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
<script src="{{asset('new')}}/js/ssologin.js"></script>
<script type="text/javascript" src="{{asset('new')}}/js/sea.js"></script>
<script type="text/javascript" src="{{asset('new')}}/js/sea_config.js"></script>
<script type="text/javascript">seajs.use("/static/page/"+OP_CONFIG.module+"/"+OP_CONFIG.page);</script>

 

<script type="text/javascript">
  (function(){
    var imgPic = GC.course.pic || 'http://img.mukewang.com/static/img/common/logo.png',
        text = '我正在参加@慕课网  的一门课程【' + GC.course.name + '】，很不错哦！快来一起学习吧！', //节名称
        url = 'http://www.imooc.com' + window.location.pathname;

    window._bd_share_config = {
        "common": {
            "bdUrl": url,
            "bdSnsKey": {
              'tsina':'2254855082'
            },
            "bdText": text,
            "bdMini": "2",
            "bdMiniList": false,
            "bdPic": imgPic,
            "bdStyle": "0",
            "bdSize": "16"
        },
        "share": {}
    };
    setTimeout(function(){
            with(document) 0[(getElementsByTagName('head')[0] || body).appendChild(createElement('script')).src = 'http://bdimg.share.baidu.com/static/api/{{asset('new')}}/js/share.js?v=89860593.js?cdnversion=' + ~(-new Date() / 36e5)];
        },1000)

  })();
</script>
<div class="mask"></div>


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
