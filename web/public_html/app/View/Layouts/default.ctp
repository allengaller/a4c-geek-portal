<!DOCTYPE html>
<html lang="en"><?php echo $a;?>
<head>
    <!--<meta charset="utf-8">-->
    <!--<meta http-equiv="Content-Type" content="text/html; charset=utf-8">-->
    <meta http-equiv="Content-Type" content="text/html;charset=gbk" />
    <title><?php echo $title;?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!--link rel="stylesheet/less" href="less/bootstrap.less" type="text/css" /-->
    <!--link rel="stylesheet/less" href="less/responsive.less" type="text/css" /-->
    <!--script src="js/less-1.3.3.min.js"></script-->
    <!--append ‘#!watch’ to the browser URL, then refresh the page. -->

    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="img/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="img/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="img/apple-touch-icon-57-precomposed.png">
    <link rel="shortcut icon" href="img/favicon.png">

    <script type="text/javascript" src="/js/jquery-2.1.0.js"></script>
    <script type="text/javascript" src="/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/js/scripts.js"></script>
</head>

<body>
<div class="container">
	<div class="row clearfix">
		<div class="col-md-12 column">

            <nav class="navbar navbar-default navbar-static-top" role="navigation">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <a class="navbar-brand" href="#">
                        <img border="0" src="/img/logo.png" alt="Logo">  Geek Portal
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right more">
                        <!--<li>-->
                            <!--<a id="userLink" href="#">-->
                            <!--</a>-->
                        <!--</li>-->
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <?php
                                    if(empty($userInfo)) {
                                        echo 'More';
                                    } else if (!empty($userInfo)) {
                                        echo $accountShow = ($userInfo['name'] != $userInfo['email']) ? $userInfo['name'] : $userInfo['email'];;
                                    }
                                ?>
                                <strong class="caret"></strong>
                            </a>
                            <ul class="dropdown-menu">
                                <?php if(empty($userInfo)): ?>
                                    <li class="" data-toggle="modal" data-target="#logInModal">
                                        <a><?php echo __('登录');?></a>
                                    </li>

                                    <li class="" data-toggle="modal" data-target="#signUpModal">
                                        <a><?php echo __('注册');?></a>
                                    </li>

                                    <li class="divider"></li>
                                    <li>
                                        <!--<a href="#">For Chinese</a>-->
                                        <a href="javascript:;" class="" id="1"><?php echo __('切换至中文版');?></a>
                                    </li>

                                    <li>
                                        <!--<a href="#">For American</a>-->
                                        <a href="javascript:;" class="" id="2"><?php echo __('切换至英文版');?></a>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <?php echo $this->Html->link(__('关于'), array('controller' => 'about','action' => 'index'));?>
                                    </li>
                                    <li>
                                        <!--<a href="#">Feedback</a>-->
                                        <?php echo $this->Html->link(__('反馈'), array('controller' => 'about','action' => 'index'));?>
                                    </li>
                                <?php else: ?>
                                    <li class="" data-toggle="modal" data-target="#logInModal">
                                        <a><?php echo __('设置');?></a>
                                    </li>

                                    <li class="" data-toggle="modal" data-target="#signUpModal">
                                        <a><?php echo __('退出');?></a>
                                    </li>

                                    <li class="divider"></li>
                                    <li>
                                        <!--<a href="#">For Chinese</a>-->
                                        <a href="javascript:;" class="" id="3"><?php echo __('切换至中文版');?></a>
                                    </li>

                                    <li>
                                        <!--<a href="#">For American</a>-->
                                        <a href="javascript:;" class="" id="4"><?php echo __('切换至英文版');?></a>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <?php echo $this->Html->link(__('关于'), array('controller' => 'about','action' => 'index'));?>
                                    </li>
                                    <li>
                                        <!--<a href="#">Feedback</a>-->
                                        <?php echo $this->Html->link(__('反馈'), array('controller' => 'about','action' => 'index'));?>
                                    </li>
                                <?php endif;?>

                            </ul>
                        </li>
                    </ul>

                    <!--<form class="navbar-form navbar-right search" role="search">-->
                        <!--<div class="form-group">-->
                            <!--<input type="text" class="form-control">-->
                        <!--</div>-->
                        <!--<button type="submit" class="btn btn-default">Search</button>-->
                    <!--</form>-->

                </div>
            </nav>

			<div class="tabLine" id="tabLine">
                <?php foreach($segments as $key => $val): ?>

                    <!--Main Tab-->

                    <?php if($val['Segment']['main'] == 1): ?>
                        <ul class="nav nav-tabs">
                            <li class="active">
                                <a href="#panel-main" data-toggle="tab"><?php echo $val['Segment']['name'];?></a><
                            /li>
                        </ul>

                        <div class="tab-content">
                            <div class="tab-pane active" id="panel-main"><br/>
                                <?php foreach($mainBlocks as $key => $val): ?>
                                    <div class="panel panel-info block">
                                        <div class="panel-heading">
                                            <h3 class="panel-title"><?php echo $val['Block']['header'];?></h3>
                                        </div>
                                        <div class="panel-body">
                                            <?php foreach($blockItems[$val['Block']['id']] as $itemKey => $itemVal):?>
                                            <a href="<?php echo $itemVal['BlockItem']['url'];?>"><?php echo $itemVal['BlockItem']['name']?></a>
                                            <?php endforeach;?>

                                            <a href="<?php echo $itemVal['BlockItem']['url'];?>"><?php echo __('+');?></a>
                                        </div>
                                    </div>
                                <?php endforeach;?>
                            </div>
                        </div>

                    <!--Other Tab-->
                    <?php else: ?>
                        <ul class="nav nav-tabs">
                            <li><a href="<?php echo '#panel-'.$val['Segment']['id'];?>" data-toggle="tab"><?php echo $val['Segment']['name'];?></a></li>
                            <li><a href="#new-panel" data-toggle="tab"><?php echo __('+');?></a></li>
                        </ul>

                        <div class="tab-content">
                            <div class="tab-pane active" id="panel-<?php echo $val['Segment']['id'];?>"><br/>
                                <?php foreach($blocks as $key => $val): ?>
                                <div class="panel panel-info block">
                                    <div class="panel-heading">
                                        <h3 class="panel-title"><?php echo $val['Block']['header'];?></h3>
                                    </div>
                                    <div class="panel-body">
                                        <?php foreach($blockItems[$val['Block']['id']] as $itemKey => $itemVal):?>
                                        <a href="<?php echo $itemVal['BlockItem']['url'];?>"><?php echo $itemVal['BlockItem']['name']?></a>
                                        <?php endforeach;?>

                                        <a href="<?php echo $itemVal['BlockItem']['url'];?>"><?php echo __('+');?></a>
                                    </div>
                                </div>
                                <?php endforeach;?>
                            </div>
                        </div>

                    <?php endif;?>
                <?php endforeach;?>
			</div>
		</div>
	</div>
