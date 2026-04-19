@extends('layouts.app')

@section('content')

<h2>Form Tambah Data</h2>

<form action="{{ route('crushes.store') }}" method="POST">
    @csrf
    <p>
        Nama: <br>
        <input type="text" name="name" value="{{ old('name') }}">
    </p>
    <p>
        Alasan Suka: <br>
        <textarea name="reason" rows="4" cols="30">{{ old('reason') }}</textarea>
    </p>
    <p>
        Status: <br>
        <select name="status">
            <option value="Secret" {{ old('status') == 'Secret' ? 'selected' : '' }}>Diam-diam Suka</option>
            <option value="Confessed" {{ old('status') == 'Confessed' ? 'selected' : '' }}>Sudah Nembak</option>
            <option value="Rejected" {{ old('status') == 'Rejected' ? 'selected' : '' }}>Ditolak</option>
            <option value="Dating" {{ old('status') == 'Dating' ? 'selected' : '' }}>Pacaran</option>
        </select>
    </p>
    <p>
        Level (1-10): <br>
        <input type="number" name="crush_level" min="1" max="10" value="{{ old('crush_level', 5) }}">
    </p>
    <p>
        <input type="submit" value="Simpan Data">
        <a href="{{ route('crushes.index') }}">Batal</a>
    </p>
</form>

@endsection
