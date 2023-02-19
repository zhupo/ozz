<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:76:"/Users/panliu/Documents/project/ozz/ozzw/addons/cms/view/default1/index.html";i:1669554324;s:81:"/Users/panliu/Documents/project/ozz/ozzw/addons/cms/view/default1/common/top.html";i:1676041756;s:82:"/Users/panliu/Documents/project/ozz/ozzw/addons/cms/view/default1/common/foot.html";i:1676704257;}*/ ?>
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
               <?php $__L0iKdlV8wf__ = \addons\cms\model\Block::getBlockList(["id"=>"block","name"=>"contact","orderby"=>"weigh","orderway"=>"desc","condition"=>"1=foottop"]); if(is_array($__L0iKdlV8wf__) || $__L0iKdlV8wf__ instanceof \think\Collection || $__L0iKdlV8wf__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__L0iKdlV8wf__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$block): $mod = ($i % 2 );++$i;?> 
                    <p><a href="<?php echo $block['url']; ?>" title=""><span><i class="ico <?php echo $block['image']; ?>"></i></span> <?php echo $block['title']; ?> : <?php echo str_replace(["<p>","</p>"], "", $block['content']); ?></a></p>
               <?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__L0iKdlV8wf__; ?>
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
            <?php $__xDl1rcu83t__ = \addons\cms\model\Channel::getChannelList(["id"=>"nav","type"=>"top","cache"=>"0","condition"=>"1=isnav","row"=>"20"]); if(is_array($__xDl1rcu83t__) || $__xDl1rcu83t__ instanceof \think\Collection || $__xDl1rcu83t__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__xDl1rcu83t__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$nav): $mod = ($i % 2 );++$i;?>
                <li>
                    <a class="<?php if($nav->is_active): ?>this<?php endif; ?>" <?php if($nav['href'] == 0): ?>href="<?php echo $nav['url']; ?>"<?php endif; if($nav['target'] == 1): ?>target="_blank"<?php endif; ?>><?php echo $nav['name']; ?></a>
                    <?php if($nav['has_child']): ?>
                    <ul>
                       
                        <?php $__dE4wYSVRHx__ = \addons\cms\model\Archives::getArchivesList(["id"=>"navshow","channel"=>$nav['id'],"orderby"=>"weigh","orderway"=>"desc","flag"=>"top","row"=>"20"]); if(is_array($__dE4wYSVRHx__) || $__dE4wYSVRHx__ instanceof \think\Collection || $__dE4wYSVRHx__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__dE4wYSVRHx__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$navshow): $mod = ($i % 2 );++$i;?>
                        <li><a  href="<?php echo $navshow['url']; ?>" title="<?php echo $navshow['title']; ?>"><?php echo $navshow['title']; ?></a></li>
                        <?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__dE4wYSVRHx__; $__UWDvZlVXtH__ = \addons\cms\model\Channel::getChannelList(["id"=>"son","type"=>"son","condition"=>"1=isnav","typeid"=>$nav['id'],"cache"=>"0","row"=>"20"]); if(is_array($__UWDvZlVXtH__) || $__UWDvZlVXtH__ instanceof \think\Collection || $__UWDvZlVXtH__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__UWDvZlVXtH__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$son): $mod = ($i % 2 );++$i;?>
                           
                            <li><a class="<?php if($son->is_active): ?>this<?php endif; ?>" <?php if($son['href'] == 0): ?>href="<?php echo $son['url']; ?>"<?php endif; ?>><?php echo $son['name']; ?></a>
                                 <?php if($son['has_child']): ?>
                                 <ul>
                                    <?php $__0rnMO9qUiA__ = \addons\cms\model\Channel::getChannelList(["id"=>"sons","condition"=>"1=isnav","type"=>"son","typeid"=>$son['id'],"cache"=>"0"]); if(is_array($__0rnMO9qUiA__) || $__0rnMO9qUiA__ instanceof \think\Collection || $__0rnMO9qUiA__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__0rnMO9qUiA__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$sons): $mod = ($i % 2 );++$i;?>
                                    <li><a class="<?php if($sons->is_active): ?>this<?php endif; ?>"  href="<?php echo $sons['url']; ?>"><?php echo $sons['name']; ?></a></li>
                                    <?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__0rnMO9qUiA__; ?>
                                </ul>
                                <?php endif; ?>
                            </li>
                           
                        <?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__UWDvZlVXtH__; ?>
                    </ul>
                    <?php else: ?>
                    <ul>
                        <?php $__C2clOwEm5d__ = \addons\cms\model\Archives::getArchivesList(["id"=>"navshow","channel"=>$nav['id'],"orderby"=>"weigh","orderway"=>"desc","flag"=>"top","row"=>"20"]); if(is_array($__C2clOwEm5d__) || $__C2clOwEm5d__ instanceof \think\Collection || $__C2clOwEm5d__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__C2clOwEm5d__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$navshow): $mod = ($i % 2 );++$i;?>
                        <li><a href="<?php echo $navshow['url']; ?>" title="<?php echo $navshow['title']; ?>"><?php echo $navshow['title']; ?></a></li>
                        <?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__C2clOwEm5d__; ?>
                    </ul>
                   <?php endif; ?>
               </li>
            <?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__xDl1rcu83t__; ?>
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
                            <?php $__CZ4VGaTX1B__ = \addons\cms\model\Block::getBlockList(["id"=>"block","name"=>"contact","orderby"=>"weigh","orderway"=>"desc","condition"=>"1=foottop"]); if(is_array($__CZ4VGaTX1B__) || $__CZ4VGaTX1B__ instanceof \think\Collection || $__CZ4VGaTX1B__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__CZ4VGaTX1B__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$block): $mod = ($i % 2 );++$i;?> 
                            <a><?php echo $block['title']; ?> : <?php echo str_replace(["<p>","</p>"], "", $block['content']); ?></a>
                            <?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__CZ4VGaTX1B__; ?>
                        </p>
                     
               
                 </div>
                  
            </div>
        </div>   
    </div>


 <div class="indexNavNrC">
   <div class="box indexNavNrCBox">
    <ul class="qc" id="navC">
    <?php $__K5uOdbRGIP__ = \addons\cms\model\Channel::getChannelList(["id"=>"nav","type"=>"top","cache"=>"0","condition"=>"1=isnav","row"=>"20"]); if(is_array($__K5uOdbRGIP__) || $__K5uOdbRGIP__ instanceof \think\Collection || $__K5uOdbRGIP__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__K5uOdbRGIP__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$nav): $mod = ($i % 2 );++$i;?>
        <li>
            <a class="<?php if($nav->is_active): ?>this<?php endif; ?>" <?php if($nav['href'] == 0): ?>href="<?php echo $nav['url']; ?>"<?php endif; ?>><?php echo $nav['name']; ?></a>
            <?php if($nav['has_child']): ?>
            <ul>
               
                <?php $__fyCEGOpL0u__ = \addons\cms\model\Archives::getArchivesList(["id"=>"navshow","channel"=>$nav['id'],"orderby"=>"weigh","orderway"=>"desc","flag"=>"top","row"=>"20"]); if(is_array($__fyCEGOpL0u__) || $__fyCEGOpL0u__ instanceof \think\Collection || $__fyCEGOpL0u__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__fyCEGOpL0u__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$navshow): $mod = ($i % 2 );++$i;?>
                <li><a href="<?php echo $navshow['url']; ?>" title="<?php echo $navshow['title']; ?>"><?php echo $navshow['title']; ?></a></li>
                <?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__fyCEGOpL0u__; $__JO1lHWsXQU__ = \addons\cms\model\Channel::getChannelList(["id"=>"son","type"=>"son","condition"=>"1=isnav","typeid"=>$nav['id'],"cache"=>"0","row"=>"20"]); if(is_array($__JO1lHWsXQU__) || $__JO1lHWsXQU__ instanceof \think\Collection || $__JO1lHWsXQU__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__JO1lHWsXQU__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$son): $mod = ($i % 2 );++$i;?>
                   
                    <li><a class="<?php if($son->is_active): ?>this<?php endif; ?>"  <?php if($son['href'] == 0): ?>href="<?php echo $son['url']; ?>"<?php endif; ?>><?php echo $son['name']; ?></a>
                         <?php if($son['has_child']): ?>
                         <ul>
                            <?php $__TVuB0EDGNq__ = \addons\cms\model\Channel::getChannelList(["id"=>"sons","condition"=>"1=isnav","type"=>"son","typeid"=>$son['id'],"cache"=>"0","row"=>"20"]); if(is_array($__TVuB0EDGNq__) || $__TVuB0EDGNq__ instanceof \think\Collection || $__TVuB0EDGNq__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__TVuB0EDGNq__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$sons): $mod = ($i % 2 );++$i;?>
                            <li><a class="<?php if($sons->is_active): ?>this<?php endif; ?>"  href="<?php echo $sons['url']; ?>"><?php echo $sons['name']; ?></a></li>
                            <?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__TVuB0EDGNq__; ?>
                        </ul>
                        <?php endif; ?>
                    </li>
                   
                <?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__JO1lHWsXQU__; ?>
            </ul>
            <?php else: ?>
            <ul>
                <?php $__6WZ0QBfL9H__ = \addons\cms\model\Archives::getArchivesList(["id"=>"navshow","channel"=>$nav['id'],"orderby"=>"weigh","orderway"=>"desc","flag"=>"top","row"=>"20"]); if(is_array($__6WZ0QBfL9H__) || $__6WZ0QBfL9H__ instanceof \think\Collection || $__6WZ0QBfL9H__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__6WZ0QBfL9H__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$navshow): $mod = ($i % 2 );++$i;?>
                <li><a  href="<?php echo $navshow['url']; ?>" title="<?php echo $navshow['title']; ?>"><?php echo $navshow['title']; ?></a></li>
                <?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__6WZ0QBfL9H__; ?>
            </ul>
           <?php endif; ?>
        </li>
    <?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__K5uOdbRGIP__; ?>
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
    <?php $__A1CLITxNi3__ = \addons\cms\model\Channel::getChannelList(["id"=>"nav","type"=>"top","cache"=>"0","condition"=>"1=isnav","row"=>"20"]); if(is_array($__A1CLITxNi3__) || $__A1CLITxNi3__ instanceof \think\Collection || $__A1CLITxNi3__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__A1CLITxNi3__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$nav): $mod = ($i % 2 );++$i;?>
        <li>
            <a class="<?php if($nav->is_active): ?>this<?php endif; ?>" <?php if($nav['href'] == 0): ?>href="<?php echo $nav['url']; ?>"<?php endif; if($nav['target'] == 1): ?>target="_blank"<?php endif; ?>><?php echo $nav['name']; ?></a>
            <?php if($nav['has_child']): ?>
            <ul>
                <?php $__c3FgRdDSEV__ = \addons\cms\model\Archives::getArchivesList(["id"=>"navshow","channel"=>$nav['id'],"orderby"=>"weigh","orderway"=>"desc","flag"=>"top","row"=>"20"]); if(is_array($__c3FgRdDSEV__) || $__c3FgRdDSEV__ instanceof \think\Collection || $__c3FgRdDSEV__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__c3FgRdDSEV__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$navshow): $mod = ($i % 2 );++$i;?>
                <li><a href="<?php echo $navshow['url']; ?>" title="<?php echo $navshow['title']; ?>"><?php echo $navshow['title']; ?></a></li>
                <?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__c3FgRdDSEV__; $__vR89LAKz3C__ = \addons\cms\model\Channel::getChannelList(["id"=>"son","type"=>"son","typeid"=>$nav['id'],"cache"=>"0","condition"=>"1=isnav","row"=>"20"]); if(is_array($__vR89LAKz3C__) || $__vR89LAKz3C__ instanceof \think\Collection || $__vR89LAKz3C__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__vR89LAKz3C__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$son): $mod = ($i % 2 );++$i;?>
               
                <li><a class="<?php if($son->is_active): ?>this<?php endif; ?>"  <?php if($son['href'] == 0): ?>href="<?php echo $son['url']; ?>"<?php endif; ?>><?php echo $son['name']; ?></a>
                    <?php if($son['has_child']): ?>
                    <ul>
                        <?php $__ZfeF93tOMJ__ = \addons\cms\model\Channel::getChannelList(["id"=>"sons","type"=>"son","typeid"=>$son['id'],"cache"=>"0","condition"=>"1=isnav","row"=>"20"]); if(is_array($__ZfeF93tOMJ__) || $__ZfeF93tOMJ__ instanceof \think\Collection || $__ZfeF93tOMJ__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__ZfeF93tOMJ__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$sons): $mod = ($i % 2 );++$i;?>
                        <li><a class="<?php if($sons->is_active): ?>this<?php endif; ?>"  href="<?php echo $sons['url']; ?>"><?php echo $sons['name']; ?></a></li>
                        <?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__ZfeF93tOMJ__; ?>
                    </ul>
                    <?php endif; ?>
                </li>
               
                <?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__vR89LAKz3C__; ?>
               
            </ul>
             <?php else: ?>
            <ul>
                <?php $__sO9L7jBvZg__ = \addons\cms\model\Archives::getArchivesList(["id"=>"navshow","channel"=>$nav['id'],"orderby"=>"weigh","orderway"=>"desc","flag"=>"top","row"=>"20"]); if(is_array($__sO9L7jBvZg__) || $__sO9L7jBvZg__ instanceof \think\Collection || $__sO9L7jBvZg__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__sO9L7jBvZg__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$navshow): $mod = ($i % 2 );++$i;?>
                <li><a href="<?php echo $navshow['url']; ?>" title="<?php echo $navshow['title']; ?>"><?php echo $navshow['title']; ?></a></li>
                <?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__sO9L7jBvZg__; ?>
            </ul>
            
            <?php endif; ?>
        </li>
    <?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__A1CLITxNi3__; ?>
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
<div class="swiper-container" id="indexBanner">
      <div class="swiper-wrapper">
        <?php $__uEO7tvfVPJ__ = \addons\cms\model\Block::getBlockList(["id"=>"block","name"=>"banner","orderby"=>"weigh","orderway"=>"desc"]); if(is_array($__uEO7tvfVPJ__) || $__uEO7tvfVPJ__ instanceof \think\Collection || $__uEO7tvfVPJ__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__uEO7tvfVPJ__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$block): $mod = ($i % 2 );++$i;?>   
        <div class="swiper-slide">
	        <div class="banner">
             	<div class="bannerTxt box"<?php switch($block['lr']): case "1": ?>style="text-align:left;"<?php break; case "2": ?>style="text-align:center;"<?php break; case "3": ?>style="text-align:right;"<?php break; endswitch; ?>>
             	    <div class="bannerTxtNr">
             	            <?php echo $block['content']; if(!(empty($block['url']) || (($block['url'] instanceof \think\Collection || $block['url'] instanceof \think\Paginator ) && $block['url']->isEmpty()))): ?><a href="<?php echo $block['url']; ?>"><?php echo $block['title']; ?></a><?php endif; ?> 
             	    </div>
             	</div>
             	<img src="<?php echo $block['image']; ?>">
             	<i class="ico icon-zuo-copy"></i>
            </div>
	    </div>
	    <?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__uEO7tvfVPJ__; ?> 
	    
	   
	  </div>
 	<?php if(in_array(($site['banner']), explode(',',"1"))): ?>
 	<div class="swiper-pagination"></div>
 	<div class="swiper-button-prev"><i class="ico icon-icon--"></i></div>
       	            <div class="swiper-button-next"><i class="ico icon-icon---copy"></i></div>
 	
 	<?php endif; ?>
