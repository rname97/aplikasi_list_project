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
                    <form  method="POST"  action="{{ route("projects.store") }}" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">ID Project</label>
                            <div class="col-sm-10">
                                <input type="text" name="project_id" class="form-control" id="basic-default-name" value="{{ $id }}">
                            </div>
                            @if($errors->has('project_id'))
                            <div class="text-danger mt-2">
                                *{{ $errors->first('project_id') }}
                            </div>
                            @endif
                        </div>


                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Nama Project</label>
                            <div class="col-sm-10">
                                <input type="file" name="projectImage[]" class="form-control" id="basic-default-name" multiple>
                            </div>
                            @if($errors->has('projectName'))
                            <div class="text-danger mt-2">
                                *{{ $errors->first('projectName') }}
                            </div>
                            @endif
                        </div>
                        <div>
                            <input class="btn btn-danger" type="submit">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>


</script>

@endsection


