<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:83:"/Users/panliu/Documents/project/ozz/ozzw/addons/cms/view/default2/show_product.html";i:1676790125;s:81:"/Users/panliu/Documents/project/ozz/ozzw/addons/cms/view/default2/common/top.html";i:1676706692;s:90:"/Users/panliu/Documents/project/ozz/ozzw/addons/cms/view/default2/common/show_pro_mbx.html";i:1676731198;s:90:"/Users/panliu/Documents/project/ozz/ozzw/addons/cms/view/default2/common/send_message.html";i:1676789854;s:82:"/Users/panliu/Documents/project/ozz/ozzw/addons/cms/view/default2/common/foot.html";i:1676695952;}*/ ?>
<!DOCTYPE html><!-- This web page is copied by "https://bazhan.wang" --><html lang="en"><head><meta name="bing-analysis-id" content="2u381i1c1d2x362u"><meta charset="utf-8">
    
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black">
  <meta content="telephone=no" name="format-detection">
  <!-- <link rel="shortcut icon" href="/template/default2/img/5568360165.jpg"> -->
<style>
body #header{ background:#fff; font-size:20px; font-family:"knockout-30";}
body #header .header_box .nav_bar .n_item>a{ color:#000;}
body #header .header_box .r_icon .nav_icon .search_icon{ filter:invert(1);}
body #header .header_box .r_icon .nav_icon .sign_icon{ filter:invert(1);}
body #header .default_language_currency_style{ color:#000;}
body .default_nav_style .small_nav_sec{ width:150px;}
body #products .products_box .p_header .products_nav .pn_item{font-size:20px; }
body #products .products_box .p_main .p_item .item_title{font-size:20px;}
</style><!--!‬‏‪‭‫‬‫‭‪‫‬‪‫‬‫‬‏‭‭‫‪‬‏‪--><!-- <link rel="canonical" href="https://www.iwownfit.com/"> -->
<meta name="keywords" content="smartwatch,ODM,health,sportwatch,health watch,iwownfit,iwownfit cr143,iwownfit h200">
<meta name="description" content="Focus on smart wearable F&amp;D manufacturing for 10 years.">
<!-- <title>One-stop ODM for Home Health Products</title> -->
<title><?php echo \think\Config::get("cms.title"); ?>-<?php echo $site['name']; ?></title>
  <style type="text/css">
/*前端公共纯色图标*/
@font-face {
  font-family: "icons";
  src: url("/template/default2/fonts/icons.eot?v=<?php echo $site['version']; ?>"); /* IE9 */
  src: url("//ueeshop.ly200-cdn.com/static/custom/UPAS/UPAS889/static/font/icons.eot?#iefix") format("embedded-opentype"), /* IE6-IE8 */
  url("//ueeshop.ly200-cdn.com/static/custom/UPAS/UPAS889/static/font/icons.woff2") format("woff2"), /* chrome、firefox、opera、Safari, Android, iOS */
  url("//ueeshop.ly200-cdn.com/static/custom/UPAS/UPAS889/static/font/icons.woff") format("woff"), /* chrome、firefox */
  url("//ueeshop.ly200-cdn.com/static/custom/UPAS/UPAS889/static/font/icons.ttf") format("truetype"), /* chrome、firefox、opera、Safari, Android, iOS 4.2+ */
  url("//ueeshop.ly200-cdn.com/static/custom/UPAS/UPAS889/static/font/icons.svg#uxfonteditor") format("svg"); /* iOS 4.1- */
}
</style>

<link href="/template/default2/css/iconfont.css?v=<?php echo $site['version']; ?>" rel="stylesheet" type="text/css">
<link href="/template/default2/css/global.css?v=<?php echo $site['version']; ?>" rel="stylesheet" type="text/css">
<link href="/template/default2/css/themes.css?v=<?php echo $site['version']; ?>" rel="stylesheet" type="text/css">
<link href="/template/default2/css/user.css?v=<?php echo $site['version']; ?>" rel="stylesheet" type="text/css">
<link href="/template/default2/css/style.css?v=<?php echo $site['version']; ?>" rel="stylesheet" type="text/css">
<script type="text/javascript" src="/template/default2/js/jquery-1.7.2.min.js?v=<?php echo $site['version']; ?>"></script>
<script type="text/javascript" src="/template/default2/js/en.js?v=<?php echo $site['version']; ?>"></script>
<script type="text/javascript" src="/template/default2/js/global.js?v=<?php echo $site['version']; ?>"></script>
<script type="text/javascript" src="/template/default2/js/themes.js?v=<?php echo $site['version']; ?>"></script>
<script type="text/javascript" src="/template/default2/js/user.js?v=<?php echo $site['version']; ?>"></script>
<script type="text/javascript" src="/template/default2/js/main.js?v=<?php echo $site['version']; ?>"></script>
<script type="text/javascript" src="/template/default2/js/jquery.bxslider.js?v=<?php echo $site['version']; ?>"></script>
<link href="/template/default2/css/jquery.bxslider.css?v=<?php echo $site['version']; ?>" rel="stylesheet" type="text/css">
<link href="/template/default2/css/responsive.css?v=<?php echo $site['version']; ?>" rel="stylesheet" type="text/css">
<link href="/template/default2/css/font.css?v=<?php echo $site['version']; ?>" rel="stylesheet" type="text/css">
<link href="/template/default2/css/font_1.css?v=<?php echo $site['version']; ?>" rel="stylesheet" type="text/css">
<link href="/template/default2/css/font_2.css?v=<?php echo $site['version']; ?>" rel="stylesheet" type="text/css">
<link href="/template/default2/css/font_3.css?v=<?php echo $site['version']; ?>" rel="stylesheet" type="text/css">
<link href="/template/default2/css/font_4.css?v=<?php echo $site['version']; ?>" rel="stylesheet" type="text/css">
<script>
var ueeshop_config={
  "FbPixelOpen":"0",
  'domain':"https://www.iwownfit.com",
  'date':"2023/02/15 19:24:21",
  'lang':"en",
  'currency':"USD",
  'currency_symbols':"$",
  'currency_rate':"1.0000",
  'UserId':"0",
  'PaypalENV':"production",
  'PaypalExcheckout':"",
  'PaypalLoaclPayment':"",
  'PaypalLang':"en_US",
  'PaypalBusiness':"0",
  'PaypalCreditCard':"0",
  'IsMobile':0,
  'OrderMinPrice':"",
  'search_note':"No Products!"
}
</script>
    <link href="/template/default2/css/index.css?v=<?php echo $site['version']; ?>" rel="stylesheet" type="text/css">
</head>
<body id="body" class="lang_en">

