<script src="{{asset('home/Scripts/jquery-1.7.2.min.js')}}"></script>
<script>
    $(document).ready(function () {
        alert("请先登录");
        location.href='{{url('home/answer')}}';
    })
</script>