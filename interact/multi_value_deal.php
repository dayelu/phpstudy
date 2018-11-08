<!DOCTYPE html>
<html>
<head>
	<title>choose hobby</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<form action="multi_value_deal.php" method="post">
		
		<table border="0" cellpadding="0" cellspacing="0" align="center">

			<tr><td>
				
				<fieldset><legend>hobby:</legend>

				<input type="checkbox" name="sports[]" value="basketball" /> basketball
				
				<input type="checkbox" name="sports[]" value="soccer" /> soccer

				<input type="checkbox" name="sports[]" value="volleyball" /> volleyball
				
				<input type="checkbox" name="sports[]" value="table tennis" /> table tennis

				<input type="checkbox" name="sports[]" value="lifing" /> lifing

				<input type="checkbox" name="sports[]" value="running" /> running

				</fieldset>

			</td></tr>

			<tr>
				<strong>please choose the computer language you like</strong>
			</tr>

			<tr><td><fieldset><legend>language:</legend>


				<table cellpadding="0" cellspacing="0" border="0" width="100%" >
					<tr>
						<td width="15%">
							
							<select name="languages[]" multiple="multiple" style="width: 50">

								<option value="C">C</option>

								<option value="Java">Java</option>

								<option value="PHP">PHP</option>

								<option value="C++">C++</option>
								
							</select>

						</td>
					</tr>
					


					<?php

						if (isset($_POST['submit'])) 
						{
							
							echo "<strong>your favorite sport is</strong>";	

							foreach ($_POST['sports'] as $strong) {
								
								echo $post."^!^";

							echo "<br/ >";

							echo "<strong>your  favorite computer language is :</strong>";

							foreach ($_POST['languages'] as $language) {
								
								echo "$language ^!^ ";

							}

							}

						}

					?>


				</table>

			</fieldset></td></tr>


			<tr>
				<td>
					
					<table border="0" width="100%" cellpadding="0" cellspacing="0">

						<tr>
							<td>
								<input type="submit" name="submit" value="submit">
							</td>
						</tr>
						
					</table>

				</td>
			</tr>
			
		</table>

	</form>

</body>
</html>