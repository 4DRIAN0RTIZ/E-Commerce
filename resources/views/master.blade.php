<!DOCTYPE html>
<html lang="en">
<head>
    @include('head')
</head>

<body>
    {{ View::make('header') }}
    @yield('content')
    {{ View::make('footer') }}
</body>


{{-- <style>
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
</style> --}}

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

