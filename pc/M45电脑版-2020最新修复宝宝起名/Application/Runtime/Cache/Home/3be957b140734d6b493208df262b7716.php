<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head v="0">
<meta charset="UTF-8">
<meta name="applicable-device" content="mobile">
<meta name="viewport" content="width=720,width=device-width, initial-scale=1,  initial-scale=1.0,maximum-scale=1.0, user-scalable=no">
<title>易福起名网_中国权威周易起名网_智能在线起名!</title>
<style type="text/css">
  .wrap{
    width: 50%;
    margin:0 auto;
    font-size: 20px;
  }
  .order p{
    height: 50px;
  }
</style>
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
<body class="">
<div class="wrap">
  <header class="sm_hd">
    <span class="hd_left bt_after"></span>
    <h3 class="smTitle">在线起名</h3>
    <span class="hd_right bt_after"></span>
  </header> 
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
  <div class="sm_seclet  m_t_22">
    <div class="order">
      <p style='text-align:center'>
        <span><?php echo ($info['statestr']); ?></span>
      </p>
      <p>
      <span>订单号：</span>
        <b><?php echo ($info['order_no']); ?></b>
      </p>

      <p>
      <span>测算姓名：</span>
        <b><?php echo ($info['name']); ?></b>
      </p>
      
      <ul class="payList">
        <div onclick='gotopay()' 
        style='background:#FF7800;padding:0.3rem;border-radius:0.6rem;text-align:center;color:#fff;'>立即查看并支付</div>
      </ul>
    </div>
  
    <div class="hrr"></div>
  </div>
</div>

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