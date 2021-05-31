<ul class="slideshow">
        <li><span>Image 01</span><div><h3>On the Way</h3></div></li>
        <li><span>Image 02</span> <div><h3> Help</h3></div></li>
        <li><span>Image 03</span> <div><h3>Travel</h3></div> </li>
        <li><span>Image 04</span><div><h3>Deliver</h3></div></li>
        <li><span>Image 05</span><div><h3>Get Reward</h3></div></li>
        <li><span>Image 06</span><div><h3>Redeem</h3></div></li>
    </ul>

<style>
            /* CSS reset */
        body,div,dl,dt,dd,ul,ol,li,h1,h2,h3,h4,h5,h6,pre,form,fieldset,input,textarea,p,blockquote,th,td { 
            margin:0;
            padding:0;
        }
        html,body {
            margin:0;
            padding:0;
        }
        table {
            border-collapse:collapse;
            border-spacing:0;
        }
        fieldset,img { 
            border:0;
        }
        input{
            border:1px solid #b0b0b0;
            padding:3px 5px 4px;
            color:#979797;
            width:190px;
        }
        address,caption,cite,code,dfn,th,var {
            font-style:normal;
            font-weight:normal;
        }
        ol,ul {
            list-style:none;
        }
        caption,th {
            text-align:left;
        }
        h1,h2,h3,h4,h5,h6 {
            font-size:100%;
            font-weight:normal;
        }
        q:before,q:after {
            content:'';
        }
        abbr,acronym { border:0;
        }
        /* General Demo Style */
        body{
        font-family: "helvetica neue", helvetica;
            background: #000;
            font-weight: 400;
            font-size: 15px;
            color: #aa3e03;
            overflow-y: scroll;
            overflow-x: hidden;
        }
        .ie7 body{
            overflow:hidden;
        }
        a{
            color: #333;
            text-decoration: none;
        }
        .container{
            position: relative;
            text-align: center;
        }
        .clr{
            clear: both;
        }
        .container > header{
            padding: 30px 30px 10px 20px;
            margin: 0px 20px 10px 20px;
            position: relative;
            display: block;
            text-shadow: 1px 1px 1px rgba(0,0,0,0.2);
            text-align: left;
        }
        .container > header h1{
        font-family: "helvetica neue", helvetica;
            font-size: 35px;
            line-height: 35px;
            position: relative;
            font-weight: 400;
            color: #fff;
            text-shadow: 1px 1px 1px rgba(0,0,0,0.3);
            padding: 0px 0px 5px 0px;
        }
        .container > header h1 span{

        }
        .container > header h2, p.info{
            font-size: 16px;
            font-style: italic;
            color: #f8f8f8;
            text-shadow: 1px 1px 1px rgba(0,0,0,0.6);
        }

        .slideshow,
        .slideshow:after {
            position: fixed;
            width: 100%;
            height: 100%;
            top: 0px;
            left: 0px;
            z-index: 0;
        }
        .slideshow:after {
            content: '';
            background: transparent url(../images/pattern.png) repeat top left;
        }
        .slideshow li span {
            width: 100%;
            height: 100%;
            position: absolute;
            top: 0px;
            left: 0px;
            color: transparent;
            background-size: cover;
            background-position: 50% 50%;
            background-repeat: none;
            opacity: 0;
            z-index: 0;
            -webkit-backface-visibility: hidden;
            -webkit-animation: imageAnimation 36s linear infinite 0s;
            -moz-animation: imageAnimation 36s linear infinite 0s;
            -o-animation: imageAnimation 36s linear infinite 0s;
            -ms-animation: imageAnimation 36s linear infinite 0s;
            animation: imageAnimation 36s linear infinite 0s;
        }
        .slideshow li div {
            z-index: 1000;
            position: absolute;
            bottom: 30px;
            left: 0px;
            width: 100%;
            text-align: center;
            opacity: 0;
            -webkit-animation: titleAnimation 36s linear infinite 0s;
            -moz-animation: titleAnimation 36s linear infinite 0s;
            -o-animation: titleAnimation 36s linear infinite 0s;
            -ms-animation: titleAnimation 36s linear infinite 0s;
            animation: titleAnimation 36s linear infinite 0s;
        }
        .slideshow li div h3 {
        font-family: "helvetica neue", helvetica;
        text-transform: uppercase;
        font-size: 80px;
        padding: 0;
        line-height: 200px;
            color: rgba(255,255,255, 0.8);
        }
        .slideshow li:nth-child(1) span { background-image: url(https://24.media.tumblr.com/6ddffd6a6036f61a1f2b1744bad77730/tumblr_mzgz9vJ1CK1st5lhmo1_1280.jpg) }
        .slideshow li:nth-child(2) span {
            background-image: url(https://25.media.tumblr.com/aff8a8a33156a0eda844140764fd4359/tumblr_mzgz3tBAAU1st5lhmo1_1280.jpg);
            -webkit-animation-delay: 6s;
            -moz-animation-delay: 6s;
            -o-animation-delay: 6s;
            -ms-animation-delay: 6s;
            animation-delay: 6s;
        }
        .slideshow li:nth-child(3) span {
            background-image: url('https://24.media.tumblr.com/f87b54bbce49e59debf7606662f54862/tumblr_n0hpxxDOJ91st5lhmo1_1280.jpg');
            -webkit-animation-delay: 12s;
            -moz-animation-delay: 12s;
            -o-animation-delay: 12s;
            -ms-animation-delay: 12s;
            animation-delay: 12s;
        }
        .slideshow li:nth-child(4) span {
            background-image: url(https://24.media.tumblr.com/0df0b55a4615378cf593241bad80a7da/tumblr_n0hpwpZrVc1st5lhmo1_1280.jpg);
            -webkit-animation-delay: 18s;
            -moz-animation-delay: 18s;
            -o-animation-delay: 18s;
            -ms-animation-delay: 18s;
            animation-delay: 18s;
        }
        .slideshow li:nth-child(5) span {
            background-image: url(https://24.media.tumblr.com/b94dbb2a392198d5cc39c19959598229/tumblr_n0hpthN8VH1st5lhmo1_1280.jpg);
            -webkit-animation-delay: 24s;
            -moz-animation-delay: 24s;
            -o-animation-delay: 24s;
            -ms-animation-delay: 24s;
            animation-delay: 24s;
        }
        .slideshow li:nth-child(6) span {
            background-image: url(https://31.media.tumblr.com/67d222ee577fc35faca83f0e08efc48e/tumblr_mzzqt7wyEU1st5lhmo1_1280.jpg);
            -webkit-animation-delay: 30s;
            -moz-animation-delay: 30s;
            -o-animation-delay: 30s;
            -ms-animation-delay: 30s;
            animation-delay: 30s;
        }
        .slideshow li:nth-child(2) div {
            -webkit-animation-delay: 6s;
            -moz-animation-delay: 6s;
            -o-animation-delay: 6s;
            -ms-animation-delay: 6s;
            animation-delay: 6s;
        }
        .slideshow li:nth-child(3) div {
            -webkit-animation-delay: 12s;
            -moz-animation-delay: 12s;
            -o-animation-delay: 12s;
            -ms-animation-delay: 12s;
            animation-delay: 12s;
        }
        .slideshow li:nth-child(4) div {
            -webkit-animation-delay: 18s;
            -moz-animation-delay: 18s;
            -o-animation-delay: 18s;
            -ms-animation-delay: 18s;
            animation-delay: 18s;
        }
        .slideshow li:nth-child(5) div {
            -webkit-animation-delay: 24s;
            -moz-animation-delay: 24s;
            -o-animation-delay: 24s;
            -ms-animation-delay: 24s;
            animation-delay: 24s;
        }
        .slideshow li:nth-child(6) div {
            -webkit-animation-delay: 30s;
            -moz-animation-delay: 30s;
            -o-animation-delay: 30s;
            -ms-animation-delay: 30s;
            animation-delay: 30s;
        }
        /* Animation for the slideshow images */
        @-webkit-keyframes imageAnimation { 
            0% {
                opacity: 0;
                -webkit-animation-timing-function: ease-in;
            }
            8% {
                opacity: 1;
                -webkit-transform: scale(1.05);
                -webkit-animation-timing-function: ease-out;
            }
            17% {
                opacity: 1;
                -webkit-transform: scale(1.1);
            }
            25% {
                opacity: 0;
                -webkit-transform: scale(1.1);
            }
            100% { opacity: 0 }
        }
        @-moz-keyframes imageAnimation { 
            0% {
                opacity: 0;
                -moz-animation-timing-function: ease-in;
            }
            8% {
                opacity: 1;
                -moz-transform: scale(1.05);
                -moz-animation-timing-function: ease-out;
            }
            17% {
                opacity: 1;
                -moz-transform: scale(1.1);
            }
            25% {
                opacity: 0;
                -moz-transform: scale(1.1);
            }
            100% { opacity: 0 }
        }
        @-o-keyframes imageAnimation { 
            0% {
                opacity: 0;
                -o-animation-timing-function: ease-in;
            }
            8% {
                opacity: 1;
                -o-transform: scale(1.05);
                -o-animation-timing-function: ease-out;
            }
            17% {
                opacity: 1;
                -o-transform: scale(1.1);
            }
            25% {
                opacity: 0;
                -o-transform: scale(1.1);
            }
            100% { opacity: 0 }
        }
        @-ms-keyframes imageAnimation { 
            0% {
                opacity: 0;
                -ms-animation-timing-function: ease-in;
            }
            8% {
                opacity: 1;
                -ms-transform: scale(1.05);
                -ms-animation-timing-function: ease-out;
            }
            17% {
                opacity: 1;
                -ms-transform: scale(1.1);
            }
            25% {
                opacity: 0;
                -ms-transform: scale(1.1);
            }
            100% { opacity: 0 }
        }
        @keyframes  imageAnimation { 
            0% {
                opacity: 0;
                animation-timing-function: ease-in;
            }
            8% {
                opacity: 1;
                transform: scale(1.05);
                animation-timing-function: ease-out;
            }
            17% {
                opacity: 1;
                transform: scale(1.1);
            }
            25% {
                opacity: 0;
                transform: scale(1.1);
            }
            100% { opacity: 0 }
        }
        /* Animation for the title */
        @-webkit-keyframes titleAnimation { 
            0% {
                opacity: 0;
                -webkit-transform: translateY(200px);
            }
            8% {
                opacity: 1;
                -webkit-transform: translateY(0px);
            }
            17% {
                opacity: 1;
                -webkit-transform: scale(1);
            }
            19% { opacity: 0 }
            25% {
                opacity: 0;
                -webkit-transform: scale(10);
            }
            100% { opacity: 0 }
        }
        @-moz-keyframes titleAnimation { 
            0% {
                opacity: 0;
                -moz-transform: translateY(200px);
            }
            8% {
                opacity: 1;
                -moz-transform: translateY(0px);
            }
            17% {
                opacity: 1;
                -moz-transform: scale(1);
            }
            19% { opacity: 0 }
            25% {
                opacity: 0;
                -moz-transform: scale(10);
            }
            100% { opacity: 0 }
        }
        @-o-keyframes titleAnimation { 
            0% {
                opacity: 0;
                -o-transform: translateY(200px);
            }
            8% {
                opacity: 1;
                -o-transform: translateY(0px);
            }
            17% {
                opacity: 1;
                -o-transform: scale(1);
            }
            19% { opacity: 0 }
            25% {
                opacity: 0;
                -o-transform: scale(10);
            }
            100% { opacity: 0 }
        }
        @-ms-keyframes titleAnimation { 
            0% {
                opacity: 0;
                -ms-transform: translateY(200px);
            }
            8% {
                opacity: 1;
                -ms-transform: translateY(0px);
            }
            17% {
                opacity: 1;
                -ms-transform: scale(1);
            }
            19% { opacity: 0 }
            25% {
                opacity: 0;
                -webkit-transform: scale(10);
            }
            100% { opacity: 0 }
        }
        @keyframes  titleAnimation { 
            0% {
                opacity: 0;
                transform: translateY(200px);
            }
            8% {
                opacity: 1;
                transform: translateY(0px);
            }
            17% {
                opacity: 1;
                transform: scale(1);
            }
            19% { opacity: 0 }
            25% {
                opacity: 0;
                transform: scale(10);
            }
            100% { opacity: 0 }
        }
        /* Show at least something when animations not supported */
        .no-cssanimations .slideshow li span{
            opacity: 1;
        }
        @media  screen and (max-width: 1140px) { 
            .slideshow li div h3 { font-size: 100px }
        }
        @media  screen and (max-width: 600px) { 
            .slideshow li div h3 { font-size: 50px }
        }
</style>
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
<?php $__env->startSection('content'); ?>
    
        <div class="row text-center  "  >
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">Travelling</div>
                        <div class="card-body">
                            <hr>
                            <?php if(count($travels) > 0): ?>
                                <?php $__currentLoopData = $travels; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $travel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="well">
                                    <a href="travels/<?php echo e($travel->id); ?>">User  <?php echo e($travel->travellerId); ?> from <?php echo e($travel->fromLoc); ?> to <?php echo e($travel->toLoc); ?> by <?php echo e($travel->travelling_by); ?> on <?php echo e($travel->trvlDate); ?></a> 
                                    </div>
                                    <hr>    
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                
                                <?php endif; ?>
                        </div>
                </div>
            </div>
            <div class="col-md-4">
                    
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">Delivery</div>
                        <div class="card-body">
                            <hr>
                                <?php if(count($dels) > 0): ?>
                                <?php $__currentLoopData = $dels; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $del): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="well">
                                        <a href="delivery/<?php echo e($del->id); ?>">Request for delivering a <?php echo e($del->pkgType); ?> from <?php echo e($del->fromLoc); ?> to <?php echo e($del->toLoc); ?> for <?php echo e($del->pkgCredit); ?> Credits</a> 
                                    </div>
                                    <hr>    
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php else: ?>
                                    No Pending Deliveries yet :(
                                        <hr>
                                <?php endif; ?>
                        </div>
                </div>
            </div>
        </div>
        
                    
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>