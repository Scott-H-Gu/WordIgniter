<div class="content">
    <h1>编辑邮箱地址</h1>
    
    <!-- echo out the system feedback (error and success messages) -->
    <?php $this->renderFeedbackMessages(); ?>

    <form action="<?php echo URL; ?>login/edituseremail_action" method="post">
        <label>新邮箱:</label>
        <input type="text" name="user_email" required />
        <input type="submit" value="提交" />
    </form>
</div>
