<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Codedge\Fpdf\Fpdf\Fpdf;
use App\Models\Supel;

class PdfControllerSuper extends Controller
{
    protected $fpdf;
 
    public function __construct()
    {
        $this->fpdf = new Fpdf;
        
    }

    public function index($id) 
    {
        $supel = Supel::find($id);
        $bulan = array(
            1 =>   'Januari',
            'Februari',
            'Maret',
            'April',
            'Mei',
            'Juni',
            'Juli',
            'Agustus',
            'September',
            'Oktober',
            'November',
            'Desember'
        );
        $tgl_surat = date("d", strtotime($supel->sup_tanggal)) . ' ' . $bulan[intval(date("m", strtotime($supel->sup_tanggal)))] . ' ' . date("Y", strtotime($supel->sup_tanggal));
        $xh = 10;
        $yv = 43;

        $this->fpdf->AddPage("P", "A4");
        $this->fpdf->Image('img/user_img/kop_baru.jpg',10,6,189,46);
        $this->fpdf->SetFont('Arial', 'BU', 12);
        $noSur = "SURAT PERINTAH KERJA LEMBUR";
        $lebarHalaman = $this->fpdf->GetPageWidth()/2;
        $lebarText = $this->fpdf->GetStringWidth($noSur)/2;
        $this->fpdf->Text($lebarHalaman-$lebarText, 20+$yv, $noSur);       
        // $this->fpdf->Text(65, 20+$yv, $noSur);       
        $this->fpdf->SetFont('Arial', '', 12);
        $noSur = $supel->sup_nomor;
        $lebarHalaman = $this->fpdf->GetPageWidth()/2;
        $lebarText = $this->fpdf->GetStringWidth($noSur)/2;
        $this->fpdf->Text($lebarHalaman-$lebarText, 25+$yv, $noSur);       
        
        $this->fpdf->SetXY(15+$xh, 30+$yv);   
        $this->fpdf->MultiCell(162,5,"Dalam rangka pelaksanaan tugas pokok dan fungsi Karantina Ikan, Pengendalian Mutu dan Keamanan Hasil Perikanan dalam lingkup Stasiun Karantina Ikan, Pengendalian Mutu dan Keamanan Hasil Perikanan Merak di wilayah Banten, maka kami menugaskan :");
        $this->fpdf->SetXY(15+$xh, 35+$yv);
        $this->fpdf->Text(16+$xh, 57+$yv, "Kepada");
        $this->fpdf->Text(35+$xh, 57+$yv, ":");
        $this->fpdf->Text(45+$xh, 57+$yv, "Nama");
        $this->fpdf->Text(82+$xh, 57+$yv, ":");
        $this->fpdf->Text(85+$xh, 57+$yv, $supel->User->name);
        $this->fpdf->Text(45+$xh, 62+$yv, "NIP");
        $this->fpdf->Text(82+$xh, 62+$yv, ":");
        $this->fpdf->Text(85+$xh, 62+$yv, $supel->User->nip);
        $this->fpdf->Text(45+$xh, 67+$yv, "Pangkat/Golongan");
        $this->fpdf->Text(82+$xh, 67+$yv, ":");
        $this->fpdf->Text(85+$xh, 67+$yv, $supel->User->pangkat);
        $this->fpdf->Text(45+$xh, 72+$yv, "Jabatan");
        $this->fpdf->Text(82+$xh, 72+$yv, ":");
        $this->fpdf->Text(85+$xh, 72+$yv, $supel->User->jabatan);
        $this->fpdf->Text(16+$xh, 80+$yv, "Untuk");
        $this->fpdf->Text(35+$xh, 80+$yv, ":");
        $this->fpdf->Text(45+$xh, 80+$yv, "1.");
        $this->fpdf->SetXY(50+$xh, 76+$yv);
        $this->fpdf->MultiCell(126,5,strip_tags($supel->sup_keterangan));
        $this->fpdf->Text(45+$xh, 100+$yv, "2.");
        $this->fpdf->SetXY(50+$xh, 96.4+$yv);
        $this->fpdf->MultiCell(126,5,"Setelah selesai menjalankan tugasnya, diwajibkan membuat laporan secara tertulis kepada atasan langsung.");
        $this->fpdf->SetXY(15+$xh, 108+$yv);   
        $this->fpdf->MultiCell(162,5,"       Demikian surat tugas ini diberikan kepada yang bersangkutan untuk dilaksanakan dengan penuh tanggungjawab.");
        $this->fpdf->Text(120+$xh, 130+$yv, "Merak, ".$tgl_surat);
        $this->fpdf->Text(120+$xh, 135+$yv, "Kepala");
        $this->fpdf->Text(120+$xh, 162+$yv, "Iromo, S.IP");
        $this->fpdf->Text(120+$xh, 167+$yv, "NIP.  19691031 198903 1 002");

        $this->fpdf->Output();

        exit;
    }

    
}
