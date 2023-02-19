<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:95:"/Users/panliu/Documents/project/ozz/ozzw/public/../application/admin/view/cms/diyform/edit.html";i:1611729154;s:83:"/Users/panliu/Documents/project/ozz/ozzw/application/admin/view/layout/default.html";i:1611580232;s:80:"/Users/panliu/Documents/project/ozz/ozzw/application/admin/view/common/meta.html";i:1611580232;s:82:"/Users/panliu/Documents/project/ozz/ozzw/application/admin/view/common/script.html";i:1611580232;}*/ ?>
<!DOCTYPE html>
<html lang="<?php echo $config['language']; ?>">
    <head>
        <meta charset="utf-8">
<title><?php echo (isset($title) && ($title !== '')?$title:''); ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
<meta name="renderer" content="webkit">
<meta name="referrer" content="never">

<link rel="shortcut icon" href="/assets/img/favicon.ico" />
<!-- Loading Bootstrap -->
<link href="/assets/css/backend<?php echo \think\Config::get('app_debug')?'':'.min'; ?>.css?v=<?php echo \think\Config::get('site.version'); ?>" rel="stylesheet">

<?php if(\think\Config::get('fastadmin.adminskin')): ?>
<link href="/assets/css/skins/<?php echo \think\Config::get('fastadmin.adminskin'); ?>.css?v=<?php echo \think\Config::get('site.version'); ?>" rel="stylesheet">
<?php endif; ?>

<!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
<!--[if lt IE 9]>
  <script src="/assets/js/html5shiv.js"></script>
  <script src="/assets/js/respond.min.js"></script>
<![endif]-->
<script type="text/javascript">
    var require = {
        config:  <?php echo json_encode($config); ?>
    };