</div>


<script>
  var indexBanner = new Swiper('#indexBanner', {
  //effect: "fade",
  observer:true,
  observeParents:true,
  slidesPerColumnFill : 'column', //column row
  slidesPerView: 1, 
  spaceBetween: 0,
  slidesPerColumn: 1,//行
  slidesPerGroup: 1,//移动个数
  loop: true,
  pagination: {
  el: '#indexBanner .swiper-pagination',
  clickable: true,
  },
  navigation: {
  nextEl: '#indexBanner .swiper-button-next',
  prevEl: '#indexBanner .swiper-button-prev',
  },
  <?php if(in_array(($site['banner']), explode(',',"1"))): ?>
  autoplay: {
  delay: 3000, 
  disableOnInteraction: false,
  },
  <?php endif; ?>
  breakpoints:{
  1600:{slidesPerView: 1,spaceBetween: 0, slidesPerColumn:1,},
  1279:{slidesPerView: 1,spaceBetween: 0,slidesPerColumn:1,},
  750:{slidesPerView: 1,spaceBetween: 0,slidesPerColumn:1,},
  },
  
 
});
 
</script>


<?php if(in_array(($site['indexcp']), explode(',',"1"))): ?>     
<div class="IndexProduct">
    <div class="IndexProductNr">
       <?php $__XzlIfVRPKw__ = \addons\cms\model\Channel::getChannelList(["id"=>"channel","typeid"=>"44","row"=>"20","type"=>"son","condition"=>"0=cpindex"]); if(is_array($__XzlIfVRPKw__) || $__XzlIfVRPKw__ instanceof \think\Collection || $__XzlIfVRPKw__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__XzlIfVRPKw__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$channel): $mod = ($i % 2 );++$i;?>
       <dl class="box">
            <dt><em><?php echo $channel['name']; ?></em>  <a href="<?php echo $channel['url']; ?>">More</a></dt>
            <?php if($channel['has_child']): ?>
             <dd>
                <ul>
                    <?php $__iN9IXdhrJ4__ = \addons\cms\model\Channel::getChannelList(["id"=>"son","type"=>"son","typeid"=>$channel['id'],"cache"=>"0","row"=>"20","condition"=>"0=cpindex"]); if(is_array($__iN9IXdhrJ4__) || $__iN9IXdhrJ4__ instanceof \think\Collection || $__iN9IXdhrJ4__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__iN9IXdhrJ4__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$son): $mod = ($i % 2 );++$i;$__NyCsurwKcF__ = \addons\cms\model\Archives::getArchivesList(["id"=>"item","flag"=>"index","row"=>"10","orderby"=>"rand","channel"=>$son['id']]); if(is_array($__NyCsurwKcF__) || $__NyCsurwKcF__ instanceof \think\Collection || $__NyCsurwKcF__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__NyCsurwKcF__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?> 
                    <li>
                        <a href="<?php echo $item['url']; ?>">
                          <div class="imghover"><img src="<?php echo $item['image']; ?>"></div>
                          <div class="IndexProductTxt">
                              <h3><?php echo $item['title']; ?></h3>
                              <?php if(!(empty($item['price']) || (($item['price'] instanceof \think\Collection || $item['price'] instanceof \think\Paginator ) && $item['price']->isEmpty()))): ?><span><?php echo $item['price']; ?></span><?php endif; ?> 
                            
                          </div>    
                        </a>
                    </li>
                    <?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__NyCsurwKcF__; endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__iN9IXdhrJ4__; ?>
                </ul>
            </dd>
            <?php else: ?>
            <dd>
                <ul>
                    
                    <?php $__RkOPqfsI56__ = \addons\cms\model\Archives::getArchivesList(["id"=>"item","flag"=>"index","row"=>"4","orderby"=>"rand","channel"=>$channel['id']]); if(is_array($__RkOPqfsI56__) || $__RkOPqfsI56__ instanceof \think\Collection || $__RkOPqfsI56__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__RkOPqfsI56__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?> 
                    <li>
                        <a href="<?php echo $item['url']; ?>">
                          <div class="imghover"><img src="<?php echo $item['image']; ?>"></div>
                          <div class="IndexProductTxt">
                              <h3><?php echo $item['title']; ?></h3>
                              <?php if(!(empty($item['price']) || (($item['price'] instanceof \think\Collection || $item['price'] instanceof \think\Paginator ) && $item['price']->isEmpty()))): ?><span><?php echo $item['price']; ?></span><?php endif; ?> 
                            
                          </div>    
                        </a>
                    </li>
                    <?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__RkOPqfsI56__; ?>
                    
                </ul>
            </dd>
            <?php endif; ?>
        </dl>
        <?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__XzlIfVRPKw__; ?>
        
    </div>
</div>
<?php endif; ?> 


<!--首页叠加开始--> 
<?php $__aEn5icqvrj__ = \addons\cms\model\Block::getBlockList(["id"=>"block","name"=>"index","orderby"=>"weigh","orderway"=>"desc"]); if(is_array($__aEn5icqvrj__) || $__aEn5icqvrj__ instanceof \think\Collection || $__aEn5icqvrj__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__aEn5icqvrj__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$block): $mod = ($i % 2 );++$i;if(in_array(($block['ys']), explode(',',"1"))): ?>
<!--编辑器-->
<div class="indexBJQ">
    <div class="box BJQ"><?php echo $block['content']; ?></div>
</div>
<?php endif; if(in_array(($block['ys']), explode(',',"2"))): ?>
    <!--编辑器+图+链接-->     
     <?php if(in_array(($block['ww']), explode(',',"1"))): ?>
     <!--默认宽度    -->
     <div class="indexAbout indexAbout<?php echo $block['id']; ?>" id="about">
        <div class="indexA <?php if(in_array(($block['lr']), explode(',',"3"))): ?>indexA2<?php endif; ?>">
         <div class="indexAboutTxt box">	
                <?php if(!(empty($block['image']) || (($block['image'] instanceof \think\Collection || $block['image'] instanceof \think\Paginator ) && $block['image']->isEmpty()))): ?><img src="<?php echo $block['image']; ?>"><?php endif; ?> 
             	<div class="BJQ" style="<?php if(empty($block['image']) || (($block['image'] instanceof \think\Collection || $block['image'] instanceof \think\Paginator ) && $block['image']->isEmpty())): ?>width:100%;<?php endif; ?>">
             	    <?php echo $block['content']; if(!(empty($block['url']) || (($block['url'] instanceof \think\Collection || $block['url'] instanceof \think\Paginator ) && $block['url']->isEmpty()))): ?><a href="<?php echo $block['url']; ?>"><?php echo $block['title']; ?></a><?php endif; ?> 
             	</div>
         </div>
        </div>
       
     </div>
     <?php endif; if(in_array(($block['ww']), explode(',',"2"))): ?> 
     <!--全屏宽度    -->
    <div class="FootCuBox <?php if(in_array(($block['lr']), explode(',',"3"))): ?>FootCuBox2<?php endif; ?>">
        <div class="FootCuImg"><img src="<?php echo $block['image']; ?>"></div>
        <div class="FootCuTxt box">
            <div class="FootCuTxtPd">
            <?php echo $block['content']; if(!(empty($block['url']) || (($block['url'] instanceof \think\Collection || $block['url'] instanceof \think\Paginator ) && $block['url']->isEmpty()))): ?><a href="<?php echo $block['url']; ?>"><?php echo $block['title']; ?></a><?php endif; ?> 
            </div>
        </div>
        
    </div>
 <?php endif; endif; if(in_array(($block['ys']), explode(',',"3"))): ?>
<!--编辑器+图册-->
  <div class="indeximgsBJ">
    <div class="box">
        <?php if(!(empty($block['content']) || (($block['content'] instanceof \think\Collection || $block['content'] instanceof \think\Paginator ) && $block['content']->isEmpty()))): ?><?php echo $block['content']; endif; ?> 
    </div>
    <ul class="indeximgs box">
    <?php if(is_array(explode(',',$block['imgs'])) || explode(',',$block['imgs']) instanceof \think\Collection || explode(',',$block['imgs']) instanceof \think\Paginator): $i = 0; $__LIST__ = explode(',',$block['imgs']);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$image): $mod = ($i % 2 );++$i;?>
        <li data-src="<?php echo cdnurl($image); ?>">
            <em class="img43"><img src="<?php echo cdnurl($image); ?>"></em>
        </li> 
      <?php endforeach; endif; else: echo "" ;endif; ?>
    </ul>
     </div>
<?php endif; if(in_array(($block['ys']), explode(',',"4"))): ?>
<!--编辑器+图集-->
  <div class="indexAUlBJ indexAUlBJ<?php echo $block['id']; ?>">
    <div class="box">
        <?php if(!(empty($block['content']) || (($block['content'] instanceof \think\Collection || $block['content'] instanceof \think\Paginator ) && $block['content']->isEmpty()))): ?><?php echo $block['content']; endif; ?> 
    </div>
    <ul class="indexAUl box">
    <?php if(is_array(explode(',',$block['images'])) || explode(',',$block['images']) instanceof \think\Collection || explode(',',$block['images']) instanceof \think\Paginator): $i = 0; $__LIST__ = explode(',',$block['images']);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$image): $mod = ($i % 2 );++$i;?>
        <li>
            <em><img src="<?php echo cdnurl($image); ?>"></em>
            <div>
                <?php if(!(empty($block['intro'][$key]['info']) || (($block['intro'][$key]['info'] instanceof \think\Collection || $block['intro'][$key]['info'] instanceof \think\Paginator ) && $block['intro'][$key]['info']->isEmpty()))): ?><h3><?php echo $block['intro'][$key]['info']; ?></h3><?php endif; if(!(empty($block['intro'][$key]['txt']) || (($block['intro'][$key]['txt'] instanceof \think\Collection || $block['intro'][$key]['txt'] instanceof \think\Paginator ) && $block['intro'][$key]['txt']->isEmpty()))): ?><p><?php echo $block['intro'][$key]['txt']; ?></p><?php endif; ?>
            </div>
        </li> 
      <?php endforeach; endif; else: echo "" ;endif; ?>
    </ul>
     </div>
<?php endif; if(in_array(($block['ys']), explode(',',"5"))): ?>
<!--编辑器+图集+背景+链接-->
 <div class="indexF" <?php if(!(empty($block['image']) || (($block['image'] instanceof \think\Collection || $block['image'] instanceof \think\Paginator ) && $block['image']->isEmpty()))): ?>style="background-image: url(<?php echo $block['image']; ?>);"<?php endif; ?>>
        <?php if(!(empty($block['content']) || (($block['content'] instanceof \think\Collection || $block['content'] instanceof \think\Paginator ) && $block['content']->isEmpty()))): ?>
     	<div class="box indexFHead">
     	    <div class="BJQ">
     	        <?php echo $block['content']; ?>
     	    </div>
        </div>
        <?php endif; if(!(empty($block['images']) || (($block['images'] instanceof \think\Collection || $block['images'] instanceof \think\Paginator ) && $block['images']->isEmpty()))): ?>
      <ul class="box indexFul">
        <?php if(is_array(explode(',',$block['images'])) || explode(',',$block['images']) instanceof \think\Collection || explode(',',$block['images']) instanceof \think\Paginator): $i = 0; $__LIST__ = explode(',',$block['images']);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$image): $mod = ($i % 2 );++$i;?>
            <li>
                <em><img src="<?php echo cdnurl($image); ?>"></em>
                <div>
                    <?php if(!(empty($block['intro'][$key]['info']) || (($block['intro'][$key]['info'] instanceof \think\Collection || $block['intro'][$key]['info'] instanceof \think\Paginator ) && $block['intro'][$key]['info']->isEmpty()))): ?><h3><?php echo $block['intro'][$key]['info']; ?></h3><?php endif; if(!(empty($block['intro'][$key]['txt']) || (($block['intro'][$key]['txt'] instanceof \think\Collection || $block['intro'][$key]['txt'] instanceof \think\Paginator ) && $block['intro'][$key]['txt']->isEmpty()))): ?><p><?php echo $block['intro'][$key]['txt']; ?></p><?php endif; ?>
                </div>
            </li> 
          <?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
        <?php endif; if(!(empty($block['url']) || (($block['url'] instanceof \think\Collection || $block['url'] instanceof \think\Paginator ) && $block['url']->isEmpty()))): ?><a class="indexFa" href="<?php echo $block['url']; ?>"><?php echo $block['title']; ?></a><?php endif; ?> 
 </div>
