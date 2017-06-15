<?php
class model_operasi extends CI_Model {
    public $laporan;
    function __construct() {	
        $this->laporan = $this->load->database('laporan', TRUE);
    }

    function get_data($bulan,$year){
        $query='SELECT 
                 master.pasien.NORM,
                 medicalrecord.operasi.TANGGAL,
                 master.pasien.NAMA AS NAMAPASIEN,
                 master.pasien.TANGGAL_LAHIR AS UMUR,
                 master.pasien.ALAMAT,
                 master.pegawai.GELAR_DEPAN,
                 master.pegawai.NAMA AS NAMADOKTER,
                 master.pegawai.GELAR_BELAKANG,
                 medicalrecord.operasi.PRA_BEDAH,
                 medicalrecord.operasi.WAKTU_MULAI,
                 medicalrecord.operasi.WAKTU_SELESAI,
                 medicalrecord.operasi.PASCA_BEDAH,
                 medicalrecord.operasi.NAMA_OPERASI,
                 medicalrecord.operasi.LAPORAN_OPERASI
                FROM 
                    medicalrecord.operasi
                inner join
                    pendaftaran.kunjungan ON pendaftaran.kunjungan.NOMOR = medicalrecord.operasi.KUNJUNGAN
                inner join
                    pendaftaran.pendaftaran ON pendaftaran.pendaftaran.NOMOR = pendaftaran.kunjungan.NOPEN
                inner join
                    master.pasien ON master.pasien.NORM = pendaftaran.pendaftaran.NORM
                inner join
                    master.dokter ON master.dokter.ID =  medicalrecord.operasi.DOKTER
                inner join
                    master.pegawai ON master.pegawai.NIP = master.dokter.NIP
                WHERE
                    MONTH (medicalrecord.operasi.TANGGAL) IN ('.$bulan.') AND
                    YEAR (medicalrecord.operasi.TANGGAL) = '.$year.'
                ORDER BY medicalrecord.operasi.TANGGAL
                    '
        ;
        $result = $this->laporan->query($query)->result();
        return $result;
    }
}
?>
