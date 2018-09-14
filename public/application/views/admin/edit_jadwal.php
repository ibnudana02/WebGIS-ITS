<?php
	foreach ($edit as $data) {
?>

<!-- =============EDIT DATA CUSTOMER================== -->

<div class="" id="myModalArsip" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
	<div class="modal-content">
    <div class="table-header">
    	Edit Data Jadwal Keberangkatan Bus DAMRI
    </div>
    	<div class="modal-body">

<form class="form-horizontal" method="POST" enctype="multipart/form-data" action="<?php echo base_url();?>admin/data_jadwal/update" onsubmit="return cekform();" >
    <br>
    	<div class="control-group">
        <label class="control-label" for="form-input-readonly">No. Keberangkatan</label>
	        <div class="controls">
	        	<input type="text" id="id_jadwal" name="id_jadwal" required="required" class="form-control" value="<?php echo $data->id_jadwal?>" readonly>
	        </div>
        </div>
		<div class="control-group">
      <label class="control-label">No. Kendaraan</label>
        <div class="controls">
          <input type="text" id="no_kendaraan" name="no_kendaraan" placeholder="Masukkan nomor kendaraan" class="form-control" value="<?php echo $data->no_kendaraan?>"> <br/>
        </div>
      </div>
      <div class="control-group">
        <label class="control-label" for="timepicker1">Jam Keberangkatan</label>
            <div class="controls">
                <input id="timepicker1" type="text" name="jam_pergi" class="form-control" value="<?php echo $data->jam_pergi?>"> <br/>
            <span class="input-group-addon">
            <i class="fa fa-clock-o bigger-110"></i>
            </span>
            </div>
      </div>

        <div class="control-group">
        <label class="control-label">Keterangan</label>
            <div class="controls">
                <input type="text" id="ket" name="ket" placeholder="Masukan Keterangan" class="form-control" value="<?php echo $data->ket?>"> <br/>
            </div>
        </div>
        <div class="control-group">
        <label class="control-label">Id Trayek</label>
          <div class="controls">
              <input type="text" id="id_trayek" name="id_trayek" placeholder="Masukan Keterangan" class="form-control" value="<?php echo $data->id_trayek?>"> <br/>
          </div>
        </div>
        <div class="control-group">
        <label class="control-label">Id Locations</label>
          <div class="controls">
              <input type="text" id="id_locations" name="id_locations" placeholder="Masukan Keterangan" class="form-control" value="<?php echo $data->id_locations?>"> <br/>
          </div>
        </div>
		</div>

	<div class="modal-footer">
	<a onclick="history.back();" class="btn btn-small btn-primary" data-dismiss="modal"><i class="icon-remove bigger-140"></i> Kembali</a>
	<button type="submit" class="btn btn-small btn-success"><i class="icon-save bigger-140"></i> Update</button>

	</div>
</form>
	</div>
	</div>
	</div>
<?php
}?>
