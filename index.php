<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	
	<title>PHP Quiz</title>
	
	<link rel="stylesheet" type="text/css" href="css/style.css" />
</head>

<body>

	<div id="page-wrap">

		<h1>Guess whether the composition is from bot or human</h1>
		<br><br>
		<form action="grade.php" method="post" id="quiz">
		
            <ol>
            
                <li>
                
                    <audio controls>
                      <source src="horse.ogg" type="audio/ogg">
                      <source src="1.m4a" type="audio/mp4">
                    Your browser does not support the audio element.
                    </audio>
                    
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-A" value="A" />
                        <label for="question-1-answers-A">A) Human </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-B" value="B" />
                        <label for="question-1-answers-B">B) Bot</label>
                    </div>
                
                </li>
                
                <li>
                
                    <audio controls>
                      <source src="horse.ogg" type="audio/ogg">
                      <source src="2.m4a" type="audio/mp4">
                    Your browser does not support the audio element.
                    </audio>
                    
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-A" value="A" />
                        <label for="question-2-answers-A">A) Human </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-B" value="B" />
                        <label for="question-2-answers-B">B) Bot</label>
                    </div>
                
                </li>
                
                <li>
                
                    <audio controls>
                      <source src="horse.ogg" type="audio/ogg">
                      <source src="3.mp3" type="audio/mp3">
                    Your browser does not support the audio element.
                    </audio>
                    
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-A" value="A" />
                        <label for="question-3-answers-A">A) Human </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-B" value="B" />
                        <label for="question-3-answers-B">B) Bot</label>
                    </div>
                
                </li>
                
                <li>
                
                    <audio controls>
                      <source src="horse.ogg" type="audio/ogg">
                      <source src="4.mp3" type="audio/mp3">
                    Your browser does not support the audio element.
                    </audio>
                    
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-A" value="A" />
                        <label for="question-4-answers-A">A) Human </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-B" value="B" />
                        <label for="question-4-answers-B">B) Bot</label>
                    </div>
                
                </li>
            
            </ol>
            
            <input type="submit" value="Submit Quiz" />
		
		</form>
	
	</div>
	
	<script type="text/javascript">
	var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
	document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
	</script>
	<script type="text/javascript">
	var pageTracker = _gat._getTracker("UA-68528-29");
	pageTracker._initData();
	pageTracker._trackPageview();
	</script>

</body>

</html>