<script type="text/javascript">
$(window).resize(function(){$(window).webDisplay(0);});
$(window).webDisplay(0);
</script>
<div class="global_shopping_cart_bg"></div>
<div class="global_shopping_cart_box"></div>
<div class="global_bom_box_bg"></div>
<div class="global_bom_box"></div><div class="ueeshop_responsive_header">
</div>
<div class="ueeshop_responsive_header header_blank"></div>
<script language="javascript">
$('.ueeshop_responsive_header .menu_btn').on('click',function(){
if($(this).hasClass('on')){
  $(this).removeClass('on');
  $('.ueeshop_responsive_header').find('.nav, .nav_bg, .son_nav').removeClass('on');
  $('body').attr('style', '');
}else{
  $(this).addClass('on');
  $('.ueeshop_responsive_header').find('.nav, .nav_bg').addClass('on');
  $('body').css({'overflow':'hidden'});
}
});
$('.ueeshop_responsive_header .language_btn').on('click',function(){
if($(this).hasClass('on')){
  $(this).removeClass('on');
  $('.ueeshop_responsive_header .language').removeClass('on');
  $('body').attr('style','');
}else{
  $(this).addClass('on');
  $('.ueeshop_responsive_header .language').addClass('on');
  $('.ueeshop_responsive_header').find('.menu_btn, .nav_bg, .nav, .son_nav').removeClass('on');
  $('body').css({'overflow':'hidden'});
}
});
$('.ueeshop_responsive_header .currency_btn').on('click',function(){
if($(this).hasClass('on')){
  $(this).removeClass('on');
  $('.ueeshop_responsive_header .currency_sub').removeClass('on');
  $('body').attr('style','');
}else{
  $(this).addClass('on');
  $('.ueeshop_responsive_header .currency_sub').addClass('on');
  $('.ueeshop_responsive_header').find('.menu_btn, .nav_bg, .nav, .son_nav').removeClass('on');
  $('body').css({'overflow':'hidden'});
}
});
$('.ueeshop_responsive_header .search_btn').on('click',function(){
if($(this).hasClass('on')){
  $(this).removeClass('on');
  $('.ueeshop_responsive_header .resp_search_box').removeClass('on');
}else{
  $(this).addClass('on');
  $('.ueeshop_responsive_header .resp_search_box').addClass('on');
  $('.ueeshop_responsive_header').find('.menu_btn, .nav_bg, .nav, .son_nav').removeClass('on');
  $('body').attr('style', '');
}
});
$('.ueeshop_responsive_header .nav_bg').on('click',function(){
$(this).removeClass('on');
$('.ueeshop_responsive_header').find('.nav, .son_nav, .menu_btn').removeClass('on');
$('body').attr('style', '');
});
$('.ueeshop_responsive_header .resp_search_box .close_btn span').on('click',function(){
$(this).parents('.resp_search_box').removeClass('on');
$('.ueeshop_responsive_header .search_btn').removeClass('on');
});
$('.ueeshop_responsive_header .language .close_btn span').on('click',function(){
$(this).parents('.language').removeClass('on');
$('.ueeshop_responsive_header .language_btn').removeClass('on');
})
$('.ueeshop_responsive_header .nav .list .title').on('click', function (e){
$('.ueeshop_responsive_header .hasub .sub').removeClass('on');
$('.ueeshop_responsive_header .son_nav').html($(this).parents('.list').find('.sub').html()).addClass('on');
});
$('.ueeshop_responsive_header .son_nav').on('click','.cate_close', function (e){
$('.ueeshop_responsive_header .son_nav').removeClass('on');
})
$('.ueeshop_responsive_header .son_nav').on('click', '.son_nav_title',function(){
$(this).parents('.item').find('.third_nav').toggle('on');
$(this).toggleClass('on');
});
$('.ueeshop_responsive_header .currency_sub').on('click','.list',function(){
var _this = $(this),
  data = _this.attr('data');

$.post('./?do_action=action.currency',{currency:data},function(data){
  if (data.ret==1) {
    window.location.reload();
  };
},'json')
})
</script><div id="header">
  <div class="header_box">
          <div class="logo_box">
          <h1 class="logo fl pic_box">
            <a href="/">
            <?php if(!(empty($site['logo']) || (($site['logo'] instanceof \think\Collection || $site['logo'] instanceof \think\Paginator ) && $site['logo']->isEmpty()))): ?><img src="<?php echo $site['logo']; ?>"><?php endif; if(!(empty($site['logo2']) || (($site['logo2'] instanceof \think\Collection || $site['logo2'] instanceof \think\Paginator ) && $site['logo2']->isEmpty()))): ?><img src="<?php echo $site['logo2']; ?>"><?php endif; ?>
            <em></em></a>
          </h1>        
      </div>

      <div class="nav_bar"><div class="default_nav_style">
        <?php $__vsNgoO64ZL__ = \addons\cms\model\Channel::getChannelList(["id"=>"nav","type"=>"top","cache"=>"0","condition"=>"1=isnav","row"=>"20","orderby"=>"weigh","orderway"=>"desc"]); if(is_array($__vsNgoO64ZL__) || $__vsNgoO64ZL__ instanceof \think\Collection || $__vsNgoO64ZL__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__vsNgoO64ZL__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$nav): $mod = ($i % 2 );++$i;?>
        <div class="n_item <?php if($nav['has_child']): ?> has_sec <?php endif; ?>">
          <a href="<?php echo $nav['url']; ?>"><?php echo $nav['name']; ?></a>
          <?php if($nav['has_child']): ?>
          <div class="nav_sec small_nav_sec">
            <div class="top"></div>
                <div class="nav_sec_box">
                  <div class="">
                     <div id="nav_sec_4" class="nav_list">
                            <?php $__RlXuEYrM4k__ = \addons\cms\model\Channel::getChannelList(["id"=>"son","type"=>"son","condition"=>"1=isnav","typeid"=>$nav['id'],"cache"=>"0","row"=>"20"]); if(is_array($__RlXuEYrM4k__) || $__RlXuEYrM4k__ instanceof \think\Collection || $__RlXuEYrM4k__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__RlXuEYrM4k__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$son): $mod = ($i % 2 );++$i;?>
                              <dl class="nav_sec_item">
                              <dt>
                                <a class="nav_sec_a" href="<?php echo $son['url']; ?>" title="<?php echo $son['name']; ?>"><?php echo $son['name']; ?><em></em></a>
                              </dt>
                              
                              <dd class="nav_thd_list">
                                <?php $__hvYPjsCaRr__ = \addons\cms\model\Archives::getArchivesList(["id"=>"sonshow","channel"=>$son['id'],"orderby"=>"weigh","orderway"=>"desc","row"=>"20"]); if(is_array($__hvYPjsCaRr__) || $__hvYPjsCaRr__ instanceof \think\Collection || $__hvYPjsCaRr__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__hvYPjsCaRr__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$sonshow): $mod = ($i % 2 );++$i;?>
                                      <div class="nav_thd_item"><a class="nav_sec_a" href="<?php echo $sonshow['url']; ?>" title="<?php echo $sonshow['title']; ?>"><?php echo $sonshow['title']; ?></a></div>
                                    <?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__hvYPjsCaRr__; if($son['has_child']): $__cC6yVkelLf__ = \addons\cms\model\Channel::getChannelList(["id"=>"sons","condition"=>"1=isnav","type"=>"son","typeid"=>$son['id'],"cache"=>"0"]); if(is_array($__cC6yVkelLf__) || $__cC6yVkelLf__ instanceof \think\Collection || $__cC6yVkelLf__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__cC6yVkelLf__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$sons): $mod = ($i % 2 );++$i;?>
                                    <div class="nav_thd_item">
                                        <a href="<?php echo $sons['url']; ?>" title="<?php echo $sons['name']; ?>"><?php echo $sons['name']; ?></a>
                                    </div>
                                    
                                  <?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__cC6yVkelLf__; endif; ?>
                              </dd>
                              </dl>
                            <?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__RlXuEYrM4k__; ?>
                     </div>
                     </div>
                     </div>
                     </div>
          <?php endif; ?>
        </div>
        <?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__vsNgoO64ZL__; ?>
  </div>

<script>
  $('.small_nav_sec').parent().css({'position':'relative','overflow':'visible'});
  $('.default_nav_style .n_item').hover(function(){
      $this=$(this);
      $this.find('.nav_sec').show().animate({'opacity':'1','margin-top':0},200);
      if(!$this.find('.nav_sec').hasClass('small_nav_sec')){
          $this.find('.nav_list>.clear').remove();
          $eq=parseInt(($this.find('.nav_sec_box').width()-$this.find('.nav_img').outerWidth(true))/$this.find('.nav_sec_item').outerWidth(true));
          $this.find('.nav_sec_item').each(function(index){
              if(index%$eq==($eq-1)){
                  $(this).after('<div class="clear"></div>');
              }
          });
      }
  },function(){
      $this=$(this);
      $this.find('.nav_sec').animate({'opacity':'0','margin-top':'30px'},0).hide();
  });
</script></div>

      <div class="r_icon">
          <div class="nav_icon">
              <a class="search_icon default_search" href="javascript:;" rel="nofollow"></a>
          </div>
                          <div class="nav_icon">
                  <a class="sign_icon" href="/account/" rel="nofollow"></a>
              </div>
                                  <div class="nav_icon">
                                      <div class="default_language_currency default_language_currency_style btn_default_language_currency">
      <dt>
                      <span>EN</span>
                                              <i></i>
      </dt>
  </div>
<div id="default_language_currency_box" class="hide themes_popups">
  <h4>
  Language    	<i></i>
  </h4>
  <div class="default_language_currency_container">
    <div class="default_language_currency_scroll">
                    <h5>Language</h5>
              <div class="default_language_currency_list default_language_item">
                                          <a rel="nofollow" class="lang current" href="javascript:;" data-url="http://iwownfit.com" data-currency="" data-lang="en">English</a>
                                          <a rel="nofollow" class="lang " href="javascript:;" data-url="http://es.iwownfit.com" data-currency="" data-lang="es">Español</a>
                                          <a rel="nofollow" class="lang " href="javascript:;" data-url="http://ru.iwownfit.com" data-currency="" data-lang="ru">Русский</a>
                                          <a rel="nofollow" class="lang " href="javascript:;" data-url="http://jp.iwownfit.com" data-currency="" data-lang="jp">日本語</a>
                                          <a rel="nofollow" class="lang " href="javascript:;" data-url="http://de.iwownfit.com" data-currency="" data-lang="de">Deutsch</a>
                                          <a rel="nofollow" class="lang " href="javascript:;" data-url="http://fr.iwownfit.com" data-currency="" data-lang="fr">Français</a>
                                          <a rel="nofollow" class="lang " href="javascript:;" data-url="http://it.iwownfit.com" data-currency="" data-lang="it">Italiano</a>
                                          <a rel="nofollow" class="lang " href="javascript:;" data-url="http://ko.iwownfit.com" data-currency="" data-lang="ko">한국어</a>
                                                      </div>
              <div class="clear"></div>
                                          </div>
  </div>
  <div class="default_language_currency_submit">Save</div>
