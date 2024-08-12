<link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/fav.png') }}">
<h1>Admin Dashboard</h1>
<p>Welcome, {{ Auth::guard('admin')->user()->name }}!</p>

<form action="{{ route('admin.logout') }}" method="POST">
    @csrf
    <button type="submit">Logout</button>
</form>
