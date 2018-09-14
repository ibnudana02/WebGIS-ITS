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

<form class="form-horizontal" method="POST" enctype="multipart/form-data" action="<?php echo base_url();?>admin/data_trayek/update" onsubmit="return cekform();" >
    <br>
    <div class="control-group">
        <label class="control-label">Id Trayek</label>
          <div class="controls">
              <input type="text" id="id_trayek" name="id_trayek" placeholder="Masukan Id Trayek" class="form-control" value="<?php echo $data->id_trayek?>" readonly> <br/>
          </div>
        </div>
    	<!-- <div class="control-group">
        <label class="control-label">Asal </label>
	        <div class="controls">
	        	<input type="text" id="asal" name="asal" required="required" class="form-control" value="<?php echo $data->asal?>">
	        </div>
        </div>
		<div class="control-group">
      <label class="control-label">Tujuan</label>
        <div class="controls">
          <input type="text" id="tujuan" name="tujuan" placeholder="Masukkan nomor tujuan" class="form-control" value="<?php echo $data->tujuan?>"> <br/>
        </div>
      </div> -->
      <div class="control-group">
      <label class="control-label" for="form-field-select-3">Asal</label>
          <div class="controls">
            <select class="chosen-select form-control" id="asal" name="asal" placeholder="Choose a State...">
            <option value="<?php echo $data->asal?>"> <?php echo $data->asal?> </option>
            <?php
              $asal = $this->db->get('trayek');
              foreach ($asal->result() as $row) {
            ?>    
            <option value="<?php echo $row->asal; ?>"><?php echo $row->asal; ?></option>
          <?php }?>
            </select>
          </div>
        </div>

       <div class="control-group">
      <label class="control-label" for="form-field-select-3">Tujuan</label>
          <div class="controls">
            <select class="chosen-select form-control" id="tujuan" name="tujuan" placeholder="Choose a State...">
            <option value="<?php echo $data->tujuan?>">  <?php echo $data->tujuan?></option>
            <?php
              $tujuan = $this->db->get('trayek');
              foreach ($tujuan->result() as $row) {
            ?>    
            <option value="<?php echo $row->tujuan; ?>"><?php echo $row->tujuan; ?></option>
          <?php }?>
            </select>
          </div>
        </div>
      <div class="control-group">
        <label class="control-label" for="timepicker1">No. Kendaraan</label>
            <div class="controls">
                <input id="no_kendaraan" type="text" name="no_kendaraan" class="form-control" value="<?php echo $data->no_kendaraan?>"> <br/>
            </div>
      </div>

        <div class="control-group">
        <label class="control-label">Gid Rute</label>
            <div class="controls">
                <input type="text" id="gid_rute" name="gid_rute" placeholder="Masukan Keterangan" class="form-control" value="<?php echo $data->gid_rute?>"> <br/>
            </div>
        </div>
        
        <div class="control-group">
        <label class="control-label">Gid Shelter</label>
          <div class="controls">
              <input type="text" id="gid_shelter" name="gid_shelter" placeholder="Masukan Keterangan" class="form-control" value="<?php echo $data->gid_shelter?>"> <br/>
          </div>
        </div>
        <div class="control-group">
        <label class="control-label">Id Admin</label>
          <div class="controls">
              <input type="text" id="id_admin" name="id_admin" placeholder="Masukan Keterangan" class="form-control" value="<?php echo $data->id_admin?>"> <br/>
          </div>
        </div>
        <div class="control-group">
        <label class="control-label">Nama Trayek</label>
          <div class="controls">
              <input type="text" id="nm_trayek" name="nm_trayek" placeholder="Masukan Keterangan" class="form-control" value="<?php echo $data->nm_trayek?>"> <br/>
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
