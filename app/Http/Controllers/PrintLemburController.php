<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Lembur;
use Codedge\Fpdf\Fpdf\Fpdf;
use Codedge\Fpdf\Fpdf\PDF_HTML;

class PrintLemburController extends Controller
{
    protected $fpdf;
 
    public function __construct()
    {
        $this->fpdf = new PDF_HTML;
        
    }

    public function index($id) 
    {
        $lembur = Lembur::find($id);
        
        $day = date('D', strtotime($lembur->lem_dari));
        $dayList = array(
            'Sun' => 'Minggu',
            'Mon' => 'Senin',
            'Tue' => 'Selasa',
            'Wed' => 'Rabu',
            'Thu' => 'Kamis',
            'Fri' => 'Jumat',
            'Sat' => 'Sabtu'
        );
        $bulan = date('m', strtotime($lembur->lem_dari));
        $bulanList = array(
            '01' => 'Januari',
            '02' => 'Februari',
            '03' => 'Maret',
            '04' => 'April',
            '05' => 'Mei',
            '06' => 'Juni',
            '07' => 'Juli',
            '08' => 'Agustus',
            '09' => 'September',
            '10' => 'Oktober',
            '11' => 'November',
            '12' => 'Desember',
        );

        $tglspl = date('d', strtotime($lembur->Supel->sup_tanggal)). ' ' .  $bulanList[date('m', strtotime($lembur->Supel->sup_tanggal))] . ' ' .  date('Y', strtotime($lembur->Supel->sup_tanggal));

        $hari = $dayList[$day] . ', ' . date('d', strtotime($lembur->lem_dari)) . ' ' .  $bulanList[$bulan] . ' ' .  date('Y', strtotime($lembur->lem_dari)) . ' Pukul ' . date('H:i', strtotime($lembur->lem_dari)) . ' s/d ' . date('H:i', strtotime($lembur->lem_sampai));

        $xh = -19;
        $yv = 5;
        $this->fpdf->AddPage("P", "A4");

        // heeader
        $this->fpdf->Image('img/user_img/kop_baru.jpg',10,6,189,46);

        // judul
        $this->fpdf->SetFont('Arial', 'BU', 12);
        $noSur = "LAPORAN HASIL LEMBUR";
        $lebarHalaman = $this->fpdf->GetPageWidth()/2;
        $lebarText = $this->fpdf->GetStringWidth($noSur)/2;
        $this->fpdf->Text($lebarHalaman-$lebarText, 57+$yv, $noSur);

        // identitas
        $this->fpdf->SetFont('Arial', '', 12);
        $this->fpdf->Text(45+$xh, 67+5+$yv, "Nama");
        $this->fpdf->Text(82+$xh, 67+5+$yv, ":");
        $this->fpdf->Text(85+$xh, 67+5+$yv, $lembur->Supel->User->name);
        $this->fpdf->Text(45+$xh, 72+5+$yv, "NIP");
        $this->fpdf->Text(82+$xh, 72+5+$yv, ":");
        $this->fpdf->Text(85+$xh, 72+5+$yv, $lembur->Supel->User->nip);
        $this->fpdf->Text(45+$xh, 77+5+$yv, "Pangkat/Golongan");
        $this->fpdf->Text(82+$xh, 77+5+$yv, ":");
        $this->fpdf->Text(85+$xh, 77+5+$yv, $lembur->Supel->User->pangkat);
        $this->fpdf->Text(45+$xh, 82+5+$yv, "Jabatan");
        $this->fpdf->Text(82+$xh, 82+5+$yv, ":");
        $this->fpdf->Text(85+$xh, 82+5+$yv, $lembur->Supel->User->jabatan);

        // point A
        $this->fpdf->Text(45+$xh, 100+$yv, "A.");
        $this->fpdf->Text(53+$xh, 100+$yv, "Dasar");
        $this->fpdf->SetXY(52+$xh, 103+$yv);
        $this->fpdf->MultiCell(152,5,"Surat Perintah Kerja Lembur Kepala Kantor Stasiun Karantina Ikan Pengendalian Mutu dan Keamanan Hasil Perikanan Merak, tanggal ". $tglspl . " dengan Nomor : " . $lembur->Supel->sup_nomor) . ".";

        // point B
        $this->fpdf->Text(45+$xh, 124+$yv, "B.");
        $this->fpdf->Text(53+$xh, 124+$yv, "Maksud dan Tujuan");
        $this->fpdf->Text(53+$xh, 131+$yv, "Maksud");
        $this->fpdf->Text(72+$xh, 131+$yv, ":");
        $this->fpdf->SetXY(76+$xh, 127.4+$yv);
        $this->fpdf->MultiCell(128,5,$lembur->lem_maksud . ".") ;
        // $this->fpdf->MultiCell(128,5,$this->fpdf->GetY()) ;
        
        $this->fpdf->Text(53+$xh, $this->fpdf->GetY()+$yv, "Tujuan");
        $this->fpdf->Text(72+$xh, $this->fpdf->GetY()+$yv, ":");
        $this->fpdf->SetXY(76+$xh, $this->fpdf->GetY()-3.5+$yv);
        $this->fpdf->MultiCell(128,5,$lembur->lem_tujuan . ".") ;
        // $this->fpdf->MultiCell(128,5,$this->fpdf->GetY()) ;

        // point C
        $this->fpdf->Text(45+$xh, $this->fpdf->GetY()+$yv, "C.");
        $this->fpdf->Text(53+$xh, $this->fpdf->GetY()+$yv, "Waktu dan Tempat");
        $this->fpdf->Text(53+$xh, $this->fpdf->GetY()+7+$yv, "Waktu");
        $this->fpdf->Text(72+$xh, $this->fpdf->GetY()+7+$yv, ":");
        $this->fpdf->Text(77+$xh, $this->fpdf->GetY()+7+$yv, $hari);
        $this->fpdf->Text(53+$xh, $this->fpdf->GetY()+14+$yv, "Tempat");
        $this->fpdf->Text(72+$xh, $this->fpdf->GetY()+14+$yv, ":");
        $this->fpdf->SetXY(76+$xh, $this->fpdf->GetY()+10.8+$yv);
        $this->fpdf->MultiCell(128,5,$lembur->lem_tempat) ;

        // point D
        $this->fpdf->Text(45+$xh, $this->fpdf->GetY()+$yv, "D.");
        $this->fpdf->Text(53+$xh, $this->fpdf->GetY()+$yv, "Hasil yang dicapai");
        $this->fpdf->SetXY(52+$xh, $this->fpdf->GetY()+3.4+$yv);
        // $this->fpdf->MultiCell(152,5,$lembur->lem_hasil) ;
        $this->fpdf->WriteHTML($lembur->lem_hasil);
        
        $this->fpdf->Output();
    }
}
