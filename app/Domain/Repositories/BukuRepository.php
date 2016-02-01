<?php
/**
 * Created by PhpStorm.
 * User: - INDIEGLO -
 * Date: 26/01/2016
 * Time: 10:10
 */

namespace App\Domain\Repositories;


use App\Domain\Entities\Buku;
use App\Domain\Contracts\Crudable;
use App\Domain\Contracts\Paginable;
use App\Domain\Contracts\Searchable;

class BukuRepository extends AbstractRepository implements Crudable, Paginable, Searchable
{
    public function __construct(Buku $buku)
    {
        $this->model = $buku;
    }

    /**
     * @param int $id
     * @param array $columns
     * @return \Illuminate\Database\Eloquent\Model
     */
    public function find($id, array $columns = ['*'])
    {
        return parent::find($id, $columns);
    }

    /**
     * @param array $data
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function create(array $data)
    {
        return parent::create([
                'judul'        => e($data['judul']),
                'pengarang'    => e($data['pengarang']),
                'penerbit'     => e($data['penerbit']),
                'kategori'     => e($data['kategori']),
                'status'       => e($data['status']),
                'tahun_terbit' => e($data['tahun_terbit']),
                'bahasa'       => e($data['bahasa']),
            ]
        );

//        return redirect('/buku');
    }

    /**
     * @param       $id
     * @param array $data
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function update($id, array $data)
    {
        return parent::update($id, [
                'judul'        => e($data['judul']),
                'pengarang'    => e($data['pengarang']),
                'penerbit'     => e($data['penerbit']),
                'kategori'     => e($data['kategori']),
                'status'       => e($data['status']),
                'tahun_terbit' => e($data['tahun_terbit']),
                'bahasa'       => e($data['bahasa']),
            ]
        );

//        return redirect('/buku');
    }

    /**
     * @param $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function delete($id)
    {
        return parent::delete($id);

//        return redirect('/buku');
    }

    /**
     * @param $query
     * @return \Illuminate\Contracts\Pagination\LengthAwarePaginator
     */
    public function search($query)
    {
        return parent::likeSearch('name', $query);
    }

    /**
     * @param int $limit
     * @param array $columns
     * @return \Illuminate\Pagination\Paginator
     */
    public function getByPage($limit = 1000, array $columns = ['*'])
    {
        return parent::getByPage($limit, $columns);
    }

    public function getData()
    {
        $data = $this->model
            ->select('id', 'judul', 'pengarang', 'penerbit', 'kategori', 'status')
            ->get();

//        return $response = array(
//            'judul'     => $data->judul,
//            'pengarang' => $data->pengarang,
//            'penerbit'  => $data->penerbit,
//            'kategori'  => $data->kategori,
//            'edit'      => "<button type='button' class='btn btn-outline btn-info' onclick='Edit({{ $data->id }})'>Edit
//                                    </button>",
//            'delete'    => "<button type='button' class='btn btn-outline btn-danger' onclick='Hapus({{ $buku->id }})'>
//                                    Delete</button>"
//        );

        return $data;
    }
}