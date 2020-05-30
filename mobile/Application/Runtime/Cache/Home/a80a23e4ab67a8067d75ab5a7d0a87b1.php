<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
  <head v="12">
    <meta charset="UTF-8" />
         <meta name="renderer" content="webkit|ie-comp|ie-stand">
     <meta name="renderer" content="webkit">
<meta name="renderer" content="webkit"><!-- 避免IE使用兼容模式 -->
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title><?php echo C('webtitle');?></title>
    <meta name="keywords" content="<?php echo C('webkeywords');?>" /> 
    <meta name="description" content="<?php echo C('webdescription');?>" /> 
    <link rel="stylesheet" href="/images/xinqim.css">
		<link rel="stylesheet" href="/images/calendar.min.css">
   <link rel="stylesheet" href="/Public/Home/css/main.css" />
    <link rel="stylesheet" href="/Public/Home/css/swiper.min.css" />
    
        <style>
            .layui-layer-btn{font-size: 0.4rem;text-align: center;}
        </style>
		<script>
            var img_url="/Public/Wap2/images/default_3.0";
		</script>

    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=2, user-scalable=yes" />
    <script type="text/javascript" src="/Public/Home/js/jquery-1.11.1.min.js" ></script>
    <script type="text/javascript" src="/Public/Home/js/calendar.min.js" ></script>
    <script type="text/javascript" src="/Public/Home/js/swiper-3.4.2.jquery.min.js" ></script>
    <script type="text/javascript" src="/Public/Home/js/main.js" ></script>
    <script src="/Public/Home/js/ntog.js"></script>
  </head>
  <body>
    <!-- 头部 -->
    
    
    <div class="xinqim">	
    <nav><a href="/index.php" style="color: white;"><span style="right: auto;left: 8px;">首页</span></a>
    易起起名网<a href="<?php echo U('order/pchistory');?>" style="color: white;"><span>订单查询</span></a></nav>
    <div class="banner"><img src="/images/banner.png"></div>
    
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
    </div>
    </div>
    <link rel="stylesheet" href="/Public/Wap2/css/default_1.0/calendar.css">
    <script type="text/javascript" src="/Public/states/js/lib/layer/layer.js" ></script>
    <script type="text/javascript" src="/Public/states/js/clipboard.min.js" ></script>
    <style>
    </style>
    <meta name="__hash__" content="c04bf819555903a6ad0df90febd1a367_e775f15806c5f8e4302eb94f8c954de7" /></head>
