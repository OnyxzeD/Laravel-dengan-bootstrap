<?php
/**
 * Created by PhpStorm.
 * User: - INDIEGLO -
 * Date: 26/01/2016
 * Time: 20:10
 */

namespace App\Domain\Repositories;


use App\Domain\Contracts\Crudable;
use App\Domain\Contracts\Paginable;
use App\Domain\Entities\Anggota;

class AnggotaRepository extends AbstractRepository implements Crudable, Paginable
{
    public function __construct(Anggota $anggota)
    {
        $this->model = $anggota;
    }

    public function find($id, array $columns = ['*'])
    {
        return parent::find($id, $columns);
    }

    public function create(array $data)
    {
        $search = $this->model->count();
        $id = $search + 1;
        return parent::create([
                'id'         => $id,
                'nama'       => e($data['nama']),
                'alamat'     => e($data['alamat']),
                'kota'       => e($data['kota']),
                'no_telp'    => e($data['no_telp']),
                'tgl_lahir'  => e($data['tgl_lahir']),
                'tgl_daftar' => date('Y/m/d'),
            ]
        );
    }

    public function update($id, array $data)
    {
        return parent::update($id, [
                'nama'      => e($data['nama']),
                'alamat'    => e($data['alamat']),
                'kota'      => e($data['kota']),
                'no_telp'   => e($data['no_telp']),
                'tgl_lahir' => e($data['tgl_lahir']),
            ]
        );
    }

    public function delete($id)
    {
        return parent::delete($id);
    }

    public function getBypage($limit = 10, array $columns = ['*'])
    {
        return parent::getByPage($limit, $columns);
    }

    public function getData()
    {
        return $this->model
            ->orderBy('nama', 'asc')
            ->get();
    }
}