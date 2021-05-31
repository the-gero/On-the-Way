@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Trip</div>
                <div class="card-body">
                    <form method="POST" action="/travels/{{$travel->id}}">
                        @csrf
                        @method('PUT')

                        <div class="form-group row">
                            <label for="fromLoc" class="col-md-4 col-form-label text-md-right">{{ __('From') }}</label>

                            <div class="col-md-6">
                                <input id="fromLoc" type="text" value="{{$travel->fromLoc}}" class="form-control{{ $errors->has('fromLoc') ? ' is-invalid' : '' }}" name="fromLoc" required>

                                @if ($errors->has('fromLoc'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('fromLoc') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="toLoc" class="col-md-4 col-form-label text-md-right">{{ __('To') }}</label>

                            <div class="col-md-6">
                                <input id="toLoc" type="text" value="{{$travel->toLoc}}" class="form-control{{ $errors->has('toLoc') ? ' is-invalid' : '' }}" name="toLoc" required>

                                @if ($errors->has('toLoc'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('toLoc') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="trvlDate" class="col-md-4 col-form-label text-md-right">{{ __('Travel Date') }}</label>

                            <div class="col-md-6">
                                <input id="trvlDate" type="date" value="{{$travel->trvlDate}}"class="form-control{{ $errors->has('trvlDate') ? ' is-invalid' : '' }}" name="trvlDate" required>

                                @if ($errors->has('trvlDate'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('trvlDate') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="travelling_by" class="col-md-4 col-form-label text-md-right">{{ __('Mode Of Transport') }}</label>

                            <div class="col-md-6">
                                    <select id="travelling_by"  class="form-control{{ $errors->has('travelling_by') ? ' is-invalid' : '' }}" name="travelling_by" required>
                                            <option value="Train">Train</option>
                                            <option value="Road">Road</option>
                                            <option value="Plane">Plane</option>
                                    </select>
                                @if ($errors->has('travelling_by'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('travelling_by') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Edit your trip') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                
            </div>
        </div>
    </div>
</div>
@endsection
