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
      <a href="<?php echo base_url('export/export_excel/'.encode_url('2b'));?>" class="btn btn-success btn-icon-split btn-sm">
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
            <input type="text" class="form-control" id="nama" name="nama" required>
            <div id="id_check_result" class="help-block with-errors"></div>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="pendidikan_magister">Magister/Magister Terapan/Spesialis</label>
            <input type="text" class="form-control" id="pendidikan_magister" name="pendidikan_magister" required>
            <div id="id_check_result" class="help-block with-errors"></div>
          </div>
          <div class="form-group col-md-6">
            <label for="pendidikan_doktor">Doktor/Doktor Terapan/Spesialis</label>
            <input type="text" class="form-control" id="pendidikan_doktor" name="pendidikan_doktor" required>
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
          <div class="form-group col-md-4">
          <label for="kesesuaian_kompetensi_inti_ps">Kesesuaian dengan Kompetensi Inti PS</label>
           <select id="kesesuaian_kompetensi_inti_ps" name="kesesuaian_kompetensi_inti_ps" class="custom-select" data-placeholder="Silahkan pilih..." required>
                <option value=""></option>
                <option value="YA">YA</option>
                <option value="TIDAK">TIDAK</option>
            </select>
          </div>
          <div class="form-group col-md-4">
          <label for="jabatan_akademik">Jabatan Akademik</label>
           <select id="jabatan_akademik" name="jabatan_akademik" class="custom-select" data-placeholder="Silahkan pilih..." required>
                <option value=""></option>
                <option value="TENAGA PENGAJAR">TENAGA PENGAJAR</option>
                <option value="LEKTOR">LEKTOR</option>
                <option value="ASISTEN AHLI">ASISTEN AHLI</option>
                <option value="LEKTOR KEPALA">LEKTOR KEPALA</option>
                <option value="GURU BESAR">GURU BESAR</option>
            </select>
          </div>
          <div class="form-group col-md-4">
          <label for="sertifikasi">Sertifikasi</label>
           <select id="sertifikasi" name="sertifikasi" class="custom-select" data-placeholder="Silahkan pilih..." required>
                <option value=""></option>
                <option value="YA">YA</option>
                <option value="TIDAK">TIDAK</option>
            </select>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="sertifikasi_profesional">Sertifikat Pendidik Profesional</label>
            <input type="text" class="form-control" id="sertifikasi_profesional" name="sertifikasi_profesional" required>
            <div id="id_check_result" class="help-block with-errors"></div>
          </div>
          <div class="form-group col-md-6">
            <label for="sertifikasi_kompetensi">Sertifikat Kompetensi/Profesi/Industri</label>
            <input type="text" class="form-control" id="sertifikasi_kompetensi" name="sertifikasi_kompetensi" required>
            <div id="id_check_result" class="help-block with-errors"></div>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="matakuliah_diampu">Mata Kuliah yang Diampu pada PS yang Diakreditasi</label>
            <input type="text" class="form-control" id="matakuliah_diampu" name="matakuliah_diampu" required>
            <div id="id_check_result" class="help-block with-errors"></div>
          </div>
          <div class="form-group col-md-6">
          <label for="kesesuaian_bidang_keahlian">Kesesuaian Bidang Keahlian dengan Mata Kuliah yang Diampu</label>
           <select id="kesesuaian_bidang_keahlian" name="kesesuaian_bidang_keahlian" class="custom-select" data-placeholder="Silahkan pilih..." required>
                <option value=""></option>
                <option value="YA">YA</option>
                <option value="TIDAK">TIDAK</option>
            </select>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-12">
            <label for="matakuliah_diampu_ps_lain">Mata Kuliah yang Diampu pada PS Lain</label>
            <input type="text" class="form-control" id="matakuliah_diampu_ps_lain" name="matakuliah_diampu_ps_lain" required>
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
        <div class="form-row">
          <input type="text" hidden="" class="form-control" id="seq_id" name="seq_id">
          <div class="form-group col-md-6">
            <label for="prodi_edit">Program Studi</label>
            <input type="text" class="form-control" id="prodi_edit" name="prodi_edit" readonly="">
            <div id="id_check_result" class="help-block with-errors"></div>
          </div>
        </div>
        <h6>Jumlah Mahasiswa Aktif</h6>
        <div class="form-row">
          <div class="form-group col-md-4">
            <label for="ts2_edit">TS-2</label>
            <input type="text" class="form-control" id="ts2_edit" name="ts2_edit" readonly="">
            <div id="id_check_result" class="help-block with-errors"></div>
          </div>
          <div class="form-group col-md-4">
            <label for="ts1_edit">TS-1</label>
            <input type="text" class="form-control" id="ts1_edit" name="ts1_edit" readonly="">
            <div id="id_check_result" class="help-block with-errors"></div>
          </div>
          <div class="form-group col-md-4">
            <label for="ts_edit">TS</label>
            <input type="text" class="form-control" id="ts_edit" name="ts_edit" readonly="">
            <div id="id_check_result" class="help-block with-errors"></div>
          </div>
        </div>
        <h6>Jumlah Mahasiswa Asing Penuh Waktu (<em>Full-Time</em>)</h6>
        <div class="form-row">
          <div class="form-group col-md-4">
            <label for="asing_fulltime_ts2_edit">TS-2</label>
            <input type="number" class="form-control" id="asing_fulltime_ts2_edit" name="asing_fulltime_ts2_edit" min="1" max="9999">
            <div id="id_check_result" class="help-block with-errors"></div>
          </div>
          <div class="form-group col-md-4">
            <label for="asing_fulltime_ts1_edit">TS-1</label>
            <input type="number" class="form-control" id="asing_fulltime_ts1_edit" name="asing_fulltime_ts1_edit" min="1" max="9999">
            <div id="id_check_result" class="help-block with-errors"></div>
          </div>
          <div class="form-group col-md-4">
            <label for="asing_fulltime_ts_edit">TS</label>
            <input type="number" class="form-control" id="asing_fulltime_ts_edit" name="asing_fulltime_ts_edit" min="1" max="9999">
            <div id="id_check_result" class="help-block with-errors"></div>
          </div>
        </div>
        <h6>Jumlah Mahasiswa Asing Paruh Waktu (<em>Part-time</em>)</h6>
        <div class="form-row">
          <div class="form-group col-md-4">
            <label for="asing_partime_ts2_edit">TS-2</label>
            <input type="number" class="form-control" id="asing_partime_ts2_edit" name="asing_partime_ts2_edit" min="1" max="9999">
            <div id="id_check_result" class="help-block with-errors"></div>
          </div>
          <div class="form-group col-md-4">
            <label for="asing_partime_ts1_edit">TS-1</label>
            <input type="number" class="form-control" id="asing_partime_ts1_edit" name="asing_partime_ts1_edit" min="1" max="9999">
            <div id="id_check_result" class="help-block with-errors"></div>
          </div>
          <div class="form-group col-md-4">
            <label for="asing_partime_ts_edit">TS</label>
            <input type="number" class="form-control" id="asing_partime_ts_edit" name="asing_partime_ts_edit" min="1" max="9999">
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
          '<td style="text-align: center;">'+data[i].nama_dosen+'</td>'+
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
              '<a href="javascript:void(0);" class="btn btn-info btn-circle btn-sm item_edit" data-toggle="tooltip" title="Edit" data-seq_id="'+data[i].seq_id+'" data-prodi="'+data[i].prodi+'" data-ts_2="'+data[i].ts_2+'" data-ts_1="'+data[i].ts_1+'" data-ts="'+data[i].ts+'" data-asing_fulltime_ts2="'+data[i].asing_fulltime_ts2+'" data-asing_fulltime_ts1="'+data[i].asing_fulltime_ts1+'" data-asing_fulltime_ts="'+data[i].asing_fulltime_ts+'" data-asing_partime_ts2="'+data[i].asing_partime_ts2+'" data-asing_partime_ts1="'+data[i].asing_partime_ts1+'" data-asing_partime_ts="'+data[i].asing_partime_ts+'"><i class="fas fa-search"></i></a>'+
          '</td>'+
          '</tr>';
        }
        $('#tampil_data').html(html);
      }
    });
  }

  //fill data record
  $('#tampil_data').on('click','.item_edit',function(){
    var seq_id              = $(this).data('seq_id');
    var prodi               = $(this).data('prodi');
    var ts2                 = $(this).data('ts_2');
    var ts1                 = $(this).data('ts_1');
    var ts                  = $(this).data('ts');
    var asing_fulltime_ts2  = $(this).data('asing_fulltime_ts2');
    var asing_fulltime_ts1  = $(this).data('asing_fulltime_ts1');
    var asing_fulltime_ts   = $(this).data('asing_fulltime_ts');
    var asing_partime_ts2   = $(this).data('asing_partime_ts2');
    var asing_partime_ts1   = $(this).data('asing_partime_ts1');
    var asing_partime_ts    = $(this).data('asing_partime_ts');

    $('#Modal_Edit').modal('show');
    $('[name="seq_id"]').val(seq_id);
    $('[name="prodi_edit"]').val(prodi);
    $('[name="ts2_edit"]').val(ts2);
    $('[name="ts1_edit"]').val(ts1);
    $('[name="ts_edit"]').val(ts);
    $('[name="asing_fulltime_ts2_edit"]').val(asing_fulltime_ts2);
    $('[name="asing_fulltime_ts1_edit"]').val(asing_fulltime_ts1);
    $('[name="asing_fulltime_ts_edit"]').val(asing_fulltime_ts);
    $('[name="asing_partime_ts2_edit"]').val(asing_partime_ts2);
    $('[name="asing_partime_ts1_edit"]').val(asing_partime_ts1);
    $('[name="asing_partime_ts_edit"]').val(asing_partime_ts);
    $('[name="asing_fulltime_ts2_edit"]').focus();
  });

  //update record
  $('#btn_update').on('click',function(){
    var seq_id          = $('#seq_id').val();
    var asing_fulltime_ts2  = $('#asing_fulltime_ts2_edit').val();
    var asing_fulltime_ts1  = $('#asing_fulltime_ts1_edit').val();
    var asing_fulltime_ts   = $('#asing_fulltime_ts_edit').val();
    var asing_partime_ts2   = $('#asing_partime_ts2_edit').val();
    var asing_partime_ts1   = $('#asing_partime_ts1_edit').val();
    var asing_partime_ts    = $('#asing_partime_ts_edit').val();

    $.ajax({
      type : "POST",
      url  : "<?php echo site_url('mahasiswa/mahasiswa_asing_edit')?>",
      dataType : "JSON",
      data : {seq_id:seq_id, asing_fulltime_ts2:asing_fulltime_ts2, asing_fulltime_ts1:asing_fulltime_ts1, asing_fulltime_ts:asing_fulltime_ts, asing_partime_ts2:asing_partime_ts2, asing_partime_ts1:asing_partime_ts1, asing_partime_ts:asing_partime_ts},
      success: function(data){
        $('[name="asing_fulltime_ts2_edit"]').val("");
        $('[name="asing_fulltime_ts1_edit"]').val("");
        $('[name="asing_fulltime_ts_edit"]').val("");
        $('[name="asing_partime_ts2_edit"]').val("");
        $('[name="asing_partime_ts1_edit"]').val("");
        $('[name="asing_partime_ts_edit"]').val("");
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

});
</script>
