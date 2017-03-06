<hr/>
<form method="post">
	<table class="table table-bordered bg-white fg-black">
	<tr>
		<td>Jenis TX</td>
		<td>:</td>
		<td>
		
    		<input type="radio" value="1" name="jenis">
    		
    		<span class="caption">Pemasukan</span>

    		<input type="radio" value="0" name="jenis">
    		
    		<span class="caption">Pengeluaran</span>
		
		</td>
	</tr>
	<tr>
		<td>Jumlah</td>
		<td>:</td>
		<td><input type="number" name="jumlah" class="input-control text"></td>
	</tr>
	<tr>
		<td>Keterangan</td>
		<td>:</td>
		<td><textarea class="input-control textarea" data-role="input" data-text-auto-resize="true" cols="50" rows="5" name="ket">
			
		</textarea></td>
	</tr>
	<tr>
		<td colspan="3"><input type="submit" name="ok" value="Tambah"></td>
	</tr>
</table>
</form>
<hr/>