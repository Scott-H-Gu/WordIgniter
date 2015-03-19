<div class="content">
    <h1>我的笔记</h1>
    <h3></h3>

    <!-- echo out the system feedback (error and success messages) -->
    <?php $this->renderFeedbackMessages(); ?>

    <form method="post" action="<?php echo URL;?>note/create">
        <label>新的笔记： </label><input type="text" name="note_text" />
        <input type="submit" value='创建' autocomplete="off" />
    </form>

    <h2 style="margin-top: 50px;">笔记列表</h2>

    <table>
    <?php
        if ($this->notes) {
            foreach($this->notes as $key => $value) {
                echo '<tr>';
                echo '<td>' . htmlentities($value->note_text) . '</td>';
                echo '<td><a href="'. URL . 'note/edit/' . $value->note_id.'">编辑</a></td>';
                echo '<td><a href="'. URL . 'note/delete/' . $value->note_id.'">删除</a></td>';
                echo '</tr>';
            }
        } else {
            echo '还没有笔记！创建一些吧~';
        }
    ?>
    </table>
</div>
