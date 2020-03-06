<div class="card shadow">
  <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
    <h6 class="m-0 font-weight-bold text-primary"><?php echo $title; ?></h6>
    <form action="<?php echo site_url('dana/auth');?>" method="post">
    <div class="float-right">
      <button type="submit" class="btn btn-primary"><i class="fa fa-check"></i> Simpan Data</button>
    </div>
  </div>
  <div class="card-body">
    <div class="table">    
    <table class="table table-hover table-bordered" id="mydata">
      <thead>
        <tr>
          <tr>
            <th rowspan="2" style="width: 5%; text-align: center; vertical-align: middle;">No</th>
            <th rowspan="2" style="width: 50%; text-align: center; vertical-align: middle;">Jenis Penggunaan</th>
            <th colspan="4" style="width: 45%; text-align: center; vertical-align: middle;">Program Studi (Rupiah)</th>
          </tr>
          <tr>
            <th style="width: 15%; text-align: center; vertical-align: middle;">TS-2</th>
            <th style="width: 15%; text-align: center; vertical-align: middle;">TS-1</th>
            <th style="width: 15%; text-align: center; vertical-align: middle;">TS</th>
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
            <td><input type="number" min="0" max="100" class="form-control" id="cukup" name="cukup" required></td>
            <td><input type="number" min="0" max="100" class="form-control" id="cukup" name="cukup" required></td>
            <td><input type="number" min="0" max="100" class="form-control" id="cukup" name="cukup" required></td>
        </tr>
        <tr>
            <td></td>
            <td>b. Biaya Tenaga Kependidikan (Gaji, Honor)</td>
            <td><input type="number" min="0" max="100" class="form-control" id="cukup" name="cukup" required></td>
            <td><input type="number" min="0" max="100" class="form-control" id="cukup" name="cukup" required></td>
            <td><input type="number" min="0" max="100" class="form-control" id="cukup" name="cukup" required></td>
        </tr>
        <tr>
            <td></td>
            <td>c. Biaya Operasional Pembelajaran (Bahan dan Peralatan Habis Pakai)</td>
            <td><input type="number" min="0" max="100" class="form-control" id="cukup" name="cukup" required></td>
            <td><input type="number" min="0" max="100" class="form-control" id="cukup" name="cukup" required></td>
            <td><input type="number" min="0" max="100" class="form-control" id="cukup" name="cukup" required></td>
        </tr>
        <tr>
            <td></td>
            <td>d. Biaya Operasional Tidak Langsung (Listrik, Gas, Air, Pemeliharaan Gedung, Pemeliharaan Sarana, Uang Lembur, Telekomunikasi, Konsumsi, Transport Lokal, Pajak, Asuransi, dll.)</td>
            <td><input type="number" min="0" max="100" class="form-control" id="cukup" name="cukup" required></td>
            <td><input type="number" min="0" max="100" class="form-control" id="cukup" name="cukup" required></td>
            <td><input type="number" min="0" max="100" class="form-control" id="cukup" name="cukup" required></td>
        </tr>
        <tr>
            <td>2</td>
            <td>Biaya operasional kemahasiswaan (penalaran, minat, bakat, dan kesejahteraan).</td>
            <td><input type="number" min="0" max="100" class="form-control" id="cukup" name="cukup" required></td>
            <td><input type="number" min="0" max="100" class="form-control" id="cukup" name="cukup" required></td>
            <td><input type="number" min="0" max="100" class="form-control" id="cukup" name="cukup" required></td>
        </tr>
        <tr>
            <td>3</td>
            <td>Biaya Penelitian</td>
            <td><input type="number" min="0" max="100" class="form-control" id="cukup" name="cukup" required></td>
            <td><input type="number" min="0" max="100" class="form-control" id="cukup" name="cukup" required></td>
            <td><input type="number" min="0" max="100" class="form-control" id="cukup" name="cukup" required></td>
        </tr>
        <tr>
            <td>4</td>
            <td>Biaya PkM</td>
            <td><input type="number" min="0" max="100" class="form-control" id="cukup" name="cukup" required></td>
            <td><input type="number" min="0" max="100" class="form-control" id="cukup" name="cukup" required></td>
            <td><input type="number" min="0" max="100" class="form-control" id="cukup" name="cukup" required></td>
        </tr>
        <tr>
            <td>5</td>
            <td>Biaya Investasi SDM</td>
            <td><input type="number" min="0" max="100" class="form-control" id="cukup" name="cukup" required></td>
            <td><input type="number" min="0" max="100" class="form-control" id="cukup" name="cukup" required></td>
            <td><input type="number" min="0" max="100" class="form-control" id="cukup" name="cukup" required></td>
        </tr>
        <tr>
            <td>6</td>
            <td>Biaya Investasi Sarana</td>
            <td><input type="number" min="0" max="100" class="form-control" id="cukup" name="cukup" required></td>
            <td><input type="number" min="0" max="100" class="form-control" id="cukup" name="cukup" required></td>
            <td><input type="number" min="0" max="100" class="form-control" id="cukup" name="cukup" required></td>
        </tr>
        <tr>
            <td>7</td>
            <td>Biaya Investasi Prasarana</td>
            <td><input type="number" min="0" max="100" class="form-control" id="cukup" name="cukup" required></td>
            <td><input type="number" min="0" max="100" class="form-control" id="cukup" name="cukup" required></td>
            <td><input type="number" min="0" max="100" class="form-control" id="cukup" name="cukup" required></td>
        </tr>
      </tbody>
    </table>
    </form>
    </div>
  </div>
</div>
