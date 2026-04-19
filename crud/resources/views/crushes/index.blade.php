@extends('layouts.app')

@section('content')

<a href="{{ route('crushes.create') }}">[Tambah Data Baru]</a>
<br><br>

<table border="1" cellpadding="5" cellspacing="0">
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Alasan Suka</th>
        <th>Status</th>
        <th>Level (1-10)</th>
        <th>Aksi</th>
    </tr>
    @forelse($crushes as $index => $crush)
        <tr>
            <td>{{ $index + 1 }}</td>
            <td>{{ $crush->name }}</td>
            <td>{{ $crush->reason }}</td>
            <td>
                @if($crush->status == 'Secret') Diam-diam Suka
                @elseif($crush->status == 'Confessed') Sudah Nembak
                @elseif($crush->status == 'Rejected') Ditolak
                @elseif($crush->status == 'Dating') Pacaran
                @endif
            </td>
            <td>{{ $crush->crush_level }}</td>
            <td>
                <a href="{{ route('crushes.edit', $crush->id) }}">Edit</a> |
                <form action="{{ route('crushes.destroy', $crush->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="Hapus" onclick="return confirm('Yakin ingin menghapus data ini?');">
                </form>
            </td>
        </tr>
    @empty
        <tr>
            <td colspan="6">Belum ada data.</td>
        </tr>
    @endforelse
</table>

@endsection
