<!DOCTYPE html>
<html lang="en">

<head>
  <title>Reservasi </title>
    @include('header')
    

</head>

<body>
    @include('navbar')
    
    @include('modal')

    @include('alert')
    <!-- Form Start-->
    <!-- Open Content -->
    <section class="py-5">
        <div class="container">
    <div class="tab-pane fade active show" id="pills-reviews" role="tabpanel" aria-labelledby="pills-reviews-tab">
                <div id="ratings-and-reviews" class="bg-white rounded shadow-sm p-4 mb-4 clearfix restaurant-detailed-star-rating">
                    <span class="star-rating float-right">
                              <a href="#"><i class="icofont-ui-rating icofont-2x active"></i></a>
                              <a href="#"><i class="icofont-ui-rating icofont-2x active"></i></a>
                              <a href="#"><i class="icofont-ui-rating icofont-2x active"></i></a>
                              <a href="#"><i class="icofont-ui-rating icofont-2x active"></i></a>
                              <a href="#"><i class="icofont-ui-rating icofont-2x"></i></a>
                              </span>
                    <h3 class="mb-0 pt-1">Smesco Convention Hall</h3>
                </div>
                <div class="bg-white rounded shadow-sm p-4 mb-4 clearfix graph-star-rating">
                    <h5 class="mb-0 mb-4">Ratings and Reviews</h5>
                    <div class="graph-star-rating-header">
                        <div class="star-rating">
                            <i class="text-warning fa fa-star"></i>
                            <i class="text-warning fa fa-star"></i>
                            <i class="text-warning fa fa-star"></i>
                            <i class="text-muted fa fa-star"></i>
                            <i class="text-muted fa fa-star"></i>
                            <a href="#"><i class="icofont-ui-rating"></i></a> <b class="text-black ml-2">334</b>
                        </div>
                        <p class="text-black mb-4 mt-2">Rated 3.5 out of 5</p>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="rating-list-left text-black">
                                5 Star
                            </div></div>
                            <div class="col-10">
                                <div class="progress">
                                    <div style="width: 56%" aria-valuemax="5" aria-valuemin="0" aria-valuenow="5" role="progressbar" class="progress-bar bg-success">
                                        <span class="sr-only">80% Complete (danger)</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col">56%</div>
                        </div>
                        <div class="row">
                            <div class="col">
                                4 Star
                            </div>
                            <div class="col-10">
                                <div class="progress">
                                    <div style="width: 23%" aria-valuemax="5" aria-valuemin="0" aria-valuenow="5" role="progressbar" class="progress-bar bg-success">
                                        <span class="sr-only">80% Complete (danger)</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col">23%</div>
                        </div>
                        <div class="row">
                            <div class="col">
                                3 Star
                            </div>
                            <div class="col-10">
                                <div class="progress">
                                    <div style="width: 11%" aria-valuemax="5" aria-valuemin="0" aria-valuenow="5" role="progressbar" class="progress-bar bg-success">
                                        <span class="sr-only">80% Complete (danger)</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col">11%</div>
                        </div>
                        <div class="row">
                            <div class="col">
                                2 Star
                            </div>
                            <div class="col-10">
                                <div class="progress">
                                    <div style="width: 2%" aria-valuemax="5" aria-valuemin="0" aria-valuenow="5" role="progressbar" class="progress-bar bg-success">
                                        <span class="sr-only">80% Complete (danger)</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col">02%</div>
                        </div>
                    </div>
                    <div class="graph-star-rating-footer text-center mt-3 mb-3">
                        <button type="submit" class="btn btn-outline-success btn-lg" name="submit">Rate and Review</button>
                    </div>
                </div>
                <div class="bg-white rounded shadow-sm p-4 mb-4 restaurant-detailed-ratings-and-reviews">
                    <h5 class="mb-1">All Ratings and Reviews</h5>
                    <br>
                    <div class="row">
                        <div class="col-1">
                            <img alt="Generic placeholder image" src="http://bootdey.com/img/Content/avatar/avatar1.png" class="rounded-pill mw-100">
                            </div>
                            <div class="col">
                                <div class="reviews-members-header">
                                    <span class="star-rating float-right">
                                        <i class="text-warning fa fa-star"></i>
                                        <i class="text-warning fa fa-star"></i>
                                        <i class="text-warning fa fa-star"></i>
                                        <i class="text-warning fa fa-star"></i>
                                        <i class="text-warning fa fa-star"></i>
                                          </span>
                                    <h6>Singh Osahan</h6>
                                    <p class="text-gray">Tue, 20  Mar 2020</p>
                                </div>
                                <div class="reviews-members-body">
                                    <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections </p>
                                </div>
                                <div class="reviews-members-footer">
                                    <a><i class="fa fa-thumbs-up mx-2"></i> 856M</a> <a><i class="fa fa-thumbs-down mx-2"></i> 158K</a>
                                </div>
                            </div>
                        </div>
                    <hr>
                    <div class="row">
                        <div class="col-1">
                            <img alt="Generic placeholder image" src="http://bootdey.com/img/Content/avatar/avatar6.png" class="rounded-pill mw-100">
                            </div>
                            <div class="col">
                                <div class="reviews-members-header">
                                    <span class="star-rating float-right">
                                        <i class="text-warning fa fa-star"></i>
                                        <i class="text-warning fa fa-star"></i>
                                        <i class="text-warning fa fa-star"></i>
                                        <i class="text-muted fa fa-star"></i>
                                        <i class="text-muted fa fa-star"></i>
                                          </span>
                                    <h6 class="mb-1">Gurdeep Singh</h6>
                                    <p class="text-gray">Tue, 20 Mar 2020</p>
                                </div>
                                <div class="reviews-members-body">
                                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
                                </div>
                                <div class="reviews-members-footer">
                                    <a><i class="fa fa-thumbs-up mx-2"></i> 88K</a> <a><i class="fa fa-thumbs-down mx-2"></i> 1K</a>
                                </div>
                            </div>
                        </div>
                    <hr>
                    <a class="text-center w-100 d-block mt-4 font-weight-bold" href="#">See All Reviews</a>
                </div>
                <div class="bg-white rounded shadow-sm p-4 mb-5 rating-review-select-page">
                    <h5 class="mb-4">Leave Comment</h5>
                    <p class="mb-2">Rate the Place</p>
                    <div class="mb-4">
                        <span class= data-mdb-toggle>
                            <i class="text-muted fa fa-star"></i>
                            <i class="text-muted fa fa-star"></i>
                            <i class="text-muted fa fa-star"></i>
                            <i class="text-muted fa fa-star"></i>
                            <i class="text-muted fa fa-star"></i>
                                 </span>
                    </div>
                    <form>
                        <div class="form-group">
                            <label>Your Comment</label>
                            <textarea class="form-control"></textarea>
                        </div>
                        <br>
                        <div class="form-group">
                            <!-- <button type="submit" class="btn btn-outline-primary btn-lg" name="submit">Submit Comment</button> -->
                            <button type="submit" class="btn btn-success" > Submit Comment </button>
                        </div>
                    </form>
                </div>
            </section>
    <!-- End Article -->
<br>
@include('footer')

  </body>
</html>