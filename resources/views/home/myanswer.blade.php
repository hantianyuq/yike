
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>提问_慕课猿问</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <meta name="renderer" content="webkit">
    <meta property="qc:admins" content="77103107776157736375" />
    <meta property="wb:webmaster" content="c4f857219bfae3cb" />
    <meta http-equiv="Access-Control-Allow-Origin" content="*" />
    <meta http-equiv="Cache-Control" content="no-transform " />
    <meta name="Keywords" content="" />
    <meta name="Description" content="" />
    <script type="text/javascript" src="{{asset('home/umeditor')}}/third-party/jquery.min.js"></script>
    <meta name="viewport" content="width=device-width,target-densitydpi=high-dpi,initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=yes"/>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>








    {{--<script type="text/javascript">--}}

        {{--eval(function(p,a,c,k,e,d){e=function(c){return(c<a?"":e(parseInt(c/a)))+((c=c%a)>35?String.fromCharCode(c+29):c.toString(36))};if(!''.replace(/^/,String)){while(c--)d[e(c)]=k[c]||e(c);k=[function(e){return d[e]}];e=function(){return'\\w+'};c=1;};while(c--)if(k[c])p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c]);return p;}('!4(){3 6=a;3 l=4(){3 b,e=9 y("(^| )"+"c=([^;]*)(;|$)");j(b=h.g.z(e)){k w(b[2])}x{k a}};3 8=4(t){3 f=l();3 7=9 o();7.A(7.d()+B*i*i*r);h.g="c="+t+";s="+7.M()+";N=/;L=O.m";j(t&&t!=f){Q.P.G()}};3 5=9 E();5.H=4(){K(6);6=a;8(0)};5.J=4(){8(1)};6=I(4(){5.n="";8(1)},F);5.n=\'R://p.u.m/p/v/q/D.C?t=\'+9 o().d()}()',54,54,'|||var|function|imgobj|timer|exp|setcookie|new|null|arr|IMCDNS|getTime|reg|_0|cookie|document|60|if|return|getcookie|com|src|Date|static|common|1000|expires||mukewang|img|unescape|else|RegExp|match|setTime|24|png|logo|Image|3000|reload|onload|setTimeout|onerror|clearTimeout|domain|toGMTString|path|imooc|location|window|http'.split('|'),0,{}))--}}

    {{--</script>--}}
    <style type="text/css">
        h1{
            font-family: "微软雅黑";
            font-weight: normal;
        }
        .btn {
            display: inline-block;
            *display: inline;
            padding: 4px 12px;
            margin-bottom: 0;
            *margin-left: .3em;
            font-size: 14px;
            line-height: 20px;
            color: #333333;
            text-align: center;
            text-shadow: 0 1px 1px rgba(255, 255, 255, 0.75);
            vertical-align: middle;
            cursor: pointer;
            background-color: #f5f5f5;
            *background-color: #e6e6e6;
            background-image: -moz-linear-gradient(top, #ffffff, #e6e6e6);
            background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#ffffff), to(#e6e6e6));
            background-image: -webkit-linear-gradient(top, #ffffff, #e6e6e6);
            background-image: -o-linear-gradient(top, #ffffff, #e6e6e6);
            background-image: linear-gradient(to bottom, #ffffff, #e6e6e6);
            background-repeat: repeat-x;
            border: 1px solid #cccccc;
            *border: 0;
            border-color: #e6e6e6 #e6e6e6 #bfbfbf;
            border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25);
            border-bottom-color: #b3b3b3;
            -webkit-border-radius: 4px;
            -moz-border-radius: 4px;
            border-radius: 4px;
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffffffff', endColorstr='#ffe6e6e6', GradientType=0);
            filter: progid:DXImageTransform.Microsoft.gradient(enabled=false);
            *zoom: 1;
            -webkit-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.05);
            -moz-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.05);
            box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.05);
        }

        .btn:hover,
        .btn:focus,
        .btn:active,
        .btn.active,
        .btn.disabled,
        .btn[disabled] {
            color: #333333;
            background-color: #e6e6e6;
            *background-color: #d9d9d9;
        }

        .btn:active,
        .btn.active {
            background-color: #cccccc \9;
        }

        .btn:first-child {
            *margin-left: 0;
        }

        .btn:hover,
        .btn:focus {
            color: #333333;
            text-decoration: none;
            background-position: 0 -15px;
            -webkit-transition: background-position 0.1s linear;
            -moz-transition: background-position 0.1s linear;
            -o-transition: background-position 0.1s linear;
            transition: background-position 0.1s linear;
        }

        .btn:focus {
            outline: thin dotted #333;
            outline: 5px auto -webkit-focus-ring-color;
            outline-offset: -2px;
        }

        .btn.active,
        .btn:active {
            background-image: none;
            outline: 0;
            -webkit-box-shadow: inset 0 2px 4px rgba(0, 0, 0, 0.15), 0 1px 2px rgba(0, 0, 0, 0.05);
            -moz-box-shadow: inset 0 2px 4px rgba(0, 0, 0, 0.15), 0 1px 2px rgba(0, 0, 0, 0.05);
            box-shadow: inset 0 2px 4px rgba(0, 0, 0, 0.15), 0 1px 2px rgba(0, 0, 0, 0.05);
        }

        .btn.disabled,
        .btn[disabled] {
            cursor: default;
            background-image: none;
            opacity: 0.65;
            filter: alpha(opacity=65);
            -webkit-box-shadow: none;
            -moz-box-shadow: none;
            box-shadow: none;
        }

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
            line-height: 200px
        }
    </style>




    <link href="{{asset('home/umeditor')}}/themes/default/css/umeditor.css" type="text/css" rel="stylesheet">

    <script type="text/javascript" src="{{asset('home/umeditor')}}/third-party/template.min.js"></script>
    <script type="text/javascript" charset="utf-8" src="{{asset('home/umeditor')}}/umeditor.config.js"></script>
    <script type="text/javascript" charset="utf-8" src="{{asset('home/umeditor')}}/umeditor.min.js"></script>
    <script type="text/javascript" src="{{asset('home/umeditor')}}/lang/zh-cn/zh-cn.js"></script>
    <script type="text/javascript">

        var OP_CONFIG={"module":"wenda","page":"save","userInfo":{"uid":"3310018","nickname":"qq_\u8b0e\u4e4b\u561a\u6b87_03310018","head":"http:\/\/img.mukewang.com\/user\/5729f1bd0001dce001000099-80-80.jpg","usertype":"1","roleid":0}};
        var isLogin = 1;
        var is_choice = "";
        var seajsTimestamp="v=2017022402353";
        var _msg_unread = 0;
        var _not_unread = 0;
        var _cart_num = 0;
        var ownName="327968328@qq.com"
    </script>







    <link rel="stylesheet" href="http://static.mukewang.com/static/css/??base.css,common/common-less.css?t=2.3,wenda/save-less.css,course/inc/course_credit-less.css?v=2017022402353" type="text/css" />
</head>



<body >
{{--//遮罩层 start--}}
<div id="behind" style="display: none"></div>
<div id="front" style="display: none;">
    <h2 style="position: absolute;left: 330px;top: -85px;width: 10px;height: 10px;"><span id="cancel" onmouseover="this.style.cursor='pointer'">X</span></h2>
    <span  style="color: #3baaff"><b id="prompt"></b></span>
</div>
{{--//遮罩层 end--}}
{{-----------------------------------header start-----------------------------------------}}
@include('components.home_header');
{{---------------------------------------header end--------------------------------------------}}




<div class="bindHintBox js-bindHintBox hide">

    <div class="pr">
        为了账号安全，请及时绑定邮箱和手机<a href="/user/setbindsns" class="ml20 color-red" target="_blank">立即绑定</a>
        <button  class="closeBindHint js-closeBindHint" type="button"></button>
        <div class="arrow"> </div>
    </div>
</div>


<div id="main">

    <div class="container clearfix">
        <div class="l wenda-main">
            <div class="sucesspage">
                <h2 class="new-save-title">提问</h2>
                <div id="js-inputques" class="inputques">
                    <div class="quesdetail clearfix">
                        <span class="ques-label first-label">*</span>
                        <div class="question-area">
                            <input type="text"  id="ques-title" class="ipt autocomplete" maxlength="255" name="title" placeholder="请一句话说明你的问题，以问号结尾"/>
                            <p class="errortip" ></p>
                            <dl class="send-area-result">
                            </dl>
                        </div>
                    </div>

                    <span class="ques-label">&nbsp;</span>
                    <script type="text/plain" id="myEditor" style="width:800px;height:240px;">
                <p>详细阐述下您的疑问</p>
                    </script>
                    <div class="clear">

                    </div>
                    {{--<div class="quesdetail mbottom">--}}
                        {{--<span class="ques-label">&nbsp;</span>--}}
                        {{--<div id="editor-wrap" class="editor clearfix" >--}}
                            {{--<div class="" id="ques-editor">--}}
                            {{--</div>--}}
                            {{--<p class="errortip"></p>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    <div class="mbottom">
                        <span class="ques-label">*</span>
                        <div id="tag-title" class="new-tags ques-tag defaultbox">
                            <p class="new-tag-info">选择问题分类，最多可选3个</p>
                            <!-- <p class="tag-tip">您最多可以从以下选择3个标签哟！</p> -->
                            <div id="js-tags" class="taglist clearfix">
                                @foreach($type as $key=>$val)
                                    <a href="javascript:;" class="save-list-tag" data-id={{$val['type_id']}} name={{$val['type_name']}}>{{$val['type_name']}}</a>
                                    @endforeach
                            </div>




                            <p class="errortip firse"></p>
                        </div>
                    </div>
                </div>
                <div class="verify-box clearfix">
                    <span class="ques-label l">*</span>
                    <div class="verify-code"></div>
                </div>
                <div class="saveques-bottom">
                    <a href="javascript:;" class="btn btn-red link-btn publishbtn" id="sub">发布(Ctrl+Enter)</a>
                    <p class="global-errortip js-global-error"></p>
                </div>
            </div>
        </div>
        <div class="r wenda-slider">
            <div class="panel bbs-sendques">
                <div class="panel-body">
                    <h1>提问注意事项</h1>
                    <dl>
                        <dd>1、大家每天可以免费提出两个问题，从第三个问题起，每个问题扣除2点积分，请知晓哦；</dd>
                        <dd>2、您是来解决问题？请先搜索是否已经有同类问题吧。这样您就省心少打字。</dd>
                        <dd>3、没找到是么？就在发问题时精确描述你的问题，不要写与问题无关的内容哟；</dd>
                        <dd>4、慕课讨论更热衷于解达您想要的答案。能引起思考和讨论的知识性问题；</dd>
                        <dt>问答禁止这些提问</dt>
                        <dd>1、禁止发布求职、交易、推广、广告类与问答无关信息将一律清理。</dd>
                        <dd>2、尽可能详细描述您的问题，如标题与内容不符，或与问答无关的信息将被删除扣分。</dd>
                        <dd>3、问答刷屏用户一律冻结帐号</dd>
                    </dl>
                </div>
            </div>


        </div>
        <!-- error-pop -->
        <div class="pop-tips-layer"></div>
    </div>
    <!--积分弹出框-->
    <div class="integral-pop" id="no-credit">
        <div class="pop-con">
            <span class="icon-point"></span>
            <p>本次提问将花费2个积分</p>
            <p>你的积分不足，无法发表</p>
            <a class="integral-rule" href="/about/faq?t=3" target="_blank">为什么扣积分？</a>
            <div class="ft clearfix">
                <a href="javascript:void(0)" class="btn btn-green l cancel-cf">确认</a>
                <a href="javascript:void(0)" class="btn btn-grey r cancel-cf">取消</a>
            </div>
        </div>
    </div>
    <div class="integral-pop" id="enough-credit">
        <div class="pop-con">
            <span class="icon-point"></span>
            <p>本次提问将花费2个积分</p>
            <p>继续发表请点击 "确定"</p>
            <a class="integral-rule" href="/about/faq?t=3" target="_blank">为什么扣积分？</a>
            <div class="ft clearfix">
                <a id="interal-use" href="javascript:void(0)" class="btn btn-green l">确认</a>
                <a id="interal-cancel" href="javascript:void(0)" class="btn btn-grey r">取消</a>
            </div>
        </div>
    </div>

</div>
{{---------------------------------------footer start---------------------------------------}}

@include('components.home_footer');

{{---------------------------------------footer end---------------------------------------}}



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

    <script>
        $(document).on("click","#cancel", function () {
            $("#front").css('display',"none");
            $("#behind").css('display',"none");
        });
        //  回车事件
        $(document).keypress(function(e) {

            if(e.which == 13) {
                jQuery("#sub").click();
            }
        });
        //提交的方法 进入后台
        function sub(){
            var title = $("#ques-title").val();
            var content = getPlainTxt();
            $.ajax({
                type: "post",
                url: "{{url('home/addmyanswer')}}",
                data: {
                    "type":type,
                    "title":title,
                    "content":content
                },
                success: function(msg){

                    if(msg == -1){
                        return location.href = "{{url('home/turn')}}";
                    }
                    if(msg == -2){
                        $("#front").css("display","block");
                        $("#behind").css("display","block");
                        $("#prompt").html("请选择类别");
                        return false;
                    }
                    if(msg == -3){
                        $("#front").css("display","block");
                        $("#behind").css("display","block");
                        $("#prompt").html("请输入标题");
                        return false;
                    }
                    if(msg == -4){
                        $("#front").css("display","block");
                        $("#behind").css("display","block");
                        $("#prompt").html("请输入内容");
                        return false;
                    }
                    if(msg == -5){
                        $("#front").css("display","block");
                        $("#behind").css("display","block");
                        $("#prompt").html("分类不得多于3个");
                    }
                    if(msg == 1){
                        $("#front").css("display","block");
                        $("#behind").css("display","block");
                        $("#prompt").html("提问成功");
                    }
                    if(msg == 0){
                        $("#front").css("display","block");
                        $("#behind").css("display","block");
                        $("#prompt").html("失败，请重新提问");
                        return false;
                    }
                }
            });
        }
        // 点击事件
        $(document).on("click","#sub", function () {
            sub();
        });
        //  获取1-3个类别 不能多于3个 点击一个类别变色（加入全局变量） 在点击颜色变回（从全局变量踢出）
        var type = new Array();
        $(document).on("click",".save-list-tag", function () {

            var type_id = $(this).attr("data-id");

            if(type.length<3){
                if($(this).attr("check")=="check"){
                    $(this).attr("style","color:none");
                    $(this).attr("check","");
                    var index = $.inArray($(this),type);
                    type.splice(index,1);
                }else{
                    $(this).attr("style","color:blue");
                    $(this).attr("check","check");
                    type.push(type_id);
                }
            }else{
                if($(this).attr("check")=="check"){
                    $(this).attr("style","color:none");
                    $(this).attr("check","");
                    var index = $.inArray($(this),type);
                    type.splice(index,1);
                }
            }
            console.log(type);
        });


        function getPlainTxt() {
            var arr = [];
            arr.push();
            arr.push();
            arr.push(UM.getEditor('myEditor').getPlainTxt());
            return arr.join('\n')
        }

    </script>

    <script type="text/javascript">
        //实例化编辑器
        var um = UM.getEditor('myEditor');
        um.addListener('blur',function(){
            $('#focush2').html('编辑器失去焦点了')
        });
        um.addListener('focus',function(){
            $('#focush2').html('')
        });
        //按钮的操作
        function insertHtml() {
            var value = prompt('插入html代码', '');
            um.execCommand('insertHtml', value)
        }
        function isFocus(){
            alert(um.isFocus())
        }
        function doBlur(){
            um.blur()
        }
        function createEditor() {
            enableBtn();
            um = UM.getEditor('myEditor');
        }
        function getAllHtml() {
            alert(UM.getEditor('myEditor').getAllHtml())
        }
        function getContent() {
            var arr = [];
            arr.push("使用editor.getContent()方法可以获得编辑器的内容");
            arr.push("内容为：");
            arr.push(UM.getEditor('myEditor').getContent());
            alert(arr.join("\n"));
        }

        function setContent(isAppendTo) {
            var arr = [];
            arr.push("使用editor.setContent('欢迎使用umeditor')方法可以设置编辑器的内容");
            UM.getEditor('myEditor').setContent('欢迎使用umeditor', isAppendTo);
            alert(arr.join("\n"));
        }
        function setDisabled() {
            UM.getEditor('myEditor').setDisabled('fullscreen');
            disableBtn("enable");
        }

        function setEnabled() {
            UM.getEditor('myEditor').setEnabled();
            enableBtn();
        }

        function getText() {
            //当你点击按钮时编辑区域已经失去了焦点，如果直接用getText将不会得到内容，所以要在选回来，然后取得内容
            var range = UM.getEditor('myEditor').selection.getRange();
            range.select();
            var txt = UM.getEditor('myEditor').selection.getText();
            alert(txt)
        }

        function getContentTxt() {
            var arr = [];
            arr.push("使用editor.getContentTxt()方法可以获得编辑器的纯文本内容");
            arr.push("编辑器的纯文本内容为：");
            arr.push(UM.getEditor('myEditor').getContentTxt());
            alert(arr.join("\n"));
        }
        function hasContent() {
            var arr = [];
            arr.push("使用editor.hasContents()方法判断编辑器里是否有内容");
            arr.push("判断结果为：");
            arr.push(UM.getEditor('myEditor').hasContents());
            alert(arr.join("\n"));
        }
        function setFocus() {
            UM.getEditor('myEditor').focus();
        }
        function deleteEditor() {
            disableBtn();
            UM.getEditor('myEditor').destroy();
        }
        function disableBtn(str) {
            var div = document.getElementById('btns');
            var btns = domUtils.getElementsByTagName(div, "button");
            for (var i = 0, btn; btn = btns[i++];) {
                if (btn.id == str) {
                    domUtils.removeAttributes(btn, ["disabled"]);
                } else {
                    btn.setAttribute("disabled", "true");
                }
            }
        }
        function enableBtn() {
            var div = document.getElementById('btns');
            var btns = domUtils.getElementsByTagName(div, "button");
            for (var i = 0, btn; btn = btns[i++];) {
                domUtils.removeAttributes(btn, ["disabled"]);
            }
        }
    </script>
</div>
</body>
</html>
