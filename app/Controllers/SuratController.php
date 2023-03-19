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
            'penghasilan' => 'permit_empty|numeric',
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
            'penghasilan' => ['numeric' => '{field} harus berisi angka'],
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

            $suratModel->save($suratData);

            $findId = $suratModel
                ->where('nama_surat', $suratData['nama_surat'])
                ->where('nama_pemohon', $suratData['nama_pemohon'])
                ->orderBy('surat_id', 'DESC')
                ->first();

            $judul = "Saya%20mau%20membuat%20" . $suratData['nama_surat'] . ",%20dengan%20ketentuan%20:";
            $suratID = "%0ASurat%20ID%20:%20" . $findId['surat_id'];
            $nama = "%0ANama%20:%20" . $suratData['nama_pemohon'];
            $alamat = "%0AAlamat%20:%20" . $suratData['alamat_pemohon'];
            $nik = "%0ANIK%20:%20" . $suratData['nik_pemohon'];

            $pesan = $judul . $suratID . $nama . $alamat . $nik;

            // $response = [
            //     'status' => true,
            //     'message' => 'Pengajuan berhasil ditambahkan',
            // ];
            return redirect()->to("https://api.whatsapp.com/send?phone=+6285729982887&text=" . $pesan);
        } else {
            // $response = [
            //     'status' => false,
            //     'errors' => $this->validator->getErrors(),
            // ];

            return redirect()->to(base_url() . $url);
        }
    }
}
