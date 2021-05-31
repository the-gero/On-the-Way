@extends('layouts.app')

@section('content')
<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.css">
<style>
    body{background:url(https://www.adsyndicate.in/wp-content/uploads/2018/02/LP-bg-1.jpg);}
    .main-heading{width:100%; text-align:center; color:red; margin:60px;}
    .img-box img{width:100%;}
    .main{display:block; overflow:hidden;}
    .text-block{display:block; color:#fff;}
    .text-block h2{color:red;}
    .main{padding:100px 0; width:100%; overflow:hidden;}
    .main.bg-t{width:100%; background:rgba(255, 255, 255, 0.2); padding:120px 0;}

</style>
<script type="text/javascript">
       wow = new WOW(
      {
        animateClass: 'animated',
        offset:       100,
        callback:     function(box) {
          console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
        }
      }
    );
    wow.init();
    document.getElementById('moar').onclick = function() {
      var section = document.createElement('section');
      section.className = 'section--purple wow fadeInDown';
      this.parentNode.insertBefore(section, this);
    };
</script>
<section class="main">
        <div class="container">
            <a href="/" class="btn btn-info img-box wow bounceInRight center">Go Back</a>
            <hr>
            <div class="row">
                <div class="col-md-6"> 
            <div class="img-box wow bounceInUp center" data-wow-duration="2s" data-wow-delay="0s">
                @if($del->pkgType == "Light")
                    <img height="342" width="506" src="https://uispl.net/img/services/office-stationary.jpg">
                @elseif($del->pkgType == "Heavy")
                    <img height="342" width="506" src="https://cdn.wyza.com.au/media/5956845/heavy-books.jpg">
                @else
                    <img height="342" width="506" src="https://www.mohonline.com/wp-content/uploads/2018/12/lifting.jpg">
                @endif  
            </div>
        </div>
        
        <div class="col-md-6">
            <div class="text-block wow bounceInDown center" data-wow-duration="4s">
                <h1>Delivery Details</h1>
                <hr>
                <h4>
                    Package to be delivered from <b>{{$del->fromLoc}}</b> to <b>{{$del->toLoc}}</b> <br><hr>
                    Type: {{$del->pkgType}} <br><hr>
                    Description: {{$del->description}} <br><hr>
                    Credit Reward: {{$del->pkgCredit}}
                </h4>
            </div>
        </div>
            </div>
            <hr>
            <div class="row text-block wow bounceInDown center">
                @if(!Auth::guest())
                @if(Auth::user()->id == $del->pkgOwnerID)
                    <div class="col-md-3">
                        <a href="/delivery/{{$del->id}}/edit" class="btn btn-success">Edit</a>
                    </div>
                    
        
                    <form action="/delivery/{{$del->id}}" method="post" class="col-md-3">
                        {{ csrf_field() }}
                        @method('DELETE')
                        <input type="submit" class="btn btn-danger " value="Delete" >
                    </form>
                    <a href="/delivery/uod/{{$del->id}}" class="btn btn-warning" onclick="return confirm('Are you sure? That the package is delivered?');" >Confirm Delivery</a>
                @else
                <div class="col-md-3">
                @if($del->status != "delivered" && $del->status != "accepted" )
                <a href="/delivery/uoa/{{$del->id}}" class="btn btn-warning" onclick="return confirm('Are you sure that you want to accept this delivery??');" >Accept Delivery</a>
                @elseif($del->status == "accepted" && Auth::id() == $del->pkgGivenToID )
                <a href="/delivery/uou/{{$del->id}}" class="btn btn-danger" onclick="return confirm('Are you sure that you want to accept this delivery??');" >Undo Accept </a>
                @endif
                </div>

                @endif
                
            @endif
            </div> 
    </div>
    </section>
@endsection