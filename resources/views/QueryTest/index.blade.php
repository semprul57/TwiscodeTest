<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Twiscode Test</title>

	<style>
	table {
	  font-family: arial, sans-serif;
	  border-collapse: collapse;
	  width: 100%;
	}

	td, th {
	  border: 1px solid #dddddd;
	  text-align: left;
	  padding: 8px;
	}

	tr:nth-child(even) {
	  background-color: #dddddd;
	}
	</style>
</head>
<body>
	<table>
		<tr>
			<th>id</th>
			<th>tanggal_order</th>
			<th>status</th>
			<th>tanggal_pembayaran</th>
			<th>total</th>
			<th>jumlah_barang</th>
		</tr>

		<tbody>
			@foreach( $transaksi as $val )
				<tr>
					<td>{{ $val->id }}</td>
					<td>{{ $val->tanggal_order }}</td>
					<td>{{ $val->status_pelunasan }}</td>
					<td>{{ $val->tanggal_pembayaran }}</td>
					<td>{{ $val->subtotal }}</td>
					<td>{{ $val->jumlah }}</td>
				</tr>
			@endforeach
		</tbody>
	</table>
</body>
</html>