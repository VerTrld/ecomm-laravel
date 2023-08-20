<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <title>PCMB</title>
</head>

<body class="border-0 bd-example m-0 border-0">
    {{View::make('header')}}
    @yield('content')
    {{View::make('footer')}}
</body>


<style>
    .custom-login{
        height:500px;
        padding-top: 100px;
    }
     img.slider-img{
        padding-top: 100px;
        height: 600px;

     }
     .trending-image{
        height: 200px ;
     }
     .trending-item{
        float: left;
        width: 20%;
     }
     .detail-img{
        height: 25rem;
     }
     /* Add this to your CSS file or style section */
    .cart-link {
    color: inherit; /* Inherit the color from the parent */
    text-decoration: none; /* Remove underline */
    }
    .navbar-brand{
        margin-left: 50px; /* Adjust the value as needed */
    }
     .navbar-nav {
        margin-right: 130px; /* Adjust the value as needed */
    }
    .custom-width {
    width: 300px; /* Adjust the value as needed */
}




</style>


</html>
