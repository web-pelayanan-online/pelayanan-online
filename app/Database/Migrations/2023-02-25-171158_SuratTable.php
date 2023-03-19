<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class SuratTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'surat_id'          => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true
            ],
            'status_surat'          => [
                'type'           => 'INT',
                'constraint'     => 1,
                'default'        => 0,
            ],
            'nama_surat'          => [
                'type'           => 'VARCHAR',
                'constraint'     => 255,
            ],
            'nama_pemohon'          => [
                'type'           => 'VARCHAR',
                'constraint'     => 255,
            ],
            'alamat_pemohon'          => [
                'type'           => 'VARCHAR',
                'constraint'     => 255,
            ],
            'nik_pemohon'          => [
                'type'           => 'VARCHAR',
                'constraint'     => 20,
            ],
            'nama_data'          => [
                'type'           => 'VARCHAR',
                'constraint'     => 75,
                'null'          => true,
            ],
            'alamat_data' => [
                'type'           => 'VARCHAR',
                'constraint'     => 255,
                'null'          => true,
            ],
            'keterangan' => [
                'type'          => 'VARCHAR',
                'constraint'    => 255,
                'null'          => true,
            ],
            'keperluan' => [
                'type'          => 'VARCHAR',
                'constraint'    => 255,
                'null'          => true,
            ],
            'penghasilan' => [
                'type'          => 'VARCHAR',
                'constraint'    => 100,
                'null'          => true,
            ],
            'jml_tanggungan_anak' => [
                'type'          => 'INT',
                'constraint'    => 5,
                'null'          => true,
            ],
            'identitas_kartu' => [
                'type'          => 'VARCHAR',
                'constraint'    => 75,
                'null'          => true,
            ],
            'nomor_identitas' => [
                'type'          => 'VARCHAR',
                'constraint'    => 100,
                'null'          => true,
            ],
            'perbedaan' => [
                'type'          => 'VARCHAR',
                'constraint'    => 75,
                'null'          => true,
            ],
            'umur' => [
                'type'          => 'INT',
                'constraint'    => 5,
                'null'          => true,
            ],
            'jenis_kelamin' => [
                'type'          => 'VARCHAR',
                'constraint'    => 50,
                'null'          => true,
            ],
            'agama' => [
                'type'          => 'VARCHAR',
                'constraint'    => 50,
                'null'          => true,
            ],
            'tanggal' => [
                'type'          => 'DATE',
                'null'          => true,
            ],
            'tempat' => [
                'type'          => 'VARCHAR',
                'constraint'    => 255,
                'null'          => true,
            ],
            'hubungan' => [
                'type'          => 'VARCHAR',
                'constraint'    => 75,
                'null'          => true,
            ],
            'nama_ayah' => [
                'type'          => 'VARCHAR',
                'constraint'    => 75,
                'null'          => true,
            ],
            'nama_ibu' => [
                'type'          => 'VARCHAR',
                'constraint'    => 75,
                'null'          => true,
            ],
            'ciri_ciri' => [
                'type'          => 'VARCHAR',
                'constraint'    => 255,
                'null'          => true,
            ],
            'anak_ke' => [
                'type'          => 'INT',
                'constraint'    => 5,
                'null'          => true,
            ],
            'penyebab' => [
                'type'          => 'VARCHAR',
                'constraint'    => 255,
                'null'          => true,
            ],
            'created_at datetime default current_timestamp',
            'updated_at datetime default current_timestamp on update current_timestamp',
        ]);

        $this->forge->addKey('surat_id', TRUE);
        $this->forge->createTable('surat', TRUE);
    }

    public function down()
    {
        $this->forge->dropTable('surat');
    }
}
