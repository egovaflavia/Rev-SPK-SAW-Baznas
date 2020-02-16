<?php
include "head.php";
?>

<!-- Body -->

<!-- Link Menu -->
<?php include "menu.php"; ?>

</div>
<br />

<div id="content">
	<!-- Page title -->
	<div class="page-title">
		<h5><i class="fa fa-desktop"></i> Halaman Admin</h5>
	</div>

	<!-- /page title -->

	<!-- Hover rows datatable inside panel -->
	<div class="panel panel-default">
		<div class="panel-heading" align="right">
			<h6 class="panel-title"><i class="fa fa-tag"></i> Data Klasifikasi</h6>
			<a href="klasifikasi_download.php" class="btn btn-primary" target="_blank">Download</a>
		</div>
		<div class="datatable">
			<table class="table table-hover">
				<thead>
					<tr>
						<th>No</th>
						<th>Nik</th>
						<th>Nama Mahasiswa</th>
						<th>Nilai IPK</th>
						<th>Penghasilan Ortu</th>
						<th>Semester</th>
						<th>Keterangan Miskin</th>
						<th>Usia</th>
					</tr>
				</thead>
				<tbody>
					<?php
					$nomor = 0;
					$hasil = mysql_query("select * from klasifikasi, calonbeasiswa where klasifikasi.nik_mhs=calonbeasiswa.nik_mhs");
					while ($dataku = mysql_fetch_array($hasil)) {
					?>
						<tr>
							<td><?php echo $nomor = $nomor + 1; ?></td>
							<td><?php echo $dataku['nik_mhs']; ?></td>
							<td><?php echo $dataku['nama_mhs']; ?></td>
							<td><?php echo $dataku['nilai_ipk']; ?></td>
							<td><?php echo $dataku['penghasilan_ortu']; ?></td>
							<td><?php echo $dataku['semester']; ?></td>
							<td><?php echo $dataku['keterangan_miskin']; ?></td>
							<td><?php echo $dataku['usia']; ?></td>
						</tr>
					<?php }	?>
				</tbody>
			</table>
		</div>
	</div>
	<!-- /hover rows datatable inside panel -->
	<?php include "footer.php"; ?>
</div>
</div>
</body>