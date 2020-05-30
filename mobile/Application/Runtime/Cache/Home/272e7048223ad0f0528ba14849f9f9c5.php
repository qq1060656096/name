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
    
<script>
 function removeQcode(i){
	setTimeout(function(){$('.qcode').remove();},2000);
  var imgs = i.contentWindow.document.getElementsByTagName('img');
  var body = i.contentWindow.document.getElementsByTagName('body');
  body[0].style.margin = 0;
  body[0].style.padding = 0;
  for(var i=0;i<imgs.length;i++){
     imgs[i].style.margin = '17px';
     
  }

}

 </script> 
   <!-- 支付 -->
  <div class="index-section pay-wrap">
    <div class="min-width">
      <div class="pay-title">付款后查看全部取名方案</div>
      <div class="pay-info">
        <p class="pay-price"> <span class="old-price">原价：<?php echo ($info['oldprice']); ?>元</span> <span class="new-price">优惠价：<strong><?php echo ($info['price']); ?></strong>元</span> </p>
        <p class="spay-order">支付单号：<span> <font id='ordernumber' types='易经起名'><?php echo ($info['orderNo']); ?></font></span></p>
        <p class="spay-user"> <span>姓氏：<font id='fullname'><?php echo ($info['name']); ?></font></span> <i>/</i> <span>性别：<?php echo ($info['gender']); ?></span> <i>/</i> <span class="span1">生辰：<?php echo ($info['birthdayy']); ?>年<?php echo ($info['birthdaym']); ?>月<?php echo ($info['birthdayd']); ?>日  <?php echo ($info['birthdayh']); ?>时<?php echo ($info['birthdayi']); ?>分</span> </p>
      </div>
      <style>
      .payList{ margin-top:0.3611rem; margin-bottom: 50px;}
.payList li{ width: 100%; height: 40px; margin-bottom: 0.3889rem;}
.payList li a{ display: block; width: 100%; height: 100%; background-image: url("../../images/default_1.0/pay.png"); background-repeat: no-repeat;    background-size: 100% 155px;    text-indent:-99999em;}
.payList li:nth-child(2) a{ background-position: 0 -81px;  }
.payList li:nth-child(1) a{ background-position: 0 -0px; }
 
 
      </style>
      <?php if (Mobile_Detect()->isMobile()) { ?>
      <ul class="payList">
        <li id="wxpaytab" class="wxpay"><a class="purl" href="javascript:" onclick="updatOrder(0)">微信支付</a>
        </li>
        <?php if (!Mobile_Detect()->isWechat()) { ?>
        <li id="alipaytab" class="alipay"><a class="purl" href="javascript:" onclick="updatOrder(1)">支付宝支付</a></li>
        <?php }?>
      </ul>
      <?php }else{ ?>
      <ul class="pay-btn">
        <li id="wxpaytab" class="active" data-img="/pstyle/paystyle21/img/wx1.png"><i></i></li>
        <li id="alipaytab" class="" data-img="/pstyle/paystyle21/img/wx1.png"><i></i></li>
      </ul>
      <?php }?>
      <?php if (!Mobile_Detect()->isMobile()) { ?>
      <div class="pay-qrcode">
        <div class="left"> 
          <!-- 微信二维码 -->
          <div class="qrcode" style='background:#fff;'>
            <div style='width:201px;height:201px;' id='wx'  url="<?php echo U('pay/wxpay',array('orderno'=>$info['orderNo']));?>">
              <div class='qcode' style='position: absolute;'> <img src='/Public/Home/picture/wx-sys.gif' style='width: 200px;height: 201px;'> </div>
              
              <iframe src="" class='getqr' onload="removeQcode(this)" style='width:100%;height:100%' frameborder="0"></iframe>
            
            </div>
          </div>
          <dl>
            <dt></dt>
            <dd class="first">请用<span>微信</span>扫一扫</dd>
            <dd>扫描二维码支付</dd>
          </dl>
        </div>
        <div class="right"> <img src="/Public/Home/picture/wx1.png"/> </div>
      </div>
      <?php }?>
      <div class="lvsetu" style=" float:none; color:#FF0000;margin-top:-35px;margin-bottom:10px; text-align:center"><img src="/Public/Home/picture/998.png" align="middle"></div>
      <div class="wxzf" style=''>
        <p style='' >支付后请耐心等待10秒钟出结果</p>
        <div id='showdetail' style=''>查看订单详情</div>
      </div>
      <div class="bottom-btn" id='payend' style='display:none'>
        <div class="pay-result payresult">我已支付成功</div>
        <div class="pay-result payresult">支付失败</div>
      </div>
    </div>
  </div>
  <!-- 支付结束 -->
 
	