</div>                            </div>
          <div class="nav_icon">
              <a class="inquiry" href="/" rel="nofollow">inquiry</a>
          </div>
      </div>

  </div>
</div>
<link href="/template/default2/css/font_6.css?v=<?php echo $site['version']; ?>" rel="stylesheet" type="text/css">
<link href="/template/default2/css/font_5.css?v=<?php echo $site['version']; ?>" rel="stylesheet" type="text/css">
<link href="/template/default2/css/themes.css?v=<?php echo $site['version']; ?>" rel="stylesheet" type="text/css">
<link href="/template/default2/css/jquery.bxslider.css?v=<?php echo $site['version']; ?>" rel="stylesheet" type="text/css">
<link href="/template/default2/css/module_1.css?v=<?php echo $site['version']; ?>" rel="stylesheet" type="text/css">
<script type="text/javascript" src="/template/default2/js/jquery.bxslider.js?v=<?php echo $site['version']; ?>"></script>
<script type="text/javascript" src="/template/default2/js/themes.js?v=<?php echo $site['version']; ?>"></script>

<div class="product-detail wrap-module">
  <div class="position_bg wrap">
  <div class="ueeshop_responsive_position clean s1">
<div class="title"></div>
<div class="position">
  <?php $__lOaMRFT1x9__ = \addons\cms\model\Channel::getBreadcrumb($__CHANNEL__??[], $__ARCHIVES__??[], $__TAGS__??[], $__PAGE__??[], $__DIYFORM__??[]); if(is_array($__lOaMRFT1x9__) || $__lOaMRFT1x9__ instanceof \think\Collection || $__lOaMRFT1x9__ instanceof \think\Paginator): $k = 0; $__LIST__ = $__lOaMRFT1x9__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($k % 2 );++$k;if($k>1): ?> &gt; <?php endif; ?><a title="<?php echo $item['name']; ?>" href="<?php echo $item['url']; ?>"><?php echo $item['name']; ?></a>
  <?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__lOaMRFT1x9__; ?>
  </div>
</div>	</div> 
	<div class="wrap">
<div class="ueeshop_responsive_products_detail products_detail_module1">
	<div class="gallery">
		<div class="detail_left">
		</div>
						<div class="bigimg">
						<div class="zoom_out">
				<a href="<?php echo $__ARCHIVES__['image']; ?>" class="MagicZoom" id="zoom" rel="zoom-position:custom; zoom-width:350px; zoom-height:350px;">
					<img src="<?php echo $__ARCHIVES__['image']; ?>" id="bigimg_src" alt="iwown ECG &amp; Blood Pressure Measuring watch-H1C">
				</a>
			</div>
		</div>
		<div id="zoom-big"></div>
		<div class="left_small_img">
			<div class="left_small_img_inner">
        <?php if(is_array(explode(',',$__ARCHIVES__['images'])) || explode(',',$__ARCHIVES__['images']) instanceof \think\Collection || explode(',',$__ARCHIVES__['images']) instanceof \think\Paginator): $i = 0; $__LIST__ = explode(',',$__ARCHIVES__['images']);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$image): $mod = ($i % 2 );++$i;?>
          <span class="slide pic_box on" pos="1" pic="<?php echo cdnurl($image); ?>" big="<?php echo cdnurl($image); ?>">
            <a href="javascript:;"><img src="<?php echo cdnurl($image); ?>" alt="iwown ECG &amp; Blood Pressure Measuring watch-H1C"><em></em></a>
            <img src="<?php echo cdnurl($image); ?>" style="display:none;">
            <img src="<?php echo cdnurl($image); ?>" style="display:none;">
          </span>
        <?php endforeach; endif; else: echo "" ;endif; ?>
																								</div>
		</div>	
		<div class="products_img">
			<ul>
        <?php if(is_array(explode(',',$__ARCHIVES__['images'])) || explode(',',$__ARCHIVES__['images']) instanceof \think\Collection || explode(',',$__ARCHIVES__['images']) instanceof \think\Paginator): $i = 0; $__LIST__ = explode(',',$__ARCHIVES__['images']);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$image): $mod = ($i % 2 );++$i;?>
		      <li><img src="<?php echo cdnurl($image); ?>"></li>
        <?php endforeach; endif; else: echo "" ;endif; ?>
		  </ul>
		</div>
					<div class="share">
				<!-- Go to www.addthis.com/dashboard to customize your tools -->
<div class="addthis_sharing_toolbox"></div>
<script type="text/javascript" src="/template/default2/js/addthis_widget.js?v=<?php echo $site['version']; ?>" async=""></script>			</div>
					</div>
	<div class="info">
		<form class="prod_info_form" name="prod_info_form" id="goods_form" action="/cart/add.html" method="post" target="_blank">
			<h1 class="name"><?php echo $__ARCHIVES__['title']; ?></h1>
							<div class="number"><span>Item No:</span><?php echo $__ARCHIVES__['itemNo']; ?></div>
							<div><?php echo $__ARCHIVES__['content']; ?></div>
									
			
																					<input type="hidden" id="ProId" name="ProId" value="101">
			<input type="hidden" id="ItemPrice" name="ItemPrice" value="" initial="" sales="0" salesprice="" discount="" old="">
			<input type="hidden" name="Attr" id="attr_hide" value="[]">
			<input type="hidden" name="IsBatch" id="IsBatch" value="0">
			<input type="hidden" id="ext_attr" value="[&quot;&quot;]">
			<input type="hidden" id="ext_combination" value="[&quot;&quot;]">
			<input type="hidden" name="products_type" value="0">
																		<div class="button">
																					<a href="javascript:;" class="add_to_inquiry" data="101">Add to Inquiry</a>
								<a href="javascript:;" class="feedback_btn">Contact Us</a>
																				<div class="clear"></div>
			</div>
							<script type="text/javascript" src="/template/default2/js/attribute_1.js?v=<?php echo $site['version']; ?>"></script>
														</form>
	</div>
	<div class="clear"></div>
	<div class="description">
	<div class="title">
		<span class="cur">Description</span>
							</div>
	<div class="contents" style="display: block;">
		<div class="global_mtitle">
			Description		</div>
		<div class="editor_cnt trans">
			<div id="global_editor_contents">
        <div style="text-align: center;">
          <?php if(is_array(explode(',',$__ARCHIVES__['cpimglist'])) || explode(',',$__ARCHIVES__['cpimglist']) instanceof \think\Collection || explode(',',$__ARCHIVES__['cpimglist']) instanceof \think\Paginator): $i = 0; $__LIST__ = explode(',',$__ARCHIVES__['cpimglist']);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$image): $mod = ($i % 2 );++$i;?>
          <img src="<?php echo cdnurl($image); ?>">
          <?php endforeach; endif; else: echo "" ;endif; ?>
        </div></div>
		</div>
	</div>
				<div class="clear"></div>
