<?php
include 'connection.php';
include 'arrays.php';
?>



<!DOCTYPE html>
<html lang="en">
<head>
	<title>Kalender</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
</head>
<body>

	<main class="flex-container">

				<div class="flex-item1">
					<div id="answer">
						<form id="form11" action="index.php" method="post" >
							<input type="text" name="name" placeholder="Name meeting">
								<input type="submit">
									<br>
									<br>
										<select name="month">
											<option>Select month</option>

											<?php
											
												foreach ($month as $value) {
		    										echo "<option value=\"" . $month . "\">" . $value . "</option>";
		    									}
		    								?>


										</select>

										<select name="day">
											<option>Select day</option>

											<?php
											
												foreach ($day as $value) {
		    										echo "<option value=\"" . $day . "\">" . $value . "</option>";
		    									}
		    								?>


									</select>

										<select name="year">
											<option>Select year</option>

											<?php 
												foreach ($year as $value) {
													echo "<option value=\"" . $year . "\">" . $value . "</option>";		
												}

											?>	
										</select>											
								</form>
							</div>
						</div>

					<div class="flex-item2">
						<div id="kalender">
							<div class="container">
        					<br>
        <table class="table table-bordered"> 

        	<h3> <?php echo(date("F Y")); ?> </h3>
            <tr>

            	<!-- De value's van de array $daysOfWeek laten zien hieronder. -->
           
            	<th>Sun</th>
                <th>Mon</th>
                <th>Tue</th>
                <th>Wen</th>
                <th>Thu</th>
                <th>Fri</th>
                <th>Sat</th>                
            </tr>

            <!-- Hieronder automatisch de dagen laten zien door een current time variable te maken die met een array de dagen laat zien. -->
            <!-- $today = date('\i\t \i\s \t\h\e jS \d\a\y.');   // it is the 10th day. -->
            <!-- Nu de dagen van de maand nog en dan de Table's invoegen -->
            <p id="date"  style="background-color: grey;">


            <?php
   				echo( date( 'l j',    time() ));
   			?>
   			</p>
            <tr>
            	<td></td>
            	<td></td>
            	<td></td>
            	<td></td>
            	<td></td>
            	<td></td>
            	<td></td>
            </tr>

            <tr>
            	<td></td>
            	<td></td>
            	<td></td>
            	<td></td>
            	<td></td>
            	<td></td>
            	<td></td>
            </tr>

            <tr>
            	<td></td>
            	<td></td>
            	<td></td>
            	<td></td>
            	<td></td>
            	<td></td>
            	<td></td>
            </tr>

            <tr>
            	<td></td>
            	<td></td>
	         	<td></td>
            	<td></td>
            	<td></td>
            	<td></td>
            	<td></td>
            </tr>

            <tr>
            	<td></td>
            	<td></td>
            	<td></td>
            	<td></td>
            	<td></td>
            	<td></td>
            	<td></td>
            </tr>
            <tr>
            	<td></td>
            	<td></td>
            	<td></td>
            	<td></td>
            	<td></td>
            	<td></td>
            	<td></td>
            </tr>
        </table>
    </div>
							
						</div>
					</div>


	</main>

</body>
</html>