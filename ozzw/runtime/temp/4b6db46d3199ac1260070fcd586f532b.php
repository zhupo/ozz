<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:68:"/www/wwwroot/ozzsmart.com.au/addons/cms/view/default1/show_News.html";i:1662717764;s:69:"/www/wwwroot/ozzsmart.com.au/addons/cms/view/default1/common/top.html";i:1669551848;s:69:"/www/wwwroot/ozzsmart.com.au/addons/cms/view/default1/common/mbx.html";i:1669551797;s:70:"/www/wwwroot/ozzsmart.com.au/addons/cms/view/default1/common/foot.html";i:1669543029;}*/ ?>
<!DOCTYPE html>
<html id="html<?php echo $__CHANNEL__['id']; ?>">
<head>
    
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1,minimum-scale=1.0,maximum-scale=1.0">   
<?php if(empty($__CHANNEL__) AND empty($__ARCHIVES__) AND empty($__PAGE__)): ?>
<title><?php echo $site['name']; ?></title>
<meta name="keywords" content="<?php echo $site['keywords']; ?>" />
<meta name="description" content="<?php echo $site['description']; ?>" />
<?php else: ?>
<title><?php echo \think\Config::get("cms.title"); ?>-<?php echo $site['name']; ?></title>
<meta name="keywords" content="<?php echo \think\Config::get("cms.keywords"); ?>" />
<meta name="description" content="<?php echo \think\Config::get("cms.description"); ?>" />
<?php endif; ?>
<!-- link -->
<link rel="stylesheet" type="text/css" href="https://at.alicdn.com/t/c/font_601403_7woby5vkd3i.css">
<link rel="stylesheet" ype="text/css" href="/template/default1/css/common.css?v=<?php echo $site['version']; ?>">
<link rel="stylesheet" type="text/css"media="screen and (min-width:1200px)" href="/template/default1/css/pc.css?v=<?php echo $site['version']; ?>">
<link rel="stylesheet" type="text/css" media="screen and (max-width:1199px)" href="/template/default1/css/wap.css?v=<?php echo $site['version']; ?>">
<!-- link -->
<!-- script -->
<script type="text/javascript" src="/template/default1/js/jquery.js?v=<?php echo $site['version']; ?>"></script>
<script type="text/javascript" src="/template/default1/js/img.js?v=<?php echo $site['version']; ?>"></script>
<script type="text/javascript" src="/template/default1/js/easyzoom.js?v=<?php echo $site['version']; ?>"></script>
<script type="text/javascript" src="/template/default1/js/swiper.js?v=<?php echo $site['version']; ?>"></script>
<!-- script --> 
</head>
<body class="<?php if($_SERVER['REQUEST_URI'] != '/'): ?>content<?php endif; ?>" <?php if($_SERVER['REQUEST_URI'] != '/'): ?>style="background-image: url(<?php echo $__CHANNEL__['lmbj']; ?>);"<?php endif; ?>>
    
    
<?php if(in_array(($site['head']), explode(',',"1"))): ?>
<div class="indexNav" id="indexNav">
     <div class="indexheadbj">
        <div class="box indexhead">
                <div class="indexheadL">Welcome to <?php echo $site['name']; ?></div>
                <div class="indexheaR">
               <?php $__AFWiJqk6K2__ = \addons\cms\model\Block::getBlockList(["id"=>"block","name"=>"contact","orderby"=>"weigh","orderway"=>"desc","condition"=>"1=foottop"]); if(is_array($__AFWiJqk6K2__) || $__AFWiJqk6K2__ instanceof \think\Collection || $__AFWiJqk6K2__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__AFWiJqk6K2__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$block): $mod = ($i % 2 );++$i;?> 
                    <p><a href="<?php echo $block['url']; ?>" title=""><span><i class="ico <?php echo $block['image']; ?>"></i></span> <?php echo $block['title']; ?> : <?php echo str_replace(["<p>","</p>"], "", $block['content']); ?></a></p>
               <?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__AFWiJqk6K2__; ?>
               </div>
        </div>
    </div>
    
    <div class="indexNavNr box">
        <a class="logo" href="/">
         <?php if(!(empty($site['logo']) || (($site['logo'] instanceof \think\Collection || $site['logo'] instanceof \think\Paginator ) && $site['logo']->isEmpty()))): ?><img class="logo1" src="<?php echo $site['logo']; ?>"><?php endif; if(!(empty($site['logo2']) || (($site['logo2'] instanceof \think\Collection || $site['logo2'] instanceof \think\Paginator ) && $site['logo2']->isEmpty()))): ?><img class="logo2" src="<?php echo $site['logo2']; ?>"><?php endif; ?>
         <h1><?php echo $site['logotxt']; ?></h1>
         
        </a>
        
        <div class="indexNavNrRight">
        <div class="navA">   
            <ul class="qc" id="nav">
            <?php $__yIZB6lKoNM__ = \addons\cms\model\Channel::getChannelList(["id"=>"nav","type"=>"top","cache"=>"0","condition"=>"1=isnav","row"=>"20"]); if(is_array($__yIZB6lKoNM__) || $__yIZB6lKoNM__ instanceof \think\Collection || $__yIZB6lKoNM__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__yIZB6lKoNM__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$nav): $mod = ($i % 2 );++$i;?>
                <li>
                    <a class="<?php if($nav->is_active): ?>this<?php endif; ?>" <?php if($nav['href'] == 0): ?>href="<?php echo $nav['url']; ?>"<?php endif; if($nav['target'] == 1): ?>target="_blank"<?php endif; ?>><?php echo $nav['name']; ?></a>
                    <?php if($nav['has_child']): ?>
                    <ul>
                       
                        <?php $__dRjDpigbEL__ = \addons\cms\model\Archives::getArchivesList(["id"=>"navshow","channel"=>$nav['id'],"orderby"=>"weigh","orderway"=>"desc","flag"=>"top","row"=>"20"]); if(is_array($__dRjDpigbEL__) || $__dRjDpigbEL__ instanceof \think\Collection || $__dRjDpigbEL__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__dRjDpigbEL__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$navshow): $mod = ($i % 2 );++$i;?>
                        <li><a  href="<?php echo $navshow['url']; ?>" title="<?php echo $navshow['title']; ?>"><?php echo $navshow['title']; ?></a></li>
                        <?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__dRjDpigbEL__; $__e013qKZIkn__ = \addons\cms\model\Channel::getChannelList(["id"=>"son","type"=>"son","condition"=>"1=isnav","typeid"=>$nav['id'],"cache"=>"0","row"=>"20"]); if(is_array($__e013qKZIkn__) || $__e013qKZIkn__ instanceof \think\Collection || $__e013qKZIkn__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__e013qKZIkn__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$son): $mod = ($i % 2 );++$i;?>
                           
                            <li><a class="<?php if($son->is_active): ?>this<?php endif; ?>" <?php if($son['href'] == 0): ?>href="<?php echo $son['url']; ?>"<?php endif; ?>><?php echo $son['name']; ?></a>
                                 <?php if($son['has_child']): ?>
                                 <ul>
                                    <?php $__KxDeXMYF3r__ = \addons\cms\model\Channel::getChannelList(["id"=>"sons","condition"=>"1=isnav","type"=>"son","typeid"=>$son['id'],"cache"=>"0"]); if(is_array($__KxDeXMYF3r__) || $__KxDeXMYF3r__ instanceof \think\Collection || $__KxDeXMYF3r__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__KxDeXMYF3r__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$sons): $mod = ($i % 2 );++$i;?>
                                    <li><a class="<?php if($sons->is_active): ?>this<?php endif; ?>"  href="<?php echo $sons['url']; ?>"><?php echo $sons['name']; ?></a></li>
                                    <?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__KxDeXMYF3r__; ?>
                                </ul>
                                <?php endif; ?>
                            </li>
                           
                        <?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__e013qKZIkn__; ?>
                    </ul>
                    <?php else: ?>
                    <ul>
                        <?php $__PLbeCK092m__ = \addons\cms\model\Archives::getArchivesList(["id"=>"navshow","channel"=>$nav['id'],"orderby"=>"weigh","orderway"=>"desc","flag"=>"top","row"=>"20"]); if(is_array($__PLbeCK092m__) || $__PLbeCK092m__ instanceof \think\Collection || $__PLbeCK092m__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__PLbeCK092m__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$navshow): $mod = ($i % 2 );++$i;?>
                        <li><a href="<?php echo $navshow['url']; ?>" title="<?php echo $navshow['title']; ?>"><?php echo $navshow['title']; ?></a></li>
                        <?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__PLbeCK092m__; ?>
                    </ul>
                   <?php endif; ?>
               </li>
            <?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__yIZB6lKoNM__; ?>
            </ul>
        </div> 
        
         <?php if(in_array(($site['indexcp']), explode(',',"1"))): ?>
        <a class="CartIco" href="/Cart.html"><i class="ico icon-gouwuche"></i><em>0</em></a>
        <?php endif; if(is_array($site['languages']) || $site['languages'] instanceof \think\Collection || $site['languages'] instanceof \think\Paginator): $i = 0; $__LIST__ = $site['languages'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
        <a class="RequestAQuote" href="<?php echo $item; ?>"><i class="ico icon-dianhuatianchong"></i> <?php echo $key; ?></a>    
        <?php endforeach; endif; else: echo "" ;endif; if(in_array(($site['sousuo']), explode(',',"1"))): ?>  
        <div class="sousuoA">
            <!--  <form action="/s.html" method="post">-->
            <!--    <input autocomplete = "off" class="form-control" name="q" data-suggestion-url="/addons/cms/search/suggestion.html" type="text" value="" placeholder="Search">-->
            <!--    <button class="ico icon-sousuo1"></button>-->
            <!--</form>-->
                <form action="/Products.html">
                    <input placeholder="Search"  name="title" <?php if(!empty($v)): ?>value="<?php echo $v; ?>"<?php endif; ?>></input>
                    <button><i class="ico icon-sousuo1"></i></button>
                </form>
        </div>
        <?php endif; if(in_array(($site['language']), explode(',',"1"))): ?>   
            <select onchange="doGTranslate(this);">
                <option value="">Select Language</option>
                <option value="en|zh-CN">Chinese Simplified</option>
                <option value="en|en">English</option>
            </select>
            <div id="google_translate_element2"></div>
            <script type="text/javascript">
            function googleTranslateElementInit2() {new google.translate.TranslateElement({pageLanguage: 'en',autoDisplay: false}, 'google_translate_element2');}
            </script><script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit2"></script>
            <style type="text/css">
            #SelectLanguage{       margin-left: 20px;}
            #goog-gt-tt {display:none !important;}
            .goog-te-banner-frame {display:none !important;}
            .goog-te-menu-value:hover {text-decoration:none !important;}
            body {top:0 !important;}
            #google_translate_element2 {display:none!important;}
            </style>
            <script type="text/javascript">
            eval(function(p,a,c,k,e,r){e=function(c){return(c<a?'':e(parseInt(c/a)))+((c=c%a)>35?String.fromCharCode(c+29):c.toString(36))};if(!''.replace(/^/,String)){while(c--)r[e(c)]=k[c]||e(c);k=[function(e){return r[e]}];e=function(){return'\\w+'};c=1};while(c--)if(k[c])p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c]);return p}('6 7(a,b){n{4(2.9){3 c=2.9("o");c.p(b,f,f);a.q(c)}g{3 c=2.r();a.s(\'t\'+b,c)}}u(e){}}6 h(a){4(a.8)a=a.8;4(a==\'\')v;3 b=a.w(\'|\')[1];3 c;3 d=2.x(\'y\');z(3 i=0;i<d.5;i++)4(d[i].A==\'B-C-D\')c=d[i];4(2.j(\'k\')==E||2.j(\'k\').l.5==0||c.5==0||c.l.5==0){F(6(){h(a)},G)}g{c.8=b;7(c,\'m\');7(c,\'m\')}}',43,43,'||document|var|if|length|function|GTranslateFireEvent|value|createEvent||||||true|else|doGTranslate||getElementById|google_translate_element2|innerHTML|change|try|HTMLEvents|initEvent|dispatchEvent|createEventObject|fireEvent|on|catch|return|split|getElementsByTagName|select|for|className|goog|te|combo|null|setTimeout|500'.split('|'),0,{}))
            </script>
            <?php endif; ?>
            
          
        
        
       </div>
   </div>
