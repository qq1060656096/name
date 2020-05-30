<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html>
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
        <div class="title"> 订单付款状态确认中...请稍等！

</div>

        <div id="orderlist" > </div>
        <br>
      </div>
      <img src="/Public/Home/picture/left.jpg" class="left"/> <img src="/Public/Home/picture/right.jpg" class="right"/> </div>
  </div>
</div>

<script src="/Public/Home/js/my.js"></script>

<script>

// var url="<?php echo U('order/add');?>?name=<?php echo ($info['name']); ?>&gender=<?php echo ($info['gender']); ?>&birthday=<?php echo ($info['birthday']); ?>&birthtime=<?php echo ($info['birthtime']); ?>&birthmin=<?php echo ($info['birthmin']); ?>&xing=<?php echo ($info['xing']); ?>&phone=<?php echo ($info['phone']); ?>&ver=<?php echo ($info['ver']); ?>";
var url="<?php echo U('order/mlist');?>?orderno=<?php echo ($info['order_no']); ?>";
$('#showdetail').click(function(){
location.href=url;
})
<?php  if ($info['state']==1) { echo "$('#showdetail').click();"; } ?>
function respCheckOrder(){
  $.ajax({
    url: '/order/orderstate/orderno/<?php echo ($info['order_no']); ?>',
    type: 'GET',
    dataType: 'JSON',
    data: {param1: 'value1'},
    success:function(resp){
      if (resp.code==1) {
        $('#showdetail').click();
      }else{
        setTimeout(function(){
          respCheckOrder();
        }, 2000);
      }
    }
  })
}
setTimeout(function(){
  respCheckOrder();
}, 200);

// setTimeout(function(){location.reload();}, 3000);
</script>

</block>

<script>

// var url="<?php echo U('order/add');?>?name=<?php echo ($info['name']); ?>&gender=<?php echo ($info['gender']); ?>&birthday=<?php echo ($info['birthday']); ?>&birthtime=<?php echo ($info['birthtime']); ?>&birthmin=<?php echo ($info['birthmin']); ?>&xing=<?php echo ($info['xing']); ?>&phone=<?php echo ($info['phone']); ?>&ver=<?php echo ($info['ver']); ?>";
var url="<?php echo U('order/mlist');?>?orderno=<?php echo ($info['order_no']); ?>";
$('#showdetail').click(function(){
location.href=url;
})
<?php  if ($info['state']==1) { echo "$('#showdetail').click();"; } ?>
function respCheckOrder(){
  $.ajax({
    url: '/order/orderstate/orderno/<?php echo ($info['order_no']); ?>',
    type: 'GET',
    dataType: 'JSON',
    data: {param1: 'value1'},
    success:function(resp){
      if (resp.code==1) {
        $('#showdetail').click();
      }else{
        setTimeout(function(){
          respCheckOrder();
        }, 2000);
      }
    }
  })
}
setTimeout(function(){
  respCheckOrder();
}, 200);

// setTimeout(function(){location.reload();}, 3000);
</script>

</block>
<script>
(function (doc, win) {
  var docEl = doc.documentElement,
    resizeEvt = 'orientationchange' in window ? 'orientationchange' : 'resize',
    recalc = function () {
    var clientWidth = docEl.clientWidth;
    //alert(clientWidth)
    if (!clientWidth) return;
      var fts = clientWidth /10;
      if(fts<32){
        fts=32;
      }else if(fts>72){
        fts=72;
      }
      docEl.style.fontSize = fts + 'px';
    };
  if (!doc.addEventListener) return;
  win.addEventListener(resizeEvt, recalc, false);
  doc.addEventListener('DOMContentLoaded', recalc, false);
})(document, window);
</script>
<link rel="stylesheet" href="/Public/Home/css/style.css">

<script src="/Public/Home/js/jquery.js?v=1"></script>
<script src="/Public/Home/js/calendar.min.js?v=1"></script>
<script src="/Public/Home/js/main.js?v=1"></script>
</head>

  <div id='myorderlist' style='width:2rem;position: fixed;bottom: 2rem;right: 1rem;z-index:9999999'>
    <!--
    <a href='/order/history'><img style='width:100%' src='/pstyle/product/myorder.png'></a>
  -->
  </div>
  <script>
  $(function(){
    if(localStorage['orders']===undefined){
      $('#myorderlist').hide();
    }
  })
</script>
<script>
var url="<?php echo U('order/add');?>?name=<?php echo ($info['name']); ?>&gender=<?php echo ($info['gender']); ?>&birthday=<?php echo ($ymd[0]); ?>&birthm=<?php echo ($ymd[1]); ?>&birthd=<?php echo ($ymd[2]); ?>&birthtime=<?php echo ($info['birthtime']); ?>&birthmin=<?php echo ($info['birthmin']); ?>&xing=<?php echo ($info['xing']); ?>&b_input=<?php echo ($info['datatype']); ?>&phone=<?php echo ($info['phone']); ?>&ver=<?php echo ($info['ver']); ?>";
function gotopay(){
  location.href=url;
}
setTimeout(function(){gotopay();},3000);
</script>


<div class="wrap">
<div style='text-align:center;font-size:0.3rem;'><br>

</div>

<div style='font-size:0.25rem;text-align:center;color:#CCA578'>
    <?php echo ($webpccopy); ?></div>
<div class="wrap" style="height:2rem;">

</div>
</div>
</body>
</html>