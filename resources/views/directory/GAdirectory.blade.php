<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header text-center" >
                    <h2 style="background-color: #4B006E; color: #CFB53B;">
                        {{ __('Gamma Alpha Chapter Directory') }}
                    </h2>
                </div>
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