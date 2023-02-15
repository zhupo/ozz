/*
Powered by ly200.com		http://www.ly200.com
广州联雅网络科技有限公司		020-83226791
*/

var global_obj={
	timer:'',
	check_form:function(notnull_obj, format_obj, type, is_new){
		var flag=false,
			is_new=(typeof(arguments[3])=='undefined')?0:1;
		if(notnull_obj){
			notnull_obj.each(function(){
				var $lang = $(this).parents('.tab_txt').attr('lang'); //后台语言版
				if(!$(this).find('input').length && $.trim($(this).val())==''){
					if($lang){ //后台语言版
						$(this).parents('.rows').find('.tab_box_btn[data-lang='+$lang+']').addClass('empty');
					}
					if($(this).attr('parent_null')){ //提示在父级
						$(this).parents('[parent_null]').css('border', '1px solid red').addClass('null');
					}else{
						$(this).css('border', '1px solid red').addClass('null');
					}
					flag==false && ($(this).focus());
					flag=true;
				}else{
					$(this).parents('.rows').find('.tab_box_btn[data-lang='+$lang+']').removeClass('empty');
					if($(this).attr('parent_null')){ //提示在父级
						$(this).parents('[parent_null]').removeAttr('style').removeClass('null');
					}else{
						$(this).removeAttr('style').removeClass('null');
					}
				}
			});
			//后台语言版
			$('.rows').find('.tab_box_row .tips').hide();
			$('.rows').find('.tab_box_row .tab_box_btn').each(function(){
				if($(this).hasClass('empty')){
					$(this).parents('.tab_box_row').find('.tips').show();
				}
			});
			if(flag){return flag;};
		}
		if(format_obj){
			var reg={
				'MobilePhone':/^1[34578]\d{9}$/,
				'Telephone':/^(0\d{2,3})(-)?(\d{7,8})(-)?(\d{3,})?$/,
				'Fax':/^(0\d{2,3})(-)?(\d{7,8})(-)?(\d{3,})?$/,
				'Email':/^\w+[a-zA-Z0-9-.+_]+@[a-zA-Z0-9-.+_]+\.\w*$/,
				'Length':/^.*/
			};
			var tips={
				'MobilePhone':lang_obj.format.mobilephone,
				'Telephone':lang_obj.format.telephone,
				'Fax':lang_obj.format.fax,
				'Email':lang_obj.format.email,
				'Length':lang_obj.format.length
			};
			if(type==1){
				format_obj.each(function(){
					var o=$(this);
					if($.trim(o.val())){
						if(reg[o.attr('format')].test($.trim(o.val()))===false){
							o.css('border', '1px solid red').addClass('null');
							o.focus();
							flag=true;
						}
					}
				});
			}else{
				format_obj.each(function(){
					var o=$(this);
					var s=o.attr('format').split('|');
					if(!$.trim(o.val())){
						flag=false;
					}else if((s[0]=='Length' && $.trim(o.val()).length!=parseInt(s[1])) || (s[0]!='Length' && reg[s[0]].test($.trim(o.val()))===false)){
						if(is_new==1){
							global_obj.new_win_alert(tips[s[0]].replace('%num%', s[1]));
						}else{
							global_obj.win_alert(tips[s[0]].replace('%num%', s[1]),'','sorry');
						}
						o.css('border', '1px solid red').addClass('null');
						o.focus();
						flag=true;
						return false;
					}
				});
			}
		}
		return flag;
	},

	win_alert:function(tips, callback, type, is_pop){
		var type=(typeof(arguments[2])=='undefined')?'alert':arguments[2],
			is_pop=(typeof(arguments[3])=='undefined')?0:1,
			html;
		$('#div_mask, .win_alert').remove();//优先清空多余的弹出框
		global_obj.div_mask();
		html='<div class="win_alert">';
			html+='<div class="win_close"><button class="close">X</button></div>';
			if(type=='password'){
				html+='<div class="win_pwd clean"><div class="pwd_name fl">'+lang_obj.signIn.password+':</div><div class="fl pwd_r"><input name="Password" value="" type="password" autocomplete="off" class="pwd_text"><div class="error_tips"></div></div></div>';
			}else if(type=='sorry'){
				html+='<div class="win_top_tips">'+lang_obj.global.sorry+'</div>';
				html+='<div class="win_tips">'+tips+'</div>';
			}else{
				html+='<div class="win_tips">'+tips+'</div>';
			}
			html+='<div class="win_btns"><button class="btn btn_sure">'+lang_obj.global.confirm+'</button>';
			if(type=='confirm' || type=='password') html+='<button class="btn btn_cancel">'+lang_obj.global.cancel+'</button>';
			html+='</div>';
		html+='</div>';
		$('body').prepend(html);
		$('.win_alert').css({left:$(window).width()/2-$('.win_alert').outerWidth()/2,top:'30%'});
		if(type=='confirm'){
			$('.win_alert').delegate('.close, .btn_cancel', 'click', function(){
				$('.win_alert').remove();
				is_pop==0 && global_obj.div_mask(1);
			}).delegate('.btn_sure', 'click', function(){
				$.isFunction(callback) && callback();
				$('.win_alert .close').click();
			});
			/*$(document).keyup(function(event){	//Esc、Space取消提示，空格、Enter确定提示
				if(event.keyCode==27 || event.keyCode==8){
					$('.win_alert .close').click();
				}else if(event.keyCode==32 || event.keyCode==13){
					$.isFunction(callback) && callback();
					$('.win_alert .close').click();
				}
			});*/
		}else if(type=='password'){
			$('.win_alert').on('click', '.close, .btn_cancel', function(){
				$('.win_alert').remove();
				global_obj.div_mask(1);
			}).on('click', '.btn_sure', function(){
				$.isFunction(callback) && callback();
				//$('.win_alert .close').click();
			});
		}else{
			$('.win_alert').delegate('.close, .btn_sure', 'click', function(){
				$.isFunction(callback) && callback();
				$('.win_alert').remove();
				is_pop==0 && global_obj.div_mask(1);
			});
			/*$(document).keyup(function(event){	//Esc、Enter、Space、空格取消提示
				if(event.keyCode==13 || event.keyCode==8 || event.keyCode==27 || event.keyCode==32) {
					$('.win_alert .close').click();
				}
			});*/
		}
		return false;
	},

	new_win_alert:function(tips, callback, type, is_pop, status, btn){ //status => await(叹号) fail(红叉)
		var type=(typeof(arguments[2])=='undefined')?'alert':arguments[2],
			is_pop=(typeof(arguments[3])=='undefined')?0:1,
			status=(typeof(arguments[4])=='undefined')?'await':arguments[4],
			btn=(typeof(arguments[5])=='undefined')?lang_obj.global.confirm:arguments[5],
			html;
		$('#div_mask, .new_win_alert').remove();//优先清空多余的弹出框
		global_obj.div_mask();
		html='<div class="new_win_alert">';
			html+='<div class="win_close"><button class="close"></button></div>';
			html+='<div class="win_tit">'+lang_obj.global.notice+'</div>';
			html+='<div class="win_tips">'+tips+'</div>';
			html+='<div class="win_btns">';
				if(type=='confirm') html+='<button class="btn btn_cancel">'+lang_obj.global.cancel+'</button>';
				html+='<button class="btn btn_sure">'+btn+'</button>';
			html+='</div>';
		html+='</div>';
		$('body').prepend(html);
		$('.new_win_alert').css({left:$(window).width()/2-$('.new_win_alert').outerWidth()/2,top:'30%'});
		if(type=='confirm'){
			$('.new_win_alert').delegate('.close, .btn_cancel', 'click', function(){
				$('.new_win_alert').remove();
				is_pop==0 && global_obj.div_mask(1);
			}).delegate('.btn_sure', 'click', function(){
				$.isFunction(callback) && callback();
				$('.new_win_alert .close').click();
			});
			/*$(document).keyup(function(event){	//Esc、Space取消提示，空格、Enter确定提示
				if(event.keyCode==27 || event.keyCode==8){
					$('.new_win_alert .close').click();
				}else if(event.keyCode==32 || event.keyCode==13){
					$.isFunction(callback) && callback();
					$('.new_win_alert .close').click();
				}
			});*/
		}else{
			$('.new_win_alert').delegate('.close, .btn_sure', 'click', function(){
				$.isFunction(callback) && callback();
				$('.new_win_alert').remove();
				is_pop==0 && global_obj.div_mask(1);
			});
			/*$(document).keyup(function(event){	//Esc、Enter、Space、空格取消提示
				if(event.keyCode==13 || event.keyCode==8 || event.keyCode==27 || event.keyCode==32) {
					$('.win_alert .close').click();
				}
			});*/
		}
		return false;
	},

	win_alert_auto_close:function(tips, status, time, pos_top, no_remove_mask){ //status => await(叹号) fail(红叉)
		var status=(typeof(arguments[1])=='undefined')?'await':arguments[1],
			time=(typeof(arguments[2])=='undefined' || !arguments[2])?'2000':arguments[2],
			pos_top=(typeof(arguments[3])=='undefined' || !arguments[3])?'40%':arguments[3],
			no_remove_mask=(typeof(arguments[4])=='undefined')?1:arguments[4],
			html="";
		if(no_remove_mask) $('#div_mask, .new_win_alert').remove();//优先清空多余的弹出框
		if(status!='loading' || (status=='loading' && time==-1)){
			//除了loading Or 固定显示loading
			html+='<div class="new_win_alert win_alert_auto_close'+(status=='loading'?' win_alert_loading':'')+'">';
			html+=	'<div class="win_tips"><i class="icon_success_status '+status+'"></i>'+tips+'</div>';
			html+='</div>';

			$('body').prepend(html);
			$('.new_win_alert').css({left:$(window).width()/2-$('.new_win_alert').outerWidth()/2, top:pos_top});
		}
		clearTimeout(global_obj.timer);
		if(status!='loading' || (status=='loading' && time>=0)){
			//除了loading Or 计时自动关闭loading
			global_obj.timer=setTimeout(function(){
				$('.new_win_alert').remove();
			}, time);
		}
		return false;
	},

	div_mask:function(remove){
		if(remove==1){
			$('#div_mask').remove();
		}else{
			if(!$('#div_mask').size()){
				$('body').prepend('<div id="div_mask"></div>');
				$('#div_mask').css({width:'100%', height:$(document).height(), overflow:'hidden', position:'fixed', top:0, left:0, background:'#000', opacity:0.5, 'z-index':10000});
			}
		}
	},

	data_posting:function(display, tips){
		if(display){
			$('body').prepend('<div id="data_posting"><img src="/static/images/ico/data_posting.gif" width="16" height="16" align="absmiddle" />  '+tips+'</div>');
			$('#data_posting').css({
				width:'188px',
				height:'24px',
				'line-height':'24px',
				padding:'0 8px',
				overflow:'hidden',
				border:'1px solid #bbb',
				background:'#ddd',
				position:'fixed',
				top:'40%',
				left:'48%',
				'z-index':10001
			});
		}else{
			setTimeout('$("#data_posting").remove();', 500);
		}
	},

	urlencode:function(str) {
		str = (str + '').toString();
		return encodeURIComponent(str).replace(/!/g, '%21').replace(/'/g, '%27').replace(/\(/g, '%28').replace(/\)/g, '%29').replace(/\*/g, '%2A').replace(/%20/g, '+');
	},

	in_array:function(needle, arr){
		for(var i=0; i<arr.length && arr[i]!=needle; i++);
		return !(i==arr.length);
	},

	is_array:function(data){
		if(Object.prototype.toString.call(data) == '[object Array]'){
			return true;
		}else{
			return false;
		}
	},

	base64_encode:function(str){
		var c1, c2, c3;
		var base64EncodeChars = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/";
		var i = 0, len= str.length, string = '';
		while (i < len){
			c1 = str.charCodeAt(i++) & 0xff;
			if (i == len){
				string += base64EncodeChars.charAt(c1 >> 2);
				string += base64EncodeChars.charAt((c1 & 0x3) << 4);
				string += "==";
				break;
			}
			c2 = str.charCodeAt(i++);
			if (i == len){
				string += base64EncodeChars.charAt(c1 >> 2);
				string += base64EncodeChars.charAt(((c1 & 0x3) << 4) | ((c2 & 0xF0) >> 4));
				string += base64EncodeChars.charAt((c2 & 0xF) << 2);
				string += "=";
				break;
			}
			c3 = str.charCodeAt(i++);
			string += base64EncodeChars.charAt(c1 >> 2);
			string += base64EncodeChars.charAt(((c1 & 0x3) << 4) | ((c2 & 0xF0) >> 4));
			string += base64EncodeChars.charAt(((c2 & 0xF) << 2) | ((c3 & 0xC0) >> 6));
			string += base64EncodeChars.charAt(c3 & 0x3F)
		}
		return string
	},

	htmlspecialchars:function(str){
		str = (str + '').toString();
		str = str.replace(/&/g, '&amp;');
		str = str.replace(/</g, '&lt;');
		str = str.replace(/>/g, '&gt;');
		str = str.replace(/"/g, '&quot;');
		str = str.replace(/'/g, '&#039;');
		return str;
	},

	htmlspecialchars_decode:function(str){
		str = (str + '').toString();
		str = str.replace(/&amp;/g, '&');
		str = str.replace(/&lt;/g, '<');
		str = str.replace(/&gt;/g, '>');
		str = str.replace(/&quot;/g, '"');
		str = str.replace(/&#039;/g, "'");
		str = str.replace(/&#39;/g, "'");
		return str;
	},

	attr_htmlspecialchars:function(str){
		str = (str + '').toString();
		str = str.replace(/&/g, '&amp;');
		str = str.replace(/</g, '&lt;');
		str = str.replace(/>/g, '&gt;');
		str = str.replace(/"/g, '&quot;');
		return str;
	},

	web_attr_htmlspecialchars:function(str){
		str = (str + '').toString();
		str = str.replace(/&/g, '&amp;');
		str = str.replace(/</g, '&lt;');
		str = str.replace(/>/g, '&gt;');
		return str;
	},

	
	setCookie:function(name, value, expiredays){
		var exdate=new Date();
		exdate.setDate(exdate.getDate()+expiredays);
		alert(name+"="+escape(value)+((expiredays==null) ? "" : ";expires="+exdate.toGMTString()));
		document.cookie=name+"="+escape(value)+((expiredays==null) ? "" : ";expires="+exdate.toGMTString());
	},
	
	getCookie:function(name){
		if(document.cookie.length>0){
			start=document.cookie.indexOf(name+"=");
			if(start!=-1){
				start=start+(name.length+1);
				end=document.cookie.indexOf(";", start);
				if(end==-1) end=document.cookie.length;
				return unescape(document.cookie.substring(start, end));
			}
		}
		return "";
	},
	
	delCookie:function(name, expiredays){
		var exdate=new Date();
		exdate.setDate(exdate.getDate()-1);
		var value=global_obj.getCookie(name)
		if(value){
			document.cookie=name+"="+escape(value)+((expiredays==null) ? "" : ";expires="+exdate.toGMTString());
		}
	},

	query_get:function(value, selecter)
	{
		if (selecter == 'parent') {
			var query = window.parent.location.search.substring(1);
		} else {
			var query = window.location.search.substring(1);
		}
		var vars = query.split("&");
		for (var i = 0; i < vars.length; i++) {
			var pair = vars[i].split("=");
			if(pair[0] == value) return pair[1];
		}
		return false;
	},

	sort:function(a,b){ //属性键值排序 Ov: 是海外仓 要排到最后
		if(a.indexOf('Ov:')!=-1){
			a=99999999;
		}
		if(b.indexOf('Ov:')!=-1){
			b=99999999;
		}
		return a - b;
	},

	checkCharLength:function(box,content){ //字长判断
		var e=$(box);
		e.change(function(event){
			var curLength=e.val().length;
			var maxlength=e.attr('maxlength');
			if(curLength>maxlength){
				e.val($.trim(e.val()).substr(0,maxlength)).trigger('change');
				return;
			}
			$('#review_form .font_tips em').text(curLength);
			$(content).text(maxlength-curLength).parent().toggleClass('red', curLength>maxlength);
		}).keyup(function(){
			e.trigger('change');
		});
	},
}

//Object => string
$.toJSON = typeof JSON == "object" && JSON.stringify ? JSON.stringify: function(e) {
	if (e === null) return "null";
	var t, n, r, i, s = $.type(e);
	if (s === "undefined") return undefined;
	if (s === "number" || s === "boolean") return String(e);
	if (s === "string") return $.quoteString(e);
	if (typeof e.toJSON == "function") return $.toJSON(e.toJSON());
	if (s === "date") {
		var o = e.getUTCMonth() + 1,
		u = e.getUTCDate(),
		a = e.getUTCFullYear(),
		f = e.getUTCHours(),
		l = e.getUTCMinutes(),
		c = e.getUTCSeconds(),
		h = e.getUTCMilliseconds();
		o < 10 && (o = "0" + o);
		u < 10 && (u = "0" + u);
		f < 10 && (f = "0" + f);
		l < 10 && (l = "0" + l);
		c < 10 && (c = "0" + c);
		h < 100 && (h = "0" + h);
		h < 10 && (h = "0" + h);
		return '"' + a + "-" + o + "-" + u + "T" + f + ":" + l + ":" + c + "." + h + 'Z"'
	}
	t = [];
	if ($.isArray(e)) {
		for (n = 0; n < e.length; n++) t.push($.toJSON(e[n]) || "null");
		return "[" + t.join(",") + "]"
	}
	if (typeof e == "object") {
		for (n in e) if (hasOwn.call(e, n)) {
			s = typeof n;
			if (s === "number") r = '"' + n + '"';
			else {
				if (s !== "string") continue;
				r = $.quoteString(n)
			}
			s = typeof e[n];
			if (s !== "function" && s !== "undefined") {
				i = $.toJSON(e[n]);
				t.push(r + ":" + i)
			}
		}
		return "{" + t.join(",") + "}"
	}
};

//string => Object
$.evalJSON = typeof JSON == "object" && JSON.parse ? JSON.parse: function(str) {
	return eval("(" + str + ")")
};
document.documentElement.addEventListener('touchstart', function (event) {
  if (event.touches.length > 1) {
	event.preventDefault();
  }
}, false);

// 新版评论 start
function loadReviewImg(obj,Id){
	var file	= obj.files[0],		//获取文件
		reader	= new FileReader(),	//创建读取文件的对象
		can_upload = 1,
		imgFile = '';
	extStart = file['name'].lastIndexOf('.');
	extname = file['name'].substring(extStart,file['name'].length).toUpperCase();

	if(extname!='.JPG' && extname!='.PNG' && extname!='.GIF'){
		global_obj.win_alert(lang_obj.format.error_file);
		can_upload = 0;
	}
	file_size = file['size'];
	if(file_size>2097152){
		global_obj.win_alert(lang_obj.format.file_tobig.replace('%num%','2'));
		can_upload = 0;
	}
	if(file && can_upload){
		$('#'+Id).parents('.upload_box').addClass('on');
		$('#'+Id).parents('.upload_box').find('.close').show();

		var Num=$('.review_form .inbox_popup_input .upload_box').length,
			html='',
			ImgNum=$('.review_form .inbox_popup_input .upload_box.on').length;

		html+='<div class="upload_box">';
			html+='<input class="upload_file" id="upload_file_'+Num+'" type="file" name="PicPath_'+Num+'" onchange="loadReviewImg(this,\'pic_show_'+Num+'\');" accept="image/gif,image/jpeg,image/png" />';
			html+='<div class="num_tips"><em>'+(Num+1)+'</em>/3</div>';
			html+='<div class="close" onclick="ReviewImgDel(\'pic_show_'+Num+'\',\'upload_file_'+Num+'\')">X</div>';
			html+='<label for="upload_file_'+Num+'"><div id="pic_show_'+Num+'" class="pic_box"></div></label>';
		html+='</div>';
		if(Num<3){
			$(".review_form .inbox_popup_input .upload_box:last").after(html);
		}
		$('.review_form .inbox_popup_input .upload_box').eq(ImgNum).show();

		//已选择
		reader.onload=function(e){ //为文件读取成功设置事件
			imgFile=e.target.result;
			window.document.getElementById(Id).innerHTML='<img src="'+imgFile+'" alt="" /><span></span><input type="hidden" name="FilePath[]" value="'+imgFile+'"><input type="hidden" name="FileName[]" value="'+file['name']+'">';
		};
		reader.readAsDataURL(file); //正式读取文件

	}else{
		$(obj).val('');
		//remove_review_img(Id);
		//window.document.getElementById(Id).innerHTML='<img src="" alt="" /><span></span>';
	}
}
function ReviewImgDel(Id,obj){
	var Num=$('.review_form .inbox_popup_input .upload_box').length,
		file = $("#"+obj);
	file.after(file.clone().val(""));
	file.remove();
	remove_review_img(Id);
	window.document.getElementById(Id).innerHTML='<img src="" alt="" /><span></span>';
}

function remove_review_img(Id){
	$('#'+Id).parents('.upload_box').removeClass('on');
	$('#'+Id).parents('.upload_box').find('.close').hide();
	var ImgNum=$('.review_form .inbox_popup_input .upload_box.on').length,
		index=$('#'+Id).parents('.upload_box').index();
	$('.review_form .inbox_popup_input .upload_box').hide();
	$('.review_form .inbox_popup_input .upload_box.on').show();
	if(index!=2){
		$('.review_form .inbox_popup_input .upload_box:last').after($('#'+Id).parents('.upload_box'));
	}
	sort_review_img();
	$('.review_form .inbox_popup_input .upload_box').eq(ImgNum).show();
}

function sort_review_img(){
	$('.review_form .inbox_popup_input .upload_box').each(function(){
		var Num=$(this).index();
		$(this).find('.num_tips em').text(Num+1);
	});
}



//检查登录状态
$.fn.checkUser=function(){
	$.post('/?do_action=user.check_user&t='+Math.random(), '', function(data){
		if(data.ret==1){
			ueeshop_config['UserId']=data.msg['UserId']; //更新登录状态
		}
	}, 'json');
}

//购买流程，弹出会员登录框或者访客继续付款
$.fn.loginOrVisitors=function(url, type, cancelback){
	var comeback=(typeof(arguments[3])=='undefined')?'':arguments[3];//登录成功后执行函数
	var obj=$(this);
	if(ueeshop_config['TouristsShopping']==0 && ueeshop_config['UserId']==0/* && global_obj.getCookie('loginOrVisitors')!='ok'*/){
		user_obj.set_form_sign_in('', url, type);
		user_obj.sign_in_init(cancelback);
		comeback && $('form[name=signin_form]').append('<input type="hidden" name="comeback" value="'+comeback+'" />');
		//global_obj.setCookie('loginOrVisitors', 'ok', 86400);
	}else{
		if(type==1) window.location.href=url;
		return false;
	}
}

//支付加载效果
$.fn.payLoadingEffect = function($Type) {
	let $Html = "";
	let $WinWidth = $(window).width();
	let $BoxWidth = 0;
	if ($Type == 1) {
		//显示
		if ($("#payment_ready").length) {
			$("#payment_ready").remove();
		}
		$Html += '<div id="payment_ready" class="themes_popups">';
		$Html += '	<div class="load">';
		$Html += '		<div class="load_payment"><div class="load_image"></div><div class="load_loader"></div></div>';
		$Html += '	</div>';
		$Html += '	<div class="info">';
		$Html += '		<p>' + lang_obj.cart.tips.pay_loading_0 + '</p><p>' + lang_obj.cart.tips.pay_loading_1 + '</p>';
		$Html += '	</div>';
		$Html += '</div>';
		$("body").append($Html);
		global_obj.div_mask();
		$BoxWidth = $("#payment_ready").outerWidth();
		$("#payment_ready").css({'left':($WinWidth / 2 - $BoxWidth / 2)});
	} else {
		//隐藏
		global_obj.div_mask(1);
		$("#payment_ready").remove();
	}
}

$.fn.checkAmount = function(obj) {
	//只能填入数字
	obj.find('input[rel=amount]').off('keydown').keydown(function(e){
		var value	= $(this).val(),
			key		= (window.event?e.keyCode:e.which),
			ctrl	= (e.ctrlKey || e.metaKey),
			ext   	= 0;
			if (((key==109  && value.indexOf('-')<0) || (key==189  && value.indexOf('-')<0)) && $(this).attr('data-key')=='-') ext=1;
			if (key == 9 || key == 37 || key == 39 || key == 46) ext = 1; //保留tab 左右方向键 向后删除键
		if (!e.shiftKey && ((key>95 && key<106) || (key>47 && key<60) || (key==110 && value.indexOf('.')<0) || (key==190 && value.indexOf('.')<0) || ext)) { //[0~9][.]
		} else if ((ctrl && key==67) || (ctrl && key==86) || (ctrl && key==65)) { //Ctrl+C Ctrl+V Ctrl+A
		} else if (key!=8) { //删除键
			if (window.event) {//IE
				e.returnValue = false;
			} else {//Firefox
				e.preventDefault();
			}
			return false;
		}
	});
	obj.find('input[rel=int]').off('keydown').keydown(function(e){
		var value	= $(this).val(),
			key		= (window.event?e.keyCode:e.which),
			ctrl	= (e.ctrlKey || e.metaKey),
			ext   	= 0;
			if(((key==109  && value.indexOf('-')<0) || (key==189  && value.indexOf('-')<0)) && $(this).attr('data-key')=='-') ext=1;
			if(key == 9 || key == 37 || key == 39 || key == 46) ext = 1; //保留tab 左右方向键 向后删除键
		if (!e.shiftKey && ((key>95 && key<106) || (key>47 && key<60) || ext)) { //[0~9][.]
		} else if ((ctrl && key==67) || (ctrl && key==86) || (ctrl && key==65)) { //Ctrl+C Ctrl+V Ctrl+A
		} else if (key!=8) { //删除键
			if (window.event) {//IE
				e.returnValue = false;
			} else {//Firefox
				e.preventDefault();
			}
			return false;
		}
	});
}

//图片lightbox效果
$.fn.show_image=function(){
	var size=0;
	var index=$(this).index();
	var html='';
	html+='<div id="global_show_image"><div class="global_show_img_container"><ul>';
	$(this).parent().find('.pic_box').each(function(){
		html+='<li><img src="'+$(this).attr('href')+'"/><span></span></li>';
		size++;
	});
	html+='</ul></div></div>';
	$('body').prepend(html);
	$('#global_show_image').css({'width':'100%','height':'100%','z-index':'10001','position':'fixed'});
	$('#global_show_image .global_show_img_container').css({'width':'90%','height':'90%','margin':'5%','position':'relative','overflow':'hidden'});
	$('#global_show_image ul').css({'width':(100*size)+'%','height':'100%','position':'absolute','left':'-'+(100*index)+'%','top':'0'});
	var li_width=(100/size);
	$('#global_show_image ul li').css({'width':li_width+'%','height':'100%','float':'left','text-align':'center','background':'url(/static/mobile/images/loading.gif) center no-repeat','background-size':'20px'});
	$('#global_show_image ul li img').css({'vertical-align':'middle', 'background-color':'#fff'});
	$('#global_show_image ul li span').css({'height':'100%','display':'inline-block','vertical-align':'middle'});
	global_obj.div_mask();
	if(size>1){
		var touchStartX = 0;
		var touchEndX = 0;
		$('#global_show_image li').on('touchmove',function(event){
			event.preventDefault();
			event.stopPropagation();
		});
		$('#global_show_image li').on('touchstart',function(event){
			touchStartX=event.originalEvent.changedTouches[0].pageX;
		});
		$('#global_show_image li').on('touchend',function(event){
			event.preventDefault();
			event.stopPropagation();
			touchEndX=event.originalEvent.changedTouches[0].pageX;
			if(touchEndX-touchStartX>30){	//右滑动	//30像素偏移值
				index = --index > 0 ? index : 0;
				$('#global_show_image ul').animate({'left':'-'+(100*index)+'%'});
			}else if(touchEndX-touchStartX<-30){	//左滑动	//30像素偏移值
				index = ++index < size ? index : size-1;
				$('#global_show_image ul').animate({'left':'-'+(100*index)+'%'});
			}else{	//点击取消
				$('#global_show_image').remove();
				global_obj.div_mask(1);
			}
		});
	}else{ //单张图片
		$('#global_show_image li').on('touchend',function(event){ //点击取消
			$('#global_show_image').remove();
			global_obj.div_mask(1);
		});
	}
};

//解决浮点数精度丢失问题
$.fn.floatingNumber = function(type, arg1, arg2) {
	var result = '';
	if (type == 'addition') {
		//加法
		var r1, r2, m;
		try {
			r1 = arg1.toString().split(".")[1].length;
		} catch(e) { r1 = 0; }
		try {
			r2 = arg2.toString().split(".")[1].length;
		} catch(e){ r2 = 0; }
		m = Math.pow(10, Math.max(r1, r2));
		result = (Math.round(arg1 * m) + Math.round(arg2 * m)) / m;
	} else if (type == 'subtraction') {
		//减法
		var r1, r2, m, n;
		try {
			r1 = arg1.toString().split(".")[1].length;
		} catch(e) { r1 = 0; }
		try {
			r2 = arg2.toString().split(".")[1].length;
		} catch(e) { r2 = 0; }
		m = Math.pow(10, Math.max(r1, r2)); //动态控制精度长度
		n = (r1 >= r2) ? r1 : r2;
		result = parseFloat(((Math.round(arg1 * m) - Math.round(arg2 * m)) / m).toFixed(n));
	} else if (type == 'multiply') {
		//乘法
		var m = 0, s1 = arg1.toString(), s2 = arg2.toString();
		try {
			m += s1.split(".")[1].length;
		} catch(e) {}
		try {
			m += s2.split(".")[1].length;
		} catch(e) {}
		result = Number(s1.replace(".", "")) * Number(s2.replace(".", "")) / Math.pow(10, m);
	} else if (type == 'division') {
		//除法
		var t1 = 0, t2 = 0, r1, r2;
		try {
			t1 = arg1.toString().split(".")[1].length;
		} catch(e) {}
		try {
			t2 = arg2.toString().split(".")[1].length;
		} catch(e) {}
		with (Math) {
			r1 = Number(arg1.toString().replace(".", ""));
			r2 = Number(arg2.toString().replace(".", ""));
			result = (r1 / r2) * pow(10, t2 - t1);
		}
	}
	return result;
}
Number.prototype.add = function(arg) {
	return $('html').floatingNumber('addition', arg, this);
};
Number.prototype.sub = function(arg) {
	return $('html').floatingNumber('subtraction', this, arg);
};
Number.prototype.mul = function (arg) {
	return $('html').floatingNumber('multiply', arg, this);
};
Number.prototype.div = function (arg) {
	return $('html').floatingNumber('division', this, arg);
};

//货币格式显示
$.fn.iconvPriceFormat = function(price) {
	var method		= (typeof(arguments[1]) == 'undefined') ? 0 : arguments[1],
		currency	= (typeof(arguments[2]) == 'undefined') ? '' : arguments[2],
		is_currency	= (typeof(arguments[3]) == 'undefined') ? 0 : arguments[3],
		symbol		= ueeshop_config.currency_symbols,
		price		= parseFloat(price),
		result		= 0;
	currency == '' && (currency = ueeshop_config.currency);
	if (method == 0) {
		//符号+价格
		price = parseInt(price.mul(10000));
		result = (Math.ceil(price.div(100)).div(100)).toFixed(2);
		is_currency == 1 && currency && (result = $('html').currencyFormat(result, currency));
		result = symbol + result;
	} else if (method == 1) {
		//符号
		result = symbol;
	} else {
		//价格
		price = parseInt(price.mul(10000));
		result = (Math.ceil(price.div(100)).div(100)).toFixed(2);
		is_currency == 1 && currency && (result = $('html').currencyFormat(result, currency));
	}
	return result;
}

//货币格式显示
$.fn.currencyFormat=function(price, currency){
	var result=0;
	price=parseFloat(price);
	switch(currency){
		case 'USD':
		case 'GBP':
		case 'CAD':
		case 'AUD':
		case 'CHF':
		case 'HKD':
		case 'ILS':
		case 'MXN':
		case 'CNY':
		case 'SAR':
		case 'SGD':
		case 'NZD':
		case 'AED':
			result=price.formatMoney(2, '.', ','); break;
		case 'RUB':
			result=price.formatMoney(2, ',', ' '); break;
		case 'EUR':
		case 'BRL':
		case 'ARS':
			result=price.formatMoney(2, ',', '.'); break;
		case 'CLP':
		case 'NOK':
		case 'DKK':
		case 'COP':
			result=price.formatMoney(0, '', '.'); break;
		case 'JPY':
		case 'SEK':
		case 'KRW':
		case 'INR':
		case 'TWD':
			result=price.formatMoney(0, '', ','); break;
		default:
			result=price.formatMoney(2, '.', ','); break;
	}
	return result;
}


Number.prototype.formatMoney=function(places, decimal, thousand){
	places=!isNaN(places=Math.abs(places))?places:2;
	thousand=thousand || ',';
	decimal=decimal || '.';
	var number=this,
		negative=number<0?'-':'',
		i=parseInt(number=Math.abs(+number || 0).toFixed(places), 10)+'',
		j=(j=i.length)>3?j%3:0;
	return negative+(j?i.substr(0, j)+thousand:'')+i.substr(j).replace(/(\d{3})(?=\d)/g, "$1" + thousand)+(places?decimal+Math.abs(number-i).toFixed(places).slice(2):'');
};

$.fn.FloatPrice=function(price){ //处理价格 放大1000倍向下取整 返回两位小数
	var result=0;
	// result=(Math.floor(parseFloat(price)*1000)/1000).toFixed(2);
	result=parseFloat(parseFloat(price).toFixed(8).match(/^\d+(?:\.\d{0,2})?/));
	return parseFloat(result);
}


//loading加载效果
$.fn.loading=function(e){
	e=$.extend({opacity:.5,size:"big"},e);
	$(this).each(function(){
		if($(this).hasClass("masked")) return;
		var obj=$(this);
		var l=$('<div class="loading"></div>').css("opacity", 0);
		obj.addClass("masked").append(l);
		//var lb=$('<div class="loading_msg loading_big"></div>').appendTo(obj);
		var lb=$('<div class="loading_msg loading_'+e.size+'"></div>').appendTo(obj);
		lb.css({
			top: obj.height() / 2 - (lb.height() + parseInt(lb.css("padding-top")) + parseInt(lb.css("padding-bottom"))) / 2,
			left: obj.width() / 2 - (lb.width() + parseInt(lb.css("padding-left")) + parseInt(lb.css("padding-right"))) / 2
		});
	});
	return this;
}
//取消loading加载效果
$.fn.unloading=function(){
	$(this).each(function(){
		$(this).find(".loading_msg, .loading").remove();
		$(this).removeClass("masked");
	});
}

//单引号双引号用反斜杠转义
$.quotationMarksTransferred = function (str) {
	str = str.replace(/([\\])/g, "\\$1");
	str = str.replace(/(["])/g, "\\$1");
	return str;
}


//分享插件
$.fn.shareThis=function(type, title, url){
	var image=back_url=encode_url="";
	if(url==undefined){
		url=window.location.href;
	}
	if(url.indexOf("#")>0){
		url=url.substring(0, url.indexOf("#"));
	}
	if(type=="pinterest"){
		//image=window.location.protocol+'//'+window.location.host+$(".big_box .big_pic>img").attr("src");
		//var url=$(".big_box .big_pic>img").attr("src");
		image=$(".big_box .big_pic>img").attr("src");
		//没有产品主图 用logo代替
		if(!image){
			image = $('#header .logo img').attr('src');
		}
		if(image.indexOf('ueeshop.ly200-cdn.com')!=-1){
			image=$(".big_box .big_pic>img").attr("src");
		}else{
			image=window.location.protocol+'//'+window.location.host+$(".big_box .big_pic>img").attr("src");
		}
	}
	if(image!="" && image!=undefined){
		image=encodeURIComponent(image);
	}
	e_url=encodeURIComponent(url);
	title=encodeURIComponent(title);
	switch(type){
		case "delicious":
			back_url = "https://delicious.com/post?title=" + title + "&url=" + e_url;
			break;
		case "digg":
			back_url = "http://digg.com/submit?phase=2&url=" + e_url + "&title=" + title + "&bodytext=&topic=tech_deals";
			break;
		case "reddit":
			back_url = "http://reddit.com/submit?url=" + e_url + "&title=" + title;
			break;
		case "furl":
			back_url = "http://www.furl.net/savedialog.jsp?t=" + title + "&u=" + e_url;
			break;
		case "rawsugar":
			back_url = "http://www.rawsugar.com/home/extensiontagit/?turl=" + e_url + "&tttl=" + title;
			break;
		case "stumbleupon":
			back_url = "http://www.stumbleupon.com/submit?url=" + e_url + "&title=" + title;
			break;
		case "blogmarks":
			break;
		case "facebook":
			back_url = "http://www.facebook.com/share.php?src=bm&v=4&u=" + e_url + "&t=" + title;
			break;
		case "technorati":
			back_url = "http://technorati.com/faves?sub=favthis&add=" + e_url;
			break;
		case "spurl":
			back_url = "http://www.spurl.net/spurl.php?v=3&title=" + title + "&url=" + e_url;
			break;
		case "simpy":
			back_url = "http://www.simpy.com/simpy/LinkAdd.do?title=" + title + "&href=" + e_url;
			break;
		case "ask":
			break;
		case "google":
			back_url = "http://www.google.com/bookmarks/mark?op=edit&output=popup&bkmk=" + e_url + "&title=" + title;
			break;
		case "netscape":
			back_url = "http://www.netscape.com/submit/?U=" + e_url + "&T=" + title + "&C=";
			break;
		case "slashdot":
			back_url = "http://slashdot.org/bookmark.pl?url=" + url + "&title=" + title;
			break;
		case "backflip":
			back_url = "http://www.backflip.com/add_page_pop.ihtml?title=" + title + "&url=" + e_url;
			break;
		case "bluedot":
			back_url = "http://bluedot.us/Authoring.aspx?u=" + e_url + "&t=" + title;
			break;
		case "kaboodle":
			back_url = "http://www.kaboodle.com/za/selectpage?p_pop=false&pa=url&u=" + e_url;
			break;
		case "squidoo":
			back_url = "http://www.squidoo.com/lensmaster/bookmark?" + e_url;
			break;
		case "twitter":
			back_url = "https://twitter.com/share?text=" + title + "&url=" + e_url;
			break;
		case "pinterest":
			back_url = "http://pinterest.com/pin/create/button/?url=" + e_url + "&media=" + image + "&description=" + title;
			break;
		case "vk":
			back_url = "http://vk.com/share.php?url=" + url;
			break;
		case "bluedot":
			back_url = "http://blinkbits.com/bookmarklets/save.php?v=1&source_url=" + e_url + "&title=" + title;
			break;
		case "blinkList":
			back_url = "http://blinkbits.com/bookmarklets/save.php?v=1&source_url=" + e_url + "&title=" + title;
			break;
		case "linkedin":
			back_url = "http://www.linkedin.com/cws/share?url=" + e_url + "&title=" + title;
			break;
		case "googleplus":
			back_url = "https://plus.google.com/share?url=" + e_url;
			break;
	}
	window.open(back_url, "bookmarkWindow");
}



// form对象 转换成 json对象
$.fn.serializeObject = function() {
	var self = this,
		json = {},
		push_counters = {},
		patterns = {
			"validate": /^[a-zA-Z][a-zA-Z0-9_]*(?:\[(?:\d*|[a-zA-Z0-9_]+)\])*$/,
			"key":      /[a-zA-Z0-9_]+|(?=\[\])/g,
			"push":     /^$/,
			"fixed":    /^\d+$/,
			"named":    /^[a-zA-Z0-9_]+$/
		};

	this.build = function(base, key, value){
		base[key] = value;
		return base;
	};

	this.push_counter = function(key){
		if(push_counters[key] === undefined){
			push_counters[key] = 0;
		}
		return push_counters[key]++;
	};
	
	$.each($(this).serializeArray(), function(){

		// skip invalid keys
		if(!patterns.validate.test(this.name)){
			return;
		}

		var k,
			keys = this.name.match(patterns.key),
			merge = this.value,
			reverse_key = this.name;

		while((k = keys.pop()) !== undefined){

			// adjust reverse_key
			reverse_key = reverse_key.replace(new RegExp("\\[" + k +"\\]$"), '');

			// push
			if(k.match(patterns.push)){
				merge = self.build([], self.push_counter(reverse_key), merge);
			}

			// fixed
			else if(k.match(patterns.fixed)){
				merge = self.build([], k, merge);
			}

			// named
			else if(k.match(patterns.named)){
				merge = self.build({}, k, merge);
			}
		}

		json = $.extend(true, json, merge);
	});

	return json;
};