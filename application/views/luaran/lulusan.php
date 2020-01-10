SELECT ts_masuk.seq_id, ts_masuk.nama_ts, SUM(CASE WHEN a.tahun='TS' THEN 1 ELSE 0 END) AS ts
FROM `mahasiswa` c
INNER JOIN ts AS ts_masuk ON ts_masuk.tahun = LEFT(c.thn_akademik, 4) AND ts_masuk.prodi = 'TEKNIK INDUSTRI S1'
LEFT JOIN ts AS ts6 ON ts2.tahun = pa.th_akademik AND ts2.prodi = 'TEKNIK INDUSTRI S1' AND ts2.nama_ts = 'TS-2'
LEFT JOIN ts AS ts5 ON ts1.tahun = pa.th_akademik AND ts1.prodi = 'TEKNIK INDUSTRI S1' AND ts1.nama_ts = 'TS-1'
LEFT JOIN ts AS ts4 ON ts2.tahun = pa.th_akademik AND ts2.prodi = 'TEKNIK INDUSTRI S1' AND ts2.nama_ts = 'TS-2'
LEFT JOIN ts AS ts3 ON ts1.tahun = pa.th_akademik AND ts1.prodi = 'TEKNIK INDUSTRI S1' AND ts1.nama_ts = 'TS-1'
LEFT JOIN ts AS ts2 ON ts2.tahun = pa.th_akademik AND ts.prodi = 'TEKNIK INDUSTRI S1' AND ts.nama_ts = 'TS'
LEFT JOIN ts AS ts1 ON ts1.tahun = pa.th_akademik AND ts1.prodi = 'TEKNIK INDUSTRI S1' AND ts1.nama_ts = 'TS-1'
LEFT JOIN ts ON ts.tahun = c.thn_lulus AND ts.prodi = 'TEKNIK INDUSTRI S1' AND ts.nama_ts = 'TS-1'
WHERE c.prodi = 'TEKNIK INDUSTRI S1'
AND c.status_mhs='LULUS'
AND c.status_asal='REGULER'
AND ts.nama_ts IN ('TS-6','TS-5','TS-4','TS-3')
GROUP BY ts.nama_ts
ORDER BY ts.seq_id DESC
