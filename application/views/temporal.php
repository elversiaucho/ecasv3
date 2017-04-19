
<form action="/formHandler" method="post">
<?php 
	$hombre=array('id'=>'a1a','name'=>'A1', 'value'=>'1');  
	$mujer=array('id'=>'a1b','name'=>'A1', 'value'=>'2');  
	echo "<label>Sexo : <label>"." ".form_radio($hombre,set_radio("A1"))."Hombre".form_radio($mujer,set_radio("A1"))."Mujer"."<br>";
?>
<input type="submit">
</form>