<body class="wyqm">
	<style type="text/css">
	
    	.tanchu_box {
		    width: 100%;
		    height: 100vh;
		    position: fixed;
		    top: 0;
		    left: 0;
		    display: none;
		}
		.tanchu_box_no {
		    width: 100%;
		    height: 100vh;
		    background: rgba(0,0,0,0.5);
		    position: absolute;
		    top: 0;
		    left: 0;
		}
		.tanchu_box_con {
		    width:88%;
		    overflow: hidden;
		    background: #fff;
		    border-radius: 5px;
		    position: absolute;
		    top: 50%;
		    left:50%;
		    padding: 0 24px;
		    -webkit-transform: translate(-50%,-50%);
		    -moz-transform: translate(-50%,-50%);
		    transform: translate(-50%,-50%);
		    box-sizing: border-box;
		}
    </style>
    <div id="newWinx" class="tanchu_box wei_show2" style="z-index: 10000000;display:none;">
        <div class="tanchu_box_no" onClick="$('.tanchu_box').hide()"></div>
        <div class="tanchu_box_con">
        	<div style="width:100%;position:relative;">
        	<b style="width:21px;height:21px;background:url(/Public/Wap2/images/default_1.0/weixintanchuNo.png) no-repeat;background-size:100%;display:block;position:absolute;top:10px;right:-15px;" onClick="$('.tanchu_box').hide()"></b>
            <div style="color:#3cbe0b;display:flex;font-size:0.35rem;margin:0.4rem 0;display:none">
                <div style="flex:1"></div>
                <img src="https://qiniu.cdn.517900.com/FL97591.png" style="width:0.4rem;height:0.4rem">
                <div style="margin-left:5px">大师微信号已复制成功</div>
                <div style="flex:1"></div>
            </div>

            <div style="height:15px"></div>
            <div>
                <table>
                    <tbody><tr>
                        <td>
                            <div style="display:flex;flex-flow:column">
                                <div style="flex:1"></div>
                                    <img style="width:1.2rem;height:1.2rem" src="/Public/Wap2/images/default_1.0/weixin_touxiang.png">

                                <div style="flex:1"></div>
                            </div>
                        </td>
                        <td style="font-size:0.38rem;line-height:0.4rem;padding-left:5px">
                            <p>易起起名网<br>大师微信<span id="tc_box_wei2"></span>18801922223</p>
                        </td>
                    </tr>
                </tbody></table>
            </div>
            <div style="height:15px"></div>
            <div style="display:flex;line-height:40px">
                <div style="flex:1;border:1px solid #bb1b21;border-top-left-radius:4px;border-bottom-left-radius:5px;text-align:center">
                    <p id="tc_box_wei3" style="color:#bb1b21;text-align:center;font-size:0.5rem">18801922223</p>
                </div>
                <div style="width:1.4rem;background-color:#bb1b21;border-top-right-radius:4px;border-bottom-right-radius:4px">
                    <button id="weixinCopyB" data-clipboard-action="copy" data-clipboard-target="#tc_box_wei3" style="border:0;padding:0;margin:0;width:100%;height:100%;text-align:center;color:white;font-size:0.36rem;background:none;line-height:42px">微信号</button>

                </div>
            </div>

            <p style="font-size:0.35rem;color:red;text-align:center;margin:15px 0">↑长按上方微信号复制添加好友↑</p>

            <div style="width:100%">
                <div style="width:100%;height:40px;background-color:#3a9e13;color:white !important;font-size:0.33rem;text-align:center;line-height:40px;border-radius:5px;display:flex" onClick="window.location.href='weixin://'">
                    <div style="flex:1"></div>
                    <div style="display:flex;flex-direction:column">
                        <div style="flex:1"></div>
                        <img src="/Public/Wap2/images/default_1.0/weixin_icon.png" style="height:0.5rem;vertical-align:middle;display:block"> 
                        <div style="flex:1"></div>
                    </div>
                    
                    <div style="margin-left:8px;font-size:0.4rem;">点击打开微信</div>
                    <div style="flex:1"></div>
                </div>
            </div>
            <div style="height:15px"></div>
            <p style="font-size:0.3rem;color:dimgrey;text-align:center;font-style:italic">打开微信，点击右上角“<span style="color:#3cbe0b">+</span>”点击“<span style="color:#3cbe0b">添加朋友</span>”</p>
            
            <div style="text-align:center;margin-top:5px">
                <img style="width:80%" src="/Public/Wap2/images/default_1.0/weixin_demo.png">
            </div>
            
            <div style="height:15px"></div>
            </div>
        </div>
    </div>
	<script>
        var order_type_flag= "SHJ";
	</script>
    <script src="/Public/Wap2/js/default_1.0/wyqm.js?ver1"></script>
    <script>
