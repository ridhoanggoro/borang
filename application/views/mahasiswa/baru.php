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
      <a href="<?php echo base_url('export/export_excel/'.encode_url('1-1'));?>" class="btn btn-success btn-icon-split btn-sm">
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
          <th rowspan="2" style="text-align: center; vertical-align: middle;">Tahun Akademik</th>
          <th rowspan="2" style="text-align: center; vertical-align: middle;">Daya Tampung</th>
          <th colspan="2" style="text-align: center; vertical-align: middle;">Jumlah Calon Mahasiswa</th>
          <th colspan="2" style="text-align: center; vertical-align: middle;">Jumlah Mahasiswa Baru</th>
          <th colspan="2" style="text-align: center; vertical-align: middle;">Jumlah Mahasiswa Aktif</th>
          <th rowspan="2" style="text-align: center; vertical-align: middle;">Menu</th>
        </tr>
        <tr>
            <th style="text-align: center; vertical-align: middle;">Pendaftar</th>
            <th style="text-align: center; vertical-align: middle;">Lulus Seleksi</th>
            <th style="text-align: center; vertical-align: middle;">Reguler</th>
            <th style="text-align: center; vertical-align: middle;">Transfer</th>
            <th style="text-align: center; vertical-align: middle;">Reguler</th>
            <th style="text-align: center; vertical-align: middle;">Transfer</th>
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
            <label for="mitra">Lembaga Mitra</label>
            <input type="text" class="form-control" id="mitra" name="mitra" required>
            <div id="id_check_result" class="help-block with-errors"></div>
          </div>
          <div class="form-group col-md-6">
          <label for="tingkat">Tingkat</label>
           <select id="tingkat" name="tingkat" class="custom-select" data-placeholder="Please select..." required>
                <option value="Internasional">Internasional</option>
                <option value="Nasional">Nasional</option>
                <option value="Lokal">Wilayah / Lokal</option>
            </select>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-12">
            <label for="judul_kegiatan">Judul Kegiatan Kerjasama</label>
            <input type="text" class="form-control" id="judul_kegiatan" name="judul_kegiatan" required>
            <div id="id_check_result" class="help-block with-errors"></div>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-12">
            <label for="mitra">Manfaat bagi PS yang Diakreditasi</label>
            <textarea class="form-control" id="manfaat_bagi_ps" name="manfaat_bagi_ps" rows="3" required></textarea>
            <div id="id_check_result" class="help-block with-errors"></div>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="mitra">Waktu dan Durasi</label>
            <input type="text" class="form-control" id="waktu" name="waktu" required>
            <div id="id_check_result" class="help-block with-errors"></div>
          </div>
          <div class="form-group col-md-6">
            <label for="mitra">Tahun Berakhirnya Kerjasama (YYYY)</label>
            <input type="number" class="form-control" id="tahun_berakhir" name="tahun_berakhir" min="1" max="9999" required>
            <div id="id_check_result" class="help-block with-errors"></div>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-12">
            <label for="mitra">Bukti Kerjasama</label>
            <input type="text" class="form-control" id="bukti" name="bukti" required>
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
            <label for="ts_edit">Tahun Akademik</label>
            <input type="text" class="form-control" id="ts_edit" name="ts_edit" readonly="">
            <div id="id_check_result" class="help-block with-errors"></div>
          </div>
          <div class="form-group col-md-6">
            <label for="daya_tampung_edit">Daya Tampung</label>
            <input type="number" class="form-control" id="daya_tampung_edit" name="daya_tampung_edit" min="0" max="9999" required>
            <div id="id_check_result" class="help-block with-errors"></div>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-3">
            <label for="calon_seleksi_edit">Calon Mahasiswa</label>
            <input type="text" class="form-control" id="calon_seleksi_edit" name="calon_seleksi_edit" readonly="">
            <div id="id_check_result" class="help-block with-errors"></div>
          </div>
          <div class="form-group col-md-3">
            <label for="calon_lulus_edit">Calon Mahasiswa Lulus Seleksi</label>
            <input type="text" class="form-control" id="calon_lulus_edit" name="calon_lulus_edit" readonly="">
            <div id="id_check_result" class="help-block with-errors"></div>
          </div>
          <div class="form-group col-md-3">
            <label for="baru_reguler_edit">Mahasiswa Baru Reguler</label>
            <input type="text" class="form-control" id="baru_reguler_edit" name="baru_reguler_edit" readonly="">
            <div id="id_check_result" class="help-block with-errors"></div>
          </div>
          <div class="form-group col-md-3">
            <label for="baru_transfer_edit">Mahasiswa Baru Transfer</label>
            <input type="text" class="form-control" id="baru_transfer_edit" name="baru_transfer_edit" readonly="">
            <div id="id_check_result" class="help-block with-errors"></div>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="aktif_reguler_edit">Mahasiswa Aktif Reguler</label>
            <input type="text" class="form-control" id="aktif_reguler_edit" name="aktif_reguler_edit" readonly="">
            <div id="id_check_result" class="help-block with-errors"></div>
          </div>
          <div class="form-group col-md-6">
            <label for="aktif_transfer_edit">Mahasiswa Aktif Transfer</label>
            <input type="text" class="form-control" id="aktif_transfer_edit" name="aktif_transfer_edit" readonly="">
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
    var tot_calon_pendaftar = 0;
    var tot_calon_lulus     = 0;
    var tot_mhs_reguler     = 0;
    var tot_mhs_trans       = 0;
    var tot_mhs_aktif       = 0;
    $.ajax({
      type  : 'ajax',
      url   : '<?php echo site_url('mahasiswa/seleksi_mahasiswa_data_list')?>',
      async : false,
      dataType : 'json',
      success : function(data){
        var html = '';
        var i;
        for(i=0; i<data.length; i++){
          html += '<tr>'+
          '<td style="text-align: center;">'+data[i].nama_ts+'</td>'+
          '<td style="text-align: center;">'+data[i].daya_tampung+'</td>'+
          '<td style="text-align: center;">'+data[i].pendaftar+'</td>'+
          '<td style="text-align: center;">'+data[i].lulus+'</td>'+
          '<td style="text-align: center;">'+data[i].reguler+'</td>'+
          '<td style="text-align: center;">'+data[i].pindahan+'</td>'+
          '<td style="text-align: center;">'+data[i].aktif_reguler+'</td>'+
          '<td style="text-align: center;">'+data[i].aktif_pindahan+'</td>'+
          '<td style="text-align:right;">'+
              '<a href="javascript:void(0);" class="btn btn-info btn-circle btn-sm item_edit" data-toggle="tooltip" data-placement="top" title="Edit" data-seq_id="'+data[i].seq_id+'" data-nama_ts="'+data[i].nama_ts+'" data-daya_tampung="'+data[i].daya_tampung+'"data-pendaftar="'+data[i].pendaftar+'"data-lulus="'+data[i].lulus+'"data-reguler="'+data[i].reguler+'"data-pindahan="'+data[i].pindahan+'"data-aktif_reguler="'+data[i].aktif_reguler+'"data-aktif_pindahan="'+data[i].aktif_pindahan+'"><i class="fas fa-search"></i></a>'+' '+
              '<a href="javascript:void(0);" class="btn btn-danger btn-circle btn-sm item_delete" data-toggle="tooltip" data-placement="top" title="Delete" data-seq_id="'+data[i].seq_id+'"><i class="fas fa-trash"></i></a>'+
          '</td>'+
          '</tr>';
          tot_calon_pendaftar = tot_calon_pendaftar + raw_number(data[i].pendaftar);
          tot_calon_lulus = tot_calon_lulus + raw_number(data[i].lulus);
          tot_mhs_reguler = tot_mhs_reguler + raw_number(data[i].reguler);
          tot_mhs_trans = tot_mhs_trans + raw_number(data[i].pindahan);
          if (data[i].nama_ts=='TS') {
            tot_mhs_aktif = raw_number(data[i].aktif_reguler) + raw_number(data[i].aktif_pindahan);
          }
        }
        html += '<tr>'+
          '<th colspan="2" style="text-align: center;">Jumlah</th>'+
          '<th style="text-align: center;">'+tot_calon_pendaftar+'</th>'+
          '<th style="text-align: center;">'+tot_calon_lulus+'</th>'+
          '<th style="text-align: center;">'+tot_mhs_reguler+'</th>'+
          '<th style="text-align: center;">'+tot_mhs_trans+'</th>'+
          '<th colspan="2" style="text-align: center;">'+tot_mhs_aktif+'</th>'+
          '<th style="text-align: center;"></th>'+
        '</tr>';
        $('#tampil_data').html(html);
      }
    });
  }

  //Save Data
  $('#btn_save').on('click',function(){
    var lembaga_mitra   = $('#mitra').val();
    var tingkat         = $('#tingkat').val();
    var judul_kegiatan  = $('#judul_kegiatan').val();
    var manfaat_bagi_ps = $('#manfaat_bagi_ps').val();
    var durasi          = $('#waktu').val();
    var tahun_berakhir  = $('#tahun_berakhir').val();
    var bukti           = $('#bukti').val();
    $.ajax({
      type : "POST",
      url  : "<?php echo site_url('tridharma/pendidikan_add')?>",
      dataType : "JSON",
      data : {lembaga_mitra:lembaga_mitra, tingkat:tingkat, judul_kegiatan:judul_kegiatan, manfaat_bagi_ps:manfaat_bagi_ps, durasi:durasi, tahun_berakhir:tahun_berakhir, bukti:bukti},
      success: function(data){
        $('[name="mitra"]').val("");
        $('[name="tingkat"]').val("");
        $('[name="judul_kegiatan"]').val("");
        $('[name="manfaat_bagi_ps"]').val("");
        $('[name="waktu"]').val("");
        $('[name="tahun_berakhir"]').val("");
        $('[name="bukti"]').val("");
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
    var seq_id        = $(this).data('seq_id');
    var thn_akademik  = $(this).data('nama_ts');
    var daya_tampung  = $(this).data('daya_tampung');
    var pendaftar     = $(this).data('pendaftar');
    var lulus         = $(this).data('lulus');
    var reguler       = $(this).data('reguler');
    var pindahan      = $(this).data('pindahan');
    var aktif_reguler       = $(this).data('aktif_reguler');
    var aktif_pindahan      = $(this).data('aktif_pindahan');

    $('#Modal_Edit').modal('show');
    $('[name="seq_id"]').val(seq_id);
    $('[name="ts_edit"]').val(thn_akademik);
    $('[name="daya_tampung_edit"]').val(daya_tampung);
    $('[name="calon_seleksi_edit"]').val(pendaftar);
    $('[name="calon_lulus_edit"]').val(lulus);
    $('[name="baru_reguler_edit"]').val(reguler);
    $('[name="baru_transfer_edit"]').val(pindahan);
    $('[name="aktif_reguler_edit"]').val(aktif_reguler);
    $('[name="aktif_transfer_edit"]').val(aktif_pindahan);
    $('[name="daya_tampung_edit"]').focus();
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
