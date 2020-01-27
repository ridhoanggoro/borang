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
      <a href="<?php echo base_url('export/export_excel/'.encode_url('5c'));?>" class="btn btn-success btn-icon-split btn-sm">
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
          <tr>
            <th rowspan="2" style="text-align: center; vertical-align: middle;">Aspek yang Diukur</th>
            <th colspan="4" style="text-align: center; vertical-align: middle;">Tingkat Kepuasan Mahasiswa (%)</th>
            <th rowspan="2" style="text-align: center; vertical-align: middle;">Rencana Tindak Lanjut oleh UPPS/PS</th>
            <th rowspan="2" style="text-align: center; vertical-align: middle;">Menu</th>
          </tr>
          <tr>
            <th style="text-align: center; vertical-align: middle;">Sangat Baik</th>
            <th style="text-align: center; vertical-align: middle;">Baik</th>
            <th style="text-align: center; vertical-align: middle;">Cukup</th>
            <th style="text-align: center; vertical-align: middle;">Kurang</th>
          </tr>
        </tr>
      </thead>
      <tbody id="tampil_data">
      </tbody>
    </table>
    </div>
  </div>
</div>

<!-- MODAL UPLOAD -->
<form class="form-horizontal" id="upload">
  <div class="modal fade" id="Modal_Upload" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
      <h5 class="modal-title" id="exampleModalLabel">Upload Data Excel</h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
      </div>
      <div class="modal-body">
        <div class="form-row">
          <div class="form-group col-md-12">
            <label for="mitra">Upload Excel File, Klik <a href="<?php echo base_url('assets/upload/5.c.kepuasan_pelanggan.xlsx');?>" data-toggle="tooltip" data-placement="top" title="Download Template">disini</a> untuk unduh file template</label>
            <input type="file" name="file_upload">
            <div id="id_check_result" class="help-block with-errors"></div>
          </div>
      </div>
    </div>
      <div class="modal-footer">
      <button class="btn btn-secondary btn-icon-split btn-sm" data-dismiss="modal"><span class="icon text-white-50"><i class="fas fa-arrow-alt-circle-left"></i></i></span>
      <span class="text">Batal</span></button>
      <button type="submit" id="btn_upload" class="btn btn-primary btn-icon-split btn-sm"><span class="icon text-white-50"><i class="fas fa-save"></i></span>
      <span class="text">Upload</span></button>
      </div>
    </div>
    </div>
  </div>
</form>
<!--END MODAL UPLOAD-->

