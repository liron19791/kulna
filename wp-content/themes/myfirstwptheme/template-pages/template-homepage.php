<?php
/*
Template Name: Home Page
*/
?>
<?php get_header(); ?>
<!-- form validation php -->
<?php
if ($_SERVER['REQUEST_METHOD']=='POST') {
if (isset($_POST['firstname'])&& isset($_POST['lastname'])&&isset($_POST['useraddress'])&&isset($_POST['cellnumber'])&&isset($_POST['useremail'])&&isset($_POST['message'])){
$firstname=$_POST["firstname"];
$lastname=$_POST["lastname"];
$useraddress=$_POST["useraddress"];
$cellnumber=$_POST["cellnumber"];
$useremail=$_POST["useremail"];
$topic=$_POST["topic"];
$message=$_POST["message"];
mail("liron19791@gmail.com","$topic","שם מלא   ".$firstname." ".$lastname." "."כתובת מגורים:  ".$useraddress." "."הדואל שלי היא:   ".$useremail." "."מספר פלאפון:   ".$cellnumber." "."ההודעה היא:   ".$message, "from:$useremail");
$thankYou="<p>תודה רבה , ההודעה נשלחה!</p>";
 }else{
 	echo "fill all the tabs";
 }

   
}

?>
<!-- section 1 -->
<div class="w3-container w3-white" id="section1" style="padding:4% 0px 0px 0px; position: relative;">
	<a href="http://www.kulna.org.il/#section1"></a>
	<img src="/wp-content/themes/myfirstwptheme/images/MehinatYeruchamLanding-10.png">
	<div class="button-template">
		<a href="http://www.kulna.org.il/#section8"><img src="/wp-content/themes/myfirstwptheme/images/Asset 2@3x.png"></a>
	</div>
</div>

<!-- section2 - why us? -->
<div class="main-subject" id="section2">
	<img src="/wp-content/themes/myfirstwptheme/images/Asset 7@2x.png">
</div>

<div class="why_are_we">
	
		
			
				 <p>מכינת ירוחם, הינה מכינה ייחודית בנוף המכינות השנתיות והחצי שנתיות. המכינה מורכבת מפסיפס ישראלי מגוון מכלל הקהלים והיישובים בארץ. המכינה מבקשת ליצור רצף חינוכי וזהותי עבור חניכה ובוגריה. בכוונה תחילה פונה לקהל גברי בלבד ויחד עימם מבקשת לכונן שפה ייחודית, ערכית, מורכבת ועמוקה. תכני המכינה נוגעים במגוון תחומים, לימוד לשם תאוות ידע וסקרנות, סדנאות והכשרות בתחומי השונים, דינמיקה קבוצתית, קיימות אומנות מוזיקה ומעורבות קהילתית בירוחם ובנגב. 
				</p>
				<p> 

					     <img src="/wp-content/themes/myfirstwptheme/images/Asset 5@2x.png"> בניית אחריות אישית קבוצתית וקהילתית . <br>
					     <img src="/wp-content/themes/myfirstwptheme/images/Asset 5@2x.png"> פיתוח אישי ומנהיגותי.   <br> 
					       <img src="/wp-content/themes/myfirstwptheme/images/Asset 5@2x.png">לימוד התרבות היהודית והכרת החברה הישראלית על גווניה השונים.   <br>  
					      <img src="/wp-content/themes/myfirstwptheme/images/Asset 5@2x.png"> הכרות וקשר עם הארץ ונופיה .  <br>
					      <img src="/wp-content/themes/myfirstwptheme/images/Asset 5@2x.png"> או לאומי הכנה לשרות משמעותי צבאי.  <br>
					      <img src="/wp-content/themes/myfirstwptheme/images/Asset 5@2x.png"> קשירת קשר התיישבותי עם הנגב בכלל ובירוחם בפרט. <br>
				</p>
				
		
	
</div>
<!-- section3 - gallery -->

<div class="slider_area" id="section3">
	
		<div class="row">
			<div class="">
				<?php masterslider(1); ?>
				<img src="/wp-content/themes/myfirstwptheme/images/Asset 8@2x.png">
			</div>
		</div>
	