</div>
<?php endif; if(in_array(($site['head']), explode(',',"2"))): ?>
<div class="indexNavC" id="indexNav">
    <div class="headC box">
        <div class="headCNr"> 
            <a class="headCNrlogo" href="/">
             <?php if(!(empty($site['logo']) || (($site['logo'] instanceof \think\Collection || $site['logo'] instanceof \think\Paginator ) && $site['logo']->isEmpty()))): ?><img class="logo1" src="<?php echo $site['logo']; ?>"><?php endif; if(!(empty($site['logo2']) || (($site['logo2'] instanceof \think\Collection || $site['logo2'] instanceof \think\Paginator ) && $site['logo2']->isEmpty()))): ?><img class="logo2" src="<?php echo $site['logo2']; ?>"><?php endif; ?>
             <h1><?php echo $site['logotxt']; ?></h1>
            </a>
             <?php if(in_array(($site['sousuo']), explode(',',"1"))): ?>  
                    <div class="sousuonr">
                           <form action="/s.html" method="post">
                                <input autocomplete = "off" class="form-control" name="q" data-suggestion-url="/addons/cms/search/suggestion.html" type="text" value="" placeholder="Search">
                                <button class="ico icon-sousuo1"></button>
                            </form>
                            <!--<form action="/buy.html">-->
                            <!--        <input placeholder="Search"  name="title" <?php if(!empty($v)): ?>value="<?php echo $v; ?>"<?php endif; ?>></input>-->
                            <!--        <button><i class="ico icon-sousuo1"></i></button>-->
                            <!--    </form>-->
                    </div>
              <?php endif; ?>
            <div class="headCRight">
                 <div class="headEr">
                        <i class="ico icon-dianhua5"></i>
                        <p>
                            <?php $__t8ioWbPmZf__ = \addons\cms\model\Block::getBlockList(["id"=>"block","name"=>"contact","orderby"=>"weigh","orderway"=>"desc","condition"=>"1=foottop"]); if(is_array($__t8ioWbPmZf__) || $__t8ioWbPmZf__ instanceof \think\Collection || $__t8ioWbPmZf__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__t8ioWbPmZf__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$block): $mod = ($i % 2 );++$i;?> 
                            <a><?php echo $block['title']; ?> : <?php echo str_replace(["<p>","</p>"], "", $block['content']); ?></a>
                            <?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__t8ioWbPmZf__; ?>
                        </p>
                     
               
                 </div>
                  
            </div>
        </div>   
    </div>


 <div class="indexNavNrC">
   <div class="box indexNavNrCBox">
    <ul class="qc" id="navC">
    <?php $__k32qIhbret__ = \addons\cms\model\Channel::getChannelList(["id"=>"nav","type"=>"top","cache"=>"0","condition"=>"1=isnav","row"=>"20"]); if(is_array($__k32qIhbret__) || $__k32qIhbret__ instanceof \think\Collection || $__k32qIhbret__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__k32qIhbret__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$nav): $mod = ($i % 2 );++$i;?>
        <li>
            <a class="<?php if($nav->is_active): ?>this<?php endif; ?>" <?php if($nav['href'] == 0): ?>href="<?php echo $nav['url']; ?>"<?php endif; ?>><?php echo $nav['name']; ?></a>
            <?php if($nav['has_child']): ?>
            <ul>
               
                <?php $__cui5BgJNmD__ = \addons\cms\model\Archives::getArchivesList(["id"=>"navshow","channel"=>$nav['id'],"orderby"=>"weigh","orderway"=>"desc","flag"=>"top","row"=>"20"]); if(is_array($__cui5BgJNmD__) || $__cui5BgJNmD__ instanceof \think\Collection || $__cui5BgJNmD__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__cui5BgJNmD__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$navshow): $mod = ($i % 2 );++$i;?>
                <li><a href="<?php echo $navshow['url']; ?>" title="<?php echo $navshow['title']; ?>"><?php echo $navshow['title']; ?></a></li>
                <?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__cui5BgJNmD__; $__CaU9AH7vpg__ = \addons\cms\model\Channel::getChannelList(["id"=>"son","type"=>"son","condition"=>"1=isnav","typeid"=>$nav['id'],"cache"=>"0","row"=>"20"]); if(is_array($__CaU9AH7vpg__) || $__CaU9AH7vpg__ instanceof \think\Collection || $__CaU9AH7vpg__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__CaU9AH7vpg__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$son): $mod = ($i % 2 );++$i;?>
                   
                    <li><a class="<?php if($son->is_active): ?>this<?php endif; ?>"  <?php if($son['href'] == 0): ?>href="<?php echo $son['url']; ?>"<?php endif; ?>><?php echo $son['name']; ?></a>
                         <?php if($son['has_child']): ?>
                         <ul>
                            <?php $__hReAikNYEx__ = \addons\cms\model\Channel::getChannelList(["id"=>"sons","condition"=>"1=isnav","type"=>"son","typeid"=>$son['id'],"cache"=>"0","row"=>"20"]); if(is_array($__hReAikNYEx__) || $__hReAikNYEx__ instanceof \think\Collection || $__hReAikNYEx__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__hReAikNYEx__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$sons): $mod = ($i % 2 );++$i;?>
                            <li><a class="<?php if($sons->is_active): ?>this<?php endif; ?>"  href="<?php echo $sons['url']; ?>"><?php echo $sons['name']; ?></a></li>
                            <?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__hReAikNYEx__; ?>
                        </ul>
                        <?php endif; ?>
                    </li>
                   
                <?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__CaU9AH7vpg__; ?>
            </ul>
            <?php else: ?>
            <ul>
                <?php $__CjkI56VMGO__ = \addons\cms\model\Archives::getArchivesList(["id"=>"navshow","channel"=>$nav['id'],"orderby"=>"weigh","orderway"=>"desc","flag"=>"top","row"=>"20"]); if(is_array($__CjkI56VMGO__) || $__CjkI56VMGO__ instanceof \think\Collection || $__CjkI56VMGO__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__CjkI56VMGO__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$navshow): $mod = ($i % 2 );++$i;?>
                <li><a  href="<?php echo $navshow['url']; ?>" title="<?php echo $navshow['title']; ?>"><?php echo $navshow['title']; ?></a></li>
                <?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__CjkI56VMGO__; ?>
            </ul>
           <?php endif; ?>
        </li>
    <?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__k32qIhbret__; ?>
    </ul>
 
  
  <?php if(in_array(($site['indexcp']), explode(',',"1"))): ?>
                <a class="CartIco" href="/Cart.html"><i class="ico icon-gouwuche"></i><em>0</em></a>
   <?php endif; ?> 
   </div>
    </div>
