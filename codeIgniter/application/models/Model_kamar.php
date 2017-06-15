<?php
class model_kamar extends CI_Model {
    function __construct() {
        $this->load->database();
    }

    function tersedia($kamar){
        $query='select
                    master.referensi.DESKRIPSI,
                    count(master.ruang_kamar_tidur.TEMPAT_TIDUR) as jumlah
                from
                        master.ruang_kamar
                inner join
                        master.ruangan
                        on master.ruangan.id=master.ruang_kamar.RUANGAN
                inner join
                        master.ruang_kamar_tidur
                        on master.ruang_kamar_tidur.RUANG_KAMAR=master.ruang_kamar.ID
                inner join
                        master.referensi on master.referensi.ID = 	master.ruang_kamar.KELAS
                where
                        master.referensi.JENIS = 19 and
                        master.ruang_kamar.STATUS!=0 and
                        master.ruang_kamar_tidur.TEMPAT_TIDUR NOT IN ("TT-Bayi","TT-Bayi-1","TT-Bayi-2","TT-Bayi-3","TT-Bayi-4","TT-Bayi-5","TT-Bayi-6","TT-Bayi-7","TT-Bayi-8") and
                        master.referensi.DESKRIPSI ="'.$kamar.'" and
                        master.ruang_kamar_tidur.STATUS NOT IN (0,3)
                group by
                        master.referensi.DESKRIPSI';
        ;
        $result = $this->db->query($query)->result();
        return $result;
    }
}
?>
