<div class="card shadow">
  <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
    <h6 class="m-0 font-weight-bold text-primary"><?php echo $title; ?></h6>
    <div class="float-right">
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
});
</script>
