@extends('layouts.app')

@section('content')
<div class="container">
        <a href="/travels/create"><button class="btn btn-success "  > Post A trip</button></a>
        <hr>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">My Travels</div>

                <div class="card-body">
                        
                        @if(count($travels) > 0)
                            @foreach($travels as $travel)
                            
                                <div class="well">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-4">
                                            {{$travel->fromLoc}}-{{$travel->toLoc}}
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                            <h3><a href="/travels/{{$travel->id}}">{{$travel->fromLoc}}-{{$travel->toLoc}}</a></h3>
                                            <small> Owner {{$travel->pkgOwner}} Reciever {{$travel->pkgReciever}}</small>
                                        </div>
                                        <div class="col-md-2 col-sm-2">
                                                <p>@if($travel->status == "waiting") <div class=""> Waiting</div> @endif</p>
                                                
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            {{$travels->links()}}
                        @else
                            <p>No travels found</p>
                        @endif
                </div>
            </div>
        </div>
        <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Delevery on trip request</div>
    
                    <div class="card-body">
                            
                            @if(count($dels) > 0)
                                @foreach($dels as $del)
                                @if($del->status == "requested")
                                <div class="well">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-4">
                                            {{$del->fromLoc}}-{{$del->toLoc}}
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                            <h3><a href="/delivery/{{$del->id}}">{{$del->fromLoc}}-{{$del->toLoc}}</a></h3>
                                            <small> Owner {{$del->pkgOwner}} Reciever {{$del->pkgReciever}}</small>
                                        </div>
                                        <div class="col-md-2 col-sm-2">
                                                <p>@if($del->status == "requested") <div class=""> Waiting</div> @endif</p>
                                                
                                        </div>
                                    </div>
                                </div>
                            @endif
                                @endforeach
                                {{$dels->links()}}
                            @else
                                <p>No travels found</p>
                            @endif
                    </div>
                </div>
            </div>
    </div>
</div>
@endsection