</script>

    </head>

    <body class="inside-header inside-aside <?php echo defined('IS_DIALOG') && IS_DIALOG ? 'is-dialog' : ''; ?>">
        <div id="main" role="main">
            <div class="tab-content tab-addtabs">
                <div id="content">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <section class="content-header hide">
                                <h1>
                                    <?php echo __('Dashboard'); ?>
                                    <small><?php echo __('Control panel'); ?></small>
                                </h1>
                            </section>
                            <?php if(!IS_DIALOG && !\think\Config::get('fastadmin.multiplenav') && \think\Config::get('fastadmin.breadcrumb')): ?>
                            <!-- RIBBON -->
                            <div id="ribbon">
                                <ol class="breadcrumb pull-left">
                                    <?php if($auth->check('dashboard')): ?>
                                    <li><a href="dashboard" class="addtabsit"><i class="fa fa-dashboard"></i> <?php echo __('Dashboard'); ?></a></li>
                                    <?php endif; ?>
                                </ol>
                                <ol class="breadcrumb pull-right">
                                    <?php foreach($breadcrumb as $vo): ?>
                                    <li><a href="javascript:;" data-url="<?php echo $vo['url']; ?>"><?php echo $vo['title']; ?></a></li>
                                    <?php endforeach; ?>
                                </ol>
                            </div>
                            <!-- END RIBBON -->
                            <?php endif; ?>
                            <div class="content">
                                <form id="edit-form" class="form-horizontal" role="form" data-toggle="validator" method="POST" action="">
    <input type="hidden" id="diyform-id" value="<?php echo $row['id']; ?>">
    <div class="form-group">
        <label for="c-name" class="control-label col-xs-12 col-sm-2"><?php echo __('Name'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
            <input id="c-name" data-rule="required" class="form-control" name="row[name]" type="text" value="<?php echo htmlentities($row['name']); ?>">
        </div>
    </div>
    <div class="form-group">
        <label for="c-table" class="control-label col-xs-12 col-sm-2"><?php echo __('Table'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
            <input id="c-table" data-rule="required" class="form-control" name="row[table]" readonly="" type="text" value="<?php echo $row['table']; ?>">
        </div>
    </div>
    <div class="form-group">
        <label for="c-diyname" class="control-label col-xs-12 col-sm-2"><?php echo __('Diyname'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
            <input id="c-diyname" data-rule="required;diyname" class="form-control" name="row[diyname]" type="text" value="<?php echo htmlentities($row['diyname']); ?>" data-tip="用于伪静态规则中[:diyname]替换">
        </div>
    </div>
    <div class="form-group">
        <label for="c-title" class="control-label col-xs-12 col-sm-2"><?php echo __('Title'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
            <input id="c-title" data-rule="required" class="form-control" name="row[title]" type="text" value="<?php echo htmlentities($row['title']); ?>">
        </div>
    </div>
    <div class="form-group">
        <label for="c-seotitle" class="control-label col-xs-12 col-sm-2"><?php echo __('Seotitle'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
            <input id="c-seotitle" data-rule="" class="form-control" name="row[seotitle]" type="text" value="<?php echo htmlentities($row['seotitle']); ?>" placeholder="为空时将使用表单标题">
        </div>
    </div>
    <div class="form-group">
        <label for="c-keywords" class="control-label col-xs-12 col-sm-2"><?php echo __('Keywords'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
            <input id="c-keywords" data-rule="" class="form-control" name="row[keywords]" type="text" value="<?php echo htmlentities($row['keywords']); ?>">
        </div>
    </div>
    <div class="form-group">
        <label for="c-description" class="control-label col-xs-12 col-sm-2"><?php echo __('Description'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
            <textarea id="c-description" cols="60" rows="5" data-rule="" class="form-control" name="row[description]"><?php echo htmlentities($row['description']); ?></textarea>
        </div>
    </div>
    <div class="form-group">
        <label for="c-successtips" class="control-label col-xs-12 col-sm-2"><?php echo __('Successtips'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
            <input id="c-successtips" data-rule="" class="form-control" name="row[successtips]" value="<?php echo htmlentities($row['successtips']); ?>" />
        </div>
    </div>
    <div class="form-group">
        <label for="c-redirecturl" class="control-label col-xs-12 col-sm-2"><?php echo __('Redirecturl'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
            <input id="c-redirecturl" data-rule="" class="form-control" name="row[redirecturl]" placeholder="<?php echo __('Redirecturl tips'); ?>" type="text" value="<?php echo htmlentities($row['redirecturl']); ?>">
        </div>
    </div>
    <div class="form-group">
        <label for="c-posttpl" class="control-label col-xs-12 col-sm-2"><?php echo __('Posttpl'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
            <input id="c-posttpl" data-rule="" class="form-control selectpage" value="<?php echo $row['posttpl']; ?>" name="row[posttpl]" data-source="cms/ajax/get_template_list" data-params='{"type":"diyform_post"}' data-primary-key="name" data-field="name" type="text" placeholder="自定义模板文件必须以diyform_post开头">
        </div>
    </div>
    <div class="form-group">
        <label for="c-listtpl" class="control-label col-xs-12 col-sm-2"><?php echo __('Listtpl'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
            <input id="c-listtpl" data-rule="" class="form-control selectpage" value="<?php echo $row['listtpl']; ?>" name="row[listtpl]" data-source="cms/ajax/get_template_list" data-params='{"type":"diyform_list"}' data-primary-key="name" data-field="name" type="text" placeholder="自定义模板文件必须以diyform_list开头">
        </div>
    </div>
    <div class="form-group">
        <label for="c-showtpl" class="control-label col-xs-12 col-sm-2"><?php echo __('Showtpl'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
            <input id="c-showtpl" data-rule="" class="form-control selectpage" value="<?php echo $row['showtpl']; ?>" name="row[showtpl]" data-source="cms/ajax/get_template_list" data-params='{"type":"diyform_show"}' data-primary-key="name" data-field="name" type="text" placeholder="自定义模板文件必须以diyform_show开头">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2"><?php echo __('isedit'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
            <input  id="c-isedit" name="row[isedit]" type="hidden" value="<?php echo $row['isedit']; ?>">
            <a href="javascript:;" data-toggle="switcher" class="btn-switcher" data-input-id="c-isedit" data-yes="1" data-no="0" >
                <i class="fa fa-toggle-on text-success fa-flip-horizontal <?php if($row['isedit'] == '0'): ?>fa-flip-horizontal text-gray<?php endif; ?> fa-2x"></i>
            </a>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2"><?php echo __('Needlogin'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
            <input  id="c-needlogin" name="row[needlogin]" type="hidden" value="<?php echo $row['needlogin']; ?>">
            <a href="javascript:;" data-toggle="switcher" class="btn-switcher" data-input-id="c-needlogin" data-yes="1" data-no="0" >
                <i class="fa fa-toggle-on text-success fa-flip-horizontal <?php if($row['needlogin'] == '0'): ?>fa-flip-horizontal text-gray<?php endif; ?> fa-2x"></i>
            </a>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2"><?php echo __('Usermode'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
            <?php echo Form::radios("row[usermode]", ['all'=>'全部', 'user'=>'仅用户本人数据'], $row['usermode']); ?>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2"><?php echo __('Statusmode'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
            <?php echo Form::radios("row[statusmode]", ['all'=>'全部', 'normal'=>'仅已审核数据(状态正常)'], $row['statusmode']); ?>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2"><?php echo __('Status'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
            <?php echo Form::radios("row[status]", $statusList, $row['status']); ?>
        </div>
    </div>
    <div class="form-group layer-footer">
        <label class="control-label col-xs-12 col-sm-2"></label>
        <div class="col-xs-12 col-sm-8">
            <button type="submit" class="btn btn-success btn-embossed disabled"><?php echo __('OK'); ?></button>
            <button type="reset" class="btn btn-default btn-embossed"><?php echo __('Reset'); ?></button>
        </div>
    </div>
</form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="/assets/js/require<?php echo \think\Config::get('app_debug')?'':'.min'; ?>.js" data-main="/assets/js/require-backend<?php echo \think\Config::get('app_debug')?'':'.min'; ?>.js?v=<?php echo htmlentities($site['version']); ?>"></script>
    </body>
</html>
