<?php $this->load->view('header'); ?>

	<h3 align="center"> Edit Data </h3>
	<?php foreach ($data_edit as $tes) { ?>
	<form method="post" action="<?php echo base_url().'index.php/mahasiswa/update' ?>">
	<center><input type="text" style="text-align:center;" disabled="disable" name="id" value="ID : <?php echo $tes->id ?>"></center>
		<table class="table table-hover">
			<tr>
				<td width="120">&nbsp;</td>
				<td width="200">Nama</td>
				<td><input type="text" name="nama" value="<?php echo $tes->nama ?>"></td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td>Alamat</td><td>
				<textarea name="alamat"><?php echo $tes->alamat ?></textarea></td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td>Jenis Kelamin</td>
				<td><input type="radio" name="jk" value="Laki-laki" <?php if($tes->jk=='Laki-laki') {echo set_radio('Laki-laki','Laki-laki',TRUE);} ?>> Laki-Laki <br />
					<input type="radio" name="jk" value="Perempuan" <?php if($tes->jk=='Perempuan') {echo set_radio('Perempuan','Perempuan',TRUE);} ?>> Perempuan
				</td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td>Prodi</td>
				<td><select name="prodi">
						<option value="PTIK"<?php if($tes->prodi=='PTIK') {echo "selected";} ?>>PTIK</option>
						<option value="PTM" <?php if($tes->prodi=='PTM') {echo "selected";} ?>>PTM</option>
						<option value="PTB" <?php if($tes->prodi=='PTB') {echo "selected";} ?>>PTB</option>
					</select>
				</td>
			</tr>
			<?php $pecah = explode(',', $tes->hobi); ?>
			<tr>
				<td>&nbsp;</td>
				<td>Hobi</td>
				<td><input type="checkbox" name="hobi[]" value="Sport" <?php if(in_array('Sport', $pecah)) {echo "checked";} ?>> Sport<br>
					<input type="checkbox" name="hobi[]" value="Game" <?php if(in_array('Game', $pecah)) {echo "checked";} ?>> Game
					</td>
			</tr>
			<tr>
				<td colspan="2">&nbsp;</td><td><center><input type="submit" value="Update" class="btn btn-primary"></center></td>
			</tr>
		</table>
	</form>
	<?php } ?>

<?php $this->load->view('footer'); ?>