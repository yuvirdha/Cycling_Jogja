@extends('layouts.app')

@section('content')

<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100">
            <form class="login100-form validate-form" method="POST" action="{{ route('register') }}">
                @csrf
                <span class="login100-form-title p-b-43">
                    Masuk
                </span>

                {{-- gambar profil --}}
                <div>
                    <span>
                    <input class="input100"id="gambarprofil" type="file" class="avatar-upload @error('gambarprofil') is-invalid @enderror" name="gambarprofil" value="{{ old('gambarprofil') }}" required autocomplete="gambarprofil" autofocus>

                    @error('gambarprofil')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </span>
                </div>

                {{-- nama --}}
                <div class="wrap-input100 validate-input">
                    <input class="input100" id="nama" type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{ old('nama') }}" required autocomplete="nama" autofocus>
                    <span class="focus-input100"></span>
                    <span class="label-input100">{{ __('Nama Lengkap') }}</span>

                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>


                {{-- jenis kelamin --}}
                <div class="wrap-input100 validate-input">
                    <select name="jenis_kelamin" id="jenis_kelamin" type="gender" class="input100" class="form-control @error('jenis_kelamin') is-invalid @enderror" value="{{ old('jenis_kelamin') }}" required autocomplete="jenis_kelamin" autofocus>
                        <option value="L">Laki-laki</option>
                        <option value="P">Perempuan</option>
                    </select>
                    <span class="focus-input100"></span>
                    <span class="label-input100">{{ __('Jenis Kelamin') }}</span>
                    
                    @error('jenis_kelamin')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

         
                {{-- nomor handphone --}}
                <div class="wrap-input100 validate-input">
                    <input class="input100" id="nomor_hp" type="text"class="form-control @error('nomor_hp') is-invalid @enderror" name="nomor_hp" value="{{ old('nomor_hp') }}" required autocomplete="nomor_hp" autofocus>
                    <span class="focus-input100"></span>
                    <span class="label-input100">{{ __('Nomor Handphone') }}</span>
                </div>


                {{-- tanggal lahir --}}
                <div class="wrap-input100 validate-input">
                    <input class="input100" id="tanggal_lahir" type="date"class="form-control @error('tanggal_lahir') is-invalid @enderror" name="tanggal_lahir" value="{{ old('tanggal_lahir') }}" required autocomplete="tanggal_lahir" autofocus>
                    <span class="focus-input100"></span>
                    <span class="label-input100">{{ __('Tanggal Lahir') }}</span>
                </div>


                {{-- email --}}
                <div for="email" class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
					<input class="input100" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
					<span class="focus-input100"></span>
                    <span class="label-input100">{{ __('Email') }}</span>
                        
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
				</div>

                     
                {{-- kata sandi --}}
				<div for="password" class="wrap-input100 validate-input" data-validate="Password is required">
					<input class="input100" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
					<span class="focus-input100"></span>
                    <span class="label-input100">{{ __('Kata sandi') }}</span>
                        
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>


                {{-- ulang kata sandi --}}
                <div class="wrap-input100 validate-input">
                    <input class="input100"id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                    <span class="focus-input100"></span>
                    <span class="label-input100">{{ __('Ulangi kata sandi') }}</span>
                </div>


                <div class="container-login100-form-btn">
                    <button class="login100-form-btn" type="submit">
                        {{ __('Register') }}
                    </button>
                </div>
            </form>

                <div class="login100-more" style="background-image: url('images/bg-01.jpg');"></div>
            </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
<!--===============================================================================================-->
<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>
    
@endsection
