@extends('layouts.app')

@section('content')

<h2>Form Edit Data</h2>

<form action="{{ route('crushes.update', $crush->id) }}" method="POST">
    @csrf
    @method('PUT')
    <p>
        Nama: <br>
        <input type="text" name="name" value="{{ old('name', $crush->name) }}">
    </p>
    <p>
        Alasan Suka: <br>
        <textarea name="reason" rows="4" cols="30">{{ old('reason', $crush->reason) }}</textarea>
    </p>
    <p>
        Status: <br>
        <select name="status">
            <option value="Secret" {{ old('status', $crush->status) == 'Secret' ? 'selected' : '' }}>Diam-diam Suka</option>
            <option value="Confessed" {{ old('status', $crush->status) == 'Confessed' ? 'selected' : '' }}>Sudah Nembak</option>
            <option value="Rejected" {{ old('status', $crush->status) == 'Rejected' ? 'selected' : '' }}>Ditolak</option>
            <option value="Dating" {{ old('status', $crush->status) == 'Dating' ? 'selected' : '' }}>Pacaran</option>
        </select>
    </p>
    <p>
        Level (1-10): <br>
        <input type="number" name="crush_level" min="1" max="10" value="{{ old('crush_level', $crush->crush_level) }}">
    </p>
    <p>
        <input type="submit" value="Perbarui Data">
        <a href="{{ route('crushes.index') }}">Batal</a>
    </p>
</form>

@endsection
