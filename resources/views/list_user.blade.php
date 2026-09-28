@extends('layouts.app')

@section('content')

<div class="container py-5">

    <div class="d-flex justify-content-between align-items-center mb-4">

        <div>
            <h1 class="fw-bold mb-2">Daftar Pengguna</h1>

            <p class="text-muted mb-0">
                Data pengguna yang telah terdaftar.
            </p>
        </div>

        <a href="{{ route('user.create') }}" class="btn btn-primary px-4">
            + Tambah Pengguna
        </a>

    </div>

    <x-user-table :users="$users" />

</div>

@endsection