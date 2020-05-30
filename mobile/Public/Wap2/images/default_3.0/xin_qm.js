"use strict";
var baby_boy=[{
	'img':[img_url+'/nan_baby01.jpg','张宸赫'],
	'tita':['·五行分析','：宸赫   五行：金木'],
	'titb':['·寓意分析','：宸：本义为屋檐，引申为尊贵、权势、大方、宽广 赫：本义指显耀，显盛，盛大，声势大，引申为声名显赫。'],
	'titc':['·相关成语','：惮赫千里  门庭赫奕'],
	'titd':['·重名分析','：全国叫 张宸赫 的有： 6人']
	},{
		'img':[img_url+'/nan_baby02.jpg','余浩阳'],
		'tita':['·五行分析','：浩阳   五行：水土'],
		'titb':['·寓意分析','：浩：本义为水势浩大，引申为广远、盛大、丰富、众多 阳：指阳光，引申指温暖，明亮，积极向上。'],
		'titc':['·相关成语','：汪洋浩博 阳煦山立'],
		'titd':['·重名分析','：全国叫 余浩阳的有： 47人']
	},{
		'img':[img_url+'/nan_baby03.jpg','陈俞文'],
		'tita':['·五行分析','：俞文   五行：金水'],
		'titb':['·寓意分析','：俞：本义为允许，引申为安定，愉快 文：本义为纹理，引申为智慧、文采、才华、美德、涵养、温厚，博学多才。'],
		'titc':['·相关成语','：文江学海  文武全才'],
		'titd':['·重名分析','：全国叫 陈俞文 的有： 200人']
	}];
	
	var baby_girl=[{
	'img':[img_url+'/nv_baby01.jpg','童歆然'],
	'tita':['·五行分析','：歆然   五行：金金'],
	'titb':['·寓意分析','：歆：本义为欣喜，引申为幸福快乐、积极向上。然：本义为燃烧，引申为积极向上，好的品德。'],
	'titc':['·相关成语','：褎然举首、超然绝俗'],
	'titd':['·重名分析','：全国叫 童歆然 的有： 6人']
	},{
		'img':[img_url+'/nv_baby02.jpg','李沐遥'],
		'tita':['·五行分析','：沐遥   五行：水火'],
		'titb':['·寓意分析','：沐：本义为受到润泽，引申为博学多识、前程似锦  遥：本义为长远，引申为前程似锦。'],
		'titc':['·相关成语','：沐仁浴义 遥遥领先'],
		'titd':['·重名分析','：全国叫 李沐遥的有： 6人']
	},{
		'img':[img_url+'/nv_baby03.jpg','蔡诗涵'],
		'tita':['·五行分析','：诗涵   五行：水火'],
		'titb':['·寓意分析','：诗：本义为诗歌，引申为多才贤能，品德高尚，如诗如画，美好人生 涵：本义为水泽众多，引申为涵养、修养、内涵、包容。'],
		'titc':['·相关成语','：横槊赋诗 茹古涵今'],
		'titd':['·重名分析','：全国叫蔡诗涵然 的有： 10人']
	}];

//选择按钮 e==当前选择  con==当前选择的值得容器
function radio(e,cont){
	$(e).parent('div').find('i').find('em').removeClass('radio_select');
	$(e).find('em').addClass('radio_select');
	$(cont).val($(e).find('em').attr('data-val'));
	if(cont=='#state'){
		if($(e).find('em').attr('data-val')=='2'){
			$('.chusheng').find('span').text('预产日期');
			$('.chusheng').find('div').find('input').eq(0).attr('placeholder','请填写宝宝的预产期');
			$('.qm_info li').last().hide();
			$('.chusheng').css('border-width','0');
			$(e).parents('ul').find('li').eq(2).find('div').find('i').find('em').removeClass('radio_select');
			$(e).parents('ul').find('li').eq(2).find('div').find('i').eq(2).find('em').addClass('radio_select');
			$('.no_weiz').show();
			$('#sex_select').val(-1);
//			$('#slt_hour,#slt_mini').val('0');
		}else{
//			if($(e).text()=='已出生'){
				$('.qm_info li').show();
				$('.chusheng').css('border-width','0 0 1px').find('span').text('出生日期');
				$('.chusheng').find('div').find('input').eq(0).attr('placeholder','请选择生日');
				$(e).parents('ul').find('li').eq(2).find('div').find('i').find('em').removeClass('radio_select');
				$(e).parents('ul').find('li').eq(2).find('div').find('i').eq(0).find('em').addClass('radio_select');
				$('.no_weiz').hide();
				$('#sex_select').val(1);
//			}
		}
	}
	if($('#sex_select').val() == '0'){
		$('.case').find('span').removeClass('case_col');
		$('.case_r').addClass('case_col');
		var babysex=baby_girl;
		baby(babysex);
	}else{
		$('.case').find('span').removeClass('case_col');
		$('.case_l').addClass('case_col');
		var babysex=baby_boy;
		baby(babysex);
	}
}

//起名 姓名选择
function name_tit(t){
	$(t).parent('.info_tit').find('span').removeClass('info_titcolor');
	$(t).addClass('info_titcolor');
	$('#qm_form').attr('action','')
	if($(t).text()=='姓名测试'){
		$('.qm_info li:eq(1)').find('span').html('姓<b style="width:0.6rem;display:inline-block"></b>名');
		$('#qm_name').attr('placeholder','请输入姓名');
		$('#qm_form').attr('action',$('#qm_form').attr('data-cm'));
		$('.qm_info_but').text('立即测名');
	}else{
		$('#qm_form').attr('action',$('#qm_form').attr('data-qm'));
		$('.qm_info li:eq(1)').find('span').html('姓<b style="width:0.6rem;display:inline-block"></b>氏');
		$('#qm_name').attr('placeholder','您的姓氏');
		$('.qm_info_but').text('立即获取吉祥美名');
	}
}