<!-- MODAL ADD -->
<form class="was-validated">
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
            <label for="aspek_ukuran">Aspek yang Diukur</label>
            <select id="aspek_ukuran" name="aspek_ukuran" class="custom-select" data-placeholder="Silahkan pilih..." required>
              <option value=""></option>
              <?php foreach ($aspek_list->result() as $value) { ?>
              <option value="<?php echo $value->id; ?>"><?php echo $value->nama; ?></option>
              <?php } ?>
            </select>
            <div id="id_check_result" class="help-block with-errors"></div>
          </div>
        </div>
        <hr>
          <h5 class="text-center">Tingkat Kepuasan Mahasiswa (%)</h5>
        <hr>
        <div class="form-row">
          <div class="form-group col-md-3">
            <label for="sangat_baik">Sangat Baik</label>
            <input type="number" min="0" max="100" class="form-control" id="sangat_baik" name="sangat_baik" required>
            <div id="id_check_result" class="help-block with-errors"></div>
          </div>
          <div class="form-group col-md-3">
            <label for="baik">Baik</label>
            <input type="number" min="0" max="100" class="form-control" id="baik" name="baik" required>
            <div id="id_check_result" class="help-block with-errors"></div>
          </div>
          <div class="form-group col-md-3">
            <label for="cukup">Cukup</label>
            <input type="number" min="0" max="100" class="form-control" id="cukup" name="cukup" required>
            <div id="id_check_result" class="help-block with-errors"></div>
          </div>
          <div class="form-group col-md-3">
            <label for="kurang">Kurang</label>
            <input type="number" min="0" max="100" class="form-control" id="kurang" name="kurang" required>
            <div id="id_check_result" class="help-block with-errors"></div>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-12">
            <label for="rencana_tindaklanjut">Rencana Tindak Lanjut oleh UPPS/PS</label>
            <textarea class="form-control" rows="2" id="rencana_tindaklanjut" name="rencana_tindaklanjut" required></textarea>
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
<form class="was-validated">
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
            <label for="aspek_ukuran_edit">Aspek yang Diukur</label>
            <select id="aspek_ukuran_edit" name="aspek_ukuran_edit" class="custom-select" data-placeholder="Silahkan pilih..." required>
              <option value=""></option>
              <?php foreach ($aspek_list->result() as $value) { ?>
              <option value="<?php echo $value->id; ?>"><?php echo $value->nama; ?></option>
              <?php } ?>
            </select>
            <div id="id_check_result" class="help-block with-errors"></div>
          </div>
        </div>
        <hr>
          <h5 class="text-center">Tingkat Kepuasan Mahasiswa (%)</h5>
        <hr>
        <div class="form-row">
          <div class="form-group col-md-3">
            <label for="sangat_baik_edit">Sangat Baik</label>
            <input type="number" min="0" max="100" class="form-control" id="sangat_baik_edit" name="sangat_baik_edit" required>
            <div id="id_check_result" class="help-block with-errors"></div>
          </div>
          <div class="form-group col-md-3">
            <label for="baik_edit">Baik</label>
            <input type="number" min="0" max="100" class="form-control" id="baik_edit" name="baik_edit" required>
            <div id="id_check_result" class="help-block with-errors"></div>
          </div>
          <div class="form-group col-md-3">
            <label for="cukup_edit">Cukup</label>
            <input type="number" min="0" max="100" class="form-control" id="cukup_edit" name="cukup_edit" required>
            <div id="id_check_result" class="help-block with-errors"></div>
          </div>
          <div class="form-group col-md-3">
            <label for="kurang_edit">Kurang</label>
            <input type="number" min="0" max="100" class="form-control" id="kurang_edit" name="kurang_edit" required>
            <div id="id_check_result" class="help-block with-errors"></div>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-12">
            <label for="rencana_tindaklanjut_edit">Rencana Tindak Lanjut oleh UPPS/PS</label>
            <textarea class="form-control" rows="2" id="rencana_tindaklanjut_edit" name="rencana_tindaklanjut_edit" required></textarea>
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

<!--MODAL DELETE-->
<form>
    <div class="modal fade" id="Modal_Delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Konfirmasi Hapus Data</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
               Anda yakin ingin menghapus data ini? Data yang sudah dihapus tidak dapat dikembalikan!
          </div>
          <div class="modal-footer">
            <input type="hidden" name="seq_id_delete" id="seq_id_delete" class="form-control">
            <button class="btn btn-secondary btn-icon-split btn-sm" data-dismiss="modal"><span class="icon text-white-50"><i class="fas fa-arrow-alt-circle-left"></i></i></span>
            <span class="text">Batal</span></button>
            <button type="submit" id="btn_delete" class="btn btn-danger btn-icon-split btn-sm"><span class="icon text-white-50"><i class="fas fa-save"></i></span>
            <span class="text">Hapus</span></button>
          </div>
        </div>
      </div>
    </div>
</form>
<!--END MODAL DELETE-->

