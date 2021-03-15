<?php
defined('BASEPATH') OR exit('No direct script access allowed');

  require('./application/third_party/phpoffice/vendor/autoload.php');

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class Export extends CI_Controller {

     public function __construct()
     {
          parent::__construct();
         $this->load->model('Model_export');
     }

     public function data()
     {
          $semua_pengguna = $this->Model_export->getAll()->result();

          $spreadsheet = new Spreadsheet;

          $spreadsheet->setActiveSheetIndex(0)
                      ->setCellValue('A1', 'ID Pengaduan')
                      ->setCellValue('B1', 'Tanggal Pengaduan')
                      ->setCellValue('C1', 'NIK')
                      ->setCellValue('D1', 'Judul Pengaduan')
                      ->setCellValue('E1', 'Isi Laporan')
                      ->setCellValue('F1', 'Lampiran')
                      ->setCellValue('G1', 'Status');


          $kolom = 2;
          foreach($semua_pengguna as $pengguna) {

               $spreadsheet->setActiveSheetIndex(0)
                           ->setCellValue('A' .$kolom, $pengguna->id_pengaduan)
                           ->setCellValue('B' .$kolom, $pengguna->tgl_pengaduan)
                           ->setCellValue('C' .$kolom, $pengguna->nik)
                           ->setCellValue('D' .$kolom, $pengguna->judul_pengaduan)
                           ->setCellValue('E' .$kolom, $pengguna->isi_laporan)
                           ->setCellValue('F' .$kolom, $pengguna->foto)
                           ->setCellValue('G' .$kolom, $pengguna->status);

               $kolom++;

          }

          $writer = new Xlsx($spreadsheet);

          header('Content-Type: application/vnd.ms-excel');
    header('Content-Disposition: attachment;filename="Data Pengaduan.xlsx"');
    header('Cache-Control: max-age=0');

    $writer->save('php://output');
     }

}

/* End of file Export.php */
/* Location: ./application/controllers/Export.php */