//宝宝性别案例展示
function case_tit(c){
	$('.case').find('span').removeClass('case_col');
	$(c).addClass('case_col');
	if($(c).attr('data-bady')=='0'){
		var babysex=baby_girl;
		baby(babysex);
	}else{
		var babysex=baby_boy;
		baby(babysex);
	}
}

//宝宝案例
function baby(babysex){
	$('.case_ul').html('');
	$.each(babysex, function(key,val) {
		var _li='<li><div class="case_img"><img src="'+babysex[key].img[0]+'"/><p>'+babysex[key].img[1]+'</p></div><div class="case_ul_con"><p><span>'+babysex[key].tita[0]+'</span>'+babysex[key].tita[1]+'</p><p><span>'+babysex[key].titb[0]+'</span>'+babysex[key].titb[1]+'</p><p><span>'+babysex[key].titc[0]+'</span>'+babysex[key].titc[1]+'</p><p><span>'+babysex[key].titd[0]+'</span>'+babysex[key].titd[1]+'</p></div></li>';
		$('.case_ul').append(_li)
	});
}

//问题点击显示
$(function(){
	if($('.qm_quest li').length){
		$('.qm_quest li').each(function(){
			$(this).attr('data-num','1');
			$(this).click(function(){
				if($(this).attr('data-num') == 1){
					$(this).find('p').slideDown();
					$(this).siblings('li').attr('data-num','1').find('p').hide();
					$(this).attr('data-num','2');
				}else{
					$('.qm_quest li').find('p').slideUp();
					$(this).attr('data-num','1')
				}
			});
		});
	}
})

//评论滚动
var showTrue=true;
$.fn.imgscroll = function(o){
	var defaults = {
		speed: 40,
		amount: 0,
		width: 1,
		dir: "left",
		show:showTrue
	};
	o = $.extend(defaults, o);
	return this.each(function(){
		var _li = $("li", this);
		_li.parent().parent().css({overflow: "hidden", position: "relative"}); //div
		_li.parent().css({margin: "0", overflow: "hidden", position: "relative", "list-style": "none"}); //ul

		_li.css({position: "relative", overflow: "hidden"}); //li
		if(o.dir == "left") _li.css({float: "left"});
		var _li_size = 0;
		for(var i=0; i<_li.size(); i++)
			_li_size += o.dir == "left" ? _li.eq(i).outerWidth(true) : _li.eq(i).outerHeight(true);
		if(o.dir == "left") _li.parent().css({width: (_li_size*3)+"px"});
		_li.parent().empty().append(_li.clone()).append(_li.clone()).append(_li.clone());
		_li = $("li", this);
		var _li_scroll = 0;
		function goto(){
			_li_scroll += o.width;
			if(_li_scroll > _li_size)
			{
				_li_scroll = 0;
				_li.parent().css(o.dir == "left" ? { left : -_li_scroll } : { top : -_li_scroll });
				_li_scroll += o.width;
			}
				_li.parent().animate(o.dir == "left" ? { left : -_li_scroll } : { top : -_li_scroll }, o.amount);
		}
		var move = setInterval(function(){
			if(showTrue){
				goto();
			}else{
				
			}
		}, o.speed);
//		_li.parent().hover(function(){
//				clearInterval(move);
//		},function(){
//				clearInterval(move);
//				move = setInterval(function(){ goto(); }, o.speed);
//		});
	});
};
$(".gund").imgscroll({speed:20,amount:3,dir: "up"});



//底部显示按钮
//var formTop = $('.info_tit').eq(0);
//var ft = formTop.offset().top;
//formTop.css({
//	'position': 'relative'
//});
//var hrefs = '<div style="width: 100%; height: 1px; overflow: hidden;position: absolute; left: 0; top: -0.75rem;" id="ceForm"></div>';
//formTop.prepend(hrefs);
//var hTop = $('#ceForm').offset().top;
//var fiex = '' +
//	'<a style=" font-weight: bold;width: 100%; position: fixed; left: 0; right: 0; bottom: 0; z-index: 99; background-color:rgba(82,49,49,.7); font-size:0.36rem;color:#fff;text-align:center;letter-spacing: 0.02rem;line-height:1rem;height:1rem; display:none;padding:0.1rem 0;" class="fix">' + '<div style="width:80%;margin:0 auto;height:100%;line-height:1rem;border-radius:5px;background:#bb1b21;">立即获取吉祥美名</div>' + '</a>';
//var fixDiv = '<div style="width:100%; height:0rem;" class="fixDiv"></div>';
//$('body').append(fiex).append(fixDiv);
//$(window).scroll(function() {
//	var docTop = $(this).scrollTop() - 20;
//	if(docTop >= hTop) {
//		$('.fixDiv').show();
//		$('.fix').show();
//	} else {
//		$('.fixDiv').hide();
//		$('.fix').hide();
//	}
//});
//$('.fix').click(function() {
//	var t = $('#ceForm').offset().top;
//	$(window).scrollTop(t);
//	$('.fixDiv').hide();
//	$('.fix').hide();
//});