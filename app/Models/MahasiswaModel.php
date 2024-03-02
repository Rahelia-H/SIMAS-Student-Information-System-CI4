<?php

namespace App\Models;

use CodeIgniter\Model;

// MODEL MAHASISWAS // Rahelia-H
class MahasiswaModel extends Model
{
    protected $table            = 'mahasiswas';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['nim', 'nama', 'prodi', 'alamat', 'no_hp', 'foto'];
    protected bool $allowEmptyInserts = false;

    // DATES // Rahelia-H
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // VALIDATION // Rahelia-H
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // CALLBACK // Rahelia-H
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];

    // MELAKUKAN PENCARIAN // Rahelia-H
    public function search($keyword)
    {
        $this->Like('nim', $keyword);
        $this->orLike('nama', $keyword);
        return $this->findAll();
    }
}
