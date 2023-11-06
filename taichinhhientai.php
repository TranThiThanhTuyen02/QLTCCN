<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>Document</title>
</head>
<style>
      .container{
            max-width: 80%;
        }
    </style>
<body>
<div class="container">
        <?php include './header.php'; ?>
        <div class="body">
    <section>
        <div class="row d-flex align-items-center justify-content-center">
                <div class="col-md-8 d-flex align-items-center justify-content-center content mx-auto">
                    <p class="bg-primary p-2">Tài Chính Hiện Tại</p>
                </div>
                <div class="col-md-8 d-flex align-items-center justify-content-center content mx-auto">
                    <p class="bg-primary p-2 ">Tài Chính Hiện Tại (1)-(2) 500 000</p>
                </div>
        </div>

        <div class="container">
            <div class="row mt-4" id="tc">
                <div class="col-md-5 offset-md-2">
                    <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">Tổng có(1) 1 000 000</h5>
                        <h5 class="card-title">Tiền mặt 200 000</h5>
                        <h5 class="card-title">Thẻ tín dụng 600 000</h5>
                        <p href="#" class="card-title align-items-center">Xem thêm</p>
                    </div>
                    </div>
                </div>
            </div>

            <div class="row mt-4" id="tn">
                <div class="col-md-5 offset-md-2">
                    <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">Tổng nợ(2) 500 000</h5>
                        <h5 class="card-title">Nợ người thân 300 000</h5>
                        <h5 class="card-title">Tiền điện 100 000</h5>
                        <h5 class="card-title">Nợ ngân hàng</h5>
                        <p href="#" class="card-title align-items-center">Xem thêm</p>
                    </div>
            </div>
        </section>
</div>
        <?php include './footer.php'; ?>
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
        </script>
    </div>
</body>

</html>