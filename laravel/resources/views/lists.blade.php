<!doctype html> 
<html> 
<head> 
  <meta charset="utf-8"> 
  <title></title> 
</head>
<body>
  <h1></h1>
	秒杀商品：诺基亚 <br>
	<button onclick="check_qi(1)" disabled='disabled' id="dianji">点击抢购</button>
	<div id="nowTime"></div>
</body>
<script src="{{ asset('jquery.js') }}" ></script>
<script type="text/javascript">
	 timeCount1 = 3;
	 C = 0;
	$(function(){
		interval = setInterval('time()',1000);
	})
	function time(){
		C++;
		var timeCount = timeCount1-C;
		var H = Math.floor(timeCount/3600);
		var I = Math.floor((timeCount-H*3600)/60);
		var S = timeCount - H*3600 - I*60;
		$("#nowTime").html(H+"时"+I+"分"+S+"秒");
		if(H==0&&I==0&&S==0){
			$("#dianji").removeAttr("disabled");
			window.clearInterval(interval);
		}
	}
</script>

<script type="text/javascript">
	function check_qi(id){
		var url = 'qiIn';
		var data = {'id':id};
		$.get(url,data,function(msg){
			alert(msg)
			if(msg == 1){
				alert('添加成功');
			}else{
				alert('添加失败');
			}
		})
	}
</script>
</html>