<?php

namespace App\Http\Controllers;

use App\Domain\Repositories\AnggotaRepository;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class AnggotaController extends Controller
{
    protected $anggota;

    public function __construct(AnggotaRepository $anggotaRepository)
    {
        $this->anggota = $anggotaRepository;
    }

    public function index($limit = 10)
    {
        return view('partials.anggota.index', [
            'anggotas' => $this->anggota->getBypage($limit),
        ]);
    }

    public function getData()
    {
        return $this->anggota->getData();
    }

    public function show($id)
    {
//        return view('partials.anggota.detail', [
//            'data' => $this->anggota->find($id),
//        ]);

        return $this->anggota->find($id);
    }

    public function edit($id)
    {
        return view('partials.anggota.edit', [
            'data' => $this->anggota->find($id),
        ]);
    }

    public function store(Request $request)
    {
        return $this->anggota->create($request->all());
    }

    public function update($id, Request $request)
    {
        return $this->anggota->update($id, $request->all());
    }

    public function destroy($id)
    {
        return $this->anggota->delete($id);
    }
}
