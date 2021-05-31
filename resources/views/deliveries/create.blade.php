@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Ask for Delivery</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('delivery.store') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="pkgOwner" class="col-md-4 col-form-label text-md-right">{{ __('Owner') }}</label>

                            <div class="col-md-6">
                                <input id="pkgOwner"  type="text" class="form-control{{ $errors->has('pkgOwner') ? ' is-invalid' : '' }}" name="pkgOwner" value="{{ old('pkgOwner') }}" required autofocus>

                                @if ($errors->has('pkgOwner'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('pkgOwner') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="pkgReciever" class="col-md-4 col-form-label text-md-right">{{ __('Reciever') }}</label>

                            <div class="col-md-6">
                                <input id="pkgReciever" type="pkgReciever" class="form-control{{ $errors->has('pkgReciever') ? ' is-invalid' : '' }}" name="pkgReciever" value="{{ old('pkgReciever') }}" required>

                                @if ($errors->has('pkgReciever'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('pkgReciever') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="pkgType" class="col-md-4 col-form-label text-md-right">{{ __('Type') }}</label>

                            <div class="col-md-6">
                                <select id="pkgType" class="form-control{{ $errors->has('pkgType') ? ' is-invalid' : '' }}" name="pkgType" required>
                                    <option value="Light">Light</option>
                                    <option value="Heavy">Heavy</option>
                                    <option value="VeryHeavy">VeryHeavy</option>
                                </select>
                                @if ($errors->has('pkgType'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('pkgType') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="pkgCredit" class="col-md-4 col-form-label text-md-right">{{ __('Credit') }}</label>

                            <div class="col-md-6">
                                <input id="pkgCredit" type="pkgCredit" class="form-control{{ $errors->has('pkgCredit') ? ' is-invalid' : '' }}" name="pkgCredit" required>

                                @if ($errors->has('pkgCredit'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('pkgCredit') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="fromLoc" class="col-md-4 col-form-label text-md-right">{{ __('From') }}</label>

                            <div class="col-md-6">
                                <input id="fromLoc" type="fromLoc" class="form-control{{ $errors->has('fromLoc') ? ' is-invalid' : '' }}" name="fromLoc" required>

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
                                <input id="toLoc" type="toLoc" class="form-control{{ $errors->has('toLoc') ? ' is-invalid' : '' }}" name="toLoc" required>

                                @if ($errors->has('toLoc'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('toLoc') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="description" class="col-md-4 col-form-label text-md-right">{{ __('Description') }}</label>

                            <div class="col-md-6">
                                <textarea id="description" type="description" class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" name="description" required>
                                </textarea>
                                @if ($errors->has('description'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Ask now') }}
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