</div>

<!-- section4 - graduates -->

<div class="main-subject" id="section4">
	<img src="/wp-content/themes/myfirstwptheme/images/bogrimTitle.png">
</div>
<div class="testimonials" id="testimonials">
		<div class="container" >
		    <ul class="bxslider">
		 		<li> 
	  				<div class="item">
	                	<i class="fa fa-quote-left fa-4x" aria-hidden="true"></i>
	                    <p>אני מסתכל אחורה ואומר לעצמי שהמכינה זה הצעד הכי חכם שעשיתי בחיים, עצרתי לרגע את מירוץ החיים והשקעתי בעצמי. החוויות, הכלים והידע שקיבלתי במכינה ילוו אותי בצבא ובהמשך החיים.</p>
	                    <h5> ידין אברהמי</h5>
	                    <span>בוגר מחזור ה</span>
	                </div>
			  	</li>
			  	<li>
  					<div class="item">
	                	<i class="fa fa-quote-left fa-4x" aria-hidden="true"></i>
	                    <p>אני מסכם את החצי השנה המדהימה, כמקום של רגש, ידע, שטח, אתגרים חדשים, מטרות, שאיפות, חיי קבוצה. ובמיוחד חברים לחיים. תודה לצוות המדהים!</p>
	                    <h5>יוסף ווסה </h5>
	                    <span>בוגר מחזור ה</span>
	                </div>
				</li>
				<li>
  					<div class="item">
	                	<i class="fa fa-quote-left fa-4x" aria-hidden="true"></i>
	                    <p>בשבילי המכינה בירוחם הייתה מקום במדבר בו יכולתי להיות עצמי, להשמיע ולהישמע ועדיין להרגיש במשפחה. בשבילי היום ירוחם הוא מקום בלב והמכינה נוסטלגיה מתוקה וזכר שיש מקומות שעדיין מתעסקים במה שחשוב.</p>
	                    <h5>דן יוסף</h5>
	                    <span>בוגר מחזור ב</span>
	                </div>
			    </li>
			    <li>
  					<div class="item">
	                	<i class="fa fa-quote-left fa-4x" aria-hidden="true"></i>
	                    <p>תקופה מדהימה, מאתגרת ומטלטלת. נכנסתי למכינה אדם אחד ואני יוצא אדם אחר. למדתי להאמין באנשים ובעצמי, למדתי שאם אתה הולך בדרך הקשה אתה גם הולך בדרך הנכונה. הבנתי שאפשר לתקן רק בעזרת טוב והקשבה. שמח שזכיתי להכיר אנשים מדהימים,  חברים לחיים. שמח שזכיתי להיות חלק ממכינת ירוחם. אוהב אחד אחד.</p>
	                    <h5>גיא מיכאלי</h5>
	                    <span>בוגר מחזור ה'</span>
                	</div>
				</li>
				<li>
  					<div class="item">
	                	<i class="fa fa-quote-left fa-4x" aria-hidden="true"></i>
	                    <p>המכינה מבחינתי זה בית שני.. חוויה שממנה אתה לומד להבין מהי העזרה לאחר ומקבל טעימה מן האחות אחים שיש בצבא .. מקום שבו אתה יכול לבטא את עצמך בחופשיות ולומד לקבל את דעות האחר.מקום שבוא לומדים מהי אחריות וכיצד צריך להתנהל אתה, בקיצור שיעור אחד ארוך לחיים</p>
	                    <h5>נועם סופר</h5>
	                    <span>בוגר מחזור ב</span>
	                </div>
  				</li>
			</ul>
			<div id="bx-pager">
  				<a data-slide-index="0" href=""><img src="wp-content/themes/myfirstwptheme/images/yadin.jpeg" alt="" /></a>
			    <a data-slide-index="1" href=""><img src="wp-content/themes/myfirstwptheme/images/yosef.jpg" alt="" /></a>
			    <a data-slide-index="2" href=""><img src="wp-content/themes/myfirstwptheme/images/dan.jpeg" alt="" /></a>
			    <a data-slide-index="3" href=""><img src="wp-content/themes/myfirstwptheme/images/guy.jpeg" alt="" /></a>
			    <a data-slide-index="4" href=""><img src="wp-content/themes/myfirstwptheme/images/noamS.png" alt="" /></a>
			</div>

		</div> 
