@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card mt-4">
                <div class="card-header text-center">
                        <h2 style="background-color: #4B006E; color: #CFB53B;">
                            {{ __('Founders') }}
                        </h2>
                </div>
                <div class="card-body">
                    <p>
                    Omega Psi Phi Fraternity, Inc. was founded on November 17, 1911, at Howard University by three 
                    undergraduate students and their faculty advisor. Here is a brief summary of their lives:
                    </p>
                    
                    <div class="image-text-container">
                    <img src="{{asset('assets/images/custom/founders/ernest-everett-just.jpg') }}" alt="Ernest Everett Just">
                    <p>
                    ### 1. **Dr. Ernest Everett Just**
                    </br>
                        - **Born:** August 14, 1883, Charleston, South Carolina
                    </br>
                        - **Died:** October 27, 1941, Washington, D.C.
                    </br>
                        - **Career:** Ernest E. Just was an eminent biologist and educator. He earned his bachelor’s 
                        degree from Dartmouth College and later became a faculty member at Howard University, where he 
                        headed the Department of Zoology. Just made significant contributions to cell biology, particularly 
                        in the field of fertilization and cell division. He was recognized internationally for his research 
                        and received numerous accolades, including the Spingarn Medal from the NAACP in 1915.
                    </br>
                        - **Contribution to Omega Psi Phi:** Dr. Just served as the faculty advisor for the founding of the 
                        fraternity. His influence and guidance were crucial in the establishment of the organization.
                    </br>
                        </p>
                    </div>
                    </br>
                    </br>
                    <div class="image-text-container">
                    <img src="{{asset('assets/images/custom/founders/edgar-amos-love.jpg') }}" alt="Edgar Amos Love">
                    <p>
                    ### 2. **Bishop Edgar Amos Love**
                    </br>
                        - **Born:** September 10, 1891, Harrisonburg, Virginia
                    </br>
                        - **Died:** May 1, 1974, Baltimore, Maryland
                    </br>
                        - **Career:** Edgar A. Love was a Methodist bishop and one of the first Black men to be ordained 
                        in the Methodist Episcopal Church. He earned his bachelor's degree from Howard University and later 
                        pursued graduate studies at Boston University School of Theology, where he earned his divinity degree. 
                        Throughout his career, Love was an advocate for civil rights and was deeply involved in community service.
                    </br>
                        - **Contribution to Omega Psi Phi:** Edgar A. Love served as the first Grand Basileus (president) of 
                        Omega Psi Phi Fraternity, helping to lay the foundation for the organization’s structure and values.
                    </br>
                        </p>
                    </div>
                    </br>
                    </br>
                    <div class="image-text-container">
                    <img src="{{asset('assets/images/custom/founders/oscar-james-cooper.jpg') }}" alt="Oscar James Cooper">
                    <p>
                    ### 3. **Dr. Oscar James Cooper**
                    </br>
                        - **Born:** May 20, 1888, Washington, D.C.
                    </br>
                        - **Died:** February 24, 1972, Philadelphia, Pennsylvania
                    </br>
                        - **Career:** Oscar J. Cooper was a physician who played a key role in establishing the fraternity. 
                        He graduated from Howard University with a degree in science and later attended Howard University 
                        Medical School, where he earned his medical degree. Cooper practiced medicine for many years in 
                        Philadelphia and was well-respected in his community for his medical expertise and dedication.
                    </br>
                        - **Contribution to Omega Psi Phi:** As one of the fraternity’s founders, Cooper was instrumental 
                        in shaping its principles and expanding its reach. He was committed to the fraternity’s growth and 
                        was actively involved in its development throughout his life.
                    </br>
                        </p>
                    </div>
                    </br>
                    </br>
                    <div class="image-text-container">
                    <img src="{{asset('assets/images/custom/founders/frank-coleman.jpeg') }}" alt="Frank Coleman">
                    <p>
                    ### 4. **Professor Frank Coleman**
                    </br>
                        - **Born:** July 11, 1890, Washington, D.C.
                    </br>
                        - **Died:** February 24, 1967, Washington, D.C.
                    </br>
                        - **Career:** Frank Coleman was a physics professor and U.S. Army officer. He earned his bachelor’s
                        degree from Howard University and later pursued graduate studies at the University of Chicago. Coleman 
                        served as a professor and head of the Department of Physics at Howard University for many years. He 
                        was also a captain in the U.S. Army during World War I.
                    </br>
                        - **Contribution to Omega Psi Phi:** Frank Coleman was a founding member who contributed significantly 
                        to the establishment of the fraternity’s ideals and traditions. His leadership and commitment helped 
                        to ensure the fraternity’s longevity and success.
                    </br>
                        </p>
                    </div>
                    </br>
                    </br>
                    <p>
                    These four men laid the foundation for Omega Psi Phi Fraternity, Inc., which has grown into one of the 
                    most influential African American fraternities in the United States, with a strong commitment to 
                    scholarship, community service, and the upliftment of the African American community.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection