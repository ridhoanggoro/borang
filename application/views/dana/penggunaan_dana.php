<?php 
  $info = $this->session->flashdata('msg');
  if (!empty ($info)) {
    echo $info;
  }
?>
<div class="card shadow">
  <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
    <h6 class="m-0 font-weight-bold text-primary"><?php echo $title; ?></h6>
    <div class="float-right">
      <a href="<?php echo site_url('dana/add_dana/fakultas'); ?>" class="btn btn-primary btn-icon-split btn-sm">
        <span class="icon text-white-50">
          <i class="fas fa-folder-plus"></i>
        </span>
        <span class="text">Tambah Data Fakultas</span>
      </a>
      <a href="<?php echo site_url('dana/add_dana/prodi'); ?>" class="btn btn-primary btn-icon-split btn-sm">
        <span class="icon text-white-50">
          <i class="fas fa-folder-plus"></i>
        </span>
        <span class="text">Tambah Data Prodi</span>
      </a>
      <a href="<?php echo base_url('export/export_excel/'.encode_url('4'));?>" class="btn btn-success btn-icon-split btn-sm">
        <span class="icon text-white-50">
          <i class="fas fa-file-excel"></i>
        </span>
        <span class="text">Export Excel</span>
      </a>
    </div>
  </div>
  <div class="card-body">
    <div class="table-responsive">
    <table class="table table-hover table-bordered table-sm">
      <thead>
        <tr>
          <tr>
            <th rowspan="2" style="width: 5%; text-align: center; vertical-align: middle;">No</th>
            <th rowspan="2" style="width: 50%; text-align: center; vertical-align: middle;">Jenis Penggunaan</th>
            <th colspan="4" style="width: 20%; text-align: center; vertical-align: middle;">Program Studi (Rupiah)</th>
            <th colspan="4" style="width: 20%;text-align: center; vertical-align: middle;">Unit Pengelola Program Studi (Rupiah)</th>
          </tr>
          <tr>
            <th style="width: 15%; text-align: center; vertical-align: middle;">TS-2</th>
            <th style="width: 15%; text-align: center; vertical-align: middle;">TS-1</th>
            <th style="width: 15%; text-align: center; vertical-align: middle;">TS</th>
            <th style="width: 15%; text-align: center; vertical-align: middle;">Rata-Rata</th>
            <th style="width: 15%; text-align: center; vertical-align: middle;">TS-2</th>
            <th style="width: 15%; text-align: center; vertical-align: middle;">TS-1</th>
            <th style="width: 15%; text-align: center; vertical-align: middle;">TS</th>
            <th style="width: 15%; text-align: center; vertical-align: middle;">Rata-Rata</th>
          </tr>
        </tr>
      </thead>
      <tbody id="tampil_data">
      </tbody>
    </table>
    </div>
  </div>
</div>

