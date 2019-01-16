<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="{{asset('fontawesome-assets/css/fontawesome.css')}}" rel="stylesheet">
    <link href="{{asset('fontawesome-assets/css/brands.css')}}" rel="stylesheet">
    <link href="{{asset('fontawesome-assets/css/solid.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap-datepicker.css')}}">
    <title>MIDAS - {{$title}}</title>
</head>

<body>
    @include('inc.navbar')
    <div class="container">

        @yield('content')
    </div>
    {{-- this the beginning of the footer section --}}
    <div class="container-fluid mt-3 pt-3 myfooter text-white">
        <div class="container">
            <footer>
                <div class="row">
                    <div class="col-sm-4 col-md-4 col-lg-4">
                        <h5 class="font-weight-bold"><i class="fas fa-map-marker-alt"></i> Contact Us</h5>
                        <hr/>
                        <address>
                        <h6>MIDAS Touch Multipurpose Cooperative Society Limited</h6>
                            Federal Medical Centre Makurdi,<br />
                            No 1, Hospital Road, Mission Ward,<br />
                            P.M.B. 102004, Makurdi, Benue State<br />
                            +234 081 189 014 11<br />
                            midastouch@gmail.com<br />
                        </address>

                        <p>&copy; MIDAS TOUCH</p>

                    </div>
                    <div class="col-sm-4 col-md-4 col-lg-4">
                        <h5 class="font-weight-bold"> <i class="fas fa-share-alt"></i> Social </h5>
                        <hr/>
                        <ul class="list-unstyled">
                            <li><span><i class="fab fa-facebook-square"></i></span> Facebook</li>
                            <li><span><i class="fab fa-twitter-square"></i></span> Twitter</li>
                            <li><span><i class="fab fa-whatsapp-square"></i></span> Whatsapp</li>
                        </ul>
                    </div>
                    <div class="col-sm-4 col-md-4 col-lg-4">
                        <h5 class="font-weight-bold"> <i class="fas fa-envelope-open-text"></i> Stay up-to-date</h5>
                        <hr/>
                        <!-- Begin Mailchimp Signup Form -->
                        <link href="//cdn-images.mailchimp.com/embedcode/classic-10_7.css" rel="stylesheet" type="text/css">
                        <style type="text/css">
                            #mc_embed_signup {
                                clear: left;
                                font: 14px Helvetica, Arial, sans-serif;
                            }

                            .button {
                                border-color: black;
                            }

                            /* Add your own Mailchimp form style overrides in your site stylesheet or in this style block.
	   We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
                        </style>
                        <div id="mc_embed_signup">
                            <form action="https://midas.us19.list-manage.com/subscribe/post?u=38ebe97b99219f8ad1bd09cb2&amp;id=9bd36a1dfa" method="post"
                                id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank"
                                novalidate>
                                <div id="mc_embed_signup_scroll">
                                    {{--
                                    <h2>Stay up-to-date with latest news</h2> --}}
                                    <div class="mc-field-group">
                                        {{-- <label for="mce-EMAIL">Email Address  <span class="asterisk">*</span> --}}
</label>
                                        <input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL" placeholder="Provide Email To Subscribe">
                                    </div>
                                    <div id="mce-responses" class="clear">
                                        <div class="response" id="mce-error-response" style="display:none"></div>
                                        <div class="response" id="mce-success-response" style="display:none"></div>
                                    </div>
                                    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                                    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_38ebe97b99219f8ad1bd09cb2_9bd36a1dfa" tabindex="-1" value=""></div>
                                    <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
                                </div>
                            </form>
                        </div>
                        <script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script>
                        <script type='text/javascript'>
                            (function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';fnames[3]='ADDRESS';ftypes[3]='address';fnames[4]='PHONE';ftypes[4]='phone';fnames[5]='BIRTHDAY';ftypes[5]='birthday';}(jQuery));var $mcj = jQuery.noConflict(true);
                        </script>
                        <!--End mc_embed_signup-->
                    </div>
                </div>
            </footer>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>
    {{--
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.5/popper.min.js"></script> --}}

    <script src="{{asset('js/app.js')}}"></script>
    <script src="{{asset('js/bootstrap-datepicker.js')}}"></script>
    <script type="text/javascript">
        $(function(){
   $('.mm').datepicker({
      format: 'yyyy-mm-dd'
    });

    //edd using jquery function
$(".mm").on('change', function() {
    var cdate = $(".mm").val();
    const lmp = new Date(cdate);
    
    //get EDD
    const myEdd = edd();
   
    //Attach this to the EDD INPUT FIELD
     $(".myedd").val(myEdd);

    // const lmp_inDays = Math.floor(lmp_in_ms/86400000)
    // //lmp +280 days
    
    //EDD DAY FORMAT
    const eddFormat = dayFormat(lmp);
    
    //attach it to a span below the input element
    $("#ff").text(eddFormat)

    
    //EGA
    const egaInfo = ega(lmp);
    $("#EGA").val(egaInfo);

    //Default date for first visit
    const defaultVisit = mydefaultDate();
    $("#Ddate").val(defaultVisit)
});
});


//FUNCTIONS 

//FUNCTION TO DIAPLAY DATE IN READABLE FORMAT
function dayFormat(lmpDate){
    const lmp_in_ms = lmpDate.getTime();
    /*
    TO REPRESENT EDD IN HUMAN READABLE FORMAT
    GET THE MILLISECONDS IN THE SELECTED LMP
    ADD IT TO THE NUMBER OF MILLISECONDS IN 280 DAYS AND DIVIDE BY 86400000
    **/
    const myEdd_in_ms = lmp_in_ms + 24192000000;
     
     //CONVERT THE MILLISECCONDS TO DATE TIME
    return eddDayFormat = new Date(myEdd_in_ms).toDateString();
}

//FUNCTION TO CALCULATE EDD
function edd(){
 /*
    EDD = LMP +280 DAYS
    LMP I ASSUME IS EQUAL TO ONE DAY
    BUT 1 DAY = 86400000 MILLISECONDS (24*60*60*1000)
    280 DAYS   = 24192000000 (280*86400000)
    THEREFORE EDD = 86400000+24192000000 = 24278400000
    **/
    const edd = 24278400000/86400000;
    //EDD IN DAY STRING
    return eddDays = edd + " " + "Days";
}

//FUNCTIONN TO CALCULATE EGA
function ega(lmpDate){
     //TODAY - LMP
     const lmp_in_ms = lmpDate.getTime();
     const _2day = Date.now();
    //ega in milliseconds =24*60*60*1000*7 = 604800000
    const ega_ms = _2day - lmp_in_ms;
    // Milliseconds in week = 
    const ega_wks = Math.floor(ega_ms/604800000);
    return egaWeekStr = ega_wks + " " + "Weeks";
}

//FUNCTION TO GET DEFAULT DATE
function mydefaultDate(){
    const currenDate = new Date(Date.now());
    const yr = currenDate.getFullYear();
    let mnth = currenDate.getMonth();
    const mydate =  currenDate.getDate();
    //Note that javascript starts counting months from 0-11
    if(mnth === 0){
        mnth = 1;
    }
    return yr+"-"+mnth+"-"+mydate;
}
    </script>
</body>

</html>