<?php endif; endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__aEn5icqvrj__; ?> 
<!--首页叠加结束-->


 







 

 
 


 
 
    
 
  
 
  

   

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
        	    <?php $__ghEI3PJv6M__ = \addons\cms\model\Channel::getChannelList(["id"=>"channel","type"=>"son","condition"=>"1=isnav AND 0=nofoot"]); if(is_array($__ghEI3PJv6M__) || $__ghEI3PJv6M__ instanceof \think\Collection || $__ghEI3PJv6M__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__ghEI3PJv6M__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$channel): $mod = ($i % 2 );++$i;?>
                <a href="<?php echo $channel['url']; ?>" title="<?php echo $channel['name']; ?>"><?php echo $channel['name']; ?></a>
                <?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__ghEI3PJv6M__; ?>
              	</div>
              	
              	
              	
                 <?php if(in_array(($site['indexcp']), explode(',',"1"))): $__m6JiZVR8Ta__ = \addons\cms\model\Channel::getChannelList(["id"=>"nav","type"=>"top","condition"=>"1=isnav AND 0=nofoot","cache"=>"0","model"=>"2"]); if(is_array($__m6JiZVR8Ta__) || $__m6JiZVR8Ta__ instanceof \think\Collection || $__m6JiZVR8Ta__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__m6JiZVR8Ta__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$nav): $mod = ($i % 2 );++$i;?>
                  	<div class="footAB">
            	    <h4><?php echo $nav['name']; ?></h4>
            	        <?php $__TRN5cZEBa4__ = \addons\cms\model\Channel::getChannelList(["id"=>"channel","type"=>"son","typeid"=>$nav['id'],"cache"=>"0","condition"=>"1=isnav AND 0=nofoot"]); if(is_array($__TRN5cZEBa4__) || $__TRN5cZEBa4__ instanceof \think\Collection || $__TRN5cZEBa4__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__TRN5cZEBa4__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$channel): $mod = ($i % 2 );++$i;?>
                        <a href="<?php echo $channel['url']; ?>" title="<?php echo $channel['name']; ?>"><?php echo $channel['name']; ?></a>
                        <?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__TRN5cZEBa4__; ?>
                    </div>
                  	<?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__m6JiZVR8Ta__; endif; if(in_array(($site['indexfw']), explode(',',"1"))): ?> 
            	    <!--服务二级菜单-->
            	    <div class="footAD">
            	    <h4>Services</h4>
            	    <?php $__S7MDIkOcg6__ = \addons\cms\model\Archives::getArchivesList(["id"=>"navshow","channel"=>"38","orderby"=>"weigh","orderway"=>"desc","flag"=>"top"]); if(is_array($__S7MDIkOcg6__) || $__S7MDIkOcg6__ instanceof \think\Collection || $__S7MDIkOcg6__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__S7MDIkOcg6__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$navshow): $mod = ($i % 2 );++$i;?>
                          <a href="<?php echo $navshow['url']; ?>" title="<?php echo $navshow['title']; ?>"><?php echo $navshow['title']; ?></a>
                    <?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__S7MDIkOcg6__; if(in_array(($site['indexfdc']), explode(',',"1"))): ?>   
                        <!--项目-->
                	    <div class="footABNr">
                        <?php $__PkER4jedLN__ = \addons\cms\model\Archives::getArchivesList(["id"=>"navshow","channel"=>"51","orderby"=>"weigh","orderway"=>"desc","flag"=>"top"]); if(is_array($__PkER4jedLN__) || $__PkER4jedLN__ instanceof \think\Collection || $__PkER4jedLN__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__PkER4jedLN__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$navshow): $mod = ($i % 2 );++$i;?>
                              <a href="<?php echo $navshow['url']; ?>" title="<?php echo $navshow['title']; ?>"><img src="<?php echo $navshow['image']; ?>"><h3><?php echo $navshow['title']; ?></h3></a>
                        <?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__PkER4jedLN__; ?>
                		</div> 
                	<?php endif; ?>	
                	</div>
            	<?php endif; ?>	
         
        	    
        	    <!--联系方式-->
            	<div class="footAC">
                    <h4>Contact Us</h4>
                    <ul>
                    <?php $__ZiIv6K9AME__ = \addons\cms\model\Block::getBlockList(["id"=>"block","name"=>"contact","orderby"=>"weigh","orderway"=>"desc","condition"=>"1=sf"]); if(is_array($__ZiIv6K9AME__) || $__ZiIv6K9AME__ instanceof \think\Collection || $__ZiIv6K9AME__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__ZiIv6K9AME__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$block): $mod = ($i % 2 );++$i;?> 
                    <li><span><i class="ico <?php echo $block['image']; ?>"></i></span><p><a href="<?php echo $block['url']; ?>" title=""><?php echo $block['title']; ?> : <?php echo str_replace(["<p>","</p>"], "", $block['content']); ?></a></p></li>
                    <?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__ZiIv6K9AME__; ?>
                    </ul>
                </div>
                 
            </div>
          </div>
          
          <!--版权-->
          <div class="copyright">
            <div class="box">
                  <?php $__UB5mzde4Mu__ = \addons\cms\model\Block::getBlockList(["id"=>"block","name"=>"zf","orderby"=>"weigh","orderway"=>"desc"]); if(is_array($__UB5mzde4Mu__) || $__UB5mzde4Mu__ instanceof \think\Collection || $__UB5mzde4Mu__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__UB5mzde4Mu__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$block): $mod = ($i % 2 );++$i;?> 
                  <div class="copyrightRight">
                        <?php if(is_array(explode(',',$block['images'])) || explode(',',$block['images']) instanceof \think\Collection || explode(',',$block['images']) instanceof \think\Paginator): $i = 0; $__LIST__ = explode(',',$block['images']);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$image): $mod = ($i % 2 );++$i;?>
                         <a><img src="<?php echo cdnurl($image); ?>"></a>   
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                  </div>
                  <?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__UB5mzde4Mu__; ?>  
                <div class="shemei">
    			    <?php $__yckK3Z0Ggf__ = \addons\cms\model\Block::getBlockList(["id"=>"block","name"=>"sm","orderby"=>"weigh","orderway"=>"desc"]); if(is_array($__yckK3Z0Ggf__) || $__yckK3Z0Ggf__ instanceof \think\Collection || $__yckK3Z0Ggf__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__yckK3Z0Ggf__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$block): $mod = ($i % 2 );++$i;?>
    				<a href="<?php echo $block['url']; ?>" title="<?php echo $block['title']; ?>" target="_blank"><i class="ico <?php echo $block['image']; ?>"></i></a>
    			    <?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__yckK3Z0Ggf__; ?> 
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