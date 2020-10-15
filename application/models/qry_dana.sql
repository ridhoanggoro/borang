SELECT
  Sum(a_biaya_dosen_ts2) AS a_biaya_dosen_ts2,
  Sum(a_biaya_tenaga_kependidikan_ts2) AS a_biaya_tenaga_kependidikan_ts2,
  Sum(a_biaya_operasional_pembelajaran_ts2) AS a_biaya_operasional_pembelajaran_ts2,
  Sum(a_biaya_operasional_tidak_langsung_ts2) AS a_biaya_operasional_tidak_langsung_ts2,
  Sum(a_biaya_operasional_kemahasiswaan_ts2) AS a_biaya_operasional_kemahasiswaan_ts2,
  Sum(a_biaya_penelitian_ts2) AS a_biaya_penelitian_ts2,
  Sum(a_biaya_pkm_ts2) AS a_biaya_pkm_ts2,
  Sum(a_biaya_investasi_sdm_ts2) AS a_biaya_investasi_sdm_ts2,
  Sum(a_biaya_investasi_sarana_ts2) AS a_biaya_investasi_sarana_ts2,
  Sum(a_biaya_investasi_prasarana_ts2) AS a_biaya_investasi_prasarana_ts2,
  Sum(a_biaya_dosen_ts1) AS a_biaya_dosen_ts1,
  Sum(a_biaya_tenaga_kependidikan_ts1) AS a_biaya_tenaga_kependidikan_ts1,
  Sum(a_biaya_operasional_pembelajaran_ts1) AS a_biaya_operasional_pembelajaran_ts1,
  Sum(a_biaya_operasional_tidak_langsung_ts1) AS a_biaya_operasional_tidak_langsung_ts1,
  Sum(a_biaya_operasional_kemahasiswaan_ts1) AS a_biaya_operasional_kemahasiswaan_ts1,
  Sum(a_biaya_operasional_kemahasiswaan_ts1) AS a_biaya_penelitian_ts1,
  Sum(a_biaya_pkm_ts1) AS a_biaya_pkm_ts1,
  Sum(a_biaya_investasi_sdm_ts1) AS a_biaya_investasi_sdm_ts1,
  Sum(a_biaya_investasi_sarana_ts1) AS a_biaya_investasi_sarana_ts1,
  Sum(a_biaya_investasi_prasarana_ts1) AS a_biaya_investasi_prasarana_ts1,
  Sum(a_biaya_dosen_ts) AS a_biaya_dosen_ts,
  Sum(a_biaya_tenaga_kependidikan_ts) AS a_biaya_tenaga_kependidikan_ts,
  Sum(a_biaya_operasional_pembelajaran_ts) AS a_biaya_operasional_pembelajaran_ts,
  Sum(a_biaya_operasional_tidak_langsung_ts) AS a_biaya_operasional_tidak_langsung_ts,
  Sum(a_biaya_operasional_kemahasiswaan_ts) AS a_biaya_operasional_kemahasiswaan_ts,
  Sum(a_biaya_penelitian_ts) AS a_biaya_penelitian_ts,
  Sum(a_biaya_pkm_ts) AS a_biaya_pkm_ts,
  Sum(a_biaya_investasi_sdm_ts) AS a_biaya_investasi_sdm_ts,
  Sum(a_biaya_investasi_sarana_ts) AS a_biaya_investasi_sarana_ts,
  Sum(a_biaya_investasi_prasarana_ts) AS a_biaya_investasi_prasarana_ts,
  Sum(b_biaya_dosen_ts2) AS b_biaya_dosen_ts2,
  Sum(b_biaya_tenaga_kependidikan_ts2) AS b_biaya_tenaga_kependidikan_ts2,
  Sum(b_biaya_operasional_pembelajaran_ts2) AS b_biaya_operasional_pembelajaran_ts2,
  Sum(b_biaya_operasional_tidak_langsung_ts2) AS b_biaya_operasional_tidak_langsung_ts2,
  Sum(b_biaya_operasional_kemahasiswaan_ts2) AS b_biaya_operasional_kemahasiswaan_ts2,
  Sum(b_biaya_penelitian_ts2) AS b_biaya_penelitian_ts2,
  Sum(b_biaya_pkm_ts2) AS b_biaya_pkm_ts2,
  Sum(b_biaya_investasi_sdm_ts2) AS b_biaya_investasi_sdm_ts2,
  Sum(b_biaya_investasi_sarana_ts2) AS b_biaya_investasi_sarana_ts2,
  Sum(b_biaya_investasi_prasarana_ts2) AS b_biaya_investasi_prasarana_ts2,
  Sum(b_biaya_dosen_ts1) AS b_biaya_dosen_ts1,
  Sum(b_biaya_tenaga_kependidikan_ts1) AS b_biaya_tenaga_kependidikan_ts1,
  Sum(b_biaya_operasional_pembelajaran_ts1) AS b_biaya_operasional_pembelajaran_ts1,
  Sum(b_biaya_operasional_tidak_langsung_ts1) AS b_biaya_operasional_tidak_langsung_ts1,
  Sum(b_biaya_dosen_ts2) AS b_biaya_operasional_kemahasiswaan_ts1,
  Sum(b_biaya_operasional_kemahasiswaan_ts1) AS b_biaya_penelitian_ts1,
  Sum(b_biaya_pkm_ts1) AS b_biaya_pkm_ts1,
  Sum(b_biaya_investasi_sdm_ts1) AS b_biaya_investasi_sdm_ts1,
  Sum(b_biaya_investasi_sarana_ts1) AS b_biaya_investasi_sarana_ts1,
  Sum(b_biaya_investasi_prasarana_ts1) AS b_biaya_investasi_prasarana_ts1,
  Sum(b_biaya_dosen_ts) AS b_biaya_dosen_ts,
  Sum(b_biaya_tenaga_kependidikan_ts) AS b_biaya_tenaga_kependidikan_ts,
  Sum(b_biaya_operasional_pembelajaran_ts) AS b_biaya_operasional_pembelajaran_ts,
  Sum(b_biaya_operasional_tidak_langsung_ts) AS b_biaya_operasional_tidak_langsung_ts,
  Sum(b_biaya_operasional_kemahasiswaan_ts) AS b_biaya_operasional_kemahasiswaan_ts,
  Sum(b_biaya_penelitian_ts) AS b_biaya_penelitian_ts,
  Sum(b_biaya_pkm_ts) AS b_biaya_pkm_ts,
  Sum(b_biaya_investasi_sdm_ts) AS b_biaya_investasi_sdm_ts,
  Sum(b_biaya_investasi_sarana_ts) AS b_biaya_investasi_sarana_ts,
  Sum(b_biaya_investasi_prasarana_ts) AS b_biaya_investasi_prasarana_ts
