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
				<div class="panel-heading" align="right"><h6 class="panel-title"><i class="fa fa-male"></i> Data Mahasiswa</h6>
					<a href="mahasiswa_download.php" class="btn btn-primary" target="_blank">Download</a>
				
				</div>
				<div class="datatable">
					<table class="table table-hover">
						<thead>
							<tr>
								<th>No</th>
                                <th>ID Mahasiswa</th>
								<th>Nama Mahasiswa</th>
								<th>Jurusan</th>
							</tr>
						</thead>
						<tbody>
							<?php
							$nomor = 0;
							$hasil = mysql_query("select * from calonbeasiswa");
							while ($dataku = mysql_fetch_array($hasil)) {
							?>
								<tr>
									<td><?php echo $nomor=$nomor+1;?></td>
                                    <td><?php echo $dataku['id_mhs']; ?></td>
									<td><?php echo $dataku['nama_mhs']; ?></td>
									<td><?php echo $dataku['jurusan']; ?></td>
									
								</tr>
							<?php } ?>
						</tbody>
					</table>
				</div>

			<br />
			<br />
			

			<!-- Footer -->
			<?php include "footer.php"; ?>