@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card mt-4">
                <div class="card-header text-center">
                    <h2 style="background-color: #4B006E; color: #CFB53B;">
                        {{ __('Chapter Policies and Proceedures') }}
                    </h2>
                </div>
                <div class="card-body">
                    <h4>
                        This page gives access to documented chapter policies and proceedues that govern the
                        day-to-day operations:
                    </h4>
                    </br>
                    </br>

                    <div class="image-text-container">
                        <h3>Chapter ByLaws</h3>
                    </div>
                    <div>
                        <a href='/file/policy-docs/Gamma-Alpha-Bylaws-2014.pdf' style="color: #4B006E;">Chapter ByLaws - Revised May 6, 2014</a>
                    </div>
                    </br>
                    </br>
                    <div class="image-text-container">
                        <h3>Mandated Programs</h3>
                    </div>
                    <div>
                        <a href='/file/policy-docs/Gamma-Alpha-Scholarship-Policy.pdf' style="color: #4B006E;">Scholarship Policy - Revised November 2024</a>
                    </div>
                    </br>
                    </br>                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection