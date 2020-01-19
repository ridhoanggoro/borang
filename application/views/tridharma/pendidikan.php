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
            <th>Lembaga Mitra</th>
            <th>Tingkat</th>
            <th>Judul Kegiatan Kerjasama</th>
            <th>Manfaat bagi PS yang Diakreditasi</th>
            <th>Waktu dan Durasi</th>
            <th>Bukti Kerjasama</th>
            <th>Tahun Berakhirnya Kerjasama</th>
            <th style="text-align: center;">Menu</th>
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
            <label for="mitra">Upload Excel File, Klik <a href="<?php echo base_url('assets/upload/1-1.xlsx');?>" data-toggle="tooltip" data-placement="top" title="Download Template">disini</a> untuk unduh file template</label>
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
<form class="form-horizontal" id="submit">
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
            <label for="mitra_edit">Lembaga Mitra</label>
            <input type="text" class="form-control" id="mitra_edit" name="mitra_edit" required>
            <div id="id_check_result" class="help-block with-errors"></div>
          </div>
          <div class="form-group col-md-6">
          <label for="tingkat_edit">Tingkat</label>
           <select id="tingkat_edit" name="tingkat_edit" class="custom-select" data-placeholder="Please select..." required>
                <option value="Internasional">Internasional</option>
                <option value="Nasional">Nasional</option>
                <option value="Lokal">Wilayah / Lokal</option>
            </select>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-12">
            <label for="judul_kegiatan_edit">Judul Kegiatan Kerjasama</label>
            <input type="text" class="form-control" id="judul_kegiatan_edit" name="judul_kegiatan_edit" required>
            <div id="id_check_result" class="help-block with-errors"></div>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-12">
            <label for="manfaat_bagi_ps_edit">Manfaat bagi PS yang Diakreditasi</label>
            <textarea class="form-control" id="manfaat_bagi_ps_edit" name="manfaat_bagi_ps_edit" rows="3" required></textarea>
            <div id="id_check_result" class="help-block with-errors"></div>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="waktu_edit">Waktu dan Durasi</label>
            <input type="text" class="form-control" id="waktu_edit" name="waktu_edit" required>
            <div id="id_check_result" class="help-block with-errors"></div>
          </div>
          <div class="form-group col-md-6">
            <label for="tahun_berakhir_edit">Tahun Berakhirnya Kerjasama (YYYY)</label>
            <input type="number" class="form-control" id="tahun_berakhir_edit" name="tahun_berakhir_edit" min="1" max="9999" required>
            <div id="id_check_result" class="help-block with-errors"></div>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-12">
            <label for="bukti_edit">Bukti Kerjasama</label>
            <input type="text" class="form-control" id="bukti_edit" name="bukti_edit" required>
            <div id="id_check_result" class="help-block with-errors"></div>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-12">
            <label for="doc_edit">Dokumen</label>
            <input type="text" class="form-control" id="doc_edit" name="doc_edit" readonly>
            <input type="file" name="file_edit">
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
            <button type="submit" id="btn_delete" class="btn btn-danger btn-icon-split btn-sm"><span class="icon text-white-50"><i class="fas fa-save"></i></span>
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
              '<td>'+data[i].tingkat+'</td>'+
              '<td>'+data[i].judul_kegiatan+'</td>'+
              '<td>'+data[i].manfaat_bagi_ps+'</td>'+
              '<td>'+data[i].durasi+'</td>'+
              '<td>'+data[i].bukti_kerjasama+'</td>'+
              '<td>'+data[i].tahun_berakhir+'</td>'+
              '<td style="text-align:right;">'+
                  '<a href="javascript:void(0);" class="btn btn-info btn-circle btn-sm item_edit" data-toggle="tooltip" data-placement="top" title="Edit" data-seq_id="'+data[i].seq_id+'" data-lembaga_mitra="'+data[i].lembaga_mitra+'" data-tingkat="'+data[i].tingkat+'"data-judul_kegiatan="'+data[i].judul_kegiatan+'"data-manfaat_bagi_ps="'+data[i].manfaat_bagi_ps+'"data-durasi="'+data[i].durasi+'"data-bukti_kerjasama="'+data[i].bukti_kerjasama+'"data-tahun_berakhir="'+data[i].tahun_berakhir+'" data-doc="'+data[i].doc+'"><i class="fas fa-search"></i></a>'+' '+
                  '<a href="<?php echo site_url('assets/document/')?>'+data[i].doc+'" class="btn btn-primary btn-circle btn-sm" data-toggle="tooltip" data-placement="top" title="Download Dokumen"><i class="fas fa-download"></i></a>'+
                  '<a href="javascript:void(0);" class="btn btn-danger btn-circle btn-sm item_delete" data-toggle="tooltip" data-placement="top" title="Delete" data-seq_id="'+data[i].seq_id+'"><i class="fas fa-trash"></i></a>'+
              '</td>'+
              '</tr>';
            }
            $('#tampil_data').html(html);
          }
        });
      }

$('#tampil_data').on('click','.item_edit',function(){
    var seq_id          = $(this).data('seq_id');
    var lembaga_mitra   = $(this).data('lembaga_mitra');
    var tingkat         = $(this).data('tingkat');
    var judul_kegiatan  = $(this).data('judul_kegiatan');
    var manfaat_bagi_ps = $(this).data('manfaat_bagi_ps');
    var durasi          = $(this).data('durasi');
    var tahun_berakhir  = $(this).data('tahun_berakhir');
    var bukti           = $(this).data('bukti_kerjasama');
    var doc             = $(this).data('doc');

    $('#Modal_Edit').modal('show');
    $('[name="seq_id"]').val(seq_id);
    $('[name="mitra_edit"]').val(lembaga_mitra);
    $('[name="tingkat_edit"]').val(tingkat);
    $('[name="judul_kegiatan_edit"]').val(judul_kegiatan);
    $('[name="manfaat_bagi_ps_edit"]').val(manfaat_bagi_ps);
    $('[name="waktu_edit"]').val(durasi);
    $('[name="tahun_berakhir_edit"]').val(tahun_berakhir);
    $('[name="bukti_edit"]').val(bukti);
    $('[name="doc_edit"]').val(doc);
  });

  // Edit data
  $('#submit').submit(function(e){
      e.preventDefault();
           $.ajax({
               url:'<?php echo site_url('tridharma/pendidikan_edit')?>',
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

    // upload data
    $('#upload').submit(function(e){
        e.preventDefault();
             $.ajax({
                 url:'<?php echo site_url('tridharma/pendidikan_upload')?>',
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
