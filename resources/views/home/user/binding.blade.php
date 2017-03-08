<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>慕课网</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1">
    <link rel="stylesheet" href="{{asset('home')}}/Content/snscomplete.css">
</head>

<body>
<div id="main">
    <div class="wcontainer">
        <div class="wwrap  wrap-boxes">
            <div id="js-fill">
                <div class="wheader-wrap">
                    <h1>完善基本资料</h1>
                    <div id="js-sns-tab" class="sns-complete-tab">
                        <span class="sns-tab-active" data-target="js-profile">无慕课网帐号</span>
                        <span data-target="js-bind" class="">绑定已有帐号</span>
                    </div>
                </div>
                <div id="js-profile" class="cprofile-wrap sns-block" style="display: block;">
                    <div class="cprofile-inner clearfix">
                        <div class="avator-wrap l">
                            <div class="avator-inner">
                                <img src="{{$info['picture']}}" width="160" height="160" alt="头像" title="头像">
                            </div>
                        </div>
                        <div class="cprofile-field-wrap">

                            <form id="cprofile" action="{{url('home/binding/login')}}" method="post">
                                {{csrf_field()}}
                                <div class="wlfg-wrap">
                                    <label class="label-name" for="nick">昵称</label>
                                    <div class="rlf-group">
                                        <input type="text" name="user_name" id="nick" autocomplete="off" data-validate="nick" class="ipt ipt-nick" value="{{$info['name']}}" placeholder="请输入昵称.">
                                        <p class="tips"></p>
                                    </div>
                                </div>
                                <div class="wlfg-wrap">
                                    <label class="label-name" for="email">邮箱</label>
                                    <div class="rlf-group">
                                        <input type="text" autocomplete="off" data-validate="email" name="user_email" id="email" class="ipt ipt-email" placeholder="请输入登录邮箱.">
                                        <p class="tips"><span style="display: none;">邮箱将作为您主要的身份识别，请输入您有效的邮箱</span></p>
                                    </div>
                                </div>
                                <div class="wlfg-wrap">
                                    <label class="label-name" for="password">密码</label>
                                    <div class="rlf-group">
                                        <input type="password" autocomplete="off" data-validate="password" name="user_pwd" id="password" class="ipt ipt-pwd" placeholder="请输入密码.">
                                        <p class="tips"><span style="display:none">请输入6-16位密码，区分大小写，不能使用空格！</span></p>
                                    </div>
                                </div>
                                <div class="wlfg-wrap">
                                    <div class="rlf-group">
                                        <input id="cprofile-submit-btn" type="submit" class="btn btn-green btn-complete" value="完成">
                                        <p class="tips" id="cprofile-globle-error"></p>
                                    </div>
                                </div>
                                <input name="image" id="image" type="hidden" value="{{$info['picture']}}">
                                <input name="openid" id="image" type="hidden" value="{{$info['openid']}}">
                            </form>
                        </div>
                    </div>
                </div>
                <div id="js-bind" class="profile-bind sns-block" style="display: none;">
                    <div class="cprofile-inner clearfix">
                        <div class="avator-wrap l">
                            <div class="avator-inner">
                                <img src="{{asset('home')}}/Picture/252a6ab457f34e32b1fd6065a344cd55.gif" width="160" height="160" alt="头像" title="头像">
                            </div>
                        </div>
                        <div class="cprofile-field-wrap">
                            <form id="form-bind">
                                <div class="wlfg-wrap">
                                    <label class="label-name" for="email">邮箱</label>
                                    <div class="rlf-group">
                                        <input type="text" autocomplete="off" data-validate="email" name="email" class="ipt ipt-email" placeholder="请输入登录邮箱.">
                                        <p class="tips"><span style="display:none">邮箱将作为您主要的身份识别，请输入您有效的邮箱</span></p>
                                        <input type="text" style="display:none">
                                    </div>
                                </div>
                                <div class="wlfg-wrap">
                                    <label class="label-name" for="password">密码</label>
                                    <div class="rlf-group">
                                        <input type="password" autocomplete="off" name="pwd" class="ipt ipt-pwd" placeholder="请输入密码.">
                                        <p class="tips"><span style="display:none">请输入6-16位密码，区分大小写，不能使用空格！</span></p>
                                    </div>
                                </div>
                                <div class="wlfg-wrap">
                                    <label class="label-name">&nbsp;</label>
                                    <div class="rlf-group">
                                        <input type="button" id="js-bind-btn" class="btn btn-green bind-btn" value="绑定">
                                        <p id="js-bind-global-msg" class="tips"></p>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script charset="utf-8" src="{{asset('home')}}/Scripts/jquery.js"></script>
<script charset="utf-8" src="{{asset('home')}}/Scripts/fingerprintjs2.min.js"></script>
<script charset="utf-8" src="{{asset('home')}}/Scripts/ssologin.js"></script>
<script charset="utf-8" src="{{asset('home')}}/Scripts/snscomplete.js"></script>

</body>

</html>
