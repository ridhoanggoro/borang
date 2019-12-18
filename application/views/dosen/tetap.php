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
      <a href="<?php echo base_url('export/export_excel/'.encode_url('3a1'));?>" class="btn btn-success btn-icon-split btn-sm">
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
            <th>NIDN</th>
            <th>Magister/Magister Terapan/Spesialis</th>
            <th>Doktor/Doktor Terapan/Spesialis</th>
            <th>Bidang Keahlian</th>
            <th>Kesesuaian dengan Kompetensi Inti PS</th>
            <th>Jabatan Akademik</th>
            <th>Sertifikat Pendidik Profesional</th>
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
          <div class="form-group col-md-3">
            <label for="nidn">NIDN/NIDK</label>
            <input type="text" class="form-control" id="nidn" name="nidn" required>
            <div id="id_check_result" class="help-block with-errors"></div>
          </div>
          <div class="form-group col-md-9">
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
        <input type="text" hidden="" class="form-control" id="seq_id" name="seq_id">
        <div class="form-row">
          <div class="form-group col-md-3">
            <label for="nidn_edit">NIDN/NIDK</label>
            <input type="text" class="form-control" id="nidn_edit" name="nidn_edit" required>
            <div id="id_check_result" class="help-block with-errors"></div>
          </div>
          <div class="form-group col-md-9">
            <label for="nama_edit">Nama</label>
            <input type="text" class="form-control" id="nama_edit" name="nama_edit" required>
            <div id="id_check_result" class="help-block with-errors"></div>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="pendidikan_magister_edit">Magister/Magister Terapan/Spesialis</label>
            <input type="text" class="form-control" id="pendidikan_magister_edit" name="pendidikan_magister_edit" required>
            <div id="id_check_result" class="help-block with-errors"></div>
          </div>
          <div class="form-group col-md-6">
            <label for="pendidikan_doktor_edit">Doktor/Doktor Terapan/Spesialis</label>
            <input type="text" class="form-control" id="pendidikan_doktor_edit" name="pendidikan_doktor_edit" required>
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
          <div class="form-group col-md-4">
          <label for="kesesuaian_kompetensi_inti_ps_edit">Kesesuaian dengan Kompetensi Inti PS</label>
           <select id="kesesuaian_kompetensi_inti_ps_edit" name="kesesuaian_kompetensi_inti_ps_edit" class="custom-select" data-placeholder="Silahkan pilih..." required>
                <option value=""></option>
                <option value="YA">YA</option>
                <option value="TIDAK">TIDAK</option>
            </select>
          </div>
          <div class="form-group col-md-4">
          <label for="jabatan_akademik_edit">Jabatan Akademik</label>
           <select id="jabatan_akademik_edit" name="jabatan_akademik_edit" class="custom-select" data-placeholder="Silahkan pilih..." required>
                <option value=""></option>
                <option value="TENAGA PENGAJAR">TENAGA PENGAJAR</option>
                <option value="LEKTOR">LEKTOR</option>
                <option value="ASISTEN AHLI">ASISTEN AHLI</option>
                <option value="LEKTOR KEPALA">LEKTOR KEPALA</option>
                <option value="GURU BESAR">GURU BESAR</option>
            </select>
          </div>
          <div class="form-group col-md-4">
          <label for="sertifikasi_edit">Sertifikasi</label>
           <select id="sertifikasi_edit" name="sertifikasi_edit" class="custom-select" data-placeholder="Silahkan pilih..." required>
                <option value=""></option>
                <option value="YA">YA</option>
                <option value="TIDAK">TIDAK</option>
            </select>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="sertifikasi_profesional_edit">Sertifikat Pendidik Profesional</label>
            <input type="text" class="form-control" id="sertifikasi_profesional_edit" name="sertifikasi_profesional_edit" required>
            <div id="id_check_result" class="help-block with-errors"></div>
          </div>
          <div class="form-group col-md-6">
            <label for="sertifikasi_kompetensi_edit">Sertifikat Kompetensi/Profesi/Industri</label>
            <input type="text" class="form-control" id="sertifikasi_kompetensi_edit" name="sertifikasi_kompetensi_edit" required>
            <div id="id_check_result" class="help-block with-errors"></div>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="matakuliah_diampu_edit">Mata Kuliah yang Diampu pada PS yang Diakreditasi</label>
            <input type="text" class="form-control" id="matakuliah_diampu_edit" name="matakuliah_diampu_edit" required>
            <div id="id_check_result" class="help-block with-errors"></div>
          </div>
          <div class="form-group col-md-6">
          <label for="kesesuaian_bidang_keahlian_edit">Kesesuaian Bidang Keahlian dengan Mata Kuliah yang Diampu</label>
           <select id="kesesuaian_bidang_keahlian_edit" name="kesesuaian_bidang_keahlian_edit" class="custom-select" data-placeholder="Silahkan pilih..." required>
                <option value=""></option>
                <option value="YA">YA</option>
                <option value="TIDAK">TIDAK</option>
            </select>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-12">
            <label for="matakuliah_diampu_ps_lain_edit">Mata Kuliah yang Diampu pada PS Lain</label>
            <input type="text" class="form-control" id="matakuliah_diampu_ps_lain_edit" name="matakuliah_diampu_ps_lain_edit" required>
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
      url   : '<?php echo site_url('dosen/dosen_tetap_data_list')?>',
      async : false,
      dataType : 'json',
      success : function(data){
        var html = '';
        var i;
        for(i=0; i<data.length; i++){
          html += '<tr>'+
          '<td>'+data[i].nama+'</td>'+
          '<td>'+data[i].nidn+'</td>'+
          '<td>'+data[i].pendidikan_magister+'</td>'+
          '<td>'+data[i].pendidikan_doktor+'</td>'+
          '<td>'+data[i].bidang_keahlian+'</td>'+
          '<td>'+data[i].kesesuaian_kompetensi_inti_ps+'</td>'+
          '<td>'+data[i].jabatan_akademik+'</td>'+
          '<td>'+data[i].sertifikasi_profesional+'</td>'+
          '<td style="text-align:right;">'+
              '<a href="javascript:void(0);" class="btn btn-info btn-circle btn-sm item_edit" data-toggle="tooltip" data-placement="top" title="Edit" data-seq_id="'+data[i].seq_id+'" data-nidn="'+data[i].nidn+'" data-nama="'+data[i].nama+'" data-pendidikan_magister="'+data[i].pendidikan_magister+'" data-pendidikan_doktor="'+data[i].pendidikan_doktor+'" data-bidang_keahlian="'+data[i].bidang_keahlian+'"data-kesesuaian_kompetensi_inti_ps="'+data[i].kesesuaian_kompetensi_inti_ps+'" data-jabatan_akademik="'+data[i].jabatan_akademik+'" data-sertifikasi_profesional="'+data[i].sertifikasi_profesional+'" data-sertifikasi_kompetensi="'+data[i].sertifikasi_kompetensi+'" data-matakuliah_diampu="'+data[i].matakuliah_diampu+'" data-kesesuaian_bidang_keahlian="'+data[i].kesesuaian_bidang_keahlian+'" data-matakuliah_diampu_ps_lain="'+data[i].matakuliah_diampu_ps_lain+'" data-sertifikasi="'+data[i].sertifikasi+'"><i class="fas fa-search"></i></a>'+' '+
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
    var nidn = $('#nidn').val();
    var nama = $('#nama').val();
    var pendidikan_magister = $('#pendidikan_magister').val();
    var pendidikan_doktor = $('#pendidikan_doktor').val();
    var bidang_keahlian = $('#bidang_keahlian').val();
    var kesesuaian_kompetensi_inti_ps  = $('#kesesuaian_kompetensi_inti_ps').val();
    var jabatan_akademik = $('#jabatan_akademik').val();
    var sertifikasi_profesional = $('#sertifikasi_profesional').val();
    var sertifikasi_kompetensi = $('#sertifikasi_kompetensi').val();
    var matakuliah_diampu = $('#matakuliah_diampu').val();
    var kesesuaian_bidang_keahlian = $('#kesesuaian_bidang_keahlian').val();
    var matakuliah_diampu_ps_lain = $('#matakuliah_diampu_ps_lain').val();
    var sertifikasi = $('#sertifikasi').val();

    $.ajax({
      type : "POST",
      url  : "<?php echo site_url('dosen/dosen_tetap_add')?>",
      dataType : "JSON",
      data : {nidn:nidn, nama:nama, pendidikan_magister:pendidikan_magister, pendidikan_doktor:pendidikan_doktor, bidang_keahlian:bidang_keahlian, kesesuaian_kompetensi_inti_ps:kesesuaian_kompetensi_inti_ps, jabatan_akademik:jabatan_akademik, sertifikasi_profesional:sertifikasi_profesional, sertifikasi_kompetensi: sertifikasi_kompetensi, matakuliah_diampu:matakuliah_diampu, kesesuaian_bidang_keahlian:kesesuaian_bidang_keahlian, matakuliah_diampu_ps_lain:matakuliah_diampu_ps_lain, sertifikasi:sertifikasi},
      success: function(data){
        $('[name="nidn"]').val("");
        $('[name="nama"]').val("");
        $('[name="pendidikan_magister"]').val("");
        $('[name="pendidikan_doktor"]').val("");
        $('[name="bidang_keahlian"]').val("");
        $('[name="kesesuaian_kompetensi_inti_ps"]').val("");
        $('[name="jabatan_akademik"]').val("");
        $('[name="sertifikasi_profesional"]').val("");
        $('[name="sertifikasi_kompetensi"]').val("");
        $('[name="matakuliah_diampu"]').val("");
        $('[name="kesesuaian_bidang_keahlian"]').val("");
        $('[name="matakuliah_diampu_ps_lain"]').val("");
        $('[name="sertifikasi"]').val("");
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
    var nidn = $(this).data('nidn');
    var nama = $(this).data('nama');
    var pendidikan_magister = $(this).data('pendidikan_magister');
    var pendidikan_doktor = $(this).data('pendidikan_doktor');
    var bidang_keahlian = $(this).data('bidang_keahlian');
    var kesesuaian_kompetensi_inti_ps = $(this).data('kesesuaian_kompetensi_inti_ps');
    var jabatan_akademik = $(this).data('jabatan_akademik');
    var sertifikasi_profesional = $(this).data('sertifikasi_profesional');
    var sertifikasi_kompetensi = $(this).data('sertifikasi_kompetensi');
    var matakuliah_diampu = $(this).data('matakuliah_diampu');
    var kesesuaian_bidang_keahlian = $(this).data('kesesuaian_bidang_keahlian');
    var matakuliah_diampu_ps_lain = $(this).data('matakuliah_diampu_ps_lain');
    var sertifikasi = $(this).data('sertifikasi');

    $('#Modal_Edit').modal('show');
    $('[name="seq_id"]').val(seq_id);
    $('[name="nidn_edit"]').val(nidn);
    $('[name="nama_edit"]').val(nama);
    $('[name="pendidikan_magister_edit"]').val(pendidikan_magister);
    $('[name="pendidikan_doktor_edit"]').val(pendidikan_doktor);
    $('[name="bidang_keahlian_edit"]').val(bidang_keahlian);
    $('[name="kesesuaian_kompetensi_inti_ps_edit"]').val(kesesuaian_kompetensi_inti_ps);
    $('[name="jabatan_akademik_edit"]').val(jabatan_akademik);
    $('[name="sertifikasi_kompetensi_edit"]').val(sertifikasi_kompetensi);
    $('[name="sertifikasi_profesional_edit"]').val(sertifikasi_profesional);
    $('[name="matakuliah_diampu_edit"]').val(matakuliah_diampu);
    $('[name="kesesuaian_bidang_keahlian_edit"]').val(kesesuaian_bidang_keahlian);
    $('[name="matakuliah_diampu_ps_lain_edit"]').val(matakuliah_diampu_ps_lain);
    $('[name="sertifikasi_edit"]').val(sertifikasi);
  });

  //update record
  $('#btn_update').on('click',function(){
    var seq_id          = $('#seq_id').val();
    var lembaga_mitra   = $('#mitra_edit').val();
    var tingkat         = $('#tingkat_edit').val();
    var judul_kegiatan  = $('#judul_kegiatan_edit').val();
    var manfaat_bagi_ps = $('#manfaat_bagi_ps_edit').val();
    var durasi          = $('#waktu_edit').val();
    var tahun_berakhir  = $('#tahun_berakhir_edit').val();
    var bukti           = $('#bukti_edit').val();

    $.ajax({
      type : "POST",
      url  : "<?php echo site_url('tridharma/pendidikan_edit')?>",
      dataType : "JSON",
      data : {seq_id:seq_id, lembaga_mitra:lembaga_mitra, tingkat:tingkat, judul_kegiatan:judul_kegiatan, manfaat_bagi_ps:manfaat_bagi_ps, durasi:durasi, tahun_berakhir:tahun_berakhir, bukti:bukti},
      success: function(data){
        $('[name="mitra_edit"]').val("");
        $('[name="tingkat_edit"]').val("");
        $('[name="judul_kegiatan_edit"]').val("");
        $('[name="manfaat_bagi_ps_edit"]').val("");
        $('[name="waktu_edit"]').val("");
        $('[name="tahun_berakhir_edit"]').val("");
        $('[name="bukti_edit"]').val("");
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
          url  : "<?php echo site_url('tridharma/pendidikan_delete')?>",
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
