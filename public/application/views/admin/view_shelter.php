<div id="keluar"  class="modal fade"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

          <div class="modal-header" style="background-image:url(<?php echo base_url();?>style/images/pop-1.jpg)">

          </div>
        <div class="modal-body">
          <center><h4 class="modal-title" id="myModalLabel"> <font color="#274490"><b>Are you sure want to exit?</b></font></h4></center>
         </div>

        <!-- /page content -->

          <div class="modal-footer" style="background-image:url(<?php echo base_url();?>style/images/pop-2.jpg)">
               <button type="button" class="btn btn-default antoclose" data-dismiss="modal">Cancel</button>
            <a href="<?php echo base_url();?>admin/home/logout" class="btn btn-danger antosubmit"><i class="fa fa-power-off"></i>&nbsp;Yes</a>


          </div>
        </div>
    </div>
</div>

<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/dist/sweetalert.css">
<script type="text/javascript" src="<?php echo base_url(); ?>assets/dist/sweetalert.min.js"></script>

	    <script src="<?php echo base_url(); ?>assets/js/jquery-2.0.3.min.js"></script>
	    <script src="<?php echo base_url(); ?>assets/js/jquery.dataTables.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/jquery.dataTables.bootstrap.js"></script>


		<script type="text/javascript">
			$(function() {
				var oTable1 = $('#sample-table-2').dataTable( {
				"aoColumns": [
			      null, null, null, null,
				  { "bSortable": false }
				] } );
			});
		</script>

<?=$this->session->flashdata('info')?>


<div class="widget-header widget-header-large">
	<h3 class="grey lighter pull-left position-relative">
		<i class="icon-file green"></i>
		Data Shelter Bus DAMRI
	</h3>
</div>
<table id="sample-table-2" class="table table-striped table-bordered table-hover">
	<thead>
		<tr>
			<th>No</th>
			<th>Nama Shelter</th>
			<th>Kota</th>
			<th>Latitude</th>
			<th>Longitude</th>
		</tr>
	</thead>
	<tbody>
		<tr>
		<?php
		$no = 1;
		foreach ($isi->result() as $row) {
		?>
			<td  width="5%"><?php echo $row->gid_shelter; ?></td>
			<td><?php echo $row->nm_shelter; ?></td>
			<td><?php echo $row->kota; ?></td>
			<td><?php echo $row->lat; ?></td>
			<td><?php echo $row->long; ?></td>
		</tr>

	<div id="hapus<?php echo $row->gid_shelter; ?>"  class="modal fade" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    	<div class="modal-dialog">
        	<div class="modal-content">

	        
		        <div class="modal-body">
		        	<center><h4 class="modal-title" id="myModalLabel"> <font color="#274490"><b>Anda yakin ingin menghapus data ini?</b></font></h4></center>
		        </div>

<!-- /page content -->
		        <div class="modal-footer" style="background-image:url(<?php echo base_url();?>style/images/pop-2.jpg)">
		        	<button type="button" class="btn btn-default antoclose" data-dismiss="modal">Batal</button>
		        	<a href="<?php echo base_url()?>admin/data_jadwal/delete/<?php echo $row->gid_shelter; ?>" class="btn btn-danger antosubmit"><i class="fa fa-trash-o"></i>&nbsp;Iya, Hapus</a>
        		</div>
        	</div>
    	</div>
    </div>
    							

		<?php } ?>
	</tbody>
</table>
<div class="breadcrumbs" id="breadcrumbs">
	<div class="nav-search" id="nav-search">
	&copy 2018 - <b>ITS</b>&nbsp; Integrated Transportation System | DISHUB Kampar | PERUM DAMRI
	</div><!--#nav-search-->
</div>