<script type="text/javascript">
$(document).ready(function(){
  show_data();
  function show_data(){
    $.ajax({
      type  : 'ajax',
      url   : '<?php echo site_url('kurikulum/kepuasan_mahasiswa_list')?>',
      async : false,
      dataType : 'json',
      success : function(data){
        var html = '';
        var i;
        for(i=0; i<data.length; i++){
          j = i + 1;
          html += '<tr>'+
          '<td>'+data[i].nama+'</td>'+
          '<td>'+data[i].sangat_baik+'</td>'+
          '<td>'+data[i].baik+'</td>'+
          '<td>'+data[i].cukup+'</td>'+
          '<td>'+data[i].kurang+'</td>'+
          '<td>'+data[i].rencana_tindaklanjut+'</td>'+
          '<td style="text-align:right;">'+
              '<a href="javascript:void(0);" class="btn btn-info btn-circle btn-sm item_edit" data-toggle="tooltip" data-placement="top" title="Edit" data-seq_id="'+data[i].seq_id+'" data-aspek_ukuran="'+data[i].aspek_ukuran+'" data-sangat_baik="'+data[i].sangat_baik+'" data-baik="'+data[i].baik+'" data-cukup="'+data[i].cukup+'" data-kurang="'+data[i].kurang+'" data-rencana_tindaklanjut="'+data[i].rencana_tindaklanjut+'"><i class="fas fa-search"></i></a>'+' '+
              '<a href="javascript:void(0);" class="btn btn-danger btn-circle btn-sm item_delete" data-toggle="tooltip" data-placement="top" title="Delete" data-seq_id="'+data[i].seq_id+'"><i class="fas fa-trash"></i></a>'+
          '</td>'+
          '</tr>';
        }
        $('#tampil_data').html(html);
      }
    });
  }

  // upload data
  $('#upload').submit(function(e){
    e.preventDefault();
      $.ajax({
        url:'<?php echo site_url('upload/excel_upload/'.encode_url('5.c'))?>',
        type:"post",
        data:new FormData(this),
        processData:false,
        contentType:false,
        cache:false,
        async:false,
        success: function(data){
          $('#Modal_Upload').modal('hide');
          $.alert({
            title: 'Sukses!',
            content: 'Data Berhasil Di Upload!',
          });
        show_data();
      }
    });
  });
  // end upload data

  //Save Data
  $('#btn_save').on('click',function(){
    var aspek_ukuran = $('#aspek_ukuran').val();
    var sangat_baik = $('#sangat_baik').val();
    var baik = $('#baik').val();
    var cukup = $('#cukup').val();
    var kurang = $('#kurang').val();
    var rencana_tindaklanjut = $('#rencana_tindaklanjut').val();

    $.ajax({
      type : "POST",
      url  : "<?php echo site_url('kurikulum/kepuasan_mahasiswa_add')?>",
      dataType : "JSON",
      data : {aspek_ukuran:aspek_ukuran, sangat_baik:sangat_baik, baik:baik, cukup:cukup, kurang:kurang, rencana_tindaklanjut:rencana_tindaklanjut},
      success: function(data){
        $('[name="aspek_ukuran"]').val("");
        $('[name="sangat_baik"]').val("");
        $('[name="baik"]').val("");
        $('[name="cukup"]').val("");
        $('[name="kurang"]').val("");
        $('[name="rencana_tindaklanjut"]').val("");
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
    var aspek_ukuran = $(this).data('aspek_ukuran');
    var sangat_baik = $(this).data('sangat_baik');
    var baik = $(this).data('baik');
    var cukup = $(this).data('cukup');
    var kurang = $(this).data('kurang');
    var rencana_tindaklanjut = $(this).data('rencana_tindaklanjut');

    $('#Modal_Edit').modal('show');
    $('[name="seq_id"]').val(seq_id);
    $('[name="aspek_ukuran_edit"]').val(aspek_ukuran);
    $('[name="sangat_baik_edit"]').val(sangat_baik);
    $('[name="baik_edit"]').val(baik);
    $('[name="cukup_edit"]').val(cukup);
    $('[name="kurang_edit"]').val(kurang);
    $('[name="rencana_tindaklanjut_edit"]').val(rencana_tindaklanjut);
  });

  //update record
  $('#btn_update').on('click',function(){
    var seq_id = $('#seq_id').val();
    var aspek_ukuran = $('#aspek_ukuran_edit').val();
    var sangat_baik = $('#sangat_baik_edit').val();
    var baik = $('#baik_edit').val();
    var cukup = $('#cukup_edit').val();
    var kurang = $('#kurang_edit').val();
    var rencana_tindaklanjut = $('#rencana_tindaklanjut_edit').val();

    $.ajax({
      type : "POST",
      url  : "<?php echo site_url('kurikulum/kepuasan_mahasiswa_edit')?>",
      dataType : "JSON",
      data : {seq_id:seq_id, aspek_ukuran:aspek_ukuran, sangat_baik:sangat_baik, baik:baik, cukup:cukup, kurang:kurang, rencana_tindaklanjut:rencana_tindaklanjut},
      success: function(data){
        $('[name="aspek_ukuran_edit"]').val("");
        $('[name="sangat_baik_edit"]').val("");
        $('[name="baik_edit"]').val("");
        $('[name="cukup_edit"]').val("");
        $('[name="kurang_edit"]').val("");
        $('[name="rencana_tindaklanjut_edit"]').val("");
        $('#Modal_Edit').modal('hide');
        $.alert({
          title: 'Sukses!',
          content: 'Data Berhasil Di Perbaharui!',
        });
        show_data();
      }
    });
    return false;
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
          url  : "<?php echo site_url('dosen/kepuasan_mahasiswa_delete')?>",
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
