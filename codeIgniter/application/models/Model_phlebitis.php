<?php
class model_phlebitis extends CI_Model {
    public $laporan;
    function __construct() {	
        $this->laporan = $this->load->database('laporan', TRUE);
    }

    function get_data($bulan,$year){
        $query='select 
                    master.pasien.NORM,
                    master.pasien.NAMA AS NAMAPASIEN,
                    daftartindakan.nama AS NAMATINDAKAN,
                    layanan.tindakan_medis.TANGGAL
                from 
                    layanan.tindakan_medis 
                inner join 
                    (select 
                        ID,NAMA
                    from 
                        master.tindakan 
                    where 
                        (master.tindakan.nama like "%infus%")and master.tindakan.nama <> "Ganti Cairan Infus" ) AS daftartindakan
                    ON daftartindakan.id = layanan.tindakan_medis.TINDAKAN
                inner join
                    pendaftaran.kunjungan ON pendaftaran.kunjungan.NOMOR = layanan.tindakan_medis.KUNJUNGAN
                inner join
                    pendaftaran.pendaftaran ON pendaftaran.pendaftaran.NOMOR = pendaftaran.kunjungan.NOPEN
                inner join
                    `master`.pasien ON `master`.pasien.NORM = pendaftaran.pendaftaran.NORM
                where
                    MONTH (layanan.tindakan_medis.TANGGAL) IN ('.$bulan.') AND
                    YEAR (layanan.tindakan_medis.TANGGAL) = '.$year.' AND
                    layanan.tindakan_medis.STATUS=1
                order by 
                    `master`.pasien.NORM,layanan.tindakan_medis.TANGGAL'
        ;
        $result = $this->laporan->query($query)->result();
        return $result;
    }
}
?>
