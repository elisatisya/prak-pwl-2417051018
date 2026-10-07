<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\UserModel;
use Illuminate\Http\Request;

class UserController extends Controller
{
    protected $userModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
    }

    public function index()
    {
        $users = $this->userModel->getUser();

        $data = [
            'title' => 'Daftar Pengguna',
            'users' => $users,
        ];

        return view('list_user', $data);
    }

    public function create()
    {
        $kelasModel = new Kelas();
        $kelas = $kelasModel->getKelas();

        $data = [
            'title' => 'Create User',
            'kelas' => $kelas,
        ];

        return view('create_user', $data);
    }

    public function store(Request $request)
    {
        $data = [
            'nama' => $request->nama,
            'npm' => $request->npm,
            'kelas_id' => $request->kelas_id,
        ];

        $this->userModel->create($data);

        return redirect('/user');
    }

    public function edit($id)
    {
        $user = $this->userModel->findOrFail($id);

        $kelasModel = new Kelas();
        $kelas = $kelasModel->getKelas();

        $data = [
            'title' => 'Edit User',
            'user' => $user,
            'kelas' => $kelas,
        ];

        return view('edit_user', $data);
    }

    public function update(Request $request, $id)
    {
        $user = $this->userModel->findOrFail($id);

        $data = [
            'nama' => $request->nama,
            'npm' => $request->npm,
            'kelas_id' => $request->kelas_id,
        ];

        $user->update($data);

        return redirect('/user')->with('success', 'Data pengguna berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $user = $this->userModel->findOrFail($id);

        $user->delete();

        return redirect('/user')->with('success', 'Data pengguna berhasil dihapus!');   
    }
}