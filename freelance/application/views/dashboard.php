<!DOCTYPE html>
<html>

<head>
<meta name="viewport" content="width=375, height=200">
  <link rel="stylesheet" 
            href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" 
            integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" 
            crossorigin="anonymous">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

        <script
            src="https://code.jquery.com/jquery-3.2.1.min.js"
            integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
            crossorigin="anonymous"></script>
        
        <script 
            src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" 
            integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" 
            crossorigin="anonymous"></script>
            
        <style>
        nav{
	    background-color: #35c7dd;
        }
        .btn-warning{
            width : 100%;
            margin-bottom: 20px;
            background-color: #ffbfbf;
            border: 0px ;
            
        }
        .btn-danger{
            width : 100%;
            background-color: #ff8a4c;
            border: 0px ;
        }
        .warnatext1 {      
              color: #ff8a4c; 
            }
        .warnatext2 {      
            color: #ffbfbf; 
        }
        
        .menu{
            margin-right: 10px;
            margin-top: 10px;
            cursor: pointer;
            color: orange;
        }
        .menu:hover{
            color: lightblue;
        }
        .sidenav {
        height: 100%; /* 100% Full-height */
        width: 0; /* 0 width - change this with JavaScript */
        position: fixed; /* Stay in place */
        z-index: 1; /* Stay on top */
        top: 0;
        right: 0;
        background-color: #35c7dd; /* Black*/
        overflow-x: hidden; /* Disable horizontal scroll */
        padding-top: 60px; /* Place content 60px from the top */
        transition: 0.5s; /* 0.5 second transition effect to slide in the sidenav */
        }

        /* The navigation menu links */
        .sidenav a {
            padding: 8px 8px 8px 32px;
            text-decoration: none;
            font-size: 25px;
            color: white;
            display: block;
            transition: 0.3s
        }

        /* When you mouse over the navigation links, change their color */
        .sidenav a:hover, .offcanvas a:focus{
            color: orange;
        }

        /* Position and style the close button (top right corner) */
        .sidenav .closebtn {
            position: absolute;
            top: 0;
            right: 5px;
            font-size: 36px;
            margin-right: 5px;
        }

        /* On smaller screens, where height is less than 450px, change the style of the sidenav (less padding and a smaller font size) */
        @media screen and (max-height: 450px) {
            .sidenav {padding-top: 15px;}
            .sidenav a {font-size: 18px;}
        }
        
        </style>
</head>
    <body>

   
    <div class="col-md-12 ">
    <div class="row">
    <div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <a href="#">About</a>
    <a href="#">Services</a>
    <a href="#">Clients</a>
    <a href="#">Contact</a>
    </div>

    <!-- Use any element to open the sidenav -->
    <span onclick="openNav()"><i class="fa fa-bars fa-2x pull-right menu"></i></span>


        <div class="navbar-header">
            <a class="navbar-brand">
                <img alt="Brand" src="https://www.kioson.com/assets/images/logo-kioson1.png" width="100" height="30">  
            </a>
        </div> 

        <div class="container">
            <H1 style="margin-top: 50px;">Jadilah Bagian Dari Perubahan Ekonomi Di Indonesia</H1>
            <H5 style="margin-bottom: 50px;">Terhubung dengan +19.000 Mitra kioson</H5>
            <nav class="panel" style="background-color:#35c7dd; border-radius:0 padding-left: 200px;border-radius: 10px;"> 
                <div class="container-fluid">
                <H6 style="color: white; text-align: center; margin-top: 20px; margin-bottom:20px;">Nikmati Manfaat Menjadi Freelancer Kioson</H6>
                <?php echo anchor('auth/login', '<button class="btn btn-warning"><h5 class="warnatext1">Masuk</h5></button>');  ?>
                </div>
            </nav>

            <div class="container">
            <?php echo anchor('auth/form_register', '<button class="btn btn-danger"><h5 class="warnatext2">Daftar Freelancer</h5></button>');  ?>
            </div>
        </div>


<script>
/* Set the width of the side navigation to 250px */
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
}

/* Set the width of the side navigation to 0 */
function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}
</script>

    </body>
</html>
