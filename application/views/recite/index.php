<div class="content">
    <h1>背单词计划</h1>

    <!-- echo out the system feedback (error and success messages) -->
    <?php $this->renderFeedbackMessages(); ?>
    
	<table>
    <?php
        if ($this->plans) {
        	echo '<tr>
				  <td>类别</td>
				  <td>计划日期</td>
				  <td>总体完成状态</td>
                  <td>上次完成时间</td>
                  <td>今日完成状态</td>
				  </tr>';
            foreach($this->plans as $key => $value) {
                echo '<tr>';
                echo '<td>' . htmlentities($value->field) . '</td>';
                echo '<td>' . htmlentities($value->due) . '</td>';
                echo '<td>' . htmlentities($this->planState[$value->plan_id][0]) . '</td>';
                echo '<td>' . htmlentities($this->planState[$value->plan_id][1]) . '</td>';
                if ($this->planState[$value->plan_id][2])
                	echo '<td>' . "今日已完成" . '</td>';
                else
                	echo '<td>' . "今日未完成" . '</td>';
                echo '<td><a href="'. URL . 'recite/doPlan/' . $value->plan_id.'" class="back">开始！</a></td>';
                echo '</tr>';
            }
        } else {
            echo '还没有背单词计划诶！快去创建一个吧~';
        }
    ?>
    </table>
</div>