<script type="text/javascript" src="/Public/Home/js/scroll_s.js" ></script> 
<script type="text/javascript">
       		$(function () {
	            $("#demoxj").myScroll({
	            speed: 40, //数值越大，速度越慢
	            rowHeight: 30 //li的高度
	            });
	             $("#nxt").myScroll({
	            speed: 40, //数值越大，速度越慢
	            rowHeight: 30 //li的高度
	            });
	        });	     
</script>
<script>
			$(function(){	
      
				$('.comment-wrap .item-wrap').Scroll({
			        speed: 40, 
			        direction: 'y'
		    	});
		    	
		    	$(".case-wrap").click(function(){
		    		$("html,body").animate({
		    			scrollTop: $(".pay-wrap").offset().top
		    		},1500);
				});
				
				$('#showdetail').click(function(){
					//location.href='./read?ordernum=CS171212110335222';
          location.href="<?php echo U('order/readx', array('orderno'=>$info['orderNo']));?>";
				})
		    	
			});
		</script> 
<script src="/Public/Home/js/ntog.js"></script> 
<script src="/Public/Home/js/localdata.js"></script> 
<script type="text/javascript">
	$('.spayBtn li').each(function(){
    	$(this).click(function(){
    		$(this).addClass('active').siblings().removeClass('active');
            payType = $(this).attr('paytype');
            $('.spayerC').hide();
            $('.spayerC[data-pay|="'+payType+'"]').show();
    	});
    });
	if($('#sPay').length){	
    	$('.bins_btn,#btns li').click(function(){
            $('html, body').animate({  
                scrollTop:  $('#sPay').offset().top
            }, 1000);  
    	});
    }

	 
	

	function showqrcode( ){
		//var wx=$('#wx').attr('url')+"&device="+getdevtype()+"&time="+(getrnd());
    var wx=$('#wx').attr('url');
		$('#wx').find('iframe').attr('src',wx); 
		
	}


	function getdevtype(){
		if (/(iPhone|iPad|iPod|iOS)/i.test(navigator.userAgent)) {
			return 'ios';
		} else if (/(Android)/i.test(navigator.userAgent)) {
			return 'android';
		} else {
			return 'pc';
		};
	}
	function getrnd(){
		return (+new Date())+Math.random();
	}
	
 
	function setLtime(){
		var _s = calendar.solar2lunar(<?php echo ($info['birthdayy']); ?>,<?php echo ($info['birthdaym']); ?>,<?php echo ($info['birthdayd']); ?>);
		$('.l1').html(_s.gzYear+'年');
		$('.l2').html(_s.IMonthCn);
		$('.l3').html(_s.IDayCn);
		$('.l4').html(Hcovert("<?php echo ($info['birthdayh']); ?>"));
	}
	$(function(){

		setLtime();
		 
		showqrcode();
		setTimeout(function() {
			checkorder();
			//$('#payend').show();
		}, 10000);
		 

		$('.payresult').click(function(){
			location.reload();
		})
		$(".pays").click(function(){
			$("html,body").animate({scrollTop: $("#pays").offset().top}, 500);
		})

    $("#alipaytab").click(function(){
      <?php if (Mobile_Detect()->isMobile()) { ?>
      window.location.href = "<?php echo U('pay/alipay',array('orderno'=>$info['orderNo']));?>";
      <?php }else{ ?>
      window.open("<?php echo U('pay/alipay',array('orderno'=>$info['orderNo']));?>");
      <?php } ?>
    })
    <?php if (Mobile_Detect()->isMobile()) { ?>
    $("#wxpaytab").click(function(){
      window.location.href = "<?php echo U('pay/wxpay');?>?orderno=<?php echo ($info["orderNo"]); ?>";
      //array('orderno'=>$info['orderNo'])
    })
    <?php } ?>
		
	})


	function checkorder(){
		
		$.get('<?php echo U("order/orderstate", array("orderno"=>$info["orderNo"]));?>',function(d){
			if(d.code==1){
				setTimeout(function() {
					location.href='<?php echo U("order/mlist", array("orderno"=>$info["orderNo"]));?>';
				}, 3000);
			}
			setTimeout(function() {
				checkorder();
			}, 4000);
		},'json');
	}


	
