<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>
<html lang="en">
  <head v="12">
    <meta charset="UTF-8" />
         <meta name="renderer" content="webkit|ie-comp|ie-stand">
     <meta name="renderer" content="webkit">
<meta name="renderer" content="webkit"><!-- 避免IE使用兼容模式 -->
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title><?php echo C('webtitle');?></title>
  <meta name="keywords" content="<?php echo C('webkeywords');?>" /> 
  <meta name="description" content="<?php echo C('webdescription');?>" />  <link rel="stylesheet" href="/Public/Home/css/main.css" />
    <link rel="stylesheet" href="/Public/Home/css/swiper.min.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=2, user-scalable=yes" />
    <script type="text/javascript" src="/Public/Home/js/jquery-1.11.1.min.js" ></script>
    <script type="text/javascript" src="/Public/Home/js/calendar.min.js" ></script>
    <script type="text/javascript" src="/Public/Home/js/swiper-3.4.2.jquery.min.js" ></script>
    <script type="text/javascript" src="/Public/Home/js/main.js" ></script>
    <script src="/Public/Home/js/ntog.js"></script>
  </head>
  <body>
    <!-- 头部 -->
    <div id="header">
	<div class="head">郑重承诺：30年八字起名经验，起名专业权威，已为近十万名宝宝起名，好评率高达99.9%</div>
	<div class="head_01"><div class="w1000"><img src="/Public/Home/images/head_01.png"></div></div>
    </div>
    <div id="nav">
      <div class="min-width">
        <ul>		
            <li><a href="<?php echo C('weburl');?>">首页</a></li>
            <li><a href="<?php echo C('weburl');?>#place-order">起名简介</a></li>
            <li><a href="<?php echo C('weburl');?>#problem">常见问答</a></li>
            <li><a href="<?php echo C('weburl');?>#evaluate">客户评价</a></li>
            <li><a  href="<?php echo U('order/pchistory');?>">订单查询</a></li>
	        <li><a href="<?php echo C('weburl');?>#place-order">立即起名</a></li>		
	        <li><a href="<?php echo C('weburl');?>#place-order">易经取名</a></li>					
        </ul>
      </div>
    </div>
    
    
