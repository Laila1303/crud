@extends('layouts.app')

@section('content')

<h3>Form Tambah Data</h3>

<form action="{{ route('crushes.store') }}" method="POST">
    @csrf

    <div class="form-group">
        <label>Nama:</label>
        <input type="text" name="name" value="{{ old('name') }}" required>
    </div>

    <div class="form-group">
        <label>Alasan Suka:</label>
        <textarea name="reason" rows="4" required>{{ old('reason') }}</textarea>
    </div>

    <div class="form-group">
        <label>Status:</label>
        <select name="status" required>
            <option value="Secret" {{ old('status') == 'Secret' ? 'selected' : '' }}>Diam-diam Suka</option>
            <option value="Confessed" {{ old('status') == 'Confessed' ? 'selected' : '' }}>Sudah Nembak</option>
            <option value="Rejected" {{ old('status') == 'Rejected' ? 'selected' : '' }}>Ditolak</option>
            <option value="Dating" {{ old('status') == 'Dating' ? 'selected' : '' }}>Pacaran</option>
        </select>
    </div>

    <div class="form-group">
        <label>Level (1-10):</label>
        <input type="number" name="crush_level" min="1" max="10" value="{{ old('crush_level', 5) }}" required>
    </div>

    <button type="submit" class="btn">Simpan Data</button>
    <a href="{{ route('crushes.index') }}" class="btn">Batal</a>
</form>

@endsection
