<!DOCTYPE html>
<html lang="en">

<head>
    <title>{{$data->property_name}}</title>
    @include('header')
    

</head>

<body>
    @include('navbar')
    
    @include('modal')

    @include('alert')

    <!-- Open Content -->
    
    @if (count($errors) > 0)
    <div class="alert alert-danger">
      @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
    </div>
    @endif
    <section class="bg-light">
        <div class="container pb-5">
            <div class="row">
            
                <div class="col-lg-5 mt-5">
                
                    <div class="card mb-3 justify-content-center align-items-center">
                        <img id="product-detail" class="card-img img-fluid" src='{{ asset('storage/'.$data->image) }}' alt='No Image' >
                    </div>
                    </div>
                    
            
                       
                        
                <!-- col end -->
                <div class="col-lg-7 mt-5">
                    <div class="card">
                        <div class="card-body">
                            <h1 class="h2">{{$data->property_name}}</h1>
                            <p class="h3 py-2">{{$price}} /jam</p>
                            <p class="py-2">
                            @if ($rating == 5)
                                
                                <a href="#"><i class="fa fa-star text-warning"></i></a>
                                <a href="#"><i class="fa fa-star text-warning"></i></a>
                                <a href="#"><i class="fa fa-star text-warning"></i></a>
                                <a href="#"><i class="fa fa-star text-warning"></i></a>
                                <a href="#"><i class="fa fa-star text-warning"></i></a>
                            @elseif ($rating >= 4)
                                
                                <a href="#"><i class="fa fa-star text-warning"></i></a>
                                <a href="#"><i class="fa fa-star text-warning"></i></a>
                                <a href="#"><i class="fa fa-star text-warning"></i></a>
                                <a href="#"><i class="fa fa-star text-warning"></i></a>
                                <a href="#"><i class="fa fa-star text-secondary"></i></a>
                                
                            @elseif ($rating >= 3)
                            
                                <a href="#"><i class="fa fa-star text-warning"></i></a>
                                <a href="#"><i class="fa fa-star text-warning"></i></a>
                                <a href="#"><i class="fa fa-star text-warning"></i></a>
                                <a href="#"><i class="fa fa-star text-secondary"></i></a>
                                <a href="#"><i class="fa fa-star text-secondary"></i></a>
                                
                            @elseif ($rating >= 2)
                                
                                <a href="#"><i class="fa fa-star text-warning"></i></a>
                                <a href="#"><i class="fa fa-star text-warning"></i></a>
                                <a href="#"><i class="fa fa-star text-secondary"></i></a>
                                <a href="#"><i class="fa fa-star text-secondary"></i></a>
                                <a href="#"><i class="fa fa-star text-secondary"></i></a>
                                
                            @elseif ($rating >= 1)
                                
                                <a href="#"><i class="fa fa-star text-warning"></i></a>
                                <a href="#"><i class="fa fa-star text-secondary"></i></a>
                                <a href="#"><i class="fa fa-star text-secondary"></i></a>
                                <a href="#"><i class="fa fa-star text-secondary"></i></a>
                                <a href="#"><i class="fa fa-star text-secondary"></i></a>
                                
                            @else
                                
                                <a href="#"><i class="fa fa-star text-secondary"></i></a>
                                <a href="#"><i class="fa fa-star text-secondary"></i></a>
                                <a href="#"><i class="fa fa-star text-secondary"></i></a>
                                <a href="#"><i class="fa fa-star text-secondary"></i></a>
                                <a href="#"><i class="fa fa-star text-secondary"></i></a>
                                
                            @endif
                            <span class="list-inline-item text-warning">Rated {{$rating}} out of 5 |</span><span class="list-inline-item text-dark">| {{$jumlah}} reviews</span>
                            </p>
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <h6>Lokasi:</h6>
                                </li>
                                <li class="list-inline-item">
                                    <p class="text-muted"><strong>{{$data->lokasi}}</strong></p>
                                </li>
                            </ul>

                            <h6>Deskripsi:</h6>
                            <p>{{$data->description}}</p>
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <h6>Kapasitas:</h6>
                                </li>
                                <li class="list-inline-item">
                                    <p class="text-muted"><strong>{{$data->kapasitas}}</strong></p>
                                </li>
                            </ul>

                            <h6>Fasilitas:</h6>
                            <p class="text-muted"><strong>{{$data->fasilitas}}</strong></p>

                            
                            
                            <form action="/reservasi" method="post">
                            @csrf
                            @method('POST')
                            <input type="hidden" name="id_property" value="{{$data->id}}">
                            <input type="hidden" name="id_user" value="{{Auth::id()}}">
                                <div class="row">
                                    <div class="col-auto">
                                        <ul class="list-inline pb-3">
                                            <li class="list-inline-item">Tanggal :
                                            <input type="date" class="form-control"  name="tanggal_sewa">
                                            </li>
                                            
                                        </ul>
                                    </div>
                                    <div class="col-auto">
                                        <ul class="list-inline pb-3">
                                            <li class="list-inline-item text-right">
                                                Durasi Sewa (Jam)
                                                <input type="number" class="form-control"  name="durasi">
                                            </li>
                                           
                                        </ul>
                                    </div>
                                </div>
                                <div class="row pb-3">
                                    <div class="col d-grid">
                                        <button type="submit" class="btn btn-success btn-lg" name="submit" >Rent</button>
                                    </div>
                                    </div>
                                    </form>
                                    <form action="/favorite" method="post">
                                    @csrf
                                    @method('POST')
                                    <input type="hidden" name="id_property" value="{{$data->id}}">
                                    <input type="hidden" name="id_user" value="{{Auth::id()}}">
                                    <div class="row pb-3">
                                    <div class="col d-grid">
                                        <button type="submit" class="btn btn-success btn-lg" name="submit" >Add To Favorite</button>
                                    </div>
                                    </div>
                                
                            </form>

                        </div>
                    </div>
                </div>
                <br><br>
                
                
    </section>
    <br>
   
                    <div class="row pb-3">
                        <div class="col d-grid">
                            <center><button type="submit" style="width:95%;" class="btn btn-outline-success btn-lg" onclick="myFunction()">Lihat Review</button></center>
                        </div>
                    </div>
                                
                    <script>
                function myFunction() {
                    
                var x = document.getElementById("review");
                if (x.style.display == "none") {
                    x.style.display = "block";
                } else {
                    x.style.display = "none";
                }
                }
            </script>                   
    <!-- Close Content -->
