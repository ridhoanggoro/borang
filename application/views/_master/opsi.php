<div class="card shadow">
<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
    <h6 class="m-0 font-weight-bold text-primary"><?php echo $title; ?></h6>
    <div class="float-right">
      <a href="javascript:void(0);" onclick="return e_opsi('0','<?php echo encode_url('jenis_publikasi'); ?>');" class="btn btn-primary btn-icon-split btn-sm">
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
          <tr>
            <th style="text-align: center; vertical-align: middle;">No</th>
            <th style="text-align: center; vertical-align: middle;">ID Opsi</th>
            <th style="text-align: center; vertical-align: middle;">Deskripsi Opsi</th>
            <th style="text-align: center; vertical-align: middle;">Modul</th>
            <th tyle="text-align: center; vertical-align: middle;">Menu</th>
          </tr>
        </tr>
      </thead>
      <tbody id="tampil_data">       
        <?php $no = 1; 
        $tbl = encode_url('jenis_publikasi');
        $retUrl = '';
        if (!empty($data)) {
        foreach ($data as $row) { ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $row->id; ?></td>
            <td><?php echo word_limiter($row->nama,100); ?></td>
            <td><?php echo $row->modul; ?></td>
            <td style="text-align:center;">
                <a href="javascript:void(0);" onclick="return e_opsi('<?php echo $row->seq_id; ?>','<?php echo $tbl; ?>');" class="btn btn-info btn-circle btn-sm item_edit" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fas fa-search"></i></a>
                <a href="javascript:void(0);" onclick="return hapus('<?php echo $tbl; ?>',<?php echo $row->seq_id; ?>,'<?php echo $retUrl; ?>');" class="btn btn-danger btn-circle btn-sm item_delete" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fas fa-trash"></i></a>
            </td>
        </tr>
        <?php } } ?> 
      </tbody>
    </table>
    </div>
  </div>
</div>

<!-- MODAL ADD -->
<form class="was-validated" id="frmAdd" onsubmit="return simpan(this, 'tbl_opsi_save')">
  <div class="modal fade" id="Modal_Add" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
      <h5 class="modal-title" id="addModalLabel" name="addModalLabel">Tambah Data</h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
      </div>
      <div class="modal-body">
        <div class="form-row">
          <div class="form-group col-md-12">
            <label for="id">ID Pilihan</label>
            <input type="text" class="form-control" id="id" name="id" required>
            <div class="invalid-feedback">Field wajib diisi</div>
          </div>
        </div>
        
        <div class="form-row">
          <div class="form-group col-md-12">
            <label for="nama">Deskripsi</label>
            <textarea class="form-control" rows="5" id="nama" name="nama" required></textarea>
            <div class="invalid-feedback">Field wajib diisi</div>
          </div>
        </div>

        <div class="form-row">
          <div class="form-group col-md-12">
            <label for="modul">Modul</label>
            <select id="modul" name="modul" class="custom-select" required>
                    <option value="" selected>Pilih...</option>
                    <option value="publikasi_ilmiah">Publikasi Ilmiah</option>
                    <option value="pagelaran_ilmiah">Pegelaran Ilmiah</option>
                    <option value="dana">Dana</option>
                    <option value="kepuasan_mahasiswa">Kepuasan Mahasiswa</option>
                    <option value="kepuasan_pengguna_lulusan">Kepuasan Pengguna Lulusan</option>
                    <option value="jurnal">Jurnal</option>
            </select>
            <div class="invalid-feedback">Pilih dari daftar yang tersedia</div>
          </div>
        </div>

        <input type="hidden" class="form-control" id="doc_edit" name="doc_edit" readonly>
        <input type="hidden" class="form-control" id="seq_id" name="seq_id" readonly>
        
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
  $('#mydata').dataTable();

});
</script>