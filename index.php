<?php


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
						<div id="today"><label>Het is vandaag: <?= $currentdate; ?></label></div>
						<form id="form11" action="index.php" method="post" >
							
							<input type="text" name="name" placeholder="Naam gebeurtenis">
							<input type="submit">
							<br>
							<select name="Maand">
								<option>Selecteer Maand</option>

									<?php
									$month = array("Januari","Februari","Maart","April","Mei","Juni","Juli","Augustus","September","Oktober","November","December");
									foreach ($month as $value) {
    									echo "<option value=\"" . $month . "\">" . $month . "</option>";
    								}
    								?>


							</select>
							<select name="dag">
								<option>Selecteer Dag</option>
								
									<?php 
									$date = array('1','2','3','4','5','6','7','8','9','10','11','12','13','14','15','16','17','18','19','20','21','22','23','24','25','26','27','28','29','30','31');
									foreach ($date as $value) {
    									echo "<option value=\"" . $month . "\">" . $month . "</option>";
    								}

									?>
								



							</select>
						</form>
					</div>

					<div id="uitkomst">
			
					</div>
				</div>

					<div class="flex-item2">
						<div id="kalender">
							<div class="container">
        <br>
        <table class="table table-bordered">
            <tr>
                <th>S</th>
                <th>M</th>
                <th>T</th>
                <th>W</th>
                <th>T</th>
                <th>F</th>
                <th>S</th>
            </tr>

            <tr>
            	<td>1</td>
            	<td>2</td>
            	<td>3</td>
            	<td>4</td>
            	<td>5</td>
            	<td>6</td>
            	<td>7</td>
            </tr>

            <tr>
            	<td>8</td>
            	<td>9</td>
            	<td>10</td>
            	<td>11</td>
            	<td>12</td>
            	<td>13</td>
            	<td>14</td>
            </tr>

            <tr>
            	<td>15</td>
            	<td>16</td>
            	<td>17</td>
            	<td>18</td>
            	<td>19</td>
            	<td>20</td>
            	<td>21</td>
            </tr>

            <tr>
            	<td>22</td>
            	<td>23</td>
            	<td>24</td>
            	<td>25</td>
            	<td>26</td>
            	<td>27</td>
            	<td>28</td>
            </tr>

            <tr>
            	<td>29</td>
            	<td>30</td>
            	<td>31</td>
            </tr>
        </table>
    </div>
							
						</div>
					</div>


	</main>

</body>
</html>