@extends('layouts.app')

@section('content')

<div class="container">

    <h1>Edit Pengguna</h1>

    <form action="{{ route('user.update', $user->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="nama">Nama:</label><br>
        <input type="text" id="nama" name="nama" value="{{ $user->nama }}" required><br><br>

        <label for="npm">NPM:</label><br>
        <input type="text" id="npm" name="npm" value="{{ $user->npm }}" required><br><br>

        <label for="kelas">Kelas:</label><br>
        <select name="kelas_id" id="kelas_id" required>
            @foreach ($kelas as $kelasItem)
                <option value="{{ $kelasItem->id }}"
                    {{ $user->kelas_id == $kelasItem->id ? 'selected' : '' }}>
                    {{ $kelasItem->nama_kelas }}
                </option>
            @endforeach
        </select><br><br>

        <button type="submit">Update</button>

    </form>

</div>

@endsection