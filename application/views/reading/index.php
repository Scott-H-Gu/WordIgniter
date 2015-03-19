<div class="content">
    <h1>阅读</h1>
    <script type="text/javascript" src="jquery.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
                $("#choosepolitics").click(function(){
                    $("#政治").show();
                    $("#科技").hide();
                    $("#体育").hide();
                    $("#生活").hide();
                    });
                $("#choosescience").click(function(){
                    $("#政治").hide();
                    $("#科技").show();
                    $("#体育").hide();
                    $("#生活").hide();
                    });
                $("#choosesports").click(function(){
                    $("#政治").hide();
                    $("#科技").hide();
                    $("#体育").show();
                    $("#生活").hide();
                    });
                $("#chooselife").click(function(){
                    $("#政治").hide();
                    $("#科技").hide();
                    $("#体育").hide();
                    $("#生活").show();
                    });
                $("#chooseall").click(function(){
                    $("#政治").show();
                    $("#科技").show();
                    $("#体育").show();
                    $("#生活").show();
                    });
                 });
                
    </script>
    <h4>请选择您的阅读兴趣：</h4>
    <button id="choosepolitics">政治</button>
    <button id="choosescience">科技</button>
    <button id="choosesports">体育</button>
    <button id="chooselife">生活</button>
    <button id="chooseall">全部</button>
    
    

    
    
    <!-- echo out the system feedback (error and success messages) -->
    <?php $this->renderFeedbackMessages(); ?>
    
    <h2 style="margin-top: 50px;">文章列表</h2>
    
        <p>
        <table class="reading-table">
        <?php
        
        foreach ($this->titles as $title) {
            echo 
            '<li id='.$title->classification.' index="0" class="bilingual-class rlog on" data-act="aricle-nav" data-pos="1">
            <a href="'.URL.'reading/contents/'.$title->title_id.'" hidefocus="true">
            <h3 onmouseover="" onmouseout="">
                <ins class="order"><em>'.$title->title_id.'</em></ins>
                <div class="class-title"><p lang="zh" class="zh">' .$title->name.'</p></div>
                <div class="class-cite"><span class="class-via">来源：'.$title->source.'</span><span class="class-category">'.$title->classification.'</span></div>
            </h3>
            </a></li>';
            }
            
        

        ?>
        </table>
    </p>
    </div>

            
</div>
    
