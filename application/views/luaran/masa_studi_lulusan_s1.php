<div class="card shadow">
  <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
    <h6 class="m-0 font-weight-bold text-primary"><?php echo $title; ?></h6>
    <div class="float-right">
      <a href="<?php echo base_url('export/export_excel/'.encode_url('8c_s1'));?>" class="btn btn-success btn-icon-split btn-sm">
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
          <th rowspan="2" style="text-align: center; vertical-align: middle;">Tahun Masuk</th>
          <th rowspan="2" style="text-align: center; vertical-align: middle;">Jumlah Mahasiswa Diterima</th>
          <th colspan="7" style="text-align: center; vertical-align: middle;">Jumlah Mahasiswa yang lulus pada</th>
          <th rowspan="2" style="text-align: center; vertical-align: middle;">Jumlah Lulusan s.d. akhir TS </th>
          <th rowspan="2" style="text-align: center; vertical-align: middle;">Rata-rata Masa Studi</th>
        </tr>
        <tr>
            <th style="text-align: center; vertical-align: middle;">Akhir TS-6</th>
            <th style="text-align: center; vertical-align: middle;">Akhir TS-5</th>
            <th style="text-align: center; vertical-align: middle;">Akhir TS-4</th>
            <th style="text-align: center; vertical-align: middle;">Akhir TS-3</th>
            <th style="text-align: center; vertical-align: middle;">Akhir TS-2</th>
            <th style="text-align: center; vertical-align: middle;">Akhir TS-1</th>
            <th style="text-align: center; vertical-align: middle;">Akhir TS</th>
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
      url   : '<?php echo site_url('luaran/masa_studi_lulusan_list')?>',
      async : false,
      dataType : 'json',
      success : function(data){
        var html = '';
        var i;
        for(i=0; i<data.length; i++){
          var tot=0;
          j = i + 1;
          tot = parseInt(data[i].ts6) + parseInt(data[i].ts5) + parseInt(data[i].ts4) + parseInt(data[i].ts3) + parseInt(data[i].ts2) + parseInt(data[i].ts1) + parseInt(data[i].ts);
          html += '<tr>'+
          '<td>'+data[i].nama_ts+'</td>'+
          '<td>'+data[i].jml+'</td>'+
          '<td>'+data[i].ts6+'</td>'+
          '<td>'+data[i].ts5+'</td>'+
          '<td>'+data[i].ts4+'</td>'+
          '<td>'+data[i].ts3+'</td>'+
          '<td>'+data[i].ts2+'</td>'+
          '<td>'+data[i].ts1+'</td>'+
          '<td>'+data[i].ts+'</td>'+
          '<td>'+tot+'</td>'+
          '<td>'+data[i].masa_studi+'</td>'+
          '</tr>';
        }
        $('#tampil_data').html(html);
      }
    });
  }

});
</script>
