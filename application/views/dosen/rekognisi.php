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
      <a href="<?php echo base_url('export/export_excel/'.encode_url('3b1'));?>" class="btn btn-success btn-icon-split btn-sm">
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
          <th style="text-align: center; vertical-align: middle;">Nama Dosen</th>
          <th style="text-align: center; vertical-align: middle;">Bidang Keahlian</th>
          <th style="text-align: center; vertical-align: middle;">Rekognisi dan Bukti Pendukung</th>
          <th style="text-align: center; vertical-align: middle;">Tingkat</th>
          <th style="text-align: center; vertical-align: middle;">Tahun (YYYY)</th>
          <th style="text-align: center; vertical-align: middle;">Menu</th>
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
          <div class="form-group col-md-12">
            <label for="nama">NAMA DOSEN</label>
            <input type="text" class="form-control" id="nama" name="nama" required>
            <div id="id_check_result" class="help-block with-errors"></div>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-12">
            <label for="bidang_keahlian">Bidang Keahlian</label>
            <input type="text" class="form-control" id="bidang_keahlian" name="bidang_keahlian" required>
            <div id="id_check_result" class="help-block with-errors"></div>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="bukti_pendukung">Rekognisi dan Bukti Pendukung</label>
            <input type="text" class="form-control" id="bukti_pendukung" name="bukti_pendukung" required>
            <div id="id_check_result" class="help-block with-errors"></div>
          </div>
          <div class="form-group col-md-3">
            <label for="tingkat">Tingkat</label>
            <select id="tingkat" name="tingkat" class="custom-select" data-placeholder="Silahkan pilih..." required>
                 <option value=""></option>
                 <option value="Wilayah">Wilayah</option>
                 <option value="Nasional">Nasional</option>
                 <option value="Internasional">Internasional</option>
             </select>
            <div id="id_check_result" class="help-block with-errors"></div>
          </div>
          <div class="form-group col-md-3">
            <label for="tahun">Tahun (YYYY)</label>
            <input type="number" max="9999" class="form-control" id="tahun" name="tahun" required>
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
  <div class="modal fade" id="Modal_Edit" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
            <label for="nama_edit">NAMA DOSEN</label>
            <input type="text" class="form-control" id="nama_edit" name="nama_edit" required>
            <div id="id_check_result" class="help-block with-errors"></div>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-12">
            <label for="bidang_keahlian_edit">Bidang Keahlian</label>
            <input type="text" class="form-control" id="bidang_keahlian_edit" name="bidang_keahlian_edit" required>
            <div id="id_check_result" class="help-block with-errors"></div>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="bukti_pendukung_edit">Rekognisi dan Bukti Pendukung</label>
            <input type="text" class="form-control" id="bukti_pendukung_edit" name="bukti_pendukung_edit" required>
            <div id="id_check_result" class="help-block with-errors"></div>
          </div>
          <div class="form-group col-md-3">
            <label for="tingkat_edit">Tingkat</label>
            <select id="tingkat_edit" name="tingkat_edit" class="custom-select" data-placeholder="Silahkan pilih..." required>
                 <option value=""></option>
                 <option value="Wilayah">Wilayah</option>
                 <option value="Nasional">Nasional</option>
                 <option value="Internasional">Internasional</option>
             </select>
            <div id="id_check_result" class="help-block with-errors"></div>
          </div>
          <div class="form-group col-md-3">
            <label for="tahun_edit">Tahun (YYYY)</label>
            <input type="text" class="form-control" id="tahun_edit" name="tahun_edit" required>
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
      url   : '<?php echo site_url('dosen/rekognisi_data_list')?>',
      async : false,
      dataType : 'json',
      success : function(data){
        var html = '';
        var i;
        for(i=0; i<data.length; i++){
          html += '<tr>'+
          '<td style="text-align: center;">'+data[i].nama+'</td>'+
          '<td style="text-align: center;">'+data[i].bidang_keahlian+'</td>'+
          '<td style="text-align: center;">'+data[i].bukti_pendukung+'</td>'+
          '<td style="text-align: center;">'+data[i].tingkat+'</td>'+
          '<td style="text-align: center;">'+data[i].tahun+'</td>'+
          '<td style="text-align: center;">'+
              '<a href="javascript:void(0);" class="btn btn-info btn-circle btn-sm item_edit" data-toggle="tooltip" title="Edit" data-seq_id="'+data[i].seq_id+'" data-nama="'+data[i].nama+'" data-bidang_keahlian="'+data[i].bidang_keahlian+'" data-bukti_pendukung="'+data[i].bukti_pendukung+'" data-tingkat="'+data[i].tingkat+'" data-tahun="'+data[i].tahun+'" data-doc="'+data[i].doc+'"><i class="fas fa-search"></i></a>'+
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
	  url: '<?php echo site_url('upload/excel_upload/'.encode_url('3.b.1'))?>',
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

  //fill data record
  $('#tampil_data').on('click','.item_edit',function(){
    var seq_id = $(this).data('seq_id');
    var nama = $(this).data('nama');
    var bidang_keahlian = $(this).data('bidang_keahlian');
    var bukti_pendukung = $(this).data('bukti_pendukung');
    var tingkat = $(this).data('tingkat');
    var tahun = $(this).data('tahun');
    var doc = $(this).data('doc');
    if (doc) { $('#status').html('<span class="badge badge-success"> Dokumen telah diunggah</span>');
    } else { $('#status').html('<span class="badge badge-danger"> Dokumen belum diunggah</span>'); }

    $('#Modal_Edit').modal('show');
    $('[name="seq_id"]').val(seq_id);
    $('[name="nama_edit"]').val(nama);
    $('[name="bidang_keahlian_edit"]').val(bidang_keahlian);
    $('[name="bukti_pendukung_edit"]').val(bukti_pendukung);
    $('[name="tingkat_edit"]').val(tingkat);
    $('[name="tahun_edit"]').val(tahun);
    $('[name="doc_edit"]').val(doc);
    $('[name="nama_edit"]').focus();
  });

  //Save Data
  $('#tambah').submit(function(e) {
    e.preventDefault();

    $.ajax({
      url  : "<?php echo site_url('dosen/rekognisi_add')?>",
      type: "post",
      data: new FormData(this),
      dataType : "JSON",
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

  // Edit data
  $('#submit').submit(function(e){
    e.preventDefault();
    $.ajax({
      url:'<?php echo site_url('dosen/rekognisi_edit')?>',
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
          url  : "<?php echo site_url('dosen/rekognisi_delete')?>",
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
