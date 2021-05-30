<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta charset="utf-8" />
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <title>Sweet & Salt Restaurant</title>
</head>

<body>
    <div class="container">

        <div class="row align-items-stretch mb-5">
            <div class="col-md-5">
                <form id="contactForm1" action="/storeProd" method="POST" novalidate="novalidate">
                    {{csrf_field()}}
                    <div class="text-center">
                        <h2 class="section-heading text-uppercase">Create Products</h2>
                    </div>
                    <div class="form-group">
                        <input name="name" class="form-control" min="1" max="50" id="name" type="text" placeholder="Name *" required="required" data-validation-required-message="Please enter name." />
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="form-group">
                        <input name="price" class="form-control" min="1" max="200" id="price" type="number" placeholder="Price *" required="required" data-validation-required-message="Please enter price." />
                        <p class="help-block text-danger"></p>

                        <button class="btn btn-primary btn-xl " type="submit">Create New Product</button>
                    </div>
                </form>
            </div>
        </div>
</body>

</html>