SELECT ts_masuk.seq_id, ts_masuk.nama_ts, SUM(CASE WHEN c.thn_akademik=ts_masuk.tahun THEN 1 ELSE 0 END) AS jml,
SUM(CASE WHEN LEFT(c.thn_lulus,4)=ts6.tahun THEN 1 ELSE 0 END) AS ts6,
SUM(CASE WHEN LEFT(c.thn_lulus,4)=ts5.tahun THEN 1 ELSE 0 END) AS ts5,
SUM(CASE WHEN LEFT(c.thn_lulus,4)=ts4.tahun THEN 1 ELSE 0 END) AS ts4,
SUM(CASE WHEN LEFT(c.thn_lulus,4)=ts3.tahun THEN 1 ELSE 0 END) AS ts3,
SUM(CASE WHEN LEFT(c.thn_lulus,4)=ts2.tahun THEN 1 ELSE 0 END) AS ts2,
SUM(CASE WHEN LEFT(c.thn_lulus,4)=ts1.tahun THEN 1 ELSE 0 END) AS ts1,
SUM(CASE WHEN LEFT(c.thn_lulus,4)=ts.tahun THEN 1 ELSE 0 END) AS ts,
FORMAT(AVG(c.masa_studi),2) as masa_studi
FROM mahasiswa c
INNER JOIN ts AS ts_masuk ON ts_masuk.tahun = c.thn_akademik AND ts_masuk.prodi = 'TEKNIK INDUSTRI S1'
LEFT JOIN ts AS ts6 ON ts6.tahun = LEFT(c.thn_lulus,4) AND ts6.prodi = 'TEKNIK INDUSTRI S1' AND ts6.nama_ts = 'TS-6'
LEFT JOIN ts AS ts5 ON ts5.tahun = LEFT(c.thn_lulus,4) AND ts5.prodi = 'TEKNIK INDUSTRI S1' AND ts5.nama_ts = 'TS-5'
LEFT JOIN ts AS ts4 ON ts4.tahun = LEFT(c.thn_lulus,4) AND ts4.prodi = 'TEKNIK INDUSTRI S1' AND ts4.nama_ts = 'TS-4'
LEFT JOIN ts AS ts3 ON ts3.tahun = LEFT(c.thn_lulus,4) AND ts3.prodi = 'TEKNIK INDUSTRI S1' AND ts3.nama_ts = 'TS-3'
LEFT JOIN ts AS ts2 ON ts2.tahun = LEFT(c.thn_lulus,4) AND ts2.prodi = 'TEKNIK INDUSTRI S1' AND ts2.nama_ts = 'TS-2'
LEFT JOIN ts AS ts1 ON ts1.tahun = LEFT(c.thn_lulus,4) AND ts1.prodi = 'TEKNIK INDUSTRI S1' AND ts1.nama_ts = 'TS-1'
LEFT JOIN ts ON ts.tahun = c.thn_lulus AND ts.prodi = 'TEKNIK INDUSTRI S1' AND ts.nama_ts = 'TS'
WHERE c.prodi = 'TEKNIK INDUSTRI S1'
AND c.status_mhs='LULUS'
AND c.status_asal='REGULER'
AND ts_masuk.nama_ts IN ('TS-6','TS-5','TS-4','TS-3')
GROUP BY ts_masuk.nama_ts
ORDER BY ts_masuk.seq_id DESC