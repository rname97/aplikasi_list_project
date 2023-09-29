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
                    <form method="POST" action="{{url('/editExplorasi')}}/{{ $explorasi->id }}" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Nama explorasi</label>
                            <div class="col-sm-10">
                                <input type="text" name="explorasiName" class="form-control" id="basic-default-name" value="{{ $explorasi->explorasiName }}">
                            </div>
                            @if($errors->has('explorasiName'))
                            <div class="text-danger mt-2">
                                *{{ $errors->first('explorasiName') }}
                            </div>
                            @endif
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Deskripsi explorasi</label>
                            <div class="col-sm-10">
                                <input type="text" name="explorasiDeskripsi" class="form-control" id="basic-default-name" value="{{ $explorasi->explorasiDeskripsi }}">
                            </div>
                            @if($errors->has('explorasiDeskripsi'))
                            <div class="text-danger mt-2">
                                *{{ $errors->first('explorasiDeskripsi') }}
                            </div>
                            @endif
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Image Cover explorasi </label>
                            <div class="col-sm-10">
                                <input type="file" name="explorasiImageCover" class="form-control" id="basic-default-name" value="{{ $explorasi->explorasiImageCover }}">
                            </div>
                            @if($errors->has('explorasiImageCover'))
                            <div class="text-danger mt-2">
                                *{{ $errors->first('explorasiImageCover') }}
                            </div>
                            @endif
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Current Image</label>
                            <div class="col-sm-10">
                            @if ($explorasi->explorasiImageCover != '')
                                <input type="hidden" name="explorasiImageCoverCurent" class="form-control" id="basic-default-name" value="{{ $explorasi->explorasiImageCover }}">
                                <img src="{{url('public/Image/'.$explorasi->explorasiImageCover)}}" alt="" width="100" height="100">
                            @else
                                <img src="{{url('public/Image/img_not_found.jpg')}}" alt="">
                            @endif
                        </div>

                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Kategori</label>
                            <div class="col-sm-10">
                                <select id="defaultSelect" class="form-control" name="kategori_id">
                                    <option>Default select</option>
                                    @foreach($kategori as $rowKategori)
                                    <option value="{{ $rowKategori->id }}" {{ $explorasi->kategori_id == $rowKategori->id ? "selected" : '' }}> {{  $rowKategori->kategoriName  }}</option>
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
                                <select id="defaultSelect" class="form-control" name="explorasiActivate">
                                    <option>Default select</option>
                                    <option value="activate" {{ $explorasi->explorasiActivate == "activate" ? "selected" : '' }}>Activate</option>
                                    <option value="noactivate" {{ $explorasi->explorasiActivate == "noactivate" ? "selected" : '' }}>No Activate</option>
                                </select>
                            </div>
                            @if($errors->has('explorasiActivate'))
                            <div class="text-danger mt-2">
                                *{{ $errors->first('explorasiActivate') }}
                            </div>
                            @endif
                        </div>


                        <div class="row justify-content-end">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-secondary btn-sm"><i class='bx bxs-left-arrow-alt' ></i> Back</button>
                                <button type="submit" class="btn btn-primary btn-sm"><i class='bx bxs-save' ></i> Save</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
