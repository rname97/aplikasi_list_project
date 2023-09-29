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
                    <form method="POST" action="{{ url('/addExperience') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Nama experience</label>
                            <div class="col-sm-10">
                                <input type="text" name="experienceName" class="form-control" id="basic-default-name" placeholder="">
                            </div>
                            @if($errors->has('experienceName'))
                            <div class="text-danger mt-2">
                                *{{ $errors->first('experienceName') }}
                            </div>
                            @endif
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">experience Company</label>
                            <div class="col-sm-10">
                                <input type="text" name="experienceCompany" class="form-control" id="basic-default-name" placeholder="">
                            </div>
                            @if($errors->has('experienceCompany'))
                            <div class="text-danger mt-2">
                                *{{ $errors->first('experienceCompany') }}
                            </div>
                            @endif
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">experience Location</label>
                            <div class="col-sm-10">
                                <input type="text" name="experienceLocation" class="form-control" id="basic-default-name" placeholder="">
                            </div>
                            @if($errors->has('experienceLocation'))
                            <div class="text-danger mt-2">
                                *{{ $errors->first('experienceLocation') }}
                            </div>
                            @endif
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Deskripsi experience</label>
                            <div class="col-sm-10">
                                <input type="text" name="experienceDeskripsi" class="form-control" id="basic-default-name" placeholder="">
                            </div>
                            @if($errors->has('experienceDeskripsi'))
                            <div class="text-danger mt-2">
                                *{{ $errors->first('experienceDeskripsi') }}
                            </div>
                            @endif
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Status experience</label>
                            <div class="col-sm-10">
                                <input type="text" name="experienceStatus" class="form-control" id="basic-default-name" placeholder="">
                            </div>
                            @if($errors->has('experienceStatus'))
                            <div class="text-danger mt-2">
                                *{{ $errors->first('experienceStatus') }}
                            </div>
                            @endif
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Start experience</label>
                            <div class="col-sm-10">
                                <input type="text" name="experienceStart" class="form-control" id="basic-default-name" placeholder="">
                            </div>
                            @if($errors->has('experienceStart'))
                            <div class="text-danger mt-2">
                                *{{ $errors->first('experienceStart') }}
                            </div>
                            @endif
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">End experience</label>
                            <div class="col-sm-10">
                                <input type="text" name="experienceEnd" class="form-control" id="basic-default-name" placeholder="">
                            </div>
                            @if($errors->has('experienceEnd'))
                            <div class="text-danger mt-2">
                                *{{ $errors->first('experienceEnd') }}
                            </div>
                            @endif
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Activate Publish</label>
                            <div class="col-sm-10">
                                <select id="defaultSelect" class="form-control" name="experienceActivate">
                                    <option>Default select</option>
                                    <option value="activate">Activate</option>
                                    <option value="noactivate">No Activate</option>
                                </select>
                            </div>
                            @if($errors->has('experienceActivate'))
                            <div class="text-danger mt-2">
                                *{{ $errors->first('experienceActivate') }}
                            </div>
                            @endif
                        </div>

                        <div class="row justify-content-end">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-secondary btn-sm"><i class='bx bxs-left-arrow-alt' ></i> Back</button>
                                <button type="submit" class="btn btn-primary btn-sm"><i class='bx bxs-save'></i>Save</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
