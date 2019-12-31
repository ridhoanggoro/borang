<div class="card shadow">
  <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
    <h6 class="m-0 font-weight-bold text-primary"><?php echo $title; ?></h6>
    <div class="float-right">
      <a href="<?php echo base_url('export/export_excel/'.encode_url('3b2'));?>" class="btn btn-success btn-icon-split btn-sm">
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
          <th rowspan="2" style="text-align: center; vertical-align: middle;">Sumber Pembiayaan</th>
          <th colspan="3" style="text-align: center; vertical-align: middle;">Jumlah Judul Penelitian</th>
          <th rowspan="2" style="text-align: center; vertical-align: middle;">Jumlah</th>
        </tr>
        <tr>
            <th style="text-align: center; vertical-align: middle;">TS-2</th>
            <th style="text-align: center; vertical-align: middle;">TS-1</th>
            <th style="text-align: center; vertical-align: middle;">TS</th>
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
    var jml = 0;
    var tot_ts2 = 0;
    var tot_ts1 = 0;
    var tot_ts = 0;
    var grand_total = 0;
    $.ajax({
      type  : 'ajax',
      url   : '<?php echo site_url('dosen/penelitian_dtps_data_list')?>',
      async : false,
      dataType : 'json',
      success : function(data){
        var html = '';
        var i;
        for(i=0; i<data.length; i++){
          jml = (parseInt(data[i].ts2) + parseInt(data[i].ts1) + parseInt(data[i].ts));
          tot_ts2 = tot_ts2 + parseInt(data[i].ts2);
          tot_ts1 = tot_ts1 + parseInt(data[i].ts1);
          tot_ts = tot_ts + parseInt(data[i].ts);
          html += '<tr>'+
          '<td style="text-align: center; vertical-align: middle;">'+data[i].sumber_biaya+'</td>'+
          '<td style="text-align: center; vertical-align: middle;">'+data[i].ts2+'</td>'+
          '<td style="text-align: center; vertical-align: middle;">'+data[i].ts1+'</td>'+
          '<td style="text-align: center; vertical-align: middle;">'+data[i].ts+'</td>'+
          '<td style="text-align: center; vertical-align: middle;">'+jml+'</td>'+
          '</tr>';
        }
        grand_total = tot_ts2 + tot_ts1 + tot_ts;
        html += '<tr>'+
          '<th style="text-align: center;">Jumlah</th>'+
          '<th style="text-align: center; vertical-align: middle;">'+tot_ts2+'</th>'+
          '<th style="text-align: center; vertical-align: middle;">'+tot_ts1+'</th>'+
          '<th style="text-align: center; vertical-align: middle;">'+tot_ts+'</th>'+
          '<th style="text-align: center; vertical-align: middle;">'+grand_total+'</th>'+
        '</tr>';
        $('#tampil_data').html(html);
      }
    });
  }

  //fill data record
  $('#tampil_data').on('click','.item_edit',function(){
    var seq_id = $(this).data('seq_id');
    var nama = $(this).data('nama');
    var bidang_keahlian = $(this).data('bidang_keahlian');
    var bukti_pendukung = $(this).data('bukti_pendukung');
    var tingkat = $(this).data('tingkat');
    var tahun = $(this).data('tahun');

    $('#Modal_Edit').modal('show');
    $('[name="seq_id"]').val(seq_id);
    $('[name="nama_edit"]').val(nama);
    $('[name="bidang_keahlian_edit"]').val(bidang_keahlian);
    $('[name="bukti_pendukung_edit"]').val(bukti_pendukung);
    $('[name="tingkat_edit"]').val(tingkat);
    $('[name="tahun_edit"]').val(tahun);
    $('[name="nama_edit"]').focus();
  });

});
</script>