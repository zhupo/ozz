<?php if (!defined('THINK_PATH')) exit(); /*a:6:{s:83:"/Users/panliu/Documents/project/ozz/ozzw/addons/cms/view/default1/list_product.html";i:1676704130;s:81:"/Users/panliu/Documents/project/ozz/ozzw/addons/cms/view/default1/common/top.html";i:1676041756;s:81:"/Users/panliu/Documents/project/ozz/ozzw/addons/cms/view/default1/common/mbx.html";i:1669551797;s:82:"/Users/panliu/Documents/project/ozz/ozzw/addons/cms/view/default1/common/left.html";i:1669552454;s:80:"/Users/panliu/Documents/project/ozz/ozzw/addons/cms/view/default1/common/ck.html";i:1669554566;s:82:"/Users/panliu/Documents/project/ozz/ozzw/addons/cms/view/default1/common/foot.html";i:1676704257;}*/ ?>
<!DOCTYPE html>
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
               <?php $__iIQuJNPBXe__ = \addons\cms\model\Block::getBlockList(["id"=>"block","name"=>"contact","orderby"=>"weigh","orderway"=>"desc","condition"=>"1=foottop"]); if(is_array($__iIQuJNPBXe__) || $__iIQuJNPBXe__ instanceof \think\Collection || $__iIQuJNPBXe__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__iIQuJNPBXe__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$block): $mod = ($i % 2 );++$i;?> 
                    <p><a href="<?php echo $block['url']; ?>" title=""><span><i class="ico <?php echo $block['image']; ?>"></i></span> <?php echo $block['title']; ?> : <?php echo str_replace(["<p>","</p>"], "", $block['content']); ?></a></p>
               <?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__iIQuJNPBXe__; ?>
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
            <?php $__EJL3IGUhcg__ = \addons\cms\model\Channel::getChannelList(["id"=>"nav","type"=>"top","cache"=>"0","condition"=>"1=isnav","row"=>"20"]); if(is_array($__EJL3IGUhcg__) || $__EJL3IGUhcg__ instanceof \think\Collection || $__EJL3IGUhcg__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__EJL3IGUhcg__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$nav): $mod = ($i % 2 );++$i;?>
                <li>
                    <a class="<?php if($nav->is_active): ?>this<?php endif; ?>" <?php if($nav['href'] == 0): ?>href="<?php echo $nav['url']; ?>"<?php endif; if($nav['target'] == 1): ?>target="_blank"<?php endif; ?>><?php echo $nav['name']; ?></a>
                    <?php if($nav['has_child']): ?>
                    <ul>
                       
                        <?php $__HR46sA53bt__ = \addons\cms\model\Archives::getArchivesList(["id"=>"navshow","channel"=>$nav['id'],"orderby"=>"weigh","orderway"=>"desc","flag"=>"top","row"=>"20"]); if(is_array($__HR46sA53bt__) || $__HR46sA53bt__ instanceof \think\Collection || $__HR46sA53bt__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__HR46sA53bt__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$navshow): $mod = ($i % 2 );++$i;?>
                        <li><a  href="<?php echo $navshow['url']; ?>" title="<?php echo $navshow['title']; ?>"><?php echo $navshow['title']; ?></a></li>
                        <?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__HR46sA53bt__; $__hQ30kyVAlz__ = \addons\cms\model\Channel::getChannelList(["id"=>"son","type"=>"son","condition"=>"1=isnav","typeid"=>$nav['id'],"cache"=>"0","row"=>"20"]); if(is_array($__hQ30kyVAlz__) || $__hQ30kyVAlz__ instanceof \think\Collection || $__hQ30kyVAlz__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__hQ30kyVAlz__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$son): $mod = ($i % 2 );++$i;?>
                           
                            <li><a class="<?php if($son->is_active): ?>this<?php endif; ?>" <?php if($son['href'] == 0): ?>href="<?php echo $son['url']; ?>"<?php endif; ?>><?php echo $son['name']; ?></a>
                                 <?php if($son['has_child']): ?>
                                 <ul>
                                    <?php $__OGDpTxWer3__ = \addons\cms\model\Channel::getChannelList(["id"=>"sons","condition"=>"1=isnav","type"=>"son","typeid"=>$son['id'],"cache"=>"0"]); if(is_array($__OGDpTxWer3__) || $__OGDpTxWer3__ instanceof \think\Collection || $__OGDpTxWer3__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__OGDpTxWer3__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$sons): $mod = ($i % 2 );++$i;?>
                                    <li><a class="<?php if($sons->is_active): ?>this<?php endif; ?>"  href="<?php echo $sons['url']; ?>"><?php echo $sons['name']; ?></a></li>
                                    <?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__OGDpTxWer3__; ?>
                                </ul>
                                <?php endif; ?>
                            </li>
                           
                        <?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__hQ30kyVAlz__; ?>
                    </ul>
                    <?php else: ?>
                    <ul>
                        <?php $__ILK4uTf10c__ = \addons\cms\model\Archives::getArchivesList(["id"=>"navshow","channel"=>$nav['id'],"orderby"=>"weigh","orderway"=>"desc","flag"=>"top","row"=>"20"]); if(is_array($__ILK4uTf10c__) || $__ILK4uTf10c__ instanceof \think\Collection || $__ILK4uTf10c__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__ILK4uTf10c__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$navshow): $mod = ($i % 2 );++$i;?>
                        <li><a href="<?php echo $navshow['url']; ?>" title="<?php echo $navshow['title']; ?>"><?php echo $navshow['title']; ?></a></li>
                        <?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__ILK4uTf10c__; ?>
                    </ul>
                   <?php endif; ?>
               </li>
            <?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__EJL3IGUhcg__; ?>
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
                            <?php $__ohMib1GIqw__ = \addons\cms\model\Block::getBlockList(["id"=>"block","name"=>"contact","orderby"=>"weigh","orderway"=>"desc","condition"=>"1=foottop"]); if(is_array($__ohMib1GIqw__) || $__ohMib1GIqw__ instanceof \think\Collection || $__ohMib1GIqw__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__ohMib1GIqw__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$block): $mod = ($i % 2 );++$i;?> 
                            <a><?php echo $block['title']; ?> : <?php echo str_replace(["<p>","</p>"], "", $block['content']); ?></a>
                            <?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__ohMib1GIqw__; ?>
                        </p>
                     
               
                 </div>
                  
            </div>
        </div>   
    </div>


 <div class="indexNavNrC">
   <div class="box indexNavNrCBox">
    <ul class="qc" id="navC">
    <?php $__jzUFk3MXPd__ = \addons\cms\model\Channel::getChannelList(["id"=>"nav","type"=>"top","cache"=>"0","condition"=>"1=isnav","row"=>"20"]); if(is_array($__jzUFk3MXPd__) || $__jzUFk3MXPd__ instanceof \think\Collection || $__jzUFk3MXPd__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__jzUFk3MXPd__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$nav): $mod = ($i % 2 );++$i;?>
        <li>
            <a class="<?php if($nav->is_active): ?>this<?php endif; ?>" <?php if($nav['href'] == 0): ?>href="<?php echo $nav['url']; ?>"<?php endif; ?>><?php echo $nav['name']; ?></a>
            <?php if($nav['has_child']): ?>
            <ul>
               
                <?php $__ePjV4J1qtS__ = \addons\cms\model\Archives::getArchivesList(["id"=>"navshow","channel"=>$nav['id'],"orderby"=>"weigh","orderway"=>"desc","flag"=>"top","row"=>"20"]); if(is_array($__ePjV4J1qtS__) || $__ePjV4J1qtS__ instanceof \think\Collection || $__ePjV4J1qtS__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__ePjV4J1qtS__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$navshow): $mod = ($i % 2 );++$i;?>
                <li><a href="<?php echo $navshow['url']; ?>" title="<?php echo $navshow['title']; ?>"><?php echo $navshow['title']; ?></a></li>
                <?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__ePjV4J1qtS__; $__sONp9I8X6l__ = \addons\cms\model\Channel::getChannelList(["id"=>"son","type"=>"son","condition"=>"1=isnav","typeid"=>$nav['id'],"cache"=>"0","row"=>"20"]); if(is_array($__sONp9I8X6l__) || $__sONp9I8X6l__ instanceof \think\Collection || $__sONp9I8X6l__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__sONp9I8X6l__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$son): $mod = ($i % 2 );++$i;?>
                   
                    <li><a class="<?php if($son->is_active): ?>this<?php endif; ?>"  <?php if($son['href'] == 0): ?>href="<?php echo $son['url']; ?>"<?php endif; ?>><?php echo $son['name']; ?></a>
                         <?php if($son['has_child']): ?>
                         <ul>
                            <?php $__s0zPQcBDNL__ = \addons\cms\model\Channel::getChannelList(["id"=>"sons","condition"=>"1=isnav","type"=>"son","typeid"=>$son['id'],"cache"=>"0","row"=>"20"]); if(is_array($__s0zPQcBDNL__) || $__s0zPQcBDNL__ instanceof \think\Collection || $__s0zPQcBDNL__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__s0zPQcBDNL__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$sons): $mod = ($i % 2 );++$i;?>
                            <li><a class="<?php if($sons->is_active): ?>this<?php endif; ?>"  href="<?php echo $sons['url']; ?>"><?php echo $sons['name']; ?></a></li>
                            <?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__s0zPQcBDNL__; ?>
                        </ul>
                        <?php endif; ?>
                    </li>
                   
                <?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__sONp9I8X6l__; ?>
            </ul>
            <?php else: ?>
            <ul>
                <?php $__NYZmp8BOwA__ = \addons\cms\model\Archives::getArchivesList(["id"=>"navshow","channel"=>$nav['id'],"orderby"=>"weigh","orderway"=>"desc","flag"=>"top","row"=>"20"]); if(is_array($__NYZmp8BOwA__) || $__NYZmp8BOwA__ instanceof \think\Collection || $__NYZmp8BOwA__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__NYZmp8BOwA__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$navshow): $mod = ($i % 2 );++$i;?>
                <li><a  href="<?php echo $navshow['url']; ?>" title="<?php echo $navshow['title']; ?>"><?php echo $navshow['title']; ?></a></li>
                <?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__NYZmp8BOwA__; ?>
            </ul>
           <?php endif; ?>
        </li>
    <?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__jzUFk3MXPd__; ?>
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
    <?php $__zkmvJ0g2NG__ = \addons\cms\model\Channel::getChannelList(["id"=>"nav","type"=>"top","cache"=>"0","condition"=>"1=isnav","row"=>"20"]); if(is_array($__zkmvJ0g2NG__) || $__zkmvJ0g2NG__ instanceof \think\Collection || $__zkmvJ0g2NG__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__zkmvJ0g2NG__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$nav): $mod = ($i % 2 );++$i;?>
        <li>
            <a class="<?php if($nav->is_active): ?>this<?php endif; ?>" <?php if($nav['href'] == 0): ?>href="<?php echo $nav['url']; ?>"<?php endif; if($nav['target'] == 1): ?>target="_blank"<?php endif; ?>><?php echo $nav['name']; ?></a>
            <?php if($nav['has_child']): ?>
            <ul>
                <?php $__ey7iwkAPcD__ = \addons\cms\model\Archives::getArchivesList(["id"=>"navshow","channel"=>$nav['id'],"orderby"=>"weigh","orderway"=>"desc","flag"=>"top","row"=>"20"]); if(is_array($__ey7iwkAPcD__) || $__ey7iwkAPcD__ instanceof \think\Collection || $__ey7iwkAPcD__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__ey7iwkAPcD__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$navshow): $mod = ($i % 2 );++$i;?>
                <li><a href="<?php echo $navshow['url']; ?>" title="<?php echo $navshow['title']; ?>"><?php echo $navshow['title']; ?></a></li>
                <?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__ey7iwkAPcD__; $__RlFY1onCm3__ = \addons\cms\model\Channel::getChannelList(["id"=>"son","type"=>"son","typeid"=>$nav['id'],"cache"=>"0","condition"=>"1=isnav","row"=>"20"]); if(is_array($__RlFY1onCm3__) || $__RlFY1onCm3__ instanceof \think\Collection || $__RlFY1onCm3__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__RlFY1onCm3__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$son): $mod = ($i % 2 );++$i;?>
               
                <li><a class="<?php if($son->is_active): ?>this<?php endif; ?>"  <?php if($son['href'] == 0): ?>href="<?php echo $son['url']; ?>"<?php endif; ?>><?php echo $son['name']; ?></a>
                    <?php if($son['has_child']): ?>
                    <ul>
                        <?php $__P3vRXyMfmO__ = \addons\cms\model\Channel::getChannelList(["id"=>"sons","type"=>"son","typeid"=>$son['id'],"cache"=>"0","condition"=>"1=isnav","row"=>"20"]); if(is_array($__P3vRXyMfmO__) || $__P3vRXyMfmO__ instanceof \think\Collection || $__P3vRXyMfmO__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__P3vRXyMfmO__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$sons): $mod = ($i % 2 );++$i;?>
                        <li><a class="<?php if($sons->is_active): ?>this<?php endif; ?>"  href="<?php echo $sons['url']; ?>"><?php echo $sons['name']; ?></a></li>
                        <?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__P3vRXyMfmO__; ?>
                    </ul>
                    <?php endif; ?>
                </li>
               
                <?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__RlFY1onCm3__; ?>
               
            </ul>
             <?php else: ?>
            <ul>
                <?php $__FClb0MJPrz__ = \addons\cms\model\Archives::getArchivesList(["id"=>"navshow","channel"=>$nav['id'],"orderby"=>"weigh","orderway"=>"desc","flag"=>"top","row"=>"20"]); if(is_array($__FClb0MJPrz__) || $__FClb0MJPrz__ instanceof \think\Collection || $__FClb0MJPrz__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__FClb0MJPrz__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$navshow): $mod = ($i % 2 );++$i;?>
                <li><a href="<?php echo $navshow['url']; ?>" title="<?php echo $navshow['title']; ?>"><?php echo $navshow['title']; ?></a></li>
                <?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__FClb0MJPrz__; ?>
            </ul>
            
            <?php endif; ?>
        </li>
    <?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__zkmvJ0g2NG__; ?>
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
                        <?php $__JFVglBqQuv__ = \addons\cms\model\Channel::getBreadcrumb($__CHANNEL__??[], $__ARCHIVES__??[], $__TAGS__??[], $__PAGE__??[], $__DIYFORM__??[]); if(is_array($__JFVglBqQuv__) || $__JFVglBqQuv__ instanceof \think\Collection || $__JFVglBqQuv__ instanceof \think\Paginator): $k = 0; $__LIST__ = $__JFVglBqQuv__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($k % 2 );++$k;if($k>1): ?> - <?php endif; ?><a title="<?php echo $item['name']; ?>" href="<?php echo $item['url']; ?>"><?php echo $item['name']; ?></a>
        				<?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__JFVglBqQuv__; ?>
        				</div>
                 
                    
		 	</div>
	</div>
