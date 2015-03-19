<div class="content">
    <h1>账户信息</h1>

    <!-- echo out the system feedback (error and success messages) -->
    <?php $this->renderFeedbackMessages(); ?>

    <div>
        用户名: <?php echo Session::get('user_name'); ?>
    </div>
    <div>
        电子邮箱: <?php echo Session::get('user_email'); ?>
    </div>
    <div>
        头像
        <?php // if usage of gravatar is activated show gravatar image, else show local avatar ?>
        <?php if (USE_GRAVATAR) { ?>
            Your gravatar pic (on gravatar.com): <img src='<?php echo Session::get('user_gravatar_image_url'); ?>' />
        <?php } else { ?>
            （保存在服务器上）: <img src='<?php echo Session::get('user_avatar_file'); ?>' />
        <?php } ?>
    </div>
    <div>
        账户级别: <?php echo Session::get('user_account_type'); ?>
    </div>
</div>
