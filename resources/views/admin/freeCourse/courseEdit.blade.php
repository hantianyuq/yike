

    <link href="{{asset('admin')}}/css/bootstrap.min.css?v=3.3.6" rel="stylesheet">

    <link href="{{asset('admin')}}/css/style.css?v=4.1.0" rel="stylesheet">
<style>
	#div{
		width: 800px;
		height: 800px;
		margin: 0 auto;
	}
	.nav{
		margin-left: 200px;
		color: blue;
	}

	
</style>
<br/>

<div id="div">
<h2 class="nav">课程编辑</h2>
<br/>
 <div class="" style="margin-left: 20px; margin-top: 10px; margin-bottom: 5px;">
        <a href="{{URL('courseShow')}}" class="btn btn-primary ">返回展示</a>    
</div>
<form action="{{URL('courseEdit_do')}}" method="post">
<table class="table">
	<input type="hidden" name="_token" value="{{ csrf_token() }}" />
	<tr>
		<td>课程名称：</td>
		<td><input type="text" class="a" name="name" value="<?php echo $course['course_name']?>"></td>
	</tr>
	<tr>
		<td>难度级别：</td>
		<td><input type="text" class="a" name="rank" value="<?php echo $course['course_rank']?>"></td>
	</tr>
	<input type="hidden" name="id" value="<?php echo $course['course_id']?>">
	<tr>
		<td>分类</td>
		<td>
			<select name="cate" >
			<?php 
			foreach($cate as $k=>$v){ 
				if($v['category_id'] == $course['category_id']){
					echo "<option selected='selected' value='".$v['category_id']."'>".$v['category_name']."</option>";
				}else{
					echo "<option value='".$v['category_id']."'>".$v['category_name']."</option>";
				}
			}
			?>
			</select>
		</td>
	</tr>
	<tr>
		<td>简介</td>
		<td>
			<textarea name="intro"><?php echo $course['course_intro']?></textarea>
		</td>
	</tr>
	<tr>
		<td></td>
		<td><input type="submit" value="提交"></td>
	</tr>


</table>
</form>
</div>
