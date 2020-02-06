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
            <label for="mitra">Upload Excel File, Klik <a href="<?php echo base_url('assets/upload/5.a.kurikulum.xlsx');?>" data-toggle="tooltip" data-placement="top" title="Download Template">disini</a> untuk unduh file template</label>
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
          <div class="form-group col-md-6">
            <label for="matkul_kopetensi">Mata Kuliah Kompetensi</label>
            <select id="matkul_kopetensi" name="matkul_kopetensi" class="custom-select" data-placeholder="Silahkan pilih..." required>
                 <option value=""></option>
                 <option value="V">YA</option>
                 <option value="X">TIDAK</option>
             </select>
            <div id="id_check_result" class="help-block with-errors"></div>
          </div>
        </div>
        <hr>
          <h5>Bobot Kredit (sks)</h5>
        <hr>
        <div class="form-row">
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
          <div class="form-group col-md-3">
            <label for="konversi_jam">Konversi Kredit ke Jam</label>
            <input type="number" class="form-control" id="konversi_jam" name="konversi_jam" required>
            <div id="id_check_result" class="help-block with-errors"></div>
          </div>
        </div>
        <div class="form-row">
          <div class="card text-center">
            <div class="card-header">Capaian Pembelajaran</div>
            <div class="card-body">
              <div class="form-group">
                <div class="custom-control custom-checkbox custom-control-inline">
                    <input type="checkbox" class="custom-control-input" id="sikap" name="sikap">
                    <label class="custom-control-label" for="sikap">Sikap</label>
                </div>
                <div class="custom-control custom-checkbox custom-control-inline">
                    <input type="checkbox" class="custom-control-input" id="pengetahuan" name="pengetahuan">
                    <label class="custom-control-label" for="pengetahuan">Pengetahuan</label>
                </div>
                <div class="custom-control custom-checkbox custom-control-inline">
                    <input type="checkbox" class="custom-control-input" id="keterampilan_umum" name="keterampilan_umum">
                    <label class="custom-control-label" for="keterampilan_umum">Keterampilan Umum</label>
                </div>
                <div class="custom-control custom-checkbox custom-control-inline">
                    <input type="checkbox" class="custom-control-input" id="keterampilan_khusus" name="keterampilan_khusus">
                    <label class="custom-control-label" for="keterampilan_khusus">Keterampilan Khusus</label>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-12">
            <label for="dokumen_pembelajaran">Dokumen Rencana Pembelajaran</label>
            <input type="text" class="form-control" id="dokumen_pembelajaran" name="dokumen_pembelajaran" required>
            <div id="id_check_result" class="help-block with-errors"></div>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-12">
            <label for="unit_penyelenggara">Unit Penyelenggara</label>
            <input type="text" class="form-control" id="unit_penyelenggara" name="unit_penyelenggara" required>
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
            <label for="semester_edit">Semester</label>
            <input type="text" class="form-control" id="semester_edit" name="semester_edit" required>
            <div id="id_check_result" class="help-block with-errors"></div>
          </div>
          <div class="form-group col-md-3">
            <label for="kode_matkul_edit">Kode Mata Kuliah</label>
            <input type="text" class="form-control" id="kode_matkul_edit" name="kode_matkul_edit" required>
            <div id="id_check_result" class="help-block with-errors"></div>
          </div>
          <div class="form-group col-md-6">
            <label for="nama_matkul_edit">Nama Mata Kuliah</label>
            <input type="text" class="form-control" id="nama_matkul_edit" name="nama_matkul_edit" required>
            <div id="id_check_result" class="help-block with-errors"></div>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="matkul_kopetensi_edit">Mata Kuliah Kompetensi</label>
            <select id="matkul_kopetensi_edit" name="matkul_kopetensi_edit" class="custom-select" data-placeholder="Silahkan pilih..." required>
                 <option value=""></option>
                 <option value="V">YA</option>
                 <option value="X">TIDAK</option>
             </select>
            <div id="id_check_result" class="help-block with-errors"></div>
          </div>
        </div>
        <hr>
          <h5>Bobot Kredit (sks)</h5>
        <hr>
        <div class="form-row">
          <div class="form-group col-md-3">
            <label for="kuliah_edit">Kuliah/Responsi/Tutorial</label>
            <input type="number" class="form-control" id="kuliah_edit" name="kuliah_edit" required>
            <div id="id_check_result" class="help-block with-errors"></div>
          </div>
          <div class="form-group col-md-3">
            <label for="seminar_edit">Seminar</label>
            <input type="number" class="form-control" id="seminar_edit" name="seminar_edit" required>
            <div id="id_check_result" class="help-block with-errors"></div>
          </div>
          <div class="form-group col-md-3">
            <label for="praktikum_edit">Praktikum</label>
            <input type="number" class="form-control" id="praktikum_edit" name="praktikum_edit" required>
            <div id="id_check_result" class="help-block with-errors"></div>
          </div>
          <div class="form-group col-md-3">
            <label for="konversi_jam_edit">Konversi Kredit ke Jam</label>
            <input type="number" class="form-control" id="konversi_jam_edit" name="konversi_jam_edit" required>
            <div id="id_check_result" class="help-block with-errors"></div>
          </div>
        </div>
        <div class="form-row">
          <div class="card text-center">
            <div class="card-header">Capaian Pembelajaran</div>
            <div class="card-body">
              <div class="form-group">
                <div class="custom-control custom-checkbox custom-control-inline">
                    <input type="checkbox" class="custom-control-input" id="sikap_edit" name="sikap_edit">
                    <label class="custom-control-label" for="sikap_edit">Sikap</label>
                </div>
                <div class="custom-control custom-checkbox custom-control-inline">
                    <input type="checkbox" class="custom-control-input" id="pengetahuan_edit" name="pengetahuan_edit">
                    <label class="custom-control-label" for="pengetahuan_edit">Pengetahuan</label>
                </div>
                <div class="custom-control custom-checkbox custom-control-inline">
                    <input type="checkbox" class="custom-control-input" id="keterampilan_umum_edit" name="keterampilan_umum_edit">
                    <label class="custom-control-label" for="keterampilan_umum_edit">Keterampilan Umum</label>
                </div>
                <div class="custom-control custom-checkbox custom-control-inline">
                    <input type="checkbox" class="custom-control-input" id="keterampilan_khusus_edit" name="keterampilan_khusus_edit">
                    <label class="custom-control-label" for="keterampilan_khusus_edit">Keterampilan Khusus</label>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-12">
            <label for="dokumen_pembelajaran_edit">Dokumen Rencana Pembelajaran</label>
            <input type="text" class="form-control" id="dokumen_pembelajaran_edit" name="dokumen_pembelajaran_edit" required>
            <div id="id_check_result" class="help-block with-errors"></div>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-12">
            <label for="unit_penyelenggara_edit">Unit Penyelenggara</label>
            <input type="text" class="form-control" id="unit_penyelenggara_edit" name="unit_penyelenggara_edit" required>
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
  // $('#mydata').dataTable();
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
              '<a href="javascript:void(0);" class="btn btn-info btn-circle btn-sm item_edit" data-toggle="tooltip" title="Edit" data-seq_id="'+data[i].seq_id+'" data-semester="'+data[i].semester+'" data-kode_matkul="'+data[i].kode_matkul+'" data-nama_matkul="'+data[i].nama_matkul+'" data-matkul_kopetensi="'+data[i].matkul_kopetensi+'" data-kuliah="'+data[i].kuliah+'" data-seminar="'+data[i].seminar+'" data-praktikum="'+data[i].praktikum+'" data-konversi_jam="'+data[i].konversi_jam+'" data-sikap="'+data[i].sikap+'" data-pengetahuan="'+data[i].pengetahuan+'" data-keterampilan_umum="'+data[i].keterampilan_umum+'" data-keterampilan_khusus="'+data[i].keterampilan_khusus+'" data-dokumen_pembelajaran="'+data[i].dokumen_pembelajaran+'" data-unit_penyelenggara="'+data[i].unit_penyelenggara+'" data-doc="'+data[i].doc+'"><i class="fas fa-search"></i></a>'+
              '<a href="<?php echo site_url('assets/document/')?>'+data[i].doc+'" class="btn btn-primary btn-circle btn-sm" data-toggle="tooltip" data-placement="top" title="Download Dokumen"><i class="fas fa-download"></i></a>'+
              '<a href="javascript:void(0);" class="btn btn-danger btn-circle btn-sm item_delete" data-toggle="tooltip" data-placement="top" title="Delete" data-seq_id="'+data[i].seq_id+'"><i class="fas fa-trash"></i></a>'+
          '</td>'+
          '</tr>';
        }
        $('#tampil_data').html(html);
      }
    });
    $('#mydata').dataTable();
  }

   // upload data
  $('#upload').submit(function(e){
    e.preventDefault();
      $.ajax({
        url:'<?php echo site_url('upload/excel_upload/'.encode_url('5.a'))?>',
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

  //fill data record
  $('#tampil_data').on('click','.item_edit',function(){
    var seq_id = $(this).data('seq_id');
    var semester = $(this).data('semester');
    var kode_matkul = $(this).data('kode_matkul');
    var nama_matkul = $(this).data('nama_matkul');
    var matkul_kopetensi = $(this).data('matkul_kopetensi');
    var kuliah = $(this).data('kuliah');
    var seminar = $(this).data('seminar');
    var praktikum = $(this).data('praktikum');
    var konversi_jam = $(this).data('konversi_jam');
    var sikap = $(this).data('sikap');
    var pengetahuan = $(this).data('pengetahuan');
    var keterampilan_umum = $(this).data('keterampilan_umum');
    var keterampilan_khusus = $(this).data('keterampilan_khusus');
    var dokumen_pembelajaran = $(this).data('dokumen_pembelajaran');
    var unit_penyelenggara = $(this).data('unit_penyelenggara');
    var doc = $(this).data('doc');
    if (doc) { $('#status').html('<span class="badge badge-success">Dokumen telah diunggah</span>');
    } else { $('#status').html('<span class="badge badge-danger">Dokumen belum diunggah</span>'); }

    $('#Modal_Edit').modal('show');
    $('[name="seq_id"]').val(seq_id);
    $('[name="semester_edit"]').val(semester);
    $('[name="kode_matkul_edit"]').val(kode_matkul);
    $('[name="nama_matkul_edit"]').val(nama_matkul);
    $('[name="matkul_kopetensi_edit"]').val(matkul_kopetensi);
    $('[name="kuliah_edit"]').val(kuliah);
    $('[name="seminar_edit"]').val(seminar);
    $('[name="praktikum_edit"]').val(praktikum);
    $('[name="konversi_jam_edit"]').val(konversi_jam);
    if (sikap=="V") {
      $('[name="sikap_edit"]').prop('checked', true);
    } else {
      $('[name="sikap_edit"]').prop('checked', false);
    }
    if (pengetahuan=="V") {
      $('[name="pengetahuan_edit"]').prop('checked', true);
    } else {
      $('[name="pengetahuan_edit"]').prop('checked', false);
    }
    if (keterampilan_umum=="V") {
      $('[name="keterampilan_umum_edit"]').prop('checked', true);
    } else {
      $('[name="keterampilan_umum_edit"]').prop('checked', false);
    }
    if (keterampilan_khusus=="V") {
        $('[name="keterampilan_khusus_edit"]').prop('checked', true);
    } else {
      $('[name="keterampilan_khusus_edit"]').prop('checked', false);
    }
    $('[name="dokumen_pembelajaran_edit"]').val(dokumen_pembelajaran);
    $('[name="unit_penyelenggara_edit"]').val(unit_penyelenggara);
    $('[name="doc_edit"]').val(doc);
    $('[name="semester_edit"]').focus();
  });

  //Save Data
  $('#btn_save').on('click',function(){
    var semester = $('#semester').val();
    var kode_matkul = $('#kode_matkul').val();
    var nama_matkul = $('#nama_matkul').val();
    var matkul_kopetensi = $('#matkul_kopetensi').val();
    var kuliah = $('#kuliah').val();
    var seminar  = $('#seminar').val();
    var praktikum = $('#praktikum').val();
    var konversi_jam = $('#konversi_jam').val();
    var sikap;
    var pengetahuan;
    var keterampilan_umum;
    var keterampilan_khusus;
    var dokumen_pembelajaran = $('#dokumen_pembelajaran').val();
    var unit_penyelenggara = $('#unit_penyelenggara').val();
    if ($('#sikap').is(':checked')) { sikap = 'V';  } else { sikap = ''; }
    if ($('#pengetahuan').is(':checked')) { pengetahuan = 'V';  } else { pengetahuan = ''; }
    if ($('#keterampilan_khusus').is(':checked')) { keterampilan_umum = 'V';  } else { keterampilan_umum = ''; }
    if ($('#dokumen_pembelajaran').is(':checked')) { keterampilan_khusus = 'V';  } else { keterampilan_khusus = ''; }

    $.ajax({
      type : "POST",
      url  : "<?php echo site_url('kurikulum/cp_rencana_pembelajaran_add')?>",
      dataType : "JSON",
      data : {semester:semester, kode_matkul:kode_matkul, nama_matkul:nama_matkul, matkul_kopetensi:matkul_kopetensi, kuliah:kuliah, seminar:seminar, praktikum:praktikum, konversi_jam:konversi_jam, sikap:sikap, pengetahuan:pengetahuan, keterampilan_umum:keterampilan_umum, keterampilan_khusus:keterampilan_khusus, dokumen_pembelajaran:dokumen_pembelajaran, unit_penyelenggara:unit_penyelenggara},
      success: function(data){
        $('[name="semester"]').val("");
        $('[name="kode_matkul"]').val("");
        $('[name="nama_matkul"]').val("");
        $('[name="matkul_kopetensi"]').val("");
        $('[name="kuliah"]').val("");
        $('[name="seminar"]').val("");
        $('[name="praktikum"]').val("");
        $('[name="konversi_jam"]').val("");
        $('[name="sikap"]').val("");
        $('[name="pengetahuan"]').val("");
        $('[name="keterampilan_umum"]').val("");
        $('[name="keterampilan_khusus"]').val("");
        $('[name="dokumen_pembelajaran"]').val("");
        $('[name="unit_penyelenggara"]').val("");
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
      url:'<?php echo site_url('dosen/cp_rencana_pembelajaran_edit')?>',
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

  //update record
  $('#btn_update').on('click',function(){
    var seq_id = $('#seq_id').val();
    var semester = $('#semester_edit').val();
    var kode_matkul = $('#kode_matkul_edit').val();
    var nama_matkul = $('#nama_matkul_edit').val();
    var matkul_kopetensi = $('#matkul_kopetensi_edit').val();
    var kuliah = $('#kuliah_edit').val();
    var seminar  = $('#seminar_edit').val();
    var praktikum = $('#praktikum_edit').val();
    var konversi_jam = $('#konversi_jam_edit').val();
    var sikap;
    var pengetahuan;
    var keterampilan_umum;
    var keterampilan_khusus;
    var dokumen_pembelajaran = $('#dokumen_pembelajaran_edit').val();
    var unit_penyelenggara = $('#unit_penyelenggara_edit').val();

    if ($('#sikap_edit').is(':checked')) { sikap = 'V';  } else { sikap = ''; }
    if ($('#pengetahuan_edit').is(':checked')) { pengetahuan = 'V';  } else { pengetahuan = ''; }
    if ($('#keterampilan_khusus_edit').is(':checked')) { keterampilan_umum = 'V';  } else { keterampilan_umum = ''; }
    if ($('#dokumen_pembelajaran_edit').is(':checked')) { keterampilan_khusus = 'V';  } else { keterampilan_khusus = ''; }

    $.ajax({
      type : "POST",
      url  : "<?php echo site_url('kurikulum/cp_rencana_pembelajaran_edit')?>",
      dataType : "JSON",
      data : {seq_id:seq_id, semester:semester, kode_matkul:kode_matkul, nama_matkul:nama_matkul, matkul_kopetensi:matkul_kopetensi, kuliah:kuliah, seminar:seminar, praktikum:praktikum, konversi_jam:konversi_jam, sikap:sikap, pengetahuan:pengetahuan, keterampilan_umum:keterampilan_umum, keterampilan_khusus:keterampilan_khusus, dokumen_pembelajaran:dokumen_pembelajaran, unit_penyelenggara:unit_penyelenggara},
      success: function(data){
        $('[name="semester_edit"]').val("");
        $('[name="kode_matkul_edit"]').val("");
        $('[name="nama_matkul_edit"]').val("");
        $('[name="matkul_kopetensi_edit"]').val("");
        $('[name="kuliah_edit"]').val("");
        $('[name="seminar_edit"]').val("");
        $('[name="praktikum_edit"]').val("");
        $('[name="konversi_jam_edit"]').val("");
        $('[name="sikap_edit"]').prop('checked', false);
        $('[name="pengetahuan_edit"]').prop('checked', false);
        $('[name="keterampilan_umum_edit"]').prop('checked', false);
        $('[name="keterampilan_khusus_edit"]').prop('checked', false);
        $('[name="dokumen_pembelajaran_edit"]').val("");
        $('[name="unit_penyelenggara_edit"]').val("");
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
          url  : "<?php echo site_url('kurikulum/cp_rencana_pembelajaran_delete')?>",
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
