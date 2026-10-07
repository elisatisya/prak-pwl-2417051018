@extends('layouts.app')

@section('content')

<div class="container py-5">

    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Berhasil!</strong> {{ session('success') }}

            <button type="button"
                    class="btn-close"
                    data-bs-dismiss="alert"
                    aria-label="Close">
            </button>
        </div>
    @endif

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