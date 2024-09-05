@extends('layouts.app')

@section('content')

<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">					
                    <!-- Display Success Message -->
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    <!-- Display Error Messages -->
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="card-header text-center" >
                        <h2 style="background-color: #4B006E; color: #CFB53B;">
                            {{ __('View/Print Chapter Directory') }}
                        </h2>
                    </div>
                    </br></br>
                    <a href="{{ route('directory.download') }}" class="p-2 btn btn-primary btn-lg">Download PDF</a>
                    </br></br>
                    <div class="card-body">
                    @foreach ($myProfiles as $profileItem)
                        <div class="form-group">
                            <h3>{{ $profileItem->firstname." ".$profileItem->lastname }}</h3>                        
                            {{ $profileItem->street1 }}</br>
                            @if(!empty($profileItem->street2))
                                {{ $profileItem->street2 }}</br>
                            @endif
                            {{ $profileItem->city.", ".$profileItem->state." ".$profileItem->zip_code }}</br>                        
                            Email: {{ $profileItem->email }}</br>
                            Telephone: {{ $profileItem->telephone."  (".$profileItem->telephone_type.")" }}</br>                        
                            Birthday: {{ $profileItem->dob }}</br>
                            Queversary: {{ $profileItem->queversary }}</br>
                        </div>
                        </br>
                        </br>
                    @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection