<div class="content">
    <!-- echo out the system feedback (error and success messages) -->
    <?php $this->renderFeedbackMessages(); ?>
    
    
    <script type="text/javascript">
	    $(document).ready( function() {
		    var wordList = <?php echo json_encode($this->currentWords); ?>;
		    var plan_id = <?php echo $this->plan_id; ?>;
		    var index = 0;
		    var sendData = {};
		    sendData.plan_id = plan_id;
		    var current_step;
		    var max_number_of_steps;

			function judgeFinish() {
				var flag = true;
				var sum = 0.0;
				var length = wordList.length;
				for (var i=0; i<length; i++) {
					if (wordList[i]['w']!=null) {
						if (parseFloat(wordList[i]['w'])<0.5)
							flag = false;
						sum+=parseFloat(wordList[i]['w']);
					}
					else {
						sum = 0;
						break;
					}
				}
				var avg = sum/length;
				if (avg < 0.8)
					flag = false;
				return flag;
			}

			function updateList(word_id, msg) {
				var length = wordList.length;
				for (var i=0; i<length; i++) {
					if (wordList[i]['word_id']==word_id) {
						if (msg>=0) {
							wordList[i]['w'] = msg;
							break;
						}
						else {
							wordList.splice(i,1);
							break;
						}
					}
				}
			}
		    
		    function display(index) {
			    if (judgeFinish()==false) {
				    var currentWordRow = wordList[index];
				    current_step = 1;
					if (currentWordRow['root']) {
						max_number_of_steps = 5;
						$('.content').prepend('<div id="step5"></div>');
						$('.content').prepend('<div id="step4"></div>');
						$('.content').prepend('<div id="step3" class="sample"></div>');
						$('.content').prepend('<div id="step2" ></div>');
						$('.content').prepend('<div id="step1"></div>');
						$('#step1').text(currentWordRow['word']);
						$('#step2').text('词根: '+currentWordRow['root']);
						$('#step3').text('例句: '+currentWordRow['example']);
						$('#step4').html('<img src=<?php echo URL; ?>public/img/'+currentWordRow['word']+'.jpg height="200" width="200"></img>');
						$('#step5').text(currentWordRow['definition']);
						$('#step2').hide();
						$('#step3').hide();
						$('#step4').hide();
						$('#step5').hide();
						sendData.hasRoot = 1;
						}
						
		    		else {
						max_number_of_steps = 4;
						$('.content').prepend('<div id="step4"></div>');
						$('.content').prepend('<div id="step3"></div>');
						$('.content').prepend('<div id="step2" class="sample"></div>');
						$('.content').prepend('<div id="step1"></div>');
						$('#step1').text(currentWordRow['word']);
						$('#step2').text('例句: '+currentWordRow['example']);
						$('#step3').html('<img src=<?php echo URL; ?>public/img/'+currentWordRow['word']+'.jpg></img>');
						$('#step4').text(currentWordRow['definition']);
						$('#step2').hide();
						$('#step3').hide();
						$('#step4').hide();
						sendData.hasRoot = 0;
						}
					
					$('#redobtn').hide();
					$('#submitbtn').hide();
					$('#stepbtn').show();
					$('#knowbtn').show();
					sendData.word_id = currentWordRow['word_id'];
			    }
			    
			    else {
			    	$('#redobtn').remove();
					$('#submitbtn').remove();
					$('#stepbtn').remove();
					$('#knowbtn').remove();
					$.ajax({
						type: "POST",
						url: "<?php echo URL; ?>recite/saveDate",
						data: {plan_id:plan_id}
						});
			    	$('.content').append('<div id="finish">今日已完成啦！</div>')
			    	$('.content').append('<a href="<?php echo URL; ?>recite/index" class="back">返回</a>')
			    }
			}

			function clearAll() {
				$('#step1').remove();
				$('#step2').remove();
				$('#step3').remove();
				$('#step4').remove();
				$('#step5').remove();
			}
			
			display(index);
			 
			$('#stepbtn').click( function() {  
				var next_step = current_step + 1;
				$('#step'+next_step).slideDown();
			    current_step++;
				if (current_step == max_number_of_steps) {
					$('#stepbtn').hide();
					$('#knowbtn').hide();
					$('#submitbtn').show();
					sendData.steps = current_step;
					}
			});

			$('#knowbtn').click( function() {
				sendData.steps = current_step;
				while (current_step <= max_number_of_steps) {
					$('#step'+current_step).slideDown();
					current_step++;
					}
					$('#stepbtn').hide();
					$('#knowbtn').hide();
					$('#redobtn').show();
					$('#submitbtn').show();
					
			});   
					 
			$('#redobtn').click( function() {  
				 while (current_step != 1) {
					$('#step'+current_step).slideUp();
					current_step--;
					} 
		            $('#stepbtn').show(); 
		            $('#knowbtn').show();
		            $('#redobtn').hide();
		            $('#submitbtn').hide();
			}); 
				 
			$('#submitbtn').click( function() {
				$.ajax({
					type: "POST",
					url: "<?php echo URL; ?>recite/saveWeight",
					data: sendData
					})
					.done(function( msg ) {
						updateList(sendData.word_id, msg);
						var maxIndex = wordList.length - 1;
						if (index < maxIndex)
							index++;
						else
							index=0;
						clearAll();
						display(index);
					});
			  });
		});
    </script>
  
    <div id='button'>
    <button id="stepbtn">不认识诶</button>
	<button id="knowbtn" >认识啊</button>
	<button id="redobtn" >后悔了</button>
	<button id="submitbtn" >下个单词</button>
    </div>
    
</div>


