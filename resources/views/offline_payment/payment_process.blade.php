@extends('layouts.guest')
@section('content')
    <section class="inner-banner-sec image">
        <img src="https://www.caho.in/images/fa41649f10bf6475e8fa0a922a3245f3.jpg" alt="" class="show-desk">
        <img src="images/HEALTHCARE INSTITUTIONS-mob.jpg" alt="" class="show-mob">
        <div class="container">
            <div class="heading ub"><b>Offline </b> Payment</div>
            <ul class="breadcrumb flex-view fc">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li>Join Now</li>
            </ul>
        </div>
    </section>
    <section class="form-type-page p-0 pb-5 bg-white pt-5">
        <div class="container">
            <h4 class="membership-heading">Choose Your Payment Method</h4>
            <div class="inner-sec d-flex mem-tab">
                <div class="method_list">
                    <ul class="main-tab">
                        <li>
                            <div class="method_icon">
                                <i class="fa fa-check" aria-hidden="true"></i>
                            </div>
                            <div class="method_tile">
                                <h5>QR Code</h5>
                                <p>Scan and Pay Quickly</p>
                            </div>
                        </li>
                        <li>
                            <div class="method_icon">
                                <i class="fa fa-check" aria-hidden="true"></i>
                            </div>
                            <div class="method_tile">
                                <h5>Bank Transfer</h5>
                                <p>Manual bank transfer(NEFT, IMPS)</p>
                            </div>
                        </li>
                        <a href="http://caho.in/" target="_blank">
                            <li>
                                <div class="method_icon">
                                    <i class="fa fa-check" aria-hidden="true"></i>
                                </div>
                                <div class="method_tile">
                                    <h5>Online Payment Getaway</h5>
                                    <p>Please pay through your Card</p>
                                </div>
                            </li>
                        </a>
                        <li>
                            <div class="method_icon">
                                <i class="fa fa-check" aria-hidden="true"></i>
                            </div>
                            <div class="method_tile">
                                <h5>Submit Pyment Proof</h5>
                                <p>Please fill the form</p>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="right-detail-member tab-container">
                    <div class="right-payment content">
                        <div class="qr-payment d-flex justify-content-center align-items-center flex-wrap">
                            <img src="images/qr.png">
                            <h4 class="mt-3 text-black text-center w-100">Scan & Pay {{ $info->getLatestMembershipDetail->price . ' ' . $info->getLatestMembershipDetail->currency_code }}</h4>
                        </div>
                    </div>
                    <div class="right-payment content">
                        <div class="qr-payment">
                            <div class="pay_am" id="bank-details">
                                <p><b>Bank Name:</b> HDFC Bank Bank <br />
                                    <b>Address:</b> New Friends Colony, New Delhi - 110025 <br />
                                    <b>Account Name:</b> Consortium of Accredited Healthcare <br />
                                    <b>Organizations:</b> New Friends Colony, New Delhi - 110025 <br />
                                    <b>Account Type:</b> Current <br />
                                    <b>Account Number:</b> 00892000022774 <br />
                                    <b>IFSC Code:</b> HDFCINBB
                                </p>
                            </div>
                            <button type="button" id="copy-button" class="common-btn mt-3">Copy Details</button>
                        </div>
                    </div>
                    <div class="right-payment content">
                        <div class="qr-payment">
                            wrweh
                        </div>
                    </div>
                    <div class="right-payment content">
                        <div class="qr-payment">
                            <form class="membership-form" action="{{ route('post.verification.data') }}" enctype="multipart/form-data" method="POST">
                                @csrf
                                <input type="hidden" name="membership_register_id" value="{{ auth()->user()->id }}" required>

                                <div class="inner-box p-0">
                                    <ul class="full-form">
                                        <li>
                                            <div class="input-group">
                                                <label>Mode of Payment</label>
                                                <select name="payment_mode" class="" required>
                                                    <option value="bank">Bank Transfer</option>
                                                    <option value="qrcode">QR Code</option>
                                                </select>
                                            </div>
                                            @error('payment_mode')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </li>
                                        <li>
                                            <div class="input-group">
                                                <label>UTR/Transaction Number</label>
                                                <input type="text" name="utr_transaction_number" placeholder="" value="" class="" required>
                                            </div>
                                            @error('utr_transaction_number')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </li>
                                        <li class="w-100">
                                            <div class="input-group">
                                                <label>Screenshot (Attachment to be uploaded)</label>
                                                <input type="file" name="file" placeholder="" value="" class="" required>
                                            </div>
                                            @error('file')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </li>
                                    </ul>
                                    <ul class="full-form">
                                        <li class="w-100">
                                            <button type="submit" class="common-btn border-0">Submit</button>
                                        </li>
                                    </ul>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<script>
document.getElementById('copy-button').addEventListener('click', function() {
    // Create a hidden textarea element
    var textarea = document.createElement('textarea');
    textarea.style.position = 'fixed';
    textarea.style.left = '-9999px';

    // Get the bank details and set it as the textarea's value
    var bankDetails = document.getElementById('bank-details').innerText;
    textarea.value = bankDetails;

    // Append the textarea to the body
    document.body.appendChild(textarea);

    // Select the textarea content
    textarea.select();
    textarea.setSelectionRange(0, 99999); // For mobile devices

    // Copy the content to the clipboard
    document.execCommand('copy');

    // Remove the textarea from the DOM
    document.body.removeChild(textarea);

    // Optional: Alert the user that the text has been copied
    alert('Bank details copied to clipboard');
});
</script>
@endsection
