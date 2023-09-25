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
                    <form action="{{url('/updateSkill')}}/{{$rowSkill->id}}" method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Nama Skill</label>
                            <div class="col-sm-10">
                                <input type="text" name="skillName" class="form-control" id="basic-default-name" value={{ $rowSkill->skillName }} placeholder="John Doe">
                            </div>
                            @if($errors->has('skillName'))
                            <div class="text-danger mt-2">
                                *{{ $errors->first('skillName') }}
                            </div>
                            @endif
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Image Cover Skill </label>
                            <div class="col-sm-10">
                                <input type="file" name="skillImage" class="form-control" id="basic-default-name" value="{{ $rowSkill->skillImage }}">
                            </div>
                            @if($errors->has('skillImage'))
                            <div class="text-danger mt-2">
                                *{{ $errors->first('skillImage') }}
                            </div>
                            @endif
                        </div>


                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Current Image Skill</label>
                            <div class="col-sm-10">
                            @if ($rowSkill->skillImage != '')
                                <input type="hidden" name="skillImage" class="form-control" id="basic-default-name" value="{{ $rowSkill->skillImage }}">
                                <img src="{{url('public/Image/'.$rowSkill->skillImage)}}" alt="" width="100" height="100">
                            @else
                                <img src="{{url('public/Image/img_not_found.jpg')}}" alt="">
                            @endif
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Activate Publish</label>
                            <div class="col-sm-10">
                                <select id="defaultSelect" class="form-control" name="skillActivate">
                                    <option>Default select</option>
                                    <option value="activate" {{ $rowSkill->skillActivate == "activate" ? "selected" : '' }}>Activate</option>
                                    <option value="noactivate" {{ $rowSkill->skillActivate == "noactivate" ? "selected" : '' }}>No Activate</option>
                                </select>
                            </div>
                            @if($errors->has('skillActivate'))
                            <div class="text-danger mt-2">
                                *{{ $errors->first('skillActivate') }}
                            </div>
                            @endif
                        </div>

                        <div class="row justify-content-end">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
