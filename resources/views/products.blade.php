<!DOCTYPE html>
<html>

    <head>
        <title>Product</title>
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <link rel="icon" type="image/png" href="img/wiralogo.png" />
        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:ital,wght@1,600;1,700;1,800&family=Roboto:wght@400;500&display=swap" rel="stylesheet"> 
        
        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
        

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">

    </head>
    <body>
<?php include 'html/navbar.html';?>
<br><br>
        <div class="container">
        <div class="row">
        <div class="panel panel-default">
        <div class="panel-heading">
        <h3 style="font-size: 35px;">Products info </h3>
        </div>

        <div class="panel-body">

        <div class="form-group">

        <input  type="text" class="form-controller" id="search" name="search" value="">


        </div>

        <table style="width: 1000px;" class="table table-bordered table-hover">

        <thead>

        <tr>

        <th style="font-size: 18px;">Product Name</th>

        <th style="font-size: 18px;">Price</th>

        <th style="font-size: 18px;">Color</th>

        <th style="font-size: 18px;">Description</th>

        </tr>

        </thead>

        <tbody id='tbody'>

        </tbody>

        </table>

        </div>

        </div>

        </div>

        </div>

        <script type="text/javascript">
            const search = document.getElementById('search');
            const tableBody = document.getElementById('tbody');
            function getContent(){
            
            const searchValue = search.value;
            
                const xhr = new XMLHttpRequest();
                xhr.open('GET','{{route('search')}}/?search=' + searchValue ,true);
                xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
                xhr.onreadystatechange = function() {
                    
                    if(xhr.readyState == 4 && xhr.status == 200)
                    {
                        tableBody.innerHTML = xhr.responseText;
                    }
                }
                xhr.send()
            }
            search.addEventListener('input',getContent);
        </script>

    </body>
@include('frontEnd.layouts.footer')
</html>