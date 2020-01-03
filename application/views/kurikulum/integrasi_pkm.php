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
      <a href="<?php echo base_url('export/export_excel/'.encode_url('5b'));?>" class="btn btn-success btn-icon-split btn-sm">
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
            <th>Judul Penelitian/PkM</th>
            <th>Nama Dosen</th>
            <th>Mata Kuliah</th>
            <th>Bentuk Integrasi</th>
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
            <label for="judul">Judul</label>
            <textarea class="form-control" rows="3" id="judul" name="judul" required></textarea>
            <div id="id_check_result" class="help-block with-errors"></div>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-12">
            <label for="nama_dosen">Nama Dosen</label>
            <textarea class="form-control" rows="2" id="nama_dosen" name="nama_dosen" required></textarea>
            <div id="id_check_result" class="help-block with-errors"></div>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-12">
            <label for="matkul">Mata Kuliah</label>
            <textarea class="form-control" rows="2" id="matkul" name="matkul" required></textarea>
            <div id="id_check_result" class="help-block with-errors"></div>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-9">
            <label for="bentuk_integrasi">Bentuk Integrasi</label>
            <input type="text" class="form-control" id="bentuk_integrasi" name="bentuk_integrasi" required>
            <div id="id_check_result" class="help-block with-errors"></div>
          </div>
          <div class="form-group col-md-3">
            <label for="tahun">Tahun (YYYY)</label>
            <input type="number" min='2000' max='9999' class="form-control" id="tahun" name="tahun" required>
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
            <label for="judul_edit">Judul</label>
            <textarea class="form-control" rows="3" id="judul_edit" name="judul_edit" required></textarea>
            <div id="id_check_result" class="help-block with-errors"></div>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-12">
            <label for="nama_dosen_edit">Nama Dosen</label>
            <textarea class="form-control" rows="2" id="nama_dosen_edit" name="nama_dosen_edit" required></textarea>
            <div id="id_check_result" class="help-block with-errors"></div>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-12">
            <label for="matkul_edit">Mata Kuliah</label>
            <textarea class="form-control" rows="2" id="matkul_edit" name="matkul_edit" required></textarea>
            <div id="id_check_result" class="help-block with-errors"></div>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-9">
            <label for="bentuk_integrasi_edit">Bentuk Integrasi</label>
            <input type="text" class="form-control" id="bentuk_integrasi_edit" name="bentuk_integrasi_edit" required>
            <div id="id_check_result" class="help-block with-errors"></div>
          </div>
          <div class="form-group col-md-3">
            <label for="tahun_edit">Tahun (YYYY)</label>
            <input type="number" min='2000' max='9999' class="form-control" id="tahun_edit" name="tahun_edit" required>
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
  $('#mydata').dataTable();
  function show_data(){
    $.ajax({
      type  : 'ajax',
      url   : '<?php echo site_url('kurikulum/integrasi_pkm_list')?>',
      async : false,
      dataType : 'json',
      success : function(data){
        var html = '';
        var i;
        for(i=0; i<data.length; i++){
          j = i + 1;
          html += '<tr>'+
          '<td>'+data[i].judul+'</td>'+
          '<td>'+data[i].nama_dosen+'</td>'+
          '<td>'+data[i].matkul+'</td>'+
          '<td>'+data[i].bentuk_integrasi+'</td>'+
          '<td>'+data[i].tahun+'</td>'+
          '<td style="text-align:right;">'+
              '<a href="javascript:void(0);" class="btn btn-info btn-circle btn-sm item_edit" data-toggle="tooltip" data-placement="top" title="Edit" data-seq_id="'+data[i].seq_id+'" data-judul="'+data[i].judul+'" data-nama_dosen="'+data[i].nama_dosen+'" data-matkul="'+data[i].matkul+'" data-bentuk_integrasi="'+data[i].bentuk_integrasi+'" data-tahun="'+data[i].tahun+'"><i class="fas fa-search"></i></a>'+' '+
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
    var judul = $('#judul').val();
    var nama_dosen = $('#nama_dosen').val();
    var matkul = $('#matkul').val();
    var bentuk_integrasi = $('#bentuk_integrasi').val();
    var tahun = $('#tahun').val();

    $.ajax({
      type : "POST",
      url  : "<?php echo site_url('kurikulum/integrasi_pkm_add')?>",
      dataType : "JSON",
      data : {judul:judul, nama_dosen:nama_dosen, matkul:matkul, bentuk_integrasi:bentuk_integrasi, tahun:tahun},
      success: function(data){
        $('[name="judul"]').val("");
        $('[name="nama_dosen"]').val("");
        $('[name="bentuk_integrasi"]').val("");
        $('[name="matkul"]').val("");
        $('[name="tahun"]').val("");
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
    var judul = $(this).data('judul');
    var nama_dosen = $(this).data('nama_dosen');
    var matkul = $(this).data('matkul');
    var bentuk_integrasi = $(this).data('bentuk_integrasi');
    var tahun = $(this).data('tahun');

    $('#Modal_Edit').modal('show');
    $('[name="seq_id"]').val(seq_id);
    $('[name="judul_edit"]').val(judul);
    $('[name="nama_dosen_edit"]').val(nama_dosen);
    $('[name="matkul_edit"]').val(matkul);
    $('[name="bentuk_integrasi_edit"]').val(bentuk_integrasi);
    $('[name="tahun_edit"]').val(tahun);
  });

  //update record
  $('#btn_update').on('click',function(){
    var seq_id = $('#seq_id').val();
    var judul = $('#judul_edit').val();
    var nama_dosen = $('#nama_dosen_edit').val();
    var matkul = $('#matkul_edit').val();
    var bentuk_integrasi = $('#bentuk_integrasi_edit').val();
    var tahun = $('#tahun_edit').val();

    $.ajax({
      type : "POST",
      url  : "<?php echo site_url('kurikulum/integrasi_pkm_edit')?>",
      dataType : "JSON",
      data : {seq_id:seq_id, judul:judul, nama_dosen:nama_dosen, matkul:matkul, bentuk_integrasi:bentuk_integrasi, tahun:tahun},
      success: function(data){
        $('[name="judul_edit"]').val("");
        $('[name="nama_dosen_edit"]').val("");
        $('[name="bentuk_integrasi_edit"]').val("");
        $('[name="matkul_edit"]').val("");
        $('[name="tahun_edit"]').val("");
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
          url  : "<?php echo site_url('dosen/hki_hak_cipta_delete')?>",
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
