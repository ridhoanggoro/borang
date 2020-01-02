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
      <a href="<?php echo base_url('export/export_excel/'.encode_url('5a'));?>" class="btn btn-success btn-icon-split btn-sm">
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
          <th rowspan="2" style="text-align: center; vertical-align: middle;">Semester</th>
          <th rowspan="2" style="text-align: center; vertical-align: middle;">Kode Mata Kuliah</th>
          <th rowspan="2" style="text-align: center; vertical-align: middle;">Nama Mata Kuliah</th>
          <th rowspan="2" style="text-align: center; vertical-align: middle;">Mata Kuliah Kom-petensi</th>
          <th colspan="3" style="text-align: center; vertical-align: middle;">Bobot Kredit (sks)</th>
          <th rowspan="2" style="text-align: center; vertical-align: middle;">Konversi Kredit ke Jam</th>
          <th colspan="4" style="text-align: center; vertical-align: middle;">Capaian Pembelajaran</th>
          <th rowspan="2" style="text-align: center; vertical-align: middle;">Dokumen Rencana Pembelajaran</th>
          <th rowspan="2" style="text-align: center; vertical-align: middle;">Unit Penyelenggara</th>
          <th rowspan="2" style="text-align: center; vertical-align: middle;">Menu</th>
        </tr>
        <tr>
            <th style="text-align: center; vertical-align: middle;">Kuliah / Responsi / Tutorial</th>
            <th style="text-align: center; vertical-align: middle;">Seminar</th>
            <th style="text-align: center; vertical-align: middle;">Praktikum / Praktik / Praktik Lapangan</th>
            <th style="text-align: center; vertical-align: middle;">Sikap</th>
            <th style="text-align: center; vertical-align: middle;">Pengetahuan</th>
            <th style="text-align: center; vertical-align: middle;">Keterampilan Umum</th>
            <th style="text-align: center; vertical-align: middle;">Keterampilan Khusus</th>
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
          <div class="form-group col-md-3">
            <label for="semester">Semester</label>
            <input type="text" class="form-control" id="semester" name="semester" required>
            <div id="id_check_result" class="help-block with-errors"></div>
          </div>
          <div class="form-group col-md-3">
            <label for="kode_matkul">Kode Mata Kuliah</label>
            <input type="text" class="form-control" id="kode_matkul" name="kode_matkul" required>
            <div id="id_check_result" class="help-block with-errors"></div>
          </div>
          <div class="form-group col-md-6">
            <label for="nama_matkul">Nama Mata Kuliah</label>
            <input type="text" class="form-control" id="nama_matkul" name="nama_matkul" required>
            <div id="id_check_result" class="help-block with-errors"></div>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-3">
            <label for="dpts">Mata Kuliah Kompetensi</label>
            <select id="dpts" name="dpts" class="custom-select" data-placeholder="Silahkan pilih..." required>
                 <option value=""></option>
                 <option value="V">YA</option>
                 <option value="X">TIDAK</option>
             </select>
            <div id="id_check_result" class="help-block with-errors"></div>
          </div>
          <div class="form-group col-md-3">
            <label for="kuliah">Kuliah/Responsi/Tutorial</label>
            <input type="number" class="form-control" id="kuliah" name="kuliah" required>
            <div id="id_check_result" class="help-block with-errors"></div>
          </div>
          <div class="form-group col-md-3">
            <label for="seminar">Seminar</label>
            <input type="number" class="form-control" id="seminar" name="seminar" required>
            <div id="id_check_result" class="help-block with-errors"></div>
          </div>
          <div class="form-group col-md-3">
            <label for="praktikum">Praktikum</label>
            <input type="number" class="form-control" id="praktikum" name="praktikum" required>
            <div id="id_check_result" class="help-block with-errors"></div>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-3">
            <label for="konversi_jam">Konversi Kredit ke Jam</label>
            <input type="number" class="form-control" id="konversi_jam" name="konversi_jam" required>
            <div id="id_check_result" class="help-block with-errors"></div>
          </div>
        </div>
        <div class="form-row">
          <div class="custom-control custom-checkbox mb-3">
            <input type="checkbox" class="custom-control-input" id="customCheck1">
            <label class="custom-control-label" for="customCheck1">Check this custom checkbox</label>
          </div>
          <div class="custom-control custom-checkbox mb-3">
            <input type="checkbox" class="custom-control-input" id="customCheck2">
            <label class="custom-control-label" for="customCheck2">Check this custom checkbox</label>
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
        <div class="form-row">
          <input type="text" hidden="" class="form-control" id="seq_id" name="seq_id">
          <div class="form-group col-md-6">
            <label for="nidn_edit">NAMA DOSEN</label>
            <select id="nidn_edit" name="nidn_edit" class="custom-select" data-placeholder="Silahkan pilih..." required>
              <option value=""></option>
            </select>
            <div id="id_check_result" class="help-block with-errors"></div>
          </div>
          <div class="d-none">
            <label for="nama_edit">Nama</label>
            <input type="text" class="form-control" id="nama_edit" name="nama_edit" required>
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
            <input type="text" class="form-control" id="ps_yang_diakreditasi_edit" name="ps_yang_diakreditasi_edit" required>
            <div id="id_check_result" class="help-block with-errors"></div>
          </div>
          <div class="form-group col-md-4">
            <label for="ps_lain_di_dalam_pt_edit">Pendidikan PS Lain di dalam PT</label>
            <input type="text" class="form-control" id="ps_lain_di_dalam_pt_edit" name="ps_lain_di_dalam_pt_edit" required>
            <div id="id_check_result" class="help-block with-errors"></div>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-4">
          <label for="ps_lain_di_luar_pt_edit">Pendidikan PS Lain di luar PT</label>
          <input type="text" class="form-control" id="ps_lain_di_luar_pt_edit" name="ps_lain_di_luar_pt_edit" required>
          </div>
          <div class="form-group col-md-4">
            <label for="penelitian_edit">Penelitian</label>
            <input type="text" class="form-control" id="penelitian_edit" name="penelitian_edit" required>
            <div id="id_check_result" class="help-block with-errors"></div>
          </div>
          <div class="form-group col-md-4">
            <label for="pkm_edit">PKM</label>
            <input type="text" class="form-control" id="pkm_edit" name="pkm_edit" required>
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
      url   : '<?php echo site_url('kurikulum/cp_rencana_pembelajaran_list')?>',
      async : false,
      dataType : 'json',
      success : function(data){
        var html = '';
        var i;
        for(i=0; i<data.length; i++){
          html += '<tr>'+
          '<td style="text-align: center;">'+data[i].semester+'</td>'+
          '<td style="text-align: center;">'+data[i].kode_matkul+'</td>'+
          '<td style="text-align: center;">'+data[i].nama_matkul+'</td>'+
          '<td style="text-align: center;">'+data[i].matkul_kopetensi+'</td>'+
          '<td style="text-align: center;">'+data[i].kuliah+'</td>'+
          '<td style="text-align: center;">'+data[i].seminar+'</td>'+
          '<td style="text-align: center;">'+data[i].praktikum+'</td>'+
          '<td style="text-align: center;">'+data[i].konversi_jam+'</td>'+
          '<td style="text-align: center;">'+data[i].sikap+'</td>'+
          '<td style="text-align: center;">'+data[i].pengetahuan+'</td>'+
          '<td style="text-align: center;">'+data[i].keterampilan_umum+'</td>'+
          '<td style="text-align: center;">'+data[i].keterampilan_khusus+'</td>'+
          '<td style="text-align: center;">'+data[i].dokumen_pembelajaran+'</td>'+
          '<td style="text-align: center;">'+data[i].unit_penyelenggara+'</td>'+
          '<td style="text-align: center;">'+
              '<a href="javascript:void(0);" class="btn btn-info btn-circle btn-sm item_edit" data-toggle="tooltip" title="Edit" data-seq_id="'+data[i].seq_id+'" data-nik_nidn="'+data[i].nik_nidn+'" data-dtps="'+data[i].dtps+'" data-ps_yang_diakreditasi="'+data[i].ps_yang_diakreditasi+'" data-ps_lain_di_dalam_pt="'+data[i].ps_lain_di_dalam_pt+'" data-ps_lain_di_luar_pt="'+data[i].ps_lain_di_luar_pt+'" data-penelitian="'+data[i].penelitian+'" data-pkm="'+data[i].pkm+'" data-tugas_tambahan="'+data[i].tugas_tambahan+'"><i class="fas fa-search"></i></a>'+
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
    var seq_id               = $(this).data('seq_id');
    var nik_nidn             = $(this).data('nik_nidn');
    var dtps                 = $(this).data('dtps');
    var ps_yang_diakreditasi = $(this).data('ps_yang_diakreditasi');
    var ps_lain_di_dalam_pt  = $(this).data('ps_lain_di_dalam_pt');
    var ps_lain_di_luar_pt   = $(this).data('ps_lain_di_luar_pt');
    var penelitian           = $(this).data('penelitian');
    var pkm                  = $(this).data('pkm');
    var tugas_tambahan       = $(this).data('tugas_tambahan');

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
    $('[name="nik_nidn_edit"]').focus();
  });

  //Save Data
  $('#btn_save').on('click',function(){
    var nik_nidn = $('#nidn').val();
    var dtps = $('#dpts').val();
    var ps_yang_diakreditasi = $('#ps_yang_diakreditasi').val();
    var ps_lain_di_dalam_pt = $('#ps_lain_di_dalam_pt').val();
    var ps_lain_di_luar_pt = $('#ps_lain_di_luar_pt').val();
    var penelitian  = $('#penelitian').val();
    var pkm = $('#pkm').val();
    var tugas_tambahan = $('#tugas_tambahan').val();

    $.ajax({
      type : "POST",
      url  : "<?php echo site_url('dosen/ewmp_add')?>",
      dataType : "JSON",
      data : {nik_nidn:nik_nidn, dtps:dtps, ps_yang_diakreditasi:ps_yang_diakreditasi, ps_lain_di_dalam_pt:ps_lain_di_dalam_pt, ps_lain_di_luar_pt:ps_lain_di_luar_pt, penelitian:penelitian, pkm:pkm, tugas_tambahan:tugas_tambahan},
      success: function(data){
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

  //update record
  $('#btn_update').on('click',function(){
    var seq_id = $('#seq_id').val();
    var nik_nidn = $('#nidn_edit').val();
    var dtps = $('#dtps_edit').val();
    var ps_yang_diakreditasi = $('#ps_yang_diakreditasi_edit').val();
    var ps_lain_di_dalam_pt = $('#ps_lain_di_dalam_pt_edit').val();
    var ps_lain_di_luar_pt = $('#ps_lain_di_luar_pt_edit').val();
    var penelitian  = $('#penelitian_edit').val();
    var pkm = $('#pkm_edit').val();
    var tugas_tambahan = $('#tugas_tambahan_edit').val();

    $.ajax({
      type : "POST",
      url  : "<?php echo site_url('dosen/ewmp_edit')?>",
      dataType : "JSON",
      data : {seq_id:seq_id, nik_nidn:nik_nidn, dtps:dtps, ps_yang_diakreditasi:ps_yang_diakreditasi, ps_lain_di_dalam_pt:ps_lain_di_dalam_pt, ps_lain_di_luar_pt:ps_lain_di_luar_pt, penelitian:penelitian, pkm:pkm, tugas_tambahan:tugas_tambahan},
      success: function(data){
        $('[name="nidn_edit"]').val("");
        $('[name="dpts_edit"]').val("");
        $('[name="ps_yang_diakreditasi_edit"]').val("");
        $('[name="ps_lain_di_dalam_pt_edit"]').val("");
        $('[name="ps_lain_di_luar_pt_edit"]').val("");
        $('[name="penelitian_edit"]').val("");
        $('[name="pkm_edit"]').val("");
        $('[name="tugas_tambahan_edit"]').val("");
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
