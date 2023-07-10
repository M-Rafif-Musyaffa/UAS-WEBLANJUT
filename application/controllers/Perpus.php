<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Perpus extends CI_Controller
{
    public function index()
    {
        $data['buku'] = $this->m_perpus->tampil_data()->result();
        $this->load->view('page/header');
        $this->load->view('page/sidebar');
        $data['count'] = $this->m_perpus->get_count();
        $this->load->view('dashboard', $data);
        $this->load->view('page/footer');
    }
    public function index1()
    {
        $data['buku'] = $this->m_perpus->tampil_data()->result();
        $this->load->view('page/header');
        $this->load->view('page/sidebar');
        $this->load->view('table_buku', $data);
        $this->load->view('page/footer');
    }
    public function form_buku()
    {
        $data['buku'] = $this->m_perpus->tampil_data()->result();
        $this->load->view('page/header');
        $this->load->view('page/sidebar');
        $this->load->view('form_buku', $data);
        $this->load->view('page/footer');
    }

    public function tambah_aksi()
    {
        $judul        = $this->input->post('judul');
        $pengarang        = $this->input->post('pengarang');
        $penerbit     = $this->input->post('penerbit');
        $tahun_terbit     = $this->input->post('tahun_terbit');
        $deskripsi     = $this->input->post('deskripsi');
        $foto = $_FILES['foto'];
        if ($foto = '') {
        } else {
            $config['upload_path'] = './assets/foto';
            $config['allowed_types'] = 'jpg|png|gif';
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('foto')) {
                echo "Upload Gagal";
                die();
            } else {
                $foto = $this->upload->data('file_name');
            }
        }

        //data yang dikirim harus bertipe array
        $data = array(
            'judul'     => $judul,
            'pengarang'         => $pengarang,
            'penerbit'        => $penerbit,
            'tahun_terbit'     => $tahun_terbit,
            'deskripsi'     => $deskripsi,
            'foto' => $foto
        );

        //method yang nanti akan digunakan di model
        //untuk memasukan data ke database
        $this->m_perpus->input_data($data, 'tb_buku');
        redirect('perpus/index');
    }

    // menghapus data
    public function hapus($id)
    {
        $where = array('id' => $id);
        //method yang nanti akan digunakan di model
        //untuk menghapus data dari database
        $this->m_perpus->hapus_data($where, 'tb_buku');
        redirect('perpus/index');
    }

    //fungsi untuk merubah data
    public function edit($id)
    {
        $where = array('id' => $id);
        //method yang nanti akan digunakan di model
        //untuk merubah data dari database
        $data['buku'] = $this->m_perpus->edit_data($where, 'tb_buku')->result();
        $this->load->view('page/header');
        $this->load->view('page/sidebar');
        $this->load->view('edit', $data);
        $this->load->view('page/footer');
    }
    //fungsi untuk memperbaharui/mengupdate data dari database
    public function update()
    {
        $id = $this->input->post('id');
        $judul = $this->input->post('judul');
        $pengarang = $this->input->post('pengarang');
        $penerbit = $this->input->post('penerbit');
        $tahun_terbit = $this->input->post('tahun_terbit');
        $deskripsi     = $this->input->post('deskripsi');
        $foto = $this->input->post('foto');
        $data = array(
            'judul' => $judul,
            'pengarang' => $pengarang,
            'penerbit' => $penerbit,
            'tahun_terbit' => $tahun_terbit,
            'deskripsi' => $deskripsi,
            'foto' => $foto
        );
        $where = array(
            'id' => $id
        );
        //method yang nanti akan digunakan di model
        //untuk merubah mengapdate data dari database
        $this->m_perpus->update_data($where, $data, 'tb_buku');
        redirect('perpus/index1');
    }
    //fungsi untuk menampilkan detail data
    public function detail($id)
    {
        $this->load->model('m_perpus');
        $detail = $this->m_perpus->detail_data($id);
        $data['detail'] = $detail;
        $this->load->view('page/header');
        $this->load->view('page/sidebar');
        $this->load->view('detail', $data);
        $this->load->view('page/footer');
    }

    public function cetak()
    {
        $data['buku'] = $this->m_perpus->tampil_data("tb_buku")->result();
        $this->load->view('print_buku', $data);
    }

    public function pdf()
    {
        //load library dompdf_gen
        $this->load->library('dompdf_gen');
        //menampilkan data buku yang ada pada tabel
        $data['buku'] = $this->m_perpus->tampil_data('tb_buku')->result();
        //load view laporan_pdf
        $this->load->view('laporan_pdf', $data);
        //menentukan ukuran kertas
        $paper_size = 'A4';
        //menentukan orientation kertas
        $orientation = 'landscape';
        $html = $this->output->get_output();
        //set(pengaturan) kertas
        $this->dompdf->set_paper($paper_size, $orientation);
        //convert ke pdf
        $this->dompdf->load_html($html);
        $this->dompdf->render();
        //menentukan file export
        $this->dompdf->stream("laporan_buku.pdf", array('Attachment' => 0));
    }

    public function excel()
    {
        $data['buku'] = $this->m_perpus->tampil_data('tb_buku')->result();
        require(APPPATH . 'PHPExcel-1.8/Classes/PHPExcel.php');
        require(APPPATH . 'PHPExcel-1.8/Classes/PHPExcel/Writer/Excel2007.php');
        $object = new PHPExcel();
        $object->getProperties()->setCreator("TOKO SEJAHTERA");
        $object->getProperties()->setLastModifiedBy("TOKO SEJAHTERA");
        $object->getProperties()->setTitle("Daftar buku");
        $object->setActiveSheetIndex(0);
        $object->getActiveSheet()->setCellValue('A1', 'NO');
        $object->getActiveSheet()->setCellValue('B1', 'JUDUL BUKU');
        $object->getActiveSheet()->setCellValue('C1', 'PENGARANG');
        $object->getActiveSheet()->setCellValue('D1', 'PENERBIT');
        $object->getActiveSheet()->setCellValue('E1', 'TAHUN TERBIT');
        $object->getActiveSheet()->setCellValue('F1', 'DESKRIPSI');
        $baris = 2;
        $no = 1;
        foreach ($data['tb_buku'] as $brg) {
            $object->getActiveSheet()->setCellValue('A' . $baris, $no++);
            $object->getActiveSheet()->setCellValue('B' . $baris, $brg->judul);
            $object->getActiveSheet()->setCellValue('C' . $baris, $brg->pengarang);
            $object->getActiveSheet()->setCellValue('D' . $baris, $brg->penerbit);
            $object->getActiveSheet()->setCellValue('E' . $baris, $brg->tahun_terbit);
            $object->getActiveSheet()->setCellValue('E' . $baris, $brg->deskripsi);
            $baris++;
        }
        $filename = "Data buku" . '.xlsx';
        $object->getActiveSheet()->setTitle("Data buku");
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename="' . $filename . '"');
        header('Cache-Control: max-age=0');
        $writer = PHPExcel_IOFactory::createwriter($object, 'Excel2007');
        $writer->save('php://output');
        exit;
    }
}
