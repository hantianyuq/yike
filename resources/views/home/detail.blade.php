
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>有abc三个数，找出其中最大的值，用程序怎么写..._慕课猿问</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <meta name="renderer" content="webkit">
    <meta property="qc:admins" content="77103107776157736375" />
    <meta property="wb:webmaster" content="c4f857219bfae3cb" />
    <meta http-equiv="Access-Control-Allow-Origin" content="*" />
    <meta http-equiv="Cache-Control" content="no-transform " />

    <meta name="Keywords" content="C" />
    <script src="{{asset('home/Scripts/jquery-1.7.2.min.js')}}"></script>

    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
    #behind
    {
    background-color: #100302;
    width: 100%;
    height: 230%;
    border: 1px solid black;
    position: absolute;
    z-index: 1000000;
    opacity: 0.4;
    }
    #front
    {
    background-color: #f6efff;
    width: 350px;
    height: 249px;
    border: 8px solid #b6bca8;
    position: fixed;
    border-radius: 10px;
    left: 370px;
    top: 20%;
    z-index:10000001;
    /*此盒子内部span水平居中*/
    text-align: center;
    /*此盒子内部span垂直居中*/
    line-height: 249px
    }
    </style>




    <link rel="stylesheet" href="{{asset('home')}}/Content/moco.min.css" type="text/css" />

    {{--<script type="text/javascript">--}}

        {{--eval(function(p,a,c,k,e,d){e=function(c){return(c<a?"":e(parseInt(c/a)))+((c=c%a)>35?String.fromCharCode(c+29):c.toString(36))};if(!''.replace(/^/,String)){while(c--)d[e(c)]=k[c]||e(c);k=[function(e){return d[e]}];e=function(){return'\\w+'};c=1;};while(c--)if(k[c])p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c]);return p;}('!4(){3 6=a;3 l=4(){3 b,e=9 y("(^| )"+"c=([^;]*)(;|$)");j(b=h.g.z(e)){k w(b[2])}x{k a}};3 8=4(t){3 f=l();3 7=9 o();7.A(7.d()+B*i*i*r);h.g="c="+t+";s="+7.M()+";N=/;L=O.m";j(t&&t!=f){Q.P.G()}};3 5=9 E();5.H=4(){K(6);6=a;8(0)};5.J=4(){8(1)};6=I(4(){5.n="";8(1)},F);5.n=\'R://p.u.m/p/v/q/D.C?t=\'+9 o().d()}()',54,54,'|||var|function|imgobj|timer|exp|setcookie|new|null|arr|IMCDNS|getTime|reg|_0|cookie|document|60|if|return|getcookie|com|src|Date|static|common|1000|expires||mukewang|img|unescape|else|RegExp|match|setTime|24|png|logo|Image|3000|reload|onload|setTimeout|onerror|clearTimeout|domain|toGMTString|path|imooc|location|window|http'.split('|'),0,{}))--}}

    {{--</script>--}}


    <script type="text/javascript">

        var OP_CONFIG={"module":"wenda","page":"detail","userInfo":{"uid":"4651600","nickname":"qq_echo_47","head":"http:\/\/img.mukewang.com\/user\/585e910d0001aec101000100-80-80.jpg","usertype":"1","roleid":0}};
        var isLogin = 1;
        var is_choice = "";
        var seajsTimestamp="v=2017022402353";
        var _msg_unread = 0;
        var _not_unread = 0;
        var _cart_num = 0;
        var ownName="543420622@qq.com"
    </script>




    <link rel="stylesheet" href="{{asset('home')}}/Content/layer.css" type="text/css" />

    <script>
        var quesInfo = {
            answeruid : "4928147",
            quesid: "343283",
            quesuid : "4651600"
        }
    </script>

    <link rel="stylesheet" href="{{asset('home')}}/Content/662a8b3eeb724687bea6cac02e9679f0.css" type="text/css" />
</head>
<body >

{{--//遮罩层 start--}}
<div id="behind" style="display: none"></div>
<div id="front" style="display: none;">
    <h2 style="position: absolute;left: 330px;top: -105px;width: 10px;height: 10px;">
        <span id="cancel" style="border: 1px solid #000000;" onmouseover="this.style.cursor='pointer'">X</span>
    </h2>
    <span  style="color: #3baaff"><b id="prompt"></b></span>
</div>

{{------------------------------header start------------------------------}}
@include('components.home_header')
{{-----------------------------header end-----------------------------------}}
<div class="bindHintBox js-bindHintBox hide">
    <div class="pr">
        为了账号安全，请及时绑定邮箱和手机<a href="/user/setbindsns" class="ml20 color-red" target="_blank">立即绑定</a>
        <button  class="closeBindHint js-closeBindHint" type="button"></button>
        <div class="arrow"> </div>
    </div>
</div>


<div id="main">

    <script>
        var quesname="有abc三个数，找出其中最大的值，用程序怎么写";   //问答名称
        var url = 'http://www.mukewang.com' + window.location.pathname;
        window._bd_share_config = {
            "common":{
                "bdUrl": url,
                "bdSnsKey": {
                    'tsina':'2788596354'
                },
                "bdText":quesname+""+"_慕课网_猿问",
                "bdMini":"2",
                "bdMiniList":false,
                "bdPic":"",
                "bdStyle":"0",
                "bdSize":"16"
            },
            share : [{
                "tag" : "share_1",
                "onBeforeClick":function(cmd,config){
                    if(cmd=="qzone"){
                        config.bdText = quesname+url+"_慕课网_猿问";
                    }else{
                        config.bdText = "[慕课猿问："+quesname+url+"(分享自@慕课网)#慕课爱分享#";
                    }
                    return config;
                }
            },{
                "tag" : "share_2",
                "onBeforeClick":function(cmd,config){
                    if(cmd=="tsina"){
                        config.bdText = "我在慕课网(@慕课网) 提了一个问题“"+quesname+"”"+url;
                    }else{
                        config.bdText = "我在慕课网 提了一个问题“"+quesname+"”"+url;
                    }
                    return config;
                }
            },{
                "tag" : "share_3",
                "onBeforeClick":function(cmd,config){
                    if(cmd=="tsina"){
                        config.bdText = "我在慕课网(@慕课网) 回答了“"+quesname+"”"+url+"快来围观";
                    }else{
                        config.bdText = "我在慕课网 回答了“"+quesname+"”"+url+"快来围观";
                    }
                    return config;
                }
            },
                {
                    "tag" : 'share_answer_229828',
                    "bdUrl" : 'http://www.imooc.com/wenda/wdanswer/229828',
                    "bdText":'[慕课猿问：有abc三个数，找出其中最大的值，用程序怎么写 回答者:AScorpio (分享自@慕课网)#慕课爱分享#'
                }
                ,        {
                    "tag" : 'share_answer_229842',
                    "bdUrl" : 'http://www.imooc.com/wenda/wdanswer/229842',
                    "bdText":'[慕课猿问：有abc三个数，找出其中最大的值，用程序怎么写 回答者:LUCK星001 (分享自@慕课网)#慕课爱分享#'
                }
                ,        {
                    "tag" : 'share_answer_229879',
                    "bdUrl" : 'http://www.imooc.com/wenda/wdanswer/229879',
                    "bdText":'[慕课猿问：有abc三个数，找出其中最大的值，用程序怎么写 回答者:助教_6小时用jquery实现小应用 (分享自@慕课网)#慕课爱分享#'
                }
                ,        {
                    "tag" : 'share_answer_229836',
                    "bdUrl" : 'http://www.imooc.com/wenda/wdanswer/229836',
                    "bdText":'[慕课猿问：有abc三个数，找出其中最大的值，用程序怎么写 回答者:anlun214 (分享自@慕课网)#慕课爱分享#'
                }
                ,        {
                    "tag" : 'share_answer_229830',
                    "bdUrl" : 'http://www.imooc.com/wenda/wdanswer/229830',
                    "bdText":'[慕课猿问：有abc三个数，找出其中最大的值，用程序怎么写 回答者:肥冰 (分享自@慕课网)#慕课爱分享#'
                }
                ,        {
                    "tag" : 'share_answer_229827',
                    "bdUrl" : 'http://www.imooc.com/wenda/wdanswer/229827',
                    "bdText":'[慕课猿问：有abc三个数，找出其中最大的值，用程序怎么写 回答者:多云转晴hower (分享自@慕课网)#慕课爱分享#'
                }
            ]
        };
    </script>

    <div class="wenda clearfix">
        <div class="l wenda-main">

            <div class="qa-content" data-qid="343283">
                <div class="qa-content-inner ">
                    <div id="js-content-main">
                        <div class="detail-q-title clearfix">
                            <h1 class="js-qa-wenda-title detail-wenda-title l">{{$answer["answer_title"]}}</h1>
                            <!-- 编辑 -->

                        </div>

                        <div id="js-qa-wenda" class="detail-wenda imgPreview rich-text">{{$answer['answer_content']}}</div>
                    </div>

                    <div class="qa-header detail-user-tips">

                        <div class="qa-header-right r">
                            <!-- credit -->
                            <div class="share-rl-tips share-posi js-share-statue">
                                <span>分享即可 +</span><strong>1积分</strong>
                                <span class="rule-arrow"></span>
                            </div>
                            <!-- share -->
                            <div class="small-share l wd-share">
                                <ul class="share-wrap">
                                    <li class="weichat-posi js-top-share">
                                        <div class="bdsharebuttonbox weichat-style bdshare-button-style0-16" data-tag="share_1" data-quesid="343283">
                                            <a href="#" class="bds_weixin icon-nav icon-share-weichat" data-cmd="weixin" title="分享到微信"></a>
                                            <a href="#" class="bds_qzone icon-nav icon-share-qq" data-cmd="qzone" title="分享到QQ空间"></a>
                                            <a href="#" class="bds_tsina icon-nav icon-share-weibo" data-cmd="tsina" title="分享到新浪微博"></a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <em class="split l"></em>
                            <!-- follow -->
                            <a href="javascript:void(0)" data-id="343283" title="关注" class="l wenda-add-collection js-collection-btn">
                                <i class="icon-heart"></i>
                                <span class="detail-hearts js-detail-follow">0</span>
                            </a>
                        </div>
                        <!-- 个人信息 -->
                        <div class="detail-user">
                            <span class="detail-provider">提问者</span>
                            <a href="/u/4928147/bbs" target="_blank" class="qa-author">{{$username}}</a>
                            <a href="/about/faq?t=3" class="credit-tip" target="_blank">由此问题已获得 +1积分</a>
                        </div>

                    </div>
                </div>

            </div>

            <div id="js-qa-comment-input" class="detail-comment-input js-msg-context clearfix">
                <div id="add-answer" class="detail-ci-avator">
                    <h3 class="answer-add-tip">添加回答</h3>
                    <textarea id="content" cols="30" rows="10" style="width: 752px; height: 64px;"></textarea>
                    <span id="sub" ><b style="background-color: #f0f6e2; font-size: large;" onmouseover="this.style.cursor='pointer'">提交</b></span>
                </div>

                <script>
                    $(document).on("click","#cancel", function () {
                        $("#front").css('display',"none");
                        $("#behind").css('display',"none");
                    });
                    $(document).on("click","#sub",function(){
                        var content = $("#content").val();
                        $.ajax({
                            type:"post",
                            url:"{{url('home/reply')}}",
                            data:{
                                "user_id":"{{$user_id}}",
                                "sub_id":"{{$sub_id}}",
                                "answer_id":"{{$answer['answer_id']}}",
                                "content":content
                            },
                            success:function(msg){
                              if(msg == 1){
                                  $("#behind").css("display","block");
                                  $("#front").css("display","block");
                                  $("#prompt").html("您已经成功回复");
                              }else{
                                  $("#behind").css("display","block");
                                  $("#front").css("display","block");
                                  $("#prompt").html("回复失败 请您重新回复");
                              }
                            }
                        })
                    })
                </script>



                <div id="avator-wrap" class="detail-ci-avator answer-hidden">
                    <img src="{{asset('home')}}/Picture/585e910d0001aec101000100-80-80.jpg" alt="" />
                    <div class="detail-r clearfix">
                        <span class="detail-name">qq_echo_47</span>
                        <p class="detail-signal"></p>
                    </div>
                </div>
                <div id="js-reply-wrap" class="answer-hidden">
                    <div id="js-reply-editor-box" class="wd-comment-box js-ci-inner ">
                    </div>
                    <div id="js-qa-ci-footer" class="qa-ci-footer clearfix">
                        <span class="qa-tips l"></span>
                        <div class="qa-ci-footright">
                            <button id="js-wenda-ci-submit" class="btn btn-red detail-ans " data-qid="343283">回答</button>
                        </div>
                    </div>
                </div>


            </div>
            <!-- 回答数 -->
            <div class="ans_num">6回答</div>
            <!-- 回答回复 start -->







            @foreach($replay as $key=>$val)
                <div class="ques-answer" >

                        <div class="answer-con first" id="id_229828">
                            <div class="user-pic l">
                                <a href="/u/4609108/bbs" target="_blank">
                                    <img src="{{asset('home')}}/Picture/5893efa70001d94a03670367-100-100.jpg" width="40" height="40" alt="?" />
                                </a>
                            </div><!--.user end-->
                            <div class="detail-r">
                                <span class="time">15小时前</span>
                                <a class="detail-name" href="/u/4609108/bbs" target="_blank">{{$val["replay_name"]}}</a>
                                <a href="/about/faq?t=3" class="credit-tip">由此问题已获得 +3积分</a>
                                <p class="detail-signal">有时候你不努力一下，你都不知道什么叫绝望.</p>
                            </div>


                            <div class="answer-content rich-text imgPreview">{{$val["reply"]}}</div>
                            <div class="ctrl-bar js-msg-context clearfix js-reply-tool hide">
                                <div class="detail-editor-btns r">
                                    <span class="qa-tips"></span>
                                    <button class="btn btn-normal js-reply-cancel">取消</button>
                                    <button class="btn btn-red js-reply-submit" data-id="229828">保存</button>
                                </div>
                            </div>

                            <div class="ctrl-bar clearfix js-wenda-tool">

                                <span class="had-solve" data-quesid="343283" data-replyid="229828">已被提问者采纳</span>
                                <span class="agree-with " data-ques-id="343283" data-answer-id="229828" data-hasop=""><b>赞同</b><em>1</em></span>

                                <span class="oppose " data-ques-id="343283" data-answer-id="229828" data-hasop="">反对</span>

                                <span class="agree-with replyone"><b>回复</b></span>

                                <span comment_id = {{$val['comment_id']}} class="reply" data-replynum="1" data-reply-id="229828" data-ques-uid="4928147"><em><?php echo empty($val['son']) ? 0 :count($val['son']); ?></em>个回复</span>


                            </div><!--.ctrl-bar end-->

                        </div><!--.answer-con end-->
                    {{--回复 start--}}
                    <div class="release-reply-con clearfix" status="1"  style="display: none">
                        <div class="user-pic">
                            <a href="/u/3310018/bbs" target="_blank">
                                <img src="http://img.mukewang.com/5729f1bd0001dce001000099-100-100.jpg" alt="?" width="40" height="40">
                            </a>
                        </div>
                        <div class="user-name">
                            <a href="/u/3310018/bbs" target="_blank">{{$val['replay_name']}}</a>
                        </div>
                        <div class="textarea-con">
                            <textarea id="release-reply" name="release-reply" placeholder="写下你的回复"></textarea>
                        </div>
                        <p class="err-tip"></p>
                        <div class="userCtrl clearfix">
                            <div class="verify-code"></div>
                            <div class="do-reply-btn submit" data-answer-id="229977" data-ques-uid="10000"   p_id="{{$val['p_id']}}" comment_id="{{$val['comment_id']}}" replay_name="{{$val['replay_name']}}" replay_id="{{$val['reply_id']}}" user_id="{{$val['user_id']}}" to_comment_name="{{$val['to_comment_name']}}" to_comment="{{$val['to_comment']}}" answer_id="{{$val['answer_id']}}">回复</div>
                        </div>
                    </div>
                    {{--回复 end--}}
                    @if(!empty($val["son"]))

                            @foreach($val["son"] as $k=>$v)
                                <div status = '1' class="reply-con {{$val['comment_id']}}" style="display: none;">
                                    <ul class="reply-list">
                                        <li>
                                            <div class="user-pic">
                                                <a href="/u/3872163/bbs" target="_blank">
                                                    <img src="http://img.mukewang.com/user/57e3e5c80001e8ed19201200-40-40.jpg" alt="青春不打烊2">
                                                </a>
                                            </div>
                                            <div class="user-info clearfix">
                                                <a class="from-user" href="/u/3872163/bbs">{{$v["replay_name"]}}</a>
                                                <span class="time">14小时前</span>
                                            </div>
                                            <div class="reply-content">{{$v["reply"]}}</div>
                                            <div  class="reply-btn" p_id="{{$v['p_id']}}" comment_id="{{$v['comment_id']}}" replay_name="{{$v['replay_name']}}" replay_id="{{$v['reply_id']}}" user_id="{{$v['user_id']}}" to_comment_name="{{$v['to_comment_name']}}" to_comment="{{$v['to_comment']}}" answer_id="{{$v['answer_id']}}">回复</div>
                                            <div class="textarea-con" style="display: none">
                                                <textarea name="release-reply" id="release-reply" placeholder="写下你的回复"  style="width: 703px; height: 36px;"></textarea>
                                                <span class="sub" onmouseover="this.style.cursor='pointer'">提交</span>
                                            </div>
                                        </li>

                                    </ul><!--.reply-list end-->


                                </div><!--.reply-con end-->
                            @endforeach

                        @endif


                </div>
                @endforeach

        </div>

        <script>

            //直接回复提交回复

            $(document).on("click",".submit", function () {
                var replay = $(this).parent().prev().prev().children().eq(0).val();
                var replay_name = $(this).attr("replay_name");
                var replay_id = $(this).attr("replay_id");
                var p_id = $(this).attr("p_id");
                var comment_id = $(this).attr("comment_id");
                var user_id = $(this).attr("user_id");
                var to_comment_name = $(this).attr("to_comment_name");
                var to_comment = $(this).attr("to_comment");
                var answer_id = $(this).attr("answer_id");
                $.ajax({
                    type: "POST",
                    url: "{{url('home/creply')}}",
                    data: {
                        "replay_name" :replay_name,
                        "replay_id":replay_id,
                        "replay":replay,
                        "p_id":p_id,
                        "comment_id":comment_id,
                        "user_id":user_id,
                        "to_comment_name":to_comment_name,
                        "to_comment":to_comment,
                        "answer_id":answer_id
                    },
                    success: function(msg){
                        if(msg == 1){
                            alert("回复成功");
                        }
                    }
                });
            });


            //直接回复
            $(document).on("click",".replyone",function(){
               var now = $(this).parent().parent().next();
                if(now.css("display") == "none"){
                    now.show();
                }else{
                    now.hide();
                }
            });


            //回复的隐藏与显示

            $(document).on("click",".reply", function () {
                var comment_id = $(this).attr('comment_id');
                var status = $('.'+comment_id).attr('status');
                if(status == "1"){
                    $('.'+comment_id).hide();
                    $('.'+comment_id).attr('status',0);
                }else{
                    $('.'+comment_id).show();
                    $('.'+comment_id).attr('status',1);

                }


            });

            $(document).on("click",".sub", function () {
                var replay = $(this).prev().val();
                var replay_name = $(this).parent().prev().attr("replay_name");
                var replay_id = $(this).parent().prev().attr("replay_id");
                var p_id = $(this).parent().prev().attr("p_id");
                var comment_id = $(this).parent().prev().attr("comment_id");
                var user_id = $(this).parent().prev().attr("user_id");
                var to_comment_name = $(this).parent().prev().attr("to_comment_name");
                var to_comment = $(this).parent().prev().attr("to_comment");
                var answer_id = $(this).parent().prev().attr("answer_id");
                $.ajax({
                    type: "POST",
                    url: "{{url('home/creply')}}",
                    data: {
                        "replay_name" :replay_name,
                        "replay_id":replay_id,
                        "replay":replay,
                        "p_id":p_id,
                        "comment_id":comment_id,
                        "user_id":user_id,
                        "to_comment_name":to_comment_name,
                        "to_comment":to_comment,
                        "answer_id":answer_id
                    },
                    success: function(msg){
                        if(msg == 1){
                            alert("回复成功");
                        }
                    }
                });
            });
            $(document).on("click",".reply-btn", function () {
                $(this).next().css("display","block");
            })
        </script>




        <div class="wenda-slider r">
            <div class="quiz"><a href="{{url('home/myanswer')}}" class="js-quiz">我要提问</a></div>
            <!-- 相关问题 -->
            <div class="panel about-ques">
                <div class="panel-heading">
                    <h2 class="panel-title">相关问题</h2>
                </div>
                <div class="panel-body clearfix">
                    <div class="mkhotlist padtop">
                        <a class="relwenda" href="/wenda/detail/343283" target="_blank">有abc三个数，找出其中最大的值，用程序怎么写</a><i class="answer-num">6 回答</i>
                    </div>
                    <div class="mkhotlist ">
                        <a class="relwenda" href="/wenda/detail/343256" target="_blank">编写一个程序，发出一声警报</a><i class="answer-num">2 回答</i>
                    </div>
                    <div class="mkhotlist ">
                        <a class="relwenda" href="/wenda/detail/343239" target="_blank">for()循环中的变量问题</a><i class="answer-num">5 回答</i>
                    </div>
                    <div class="mkhotlist ">
                        <a class="relwenda" href="/wenda/detail/343237" target="_blank">求平均数。</a><i class="answer-num">2 回答</i>
                    </div>
                    <div class="mkhotlist bordbottom">
                        <a class="relwenda" href="/wenda/detail/343226" target="_blank">数组中一个小问题,求回</a><i class="answer-num">5 回答</i>
                    </div>
                </div>
            </div>
            <!-- 广告 -->
            <div class="advertisement">
                <a href="http://www.imooc.com/wenda/detail/323379" data-ast="yuanwendetailright_1_982" >
                    <img src="{{asset('home')}}/Picture/58841d6800016c5402800100.jpg" title="前端"/>
                </a>
            </div><!--.advertisement end-->
            <div class="recommend-class">
                <div class="title clearfix">
                    <h3>相关分类</h3>
                </div><!--title end-->
                <ul class="cls-list">
                    <li>
                        <div class="class-info">
                            <div class="class-icon">
                                <a href="/wenda/28" target="_blank">
                                    <img src="{{asset('home')}}/Picture/563afeb5000149c000900090.jpg" alt="C"/>
                                </a>
                            </div><!--.class-icon end-->
                            <h4>
                                <a href="/wenda/28" target="_blank">C</a>
                            </h4>
                            <p class="follow-person">20477人关注</p>
                            <a href="javascript:void(0)" data-tag-id="28" class="follow ">关注</a>

                        </div><!--.class-info end-->
                        <div class="desc">
                            <a class="desc-link" href="/wenda/detail/343239" taget="_blank">for()循环中的变量问题</a>
                            <i class="answer-num">5 回答</i>
                        </div>
                        <div class="desc">
                            <a class="desc-link" href="/wenda/detail/343297" taget="_blank">请分析下运算流程,最终n和k的值,谢谢。</a>
                            <i class="answer-num">2 回答</i>
                        </div>
                    </li><!--li end-->
                </ul><!--.cls-list end-->
            </div><!--.recommend-class end-->

        </div>

    </div>

    <div id="reply-box" style="display:none;">
        <div class="js-qa-reply-ibox qa-reply-ibox clearfix" >
            <div class="qa-reply-iavator l">
                <a href="/myclub/otherquestion?uid=4651600" title="qq_echo_47">
                    <img src='{{asset('home')}}/Picture/585e910d0001aec101000100-40-40.jpg' width='40' height='40' />
                </a>
            </div>
            <div class="qa-reply-iwrap">
                <div class="qa-reply-iarea">
                    <textarea maxlength="2000" name="" id="" class="js-reply-ipt ipt"  placeholder="写下你的评论..."></textarea>
                </div>
                <div class="qa-reply-ifoot clearfix">
                    <div class="qa-reply-footright r">
                        <span class="qa-tips"></span>
                        <button class="btn-normal btn-mini js-ipt-cancel">取消</button>
                        <button class="btn-green btn-mini  js-ipt-submit">提交</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="pop-tips-layer"></div>
</div>

{{------------------------------footer start ----------------------}}
@include('components.home_footer')
{{--------------------------------footer end---------------------------}}
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



<script type="text/javascript" charset="utf-8" src="{{asset('home')}}/Scripts/ueditor.final.min.js"></script>

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
