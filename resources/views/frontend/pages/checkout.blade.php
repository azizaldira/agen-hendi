@extends('frontend.layouts.master')

@section('title','Checkout')

@section('main-content')

    <!-- Breadcrumbs -->
    <div class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="bread-inner">
                        <ul class="bread-list">
                            <li><a href="{{route('home')}}">Home<i class="ti-arrow-right"></i></a></li>
                            <li class="active"><a href="javascript:void(0)">Checkout</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumbs -->
            
    <!-- Start Checkout -->
    <section class="shop checkout section">
        <div class="container">
                <form class="form" method="POST" action="{{route('cart.order')}}">
                    @csrf
                    <div class="row"> 

                        <div class="col-lg-8 col-12">
                            <div class="checkout-form">
                                <h2>Lakukan Pembayaran Disini</h2>
                                <p>Lengkapi Data Dibawah Ini</p>
                                <!-- Form -->
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="form-group">
                                            <label>Nama Depan<span>*</span></label>
                                            <input type="text" name="first_name" placeholder="" value="{{old('first_name')}}" value="{{old('first_name')}}">
                                            @error('first_name')
                                                <span class='text-danger'>{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="form-group">
                                            <label>Nama Belakang<span>*</span></label>
                                            <input type="text" name="last_name" placeholder="" value="{{old('lat_name')}}">
                                            @error('last_name')
                                                <span class='text-danger'>{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="form-group">
                                            <label>Email<span>*</span></label>
                                            <input type="email" name="email" placeholder="" value="{{old('email')}}">
                                            @error('email')
                                                <span class='text-danger'>{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="form-group">
                                            <label>Nomor Whatsapp <span>*</span></label>
                                            <input type="number" name="phone" placeholder="" required value="{{old('phone')}}">
                                            @error('phone')
                                                <span class='text-danger'>{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="form-group">
                                            <label>Provinsi<span>*</span></label>
                                            <select name="country" id="country">
                                                <option value="AC">Aceh</option>
                                                <option value="SU">Sumatera Utara</option>
                                                <option value="SB">Sumatera Barat</option>
                                                <option value="RI">Riau</option>
                                                <option value="KR">Kepulauan Riau</option>
                                                <option value="JA">Jambi</option>
                                                <option value="SS">Sumatera Selatan</option>
                                                <option value="BB">Bangka Belitung</option>
                                                <option value="BE">Bengkulu</option>
                                                <option value="LA">Lampung</option>
                                                <option value="JK">DKI Jakarta</option>
                                                <option value="JB">Jawa Barat</option>
                                                <option value="BT">Banten</option>
                                                <option value="JT">Jawa Tengah</option>
                                                <option value="JI">Jawa Timur</option>
                                                <option value="YO">DI Yogyakarta</option>
                                                <option value="BA">Bali</option>
                                                <option value="NB">Nusa Tenggara Barat</option>
                                                <option value="NT">Nusa Tenggara Timur</option>
                                                <option value="KB">Kalimantan Barat</option>
                                                <option value="KT">Kalimantan Tengah</option>
                                                <option value="KS">Kalimantan Selatan</option>
                                                <option value="KI">Kalimantan Timur</option>
                                                <option value="KU">Kalimantan Utara</option>
                                                <option value="SA">Sulawesi Utara</option>
                                                <option value="ST">Sulawesi Tengah</option>
                                                <option value="SG">Sulawesi Selatan</option>
                                                <option value="SR">Sulawesi Barat</option>
                                                <option value="SE">Sulawesi Tenggara</option>
                                                <option value="GO">Gorontalo</option>
                                                <option value="MA">Maluku</option>
                                                <option value="MU">Maluku Utara</option>
                                                <option value="PA">Papua</option>
                                                <option value="PB">Papua Barat</option>
                                                <option value="PS">Papua Selatan</option>
                                                <option value="PT">Papua Tengah</option>
                                                <option value="PE">Papua Pegunungan</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="form-group">
                                            <label>Alamat Utama<span>*</span></label>
                                            <input type="text" name="address1" placeholder="" value="{{old('address1')}}">
                                            @error('address1')
                                                <span class='text-danger'>{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="form-group">
                                            <label>Alamat Alternatif</label>
                                            <input type="text" name="address2" placeholder="" value="{{old('address2')}}">
                                            @error('address2')
                                                <span class='text-danger'>{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="form-group">
                                            <label>Kode Pos</label>
                                            <input type="text" name="post_code" placeholder="" value="{{old('post_code')}}">
                                            @error('post_code')
                                                <span class='text-danger'>{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    
                                </div>
                                <!--/ End Form -->
                            </div>
                        </div>
                        <div class="col-lg-4 col-12">
                            <div class="order-details">
                                <!-- Order Widget -->
                                <div class="single-widget">
                                    <h2>Total Bayar</h2>
                                    <div class="content">
                                        <ul>
										    <li class="order_subtotal" data-price="{{Helper::totalCartPrice()}}">Subtotal<span>Rp{{number_format(Helper::totalCartPrice(),2)}}</span></li>
                                            <li class="shipping">
                                                Biaya Pengiriman
                                                @if(count(Helper::shipping())>0 && Helper::cartCount()>0)
                                                    <select name="shipping" class="nice-select">
                                                        <option value="">Pilih Layanan Ekspedisi</option>
                                                        @foreach(Helper::shipping() as $shipping)
                                                        <option value="{{$shipping->id}}" class="shippingOption" data-price="{{$shipping->price}}">{{$shipping->type}}: Rp{{$shipping->price}}</option>
                                                        @endforeach
                                                    </select>
                                                @else 
                                                    <span>Gratis</span>
                                                @endif
                                            </li>
                                            
                                            @if(session('coupon'))
                                            <li class="coupon_price" data-price="{{session('coupon')['value']}}">You Save<span>Rp{{number_format(session('coupon')['value'],2)}}</span></li>
                                            @endif
                                            @php
                                                $total_amount=Helper::totalCartPrice();
                                                if(session('coupon')){
                                                    $total_amount=$total_amount-session('coupon')['value'];
                                                }
                                            @endphp
                                            @if(session('coupon'))
                                                <li class="last"  id="order_total_price">Total<span>Rp{{number_format($total_amount,2)}}</span></li>
                                            @else
                                                <li class="last"  id="order_total_price">Total<span>Rp{{number_format($total_amount,2)}}</span></li>
                                            @endif
                                        </ul>
                                    </div>
                                </div>
                                <!--/ End Order Widget -->
                                <!-- Order Widget -->
                                <div class="single-widget">
                                    <h2>Pembayaran</h2>
                                    <div class="content">
                                        <div class="checkbox">
                                            <form-group>
                                                <input name="payment_method" type="radio" value="cod" id="cod"> 
                                                <label for="cod"> Cash On Delivery</label><br>
                                                
                                                <input name="payment_method" type="radio" value="qris" id="qris"> 
                                                <label for="qris"> QRIS Payment</label><br>

                                                <input name="payment_method" type="radio" value="va" id="qris"> 
                                                <label for="qris"> VA Bank</label><br>
                                            </form-group>
                                        </div>
                                        
                                        <!-- QRIS Loading Display -->
                                        <div id="qris-loading" style="display: none; text-align: center; margin-top: 20px;">
                                            <div class="loading-spinner">
                                                <div class="spinner"></div>
                                            </div>
                                            <p style="color: #666; margin-top: 15px;">Memuat kode QRIS...</p>
                                        </div>
                                        
                                        <!-- QRIS QR Code Display -->
                                        <div id="qris-display" style="display: none; text-align: center; margin-top: 20px;">
                                            <div class="qris-header">
                                                <h4>Scan QR Code untuk Pembayaran</h4>
                                                <div class="timer-container">
                                                    <span class="timer-label">Kode berlaku selama:</span>
                                                    <span id="countdown-timer" class="timer-display">05:00</span>
                                                </div>
                                            </div>
                                            
                                            <div class="qr-code-container">
                                                <img id="qris-image" 
                                                     src="https://ypp.co.id/site/uploads/qris/5f7c6da47a380-qr-code-dana.jpg" 
                                                     alt="QRIS QR Code" 
                                                     style="max-width: 200px; height: auto; border: 2px solid #ddd; padding: 10px; border-radius: 8px;">
                                                <div class="qr-overlay" id="qr-overlay" style="display: none;">
                                                    <div class="expired-message">
                                                        <p>Kode QR telah kedaluwarsa</p>
                                                        <button type="button" id="reload-qris" class="btn-reload">Muat Ulang</button>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <p style="font-size: 14px; color: #666; margin-top: 10px;">
                                                Silakan scan QR Code di atas dengan aplikasi pembayaran digital Anda
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <!--/ End Order Widget -->
                                <!-- Payment Method Widget -->
                                <div class="single-widget payement">
                                    <div class="content">
                                        <img src="{{('backend/img/bank.png')}}" alt="#">
                                    </div>
                                </div>
                                <!--/ End Payment Method Widget -->
                                <!-- Button Widget -->
                                <div class="single-widget get-button">
                                    <div class="content">
                                        <div class="button">
                                            <button type="submit" class="btn">proceed to checkout</button>
                                        </div>
                                    </div>
                                </div>
                                <!--/ End Button Widget -->
                            </div>
                        </div>
                    </div>
                </form>
        </div>
    </section>
    <!--/ End Checkout -->
    
@endsection
@push('styles')
	<style>
		li.shipping{
			display: inline-flex;
			width: 100%;
			font-size: 14px;
		}
		li.shipping .input-group-icon {
			width: 100%;
			margin-left: 10px;
		}
		.input-group-icon .icon {
			position: absolute;
			left: 20px;
			top: 0;
			line-height: 40px;
			z-index: 3;
		}
		.form-select {
			height: 30px;
			width: 100%;
		}
		.form-select .nice-select {
			border: none;
			border-radius: 0px;
			height: 40px;
			background: #f6f6f6 !important;
			padding-left: 45px;
			padding-right: 40px;
			width: 100%;
		}
		.list li{
			margin-bottom:0 !important;
		}
		.list li:hover{
			background:#F7941D !important;
			color:white !important;
		}
		.form-select .nice-select::after {
			top: 14px;
		}
		
		/* QRIS Styles */
		#qris-display, #qris-loading {
			background: #f8f9fa;
			border-radius: 8px;
			padding: 20px;
			margin-top: 15px;
		}
		
		#qris-display h4 {
			color: #333;
			margin-bottom: 15px;
			font-size: 16px;
		}
		
		.checkbox input[type="radio"] {
			margin-right: 8px;
		}
		
		.checkbox label {
			font-weight: normal;
			margin-bottom: 10px;
			display: inline-block;
		}
		
		/* Loading Spinner */
		.loading-spinner {
			display: inline-block;
			position: relative;
		}
		
		.spinner {
			width: 40px;
			height: 40px;
			border: 4px solid #f3f3f3;
			border-top: 4px solid #007bff;
			border-radius: 50%;
			animation: spin 1s linear infinite;
		}
		
		@keyframes spin {
			0% { transform: rotate(0deg); }
			100% { transform: rotate(360deg); }
		}
		
		/* Timer Styles */
		.timer-container {
			margin-bottom: 15px;
			padding: 8px 16px;
			background: #fff3cd;
			border: 1px solid #ffeaa7;
			border-radius: 4px;
			display: inline-block;
		}
		
		.timer-label {
			font-size: 12px;
			color: #856404;
			margin-right: 8px;
		}
		
		.timer-display {
			font-size: 14px;
			font-weight: bold;
			color: #d63031;
		}
		
		/* QR Code Container */
		.qr-code-container {
			position: relative;
			display: inline-block;
		}
		
		.qr-overlay {
			position: absolute;
			top: 0;
			left: 0;
			right: 0;
			bottom: 0;
			background: rgba(255, 255, 255, 0.9);
			border-radius: 8px;
			display: flex;
			align-items: center;
			justify-content: center;
		}
		
		.expired-message {
			text-align: center;
			padding: 20px;
		}
		
		.expired-message p {
			color: #dc3545;
			font-weight: bold;
			margin-bottom: 15px;
		}
		
		.btn-reload {
			background: #007bff;
			color: white;
			border: none;
			padding: 8px 16px;
			border-radius: 4px;
			cursor: pointer;
			font-size: 14px;
		}
		
		.btn-reload:hover {
			background: #0056b3;
		}
		
		/* Timer warning colors */
		.timer-warning {
			background: #ffebee !important;
			border-color: #ffcdd2 !important;
		}
		
		.timer-warning .timer-display {
			color: #d32f2f !important;
		}
		
		.timer-critical {
			background: #fce4ec !important;
			border-color: #f8bbd9 !important;
			animation: pulse 1s infinite;
		}
		
		.timer-critical .timer-display {
			color: #c2185b !important;
		}
		
		@keyframes pulse {
			0% { opacity: 1; }
			50% { opacity: 0.7; }
			100% { opacity: 1; }
		}

		/* Success Animation */
		@keyframes fadeIn {
			0% { opacity: 0; transform: scale(0.8); }
			100% { opacity: 1; transform: scale(1); }
		}
	</style>
@endpush
@push('scripts')
	<script src="{{asset('frontend/js/nice-select/js/jquery.nice-select.min.js')}}"></script>
	<script src="{{ asset('frontend/js/select2/js/select2.min.js') }}"></script>
	<script>
		$(document).ready(function() { $("select.select2").select2(); });
  		$('select.nice-select').niceSelect();
	</script>
	<script>
		function showMe(box){
			var checkbox=document.getElementById('shipping').style.display;
			// alert(checkbox);
			var vis= 'none';
			if(checkbox=="none"){
				vis='block';
			}
			if(checkbox=="block"){
				vis="none";
			}
			document.getElementById(box).style.display=vis;
		}
	</script>
	<script>
		$(document).ready(function(){
			$('.shipping select[name=shipping]').change(function(){
				let cost = parseFloat( $(this).find('option:selected').data('price') ) || 0;
				let subtotal = parseFloat( $('.order_subtotal').data('price') ); 
				let coupon = parseFloat( $('.coupon_price').data('price') ) || 0; 
				// alert(coupon);
				$('#order_total_price span').text('Rp'+(subtotal + cost-coupon).toFixed(2));
			});

		});

	</script>
	
	<!-- Enhanced QRIS Payment Method Script with Loading and Timer -->
	<script>
		$(document).ready(function(){
			let qrisTimer = null;
			let loadingTimer = null;
			let countdownInterval = null;
			let timeLeft = 300; // 5 minutes in seconds
			
			// Show/Hide QRIS QR Code based on payment method selection
			$('input[name="payment_method"]').change(function(){
				if($(this).val() === 'qris') {
					showQRISWithLoading();
				} else {
					hideQRIS();
				}
			});
			
			// Reload QRIS button
			$(document).on('click', '#reload-qris', function(){
				reloadQRIS();
			});
			
			function showQRISWithLoading() {
				// Hide QRIS display and show loading
				$('#qris-display').hide();
				$('#qris-loading').slideDown();
				
				// Simulate loading time (2 seconds)
				loadingTimer = setTimeout(function() {
					$('#qris-loading').hide();
					$('#qris-display').slideDown();
					startCountdown();
				}, 2000);
			}
			
			function hideQRIS() {
				$('#qris-display').slideUp();
				$('#qris-loading').slideUp();
				clearAllTimers();
				resetQRIS();
			}
			
			function reloadQRIS() {
				// Hide expired overlay
				$('#qr-overlay').hide();
				
				// Show loading
				$('#qris-display').hide();
				$('#qris-loading').show();
				
				// Reset timer
				timeLeft = 300;
				
				// Reset success state
				$('#qris-image').show();
				$('#success-message').remove();
				$('.qris-header h4').text('Scan QR Code untuk Pembayaran').css('color', '#333');
				$('.timer-container').removeClass('success-state');
				$('.timer-label').text('Kode berlaku selama:');
				
				// Simulate new QR code generation
				loadingTimer = setTimeout(function() {
					// In real implementation, you would generate a new QR code here
					// For demo purposes, we'll just add a timestamp to the image URL
					const timestamp = new Date().getTime();
					const newQRUrl = `https://ypp.co.id/site/uploads/qris/5f7c6da47a380-qr-code-dana.jpg?t=${timestamp}`;
					$('#qris-image').attr('src', newQRUrl);
					
					$('#qris-loading').hide();
					$('#qris-display').show();
					startCountdown();
				}, 2000);
			}
			
			function startCountdown() {
				updateCountdownDisplay();
				
				countdownInterval = setInterval(function() {
					timeLeft--;
					updateCountdownDisplay();
					
					// Check if timer reaches 04:50 (290 seconds remaining)
					if (timeLeft === 290) {
						showSuccess();
						return;
					}
					
					// Change timer appearance based on time left
					if (timeLeft <= 60) { // Last minute
						$('.timer-container').addClass('timer-critical');
					} else if (timeLeft <= 120) { // Last 2 minutes
						$('.timer-container').addClass('timer-warning');
					}
					
					if (timeLeft <= 0) {
						expireQRIS();
					}
				}, 1000);
			}
			
			function showSuccess() {
				clearInterval(countdownInterval);
				
				// Hide QR image and show success message
				$('#qris-image').hide();
				$('.qr-code-container').append(`
					<div id="success-message" style="
						background: #28a745;
						color: white;
						padding: 40px 20px;
						border-radius: 8px;
						text-align: center;
						font-size: 18px;
						font-weight: bold;
						animation: fadeIn 0.5s ease-in-out;
					">
						✓ PEMBAYARAN BERHASIL
					</div>
				`);
				
				// Update header and timer
				$('.qris-header h4').text('Pembayaran Berhasil!').css('color', '#28a745');
				$('.timer-container').addClass('success-state').css({
					'background': '#d4edda',
					'border-color': '#c3e6cb'
				});
				$('.timer-label').text('Pembayaran berhasil pada:').css('color', '#155724');
				$('#countdown-timer').text('04:50').css('color', '#28a745');
			}
			
			function updateCountdownDisplay() {
				const minutes = Math.floor(timeLeft / 60);
				const seconds = timeLeft % 60;
				const display = `${minutes.toString().padStart(2, '0')}:${seconds.toString().padStart(2, '0')}`;
				$('#countdown-timer').text(display);
			}
			
			function expireQRIS() {
				clearInterval(countdownInterval);
				$('#qr-overlay').fadeIn();
			}
			
			function clearAllTimers() {
				if (loadingTimer) {
					clearTimeout(loadingTimer);
					loadingTimer = null;
				}
				if (countdownInterval) {
					clearInterval(countdownInterval);
					countdownInterval = null;
				}
			}
			
			function resetQRIS() {
				timeLeft = 300;
				$('#qr-overlay').hide();
				$('.timer-container').removeClass('timer-warning timer-critical success-state');
				$('#countdown-timer').text('05:00');
				$('#success-message').remove();
				$('#qris-image').show();
			}
		});
	</script>

@endpush