//      $("#inquiry").click(function () {
//          $(this).addClass("active");
//          $("#active").removeClass("active");
//          $(".sm_banner img").attr("src", "/Public/Wap2/images/default_1.0/wyqm_banner2.jpg");
//          $(".wyqm_dshi").hide();
//          $(".queryBox").show();
//      })
        $("#active").click(function () {
            $(this).addClass("active");
            $("#inquiry").removeClass("active");
            $(".sm_banner img").attr("src", "/Public/Wap2/images/default_1.0/wyqm_banner.jpg");
            $(".wyqm_dshi").show();
            $(".queryBox").hide();
        })
        var master = "";
        var gb_price = 29.8;
        $(function () {
            $("#master a").click(function () {
                $("#master img").addClass('gray');
                $(this).find("img").removeClass('gray');
                master = ($(this).attr('name') );
            })

            $("#cs").click(function () {
                cs();
            })

            var id = 0;
            master = 'dong';
        })

        function getRandomInt(min, max) {
            min = Math.ceil(min);
            max = Math.floor(max);
            return Math.floor(Math.random() * (max - min)) + min;
        }


        function cs() {
            if ($('#agree').prop('checked') === false) {
                $("#agreebox").addClass('shake');
                next = false;
                clearshake();
                return;
            }

            $("#smname").val($("#smname").val().replace(/[^\u4E00-\u9FA5]/g, ''));

            if ($("#smname").val() == '' || $("#smname").val().length > 2) {
                $("#smname").addClass('shake');
                next = false;
                clearshake();
                return;
            }
            if ($("#b_input").val() == '') {
                $("#birthday").addClass('shake');
                next = false;
                clearshake();
                return;
            }
            var xm = $("#smname").val();
            var o = {};
            o.name = xm;
            o.gender = $("#gender").val();
            o.birthday = $("#b_input").val();
            o.xing = xm;
            o.ming = '';
            o.birthtime = $("#hour").val();
            o.birthmin = $("#minutes").val();
            o.phone = "";//$("#phone").val();
            o.ver = $("#ver").val();
            o.state=$('#state').val();//出生状态
            var next = true;

            if (!next) {
                clearshake();
                return;
            }
          $(".form_c").submit();

//            console.log(o);


        }
        function clearshake() {
            setTimeout(function () {
                $(".shake").removeClass('shake');
            }, 2000)
        }


		//选择出生状态t==当前选中 con==需要传值值得容器
		function ztSele(t,con){
			$(t).parent('div').find('span').removeClass('cur');
			$(t).addClass('cur');
			$(con).val('');
			$(con).val($(t).attr('data-value'));
			if(con=='#state'){
				if($('#state').val() == 1){
					$(t).parents('ul').find('li').last().show();
					$(t).parents('ul').find('li').eq(3).find('.sm_form_name').text('出生日期：');
					$(t).parents('ul').find('li').eq(2).find('div').find('span').removeClass('cur').eq(0).addClass('cur');
					$(t).parent('div').find('span').removeClass('cur');
                    $('#birthday').attr('placeholder','请选择生日');
					$(t).addClass('cur');
					$('#gender').val(1);
					$('.weiz').hide()
				}else{
					$(t).parents('ul').find('li').last().hide();
					$(t).parents('ul').find('li').eq(3).find('.sm_form_name').text('预产日期：');
					$(t).parents('ul').find('li').eq(2).find('div').find('span').removeClass('cur').eq(2).addClass('cur');
					$(t).parent('div').find('span').removeClass('cur');
                    $('#birthday').attr('placeholder','请填写宝宝的预产期');
					$(t).addClass('cur');
//					$('#hour,#minutes').val('0');
					$('#gender').val(-1);
					$('.weiz').show();
					
				}
			}
		}
    </script>
    <!--页面底部开始--->
    <footer class="public_footer_servers" style="margin: 0!important; text-align: center;color: #000 !important; background: #fbf2d3 ;padding: 20px 0;">
        <ul>
            <li style="font-size: 14px!important;">易起起名网<br>电话（微信）18801922223<br>©2019 易起起名网 全年无休<br>备案号：粤ICP备13027362号</li>
            <li style="font-size: 14px!important;"></li>
            <!--<li style="font-size: 14px!important;line-height:25px;">&lt;!&ndash;&ndash;&gt;更多测算信息、问题反馈，请联系在线客服</li>-->
            <li style="font-size: 14px!important;display: none;">周易文化</li>
            <li style="color: rgb(179, 110, 21); font-size: 14px!important;line-height:25px;">大师在线<a href="http://wpa.qq.com/msgrd?v=3&uin=13609507&site=qq&menu=yes" style="color: rgb(179, 110, 21);text-decoration: underline;"><i style="position:relative; margin: 0 18px;"><img class="erimg" src="/Public/states/images/kefu_03.png" style="width: 24px; height: 24px;display: inline-block; font-size: 16px!important;position:absolute;bottom:0;left:-12px;top: -3px !important;"></i><span style="text-decoration: underline;">点此联系汪鑫大师</span></a></li>
            <li style="width:100%;overflow: hidden;margin-top:11px;"><img src="/Public/states/images/New_dbzz_3_27.png" style="width:53.2%;display: block;margin:0 auto;"></li>        </ul>
        <!-- <div class="pf_payment"><span>Payment</span><img src="/Public/Wap2/images/payment.png" alt="" style="width:140px; height:24px;display: block;margin:0 auto;"></div> -->
    </footer>



    <div id='myorderlist' style='width:2rem;position: fixed;bottom: 4.5rem;right: 0rem;z-index:9999999'>
        <a href="/wap2/cx/order_list.html"><img style='width:100%' src='/Public/Wap2/images/default_1.0/myorder.png'></a>
    </div>
    <style>
        .mask{display:none;width:100%;height:3000px;background:#000;z-index:1000;position:fixed;left:0;top:0;filter:alpha(opacity=50); /* IE */  -moz-opacity:0.5; /* 老版Mozilla */  -khtml-opacity:0.5; /* 老版Safari */  opacity: 0.5; /* 支持opacity的浏览器*/   }
        .layouts{display:none;position:fixed;width:7rem;left:40%;margin-left:-2.5rem;background:#fff;border:2px solid #FF0000;top:40%;z-index:1001;margin-top:-102px;}
        .layouts h2{font-weight:normal;font-size:16px;text-align:center;padding:10px;}
        .layouts p{text-align:center;color:#999;}
        .layouts .wxh{display:block;margin:20px auto;width:100px;height:30px;background:#B90000;font-size:16px;color:#F7EF00;text-align:center;line-height:30px;border-radius:5px;-webkit-user-select:initial;}
        .layouts .bbbb{display:block;margin:20px auto;width:120px;}
        .layouts .bbbb img{width:100%;}
        .gb{display:block;width:30px;height:30px;background:#fff;border-radius:50%;position:absolute;right:-14px;top:-14px;}
        .gb img{width:100%;height:100%;}
    </style>
    <!--浮动窗口-->
        <div class="mask"></div>
        <div class="layouts">
            <h2>加汪鑫大师微信起好名</h2>
            <p>每天只通过50个名额<br/>↓长按下方按钮复制并添加微信号↓</p>
            <strong class="wxh">18801922223</strong>
            <a href="weixin://" class="bbbb"><img src="/Public/Wap2/images/default_1.0/bbb.png"></a>
            <a href="javascript:void(0)" class="gb" onClick="pinglunDong()"><img src="/Public/Wap2/images/default_1.0/gb.png"></a>
        </div>
        <!--浮动窗口 end-->
		<div id="dashi_wx" onClick="$('#newWinx').show()" style="display: block;width:2rem;height:2rem;position:fixed;bottom:2rem;right:0;z-index: 99;"><img style='width:100%' src='/Public/Wap2/images/default_1.0/dswx.png'></div>
        <!--微信客服-->    <script>
        my_order_hide();
        function my_order_hide() {
            if (localStorage['qm_order2'] === undefined || localStorage['qm_order2']=='{}' || localStorage['qm_order2']=='') {
                $('#myorderlist').hide();
            }
        }
        
		var clipboard = new ClipboardJS('#weixinCopyB');
        clipboard.on('success', function(e) {
            layer.msg('复制成功');
            e.clearSelection();
        });

        clipboard.on('error', function(e) {
            layer.msg('请长按微信号进行复制!');
        });
       
    </script>
</div>
</html>


    <style>
			
			body { background-image:url(text.txt); /* for IE6 */background-attachment:fixed; } #bottomNav { font-size: 0.44rem; background-color:#333; z-index:999; position:fixed; bottom:0; left:0; width:100%; height:60px; _position:absolute; /* for IE6 */ _top: expression(documentElement.scrollTop + documentElement.clientHeight-this.offsetHeight); /* for IE6 */ overflow:visible; }
a:link    {color:#fff;}
a:visited {color:#fff;}
a:hover   {color:#fff;}
a:active  {color:#fff;}
		</style>

    <script type="text/javascript" src="/Public/Home/js/my.js"></script>

  </body>
</html>