</div></div>
<style>
	.ueeshop_responsive_products_detail .info .button > a,.ueeshop_responsive_products_detail .info .button > button#addtocart_button,.product-detail .ueeshop_responsive_products_detail .info .button > a:hover{background:#fff0ee!important;}
	.ueeshop_responsive_products_detail .info .button > a#login_addtocart_button{background: #cccccc!important;}
	.ueeshop_responsive_products_detail .info .button > a#login_addtocart_button:hover{background: #ccc !important;}
	.ueeshop_responsive_products_detail .info .button > button#addtocart_button,.ueeshop_responsive_products_detail .info .button > button#addtocart_button:hover{background: #f24330!important;}
	.ueeshop_responsive_products_detail .info .button a.prod_info_pdf,.ueeshop_responsive_products_detail .info .button a.prod_info_pdf:hover, .product-detail .ueeshop_responsive_products_detail .info .button .download_button > span:hover{background: url(//ueeshop.ly200-cdn.com/static/custom/UPAS/UPAS889/images/global/pdf_download_icon2.png) #fff no-repeat center center / auto 23px!important}
	.ueeshop_responsive_products_detail .info .button > a.add_favorite:hover,.ueeshop_responsive_products_detail .info .button > a.feedback_btn:hover{background: #fff!important;}
</style>
<script>
$(document).ready(function(){
		product_gallery();
		// $('.ueeshop_responsive_products_detail .products_img ul').bxSlider({ 
	// 	slideWidth:$('.ueeshop_responsive_products_detail .products_img ul').width(),
	// 	pager:false
	// });
	$('.ueeshop_responsive_products_detail .title span').click(function(){
		showthis('.ueeshop_responsive_products_detail .title span', '.ueeshop_responsive_products_detail .description>.contents', $(this).index(), 'cur');
	});
	$('.ueeshop_responsive_products_detail .description .contents:first').show();

	$('.products_detail_module1 .prod_attr_comb .show_more').click(function (){
		$(this).addClass('hide').parents('.prod_attr_comb').addClass('show').find('.show_less').removeClass('hide');
	});
	$('.products_detail_module1 .prod_attr_comb .show_less').click(function (){
		$(this).addClass('hide').parents('.prod_attr_comb').removeClass('show').find('.show_more').removeClass('hide');
	});

	$('.products_detail_module1 .attribute .show_more').on('click', function(){
		$('.products_detail_module1 .attribute .attribute_box').css('height', 'auto');
		$(this).addClass('hide');
		$('.products_detail_module1 .attribute .link.show_less').removeClass('hide');
	});

	$('.products_detail_module1 .attribute .show_less').on('click', function(){
		var comb_height=$('.products_detail_module1 .attribute li').eq(0).outerHeight(true);
		$('.products_detail_module1 .attribute .attribute_box').css('height', comb_height*4);
		$(this).addClass('hide');
		$('.products_detail_module1 .attribute .link.show_more').removeClass('hide');
	});
	
	var comb_height=$('.prod_info_form .attribute .attribute_box li').eq(0).outerHeight(true);
	$('.prod_info_form .attribute .attribute_box').css('height', comb_height*4);
});
</script>
<div class="ueeshop_responsive_products_inquiry_box">
	<h1>Send your message to us</h1>
  <form name="inquiry" onsubmit="return $('.formPoint').show();" method="POST" action="/d/customer/post.html">
    <input type="hidden" name="__diyname__" value="customer">
        <?php echo token(); ?>
				<div class="rows input_rows">
				<label><span>*</span> Email</label>
				<span><input name="row[email] value="" type="text" class="input" maxlength="100" notnull=""></span>
				<div class="clear"></div>
			</div>
																<div class="rows input_rows">
				<label><span>*</span> Country</label>
				<select name="row[country] id="country" placeholder="Country/Region" style="display:none;" class="chzn-done" data-code="{&quot;1&quot;:&quot;93&quot;,&quot;241&quot;:&quot;358&quot;,&quot;2&quot;:&quot;355&quot;,&quot;3&quot;:&quot;213&quot;,&quot;4&quot;:&quot;1684&quot;,&quot;5&quot;:&quot;376&quot;,&quot;6&quot;:&quot;244&quot;,&quot;7&quot;:&quot;1264&quot;,&quot;9&quot;:&quot;1268&quot;,&quot;10&quot;:&quot;54&quot;,&quot;11&quot;:&quot;374&quot;,&quot;12&quot;:&quot;297&quot;,&quot;13&quot;:&quot;61&quot;,&quot;14&quot;:&quot;43&quot;,&quot;15&quot;:&quot;994&quot;,&quot;16&quot;:&quot;1242&quot;,&quot;17&quot;:&quot;973&quot;,&quot;18&quot;:&quot;880&quot;,&quot;19&quot;:&quot;1246&quot;,&quot;20&quot;:&quot;375&quot;,&quot;21&quot;:&quot;32&quot;,&quot;22&quot;:&quot;501&quot;,&quot;23&quot;:&quot;229&quot;,&quot;24&quot;:&quot;1441&quot;,&quot;25&quot;:&quot;975&quot;,&quot;26&quot;:&quot;591&quot;,&quot;27&quot;:&quot;387&quot;,&quot;28&quot;:&quot;267&quot;,&quot;29&quot;:&quot;0&quot;,&quot;30&quot;:&quot;55&quot;,&quot;31&quot;:&quot;246&quot;,&quot;247&quot;:&quot;1284&quot;,&quot;32&quot;:&quot;673&quot;,&quot;33&quot;:&quot;359&quot;,&quot;34&quot;:&quot;226&quot;,&quot;35&quot;:&quot;257&quot;,&quot;36&quot;:&quot;855&quot;,&quot;37&quot;:&quot;237&quot;,&quot;38&quot;:&quot;1&quot;,&quot;39&quot;:&quot;238&quot;,&quot;244&quot;:&quot;599&quot;,&quot;40&quot;:&quot;1345&quot;,&quot;41&quot;:&quot;236&quot;,&quot;42&quot;:&quot;235&quot;,&quot;43&quot;:&quot;56&quot;,&quot;44&quot;:&quot;86&quot;,&quot;45&quot;:&quot;61&quot;,&quot;46&quot;:&quot;672&quot;,&quot;47&quot;:&quot;57&quot;,&quot;48&quot;:&quot;269&quot;,&quot;49&quot;:&quot;242&quot;,&quot;51&quot;:&quot;682&quot;,&quot;52&quot;:&quot;506&quot;,&quot;53&quot;:&quot;225&quot;,&quot;55&quot;:&quot;53&quot;,&quot;251&quot;:&quot;599&quot;,&quot;56&quot;:&quot;357&quot;,&quot;57&quot;:&quot;420&quot;,&quot;114&quot;:&quot;850&quot;,&quot;50&quot;:&quot;243&quot;,&quot;58&quot;:&quot;45&quot;,&quot;59&quot;:&quot;253&quot;,&quot;60&quot;:&quot;1767&quot;,&quot;62&quot;:&quot;670&quot;,&quot;63&quot;:&quot;593&quot;,&quot;64&quot;:&quot;20&quot;,&quot;65&quot;:&quot;503&quot;,&quot;66&quot;:&quot;240&quot;,&quot;67&quot;:&quot;291&quot;,&quot;68&quot;:&quot;372&quot;,&quot;69&quot;:&quot;251&quot;,&quot;70&quot;:&quot;500&quot;,&quot;71&quot;:&quot;298&quot;,&quot;72&quot;:&quot;679&quot;,&quot;73&quot;:&quot;358&quot;,&quot;74&quot;:&quot;33&quot;,&quot;75&quot;:&quot;594&quot;,&quot;76&quot;:&quot;689&quot;,&quot;77&quot;:&quot;0&quot;,&quot;78&quot;:&quot;241&quot;,&quot;79&quot;:&quot;220&quot;,&quot;80&quot;:&quot;995&quot;,&quot;81&quot;:&quot;49&quot;,&quot;82&quot;:&quot;233&quot;,&quot;83&quot;:&quot;350&quot;,&quot;84&quot;:&quot;30&quot;,&quot;85&quot;:&quot;299&quot;,&quot;86&quot;:&quot;1473&quot;,&quot;87&quot;:&quot;0&quot;,&quot;88&quot;:&quot;1671&quot;,&quot;89&quot;:&quot;502&quot;,&quot;248&quot;:&quot;44&quot;,&quot;90&quot;:&quot;224&quot;,&quot;91&quot;:&quot;245&quot;,&quot;92&quot;:&quot;592&quot;,&quot;93&quot;:&quot;509&quot;,&quot;94&quot;:&quot;0&quot;,&quot;96&quot;:&quot;504&quot;,&quot;97&quot;:&quot;852&quot;,&quot;98&quot;:&quot;36&quot;,&quot;99&quot;:&quot;354&quot;,&quot;100&quot;:&quot;91&quot;,&quot;101&quot;:&quot;62&quot;,&quot;102&quot;:&quot;98&quot;,&quot;103&quot;:&quot;964&quot;,&quot;104&quot;:&quot;353&quot;,&quot;252&quot;:&quot;44&quot;,&quot;105&quot;:&quot;972&quot;,&quot;106&quot;:&quot;39&quot;,&quot;107&quot;:&quot;1876&quot;,&quot;108&quot;:&quot;81&quot;,&quot;109&quot;:&quot;962&quot;,&quot;110&quot;:&quot;7&quot;,&quot;111&quot;:&quot;254&quot;,&quot;112&quot;:&quot;686&quot;,&quot;113&quot;:&quot;82&quot;,&quot;250&quot;:&quot;384&quot;,&quot;115&quot;:&quot;965&quot;,&quot;116&quot;:&quot;996&quot;,&quot;117&quot;:&quot;856&quot;,&quot;118&quot;:&quot;371&quot;,&quot;119&quot;:&quot;961&quot;,&quot;120&quot;:&quot;266&quot;,&quot;121&quot;:&quot;231&quot;,&quot;123&quot;:&quot;423&quot;,&quot;124&quot;:&quot;370&quot;,&quot;125&quot;:&quot;352&quot;,&quot;126&quot;:&quot;853&quot;,&quot;127&quot;:&quot;389&quot;,&quot;128&quot;:&quot;261&quot;,&quot;129&quot;:&quot;265&quot;,&quot;130&quot;:&quot;60&quot;,&quot;131&quot;:&quot;960&quot;,&quot;132&quot;:&quot;223&quot;,&quot;133&quot;:&quot;356&quot;,&quot;134&quot;:&quot;692&quot;,&quot;135&quot;:&quot;596&quot;,&quot;136&quot;:&quot;222&quot;,&quot;137&quot;:&quot;230&quot;,&quot;138&quot;:&quot;269&quot;,&quot;139&quot;:&quot;52&quot;,&quot;140&quot;:&quot;691&quot;,&quot;141&quot;:&quot;373&quot;,&quot;142&quot;:&quot;377&quot;,&quot;143&quot;:&quot;976&quot;,&quot;249&quot;:&quot;382&quot;,&quot;144&quot;:&quot;1664&quot;,&quot;145&quot;:&quot;212&quot;,&quot;146&quot;:&quot;258&quot;,&quot;147&quot;:&quot;95&quot;,&quot;148&quot;:&quot;264&quot;,&quot;149&quot;:&quot;674&quot;,&quot;150&quot;:&quot;977&quot;,&quot;151&quot;:&quot;31&quot;,&quot;243&quot;:&quot;599&quot;,&quot;153&quot;:&quot;687&quot;,&quot;154&quot;:&quot;64&quot;,&quot;155&quot;:&quot;505&quot;,&quot;156&quot;:&quot;227&quot;,&quot;157&quot;:&quot;234&quot;,&quot;158&quot;:&quot;683&quot;,&quot;159&quot;:&quot;672&quot;,&quot;160&quot;:&quot;1670&quot;,&quot;161&quot;:&quot;47&quot;,&quot;162&quot;:&quot;968&quot;,&quot;163&quot;:&quot;92&quot;,&quot;164&quot;:&quot;680&quot;,&quot;165&quot;:&quot;970&quot;,&quot;166&quot;:&quot;507&quot;,&quot;167&quot;:&quot;675&quot;,&quot;168&quot;:&quot;595&quot;,&quot;169&quot;:&quot;51&quot;,&quot;170&quot;:&quot;63&quot;,&quot;171&quot;:&quot;64&quot;,&quot;172&quot;:&quot;48&quot;,&quot;173&quot;:&quot;351&quot;,&quot;174&quot;:&quot;1787&quot;,&quot;175&quot;:&quot;974&quot;,&quot;176&quot;:&quot;262&quot;,&quot;177&quot;:&quot;40&quot;,&quot;178&quot;:&quot;7&quot;,&quot;179&quot;:&quot;250&quot;,&quot;246&quot;:&quot;590&quot;,&quot;180&quot;:&quot;247&quot;,&quot;181&quot;:&quot;1869&quot;,&quot;182&quot;:&quot;1758&quot;,&quot;242&quot;:&quot;590&quot;,&quot;184&quot;:&quot;508&quot;,&quot;152&quot;:&quot;784&quot;,&quot;185&quot;:&quot;378&quot;,&quot;186&quot;:&quot;239&quot;,&quot;187&quot;:&quot;966&quot;,&quot;188&quot;:&quot;221&quot;,&quot;189&quot;:&quot;381&quot;,&quot;190&quot;:&quot;248&quot;,&quot;191&quot;:&quot;232&quot;,&quot;192&quot;:&quot;65&quot;,&quot;245&quot;:&quot;599&quot;,&quot;193&quot;:&quot;421&quot;,&quot;194&quot;:&quot;386&quot;,&quot;233&quot;:&quot;84&quot;,&quot;195&quot;:&quot;677&quot;,&quot;196&quot;:&quot;252&quot;,&quot;197&quot;:&quot;27&quot;,&quot;198&quot;:&quot;0&quot;,&quot;199&quot;:&quot;34&quot;,&quot;200&quot;:&quot;94&quot;,&quot;122&quot;:&quot;218&quot;,&quot;201&quot;:&quot;249&quot;,&quot;202&quot;:&quot;597&quot;,&quot;203&quot;:&quot;0&quot;,&quot;204&quot;:&quot;268&quot;,&quot;205&quot;:&quot;46&quot;,&quot;206&quot;:&quot;41&quot;,&quot;207&quot;:&quot;963&quot;,&quot;208&quot;:&quot;886&quot;,&quot;209&quot;:&quot;992&quot;,&quot;210&quot;:&quot;255&quot;,&quot;211&quot;:&quot;66&quot;,&quot;54&quot;:&quot;385&quot;,&quot;212&quot;:&quot;228&quot;,&quot;213&quot;:&quot;690&quot;,&quot;214&quot;:&quot;676&quot;,&quot;215&quot;:&quot;1868&quot;,&quot;216&quot;:&quot;216&quot;,&quot;217&quot;:&quot;90&quot;,&quot;218&quot;:&quot;993&quot;,&quot;219&quot;:&quot;1649&quot;,&quot;220&quot;:&quot;688&quot;,&quot;221&quot;:&quot;256&quot;,&quot;222&quot;:&quot;380&quot;,&quot;223&quot;:&quot;971&quot;,&quot;224&quot;:&quot;44&quot;,&quot;226&quot;:&quot;1&quot;,&quot;225&quot;:&quot;0&quot;,&quot;227&quot;:&quot;598&quot;,&quot;228&quot;:&quot;1340&quot;,&quot;230&quot;:&quot;998&quot;,&quot;231&quot;:&quot;678&quot;,&quot;238&quot;:&quot;379&quot;,&quot;232&quot;:&quot;58&quot;,&quot;234&quot;:&quot;681&quot;,&quot;235&quot;:&quot;210&quot;,&quot;236&quot;:&quot;685&quot;,&quot;237&quot;:&quot;967&quot;,&quot;239&quot;:&quot;260&quot;,&quot;240&quot;:&quot;263&quot;}">
					<option value="-1"></option>
											<option value="Afghanistan">Afghanistan</option>
											<option value="Aland Islands">Aland Islands</option>
											<option value="Albania">Albania</option>
											<option value="Algeria">Algeria</option>
											<option value="American Samoa">American Samoa</option>
											<option value="Andorra">Andorra</option>
											<option value="Angola">Angola</option>
											<option value="Anguilla">Anguilla</option>
											<option value="Antigua and Barbuda">Antigua and Barbuda</option>
											<option value="Argentina">Argentina</option>
											<option value="Armenia">Armenia</option>
											<option value="Aruba">Aruba</option>
											<option value="Australia">Australia</option>
											<option value="Austria">Austria</option>
											<option value="Azerbaijan">Azerbaijan</option>
											<option value="Bahamas">Bahamas</option>
											<option value="Bahrain">Bahrain</option>
											<option value="Bangladesh">Bangladesh</option>
											<option value="Barbados">Barbados</option>
											<option value="Belarus">Belarus</option>
											<option value="Belgium">Belgium</option>
											<option value="Belize">Belize</option>
											<option value="Benin">Benin</option>
											<option value="Bermuda">Bermuda</option>
											<option value="Bhutan">Bhutan</option>
											<option value="Bolivia">Bolivia</option>
											<option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
											<option value="Botswana">Botswana</option>
											<option value="Bouvet Island" selected="">Bouvet Island</option>
											<option value="Brazil">Brazil</option>
											<option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
											<option value="British Virgin Islands">British Virgin Islands</option>
											<option value="Brunei Darussalam">Brunei Darussalam</option>
											<option value="Bulgaria">Bulgaria</option>
											<option value="Burkina Faso">Burkina Faso</option>
											<option value="Burundi">Burundi</option>
											<option value="Cambodia">Cambodia</option>
											<option value="Cameroon">Cameroon</option>
											<option value="Canada">Canada</option>
											<option value="Cape Verde">Cape Verde</option>
											<option value="Caribbean Netherlands">Caribbean Netherlands</option>
											<option value="Cayman Islands">Cayman Islands</option>
											<option value="Central African Republic">Central African Republic</option>
											<option value="Chad">Chad</option>
											<option value="Chile">Chile</option>
											<option value="China">China</option>
											<option value="Christmas Island">Christmas Island</option>
											<option value="Cocos Islands">Cocos Islands</option>
											<option value="Colombia">Colombia</option>
											<option value="Comoros">Comoros</option>
											<option value="Congo">Congo</option>
											<option value="Cook Islands">Cook Islands</option>
											<option value="Costa Rica">Costa Rica</option>
											<option value="Cote D'ivoire">Cote D'ivoire</option>
											<option value="Cuba">Cuba</option>
											<option value="Curaçao">Curaçao</option>
											<option value="Cyprus">Cyprus</option>
											<option value="Czech Republic">Czech Republic</option>
											<option value="Democratic People's Republic of Korea">Democratic People's Republic of Korea</option>
											<option value="Democratic Republic of the Congo">Democratic Republic of the Congo</option>
											<option value="Denmark">Denmark</option>
											<option value="Djibouti">Djibouti</option>
											<option value="Dominica">Dominica</option>
											<option value="East Timor">East Timor</option>
											<option value="Ecuador">Ecuador</option>
											<option value="Egypt">Egypt</option>
											<option value="El Salvador">El Salvador</option>
											<option value="Equatorial Guinea">Equatorial Guinea</option>
											<option value="Eritrea">Eritrea</option>
											<option value="Estonia">Estonia</option>
											<option value="Ethiopia">Ethiopia</option>
											<option value="Falkland Islands">Falkland Islands</option>
											<option value="Faroe Islands">Faroe Islands</option>
											<option value="Fiji">Fiji</option>
											<option value="Finland">Finland</option>
											<option value="France">France</option>
											<option value="French Guiana">French Guiana</option>
											<option value="French Polynesia">French Polynesia</option>
											<option value="French Southern Territories">French Southern Territories</option>
											<option value="Gabon">Gabon</option>
											<option value="Gambia">Gambia</option>
											<option value="Georgia">Georgia</option>
											<option value="Germany">Germany</option>
											<option value="Ghana">Ghana</option>
											<option value="Gibraltar">Gibraltar</option>
											<option value="Greece">Greece</option>
											<option value="Greenland">Greenland</option>
											<option value="Grenada">Grenada</option>
											<option value="Guadeloupe">Guadeloupe</option>
											<option value="Guam">Guam</option>
											<option value="Guatemala">Guatemala</option>
											<option value="Guernsey">Guernsey</option>
											<option value="Guinea">Guinea</option>
											<option value="Guinea-Bissau">Guinea-Bissau</option>
											<option value="Guyana">Guyana</option>
											<option value="Haiti">Haiti</option>
											<option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
											<option value="Honduras">Honduras</option>
											<option value="Hong Kong, China">Hong Kong, China</option>
											<option value="Hungary">Hungary</option>
											<option value="Iceland">Iceland</option>
											<option value="India">India</option>
											<option value="Indonesia">Indonesia</option>
											<option value="Iran">Iran</option>
											<option value="Iraq">Iraq</option>
											<option value="Ireland">Ireland</option>
											<option value="Isle of Man">Isle of Man</option>
											<option value="Israel">Israel</option>
											<option value="Italy">Italy</option>
											<option value="Jamaica">Jamaica</option>
											<option value="Japan">Japan</option>
											<option value="Jordan">Jordan</option>
											<option value="Kazakhstan">Kazakhstan</option>
											<option value="Kenya">Kenya</option>
											<option value="Kiribati">Kiribati</option>
											<option value="Korea">Korea</option>
											<option value="Kosovo">Kosovo</option>
											<option value="Kuwait">Kuwait</option>
											<option value="Kyrgyzstan">Kyrgyzstan</option>
											<option value="Laos">Laos</option>
											<option value="Latvia">Latvia</option>
											<option value="Lebanon">Lebanon</option>
											<option value="Lesotho">Lesotho</option>
											<option value="Liberia">Liberia</option>
											<option value="Liechtenstein">Liechtenstein</option>
											<option value="Lithuania">Lithuania</option>
											<option value="Luxembourg">Luxembourg</option>
											<option value="Macau, China">Macau, China</option>
											<option value="Macedonia">Macedonia</option>
											<option value="Madagascar">Madagascar</option>
											<option value="Malawi">Malawi</option>
											<option value="Malaysia">Malaysia</option>
											<option value="Maldives">Maldives</option>
											<option value="Mali">Mali</option>
											<option value="Malta">Malta</option>
											<option value="Marshall Islands">Marshall Islands</option>
											<option value="Martinique">Martinique</option>
											<option value="Mauritania">Mauritania</option>
											<option value="Mauritius">Mauritius</option>
											<option value="Mayotte">Mayotte</option>
											<option value="Mexico">Mexico</option>
											<option value="Micronesia">Micronesia</option>
											<option value="Moldova">Moldova</option>
											<option value="Monaco">Monaco</option>
											<option value="Mongolia">Mongolia</option>
											<option value="Montenegro">Montenegro</option>
											<option value="Montserrat">Montserrat</option>
											<option value="Morocco">Morocco</option>
											<option value="Mozambique">Mozambique</option>
											<option value="Myanmar">Myanmar</option>
											<option value="Namibia">Namibia</option>
											<option value="Nauru">Nauru</option>
											<option value="Nepal">Nepal</option>
											<option value="Netherlands">Netherlands</option>
											<option value="Netherlands Antilles">Netherlands Antilles</option>
											<option value="New Caledonia">New Caledonia</option>
											<option value="New Zealand">New Zealand</option>
											<option value="Nicaragua">Nicaragua</option>
											<option value="Niger">Niger</option>
											<option value="Nigeria">Nigeria</option>
											<option value="Niue">Niue</option>
											<option value="Norfolk Island">Norfolk Island</option>
											<option value="Northern Mariana Islands">Northern Mariana Islands</option>
											<option value="Norway">Norway</option>
											<option value="Oman">Oman</option>
											<option value="Pakistan">Pakistan</option>
											<option value="Palau">Palau</option>
											<option value="Palestine">Palestine</option>
											<option value="Panama">Panama</option>
											<option value="Papua New Guinea">Papua New Guinea</option>
											<option value="Paraguay">Paraguay</option>
											<option value="Peru">Peru</option>
											<option value="Philippines">Philippines</option>
											<option value="Pitcairn Islands">Pitcairn Islands</option>
											<option value="Poland">Poland</option>
											<option value="Portugal">Portugal</option>
											<option value="Puerto Rico">Puerto Rico</option>
											<option value="Qatar">Qatar</option>
											<option value="Reunion">Reunion</option>
											<option value="Romania">Romania</option>
											<option value="Russia">Russia</option>
											<option value="Rwanda">Rwanda</option>
											<option value="Saint Barthélemy">Saint Barthélemy</option>
											<option value="Saint Helena">Saint Helena</option>
											<option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
											<option value="Saint Lucia">Saint Lucia</option>
											<option value="Saint Martin">Saint Martin</option>
											<option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
											<option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
											<option value="San Marino">San Marino</option>
											<option value="Sao Tome and Principe">Sao Tome and Principe</option>
											<option value="Saudi Arabia">Saudi Arabia</option>
											<option value="Senegal">Senegal</option>
											<option value="Serbia">Serbia</option>
											<option value="Seychelles">Seychelles</option>
											<option value="Sierra Leone">Sierra Leone</option>
											<option value="Singapore">Singapore</option>
											<option value="Sint Maarten">Sint Maarten</option>
											<option value="Slovakia">Slovakia</option>
											<option value="Slovenia">Slovenia</option>
											<option value="Socialist Republic of Vietnam">Socialist Republic of Vietnam</option>
											<option value="Solomon Islands">Solomon Islands</option>
											<option value="Somalia">Somalia</option>
											<option value="South Africa">South Africa</option>
											<option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option>
											<option value="Spain">Spain</option>
											<option value="Sri Lanka">Sri Lanka</option>
											<option value="State of Libya">State of Libya</option>
											<option value="Sudan">Sudan</option>
											<option value="Suriname">Suriname</option>
											<option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
											<option value="Swaziland">Swaziland</option>
											<option value="Sweden">Sweden</option>
											<option value="Switzerland">Switzerland</option>
											<option value="Syrian Arab Republic">Syrian Arab Republic</option>
											<option value="TaiWan, China">TaiWan, China</option>
											<option value="Tajikistan">Tajikistan</option>
											<option value="Tanzania">Tanzania</option>
											<option value="Thailand">Thailand</option>
											<option value="The Republic of Croatia">The Republic of Croatia</option>
											<option value="Togo">Togo</option>
											<option value="Tokelau">Tokelau</option>
											<option value="Tonga">Tonga</option>
											<option value="Trinidad and Tobago">Trinidad and Tobago</option>
											<option value="Tunisia">Tunisia</option>
											<option value="Turkey">Turkey</option>
											<option value="Turkmenistan">Turkmenistan</option>
											<option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
											<option value="Tuvalu">Tuvalu</option>
											<option value="Uganda">Uganda</option>
											<option value="Ukraine">Ukraine</option>
											<option value="United Arab Emirates">United Arab Emirates</option>
											<option value="United Kingdom">United Kingdom</option>
											<option value="United States">United States</option>
											<option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
											<option value="Uruguay">Uruguay</option>
											<option value="US Virgin Islands">US Virgin Islands</option>
											<option value="Uzbekistan">Uzbekistan</option>
											<option value="Vanuatu">Vanuatu</option>
											<option value="Vatican City State">Vatican City State</option>
											<option value="Venezuela">Venezuela</option>
											<option value="Wallis and Futuna Islands">Wallis and Futuna Islands</option>
											<option value="Western Sahara">Western Sahara</option>
											<option value="Western Samoa">Western Samoa</option>
											<option value="Yemen">Yemen</option>
											<option value="Zambia">Zambia</option>
											<option value="Zimbabwe">Zimbabwe</option>
									</select>
				<div id="country_chzn" class="chzn-container chzn-container-single">
					<a href="javascript:;" class="chzn-single"><span>please select your country</span><div><b></b></div></a>
					<div class="chzn-drop">
						<div class="chzn-search clearfix"><input type="text" autocomplete="off" class=""></div>
						<ul class="chzn-results">
							<li class="group-option active-result">Afghanistan</li><li class="group-option active-result">Aland Islands</li><li class="group-option active-result">Albania</li><li class="group-option active-result">Algeria</li><li class="group-option active-result">American Samoa</li><li class="group-option active-result">Andorra</li><li class="group-option active-result">Angola</li><li class="group-option active-result">Anguilla</li><li class="group-option active-result">Antigua and Barbuda</li><li class="group-option active-result">Argentina</li><li class="group-option active-result">Armenia</li><li class="group-option active-result">Aruba</li><li class="group-option active-result">Australia</li><li class="group-option active-result">Austria</li><li class="group-option active-result">Azerbaijan</li><li class="group-option active-result">Bahamas</li><li class="group-option active-result">Bahrain</li><li class="group-option active-result">Bangladesh</li><li class="group-option active-result">Barbados</li><li class="group-option active-result">Belarus</li><li class="group-option active-result">Belgium</li><li class="group-option active-result">Belize</li><li class="group-option active-result">Benin</li><li class="group-option active-result">Bermuda</li><li class="group-option active-result">Bhutan</li><li class="group-option active-result">Bolivia</li><li class="group-option active-result">Bosnia and Herzegovina</li><li class="group-option active-result">Botswana</li><li class="group-option active-result default">Bouvet Island</li><li class="group-option active-result">Brazil</li><li class="group-option active-result">British Indian Ocean Territory</li><li class="group-option active-result">British Virgin Islands</li><li class="group-option active-result">Brunei Darussalam</li><li class="group-option active-result">Bulgaria</li><li class="group-option active-result">Burkina Faso</li><li class="group-option active-result">Burundi</li><li class="group-option active-result">Cambodia</li><li class="group-option active-result">Cameroon</li><li class="group-option active-result">Canada</li><li class="group-option active-result">Cape Verde</li><li class="group-option active-result">Caribbean Netherlands</li><li class="group-option active-result">Cayman Islands</li><li class="group-option active-result">Central African Republic</li><li class="group-option active-result">Chad</li><li class="group-option active-result">Chile</li><li class="group-option active-result">China</li><li class="group-option active-result">Christmas Island</li><li class="group-option active-result">Cocos Islands</li><li class="group-option active-result">Colombia</li><li class="group-option active-result">Comoros</li><li class="group-option active-result">Congo</li><li class="group-option active-result">Cook Islands</li><li class="group-option active-result">Costa Rica</li><li class="group-option active-result">Cote D'ivoire</li><li class="group-option active-result">Cuba</li><li class="group-option active-result">Curaçao</li><li class="group-option active-result">Cyprus</li><li class="group-option active-result">Czech Republic</li><li class="group-option active-result">Democratic People's Republic of Korea</li><li class="group-option active-result">Democratic Republic of the Congo</li><li class="group-option active-result">Denmark</li><li class="group-option active-result">Djibouti</li><li class="group-option active-result">Dominica</li><li class="group-option active-result">East Timor</li><li class="group-option active-result">Ecuador</li><li class="group-option active-result">Egypt</li><li class="group-option active-result">El Salvador</li><li class="group-option active-result">Equatorial Guinea</li><li class="group-option active-result">Eritrea</li><li class="group-option active-result">Estonia</li><li class="group-option active-result">Ethiopia</li><li class="group-option active-result">Falkland Islands</li><li class="group-option active-result">Faroe Islands</li><li class="group-option active-result">Fiji</li><li class="group-option active-result">Finland</li><li class="group-option active-result">France</li><li class="group-option active-result">French Guiana</li><li class="group-option active-result">French Polynesia</li><li class="group-option active-result">French Southern Territories</li><li class="group-option active-result">Gabon</li><li class="group-option active-result">Gambia</li><li class="group-option active-result">Georgia</li><li class="group-option active-result">Germany</li><li class="group-option active-result">Ghana</li><li class="group-option active-result">Gibraltar</li><li class="group-option active-result">Greece</li><li class="group-option active-result">Greenland</li><li class="group-option active-result">Grenada</li><li class="group-option active-result">Guadeloupe</li><li class="group-option active-result">Guam</li><li class="group-option active-result">Guatemala</li><li class="group-option active-result">Guernsey</li><li class="group-option active-result">Guinea</li><li class="group-option active-result">Guinea-Bissau</li><li class="group-option active-result">Guyana</li><li class="group-option active-result">Haiti</li><li class="group-option active-result">Heard Island and Mcdonald Islands</li><li class="group-option active-result">Honduras</li><li class="group-option active-result">Hong Kong, China</li><li class="group-option active-result">Hungary</li><li class="group-option active-result">Iceland</li><li class="group-option active-result">India</li><li class="group-option active-result">Indonesia</li><li class="group-option active-result">Iran</li><li class="group-option active-result">Iraq</li><li class="group-option active-result">Ireland</li><li class="group-option active-result">Isle of Man</li><li class="group-option active-result">Israel</li><li class="group-option active-result">Italy</li><li class="group-option active-result">Jamaica</li><li class="group-option active-result">Japan</li><li class="group-option active-result">Jordan</li><li class="group-option active-result">Kazakhstan</li><li class="group-option active-result">Kenya</li><li class="group-option active-result">Kiribati</li><li class="group-option active-result">Korea</li><li class="group-option active-result">Kosovo</li><li class="group-option active-result">Kuwait</li><li class="group-option active-result">Kyrgyzstan</li><li class="group-option active-result">Laos</li><li class="group-option active-result">Latvia</li><li class="group-option active-result">Lebanon</li><li class="group-option active-result">Lesotho</li><li class="group-option active-result">Liberia</li><li class="group-option active-result">Liechtenstein</li><li class="group-option active-result">Lithuania</li><li class="group-option active-result">Luxembourg</li><li class="group-option active-result">Macau, China</li><li class="group-option active-result">Macedonia</li><li class="group-option active-result">Madagascar</li><li class="group-option active-result">Malawi</li><li class="group-option active-result">Malaysia</li><li class="group-option active-result">Maldives</li><li class="group-option active-result">Mali</li><li class="group-option active-result">Malta</li><li class="group-option active-result">Marshall Islands</li><li class="group-option active-result">Martinique</li><li class="group-option active-result">Mauritania</li><li class="group-option active-result">Mauritius</li><li class="group-option active-result">Mayotte</li><li class="group-option active-result">Mexico</li><li class="group-option active-result">Micronesia</li><li class="group-option active-result">Moldova</li><li class="group-option active-result">Monaco</li><li class="group-option active-result">Mongolia</li><li class="group-option active-result">Montenegro</li><li class="group-option active-result">Montserrat</li><li class="group-option active-result">Morocco</li><li class="group-option active-result">Mozambique</li><li class="group-option active-result">Myanmar</li><li class="group-option active-result">Namibia</li><li class="group-option active-result">Nauru</li><li class="group-option active-result">Nepal</li><li class="group-option active-result">Netherlands</li><li class="group-option active-result">Netherlands Antilles</li><li class="group-option active-result">New Caledonia</li><li class="group-option active-result">New Zealand</li><li class="group-option active-result">Nicaragua</li><li class="group-option active-result">Niger</li><li class="group-option active-result">Nigeria</li><li class="group-option active-result">Niue</li><li class="group-option active-result">Norfolk Island</li><li class="group-option active-result">Northern Mariana Islands</li><li class="group-option active-result">Norway</li><li class="group-option active-result">Oman</li><li class="group-option active-result">Pakistan</li><li class="group-option active-result">Palau</li><li class="group-option active-result">Palestine</li><li class="group-option active-result">Panama</li><li class="group-option active-result">Papua New Guinea</li><li class="group-option active-result">Paraguay</li><li class="group-option active-result">Peru</li><li class="group-option active-result">Philippines</li><li class="group-option active-result">Pitcairn Islands</li><li class="group-option active-result">Poland</li><li class="group-option active-result">Portugal</li><li class="group-option active-result">Puerto Rico</li><li class="group-option active-result">Qatar</li><li class="group-option active-result">Reunion</li><li class="group-option active-result">Romania</li><li class="group-option active-result">Russia</li><li class="group-option active-result">Rwanda</li><li class="group-option active-result">Saint Barthélemy</li><li class="group-option active-result">Saint Helena</li><li class="group-option active-result">Saint Kitts and Nevis</li><li class="group-option active-result">Saint Lucia</li><li class="group-option active-result">Saint Martin</li><li class="group-option active-result">Saint Pierre and Miquelon</li><li class="group-option active-result">Saint Vincent and the Grenadines</li><li class="group-option active-result">San Marino</li><li class="group-option active-result">Sao Tome and Principe</li><li class="group-option active-result">Saudi Arabia</li><li class="group-option active-result">Senegal</li><li class="group-option active-result">Serbia</li><li class="group-option active-result">Seychelles</li><li class="group-option active-result">Sierra Leone</li><li class="group-option active-result">Singapore</li><li class="group-option active-result">Sint Maarten</li><li class="group-option active-result">Slovakia</li><li class="group-option active-result">Slovenia</li><li class="group-option active-result">Socialist Republic of Vietnam</li><li class="group-option active-result">Solomon Islands</li><li class="group-option active-result">Somalia</li><li class="group-option active-result">South Africa</li><li class="group-option active-result">South Georgia and The South Sandwich Islands</li><li class="group-option active-result">Spain</li><li class="group-option active-result">Sri Lanka</li><li class="group-option active-result">State of Libya</li><li class="group-option active-result">Sudan</li><li class="group-option active-result">Suriname</li><li class="group-option active-result">Svalbard and Jan Mayen</li><li class="group-option active-result">Swaziland</li><li class="group-option active-result">Sweden</li><li class="group-option active-result">Switzerland</li><li class="group-option active-result">Syrian Arab Republic</li><li class="group-option active-result">TaiWan, China</li><li class="group-option active-result">Tajikistan</li><li class="group-option active-result">Tanzania</li><li class="group-option active-result">Thailand</li><li class="group-option active-result">The Republic of Croatia</li><li class="group-option active-result">Togo</li><li class="group-option active-result">Tokelau</li><li class="group-option active-result">Tonga</li><li class="group-option active-result">Trinidad and Tobago</li><li class="group-option active-result">Tunisia</li><li class="group-option active-result">Turkey</li><li class="group-option active-result">Turkmenistan</li><li class="group-option active-result">Turks and Caicos Islands</li><li class="group-option active-result">Tuvalu</li><li class="group-option active-result">Uganda</li><li class="group-option active-result">Ukraine</li><li class="group-option active-result">United Arab Emirates</li><li class="group-option active-result">United Kingdom</li><li class="group-option active-result">United States</li><li class="group-option active-result">United States Minor Outlying Islands</li><li class="group-option active-result">Uruguay</li><li class="group-option active-result">US Virgin Islands</li><li class="group-option active-result">Uzbekistan</li><li class="group-option active-result">Vanuatu</li><li class="group-option active-result">Vatican City State</li><li class="group-option active-result">Venezuela</li><li class="group-option active-result">Wallis and Futuna Islands</li><li class="group-option active-result">Western Sahara</li><li class="group-option active-result">Western Samoa</li><li class="group-option active-result">Yemen</li><li class="group-option active-result">Zambia</li><li class="group-option active-result">Zimbabwe</li>						</ul>
					</div>
				</div>
				<div class="clear"></div>
			</div>
															<div class="clear"></div>
			<div class="rows textarea_rows">
				<label><span>*</span> Message</label>
				<span><textarea name="row[content]" class="form_area contents" notnull=""></textarea></span>
				<div class="clear"></div>
			</div>
						<div class="clear"></div>
		<div class="rows submit_rows">
			<label></label>
			<span><input name="Submit" type="submit" class="form_button" value="Submit"></span>
			<div class="clear"></div>
		</div>
		<input type="hidden" name="Site" value="en">
		<input type="hidden" name="ProId" value="101">
	</form>
</div>

			</div>
</div>

<div id="footer">
  <div class="footer_box">
    <div class="list_item">
                <div class="ft_item">
          <ul>
            <li class="item_title">
              <span>Product</span>
              <i class="ft_icon"></i>
            </li>
            <?php $__LfpikBmIEN__ = \addons\cms\model\Channel::getChannelList(["id"=>"son","type"=>"son","condition"=>"1=isnav","typeid"=>"44","cache"=>"0","row"=>"20"]); if(is_array($__LfpikBmIEN__) || $__LfpikBmIEN__ instanceof \think\Collection || $__LfpikBmIEN__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__LfpikBmIEN__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$son): $mod = ($i % 2 );++$i;?>
            <li class="item_content"><a href="<?php echo $son['url']; ?>" title="<?php echo $son['name']; ?>"><?php echo $son['name']; ?></a></li>
            <?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__LfpikBmIEN__; ?>
                        </ul>
        </div>
                <div class="ft_item">
          <ul>
            <li class="item_title">
              <span>About Us</span>
              <i class="ft_icon"></i>
            </li>
            <?php $__ZwAQt2ERv8__ = \addons\cms\model\Channel::getChannelList(["id"=>"son","type"=>"son","condition"=>"1=isnav","typeid"=>"36","cache"=>"0","row"=>"20"]); if(is_array($__ZwAQt2ERv8__) || $__ZwAQt2ERv8__ instanceof \think\Collection || $__ZwAQt2ERv8__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__ZwAQt2ERv8__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$son): $mod = ($i % 2 );++$i;?>
            <li class="item_content"><a href="<?php echo $son['url']; ?>" title="<?php echo $son['name']; ?>"><?php echo $son['name']; ?></a></li>
            <?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__ZwAQt2ERv8__; ?>
                        </ul>
        </div>
                <div class="ft_item">
          <ul>
            <li class="item_title">
              <span>News</span>
              <i class="ft_icon"></i>
            </li>
            <?php $__wDYEos8lTi__ = \addons\cms\model\Archives::getArchivesList(["id"=>"new","channel"=>"66","flag"=>"index","orderby"=>"weigh","orderway"=>"desc","row"=>"20","addon"=>"content"]); if(is_array($__wDYEos8lTi__) || $__wDYEos8lTi__ instanceof \think\Collection || $__wDYEos8lTi__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__wDYEos8lTi__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$new): $mod = ($i % 2 );++$i;?>}
              <li class="item_content"><a href="{new.url}" title="<?php echo $new['title']; ?>"><?php echo $new['title']; ?></a></li>
            <?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__wDYEos8lTi__; ?>
                        </ul>
        </div>
              <div class="ft_item">
        <ul>
          <li class="item_title">
            <span>Follow us</span>
            <i class="ft_icon"></i>
          </li>
          <li class="item_content">
            <a href="/"></a><div class="share foot_share foot_share_type_1"><a href="/"></a>
            <?php $__TApU0NGz32__ = \addons\cms\model\Block::getBlockList(["id"=>"block","name"=>"FollowUs","orderby"=>"weigh","orderway"=>"asc"]); if(is_array($__TApU0NGz32__) || $__TApU0NGz32__ instanceof \think\Collection || $__TApU0NGz32__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__TApU0NGz32__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$block): $mod = ($i % 2 );++$i;?>
              <a href="<?php echo $block['url']; ?>" target="_blank" class="foot_share_box <?php echo $block['title']; ?>"></a>
            <?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__TApU0NGz32__; ?>
            </div></li>
        </ul>
      </div>
    </div>
    <div class="clear"></div>
          <div class="footer_bottom_text">
      <!-- <div class="left_text">Copyright ©2009-2021 Shenzhen IWOWN Technology Co. ,Ltd. All Rights Reserved. <a href="https://beian.miit.gov.cn/#/Integrated/index" target="_blank" rel="nofollow">粤ICP备14068344号-4</a></div> -->
      <div class="left_text"><?php echo $site['beian']; ?></div>
      <div class="right_text">
        <?php $__QKMvNmSp98__ = \addons\cms\model\Channel::getChannelList(["id"=>"nav1","type"=>"top","cache"=>"0","condition"=>"1=isnav","row"=>"20","orderby"=>"weigh","orderway"=>"desc"]); if(is_array($__QKMvNmSp98__) || $__QKMvNmSp98__ instanceof \think\Collection || $__QKMvNmSp98__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__QKMvNmSp98__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$nav1): $mod = ($i % 2 );++$i;?>
          <span><a href="<?php echo $nav1['url']; ?>" title="<?php echo $nav1['name']; ?>"><?php echo $nav1['name']; ?></a></span>
        <?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__QKMvNmSp98__; ?>
                </div>
    </div>
  </div>
</div>
<div align="center"><script type="text/javascript" src="/template/default2/js/analytics.js?v=<?php echo $site['version']; ?>" async=""></script><!--!‬‏‪‭‫‬‫‭‪‫‬‪‫‬‫‬‏‭‭‫‪‬‏‪--></div>	<div id="chat_window">
<div class="chat_box is_respon ">
  <div class="box trans_05">
     <div class="box_area">
          </div>
    <span class="chat_close"></span>
  </div>
  <div class="chat_box_menu">
          <a href="javascript:;" id="go_top" class="top trans_05"></a>
  </div>
</div>
</div>
</body></html>