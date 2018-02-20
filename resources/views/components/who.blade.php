<!-- Checks if user is logged or not, using the web guard -->
@if (Auth::guard('web')->check())
	<p>
	You are Logged In as a <strong>USER</strong>
	</p>
@else
	<p class="text-danger">
	You are Logged Out as a <strong>USER</strong>
	</p>
@endif

<!-- Checks if admin is logged or not, using the admin guard -->
@if (Auth::guard('admin')->check())
	<p>
	You are Logged In as a <strong>ADMIN</strong>
	</p>
@else
	<p class="text-danger">
	You are Logged Out as a <strong>ADMIN</strong>
	</p>
@endif