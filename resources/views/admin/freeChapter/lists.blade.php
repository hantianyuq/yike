<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title> - 课程小章节展示列表</title>
    <meta name="keywords" content="">
    <meta name="description" content="">

    <link rel="shortcut icon" href="favicon.ico"> <link href="{{asset('admin')}}/css/bootstrap.min.css?v=3.3.6" rel="stylesheet">
    <link href="{{asset('admin')}}/css/font-awesome.css?v=4.4.0" rel="stylesheet">

    <!-- Data Tables -->
    <link href="{{asset('admin')}}/css/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet">

    <link href="{{asset('admin')}}/css/animate.css" rel="stylesheet">
<body class="gray-bg">
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-sm-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>基本 <small>分类，查找</small></h5>
                    <div class="ibox-tools">
                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                        <a class="dropdown-toggle" data-toggle="dropdown" href="table_data_tables.html#">
                            <i class="fa fa-wrench"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-user">
                            <li><a href="table_data_tables.html#">选项1</a>
                            </li>
                            <li><a href="table_data_tables.html#">选项2</a>
                            </li>
                        </ul>
                        <a class="close-link">
                            <i class="fa fa-times"></i>
                        </a>
                    </div>
                </div>

                <div class="ibox-content">
                    <div class="">
                        <a onclick="fnClickAddRow();" href="javascript:void(0);" class="btn btn-primary ">添加行</a>
                    </div>
                    <table class="table table-striped table-bordered table-hover ">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>课程名字</th>
                            <th>链接</th>
                            <th>编辑</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($chapter as $k=>$v)
                        <tr class="gradeX">
                            <td>{{$v['chapter_id']}}</td>
                            <td cid="{{$v['chapter_id']}}" name="chapter_name" ><span class="update" >{{$v['chapter_name']}}</span>
                            </td>
                            <td class="center"  name="link" cid="{{$v['chapter_id']}}"><span class="update">{{$v['link']}}</span></td>
                            <td class="center del" cid="{{$v['chapter_id']}}">删除</td>
                        </tr>
                        @endforeach
                        </tfoot>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>

<!-- 全局js -->
<script src="{{asset('admin')}}/js/jquery.min.js?v=2.1.4"></script>
<script src="{{asset('admin')}}/js/bootstrap.min.js?v=3.3.6"></script>
<script>

    $(function(){
        $('.del').click(function(){

            var id = $(this).attr('cid');
            var obj = $(this);
            $.ajax({
                type: "GET",
                url: "{{url('admin/chapter/del')}}",
                data: {
                    id:id,
                },
                success: function(msg){
                    if(msg == 1){
                        obj.parent().remove();
                        alert('删除成功');

                    }else{
                        alert('删除失败');
                    }
                }
            });





        })


        $('.update').click(function(){

            var val = $(this).html();
            $(this).parent().html("<input type='text' class='updateto' value='"+val+"'>");

        })
        $(document).on('blur','.updateto',function(){
            var val =$(this).val();
            var id = $(this).parent().attr('cid');
            var name = $(this).parent().attr('name');
            var obj = $(this);
            $.ajax({
                type: "GET",
                url: "{{url('admin/chapter/update')}}",
                data: {
                    id:id,
                    val:val,
                    name:name,
                },
                success: function(msg){
                    if(msg == 1){
                        obj.parent().html(val);
                        alert('修改成功');

                    }else{
                        alert('修改失败');
                    }
                }
            });




        })













    })












</script>


<script src="{{asset('admin')}}/js/plugins/jeditable/jquery.jeditable.js"></script>

<!-- Data Tables -->
<script src="{{asset('admin')}}/js/plugins/dataTables/jquery.dataTables.js"></script>
<script src="{{asset('admin')}}/js/plugins/dataTables/dataTables.bootstrap.js"></script>

<!-- 自定义js -->
<script src="{{asset('admin')}}/js/content.js?v=1.0.0"></script>


<!-- Page-Level Scripts -->
<script>
    $(document).ready(function () {
        $('.dataTables-example').dataTable();

        /* Init DataTables */
        var oTable = $('#editable').dataTable();

        /* Apply the jEditable handlers to the table */
        oTable.$('td').editable('../example_ajax.php', {
            "callback": function (sValue, y) {
                var aPos = oTable.fnGetPosition(this);
                oTable.fnUpdate(sValue, aPos[0], aPos[1]);
            },
            "submitdata": function (value, settings) {
                return {
                    "row_id": this.parentNode.getAttribute('id'),
                    "column": oTable.fnGetPosition(this)[2]
                };
            },

            "width": "90%",
            "height": "100%"
        });


    });

    function fnClickAddRow() {
        $('#editable').dataTable().fnAddData([
            "Custom row",
            "New row",
            "New row",
            "New row",
            "New row"]);

    }
</script>




</body>

</html>
