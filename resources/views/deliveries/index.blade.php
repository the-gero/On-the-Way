@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <a href="/delivery/create"><button class="btn btn-success "  > Request a delivery</button></a>
<hr>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">My Delivery Requests</div>
                
                <div class="card-body">
                        <?php $flag="1"; ?>
                        @if(count($dels) > 0 )
                            @foreach($dels as $del)
                            @if($del->status == "waiting")
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
                                                <p>@if($del->status == "waiting") <div class=""> Waiting</div> @endif</p>
                                                
                                        </div>
                                    </div>
                                </div>
                                <?php $flag="0"; ?>
                            @endif
                            @endforeach
                            
                            {{$dels->links()}}
                        @endif
                        @if($flag == "1")
                            <p>No Requests found</p>
                        @endif
                </div>
            </div>
        </div>
        <div class="col-md-6">
                <div class="card">
                    <div class="card-header">My Deliveries On the way</div>
    
                    <div class="card-body">
                            <?php $flag="1"; ?>
                        @if(count($dels) > 0)
                        @foreach($dels as $del)
                        @if($del->status == "accepted")
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
                                            <small><div class="">Accepted</div></small>
                                            
                                    </div>
                                </div>
                            </div>
                            <?php $flag="0"; ?>
                        @endif
                        @endforeach
                        {{$dels->links()}}  
                        @endif
                        @if($flag == "1")
                            <p>No Deliveries found</p>
                        @endif
                    </div>
                </div>
            </div>
    </div>
</div>
@endsection
