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
      <a href="<?php echo base_url('export/export_excel/'.encode_url('8d2'));?>" class="btn btn-success btn-icon-split btn-sm">
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
          <th rowspan="2" style="text-align: center; vertical-align: middle;">Tahun Lulus</th>
          <th rowspan="2" style="text-align: center; vertical-align: middle;">Jumlah Lulusan</th>
          <th rowspan="2" style="text-align: center; vertical-align: middle;">Jumlah Lulusan yang Terlacak</th>
          <th colspan="3" style="text-align: center; vertical-align: middle;">Jumlah lulusan Terlacak dengan Tingkat Keseuaian Bidang Kerja</th>
          <th rowspan="2" style="text-align: center; vertical-align: middle;">Menu</th>
        </tr>
        <tr>
          <th style="text-align: center; vertical-align: middle;">Rendah</th>
          <th style="text-align: center; vertical-align: middle;">Sedang</th>
          <th style="text-align: center; vertical-align: middle;">Tinggi</th>
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
            <label for="mitra">Upload Excel File, Klik <a href="<?php echo base_url('assets/upload/8.d.2.kesesuaian_bidang_kerja_lulusan.xlsx');?>" data-toggle="tooltip" data-placement="top" title="Download Template">disini</a> untuk unduh file template</label>
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
          <div class="form-group col-md-3">
            <label for="jml_lulusan_terlacak">Jumlah Lulusan yang Terlacak</label>
            <input type="number" min='1' max='9999' class="form-control" id="jml_lulusan_terlacak" name="jml_lulusan_terlacak" required>
            <div id="id_check_result" class="help-block with-errors"></div>
          </div>
          <div class="form-group col-md-3">
            <label for="jml_lulusan_terlacak_rendah">Rendah</label>
            <input type="number" min='1' max='9999' class="form-control" id="jml_lulusan_terlacak_rendah" name="jml_lulusan_terlacak_rendah" required>
            <div id="id_check_result" class="help-block with-errors"></div>
          </div>
          <div class="form-group col-md-3">
            <label for="jml_lulusan_terlacak_sedang">Sedang</label>
            <input type="number" min='1' max='9999' class="form-control" id="jml_lulusan_terlacak_sedang" name="jml_lulusan_terlacak_sedang" required>
            <div id="id_check_result" class="help-block with-errors"></div>
          </div>
          <div class="form-group col-md-3">
            <label for="jml_lulusan_terlacak_tinggi">Tinggi</label>
            <input type="number" min='1' max='9999' class="form-control" id="jml_lulusan_terlacak_tinggi" name="jml_lulusan_terlacak_tinggi" required>
            <div id="id_check_result" class="help-block with-errors"></div>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-12">
            <label for="ts">TS</label>
            <select id="ts" name="ts" class="custom-select" data-placeholder="Silahkan pilih..." required>
              <option value=""></option>
              <?php foreach ($ts_list->result() as $value) { ?>
              <option value="<?php echo $value->nama_ts; ?>"><?php echo $value->nama_ts; ?></option>
              <?php } ?>
            </select>
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
          <div class="form-group col-md-3">
            <label for="jml_lulusan_terlacak_edit">Jumlah Lulusan yang Terlacak</label>
            <input type="number" min='1' max='9999' class="form-control" id="jml_lulusan_terlacak_edit" name="jml_lulusan_terlacak_edit" required>
            <div id="id_check_result" class="help-block with-errors"></div>
          </div>
          <div class="form-group col-md-3">
            <label for="jml_lulusan_terlacak_rendah_edit">Rendah</label>
            <input type="number" min='1' max='9999' class="form-control" id="jml_lulusan_terlacak_rendah_edit" name="jml_lulusan_terlacak_rendah_edit" required>
            <div id="id_check_result" class="help-block with-errors"></div>
          </div>
          <div class="form-group col-md-3">
            <label for="jml_lulusan_terlacak_sedang_edit">Sedang</label>
            <input type="number" min='1' max='9999' class="form-control" id="jml_lulusan_terlacak_sedang_edit" name="jml_lulusan_terlacak_sedang_edit" required>
            <div id="id_check_result" class="help-block with-errors"></div>
          </div>
          <div class="form-group col-md-3">
            <label for="jml_lulusan_terlacak_tinggi_edit">Tinggi</label>
            <input type="number" min='1' max='9999' class="form-control" id="jml_lulusan_terlacak_tinggi_edit" name="jml_lulusan_terlacak_tinggi_edit" required>
            <div id="id_check_result" class="help-block with-errors"></div>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-12">
            <label for="ts_edit">TS</label>
            <select id="ts_edit" name="ts_edit" class="custom-select" data-placeholder="Silahkan pilih..." required>
              <option value=""></option>
              <?php foreach ($ts_list->result() as $value) { ?>
              <option value="<?php echo $value->nama_ts; ?>"><?php echo $value->nama_ts; ?></option>
              <?php } ?>
            </select>
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
      url   : '<?php echo site_url('luaran/kesesuaian_bidang_kerja_lulusan_list')?>',
      async : false,
      dataType : 'json',
      success : function(data){
        var html = '';
        var i;
        for(i=0; i<data.length; i++){
          j = i + 1;
          html += '<tr>'+
          '<td>'+data[i].nama_ts+'</td>'+
          '<td>'+data[i].jml+'</td>'+
          '<td>'+data[i].jml_lulusan_terlacak+'</td>'+
          '<td>'+data[i].jml_lulusan_terlacak_rendah+'</td>'+
          '<td>'+data[i].jml_lulusan_terlacak_sedang+'</td>'+
          '<td>'+data[i].jml_lulusan_terlacak_tinggi+'</td>'+
          '<td style="text-align:right;">'+
              '<a href="javascript:void(0);" class="btn btn-info btn-circle btn-sm item_edit" data-toggle="tooltip" data-placement="top" title="Edit" data-seq_id="'+data[i].seq_id+'" data-jml_lulusan_terlacak="'+data[i].jml_lulusan_terlacak+'" data-jml_lulusan_terlacak_rendah="'+data[i].jml_lulusan_terlacak_rendah+'" data-jml_lulusan_terlacak_sedang="'+data[i].jml_lulusan_terlacak_sedang+'" data-jml_lulusan_terlacak_tinggi="'+data[i].jml_lulusan_terlacak_tinggi+'" data-ts="'+data[i].ts+'"><i class="fas fa-search"></i></a>'+' '+
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
        url:'<?php echo site_url('upload/excel_upload/'.encode_url('8.d.2'))?>',
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
    var jml_lulusan_terlacak = $('#jml_lulusan_terlacak').val();
    var jml_lulusan_terlacak_rendah	 = $('#jml_lulusan_terlacak_rendah').val();
    var jml_lulusan_terlacak_sedang = $('#jml_lulusan_terlacak_sedang').val();
    var jml_lulusan_terlacak_tinggi = $('#jml_lulusan_terlacak_tinggi').val();
    var ts = $('#ts').val();

    $.ajax({
      type : "POST",
      url  : "<?php echo site_url('luaran/kesesuaian_bidang_kerja_lulusan_add')?>",
      dataType : "JSON",
      data : {jml_lulusan_terlacak:jml_lulusan_terlacak, jml_lulusan_terlacak_rendah:jml_lulusan_terlacak_rendah, jml_lulusan_terlacak_sedang:jml_lulusan_terlacak_sedang, jml_lulusan_terlacak_tinggi:jml_lulusan_terlacak_tinggi, ts:ts},
      success: function(data){
        $('[name="jml_lulusan_terlacak"]').val("");
        $('[name="jml_lulusan_terlacak_rendah"]').val("");
        $('[name="jml_lulusan_terlacak_sedang"]').val("");
        $('[name="jml_lulusan_terlacak_tinggi"]').val("");
        $('[name="ts"]').val("");
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
    var jml_lulusan_terlacak = $(this).data('jml_lulusan_terlacak');
    var jml_lulusan_terlacak_rendah = $(this).data('jml_lulusan_terlacak_rendah');
    var jml_lulusan_terlacak_sedang = $(this).data('jml_lulusan_terlacak_sedang');
    var jml_lulusan_terlacak_tinggi = $(this).data('jml_lulusan_terlacak_tinggi');
    var ts = $(this).data('ts');

    $('#Modal_Edit').modal('show');
    $('[name="seq_id"]').val(seq_id);
    $('[name="jml_lulusan_terlacak_edit"]').val(jml_lulusan_terlacak);
    $('[name="jml_lulusan_terlacak_rendah_edit"]').val(jml_lulusan_terlacak_rendah);
    $('[name="jml_lulusan_terlacak_sedang_edit"]').val(jml_lulusan_terlacak_sedang);
    $('[name="jml_lulusan_terlacak_tinggi_edit"]').val(jml_lulusan_terlacak_tinggi);
    $('[name="ts_edit"]').val(ts);
  });

  //update record
  $('#btn_update').on('click',function(){
    var seq_id = $('#seq_id').val();
    var jml_lulusan_terlacak = $('#jml_lulusan_terlacak_edit').val();
    var jml_lulusan_terlacak_rendah = $('#jml_lulusan_terlacak_rendah_edit').val();
    var jml_lulusan_terlacak_sedang = $('#jml_lulusan_terlacak_sedang_edit').val();
    var jml_lulusan_terlacak_tinggi = $('#jml_lulusan_terlacak_tinggi_edit').val();
    var ts = $('#ts_edit').val();

    $.ajax({
      type : "POST",
      url  : "<?php echo site_url('luaran/kesesuaian_bidang_kerja_lulusan_edit')?>",
      dataType : "JSON",
      data : {seq_id:seq_id, jml_lulusan_terlacak:jml_lulusan_terlacak, jml_lulusan_terlacak_rendah:jml_lulusan_terlacak_rendah, jml_lulusan_terlacak_sedang:jml_lulusan_terlacak_sedang, jml_lulusan_terlacak_tinggi:jml_lulusan_terlacak_tinggi, ts:ts},
      success: function(data){
        $('[name="jml_lulusan_terlacak_edit"]').val("");
        $('[name="jml_lulusan_terlacak_rendah_edit"]').val("");
        $('[name="jml_lulusan_terlacak_sedang_edit"]').val("");
        $('[name="jml_lulusan_terlacak_tinggi_edit"]').val("");
        $('[name="ts_edit"]').val("");
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
          url  : "<?php echo site_url('luaran/kesesuaian_bidang_kerja_lulusan_delete')?>",
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
