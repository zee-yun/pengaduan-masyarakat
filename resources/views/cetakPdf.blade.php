<html>
<head>
	<title>Membuat Laporan PDF Dengan DOMPDF Laravel</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<style type="text/css">
		table tr td,
		table tr th{
			font-size: 9pt;
		}
	</style>
	<center>
		<h5>Laporan Pengaduan Masyarakat</h5>
	</center>
 
	<table class='table table-bordered'>
		<thead>
			<tr>
				<th>No</th>
				<th>Isi Laporan</th>
				<th>Tanggal</th>
				<th>Gambar</th>
				<th>Status</th>
			</tr>
		</thead>
		<tbody>
			@php $i=1 @endphp
			@foreach($pengaduan as $p)
			<tr>
				<td>{{ $i++ }}</td>
				<td>{{$p->isi_laporan}}</td>
				<td>{{$p->tgl_kejadian}}</td>
				<td><img width="130px" src="{{ asset($p->foto) }}"></td>
				<td> 
				@if ($p->status == '0')
                    <a class="badge badge-danger">Pending</a>
                @elseif($p->status == 'proses')
                    <a class="badge badge-warning text-white">Proses</a>
                @else
                    <a class="badge badge-success">Selesai</a>
                @endif
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
 
</body>
</html>