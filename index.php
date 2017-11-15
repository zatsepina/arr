<html>
	<head>
		<title>Сумматор</title>
		<link rel="stylesheet" href= "calc.css"/>
	</head>
	<body>
		<?php
			$value1 = '';
			$value2 = '';
			if (isset($_GET['value1'])) {
				$value1 = $_GET['value1'];
			}
			if (isset($_GET['value2'])) {
				$value2 = $_GET['value2'];
			}
		?>
		<form action="index.php" method="GET">
			<input type="text" name="value1"
				value="<?= htmlspecialchars($value1)?>">
			<input <?php if ($_GET['operation'] == '/' && $value2==0){ echo 'class="invalid" ' ; 
					} ?> type="text" name="value2" value="<?= htmlspecialchars($value2)?>">
					
			  <select name = 'operation';>
			          <option value= "+" <?php
					  if ($_GET['operation'] == '+'){
					   echo 'selected'}?>> Сложить </option>
					  <option value= "-"<?php
					  if ($_GET['operation'] == '-'){
					   echo 'selected'}?>> Вычесть </option>
					  <option value= "*"<?php
					  if ($_GET['operation'] == '*'){
					   echo 'selected'}?>> Умножить </option>
					  <option value= "/"<?php
					  if ($_GET['operation'] == '/'){
					   echo 'selected'}?>>Разделить </option>
				</select>
			</form>
			<!--
			<input type="submit" name="operation" value="+">
			<input type="submit" name="operation" value="-">
			<input type="submit" name="operation" value="/">
			<input type="submit" name="operation" value="*">
			--!>
			</form>
		<?php
			if (isset($_GET['operation']) && $value1!= '' && $value2!= '') {
				
					switch ($_GET['operation']) {
						case "+" : 
							$result = $value1 + $value2;
							break;
						case "-" : 
							$result = $value1 - $value2;
							break;		
						case "/" : 
								if ($value2 == 0 ) { 
								    $result ='На ноль делить нельзя!';
								} else {
									$result = $value1 / $value2;
								     }
							break;
						case "*" : 
							$result = $value1 * $value2;
							break;
						default : $result = ' неизвестная операция!'; 
					}
				
				echo "Результат: $result";
			}
		?>
	</body>
</html>