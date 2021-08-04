<!DOCTYPE html>
<?php
include 'backend.php';
?>

<html>
<head>
<meta charset="utf-8">



	<title>Calculando Bascara</title>
</head>
<body>
    
    <br/><br/>
    
    	
    		<fieldset>
    			<form method="POST" action="backend.php">

    			<small>Digite valor de 'a'</small> <br>
    			<input type="number" name="txta" autofocus=""><br>
    			<small>Digite valor de 'b'</small><br>
    			<input type="number" name="txtb"><br>
    			<small>Digite valor de 'c'</small><br>
    			<input type="number" name="txtc">
    			<!--BOTÃO CALCULAR-->
    			<input type="submit" name="btncalcular" value="Calcular" class="btn">
    		</fieldset>
    		<fieldset>
    		<!-- ------ Resultado       -->                                
    		<output class="result">
            <?=$result?>
            </output>
    		
            
    		
            </fieldset>

    		</table>
    	</div>
    </form>

</body>
</html>