</script>
<script src="/Public/Home/js/scroll.js" ></script>
<!--<style type="text/css">
  .min-width {
    width: 1000px !important;
    margin: 0 auto !important;
    text-align: center;
    display: inherit;
    
}
.STYLE1 {font-weight: bold}
</style>-->
<div id="container" class="container"> 
  <!-- 基本信息 -->
  <div class="index-section basic-info case-wrap index-section1" style="margin:0">
    <div class="sj_margin"></div>
    <div class="min-width">
      <div class="top">
        <div class="top-title"> <img src="/Public/Home/picture/index_30.png" /> </div>
      </div>
      <div class="section section1">

        <table border="0" cellspacing="0" cellpadding="0" >
          <tr>
            <td width="25%"><label><strong>起名姓氏</strong></label></td>
            <td colspan="2"><span><?php echo ($info['name']); ?></span></td>
            <td><label>性别</label></td>
            <td><span><?php echo ($info['gender']); ?></span></td>
          </tr>
          <tr>
            <td><label><strong>出生日期</strong></label></td>
            <td colspan="4"><span><?php echo ($info['birthdayy']); ?>年<?php echo ($info['birthdaym']); ?>月<?php echo ($info['birthdayd']); ?>日  <?php echo ($info['birthdayh']); ?>时<?php echo ($info['birthdayi']); ?>分</span></td>
          </tr>
          <tr>
            <td><label><strong>出生公历</strong></label></td>
            <td><span><?php echo ($info['birthdayy']); ?>年</span></td>
            <td><span><?php echo ($info['birthdaym']); ?>月</span></td>
            <td><span><?php echo ($info['birthdayd']); ?>日</span></td>
            <td><span><?php echo ($info['birthdayh']); ?>点</span></td>
          </tr>
          <tr>
            <td><label><strong>出生农历</strong></label></td>
            <td><span><?php echo ($nongli[3]); ?>年</span></td>
            <td><span><?php echo ($nongli[1]); ?></span></td>
            <td><span><?php echo ($nongli[2]); ?></span></td>
            <td><span class="l4"></span></td>
          </tr>
          <tr>
            <td><label><strong>生辰八字</strong></label></td>
            <td><span><?php echo ($bazi[0]); ?></span></td>
            <td><span><?php echo ($bazi[1]); ?></span></td>
            <td><span><?php echo ($bazi[2]); ?></span></td>
            <td><span><?php echo ($bazi[3]); ?></span></td>
          </tr>
          <tr>
            <td><label><strong>纳音五行</strong></label></td>
            <td><span><?php echo ($nayin[0]); ?></span></td>
            <td><span><?php echo ($nayin[1]); ?></span></td>
            <td><span><?php echo ($nayin[2]); ?></span></td>
            <td><span><?php echo ($nayin[3]); ?></span></td>
          </tr>
          <tr>
            <td><label><strong>八字五行个数</strong></label></td>
            <td colspan="4"><span><?php echo ($bzwxgs); ?></span></td>
          </tr>
          <tr>
            <td><label><strong>五气成分指数</strong></label></td>
            <td colspan="4"><span><?php echo ($wqcfzs); ?></span></td>
          </tr>
		  <?php if(is_array($qr)): $i = 0; $__LIST__ = $qr;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$q): $mod = ($i % 2 );++$i;?><tr>
            <td><span class="STYLE1">
              <label><?php echo ($q[0]); ?></label>
            </span></td>
            <td><span><?php echo ($q[1]); ?> %</span></td>
            <td colspan="3" align="left"><span><?php echo ($q[2]); ?></span></td>
          </tr><?php endforeach; endif; else: echo "" ;endif; ?>

          <tr>
            <td><label><strong>强弱总比值</strong></label></td>
            <td><span><?php echo round($zh,2) ?> %</span></td>
            <td colspan="3" align="left"><span><?php echo ($qrzh); ?></span></td>
          </tr>
          <tr>
            <td width="25%"><label><strong>喜用分析</strong></label></td>
            <td colspan="4" rowspan="8" style="background:url('/Public/Home/images/pay_01.png') repeat-y top center;position:relative;" align="center">
			<a class="payBtn" href="javascript:;" > <i></i> <span style="color:#fff; background-size:auto;">立即解锁美名</span> </a></td>
          </tr>
          <tr>
            <td><label><strong>格局分析</strong></label></td>
            <td colspan="4"></td>
          </tr>
          <tr>
            <td><label><strong>适合事业</strong></label></td>
            <td colspan="4"></td>
          </tr>
          <tr>
            <td><label><strong>天乙贵人</strong></label></td>
            <td colspan="4"></td>
          </tr>
          <tr>
            <td><label><strong>文昌位</strong></label></td>
            <td colspan="4"></td>
          </tr>
          <tr>
            <td><label><strong>吉祥色彩</strong></label></td>
            <td colspan="4"></td>
          </tr>
          <tr>
            <td><label><strong>吉祥数字</strong></label></td>
            <td colspan="4"></td>
          </tr>
          <tr>
            <td><label><strong>吉祥方位</strong></label></td>
            <td colspan="4"></td>
          </tr>
        </table>
      </div>
    </div>

    <div class="bottom-wrap"></div></a>
  </div>

  <!-- 方案 -->
  
  <div class="index-section case-wrap index-section1">
    <div class="min-width">
      <div class="top">
        <div class="top-title"> <span><font><?php echo ($info['name']); ?></font>·姓名方案一</span> </div>
      </div>
      <div class="section">
        <div class="content-wrap">
          <ul>
            <li>
              <label>名字吉祥度：</label>
              <div class="progress-wrap">
                <div style="width:99%;"></div>
              </div>
              <div class="fraction">99分</div>
              <div class="text">基于名字与生辰八字五行吉祥度打分</div>
            </li>
            <li>
              <label>内涵流行度：</label>
              <div class="progress-wrap">
                <div style="width:99%;"></div>
              </div>
              <div class="fraction">99分</div>
              <div class="text">基于好听，好写，内涵，流行度打分</div>
            </li>
            <li>
              <label>生肖开运度：</label>
              <div class="progress-wrap">
                <div style="width:99%;"></div>
              </div>
              <div class="fraction">99分</div>
              <div class="text">基于名字与生肖宜忌开运助运打分</div>
            </li>
            <li>
              <label>三才五格分：</label>
              <div class="progress-wrap">
                <div style="width:99%;"></div>
              </div>
              <div class="fraction">99分</div>
              <div class="text">基于名字三才五格和理吉凶打分</div>
            </li>
            <li class="first">
              <label>财运卦象分：</label>
              <div class="progress-wrap">
                <div style="width:100%;"></div>
              </div>
              <div class="fraction">100分</div>
              <div class="text">基于名字财运事业卦象易数打分</div>
            </li>
          </ul>
        </div>
        <div class="unlock-wrap">
          <div class="text">精准取名结果</div>
          <div class="img-box"> <a class="unlock" href="javascript:;"> <i></i> <span>立即解锁美名</span> </a> </div>
        </div>
      </div>
    </div>
  </div>
  <div class="index-section case-wrap index-section1">
    <div class="min-width">
      <div class="top">
        <div class="top-title"> <span><font><?php echo ($info['name']); ?></font>·姓名方案二</span> </div>
      </div>
      <div class="section">
        <div class="content-wrap">
          <ul>
            <li  class="first">
              <label>名字吉祥度：</label>
              <div class="progress-wrap">
                <div style="width:99%;"></div>
              </div>
              <div class="fraction">99分</div>
              <div class="text">基于名字与生辰八字五行吉祥度打分</div>
            </li>
            <li>
              <label>内涵流行度：</label>
              <div class="progress-wrap">
                <div style="width:99%;"></div>
              </div>
              <div class="fraction">99分</div>
              <div class="text">基于好听，好写，内涵，流行度打分</div>
            </li>
            <li>
              <label>生肖开运度：</label>
              <div class="progress-wrap">
                <div style="width:99%;"></div>
              </div>
              <div class="fraction">99分</div>
              <div class="text">基于名字与生肖宜忌开运助运打分</div>
            </li>
            <li>
              <label>三才五格分：</label>
              <div class="progress-wrap">
                <div style="width:99%;"></div>
              </div>
              <div class="fraction">99分</div>
              <div class="text">基于名字三才五格和理吉凶打分</div>
            </li>
            <li>
              <label>财运卦象分：</label>
              <div class="progress-wrap">
                <div style="width:99%;"></div>
              </div>
              <div class="fraction">99分</div>
              <div class="text">基于名字财运事业卦象易数打分</div>
            </li>
          </ul>
        </div>
        <div class="unlock-wrap">
          <div class="text">精准取名结果</div>
          <div class="img-box"> <a class="unlock" href="javascript:;"> <i></i> <span>立即解锁美名</span> </a> </div>
        </div>
      </div>
    </div>
  </div>
  <div class="index-section case-wrap index-section1">
    <div class="min-width">
      <div class="top">
        <div class="top-title"> <span><font><?php echo ($info['name']); ?></font>·姓名方案三</span> </div>
      </div>
      <div class="section">
        <div class="content-wrap">
          <ul>
            <li>
              <label>名字吉祥度：</label>
              <div class="progress-wrap">
                <div style="width:99%;"></div>
              </div>
              <div class="fraction">99分</div>
              <div class="text">基于名字与生辰八字五行吉祥度打分</div>
            </li>
            <li  class="first">
              <label>内涵流行度：</label>
              <div class="progress-wrap">
                <div style="width:99%;"></div>
              </div>
              <div class="fraction">99分</div>
              <div class="text">基于好听，好写，内涵，流行度打分</div>
            </li>
            <li>
              <label>生肖开运度：</label>
              <div class="progress-wrap">
                <div style="width:99%;"></div>
              </div>
              <div class="fraction">99分</div>
              <div class="text">基于名字与生肖宜忌开运助运打分</div>
            </li>
            <li>
              <label>三才五格分：</label>
              <div class="progress-wrap">
                <div style="width:99%;"></div>
              </div>
              <div class="fraction">99分</div>
              <div class="text">基于名字三才五格和理吉凶打分</div>
            </li>
            <li>
              <label>财运卦象分：</label>
              <div class="progress-wrap">
                <div style="width:99%;"></div>
              </div>
              <div class="fraction">99分</div>
              <div class="text">基于名字财运事业卦象易数打分</div>
            </li>
          </ul>
        </div>
        <div class="unlock-wrap">
          <div class="text">精准取名结果</div>
          <div class="img-box"> <a class="unlock" href="javascript:;"> <i></i> <span>立即解锁美名</span> </a> </div>
        </div>
      </div>
    </div>
  </div>
  <div class="index-section case-wrap index-section1">
    <div class="min-width">
      <div class="top">
        <div class="top-title"> <span><font><?php echo ($info['name']); ?></font>·姓名方案四</span> </div>
      </div>
      <div class="section">
        <div class="content-wrap">
          <ul>
            <li>
              <label>名字吉祥度：</label>
              <div class="progress-wrap">
                <div style="width:99%;"></div>
              </div>
              <div class="fraction">99分</div>
              <div class="text">基于名字与生辰八字五行吉祥度打分</div>
            </li>
            <li>
              <label>内涵流行度：</label>
              <div class="progress-wrap">
                <div style="width:99%;"></div>
              </div>
              <div class="fraction">99分</div>
              <div class="text">基于好听，好写，内涵，流行度打分</div>
            </li>
            <li  class="first">
              <label>生肖开运度：</label>
              <div class="progress-wrap">
                <div style="width:98%;"></div>
              </div>
              <div class="fraction">98分</div>
              <div class="text">基于名字与生肖宜忌开运助运打分</div>
            </li>
            <li>
              <label>三才五格分：</label>
              <div class="progress-wrap">
                <div style="width:99%;"></div>
              </div>
              <div class="fraction">99分</div>
              <div class="text">基于名字三才五格和理吉凶打分</div>
            </li>
            <li>
              <label>财运卦象分：</label>
              <div class="progress-wrap">
                <div style="width:99%;"></div>
              </div>
              <div class="fraction">99分</div>
              <div class="text">基于名字财运事业卦象易数打分</div>
            </li>
          </ul>
        </div>
        <div class="unlock-wrap">
          <div class="text">精准取名结果</div>
          <div class="img-box"> <a class="unlock" href="javascript:;"> <i></i> <span>立即解锁美名</span> </a> </div>
        </div>
      </div>
    </div>
  </div>
  <div class="index-section case-wrap index-section1">
    <div class="min-width">
      <div class="top">
        <div class="top-title"> <span><font><?php echo ($info['name']); ?></font>·姓名方案五</span> </div>
      </div>
      <div class="section">
        <div class="content-wrap">
          <ul>
            <li>
              <label>名字吉祥度：</label>
              <div class="progress-wrap">
                <div style="width:99%;"></div>
              </div>
              <div class="fraction">99分</div>
              <div class="text">基于名字与生辰八字五行吉祥度打分</div>
            </li>
            <li>
              <label>内涵流行度：</label>
              <div class="progress-wrap">
                <div style="width:99%;"></div>
              </div>
              <div class="fraction">99分</div>
              <div class="text">基于好听，好写，内涵，流行度打分</div>
            </li>
            <li>
              <label>生肖开运度：</label>
              <div class="progress-wrap">
                <div style="width:99%;"></div>
              </div>
              <div class="fraction">99分</div>
              <div class="text">基于名字与生肖宜忌开运助运打分</div>
            </li>
            <li class="first">
              <label>三才五格分：</label>
              <div class="progress-wrap">
                <div style="width:98%;"></div>
              </div>
              <div class="fraction">98分</div>
              <div class="text">基于名字三才五格和理吉凶打分</div>
            </li>
            <li>
              <label>财运卦象分：</label>
              <div class="progress-wrap">
                <div style="width:99%;"></div>
              </div>
              <div class="fraction">99分</div>
              <div class="text">基于名字财运事业卦象易数打分</div>
            </li>
          </ul>
        </div>
        <div class="unlock-wrap">
          <div class="text">精准取名结果</div>
          <div class="img-box"> <a class="unlock" href="javascript:;"> <i></i> <span>立即解锁美名</span> </a> </div>
        </div>
      </div>
    </div>
  </div>
  <!-- 方案结束 --> 
<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "https://hm.baidu.com/hm.js?7c54c92373bf075ce01c8e7dfa9f2380";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
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