</div>
<?php endif; ?>  

 


<!-- wapNav -->
<div class='WapHead'>
    <!--<a onclick="window.history.go(-1)" class="backtrack"><i class="ico icon-10qiehuanqizuo"></i></a>-->
    <a class="WapLogo" href="/">
    <?php if(!(empty($site['logo']) || (($site['logo'] instanceof \think\Collection || $site['logo'] instanceof \think\Paginator ) && $site['logo']->isEmpty()))): ?><img src="<?php echo $site['logo']; ?>"><?php endif; ?>
    <?php echo $site['logotxt']; ?> 
    </a>
    <i class='ico menu icon-webicon03'></i>
</div>
<div class='WapNav'>
    <ul class="qc">
    <?php $__xHADdSupO8__ = \addons\cms\model\Channel::getChannelList(["id"=>"nav","type"=>"top","cache"=>"0","condition"=>"1=isnav","row"=>"20"]); if(is_array($__xHADdSupO8__) || $__xHADdSupO8__ instanceof \think\Collection || $__xHADdSupO8__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__xHADdSupO8__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$nav): $mod = ($i % 2 );++$i;?>
        <li>
            <a class="<?php if($nav->is_active): ?>this<?php endif; ?>" <?php if($nav['href'] == 0): ?>href="<?php echo $nav['url']; ?>"<?php endif; if($nav['target'] == 1): ?>target="_blank"<?php endif; ?>><?php echo $nav['name']; ?></a>
            <?php if($nav['has_child']): ?>
            <ul>
                <?php $__iJVgjR0h4A__ = \addons\cms\model\Archives::getArchivesList(["id"=>"navshow","channel"=>$nav['id'],"orderby"=>"weigh","orderway"=>"desc","flag"=>"top","row"=>"20"]); if(is_array($__iJVgjR0h4A__) || $__iJVgjR0h4A__ instanceof \think\Collection || $__iJVgjR0h4A__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__iJVgjR0h4A__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$navshow): $mod = ($i % 2 );++$i;?>
                <li><a href="<?php echo $navshow['url']; ?>" title="<?php echo $navshow['title']; ?>"><?php echo $navshow['title']; ?></a></li>
                <?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__iJVgjR0h4A__; $__r92cdiyhBV__ = \addons\cms\model\Channel::getChannelList(["id"=>"son","type"=>"son","typeid"=>$nav['id'],"cache"=>"0","condition"=>"1=isnav","row"=>"20"]); if(is_array($__r92cdiyhBV__) || $__r92cdiyhBV__ instanceof \think\Collection || $__r92cdiyhBV__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__r92cdiyhBV__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$son): $mod = ($i % 2 );++$i;?>
               
                <li><a class="<?php if($son->is_active): ?>this<?php endif; ?>"  <?php if($son['href'] == 0): ?>href="<?php echo $son['url']; ?>"<?php endif; ?>><?php echo $son['name']; ?></a>
                    <?php if($son['has_child']): ?>
                    <ul>
                        <?php $__3WPozVpSKh__ = \addons\cms\model\Channel::getChannelList(["id"=>"sons","type"=>"son","typeid"=>$son['id'],"cache"=>"0","condition"=>"1=isnav","row"=>"20"]); if(is_array($__3WPozVpSKh__) || $__3WPozVpSKh__ instanceof \think\Collection || $__3WPozVpSKh__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__3WPozVpSKh__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$sons): $mod = ($i % 2 );++$i;?>
                        <li><a class="<?php if($sons->is_active): ?>this<?php endif; ?>"  href="<?php echo $sons['url']; ?>"><?php echo $sons['name']; ?></a></li>
                        <?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__3WPozVpSKh__; ?>
                    </ul>
                    <?php endif; ?>
                </li>
               
                <?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__r92cdiyhBV__; ?>
               
            </ul>
             <?php else: ?>
            <ul>
                <?php $__btm3lpqWMv__ = \addons\cms\model\Archives::getArchivesList(["id"=>"navshow","channel"=>$nav['id'],"orderby"=>"weigh","orderway"=>"desc","flag"=>"top","row"=>"20"]); if(is_array($__btm3lpqWMv__) || $__btm3lpqWMv__ instanceof \think\Collection || $__btm3lpqWMv__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__btm3lpqWMv__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$navshow): $mod = ($i % 2 );++$i;?>
                <li><a href="<?php echo $navshow['url']; ?>" title="<?php echo $navshow['title']; ?>"><?php echo $navshow['title']; ?></a></li>
                <?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__btm3lpqWMv__; ?>
            </ul>
            
            <?php endif; ?>
        </li>
    <?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__xHADdSupO8__; ?>
    </ul> 
    <?php if(in_array(($site['sousuo']), explode(',',"1"))): ?>  
    <div class="sousuonr">
          <form action="/s.html" method="post">
                <input autocomplete = "off" class="form-control" name="q" data-suggestion-url="/addons/cms/search/suggestion.html" type="text" value="" placeholder="Search">
                <button class="ico icon-icon-test"></button>
            </form>
    </div>
    <?php endif; if(in_array(($site['language']), explode(',',"1"))): ?>   
            <select onchange="doGTranslate(this);">
                <option value="">Select Language</option>
                <option value="en|zh-CN">Chinese Simplified</option>
                <option value="en|en">English</option>
            </select>
            <div id="google_translate_element2"></div>
            <script type="text/javascript">
            function googleTranslateElementInit2() {new google.translate.TranslateElement({pageLanguage: 'en',autoDisplay: false}, 'google_translate_element2');}
            </script><script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit2"></script>
            <style type="text/css">
            #SelectLanguage{       margin-left: 20px;}
            #goog-gt-tt {display:none !important;}
            .goog-te-banner-frame {display:none !important;}
            .goog-te-menu-value:hover {text-decoration:none !important;}
            body {top:0 !important;}
            #google_translate_element2 {display:none!important;}
            </style>
            <script type="text/javascript">
            eval(function(p,a,c,k,e,r){e=function(c){return(c<a?'':e(parseInt(c/a)))+((c=c%a)>35?String.fromCharCode(c+29):c.toString(36))};if(!''.replace(/^/,String)){while(c--)r[e(c)]=k[c]||e(c);k=[function(e){return r[e]}];e=function(){return'\\w+'};c=1};while(c--)if(k[c])p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c]);return p}('6 7(a,b){n{4(2.9){3 c=2.9("o");c.p(b,f,f);a.q(c)}g{3 c=2.r();a.s(\'t\'+b,c)}}u(e){}}6 h(a){4(a.8)a=a.8;4(a==\'\')v;3 b=a.w(\'|\')[1];3 c;3 d=2.x(\'y\');z(3 i=0;i<d.5;i++)4(d[i].A==\'B-C-D\')c=d[i];4(2.j(\'k\')==E||2.j(\'k\').l.5==0||c.5==0||c.l.5==0){F(6(){h(a)},G)}g{c.8=b;7(c,\'m\');7(c,\'m\')}}',43,43,'||document|var|if|length|function|GTranslateFireEvent|value|createEvent||||||true|else|doGTranslate||getElementById|google_translate_element2|innerHTML|change|try|HTMLEvents|initEvent|dispatchEvent|createEventObject|fireEvent|on|catch|return|split|getElementsByTagName|select|for|className|goog|te|combo|null|setTimeout|500'.split('|'),0,{}))
            </script>
            <?php endif; ?>

     
</div>
<!-- wapNav -->
<div class="lanmubanner qc">
    <img src="<?php echo $__CHANNEL__['image']; ?>" alt="<?php echo $__CHANNEL__['name']; ?>">
 	<div class="lanmubannerTxt">
		 	<div class="box">
		 		<h2><?php echo $__CHANNEL__['name']; ?></h2>
		 		    
                  
                        <div class="Breadcrumbs">
                        <?php $__JWYkMDz9Lb__ = \addons\cms\model\Channel::getBreadcrumb($__CHANNEL__??[], $__ARCHIVES__??[], $__TAGS__??[], $__PAGE__??[], $__DIYFORM__??[]); if(is_array($__JWYkMDz9Lb__) || $__JWYkMDz9Lb__ instanceof \think\Collection || $__JWYkMDz9Lb__ instanceof \think\Paginator): $k = 0; $__LIST__ = $__JWYkMDz9Lb__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($k % 2 );++$k;if($k>1): ?> - <?php endif; ?><a title="<?php echo $item['name']; ?>" href="<?php echo $item['url']; ?>"><?php echo $item['name']; ?></a>
        				<?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__JWYkMDz9Lb__; ?>
        				</div>
                 
                    
		 	</div>
	</div>
</div>
 
 
<div class="NewsBJ">
    <div class="box News">
        <div class="NewsLeft"> 
        <h1><?php echo $__ARCHIVES__['title']; ?></h1>
         <div class="Newstime"><?php echo date('Y-m-d', $__ARCHIVES__['publishtime']); ?></div>
          <div class="BJQ">
              <?php echo $__ARCHIVES__['content']; ?>
          </div>
          <div class="fenye">
		    <?php $prev = \addons\cms\model\Archives::getPrevNext(["id"=>"prev","type"=>"prev","archives"=>$__ARCHIVES__['id'],"channel"=>$__CHANNEL__['id']]);if($prev): ?>
            <a href="<?php echo $prev['url']; ?>" class="fl"><?php echo $prev['title']; ?></a>
            <?php else:endif;$next = \addons\cms\model\Archives::getPrevNext(["id"=>"next","type"=>"next","archives"=>$__ARCHIVES__['id'],"channel"=>$__CHANNEL__['id']]);if($next): ?>
            <a href="<?php echo $next['url']; ?>" class="fr"><?php echo $next['title']; ?></a>
            <?php else:endif;?>
	    </div>
	   </div>
	   
	   <div class="NewsRight">
	       <h2>Related</h2>
	        <?php $__QE9nil6V0U__ = \addons\cms\model\Archives::getArchivesList(["id"=>"item","row"=>"6","channel"=>$__CHANNEL__['id'],"orderby"=>"weigh","orderway"=>"desc","cache"=>"0","condition"=>"`id` != $__ARCHIVES__->id"]); if(is_array($__QE9nil6V0U__) || $__QE9nil6V0U__ instanceof \think\Collection || $__QE9nil6V0U__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__QE9nil6V0U__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?> 
	        <a href="<?php echo $item['url']; ?>">
	            <img src="<?php echo $item['image']; ?>">
	            <div class="NewsRightTxt">
	                <h3><?php echo $item['title']; ?></h3>
	                <p><?php echo date('M-d-Y', $item['publishtime']); ?></p>
	            </div>
	        </a>
            <?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__QE9nil6V0U__; ?>  
       </div>
    </div>

</div>
<div class="footA"<?php if(!(empty($site['footimg']) || (($site['footimg'] instanceof \think\Collection || $site['footimg'] instanceof \think\Paginator ) && $site['footimg']->isEmpty()))): ?>style="background-image: url(<?php echo $site['footimg']; ?>);"<?php endif; ?>>
       <div class="footHead">
    		<div class="footHeadNr box">
    			<em>BE IN TOUCH WITH US:</em>
    		    <?php if(!(empty($site['tell']) || (($site['tell'] instanceof \think\Collection || $site['tell'] instanceof \think\Paginator ) && $site['tell']->isEmpty()))): ?>
                 <a href="Tel:<?php echo $site['tell']; ?>"><?php echo $site['tell']; ?></a>
                <?php endif; if(!(empty($site['emaill']) || (($site['emaill'] instanceof \think\Collection || $site['emaill'] instanceof \think\Paginator ) && $site['emaill']->isEmpty()))): ?>
    		    <a href="Tel:<?php echo $site['emaill']; ?>"><?php echo $site['emaill']; ?></a>
    		    <?php endif; ?>
    		</div>
	    </div>
	    
          <div class="box">
             <div class="footBNr">
                <!--公司介绍 -->
                 <div class="footAA">
                    <h4>About us</h4>
                     <?php if(!(empty($site['logo']) || (($site['logo'] instanceof \think\Collection || $site['logo'] instanceof \think\Paginator ) && $site['logo']->isEmpty()))): ?><img  src="<?php echo $site['logo']; ?>"><?php endif; ?>
                     <p><?php echo $site['description']; ?></p>
                    <div class="copyrightLeft">
                    <a href=""><?php echo $site['beian']; if(!(empty($site['abn']) || (($site['abn'] instanceof \think\Collection || $site['abn'] instanceof \think\Paginator ) && $site['abn']->isEmpty()))): ?><em><?php echo $site['abn']; ?></em><?php endif; ?></a>
                    </div>
                   
                    
            	 </div>
            	 
            	<!--一级菜单 -->
            	<div class="footAB">
        	    <h4>Quick link</h4>
        	    <?php $__WrsnCjHhPw__ = \addons\cms\model\Channel::getChannelList(["id"=>"channel","type"=>"son","condition"=>"1=isnav AND 0=nofoot"]); if(is_array($__WrsnCjHhPw__) || $__WrsnCjHhPw__ instanceof \think\Collection || $__WrsnCjHhPw__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__WrsnCjHhPw__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$channel): $mod = ($i % 2 );++$i;?>
                <a href="<?php echo $channel['url']; ?>" title="<?php echo $channel['name']; ?>"><?php echo $channel['name']; ?></a>
                <?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__WrsnCjHhPw__; ?>
              	</div>
              	
              	
              	
                 <?php if(in_array(($site['indexcp']), explode(',',"1"))): $__RHAcWKpMBh__ = \addons\cms\model\Channel::getChannelList(["id"=>"nav","type"=>"top","condition"=>"1=isnav AND 0=nofoot","cache"=>"0","model"=>"2"]); if(is_array($__RHAcWKpMBh__) || $__RHAcWKpMBh__ instanceof \think\Collection || $__RHAcWKpMBh__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__RHAcWKpMBh__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$nav): $mod = ($i % 2 );++$i;?>
                  	<div class="footAB">
            	    <h4><?php echo $nav['name']; ?></h4>
            	        <?php $__Re8ISBPTfH__ = \addons\cms\model\Channel::getChannelList(["id"=>"channel","type"=>"son","typeid"=>$nav['id'],"cache"=>"0","condition"=>"1=isnav AND 0=nofoot"]); if(is_array($__Re8ISBPTfH__) || $__Re8ISBPTfH__ instanceof \think\Collection || $__Re8ISBPTfH__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__Re8ISBPTfH__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$channel): $mod = ($i % 2 );++$i;?>
                        <a href="<?php echo $channel['url']; ?>" title="<?php echo $channel['name']; ?>"><?php echo $channel['name']; ?></a>
                        <?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__Re8ISBPTfH__; ?>
                    </div>
                  	<?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__RHAcWKpMBh__; endif; if(in_array(($site['indexfw']), explode(',',"1"))): ?> 
            	    <!--服务二级菜单-->
            	    <div class="footAD">
            	    <h4>Services</h4>
            	    <?php $__4kOYc87M2f__ = \addons\cms\model\Archives::getArchivesList(["id"=>"navshow","channel"=>"38","orderby"=>"weigh","orderway"=>"desc","flag"=>"top"]); if(is_array($__4kOYc87M2f__) || $__4kOYc87M2f__ instanceof \think\Collection || $__4kOYc87M2f__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__4kOYc87M2f__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$navshow): $mod = ($i % 2 );++$i;?>
                          <a href="<?php echo $navshow['url']; ?>" title="<?php echo $navshow['title']; ?>"><?php echo $navshow['title']; ?></a>
                    <?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__4kOYc87M2f__; if(in_array(($site['indexfdc']), explode(',',"1"))): ?>   
                        <!--项目-->
                	    <div class="footABNr">
                        <?php $__EYLKFoD738__ = \addons\cms\model\Archives::getArchivesList(["id"=>"navshow","channel"=>"51","orderby"=>"weigh","orderway"=>"desc","flag"=>"top"]); if(is_array($__EYLKFoD738__) || $__EYLKFoD738__ instanceof \think\Collection || $__EYLKFoD738__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__EYLKFoD738__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$navshow): $mod = ($i % 2 );++$i;?>
                              <a href="<?php echo $navshow['url']; ?>" title="<?php echo $navshow['title']; ?>"><img src="<?php echo $navshow['image']; ?>"><h3><?php echo $navshow['title']; ?></h3></a>
                        <?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__EYLKFoD738__; ?>
                		</div> 
                	<?php endif; ?>	
                	</div>
            	<?php endif; ?>	
         
        	    
        	    <!--联系方式-->
            	<div class="footAC">
                    <h4>Contact Us</h4>
                    <ul>
                    <?php $__bKRaDCsQeM__ = \addons\cms\model\Block::getBlockList(["id"=>"block","name"=>"contact","orderby"=>"weigh","orderway"=>"desc","condition"=>"1=sf"]); if(is_array($__bKRaDCsQeM__) || $__bKRaDCsQeM__ instanceof \think\Collection || $__bKRaDCsQeM__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__bKRaDCsQeM__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$block): $mod = ($i % 2 );++$i;?> 
                    <li><span><i class="ico <?php echo $block['image']; ?>"></i></span><p><a href="<?php echo $block['url']; ?>" title=""><?php echo $block['title']; ?> : <?php echo str_replace(["<p>","</p>"], "", $block['content']); ?></a></p></li>
                    <?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__bKRaDCsQeM__; ?>
                    </ul>
                </div>
                 
            </div>
          </div>
          
          <!--版权-->
          <div class="copyright">
            <div class="box">
                  <?php $__fuR70QBYMe__ = \addons\cms\model\Block::getBlockList(["id"=>"block","name"=>"zf","orderby"=>"weigh","orderway"=>"desc"]); if(is_array($__fuR70QBYMe__) || $__fuR70QBYMe__ instanceof \think\Collection || $__fuR70QBYMe__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__fuR70QBYMe__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$block): $mod = ($i % 2 );++$i;?> 
                  <div class="copyrightRight">
                        <?php if(is_array(explode(',',$block['images'])) || explode(',',$block['images']) instanceof \think\Collection || explode(',',$block['images']) instanceof \think\Paginator): $i = 0; $__LIST__ = explode(',',$block['images']);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$image): $mod = ($i % 2 );++$i;?>
                         <a><img src="<?php echo cdnurl($image); ?>"></a>   
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                  </div>
                  <?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__fuR70QBYMe__; ?>  
                <div class="shemei">
    			    <?php $__GfN8y3CDve__ = \addons\cms\model\Block::getBlockList(["id"=>"block","name"=>"sm","orderby"=>"weigh","orderway"=>"desc"]); if(is_array($__GfN8y3CDve__) || $__GfN8y3CDve__ instanceof \think\Collection || $__GfN8y3CDve__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__GfN8y3CDve__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$block): $mod = ($i % 2 );++$i;?>
    				<a href="<?php echo $block['url']; ?>" title="<?php echo $block['title']; ?>" target="_blank"><i class="ico <?php echo $block['image']; ?>"></i></a>
    			    <?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__GfN8y3CDve__; ?> 
			    </div>
            </div>
          </div>
          
 </div>


<script>
 $('#form').submit(function(){
        $.ajax({
            url: "/d/customer/post.html",
            type: "post",
            data: $("#form").serialize(), 
            dataType:'json',
            error:function(){
                alert("The server is busy, please try again later !");
            },
            beforeSend:function(){
              $('.formPoint').show();
            },
            complete:function(xhr){
              $('.formPoint').hide();
                var token = xhr.getResponseHeader('__token__');
                if (token) {
                    $("input[name='__token__']").val(token);
                }
                       
            },
            success:function(data){
               
                if(data.code == 1){
                  alert(data.msg);
                  location.href = "/";
                    (function () {
                        var wait = document.getElementById('Countdown');
                        var interval = setInterval(function () {
                            var time = --wait.innerHTML;
                            if (time <= 0) {
            				// 	location.href = "/";
                                clearInterval(interval);
                            }
                        }, 1000);
                    })();
                }else{
                    alert(data.msg)
                }
            }
        });
    });
</script>
 
 
<script type="text/javascript">
          $('body').append('<div class="formPoint"><div id="loading1"><div class="demo1"></div><div class="demo1"></div><div class="demo1"></div><div class="demo1"></div><div class="demo1"></div></div></div>')
</script> 
 
<script type="text/javascript" src="/template/default1/js/common.js?v=<?php echo $site['version']; ?>"></script>
</body>
</html>

	