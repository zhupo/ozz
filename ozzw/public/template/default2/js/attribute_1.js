/*
Powered by ueeshop.com		http://www.ueeshop.com
广州联雅网络科技有限公司		020-83226791
*/
$.fn.extend({
	//购买数量增减
	set_amount:function(e){
		var t=this,
			$attrStock=parseInt($("#attrStock").val()),
			n=t.find(".qty_num");
		var checked_amount = function () {
			if (!$('.quantity_box').size()) return false;
			let e = $.evalJSON($(".quantity_box").attr("data"));
			let num = parseInt(n.val(), 10);
			$('#btn_cut, #btn_add').removeClass('notallow');
			let add_obj = $('#btn_add');
			let cut_obj = $('#btn_cut');
			if (num == e.max && (e.isMax == 1 || $attrStock != 1 ))  add_obj.addClass('notallow');
			if (num == e.min) cut_obj.addClass('notallow');
		}
		checked_amount();
		t.on("blur", ".qty_num", function(){
			e=$.evalJSON($(".quantity_box").attr("data"));
			if(!e) e=$.extend({min:1,max:99999,count:1});
			var num=parseInt($(this).val(), 10);
			if(!/^\d+$/.test(num)){
				global_obj.new_win_alert('Quantity entered must be a number!');
				$(this).val(e.min).focus();
				return !1;
			}
			if(!/^[\d]+$/.test($(this).val())){
				$(this).val(num).focus();
			}
			if($(this).val()==""){
				return e.count;
			}else{
				var Max=parseInt($('#quantity').attr('stock'));
				if(isNaN(num) || e.min>num || (num>Max && Max>0 && (e.isMax == 1 || $attrStock != 1 )) || (num>e.max && e.max>0 && (e.isMax == 1 || $attrStock != 1 ))){
					if($(".prod_info_wholesale").length && $attrStock != 1 && e.max<e.min){
						num=e.min;
						global_obj.new_win_alert(lang_obj.products.warning_stock.replace('%num%', e.max));
					}else if(num<e.min){ //低过起订量
						e.count=e.min;
						e.count>Max && (e.count=Max); //防止 起订量 > 最大购买数量
						global_obj.new_win_alert(lang_obj.products.warning_MOQ);
					}else if(num>e.max && $attrStock != 1){ //高过库存
						e.count=e.max;
						global_obj.new_win_alert(lang_obj.products.warning_stock.replace('%num%', e.max));
					}else if(num>Max && e.isMax == 1){ //高过最大购买数量
						e.count=Max;
						global_obj.new_win_alert(lang_obj.products.warning_Max.replace('%num%', Max));
					}else{ //不是数字
						global_obj.new_win_alert(lang_obj.products.warning_number);
					}
				}else{
					e.count=num;
					checked_amount();
					return void 0;
				}
				n.val(e.count);
				checked_amount();
				return !1;
			}
		}).on("keyup", ".qty_num", function(){
		}).on('keypress', ".qty_num", function(e){ //回车事件
			if(e.keyCode==13){
				return false;
			}
		});
		$('#btn_add, #btn_cut').on('click', function(){ //渐加or渐减事件
			if ($(this).hasClass('notallow')) return false;
			var num=parseInt(n.val(), 10),
				e=$.evalJSON($(".quantity_box").attr("data")),
				Max=parseInt(n.attr('stock')),
				value=$(this).attr('id')=='btn_add'?1:-1,
				soldstatus = parseInt(n.attr('soldstatus'));
				isMax=parseInt(n.attr('ismax')),
			num=isNaN(num)?1:num;
			num+=value;
			if($(".prod_info_wholesale").length && $attrStock != 1 && e.max<e.min){
				num=e.min;
				global_obj.new_win_alert(lang_obj.products.warning_stock.replace('%num%', e.max));
			} else if(num<e.min){ //低过起订量
				num=e.min;
				num>Max && Max>0 && (num=Max); //防止 起订量 > 最大购买数量
				global_obj.new_win_alert(lang_obj.products.warning_MOQ);
			}else if(num>Max && Max>0 && isMax == 1){ //高过最大购买数量
				num=Max;
				global_obj.new_win_alert(lang_obj.products.warning_Max.replace('%num%', Max));
			}else if(num>e.max && e.max>0 && isMax==1){ //高过库存
				num=e.max;
				global_obj.new_win_alert(lang_obj.products.warning_stock.replace('%num%', e.max));
			}
			n.val(num);
			checked_amount();
		});
	}
});

(function($){
	a=function(){
		b(),
		d(),
		f();
	},
	b=function(){//价格显示
		set_amount=$(".quantity_box").set_amount();
	},
	d=function(){
		$('.batch_model .selected_list').click(function (){
			$(this).toggleClass('on').parents('.prod_total').find('.total_list').toggleClass('show');
			if($(this).parents('.prod_total').find('.total_list tr').length){
				$(this).parents('.prod_total').find('.no_selected_box').hide();
			}else{
				$(this).parents('.prod_total').find('.no_selected_box').show();
			}
		});
	},
	f=function(){//产品属性、其他执行事件
		var VId, attr_id, attr_ary=new Object,
			attr_hide=$("#attr_hide"),
			attr_len=$("ul.attributes li").length,
			ext_attr=$.evalJSON($("#ext_attr").val() ? $("#ext_attr").val() : '[]'),//扩展属性
			$attrStock=parseInt($("#attrStock").val()),
			attrSelected=parseInt($("ul.attributes").attr('default_selected')),//默认选择
			$sku_box=$(".prod_info_sku"),//SKU显示
			$defaultStock=parseInt($("#quantity").attr('stock')),//产品默认库存
			$IsCombination=$('ul.attributes').attr('data-combination'),//是否开启规格组合
			$IsAttrPrice=$('ul.attributes').attr('data-attr-price');//是否开启属性价格
		$(".attributes").on("change", "select", function(){
		}).on("click", "div", function(e){//增加ipad触屏事件
			e.preventDefault();
			if($(this).hasClass("out_stock")){return false;}
			var attrSelectedFinish=parseInt($(".attributes").attr('default_selected_finish')),//第一次勾选是否完成
				$this = $(this),
				$obj = $this.parents(".attr_show").find("input"),
				$Position = $this.parents(".attr_show").data("position");

			//勾选操作
			$this.parent().find('div').removeClass('form_select_tips').addClass('GoodBorderColor');
			$this.addClass("selected").siblings().removeClass("selected");
			VId = $(this).attr("val");
			$obj.val(VId);
			$obj.attr('vid', $(this).attr('data-vid'));
			attr_id=$obj.attr("attr");

			if(attr_hide.val() && attr_hide.val()!='[]'){
				attr_ary=$.evalJSON(attr_hide.val());
			}
			if(VId){
				attr_ary[" " + attr_id]=VId;
			}else{//选择默认选项，清除对应ID
				delete attr_ary[" " + attr_id];
			}
			Object.keys(attr_ary).sort();
			attr_hide.val($.toJSON(attr_ary));
		});

		//发货地仅有“中国”一个，就自动默认执行
		if($(".attributes .attr_show").length){
			var obj=$('#attr_Overseas').parent().find("div").not(".out_stock").eq(0);
			if(!obj.hasClass('selected')){
				obj.click();
			}
		}
		if($(".attributes li select").length){
			var obj=$('#attr_Overseas').find("option[value!='']").not(".hide").eq(0);
			if(obj.is(':selected')===false){
				$('#attr_Overseas').find("option[value!='']").not(".hide").eq(0).attr("selected", "selected").change();
				//$('#attr_Overseas').find("option:eq(0)").remove();
			}
		}

		// 默认选中属性
		let GetVariantsId = global_obj.query_get('VariantsId');  // get的属性本体
		let CurAttr;
		if (GetVariantsId && ext_attr) {
			for (let key in ext_attr) {
				if (ext_attr[key][6] == GetVariantsId) {
					CurAttr = key;
					break;
				}
			}
			if (CurAttr) CurAttr = CurAttr.split('_');
			else CurAttr = '';
		}

		//购物车属性以选择按钮显示，默认执行第一个选项
		if (attrSelected && $(".attributes .attr_show").length) {
			$(".attributes .attr_show").each(function(index) {
				if ($(this).find('input:hidden').attr('id') != 'attr_Overseas') {
					if (GetVariantsId && CurAttr) {
						$(this).children('div').each(function () {
							if (CurAttr[index] == $(this).attr('val')) $(this).trigger('click');
						});
					} else {
						$(this).find("div").not(".out_stock").eq(0).click();
					}
				}
			});
			$(".attributes").attr('default_selected_finish', 1);
		}
		if (attrSelected && $(".attributes li select").length) {
			$(".attributes li select").each(function(index) {
				if ($(this).attr('id') != 'attr_Overseas') {
					if (GetVariantsId && CurAttr) {
						$(this).find('option').each(function () {
							if ($(this).val() == CurAttr[index]) $(this).attr("selected", "selected").trigger('change');
						});
					} else {
						$(this).find("option[value!='']").not(".hide").eq(0).attr("selected", "selected").change();
					}
				}
			});
			$(".attributes").attr('default_selected_finish', 1);
		}

		//属性列表
		$('.attributes .attr_select').each(function(){
			var $divW=$(this).width(),
				$labelW=$(this).find('label').width();
			$(this).find('select').css('width', $divW-$labelW);
			if($labelW>0){
				$(this).find('select').css('text-indent', $labelW);
			}
		});
	},
	a();
})(jQuery);