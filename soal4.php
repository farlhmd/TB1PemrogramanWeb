<?php
class MAHASISWA
{
    private $qualifikasi;

    public function setQualifikasi($nilai = 0)
    {
        if ($nilai >= 80) {
            $this->qualifikasi = "A";
        } else if ($nilai >= 60 && $nilai < 80){
            $this->qualifikasi = "B";
        } else if ($nilai >= 40 && $nilai < 60){
            $this->qualifikasi = "C";
        } else if ($nilai < 40 ){
            $this->qualifikasi = "D";
        }
    }

    public function getQualifikasi()
    {
        return $this->qualifikasi;
    }
}

$MAHASISWA = new MAHASISWA();
$MAHASISWA->setQualifikasi(70);

echo $MAHASISWA->getQualifikasi();

?>