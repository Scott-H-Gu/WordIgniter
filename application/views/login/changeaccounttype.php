<div class="content">
    <h1>改变账户级别</h1>
    <p>
        
    </p>
    <p>
        
    </p>

    <!-- echo out the system feedback (error and success messages) -->
    <?php $this->renderFeedbackMessages(); ?>

    <h2>当前账户级别: <?php echo Session::get('user_account_type'); ?></h2>
    <!-- basic implementation for two account type: type 1 and type 2 -->
    <?php if (Session::get('user_account_type') == 1) { ?>
    <form action="<?php echo URL; ?>login/changeaccounttype_action" method="post">
        <label></label>
        <input type="submit" name="user_account_upgrade" value="升级" />
    </form>
    <?php } elseif (Session::get('user_account_type') == 2) { ?>
    <form action="<?php echo URL; ?>login/changeaccounttype_action" method="post">
        <label></label>
        <input type="submit" name="user_account_downgrade" value="降级" />
    </form>
    <?php } ?>
</div>
