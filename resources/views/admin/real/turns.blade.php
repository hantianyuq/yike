<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> - FooTable</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <link rel="shortcut icon" href="{{asset('admin')}}/favicon.ico">
    <script src="{{asset('admin')}}/js/jquery.min.js?v=2.1.4"></script>
    <link href="{{asset('admin')}}/css/bootstrap.min.css?v=3.3.6" rel="stylesheet">
    <link href="{{asset('admin')}}/css/font-awesome.css?v=4.4.0" rel="stylesheet">
    <link href="{{asset('admin')}}/css/plugins/footable/footable.core.css" rel="stylesheet">
    <link href="{{asset('admin')}}/css/animate.css" rel="stylesheet">
    <link href="{{asset('admin')}}/css/style.css?v=4.1.0" rel="stylesheet">
    <style>
        .black_overlay{
            display: none;
            position: absolute;
            top: 0%;
            left: 0%;
            width: 100%;
            height: 160%;
            background-color: black;
            z-index:1001;
            -moz-opacity: 0.8;
            opacity:.80;
            filter: alpha(opacity=80);
        }
        .white_content {
            display: none;
            position: absolute;
            top: 10%;
            left: 10%;
            width: 64%;
            height: 160%;
            border: 16px solid lightblue;
            background-color: white;
            z-index:1002;
            overflow: auto;
        }
        .white_content_small {
            display: none;
            position: absolute;
            top: 20%;
            left: 30%;
            width: 40%;
            height: 50%;
            border: 16px solid lightblue;
            background-color: white;
            z-index:1002;
            overflow: auto;
        }
    </style>
    <script type="text/javascript">
        //弹出隐藏层
        $(function(){
            $(".Button1").click(function(){
                $(this).parent().parent().find(".black_overlay").show();
                $(this).parent().parent().find(".white_content").show();

            });
            $(".hanimg").click(function(){
                $(this).parent().parent().find(".black_overlay").hide();
                $(this).parent().parent().find(".white_content").hide();
            });
        });
    </script>
</head>
<body class="gray-bg">
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-sm-12">

            <div class="ibox float-e-margins">

                <div class="ibox-content">
                    <div class="col-md-6">
                        <div class="form-group">
                            <a href="{{url('admin/TurnsAdd')}}">
                                <button class="btn btn-w-m btn-info" type="button" >增加轮播图</button>
                            </a>
                        </div>
                    </div>
                    <input type="text" class="form-control input-sm m-b-xs" id="filter" placeholder="搜索..." style="width: 200px;float: right">
                    <table class="footable table table-stripped" data-page-size="8" data-filter=#filter>
                        <thead>
                        <tr>
                            <td>排序</td>
                            <td>轮播图ID</td>
                            <td>轮播图名</td>
                            <td>前台是否显示</td>
                            <td>轮播图路径</td>
                        </tr>
                        </thead>
                        <tbody class="tbody">
                        @foreach($turns_arr as $key => $value)
                            <tr class="gradeX">
                                <td><b><input class="order" type="text" value="<?=$value['real_turns_sort']?>" style="width: 30px" onchange="order(this)"></b></td>
                                <td><b><?=$value['real_turns_id']?></b></td>
                                <td><b><?=$value['real_turns_name']?></b></td>
                                <td>
                                    <b>
                                        @if($value['real_turns_is_show'] == 0)
                                            显示
                                        @elseif($value['real_turns_is_show'] ==1)
                                            不显示
                                        @endif
                                    </b>
                                </td>
                                <td>
                                    <b>
                                        <a href="javascript:void(0)" class="Button1">查看图片</a>
                                    </b>
                                    <div class="black_overlay"></div>
                                    <div class="white_content">
                                            <span style="font-size: 16px;" class="hanimg">
                                                <img class='msg' src="{{asset('/')}}/<?=$value['real_turns_path']?>" style="height:520px;width: 600px;">
                                            </span>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                        <tfoot>
                        <tr>
                            <td colspan="5">
                                <ul class="pagination pull-right"></ul>
                            </td>
                        </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<!--弹出层时背景层DIV-->
<!-- 全局js -->

<script src="{{asset('admin')}}/js/bootstrap.min.js?v=3.3.6"></script>
<script src="{{asset('admin')}}/js/plugins/footable/footable.all.min.js"></script>
<script src="{{asset('admin')}}/js/layer/layer.js"></script>
<!-- 自定义js -->
<script src="{{asset('admin')}}/js/content.js?v=1.0.0"></script>
<script>

    {{--$(document).ready(function() {--}}

        {{--$('.footable').footable();--}}
        {{--$('.footable2').footable();--}}

    {{--});--}}
    {{--function order(obj,nav_id){--}}
        {{--var order= $(obj).val();--}}
        {{--$.post("{{url('admin/nav/updateorder')}}", {"_token":"{{csrf_token()}}","order_id":order,"nav_id":nav_id},function(data){--}}
            {{--if(data ==1){--}}
                {{--layer.alert("修改成功", {icon: 6});--}}
                {{--location.href = location.href;--}}
            {{--}--}}
        {{--})--}}
    {{--}--}}
    {{--function delnav(nav_id){--}}
        {{--layer.confirm("确认删除吗？", {--}}
            {{--btn: ['确定要删除','再想想'] //按钮--}}
        {{--}, function(){--}}
            {{--$.post('{{url('admin/nav/delnav')}}',{"_token":"{{csrf_token()}}","nav_id":nav_id},function(data){--}}
                {{--if(data == 1){--}}
                    {{--layer.alert("删除成功", {icon: 6});--}}
                    {{--location.href = location.href;--}}
                {{--}else{--}}
                    {{--layer.alert("删除失败，请检查数据库", {icon: 5});--}}
                {{--}--}}
            {{--})--}}
        {{--}, function(){--}}
            {{--layer.alert("好",{icon:6});--}}
        {{--});--}}
    {{--}--}}

</script>




</body>

</html>
