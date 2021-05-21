# e-borang
 
 ALTER TABLE `mahasiswa` ADD `asing` TINYINT(1) NULL DEFAULT '0' AFTER `doc`;


SELECT m.prodi,
       SUM(TS_2) AS 'ts_2',
       SUM(TS_1) AS 'ts_1',
       SUM(TS) AS 'ts',
       z.*
FROM tbl_2b z LEFT JOIN 
  (SELECT ts.prodi,
          COUNT(s.nim) AS 'TS_2',
          0 AS 'TS_1',
          0 AS 'TS'
   FROM
     (SELECT nim, LEFT(th_akademik, 4) AS th_akademik
      FROM `status_mahasiswa` a
      WHERE a.prodi = 'Teknik Industri S1'
        AND a.status = 'AKTIF'
      GROUP BY nim, LEFT(th_akademik, 4)) s
   INNER JOIN mahasiswa m ON m.nim = s.nim
   AND m.asing=1
   INNER JOIN ts ON ts.tahun = LEFT(s.th_akademik, 4)
   AND ts.prodi = 'Teknik Industri S1'
   AND ts.nama_ts = 'TS-2'
   GROUP BY ts.nama_ts
   UNION ALL SELECT ts.prodi,
                    0 AS 'TS_2',
                    COUNT(s.nim) AS 'TS_1',
                    0 AS 'TS'
   FROM
     (SELECT nim,
             LEFT(th_akademik, 4) AS th_akademik
      FROM `status_mahasiswa` a
      WHERE a.prodi = 'Teknik Industri S1'
        AND a.status = 'AKTIF'
      GROUP BY nim,
               LEFT(th_akademik, 4)) s
   INNER JOIN mahasiswa m ON m.nim = s.nim
   AND m.asing=1
   INNER JOIN ts ON ts.tahun = LEFT(s.th_akademik, 4)
   AND ts.prodi = 'Teknik Industri S1'
   AND ts.nama_ts = 'TS-1'
   GROUP BY ts.nama_ts
   UNION ALL SELECT ts.prodi,
                    0 AS 'TS_2',
                    0 AS 'TS_1',
                    COUNT(s.nim) AS 'TS'
   FROM
     (SELECT nim,
             LEFT(th_akademik, 4) AS th_akademik
      FROM `status_mahasiswa` a
      WHERE a.prodi = 'Teknik Industri S1'
        AND a.status = 'AKTIF'
      GROUP BY nim,
               LEFT(th_akademik, 4)) s
   INNER JOIN mahasiswa m ON m.nim = s.nim
   AND m.asing=1
   INNER JOIN ts ON ts.tahun = LEFT(s.th_akademik, 4)
   AND ts.prodi = 'Teknik Industri S1'
   AND ts.nama_ts = 'TS'
   GROUP BY ts.nama_ts) m ON m.prodi = z.prodi
