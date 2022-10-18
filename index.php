<!DOCTYPE html>
<html>
	<head>
		<title>Operadores Aritm&eacute;meticos</title>
	</head>
	<body>
		<h1>Calculadora</h1>
		<form action="" method="post">
            <p>Selecciona la operacion que quieras realizar</p>
			<select name="operador">
				<option value="suma">Suma</option>
				<option value="resta">Resta</option>
				<option value="mult">Multiplicaci&oacute;n</option>
				<option value="division">Divisi&oacute;n</option>
			</select><br />
			Ingresa tu primer n&uacute;mero:<br />
			<input type="text" name="num1"><br />
			Ingresa tu segundo valor:<br />
			<input type="text" name="num2"><br>
			<input type="reset" value="Borrar">
			<input type="submit" value="Enviar">
            <p>Resultado:</p>
		</form>

        <?php 

        function suma($num1, $num2){
            $resul = $num1 + $num2;
            echo  $resul;
        }

        function resta($num1, $num2){
            $resul = $num1 - $num2;
            echo  $resul;
        }

        function mult($num1, $num2){
            $resul = $num1 * $num2;
            echo $resul;
        }

        function division($num1, $num2){
            $resul = $num1 / $num2;
            echo $resul;
        }

	    if($_POST['num1'] != '' and $_POST['num2'] !=''){
            $opr = $_POST['operador'];
            //$numA = (int)$_POST['num1'];
            //$numB = (int)$_POST['num2'];
            switch($opr){
                case 'suma':
                    suma((float)$_POST['num1'], (float)$_POST['num2']);
                    break;
                case 'resta':
                    resta((float)$_POST['num1'], (float)$_POST['num2']);
                    break;
                case 'mult':
                    mult((float)$_POST['num1'], (float)$_POST['num2']);
                    break;
                case 'division':
                    division((float)$_POST['num1'], (float)$_POST['num2']);
                    break;
            }
        }
        else {
            echo 'Ingresa algun numero en los cuadros de texto';
        }

        ?>

	</body>
</html>