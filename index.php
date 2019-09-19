<label for="jmeno">Jméno:</label>
	<input type="text" name="fname" placeholder="" id="jmeno"> <br>
    <label for="vek">Věk:</label>
    
	<input type="number" name="age" value="0" id="vek"> <br>
 <p> Pohlaví: </p>

 <input type="radio" name="gender"
<?php if (isset($gender) && $gender=="female") echo "checked";?>
value="female">Žena

<input type="radio" name="gender"
<?php if (isset($gender) && $gender=="male") echo "checked";?>
value="male">Muž


