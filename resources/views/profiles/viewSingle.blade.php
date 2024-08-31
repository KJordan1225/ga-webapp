@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card mt-4">
                <div class="card-header text-center">
                        <h2 style="background-color: #4B006E; color: #CFB53B;">
                            {{ __('View Single Profile') }}
                        </h2>
                </div>
                <div class="card-body">
                <table>                
                <tr>
                    <td class="resizable">Name</td>
                    <td class="resizable">{{ $myProfile->firstname." ".$myProfile->lastname }}</td>
                </tr>
                <tr>
                    <td class="resizable">Address</td>
                    <td class="resizable">{{ $myProfile->street1 }}</ br>
                        {{ $myProfile->street2 }}</ br>
                        {{ $myProfile->city.", ".$myProfile->state." ".$myProfile->zip_code }}
                    </td>
                </tr>
                <tr>
                    <td class="resizable">Email</td>
                    <td class="resizable">{{ $myProfile->email }}</td>
                </tr>
                <tr>
                    <td class="resizable">Telephone</td>
                    <td class="resizable">{{ $myProfile->telephone }}</td>
                </tr>
                <tr>
                    <td class="resizable">Telephone Type</td>
                    <td class="resizable">{{ $myProfile->telephone_type }}</td>
                </tr>
                <tr>
                    <td class="resizable">Date of Birth</td>
                    <td class="resizable">{{ $myProfile->dob }}</td>
                </tr>
                <tr>
                    <td class="resizable">Queversary</td>
                    <td class="resizable">{{ $myProfile->queversary }}</td>
                </tr>
            </table>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection