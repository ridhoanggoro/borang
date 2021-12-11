<div class="card shadow">
  <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
    <h6 class="m-0 font-weight-bold text-primary"><?php echo $title; ?></h6>
    <div class="float-right">
      <a href="javascript:void(0);" onclick="return e_publikasi_ilmiah_dtps('0', '<?php echo encode_url('publikasi_ilmiah'); ?>')" class="btn btn-primary btn-icon-split btn-sm">
        <span class="icon text-white-50">
          <i class="fas fa-folder-plus"></i>
        </span>
        <span class="text">Tambah Data</span>
      </a>
      <a href="javascript:void(0);" data-toggle="modal" data-target="#Modal_Upload" class="btn btn-primary btn-icon-split btn-sm">
        <span class="icon text-white-50">
          <i class="fas fa-upload"></i>
        </span>
        <span class="text">Upload Data</span>
      </a>
      <a href="<?php echo base_url('export/export_excel/'.encode_url('3b4-1'));?>" class="btn btn-success btn-icon-split btn-sm">
        <span class="icon text-white-50">
          <i class="fas fa-file-excel"></i>
        </span>
        <span class="text">Export Excel</span>
      </a>
    </div>
  </div>
  <div class="card-body">
    <div class="table-responsive">
    <table class="table table-striped table-bordered" id="mydata" width="100%" cellspacing="0">
      <thead>
        <tr>
          <th class="align-middle">Jenis Publikasi</th>
          <th class="align-middle">Jumlah Judul Publikasi</th>
          <th class="align-middle">Tahun Akademik</th>
          <th class="align-middle">Menu</th>
        </tr>
      </thead>
      <tbody id="tampil_data">
      </tbody>
    </table>
    </div>
  </div>
</div>

<!-- MODAL ADD -->
<form class="was-validated" id="tambah">
  <div class="modal fade" id="Modal_Add" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
      <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
      </div>
      <div class="modal-body">      
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="jenis_publikasi">Jenis Publikasi</label>
            <select id="jenis_publikasi" name="jenis_publikasi" class="custom-select" data-placeholder="Silahkan pilih..." required>
                 <option value="" selected></option>
                  <?php foreach ($jenis_publikasi as $value) { ?>
                  <option value="<?php echo $value->id; ?>"><?php echo $value->nama; ?></option>
                  <?php } ?>
             </select>
            <div id="id_check_result" class="help-block with-errors"></div>
          </div>
          <div class="form-group col-md-3">
            <label for="jml_judul">Jumlah Judul Penelitian</label>
            <input type="number" class="form-control" id="jml_judul" name="jml_judul" required>
            <div id="id_check_result" class="help-block with-errors"></div>
          </div>
          <div class="form-group col-md-3">
            <label for="th_akademik">Tahun Akademik TS</label>
            <input type="number" class="form-control" id="th_akademik" name="th_akademik" required>
            <div id="id_check_result" class="help-block with-errors"></div>
          </div>
        </div>
        <input type="hidden" class="form-control" id="doc_edit" name="doc_edit" readonly>
        <input type="hidden" class="form-control" id="seq_id" name="seq_id" readonly>
        <div class="form-row">
          <label for="dokumen">Dokumen </label><div id="status"></div>
          <div class="form-group col-md-12">
            <input type="file" class="custom-file-input" id="dokumen" name="dokumen">
            <label class="custom-file-label" for="dokumen">Pilih file (pastikan file yang di upload dengan format PDF)</label>
            <div id="id_check_result" class="help-block with-errors"></div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
      <button class="btn btn-secondary btn-icon-split btn-sm" data-dismiss="modal"><span class="icon text-white-50"><i class="fas fa-arrow-alt-circle-left"></i></i></span>
      <span class="text">Batal</span></button>
      <button type="submit" id="btn_save" class="btn btn-primary btn-icon-split btn-sm"><span class="icon text-white-50"><i class="fas fa-save"></i></span>
      <span class="text">Simpan</span></button>
      </div>
    </div>
    </div>
  </div>
</form>
<!--END MODAL ADD-->

<script type="text/javascript">
$(document).ready(function(){
  show_data();
  $('#mydata').dataTable();
  function show_data(){
    $.ajax({
      type  : 'ajax',
      url   : '<?php echo site_url('dosen/publikasi_ilmiah_dtps_data_list')?>',
      async : false,
      dataType : 'json',
      success : function(data){
        var html = '';
        var i;
        var tbl = '<?php echo encode_url('publikasi_ilmiah'); ?>';
        for(i=0; i<data.length; i++){
        html += '<tr>'+
              '<td>'+data[i].jenis_publikasi+'</td>'+
              '<td>'+data[i].jml_judul+'</td>'+
              '<td>'+data[i].th_akademik+'</td>'+
              '<td>'+
                  '<a href="javascript:void(0);" onclick="return e_publikasi_ilmiah_dtps(\'' + data[i].seq_id + '\',\'' + tbl + '\');" class="btn btn-info btn-circle btn-sm item_edit" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fas fa-search"></i></a>'+' '+
                  '<a href="<?php echo site_url('assets/document/')?>'+data[i].doc+'" class="btn btn-primary btn-circle btn-sm" data-toggle="tooltip" data-placement="top" title="Download Dokumen"><i class="fas fa-download"></i></a>'+
                  '<a href="javascript:void(0);" onclick="return hapus(\''+ tbl + '\',\'' + data[i].seq_id + '\',\'\');" class="btn btn-danger btn-circle btn-sm item_delete" data-toggle="tooltip" data-placement="top" title="Delete" data-seq_id="'+data[i].seq_id+'"><i class="fas fa-trash"></i></a>'+
              '</td>'+
          '</tr>';
        }

        $('#tampil_data').html(html);
      }
    });
  }

  // upload data
$('#upload').submit(function(e) {
  e.preventDefault();
  $.ajax({
	  url: '<?php echo site_url('upload/excel_upload/'.encode_url('3.b.4-1'))?>',
	  type: "post",
	  data: new FormData(this),
	  dataType: 'json',
	  processData: false,
	  contentType: false,
	  cache: false,
	  async: false,
	  success: function(data) {
		  if (data.msg == "ok") {
			  $('#Modal_Upload').modal('hide');
			  $("#file_upload").val(null);
			  $.confirm({
				  title: 'Sukses!',
				  content: 'Sebanyak <b>' + data.jum + '</b> Data Berhasil Di Upload!',
				  buttons: {
					  somethingElse: {
						  text: 'OK',
						  btnClass: 'btn-blue',
						  action: function() {
							  show_data();
						  }
					  }
				  }
			  });
		  } else {
			  $.alert({
				  icon: 'fas fa-exclamation-triangle',
				  title: 'Error!',
				  type: 'red',
				  typeAnimated: true,
				  content: data.msg,
			  });
		  }

	  }
  });
});
// end upload data

//Save Data
    $('#tambah').submit(function(e) {
    e.preventDefault();

    $.ajax({
      type : "POST",
      url  : "<?php echo site_url('dosen/publikasi_ilmiah_dtps_add')?>",
      type: "post",
      data: new FormData(this),
      processData: false,
      contentType: false,
      cache: false,
      async: false,
      success: function(data) {
        $("#frmAdd").trigger("reset");
        $('#Modal_Add').modal('hide');
        $.alert({
          title: 'Sukses!',
          content: 'Data Berhasil Disimpan!',
        });
        show_data();
      }
    });
    return false;
  });

});
</script>
