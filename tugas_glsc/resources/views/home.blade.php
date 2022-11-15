@include('app')


    <div class="container-fluid mt-4">
        <div class="row ">
            <div class="col" >
                <div class="position-relative start-50 fw-bold w-50" style="font-size:3.5vw">
                    <p>Explore<br> The Magic of <br> Good Food</p>
                </div>
                <div class="position-relative start-50  w-50" style="font-size:1.2vw;text-align: justify" >
                    <p>Laravel is a new magical place where you can discover new food flavors you've never had before</p>
                </div>
                <div class="position-relative start-50 w-50" >
                    <a href="/food">
                        <button class="btn btn-warning btn-md" style="color: white; font-weight:bold" >Discover the magic</button>
                    </a>
                </div>
            </div>
            <div class="col px-0">
                <div class="d-flex flex-row-reverse">
                    <img src="{{URL::asset('steak.png')}}" alt="steak" height="600" width="600">
                </div>
            </div>
        </div>
    </div>




