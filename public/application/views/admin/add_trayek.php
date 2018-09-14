<!-- ==========Peringatan Data Kosong======= -->

<!-- =============TAMBAH DATA CUSTOMER================== -->
<div class="" id="myModalArsip" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="table-header">
      		Tambah Data Jadwal
      </div>
      <div class="modal-body">

<form class="form-horizontal" method="POST" enctype="multipart/form-data" action="<?php echo base_url();?>admin/data_trayek/simpan" onsubmit="return cekform();" >
      <br>

      <div class="control-group">
      <label class="control-label">Id Trayek </label>
        <div class="controls">
          <input type="text" id="id_trayek" name="id_trayek" placeholder="Masukkan Id Trayek" class="form-control" > <br/>
        </div>
      </div>

      <div class="control-group">
      <label class="control-label">Asal</label>
        <div class="controls">
          <input type="text" id="asal" name="asal" placeholder="Masukkan Asal" class="form-control" > <br/>
        </div>
      </div>
      <div class="control-group">
	    <label class="control-label">Tujuan</label>
	        <div class="controls">
	        	<input type="text" id="tujuan" name="tujuan" placeholder="Masukkan Tujuan" class="form-control" > <br/>
        	</div>
      </div>
      <div class="control-group">
        <label class="control-label">No. Kendaraan</label>
          <div class="controls">
              <input type="text" id="no_kendaraan" name="no_kendaraan" placeholder="Masukan No. Kendaraan" class="form-control"> <br/>
          </div>
      </div>
        <div class="control-group">
        <label class="control-label">Gid Rute</label>
        	<div class="controls">
            	<input type="text" id="gid_rute" name="gid_rute" placeholder="Masukan Gid Rute" class="form-control"> <br/>
        	</div>
        </div>
        <div class="control-group">
        <label class="control-label">Gid Shelter</label>
        	<div class="controls">
            	<input type="text" id="gid_shelter" name="gid_shelter" placeholder="Masukan Gid Shelter" class="form-control"> <br/>
        	</div>
        </div>
        <div class="control-group">
        <label class="control-label">Id Admin</label>
          <div class="controls">
              <input type="text" id="id_admin" name="id_admin" placeholder="Masukan Id Admin" class="form-control"> <br/>
          </div>
        </div>
        <div class="control-group">
        <label class="control-label">Nama Trayek</label>
          <div class="controls">
              <input type="text" id="nm_trayek" name="nm_trayek" placeholder="Masukan Nama Trayek" class="form-control"> <br/>
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

