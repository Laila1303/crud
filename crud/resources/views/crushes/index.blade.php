@extends('layouts.app')

@section('content')

<a href="{{ route('crushes.create') }}" class="btn">Tambah Data</a>
<br><br>

<table>
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Alasan Suka</th>
            <th>Status</th>
            <th>Level (1-10)</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
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
                    <a href="{{ route('crushes.edit', $crush->id) }}" class="btn">Edit</a>
                    
                    <form action="{{ route('crushes.destroy', $crush->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</button>
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="6" style="text-align: center;">Belum ada data.</td>
            </tr>
        @endforelse
    </tbody>
</table>

@endsection
