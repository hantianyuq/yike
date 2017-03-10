<div id="signin" class="rl-modal in" aria-hidden="false" style="display: none">
    <div class="rl-modal-header">
        <h1>
            <span  class='active-title' id="login">登录</span>
            <span  id="register">注册</span>
        </h1>
        <button class="rl-close" type="button" data-dismiss="modal" hidefocus="true" aria-hidden="true"></button>
    </div>

    {{--登录的DIV--}}
    <div class="rl-modal-body" id="logindiv">
        <div class="clearfix">
            <div class="l-left-wrap l">
                <form id="signup-form" autocomplete="off" action="{{url('home/user/login')}}" method="post">
                    {{csrf_field()}}
                    <p id="signin-globle-error" class="rlf-tip-globle color-red"></p>
                    <div class="rlf-group pr">
                        <input class="xa-emailOrPhone ipt ipt-email js-own-name" value="" maxlength="37" name="user" data-validate="require-mobile-phone" autocomplete="off" placeholder="请输入登录邮箱/手机号" type="text">
                        <p class="rlf-tip-wrap errorHint color-red" data-error-hint="请输入正确的邮箱或手机号"></p>
                    </div>
                    <div class="rlf-group pr">
                        <input class="ipt ipt-pwd js-loginPassword js-pass-pwd" name="user_pwd" data-validate="require-password" placeholder="6-16位密码，区分大小写，不能用空格" maxlength="16" autocomplete="off" type="password">

                        <p class="rlf-tip-wrap errorHint color-red " data-error-hint="请输入6-16位密码，区分大小写，不能使用空格！"></p>
                    </div>
                    {{--<div class="rlf-group clearfix form-control js-verify-row" style="display: none;">--}}
                        {{--<input class="ipt ipt-verify l" id="verify" name="verify" data-validate="require-string" data-callback="checkverity" maxlength="4" data-minlength="4" placeholder="请输入验证码" type="text" >--}}
                        {{--<a class="verify-img-wrap js-verify-refresh" href="javascript:void(0)" hidefocus="true"></a>--}}
                        {{--<a class="icon-refresh js-verify-refresh" href="javascript:void(0)" hidefocus="true"></a>--}}
                        {{--<p class="rlf-tip-wrap errorHint color-red" data-error-hint="请输入正确验证码"></p>--}}
                    {{--</div>--}}
                    <div class="rlf-group rlf-appendix form-control clearfix">
                        <label class="rlf-autoin l" for="auto-signin" hidefocus="true">
                            <input id="auto-signin" class="auto-cbx" checked="checked" name='free_login' type="checkbox" >
                            下次自动登录
                        </label>
                        <a class="rlf-forget r" href="/user/newforgot" target="_blank" hidefocus="true">忘记密码 </a>
                    </div>
                    <div class="rlf-group clearfix">
                        <input class="btn-red btn-full xa-login" value="登录" hidefocus="true" type="submit">
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{--注册的DIV--}}
    <div class="rl-modal-body " id='registerdiv' style="display: none">
        <form id="signup-form pr register">
            <p id="signup-globle-error" class="rlf-tip-globle color-red rlf-g-tip"></p>
            <div class="rlf-group pr">
                <input class="xa-emailOrPhone ipt ipt-email " maxlength="37" value="" name="user_email" data-callback="checkusername" data-validate="require-mobile-phone" autocomplete="off" placeholder="请输入注册邮箱/手机号" type="text">
                <p class="rlf-tip-wrap errorHint color-red" data-error-hint="请输入正确的邮箱或手机号"></p>
            </div>
            <div class="rlf-group proclaim-loc pr xa-passwordWrap">
                <a class="proclaim-btn js-proclaim icon-show-pw is-pwd" href="javascript:void(0)" hidefocus="true" tabindex="-1"></a>
                <input class="ipt ipt-pwd js-pass-pwd" name="user_pwd" data-validate="require-password" placeholder="6-16位密码，区分大小写，不能用空格" maxlength="16" autocomplete="off" type="password">
                <p class="rlf-tip-wrap errorHint color-red " data-error-hint="请输入6-16位密码，区分大小写，不能使用空格！"></p>
            </div>
            <div class="rlf-group clearfix form-control ">
                <input class="ipt ipt-verify js-emailverify l" id='register_verify' name="verify" data-validate="require-string" data-callback="checkverity" maxlength="5" data-minlength="5" placeholder="请输入验证码" type="text">
                <a class="verify-img-wrap js-verify-refresh" href="javascript:void(0)" hidefocus="true">
                    <img class="verify-img" src="{{url('captcha/mews')}}" onclick="this.src='{{ url('captcha/mews') }}?r='+Math.random();">
                </a>
                <a class="icon-refresh js-verify-refresh"  href="javascript:void(0)" hidefocus="true"  style="font-size: 10px">点我刷新</a>
                <p class="rlf-tip-wrap errorHint color-red"  id="register_error"></p>
            </div>
            <div class="rlf-group clearfix">
                <a id="signup-btn" class="btn-red btn-full btn r" href="javascript:void(0)" hidefocus="true"> 注册 </a>
            </div>
        </form>
    </div>
    <div class="rl-modal-body phoneVerityBox" id="register_success"  style="display: none">
        <form id="signup-form" >
            <p id="signin-globle-error" class="rlf-tip-globle "></p>
            <div class="user_header"></div>
            <p class="title">注册成功，请立即验证邮箱</p>
            <p class="subtitle">
                邮箱发送至
                <span class="color-red js-account breakall" id="email_info"></span>
            </p>
            <div class="rlf-group clearfix finished_wrap">
                <a id="js-gotoVerity" class="moco-btn moco-btn-red " style="padding:12px 35px; margin-right:10px;" target="_blank">去邮箱验证</a>
                <button class="moco-btn moco-btn-normal js-modal-close js-notVerity" style="padding:12px 35px;">暂不验证</button>
                <a class="cantGot js-resendMail" href="/about/faq?currid=2" target="_blank" style=" position: relative;top: 10px;">收不到邮件怎么办</a>
            </div>
        </form>
    </div>
    <div class="rl-model-footer">
        <div class="pop-login-sns clearfix">
            <span class="l " style="color:#666">其他方式登录</span>
            <a class="pop-sns-weibo r mr60" href="javascript:void(0)" hidefocus="true" data-login-sns="/passport/user/tplogin?tp=weibo">
                <i class="sz-weibo-y"></i>
            </a>
            <a class="pop-sns-weixin r" href="javascript:void(0)" hidefocus="true" data-login-sns="/passport/user/tplogin?tp=weixin">
                <i class="sz-weixin-y"></i>
            </a>
            <a class="pop-sns-qq r" href="{{url('home/qqlogin')}}" target="_blank" hidefocus="true" data-login-sns="/passport/user/tplogin?tp=qq">
                <i class="sz-qq-y" style='background: url("{{asset('home/Images/qq.png')}}")'></i>
            </a>
        </div>
        <div class="erweima xa-showQrcode"></div>
    </div>
