<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:71:"/Users/panliu/Documents/project/ozz/addons/cms/view/default1/index.html";i:1669554324;s:76:"/Users/panliu/Documents/project/ozz/addons/cms/view/default1/common/top.html";i:1676041756;s:77:"/Users/panliu/Documents/project/ozz/addons/cms/view/default1/common/foot.html";i:1669543029;}*/ ?>
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
               <?php $__ROnsu9DwI1__ = \addons\cms\model\Block::getBlockList(["id"=>"block","name"=>"contact","orderby"=>"weigh","orderway"=>"desc","condition"=>"1=foottop"]); if(is_array($__ROnsu9DwI1__) || $__ROnsu9DwI1__ instanceof \think\Collection || $__ROnsu9DwI1__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__ROnsu9DwI1__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$block): $mod = ($i % 2 );++$i;?> 
                    <p><a href="<?php echo $block['url']; ?>" title=""><span><i class="ico <?php echo $block['image']; ?>"></i></span> <?php echo $block['title']; ?> : <?php echo str_replace(["<p>","</p>"], "", $block['content']); ?></a></p>
               <?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__ROnsu9DwI1__; ?>
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
            <?php $__0MlRfToFOQ__ = \addons\cms\model\Channel::getChannelList(["id"=>"nav","type"=>"top","cache"=>"0","condition"=>"1=isnav","row"=>"20"]); if(is_array($__0MlRfToFOQ__) || $__0MlRfToFOQ__ instanceof \think\Collection || $__0MlRfToFOQ__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__0MlRfToFOQ__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$nav): $mod = ($i % 2 );++$i;?>
                <li>
                    <a class="<?php if($nav->is_active): ?>this<?php endif; ?>" <?php if($nav['href'] == 0): ?>href="<?php echo $nav['url']; ?>"<?php endif; if($nav['target'] == 1): ?>target="_blank"<?php endif; ?>><?php echo $nav['name']; ?></a>
                    <?php if($nav['has_child']): ?>
                    <ul>
                       
                        <?php $__hYw8kReL5D__ = \addons\cms\model\Archives::getArchivesList(["id"=>"navshow","channel"=>$nav['id'],"orderby"=>"weigh","orderway"=>"desc","flag"=>"top","row"=>"20"]); if(is_array($__hYw8kReL5D__) || $__hYw8kReL5D__ instanceof \think\Collection || $__hYw8kReL5D__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__hYw8kReL5D__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$navshow): $mod = ($i % 2 );++$i;?>
                        <li><a  href="<?php echo $navshow['url']; ?>" title="<?php echo $navshow['title']; ?>"><?php echo $navshow['title']; ?></a></li>
                        <?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__hYw8kReL5D__; $__yxnQBliuAd__ = \addons\cms\model\Channel::getChannelList(["id"=>"son","type"=>"son","condition"=>"1=isnav","typeid"=>$nav['id'],"cache"=>"0","row"=>"20"]); if(is_array($__yxnQBliuAd__) || $__yxnQBliuAd__ instanceof \think\Collection || $__yxnQBliuAd__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__yxnQBliuAd__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$son): $mod = ($i % 2 );++$i;?>
                           
                            <li><a class="<?php if($son->is_active): ?>this<?php endif; ?>" <?php if($son['href'] == 0): ?>href="<?php echo $son['url']; ?>"<?php endif; ?>><?php echo $son['name']; ?></a>
                                 <?php if($son['has_child']): ?>
                                 <ul>
                                    <?php $__sNASHbxXZI__ = \addons\cms\model\Channel::getChannelList(["id"=>"sons","condition"=>"1=isnav","type"=>"son","typeid"=>$son['id'],"cache"=>"0"]); if(is_array($__sNASHbxXZI__) || $__sNASHbxXZI__ instanceof \think\Collection || $__sNASHbxXZI__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__sNASHbxXZI__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$sons): $mod = ($i % 2 );++$i;?>
                                    <li><a class="<?php if($sons->is_active): ?>this<?php endif; ?>"  href="<?php echo $sons['url']; ?>"><?php echo $sons['name']; ?></a></li>
                                    <?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__sNASHbxXZI__; ?>
                                </ul>
                                <?php endif; ?>
                            </li>
                           
                        <?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__yxnQBliuAd__; ?>
                    </ul>
                    <?php else: ?>
                    <ul>
                        <?php $__CmBVcHeK3f__ = \addons\cms\model\Archives::getArchivesList(["id"=>"navshow","channel"=>$nav['id'],"orderby"=>"weigh","orderway"=>"desc","flag"=>"top","row"=>"20"]); if(is_array($__CmBVcHeK3f__) || $__CmBVcHeK3f__ instanceof \think\Collection || $__CmBVcHeK3f__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__CmBVcHeK3f__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$navshow): $mod = ($i % 2 );++$i;?>
                        <li><a href="<?php echo $navshow['url']; ?>" title="<?php echo $navshow['title']; ?>"><?php echo $navshow['title']; ?></a></li>
                        <?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__CmBVcHeK3f__; ?>
                    </ul>
                   <?php endif; ?>
               </li>
            <?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__0MlRfToFOQ__; ?>
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
                            <?php $__eYbFLU5yxf__ = \addons\cms\model\Block::getBlockList(["id"=>"block","name"=>"contact","orderby"=>"weigh","orderway"=>"desc","condition"=>"1=foottop"]); if(is_array($__eYbFLU5yxf__) || $__eYbFLU5yxf__ instanceof \think\Collection || $__eYbFLU5yxf__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__eYbFLU5yxf__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$block): $mod = ($i % 2 );++$i;?> 
                            <a><?php echo $block['title']; ?> : <?php echo str_replace(["<p>","</p>"], "", $block['content']); ?></a>
                            <?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__eYbFLU5yxf__; ?>
                        </p>
                     
               
                 </div>
                  
            </div>
        </div>   
    </div>


 <div class="indexNavNrC">
   <div class="box indexNavNrCBox">
    <ul class="qc" id="navC">
    <?php $__DG8H0qo4Q6__ = \addons\cms\model\Channel::getChannelList(["id"=>"nav","type"=>"top","cache"=>"0","condition"=>"1=isnav","row"=>"20"]); if(is_array($__DG8H0qo4Q6__) || $__DG8H0qo4Q6__ instanceof \think\Collection || $__DG8H0qo4Q6__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__DG8H0qo4Q6__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$nav): $mod = ($i % 2 );++$i;?>
        <li>
            <a class="<?php if($nav->is_active): ?>this<?php endif; ?>" <?php if($nav['href'] == 0): ?>href="<?php echo $nav['url']; ?>"<?php endif; ?>><?php echo $nav['name']; ?></a>
            <?php if($nav['has_child']): ?>
            <ul>
               
                <?php $__Yw2guPN0i9__ = \addons\cms\model\Archives::getArchivesList(["id"=>"navshow","channel"=>$nav['id'],"orderby"=>"weigh","orderway"=>"desc","flag"=>"top","row"=>"20"]); if(is_array($__Yw2guPN0i9__) || $__Yw2guPN0i9__ instanceof \think\Collection || $__Yw2guPN0i9__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__Yw2guPN0i9__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$navshow): $mod = ($i % 2 );++$i;?>
                <li><a href="<?php echo $navshow['url']; ?>" title="<?php echo $navshow['title']; ?>"><?php echo $navshow['title']; ?></a></li>
                <?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__Yw2guPN0i9__; $__I3Xv01oirO__ = \addons\cms\model\Channel::getChannelList(["id"=>"son","type"=>"son","condition"=>"1=isnav","typeid"=>$nav['id'],"cache"=>"0","row"=>"20"]); if(is_array($__I3Xv01oirO__) || $__I3Xv01oirO__ instanceof \think\Collection || $__I3Xv01oirO__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__I3Xv01oirO__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$son): $mod = ($i % 2 );++$i;?>
                   
                    <li><a class="<?php if($son->is_active): ?>this<?php endif; ?>"  <?php if($son['href'] == 0): ?>href="<?php echo $son['url']; ?>"<?php endif; ?>><?php echo $son['name']; ?></a>
                         <?php if($son['has_child']): ?>
                         <ul>
                            <?php $__oSIqUVNru8__ = \addons\cms\model\Channel::getChannelList(["id"=>"sons","condition"=>"1=isnav","type"=>"son","typeid"=>$son['id'],"cache"=>"0","row"=>"20"]); if(is_array($__oSIqUVNru8__) || $__oSIqUVNru8__ instanceof \think\Collection || $__oSIqUVNru8__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__oSIqUVNru8__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$sons): $mod = ($i % 2 );++$i;?>
                            <li><a class="<?php if($sons->is_active): ?>this<?php endif; ?>"  href="<?php echo $sons['url']; ?>"><?php echo $sons['name']; ?></a></li>
                            <?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__oSIqUVNru8__; ?>
                        </ul>
                        <?php endif; ?>
                    </li>
                   
                <?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__I3Xv01oirO__; ?>
            </ul>
            <?php else: ?>
            <ul>
                <?php $__VzD1dl6NLW__ = \addons\cms\model\Archives::getArchivesList(["id"=>"navshow","channel"=>$nav['id'],"orderby"=>"weigh","orderway"=>"desc","flag"=>"top","row"=>"20"]); if(is_array($__VzD1dl6NLW__) || $__VzD1dl6NLW__ instanceof \think\Collection || $__VzD1dl6NLW__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__VzD1dl6NLW__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$navshow): $mod = ($i % 2 );++$i;?>
                <li><a  href="<?php echo $navshow['url']; ?>" title="<?php echo $navshow['title']; ?>"><?php echo $navshow['title']; ?></a></li>
                <?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__VzD1dl6NLW__; ?>
            </ul>
           <?php endif; ?>
        </li>
    <?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__DG8H0qo4Q6__; ?>
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
    <?php $__jtIQCwxsL8__ = \addons\cms\model\Channel::getChannelList(["id"=>"nav","type"=>"top","cache"=>"0","condition"=>"1=isnav","row"=>"20"]); if(is_array($__jtIQCwxsL8__) || $__jtIQCwxsL8__ instanceof \think\Collection || $__jtIQCwxsL8__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__jtIQCwxsL8__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$nav): $mod = ($i % 2 );++$i;?>
        <li>
            <a class="<?php if($nav->is_active): ?>this<?php endif; ?>" <?php if($nav['href'] == 0): ?>href="<?php echo $nav['url']; ?>"<?php endif; if($nav['target'] == 1): ?>target="_blank"<?php endif; ?>><?php echo $nav['name']; ?></a>
            <?php if($nav['has_child']): ?>
            <ul>
                <?php $__ugV5tkR80v__ = \addons\cms\model\Archives::getArchivesList(["id"=>"navshow","channel"=>$nav['id'],"orderby"=>"weigh","orderway"=>"desc","flag"=>"top","row"=>"20"]); if(is_array($__ugV5tkR80v__) || $__ugV5tkR80v__ instanceof \think\Collection || $__ugV5tkR80v__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__ugV5tkR80v__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$navshow): $mod = ($i % 2 );++$i;?>
                <li><a href="<?php echo $navshow['url']; ?>" title="<?php echo $navshow['title']; ?>"><?php echo $navshow['title']; ?></a></li>
                <?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__ugV5tkR80v__; $__lCw7oKtBaX__ = \addons\cms\model\Channel::getChannelList(["id"=>"son","type"=>"son","typeid"=>$nav['id'],"cache"=>"0","condition"=>"1=isnav","row"=>"20"]); if(is_array($__lCw7oKtBaX__) || $__lCw7oKtBaX__ instanceof \think\Collection || $__lCw7oKtBaX__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__lCw7oKtBaX__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$son): $mod = ($i % 2 );++$i;?>
               
                <li><a class="<?php if($son->is_active): ?>this<?php endif; ?>"  <?php if($son['href'] == 0): ?>href="<?php echo $son['url']; ?>"<?php endif; ?>><?php echo $son['name']; ?></a>
                    <?php if($son['has_child']): ?>
                    <ul>
                        <?php $__djpctON3Uh__ = \addons\cms\model\Channel::getChannelList(["id"=>"sons","type"=>"son","typeid"=>$son['id'],"cache"=>"0","condition"=>"1=isnav","row"=>"20"]); if(is_array($__djpctON3Uh__) || $__djpctON3Uh__ instanceof \think\Collection || $__djpctON3Uh__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__djpctON3Uh__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$sons): $mod = ($i % 2 );++$i;?>
                        <li><a class="<?php if($sons->is_active): ?>this<?php endif; ?>"  href="<?php echo $sons['url']; ?>"><?php echo $sons['name']; ?></a></li>
                        <?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__djpctON3Uh__; ?>
                    </ul>
                    <?php endif; ?>
                </li>
               
                <?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__lCw7oKtBaX__; ?>
               
            </ul>
             <?php else: ?>
            <ul>
                <?php $__2P4sYQMg0E__ = \addons\cms\model\Archives::getArchivesList(["id"=>"navshow","channel"=>$nav['id'],"orderby"=>"weigh","orderway"=>"desc","flag"=>"top","row"=>"20"]); if(is_array($__2P4sYQMg0E__) || $__2P4sYQMg0E__ instanceof \think\Collection || $__2P4sYQMg0E__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__2P4sYQMg0E__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$navshow): $mod = ($i % 2 );++$i;?>
                <li><a href="<?php echo $navshow['url']; ?>" title="<?php echo $navshow['title']; ?>"><?php echo $navshow['title']; ?></a></li>
                <?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__2P4sYQMg0E__; ?>
            </ul>
            
            <?php endif; ?>
        </li>
    <?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__jtIQCwxsL8__; ?>
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
        <?php $__09AyF6bRBU__ = \addons\cms\model\Block::getBlockList(["id"=>"block","name"=>"banner","orderby"=>"weigh","orderway"=>"desc"]); if(is_array($__09AyF6bRBU__) || $__09AyF6bRBU__ instanceof \think\Collection || $__09AyF6bRBU__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__09AyF6bRBU__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$block): $mod = ($i % 2 );++$i;?>   
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
	    <?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__09AyF6bRBU__; ?> 
	    
	   
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
       <?php $__Flda4QvcoA__ = \addons\cms\model\Channel::getChannelList(["id"=>"channel","typeid"=>"44","row"=>"20","type"=>"son","condition"=>"0=cpindex"]); if(is_array($__Flda4QvcoA__) || $__Flda4QvcoA__ instanceof \think\Collection || $__Flda4QvcoA__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__Flda4QvcoA__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$channel): $mod = ($i % 2 );++$i;?>
       <dl class="box">
            <dt><em><?php echo $channel['name']; ?></em>  <a href="<?php echo $channel['url']; ?>">More</a></dt>
            <?php if($channel['has_child']): ?>
             <dd>
                <ul>
                    <?php $__iyqJwWBcZL__ = \addons\cms\model\Channel::getChannelList(["id"=>"son","type"=>"son","typeid"=>$channel['id'],"cache"=>"0","row"=>"20","condition"=>"0=cpindex"]); if(is_array($__iyqJwWBcZL__) || $__iyqJwWBcZL__ instanceof \think\Collection || $__iyqJwWBcZL__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__iyqJwWBcZL__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$son): $mod = ($i % 2 );++$i;$__AyS3JaCMst__ = \addons\cms\model\Archives::getArchivesList(["id"=>"item","flag"=>"index","row"=>"10","orderby"=>"rand","channel"=>$son['id']]); if(is_array($__AyS3JaCMst__) || $__AyS3JaCMst__ instanceof \think\Collection || $__AyS3JaCMst__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__AyS3JaCMst__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?> 
                    <li>
                        <a href="<?php echo $item['url']; ?>">
                          <div class="imghover"><img src="<?php echo $item['image']; ?>"></div>
                          <div class="IndexProductTxt">
                              <h3><?php echo $item['title']; ?></h3>
                              <?php if(!(empty($item['price']) || (($item['price'] instanceof \think\Collection || $item['price'] instanceof \think\Paginator ) && $item['price']->isEmpty()))): ?><span><?php echo $item['price']; ?></span><?php endif; ?> 
                            
                          </div>    
                        </a>
                    </li>
                    <?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__AyS3JaCMst__; endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__iyqJwWBcZL__; ?>
                </ul>
            </dd>
            <?php else: ?>
            <dd>
                <ul>
                    
                    <?php $__Fv96PEs1Vm__ = \addons\cms\model\Archives::getArchivesList(["id"=>"item","flag"=>"index","row"=>"4","orderby"=>"rand","channel"=>$channel['id']]); if(is_array($__Fv96PEs1Vm__) || $__Fv96PEs1Vm__ instanceof \think\Collection || $__Fv96PEs1Vm__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__Fv96PEs1Vm__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?> 
                    <li>
                        <a href="<?php echo $item['url']; ?>">
                          <div class="imghover"><img src="<?php echo $item['image']; ?>"></div>
                          <div class="IndexProductTxt">
                              <h3><?php echo $item['title']; ?></h3>
                              <?php if(!(empty($item['price']) || (($item['price'] instanceof \think\Collection || $item['price'] instanceof \think\Paginator ) && $item['price']->isEmpty()))): ?><span><?php echo $item['price']; ?></span><?php endif; ?> 
                            
                          </div>    
                        </a>
                    </li>
                    <?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__Fv96PEs1Vm__; ?>
                    
                </ul>
            </dd>
            <?php endif; ?>
        </dl>
        <?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__Flda4QvcoA__; ?>
        
    </div>
</div>
<?php endif; ?> 


<!--首页叠加开始--> 
<?php $__ToZ0iDlNrs__ = \addons\cms\model\Block::getBlockList(["id"=>"block","name"=>"index","orderby"=>"weigh","orderway"=>"desc"]); if(is_array($__ToZ0iDlNrs__) || $__ToZ0iDlNrs__ instanceof \think\Collection || $__ToZ0iDlNrs__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__ToZ0iDlNrs__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$block): $mod = ($i % 2 );++$i;if(in_array(($block['ys']), explode(',',"1"))): ?>
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
<?php endif; endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__ToZ0iDlNrs__; ?> 
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
        	    <?php $__S76kasoAM8__ = \addons\cms\model\Channel::getChannelList(["id"=>"channel","type"=>"son","condition"=>"1=isnav AND 0=nofoot"]); if(is_array($__S76kasoAM8__) || $__S76kasoAM8__ instanceof \think\Collection || $__S76kasoAM8__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__S76kasoAM8__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$channel): $mod = ($i % 2 );++$i;?>
                <a href="<?php echo $channel['url']; ?>" title="<?php echo $channel['name']; ?>"><?php echo $channel['name']; ?></a>
                <?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__S76kasoAM8__; ?>
              	</div>
              	
              	
              	
                 <?php if(in_array(($site['indexcp']), explode(',',"1"))): $__L4Nanwobrd__ = \addons\cms\model\Channel::getChannelList(["id"=>"nav","type"=>"top","condition"=>"1=isnav AND 0=nofoot","cache"=>"0","model"=>"2"]); if(is_array($__L4Nanwobrd__) || $__L4Nanwobrd__ instanceof \think\Collection || $__L4Nanwobrd__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__L4Nanwobrd__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$nav): $mod = ($i % 2 );++$i;?>
                  	<div class="footAB">
            	    <h4><?php echo $nav['name']; ?></h4>
            	        <?php $__Wotr6LnbI2__ = \addons\cms\model\Channel::getChannelList(["id"=>"channel","type"=>"son","typeid"=>$nav['id'],"cache"=>"0","condition"=>"1=isnav AND 0=nofoot"]); if(is_array($__Wotr6LnbI2__) || $__Wotr6LnbI2__ instanceof \think\Collection || $__Wotr6LnbI2__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__Wotr6LnbI2__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$channel): $mod = ($i % 2 );++$i;?>
                        <a href="<?php echo $channel['url']; ?>" title="<?php echo $channel['name']; ?>"><?php echo $channel['name']; ?></a>
                        <?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__Wotr6LnbI2__; ?>
                    </div>
                  	<?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__L4Nanwobrd__; endif; if(in_array(($site['indexfw']), explode(',',"1"))): ?> 
            	    <!--服务二级菜单-->
            	    <div class="footAD">
            	    <h4>Services</h4>
            	    <?php $__K18gWxXvGC__ = \addons\cms\model\Archives::getArchivesList(["id"=>"navshow","channel"=>"38","orderby"=>"weigh","orderway"=>"desc","flag"=>"top"]); if(is_array($__K18gWxXvGC__) || $__K18gWxXvGC__ instanceof \think\Collection || $__K18gWxXvGC__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__K18gWxXvGC__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$navshow): $mod = ($i % 2 );++$i;?>
                          <a href="<?php echo $navshow['url']; ?>" title="<?php echo $navshow['title']; ?>"><?php echo $navshow['title']; ?></a>
                    <?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__K18gWxXvGC__; if(in_array(($site['indexfdc']), explode(',',"1"))): ?>   
                        <!--项目-->
                	    <div class="footABNr">
                        <?php $__sAuF26DIRa__ = \addons\cms\model\Archives::getArchivesList(["id"=>"navshow","channel"=>"51","orderby"=>"weigh","orderway"=>"desc","flag"=>"top"]); if(is_array($__sAuF26DIRa__) || $__sAuF26DIRa__ instanceof \think\Collection || $__sAuF26DIRa__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__sAuF26DIRa__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$navshow): $mod = ($i % 2 );++$i;?>
                              <a href="<?php echo $navshow['url']; ?>" title="<?php echo $navshow['title']; ?>"><img src="<?php echo $navshow['image']; ?>"><h3><?php echo $navshow['title']; ?></h3></a>
                        <?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__sAuF26DIRa__; ?>
                		</div> 
                	<?php endif; ?>	
                	</div>
            	<?php endif; ?>	
         
        	    
        	    <!--联系方式-->
            	<div class="footAC">
                    <h4>Contact Us</h4>
                    <ul>
                    <?php $__476AGxjU2p__ = \addons\cms\model\Block::getBlockList(["id"=>"block","name"=>"contact","orderby"=>"weigh","orderway"=>"desc","condition"=>"1=sf"]); if(is_array($__476AGxjU2p__) || $__476AGxjU2p__ instanceof \think\Collection || $__476AGxjU2p__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__476AGxjU2p__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$block): $mod = ($i % 2 );++$i;?> 
                    <li><span><i class="ico <?php echo $block['image']; ?>"></i></span><p><a href="<?php echo $block['url']; ?>" title=""><?php echo $block['title']; ?> : <?php echo str_replace(["<p>","</p>"], "", $block['content']); ?></a></p></li>
                    <?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__476AGxjU2p__; ?>
                    </ul>
                </div>
                 
            </div>
          </div>
          
          <!--版权-->
          <div class="copyright">
            <div class="box">
                  <?php $__t5iGXmwCJy__ = \addons\cms\model\Block::getBlockList(["id"=>"block","name"=>"zf","orderby"=>"weigh","orderway"=>"desc"]); if(is_array($__t5iGXmwCJy__) || $__t5iGXmwCJy__ instanceof \think\Collection || $__t5iGXmwCJy__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__t5iGXmwCJy__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$block): $mod = ($i % 2 );++$i;?> 
                  <div class="copyrightRight">
                        <?php if(is_array(explode(',',$block['images'])) || explode(',',$block['images']) instanceof \think\Collection || explode(',',$block['images']) instanceof \think\Paginator): $i = 0; $__LIST__ = explode(',',$block['images']);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$image): $mod = ($i % 2 );++$i;?>
                         <a><img src="<?php echo cdnurl($image); ?>"></a>   
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                  </div>
                  <?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__t5iGXmwCJy__; ?>  
                <div class="shemei">
    			    <?php $__RTw9O8fArW__ = \addons\cms\model\Block::getBlockList(["id"=>"block","name"=>"sm","orderby"=>"weigh","orderway"=>"desc"]); if(is_array($__RTw9O8fArW__) || $__RTw9O8fArW__ instanceof \think\Collection || $__RTw9O8fArW__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__RTw9O8fArW__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$block): $mod = ($i % 2 );++$i;?>
    				<a href="<?php echo $block['url']; ?>" title="<?php echo $block['title']; ?>" target="_blank"><i class="ico <?php echo $block['image']; ?>"></i></a>
    			    <?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__RTw9O8fArW__; ?> 
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