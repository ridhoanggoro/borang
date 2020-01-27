<div class="card shadow">
  <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
    <h6 class="m-0 font-weight-bold text-primary"><?php echo $title; ?></h6>
    <div class="float-right">
      <a href="javascript:void(0);" data-toggle="modal" data-target="#Modal_Upload" class="btn btn-primary btn-icon-split btn-sm">
        <span class="icon text-white-50">
          <i class="fas fa-upload"></i>
        </span>
        <span class="text">Upload Data</span>
      </a>
      <a href="<?php echo base_url('export/export_excel/'.encode_url('3b4-1'));?>" class="btn btn-success btn-icon-split btn-sm">
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
          <th rowspan="2" style="text-align: center; vertical-align: middle;">Jenis Publikasi</th>
          <th colspan="3" style="text-align: center; vertical-align: middle;">Jumlah Judul</th>
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
            <label for="mitra">Upload Excel File, Klik <a href="<?php echo base_url('assets/upload/3.b.4-1.publikasi_ilmiah.xlsx');?>" data-toggle="tooltip" data-placement="top" title="Download Template">disini</a> untuk unduh file template</label>
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
      url   : '<?php echo site_url('dosen/publikasi_ilmiah_dtps_data_list')?>',
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
          '<td style="text-align: center; vertical-align: middle;">'+data[i].nama+'</td>'+
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

  // upload data
  $('#upload').submit(function(e){
    e.preventDefault();
      $.ajax({
        url:'<?php echo site_url('upload/excel_upload/'.encode_url('3.b.4-1'))?>',
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

});
</script>
