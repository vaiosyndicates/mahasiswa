<html>
	<head>
		<title>Native Sample</title>
		<link rel="stylesheet" href="/sample/assets/css/bootstrap.css" />
		<script type="text/javascript" src="/sample/assets/js/bootstrap.js"></script>
	</head>
	<body>
		<div class="row">
			<div class="col-md-12">
				<div class="col-md-4">&nbsp;</div>
				<div class="col-md-4"><h3>Form Input</h3>
					<form method="post" action="/sample/?act=simpan">
					  <div class="form-group">
					    <label for="exampleInputNim">NIM</label>
					    <input type="text" class="form-control" id="exampleInputNim" name="nim" placeholder="NIM">
					  </div>
					  <div class="form-group">
					    <label for="exampleInputNama">Nama</label>
					    <input type="text" class="form-control" id="exampleInputNama" name="nama" placeholder="Nama">
					  </div>

					  <button type="submit" class="btn btn-default">Submit</button>
					</form>
					<br/>
					<a href="/sample/?act=tampil-data">Lihat list</a>
				</div>
				<div class="col-md-4">&nbsp;</div>
			</div>
		</div>
	</body>
</html>