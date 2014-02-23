<div class="slide_banner">
    <dl class="login_home">
        <dd>
            <form class="tform" id="formlogin" name="formlogin" method="post" action="<?php echo Router::url(array('controller'=>'Main', 'action' => 'login'))?>">
                <p>User Name <input type="text" name="name" value="" class="input_login" placeholder="" ></p>
                <p>Password<input type="password" name="password" class="input_login" placeholder="" ></p>
            </form>
        </dd>
    </dl>
</div>