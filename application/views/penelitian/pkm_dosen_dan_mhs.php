<div class="card shadow">
  <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
    <h6 class="m-0 font-weight-bold text-primary"><?php echo $title; ?></h6>
    <div class="float-right">
      <a href="javascript:void(0);" data-toggle="modal" data-target="#Modal_Add" class="btn btn-primary btn-icon-split btn-sm">
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
      <a href="<?php echo base_url('export/export_excel/'.encode_url('7'));?>" class="btn btn-success btn-icon-split btn-sm">
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
            <th>Nama Dosen</th>
            <th>Tema PkM sesuai Roadmap</th>
            <th>Nama Mahasiswa</th>
            <th>Judul Kegiatan</th>
            <th>Tahun (YYYY)</th>
            <th style="text-align: center;">Menu</th>
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
  <div class="modal fade" id="Modal_Add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
          <div class="form-group col-md-12">
            <label for="nama_dosen">Nama Dosen</label>
            <textarea class="form-control" rows="2" id="nama_dosen" name="nama_dosen" required></textarea>
            <div id="id_check_result" class="help-block with-errors"></div>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-12">
            <label for="tema_penelitian">Tema PkM sesuai Roadmap</label>
            <input type="text" class="form-control" id="tema_penelitian" name="tema_penelitian" required>
            <div id="id_check_result" class="help-block with-errors"></div>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-12">
            <label for="nama_mhs">Nama Mahasiswa</label>
            <textarea class="form-control" rows="2" id="nama_mhs" name="nama_mhs" required></textarea>
            <div id="id_check_result" class="help-block with-errors"></div>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-8">
            <label for="judul_kegiatan">Judul Kegiatan</label>
            <input type="text" class="form-control" id="judul_kegiatan" name="judul_kegiatan" required>
            <div id="id_check_result" class="help-block with-errors"></div>
          </div>
          <div class="form-group col-md-4">
            <label for="tahun">Tahun (YYYY)</label>
            <input type="number" min='2000' max='9999' class="form-control" id="tahun" name="tahun" required>
            <div id="id_check_result" class="help-block with-errors"></div>
          </div>
        </div>
        <div class="form-row">
          <label for="dokumen">Dokumen </label>
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

<!-- MODAL EDIT -->
<form class="was-validated" id="submit">
  <div class="modal fade" id="Modal_Edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
      <h5 class="modal-title" id="exampleModalLabel">Lihat/Edit Data</h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
      </div>
      <div class="modal-body">
        <input type="text" hidden="" class="form-control" id="seq_id" name="seq_id">
        <div class="form-row">
          <div class="form-group col-md-12">
            <label for="nama_dosen_edit">Nama Dosen</label>
            <textarea class="form-control" rows="2" id="nama_dosen_edit" name="nama_dosen_edit" required></textarea>
            <div id="id_check_result" class="help-block with-errors"></div>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-12">
            <label for="tema_penelitian_edit">Tema PkM sesuai Roadmap</label>
            <input type="text" class="form-control" id="tema_penelitian_edit" name="tema_penelitian_edit" required>
            <div id="id_check_result" class="help-block with-errors"></div>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-12">
            <label for="nama_mhs_edit">Nama Mahasiswa</label>
            <textarea class="form-control" rows="2" id="nama_mhs_edit" name="nama_mhs_edit" required></textarea>
            <div id="id_check_result" class="help-block with-errors"></div>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-8">
            <label for="judul_kegiatan_edit">Judul Kegiatan</label>
            <input type="text" class="form-control" id="judul_kegiatan_edit" name="judul_kegiatan_edit" required>
            <div id="id_check_result" class="help-block with-errors"></div>
          </div>
          <div class="form-group col-md-4">
            <label for="tahun_edit">Tahun (YYYY)</label>
            <input type="number" min='2000' max='9999' class="form-control" id="tahun_edit" name="tahun_edit" required>
            <div id="id_check_result" class="help-block with-errors"></div>
          </div>
        </div>
        <input type="hidden" class="form-control" id="doc_edit" name="doc_edit" readonly>
        <div class="form-row">
          <label for="doc_edit">Dokumen </label><div id="status"></div>
          <div class="form-group col-md-12">
            <input type="file" class="custom-file-input" id="customFile" name="file_edit">
            <label class="custom-file-label" for="customFile">Pilih file (pastikan file yang di upload dengan format PDF)</label>
            <div id="id_check_result" class="help-block with-errors"></div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button class="btn btn-secondary btn-icon-split btn-sm" data-dismiss="modal"><span class="icon text-white-50"><i class="fas fa-arrow-alt-circle-left"></i></i></span>
        <span class="text">Batal</span></button>
        <button type="submit" id="btn_update" class="btn btn-primary btn-icon-split btn-sm"><span class="icon text-white-50"><i class="fas fa-save"></i></span>
        <span class="text">Simpan</span></button>
      </div>
    </div>
    </div>
  </div>
</form>
<!--END MODAL EDIT-->

<script type="text/javascript">
$(document).ready(function(){
  show_data();
  $('#mydata').dataTable();
  function show_data(){
    $.ajax({
      type  : 'ajax',
      url   : '<?php echo site_url('pkm/pkm_dosen_dan_mhs_list')?>',
      async : false,
      dataType : 'json',
      success : function(data){
        var html = '';
        var i;
        for(i=0; i<data.length; i++){
          j = i + 1;
          html += '<tr>'+
          '<td>'+data[i].nama_dosen+'</td>'+
          '<td>'+data[i].tema_penelitian+'</td>'+
          '<td>'+data[i].nama_mhs+'</td>'+
          '<td>'+data[i].judul_kegiatan+'</td>'+
          '<td>'+data[i].tahun+'</td>'+
          '<td style="text-align:right;">'+
              '<a href="javascript:void(0);" class="btn btn-info btn-circle btn-sm item_edit" data-toggle="tooltip" data-placement="top" title="Edit" data-seq_id="'+data[i].seq_id+'" data-nama_dosen="'+data[i].nama_dosen+'" data-tema_penelitian="'+data[i].tema_penelitian+'" data-nama_mhs="'+data[i].nama_mhs+'" data-judul_kegiatan="'+data[i].judul_kegiatan+'" data-tahun="'+data[i].tahun+'" data-doc="'+data[i].doc+'"><i class="fas fa-search"></i></a>'+' '+
               '<a href="<?php echo site_url('assets/document/')?>'+data[i].doc+'" class="btn btn-primary btn-circle btn-sm" data-toggle="tooltip" data-placement="top" title="Download Dokumen"><i class="fas fa-download"></i></a>'+
              '<a href="javascript:void(0);" class="btn btn-danger btn-circle btn-sm item_delete" data-toggle="tooltip" data-placement="top" title="Delete" data-seq_id="'+data[i].seq_id+'"><i class="fas fa-trash"></i></a>'+
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
	  url: '<?php echo site_url('upload/excel_upload/'.encode_url('7'))?>',
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
      url  : "<?php echo site_url('pkm/pkm_dosen_dan_mhs_add')?>",
      type: "post",
      data: new FormData(this),
      processData: false,
      contentType: false,
      cache: false,
      async: false,
      success: function(data) {
        $("#tambah").trigger("reset");
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

  //fill data record
  $('#tampil_data').on('click','.item_edit',function(){
    var seq_id = $(this).data('seq_id');
    var nama_dosen = $(this).data('nama_dosen');
    var tema_penelitian = $(this).data('tema_penelitian');
    var nama_mhs = $(this).data('nama_mhs');
    var judul_kegiatan = $(this).data('judul_kegiatan');
    var tahun = $(this).data('tahun');
    var doc = $(this).data('doc');
    if (doc) { $('#status').html('<span class="badge badge-success">Dokumen telah diunggah</span>');
    } else { $('#status').html('<span class="badge badge-danger">Dokumen belum diunggah</span>'); }

    $('#Modal_Edit').modal('show');
    $('[name="seq_id"]').val(seq_id);
    $('[name="nama_dosen_edit"]').val(nama_dosen);
    $('[name="tema_penelitian_edit"]').val(tema_penelitian);
    $('[name="nama_mhs_edit"]').val(nama_mhs);
    $('[name="judul_kegiatan_edit"]').val(judul_kegiatan);
    $('[name="tahun_edit"]').val(tahun);
    $('[name="doc_edit"]').val(doc);
  });

  // Edit data
  $('#submit').submit(function(e){
    e.preventDefault();
    $.ajax({
      url:'<?php echo site_url('pkm/pkm_dosen_dan_mhs_edit')?>',
      type:"post",
      data:new FormData(this),
      processData:false,
      contentType:false,
      cache:false,
      async:false,
      success: function(data){
        $('#Modal_Edit').modal('hide');
        $.alert({
          title: 'Sukses!',
          content: 'Data Berhasil Di Perbaharui!',
        });
        show_data();
      }
    });
  });

  //get data for delete record
  $('#tampil_data').on('click','.item_delete',function(){
      var seq_id = $(this).data('seq_id');
      $('#Modal_Delete').modal('show');
      $('[name="seq_id_delete"]').val(seq_id);
  });

  //delete record to database
   $('#btn_delete').on('click',function(){
      var seq_id = $('#seq_id_delete').val();
      $.ajax({
          type : "POST",
          url  : "<?php echo site_url('pkm/pkm_dosen_dan_mhs_delete')?>",
          dataType : "JSON",
          data : {seq_id:seq_id},
          success: function(data){
              $('[name="seq_id_delete"]').val("");
              $('#Modal_Delete').modal('hide');
              $.alert({
                title: 'Sukses!',
                content: 'Data Berhasil Di Hapus!',
              });
              show_data();
          }
      });
      return false;
  });

});
</script>
