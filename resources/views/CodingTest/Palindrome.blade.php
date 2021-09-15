<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>TwiscodeTest - Palindrome</title>
</head>
<body>
	Palindrome : <br>

	<form method="POST" action="{{ url('/CodingTest/Palindrome/proses') }}" >
		<label>Masukan kalimat palindrome </label>
		<input type="text" name="palindrome_value" />

		<button type="submit">Proses</button>
	</form>
</body>
</html>