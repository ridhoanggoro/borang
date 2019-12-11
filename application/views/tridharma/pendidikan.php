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
    </div>
  </div>
  <div class="card-body">
    <div class="table-responsive">
    <table class="table table-striped table-bordered" id="mydata" width="100%" cellspacing="0">
    <thead>
      <tr>
          <th rowspan="2">Lembaga Mitra</th>
          <th colspan="3">Tingkat</th>
          <th rowspan="2">Judul Kegiatan Kerjasama</th>
          <th rowspan="2">Manfaat bagi PS yang Diakreditasi</th>
          <th rowspan="2">Waktu dan Durasi</th>
          <th rowspan="2">Bukti Kerjasama</th>
          <th rowspan="2">Tahun Berakhirnya Kerjasama</th>
          <th rowspan="2" style="text-align: center;">Menu</th>
      </tr>
      <tr>
        <th>Internasional</th>
        <th>Nasional</th>
        <th>Wilayah/Lokal</th>
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
                url   : '<?php echo site_url('tridharma/pendidikan_data_list')?>',
                async : false,
                dataType : 'json',
                success : function(data){
                    var html = '';
                    var i;
                    for(i=0; i<data.length; i++){
                        html += '<tr>'+
                                '<td>'+data[i].lembaga_mitra+'</td>'+
                                '<td>'+data[i].internasional+'</td>'+
                                '<td>'+data[i].nasional+'</td>'+
                                '<td>'+data[i].lokal+'</td>'+
                                '<td>'+data[i].judul_kegiatan+'</td>'+
                                '<td>'+data[i].manfaat_bagi_ps+'</td>'+
                                '<td>'+data[i].durasi+'</td>'+
                                '<td>'+data[i].bukti_kerjasama+'</td>'+
                                '<td>'+data[i].tahun_berakhir+'</td>'+
                                '<td style="text-align:right;">'+
                                    '<a href="javascript:void(0);" class="btn btn-info btn-circle btn-sm item_edit" data-toggle="tooltip" data-placement="top" title="Edit" data-seq_id="'+data[i].seq_id+'" data-kd_matkul="'+data[i].kd_matkul+'" data-nama_matkul="'+data[i].nama_matkul+'"data-sks="'+data[i].sks+'"data-prodi="'+data[i].prodi+'"><i class="fas fa-search"></i></a>'+' '+
                                    '<a href="javascript:void(0);" class="btn btn-danger btn-circle btn-sm item_delete" data-toggle="tooltip" data-placement="top" title="Delete" data-seq_id="'+data[i].seq_id+'"><i class="fas fa-trash"></i></a>'+
                                '</td>'+
                                '</tr>';
                    }
                    $('#tampil_data').html(html);
                }
 
            });
        }

    });
 
</script>