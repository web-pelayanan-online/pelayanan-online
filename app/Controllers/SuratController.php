<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\API\ResponseTrait;
use App\Models\Surat;

class SuratController extends BaseController
{
    use ResponseTrait;

    public function pengajuan($url = null)
    {
        $rules = [
            'nama_pemohon' => 'required',
            'alamat_pemohon' => 'required',
            'nik_pemohon' => 'required|numeric',
            'nama_data' => 'permit_empty',
            'alamat_data' => 'permit_empty',
            'keterangan' => 'permit_empty',
            'keperluan' => 'permit_empty',
            'penghasilan' => 'permit_empty',
            'jml_tanggungan_anak' => 'permit_empty|numeric',
            'identitas_kartu' => 'permit_empty',
            'nomor_identitas' => 'permit_empty|numeric',
            'perbedaan' => 'permit_empty',
            'umur' => 'permit_empty|numeric',
            'jenis_kelamin' => 'permit_empty',
            'agama' => 'permit_empty',
            'tanggal' => 'permit_empty',
            'tempat' => 'permit_empty',
            'hubungan' => 'permit_empty',
            'nama_ayah' => 'permit_empty',
            'nama_ibu' => 'permit_empty',
            'anak_ke' => 'permit_empty|numeric',
            'penyebab' => 'permit_empty',
        ];
        $messages = [
            'nama_pemohon' => ['required' => '{field} tidak boleh kosong'],
            'alamat_pemohon' => ['required' => '{field} tidak boleh kosong'],
            'nik_pemohon' => [
                'required' => '{field} tidak boleh kosong',
                'numeric' => '{field} harus berisi angka'
            ],
            'jml_tanggungan_anak' => ['numeric' => '{field} harus berisi angka'],
            'nomor_identitas' => ['numeric' => '{field} harus berisi angka'],
            'umur' => ['numeric' => '{field} harus berisi angka'],
            'anak_ke' => ['numeric' => '{field} harus berisi angka'],
        ];

        if ($this->validate($rules, $messages)) {
            $suratModel = new Surat;

            $suratData = [
                'nama_surat' => $this->request->getVar('nama_surat'),
                'nama_pemohon' => $this->request->getVar('nama_pemohon'),
                'alamat_pemohon' => $this->request->getVar('alamat_pemohon'),
                'nik_pemohon' => $this->request->getVar('nik_pemohon'),
                'nama_data' => $this->request->getVar('nama_data'),
                'alamat_data' => $this->request->getVar('alamat_data'),
                'keterangan' => $this->request->getVar('keterangan'),
                'keperluan' => $this->request->getVar('keperluan'),
                'penghasilan' => $this->request->getVar('penghasilan'),
                'jml_tanggungan_anak' => $this->request->getVar('jml_tanggungan_anak'),
                'identitas_kartu' => $this->request->getVar('identitas_kartu'),
                'nomor_identitas' => $this->request->getVar('nomor_identitas'),
                'perbedaan' => $this->request->getVar('perbedaan'),
                'umur' => $this->request->getVar('umur'),
                'jenis_kelamin' => $this->request->getVar('jenis_kelamin'),
                'agama' => $this->request->getVar('agama'),
                'tanggal' => $this->request->getVar('tanggal'),
                'tempat' => $this->request->getVar('tempat'),
                'hubungan' => $this->request->getVar('hubungan'),
                'nama_ayah' => $this->request->getVar('nama_ayah'),
                'nama_ibu' => $this->request->getVar('nama_ibu'),
                'anak_ke' => $this->request->getVar('anak_ke'),
                'penyebab' => $this->request->getVar('penyebab'),
            ];

            // $suratModel->save($suratData);

            // $findId = $suratModel
            //     ->where('nama_surat', $suratData['nama_surat'])
            //     ->where('nama_pemohon', $suratData['nama_pemohon'])
            //     ->orderBy('surat_id', 'DESC')
            //     ->first();

            $aplikasi = "e-Gilang";
            $border = "%0A------------------";

            $nama = "%0ANama%20:%20" . $suratData['nama_pemohon'];
            $alamat = "%0AAlamat%20:%20" . $suratData['alamat_pemohon'];
            $nik = "%0ANIK%20:%20" . $suratData['nik_pemohon'];
            $namaSurat = "%0A%0A" . $suratData['nama_surat'];


            $header = $aplikasi . $border . $nama . $alamat . $nik;
            if ($suratData['nama_surat'] == 'Surat Keterangan Kematian') {
                $nama_data = "%0ANama%20dan%20Alias%20:%20" . $suratData['nama_data'];
                $jenis_kelamin = "%0AJenis%20Kelamin%20:%20" . $suratData['jenis_kelamin'];
                $tempat = "%0ATempat%20Meninggal%20:%20" . $suratData['tempat'];
                $hubungan = "%0AHubungan%20Pelapor%20dengan%20yang%20Meninggal%20:%20" . $suratData['hubungan'];
            } else if ($suratData['nama_surat'] == 'Surat Keterangan Kelahiran') {
                $nama_data = "%0ANama%20Bayi%20:%20" . $suratData['nama_data'];
                $jenis_kelamin = "%0AJenis%20Kelamin%20Bayi%20:%20" . $suratData['jenis_kelamin'];
                $tempat = "%0ATempat%20Kelahiran%20:%20" . $suratData['tempat'];
                $hubungan = "%0AHubungan%20Pelapor%20dengan%20Bayi%20:%20" . $suratData['hubungan'];
            } else if ($suratData['nama_surat'] == "Surat Keterangan Pengantar Kehilangan") {
                $nama_data = "%0ANama%20Barang%20Hilang%20:%20" . $suratData['nama_data'];
                $tempat = "%0ATempat%20Kehilangan%20:%20" . $suratData['tempat'];
            } else if ($suratData['nama_surat'] == "Surat Keterangan Domisili Usaha") {
                $nama_data = "%0AKeterangan%20Usaha%20:%20" . $suratData['nama_data'];
            } else if ($suratData['nama_surat'] == "Surat Keterangan Usaha") {
                $nama_data = "%0ANama/Jenis%20Usaha%20:%20" . $suratData['nama_data'];
            } else {
                $nama_data = null;
                $jenis_kelamin = null;
                $tempat = null;
                $hubungan = null;
            }
            $isi = $namaSurat
                . ((is_null($nama_data)) ? "" : $nama_data)
                . ((isset($suratData['umur'])) ? "%0AUmur%20:%20" . $suratData['umur'] . "%20Tahun" : "")
                // . ((is_null($jenis_kelamin)) ? "" : $jenis_kelamin)
                . ((isset($jenis_kelamin)) ? $jenis_kelamin : "")
                . ((isset($suratData['agama'])) ? "%0AAgama%20:%20" . $suratData['agama'] : "")
                . ((isset($suratData['nama_ayah'])) ? "%0ANama%20Ayah%20:%20" . $suratData['nama_ayah'] : "")
                . ((isset($suratData['nama_ibu'])) ? "%0ANama%20Ibu%20:%20" . $suratData['nama_ibu'] : "")
                . ((isset($suratData['alamat_data'])) ? "%0AAlamat%20:%20" . $suratData['alamat_data'] : "")
                . ((isset($suratData['tanggal'])) ? "%0AHari/Tanggal/Jam%20:%20" . date('Y-m-d', strtotime($suratData['tanggal'])) . ",%20" . date("H:i", strtotime($suratData['tanggal'])) : "")
                // . ((is_null($tempat)) ? "" : $tempat)
                . ((isset($tempat)) ? $tempat : "")
                . ((isset($suratData['penyebab'])) ? "%0APenyebab%20Kematian%20:%20" . $suratData['penyebab'] : "")
                . ((isset($suratData['penghasilan'])) ? "%0APenghasilan%20Rata-rata%20Perbulan%20:%20" . $suratData['penghasilan'] : "")
                // . ((is_null($hubungan)) ? "" : $hubungan)
                . ((isset($hubungan)) ? $hubungan : "")
                . ((isset($suratData['ciri_ciri'])) ? "%0ACiri-ciri%20Barang%20:%20" . $suratData['ciri_ciri'] : "")
                . ((isset($suratData['jml_tanggungan_anak'])) ? "%0AJumlah%20Tanggungan%20Anak%20:%20" . $suratData['jml_tanggungan_anak'] : "")
                . ((isset($suratData['identitas_kartu'])) ? "%0AIdentitas%20dalam%20(nama%20kartu)%20:%20" . $suratData['identitas_kartu'] : "")
                . ((isset($suratData['nomor_identitas'])) ? "%0ANomor%20Identitas%20:%20" . $suratData['nomor_identitas'] : "")
                . ((isset($suratData['perbedaan'])) ? "%0APerbedaan%20:%20" . $suratData['perbedaan'] : "")
                . ((isset($suratData['keterangan'])) ? "%0AKeterangan%20:%20" . $suratData['keterangan'] : "")
                . ((isset($suratData['keperluan'])) ? "%0AKeperluan%20:%20" . $suratData['keperluan'] : "");
            $pesan = $header . $isi;

            return redirect()->to("https://api.whatsapp.com/send?phone=+6285729982887&text=" . $pesan);
        } else {

            return redirect()->to(base_url() . $url);
        }
    }
}
