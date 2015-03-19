<div class="content" >
    <style>
    
    </style>

    
    <!-- echo out the system feedback (error and success messages) -->
    <?php $this->renderFeedbackMessages(); ?>
    <?php if ($this->title) { ?>
        <p>
            <table class="reading-table">
            <?php
                echo '<h2>'.$this->title->name.'</h2>';
                echo '<button id="chooseen">英</button>';
                echo '<button id="choosecn">中</button>';
                echo '<br>';
                echo '<img src="';echo URL.'readingmaterial/'.$this->title->title_id.'.jpg';
                echo '" height=300px width=300px ></img>';
                echo '<br>';
        
                $file1=file(URL.'readingmaterial/'.$this->title->title_id.'.txt');
                $file2=file(URL.'readingmaterial/'.$this->title->title_id.'-cn.txt');
                
                echo '<div id="en">';
                foreach($file1 as $value){
                        echo $value."<br>";
                }
                echo '</div>
                <div id="cn">';
                foreach($file2 as $value){
                        echo $value."<br>";
                        
                    }
                echo '</div>';
                
                echo "</tr>";
    
            ?>
            </table>
        </p>
    <?php } ?>
    <br></br><br></br>
    

    <?php
$file3=file(URL.'readingmaterial/'.$this->title->title_id.'-words.txt');
    $text= file_get_contents(URL.'readingmaterial/'.$this->title->title_id.'.txt');
    $len=strlen($text);
    $text=str_split($text);
    for ($i=0;$i<=$len-1;++$i)
    {
        if ($text[$i]=='>')
        {
            if ($text[$i-1]=="i"&&$text[$i-2]=="<")
            {
                $word="";
                for ($j=$i+1;;++$j)
                {if ($text[$j]=="<") break;
                else $word=$word.$text[$j]; 
                }
                //echo $word;
                
            }
        }
    }

    echo '<div class="readingwords"></div>';


    
    $a='anchor';$b=" ['æŋkə]";
    echo '<h2>生词：</h2>
    <ul id="videoWordContent" style="" class="tabContent videoWordContent">
    <div class="newword">';
    echo '<li><div class="wordTitle"><span class="baav"><span class="keyword">';
    foreach($file3 as $value){
                        echo $value."<br>";
                }
    echo'</span></span></div></li>';
    
    
    
    echo '</div>';
    ?>


    <script type="text/javascript">
        
        $(document).ready(function(){
            function display(msgg)
            {   
                var word = eval("(" + msg + ")");
                //$('#videoWordContent').html(word['translation']);
                //$('#videoWordContent').html('<li><div class="wordTitle"><span class="baav"><span class="keyword">'+word['name']+'</span><span class="phonetic">'+word['prounciation']+'</span></span></div><p class="phrListTab">'+word['translation']+'</p></li>');
                
                
            }

                var word={};
                word.name='anchor';
                
                $("#en").show();
                $("#cn").hide();
                $("#chooseen").click(function(){
                    $("#en").show();
                    $("#cn").hide();
                    });
                
                $("#choosecn").click(function(){
                    $("#en").hide();
                    $("#cn").show();
                    });
            
                $("#displaywords").click(function(){
                   $("#importwords").show(); 
                    
                });
            
                var title={};
                title.title_id = "<?php echo $this->title->title_id; ?>";
                
                $.ajax({
					type: "POST",
				url: "<?php echo URL; ?>reading/importantwords",
					data: title
					})
					.done(function(msg) {
						var words=msg;
					});    
            
            
                $.ajax({
					type: "POST",
					url: "<?php echo URL; ?>reading/wordtranslation",
					data: word
					})
					.done(function(msg) {
						display(msg);
					});
            
       });
        
    </script>
    </ull>
</div>





        

    