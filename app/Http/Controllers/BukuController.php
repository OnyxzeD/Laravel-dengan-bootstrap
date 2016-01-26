<?php

namespace App\Http\Controllers;

use App\Buku;
use App\Domain\Repositories\BukuRepository;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class BukuController extends Controller
{
    protected $buku;

    public function __construct(BukuRepository $bukuRepository)
    {
        $this->buku = $bukuRepository;
    }

    public function index($limit = 10)
    {
        return view('partials.buku.index', [
            'bukus' => $this->buku->getByPage($limit),
        ]);
    }

    public function store(Request $request)
    {
        return $this->buku->create($request->all());
    }

    public function show($id)
    {
        return view('partials.buku.detail', [
            'data' => $this->buku->find($id),
        ]);
    }

    public function update($id, Request $request)
    {
        return $this->buku->update($id, $request->all());
    }

    public function destroy($id)
    {
        return $this->buku->delete($id);
    }
}
