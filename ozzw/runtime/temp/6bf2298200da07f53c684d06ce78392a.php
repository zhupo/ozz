<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:83:"/Users/panliu/Documents/project/ozz/ozzw/addons/cms/view/default1/show_product.html";i:1675870068;s:81:"/Users/panliu/Documents/project/ozz/ozzw/addons/cms/view/default1/common/top.html";i:1676041756;s:81:"/Users/panliu/Documents/project/ozz/ozzw/addons/cms/view/default1/common/mbx.html";i:1669551797;s:80:"/Users/panliu/Documents/project/ozz/ozzw/addons/cms/view/default1/common/ck.html";i:1669554566;s:82:"/Users/panliu/Documents/project/ozz/ozzw/addons/cms/view/default1/common/foot.html";i:1676704257;}*/ ?>
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
               <?php $__2hxfroqCRH__ = \addons\cms\model\Block::getBlockList(["id"=>"block","name"=>"contact","orderby"=>"weigh","orderway"=>"desc","condition"=>"1=foottop"]); if(is_array($__2hxfroqCRH__) || $__2hxfroqCRH__ instanceof \think\Collection || $__2hxfroqCRH__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__2hxfroqCRH__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$block): $mod = ($i % 2 );++$i;?> 
                    <p><a href="<?php echo $block['url']; ?>" title=""><span><i class="ico <?php echo $block['image']; ?>"></i></span> <?php echo $block['title']; ?> : <?php echo str_replace(["<p>","</p>"], "", $block['content']); ?></a></p>
               <?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__2hxfroqCRH__; ?>
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
            <?php $__NE7nck0lRU__ = \addons\cms\model\Channel::getChannelList(["id"=>"nav","type"=>"top","cache"=>"0","condition"=>"1=isnav","row"=>"20"]); if(is_array($__NE7nck0lRU__) || $__NE7nck0lRU__ instanceof \think\Collection || $__NE7nck0lRU__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__NE7nck0lRU__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$nav): $mod = ($i % 2 );++$i;?>
                <li>
                    <a class="<?php if($nav->is_active): ?>this<?php endif; ?>" <?php if($nav['href'] == 0): ?>href="<?php echo $nav['url']; ?>"<?php endif; if($nav['target'] == 1): ?>target="_blank"<?php endif; ?>><?php echo $nav['name']; ?></a>
                    <?php if($nav['has_child']): ?>
                    <ul>
                       
                        <?php $__HKzZ2h8xD3__ = \addons\cms\model\Archives::getArchivesList(["id"=>"navshow","channel"=>$nav['id'],"orderby"=>"weigh","orderway"=>"desc","flag"=>"top","row"=>"20"]); if(is_array($__HKzZ2h8xD3__) || $__HKzZ2h8xD3__ instanceof \think\Collection || $__HKzZ2h8xD3__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__HKzZ2h8xD3__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$navshow): $mod = ($i % 2 );++$i;?>
                        <li><a  href="<?php echo $navshow['url']; ?>" title="<?php echo $navshow['title']; ?>"><?php echo $navshow['title']; ?></a></li>
                        <?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__HKzZ2h8xD3__; $__uQxVb7clnz__ = \addons\cms\model\Channel::getChannelList(["id"=>"son","type"=>"son","condition"=>"1=isnav","typeid"=>$nav['id'],"cache"=>"0","row"=>"20"]); if(is_array($__uQxVb7clnz__) || $__uQxVb7clnz__ instanceof \think\Collection || $__uQxVb7clnz__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__uQxVb7clnz__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$son): $mod = ($i % 2 );++$i;?>
                           
                            <li><a class="<?php if($son->is_active): ?>this<?php endif; ?>" <?php if($son['href'] == 0): ?>href="<?php echo $son['url']; ?>"<?php endif; ?>><?php echo $son['name']; ?></a>
                                 <?php if($son['has_child']): ?>
                                 <ul>
                                    <?php $__w9eM5DPFVv__ = \addons\cms\model\Channel::getChannelList(["id"=>"sons","condition"=>"1=isnav","type"=>"son","typeid"=>$son['id'],"cache"=>"0"]); if(is_array($__w9eM5DPFVv__) || $__w9eM5DPFVv__ instanceof \think\Collection || $__w9eM5DPFVv__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__w9eM5DPFVv__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$sons): $mod = ($i % 2 );++$i;?>
                                    <li><a class="<?php if($sons->is_active): ?>this<?php endif; ?>"  href="<?php echo $sons['url']; ?>"><?php echo $sons['name']; ?></a></li>
                                    <?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__w9eM5DPFVv__; ?>
                                </ul>
                                <?php endif; ?>
                            </li>
                           
                        <?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__uQxVb7clnz__; ?>
                    </ul>
                    <?php else: ?>
                    <ul>
                        <?php $__0TUs7kwFCb__ = \addons\cms\model\Archives::getArchivesList(["id"=>"navshow","channel"=>$nav['id'],"orderby"=>"weigh","orderway"=>"desc","flag"=>"top","row"=>"20"]); if(is_array($__0TUs7kwFCb__) || $__0TUs7kwFCb__ instanceof \think\Collection || $__0TUs7kwFCb__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__0TUs7kwFCb__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$navshow): $mod = ($i % 2 );++$i;?>
                        <li><a href="<?php echo $navshow['url']; ?>" title="<?php echo $navshow['title']; ?>"><?php echo $navshow['title']; ?></a></li>
                        <?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__0TUs7kwFCb__; ?>
                    </ul>
                   <?php endif; ?>
               </li>
            <?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__NE7nck0lRU__; ?>
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
                            <?php $__vGmrC8uQOL__ = \addons\cms\model\Block::getBlockList(["id"=>"block","name"=>"contact","orderby"=>"weigh","orderway"=>"desc","condition"=>"1=foottop"]); if(is_array($__vGmrC8uQOL__) || $__vGmrC8uQOL__ instanceof \think\Collection || $__vGmrC8uQOL__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__vGmrC8uQOL__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$block): $mod = ($i % 2 );++$i;?> 
                            <a><?php echo $block['title']; ?> : <?php echo str_replace(["<p>","</p>"], "", $block['content']); ?></a>
                            <?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__vGmrC8uQOL__; ?>
                        </p>
                     
               
                 </div>
                  
            </div>
        </div>   
    </div>


 <div class="indexNavNrC">
   <div class="box indexNavNrCBox">
    <ul class="qc" id="navC">
    <?php $__2BmuyKIHJS__ = \addons\cms\model\Channel::getChannelList(["id"=>"nav","type"=>"top","cache"=>"0","condition"=>"1=isnav","row"=>"20"]); if(is_array($__2BmuyKIHJS__) || $__2BmuyKIHJS__ instanceof \think\Collection || $__2BmuyKIHJS__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__2BmuyKIHJS__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$nav): $mod = ($i % 2 );++$i;?>
        <li>
            <a class="<?php if($nav->is_active): ?>this<?php endif; ?>" <?php if($nav['href'] == 0): ?>href="<?php echo $nav['url']; ?>"<?php endif; ?>><?php echo $nav['name']; ?></a>
            <?php if($nav['has_child']): ?>
            <ul>
               
                <?php $__OEpNh43ZqI__ = \addons\cms\model\Archives::getArchivesList(["id"=>"navshow","channel"=>$nav['id'],"orderby"=>"weigh","orderway"=>"desc","flag"=>"top","row"=>"20"]); if(is_array($__OEpNh43ZqI__) || $__OEpNh43ZqI__ instanceof \think\Collection || $__OEpNh43ZqI__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__OEpNh43ZqI__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$navshow): $mod = ($i % 2 );++$i;?>
                <li><a href="<?php echo $navshow['url']; ?>" title="<?php echo $navshow['title']; ?>"><?php echo $navshow['title']; ?></a></li>
                <?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__OEpNh43ZqI__; $__S18veIzLxh__ = \addons\cms\model\Channel::getChannelList(["id"=>"son","type"=>"son","condition"=>"1=isnav","typeid"=>$nav['id'],"cache"=>"0","row"=>"20"]); if(is_array($__S18veIzLxh__) || $__S18veIzLxh__ instanceof \think\Collection || $__S18veIzLxh__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__S18veIzLxh__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$son): $mod = ($i % 2 );++$i;?>
                   
                    <li><a class="<?php if($son->is_active): ?>this<?php endif; ?>"  <?php if($son['href'] == 0): ?>href="<?php echo $son['url']; ?>"<?php endif; ?>><?php echo $son['name']; ?></a>
                         <?php if($son['has_child']): ?>
                         <ul>
                            <?php $__IsJuYgUiZ5__ = \addons\cms\model\Channel::getChannelList(["id"=>"sons","condition"=>"1=isnav","type"=>"son","typeid"=>$son['id'],"cache"=>"0","row"=>"20"]); if(is_array($__IsJuYgUiZ5__) || $__IsJuYgUiZ5__ instanceof \think\Collection || $__IsJuYgUiZ5__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__IsJuYgUiZ5__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$sons): $mod = ($i % 2 );++$i;?>
                            <li><a class="<?php if($sons->is_active): ?>this<?php endif; ?>"  href="<?php echo $sons['url']; ?>"><?php echo $sons['name']; ?></a></li>
                            <?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__IsJuYgUiZ5__; ?>
                        </ul>
                        <?php endif; ?>
                    </li>
                   
                <?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__S18veIzLxh__; ?>
            </ul>
            <?php else: ?>
            <ul>
                <?php $__2EcwJngrj5__ = \addons\cms\model\Archives::getArchivesList(["id"=>"navshow","channel"=>$nav['id'],"orderby"=>"weigh","orderway"=>"desc","flag"=>"top","row"=>"20"]); if(is_array($__2EcwJngrj5__) || $__2EcwJngrj5__ instanceof \think\Collection || $__2EcwJngrj5__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__2EcwJngrj5__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$navshow): $mod = ($i % 2 );++$i;?>
                <li><a  href="<?php echo $navshow['url']; ?>" title="<?php echo $navshow['title']; ?>"><?php echo $navshow['title']; ?></a></li>
                <?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__2EcwJngrj5__; ?>
            </ul>
           <?php endif; ?>
        </li>
    <?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__2BmuyKIHJS__; ?>
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
    <?php $__m6YzT2d0ty__ = \addons\cms\model\Channel::getChannelList(["id"=>"nav","type"=>"top","cache"=>"0","condition"=>"1=isnav","row"=>"20"]); if(is_array($__m6YzT2d0ty__) || $__m6YzT2d0ty__ instanceof \think\Collection || $__m6YzT2d0ty__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__m6YzT2d0ty__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$nav): $mod = ($i % 2 );++$i;?>
        <li>
            <a class="<?php if($nav->is_active): ?>this<?php endif; ?>" <?php if($nav['href'] == 0): ?>href="<?php echo $nav['url']; ?>"<?php endif; if($nav['target'] == 1): ?>target="_blank"<?php endif; ?>><?php echo $nav['name']; ?></a>
            <?php if($nav['has_child']): ?>
            <ul>
                <?php $__4DG9dhx6rE__ = \addons\cms\model\Archives::getArchivesList(["id"=>"navshow","channel"=>$nav['id'],"orderby"=>"weigh","orderway"=>"desc","flag"=>"top","row"=>"20"]); if(is_array($__4DG9dhx6rE__) || $__4DG9dhx6rE__ instanceof \think\Collection || $__4DG9dhx6rE__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__4DG9dhx6rE__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$navshow): $mod = ($i % 2 );++$i;?>
                <li><a href="<?php echo $navshow['url']; ?>" title="<?php echo $navshow['title']; ?>"><?php echo $navshow['title']; ?></a></li>
                <?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__4DG9dhx6rE__; $__BCath6l05P__ = \addons\cms\model\Channel::getChannelList(["id"=>"son","type"=>"son","typeid"=>$nav['id'],"cache"=>"0","condition"=>"1=isnav","row"=>"20"]); if(is_array($__BCath6l05P__) || $__BCath6l05P__ instanceof \think\Collection || $__BCath6l05P__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__BCath6l05P__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$son): $mod = ($i % 2 );++$i;?>
               
                <li><a class="<?php if($son->is_active): ?>this<?php endif; ?>"  <?php if($son['href'] == 0): ?>href="<?php echo $son['url']; ?>"<?php endif; ?>><?php echo $son['name']; ?></a>
                    <?php if($son['has_child']): ?>
                    <ul>
                        <?php $__jJx5hkNZED__ = \addons\cms\model\Channel::getChannelList(["id"=>"sons","type"=>"son","typeid"=>$son['id'],"cache"=>"0","condition"=>"1=isnav","row"=>"20"]); if(is_array($__jJx5hkNZED__) || $__jJx5hkNZED__ instanceof \think\Collection || $__jJx5hkNZED__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__jJx5hkNZED__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$sons): $mod = ($i % 2 );++$i;?>
                        <li><a class="<?php if($sons->is_active): ?>this<?php endif; ?>"  href="<?php echo $sons['url']; ?>"><?php echo $sons['name']; ?></a></li>
                        <?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__jJx5hkNZED__; ?>
                    </ul>
                    <?php endif; ?>
                </li>
               
                <?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__BCath6l05P__; ?>
               
            </ul>
             <?php else: ?>
            <ul>
                <?php $__EMWxSovmhp__ = \addons\cms\model\Archives::getArchivesList(["id"=>"navshow","channel"=>$nav['id'],"orderby"=>"weigh","orderway"=>"desc","flag"=>"top","row"=>"20"]); if(is_array($__EMWxSovmhp__) || $__EMWxSovmhp__ instanceof \think\Collection || $__EMWxSovmhp__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__EMWxSovmhp__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$navshow): $mod = ($i % 2 );++$i;?>
                <li><a href="<?php echo $navshow['url']; ?>" title="<?php echo $navshow['title']; ?>"><?php echo $navshow['title']; ?></a></li>
                <?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__EMWxSovmhp__; ?>
            </ul>
            
            <?php endif; ?>
        </li>
    <?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__m6YzT2d0ty__; ?>
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
                        <?php $__0GcXlmMLkw__ = \addons\cms\model\Channel::getBreadcrumb($__CHANNEL__??[], $__ARCHIVES__??[], $__TAGS__??[], $__PAGE__??[], $__DIYFORM__??[]); if(is_array($__0GcXlmMLkw__) || $__0GcXlmMLkw__ instanceof \think\Collection || $__0GcXlmMLkw__ instanceof \think\Paginator): $k = 0; $__LIST__ = $__0GcXlmMLkw__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($k % 2 );++$k;if($k>1): ?> - <?php endif; ?><a title="<?php echo $item['name']; ?>" href="<?php echo $item['url']; ?>"><?php echo $item['name']; ?></a>
        				<?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__0GcXlmMLkw__; ?>
        				</div>
                 
                    
		 	</div>
	</div>
</div>
 
<div class="productListBJ">
<div class="productShow box">
    <div class="productShowLeft">
       
        <div class="productShowImg">
            <div id="productShowImg">
                
                <?php if(empty($__ARCHIVES__['images']) || (($__ARCHIVES__['images'] instanceof \think\Collection || $__ARCHIVES__['images'] instanceof \think\Paginator ) && $__ARCHIVES__['images']->isEmpty())): ?>
                   <img  class="img" src="<?php echo $__ARCHIVES__['image']; ?>">
                <?php else: ?>
                 <!--大图-->
                <div  class="swiper-container galleryshang" style="margin-bottom: 10px;">
                    <div class="swiper-wrapper">
                	        <?php if(is_array(explode(',',$__ARCHIVES__['images'])) || explode(',',$__ARCHIVES__['images']) instanceof \think\Collection || explode(',',$__ARCHIVES__['images']) instanceof \think\Paginator): $i = 0; $__LIST__ = explode(',',$__ARCHIVES__['images']);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$image): $mod = ($i % 2 );++$i;?>
            					<div class="swiper-slide"><a><img src="<?php echo cdnurl($image); ?>"></a></div>
            				<?php endforeach; endif; else: echo "" ;endif; ?>
                    </div>
                    <div class="swiper-pagination"></div> 
                    <div class="swiper-button-prev"><i class="ico icon-icon--"></i></div>
       	            <div class="swiper-button-next"><i class="ico icon-icon---copy"></i></div>
                </div>
                  <!--小图-->    
                  <div class="swiper-container galleryxia">
                    <div class="swiper-wrapper">
                            <?php if(is_array(explode(',',$__ARCHIVES__['images'])) || explode(',',$__ARCHIVES__['images']) instanceof \think\Collection || explode(',',$__ARCHIVES__['images']) instanceof \think\Paginator): $i = 0; $__LIST__ = explode(',',$__ARCHIVES__['images']);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$image): $mod = ($i % 2 );++$i;?>
            					<div class="swiper-slide"><a><img src="<?php echo cdnurl($image); ?>"></a></div>
            				<?php endforeach; endif; else: echo "" ;endif; ?>
                    </div>
                  </div>
                   <script>
                    var galleryxia = new Swiper('.galleryxia', {
                      spaceBetween: 10,
                      slidesPerView: 4,
                      freeMode: true,
                      watchSlidesVisibility: true,
                      watchSlidesProgress: true,
                    });
                    var galleryshang = new Swiper('.galleryshang', {
                      spaceBetween:0,
                      navigation: {
                        nextEl: '.swiper-button-next',
                        prevEl: '.swiper-button-prev',
                      },
                      thumbs: {
                        swiper: galleryxia
                      },
                        on: {
                      slideChangeTransitionStart: function(){
                      	$('.galleryxia .swiper-slide').removeClass("swiper-slide-active")
                        $('.galleryxia .swiper-slide').eq(this.activeIndex).addClass("swiper-slide-active")
                      },
                    },
                    });
                </script>
                <?php endif; ?>
                
                
                
              
            </div>  
               
            
            
            
            <div class="productRin">
             <h1 class="title"><?php echo $__ARCHIVES__['title']; ?></h1>
             <div class="ItemNo">Item NO: <?php echo $__ARCHIVES__['id']; ?></div>
           
            <div class="productShowprice jiage"><?php echo $__ARCHIVES__['price']; ?></div>
            
             
             <div class="productShowIntroduction">
                 <?php echo $__ARCHIVES__['Introduction']; ?>
             </div>
    
		 
            <a class="Consult btnCar" onclick="WindowShow('<?php echo $__ARCHIVES__['title']; ?>','<?php echo $__ARCHIVES__['image']; ?>',this)">Contact Us</a>
            	
         
             
            </div> 
        </div>
    
            
            <div class="productShowTxt">
                 <h1>Description</h1>
                  <div class="BJQ">
                      <?php echo $__ARCHIVES__['content']; ?>
                      <div class="Cpimglist">
                          <?php if(is_array(explode(',',$__ARCHIVES__['cpimglist'])) || explode(',',$__ARCHIVES__['cpimglist']) instanceof \think\Collection || explode(',',$__ARCHIVES__['cpimglist']) instanceof \think\Paginator): $i = 0; $__LIST__ = explode(',',$__ARCHIVES__['cpimglist']);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$image): $mod = ($i % 2 );++$i;?>
            				<img src="<?php echo cdnurl($image); ?>">
            			  <?php endforeach; endif; else: echo "" ;endif; ?>
                          
                      </div>
                  </div>
                 
            </div>
            
    </div>
    
    
    <!--相关产品-->
    <div class="productShowRight">
        <h2>Related Products</h2>
        <div class="productShowRightList">
         <?php $__boUwXZsBgm__ = \addons\cms\model\Archives::getArchivesList(["id"=>"item","row"=>"4","channel"=>$__CHANNEL__['id'],"orderby"=>"rand","orderway"=>"desc","cache"=>"0","condition"=>"`id` != $__ARCHIVES__->id"]); if(is_array($__boUwXZsBgm__) || $__boUwXZsBgm__ instanceof \think\Collection || $__boUwXZsBgm__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__boUwXZsBgm__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>  
         <a href="<?php echo $item['url']; ?>" title="<?php echo $item['title']; ?>">
             <div class="RelatedProductsNr">
                <div class="imghover"><img src="<?php echo $item['image']; ?>"></div>
                <h3><?php echo $item['title']; ?></h3>
              </div>    
         </a>
        <?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__boUwXZsBgm__; ?>
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
        	    <?php $__WnRCFJ1rSu__ = \addons\cms\model\Channel::getChannelList(["id"=>"channel","type"=>"son","condition"=>"1=isnav AND 0=nofoot"]); if(is_array($__WnRCFJ1rSu__) || $__WnRCFJ1rSu__ instanceof \think\Collection || $__WnRCFJ1rSu__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__WnRCFJ1rSu__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$channel): $mod = ($i % 2 );++$i;?>
                <a href="<?php echo $channel['url']; ?>" title="<?php echo $channel['name']; ?>"><?php echo $channel['name']; ?></a>
                <?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__WnRCFJ1rSu__; ?>
              	</div>
              	
              	
              	
                 <?php if(in_array(($site['indexcp']), explode(',',"1"))): $__BraZU0hSCT__ = \addons\cms\model\Channel::getChannelList(["id"=>"nav","type"=>"top","condition"=>"1=isnav AND 0=nofoot","cache"=>"0","model"=>"2"]); if(is_array($__BraZU0hSCT__) || $__BraZU0hSCT__ instanceof \think\Collection || $__BraZU0hSCT__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__BraZU0hSCT__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$nav): $mod = ($i % 2 );++$i;?>
                  	<div class="footAB">
            	    <h4><?php echo $nav['name']; ?></h4>
            	        <?php $__SdQWw7Tg9l__ = \addons\cms\model\Channel::getChannelList(["id"=>"channel","type"=>"son","typeid"=>$nav['id'],"cache"=>"0","condition"=>"1=isnav AND 0=nofoot"]); if(is_array($__SdQWw7Tg9l__) || $__SdQWw7Tg9l__ instanceof \think\Collection || $__SdQWw7Tg9l__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__SdQWw7Tg9l__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$channel): $mod = ($i % 2 );++$i;?>
                        <a href="<?php echo $channel['url']; ?>" title="<?php echo $channel['name']; ?>"><?php echo $channel['name']; ?></a>
                        <?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__SdQWw7Tg9l__; ?>
                    </div>
                  	<?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__BraZU0hSCT__; endif; if(in_array(($site['indexfw']), explode(',',"1"))): ?> 
            	    <!--服务二级菜单-->
            	    <div class="footAD">
            	    <h4>Services</h4>
            	    <?php $__wVHnys1LW4__ = \addons\cms\model\Archives::getArchivesList(["id"=>"navshow","channel"=>"38","orderby"=>"weigh","orderway"=>"desc","flag"=>"top"]); if(is_array($__wVHnys1LW4__) || $__wVHnys1LW4__ instanceof \think\Collection || $__wVHnys1LW4__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__wVHnys1LW4__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$navshow): $mod = ($i % 2 );++$i;?>
                          <a href="<?php echo $navshow['url']; ?>" title="<?php echo $navshow['title']; ?>"><?php echo $navshow['title']; ?></a>
                    <?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__wVHnys1LW4__; if(in_array(($site['indexfdc']), explode(',',"1"))): ?>   
                        <!--项目-->
                	    <div class="footABNr">
                        <?php $__KYC1Fc7Wvt__ = \addons\cms\model\Archives::getArchivesList(["id"=>"navshow","channel"=>"51","orderby"=>"weigh","orderway"=>"desc","flag"=>"top"]); if(is_array($__KYC1Fc7Wvt__) || $__KYC1Fc7Wvt__ instanceof \think\Collection || $__KYC1Fc7Wvt__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__KYC1Fc7Wvt__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$navshow): $mod = ($i % 2 );++$i;?>
                              <a href="<?php echo $navshow['url']; ?>" title="<?php echo $navshow['title']; ?>"><img src="<?php echo $navshow['image']; ?>"><h3><?php echo $navshow['title']; ?></h3></a>
                        <?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__KYC1Fc7Wvt__; ?>
                		</div> 
                	<?php endif; ?>	
                	</div>
            	<?php endif; ?>	
         
        	    
        	    <!--联系方式-->
            	<div class="footAC">
                    <h4>Contact Us</h4>
                    <ul>
                    <?php $__gHJUK9dErA__ = \addons\cms\model\Block::getBlockList(["id"=>"block","name"=>"contact","orderby"=>"weigh","orderway"=>"desc","condition"=>"1=sf"]); if(is_array($__gHJUK9dErA__) || $__gHJUK9dErA__ instanceof \think\Collection || $__gHJUK9dErA__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__gHJUK9dErA__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$block): $mod = ($i % 2 );++$i;?> 
                    <li><span><i class="ico <?php echo $block['image']; ?>"></i></span><p><a href="<?php echo $block['url']; ?>" title=""><?php echo $block['title']; ?> : <?php echo str_replace(["<p>","</p>"], "", $block['content']); ?></a></p></li>
                    <?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__gHJUK9dErA__; ?>
                    </ul>
                </div>
                 
            </div>
          </div>
          
          <!--版权-->
          <div class="copyright">
            <div class="box">
                  <?php $__3GaqZkxijQ__ = \addons\cms\model\Block::getBlockList(["id"=>"block","name"=>"zf","orderby"=>"weigh","orderway"=>"desc"]); if(is_array($__3GaqZkxijQ__) || $__3GaqZkxijQ__ instanceof \think\Collection || $__3GaqZkxijQ__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__3GaqZkxijQ__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$block): $mod = ($i % 2 );++$i;?> 
                  <div class="copyrightRight">
                        <?php if(is_array(explode(',',$block['images'])) || explode(',',$block['images']) instanceof \think\Collection || explode(',',$block['images']) instanceof \think\Paginator): $i = 0; $__LIST__ = explode(',',$block['images']);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$image): $mod = ($i % 2 );++$i;?>
                         <a><img src="<?php echo cdnurl($image); ?>"></a>   
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                  </div>
                  <?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__3GaqZkxijQ__; ?>  
                <div class="shemei">
    			    <?php $__6r3TRYw4ks__ = \addons\cms\model\Block::getBlockList(["id"=>"block","name"=>"sm","orderby"=>"weigh","orderway"=>"desc"]); if(is_array($__6r3TRYw4ks__) || $__6r3TRYw4ks__ instanceof \think\Collection || $__6r3TRYw4ks__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__6r3TRYw4ks__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$block): $mod = ($i % 2 );++$i;?>
    				<a href="<?php echo $block['url']; ?>" title="<?php echo $block['title']; ?>" target="_blank"><i class="ico <?php echo $block['image']; ?>"></i></a>
    			    <?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__6r3TRYw4ks__; ?> 
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