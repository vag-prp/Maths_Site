<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="UTF-8">
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Caudex&display=swap" rel="stylesheet"> 
		<link rel="stylesheet" href="./asset/style.css" type="text/css" media="screen" charset="utf-8"/>
		<title>Μαθηματικά Β Γυμνασίου</title>
	</head>

	<body>
		<header>
			<div class="title-container">
				<div class="title">
					<img src="./asset/pngtree-math-clipart-cartoon-style-stationery-png-image_6086527.jpg" alt="main_page_icon">
					<h1 class="mainTitle">Μαθηματικά Β Γυμνασίου</h1>
				</div>
			</div>
		</header>
		<div class="content">
			<div class="navigation">
				<nav>
					<ul class="menu">
						<li><a href="index.html">Αρχική</a></li>
                        <li>
							<div class="chapters">
								<p class="chapter-menu"><a href="#">Ύλη του μαθήματος</a></p>							
								<div class="chapters-list">
									<div><a href="material_algebra.html">Άλγεβρα</a></div>
									<div><a href="material_geometry.html">Γεωμετρία</a></div>
								</div>
							</div>
						</li>
						<li><p><a href="theory.html">Επανάληψη βασικών Εννοιών Άλγεβρας</a></p></li>
						<li><p><a href="Quiz.php">Ασκήσεις</a></p></li>
					</ul>
				</nav>
				<div class="celendar">	
					<iframe src="https://hmerologio.gr/iframe/cal" frameBorder="0" width="225px" height="200px" style="border:medium none;overflow:hidden;">
						<p>Ο browser σας δεν υποστηρίζει iframes. <a href="https://hmerologio.gr">hmerologio.gr</a>.</p>
					</iframe><a href="https://hmerologio.gr" target="_blank" style="font-size:11px;font-family:monospace;position:absolute;bottom:11px;right:0px;display:inline-block;padding:0px 12px;z-index:15;color:#777;text-decoration:none;">hmerologio.gr</a>
				</div>
				<div class="clock">
					<script async defer id='202312310455342' src='https://widgets.worldtimeserver.com/Public.ashx?rid=202312310455342&theme=Analog&action=clock&wtsid=GR&hex=ff9900&city=Athens&size='></script>
				</div>
			</div>
			<div class="mainPage">

                <h2>Τελικά Αποτελέσματα</h2>
                <p> 
                    Ο Βαθμός σου είναι:
                     <?php
					    // initialize variables
						$answer1 = (isset($_POST['question-1-answers']) ? $_POST['question-1-answers'] : "E");
						$answer2 = (isset($_POST['question-2-answers']) ? $_POST['question-2-answers'] : "E");
						$answer3 = (isset($_POST['question-3-answers']) ? $_POST['question-3-answers'] : "E");
						$answer4 = (isset($_POST['question-4-answers']) ? $_POST['question-4-answers'] : "E");
						$answer5 = (isset($_POST['question-5-answers']) ? $_POST['question-5-answers'] : "E");
						$answer6 = (isset($_POST['question-6-answers']) ? $_POST['question-6-answers'] : "E");
						$answer7 = (isset($_POST['question-7-answers']) ? $_POST['question-7-answers'] : "E");
						$answer8 = (isset($_POST['question-8-answers']) ? $_POST['question-8-answers'] : "E");
						$answer9 = (isset($_POST['question-9-answers']) ? $_POST['question-9-answers'] : "E");
						$answer10 = (isset($_POST['question-10-answers']) ? $_POST['question-10-answers'] : "E");
						$totalCorrect = 0;
						
						// calculate the total correct answers
						if ($answer1 == "D") { $totalCorrect++; }
						if ($answer2 == "D") { $totalCorrect++; }
						if ($answer3 == "C") { $totalCorrect++; }
						if ($answer4 == "B") { $totalCorrect++; }
						if ($answer5 == "C") { $totalCorrect++; }
						if ($answer6 == "B") { $totalCorrect++; }
						if ($answer7 == "A") { $totalCorrect++; }
						if ($answer8 == "C") { $totalCorrect++; }
						if ($answer9 == "C") { $totalCorrect++; }
						if ($answer10 == "D") { $totalCorrect++; }
						
						// print the results
						if ($totalCorrect>=5){
                            echo "$totalCorrect/10";
                            echo "<br>";
                            echo " <h3>Πέρασες το μάθημα με επιτυχία.</h3> Μπράβο !!!";
                        }else{echo "$totalCorrect/10 ";
                            echo "<br>";
                            echo " <h3>Δεν πέρασες το μάθημα. </h3> Χρειάζεται να διαβάσεις περισσότερο !!!";
                        }
				    ?>
                </p>
                
			</div>
		</div>
		<div class="lower_page">
			Designer: Protopapas Evangelos
		</div>
	</body>
</html>