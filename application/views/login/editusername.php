<div class="content">
    <h1>编辑用户名</h1>
    
    <!-- echo out the system feedback (error and success messages) -->
    <?php $this->renderFeedbackMessages(); ?>

    <form action="<?php echo URL; ?>login/editusername_action" method="post">
        <label>新用户名</label>
        <input type="text" name="user_name" required />
        <input type="submit" value="提交" />
    </form>
</div>
