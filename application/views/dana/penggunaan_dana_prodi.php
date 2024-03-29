<div class="card shadow">
  <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
    <h6 class="m-0 font-weight-bold text-primary"><?php echo $title; ?></h6>
    <form action="<?php echo site_url('dana/simpan_penggunaan_dana_prodi');?>" method="post">
    <a href="<?php echo base_url('dana/penggunaan_dana');?>" class="btn btn-danger btn-icon-split btn-sm">
      <span class="icon text-white-50">
        <i class="fas fa-arrow-circle-left"></i>
      </span>
      <span class="text">Kembali Ke Halaman Sebelumnya</span>
    </a>
    <button type="submit" class="btn btn-primary btn-icon-split btn-sm"><span class="icon text-white-50">
          <i class="fas fa-save"></i>
        </span>
        <span class="text">Simpan Data</span>
    </button>
  </div>
  <div class="card-body">
    <input type="hidden" class="form-control" id="ts" name="ts" value="<?php echo $ts; ?>">
    <input type="hidden" class="form-control" id="ts1" name="ts1" value="<?php echo $ts1; ?>">
    <input type="hidden" class="form-control" id="ts2" name="ts2" value="<?php echo $ts2; ?>">
    <div class="table">    
    <table class="table table-hover table-bordered table-sm" id="mydata">
      <thead class="thead">
        <tr>
          <tr>
            <th rowspan="2" style="width: 5%; text-align: center; vertical-align: middle;">No</th>
            <th rowspan="2" style="width: 50%; text-align: center; vertical-align: middle;">Jenis Penggunaan</th>
            <th colspan="3" style="width: 45%; text-align: center; vertical-align: middle;">Program Studi (Rupiah)</th>
          </tr>
          <tr>
            <th style="width: 15%; text-align: center; vertical-align: middle;">TS-2 <?php echo $ts2; ?></th>
            <th style="width: 15%; text-align: center; vertical-align: middle;">TS-1 <?php echo $ts1; ?></th>
            <th style="width: 15%; text-align: center; vertical-align: middle;">TS <?php echo $ts; ?></th>
          </tr>
        </tr>
      </thead>
      <tbody id="tampil_data">
        <tr>
            <td>1</td>
            <td>Biaya Operasional Pendidikan</td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td>a. Biaya Dosen (Gaji, Honor)</td>
            <td><input type="text" min="0" class="form-control currency" id="a_biaya_dosen_ts2" name="a_biaya_dosen_ts2" value="<?php echo $a_biaya_dosen_ts2; ?>" required></td>
            <td><input type="text" min="0" class="form-control currency" id="a_biaya_dosen_ts1" name="a_biaya_dosen_ts1" value="<?php echo $a_biaya_dosen_ts1; ?>" required></td>
            <td><input type="text" min="0" class="form-control currency" id="a_biaya_dosen_ts" name="a_biaya_dosen_ts" value="<?php echo $a_biaya_dosen_ts; ?>" required></td>
        </tr>
        <tr>
            <td></td>
            <td>b. Biaya Tenaga Kependidikan (Gaji, Honor)</td>
            <td><input type="text" min="0" class="form-control currency" id="a_biaya_tenaga_kependidikan_ts2" name="a_biaya_tenaga_kependidikan_ts2" value="<?php echo $a_biaya_tenaga_kependidikan_ts2; ?>" required></td>
            <td><input type="text" min="0" class="form-control currency" id="a_biaya_tenaga_kependidikan_ts1" name="a_biaya_tenaga_kependidikan_ts1" value="<?php echo $a_biaya_tenaga_kependidikan_ts1; ?>" required></td>
            <td><input type="text" min="0" class="form-control currency" id="a_biaya_tenaga_kependidikan_ts" name="a_biaya_tenaga_kependidikan_ts" value="<?php echo $a_biaya_tenaga_kependidikan_ts; ?>" required></td>
        </tr>
        <tr>
            <td></td>
            <td>c. Biaya Operasional Pembelajaran (Bahan dan Peralatan Habis Pakai)</td>
            <td><input type="text" min="0" class="form-control currency" id="a_biaya_operasional_pembelajaran_ts2" name="a_biaya_operasional_pembelajaran_ts2" value="<?php echo $a_biaya_operasional_pembelajaran_ts2; ?>" required></td>
            <td><input type="text" min="0" class="form-control currency" id="a_biaya_operasional_pembelajaran_ts1" name="a_biaya_operasional_pembelajaran_ts1" value="<?php echo $a_biaya_operasional_pembelajaran_ts1; ?>" required></td>
            <td><input type="text" min="0" class="form-control currency" id="a_biaya_operasional_pembelajaran_ts" name="a_biaya_operasional_pembelajaran_ts" value="<?php echo $a_biaya_operasional_pembelajaran_ts; ?>" required></td>     
        </tr>
        <tr>
            <td></td>
            <td>d. Biaya Operasional Tidak Langsung (Listrik, Gas, Air, Pemeliharaan Gedung, Pemeliharaan Sarana, Uang Lembur, Telekomunikasi, Konsumsi, Transport Lokal, Pajak, Asuransi, dll.)</td>
            <td><input type="text" min="0" class="form-control currency" id="a_biaya_operasional_tidak_langsung_ts2" name="a_biaya_operasional_tidak_langsung_ts2" value="<?php echo $a_biaya_operasional_tidak_langsung_ts2; ?>" required></td>
            <td><input type="text" min="0" class="form-control currency" id="a_biaya_operasional_tidak_langsung_ts1" name="a_biaya_operasional_tidak_langsung_ts1" value="<?php echo $a_biaya_operasional_tidak_langsung_ts1; ?>" required></td>
            <td><input type="text" min="0" class="form-control currency" id="a_biaya_operasional_tidak_langsung_ts" name="a_biaya_operasional_tidak_langsung_ts" value="<?php echo $a_biaya_operasional_tidak_langsung_ts; ?>" required></td>  
        </tr>
        <tr>
            <td>2</td>
            <td>Biaya operasional kemahasiswaan (penalaran, minat, bakat, dan kesejahteraan).</td>
            <td><input type="text" min="0" class="form-control currency" id="a_biaya_operasional_kemahasiswaan_ts2" name="a_biaya_operasional_kemahasiswaan_ts2" value="<?php echo $a_biaya_operasional_kemahasiswaan_ts2; ?>" required></td>
            <td><input type="text" min="0" class="form-control currency" id="a_biaya_operasional_kemahasiswaan_ts1" name="a_biaya_operasional_kemahasiswaan_ts1" value="<?php echo $a_biaya_operasional_kemahasiswaan_ts1; ?>" required></td>
            <td><input type="text" min="0" class="form-control currency" id="a_biaya_operasional_kemahasiswaan_ts" name="a_biaya_operasional_kemahasiswaan_ts" value="<?php echo $a_biaya_operasional_kemahasiswaan_ts; ?>" required></td>
           
        </tr>
        <tr>
            <td>3</td>
            <td>Biaya Penelitian</td>
            <td><input type="text" min="0" class="form-control currency" id="a_biaya_penelitian_ts2" name="a_biaya_penelitian_ts2" value="<?php echo $a_biaya_penelitian_ts2; ?>" required></td>
            <td><input type="text" min="0" class="form-control currency" id="a_biaya_penelitian_ts1" name="a_biaya_penelitian_ts1" value="<?php echo $a_biaya_penelitian_ts1; ?>" required></td>
            <td><input type="text" min="0" class="form-control currency" id="a_biaya_penelitian_ts" name="a_biaya_penelitian_ts" value="<?php echo $a_biaya_penelitian_ts; ?>" required></td>
            
        </tr>
        <tr>
            <td>4</td>
            <td>Biaya PkM</td>
            <td><input type="text" min="0" class="form-control currency" id="a_biaya_pkm_ts2" name="a_biaya_pkm_ts2" value="<?php echo $a_biaya_pkm_ts2; ?>" required></td>
            <td><input type="text" min="0" class="form-control currency" id="a_biaya_pkm_ts1" name="a_biaya_pkm_ts1" value="<?php echo $a_biaya_pkm_ts1; ?>" required></td>
            <td><input type="text" min="0" class="form-control currency" id="a_biaya_pkm_ts" name="a_biaya_pkm_ts" value="<?php echo $a_biaya_pkm_ts; ?>" required></td>
            
        </tr>
        <tr>
            <td>5</td>
            <td>Biaya Investasi SDM</td>
            <td><input type="text" min="0" class="form-control currency" id="a_biaya_investasi_sdm_ts2" name="a_biaya_investasi_sdm_ts2" value="<?php echo $a_biaya_investasi_sdm_ts2; ?>" required></td>
            <td><input type="text" min="0" class="form-control currency" id="a_biaya_investasi_sdm_ts1" name="a_biaya_investasi_sdm_ts1" value="<?php echo $a_biaya_investasi_sdm_ts1; ?>" required></td>
            <td><input type="text" min="0" class="form-control currency" id="a_biaya_investasi_sdm_ts" name="a_biaya_investasi_sdm_ts" value="<?php echo $a_biaya_investasi_sdm_ts; ?>" required></td>  
        </tr>
        <tr>
            <td>6</td>
            <td>Biaya Investasi Sarana</td>
            <td><input type="text" min="0" class="form-control currency" id="a_biaya_investasi_sarana_ts2" name="a_biaya_investasi_sarana_ts2" value="<?php echo $a_biaya_investasi_sarana_ts2; ?>" required></td>
            <td><input type="text" min="0" class="form-control currency" id="a_biaya_investasi_sarana_ts1" name="a_biaya_investasi_sarana_ts1" value="<?php echo $a_biaya_investasi_sarana_ts1; ?>" required></td>
            <td><input type="text" min="0" class="form-control currency" id="a_biaya_investasi_sarana_ts" name="a_biaya_investasi_sarana_ts" value="<?php echo $a_biaya_investasi_sarana_ts; ?>" required></td>
        </tr>
        <tr>
            <td>7</td>
            <td>Biaya Investasi Prasarana</td>
            <td><input type="text" min="0" class="form-control currency" id="a_biaya_investasi_prasarana_ts2" name="a_biaya_investasi_prasarana_ts2" value="<?php echo $a_biaya_investasi_prasarana_ts2; ?>" required></td>
            <td><input type="text" min="0" class="form-control currency" id="a_biaya_investasi_prasarana_ts1" name="a_biaya_investasi_prasarana_ts1" value="<?php echo $a_biaya_investasi_prasarana_ts1; ?>" required></td>
            <td><input type="text" min="0" class="form-control currency" id="a_biaya_investasi_prasarana_ts" name="a_biaya_investasi_prasarana_ts" value="<?php echo $a_biaya_investasi_prasarana_ts; ?>" required></td>
        </tr>
      </tbody>
    </table>
    </form>
    </div>
  </div>
</div>