</div>
 
<div class="productListBJ">
<div class="productList box">
       <?php if(!(empty($__CHANNEL__['lanmujj']) || (($__CHANNEL__['lanmujj'] instanceof \think\Collection || $__CHANNEL__['lanmujj'] instanceof \think\Paginator ) && $__CHANNEL__['lanmujj']->isEmpty()))): ?>
        <div class="lanmujj">
           <?php echo $__CHANNEL__['lanmujj']; ?>
        </div>
        <?php endif; ?>     
       <div class="productLeft">
     <div class="H2ol">
        <select onchange="window.location=this.value;">
            <?php $__hwa9uIqsXC__ = \addons\cms\model\Channel::getChannelList(["id"=>"nav","type"=>"top","cache"=>"0","condition"=>"1=isnav","row"=>"20"]); if(is_array($__hwa9uIqsXC__) || $__hwa9uIqsXC__ instanceof \think\Collection || $__hwa9uIqsXC__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__hwa9uIqsXC__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$nav): $mod = ($i % 2 );++$i;if($nav->is_active): $__QguNxOqwl9__ = \addons\cms\model\Channel::getChannelList(["id"=>"channel","type"=>"son","typeid"=>$nav['id'],"row"=>"100"]); if(is_array($__QguNxOqwl9__) || $__QguNxOqwl9__ instanceof \think\Collection || $__QguNxOqwl9__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__QguNxOqwl9__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$channel): $mod = ($i % 2 );++$i;?>
                 <option <?php echo !empty($channel['is_active'])?'selected':''; ?> value="<?php echo $channel['url']; ?>"><?php echo $channel['name']; ?></option>
                <?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__QguNxOqwl9__; endif; endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__hwa9uIqsXC__; ?>
        </select>
        
        
       
               
                   <ol id="<?php echo $nav['id']; ?>">
                    <?php $__bwz1nfYkFZ__ = \addons\cms\model\Channel::getChannelList(["id"=>"channel","type"=>"son","typeid"=>"44","row"=>"100"]); if(is_array($__bwz1nfYkFZ__) || $__bwz1nfYkFZ__ instanceof \think\Collection || $__bwz1nfYkFZ__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__bwz1nfYkFZ__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$channel): $mod = ($i % 2 );++$i;?>
                    <li>
                        <a class="<?php if($channel->is_active): ?>this<?php endif; ?>" href="<?php echo $channel['url']; ?>"><span><i class="ico icon-choice2"></i></span><?php echo $channel['name']; ?></a>
                        <?php if($channel['has_child']): ?>
                        <ul>
                            <?php $__Ew9VaSUKc2__ = \addons\cms\model\Channel::getChannelList(["id"=>"channel","type"=>"son","typeid"=>$channel['id'],"row"=>"100"]); if(is_array($__Ew9VaSUKc2__) || $__Ew9VaSUKc2__ instanceof \think\Collection || $__Ew9VaSUKc2__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__Ew9VaSUKc2__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$channel): $mod = ($i % 2 );++$i;?>
                            <li><a class="<?php if($channel->is_active): ?>this<?php endif; ?>" href="<?php echo $channel['url']; ?>"><?php echo $channel['name']; ?></a></li>
                            <?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__Ew9VaSUKc2__; ?>
                        </ul>
                        <?php endif; ?>
                    </li>
                    <?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__bwz1nfYkFZ__; ?>
                  </ol>
               
       
   </div>
