@extends('layouts.guest')
@section('content')
<section class="inner-banner-sec image">
    <img src="https://www.caho.in/images/fa41649f10bf6475e8fa0a922a3245f3.jpg" alt="" class="show-desk">
    <img src="images/HEALTHCARE INSTITUTIONS-mob.jpg" alt="" class="show-mob">
    <div class="container">
        <div class="heading ub"><b>Offline </b> Payment</div>
        <ul class="breadcrumb flex-view fc">
            <li><a href="index.php">Home</a></li>
            <li>Join Now</li>
        </ul>
    </div>
</section>
<section class="pt-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="offline-thankyou payment-sucess w-50 m-auto">
                    <img src="images/thank-you-success.png" class="m-auto">
                    <h2 class="heading text-black text-center">Payment Successful</h2>
                    <p class="text-center">Our team will review your information, and once approved, you can access the full dashboard. Please check back in 24-48 hours</p>
                    <table class="w-50 mt-4 mb-4" align="center">
                        <tr>
                            <td>Transaction ID :</td>
                            <td>#125035421</td>
                        </tr>
                        <tr>
                            <td>Payment Type :</td>
                            <td>Online Transfer</td>
                        </tr>
                        <tr>
                            <td>Bank :</td>
                            <td>HDFC</td>
                        </tr>
                        <tr>
                            <td>E-mail :</td>
                            <td>info@gmail.com</td>
                        </tr>
                        <tr>
                            <td>Mobile No :</td>
                            <td>+91 1234 5678 950</td>
                        </tr>
                        <tr>
                            <td>Amount Paid :</td>
                            <td>$180</td>
                        </tr>
                        <tr>
                            <td>Screenshot:</td>
                            <td><img src=""></td>
                        </tr>
                    </table>
                    <div class="text-center mb-4">
                        <a href="#" class="common-btn">Go to home page</a>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
