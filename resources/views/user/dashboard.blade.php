@extends('user.layouts.master')
@section('content')


    <div id="#header" style="background-image: url('{{ asset('public/bg11.jpg')}}');height: 500px; background-position: center; background-repeat: no-repeat; background-size: 100%;">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="text-container">
                        <h1 class="h1-large mt-5">HI! I AM DEVELOPER</h1>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div>
    <div class="container" >

    {{-- <div class="row">
        <div class="col-sm-12">
            <div class="d-flex justify-content-center">
                <h1>About</h1>


            </div>
            <div class="row">
                <div class="col-sm-5">Test</div>
            </div>

        </div>
    </div> --}}

    {{-- <div class="row">
        <div class="col-sm-12">
            <h1>My Service</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12">
            <h1>Activity</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12">
            <h1>Experience</h1>
        </div>
    </div> --}}


    <div class="row">
        <div class="col-sm-12">
            <h1>Skill</h1>
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    @foreach ($skill as $rowSkill)
                    <div class="col">
                        <div class="card h-100">
                            <img src="{{url('public/Image/'.$rowSkill->skillImage)}}" class="img-fluid py-3" style="width: auto; height: 70px;">
                            {{-- <img style="height: 50px;width: 80px;"  src="{{url('public/Image/'.$rowData->projectImageCover)}}"> --}}
                            <div class="card-body">
                                <h5 class="card-title">{{$rowSkill->skillName}}</h5>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <h1>Project</h1>
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    @foreach ($project as $rowProject)
                    <div class="col">
                        <div class="card h-100">
                            <img src="{{url('public/Image/'.$rowProject->projectImageCover)}}" style="height: 300px" class="card-img-top" alt="...">
                            {{-- <img style="height: 50px;width: 80px;"  src="{{url('public/Image/'.$rowData->projectImageCover)}}"> --}}
                            <div class="card-body">
                                <h5 class="card-title">{{$rowProject->projectName}}</h5>
                                <p class="card-text">{{$rowProject->projectDeskripsi}}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
        </div>
    </div>
</div>
@endsection


