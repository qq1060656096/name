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
    
    <link rel="stylesheet" type="text/css" href="/Public/Home/css/style.css?ver=2"/>
  
  

<div class="main">
<div class="container">
  <div class="table_bg"  >
    <div class="table_xx" style='height: 100%;'>
      <div class="title"> 温馨提醒</div>
      
      <div style='padding:20px;text-align:left;width:100%;margin:0 auto'>   
    
      
          <div class="item11">
            <label>姓氏：</label>
            <span><?php echo ($info['name']); ?></span>
          </div><br>
          <div class="item11">
            <label>订单号：</label>
            <span><?php echo ($info['order_no']); ?></span>
          </div><br>
          <div class="item11">
            <label>状态：</label>
            <span class="unpaid"><?php echo ($info['statestr']); ?></span>
          </div>
        
      
      </div>
      <div  id='showdetail' style='cursor:pointer;text-align:center; padding:10px 20px;border-radius:5px;width:250px;margin:0 auto;background:#CB0000;color:#fff;font-size:18px'>返回</div>

    </div>
    <img src="/Public/Home/images/left.jpg" class="left"/>
    <img src="/Public/Home/images/right.jpg" class="right"/>
  </div>
</div>
</div>  

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