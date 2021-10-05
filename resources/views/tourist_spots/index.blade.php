@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Tourist Spots</h1>
                </div>

                <section class="content-header">
                    <div class="row m-2">
                        {{-- modal --}}
                        <button type="button" class="bg-light.bg-gradient remove" data-toggle="modal" data-target="#exampleModalCenter">
                            <div class="container col-sm m-1 p-2 card-custome card">
                                <img class="img-fluid" src="{{asset('sources/image1.png')}}" alt="">
                                <div class="container card-text">
                                    <strong>Tourist_Spot Name</strong>: EL NIDO
                                </div>
                                <div class="container">
                                    <strong>Description</strong>: known for white-sand beaches
                                </div>
                                <div class="container">
                                    <strong>Address</strong>: Palawan
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
                                            <img class="img-fluid" src="{{asset('sources/image1.png')}}" alt="">
                                        </div>
                                        <div class="container card-text">
                                            <strong>Tourist_Spot Name</strong>: EL NIDO
                                        </div>
                                        <div class="container">
                                            <strong>Description</strong>: known for white sand beaches
                                        </div>
                                        <div class="container">
                                            <strong>Address</strong>: Palawan
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


                        {{-- 2nd --}}

                        <button type="button" class="bg-light.bg-gradient remove" data-toggle="modal" data-target="#product2">
                            <div class="container col-sm m-1 p-2 card-custome card">
                                <img class="img-fluid" src="{{asset('sources/image2.png')}}" alt="">
                                <div class="container card-text">
                                    <strong>Touris_Spot Name</strong>: Boracay Beach
                                </div>
                                <div class="container">
                                    <strong>Description</strong>: known for white beaches
                                </div>
                                <div class="container">
                                    <strong>Address</strong>: Malay, Aklan
                                </div>
                                <div class="container">
                                    <strong>Date Open</strong>: 01-09-21
                                </div>
                            </div>
                        </button>

                        <div class="modal fade" id="product2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle"><strong>Tourist_Spot</strong>: Boracay</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                </div>
                                <div class="modal-body">
                                    <div class="cotainer d-flex justify-content-center align-items-center">
                                        <img class="img-fluid" src="{{asset('sources/image2.png')}}" alt="">
                                    </div>
                                    <div class="container">
                                        <strong>Tourist_Spot Name</strong>: Boracay Beach
                                    </div>
                                    <div class="container">
                                        <strong>Address</strong>: Malay, Aklan 
                                    </div>
                                    <div class="container">
                                            <strong>Address</strong>: Palawan
                                        </div>
                                        <div class="container">
                                            <strong>Date Open</strong>: 09-2-15
                                        </div>
                                    </div>
                                <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <a class="btn btn-primary" href="{{url('tourist_spots/place')}}">Add to</a>
                                </div>
                            </div>
                            </div>
                        </div>


                        <button type="button" class="bg-light.bg-gradient remove" data-toggle="modal" data-target="#product2">
                            <div class="container col-sm m-1 p-2 card-custome card">
                                <img class="img-fluid" src="{{asset('sources/image3.png')}}" alt="">
                                <div class="container card-text">
                                    <strong>Touris_Spot Name</strong>: Chocolate Hills
                                </div>
                                <div class="container">
                                    <strong>Description</strong>: known for its many hills
                                </div>
                                <div class="container">
                                    <strong>Address</strong>: Carmen, Bohol
                                </div>
                                <div class="container">
                                    <strong>Date Open</strong>: 07-05-21
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
                                            <img class="img-fluid" src="{{asset('sources/png')}}" alt="">
                                        </div>
                                        <div class="container card-text">
                                            <strong>Tourist_Spot Name</strong>: EL NIDO
                                        </div>
                                        <div class="container">
                                            <strong>Description</strong>: known for white sand beaches
                                        </div>
                                        <div class="container">
                                            <strong>Address</strong>: Palawan
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


                        <div class="row m-2">
                        <button type="button" class="bg-light.bg-gradient remove" data-toggle="modal" data-target="#product2">
                            <div class="container col-sm m-1 p-2 card-custome card">
                                <img class="img-fluid" src="{{asset('sources/image4.png')}}" alt="">
                                <div class="container card-text">
                                    <strong>Touris_Spot Name</strong>: Hennan Beach Resort
                                </div>
                                <div class="container">
                                    <strong>Description</strong>: known for its white beaches
                                </div>
                                <div class="container">
                                    <strong>Address</strong>: Panglao, Bohol
                                </div>
                                <div class="container">
                                    <strong>Date Open</strong>: 07-05-21
                                </div>
                            </div>
                        </button>

                        <div class="modal fade" id="product4" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle"><strong>Tourist_Spot</strong>: Hennan Beach Resort</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                </div>
                                <div class="modal-body">
                                    <div class="cotainer d-flex justify-content-center align-items-center">
                                        <img class="img-fluid" src="{{asset('sources/image4.png')}}" alt="">
                                    </div>
                                    <div class="container">
                                        <strong>Tourist_Spot Name</strong>: Hennan Beach Resort
                                    </div>
                                    <div class="container">
                                        <strong>Description</strong>: known For its white beaches
                                    </div>
                                    <div class="container">
                                        <strong>Address</strong>: Panglao, Bohol
                                    </div>
                                    <div class="container">
                                        <strong>Date Open</strong>: 04-13-21
                                    </div>
                                </div>
                                <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <a class="btn btn-primary" href="{{url('tourist_spots/place')}}">Add to</a>
                                </div>
                            </div>
                            </div>
                        </div>

                        {{-- 4 --}}


                        <button type="button" class="bg-light.bg-gradient remove" data-toggle="modal" data-target="#product5">
                            <div class="container col-sm m-1 p-2 card-custome card">
                                <img class="img-fluid" src="{{asset('sources/image5.png')}}" alt="">
                                <div class="container">
                                    <strong>Tourist_Spot Name</strong>: Puerto Princesa Cave
                                </div>
                                <div class="container">
                                    <strong>Description</strong>: known for its beautiful cave
                                </div>
                                <div class="container">
                                    <strong>Address</strong>: Puerto Princesa, Palawan
                                </div>
                                <div class="container">
                                    <strong>Date Open</strong>: 10-04-05
                                </div>
                            </div>
                        </button>

                        <div class="modal fade" id="product5" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle"><strong>Tourist_Spot</strong>: Puerto Princesa</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                </div>
                                <div class="modal-body">
                                    <div class="cotainer d-flex justify-content-center align-items-center">
                                        <img class="img-fluid" src="{{asset('sources/image5.png')}}" alt="">
                                    </div>
                                    <div class="container">
                                        <strong>Tourist_Spot Name</strong>: Puerto Princes Cave
                                    </div>
                                    <div class="container">
                                        <strong>Description</strong>: known for its beautiful cave
                                    </div>
                                    <div class="container">
                                        <strong>Address</strong>: Puerto Princesa, Palawan
                                    </div>
                                    <div class="container">
                                        <strong>Date Open</strong>: 10-04-05
                                    </div>
                                </div>
                                <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <a class="btn btn-primary" href="{{url('/tourist_spots/place')}}">Add to</a>
                                </div>
                            </div>
                            </div>
                        </div>
                        {{-- 5 --}}


                        <button type="button" class="bg-light.bg-gradient remove" data-toggle="modal" data-target="#product5">
                            <div class="container col-sm m-1 p-2 card-custome card">
                                <img class="img-fluid" src="{{asset('sources/image6.png')}}" alt="">
                                <div class="container">
                                    <strong>Tourist_Spot Name</strong>: Kawasan Falls
                                </div>
                                <div class="container">
                                    <strong>Description</strong>: known for its beautiful falls
                                </div>
                                <div class="container">
                                    <strong>Address</strong>: Alegria, Cebu
                                </div>
                                <div class="container">
                                    <strong>Datem Open</strong>: 10-04-05
                                </div>
                            </div>
                        </button>

                        <div class="modal fade" id="product5" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle"><strong>Tourist_Spot</strong>: Kawasan Falls</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                </div>
                                <div class="modal-body">
                                    <div class="cotainer d-flex justify-content-center align-items-center">
                                        <img class="img-fluid" src="{{asset('sources/image6.png')}}" alt="">
                                    </div>
                                    <div class="container">
                                        <strong>Tourist_Spot Name</strong>: Kawasan falls
                                    </div>
                                    <div class="container">
                                        <strong>Description</strong>: known for its beautiful falls
                                    </div>
                                    <div class="container">
                                        <strong>Address</strong>: Alegria, Cebu
                                    </div>
                                    <div class="container">
                                        <strong>Date Open</strong>: 10-04-05
                                    </div>
                                </div>
                                <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <a class="btn btn-primary" href="{{url('/tourist_spots/place')}}">Add to</a>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </section>
@endsection

