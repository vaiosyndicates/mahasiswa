<html>
	<head>
		<title>Native sample</title>
		<link rel="stylesheet" href="/sample/assets/css/bootstrap.css" />
		<script type="text/javascript" src="/sample/assets/js/bootstrap.js"></script>
	</head>
	<body>
		<div class="row">
			<div class="col-md-12">
				<div class="col-md-4">&nbsp;</div>
				<div class="col-md-4"><h3>Data Mahasiswa</h3>
					<table class="table table-responsive">
						<tr><td>No</td><td>NIK</td><td>Nama</td></tr>
						<?php 

							foreach ($rs as $ks => $list)
							{
								echo '<tr><td><a href="?act=tampil-data&i='.$list['id'].'">'.$list['id'].'</a></td><td>'.$list['nim'].'</td><td>'.$list['nama'].'</td></tr>';
							}

						?>
					</table>
				</div>
				<div class="col-md-4">&nbsp;</div>
			</div>
		</div>
	</body>
</html>