<style>
    .wuge{display:block;padding:0.1rem;text-align:center;border-bottom:1px solid #F8F5DD;margin-bottom:0.1rem;color:#D37349}
    .bazibox2{
    border: 1px solid #c33a03;
    border-radius:7px;
    overflow: hidden;
    padding-bottom:5px;
    }
    .bazipp{padding:0.3rem;}
    .xmtt{color:blue}
    .baiziboxtt2{
        color: #fff;
        font-size: 16px;
        display:block;
        line-height: 28px;
        border-radius:7px 7px 0px 0px;
        padding: 5px 5px 5px 10px;
        margin-bottom:5px;
    }
    .baiziboxtt{padding:0.3rem;text-align:center;background:#F1DCBA;color:red}
    .bazibox2 .bazilist4,.bazibox3{ padding:5px;}
    .bazibox2 .bazilist4 li{ margin:4px 0px;}
    .bazibox2 .bazilist4 li span{ background:url(images/xmspan.png) no-repeat; width:84px; height:23px; line-height:23px; font-size:14px; display:inline-block; margin-right:3px; font-weight:bold; color:#FFF; text-align:center;}
    .bazilist5 span{ background:url(images/xmspan.png) no-repeat; width:84px; height:23px; line-height:23px; margin:3px 3px 3px 5px;;font-size:14px; display:inline-block;font-weight:bold; color:#FFF; text-align:center;}
    .xmfanhui {
        background:url(images/xmfanhui.png) no-repeat scroll 0 0 rgba(0, 0, 0, 0);
        display:block;
        height: 45px;
        line-height: 35px;
        margin:5px auto;
        overflow: hidden;
        text-align: center;
        width: 165px;
    }

    .xingmingzili{padding:1px 1px 0px 1px; margin:0 auto; overflow:hidden;line-height:30px;margin-bottom:5px;}
    .xingmingzili li{ float:left; border-top:1px solid #e8e4e4; margin-top:-1px;border-left:1px solid #e8e4e4; margin-left:-1px;background:#fffef9;}
    .xmzili1{width:24.4%; border-bottom:1px solid #e8e4e4; border-right:1px solid #e8e4e4; text-align:center;}
    .xmzili2{border-right:1px solid #e8e4e4;width:200px;padding-bottom:1px; }
    .xmzili2 span,.xmzili5 span ,.geshu span,.geshu1 span{padding-left:15px;}
    .xmzili5{border-right:1px solid #e8e4e4;width:98%; padding-left:2%;padding-bottom:1px;}
    .xmzili3{width:33.1%; border-bottom:1px solid #e8e4e4; border-right:1px solid #e8e4e4; text-align:center;}
    .geshu{border-bottom:1px solid #e8e4e4;border-right:1px solid #e8e4e4;width:200px;}
    .geshu1{border-bottom:1px solid #e8e4e4;border-right:1px solid #e8e4e4;width:98%;padding-left:2%;}
    .xmzili4{width:19.8%; border-bottom:1px solid #e8e4e4; border-right:1px solid #e8e4e4; text-align:center; white-space:nowrap;}
    .xmces1{ width:100%; border-collapse:collapse;}
    .xmces1 td{ border:1px solid #e8e4e4;background:#fffef9;}
    .xmjiantx{ background:url(images/icon_shou1.gif) no-repeat; width:25px; height:22px; vertical-align:middle; display:inline-block;}
    .xmtt {
        background:url(images/xmqimbg1.png) repeat-x scroll 0 0 rgba(0, 0, 0, 0);
        border: 1px solid #fbfafa;
        display: inline-block;
        height: 28px;
        line-height: 28px;
        margin-right: 8px;
        padding: 0 5px;
    }
    .cf0{margin:0.2rem 0}
    .qmOntent li{margin:0 !important;}
    .main li{border: 1px solid #CEA35F;  margin-bottom: 0px;}
    .main ul li:hover{border: 1px solid #CEA35F;  margin-bottom: 0px;}
    .xmwugepd{padding:0 30px;}
    .table_bg{line-height:28px}
    strong{color:blue}
</style>
<link rel="stylesheet" type="text/css" href="/Public/Home/css/style.css"/>
<div class="main">
<div class="container">
  <div class="table_bg"  >
    <div class="table_xx table_xx1" style='height: 200px;'>
      <div class="title"><?php echo ($xing); echo ($ming); ?>  名字测试打分</div>
      <div class="table_xx_left fl"> <span style='font-size:80px;color:red' class="fs"> <?php echo ($info["score"]); ?></span> <span class="right_fix"  style='font-size:20px;' >分</span> </div>
      <div class="table_xx_right fl">
        <p>姓名总评及建议</p>
        <p><?php echo ($info["scoreDesc"]); ?></p>
      </div>
    </div>
    <img src="/Public/Home/picture/left.jpg" class="left"/> <img src="/Public/Home/picture/right.jpg" class="right"/> </div>
  <br/>
  <div class="table_bg">
    <div class="table_xx">
      <h5 class="baiziboxtt">姓名五格命盘及互动关系</h5>
      <div class="bazipp">
        <div class="xingmingmp">
          <ul class="xingmingzili">
            <li class="xmzili1 cf0 fb">姓名</li>
            <?php if(is_array($name)): foreach($name as $key=>$v): ?><li class="xmzili1 fb"><?php echo ($v); ?></li><?php endforeach; endif; ?>

            <li class="xmzili1 cf0 fb">繁体</li>
            <?php if(is_array($info["nameFT"])): foreach($info["nameFT"] as $key=>$v): ?><li class="xmzili1"><?php echo ($v); ?></li><?php endforeach; endif; ?>
            <li class="xmzili1 cf0 fb">拼音</li>
            <?php if(is_array($info["namePY"])): foreach($info["namePY"] as $key=>$v): ?><li class="xmzili1"><?php echo ($v); ?></li><?php endforeach; endif; ?>            
            <li class="xmzili1 cf0 fb">康熙笔画</li>
             <?php if(is_array($info["nameBH"])): foreach($info["nameBH"] as $key=>$v): ?><li class="xmzili1"><?php echo ($v); ?></li><?php endforeach; endif; ?>           
            <li class="xmzili1 cf0 fb">字意五行</li>
            <?php if(is_array($info["namewuxinghz"])): foreach($info["namewuxinghz"] as $key=>$v): ?><li class="xmzili1"><?php echo ($v); ?></li><?php endforeach; endif; ?>            
          </ul>
          <em class="xmjiant"></em><span class="xmtt">姓名五格吉凶:</span>
          <ul class="xingmingzili xingmingzili1">
            <li class="xmzili5">天格→ <?php echo ($info["namesky"]); ?> (<?php echo ($info["nameskywh"]); ?>) → <?php echo ($info["nameskyjx"]); ?></li>
            <li class="xmzili5">人格→ <?php echo ($info["namepeople"]); ?> (<?php echo ($info["namepeoplewh"]); ?>) → <?php echo ($info["namepeoplejx"]); ?></li>
            <li class="xmzili5">地格→ <?php echo ($info["nameearth"]); ?> (<?php echo ($info["nameearthwh"]); ?>) → <?php echo ($info["nameearthjx"]); ?></li>
            <li class="xmzili5">外格→  <?php echo ($info["nameout"]); ?> (<?php echo ($info["nameoutwh"]); ?>) → <?php echo ($info["nameoutjx"]); ?> </li>
            <li class="geshu1">总格→  <?php echo ($info["total"]); ?> (<?php echo ($info["totalwh"]); ?>) → <?php echo ($info["totaljx"]); ?></li>
          </ul>
        </div>
        <div class="clear"></div>
        <!--
        <div class="nyb">
            <em class="xmjiant"></em>
            <span class="xmtt">从五格互动看基础运:</span><span class="cf0">[吉]</span> 境遇安定,稳固,身心健康,德性高尚者能有大的成功。　　<br>
            <em class="xmjiant"></em><span class="xmtt">从五格互动看成功运:</span><span class="cf0">[吉]</span> 个性刚烈,心胸狭窄,内外不和,可能与朋友反目,或者夫妻离异。　　<br>
            <em class="xmjiant"></em><span class="xmtt">从五格互动看社交运:</span><span class="cf0">[吉]</span> 不屈于权势,有排除万难的气魄,不妥协,不马虎,处事稳妥,富有活动力,办事认真,可大发达。但有拖延的缺点。　　 <br>
            <em class="xmjiant"></em><span class="xmtt">从五格互动看个人特性:</span> 顽固如同矿石,刚毅木纳,富于耐久力,有锲而不舍的精神。对事爱打抱不平。若善加修养,必能光明磊落。有如黄钟,敲之则响。此数不适合女性,有强硬之嫌。 
        </div>
      -->
       </div>
    </div>
    <img src="/Public/Home/picture/left.jpg" class="left"/> <img src="/Public/Home/picture/right.jpg" class="right"/> </div>
  <br/>
  <div class="table_bg">
    <div class="table_xx">
      <h5 class="baiziboxtt">五格数理剖析</h5>
      <div class="bazipp">
        <div class="tleft xmwugepd"> <em class="xmjiant"></em><span class="xmtt">天格<?php echo ($info["namesky"]); ?>的解析：</span>天格是由姓决定的，寓意思想、智慧以及与长辈领导的关系，主要影响12岁以前，以及37-48岁的运势。<br>
          <strong><?php echo ($info["nameskysl"]); ?>　</strong>　　[<span class="cf0"><strong><?php echo ($info["nameskyjx"]); ?></strong></span>] <br>
          <br>
          <hr style="border: dashed 1px #ccc; ">
          <br>
          <span class="xmct fb">详细解释：</span><?php echo ($info["nameskysldesc"]); ?>
          <br>
          <hr style="border: solid 2px #999; ">
          <br>
          <em class="xmjiant"></em><span class="xmtt">人格<?php echo ($info["namepeople"]); ?>的解析：</span>人格又称主运，是姓名的中心点，寓意性情、婚姻、兄弟姐妹、健康、情绪等，主要影响13-48岁的运势。<br>
          <strong><?php echo ($info["namepeoplesl"]); ?>　</strong>[<span class="cf0"><strong><?php echo ($info["namepeoplejx"]); ?></strong></span>] <br>
          <br>
          <hr style="border: dashed 1px #ccc; ">
          <br>
          <span class="xmct fb">详细解释：</span><?php echo ($info["namepeoplesldesc"]); ?>
          <br>
          <hr style="border: solid 2px #999; ">
          <br>
          <em class="xmjiant"></em><span class="xmtt">地格<?php echo ($info["nameearth"]); ?>的解析：</span>地格又称前运，寓意工作运、财运、部属/子女/夫妻关系，主要影响25岁之前的运势。<br>
          <strong><?php echo ($info["nameearthsl"]); ?>　</strong>[<span class="cf0"><strong><?php echo ($info["nameearthjx"]); ?></strong></span>] <br>
          <br>
          <hr style="border: dashed 1px #ccc; ">
          <br>
          <span class="xmct fb">详细解释：</span><?php echo ($info["nameearthsldesc"]); ?>
          <br>
          <hr style="border: solid 2px #999; ">
          <br>
          <em class="xmjiant"></em><span class="xmtt">外格<?php echo ($info["nameout"]); ?>的解析：</span>外格又称变格，寓意社交关系，主要影响25-36岁的社交运势。其数理不用重点去看。<br>
          <strong><?php echo ($info["nameoutsl"]); ?>　</strong>[<span class="cf0"><strong><?php echo ($info["nameoutjx"]); ?></strong></span>] <br>
          <br>
          <hr style="border: dashed 1px #ccc; ">
          <br>
          <span class="xmct fb">详细解释：</span>：<?php echo ($info["nameoutsldesc"]); ?>
          <br>
        </div>
      </div>
    </div>
    <img src="/Public/Home/picture/left.jpg" class="left"/> <img src="/Public/Home/picture/right.jpg" class="right"/> </div>
  <br/>
  <div class="table_bg">
    <div class="table_xx">
      <h5 class="baiziboxtt">三才剖析</h5>
      <div class="bazipp">
        <div class="tleft xmwugepd"> <em class="xmjiant"></em><span class="xmtt">三才配置:</span><span class="cf0"><?php echo ($info['scarr'][0]); ?></span> <?php echo ($info['scarr'][2]); ?>[<span class="cf0"><?php echo ($info['scarr'][1]); ?></span>] <br>
          <span class="xmct fb">详细解释：</span>[仅供参考] <br>
          <?php echo ($info['scarr'][3]); ?>
          </div>
      </div>
    </div>
    <img src="/Public/Home/picture/left.jpg" class="left"/> <img src="/Public/Home/picture/right.jpg" class="right"/> </div>
  <br/>
</div>
<script>
    $('.xmtt').remove();
    $('hr').css('border','solid 1px #efefef')
</script>


    <div style="display:none"> <script src="/Public/Home/js/z_stat.js" language="JavaScript"></script> </div>
    <div id="footer">
      <div class="min-width">
		<p> 易起起名网提供技术支持 
        <br>微信客服：limiii</p>
      </div>
    </div>
    <script type="text/javascript" src="/Public/Home/js/my.js"></script>
<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "https://hm.baidu.com/hm.js?0bdf06a4b1dc4e6235278d8f71b0e965";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>
  </body>
</html>