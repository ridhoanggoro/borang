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
      <a href="<?php echo base_url('export/export_excel/'.encode_url('3a5'));?>" class="btn btn-success btn-icon-split btn-sm">
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
          <th style="text-align: center; vertical-align: middle;">NIDK</th>
          <th style="text-align: center; vertical-align: middle;">Perusahaan/Industri</th>
          <th style="text-align: center; vertical-align: middle;">Pendidikan Tertinggi</th>
          <th style="text-align: center; vertical-align: middle;">Bidang Keahlian</th>
          <th style="text-align: center; vertical-align: middle;">Sertifikat Profesi</th>
          <th style="text-align: center; vertical-align: middle;">Mata Kuliah yang Diampu</th>
          <th style="text-align: center; vertical-align: middle;">Bobot Kredit (sks)</th>
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
          <div class="form-group col-md-4">
            <label for="nidk">NIDK</label>
            <input type="text" class="form-control" id="nidk" name="nidk" required>
            <div id="id_check_result" class="help-block with-errors"></div>
          </div>
          <div class="form-group col-md-8">
            <label for="nama">NAMA DOSEN</label>
            <input type="text" class="form-control" id="nama" name="nama" required>
            <div id="id_check_result" class="help-block with-errors"></div>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-4">
            <label for="perusahaan">Perusahaan/Industri</label>
            <div id="id_check_result" class="help-block with-errors"></div>
            <input type="text" class="form-control" id="perusahaan" name="perusahaan" required>
          </div>
          <div class="form-group col-md-4">
            <label for="pendidikan_tertinggi">Pendidikan Tertinggi</label>
            <input type="text" class="form-control" id="pendidikan_tertinggi" name="pendidikan_tertinggi" required>
            <div id="id_check_result" class="help-block with-errors"></div>
          </div>
          <div class="form-group col-md-4">
            <label for="bidang_keahlian">Bidang Keahlian</label>
            <input type="text" class="form-control" id="bidang_keahlian" name="bidang_keahlian" required>
            <div id="id_check_result" class="help-block with-errors"></div>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-4">
          <label for="sertifikat_profesi">Sertifikat Profesi</label>
          <input type="text" class="form-control" id="sertifikat_profesi" name="sertifikat_profesi" required>
          </div>
          <div class="form-group col-md-4">
            <label for="matakuliah_diampu">Mata Kuliah yang Diampu</label>
            <input type="text" class="form-control" id="matakuliah_diampu" name="matakuliah_diampu" required>
            <div id="id_check_result" class="help-block with-errors"></div>
          </div>
          <div class="form-group col-md-4">
            <label for="sks">Bobot Kredit (sks)</label>
            <input type="number" class="form-control" id="sks" name="sks" required>
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
          <div class="form-group col-md-4">
            <label for="nidk_edit">NIDK</label>
            <input type="text" class="form-control" id="nidk_edit" name="nidk_edit" required>
            <div id="id_check_result" class="help-block with-errors"></div>
          </div>
          <div class="form-group col-md-8">
            <label for="nama_edit">NAMA DOSEN</label>
            <input type="text" class="form-control" id="nama_edit" name="nama_edit" required>
            <div id="id_check_result" class="help-block with-errors"></div>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-4">
            <label for="perusahaan_edit">Perusahaan/Industri</label>
            <div id="id_check_result" class="help-block with-errors"></div>
            <input type="text" class="form-control" id="perusahaan_edit" name="perusahaan_edit" required>
          </div>
          <div class="form-group col-md-4">
            <label for="pendidikan_tertinggi_edit">Pendidikan Tertinggi</label>
            <input type="text" class="form-control" id="pendidikan_tertinggi_edit" name="pendidikan_tertinggi_edit" required>
            <div id="id_check_result" class="help-block with-errors"></div>
          </div>
          <div class="form-group col-md-4">
            <label for="bidang_keahlian_edit">Bidang Keahlian</label>
            <input type="text" class="form-control" id="bidang_keahlian_edit" name="bidang_keahlian_edit" required>
            <div id="id_check_result" class="help-block with-errors"></div>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-4">
          <label for="sertifikat_profesi_edit">Sertifikat Profesi</label>
          <input type="text" class="form-control" id="sertifikat_profesi_edit" name="sertifikat_profesi_edit" required>
          </div>
          <div class="form-group col-md-4">
            <label for="matakuliah_diampu_edit">Mata Kuliah yang Diampu</label>
            <input type="text" class="form-control" id="matakuliah_diampu_edit" name="matakuliah_diampu_edit" required>
            <div id="id_check_result" class="help-block with-errors"></div>
          </div>
          <div class="form-group col-md-4">
            <label for="bobot_edit">Bobot Kredit (sks)</label>
            <input type="number" class="form-control" id="bobot_edit" name="bobot_edit" required>
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
            <button type="submit" id="btn_delete" class="btn btn-danger btn-icon-split btn-sm"><span class="icon text-white-50"><i class="fas fa-trash"></i></span>
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
      url   : '<?php echo site_url('dosen/dosen_praktisi_data_list')?>',
      async : false,
      dataType : 'json',
      success : function(data){
        var html = '';
        var i;
        for(i=0; i<data.length; i++){
          html += '<tr>'+
          '<td style="text-align: center;">'+data[i].nama_dosen+'</td>'+
          '<td style="text-align: center;">'+data[i].nik_nidn+'</td>'+
          '<td style="text-align: center;">'+data[i].perusahaan+'</td>'+
          '<td style="text-align: center;">'+data[i].pendidikan_tertinggi+'</td>'+
          '<td style="text-align: center;">'+data[i].bidang_keahlian+'</td>'+
          '<td style="text-align: center;">'+data[i].sertifikat_profesi+'</td>'+
          '<td style="text-align: center;">'+data[i].matakuliah_diampu+'</td>'+
          '<td style="text-align: center;">'+data[i].sks+'</td>'+
          '<td style="text-align: center;">'+
              '<a href="javascript:void(0);" class="btn btn-info btn-circle btn-sm item_edit" data-toggle="tooltip" title="Edit" data-seq_id="'+data[i].seq_id+'" data-nama_dosen="'+data[i].nama_dosen+'" data-nik_nidn="'+data[i].nik_nidn+'" data-perusahaan="'+data[i].perusahaan+'" data-pendidikan_tertinggi="'+data[i].pendidikan_tertinggi+'" data-bidang_keahlian="'+data[i].bidang_keahlian+'" data-sertifikat_profesi="'+data[i].sertifikat_profesi+'" data-matakuliah_diampu="'+data[i].matakuliah_diampu+'" data-sks="'+data[i].sks+'"><i class="fas fa-search"></i></a>'+
              '<a href="javascript:void(0);" class="btn btn-danger btn-circle btn-sm item_delete" data-toggle="tooltip" data-placement="top" title="Delete" data-seq_id="'+data[i].seq_id+'"><i class="fas fa-trash"></i></a>'+
          '</td>'+
          '</tr>';
        }
        $('#tampil_data').html(html);
      }
    });
  }

  //fill data record
  $('#tampil_data').on('click','.item_edit',function(){
    var seq_id = $(this).data('seq_id');
    var nama_dosen = $(this).data('nama_dosen');
    var nik_nidn = $(this).data('nik_nidn');
    var perusahaan = $(this).data('perusahaan');
    var pendidikan_tertinggi = $(this).data('pendidikan_tertinggi');
    var bidang_keahlian = $(this).data('bidang_keahlian');
    var sertifikat_profesi = $(this).data('sertifikat_profesi');
    var matakuliah_diampu = $(this).data('matakuliah_diampu');
    var sks = $(this).data('sks');

    $('#Modal_Edit').modal('show');
    $('[name="seq_id"]').val(seq_id);
    $('[name="nidk_edit"]').val(nik_nidn);
    $('[name="nama_edit"]').val(nama_dosen);
    $('[name="perusahaan_edit"]').val(perusahaan);
    $('[name="pendidikan_tertinggi_edit"]').val(pendidikan_tertinggi);
    $('[name="bidang_keahlian_edit"]').val(bidang_keahlian);
    $('[name="sertifikat_profesi_edit"]').val(sertifikat_profesi);
    $('[name="matakuliah_diampu_edit"]').val(matakuliah_diampu);
    $('[name="bobot_edit"]').val(sks);
    $('[name="nik_nidn_edit"]').focus();
  });

  //Save Data
  $('#btn_save').on('click',function(){
    var nik_nidn = $('#nidk').val();
    var nama = $('#nama').val();
    var perusahaan = $('#perusahaan').val();
    var pendidikan_tertinggi = $('#pendidikan_tertinggi').val();
    var bidang_keahlian = $('#bidang_keahlian').val();
    var sertifikat_profesi  = $('#sertifikat_profesi').val();
    var matakuliah_diampu = $('#matakuliah_diampu').val();
    var sks = $('#sks').val();

    $.ajax({
      type : "POST",
      url  : "<?php echo site_url('dosen/dosen_praktisi_add')?>",
      dataType : "JSON",
      data : {nik_nidn:nik_nidn, nama:nama, perusahaan:perusahaan, pendidikan_tertinggi:pendidikan_tertinggi, bidang_keahlian:bidang_keahlian, sertifikat_profesi:sertifikat_profesi, matakuliah_diampu:matakuliah_diampu, sks:sks},
      success: function(data){
        $('[name="nik_nidn"]').val("");
        $('[name="nama"]').val("");
        $('[name="perusahaan"]').val("");
        $('[name="pendidikan_tertinggi"]').val("");
        $('[name="bidang_keahlian"]').val("");
        $('[name="sertifikat_profesi"]').val("");
        $('[name="matakuliah_diampu"]').val("");
        $('[name="sks"]').val("");
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

  //update record
  $('#btn_update').on('click',function(){
    var seq_id = $('#seq_id').val();
    var nik_nidn = $('#nidk_edit').val();
    var nama_dosen = $('#nama_edit').val();
    var perusahaan = $('#perusahaan_edit').val();
    var pendidikan_tertinggi = $('#pendidikan_tertinggi_edit').val();
    var bidang_keahlian = $('#bidang_keahlian_edit').val();
    var sertifikat_profesi  = $('#sertifikat_profesi_edit').val();
    var matakuliah_diampu = $('#matakuliah_diampu_edit').val();
    var sks = $('#bobot_edit').val();

    $.ajax({
      type : "POST",
      url  : "<?php echo site_url('dosen/dosen_praktisi_edit')?>",
      dataType : "JSON",
      data : {seq_id:seq_id, nik_nidn:nik_nidn, nama_dosen:nama_dosen, perusahaan:perusahaan, pendidikan_tertinggi:pendidikan_tertinggi, bidang_keahlian:bidang_keahlian, sertifikat_profesi:sertifikat_profesi, matakuliah_diampu:matakuliah_diampu, sks:sks},
      success: function(data){
        $('[name="nidk_edit"]').val("");
        $('[name="nama_edit"]').val("");
        $('[name="perusahaan_edit"]').val("");
        $('[name="pendidikan_tertinggi_edit"]').val("");
        $('[name="bidang_keahlian_edit"]').val("");
        $('[name="sertifikat_profesi_edit"]').val("");
        $('[name="matakuliah_diampu_edit"]').val("");
        $('[name="bobot_edit"]').val("");
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
          url  : "<?php echo site_url('dosen/dosen_praktisi_delete')?>",
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
