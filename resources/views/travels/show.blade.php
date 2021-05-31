@extends('layouts.app')

@section('content')



<!------ Include the above in your HEAD tag ---------->

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
            @if($travel->travelling_by == "Train")
                <img height="342px" width="506px" src="https://images.financialexpress.com/2017/02/ICF-self-propelled.jpg">
            @elseif($travel->travelling_by == "Road")
                <img height="342px" width="506px" src="https://static-news.moneycontrol.com/static-mcnews/2018/03/shutterstock_505771456-770x433.jpg">
            @else
                <img height="342px" width="506px" src="https://s.marketwatch.com/public/resources/images/MW-HE536_airpla_ZH_20190225131547.jpg">
            @endif
        </div>
    </div>
    
    <div class="col-md-6">
        <div class="text-block wow bounceInDown center" data-wow-duration="4s">
            <h1>User's Trip Details</h1>
            <hr>
            <h4> Travelling from <b>{{$travel->fromLoc}}</b> to <b>{{$travel->toLoc}}</b>
                by <b>{{$travel->travelling_by}}</b> on <br> <b> {{$travel->trvlDate}}</b>
            </h4>
        </div>
    </div>
        </div>
        <hr>
        <div class="row text-block wow bounceInDown center">
                @if(!Auth::guest())
                @if(Auth::user()->id == $travel->travellerId)
                    <div class="col-md-3">
                        <a href="/travels/{{$travel->id}}/edit" class="btn btn-success">Edit</a>
                    </div>
                    
        
                    <form action="/travels/{{$travel->id}}" method="post" class="pull-right">
                        {{ csrf_field() }}
                        @method('DELETE')
                        <input type="submit" class="btn btn-danger " value="Delete" >
                    </form>
                @else
                    <div class="col-md">
                        
                        <form action="#" id="uor" class="row form-group" method="post">
                            
                            {{ csrf_field() }}
                            @method('PUT')
                            <label class="form-label col-md-2" for="id">Select Delivery</label>
                            <select class="form-control col" name="id" id="id" >
                                    <option value="select" class="form-control col">Select Delivery</option>
                                @foreach ($dels as $del)
                                    <option class="form-contol" value="{{$del->id}}">{{$del->fromLoc}} to {{$del->toLoc}}</option>
                                @endforeach
                            </select> &nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="submit" class="btn btn-success col-md-3 "  value="Request Delivery">
                            
                            <script>
                                    $(document).ready(function(){
                                        $("#id").change(function(){
                                            if ($("#id").val() != "select") {
                                                $("#uor").attr("action","/delivery/uor/"+$("#id").val()+"/"+{{$travel->travellerId}});
                                            }
                                            else{
                                                $("#uor").attr("action","#");
                                            }
                                        
                                        });
                                    });
                                    </script>
                        
                        </form>
                        
                    
                    </div>
                @endif
            @endif
            </div>
</div>
    
</section>
@endsection