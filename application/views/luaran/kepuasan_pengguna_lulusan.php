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
      <a href="<?php echo base_url('export/export_excel/'.encode_url('8e2'));?>" class="btn btn-success btn-icon-split btn-sm">
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
          <th rowspan="2" style="text-align: center; vertical-align: middle;">Jenis Kemampuan</th>
          <th colspan="4" style="text-align: center; vertical-align: middle;">Tingkat Kepuasan Pengguna (%)</th>
          <th rowspan="2" style="text-align: center; vertical-align: middle;">Rencana Tindak Lanjut oleh UPPS/PS</th>
          <th rowspan="2" style="text-align: center; vertical-align: middle;">Menu</th>
        </tr>
        <tr>
          <th style="text-align: center; vertical-align: middle;">Sangat Baik</th>
          <th style="text-align: center; vertical-align: middle;">Baik</th>
          <th style="text-align: center; vertical-align: middle;">Cukup</th>
          <th style="text-align: center; vertical-align: middle;">Kurang</th>
        </tr>
      </thead>
      <tbody id="tampil_data">
      </tbody>
    </table>
    </div>
  </div>
</div>

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
            <label for="jns_kemampuan">Jenis Kemampuan</label>
            <select id="jns_kemampuan" name="jns_kemampuan" class="custom-select" data-placeholder="Silahkan pilih..." required>
              <option value=""></option>
              <?php foreach ($data->result() as $value) { ?>
              <option value="<?php echo $value->id; ?>"><?php echo $value->nama; ?></option>
              <?php } ?>
            </select>
            <div id="id_check_result" class="help-block with-errors"></div>
          </div>
        </div>
        <hr>
          <h5>Tingkat Kepuasan Pengguna (%)</h5>
        <hr>
        <div class="form-row">
          <div class="form-group col-md-3">
            <label for="sangat_baik">Sangat Baik</label>
            <input type="number" min='1' max='9999' class="form-control" id="sangat_baik" name="sangat_baik" required>
            <div id="id_check_result" class="help-block with-errors"></div>
          </div>
          <div class="form-group col-md-3">
            <label for="baik">Baik</label>
            <input type="number" min='1' max='9999' class="form-control" id="baik" name="baik" required>
            <div id="id_check_result" class="help-block with-errors"></div>
          </div>
          <div class="form-group col-md-3">
            <label for="cukup">Cukup</label>
            <input type="number" min='1' max='9999' class="form-control" id="cukup" name="cukup" required>
            <div id="id_check_result" class="help-block with-errors"></div>
          </div>
          <div class="form-group col-md-3">
            <label for="kurang">Kurang</label>
            <input type="number" min='1' max='9999' class="form-control" id="kurang" name="kurang" required>
            <div id="id_check_result" class="help-block with-errors"></div>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-12">
            <label for="rencana_tindak_lanjut">Rencana Tindak Lanjut oleh UPPS/PS</label>
            <textarea id="rencana_tindak_lanjut" rows="3" name="rencana_tindak_lanjut" class="form-control" required></textarea>
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
            <label for="jns_kemampuan_edit">Jenis Kemampuan</label>
            <select id="jns_kemampuan_edit" name="jns_kemampuan_edit" class="custom-select" data-placeholder="Silahkan pilih..." required>
              <option value=""></option>
              <?php foreach ($data->result() as $value) { ?>
              <option value="<?php echo $value->id; ?>"><?php echo $value->nama; ?></option>
              <?php } ?>
            </select>
            <div id="id_check_result" class="help-block with-errors"></div>
          </div>
        </div>
        <hr>
          <h5>Tingkat Kepuasan Pengguna (%)</h5>
        <hr>
        <div class="form-row">
          <div class="form-group col-md-3">
            <label for="sangat_baik_edit">Sangat Baik</label>
            <input type="number" min='1' max='9999' class="form-control" id="sangat_baik_edit" name="sangat_baik_edit" required>
            <div id="id_check_result" class="help-block with-errors"></div>
          </div>
          <div class="form-group col-md-3">
            <label for="baik_edit">Baik</label>
            <input type="number" min='1' max='9999' class="form-control" id="baik_edit" name="baik_edit" required>
            <div id="id_check_result" class="help-block with-errors"></div>
          </div>
          <div class="form-group col-md-3">
            <label for="cukup_edit">Cukup</label>
            <input type="number" min='1' max='9999' class="form-control" id="cukup_edit" name="cukup_edit" required>
            <div id="id_check_result" class="help-block with-errors"></div>
          </div>
          <div class="form-group col-md-3">
            <label for="kurang_edit">Kurang</label>
            <input type="number" min='1' max='9999' class="form-control" id="kurang_edit" name="kurang_edit" required>
            <div id="id_check_result" class="help-block with-errors"></div>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-12">
            <label for="rencana_tindak_lanjut_edit">Rencana Tindak Lanjut oleh UPPS/PS</label>
            <textarea id="rencana_tindak_lanjut_edit" rows="3" name="rencana_tindak_lanjut_edit" class="form-control" required></textarea>
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
      url   : '<?php echo site_url('luaran/kepuasan_pengguna_lulusan_list')?>',
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
          '<td>'+data[i].rencana_tindak_lanjut+'</td>'+
          '<td style="text-align: center; vertical-align: middle;">'+
              '<a href="javascript:void(0);" class="btn btn-info btn-circle btn-sm item_edit" data-toggle="tooltip" data-placement="top" title="Edit" data-seq_id="'+data[i].seq_id+'" data-jns_kemampuan="'+data[i].jns_kemampuan+'" data-sangat_baik="'+data[i].sangat_baik+'" data-baik="'+data[i].baik+'" data-cukup="'+data[i].cukup+'" data-kurang="'+data[i].kurang+'" data-rencana_tindak_lanjut="'+data[i].rencana_tindak_lanjut+'"><i class="fas fa-search"></i></a>'+' '+
              '<a href="javascript:void(0);" class="btn btn-danger btn-circle btn-sm item_delete" data-toggle="tooltip" data-placement="top" title="Delete" data-seq_id="'+data[i].seq_id+'"><i class="fas fa-trash"></i></a>'+
          '</td>'+
          '</tr>';
        }
        $('#tampil_data').html(html);
      }
    });
  }

  //Save Data
  $('#btn_save').on('click',function(){
    var jns_kemampuan = $('#jns_kemampuan').val();
    var sangat_baik	 = $('#sangat_baik').val();
    var baik = $('#baik').val();
    var cukup = $('#cukup').val();
    var kurang = $('#kurang').val();
    var rencana_tindak_lanjut = $('#rencana_tindak_lanjut').val();

    $.ajax({
      type : "POST",
      url  : "<?php echo site_url('luaran/kepuasan_pengguna_lulusan_add')?>",
      dataType : "JSON",
      data : {jns_kemampuan:jns_kemampuan, sangat_baik:sangat_baik, baik:baik, cukup:cukup, kurang:kurang, rencana_tindak_lanjut:rencana_tindak_lanjut},
      success: function(data){
        $('[name="jns_kemampuan"]').val("");
        $('[name="sangat_baik"]').val("");
        $('[name="baik"]').val("");
        $('[name="cukup"]').val("");
        $('[name="kurang"]').val("");
        $('[name="rencana_tindak_lanjut"]').val("");
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
    var jns_kemampuan = $(this).data('jns_kemampuan');
    var sangat_baik = $(this).data('sangat_baik');
    var baik = $(this).data('baik');
    var cukup = $(this).data('cukup');
    var kurang = $(this).data('kurang');
    var rencana_tindak_lanjut = $(this).data('rencana_tindak_lanjut');

    $('#Modal_Edit').modal('show');
    $('[name="seq_id"]').val(seq_id);
    $('[name="jns_kemampuan_edit"]').val(jns_kemampuan);
    $('[name="sangat_baik_edit"]').val(sangat_baik);
    $('[name="baik_edit"]').val(baik);
    $('[name="cukup_edit"]').val(cukup);
    $('[name="kurang_edit"]').val(kurang);
    $('[name="rencana_tindak_lanjut_edit"]').val(rencana_tindak_lanjut);
  });

  //update record
  $('#btn_update').on('click',function(){
    var seq_id = $('#seq_id').val();
    var jns_kemampuan = $('#jns_kemampuan_edit').val();
    var sangat_baik = $('#sangat_baik_edit').val();
    var baik = $('#baik_edit').val();
    var cukup = $('#cukup_edit').val();
    var kurang = $('#kurang_edit').val();
    var rencana_tindak_lanjut = $('#rencana_tindak_lanjut_edit').val();

    $.ajax({
      type : "POST",
      url  : "<?php echo site_url('luaran/kepuasan_pengguna_lulusan_edit')?>",
      dataType : "JSON",
      data : {seq_id:seq_id, jns_kemampuan:jns_kemampuan, sangat_baik:sangat_baik, baik:baik, cukup:cukup, kurang:kurang, rencana_tindak_lanjut:rencana_tindak_lanjut},
      success: function(data){
        $('[name="jns_kemampuan_edit"]').val("");
        $('[name="sangat_baik_edit"]').val("");
        $('[name="baik_edit"]').val("");
        $('[name="cukup_edit"]').val("");
        $('[name="kurang_edit"]').val("");
        $('[name="rencana_tindak_lanjut_edit"]').val("");
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
          url  : "<?php echo site_url('luaran/kepuasan_pengguna_lulusan_delete')?>",
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
