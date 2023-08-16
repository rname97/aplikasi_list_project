@extends('admin.layouts.master')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
        <!-- Basic Layout -->
        <div class="col-xxl">
            <div class="card">
                <div class="card-header d-flex">
                    <h5 class="flex-grow-1 ">Data Kategori</h5>
                    <a href="{{ url('/kategori_add') }}" class="btn btn-sm btn-primary">Tambah</a>
                </div>
                
                <div class="table-responsive text-nowrap">
                    <table class="table">
                        <thead class="table-light">
                            <tr>
                                <th>#</th>
                                <th width="70%">Nama Kategori</th>
                                
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody class="table-border-bottom-0">
                                @foreach ($kategori as $rowKategori)
                                <tr>
                                    <td>1</td>
                                    <td>{{ $rowKategori->kategoriName }}</td>
                                    <td style="text-align: right;">
                                        <div>
                                            <a href="{{ url('/kategori_edit/'.$rowKategori->id) }}" class="btn btn-sm btn-primary">Edit</a>
                                            <a href="{{ url('/kategori_delete/'.$rowKategori->id) }}" class="btn btn-sm btn-danger">Delete</a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection