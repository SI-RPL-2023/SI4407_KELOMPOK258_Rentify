<!DOCTYPE html>
<html lang="en">

<head>
  <title>Review </title>
  
    @include('header')
    

</head>

<body>
    @include('navbar')
    
    @include('modal')

    @include('alert')
    <!-- Form Start-->
    @if (count($errors) > 0)
    <div class="alert alert-danger">
      @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
    </div>
    @endif
    <br><br>
    <center><h3 class="mb-0 pt-1">Review and Rate Smesco Convention Hall</h3></center>
    <br>
    <center><img src="{{ asset('storage/'.$data->image) }}" class="card-img-top" alt="" style="width: 300px;"></center>
    <div class="bg-white rounded shadow-sm p-4 mb-5 rating-review-select-page">
                    <h5 class="mb-4">Leave Comment</h5>
                    <p class="mb-2">Rate the Place</p>
                    <div class="mb-4">
                        <form action="/review_add/{{$data->id}}" method="POST">
                            @csrf
                            @method('POST')
                        
                            <div class="form-group">
                                <input type="hidden" name="id_property" value="{{$data->id}}">
                            </div>
                            <div class="form-group">
                                <span class="input-group-addon"><i class="fa fa-heart"></i></span>
                                <select class="form-control" id="rate" name="rating">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>
                                
                            </div>
                        
                        
                            <div class="form-group">
                                <label>Your Comment</label>
                                <textarea class="form-control" name="review"></textarea>
                            </div>
                            <br>
                            
                                
                            <button type="submit" class="btn btn-success" name="submit" > Submit Comment </button>
                        
                        </form>
                    </div>
                </div>
        @include('footer')

  </body>
</html>