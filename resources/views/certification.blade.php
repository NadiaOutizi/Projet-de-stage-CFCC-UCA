<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js']);
    <style>

 body{
     font-family: 'Open Sans', sans-serif;
     padding-right: 0px !important;
}
 a{
     -webkit-transition: all 0.5s ease;
     -moz-transition: all 0.5s ease;
     -o-transition: all 0.5s ease;
     transition:all 0.5s ease;
     outline:none;
}
 a:hover{
     -webkit-transition: all 0.5s ease;
     -moz-transition: all 0.5s ease;
     -o-transition: all 0.5s ease;
     transition:all 0.5s ease;
}
 h1, h2 {
     font-weight:700;
     line-height:28px;
}
 p, li, a, span, table, tr, td, th, label{
     font-size: 15px;
     color: #636363;
     font-weight: 400;
     line-height: 24px;
}
 .com-sp{
     padding:100px 0px;
}
 .pad-top-0{
     padding-top:0px;
}
 .pad-bot-0{
     padding-bottom:0px;
}
 .pad-bot-70{
     padding-bottom:70px;
}
 .con-title{
     text-align: center;
     margin-bottom: 40px;
}
 .con-title h2{
     font-size: 36px;
     margin-top: 0px;
     margin-bottom: 15px;
     line-height: 40px;
}
 .con-title h2 span{
     font-size: 36px;
     font-weight:700;
     color: #f26838;
     line-height: 40px;
}
 .con-title p{
     font-size: 18px;
     color: #3f444a;
     font-weight: 300;
}
 .pad-all-20{
     padding:20px;
}
 .mar-bot-0{
     margin-bottom:0px;
}
 .pad-top-173{
     padding-top:173px;
}
 .web-hom-grid:before{
     content: '';
     position: absolute;
     background: linear-gradient(to top, rgba(23, 19, 53, 0.74) 25%, rgba(255, 255, 255, 0) 100%);
     top: 0px;
     bottom: 0px;
     left: 0px;
     width: 100%;
}
/*-------------------------------------------------*/
/* =  5.HOME PAGE: EVENT
/*-------------------------------------------------*/
 .ho-event{
}
 .ho-event ul{
}
 .ho-event ul li{
     border-bottom: 1px solid #e0e0e0;
     padding: 15px 0px;
     position: relative;
     overflow: hidden;
}
 .ho-ev-img{
     border-radius: 3px;
     display: inline-block;
     float: left;
     color: #fff;
     text-align: center;
     padding: 0px;
     margin-right: 20px;
     text-transform: uppercase;
     width: 20%;
}
 .ho-ev-img img{
     width:100%;
}
 .ho-ev-date{
     border-radius: 3px;
     display: inline-block;
     float: left;
     color: #fff;
     text-align: center;
     padding: 14px 0;
     margin-right: 20px;
     text-transform: uppercase;
     width: 20%;
     background: #02294e;
     background: -webkit-linear-gradient(to top, #012951, #03294e);
     background: linear-gradient(to top, #012951, #03294e);
}
 .ho-ev-date span:first-child{
     display: block;
     font-size: 25px;
     font-weight: 500;
     margin-top: 0px;
     line-height: 25px;
     color: #fff;
}
 .ho-ev-date span:last-child{
     font-size: 12px;
     color: #fff;
}
 .ho-ev-link{
     float: left;
     width: 60%;
}
 .ho-ev-link a{
}
 .ho-ev-link a h4{
     color: #112842;
     padding-bottom: 5px;
     margin-bottom: 3px;
     border-bottom: 0px;
     text-overflow: ellipsis;
     white-space: pre;
     overflow: hidden;
	    letter-spacing: 0px; 
}
 .ho-ev-link p{
     color: #203245;
     margin-bottom: 0px;
     text-overflow: ellipsis;
     white-space: pre;
     overflow: hidden;
}
 .ho-ev-link span{
     color: #959595;
     font-size: 12px;
     font-weight: 500;
}
 .ho-ev-link-full{
     width:100%;
}
 .ho-ev-latest{
     position: relative;
     overflow: hidden;
     width: 100%;
     padding: 35px;
     margin-bottom: 30px;
     border-radius: 4px;
}
 .ho-ev-latest:before{
     content: '';
     position: absolute;
     top: 0;
     left: 0;
     right: 0;
     bottom: 0;
    /* background: rgba(2, 41, 78, 0.73);
     */
     background: linear-gradient(to top, rgba(3, 41, 79, 0.82), rgba(6, 53, 98, 0.62));
}

 .light-btn{
     color: #fff;
     background: #f36b3b;
     background: -webkit-linear-gradient(to top, #ef612f, #f36b3b);
     background: linear-gradient(to top, #ef612f, #f36b3b);
     padding: 0px 10px;
     line-height: 40px;
     border-radius: 3px;
     text-transform: uppercase;
     font-weight: 800;
     font-size: 16px;
     display: block;
     text-align: center;
}

/*-------------------------------------------------*/
/* = 28.EVENTS 
/*-------------------------------------------------*/
.pg-events{
}
 .pg-eve-date{
     width: 75px;
}
 .pg-eve-desc{
}
 .pg-eve-reg{
     float: right;
     margin-top: 35px;
}
 .pg-eve-reg a{
     padding: 6px 25px;
     border-radius: 3px;
     text-transform: uppercase;
     font-weight: 600;
     font-size: 14px;
     height: 35px;
     text-align: center;
    /* margin: 0px 10px;
     */
    /* background: linear-gradient(to top, #ef612f, #f36b3b);
     */
     color: #02294e;
     border: 1px solid #02294e;
     margin-left: 10px;
}
 .pg-eve-reg  a:hover{
     color: #ffffff;
     border: 1px solid #d45023;
     background: #f26838;
}
 /* .eve-reg-text{
} */
 .eve-reg-text p{
     color: #dfcdff;
}

 /* .pg-eve-main{
} */
 /* .pg-eve-main ul li:hover .pg-eve-reg a:nth-child(1){
     color: #ffffff;
     border: 1px solid #d45023;
     background: #f26838;
} */
 .event-head-sub{
     display: inline-block;
     margin-top: 8px;
}
 .event-head-sub ul{
}
 .event-head-sub ul li{
     color: #dfcdff;
     float: left;
     margin-right: 15px;
     border: 1px solid #bfcaec;
     padding: 0px 10px;
     border-radius: 15px;
     margin-bottom: 10px;
}
    </style>
</head>
<body>
    <a href="{{url()->previous()}}" style="position: relative;left:150px;top:100px;color:#7B3F00;font-size:20px">Go back</a> 
    <div class="container com-sp">
        <div class="row">
            <div class="cor about-sp">
                <div class="ed-about-tit">
                    <div class="con-title">
                        <h2><span>Certifications</span></h2>
                        <p>Elle est couronnée par un Certificat d’Université (CU). Elle concerne un nombre réduit de modules visant à doter le bénéficiaire de qualifications dans un domaine précis. Elle est essentiellement montée et proposée aux professionnels souhaitant se perfectionner dans leur domaine ou dans d’autres disciplines autres que leurs formations initiales.</p>
                    </div>
                    <div>
                        @foreach ($offres as $offer)
                        <div class="ho-event pg-eve-main">
                            <ul>
                                <li>
                                    <div class="ho-ev-date pg-eve-date">
                                        <span>{{$offer->id}}</span>
                                    </div>
                                    <div class="ho-ev-link pg-eve-desc">
                                        <a href="/certificat-details">
                                            <h4>{{$offer->nom}}</h4>
                                        </a>
                                        <p>{{$offer->Objectifs_formation}}.</p>
                                        <span>{{$offer->cout_formation}}</span>
                                    </div>
                                    <div class="pg-eve-reg" style="display:flex;">
                                        <a href="{{ route('certificat-details', $offer) }}">Details</a>
                                        <div>
                                            @if (Auth::user() && Auth::user()->is_admin)
                                            <form method="POST" action="{{ route('offre.destroy', $offer) }}">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" onclick="return confirm('Are you sure you want to delete this offer?')" style='margin-left:40px;border:none;'>
                                                    <span>X</span>
                                                </button> 
                                            </form> 
                                            @endif
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
  
    

</body>



</html>