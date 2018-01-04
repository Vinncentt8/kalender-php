<?php
/*    Using "mysqli" instead of "mysql" that is obsolete.
* Change the value of parameter 3 if you have set a password on the root userid
* Add port number 3307 in parameter number 5 to use MariaDB instead of MySQL
*/
$mysqli = new mysqli('127.0.0.1', 'root', '', '');

if ($mysqli->connect_error) {
    die('Connect Error (' . $mysqli->connect_errno . ') '
            . $mysqli->connect_error);
}
echo '<p>Connection OK '. $mysqli->host_info.'</p>';
echo '<p>Server '.$mysqli->server_info.'</p>';
$mysqli->close();


$color = array("Blue","Orange","Red");

$day = array('1','2','3','4','5','6','7','8','9','10','11','12','13','14','15','16','17','18','19','20','21','22','23','24','25','26','27','28','29','30','31');

$month = array("Januari","Februari","Maart","April","Mei","Juni","Juli","Augustus","September","Oktober","November","December");

$year = array("2018","2019","2020","2021","2022","2023","2024","2025");


$currentdate = date('d-m-Y');



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
							
							<input type="text" name="name" placeholder="Naam gebeurtenis">
							<input type="submit">
							<br>
							<br>
							<select name="Maand">
								<option>Selecteer Maand</option>

									<?php
									
									foreach ($month as $value) {
    									echo "<option value=\"" . $month . "\">" . $value . "</option>";
    								}
    								?>


							</select>
							<select name="dag">
								<option>Selecteer Dag</option>
								
									<?php 
									
									foreach ($day as $value) {
    									echo "<option value=\"" . $day . "\">" . $value . "</option>";
    								}

									?>

								</select>

								<select>
									<option>Selecteer kleur</option>

									<?php

									foreach ($color as $value) {
										echo "<option value=\"" . $color . "\">" . $value . "</option>";
									}

									?>
									<option></option>
								</select>

																		
						</form>
					</div>

					<div id="uitkomst">
						<div class="kleuren">
								<label id="blue">Blue = afspraak</label>
								<label id="orange">Orange = Verjaardag</label>
								<label id="red">Red = Vakantie</label>
						</div>
					</div>
				</div>

					<div class="flex-item2">
						<div id="kalender">
							<div class="container">
        <br>
        <table class="table table-bordered">

        	<h3><<a><a> 2017 / 12 <a></a>></h3>
            <tr>
            	<th>Zon</th>
                <th>Maa</th>
                <th>Din</th>
                <th>Woe</th>
                <th>Don</th>
                <th>Vrij</th>
                <th>Zat</th>                
            </tr>

            <tr>
            	<td>26</td>
            	<td>27</td>
            	<td>28</td>
            	<td>29</td>
            	<td>30</td>
            	<td>1</td>
            	<td>2</td>
            </tr>

            <tr>
            	<td>3</td>
            	<td>4</td>
            	<td>5</td>
            	<td>6</td>
            	<td>7</td>
            	<td>8</td>
            	<td>9</td>
            </tr>

            <tr>
            	<td>10</td>
            	<td>11</td>
            	<td>12</td>
            	<td>13</td>
            	<td>14</td>
            	<td>15</td>
            	<td>16</td>
            </tr>

            <tr>
            	<td>16</td>
            	<td>18</td><p style="background-color: grey;">
<?php
   echo( date( 'F j, Y',    time() ) . '<br>');
?>
</p>


            	<td>19</td>
            	<td>20</td>
            	<td>21</td>
            	<td>22</td>
            	<td>23</td>
            </tr>

            <tr>
            	<td>24</td>
            	<td>25</td>
            	<td>26</td>
            	<td>27</td>
            	<td>28</td>
            	<td>29</td>
            	<td>30</td>
            </tr>
            <tr>
            	<td>31</td>
            	<td>1</td>
            	<td>2</td>
            	<td>3</td>
            	<td>4</td>
            	<td>5</td>
            	<td></td>
            </tr>
        </table>
    </div>
							
						</div>
					</div>


	</main>

</body>
</html>