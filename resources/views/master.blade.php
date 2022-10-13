<!DOCTYPE html>
<html lang="en">

<head>
    <script src="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v5.0.0/mapbox-gl-geocoder.min.js"></script>

    <link rel="stylesheet" href="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v5.0.0/mapbox-gl-geocoder.css" type="text/css">
    
    <script src='https://api.mapbox.com/mapbox-gl-js/v2.10.0/mapbox-gl.js'></script>
    <link href='https://api.mapbox.com/mapbox-gl-js/v2.10.0/mapbox-gl.css' rel='stylesheet' />
    

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>La consentida</title>
    <link rel="icon" type="image/png" href="https://i.ibb.co/PGHR0tp/logo.png">
    <link rel="icon" type="image/png">
    <!-- CSS only -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Petit+Formal+Script&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->

    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

    <!--<script src="https://www.google.com/recaptcha/api.js" async defer></script>-->

    <script src="https://www.google.com/recaptcha/api.js" async defer></script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"
        integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>

</head>

<body>
    {{ View::make('header') }}
    @yield('content')
    {{ View::make('footer') }}


</body>


<style>
    /*Start google*/
    .login-with-google-btn {
  transition: background-color .3s, box-shadow .3s;
    
  padding: 12px 16px 12px 42px;
  border: none;
  border-radius: 3px;
  box-shadow: 0 -1px 0 rgba(0, 0, 0, .04), 0 1px 1px rgba(0, 0, 0, .25);
  
  color: #757575;
  font-size: 15px;
  font-weight: 500;
  font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,Oxygen,Ubuntu,Cantarell,"Fira Sans","Droid Sans","Helvetica Neue",sans-serif;
  
  background-image: url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTgiIGhlaWdodD0iMTgiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PGcgZmlsbD0ibm9uZSIgZmlsbC1ydWxlPSJldmVub2RkIj48cGF0aCBkPSJNMTcuNiA5LjJsLS4xLTEuOEg5djMuNGg0LjhDMTMuNiAxMiAxMyAxMyAxMiAxMy42djIuMmgzYTguOCA4LjggMCAwIDAgMi42LTYuNnoiIGZpbGw9IiM0Mjg1RjQiIGZpbGwtcnVsZT0ibm9uemVybyIvPjxwYXRoIGQ9Ik05IDE4YzIuNCAwIDQuNS0uOCA2LTIuMmwtMy0yLjJhNS40IDUuNCAwIDAgMS04LTIuOUgxVjEzYTkgOSAwIDAgMCA4IDV6IiBmaWxsPSIjMzRBODUzIiBmaWxsLXJ1bGU9Im5vbnplcm8iLz48cGF0aCBkPSJNNCAxMC43YTUuNCA1LjQgMCAwIDEgMC0zLjRWNUgxYTkgOSAwIDAgMCAwIDhsMy0yLjN6IiBmaWxsPSIjRkJCQzA1IiBmaWxsLXJ1bGU9Im5vbnplcm8iLz48cGF0aCBkPSJNOSAzLjZjMS4zIDAgMi41LjQgMy40IDEuM0wxNSAyLjNBOSA5IDAgMCAwIDEgNWwzIDIuNGE1LjQgNS40IDAgMCAxIDUtMy43eiIgZmlsbD0iI0VBNDMzNSIgZmlsbC1ydWxlPSJub256ZXJvIi8+PHBhdGggZD0iTTAgMGgxOHYxOEgweiIvPjwvZz48L3N2Zz4=);
  background-color: white;
  background-repeat: no-repeat;
  background-position: 12px 11px;
}
.login-with-google-btn:hover{

    box-shadow: 0 -1px 0 rgba(0, 0, 0, .04), 0 4px 8px rgba(0, 0, 0, .25);

}
/*Finish Google Button*/
    .custom-login {
        height: 500px;
        padding-top: 100px;
    }
    .custom-register {
        height: 500px;
        padding-top: 50px;
    }

    .custom-contact-map {
        margin-top: 5%;
        margin-bottom: -10%;
        height: 500px;
        padding-top: 50px;
    }

    img.slider-img {
        height: 550px;
         !important;
        width: 100%;
    }

    .custom-product {
        height: 600px;
    }

    .caption-bg {
        background-color: rgba(20, 20, 20, 0.5);
        border-radius: 10px;

    }

    .trending-image {
        height: 100px;
    }

    .trending-item {
        float: left;
        width: 20%;
    }

    .trending-wrapper {
        margin: 20px;
    }

    .detail-img {
        height: 200px;
    }

    .detail-description {
        font-size: 20px;
    }

    .detail-category {
        font-size: 15px;
    }
a{
    text-decoration: none;
}
a:hover{
    color: blueviolet;
}
.search-box{
    width: 300px;
}

.cart-price{
    font-size: 20px;
    color: green;
}
.cart-list-divisor{
    border-bottom: 1px solid rgb(121, 121, 121);
    margin-bottom: 20px;
    padding-bottom: 20px;
}
</style>

<!-- <script>
    $(document).ready(function() {
        $("button").click(function() {
            alert(
                "all set"
            )
        })

    })
</script> -->

</html>
