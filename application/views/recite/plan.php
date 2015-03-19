<div class="content">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
	<script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
	<script>
  	$(function() {
   		$("#datepicker").datepicker({dateFormat:'yy-mm-dd', minDate: 0});
  	});
  	</script>
    <h1>背单词计划制定</h1>
	<form method="post" action="<?php echo URL;?>recite/createPlan">
		范围: <select name="field">
			<option value="toefl">TOEFL</option>
			<option value="gre">GRE</option>
			<option value="cet4">CET4</option>
			<option value="cet6">CET6</option>
			</select>
			<br>
		完成时限: <input type="text" id="datepicker" name="due"/>
		<input type="submit" value='创建计划'/>
	</form>
    <!-- echo out the system feedback (error and success messages) -->
    <?php $this->renderFeedbackMessages(); ?>

    <h1 style="margin-top: 50px;">我的背单词计划</h1>
	<table>
    <?php
        if ($this->plans) {
			echo '<tr>
				  <td>类别</td>
				  <td>计划日期</td>
				  <td>完成状态</td>
				  </tr>';
            foreach($this->plans as $key => $value) {
                echo '<tr>';
                echo '<td>' . htmlentities($value->field) . '</td>';
                echo '<td>' . htmlentities($value->due) . '</td>';
                echo '<td>' . htmlentities($this->planState[$value->plan_id]) . '</td>';
                echo '<td><a href="'. URL . 'recite/deletePlan/' . $value->plan_id.'">删除</a></td>';
                echo '</tr>';
            }
        } else {
            echo 'No plans yet. Create one!';
        }
    ?>
    </table>
</div>
