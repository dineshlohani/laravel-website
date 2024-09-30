@extends('layouts.app1')

@section('title', 'Admin Dashboard')

@section('content')
<body class="inner_page login">
    <div class="full_container">
        <div class="container">
            <div class="center verticle_center full_height">
                <div class="login_section">
                    <div class="logo_login">
                        <div class="center">
                            <img width="210" src="{{ asset('assets/images/logo/logo.png') }}" alt="Logo" />
                        </div>
                    </div>
                    <div class="login_form">
                        <form id="User-form" action="{{ route('admin.create') }}" method="post">
                            @csrf
                            <fieldset>
                                <!-- Full Name Field -->
                                <div class="field">
                                    <label class="label_field">Full Name</label>
                                    <input type="text" name="name" placeholder="Full Name" required />
                                </div>

                                <!-- Email Field -->
                                <div class="field">
                                    <label class="label_field">Email Address</label>
                                    <input type="email" name="email" placeholder="E-mail" required />
                                </div>

                                <!-- Password Field -->
                                <div class="field">
                                    <label class="label_field">Password</label>
                                    <input type="password" name="password" placeholder="Password" required />
                                </div>
                                
                                <!-- Submit Button -->
                                <div class="field margin_0">
                                    <label class="label_field hidden">hidden label</label>
                                    <button type="submit" class="main_bt">Create User</button>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>



@endsection
