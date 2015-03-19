<div class="content">
    <!-- echo out the system feedback (error and success messages) -->
    <?php $this->renderFeedbackMessages(); ?>
    <?php if ($this->title) { ?>
        <p>
            <table class="reading-table">
            <?php
                echo '<h2>'.$this->title->name.'</h2>';
                echo '<br>';
                $flag=1;
                echo '<button href="'.URL.'reading/contents/'.$this->title->title_id.'" hidefocus="true">英</button>';
                echo '<button href="'.URL.'reading/contentscn/'.$this->title->title_id.'" hidefocus="true">中</button>';
                echo '<br>';
                $file=file(URL.'readingmaterial/'.$this->title->title_id.'-cn.txt');
                foreach($file as $value){
                        echo $value."<br>";
                        
                        
                    }
                 
                
                echo "</tr>";
            ?>
            </table>
        </p>
    <?php } ?>
</div>
