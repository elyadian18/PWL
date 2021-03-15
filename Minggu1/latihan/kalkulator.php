<?php
$hasil = 0;

if(isset($_POST['num1']) && isset($_POST['num2']) && isset($_POST['operator'])){

	$num1 = $_POST['num1'];
	$num2 = $_POST['num2'];
	$operator = $_POST['operator'];

	if ($operator == 'tambah') {
		$hasil = $num1 + $num2;
	}elseif ($operator == 'kurang') {
		$hasil = $num1 - $num2;
	}elseif ($operator == 'kali') {
		$hasil = $num1 * $num2;
	}elseif ($operator == 'bagi') {
		$hasil = $num1 / $num2;
	}
}

?>

<h3>Kalkulator Sederhana</h3>
<form method="post">
	<span>Bil 1</span>
	<input type="text" name="num1" required>
	</br>
	</br>
	<span>Bil 2</span>
	<input type="text" name="num2" required>
	</br>
	</br>
	<span>Hasil</span>
	<input type="text" value="<?php echo($hasil); ?>" readonly>
	</br>
	</br>
	<span>operator</span>
	<select name="operator" required>
		<option value="tambah">+ (tambah)</option>
		<option value="kurang">- (kurang)</option>
		<option value="kali">* (kali)</option>
		<option value="bagi">/ (bagi)</option>
	</select>
	<button type="submit">=</button>
</form>