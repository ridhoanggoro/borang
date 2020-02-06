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
      <a href="<?php echo base_url('export/export_excel/'.encode_url('3b5-2'));?>" class="btn btn-success btn-icon-split btn-sm">
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
            <th>No</th>
            <th>Luaran Penelitian dan PkM</th>
            <th>Tahun (YYYY)</th>
            <th>Keterangan</th>
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
            <label for="mitra">Upload Excel File, Klik <a href="<?php echo base_url('assets/upload/3.b.7-2.hki_hak_cipta.xlsx');?>" data-toggle="tooltip" data-placement="top" title="Download Template">disini</a> untuk unduh file template</label>
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
          <label for="luaran_penelitian">Luaran Penelitian dan PkM</label>
           <select id="luaran_penelitian" name="luaran_penelitian" class="custom-select" data-placeholder="Silahkan pilih..." required>
                <option value=""></option>
                <option value="Hak Cipta">Hak Cipta</option>
                <option value="Desain Produk Industri">Desain Produk Industri</option>
            </select>
          </div>
          <div class="form-group col-md-6">
            <label for="th_perolehan">Tahun Perolehan (YYYY)</label>
            <input type="number" min='1999' max='9999' class="form-control" id="th_perolehan" name="th_perolehan" required>
            <div id="id_check_result" class="help-block with-errors"></div>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-12">
            <label for="keterangan">Keterangan</label>
            <textarea class="form-control" rows="4" id="keterangan" name="keterangan" required></textarea>
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
<form class="was-validated" id="submit">
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
        <input type="text" hidden="" class="form-control" id="seq_id" name="seq_id">
        <div class="form-row">
          <div class="form-group col-md-6">
          <label for="luaran_penelitian_edit">Luaran Penelitian dan PkM</label>
           <select id="luaran_penelitian_edit" name="luaran_penelitian_edit" class="custom-select" data-placeholder="Silahkan pilih..." required>
                <option value=""></option>
                <option value="Hak Cipta">Hak Cipta</option>
                <option value="Desain Produk Industri">Desain Produk Industri</option>
            </select>
          </div>
          <div class="form-group col-md-6">
            <label for="th_perolehan_edit">Tahun Perolehan (YYYY)</label>
            <input type="number" min='1999' max='9999' class="form-control" id="th_perolehan_edit" name="th_perolehan_edit" required>
            <div id="id_check_result" class="help-block with-errors"></div>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-12">
            <label for="keterangan_edit">Keterangan</label>
            <textarea class="form-control" rows="4" id="keterangan_edit" name="keterangan_edit" required></textarea>
            <div id="id_check_result" class="help-block with-errors"></div>
          </div>
        </div>
        <input type="hidden" class="form-control" id="doc_edit" name="doc_edit" readonly>
        <div class="form-row">
          <label for="doc_edit">Dokumen </label><div id="status"></div>
          <div class="form-group col-md-12">
            <input type="file" class="custom-file-input" id="customFile" name="file_edit">
            <label class="custom-file-label" for="customFile">Pilih file (pastikan file yang di upload dengan format PDF)</label>
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
      url   : '<?php echo site_url('dosen/hki_hak_cipta_data_list')?>',
      async : false,
      dataType : 'json',
      success : function(data){
        var html = '';
        var i;
        for(i=0; i<data.length; i++){
          j = i + 1;
          html += '<tr>'+
          '<td>'+j+'</td>'+
          '<td>'+data[i].luaran_penelitian+'</td>'+
          '<td>'+data[i].th_perolehan+'</td>'+
          '<td>'+data[i].keterangan+'</td>'+
          '<td style="text-align:right;">'+
              '<a href="javascript:void(0);" class="btn btn-info btn-circle btn-sm item_edit" data-toggle="tooltip" data-placement="top" title="Edit" data-seq_id="'+data[i].seq_id+'" data-luaran_penelitian="'+data[i].luaran_penelitian+'" data-th_perolehan="'+data[i].th_perolehan+'" data-keterangan="'+data[i].keterangan+'" data-doc="'+data[i].doc+'"><i class="fas fa-search"></i></a>'+' '+
              '<a href="<?php echo site_url('assets/document/')?>'+data[i].doc+'" class="btn btn-primary btn-circle btn-sm" data-toggle="tooltip" data-placement="top" title="Download Dokumen"><i class="fas fa-download"></i></a>'+
              '<a href="javascript:void(0);" class="btn btn-danger btn-circle btn-sm item_delete" data-toggle="tooltip" data-placement="top" title="Delete" data-seq_id="'+data[i].seq_id+'"><i class="fas fa-trash"></i></a>'+
          '</td>'+
          '</tr>';
        }
        $('#tampil_data').html(html);
      }
    });
  }

  // upload data
  $('#upload').submit(function(e){
    e.preventDefault();
      $.ajax({
        url:'<?php echo site_url('upload/excel_upload/'.encode_url('3.b.7-2'))?>',
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

  //Save Data
  $('#btn_save').on('click',function(){
    var luaran_penelitian = $('#luaran_penelitian').val();
    var th_perolehan = $('#th_perolehan').val();
    var keterangan = $('#keterangan').val();

    $.ajax({
      type : "POST",
      url  : "<?php echo site_url('dosen/hki_hak_cipta_add')?>",
      dataType : "JSON",
      data : {luaran_penelitian:luaran_penelitian, th_perolehan:th_perolehan, keterangan:keterangan},
      success: function(data){
        $('[name="luaran_penelitian"]').val("");
        $('[name="th_perolehan"]').val("");
        $('[name="keterangan"]').val("");
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
    var seq_id = $(this).data('seq_id');
    var luaran_penelitian = $(this).data('luaran_penelitian');
    var th_perolehan = $(this).data('th_perolehan');
    var keterangan = $(this).data('keterangan');
    var doc = $(this).data('doc');
    if (doc) { $('#status').html('<span class="badge badge-success">Dokumen telah diunggah</span>');
    } else { $('#status').html('<span class="badge badge-danger">Dokumen belum diunggah</span>'); }

    $('#Modal_Edit').modal('show');
    $('[name="seq_id"]').val(seq_id);
    $('[name="luaran_penelitian_edit"]').val(luaran_penelitian);
    $('[name="th_perolehan_edit"]').val(th_perolehan);
    $('[name="keterangan_edit"]').val(keterangan);
    $('[name="doc_edit"]').val(doc);
  });

  // Edit data
  $('#submit').submit(function(e){
    e.preventDefault();
    $.ajax({
      url:'<?php echo site_url('dosen/hki_hak_cipta_edit')?>',
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
          url  : "<?php echo site_url('dosen/hki_hak_cipta_delete')?>",
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
