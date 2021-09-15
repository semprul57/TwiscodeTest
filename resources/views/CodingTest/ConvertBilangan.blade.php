<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>TwiscodeTest - ConvertBilangan</title>
</head>
<body>
	binary to decimal : <br>

	<form method="POST" action="{{ url('/CodingTest/ConvertBilangan/convertBinary') }}" >
		<label>Masukan bilangan binary </label>
		<input type="text" name="binary_value" />

		<button type="submit">Proses</button>
	</form>

	decimal to binary : <br>

	<form method="POST" action="{{ url('/CodingTest/ConvertBilangan/convertDecimal') }}" >
		<label>Masukan bilangan binary </label>
		<input type="text" name="decimal_value" />

		<button type="submit">Proses</button>
	</form>
</body>
</html>