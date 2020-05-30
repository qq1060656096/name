<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>
<html lang="en">
<head v="12">
<meta charset="UTF-8">
<meta content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=0" name="viewport">
<meta content="yes" name="apple-mobile-web-app-capable">
<meta content="yes" name="apple-touch-fullscreen">
<meta content="black" name="apple-mobile-web-app-status-bar-style">
<meta content="320" name="MobileOptimized">


<title>历史订单-<?php echo C('webtitle');?>大师为您推荐</title>
<link rel="stylesheet" href="/Public/Home/css/main.css" />
<link rel="stylesheet" href="/Public/Home/css/swiper.min.css" />
<script type="text/javascript" src="/Public/Home/js/jquery-1.11.1.min.js" ></script>
<script type="text/javascript" src="/Public/Home/js/calendar.min.js" ></script>
<script type="text/javascript" src="/Public/Home/js/swiper-3.4.2.jquery.min.js" ></script>
<script type="text/javascript" src="/Public/Home/js/main.js" ></script>
<script src="/Public/Home/js/ntog.js"></script>
<script type="text/javascript">
  
  function getOrder(){
  var order = $("input[name='dingdanhao']").val();
  if(order==""){
    alert("请输入完整的订单号！");
    return;
  }
  $.post("<?php echo U('order/check');?>",{"orderno":order},function(data){
    //var ret = eval("("+data+")");
    if(data=="fail"){
      alert("订单不存在！");
    }
    else
    {
      window.location.href="/order/mlist/orderno/"+order;
    }
  });
}

</script>
</head>
<body>
<!-- 头部 -->

<style>
#orderlist h1{margin:0;padding:20px;background:#F5ECE2;color:#74321B;border-bottom:1px solid #CEA35F;text-align:center;}
#orderlist p{padding:10px 30px;font-size:16px;border-bottom:1px solid #efefef;cursor:pointer}
#orderlist p:hover{background:#FFF1E1}
#orderlist p b{float:right;}
#orderlist p span{font-weight:bold}
</style>
<link rel="stylesheet" type="text/css" href="/Public/Home/css/style.css"/>

<div class="main">
  <div class="container">
    <div class="table_bg"  >
      <div class="table_xx" >
        <div class="title"> 以下是您曾经填写的测算订单

</div>

        <div style="width:90%;height:50px;padding:10px;overflow: hidden;margin:0 auto">
        <input type="text" name="dingdanhao" placeholder="请输入您17位数的订单号" style="width:72%;height:48px;border:1px solid #ccc;padding-left:10px;margin:0;float:left"/>
        <button onClick="getOrder()" type="button" style="width:23%;height:50px;border:none;margin:0;float:left;color:#fff;background:#9D581F">订单查询</button>
      </div>

        <div id="orderlist" > </div>
        <br>
        <br>
        <br>
      </div>
      <img src="/Public/Home/picture/left.jpg" class="left"/> <img src="/Public/Home/picture/right.jpg" class="right"/> </div>
  </div>
  <div onClick="window.history.go(-1);" style="width:300px;margin:30px auto 0 auto;background:#986A3A;cursor:pointer;padding:10px;border-radius:0.6rem;text-align:center;color:#fff;">返回</div>
  <br>
  <br>
  <br>
</div>
<script>
(function(){
	var dataread={},html='';

	var init=function(){
		if(localStorage['orders']!==undefined){
			dataread=JSON.parse(localStorage['orders']);
		}
	}
	
	var showorder=function(){
		
		for(var o in dataread){
			if(o==='undefined'){
				
			}else{
				html+='<h1>'+o+'订单列表</h1>';
				for(var n in dataread[o]){
					var x=dataread[o];
          $.ajax({
             type: "GET",
             url: "<?php echo U('order/orderstate');?>?orderno="+n,
             dataType: "JSON",
             async:false,
             success: function(msg){
                  if(msg.code==1){
                    html+="<p id='"+n+"' onclick='location.href=\"<?php echo U('order/mlist');?>?orderno="+n+"\"'>姓氏：<span >"+x[n]+"</span><b>订单号： "+n+"</b><span style='float:right; margin-right:2px;color:#fff; border:2px solid;border-radius:25px;background:#FF7800'>已付款</span></p>";
                    
                  }else{
                    html+="<p id='"+n+"' onclick='location.href=\"<?php echo U('order/reado');?>?orderno="+n+"\"'>姓氏：<span >"+x[n]+"</span><b>订单号： "+n+"</b></p>";     
                            
                  }     
             }
          });       
				}


			}
			
		}
		if(html==''){
				$("#orderlist").append('<div style="text-align:center;padding:50px">暂无相关订单</div>');
				return;
		}
		$("#orderlist").append(html);
	}
	init();
	showorder();
	
})()

$(function(){
$("#myorderlist").hide();

})
</script>
<div style="width:100%; text-align:center" id="footer">
  <div class="min-width">
 <p> 易福起名网<br>©2018 宝宝起名网 全年无休<br>备案号：粤ICP备13027362号 </p>
  </div></div>
</div>
<script src="/Public/Home/js/my.js"></script>

</body>
</html>