FROM
  (
    SELECT
      Sum(
        CASE WHEN(
          b.th_akademik = ts2.tahun
          AND b.prodi = '$prodi'
        ) THEN biaya_dosen ELSE 0 end
      ) AS a_biaya_dosen_ts2,
      Sum(
        CASE WHEN(
          b.th_akademik = ts2.tahun
          AND b.prodi = '$prodi'
        ) THEN biaya_tenaga_kependidikan ELSE 0 end
      ) AS a_biaya_tenaga_kependidikan_ts2,
      Sum(
        CASE WHEN(
          b.th_akademik = ts2.tahun
          AND b.prodi = '$prodi'
        ) THEN biaya_operasional_pembelajaran ELSE 0 end
      ) AS a_biaya_operasional_pembelajaran_ts2,
      Sum(
        CASE WHEN(
          b.th_akademik = ts2.tahun
          AND b.prodi = '$prodi'
        ) THEN biaya_operasional_tidak_langsung ELSE 0 end
      ) AS a_biaya_operasional_tidak_langsung_ts2,
      Sum(
        CASE WHEN(
          b.th_akademik = ts2.tahun
          AND b.prodi = '$prodi'
        ) THEN biaya_operasional_kemahasiswaan ELSE 0 end
      ) AS a_biaya_operasional_kemahasiswaan_ts2,
      Sum(
        CASE WHEN(
          b.th_akademik = ts2.tahun
          AND b.prodi = '$prodi'
        ) THEN biaya_penelitian ELSE 0 end
      ) AS a_biaya_penelitian_ts2,
      Sum(
        CASE WHEN(
          b.th_akademik = ts2.tahun
          AND b.prodi = '$prodi'
        ) THEN biaya_pkm ELSE 0 end
      ) AS a_biaya_pkm_ts2,
      Sum(
        CASE WHEN(
          b.th_akademik = ts2.tahun
          AND b.prodi = '$prodi'
        ) THEN biaya_investasi_sdm ELSE 0 end
      ) AS a_biaya_investasi_sdm_ts2,
      Sum(
        CASE WHEN(
          b.th_akademik = ts2.tahun
          AND b.prodi = '$prodi'
        ) THEN biaya_investasi_sarana ELSE 0 end
      ) AS a_biaya_investasi_sarana_ts2,
      Sum(
        CASE WHEN(
          b.th_akademik = ts2.tahun
          AND b.prodi = '$prodi'
        ) THEN biaya_investasi_prasarana ELSE 0 end
      ) AS a_biaya_investasi_prasarana_ts2,
      Sum(
        CASE WHEN(
          b.th_akademik = ts1.tahun
          AND b.prodi = '$prodi'
        ) THEN biaya_dosen ELSE 0 end
      ) AS a_biaya_dosen_ts1,
      Sum(
        CASE WHEN(
          b.th_akademik = ts1.tahun
          AND b.prodi = '$prodi'
        ) THEN biaya_tenaga_kependidikan ELSE 0 end
      ) AS a_biaya_tenaga_kependidikan_ts1,
      Sum(
        CASE WHEN(
          b.th_akademik = ts1.tahun
          AND b.prodi = '$prodi'
        ) THEN biaya_operasional_pembelajaran ELSE 0 end
      ) AS a_biaya_operasional_pembelajaran_ts1,
      Sum(
        CASE WHEN(
          b.th_akademik = ts1.tahun
          AND b.prodi = '$prodi'
        ) THEN biaya_operasional_tidak_langsung ELSE 0 end
      ) AS a_biaya_operasional_tidak_langsung_ts1,
      Sum(
        CASE WHEN(
          b.th_akademik = ts1.tahun
          AND b.prodi = '$prodi'
        ) THEN biaya_operasional_kemahasiswaan ELSE 0 end
      ) AS a_biaya_operasional_kemahasiswaan_ts1,
      Sum(
        CASE WHEN(
          b.th_akademik = ts1.tahun
          AND b.prodi = '$prodi'
        ) THEN biaya_penelitian ELSE 0 end
      ) AS a_biaya_penelitian_ts1,
      Sum(
        CASE WHEN(
          b.th_akademik = ts1.tahun
          AND b.prodi = '$prodi'
        ) THEN biaya_pkm ELSE 0 end
      ) AS a_biaya_pkm_ts1,
      Sum(
        CASE WHEN(
          b.th_akademik = ts1.tahun
          AND b.prodi = '$prodi'
        ) THEN biaya_investasi_sdm ELSE 0 end
      ) AS a_biaya_investasi_sdm_ts1,
      Sum(
        CASE WHEN(
          b.th_akademik = ts1.tahun
          AND b.prodi = '$prodi'
        ) THEN biaya_investasi_sarana ELSE 0 end
      ) AS a_biaya_investasi_sarana_ts1,
      Sum(
        CASE WHEN(
          b.th_akademik = ts1.tahun
          AND b.prodi = '$prodi'
        ) THEN biaya_investasi_prasarana ELSE 0 end
      ) AS a_biaya_investasi_prasarana_ts1,
      Sum(
        CASE WHEN(
          b.th_akademik = ts.tahun
          AND b.prodi = '$prodi'
        ) THEN biaya_dosen ELSE 0 end
      ) AS a_biaya_dosen_ts,
      Sum(
        CASE WHEN(
          b.th_akademik = ts.tahun
          AND b.prodi = '$prodi'
        ) THEN biaya_tenaga_kependidikan ELSE 0 end
      ) AS a_biaya_tenaga_kependidikan_ts,
      Sum(
        CASE WHEN(
          b.th_akademik = ts.tahun
          AND b.prodi = '$prodi'
        ) THEN biaya_operasional_pembelajaran ELSE 0 end
      ) AS a_biaya_operasional_pembelajaran_ts,
      Sum(
        CASE WHEN(
          b.th_akademik = ts.tahun
          AND b.prodi = '$prodi'
        ) THEN biaya_operasional_tidak_langsung ELSE 0 end
      ) AS a_biaya_operasional_tidak_langsung_ts,
      Sum(
        CASE WHEN(
          b.th_akademik = ts.tahun
          AND b.prodi = '$prodi'
        ) THEN biaya_operasional_kemahasiswaan ELSE 0 end
      ) AS a_biaya_operasional_kemahasiswaan_ts,
      Sum(
        CASE WHEN(
          b.th_akademik = ts.tahun
          AND b.prodi = '$prodi'
        ) THEN biaya_penelitian ELSE 0 end
      ) AS a_biaya_penelitian_ts,
      Sum(
        CASE WHEN(
          b.th_akademik = ts.tahun
          AND b.prodi = '$prodi'
        ) THEN biaya_pkm ELSE 0 end
      ) AS a_biaya_pkm_ts,
      Sum(
        CASE WHEN(
          b.th_akademik = ts.tahun
          AND b.prodi = '$prodi'
        ) THEN biaya_investasi_sdm ELSE 0 end
      ) AS a_biaya_investasi_sdm_ts,
      Sum(
        CASE WHEN(
          b.th_akademik = ts.tahun
          AND b.prodi = '$prodi'
        ) THEN biaya_investasi_sarana ELSE 0 end
      ) AS a_biaya_investasi_sarana_ts,
      Sum(
        CASE WHEN(
          b.th_akademik = ts.tahun
          AND b.prodi = '$prodi'
        ) THEN biaya_investasi_prasarana ELSE 0 end
      ) AS a_biaya_investasi_prasarana_ts,
      '' AS b_biaya_dosen_ts2,
      '' AS b_biaya_tenaga_kependidikan_ts2,
      '' AS b_biaya_operasional_pembelajaran_ts2,
      '' AS b_biaya_operasional_tidak_langsung_ts2,
      '' AS b_biaya_operasional_kemahasiswaan_ts2,
      '' AS b_biaya_penelitian_ts2,
      '' AS b_biaya_pkm_ts2,
      '' AS b_biaya_investasi_sdm_ts2,
      '' AS b_biaya_investasi_sarana_ts2,
      '' AS b_biaya_investasi_prasarana_ts2,
      '' AS b_biaya_dosen_ts1,
      '' AS b_biaya_tenaga_kependidikan_ts1,
      '' AS b_biaya_operasional_pembelajaran_ts1,
      '' AS b_biaya_operasional_tidak_langsung_ts1,
      '' AS b_biaya_operasional_kemahasiswaan_ts1,
      '' AS b_biaya_penelitian_ts1,
      '' AS b_biaya_pkm_ts1,
      '' AS b_biaya_investasi_sdm_ts1,
      '' AS b_biaya_investasi_sarana_ts1,
      '' AS b_biaya_investasi_prasarana_ts1,
      '' AS b_biaya_dosen_ts,
      '' AS b_biaya_tenaga_kependidikan_ts,
      '' AS b_biaya_operasional_pembelajaran_ts,
      '' AS b_biaya_operasional_tidak_langsung_ts,
      '' AS b_biaya_operasional_kemahasiswaan_ts,
      '' AS b_biaya_penelitian_ts,
      '' AS b_biaya_pkm_ts,
      '' AS b_biaya_investasi_sdm_ts,
      '' AS b_biaya_investasi_sarana_ts,
      '' AS b_biaya_investasi_prasarana_ts
    FROM
      `dana_prodi` b
      LEFT JOIN ts AS ts2 ON ts2.tahun = b.th_akademik
      AND ts2.prodi = '$prodi'
      AND ts2.nama_ts = 'TS-2'
      LEFT JOIN ts AS ts1 ON ts1.tahun = b.th_akademik
      AND ts1.prodi = '$prodi'
      AND ts1.nama_ts = 'TS-1'
      LEFT JOIN ts ON ts.tahun = b.th_akademik
      AND ts.prodi = '$prodi'
      AND ts.nama_ts = 'TS'
    UNION ALL
    SELECT
      '' AS a_biaya_dosen_ts2,
      '' AS a_biaya_tenaga_kependidikan_ts2,
      '' AS a_biaya_operasional_pembelajaran_ts2,
      '' AS a_biaya_operasional_tidak_langsung_ts2,
      '' AS a_biaya_operasional_kemahasiswaan_ts2,
      '' AS a_biaya_penelitian_ts2,
      '' AS a_biaya_pkm_ts2,
      '' AS a_biaya_investasi_sdm_ts2,
      '' AS a_biaya_investasi_sarana_ts2,
      '' AS a_biaya_investasi_prasarana_ts2,
      '' AS a_biaya_dosen_ts1,
      '' AS a_biaya_tenaga_kependidikan_ts1,
      '' AS a_biaya_operasional_pembelajaran_ts1,
      '' AS a_biaya_operasional_tidak_langsung_ts1,
      '' AS a_biaya_operasional_kemahasiswaan_ts1,
      '' AS a_biaya_penelitian_ts1,
      '' AS a_biaya_pkm_ts1,
      '' AS a_biaya_investasi_sdm_ts1,
      '' AS a_biaya_investasi_sarana_ts1,
      '' AS a_biaya_investasi_prasarana_ts1,
      '' AS a_biaya_dosen_ts,
      '' AS a_biaya_tenaga_kependidikan_ts,
      '' AS a_biaya_operasional_pembelajaran_ts,
      '' AS a_biaya_operasional_tidak_langsung_ts,
      '' AS a_biaya_operasional_kemahasiswaan_ts,
      '' AS a_biaya_penelitian_ts,
      '' AS a_biaya_pkm_ts,
      '' AS a_biaya_investasi_sdm_ts,
      '' AS a_biaya_investasi_sarana_ts,
      '' AS a_biaya_investasi_prasarana_ts,
      Sum(
        CASE WHEN(b.th_akademik = ts2.tahun AND b.prodi = '$prodi') THEN biaya_dosen ELSE 0 end
      ) AS b_biaya_dosen_ts2,
      Sum(
        CASE WHEN(b.th_akademik = ts2.tahun AND b.prodi = '$prodi') THEN biaya_tenaga_kependidikan ELSE 0 end
      ) AS b_biaya_tenaga_kependidikan_ts2,
      Sum(
        CASE WHEN(b.th_akademik = ts2.tahun AND b.prodi = '$prodi') THEN biaya_operasional_pembelajaran ELSE 0 end
      ) AS b_biaya_operasional_pembelajaran_ts2,
      Sum(
        CASE WHEN(b.th_akademik = ts2.tahun AND b.prodi = '$prodi') THEN biaya_operasional_tidak_langsung ELSE 0 end
      ) AS b_biaya_operasional_tidak_langsung_ts2,
      Sum(
        CASE WHEN(b.th_akademik = ts2.tahun AND b.prodi = '$prodi') THEN biaya_operasional_kemahasiswaan ELSE 0 end
      ) AS b_biaya_operasional_kemahasiswaan_ts2,
      Sum(
        CASE WHEN(b.th_akademik = ts2.tahun AND b.prodi = '$prodi')  THEN biaya_penelitian ELSE 0 end
      ) AS b_biaya_penelitian_ts2,
      Sum(
        CASE WHEN(b.th_akademik = ts2.tahun AND b.prodi = '$prodi') THEN biaya_pkm ELSE 0 end
      ) AS b_biaya_pkm_ts2,
      Sum(
        CASE WHEN(b.th_akademik = ts2.tahun AND b.prodi = '$prodi') THEN biaya_investasi_sdm ELSE 0 end
      ) AS b_biaya_investasi_sdm_ts2,
      Sum(
        CASE WHEN(b.th_akademik = ts2.tahun AND b.prodi = '$prodi') THEN biaya_investasi_sarana ELSE 0 end
      ) AS b_biaya_investasi_sarana_ts2,
      Sum(
        CASE WHEN(b.th_akademik = ts2.tahun AND b.prodi = '$prodi') THEN biaya_investasi_prasarana ELSE 0 end
      ) AS b_biaya_investasi_prasarana_ts2,
      Sum(
        CASE WHEN(b.th_akademik = ts1.tahun AND b.prodi = '$prodi') THEN biaya_dosen ELSE 0 end
      ) AS b_biaya_dosen_ts1,
      Sum(
        CASE WHEN(b.th_akademik = ts1.tahun AND b.prodi = '$prodi') THEN biaya_tenaga_kependidikan ELSE 0 end
      ) AS b_biaya_tenaga_kependidikan_ts1,
      Sum(
        CASE WHEN(b.th_akademik = ts1.tahun AND b.prodi = '$prodi') THEN biaya_operasional_pembelajaran ELSE 0 end
      ) AS b_biaya_operasional_pembelajaran_ts1,
      Sum(
        CASE WHEN(b.th_akademik = ts1.tahun AND b.prodi = '$prodi') THEN biaya_operasional_tidak_langsung ELSE 0 end
      ) AS b_biaya_operasional_tidak_langsung_ts1,
      Sum(
        CASE WHEN(b.th_akademik = ts1.tahun AND b.prodi = '$prodi') THEN biaya_operasional_kemahasiswaan ELSE 0 end
      ) AS b_biaya_operasional_kemahasiswaan_ts1,
      Sum(
        CASE WHEN(b.th_akademik = ts1.tahun AND b.prodi = '$prodi') THEN biaya_penelitian ELSE 0 end
      ) AS b_biaya_penelitian_ts1,
      Sum(
        CASE WHEN(b.th_akademik = ts1.tahun AND b.prodi = '$prodi') THEN biaya_pkm ELSE 0 end
      ) AS b_biaya_pkm_ts1,
      Sum(
        CASE WHEN(b.th_akademik = ts1.tahun AND b.prodi = '$prodi') THEN biaya_investasi_sdm ELSE 0 end
      ) AS b_biaya_investasi_sdm_ts1,
      Sum(
        CASE WHEN(b.th_akademik = ts1.tahun AND b.prodi = '$prodi') THEN biaya_investasi_sarana ELSE 0 end
      ) AS b_biaya_investasi_sarana_ts1,
      Sum(
        CASE WHEN(b.th_akademik = ts1.tahun AND b.prodi = '$prodi') THEN biaya_investasi_prasarana ELSE 0 end
      ) AS b_biaya_investasi_prasarana_ts1,
      Sum(
        CASE WHEN(b.th_akademik = ts.tahun AND b.prodi = '$prodi') THEN biaya_dosen ELSE 0 end
      ) AS b_biaya_dosen_ts,
      Sum(
        CASE WHEN(b.th_akademik = ts.tahun AND b.prodi = '$prodi') THEN biaya_tenaga_kependidikan ELSE 0 end
      ) AS b_biaya_tenaga_kependidikan_ts,
      Sum(
        CASE WHEN(b.th_akademik = ts.tahun AND b.prodi = '$prodi') THEN biaya_operasional_pembelajaran ELSE 0 end
      ) AS b_biaya_operasional_pembelajaran_ts,
      Sum(
        CASE WHEN(b.th_akademik = ts.tahun AND b.prodi = '$prodi') THEN biaya_operasional_tidak_langsung ELSE 0 end
      ) AS b_biaya_operasional_tidak_langsung_ts,
      Sum(
        CASE WHEN(b.th_akademik = ts.tahun AND b.prodi = '$prodi') THEN biaya_operasional_kemahasiswaan ELSE 0 end
      ) AS b_biaya_operasional_kemahasiswaan_ts,
      Sum(
        CASE WHEN(b.th_akademik = ts.tahun AND b.prodi = '$prodi') THEN biaya_penelitian ELSE 0 end
      ) AS b_biaya_penelitian_ts,
      Sum(
        CASE WHEN(b.th_akademik = ts.tahun AND b.prodi = '$prodi') THEN biaya_pkm ELSE 0 end
      ) AS b_biaya_pkm_ts,
      Sum(
        CASE WHEN(b.th_akademik = ts.tahun AND b.prodi = '$prodi') THEN biaya_investasi_sdm ELSE 0 end
      ) AS b_biaya_investasi_sdm_ts,
      Sum(
        CASE WHEN(b.th_akademik = ts.tahun AND b.prodi = '$prodi') THEN biaya_investasi_sarana ELSE 0 end
      ) AS b_biaya_investasi_sarana_ts,
      Sum(
        CASE WHEN(b.th_akademik = ts.tahun AND b.prodi = '$prodi') THEN biaya_investasi_prasarana ELSE 0 end
      ) AS b_biaya_investasi_prasarana_ts
    FROM
      `dana_fakultas` b
      LEFT JOIN ts AS ts2 ON ts2.tahun = b.th_akademik
      AND ts2.nama_ts = 'TS-2'
      AND ts2.prodi = '$prodi'
      LEFT JOIN ts AS ts1 ON ts1.tahun = b.th_akademik
      AND ts1.nama_ts = 'TS-1'
      AND ts1.prodi = '$prodi'
      LEFT JOIN ts ON ts.tahun = b.th_akademik
      AND ts.nama_ts = 'TS'
      AND ts.prodi = '$prodi'
  ) x
