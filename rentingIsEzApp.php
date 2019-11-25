<!DOCTYPE html>
<html lang="en">
<head>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- END section
    <script>
        $(document).ready(function () {


            $("#btn2").click(function () {
                $("fieldset").append(" <div class=\"form-group\">\n" +
                    "                        <input type=\"text\" class=\"form-control py-3 reverse mt-4 mt-4\" placeholder=\"Bill Name\">\n" +
                    "                    </div>\n" +
                    "                    <div class=\"form-group\">\n" +
                    "                        <input type=\"text\" class=\"form-control py-3 reverse\" placeholder=\"Bill Amount\">\n" +
                    "                    </div>");
            });
        });
    </script>
    -->
    <link href="https://fonts.googleapis.com/css?family=Crimson+Text:400,400i,600|Montserrat:200,300,400"
          rel="stylesheet">

    <link rel="stylesheet" href="assets/css/bootstrap/bootstrap.css">
    <link rel="stylesheet" href="assets/fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="assets/fonts/law-icons/font/flaticon.css">

    <link rel="stylesheet" href="assets/fonts/fontawesome/css/font-awesome.min.css">


    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/slick-theme.css">

    <link rel="stylesheet" href="assets/css/helpers.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/landing-2.css">


</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark pb_navbar pb_scrolled-light" id="pb-navbar">
    <div class="container">
        <a class=" mt-1 navbar-brand" href="index.html">RentingIsEasy</a>
        <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#probootstrap-navbar"
                aria-controls="probootstrap-navbar" aria-expanded="false" aria-label="Toggle navigation">
            <span><i class="ion-navicon"></i></span>
        </button>
        <div class="collapse navbar-collapse" id="probootstrap-navbar">
            <ul class="navbar-nav ml-auto">
                <p class="mb-5"><a class="btn btn-success btn-lg pb_btn-pill smoothscroll" href="index.html"><span
                                class="pb_font-14 text-uppercase pb_letter-spacing-1">Back To Home</span></a></p>

            </ul>
        </div>
    </div>
</nav>


<section>

    <div class="container mt-lg-5">
        <div class="row align-items-center justify-content-center">
            <div class="col-md-6 relative align-self-center">
                <form name= "input" action="rentingIsEzApp.php" class="bg-white rounded pb_form_v1" method="post" autocomplete="off">



                    <h2 class="mb-4 mt-0 text-center">Fill in the required blanks</h2>
                    <div class="form-group">
                        <input type="text" class="form-control py-3 reverse"
                               placeholder="How many roomates do you have?" name="roommateNum">
                    </div>
                    <div class="form-group">
                        Enter The All The Bills Needed. When finished leave the other spaces blank
                        <input type="text" class="form-control py-3 reverse" placeholder="Bill Name" name="billName1">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control py-3 reverse" placeholder="Bill Amount" name="bill1">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control py-3 reverse" placeholder="Bill Name" name="billName2">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control py-3 reverse" placeholder="Bill Amount" name="bill2">
                    </div> <div class="form-group">
                        <input type="text" class="form-control py-3 reverse" placeholder="Bill Name" name="billName3">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control py-3 reverse" placeholder="Bill Amount" name="bill3">
                    </div> <div class="form-group">
                        <input type="text" class="form-control py-3 reverse" placeholder="Bill Name" name="billName4">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control py-3 reverse" placeholder="Bill Amount" name="bill4">
                    </div> <div class="form-group">
                        <input type="text" class="form-control py-3 reverse" placeholder="Bill Name" name="billName5">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control py-3 reverse" placeholder="Bill Amount" name="bill5">
                    </div> <div class="form-group">
                        <input type="text" class="form-control py-3 reverse" placeholder="Bill Name" name="billName6">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control py-3 reverse" placeholder="Bill Amount" name="bill6">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control py-3 reverse" placeholder="Bill Name" name="billName7">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control py-3 reverse" placeholder="Bill Amount" name="bill7">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control py-3 reverse" placeholder="Bill Name" name="billName8">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control py-3 reverse" placeholder="Bill Amount" name="bill8">
                    </div>

                    <!-- END section

                    <input type="hidden" name="txtres"> <br>
                    -->

                    <script type="text/javascript">


                        function sumValues()
                        {

                            var num1, num2, num3,num4,num5,num6,num7,num8;
                            if ((document.input.bill1.value!=null)&&(document.input.billName1.value!=null)
                            {
                                num1=Number(document.input.bill1.value)/(document.input.roommateNum.value);
                            }
                            if ((document.input.bill2.value!=null)&&(document.input.billName2.value!=null)
                            {
                                num2=Number(document.input.bill2.value)/(document.input.roommateNum.value);
                            }
                            if ((document.input.bill3.value!=null)&&(document.input.billName3.value!=null)
                            {
                                num3=Number(document.input.bill3.value)/(document.input.roommateNum.value);
                            }
                            if ((document.input.bill4.value!=null)&&(document.input.billName4.value!=null)
                            {
                                num4=Number(document.input.bill4.value)/(document.input.roommateNum.value);
                            }
                            if ((document.input.bill5.value!=null)&&(document.input.billName5.value!=null)
                            {
                                num5=Number(document.input.bill5.value)/(document.input.roommateNum.value);
                            }
                            if ((document.input.bill6.value!=null)&&(document.input.billName6.value!=null)
                            {
                                num6=Number(document.input.bill6.value)/(document.input.roommateNum.value);
                            }
                            if ((document.input.bill7.value!=null)&&(document.input.billName7.value!=null)
                            {
                                num7=Number(document.input.bill7.value)/(document.input.roommateNum.value);
                            }
                            if ((document.input.bill8.value!=null)&&(document.input.billName8.value!=null)
                            {
                                num8=Number(document.input.bill7.value)/(document.input.roommateNum.value);
                            }




                            res=num1+num2+num3+num4+num4+num5+num6+num7+num8;
                            document.input.txtres.value=res;


                        }
                    </script>



                    </fieldset>
                    <button class="btn btn-primary btn-lg btn-block pb_btn-pill  btn-shadow-blue" id="btn2">Add New
                        Bill
                    </button>


                    <div class="form-group">

                        <!-- END section
                        <input type ="button" class= "mt-2 btn btn-success btn-lg btn-block" onclick="sumValues()" >
                        -->
                        Result: <input type="text" name="txtres" > <br>

                        <input type="button" value="Calculate" onclick="sumValues()"> <br>



                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
    </div>


</section>


</body>
</html>
