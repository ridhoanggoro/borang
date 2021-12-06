<div class="card shadow">
  <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
    <h6 class="m-0 font-weight-bold text-primary"><?php echo $title; ?></h6>
    <div class="float-right">
      <a href="javascript:void(0);" onclick="return e_ts('0','<?php echo encode_url('ts'); ?>');" class="btn btn-primary btn-icon-split btn-sm">
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
          <th>No</th>
          <th>Nama Program Studi</th>
          <th>Nama TS</th>
          <th>Tahun TS</th>
          <th style="text-align: center;">Menu</th>
        </tr>
      </thead>
      <tbody id="tampil_data">
        
        <?php $no = 1; 
        $tbl = encode_url('ts');
        $retUrl = '';
        if (!empty($data)) {
        foreach ($data as $row) { ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $row->prodi; ?></td>
            <td><?php echo $row->nama_ts; ?></td>
            <td><?php echo $row->tahun; ?></td>
            <td style="text-align:center;">
                    <a href="javascript:void(0);" onclick="return e_ts('<?php echo $row->seq_id; ?>','<?php echo $tbl; ?>');" class="btn btn-info btn-circle btn-sm item_edit" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fas fa-search"></i></a>
                    <a href="javascript:void(0);" onclick="return hapus('<?php echo $tbl; ?>',<?php echo $row->seq_id; ?>,'<?php echo $retUrl; ?>');" class="btn btn-danger btn-circle btn-sm item_delete" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fas fa-trash"></i></a>
                </td>
        </tr>
        <?php } } ?> 
      </tbody>
    </table>
    </div>
  </div>
</div>

<!-- MODAL UPLOAD -->
<form class="form-horizontal" id="upload">
  <div class="modal fade" id="Modal_Upload" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
            <label for="mitra">Upload Excel File, Klik <a href="<?php echo base_url('assets/upload/1.1.tridarma_pendidikan.xlsx');?>" data-toggle="tooltip" data-placement="top" title="Download Template">disini</a> untuk unduh file template</label>
            <input type="file" id="file_upload" name="file_upload" required>
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
<form class="was-validated" id="frmAdd" onsubmit="return simpan(this, 'tbl_ts_save')">
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
          <div class="form-group col-md-6">
            <label for="prodi">Nama Program Studi</label>
            <input type="text" class="form-control" id="prodi" name="prodi" value="<?php echo strtoupper($this->session->userdata('nama')); ?>" readonly required>
            <div id="id_check_result" class="help-block with-errors"></div>
          </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="nama_ts">Nama TS</label>
                <select id="nama_ts" name="nama_ts" class="custom-select" required>
                    <option value="" selected>Pilih...</option>
                    <option value="TS">TS</option>
                    <option value="TS-1">TS-1</option>
                    <option value="TS-2">TS-2</option>
                    <option value="TS-3">TS-3</option>
                    <option value="TS-4">TS-4</option>
                    <option value="TS-5">TS-5</option>
                    <option value="TS-6">TS-6</option>
                    <option value="TS-7">TS-7</option>
                    <option value="TS-8">TS-8</option>
                </select>
                <div class="invalid-feedback">Pilih dari daftar yang tersedia</div>
            </div>
            <div class="form-group col-md-6">
                <label for="tahun">Tahun TS (YYYY)</label>
                <input type="number" min='2010' max='9999' class="form-control" id="tahun" name="tahun" required>
                <div class="invalid-feedback">Field wajib diisi</div>
            </div>
        </div>

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