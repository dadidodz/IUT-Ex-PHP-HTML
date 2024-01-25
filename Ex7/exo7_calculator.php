
<html lang="en">
	<head>
		<meta charset = "utf-8">
        <title>Calculator</title>
	</head>
	<body>
    <?php
        $values = array(
                'number1' => $_POST['number1'],
                'number2' => $_POST['number2']
        );
        if (!empty($_POST['number1']) && !empty($_POST['number2'])) {

            if (isset($_POST['addition'])) {
                $values['result'] = $values['number1'] + $values['number2'];
            }
            if (isset($_POST['subtraction'])) {
                $values['result'] = $values['number1'] - $values['number2'];
            }
            if (isset($_POST['multiplication'])) {
                $values['result'] = $values['number1'] * $values['number2'];
            }
            if (isset($_POST['division'])) {
                if ($values['number2'] != 0) {
                    $values['result'] = $values['number1'] / $values['number2'];
                } else {
                    echo 'Cannot divide by 0';
                }
            }
        }
    ?>
		<form method="post" action="exo7_calculator.php">
			<fieldset>
				<legend><strong>Online calculator</strong></legend>
                <label for="number1"><strong>Number 1</strong></label>
                    <input type="number" name="number1" id="number1" value="<?php echo $values['number1']; ?>"/>
                <br />
                <label for="number2"><strong>Number 2</strong></label>
                    <input type="number" name="number2" id="number2" value="<?php echo $values['number2']; ?>"/>
                <br />
                <label for="number3"><strong>Result</strong></label>
                    <input type="number" name="result" id="number3" value="<?php echo $values['result']; ?>"/>
                <br />
                <label><strong>Operation</strong></label>
                    <input type="submit" name="addition" value="Add"/>
                    <input type="submit" name="subtraction" value="Subtract"/>
                    <input type="submit" name="multiplication" value="Multiply"/>
                    <input type="submit" name="division" value="Divide"/>
                <br />
			</fieldset>
		</form>
	</body>
</html>