</div>

<ul class="nav nav-tabs" id="myTab">
    <li class="active"><a href="#home" data-toggle="tab">Home</a></li>
    <li><a href="#profile" data-toggle="tab">Profile</a></li>
    <li><a href="#messages" data-toggle="tab">Messages</a></li>
    <li><a href="#settings" data-toggle="tab">Settings</a></li>
</ul>

<div class="tab-content">
    <div class="tab-pane active" id="home">1</div>
    <div class="tab-pane" id="profile">2</div>
    <div class="tab-pane" id="messages">3</div>
    <div class="tab-pane" id="settings">4</div>
</div>

<script>
    $(function () {
        $('#myTab a:last').tab('show')
    })
</script>

<!-- logInModal Modal -->
<div class="modal fade" id="logInModal" tabindex="-1" role="dialog" aria-labelledby="logInModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="logInModalLabel"><?php echo __('欢迎回到极客导航');?></h4>
            </div>
            <div class="modal-body">
                <div class="input-group">
                    <span class="input-group-addon"><?php echo __('邮箱');?></span>
                    <input id="emailForLogIn" type="text" class="form-control" placeholder="Email">
                </div>

                <br/>

                <div class="input-group">
                    <span class="input-group-addon"><?php echo __('密码');?></span>
                    <input id="pwdForLogIn" type="text" class="form-control" placeholder="Password">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button id="submitLogIn" type="button" class="btn btn-primary"><?php echo __('登录'); ?></button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!-- signUp Modal -->
<div class="modal fade" id="signUpModal" tabindex="-1" role="dialog" aria-labelledby="singupModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="singupModalLabel"><?php echo __('欢迎来到极客导航');?></h4>
            </div>

            <div class="modal-body">
                <div class="input-group">
                    <span class="input-group-addon"><?php echo __('邮箱');?></span>
                    <input id="emailForSignUp" type="text" class="form-control" placeholder="Email">
                </div>

                <br/>

                <div class="input-group">
                    <span class="input-group-addon"><?php echo __('密码');?></span>
                    <input id="pwdForSignUp" type="text" class="form-control" placeholder="Password">
                </div>
            </div>

            <label id="statusForSignUp"></label>

            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button id="submitSignUp" type="button" class="btn btn-primary"><?php echo __('注册');?></button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<script type="text/javascript">
    $(function(){

        $('#loginLink').click(function(){
            $('#loginModal').modal();
        });

        $('#submitSignUp').click(function(){
            var email = $('#emailForSignUp').val();
            var pwd = $('#pwdForSignUp').val();
            $.ajax({
                url: "/User/signUp",
                data: 'email=' + email + '&&' + 'pwd=' + pwd,
                type: "post",
                dataType: 'json',
                success: function(data) {
                    console.log(data.status);
                    $('#signUpModal').remove();
                    alert(data.msg);
                    window.location.reload();
                }
            });
        });

        $('#submitLogIn').click(function(){
            var email = $('#emailForLogIn').val();
            var pwd = $('#pwdForLogIn').val();
            $.ajax({
                url: "/User/logIn",
                data: 'email=' + email + '&&' + 'pwd=' + pwd,
                type: "post",
                dataType: 'json',
                success: function(data) {
                    console.log(data.status);
                    $('#logInModal').remove();
                    alert(data.msg);
                    window.location.reload();
                }
            });
        });
    });
</script>

</body>

</html>


