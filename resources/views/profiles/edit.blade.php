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
                            {{ __('Profile Edit Form') }}
                        </h2>
                    </div>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <form action="{{ $myProfile->id }}" method="POST"> 
                        @csrf
                        @method('PUT')
                        
                            <!-- First Name Textfield -->
                            <div class="form-group">
                                <label for="firstname">First Name</label>
                                <input type="text" class="form-control" id="firstname" name="firstname" 
                                    value="{{ $myProfile->firstname }}">
                            </div>
                            @error('firstname')
                                <div class="error" style="color: red">{{ $message }}</div>
                            @enderror
                            
                            <!-- Last Name Textfield -->
                            <div class="form-group">
                                <label for="lastname">Last Name</label>
                                <input type="text" class="form-control" id="lastname" name="lastname" 
                                    value="{{ $myProfile->lastname }}">
                            </div>
                            @error('lastname')
                                <div class="error" style="color: red">{{ $message }}</div>
                            @enderror							
                            
                            <!-- Street1 Textfield -->
                            <div class="form-group">
                                <label for="street1">Street 1</label>
                                <input type="text" class="form-control" id="street1" name="street1" 
                                    value="{{ $myProfile->street1 }}">
                            </div>
                            @error('street1')
                                <div class="error" style="color: red">{{ $message }}</div>
                            @enderror
                            
                            <!-- Street2 Textfield -->
                            <div class="form-group">
                                <label for="street2">Street 2</label>
                                <input type="text" class="form-control" id="street2" name="street2" 
                                    value="{{ $myProfile->street2 }}">
                            </div>
                            @error('street2')
                                <div class="error" style="color: red">{{ $message }}</div>
                            @enderror
                            
                            <!-- City Textfield -->
                            <div class="form-group">
                                <label for="city">City</label>
                                <input type="text" class="form-control" id="city" name="city" 
                                    value="{{ $myProfile->city }}">
                            </div>
                            @error('city')
                                <div class="error" style="color: red">{{ $message }}</div>
                            @enderror
                            
                            <!-- State Textfield -->
                            <div class="form-group">
                                <label for="state">State</label>								
                                <select class="form-control" id="state" name="state">
                                    <option value="AL">AL</option>
                                    <option value="AK">AK</option>
                                    <option value="AR">AR</option>
                                    <option value="AZ">AZ</option>
                                    <option value="CA">CA</option>
                                    <option value="CO">CO</option>
                                    <option value="CT">CT</option>
                                    <option value="DC">DC</option>
                                    <option value="DE">DE</option>
                                    <option value="FL">FL</option>
                                    <option value="GA">GA</option>
                                    <option value="HI">HI</option>
                                    <option value="IA">IA</option>
                                    <option value="ID">ID</option>
                                    <option value="IL">IL</option>
                                    <option value="IN">IN</option>
                                    <option value="KS">KS</option>
                                    <option value="KY">KY</option>
                                    <option value="LA">LA</option>
                                    <option value="MA">MA</option>
                                    <option value="MD">MD</option>
                                    <option value="ME">ME</option>
                                    <option value="MI">MI</option>
                                    <option value="MN">MN</option>
                                    <option value="MO">MO</option>
                                    <option value="MS">MS</option>
                                    <option value="MT">MT</option>
                                    <option value="NC">NC</option>
                                    <option value="NE">NE</option>
                                    <option value="NH">NH</option>
                                    <option value="NJ">NJ</option>
                                    <option value="NM">NM</option>
                                    <option value="NV">NV</option>
                                    <option value="NY">NY</option>
                                    <option value="ND">ND</option>
                                    <option value="OH">OH</option>
                                    <option value="OK">OK</option>
                                    <option value="OR">OR</option>
                                    <option value="PA">PA</option>
                                    <option value="RI">RI</option>
                                    <option value="SC">SC</option>
                                    <option value="SD">SD</option>
                                    <option value="TN">TN</option>
                                    <option value="TX">TX</option>
                                    <option value="UT">UT</option>
                                    <option value="VT">VT</option>
                                    <option value="VA" selected>VA</option>
                                    <option value="WA">WA</option>
                                    <option value="WI">WI</option>
                                    <option value="WV">WV</option>
                                    <option value="WY">WY</option>
                                </select>
                            </div>
                            @error('state')
                                <div class="error" style="color: red">{{ $message }}</div>
                            @enderror
                            
                            <!-- Zip Code Textfield -->
                            <div class="form-group">
                                <label for="zip_code">Zip Code</label>
                                <input type="text" class="form-control" id="zip_code" name="zip_code" 
                                    value="{{ $myProfile->zip_code }}">
                            </div>
                            @error('zip_code')
                                <div class="error" style="color: red">{{ $message }}</div>
                            @enderror
                            
                            <!-- Telephone Textfield -->
                            <div class="form-group">
                                <label for="telephone">Telephone</label>
                                <input type="text" class="form-control" id="telephone" name="telephone" 
                                    value="{{ $myProfile->telephone }}" placeholder="ex. ###-###-####">
                            </div>
                            @error('telephone')
                                <div class="error" style="color: red">{{ $message }}</div>
                            @enderror
                            
                            <!-- Telephone Type Textfield -->
                            <div class="form-group">
                                <label for="telephone_type">Telephone Type</label>								
                                <select class="form-control" id="telephone_type" name="telephone_type">
                                    <option value="mobile">Mobile</option>
                                    <option value="landline">Landline</option>
                                </select>
                            </div>
                            @error('telephone_type')
                                <div class="error" style="color: red">{{ $message }}</div>
                            @enderror

                            @php 
                                $thisUser = auth()->user();
                            @endphp
                            
                            <!-- Email Textfield -->
                            <div class="form-group">
                                <label for="email">Email</label>								
                                <input type="text" class="form-control" id="email" name="email" 
                                    value="{{ $thisUser->email }}">
                            </div>
                            @error('email')
                                <div class="error" style="color: red">{{ $message }}</div>
                            @enderror
                            
                            <!-- DOB Textfield -->
                            <div class="form-group">
                                <label for="email">Birthdate</label>
                                <input type="text" class="date form-control" id="dob" name="dob"
                                    value="{{ $myProfile->dob }}">
                            </div>
                            <script type="text/javascript">  
                                $('.date').datepicker({    
                                format: dd-mm-yyyy 
                                });    
                            </script>
                            @error('dob')
                                <div class="error" style="color: red">{{ $message }}</div>
                            @enderror

                            
                            <!-- Queversary Textfield -->
                            <div class="form-group">
                                <label for="queversary">Queversary</label>								
                                <input type="text" class="date form-control" id="queversary" name="queversary"
                                    value="{{ $myProfile->queversary }}">
                            </div>
                            <script type="text/javascript">  
                                $('.date').datepicker({    
                                format: dd-mm-yyyy 
                                });    
                            </script>
                            @error('queversary')
                                <div class="error" style="color: red">{{ $message }}</div>
                            @enderror
                        
                            <!-- Submit Button -->
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection