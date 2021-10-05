@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Tourist Spots</h1>
                </div>
            </div>
        </div>
    </section>

                <section class="content-header">
                    <div class="row m-2">
                        {{-- modal --}}
                        <button type="button" class="bg-light.bg-gradient remove" data-toggle="modal" data-target="#exampleModalCenter">
                            <div class="container col-sm m-1 p-2 card-custome card">
                                <img class="img-fluid" src="{{asset('sources/image7.png')}}" alt="">
                                <div class="container card-text">
                                    <strong>Tourist_Spot Name</strong>: Siargao
                                </div>
                                <div class="container">
                                    <strong>Description</strong>: known for awesome islands
                                </div>
                                <div class="container">
                                    <strong>Address</strong>: Surigao Del Norte
                                </div>
                                <div class="container">
                                    <strong>Date Open</strong>: 09-2-15
                                </div>
                            </div>
                        </button>

                        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle"><strong>Tourist_Spot</strong>: EL NIDO</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                </div>
                                <div class="modal-body">
                                    <div class="container col-sm m-1 p-2">
                                        <div class="cotainer d-flex justify-content-center align-items-center">
                                            <img class="img-fluid" src="{{asset('sources/image7.png')}}" alt="">
                                        </div>
                                        <div class="container card-text">
                                            <strong>Tourist_Spot Name</strong>: Siargao
                                        </div>
                                        <div class="container">
                                            <strong>Description</strong>: known for Awesome islands
                                        </div>
                                        <div class="container">
                                            <strong>Address</strong>: Surigao del Norte
                                        </div>
                                        <div class="container">
                                            <strong>Date Open</strong>: 09-2-15
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <a class="btn btn-primary" href="{{url('tourist_spots/place')}}">Add to</a>
                                </div>
                            </div>
                         </div>
                    </div>
                </section> 

                <section class="content-header">
                        <button type="button" class="bg-light.bg-gradient remove" data-toggle="modal" data-target="#exampleModalCenter">
                            <div class="container col-sm m-1 p-2 card-custome card">
                                <img class="img-fluid" src="{{asset('sources/image8.png')}}" alt="">
                                <div class="container card-text">
                                    <strong>Tourist_Spot Name</strong>:  Banaue Rice Terraces
                                </div>
                                <div class="container">
                                    <strong>Description</strong>: known for awesome rice fields
                                </div>
                                <div class="container">
                                    <strong>Address</strong>: Nueva Vizcaya
                                </div>
                                <div class="container">
                                    <strong>Date Open</strong>: 09-2-15
                                </div>
                            </div>
                        </button>

                        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle"><strong>Tourist_Spot</strong>: Banaue Rice Terraces</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                </div>
                                <div class="modal-body">
                                    <div class="container col-sm m-1 p-2">
                                        <div class="cotainer d-flex justify-content-center align-items-center">
                                            <img class="img-fluid" src="{{asset('sources/image8.png')}}" alt="">
                                        </div>
                                        <div class="container card-text">
                                            <strong>Tourist_Spot Name</strong>: Banaue Rice Terraces
                                        </div>
                                        <div class="container">
                                            <strong>Description</strong>:  known for awesome rice fields
                                        </div>
                                        <div class="container">
                                            <strong>Address</strong>: Nueva Vizcaya
                                        </div>
                                        <div class="container">
                                            <strong>Date Open</strong>: 09-2-15
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <a class="btn btn-primary" href="{{url('tourist_spots/place')}}">Add to</a>
                                </div>
                            </div>
                         </div>
                </section> 
@endsection

