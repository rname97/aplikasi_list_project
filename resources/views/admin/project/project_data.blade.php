@extends('admin.layouts.master')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
        <!-- Basic Layout -->
        <div class="col-xxl">
            <div class="card">
                <div class="card-header d-flex">
                    <h5 class="flex-grow-1 ">Data Project</h5>
                    <div>
                        <a href="{{ url('/project_form_add') }}" class="btn btn-sm btn-primary"><i class='bx bxs-plus-square'></i>Tambah</a>
                        {{-- <i class='bx bxs-book-add' ></i> --}}

                    </div>

                </div>

                <div class="table-responsive text-nowrap">
                    <table class="table">
                        <thead class="table-light">
                            <tr>
                                <th>#</th>
                                <th>Nama Project</th>
                                <th>Status</th>
                                <th>Start</th>
                                <th>End</th>
                                <th>Foto Project</th>
                                <th>Kategori</th>

                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody class="table-border-bottom-0">
                                @foreach ($project as $rowData)
                                <tr>
                                    <td>1</td>
                                    <td>{{ $rowData->projectName }}</td>
                                    <td>{{ $rowData->projectStatus }}</td>
                                    <td>{{ $rowData->projectStart }}</td>
                                    <td>{{ $rowData->projectEnd }}</td>
                                    <td><img style="height: 50px;width: 80px;"  src="{{url('public/Image/'.$rowData->projectImageCover)}}"></td>
                                    @foreach ($kategori as $rowKategori)
                                        @if($rowData->kategori_id == $rowKategori->id )
                                            <td>{{ $rowKategori->kategoriName }}</td>
                                        @endif
                                    @endforeach
                                    <td style="text-align: right;">
                                        <div>
                                            <a href="{{ url('/project_detail/'.$rowData->id) }}" class="btn btn-sm btn-primary">Detail</a>
                                            <a href="{{ url('/project_form_edit/'.$rowData->id) }}" class="btn btn-sm btn-primary"><i class='bx bxs-edit' ></i>Edit</a>
                                            <a href="{{ url('/deleteProject/'.$rowData->id) }}" class="btn btn-sm btn-danger"><i class='bx bxs-trash-alt' ></i>Delete</a>
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


