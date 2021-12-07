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
      <a href="<?php echo base_url('export/export_excel/'.encode_url('3a3'));?>" class="btn btn-success btn-icon-split btn-sm">
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
          <th rowspan="2" style="text-align: center; vertical-align: middle;">Nama Dosen (DT)</th>
          <th rowspan="2" style="text-align: center; vertical-align: middle;">DTPS</th>
          <th colspan="3" style="text-align: center; vertical-align: middle;">Pendidikan: Pembelajaran dan Pembimbingan</th>
          <th rowspan="2" style="text-align: center; vertical-align: middle;">Penelitian</th>
          <th rowspan="2" style="text-align: center; vertical-align: middle;">PkM</th>
          <th rowspan="2" style="text-align: center; vertical-align: middle;">Tugas Tambahan dan/atau Penunjang</th>
          <th rowspan="2" style="text-align: center; vertical-align: middle;">Rata-rata per Semester (sks)</th>
          <th rowspan="2" style="text-align: center; vertical-align: middle;">Jumlah (sks)</th>
          <th rowspan="2" style="text-align: center; vertical-align: middle;">Menu</th>
        </tr>
        <tr>
            <th style="text-align: center; vertical-align: middle;">PS yang Diakreditasi</th>
            <th style="text-align: center; vertical-align: middle;">PS Lain di dalam PT</th>
            <th style="text-align: center; vertical-align: middle;">PS Lain di luar PT</th>
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
            <label for="nidn">NAMA DOSEN</label>
            <select id="nidn" name="nidn" class="custom-select" data-placeholder="Silahkan pilih..." required>
              <option value=""></option>
              <?php foreach ($dosen->result() as $value) { ?>
              <option value="<?php echo $value->nidn; ?>"><?php echo $value->nama; ?></option>
              <?php } ?>
            </select>
            <div id="id_check_result" class="help-block with-errors"></div>
          </div>
          <div class="d-none">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama">
            <div id="id_check_result" class="help-block with-errors"></div>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-4">
            <label for="dpts">DPTS</label>
            <select id="dpts" name="dpts" class="custom-select" data-placeholder="Silahkan pilih..." required>
                 <option value=""></option>
                 <option value="V">YA</option>
                 <option value="X">TIDAK</option>
             </select>
            <div id="id_check_result" class="help-block with-errors"></div>
          </div>
          <div class="form-group col-md-4">
            <label for="ps_yang_diakreditasi">Pendidikan PS yang Diakreditasi</label>
            <input type="number" class="form-control" id="ps_yang_diakreditasi" name="ps_yang_diakreditasi" required>
            <div id="id_check_result" class="help-block with-errors"></div>
          </div>
          <div class="form-group col-md-4">
            <label for="ps_lain_di_dalam_pt">Pendidikan PS Lain di dalam PT</label>
            <input type="number" class="form-control" id="ps_lain_di_dalam_pt" name="ps_lain_di_dalam_pt" required>
            <div id="id_check_result" class="help-block with-errors"></div>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-4">
          <label for="ps_lain_di_luar_pt">Pendidikan PS Lain di luar PT</label>
          <input type="number" class="form-control" id="ps_lain_di_luar_pt" name="ps_lain_di_luar_pt" required>
          </div>
          <div class="form-group col-md-4">
            <label for="penelitian">Penelitian</label>
            <input type="number" class="form-control" id="penelitian" name="penelitian" required>
            <div id="id_check_result" class="help-block with-errors"></div>
          </div>
          <div class="form-group col-md-4">
            <label for="pkm">PKM</label>
            <input type="number" class="form-control" id="pkm" name="pkm" required>
            <div id="id_check_result" class="help-block with-errors"></div>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-12">
            <label for="tugas_tambahan">Tugas Tambahan</label>
            <input type="number" class="form-control" id="tugas_tambahan" name="tugas_tambahan" required>
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
        <div class="form-row">
          <input type="text" hidden="" class="form-control" id="seq_id" name="seq_id">
          <div class="form-group col-md-6">
            <label for="nidn_edit">NAMA DOSEN</label>
            <select id="nidn_edit" name="nidn_edit" class="custom-select" data-placeholder="Silahkan pilih..." required>
              <option value=""></option>
              <?php foreach ($dosen->result() as $value) { ?>
              <option value="<?php echo $value->nidn; ?>"><?php echo $value->nama; ?></option>
              <?php } ?>
            </select>
            <div id="id_check_result" class="help-block with-errors"></div>
          </div>
          <div class="d-none">
            <label for="nama_edit">Nama</label>
            <input type="text" class="form-control" id="nama_edit" name="nama_edit">
            <div id="id_check_result" class="help-block with-errors"></div>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-4">
            <label for="dtps_edit">DPTS</label>
            <select id="dtps_edit" name="dtps_edit" class="custom-select" data-placeholder="Silahkan pilih..." required>
                 <option value=""></option>
                 <option value="V">YA</option>
                 <option value="X">TIDAK</option>
             </select>
            <div id="id_check_result" class="help-block with-errors"></div>
          </div>
          <div class="form-group col-md-4">
            <label for="ps_yang_diakreditasi_edit">Pendidikan PS yang Diakreditasi</label>
            <input type="number" class="form-control" id="ps_yang_diakreditasi_edit" name="ps_yang_diakreditasi_edit" required>
            <div id="id_check_result" class="help-block with-errors"></div>
          </div>
          <div class="form-group col-md-4">
            <label for="ps_lain_di_dalam_pt_edit">Pendidikan PS Lain di dalam PT</label>
            <input type="number" class="form-control" id="ps_lain_di_dalam_pt_edit" name="ps_lain_di_dalam_pt_edit" required>
            <div id="id_check_result" class="help-block with-errors"></div>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-4">
          <label for="ps_lain_di_luar_pt_edit">Pendidikan PS Lain di luar PT</label>
          <input type="number" class="form-control" id="ps_lain_di_luar_pt_edit" name="ps_lain_di_luar_pt_edit" required>
          </div>
          <div class="form-group col-md-4">
            <label for="penelitian_edit">Penelitian</label>
            <input type="text" class="form-control" id="penelitian_edit" name="penelitian_edit" required>
            <div id="id_check_result" class="help-block with-errors"></div>
          </div>
          <div class="form-group col-md-4">
            <label for="pkm_edit">PKM</label>
            <input type="number" class="form-control" id="pkm_edit" name="pkm_edit" required>
            <div id="id_check_result" class="help-block with-errors"></div>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-12">
            <label for="tugas_tambahan_edit">Tugas Tambahan</label>
            <input type="text" class="form-control" id="tugas_tambahan_edit" name="tugas_tambahan_edit" required>
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
  // Add the following code if you want the name of the file appear on select
   $(".custom-file-input").on("change", function() {
     var fileName = $(this).val().split("\\").pop();
     $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
   });
  function show_data(){
    $.ajax({
      type  : 'ajax',
      url   : '<?php echo site_url('dosen/ewmp_data_list')?>',
      async : false,
      dataType : 'json',
      success : function(data){
        var html = '';
        var i;
        var jml=0;
        var rata2=0;
        for(i=0; i<data.length; i++){

          jml = parseInt(data[i].ps_yang_diakreditasi)+parseInt(data[i].ps_lain_di_dalam_pt)+parseInt(data[i].ps_lain_di_luar_pt)+parseInt(data[i].penelitian)+parseInt(data[i].pkm)+parseInt(data[i].tugas_tambahan);
          rata2 = jml/2;
          html += '<tr>'+
          '<td style="text-align: center;">'+data[i].nama+'</td>'+
          '<td style="text-align: center;">'+data[i].dtps+'</td>'+
          '<td style="text-align: center;">'+data[i].ps_yang_diakreditasi+'</td>'+
          '<td style="text-align: center;">'+data[i].ps_lain_di_dalam_pt+'</td>'+
          '<td style="text-align: center;">'+data[i].ps_lain_di_luar_pt+'</td>'+
          '<td style="text-align: center;">'+data[i].penelitian+'</td>'+
          '<td style="text-align: center;">'+data[i].pkm+'</td>'+
          '<td style="text-align: center;">'+data[i].tugas_tambahan+'</td>'+
          '<td style="text-align: center;">'+jml+'</td>'+
          '<td style="text-align: center;">'+rata2+'</td>'+
          '<td style="text-align: center;">'+
              '<a href="javascript:void(0);" class="btn btn-info btn-circle btn-sm item_edit" data-toggle="tooltip" title="Edit" data-seq_id="'+data[i].seq_id+'" data-nik_nidn="'+data[i].nik_nidn+'" data-dtps="'+data[i].dtps+'" data-ps_yang_diakreditasi="'+data[i].ps_yang_diakreditasi+'" data-ps_lain_di_dalam_pt="'+data[i].ps_lain_di_dalam_pt+'" data-ps_lain_di_luar_pt="'+data[i].ps_lain_di_luar_pt+'" data-penelitian="'+data[i].penelitian+'" data-pkm="'+data[i].pkm+'" data-tugas_tambahan="'+data[i].tugas_tambahan+'" data-doc="'+data[i].doc+'"><i class="fas fa-search"></i></a>'+
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
          url: '<?php echo site_url('upload/excel_upload/'.encode_url('3.a.3'))?>',
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
    var seq_id               = $(this).data('seq_id');
    var nik_nidn             = $(this).data('nik_nidn');
    var dtps                 = $(this).data('dtps');
    var ps_yang_diakreditasi = $(this).data('ps_yang_diakreditasi');
    var ps_lain_di_dalam_pt  = $(this).data('ps_lain_di_dalam_pt');
    var ps_lain_di_luar_pt   = $(this).data('ps_lain_di_luar_pt');
    var penelitian           = $(this).data('penelitian');
    var pkm                  = $(this).data('pkm');
    var tugas_tambahan       = $(this).data('tugas_tambahan');
    var doc = $(this).data('doc');
    if (doc) { $('#status').html('<span class="badge badge-success">Dokumen telah diunggah</span>');
    } else { $('#status').html('<span class="badge badge-danger">Dokumen belum diunggah</span>'); }

    $('#Modal_Edit').modal('show');
    $('[name="seq_id"]').val(seq_id);
    $('[name="nidn_edit"]').val(nik_nidn);
    $('[name="dtps_edit"]').val(dtps);
    $('[name="ps_yang_diakreditasi_edit"]').val(ps_yang_diakreditasi);
    $('[name="ps_lain_di_dalam_pt_edit"]').val(ps_lain_di_dalam_pt);
    $('[name="ps_lain_di_luar_pt_edit"]').val(ps_lain_di_luar_pt);
    $('[name="penelitian_edit"]').val(penelitian);
    $('[name="pkm_edit"]').val(pkm);
    $('[name="tugas_tambahan_edit"]').val(tugas_tambahan);
    $('[name="doc_edit"]').val(doc);
  });

  //Save Data
  $('#tambah').submit(function(e) {
    e.preventDefault();
    $.ajax({
      url  : "<?php echo site_url('dosen/ewmp_add')?>",
      type: "post",
      data: new FormData(this),
      processData: false,
      contentType: false,
      cache: false,
      async: false,
      success: function(data) {
        $('[name="nidn"]').val("");
        $('[name="dpts"]').val("");
        $('[name="ps_yang_diakreditasi"]').val("");
        $('[name="ps_lain_di_dalam_pt"]').val("");
        $('[name="ps_lain_di_luar_pt"]').val("");
        $('[name="penelitian"]').val("");
        $('[name="pkm"]').val("");
        $('[name="tugas_tambahan"]').val("");
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
      url:'<?php echo site_url('dosen/ewmp_edit')?>',
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
          url  : "<?php echo site_url('dosen/ewmp_delete')?>",
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
