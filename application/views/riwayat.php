<a href="<?= base_url('index.php/Uang_kas/reset') ?>" onclick="return confirm('Yakin ingin menghapus semua data?');" class="button fg-black bg-red">Reset Data</a>
 <table id="table" class="dataTable striped border bordered fg-black bg-white" data-role="datatable" data-searching="true" width="90%">
                <thead>
                <tr>
                    <th>ID TX</th>
                    <th>Jenis TX</th>
                    <th>Jumlah</th>
                    <th>Keterangan</th>
                    <th>Tanggal</th>
                </tr>
                </thead>
                <tbody>
                <?php
                foreach ($rows as $row) {
               	?>
               	<tr>
                    <td><?= $row->id_tx ?></td>
                    <td><?php 
                    	$jenis = $row->jenis_tx;
                    	if ($jenis == 1) {
                    		echo "Pemasukan";
                    	}else{
                    		echo "Pengeluaran";
                    	}
                    ?></td>
                    <td>Rp. <?= number_format($row->jumlah) ?></td>
                    <td><?= $row->keterangan ?></td>
                    <td><?= $row->tanggal ?></td>
                </tr>
               	<?php

                }
                ?>                
                </tbody>
            </table>
            <hr/>
            <div class="bg-white fg-black">
                <table class="table">
                    <tr>
                        <td>Jumlah Pemasukan</td>
                        <td>:</td>
                        <td>
                            <?php 
                                foreach ($pmm as $row) {
                                    echo "Rp. ".number_format($row->pemasukan);
                                    $pemasukan = $row->pemasukan;
                                }
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Jumlah Pengeluaran</td>
                        <td>:</td>
                        <td>
                            <?php 
                                foreach ($pmk as $row) {
                                    echo "Rp. ".number_format($row->pengeluaran);
                                    $pengeluaran = $row->pengeluaran;
                                }
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3"><hr/></td>
                    </tr>
                    <tr>
                        <td>Saldo Akhir</td>
                        <td>:</td>
                        <td>
                        Rp. <?= number_format($pemasukan-$pengeluaran) ?>
                        </td>
                    </tr>
                </table>
            </div>
