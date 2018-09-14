
<table id="sample-table-2" class="table table-bordered table-hover table-striped">
  <thead>
    <tr>
      <th>No</th>
      <th>Jam Keberangkatan</th>
      <th>No. Kendaraan</th>
      <th>Nama Trayek</th>
      <th>Asal</th>
      <th>Tujuan</th>
      <th>Keterangan</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <?php
      $no = 1;
      foreach ($isi->result() as $row) {
      ?>
      <td width="5%"><?php echo $no++; ?></td>
      <td width="25%"><?php echo $row->jam_pergi; ?> WIB</td>
      <td width="5%"><?php echo $row->no_kendaraan; ?></td>
      <td><?php echo $row->nm_trayek; ?></td>
      <td width="13%"><?php echo $row->asal; ?></td>
      <td width="13%"><?php echo $row->tujuan; ?></td>
      <td width="13%"><?php echo $row->ket; ?></td>
    </tr>
    <?php } ?>
  </tbody>
</table>
