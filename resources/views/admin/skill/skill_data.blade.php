@extends('admin.layouts.master')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
        <!-- Basic Layout -->
        <div class="col-xxl">
            <div class="card">
                <div class="card-header d-flex">
                    <h5 class="flex-grow-1 ">Data Skill</h5>
                    <div>
                        <a href="{{ url('/skill_add') }}" class="btn btn-sm btn-primary"><i class='bx bxs-plus-square'></i> Tambah</a>
                    </div>
                </div>

                <div class="table-responsive text-nowrap">
                    <table class="table">
                        <thead class="table-light">
                            <tr>
                                <th>#</th>
                                <th width="70%">Nama Skill</th>
                                <th width="70%">Image Skill</th>
                                <th width="70%">Activate Skill</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody class="table-border-bottom-0">
                                @foreach ($skill as $rowSkill)
                                <tr>
                                    <td>1</td>
                                    <td>{{ $rowSkill->skillName }}</td>
                                    <td><img style="height: 40px;width: 50px;"  src="{{url('public/Image/'.$rowSkill->skillImage)}}"></td>
                                    <td>{{ $rowSkill->skillActivate }}</td>
                                    <td style="text-align: right;">
                                        <div>
                                            <a href="{{ url('/skill_edit/'.$rowSkill->id) }}" class="btn btn-sm btn-primary"><i class='bx bxs-edit' ></i> Edit</a>
                                            <a href="{{ url('/skill_delete/'.$rowSkill->id) }}" class="btn btn-sm btn-danger"><i class='bx bxs-trash-alt' ></i> Delete</a>
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
