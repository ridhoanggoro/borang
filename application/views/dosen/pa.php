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
      <a href="<?php echo base_url('export/export_excel/'.encode_url('3a2'));?>" class="btn btn-success btn-icon-split btn-sm">
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
          <th rowspan="2" style="text-align: center; vertical-align: middle;">Nama Dosen</th>
          <th colspan="4" style="text-align: center; vertical-align: middle;">Jumlah Mahasiswa yang Dibimbing Pada PS yang Diakreditasi</th>
          <th colspan="4" style="text-align: center; vertical-align: middle;">Jumlah Mahasiswa yang Dibimbing Pada PS Lain pada Program yang sama di PT</th>
          <th rowspan="2" style="text-align: center; vertical-align: middle;">Rata-rata Jumlah Bimbingan di semua Program/Semester</th>
        </tr>
        <tr>
            <th style="text-align: center; vertical-align: middle;">TS-2</th>
            <th style="text-align: center; vertical-align: middle;">TS-1</th>
            <th style="text-align: center; vertical-align: middle;">TS</th>
            <th style="text-align: center; vertical-align: middle;">Rata-Rata</th>
            <th style="text-align: center; vertical-align: middle;">TS-2</th>
            <th style="text-align: center; vertical-align: middle;">TS-1</th>
            <th style="text-align: center; vertical-align: middle;">TS</th>
            <th style="text-align: center; vertical-align: middle;">Rata-Rata</th>
        </tr>
      </thead>
      <tbody id="tampil_data">
      </tbody>
    </table>
    </div>
  </div>
</div>

<!-- MODAL ADD -->
<form class="was-validated" id="insert">
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
            <label for="nidn">NAMA DOSEN</label>
            <select id="nidn" name="nidn" class="custom-select" data-placeholder="Silahkan pilih..." required>
              <option value=""></option>
              <?php foreach ($dosen->result() as $value) { ?>
              <option value="<?php echo $value->nidn; ?>"><?php echo $value->nidn.' - '.$value->nama; ?></option>
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
          <div class="form-group col-md-4">
            <label for="mhs_pa">Kategori Mahasiswa PA</label>
            <select id="mhs_pa" name="mhs_pa" class="custom-select" data-placeholder="Silahkan pilih..." required>
                 <option value=""></option>
                 <option value="PS sendiri">PS Sendiri</option>
                 <option value="PS lain">PS Lain</option>
             </select>
            <div id="id_check_result" class="help-block with-errors"></div>
          </div>
          <div class="form-group col-md-4">
            <label for="jml">Jumlah</label>
            <input type="text" class="form-control" id="jml" name="jml" required>
            <div id="id_check_result" class="help-block with-errors"></div>
          </div>
          <div class="form-group col-md-4">
            <label for="thn_akademik">Tahun Akademik TS</label>
            <input type="text" class="form-control" id="thn_akademik" name="thn_akademik" required>
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


<script type="text/javascript">
$(document).ready(function(){
  show_data();
  $('#mydata').dataTable();
  function show_data(){
    $.ajax({
      type  : 'ajax',
      url   : '<?php echo site_url('dosen/dosen_pa_data_list')?>',
      async : false,
      dataType : 'json',
      success : function(data){
        var html = '';
        var i;
        var r_sendiri=0;
        var r_lain=0;
        var r_semua=0;
        for(i=0; i<data.length; i++){
          r_sendiri = (parseInt(data[i].ps_sendiri_ts1) + parseInt(data[i].ps_sendiri_ts2) + parseInt(data[i].ps_sendiri_ts))/3;
          r_lain = (parseInt(data[i].ps_lain_ts2) + parseInt(data[i].ps_lain_ts1) + parseInt(data[i].ps_lain_ts))/3;
          r_semua = (r_sendiri+r_lain)/2
          html += '<tr>'+
          '<td>'+data[i].nama+'</td>'+
          '<td>'+data[i].ps_sendiri_ts2+'</td>'+
          '<td>'+data[i].ps_sendiri_ts1+'</td>'+
          '<td>'+data[i].ps_sendiri_ts+'</td>'+
          '<td>'+r_sendiri.toFixed(1)+'</td>'+
          '<td>'+data[i].ps_lain_ts2+'</td>'+
          '<td>'+data[i].ps_lain_ts1+'</td>'+
          '<td>'+data[i].ps_lain_ts+'</td>'+
          '<td>'+r_lain.toFixed(1)+'</td>'+
          '<td>'+r_semua.toFixed(1)+'</td>'+
          '</tr>';
        }
        $('#tampil_data').html(html);
      }
    });
  }

    //Save Data
  $('#btn_save').on('click',function(){
    var nik_nidn_pembimbing = $('#nidn').val();
    var nama_pembimbing = $('#nama').val();
    var th_akademik = $('#thn_akademik').val();
    var jumlah = $('#jml').val();
    var mhs_pa = $('#mhs_pa').val();

    $.ajax({
      type : "POST",
      url  : "<?php echo site_url('dosen/dosen_pa_add')?>",
      dataType : "JSON",
      data : {nik_nidn_pembimbing:nik_nidn_pembimbing, nama_pembimbing:nama_pembimbing, th_akademik:th_akademik, jumlah:jumlah, mhs_pa:mhs_pa},
      success: function(data){
        $('[name="nidn"]').val("");
        $('[name="nama"]').val("");
        $('[name="thn_akademik"]').val("");
        $('[name="jml"]').val("");
        $('[name="mhs_pa"]').val("");
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

});
</script>
