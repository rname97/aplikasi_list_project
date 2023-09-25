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
                    <form method="POST" action="{{ url('/addProject') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Nama Project</label>
                            <div class="col-sm-10">
                                <input type="text" name="projectName" class="form-control" id="basic-default-name" placeholder="John Doe">
                            </div>
                            @if($errors->has('projectName'))
                            <div class="text-danger mt-2">
                                *{{ $errors->first('projectName') }}
                            </div>
                            @endif
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Deskripsi Project</label>
                            <div class="col-sm-10">
                                <input type="text" name="projectDeskripsi" class="form-control" id="basic-default-name" placeholder="John Doe">
                            </div>
                            @if($errors->has('projectDeskripsi'))
                            <div class="text-danger mt-2">
                                *{{ $errors->first('projectDeskripsi') }}
                            </div>
                            @endif
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Status Project</label>
                            <div class="col-sm-10">
                                <input type="text" name="projectStatus" class="form-control" id="basic-default-name" placeholder="John Doe">
                            </div>
                            @if($errors->has('projectStatus'))
                            <div class="text-danger mt-2">
                                *{{ $errors->first('projectStatus') }}
                            </div>
                            @endif
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Start Project</label>
                            <div class="col-sm-10">
                                <input type="text" name="projectStart" class="form-control" id="basic-default-name" placeholder="John Doe">
                            </div>
                            @if($errors->has('projectStart'))
                            <div class="text-danger mt-2">
                                *{{ $errors->first('projectStart') }}
                            </div>
                            @endif
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">End Project</label>
                            <div class="col-sm-10">
                                <input type="text" name="projectEnd" class="form-control" id="basic-default-name" placeholder="John Doe">
                            </div>
                            @if($errors->has('projectEnd'))
                            <div class="text-danger mt-2">
                                *{{ $errors->first('projectEnd') }}
                            </div>
                            @endif
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Image Cover Project</label>
                            <div class="col-sm-10">
                                <input type="file" name="projectImageCover" class="form-control" id="basic-default-name">
                            </div>
                            @if($errors->has('projectImageCover'))
                            <div class="text-danger mt-2">
                                *{{ $errors->first('projectImageCover') }}
                            </div>
                            @endif
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Kategori</label>
                            <div class="col-sm-10">
                                <select id="defaultSelect" class="form-control" name="kategori_id">
                                    <option>Default select</option>
                                    @foreach($kategori as $rowKategori)
                                    <option value="{{ $rowKategori->id }}">{{ $rowKategori->kategoriName }}</option>
                                    @endforeach
                                </select>
                            </div>
                            @if($errors->has('kategori_id'))
                            <div class="text-danger mt-2">
                                *{{ $errors->first('kategori_id') }}
                            </div>
                            @endif
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Activate Publish</label>
                            <div class="col-sm-10">
                                <select id="defaultSelect" class="form-control" name="projectActivate">
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