</div>
<div class="modal-backdrop in" style="display: none"></div>

<script>

    $(".rl-close").click(function(){
        $("#signin").hide();
        $(".modal-backdrop").hide();
    })
    $("#js-signin-btn").click(function(){
        $("#signin").show();
        $(".modal-backdrop").show();
    })

    $("#login").click(function(){
        $(this).siblings().removeClass("active-title");
        $(this).attr("class","active-title");
        $("#logindiv").show();
        $("#registerdiv").hide();
        $("#register_success").hide();
    })
    $("#register").click(function(){
        $(this).siblings().removeClass("active-title");
        $(this).attr("class","active-title");
        $("#registerdiv").show();
        $("#logindiv").hide();
        $("#register_success").hide();
    })
    $("#signup-btn").click(function(){
        var obj = new Object();
        obj['user_email']      = $("input[name='user_email']").val();
        obj['user_pwd']   = $("input[name='user_pwd']").val();
        obj['verify']   = $("#register_verify").val();
        $.post("{{url('home/user/register')}}", {obj,"_token":"{{csrf_token()}}"},function(data){
                var code = data.code;
                if(code == 1){
                    $("#register_error").html(data.content);
                }else if (code == 2){
                    $("#register_error").hide();
                    $("#registerdiv").hide();
                    $("#email_info").html(data.content);
                    $(".rl-model-footer").hide();
                    $("#register_success").show();
                }
        },'json');
    })
</script>