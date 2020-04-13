<div class="collapse navbar-collapse" id="navbarSupportedContent" style="text-align: right !important;">
	<span>Data Testimoni</span>
</div>
</div>
</nav>

<table class="table table-hover" id="thetable">
	<thead>
		<tr>
			<th>No</th>
			<th>Kode Pemesanan</th>
			<th>Nama Member</th>
			<th>Tanggal Testimoni</th>
			<th>Isi Testimoni</th>
			<th>Status</th>
		</tr>
	</thead>
	<tbody>
		<!-- <pre><?php print_r($member) ?></pre> -->
		<?php foreach ($member as $key => $value): ?>
			<tr>
				<td> <?php echo $key+1; ?></td>
				<td><?php echo $value ['kode_pemesanan'] ?></td>
				<td><?php echo $value ['nama_member'] ?></td>
				<td><?php echo $value ['tanggal_testimoni']; ?></td>
				<td><?php echo $value ['isi_testimoni']; ?></td>
				<td><?php echo $value ['status_testimoni']; ?></td>
				<td> 
					<!-- <img style="width: 20px;" src="../../assets/img/check.png">
						<img style="width: 20px;" src="../../assets/img/wrong.png"> -->
						<!-- <a href="" class=""  >
							<img src="../assets/image/icon/check.png" style="max-width:20px;">
							<i class="fas fa-check-circle"></i>
						</a>
						<a href="" class="">
							<img src="../assets/image/icon/wrong.png" style="max-width:20px;">
						</a> -->
					</td>	
				</tr>	
			<?php endforeach ?>
		</tbody>
	</table>
</div>


