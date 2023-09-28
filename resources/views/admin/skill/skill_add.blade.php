@extends('admin.layouts.master')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
        <!-- Basic Layout -->
        <div class="col-xxl">
            <div class="card mb-4">
                <div class="card-header d-flex align-items-center justify-content-between">
                <h5 class="mb-0">Basic Layout</h5>
                <small class="text-muted float-end">Default label</small>
                </div>
                <div class="card-body">
                    @if(Session::has('message'))
                        <div class="alert {{ Session::get('alert-class') }} ">
                             {{ Session::get('message') }}
                        </div>
                    @endif
                    <form method="POST" action="{{ route('addSkill') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Nama Skill</label>
                            <div class="col-sm-10">
                                <input type="text" name="skillName" class="form-control" id="basic-default-name" placeholder="">
                            </div>
                            @if($errors->has('skillName'))
                            <div class="text-danger mt-2">
                                *{{ $errors->first('skillName') }}
                            </div>
                            @endif
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Image Skill</label>
                            <div class="col-sm-10">
                                <input type="file" name="skillImage" class="form-control" id="basic-default-name">
                            </div>
                            @if($errors->has('skillImage'))
                            <div class="text-danger mt-2">
                                *{{ $errors->first('skillImage') }}
                            </div>
                            @endif
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Activate Publish</label>
                            <div class="col-sm-10">
                                <select id="defaultSelect" class="form-control" name="skillActivate">
                                    <option>Default select</option>
                                    <option value="activate">Activate</option>
                                    <option value="noactivate">No Activate</option>
                                </select>
                            </div>
                            @if($errors->has('projectActivate'))
                            <div class="text-danger mt-2">
                                *{{ $errors->first('projectActivate') }}
                            </div>
                            @endif
                        </div>
                        <div class="row justify-content-end">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-secondary btn-sm"><i class='bx bxs-left-arrow-alt' ></i> Back</button>
                                <button type="submit" class="btn btn-primary btn-sm"><i class='bx bxs-save'></i> Save</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
