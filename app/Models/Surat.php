<?php

namespace App\Models;

use CodeIgniter\Model;

class Surat extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'surat';
    protected $primaryKey       = 'surat_id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'status_surat', 'nama_surat', 'surat_id', 'nama_pemohon', 'alamat_pemohon', 'nik_pemohon',
        'nama_data', 'alamat_data', 'keterangan', 'keperluan',
        'penghasilan', 'jml_tanggungan_anak', 'identitas_kartu',
        'nomor_identitas', 'perbedaan', 'umur', 'jenis_kelamin', 'agama',
        'tanggal', 'tempat', 'hubungan', 'nama_ayah', 'nama_ibu', 'ciri_ciri',
        'anak_ke', 'penyebab'
    ];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];
}