<br>
<br>
<section class="py-5" id="review" style="display:none;">
        <div class="container">
    <div class="tab-pane fade active show" id="pills-reviews" role="tabpanel" aria-labelledby="pills-reviews-tab">
                <div id="ratings-and-reviews" class="bg-white rounded shadow-sm p-4 mb-4 clearfix restaurant-detailed-star-rating">
                    
                        @if ($review->isEmpty())
                            <span class="star-rating float-right">
                            <a href="#"><i class="fa fa-star text-secondary"></i></a>
                            <a href="#"><i class="fa fa-star text-secondary"></i></a>
                            <a href="#"><i class="fa fa-star text-secondary"></i></a>
                            <a href="#"><i class="fa fa-star text-secondary"></i></a>
                            <a href="#"><i class="fa fa-star text-secondary"></i></a>
                            </span>
                        @else 

                            @if ($rating == 5)
                                <span class="star-rating float-right">
                                <a href="#"><i class="fa fa-star text-warning"></i></a>
                                <a href="#"><i class="fa fa-star text-warning"></i></a>
                                <a href="#"><i class="fa fa-star text-warning"></i></a>
                                <a href="#"><i class="fa fa-star text-warning"></i></a>
                                <a href="#"><i class="fa fa-star text-secondary"></i></a>
                                </span>
                            @elseif ($rating >= 4)
                                <span class="star-rating float-right">
                                <a href="#"><i class="fa fa-star text-warning"></i></a>
                                <a href="#"><i class="fa fa-star text-warning"></i></a>
                                <a href="#"><i class="fa fa-star text-warning"></i></a>
                                <a href="#"><i class="fa fa-star text-warning"></i></a>
                                <a href="#"><i class="fa fa-star text-secondary"></i></a>
                                </span>
                            @elseif ($rating >= 3)
                            <span class="star-rating float-right">
                                <a href="#"><i class="fa fa-star text-warning"></i></a>
                                <a href="#"><i class="fa fa-star text-warning"></i></a>
                                <a href="#"><i class="fa fa-star text-warning"></i></a>
                                <a href="#"><i class="fa fa-star text-secondary"></i></a>
                                <a href="#"><i class="fa fa-star text-secondary"></i></a>
                                </span>
                            @elseif ($rating >= 2)
                                <span class="star-rating float-right">
                                <a href="#"><i class="fa fa-star text-warning"></i></a>
                                <a href="#"><i class="fa fa-star text-warning"></i></a>
                                <a href="#"><i class="fa fa-star text-secondary"></i></a>
                                <a href="#"><i class="fa fa-star text-secondary"></i></a>
                                <a href="#"><i class="fa fa-star text-secondary"></i></a>
                                </span>
                            @elseif ($rating >= 1)
                                <span class="star-rating float-right">
                                <a href="#"><i class="fa fa-star text-warning"></i></a>
                                <a href="#"><i class="fa fa-star text-secondary"></i></a>
                                <a href="#"><i class="fa fa-star text-secondary"></i></a>
                                <a href="#"><i class="fa fa-star text-secondary"></i></a>
                                <a href="#"><i class="fa fa-star text-secondary"></i></a>
                                </span>
                            @else
                                <span class="star-rating float-right">
                                <a href="#"><i class="fa fa-star text-secondary"></i></a>
                                <a href="#"><i class="fa fa-star text-secondary"></i></a>
                                <a href="#"><i class="fa fa-star text-secondary"></i></a>
                                <a href="#"><i class="fa fa-star text-secondary"></i></a>
                                <a href="#"><i class="fa fa-star text-secondary"></i></a>
                                </span>
                            @endif
                        @endif
                    <h3 class="mb-0 pt-1">{{$data->property_name}}</h3>
                </div>
                @if ($review != null)
                <div class="bg-white rounded shadow-sm p-4 mb-4 clearfix graph-star-rating">
                    <h5 class="mb-0 mb-4">Ratings and Reviews</h5>
                    <div class="graph-star-rating-header">
                        <div class="star-rating">
                        @if ($rating == 5)
                                <div class="star-rating">
                                <a href="#"><i class="fa fa-star text-warning"></i></a>
                                <a href="#"><i class="fa fa-star text-warning"></i></a>
                                <a href="#"><i class="fa fa-star text-warning"></i></a>
                                <a href="#"><i class="fa fa-star text-warning"></i></a>
                                <a href="#"><i class="fa fa-star text-warning"></i></a>
                        @elseif ($rating >= 4)
                                <div class="star-rating">
                                <a href="#"><i class="fa fa-star text-warning"></i></a>
                                <a href="#"><i class="fa fa-star text-warning"></i></a>
                                <a href="#"><i class="fa fa-star text-warning"></i></a>
                                <a href="#"><i class="fa fa-star text-warning"></i></a>
                                <a href="#"><i class="fa fa-star text-secondary"></i></a>
                                
                            @elseif ($rating >= 3)
                            <div class="star-rating">
                                <a href="#"><i class="fa fa-star text-warning"></i></a>
                                <a href="#"><i class="fa fa-star text-warning"></i></a>
                                <a href="#"><i class="fa fa-star text-warning"></i></a>
                                <a href="#"><i class="fa fa-star text-secondary"></i></a>
                                <a href="#"><i class="fa fa-star text-secondary"></i></a>
                                
                            @elseif ($rating >= 2)
                                <div class="star-rating">
                                <a href="#"><i class="fa fa-star text-warning"></i></a>
                                <a href="#"><i class="fa fa-star text-warning"></i></a>
                                <a href="#"><i class="fa fa-star text-secondary"></i></a>
                                <a href="#"><i class="fa fa-star text-secondary"></i></a>
                                <a href="#"><i class="fa fa-star text-secondary"></i></a>
                                
                            @elseif ($rating >= 1)
                                <div class="star-rating">
                                <a href="#"><i class="fa fa-star text-warning"></i></a>
                                <a href="#"><i class="fa fa-star text-secondary"></i></a>
                                <a href="#"><i class="fa fa-star text-secondary"></i></a>
                                <a href="#"><i class="fa fa-star text-secondary"></i></a>
                                <a href="#"><i class="fa fa-star text-secondary"></i></a>
                                
                            @else
                                <div class="star-rating">
                                <a href="#"><i class="fa fa-star text-secondary"></i></a>
                                <a href="#"><i class="fa fa-star text-secondary"></i></a>
                                <a href="#"><i class="fa fa-star text-secondary"></i></a>
                                <a href="#"><i class="fa fa-star text-secondary"></i></a>
                                <a href="#"><i class="fa fa-star text-secondary"></i></a>
                                
                            @endif
                            @if (is_countable($review) && count($review) > 0)
                            <a href="#"><i class="icofont-ui-rating"></i></a> <b class="text-black ml-2">{{count($review)}}</b>
                            @endif
                        </div>
                        <p class="text-black mb-4 mt-2">Rated {{$rating}} out of 5</p>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="rating-list-left text-black">
                                5 Star
                            </div></div>
                            <div class="col-10">
                                <div class="progress">
                                    <div style="width: {{($review->lima)*100}}%" aria-valuemax="5" aria-valuemin="0" aria-valuenow="5" role="progressbar" class="progress-bar bg-success">
                                        <span class="sr-only">80% Complete (danger)</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col">{{($review->lima)*100}}%</div>
                        </div>
                        <div class="row">
                            <div class="col">
                                4 Star
                            </div>
                            <div class="col-10">
                                <div class="progress">
                                    <div style="width: {{($review->empat)*100}}%" aria-valuemax="5" aria-valuemin="0" aria-valuenow="5" role="progressbar" class="progress-bar bg-success">
                                        <span class="sr-only">80% Complete (danger)</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col">{{($review->empat)*100}}%</div>
                        </div>
                        <div class="row">
                            <div class="col">
                                3 Star
                            </div>
                            <div class="col-10">
                                <div class="progress">
                                    <div style="width: {{($review->tiga)*100}}%" aria-valuemax="5" aria-valuemin="0" aria-valuenow="5" role="progressbar" class="progress-bar bg-success">
                                        <span class="sr-only">80% Complete (danger)</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col">{{($review->tiga)*100}}%</div>
                        </div>
                        <div class="row">
                            <div class="col">
                                2 Star
                            </div>
                            <div class="col-10">
                                <div class="progress">
                                    <div style="width: {{($review->dua)*100}}%" aria-valuemax="5" aria-valuemin="0" aria-valuenow="5" role="progressbar" class="progress-bar bg-success">
                                        <span class="sr-only">80% Complete (danger)</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col">{{($review->dua)*100}}%</div>
                        </div>
                        <div class="row">
                            <div class="col">
                                1 Star
                            </div>
                            <div class="col-10">
                                <div class="progress">
                                    <div style="width: {{($review->satu)*100}}%" aria-valuemax="5" aria-valuemin="0" aria-valuenow="5" role="progressbar" class="progress-bar bg-success">
                                        <span class="sr-only">80% Complete (danger)</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col">{{($review->satu)*100}}%</div>
                        </div>
                    </div>
                    <form action="/review_add/{{$data->id}}" method="get">
                    <div class="graph-star-rating-footer text-center mt-3 mb-3">
                        <button type="submit" class="btn btn-outline-success btn-lg" name="submit">Rate and Review</button>
                    </div>
                    </form>
                    
                </div>
                <div class="bg-white rounded shadow-sm p-4 mb-4 restaurant-detailed-ratings-and-reviews">
                    <h5 class="mb-1">All Ratings and Reviews</h5>
                    <br>
                    @foreach ($review as $review)
                    <div class="row">
                        <div class="col-1">
                            <img alt="Generic placeholder image" src="http://bootdey.com/img/Content/avatar/avatar1.png" class="rounded-pill mw-100">
                            </div>
                            <div class="col">
                                <div class="reviews-members-header">
                                    @if ($review->rating == 5)
                                        <span class="star-rating float-right">
                                        <a href="#"><i class="fa fa-star text-warning"></i></a>
                                        <a href="#"><i class="fa fa-star text-warning"></i></a>
                                        <a href="#"><i class="fa fa-star text-warning"></i></a>
                                        <a href="#"><i class="fa fa-star text-warning"></i></a>
                                        <a href="#"><i class="fa fa-star text-warning"></i></a>
                                        </span>
                                    @elseif ($review->rating >= 4)
                                        <span class="star-rating float-right">
                                        <a href="#"><i class="fa fa-star text-warning"></i></a>
                                        <a href="#"><i class="fa fa-star text-warning"></i></a>
                                        <a href="#"><i class="fa fa-star text-warning"></i></a>
                                        <a href="#"><i class="fa fa-star text-warning"></i></a>
                                        <a href="#"><i class="fa fa-star text-secondary"></i></a>
                                        </span>
                                    @elseif ($review->rating >= 3)
                                    <span class="star-rating float-right">
                                        <a href="#"><i class="fa fa-star text-warning"></i></a>
                                        <a href="#"><i class="fa fa-star text-warning"></i></a>
                                        <a href="#"><i class="fa fa-star text-warning"></i></a>
                                        <a href="#"><i class="fa fa-star text-secondary"></i></a>
                                        <a href="#"><i class="fa fa-star text-secondary"></i></a>
                                        </span>
                                    @elseif ($review->rating >= 2)
                                        <span class="star-rating float-right">
                                        <a href="#"><i class="fa fa-star text-warning"></i></a>
                                        <a href="#"><i class="fa fa-star text-warning"></i></a>
                                        <a href="#"><i class="fa fa-star text-secondary"></i></a>
                                        <a href="#"><i class="fa fa-star text-secondary"></i></a>
                                        <a href="#"><i class="fa fa-star text-secondary"></i></a>
                                        </span>
                                    @elseif ($review->rating >= 1)
                                        <span class="star-rating float-right">
                                        <a href="#"><i class="fa fa-star text-warning"></i></a>
                                        <a href="#"><i class="fa fa-star text-secondary"></i></a>
                                        <a href="#"><i class="fa fa-star text-secondary"></i></a>
                                        <a href="#"><i class="fa fa-star text-secondary"></i></a>
                                        <a href="#"><i class="fa fa-star text-secondary"></i></a>
                                        </span>
                                    @else
                                        <span class="star-rating float-right">
                                        <a href="#"><i class="fa fa-star text-secondary"></i></a>
                                        <a href="#"><i class="fa fa-star text-secondary"></i></a>
                                        <a href="#"><i class="fa fa-star text-secondary"></i></a>
                                        <a href="#"><i class="fa fa-star text-secondary"></i></a>
                                        <a href="#"><i class="fa fa-star text-secondary"></i></a>
                                        </span>
                                    @endif
                                    <h6>{{$user->nama}}</h6>
                                    <p class="text-gray">{{$review->created_at}}</p>
                                </div>
                                <div class="reviews-members-body">
                                    <p>{{$review->review}} </p>
                                </div>
                                <!-- <div class="reviews-members-footer">
                                    <a><i class="fa fa-thumbs-up mx-2"></i> 856M</a> <a><i class="fa fa-thumbs-down mx-2"></i> 158K</a>
                                </div> -->
                            </div>
                        </div>
                    <hr>
                    @endforeach
                    <hr>
                    <a class="text-center w-100 d-block mt-4 font-weight-bold" href="#">See All Reviews</a>
                </div>
                @else
                <center>No review(s) yet</p></center><p>
                    @endif
                
            </section>
    
            
    @include('footer')

</body>

</html>