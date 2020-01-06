<div class="card shadow">
  <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
    <h6 class="m-0 font-weight-bold text-primary"><?php echo $title; ?></h6>
    <div class="float-right">
      <a href="<?php echo base_url('export/export_excel/'.encode_url('8a'));?>" class="btn btn-success btn-icon-split btn-sm">
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
          <th colspan="3" style="text-align: center; vertical-align: middle;">Indeks Prestasi Kumulatif</th>
        </tr>
        <tr>
            <th style="text-align: center; vertical-align: middle;">Min.</th>
            <th style="text-align: center; vertical-align: middle;">Rata-rata</th>
            <th style="text-align: center; vertical-align: middle;">Maks</th>
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
      url   : '<?php echo site_url('luaran/ipk_lulusan_data_list')?>',
      async : false,
      dataType : 'json',
      success : function(data){
        var html = '';
        var i;
        var ipk_rata = 0;
        for(i=0; i<data.length; i++){
          j = i + 1;
          ipk_rata = parseFloat(data[i].ipk_rata);
          html += '<tr>'+
          '<td style="text-align: center;">'+data[i].nama_ts+'</td>'+
          '<td style="text-align: center;">'+data[i].jml+'</td>'+
          '<td style="text-align: center;">'+data[i].ipk_min+'</td>'+
          '<td style="text-align: center;">'+ipk_rata.toFixed(2)+'</td>'+
          '<td style="text-align: center;">'+data[i].ipk_maks+'</td>'+
          '</tr>';
        }
        $('#tampil_data').html(html);
      }
    });
  }
});
</script>
