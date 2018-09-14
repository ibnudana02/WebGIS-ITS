<!-- ==========Peringatan Data Kosong======= -->

<!-- =============TAMBAH DATA CUSTOMER================== -->
<div class="" id="myModalArsip" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="table-header">
      		Tambah Data Jadwal
      </div>
      <div class="modal-body">

<form class="form-horizontal" method="POST" enctype="multipart/form-data" action="<?php echo base_url();?>admin/data_jadwal/simpan" onsubmit="return cekform();" >
      <br>

      <div class="control-group">
      <label class="control-label">No. Keberangkatan </label>
        <div class="controls">
          <input type="text" id="id_jadwal" name="id_jadwal" placeholder="Masukkan nomor kendaraan" class="form-control" > <br/>
        </div>
      </div>

      <div class="control-group">
      <label class="control-label">No. Kendaraan</label>
        <div class="controls">
          <input type="text" id="no_kendaraan" name="no_kendaraan" placeholder="Masukkan nomor kendaraan" class="form-control" > <br/>
        </div>
      </div>
      <div class="control-group">
	    <label class="control-label" for="timepicker1">Jam Keberangkatan</label>
	        <div class="controls">
	        	<input id="timepicker1" type="text" name="jam_pergi" class="form-control" > <br/>
            <span class="input-group-addon">
            <i class="fa fa-clock-o bigger-110"></i>
            </span>
        	</div>
      </div>
      <div class="control-group">
        <label class="control-label">Id Trayek</label>
          <div class="controls">
              <input type="text" id="id_trayek" name="id_trayek" placeholder="Masukan Keterangan" class="form-control"> <br/>
          </div>
      </div>
	    <!-- <div class="control-group">
	    <label class="control-label" for="form-field-select-3">Asal</label>
	        <div class="controls">
            <select class="chosen-select form-control" id="asal" name="asal" placeholder="Choose a State...">
            <option value=" ">  </option>
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
            <option value=" ">  </option>
            <?php
              $tujuan = $this->db->get('trayek');
              foreach ($tujuan->result() as $row) {
            ?>    
            <option value="<?php echo $row->tujuan; ?>"><?php echo $row->tujuan; ?></option>
          <?php }?>
            </select>
          </div>
        </div> -->
        <div class="control-group">
        <label class="control-label">Gid Rute</label>
          <div class="controls">
              <input type="text" id="gid_rute" name="gid_rute" placeholder="Masukan Keterangan" class="form-control"> <br/>
          </div>
        </div>
        <div class="control-group">
        <label class="control-label">GId shelter</label>
          <div class="controls">
              <input type="text" id="gid_shelter" name="gid_shelter" placeholder="Masukan Keterangan" class="form-control"> <br/>
          </div>
        </div>
        <div class="control-group">
        <label class="control-label">Id Admin</label>
          <div class="controls">
              <input type="text" id="id_admin" name="id_admin" placeholder="Masukan Keterangan" class="form-control"> <br/>
          </div>
        </div>
        <div class="control-group">
        <label class="control-label">Keterangan</label>
        	<div class="controls">
            	<input type="text" id="ket" name="ket" placeholder="Masukan Keterangan" class="form-control"> <br/>
        	</div>
        </div>
        <div class="control-group">
        <label class="control-label">Id Locations</label>
          <div class="controls">
              <input type="text" id="id_locations" name="id_locations" placeholder="Masukan Keterangan" class="form-control"> <br/>
          </div>
        </div>
		</div>

    </div>
      <div class="modal-footer">
     <button type="button" onclick="history.back();" class="btn btn-small btn-danger" data-dismiss="modal"><i class="icon-remove bigger-140"></i> Batal</button>
        <button type="submit" class="btn btn-small btn-success"><i class="icon-save bigger-140"></i> Simpan</button>
      </div>
       </form>
    </div>
  </div>
</div>

