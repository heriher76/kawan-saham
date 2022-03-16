<!-- Modal for Contact - us Button -->
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
	  <div class="modal-content">
	    <div class="modal-header">
	      <h4 class="modal-title" id="exampleModalLabel">Login ke Dashboard</h4>
	    </div>
	    <div class="modal-body">
	      <form id="loginForm" method="POST" action="{{ route('login') }}">
	      	@csrf
	        <div class="form-group">
	          <label for="Email">Email</label>
	          <input type="email" class="form-control" id="Email" placeholder="Email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

	          @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
              @enderror
	        </div>
	        <div class="form-group">
	          <label for="KataSandi">Kata Sandi</label>
	          <input type="password" class="form-control" id="KataSandi" placeholder="Kata Sandi" name="password" required autocomplete="current-password">

	          @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
              @enderror
	        </div>
	      </form>
	    </div>
	    <div class="modal-footer">
	      <button type="button" class="btn btn-light" data-dismiss="modal">Tutup</button>
	      <button type="submit" form="loginForm" class="btn btn-success">Masuk</button>
	    </div>
	  </div>
	</div>
</div>

<div class="modal fade" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
	  <div class="modal-content">
	    <div class="modal-header">
	      <h4 class="modal-title" id="exampleModalLabel">Daftar Akun</h4>
	    </div>
	    <div class="modal-body">
	      <form id="registerForm" method="POST" action="{{ route('register') }}">
	      	@csrf
	        <div class="form-group">
	          <label for="Email">Email</label>
	          <input type="email" class="form-control" id="Email" placeholder="Email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

	          @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
              @enderror
	        </div>
	        <div class="form-group">
	          <label for="KataSandi">Kata Sandi</label>
	          <input type="password" class="form-control" id="KataSandi" placeholder="Kata Sandi" name="password" required autocomplete="current-password">

	          @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
              @enderror
	        </div>

	        <div class="form-group">
	          <label for="KataSandi">Konfirmasi Kata Sandi</label>
	          
	          <input id="password-confirm" type="password" placeholder="Konfirmasi Kata Sandi" class="form-control" name="password_confirmation" required autocomplete="new-password">

	        </div>

	      </form>
	    </div>
	    <div class="modal-footer">
	      <button type="button" class="btn btn-light" data-dismiss="modal">Tutup</button>
	      <button type="submit" form="registerForm" class="btn btn-success">Daftar</button>
	    </div>
	  </div>
	</div>
</div>