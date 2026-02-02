@extends('layouts.dashboard')

@section('title', 'Kategori Keuangan')

@section('content')
<div class="container mt-4">
    <h3 class="mb-3">Kategori Keuangan</h3>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Kategori</th>
                <th>Tipe</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($kategori as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->nama }}</td>
                    <td>
                        <span class="badge 
                            {{ $item->tipe == 'pemasukan' ? 'bg-success' : 'bg-danger' }}">
                            {{ ucfirst($item->tipe) }}
                        </span>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="3" class="text-center">Data kosong</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
