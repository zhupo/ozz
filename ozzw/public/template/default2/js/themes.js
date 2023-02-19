// JavaScript Document
//前端显示方式(0:自适应 1:窄屏 2:宽屏)

$.fn.webDisplay=function(type){
	if(type==0){
		if($(window).width()>=1250){$('body').addClass('w_1200');}
		$(window).resize(function(){
			if($(window).width()>=1250){
				$('body').addClass('w_1200');
			}else{
				$('body').removeClass('w_1200');
			}
		});
	}else if(type==2){
		$('body').addClass('w_1200');
	}
}

function nav(father,son,bor,del){	//判断导航栏，如果太长自动隐藏  参数:父元素,子元素,border的大小,是否延迟
	var delay = del ? del : 0;
	var func = function(){
		var chd = $(son);
		var nav = $(father).width();
		var chd_width = 0;
		var border = bor ? bor : 0;
		chd.show();
		chd.each(function(){
			var w = $(this).width();
			var pl = $(this).css("padding-left");
			var	pr = $(this).css("padding-right");
			var ml = $(this).css("margin-left");
			var mr = $(this).css("margin-right");
			var width = parseInt(w) + parseInt(pl) + parseInt(pr) + parseInt(ml) + parseInt(mr) + border;
			chd_width +=width;
			if(chd_width>nav){
				$(this).hide();
			}else{
				$(this).show();
			}
		});
	}
	func();
	$(window).resize(function(){
		if(delay){
			setTimeout(func, 210);
		}else{
			func();
		}
	});
}

function showthis(o1,o2,i,c){
	$(o1).eq(i).addClass(c).siblings(o1).removeClass(c);
	$(o2).eq(i).show().siblings(o2).hide();
}

function SetEditorContents(ContentsId){		//PC版编辑器设置
	var _this = $(ContentsId);
	var _img = _this.find("img");
	_img.each(function(){
		var _float = $(this).css("float");
		if(_float=='left'){
			$(this).css("margin-right","20px");
		}else if(_float=='right'){
			$(this).css("margin-left","20px");
		}
	});
	_this.find('td').css('word-break', 'normal');
}
$(function(){SetEditorContents("#global_editor_contents");})

function product_gallery(){// 产品详细页放大镜/static/static/inc/products/gallery.php使用的函数
	if($('.ueeshop_responsive_products_detail .gallery .left_small_img .pic_box').length>4){
		$('.left_small_img_inner').bxSlider({
			mode: 'vertical',
			auto: false,
			slideWidth: 90,
			minSlides: 4,
			maxSlides: 4,
			moveSlides: 1,
			slideMargin: 20
		});
	}

	$('.ueeshop_responsive_products_detail .products_img ul').bxSlider({ 
		slideWidth:$('.ueeshop_responsive_products_detail .products_img ul').width(),
		pager:false,
		auto: false,
		minSlides: 1,
		maxSlides: 1,
		moveSlides: 1,
		slideMargin: 0
	});

	$('#small_img .small_img_list .bd , .left_small_img').on('click', 'span', function(){
		$bigPic = $('.gallery .bigimg');
		if($(this).attr('pos')=='video'){ //视频
			$bigPic.find(".zoom_out").hide();
			$bigPic.find(".video_container").show();
			$(this).addClass('on').siblings('span').removeClass('on');
			$('#zoom').css('width', 'auto');
			var_j(document).a('domready', MagicZoom.refresh);
			var_j(document).a('mousemove', MagicZoom.z1);
		}else{
			$bigPic.find(".zoom_out").show();
			$bigPic.find(".video_container").hide().find('.ytp-chrome-bottom .ytp-play-button').click();
			var img=$(this).attr('pic');
			var big_img=$(this).attr('big');
			if($('#bigimg_src').length){
				$('#bigimg_src').attr('src', img).parent().attr('href', big_img);
			}else{
				$('#zoom').find('img').attr('src', img).parent().attr('href', big_img);
			}
			$(this).addClass('on').siblings('span').removeClass('on');
			$('#zoom').css('width', 'auto');
			var_j(document).a('domready', MagicZoom.refresh);
			var_j(document).a('mousemove', MagicZoom.z1);
		}
	});
	var_j(document).a('domready', MagicZoom.refresh);
	var_j(document).a('mousemove', MagicZoom.z1);
}

function case_gallery(){// 案例详细页/static/static/inc/case/gallery.php使用的函数
	$('#small_img .small_img_list .bd').delegate('span', 'click', function(){
		var img=$(this).attr('pic');
		var big_img=$(this).attr('big');
		$('#bigimg_src').attr('src', img).parent().attr('href', big_img);
		$(this).addClass('on').siblings('span').removeClass('on');
	});
}

function index_show_alert(video){
	$video_html ='';
	$video_html += '<div class="video_con trans cur">';
	$video_html += '	<div class="video_con_in trans">';
	$video_html += '		<a href="javascript:;" rel="nofollow" class="close_btn middleImg">';
	$video_html += '			<img src="/static/images/ico/close_btn.png" /><span></span>';
	$video_html += '		</a>';
	$video_html += '		<div class="videoContent"></div>';
	$video_html += '	</div>';
	$video_html += '</div>';

	if(!$('body').find('.video_con').length){
		$('body').append($video_html);
		setTimeout(function(){$('.video_con .video_con_in').css({'top':'50%'})},10);
	}else{
		$('.video_con').addClass('cur');
	}
	$(".video_con .video_con_in .videoContent").html(video);
	// 关闭
	$(".video_con").on('click','.video_con_in .close_btn',function(){
		$('.video_con').removeClass('cur');
		$(".video_con .video_con_in .videoContent").html('');
	});
}
function index_show_video(btn_obj){
	btn_obj.on('click', function(){
		var video_url = $(this).attr('video-url');
		if(video_url.indexOf('iframe') != -1){ //判断是不是带有iframe
			var video = video_url;
			index_show_alert(video);
		}else{
			$.get('/ajax/video_show.html',{'video_url':video_url},function(data){
				index_show_alert(data);
			})
			// var video = '<embed src="'+video_url+'"></embed>';
		}
	});	
}

$(function(){
	// 语言货币选择弹出框(组合按钮)
	$('html').on('click', '.btn_default_language_currency', function(){
		if (!$('body').children('#default_language_currency_box').size()) {  // 把弹窗放到body下，避免局部样式影响
			var html = $('#default_language_currency_box').prop('outerHTML');
			$('#default_language_currency_box').remove();
			$('body').append(html);
		}
		var max_htight = $('#default_language_currency_box').outerHeight();
		if (max_htight > $(window).height()) {
			max_htight = $(window).height();
		}
		$('#default_language_currency_box').height(max_htight).css('bottom', 0).fadeIn();
		if(!$('#div_mask').length) global_obj.div_mask();
	}).on('click', '#default_language_currency_box h4 i,#div_mask', function(){
		$('#div_mask,#default_language_currency_box').fadeOut(function(){
			global_obj.div_mask(1);
		});
	});
	// 语言货币选择保存(组合按钮)
	$('html').on('click', '#default_language_currency_box .default_language_currency_list a', function(){
		var _this = $(this),
			currency = _this.data('currency');

		$(this).addClass('current').siblings().removeClass('current');
		if (currency && $('.default_language_currency_list a.currency[data='+currency+']').length>0) {
			$('.default_language_currency_list a.currency[data='+currency+']').trigger('click');
		};
	});
	$('html').on('click', '#default_language_currency_box .default_language_currency_submit', function(){
		if ($('.default_language_item').size() && $('.default_currency_item').size()) {  // 组合选择
			var lang = $('#default_language_currency_box .default_language_item a.current').data('lang');
			var currency = $('#default_language_currency_box .default_currency_item a.current').attr('data');
			$.post('/', 'do_action=action.change_language_currency&language=' + lang + '&currency=' + currency, function(data){
				if(data.ret==1){
					window.location.href=data.msg;
				}else if((data.ret==2)){
					window.open(data.msg);
				}
			}, 'json');
		} else if($('.default_language_item').size()) {  // 语言选择
			var lang_url = $('#default_language_currency_box .default_language_item a.current').data('url');
			window.location.href = lang_url;
		} else if ($('.default_currency_item').size()) {  // 货币选择
			var current = $('#default_language_currency_box .default_currency_item a.current').attr('data');
			$.post('/', 'do_action=action.currency&currency=' + current, function(data){
				if(data.ret==1){
					window.top.location.reload();
				}
			}, 'json');
		}
	});

	$('.description .global_mtitle').click(function(){
		var _this = $(this),
			obj = _this.siblings('.editor_cnt'),
			content = obj.find('#global_editor_contents'),
			height = content.outerHeight(true),
			cur = _this.hasClass('cur');
		if(cur){
			_this.removeClass('cur');
			height = 0;
		}else{
			_this.addClass('cur');
		}
		obj.height(height);
		var sib = _this.parents('.contents').siblings('.contents');
		sib.find('.global_mtitle').removeClass('cur');
		sib.find('.editor_cnt').height(0);
	})

	if($(window).width()<768){
		$('.description .global_mtitle').eq(0).click();
		$('.description .global_mtitle').eq(0).parents('.contents').find('.editor_cnt').css('height', 'auto');
	}

	/*社交媒体*/
	$("#chat_window .chat_box.is_respon .chat_box_menu .more").click(function(){
		$("#chat_window .chat_box .box").toggleClass("show");
	});
	$("#chat_window .chat_box .box .chat_close").click(function(){
		$("#chat_window .box_area .chat_item .item .relimg").slideUp();
		$("#chat_window .chat_box .box").removeClass("show");
	});

	$("#chat_window .box_area .chat_item .item").click(function(){
		$(this).find('.relimg').stop().slideToggle();
	});

	$(window).scroll(function(){
		if($(window).scrollTop()>0){
			$('#go_top').addClass("show");
		}else{
			$('#go_top').removeClass("show");
		}
	});
	$('#go_top').click(function(){$("html, body").animate({"scrollTop":0}, 700);});
	
	//添加包裹class；处理响应式时table宽度超出内容区的问题
	$("#global_editor_contents table").wrap("<div class='editor_table_wrap'></div>");
	
	$('.dark').css({opacity:"0.5"});//透明公共样式
	$('#newsletter,#pop_newsletter_form').submit(function(){//订阅ok
		if(global_obj.check_form($(this).find('*[notnull]'), $(this).find('*[format]'))){return false;}
		$(this).find('input[type=submit]').attr('disabled', 'disabled');
		$.post('?do_action=action.newsletter', $(this).serialize(), function(data){
			if(data.status==1){
				global_obj.win_alert(lang_obj.global.add_newsletter, function(){$('#newsletter input[name=Email],#pop_newsletter_form input[name=Email]').val('');});
				if($("#newsletter_pop").length){
					$("#newsletter_pop,.newsletter_mask").removeClass("show");
				}
			}else{
				global_obj.win_alert('"'+data.msg+'" '+lang_obj.global.email_exists,'','sorry');
			}
		}, 'json');
		$(this).find('input[type=submit]').removeAttr('disabled');
		return false;
	});
	$("#footer_feedback").animate({bottom:-270},function(){
		$("#footer_feedback").animate({bottom:-290},function(){
			$("#footer_feedback").animate({bottom:-270});
		});
	});
	$("#footer_feedback .title .close").click(function(){$("#footer_feedback").remove();});

	$('#footer_feedback .title').click(function(){//底部留言js
		if($(this).parent('#footer_feedback').attr('class')=='up'){
			$(this).parent('#footer_feedback').stop(false,true).animate({bottom:"0px"},'fast');
			$(this).parent('#footer_feedback').removeClass('up');
		}else{
			$(this).parent('#footer_feedback').stop(false,true).animate({bottom:"-270px"},'fast');
			$(this).parent('#footer_feedback').addClass('up');
		}
	});

	$('#lib_feedback_form form[name=feedback], .ueeshop_responsive_feedback form[name=feedback],#lib_feedback_form form[name=feedback], .ueeshop_responsive_article_feedback form[name=feedback]').submit(function(){ //在线留言、单页留言提交处理ok
		if(global_obj.check_form($(this).find('*[notnull]'), $(this).find('*[format]'))){return false;}
		var e=$(this).find('input[name=Email]');
		var float=$(this).find('input[name=float]');
		e.removeAttr('style');
		if(e.length!=0){
			if(e.val()!='' && (/^\w+((-\w+)|(\.\w+))*\@[A-Za-z0-9]+((\.|-)[A-Za-z0-9]+)*\.[A-Za-z0-9]+$/.test(e.val())===false)){
				e.css('border', '1px solid red');
				e.focus();
				global_obj.win_alert(lang_obj.format.email,'','sorry');
				return false;
			}
		}
		$(this).find('input:submit').attr('disabled', 'disabled');
		
		if($(this).hasClass('load')) return false;
		$(this).addClass('load');
		AjaxForm_facebook($(this));
		$(this).removeClass('load');
		return false;
	})

	function AjaxForm_facebook(formID, options) {
		var form = $(formID);
		var formData = new FormData(form[0]);

		$("input[type='file']").each(function (item, i) {
			var domFile = $(this)[0].files[0];
			formData.append('file', domFile);
		})

		if (!options)options = {};
		options.url = '/?do_action=action.submit_feedback';
		options.type = 'post';
		options.dataType = 'json';
		options.data = formData;
		options.processData = false;
		options.contentType = false;
		options.xhr = options.xhr ? options.xhr : function () {
			var xhr = $.ajaxSettings.xhr();
			xhr.upload.onload = function () {
				console.log("onload");
			}
			xhr.upload.onprogress = function (ev) {
				if (ev.lengthComputable) {
					var percent = 100 * ev.loaded / ev.total;
					console.log(percent, ev)
				}
			}
			return xhr;
		};
		options.success = function(data){
			form.find('input:submit').removeAttr('disabled');
			if(data.status==1){
				window.location.href = '/feedback_success.html';
			}else if(data.status==-1){
				global_obj.win_alert(data.msg);
				form.find('input[name=VCode]').css('border', '1px solid red').val('').focus().siblings('img').click();
			}else{
				global_obj.win_alert(data.msg);
			}
		}

		$.ajax(options);
	}


	$('#lib_down_list a, .ueeshop_responsive_download_list a').click(function(){
		var id = $(this).attr('l');
		if ($(this).hasClass('pwd')){
			global_obj.win_alert('', function (){
				var pwd = $('.win_alert input[name=Password]').val();
				$.get('/', {do_action:'action.download_pwd', DId:id, pwd:pwd}, function (data){
					if (data.ret==1){
						$('.win_alert .error_tips').hide(0).html('');
						if (data.msg.url==0){//内链
							$('.win_alert').remove();
							global_obj.div_mask(1);
							window.location.href = '/?do_action=action.download'+'&DId='+id+'&pwd='+pwd;
						}else{//外链
							window.location.href = data.msg.url;
						}
					}else{
						$('.win_alert .error_tips').show(0).html(data.msg[0]);
					}
				}, 'json');
			}, 'password');
		}else{
			if(!$(this).is('[target]')){
				window.location = '/?do_action=action.download'+'&DId='+id;
			}
		}
	});//下载
	//产品附件下载
	$('.pro_right .down_list a,.ueeshop_responsive_products_detail .down_list a').click(function(){
		var proid = $(this).attr('ProId');
		var path = $(this).attr('path');
		if ($(this).hasClass('pwd')){
			global_obj.win_alert('', function (){
				var pwd = $('.win_alert input[name=Password]').val();
				$.get('/', {do_action:'action.products_download_pwd', Path:path, ProId:proid, pwd:pwd}, function (data){
					if (data.ret==1){
						$('.win_alert .error_tips').hide(0).html('');
						$('.win_alert').remove();
						global_obj.div_mask(1);
						window.location.href = '/?do_action=action.products_download&Path='+path+'&ProId='+proid+'&pwd='+pwd;
					}else{
						$('.win_alert .error_tips').show(0).html(data.msg[0]);
					}
				}, 'json');

			}, 'password');
		}else{
			window.location = '/?do_action=action.products_download&Path='+path+'&ProId='+proid;
		}
	});//产品附件下载 end

	$(".prod_info_pdf").click(function(){$("#export_pdf").attr("src", "//pdfmyurl.com?url="+window.location.href.replace(/^http[s]?:\/\//, ""));});//PDF打印
	$('#add_to_inquiry , .add_to_inquiry').click(function(){	//加入询盘篮
		var subObj=$("#goods_form");
		$.post('?do_action=action.add_inquiry', subObj.serialize()+'&ProId='+$(this).attr('data'), function(data){
			if(data.inq_type){
				parseInt(ueeshop_config.FbPixelOpen)==1 && $('html').fbq_addtocart(data.price);
				window.location.href="/inquiry.html";
			}else{
				if(data.is_there==-1){
					tips = lang_obj.global.already;
				}else{
					tips = lang_obj.global.add_success;
					parseInt(ueeshop_config.FbPixelOpen)==1 && $('html').fbq_addtocart(data.price);
					if($('.inquiry_sum').length){
						$('.inquiry_sum').html(data.sum);
					}
				}
				global_obj.div_mask();
				$('body').prepend('<div id="global_win_alert" class="responsive_win_alert"><div id="alert_top"><div id="alert_img"></div><div id="alert_tips">'+tips+'</div>'+'<div class="clear"></div></div><div id="alert_bottom"><a href="javascript:void(0);" id="alert_continue">'+lang_obj.global.continues+'</a><a href="/inquiry.html" id="alert_inquery">'+lang_obj.global.inquery+'</a><div class="clear"></div></div></div>');
				
				$('#alert_continue').click(function(){
					$('#global_win_alert').remove();
					$('#div_mask').remove();
				});
			}
		},'json');
	});

	$('.ueeshop_responsive_products_inquiry .input_rows input, .ueeshop_responsive_products_inquiry .textarea_rows textarea, .ueeshop_responsive_products_inquiry .input_rows select').on('change keyup blur force-reset', function(e){
		var n = $(e.currentTarget),
			i = n.val(),
			o = n.closest('.input_rows, .textarea_rows');
		(o.length || "force-reset" === e.type) && (i.length > 0 && "force-reset" !== e.type ? o.addClass('filled').find('.null').removeAttr('style') : o.removeClass('filled'))
	});

	$('#lib_inquire_list>ul>li .info .remove a, .ueeshop_responsive_products_inquiry .remove a').click(function(){//删除询盘篮
		var obj=$(this).parents('li');
		$.post('?do_action=action.del_inquiry', 'ProId='+$(this).attr('data')+'&VariantsId='+$(this).attr('variants'), function(data){
			if(data.status==1){
				global_obj.win_alert('Successful!', function(){obj.remove();});
			}else if(data.status==2){
				global_obj.win_alert('Successful!', function(){location=location;});
			}else if(data.status==-1){
				global_obj.win_alert('Error!','','sorry');
			}
		},'json');
	});

	// 询盘 国家搜索
	$('.chzn-container-single .chzn-search').css('height', $('.chzn-container-single .chzn-search input').height());
	$('a.chzn-single').off().on('click', function(){
		if($(this).parents('#cart_checkout_container').length || $(this).parents('#lib_user').length){ return false;}
		$(this).parent().next('p.errorInfo').text('');
		if($(this).hasClass('chzn-single-with-drop')){
			$(this).blur().removeClass('chzn-single-with-drop').next().css({'left':'-9000px'}).parent().removeClass('chzn-container-active').css('z-index', '0').find('li.result-selected').removeClass('highlighted');
		}else{
			$(this).blur().addClass('chzn-single-with-drop').next().css({'left':'0', 'top':'41px'}).parent().addClass('chzn-container-active').css('z-index', '11').find('li.result-selected').addClass('highlighted');
			if(!$('#country_chzn li.group-result:eq(0)').next('li.group-option').length) $('#country_chzn li.group-result').hide();
		}
	});
	$('.chzn-results').delegate('li.group-option', 'mouseover', function(){
		$(this).parent().find('li').removeClass('highlighted');
		$(this).addClass('highlighted');
	}).delegate('li.group-option', 'mouseout', function(){
		$(this).removeClass('highlighted');
	});
	$('#country_chzn li.group-option').click(function(){
		//Select Country
		if($(this).parents('#cart_checkout_container').length || $(this).parents('#lib_user').length){ return false;}
		$(this).parents('.input_box').addClass('filled');
		var obj		= $('#country_chzn li.group-option').removeClass('result-selected').index($(this)),
			s_cid	= $('select[name=country_id]').val();
		$(this).addClass('result-selected').parents('.chzn-drop').removeAttr('style').parent().removeClass('chzn-container-active').children('a').removeClass('chzn-single-with-drop').find('span').text($(this).text());
		$('#country option').eq(obj+1).attr('selected', 'selected').siblings().removeAttr('selected');
	});
	$(document).click(function(e){
		e	= window.event || e; // 兼容IE7
		obj	= $(e.srcElement || e.target);
		if(!$(obj).is("#country_chzn, #country_chzn *")){
			$('#country_chzn').removeClass('chzn-container-active').css('z-index', '0').children('a').blur().removeClass('chzn-single-with-drop').end().children('.chzn-drop').css({'left':'-9000px'}).find('input').val('').parent().next().find('.group-option').addClass('active-result');
		}
	});
	jQuery.expr[':'].Contains=function(a,i,m){
		return (a.textContent || a.innerText || "").toUpperCase().indexOf(m[3].toUpperCase())>=0;
	};
	function filterList(input, list){
		$(input).change(function(){
			var filter=$(this).val();
			if(filter){
				$matches=$(list).find('li:Contains('+filter+')');
				$('li', list).not($matches).removeClass('active-result');
				$matches.addClass('active-result');
			}else {
				$(list).find('li').addClass('active-result');
			}
			return false;
		})
		.keyup(function(){
			$(this).change();
		});
	}
	filterList('#country_chzn .chzn-search input', $('#country_chzn .chzn-results'));

	if($('#country_chzn .chzn-drop .chzn-results li').length){
		var d_index = 0;
		if($('#country_chzn .chzn-drop .chzn-results li.default').length){
			d_index = $('#country_chzn .chzn-drop .chzn-results li.default').index();
		}
		$('#country_chzn .chzn-drop .chzn-results li').eq(d_index).click();  //
	}

	// $('#lib_inquire_list form[name=inquiry], .ueeshop_responsive_products_inquiry form[name=inquiry], .ueeshop_responsive_products_inquiry_box form[name=inquiry]').submit(function(){//产品询盘提交处理
	// 	if(global_obj.check_form($(this).find('*[notnull]'))){return false;}
	// 	var e=$(this).find('input[name=Email]');
	// 	if(e.size()){
	// 		e.removeAttr('style');
	// 		if(e.val()!='' && (/^\w+((-\w+)|(\.\w+))*\@[A-Za-z0-9]+((\.|-)[A-Za-z0-9]+)*\.[A-Za-z0-9]+$/.test(e.val())===false)){
	// 			e.css('border', '1px solid red');
	// 			e.focus();
	// 			global_obj.win_alert(lang_obj.format.email,'','sorry');
	// 			return false;
	// 		}
	// 	}
	// 	$(this).find('input:submit').attr('disabled', 'disabled');
		
	// 	var _this = $(this);
	// 	if(global_obj.check_form($('.ueeshop_responsive_products_inquiry form[name=inquiry], #lib_inquire_list form[name=inquiry], .ueeshop_responsive_products_inquiry_box form[name=inquiry]').find('*[notnull]'))) return false;

	// 	var subObj=$("#goods_form");
	// 	if($('.add_to_inquiry').length){
	// 		$.post('?do_action=action.add_inquiry', subObj.serialize()+'&ProId='+$('.add_to_inquiry').attr('data')); //产品详情页询盘 先自动添加询盘产品记录
	// 	}
	// 	if(_this.hasClass('load')) return false;
	// 	_this.addClass('load');
	// 	AjaxForm('.ueeshop_responsive_products_inquiry form[name=inquiry], #lib_inquire_list form[name=inquiry], .ueeshop_responsive_products_inquiry_box form[name=inquiry]');
	// 	_this.removeClass('load');
	// 	return false;
	// })

	function AjaxForm(formID, options) {
		var form = $(formID);
		var formData = new FormData(form[0]);

		$("input[type='file']").each(function (item, i) {
			var domFile = $(this)[0].files[0];
			formData.append('file', domFile);
		})

		if (!options)options = {};
		options.url = '/?do_action=action.submit_inquiry';
		options.type = 'post';
		options.dataType = 'json';
		options.data = formData;
		options.processData = false;
		options.contentType = false;
		options.xhr = options.xhr ? options.xhr : function () {
			var xhr = $.ajaxSettings.xhr();
			xhr.upload.onload = function () {
				console.log("onload");
			}
			xhr.upload.onprogress = function (ev) {
				if (ev.lengthComputable) {
					var percent = 100 * ev.loaded / ev.total;
					console.log(percent, ev)
				}
			}
			return xhr;
		};
		options.success = function(data){
			if(data.status==1){
				window.location.href='/inquiry_success.html';
			}else{
				form.find('input:submit').removeAttr('disabled');
				global_obj.win_alert(data.msg,'','sorry');
			}
		}

		$.ajax(options);
	}

	$('.review_form .review_star span').hover(function(){
		var ind=parseInt($(this).index());
		$('.review_form .review_star span:gt('+ind+')').removeClass('star_1').addClass('star_0');
		$('.review_form .review_star span:lt('+(ind+1)+')').removeClass('star_0').addClass('star_1');
	},function(){
		var star=parseInt($('[name=Rating]').val());
		if(isNaN(star)) star=0;
		$('.review_form .review_star span').removeClass('star_1').addClass('star_0');
		$('.review_form .review_star span:lt('+star+')').removeClass('star_0').addClass('star_1');
	}).click(function(){
		var ind=parseInt($(this).index());
		$('[name=Rating]').val((ind+1));
	});


	$('#lib_review_form form[name=review], .ueeshop_responsive_products_detail_review form[name=review]').submit(function(){//评论
		if(global_obj.check_form($(this).find('*[notnull]'), $(this).find('*[format]'))){return false;}
		$(this).find('input:submit').removeAttr('disabled');
		$.post('?do_action=action.submit_review', $(this).serialize(), function(data){
			if(data.status==1){
				global_obj.win_alert(data.msg, function(){window.location.href=window.location.href;});
			}else{
				global_obj.win_alert(data.msg,'','sorry');
			}
		},'json');
		return false;
	});

	$('.ueeshop_responsive_products_detail_review .review_list,#pdetail .review_list').on('click','.page_item',function(){//产品详情评论分页
		$.post('?do_action=action.turn_page_ajax', {page:$(this).attr('page'),ProId:$('input[name="ProId"]').val()}, function(data){
			if(data.ret==1){
				$('.review_list').html(data.msg);
			}else{
				
			}
		},'json');
		return false;
	});

	$(".email_copy").bind('copy', function(){
		$.post('?do_action=action.email_copy_log', {email:$(this).text(),url:location.href});
		return false;
	});


	//  打开搜索框
	$('body').on('click','.default_search',function(){
		$search_html  = '<div id="default_search_box" class="default_search_form_style">';
		$search_html += '	 <form action="Products.html" method="get" class="default_search_form">';
		$search_html += '		<input type="text" name="title" {if !empty($v)}value="{$v}"{/if} class="default_search_form_text" placeholder="'+ueeshop_config.search_note+'" autocomplete="off">';
		$search_html += '		<input type="submit" class="default_search_form_button" value="'+lang_obj.global.search_button+'">';
		$search_html += '		<div class="clear"></div>';
		$search_html += '		<i></i>';
		$search_html += '	</form>';
		$search_html += '</div>';
		$('body').append($search_html);
		$('#default_search_box').fadeIn();

	});
	//关闭搜索框
	$('body').on('click','#default_search_box i',function(){
		//判断 是否在关闭过程中
		if($('#default_search_box').is(":animated")){return false;}
		$('#default_search_box').fadeOut("slow", function() {
			$('#default_search_box').remove();
		});
	});

	$('.pop_tips_box').on('click', '.close_btn,.no_btn', function(){
		window.location.href="about:blank";
	}).on('click', '.yes_btn', function(){
		var $this = $(this).parents('.pop_tips_bg_gb');
		$.post('/', 'do_action=action.CheckPopTips&Ischeck=1');
		$this.fadeOut(500, function(){
			$this.remove();
		});
	})

	//************通过CSV文件上传加入购物车 start**************
	$('html').on('click', '.bom_show_btn',function(){
		load_bom_box();
		return false;
	});
	$('html').on('click', '.global_bom_box_bg, .global_bom_box .cart_bom_close', function(){
		load_bom_box(1);
	});
	$('html').on('click', '.global_bom_box .csv_upload_btn', function(){
		$(this).parents('.global_bom_box').find('.file').click();
	});
	$('html').on('change', '.global_bom_box .file', function(){
		$('html').bom_upload_file($(this));
	});
	$('html').on('click', '.global_bom_box .bom_upload_btn', function(){ //提交BOM表单
		$('html').bom_submit_form($(this));
	});
	$('html').on('click', '.global_bom_box .csv_file_upload .csv_download_btn', function(){
		$('html').bom_download_file($(this));
	});
	//************通过CSV文件上传加入购物车 end**************
	
	//************修改购物车产品 start**************
	//pc和手机都有 代码是一样的 修改的时候两边都要修改
	$('html').on('click', '.default_shopping_cart',function(){
		load_cart_list();
		return false;
	});
	$('html').on('click', '.global_shopping_cart_bg, .global_shopping_cart_box .cart_close', function(){
		load_cart_list(1);
	});
	$('html').on('click', '.global_shopping_cart_box .qty_btn', function(){
		$("html").shipping_cart_products_modify($(this), 1);
	});
	$('html').on('blur', '.global_shopping_cart_box .cart_p_qty', function(){
		$("html").shipping_cart_products_modify($(this), 0);
	});
	$('html').on('click', '.global_shopping_cart_box .pdel', function(){
		var $box = $(this),
			$CId = parseInt($box.parents('.shipping_cart_item').find('input[name="CId"]').val());
		$("html").shipping_cart_products_remove($CId, $box);
	});
	$('html').on('keyup', '.global_shopping_cart_box .cart_p_qty', function(){
		var $reg = /^[0-9]*$/,
			$reg2 = /[^0-9]/g,
			$val = $(this).val();
		if (!$reg.test($val)) {
			$(this).val($val.replace($reg2, ''));
		}
		$val == '0' && $(this).val(1); //填写0就默认为1
	});
	$('html').on('click', '.global_shopping_cart_box .checkout_btn', function(){
		$.ajax({
			url: '?do_action=cart.check_goods_moq',
			async:false,
			type:'post',
			dataType:'json',
			success:function(data){
				if(data.ret==1){
					$(this).find('button').addClass('btn-loading');
					var minprice = parseFloat($(this).attr('data-minprice'));
					var total_price = $(this).attr('data-total');
					if(minprice>0 && total_price<minprice){
						global_obj.win_alert(lang_obj.cart.tips.order_min_price.replace('%price%',ueeshop_config.currency_symbols+minprice));
						$(this).find('button').removeClass('btn-loading');
						return false;
					}
					window.location.href='/cart/checkout.html';
				}else if(data.ret==-1){
					var arr=data.msg.split(',');
					for(i in arr){
						if(!$('.cart_item[data='+arr[i]+'].error').length){
							$('.cart_item[data='+arr[i]+']').addClass('error').find('.prod_info_detail .invalid').show();
						}
					}
					alert(lang_obj.cart.maxoq_error);
					return false;
				}else{
					var arr=data.msg.split(',');
					for(i in arr){
						if(!$('.cart_item[data='+arr[i]+'].error').length){
							$('.cart_item[data='+arr[i]+']').addClass('error').find('.prod_info_detail .invalid').show();
						}
					}
					alert(lang_obj.cart.moq_error);
					return false;
				}
			}
		});

	});
	//************修改购物车产品 end**************

	$('.ueeshop_responsive_products_attr .products_attr_list .attr_item.cur').each(function (){
		$(this).parent().addClass('show');
	});
	$('.ueeshop_responsive_products_attr .products_attr_list .attr_tit').click(function (){
		$(this).parent().toggleClass('show');
	});
	$('.ueeshop_responsive_products_list .color_list .color_item').click(function (){
		$(this).addClass('cur').siblings('.color_list .color_item').removeClass('cur');
		$(this).parents('.item').find('.img img').attr('src', $(this).data('img'));
	});
	$('.ueeshop_responsive_products_list .color_list .color_item:eq(0)').click();

	if($('.loading_img').length>0){
		function scr_img(){
			var viewHeight = $(window).height();
			var scrollHeight = $(window).scrollTop();
			var cut_height = scrollHeight + viewHeight - 50;
			$('.loading_img').each(function(index,elem){
				if(cut_height > $(elem).offset().top && !$(elem).hasClass('loaded_img')){
					$(elem).attr('src', $(elem).attr('data-src'));
					$(elem).addClass('loaded_img');
					$(elem).parents('.img').addClass('finish');
				}
			});
		}
		scr_img();
		$(window).scroll(function(){
			scr_img();
		});
	}

	//添加收藏夹
	$(document).on('click', '.add_favorite', function(e){
		var $this=$(this),
			ProId=$(this).attr("data");
		if($this.hasClass('is_in')){ //取消收藏
			$.get('/account/favorite/remove'+ProId+'.html', {isjson:1}, function(data){
				if(data.ret==1){ //添加收藏
					$this.removeClass('is_in');
				}
			}, 'json');
		}else{ //添加收藏
			$.get('/account/favorite/add'+ProId+'.html', '', function(data){
				if(data.ret==1 || data.ret==0){
					if(data.ret==0){
						return true;
					}
					$this.addClass('is_in');
				}else{
					window.top.location.href='/account/';
				}
			}, 'json');
		}
	});

	/*属性筛选*/
	$('.ueeshop_responsive_products_filter dl dt').click(function(){
		var $this = $(this),
			bool = false;

		if (!$this.parents('.ueeshop_responsive_products_filter').hasClass('ueeshop_responsive_products_filter_ns_list')) bool = true;
		if ($(window).width() < 991) bool = true;

		if (bool) {
			if($this.hasClass('cur')){
				$this.removeClass('cur');
				$this.next('dd').stop(false,true).slideUp();
			}else{
				$this.addClass('cur');
				$this.next('dd').stop(false,true).slideDown();
			}
		}
	});

	$('.ueeshop_responsive_products_filter_select').on('click',function(){
		if ($(this).hasClass('ns')) {
			$('.ueeshop_responsive_products_filter_mb').removeClass('ueeshop_responsive_products_filter_ns');
			$('.ueeshop_responsive_products_filter').removeClass('ueeshop_responsive_products_filter_ns_list');
		}
		$('.ueeshop_responsive_products_filter').addClass('show');
		global_obj.div_mask();
		$('body').css('overflow', 'hidden');
		$('#div_mask').off().on('click', function(){
			$('.ueeshop_responsive_products_filter .filter_selected_tit em').click();
			return false;
		});
	})
	
	$('.ueeshop_responsive_products_filter .filter_selected_tit em').on('click',function(){
		if ($(this).parents('.ueeshop_responsive_products_filter_mb').find('.ueeshop_responsive_products_filter_select').hasClass('ns')) {
			$('.ueeshop_responsive_products_filter_mb').addClass('ueeshop_responsive_products_filter_ns');
			$('.ueeshop_responsive_products_filter').addClass('ueeshop_responsive_products_filter_ns_list').find('dd').removeAttr('style');

		}
		$('.ueeshop_responsive_products_filter').removeClass('show');
		global_obj.div_mask(1);
		$('body').css('overflow', 'unset');
	})

	//产品列表页小图切换
	$('.pro_img_list .img_list_item').mouseover(function(){
		var img=$(this).attr('data');
		$(this).addClass('on').siblings().removeClass('on');
		$(this).parents('.item').find('.img img').attr('src', img);
	})
});
function ShippingCartHeight() {
	$('.global_shopping_cart_box .cart_list').height($(window).height() - $('.global_shopping_cart_box .cart_title').outerHeight(true) - $('.global_shopping_cart_box .cart_foot').outerHeight(true));
}

function load_cart_list(type){
	if (!type) {
		if(!$('.global_shopping_cart_bg').length) $('body').append('<div class="global_shopping_cart_bg"></div><div class="global_shopping_cart_box"></div>');
		var $note = $('.global_shopping_cart_box'),
			$scroll_w = window.innerWidth-$(window).width();
		($scroll_w > 100 || $scroll_w < 0) && ($scroll_w = 0); //兼容IE
		$('.global_shopping_cart_bg').show();
		$note.css('right', '0');
		$('body').css({'overflow':'hidden', 'padding-right':$scroll_w+'px'});
		$.ajax({
			url:"/ajax/shopping_cart.html?v=1",//"/?m=ajax&a=shopping_cart",
			async:false,
			type:'get',
			dataType:'html',
			success:function(result){
				if(result){
					$note.html(result);
					ShippingCartHeight();
					window.addEventListener("resize", ShippingCartHeight);
				}
			}
		});
		return false;
	}else if(type==1){
		$('.global_shopping_cart_bg').hide();
		$('.global_shopping_cart_box').css('right', '-400px');
		$('body').removeAttr('style');
		window.removeEventListener("resize", ShippingCartHeight);
	}
}

$.fn.shipping_cart_products_remove = function($CId, $box) {
	var $url = '/cart/remove_c' + $CId + '.html';
	$.get($url, {'ajax':1}, function(data) {
		$box.parents('.shipping_cart_item').fadeOut(500, function() {
			$box.parents('.shipping_cart_item').remove();
			if ($('.global_shopping_cart_box .cart_p_qty').length) {
				$('.global_shopping_cart_box .cart_p_qty:eq(0)').blur();
			} else {
				$('.global_shopping_cart_box .cart_empty').show();
				$('.global_shopping_cart_box #shipping_cart_total_price, .global_shopping_cart_box #shipping_cart_subtotal_price, .global_shopping_cart_box #shipping_cart_save_price').text($('html').iconvPriceFormat(0, 0, '', 1));
				$('.global_shopping_cart_box .fsubtotal_price, .global_shopping_cart_box .fsave_price').hide();
				$('.header_cart .cart_count, .default_shopping_cart .cart_count').text(0);
				$('.header_cart .cart_count_price, .default_shopping_cart .cart_count_price').text($('html').currencyFormat(0,ueeshop_config.currency));
			}
			$('.global_shopping_cart_box .cart_list').height($(window).height()-$('.global_shopping_cart_box .cart_title').outerHeight(true)-$('.global_shopping_cart_box .cart_foot').outerHeight(true));
		});
	}, 'json');
}

$.fn.shipping_cart_products_modify = function(obj, type) {
	var $this = obj,
		$box = $this.parent(),
		$qty = $box.find('input[name^="Qty"]'),
		$qty_num = parseInt($qty.val()),
		$moq_num = parseInt($qty.attr('moq')),
		$batch = parseInt($qty.attr('batch')),
		$CId = parseInt($box.find('input[name="CId"]').val()),
		$ProId = parseInt($box.find('input[name="ProId"]').val());
	
	$('.global_shopping_cart_box .cart_item').removeClass('error');
	
	isNaN($qty_num) && type == 0 && ($qty_num = 1);  
	isNaN($moq_num) && type == 0 && ($moq_num = 1);
	if (type == 1) {
		if ($this.hasClass('less')) {
			$qty_num--;
		} else {
			$qty_num++;
		}
	}
	if ($qty_num<=0 || (($qty_num < $moq_num) && $batch==0)) {
		//移除产品
		if (type == 1) {
			$("html").shipping_cart_products_remove($CId, $box);
		}
	} else {
		//已选的产品
		$CIdStr = '0';
		$('.global_shopping_cart_box input[name="CId"]').each(function(){
			$CIdStr += ',' + $(this).val();
		});
		$Data = {'Qty':$qty_num, 'CId':$CId, 'ProId':$ProId, 'CIdAry':$CIdStr};
		$.post('/?do_action=cart.modify'+'&t='+Math.random(), $Data, function(data){
			if (data.ret == 1) {
				let final_price = parseFloat(data.msg.total_price) - parseFloat(data.msg.cutprice);
				if (final_price < 0) final_price = 0;
				$amount_ary=data.msg.amount;
				for(i in $amount_ary){
					$('.global_shopping_cart_box .cart_item[data='+i+']').find('.pprice ').text($('html').iconvPriceFormat($amount_ary[i], 0, '', 1));
				}
				$qty.val(data.msg.qty);
				$box.parents('.shipping_cart_item').find('.shipping_cart_item_price').text($('html').iconvPriceFormat(data.msg.amount[$CId], 0, '', 1));
				$('.global_shopping_cart_box #shipping_cart_subtotal_price').text($('html').iconvPriceFormat(data.msg.total_price, 0, '', 1));
				$('.global_shopping_cart_box #shipping_cart_save_price').text($('html').iconvPriceFormat(data.msg.cutprice, 0, '', 1));
				$('.global_shopping_cart_box #shipping_cart_total_price').text($('html').iconvPriceFormat(final_price, 0, '', 1));
				$('.global_shopping_cart_box .checkout_btn').attr('data-total',data.msg.total_price);
				if (parseFloat(data.msg.cutprice) > 0) {
					$('.global_shopping_cart_box .fsubtotal_price, .global_shopping_cart_box .fsave_price').show();
				} else {
					$('.global_shopping_cart_box .fsubtotal_price, .global_shopping_cart_box .fsave_price').hide();
				}
				$('.header_cart .cart_count, .default_shopping_cart .cart_count').text(data.msg.cart_qty);
				$('.header_cart .cart_count_price, .default_shopping_cart .cart_count_price').text($('html').currencyFormat(data.msg.total_price,ueeshop_config.currency));

				/*if(ueeshop_config.OrderMinPrice>0){
					if(data.msg.total_price>=ueeshop_config.OrderMinPrice){
						$('.global_shopping_cart_box .cart_foot .checkout_btn').show();
					}else{
						$('.global_shopping_cart_box .cart_foot .checkout_btn').hide();
					}
				}*/
				
				$('.global_shopping_cart_box .cart_list').height($(window).height()-$('.global_shopping_cart_box .cart_title').outerHeight(true)-$('.global_shopping_cart_box .cart_foot').outerHeight(true));

			} else if (data.ret == -1) {
				//产品已被删，直接移除产品
				if (type == 1) {
					$("html").shipping_cart_products_remove($CId, $box);
				}
			}
		}, 'json');
	}
}
$.fn.shipping_cart_products_remove = function($CId, $box) {
	var $url = '/cart/remove_c' + $CId + '.html';
	$.get($url, {'ajax':1}, function(data) {
		$box.parents('.shipping_cart_item').fadeOut(500, function() {
			$box.parents('.shipping_cart_item').remove();
			if ($('.global_shopping_cart_box .cart_p_qty').length) {
				$('.global_shopping_cart_box .cart_p_qty:eq(0)').blur();
			} else {
				$('.global_shopping_cart_box .cart_empty').show();
				$('.global_shopping_cart_box #shipping_cart_total_price, .global_shopping_cart_box #shipping_cart_subtotal_price, .global_shopping_cart_box #shipping_cart_save_price').text($('html').iconvPriceFormat(0, 0, '', 1));
				$('.global_shopping_cart_box .fsubtotal_price, .global_shopping_cart_box .fsave_price').hide();
				$('.header_cart .cart_count, .default_shopping_cart .cart_count').text(0);
				$('.header_cart .cart_count_price, .default_shopping_cart .cart_count_price').text($('html').currencyFormat(0,ueeshop_config.currency));
			}
			$('.global_shopping_cart_box .cart_list').height($(window).height()-$('.global_shopping_cart_box .cart_title').outerHeight(true)-$('.global_shopping_cart_box .cart_foot').outerHeight(true));
		});
	}, 'json');
}

function BomBoxHeight() {
	$('.global_bom_box .cart_bom_list').height($(window).height() - $('.global_bom_box .cart_bom_title').outerHeight(true) - $('.global_bom_box .cart_bom_foot').outerHeight(true));
}

$.fn.bom_upload_file = function(obj){
	var $this = obj;
	var formData = new FormData();
	var file = document.getElementById('file').files[0];
	if (file === undefined) {
		global_obj.new_win_alert(lang_obj.file.no_file);
		return false;
	}
	formData.append('file', file);
	$('html .global_bom_box .cart_bom_list').html('');
	$.ajax({
		url: '?do_action=action.upload_csv_file',
		type: 'post',
		data: formData,
		processData: false,
		contentType: false,
		dataType: 'json',
		async: false,
		success: function (data){
			if (data.ret == 1) {
				$('html .global_bom_box .cart_bom_list').append(data.msg.html);
				BomBoxHeight();
				window.addEventListener("resize", BomBoxHeight);
			} else {
				$('html .global_bom_box .cart_bom_list').append('No Products!');
			}
		}
	});
}

$.fn.bom_submit_form = function(obj){
	//提交BOM表单
	var $Form = $('#cart_bom_form'),
		$Formdata = new FormData($Form[0]);
	$Formdata.append('back', 1);
	$Formdata.append('bom_type', 1);
	$.ajax({
		type: 'POST',
		url: '/?do_action=cart.additem',
		data: $Formdata,
		dataType: 'json',
		async: false,
		cache: false,
		contentType: false,
		processData: false,
		success: function(data) {
			if (data.ret == 2) {
				$('#addtocart_button').attr('disabled', false);
				global_obj.new_win_alert(data.msg);
			} else if (data.ret == 1) {
				if ($('#shopbox_outer').length) {
					var parentObj=$(window.parent.document);
					parentObj.find('#div_mask').remove();
					parentObj.find('#shopbox').shopboxHide();
					parent.$('.default_shopping_cart:eq(0)',parent.doucment).click();
					parentObj.find('.header_cart .cart_count, .default_shopping_cart .cart_count').html(data.msg.qty);
					parentObj.find('.header_cart .cart_count_price, .default_shopping_cart .cart_count_price').text($('html').currencyFormat(data.msg.total_price,ueeshop_config.currency));
				} else {
					load_bom_box(1);
					load_cart_list();
					$('#addtocart_button').attr('disabled', false);
					$('.header_cart .cart_count, .default_shopping_cart .cart_count').text(data.msg.qty);
					$('.header_cart .cart_count_price, .default_shopping_cart .cart_count_price').text($('html').currencyFormat(data.msg.total_price,ueeshop_config.currency));
				}
				//加入购物车统计
				analytics_click_statistics(1);
				parseInt(ueeshop_config.FbPixelOpen)==1 && $('html').fbq_addtocart(data.msg.item_price);
				parseInt(ueeshop_config.GooglePixelOpen)==1 && $('html').gtag_addtocart(data.msg.item_price);
				parseInt(ueeshop_config.BingTabOpen)==1 && $('html').bing_addtocart();
				parseInt(ueeshop_config.pintrkPixelOpen)==1 && $('html').pintrk_addtocart(data.msg.item_price, data.msg.qty);
			} else {
				$('#addtocart_button').attr('disabled', false);
				// if($('#shopbox_outer').length){//产品详细弹出框
				// 	var parentObj=$(window.parent.document);
				// 	parentObj.find('#shopbox').shopboxHide();
				// }
			}
		}
	});
	return false;
}

$.fn.bom_download_file = function(obj){ 
	//下载BOM上传模板
	window.location.href = '/?do_action=action.bom_upload_excel';
}

function load_bom_box(type){
	load_cart_list(1);
	if (!type) {
		if(!$('.global_bom_box_bg').length) $('body').append('<div class="global_bom_box_bg"></div><div class="global_bom_box"></div>');
		var $note = $('.global_bom_box'),
			$scroll_w = window.innerWidth-$(window).width();
		($scroll_w > 100 || $scroll_w < 0) && ($scroll_w = 0); //兼容IE
		$('.global_bom_box_bg').show();
		$note.css('right', '0');
		$('body').css({'overflow':'hidden', 'padding-right':$scroll_w+'px'});
		$.ajax({
			url:"/ajax/bom_box.html",//"/?m=ajax&a=shopping_cart",
			async:false,
			type:'get',
			dataType:'html',
			success:function(result){
				if(result){
					$note.html(result);
					BomBoxHeight();
					window.addEventListener("resize", BomBoxHeight);
				}
			}
		});
		return false;
	}else if(type==1){
		$('.global_bom_box_bg').hide();
		$('.global_bom_box').css('right', '-400px');
		$('body').removeAttr('style');
		window.removeEventListener("resize", BomBoxHeight);
	}
}