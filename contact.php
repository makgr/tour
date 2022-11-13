<?php
    $page = 'contact';
    include 'layouts/header.php';
    include 'layouts/navbar.php';

?>
<head>
    <style>
        .about{
            background-image: url("images/view/contact.jpg");
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center center;
            background-color: orange;
            height: 86vh;
        }
    </style>
</head>

<br><br><br>
<div class="container-fluid about">
    <br><br>
    <h1 class="text-dark text-center my-5">Conatct Us</h1>
    <div class="container">
        <div class="row text-center">
            <div class="col-sm-4">
                <div class="card border-primary">
                    <div class="card-body">
                        <h5 class="card-title"><i class="far fa-envelope"></i></h5>
                        <p class="card-text"> user1@mail.com <br> user2@mail.com</p>
                        
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card border-success">
                    <div class="card-body">
                        <h5 class="card-title"><i class="fas fa-phone"></i></h5>
                        <p class="card-text">+8800000000 <br> +880100000000</p>
                        
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card border-danger">
                    <div class="card-body">
                        <h5 class="card-title"><i class="fas fa-map-marker-alt"></i></h5>
                        <p class="card-text pt-4">Robot University</p>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<footer class='text-center p-1 mt-5' style="background: #E9EAEC;">
    <h6>fmtravels@tour &copy; <?php echo date('Y');?></h6>
</footer>

<?php
    include 'layouts/footer.php';
?>