<script type="text/javascript">
$(document).ready(function() {
  show_data();
  function show_data(){
  $.ajax({
    type  : "ajax",
    url   : '<?php echo site_url('dana/penggunaan_dana_data_list')?>',
    async : false,
    dataType : "json",
    success : function(data){
      var html = '';
      var jml_1_a_ts2, jml_1_a_ts1, jml_1_a_ts, avg_jml_a_1=0;
      var jml_1_b_ts2, jml_1_b_ts1, jml_1_b_ts, avg_jml_b_1=0;
      var avg_a_a = 0; var avg_a_b = 0;
      var avg_b_a = 0; var avg_b_b = 0;
      var avg_c_a = 0; var avg_c_b = 0;
      var avg_d_a = 0; var avg_d_b = 0;
      var avg_e_a = 0; var avg_e_b = 0;
      var avg_f_a, avg_f_b=0;
      var avg_g_a, avg_g_b=0;
      var jml_2_a_ts2, jml_2_a_ts1, jml_2_a_ts, avg_jml_a_2=0;
      var jml_2_b_ts2, jml_2_b_ts1, jml_2_b_ts, avg_jml_b_2=0;
      var avg_h_a, avg_h_b, avg_i_a, avg_i_b, avg_j_a, avg_j_b=0;
      var jml_3_a_ts2, jml_3_a_ts1, jml_3_a_ts, avg_jml_a_3=0;
      var jml_3_b_ts2, jml_3_b_ts1, jml_3_b_ts, avg_jml_b_3=0;
      avg_a_a = (parseFloat(data[0].a_biaya_dosen_ts2) + parseFloat(data[0].a_biaya_dosen_ts1) + parseFloat(data[0].a_biaya_dosen_ts))/3;
      avg_a_b = (parseFloat(data[0].b_biaya_dosen_ts2) + parseFloat(data[0].b_biaya_dosen_ts1) + parseFloat(data[0].b_biaya_dosen_ts))/3;
      avg_b_a = (parseFloat(data[0].a_biaya_tenaga_kependidikan_ts2) + parseFloat(data[0].a_biaya_tenaga_kependidikan_ts1) + parseFloat(data[0].a_biaya_tenaga_kependidikan_ts))/3;
      avg_b_b = (parseFloat(data[0].b_biaya_tenaga_kependidikan_ts2) + parseFloat(data[0].b_biaya_tenaga_kependidikan_ts1) + parseFloat(data[0].b_biaya_tenaga_kependidikan_ts))/3;
      avg_c_a = (parseFloat(data[0].a_biaya_operasional_pembelajaran_ts2) + parseFloat(data[0].a_biaya_operasional_pembelajaran_ts1) + parseFloat(data[0].a_biaya_operasional_pembelajaran_ts))/3;
      avg_c_b = (parseFloat(data[0].b_biaya_operasional_pembelajaran_ts2) + parseFloat(data[0].b_biaya_operasional_pembelajaran_ts1) + parseFloat(data[0].b_biaya_operasional_pembelajaran_ts))/3;
      avg_d_a = (parseFloat(data[0].a_biaya_operasional_tidak_langsung_ts2) + parseFloat(data[0].a_biaya_operasional_tidak_langsung_ts1) + parseFloat(data[0].a_biaya_operasional_tidak_langsung_ts))/3;
      avg_d_b = (parseFloat(data[0].b_biaya_operasional_tidak_langsung_ts2) + parseFloat(data[0].b_biaya_operasional_tidak_langsung_ts1) + parseFloat(data[0].b_biaya_operasional_tidak_langsung_ts))/3;
      avg_e_a = (parseFloat(data[0].a_biaya_operasional_kemahasiswaan_ts2) + parseFloat(data[0].a_biaya_operasional_kemahasiswaan_ts1) + parseFloat(data[0].a_biaya_operasional_kemahasiswaan_ts))/3;
      avg_e_b = (parseFloat(data[0].b_biaya_operasional_kemahasiswaan_ts2) + parseFloat(data[0].b_biaya_operasional_kemahasiswaan_ts1) + parseFloat(data[0].b_biaya_operasional_kemahasiswaan_ts))/3;
      jml_1_a_ts2 = parseFloat(data[0].a_biaya_dosen_ts2) + parseFloat(data[0].a_biaya_tenaga_kependidikan_ts2) + parseFloat(data[0].a_biaya_operasional_pembelajaran_ts2) + parseFloat(data[0].a_biaya_operasional_tidak_langsung_ts2) + parseFloat(data[0].a_biaya_operasional_kemahasiswaan_ts2);
      jml_1_a_ts1 = parseFloat(data[0].a_biaya_dosen_ts1) + parseFloat(data[0].a_biaya_tenaga_kependidikan_ts1) + parseFloat(data[0].a_biaya_operasional_pembelajaran_ts1) + parseFloat(data[0].a_biaya_operasional_tidak_langsung_ts1) + parseFloat(data[0].a_biaya_operasional_kemahasiswaan_ts1);
      jml_1_a_ts = parseFloat(data[0].a_biaya_dosen_ts) + parseFloat(data[0].a_biaya_tenaga_kependidikan_ts) + parseFloat(data[0].a_biaya_operasional_pembelajaran_ts) + parseFloat(data[0].a_biaya_operasional_tidak_langsung_ts) + parseFloat(data[0].a_biaya_operasional_kemahasiswaan_ts);
      avg_jml_a_1 = (jml_1_a_ts2 + jml_1_a_ts1 + jml_1_a_ts)/3;
      jml_1_b_ts2 = parseFloat(data[0].b_biaya_dosen_ts2) + parseFloat(data[0].b_biaya_tenaga_kependidikan_ts2) + parseFloat(data[0].b_biaya_operasional_pembelajaran_ts2) + parseFloat(data[0].b_biaya_operasional_tidak_langsung_ts2) + parseFloat(data[0].b_biaya_operasional_kemahasiswaan_ts2);
      jml_1_b_ts1 = parseFloat(data[0].b_biaya_dosen_ts1) + parseFloat(data[0].b_biaya_tenaga_kependidikan_ts1) + parseFloat(data[0].b_biaya_operasional_pembelajaran_ts1) + parseFloat(data[0].b_biaya_operasional_tidak_langsung_ts1) + parseFloat(data[0].b_biaya_operasional_kemahasiswaan_ts1);
      jml_1_b_ts = parseFloat(data[0].b_biaya_dosen_ts) + parseFloat(data[0].b_biaya_tenaga_kependidikan_ts) + parseFloat(data[0].b_biaya_operasional_pembelajaran_ts) + parseFloat(data[0].b_biaya_operasional_tidak_langsung_ts) + parseFloat(data[0].b_biaya_operasional_kemahasiswaan_ts);
      avg_jml_b_1 = (jml_1_b_ts2 + jml_1_b_ts1 + jml_1_b_ts)/3;
      avg_f_a = (parseFloat(data[0].a_biaya_penelitian_ts2) + parseFloat(data[0].a_biaya_penelitian_ts1) + parseFloat(data[0].a_biaya_penelitian_ts))/3;
      avg_f_b = (parseFloat(data[0].b_biaya_penelitian_ts2) + parseFloat(data[0].b_biaya_penelitian_ts1) + parseFloat(data[0].b_biaya_penelitian_ts))/3;
      avg_g_a = (parseFloat(data[0].a_biaya_pkm_ts2) + parseFloat(data[0].a_biaya_pkm_ts1) + parseFloat(data[0].a_biaya_pkm_ts))/3;
      avg_g_b = (parseFloat(data[0].b_biaya_pkm_ts2) + parseFloat(data[0].b_biaya_pkm_ts1) + parseFloat(data[0].b_biaya_pkm_ts))/3;
      jml_2_a_ts2 = parseFloat(data[0].a_biaya_penelitian_ts2) + parseFloat(data[0].a_biaya_pkm_ts2);
      jml_2_a_ts1 = parseFloat(data[0].a_biaya_penelitian_ts1) + parseFloat(data[0].a_biaya_pkm_ts1);
      jml_2_a_ts = parseFloat(data[0].a_biaya_penelitian_ts) + parseFloat(data[0].a_biaya_pkm_ts);
      avg_jml_a_2 = (jml_2_a_ts2+jml_2_a_ts1+jml_2_a_ts)/3;
      jml_2_b_ts2 = parseFloat(data[0].b_biaya_penelitian_ts2) + parseFloat(data[0].b_biaya_pkm_ts2);
      jml_2_b_ts1 = parseFloat(data[0].b_biaya_penelitian_ts1) + parseFloat(data[0].b_biaya_pkm_ts1);
      jml_2_b_ts = parseFloat(data[0].b_biaya_penelitian_ts) + parseFloat(data[0].b_biaya_pkm_ts);
      avg_jml_b_2 = (jml_2_b_ts2+jml_2_b_ts1+jml_2_b_ts)/3;
      avg_h_a = (parseFloat(data[0].a_biaya_investasi_sdm_ts2) + parseFloat(data[0].a_biaya_investasi_sdm_ts1)+ parseFloat(data[0].a_biaya_investasi_sdm_ts1))/3;
      avg_h_b = (parseFloat(data[0].b_biaya_investasi_sdm_ts2) + parseFloat(data[0].b_biaya_investasi_sdm_ts1)+ parseFloat(data[0].b_biaya_investasi_sdm_ts1))/3;
      avg_i_a = (parseFloat(data[0].a_biaya_investasi_sarana_ts2) + parseFloat(data[0].a_biaya_investasi_sarana_ts1)+ parseFloat(data[0].a_biaya_investasi_sarana_ts))/3;
      avg_i_b = (parseFloat(data[0].b_biaya_investasi_sarana_ts2) + parseFloat(data[0].b_biaya_investasi_sarana_ts1)+ parseFloat(data[0].b_biaya_investasi_sarana_ts))/3;
      avg_j_a = (parseFloat(data[0].a_biaya_investasi_prasarana_ts2) + parseFloat(data[0].a_biaya_investasi_prasarana_ts1)+ parseFloat(data[0].a_biaya_investasi_prasarana_ts))/3;
      avg_j_b = (parseFloat(data[0].b_biaya_investasi_prasarana_ts2) + parseFloat(data[0].b_biaya_investasi_prasarana_ts1)+ parseFloat(data[0].b_biaya_investasi_prasarana_ts))/3;
      jml_3_a_ts2 = parseFloat(data[0].a_biaya_investasi_sdm_ts2) + parseFloat(data[0].a_biaya_investasi_sarana_ts2) + parseFloat(data[0].a_biaya_investasi_prasarana_ts2);
      jml_3_a_ts1 = parseFloat(data[0].a_biaya_investasi_sdm_ts1) + parseFloat(data[0].a_biaya_investasi_sarana_ts1) + parseFloat(data[0].a_biaya_investasi_prasarana_ts1);
      jml_3_a_ts = parseFloat(data[0].a_biaya_investasi_sdm_ts) + parseFloat(data[0].a_biaya_investasi_sarana_ts) + parseFloat(data[0].a_biaya_investasi_prasarana_ts);
      avg_jml_a_3 = (jml_3_a_ts2+jml_3_a_ts1+jml_3_a_ts)/3;
      jml_3_b_ts2 = parseFloat(data[0].b_biaya_investasi_sdm_ts2) + parseFloat(data[0].b_biaya_investasi_sarana_ts2) + parseFloat(data[0].b_biaya_investasi_prasarana_ts2);
      jml_3_b_ts1 = parseFloat(data[0].b_biaya_investasi_sdm_ts1) + parseFloat(data[0].b_biaya_investasi_sarana_ts1) + parseFloat(data[0].b_biaya_investasi_prasarana_ts1);
      jml_3_b_ts = parseFloat(data[0].b_biaya_investasi_sdm_ts) + parseFloat(data[0].b_biaya_investasi_sarana_ts) + parseFloat(data[0].b_biaya_investasi_prasarana_ts);
      avg_jml_b_3 = (jml_3_b_ts2+jml_3_b_ts1+jml_3_b_ts)/3;
      html += '<tr>'+
                '<td>1</td>'+
                '<td>Biaya Operasional Pendidikan</td>'+
                '<td></td>'+
                '<td></td>'+
                '<td></td>'+
                '<td></td>'+
                '<td></td>'+
                '<td></td>'+
                '<td></td>'+
                '<td></td>'+
                '</tr>'+
                '<tr>'+
                '<td></td>'+
                '<td>a. Biaya Dosen (Gaji, Honor)</td>'+
                '<td>'+add_commas(data[0].a_biaya_dosen_ts2)+'</td>'+
                '<td>'+add_commas(data[0].a_biaya_dosen_ts1)+'</td>'+
                '<td>'+add_commas(data[0].a_biaya_dosen_ts)+'</td>'+
                '<td>'+add_commas(avg_a_a.toFixed(2))+'</td>'+
                '<td>'+add_commas(data[0].b_biaya_dosen_ts2)+'</td>'+
                '<td>'+add_commas(data[0].b_biaya_dosen_ts1)+'</td>'+
                '<td>'+add_commas(data[0].b_biaya_dosen_ts)+'</td>'+
                '<td>'+add_commas(avg_a_b.toFixed(2))+'</td>'+
                '</tr>'+
                '<tr>'+
                '<td></td>'+
                '<td>b. Biaya Tenaga Kependidikan (Gaji, Honor)</td>'+
                '<td>'+add_commas(data[0].a_biaya_tenaga_kependidikan_ts2)+'</td>'+
                '<td>'+add_commas(data[0].a_biaya_tenaga_kependidikan_ts1)+'</td>'+
                '<td>'+add_commas(data[0].a_biaya_tenaga_kependidikan_ts)+'</td>'+
                '<td>'+add_commas(avg_b_a.toFixed(2))+'</td>'+
                '<td>'+add_commas(data[0].b_biaya_tenaga_kependidikan_ts2)+'</td>'+
                '<td>'+add_commas(data[0].b_biaya_tenaga_kependidikan_ts1)+'</td>'+
                '<td>'+add_commas(data[0].b_biaya_tenaga_kependidikan_ts)+'</td>'+
                '<td>'+add_commas(avg_b_b.toFixed(2))+'</td>'+
                '</tr>'+
                '<tr>'+
                '<td></td>'+
                '<td>c. Biaya Operasional Pembelajaran (Bahan dan Peralatan Habis Pakai)</td>'+
                '<td>'+add_commas(data[0].a_biaya_operasional_pembelajaran_ts2)+'</td>'+
                '<td>'+add_commas(data[0].a_biaya_operasional_pembelajaran_ts1)+'</td>'+
                '<td>'+add_commas(data[0].a_biaya_operasional_pembelajaran_ts)+'</td>'+
                '<td>'+add_commas(avg_c_a.toFixed(2))+'</td>'+
                '<td>'+add_commas(data[0].b_biaya_operasional_pembelajaran_ts2)+'</td>'+
                '<td>'+add_commas(data[0].b_biaya_operasional_pembelajaran_ts1)+'</td>'+
                '<td>'+add_commas(data[0].b_biaya_operasional_pembelajaran_ts)+'</td>'+
                '<td>'+add_commas(avg_c_b.toFixed(2))+'</td>'+
                '</tr>'+
                '<tr>'+
                '<td></td>'+
                '<td>d. Biaya Operasional Tidak Langsung (Listrik, Gas, Air, Pemeliharaan Gedung, Pemeliharaan Sarana, Uang Lembur, Telekomunikasi, Konsumsi, Transport Lokal, Pajak, Asuransi, dll.)</td>'+
                '<td>'+add_commas(data[0].a_biaya_operasional_tidak_langsung_ts2)+'</td>'+
                '<td>'+add_commas(data[0].a_biaya_operasional_tidak_langsung_ts1)+'</td>'+
                '<td>'+add_commas(data[0].a_biaya_operasional_tidak_langsung_ts)+'</td>'+
                '<td>'+add_commas(avg_d_a.toFixed(2))+'</td>'+
                '<td>'+add_commas(data[0].b_biaya_operasional_tidak_langsung_ts2)+'</td>'+
                '<td>'+add_commas(data[0].b_biaya_operasional_tidak_langsung_ts1)+'</td>'+
                '<td>'+add_commas(data[0].b_biaya_operasional_tidak_langsung_ts)+'</td>'+
                '<td>'+add_commas(avg_d_b.toFixed(2))+'</td>'+
                '</tr>'+
                '<tr>'+
                '<td>2</td>'+
                '<td>Biaya operasional kemahasiswaan (penalaran, minat, bakat, dan kesejahteraan).</td>'+
                '<td>'+add_commas(data[0].a_biaya_operasional_kemahasiswaan_ts2)+'</td>'+
                '<td>'+add_commas(data[0].a_biaya_operasional_kemahasiswaan_ts1)+'</td>'+
                '<td>'+add_commas(data[0].a_biaya_operasional_kemahasiswaan_ts)+'</td>'+
                '<td>'+add_commas(avg_e_a.toFixed(2))+'</td>'+
                '<td>'+add_commas(data[0].b_biaya_operasional_kemahasiswaan_ts2)+'</td>'+
                '<td>'+add_commas(data[0].b_biaya_operasional_kemahasiswaan_ts1)+'</td>'+
                '<td>'+add_commas(data[0].b_biaya_operasional_kemahasiswaan_ts)+'</td>'+
                '<td>'+add_commas(avg_e_b.toFixed(2))+'</td>'+
                '</tr>'+
                '<tr>'+
                '<td colspan="2" style="text-align: center;"><b>Jumlah</b></td>'+
                '<td><b>'+add_commas(jml_1_a_ts2.toFixed(2))+'</b></td>'+
                '<td><b>'+add_commas(jml_1_a_ts1.toFixed(2))+'</b></td>'+
                '<td><b>'+add_commas(jml_1_a_ts.toFixed(2))+'</b></td>'+
                '<td><b>'+add_commas(avg_jml_a_1.toFixed(2))+'</b></td>'+
                '<td><b>'+add_commas(jml_1_b_ts2.toFixed(2))+'</b></td>'+
                '<td><b>'+add_commas(jml_1_b_ts1.toFixed(2))+'</b></td>'+
                '<td><b>'+add_commas(jml_1_b_ts.toFixed(2))+'</b></td>'+
                '<td><b>'+add_commas(avg_jml_b_1.toFixed(2))+'</b></td>'+
                '</tr>'+
                '<tr>'+
                '<td>3</td>'+
                '<td>Biaya Penelitian</td>'+
                '<td>'+add_commas(data[0].a_biaya_penelitian_ts2)+'</td>'+
                '<td>'+add_commas(data[0].a_biaya_penelitian_ts1)+'</td>'+
                '<td>'+add_commas(data[0].a_biaya_penelitian_ts)+'</td>'+
                '<td>'+add_commas(avg_f_a.toFixed(2))+'</td>'+
                '<td>'+add_commas(data[0].b_biaya_penelitian_ts2)+'</td>'+
                '<td>'+add_commas(data[0].b_biaya_penelitian_ts1)+'</td>'+
                '<td>'+add_commas(data[0].b_biaya_penelitian_ts)+'</td>'+
                '<td>'+add_commas(avg_f_b.toFixed(2))+'</td>'+
                '</tr>'+
                '<tr>'+
                '<td>4</td>'+
                '<td>Biaya PkM</td>'+
                '<td>'+add_commas(data[0].a_biaya_pkm_ts2)+'</td>'+
                '<td>'+add_commas(data[0].a_biaya_pkm_ts1)+'</td>'+
                '<td>'+add_commas(data[0].a_biaya_pkm_ts)+'</td>'+
                '<td>'+add_commas(avg_g_a.toFixed(2))+'</td>'+
                '<td>'+add_commas(data[0].b_biaya_pkm_ts2)+'</td>'+
                '<td>'+add_commas(data[0].b_biaya_pkm_ts1)+'</td>'+
                '<td>'+add_commas(data[0].b_biaya_pkm_ts)+'</td>'+
                '<td>'+add_commas(avg_g_b.toFixed(2))+'</td>'+
                '</tr>'+
                '<tr>'+
                '<td colspan="2" style="text-align: center;"><b>Jumlah</b></td>'+
                '<td><b>'+add_commas(jml_2_a_ts2.toFixed(2))+'</b></td>'+
                '<td><b>'+add_commas(jml_2_a_ts1.toFixed(2))+'</b></td>'+
                '<td><b>'+add_commas(jml_2_a_ts.toFixed(2))+'</b></td>'+
                '<td><b>'+add_commas(avg_jml_a_2.toFixed(2))+'</b></td>'+
                '<td><b>'+add_commas(jml_2_b_ts2.toFixed(2))+'</b></td>'+
                '<td><b>'+add_commas(jml_2_b_ts1.toFixed(2))+'</b></td>'+
                '<td><b>'+add_commas(jml_2_b_ts.toFixed(2))+'</b></td>'+
                '<td><b>'+add_commas(avg_jml_b_2.toFixed(2))+'</b></td>'+
                '</tr>'+
                '<tr>'+
                '<td>5</td>'+
                '<td>Biaya Investasi SDM</td>'+
                '<td>'+add_commas(data[0].a_biaya_investasi_sdm_ts2)+'</td>'+
                '<td>'+add_commas(data[0].a_biaya_investasi_sdm_ts1)+'</td>'+
                '<td>'+add_commas(data[0].a_biaya_investasi_sdm_ts)+'</td>'+
                '<td>'+add_commas(avg_h_a.toFixed(2))+'</td>'+
                '<td>'+add_commas(data[0].b_biaya_investasi_sdm_ts2)+'</td>'+
                '<td>'+add_commas(data[0].b_biaya_investasi_sdm_ts1)+'</td>'+
                '<td>'+add_commas(data[0].b_biaya_investasi_sdm_ts)+'</td>'+
                '<td>'+add_commas(avg_h_b.toFixed(2))+'</td>'+
                '</tr>'+
                '<tr>'+
                '<td>6</td>'+
                '<td>Biaya Investasi Sarana</td>'+
                '<td>'+add_commas(data[0].a_biaya_investasi_sarana_ts2)+'</td>'+
                '<td>'+add_commas(data[0].a_biaya_investasi_sarana_ts1)+'</td>'+
                '<td>'+add_commas(data[0].a_biaya_investasi_sarana_ts)+'</td>'+
                '<td>'+add_commas(avg_i_a.toFixed(2))+'</td>'+
                '<td>'+add_commas(data[0].b_biaya_investasi_sarana_ts2)+'</td>'+
                '<td>'+add_commas(data[0].b_biaya_investasi_sarana_ts1)+'</td>'+
                '<td>'+add_commas(data[0].b_biaya_investasi_sarana_ts)+'</td>'+
                '<td>'+add_commas(avg_i_b.toFixed(2))+'</td>'+
                '</tr>'+
                '<tr>'+
                '<td>7</td>'+
                '<td>Biaya Investasi Prasarana</td>'+
                '<td>'+add_commas(data[0].a_biaya_investasi_prasarana_ts2)+'</td>'+
                '<td>'+add_commas(data[0].a_biaya_investasi_prasarana_ts1)+'</td>'+
                '<td>'+add_commas(data[0].a_biaya_investasi_prasarana_ts)+'</td>'+
                '<td>'+add_commas(avg_j_a.toFixed(2))+'</td>'+
                '<td>'+add_commas(data[0].b_biaya_investasi_prasarana_ts2)+'</td>'+
                '<td>'+add_commas(data[0].b_biaya_investasi_prasarana_ts1)+'</td>'+
                '<td>'+add_commas(data[0].b_biaya_investasi_prasarana_ts)+'</td>'+
                '<td>'+add_commas(avg_j_b.toFixed(2))+'</td>'+
                '</tr>'+
                '<tr>'+
                '<td colspan="2" style="text-align: center;"><b>Jumlah</b></td>'+
                '<td><b>'+add_commas(jml_3_a_ts2.toFixed(2))+'</b></td>'+
                '<td><b>'+add_commas(jml_3_a_ts1.toFixed(2))+'</b></td>'+
                '<td><b>'+add_commas(jml_3_a_ts.toFixed(2))+'</b></td>'+
                '<td><b>'+add_commas(avg_jml_a_3.toFixed(2))+'</b></td>'+
                '<td><b>'+add_commas(jml_3_b_ts2.toFixed(2))+'</b></td>'+
                '<td><b>'+add_commas(jml_3_b_ts1.toFixed(2))+'</b></td>'+
                '<td><b>'+add_commas(jml_3_b_ts.toFixed(2))+'</b></td>'+
                '<td><b>'+add_commas(avg_jml_b_3.toFixed(2))+'</b></td>'+
                '</tr>'
                ;
                $('#tampil_data').html(html);
              }
            });
          }
        });
</script>
