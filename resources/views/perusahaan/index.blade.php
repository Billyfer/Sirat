{{-- @extends('layouts.app') --}}
@extends('master.master')
@section('content')
<div class="container mt-4">
    <div class="row mb-4">
        <div class="col text-center">
            <h2>Data Perusahaan</h2>
        </div>
    </div>
    <div class="row mb-3">
        <div class="col">
            <a href="{{ route('perusahaan.create') }}" class="btn btn-success">Create New Data Perusahaan</a>
        </div>
    </div>
    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @elseif(session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
    @endif
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Nama Cabang</th>
                    <th>Kota/Kabupaten</th>
                    <th>Alamat</th>
                    <th>Nama Pimpinan</th>
                    <th>NIB Cabang</th>
                    <th>PDF NIB</th>
                    <th>PDF Akta Cabang</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($perusahaan as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->nama_cabang }}</td>
                    <td>{{ $item->kota_kabupaten }}</td>
                    <td>{{ $item->alamat }}</td>
                    <td>{{ $item->nama_pimpinan }}</td>
                    <td>{{ $item->nib_cabang }}</td>
                    <td>
                        @if($item->pdf_nib)
                        <a href="{{ asset('storage/' . $item->pdf_nib) }}" target="_blank">View</a>
                        @else
                        <span class="text-muted">-</span>
                        @endif
                    </td>
                    <td>
                        @if($item->pdf_akta_cabang)
                        <a href="{{ asset('storage/' . $item->pdf_akta_cabang) }}" target="_blank">View</a>
                        @else
                        <span class="text-muted">-</span>
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('perusahaan.edit', $item->id) }}"
                            class="btn btn-primary btn-sm">Edit</a>
                        <form action="{{ route('perusahaan.destroy', $item->id) }}" method="POST" class="d-inline"
                            onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="9" class="text-center">Tidak ada data.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection