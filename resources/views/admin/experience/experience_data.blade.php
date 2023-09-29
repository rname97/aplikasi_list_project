@extends('admin.layouts.master')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
        <!-- Basic Layout -->
        <div class="col-xxl">
            <div class="card">
                <div class="card-header d-flex">
                    <h5 class="flex-grow-1 ">Data experience</h5>
                    <div>
                        <a href="{{ url('/experience_form_add') }}" class="btn btn-sm btn-primary"><i class='bx bxs-plus-square'></i>Tambah</a>
                        {{-- <i class='bx bxs-book-add' ></i> --}}

                    </div>

                </div>

                <div class="table-responsive text-nowrap">
                    <table class="table">
                        <thead class="table-light">
                            <tr>
                                <th>#</th>
                                <th>Name experience</th>
                                <th>Company experience</th>
                                <th>Location experience</th>
                                <th>Status</th>
                                <th>Start</th>
                                <th>End</th>
                                <th>Activate</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody class="table-border-bottom-0">
                                @foreach ($experience as $rowData)
                                <tr>
                                    <td>1</td>
                                    <td>{{ $rowData->experienceName }}</td>
                                    <td>{{ $rowData->experienceCompany }}</td>
                                    <td>{{ $rowData->experienceLocation }}</td>
                                    <td>{{ $rowData->experienceStatus }}</td>
                                    <td>{{ $rowData->experienceStart }}</td>
                                    <td>{{ $rowData->experienceEnd }}</td>
                                    <td>{{ $rowData->experienceActivate }}</td>

                                    <td style="text-align: right;">
                                        <div>
                                            <a href="{{ url('/experience_image_data/'.$rowData->id) }}" class="btn btn-sm btn-primary">List Image</a>
                                            <a href="{{ url('/experience_form_edit/'.$rowData->id) }}" class="btn btn-sm btn-primary"><i class='bx bxs-edit' ></i>Edit</a>
                                            <a href="{{ url('/deleteexperience/'.$rowData->id) }}" class="btn btn-sm btn-danger"><i class='bx bxs-trash-alt' ></i>Delete</a>
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