</div> 

 		 <div class="productRight">
 		   <ul>
			<?php $__s0VAelMCqv__ = $__PAGELIST__; if(is_array($__s0VAelMCqv__) || $__s0VAelMCqv__ instanceof \think\Collection || $__s0VAelMCqv__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__s0VAelMCqv__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
			<li>
			     <?php if(in_array(($site['lspf']), explode(',',"0"))): ?>
			     <a href="<?php echo $item['url']; ?>"  title="<?php echo $item['title']; ?>">
    				    <div class="imghover"><img src="<?php echo $item['image']; ?>"></div>
    				    <h3><?php echo $item['title']; ?></h3>
    				    <?php if(!(empty($item['description']) || (($item['description'] instanceof \think\Collection || $item['description'] instanceof \think\Paginator ) && $item['description']->isEmpty()))): ?><p><?php echo $item['description']; ?></p><?php endif; if(!(empty($item['price']) || (($item['price'] instanceof \think\Collection || $item['price'] instanceof \think\Paginator ) && $item['price']->isEmpty()))): ?><em><?php echo $item['price']; ?></em><?php endif; ?>
				    </a>
			     <?php endif; if(in_array(($site['lspf']), explode(',',"1"))): ?>  
			   <a onclick="WindowShow('<?php echo $item['title']; ?>','<?php echo $item['image']; ?>',this)" title="<?php echo $item['title']; ?>">
				    <div class="imghover"><img src="<?php echo $item['image']; ?>"></div>
				    <h3><?php echo $item['title']; ?></h3>
				    <?php if(!(empty($item['description']) || (($item['description'] instanceof \think\Collection || $item['description'] instanceof \think\Paginator ) && $item['description']->isEmpty()))): ?><p><?php echo $item['description']; ?></p><?php endif; if(!(empty($item['price']) || (($item['price'] instanceof \think\Collection || $item['price'] instanceof \think\Paginator ) && $item['price']->isEmpty()))): ?><em><?php echo $item['price']; ?></em><?php endif; ?>
				    </a>
               <?php endif; ?>    
        	</li>
			<?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__s0VAelMCqv__; ?>
			 
		</ul>
		
	
		<div class="Pagination">
            <?php echo $__PAGELIST__->render(["type"=>"full"]); ?>
        </div>
       
 		     
 		</div>
  
 
</div>

</div> 
<div class="Window">
    <div class="WindowShowCenter">
    <div class="WindowShow">
      <div class="pr"><span><i class="ico icon-guanbi"></i></span></div>
      <div class="WindowShowNr">
          <img class="WindowShowImg" src="">
          <h3></h3>
          <p></p>
            <form id="form" onsubmit="return false">
                <input type="hidden" name="__diyname__" value="customer">
                <?php echo token(); ?>
                <div>
               <input name="row[name]" type="text" placeholder="*Name" required=""></input>
               <input name="row[email]" type="Email" placeholder="*Email" required=""></input>
               <input name="row[telephone]" type="text" placeholder="*Phone" required=""></input>
               <textarea name="row[content]" type="text" placeholder="*Message" required=""></textarea>
               <!--<div class="Captcha">-->
               <!--              <img src="<?php echo captcha_src(); ?>"  onclick="this.src = '<?php echo captcha_src(); ?>?r=' + Math.random();"/>-->
               <!--              <input required="" placeholder="Captcha" type="text"    name="verify"></input>-->
               <!--         </div>        -->
                <button>SEND</button>
                </div>
           </form>
      </div>
    </div>
    </div>
</div>
<script>
function WindowShow(title,img,obg){
  $('.WindowShow p').html('');
  //var nr=$(obg).find("p").html();
   
  $('html').css('overflow-y','hidden')  
  $('.Window').fadeIn();
  $('.WindowShowImg').attr('src',img);
  $('.WindowShow h3').html(title);
  $('.WindowShow p').html(nr);
};


 
$('.WindowShow span').click(function(){
  $('html').css('overflow-y','auto')
    $('.Window').fadeOut();
})
</script>
<!--咨询窗口--> 
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
        	    <?php $__UH39p2b1Es__ = \addons\cms\model\Channel::getChannelList(["id"=>"channel","type"=>"son","condition"=>"1=isnav AND 0=nofoot"]); if(is_array($__UH39p2b1Es__) || $__UH39p2b1Es__ instanceof \think\Collection || $__UH39p2b1Es__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__UH39p2b1Es__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$channel): $mod = ($i % 2 );++$i;?>
                <a href="<?php echo $channel['url']; ?>" title="<?php echo $channel['name']; ?>"><?php echo $channel['name']; ?></a>
                <?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__UH39p2b1Es__; ?>
              	</div>
              	
              	
              	
                 <?php if(in_array(($site['indexcp']), explode(',',"1"))): $__Zq0mklg36t__ = \addons\cms\model\Channel::getChannelList(["id"=>"nav","type"=>"top","condition"=>"1=isnav AND 0=nofoot","cache"=>"0","model"=>"2"]); if(is_array($__Zq0mklg36t__) || $__Zq0mklg36t__ instanceof \think\Collection || $__Zq0mklg36t__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__Zq0mklg36t__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$nav): $mod = ($i % 2 );++$i;?>
                  	<div class="footAB">
            	    <h4><?php echo $nav['name']; ?></h4>
            	        <?php $__TQOAUgwkt4__ = \addons\cms\model\Channel::getChannelList(["id"=>"channel","type"=>"son","typeid"=>$nav['id'],"cache"=>"0","condition"=>"1=isnav AND 0=nofoot"]); if(is_array($__TQOAUgwkt4__) || $__TQOAUgwkt4__ instanceof \think\Collection || $__TQOAUgwkt4__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__TQOAUgwkt4__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$channel): $mod = ($i % 2 );++$i;?>
                        <a href="<?php echo $channel['url']; ?>" title="<?php echo $channel['name']; ?>"><?php echo $channel['name']; ?></a>
                        <?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__TQOAUgwkt4__; ?>
                    </div>
                  	<?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__Zq0mklg36t__; endif; if(in_array(($site['indexfw']), explode(',',"1"))): ?> 
            	    <!--服务二级菜单-->
            	    <div class="footAD">
            	    <h4>Services</h4>
            	    <?php $__tBDQhfbFRE__ = \addons\cms\model\Archives::getArchivesList(["id"=>"navshow","channel"=>"38","orderby"=>"weigh","orderway"=>"desc","flag"=>"top"]); if(is_array($__tBDQhfbFRE__) || $__tBDQhfbFRE__ instanceof \think\Collection || $__tBDQhfbFRE__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__tBDQhfbFRE__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$navshow): $mod = ($i % 2 );++$i;?>
                          <a href="<?php echo $navshow['url']; ?>" title="<?php echo $navshow['title']; ?>"><?php echo $navshow['title']; ?></a>
                    <?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__tBDQhfbFRE__; if(in_array(($site['indexfdc']), explode(',',"1"))): ?>   
                        <!--项目-->
                	    <div class="footABNr">
                        <?php $__5VzwNMaCXZ__ = \addons\cms\model\Archives::getArchivesList(["id"=>"navshow","channel"=>"51","orderby"=>"weigh","orderway"=>"desc","flag"=>"top"]); if(is_array($__5VzwNMaCXZ__) || $__5VzwNMaCXZ__ instanceof \think\Collection || $__5VzwNMaCXZ__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__5VzwNMaCXZ__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$navshow): $mod = ($i % 2 );++$i;?>
                              <a href="<?php echo $navshow['url']; ?>" title="<?php echo $navshow['title']; ?>"><img src="<?php echo $navshow['image']; ?>"><h3><?php echo $navshow['title']; ?></h3></a>
                        <?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__5VzwNMaCXZ__; ?>
                		</div> 
                	<?php endif; ?>	
                	</div>
            	<?php endif; ?>	
         
        	    
        	    <!--联系方式-->
            	<div class="footAC">
                    <h4>Contact Us</h4>
                    <ul>
                    <?php $__cDMhdfPeSm__ = \addons\cms\model\Block::getBlockList(["id"=>"block","name"=>"contact","orderby"=>"weigh","orderway"=>"desc","condition"=>"1=sf"]); if(is_array($__cDMhdfPeSm__) || $__cDMhdfPeSm__ instanceof \think\Collection || $__cDMhdfPeSm__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__cDMhdfPeSm__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$block): $mod = ($i % 2 );++$i;?> 
                    <li><span><i class="ico <?php echo $block['image']; ?>"></i></span><p><a href="<?php echo $block['url']; ?>" title=""><?php echo $block['title']; ?> : <?php echo str_replace(["<p>","</p>"], "", $block['content']); ?></a></p></li>
                    <?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__cDMhdfPeSm__; ?>
                    </ul>
                </div>
                 
            </div>
          </div>
          
          <!--版权-->
          <div class="copyright">
            <div class="box">
                  <?php $__2yJuKlZ4QC__ = \addons\cms\model\Block::getBlockList(["id"=>"block","name"=>"zf","orderby"=>"weigh","orderway"=>"desc"]); if(is_array($__2yJuKlZ4QC__) || $__2yJuKlZ4QC__ instanceof \think\Collection || $__2yJuKlZ4QC__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__2yJuKlZ4QC__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$block): $mod = ($i % 2 );++$i;?> 
                  <div class="copyrightRight">
                        <?php if(is_array(explode(',',$block['images'])) || explode(',',$block['images']) instanceof \think\Collection || explode(',',$block['images']) instanceof \think\Paginator): $i = 0; $__LIST__ = explode(',',$block['images']);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$image): $mod = ($i % 2 );++$i;?>
                         <a><img src="<?php echo cdnurl($image); ?>"></a>   
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                  </div>
                  <?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__2yJuKlZ4QC__; ?>  
                <div class="shemei">
    			    <?php $__gvt4rHeY5I__ = \addons\cms\model\Block::getBlockList(["id"=>"block","name"=>"sm","orderby"=>"weigh","orderway"=>"desc"]); if(is_array($__gvt4rHeY5I__) || $__gvt4rHeY5I__ instanceof \think\Collection || $__gvt4rHeY5I__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__gvt4rHeY5I__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$block): $mod = ($i % 2 );++$i;?>
    				<a href="<?php echo $block['url']; ?>" title="<?php echo $block['title']; ?>" target="_blank"><i class="ico <?php echo $block['image']; ?>"></i></a>
    			    <?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__gvt4rHeY5I__; ?> 
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