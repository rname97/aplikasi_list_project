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
                    <form method="POST" action="{{ route('submitform') }}">
                        @csrf
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Nama Kategori</label>
                            <div class="col-sm-10">
                                <input type="text" name="kategoriName" class="form-control" id="basic-default-name" placeholder="">
                            </div>
                            @if($errors->has('kategoriName'))
                            <div class="text-danger mt-2">
                                *{{ $errors->first('kategoriName') }}
                            </div>
                            @endif
                        </div>
                        <div class="row justify-content-end">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-secondary btn-sm"><i class='bx bxs-left-arrow-alt'></i> Back</button>
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