</div> 

<!-- section5 - team -->

<div class="main-subject" id="section5">
	<img src="wp-content/themes/myfirstwptheme/images/teamTitle.png">
</div>    
<div class="middle-page">
	<div class="team contanier">
		<div class="row">
			<div class="flip-container col-lg-3 col-sm-3 col-md-3 col-xs-1" ontouchstart="this.classList.toggle('hover');">
				<div class="flipper">
				<!-- pic team -->
					<div class="front">
						<div class="team-card">
						    <img src="wp-content/themes/myfirstwptheme/images/hananel.jpg">
						    <h3>חננאל שקלאר</h3>
						    <h4>ראש המכינה</h4>
						</div>
					</div>
					<!-- text team -->
			     	<div class="back">
					    <div class="team-card-text">
					        <p>המכינה עבורי היא מקום המאפשר לכל חניך וחניך לבחון, לחקור, לשאול, ולהצמיח כנפיים לשירות הצבאי ולחיים בכלל. כל זאת עם שמחת חיים, חיוניות, ואהבה. מבחינתי, הייתי שמח להתחלף עם כל אחד מהחניכים ולהתחיל את התקופה המופלאה הזו. 
					        </p>
					        <hr class="hrBlue">
					    </div>
				    </div>
			    </div>	 
			</div> <!-- END person-->
			<!-- next person-->
			<div class="flip-container col-lg-3  col-sm-3 col-md-3 col-xs-1" ontouchstart="this.classList.toggle('hover');">
				<div class="flipper">
					<div class="front">
						<div class="team-card">
						    <img src="wp-content/themes/myfirstwptheme/images/noam.jpg">
						    <h3>נעם וקס</h3>
						    <h4>רכז המכינה</h4>
						</div>
					</div>
			     	<div class="back">
					    <div class="team-card-text">
						    <p>נעם וקס - תושב שדה בוקר, בן 29, בוגר הפקולטה למשפטים מהאוניברסיטה העברית, עורך דין בהכשרתו, שירת בימ"ס ירושלים.
						    </p>
						    <hr class="hrBlue">
					   </div>
				    </div>
			    </div>	 
			</div> <!-- END person-->
			<!-- next person-->
			<div class="flip-container col-lg-3  col-sm-3 col-md-3 col-xs-1" ontouchstart="this.classList.toggle('hover');">
				<div class="flipper">
					<div class="front">
					    <div class="team-card">
						    <img src="wp-content/themes/myfirstwptheme/images/luda.jpg">
						    <h3>לודה שטיוולמן</h3>
						    <h4>מנהלית</h4>
					    </div>
					</div>
			    	<div class="back">
					    <div class="team-card-text">
					      	<p>המכינה היא בית. בית בו נפתח הלב ואנחנו נותנים מתוך הנשמה והאהבה למקום. אני מחוברת לנוף לצוות להורים ולבוגרים היקרים שלנו. 
							אין הרבה מקומות כאלה, אני רואה את החבר'ה שהם רק מגיעים ורואה אותם שהם מסיימים, זה לא אותו דבר. בעצם כן, רק טוב יותר ☺
							</p>
							<hr class="hrBlue">
					   </div>
				  	</div>
			    </div>	 
			</div>
		</div> <!-- END ROW1-->
		<!-- next person-->
		<div class="row secendRow">
			<div class="flip-container col-lg-3 col-sm-3 col-md-3 col-xs-1" ontouchstart="this.classList.toggle('hover');">
				<div class="flipper">
					<div class="front">
					  	<div class="team-card">
					    	<img src="wp-content/themes/myfirstwptheme/images/benny.jpg">
					    	<h3>בני קלצהנדלר</h3>
					    	<h4>מדירך</h4>
					    </div>
					</div>
				    <div class="back">
						<div class="team-card-text">
						    <p>בני קלצהנדלר - בן 23, בוגר הישיבה בירוחם. הדריך בתנועות נוער שונות, שירת כמפק"צ בחיל התותחנים.</p>
						    <hr class="hrBlue">
						</div>
					</div>
			    </div>	 
			</div> <!-- END person-->
			<!-- next person-->
			<div class="flip-container col-lg-3 col-sm-3 col-md-3 col-xs-1" ontouchstart="this.classList.toggle('hover');">
				<div class="flipper">
					<div class="front">
					  	<div class="team-card">
						    <img src="wp-content/themes/myfirstwptheme/images/shahar.jpg">
						    <h3>סהר דהן </h3>
						    <h4>מדריך א</h4>
					    </div>
					</div>
			     	<div class="back">
					    <div class="team-card-text">
					       <p>סהר דן -  תושב אשקלון, בן 22, בוגר מחזור ב', שירת בימ"ס ירושלים, עובד כיום בקיבוץ יטבתה
					       </p>
					       <hr class="hrBlue">
					   </div>
				    </div>
			    </div>	 
			</div> <!-- END person-->
			<!-- next person--> 
			<div class="flip-container col-lg-3 col-sm-3 col-md-3 col-xs-1" ontouchstart="this.classList.toggle('hover');">
				<div class="flipper">
					<div class="front">
					    <div class="team-card">
						    <img src="wp-content/themes/myfirstwptheme/images/lior.jpeg">
						    <h3>ליאור שורק</h3>
						    <h4>מדריכה</h4>
					  	</div>
					</div>
			     	<div class="back">
					    <div class="team-card-text">
					        <p>ליאור שורק – בת 22, תושבת כפר אורנים,</p>
					        <hr class="hrBlue">
					    </div>
				 	</div>
			    </div>	 
			</div> <!-- END person-->
		</div> <!-- END ROW2-->
		<!-- next person-->
		<div class=" row secendRow">
			<div class="flip-container col-lg-3 col-sm-3 col-md-3 col-xs-1" ontouchstart="this.classList.toggle('hover');">
				<div class="flipper">
					<div class="front">
					  	<div class="team-card">
					  		<img src="wp-content/themes/myfirstwptheme/images/yaniv.jpg">
					    	<h3>יניב יצחק</h3>
					        <h4> מנהל תכנית כולנא</h4>
					    </div>
					</div>
			     	<div class="back">
					    <div class="team-card-text">
					      	<p>המכינה, היא הזמנה למסע. מסע אישי בחדרי הלב, ומסע להתגברות על מה שקשה לנו, בדרך להיות טובים יותר. 
							זו תקופת חיים משותפים בירוחם, מפגש קהילתי מרתק, מגוון ומעורר השראה.
							</p><hr class="hrBlue">
					   </div>
				  	</div>
			    </div>	 
			</div> <!-- END person-->
			<!-- next person-->
			<div class="flip-container col-lg-3 col-sm-3 col-md-3 col-xs-1" ontouchstart="this.classList.toggle('hover');">
				<div class="flipper">
					<div class="front">
					    <div class="team-card">
					    	<img src="wp-content/themes/myfirstwptheme/images/lior.jpg">
					    	<h3>ליאור בר</h3>
					    	<h4>מנכ"ל עמותת צעירים בירוחם</h4>
					  	</div>
					</div>
			     	<div class="back">
					    <div class="team-card-text">
					     	<p>ליאור בר – מכינת ירוחם היא מוסד חינוכי מצוין בו נערים מכל הארץ זוכים לפרק זמן למידה וחוויה משמעותיים לצד טעימה מפנינה מדברית מעניינת שהיא ירוחם. לירוחם המכינה היא הזדמנות להראות את יופייה לעולם ולקדם התיישבות צעירה במקום.</p>
					        <hr class="hrBlue">
					   </div>
				  	</div>
			    </div>	 
			</div> <!-- END person-->
			<!-- next person-->
			<div class="flip-container col-lg-3 col-sm-3 col-md-3 col-xs-1" ontouchstart="this.classList.toggle('hover');">
				<div class="flipper">
					<div class="front">
					    <div class="team-card">
					    	<img src="wp-content/themes/myfirstwptheme/images/dana-h.jpeg">
					    	<h3>דנה זקס</h3>
					    	<h4>מנהלת המכינות החצי שנתיות בסוכנות היהודית</h4>
					  	</div>
					</div>
			     	<div class="back">
					    <div class="team-card-text">
					       <p>דנה זקס, מנהלת תכניות אופק, סוכנות יהודית 
							מכינת ירוחם, היא חלק מחזון הסוכנות היהודית, להביא את המכינות לבני ובנות הפריפריה. חזון תכניות אופק, מבקש ליצור תהליך אישי וקבוצתי לכמה שיותר צעירים בחברה הישראלית. תהליך ש יאפשר להם להיות אזרחים המעורים בחברה, כאלו שלוקחים אחריות ומגשימים את עצמם בדרך לעיצוב חברה ישראלית חזקה, רב תרבותית, וקשובה.  </p>
					      	<hr class="hrBlue">
					    </div>
				  	</div>
			    </div>	 
			</div>
		</div>
	</div>
