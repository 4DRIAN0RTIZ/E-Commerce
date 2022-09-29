<!DOCTYPE html>
<html lang="en">

<head>
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
    .custom-login {
        height: 500px;
        padding-top: 100px;
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
    width: 500px;
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
