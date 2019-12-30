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
      <a href="<?php echo base_url('export/export_excel/'.encode_url('4'));?>" class="btn btn-success btn-icon-split btn-sm">
        <span class="icon text-white-50">
          <i class="fas fa-file-excel"></i>
        </span>
        <span class="text">Export Excel</span>
      </a>
    </div>
  </div>
  <div class="card-body">
    <div class="table-responsive">
    <table class="table table-hover table-bordered" id="mydata" width="100%" cellspacing="0">
      <thead>
        <tr>
          <tr>
            <th rowspan="2" style="text-align: center; vertical-align: middle;">No</th>
            <th rowspan="2" style="text-align: center; vertical-align: middle;">Jenis Penggunaan</th>
            <th colspan="4" style="text-align: center; vertical-align: middle;">Unit Pengelola Program Studi (Rupiah)</th>
            <th colspan="4" style="text-align: center; vertical-align: middle;">Program Studi (Rupiah)</th>
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
        </tr>
      </thead>
      <tbody id="tampil_data">
      </tbody>
    </table>
    </div>
  </div>
</div>

<script type="text/javascript">
$(document).ready(function(){
  show_data();
  function show_data(){
    $.ajax({
      type  : 'ajax',
      url   : '<?php echo site_url('dosen/karya_ilmiah_disitasi_data_list')?>',
      async : false,
      dataType : 'json',
      success : function(data){
        var html = '';
        var i;
          html += '<tr>'+
                  '<td>1</td>'+
                  '<td>Biaya Operasional Pendidikan</td>'+
                  '<td>30,000,000,000.00</td>'+
                  '<td>5,000,000,000.00</td>'+
                  '<td>5,000,000,000.00</td>'+
                  '<td>5,000,000,000.00</td>'+
                  '<td>5,000,000,000.00</td>'+
                  '<td>5,000,000,000.00</td>'+
                  '<td>5,000,000,000.00</td>'+
                  '<td>5,000,000,000.00</td>'+
                  '</tr>'+
                  '<tr>'+
                  '<td></td>'+
                  '<td>a. Biaya Dosen (Gaji, Honor)</td>'+
                  '<td>5,000,000,000.00</td>'+
                  '<td>5,000,000,000.00</td>'+
                  '<td>5,000,000,000.00</td>'+
                  '<td>5,000,000,000.00</td>'+
                  '<td>5,000,000,000.00</td>'+
                  '<td>5,000,000,000.00</td>'+
                  '<td>5,000,000,000.00</td>'+
                  '<td>5,000,000,000.00</td>'+
                  '</tr>'+
                  '<tr>'+
                  '<td></td>'+
                  '<td>b. Biaya Tenaga Kependidikan (Gaji, Honor)</td>'+
                  '<td>5,000,000,000.00</td>'+
                  '<td>5,000,000,000.00</td>'+
                  '<td>5,000,000,000.00</td>'+
                  '<td>5,000,000,000.00</td>'+
                  '<td>5,000,000,000.00</td>'+
                  '<td>5,000,000,000.00</td>'+
                  '<td>5,000,000,000.00</td>'+
                  '<td>5,000,000,000.00</td>'+
                  '</tr>'+
                  '<tr>'+
                  '<td></td>'+
                  '<td>c. Biaya Operasional Pembelajaran (Bahan dan Peralatan Habis Pakai)</td>'+
                  '<td>5,000,000,000.00</td>'+
                  '<td>5,000,000,000.00</td>'+
                  '<td>5,000,000,000.00</td>'+
                  '<td>5,000,000,000.00</td>'+
                  '<td>5,000,000,000.00</td>'+
                  '<td>5,000,000,000.00</td>'+
                  '<td>5,000,000,000.00</td>'+
                  '<td>5,000,000,000.00</td>'+
                  '</tr>'+
                  '<tr>'+
                  '<td></td>'+
                  '<td>d. Biaya Operasional Tidak Langsung (Listrik, Gas, Air, Pemeliharaan Gedung, Pemeliharaan Sarana, Uang Lembur, Telekomunikasi, Konsumsi, Transport Lokal, Pajak, Asuransi, dll.)</td>'+
                  '<td>5,000,000,000.00</td>'+
                  '<td>5,000,000,000.00</td>'+
                  '<td>5,000,000,000.00</td>'+
                  '<td>5,000,000,000.00</td>'+
                  '<td>5,000,000,000.00</td>'+
                  '<td>5,000,000,000.00</td>'+
                  '<td>5,000,000,000.00</td>'+
                  '<td>5,000,000,000.00</td>'+
                  '</tr>'+
                  '<tr>'+
                  '<td>2</td>'+
                  '<td>Biaya operasional kemahasiswaan (penalaran, minat, bakat, dan kesejahteraan).</td>'+
                  '<td>5,000,000,000.00</td>'+
                  '<td>5,000,000,000.00</td>'+
                  '<td>5,000,000,000.00</td>'+
                  '<td>5,000,000,000.00</td>'+
                  '<td>5,000,000,000.00</td>'+
                  '<td>5,000,000,000.00</td>'+
                  '<td>5,000,000,000.00</td>'+
                  '<td>5,000,000,000.00</td>'+
                  '</tr>'+
                  '<tr>'+
                  '<td colspan="2" style="text-align: center;"><b>Jumlah</b></td>'+
                  '<td>5,000,000,000.00</td>'+
                  '<td>5,000,000,000.00</td>'+
                  '<td>5,000,000,000.00</td>'+
                  '<td>5,000,000,000.00</td>'+
                  '<td>5,000,000,000.00</td>'+
                  '<td>5,000,000,000.00</td>'+
                  '<td>5,000,000,000.00</td>'+
                  '<td>5,000,000,000.00</td>'+
                  '</tr>'+
                  '<tr>'+
                  '<td>3</td>'+
                  '<td>Biaya Penelitian</td>'+
                  '<td>5,000,000,000.00</td>'+
                  '<td>5,000,000,000.00</td>'+
                  '<td>5,000,000,000.00</td>'+
                  '<td>5,000,000,000.00</td>'+
                  '<td>5,000,000,000.00</td>'+
                  '<td>5,000,000,000.00</td>'+
                  '<td>5,000,000,000.00</td>'+
                  '<td>5,000,000,000.00</td>'+
                  '</tr>'+
                  '<tr>'+
                  '<td>4</td>'+
                  '<td>Biaya PkM</td>'+
                  '<td>5,000,000,000.00</td>'+
                  '<td>5,000,000,000.00</td>'+
                  '<td>5,000,000,000.00</td>'+
                  '<td>5,000,000,000.00</td>'+
                  '<td>5,000,000,000.00</td>'+
                  '<td>5,000,000,000.00</td>'+
                  '<td>5,000,000,000.00</td>'+
                  '<td>5,000,000,000.00</td>'+
                  '</tr>'+
                  '<tr>'+
                  '<td colspan="2" style="text-align: center;"><b>Jumlah</b></td>'+
                  '<td>5,000,000,000.00</td>'+
                  '<td>5,000,000,000.00</td>'+
                  '<td>5,000,000,000.00</td>'+
                  '<td>5,000,000,000.00</td>'+
                  '<td>5,000,000,000.00</td>'+
                  '<td>5,000,000,000.00</td>'+
                  '<td>5,000,000,000.00</td>'+
                  '<td>5,000,000,000.00</td>'+
                  '</tr>'+
                  '<tr>'+
                  '<td>5</td>'+
                  '<td>Biaya Investasi SDM</td>'+
                  '<td>5,000,000,000.00</td>'+
                  '<td>5,000,000,000.00</td>'+
                  '<td>5,000,000,000.00</td>'+
                  '<td>5,000,000,000.00</td>'+
                  '<td>5,000,000,000.00</td>'+
                  '<td>5,000,000,000.00</td>'+
                  '<td>5,000,000,000.00</td>'+
                  '<td>5,000,000,000.00</td>'+
                  '</tr>'+
                  '<tr>'+
                  '<td>6</td>'+
                  '<td>Biaya Investasi Sarana</td>'+
                  '<td>5,000,000,000.00</td>'+
                  '<td>5,000,000,000.00</td>'+
                  '<td>5,000,000,000.00</td>'+
                  '<td>5,000,000,000.00</td>'+
                  '<td>5,000,000,000.00</td>'+
                  '<td>5,000,000,000.00</td>'+
                  '<td>5,000,000,000.00</td>'+
                  '<td>5,000,000,000.00</td>'+
                  '</tr>'+
                  '<tr>'+
                  '<td>7</td>'+
                  '<td>Biaya Investasi Prasarana</td>'+
                  '<td>5,000,000,000.00</td>'+
                  '<td>5,000,000,000.00</td>'+
                  '<td>5,000,000,000.00</td>'+
                  '<td>5,000,000,000.00</td>'+
                  '<td>5,000,000,000.00</td>'+
                  '<td>5,000,000,000.00</td>'+
                  '<td>5,000,000,000.00</td>'+
                  '<td>5,000,000,000.00</td>'+
                  '</tr>'+
                  '<tr>'+
                  '<td colspan="2" style="text-align: center;"><b>Jumlah</b></td>'+
                  '<td>5,000,000,000.00</td>'+
                  '<td>5,000,000,000.00</td>'+
                  '<td>5,000,000,000.00</td>'+
                  '<td>5,000,000,000.00</td>'+
                  '<td>5,000,000,000.00</td>'+
                  '<td>5,000,000,000.00</td>'+
                  '<td>5,000,000,000.00</td>'+
                  '<td>5,000,000,000.00</td>'+
                  '</tr>'
                  ;

        $('#tampil_data').html(html);
      }
    });
  }

});
</script>