</div>
<!-- section6 -  start process info -->
<div class="main-subject" id="section6">
	<img src="/wp-content/themes/myfirstwptheme/images/Asset 11@2x.png">
</div>
<div class="mion">
	<div class="container">
		<img src="/wp-content/themes/myfirstwptheme/images/Asset 13@2x.png">
	</div>
</div>
<!-- END process info -->

<!-- section 7 + 8 - form contact us -->
<div class="main-subject change_size" id="section7">
	<img src="/wp-content/themes/myfirstwptheme/images/Asset 12@2x.png">
</div>
<div class="contact-us" id="section8">
	<div class="row">
		<div class="video-background">
    		<div class="video-foreground">
      			<iframe src="https://www.youtube.com/embed/FYMuEU0i27k?controls=0&showinfo=0&rel=0&autoplay=1&mute &loop=1&playlist=FYMuEU0i27k" frameborder="0" allowfullscreen></iframe>
    		</div>
  		</div>
		<div id="vidtop-content">
			<div class="vid-info">
				<form method="POST" action="">
					<div class="myform ">
						<h2>רוצה להצטרף</h2>
						<div class="input-group">
				  			<input type="text" name="firstname" class="form-control" placeholder="שם" aria-describedby="basic-addon1"  required>
						</div>
						<div class="input-group">			  
				 			<input type="text" name="lastname" class="form-control" placeholder="שם משפחה" aria-describedby="basic-addon1" required>
						</div>
						<div class="input-group">		  
						    <input type="text" name="useraddress" class="form-control" placeholder="מקום מגורים" aria-describedby="basic-addon1"  id="userAddress" required>
						</div>
						<div class="input-group">
				  			<input type="Email" name="useremail" class="form-control" placeholder="אימייל" aria-describedby="basic-addon1" required>
						</div>
						<div class="input-group">
				  			<input type="text" name="cellnumber" class="form-control" placeholder="מספר פלאפון" aria-describedby="basic-addon1"  id="cell-number" required>
						</div>
						<div>
							<label class="mr-sm-2" for="inlineFormCustomSelect">נושא הפנייה</label>
						</div>
						<select class="custom-select mb-2 mr-sm-2 mb-sm-0" id="inlineFormCustomSelect" name="topic">
						    <option value="הרשמה למכינה">הרשמה למכינה</option>
						    <option value="צור קשר">צור קשר</option>
						    <option value="אחר">אחר</option>
						</select>
	  					<div>
							<textarea name="message" class="textAreaForm" rows="12" placeholder="ההודעה שלך" required></textarea>
						</div>
						<span id='message'></span>
						<p class="lead">
							<input class="btn btn-primary btn-lg" type="submit" placeholder="Register">
						</p>
				 		<div>
				 			<?php if (isset($thankYou)) {
		   	   				echo "$thankYou";} ?>
		   	   			</div>
		   	   		</div>
		 		</form>
	 		</div>
	 	</div>
	</div>
</div> 

<!-- END section 7 + 8 - form contact us -->




<?php get_footer(); ?>