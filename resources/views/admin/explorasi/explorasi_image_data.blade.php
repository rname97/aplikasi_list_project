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
                    <form  method="POST"  action="{{ route("explorasi.store") }}" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">ID Explorasi</label>
                            <div class="col-sm-10">
                                <input type="text" name="explorasi_id" class="form-control" id="explorasi_id" value="{{ $id }}">
                            </div>
                            @if($errors->has('explorasi_id'))
                            <div class="text-danger mt-2">
                                *{{ $errors->first('explorasi_id') }}
                            </div>
                            @endif
                        </div>


                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">List Image Explorasi</label>
                            <div class="col-sm-10">
                                <div class="row" >
                                    <div class="col-sm-12">
                                        <div class="row row-cols-3 row-cols-lg-4 row-cols-md-3 row-cols-sm-3 g-4">

                                            @foreach($dataExplorasiImage as $rowExplorasiImage)

                                                <div class="col">
                                                    <div class=" mb-3">
                                                        <div class="row g-0">
                                                            {{-- <div class="col-1"> --}}
                                                                <div class="card">
                                                                        <img style="height: 130px; width:auto"  src="{{url('public/Image/'.$rowExplorasiImage->explorasiImage)}}" class="img-fluid">
                                                                   <div class="card-body">
                                                                        <button type="button" class="btn btn-danger btn-sm" onclick="removeImage('{{ $rowExplorasiImage->explorasiImage }}')">Remove</button>
                                                                    </div>
                                                                </div>
                                                            {{-- </div> --}}
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Image Explorasi</label>
                            <div class="col-sm-10">
                                <input type="file" name="explorasiImage[]" class="form-control" id="basic-default-name" multiple>
                            </div>
                            @if($errors->has('explorasiImage'))
                            <div class="text-danger mt-2">
                                *{{ $errors->first('explorasiImage') }}
                            </div>
                            @endif
                        </div>

                        <div class="row justify-content-end">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-secondary btn-sm"><i class='bx bxs-left-arrow-alt' ></i> Back</button>
                                <button type="submit" class="btn btn-primary btn-sm"><i class='bx bxs-save' ></i> Update</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection

<script>

    function removeImage(image){
        console.log( "document loaded" +image );
        var explorasiid = $("#explorasi_id").val();
        let token   = $("meta[name='csrf-token']").attr("content");
        console.log(explorasiid);
        $.ajax({
            url: `/explorasi_image_remove`,
            type: "post",
            data: {'explorasi_id':explorasiid, 'explorasiImage':image} ,
            headers: {
                'X-CSRF-Token': '{{ csrf_token() }}',
            },
            success: function (response) {
                console.log(response);

            // You will get response from your PHP page (what you echo or print)
            },
            error: function(jqXHR, textStatus, errorThrown) {
            console.log(textStatus, errorThrown);
            }
        });
    }
</script>




