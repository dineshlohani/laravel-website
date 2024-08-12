<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Authentication Defaults
    |--------------------------------------------------------------------------
    |
    | This option controls the default authentication "guard" and password
    | reset options for your application. You may change these defaults
    | as required, but they're a perfect start for most applications.
    |
    */

    'defaults' => [
        'guard' => 'web',  // Default guard is set to 'web'
        'passwords' => 'users',  // Default password reset is for 'users'
    ],

    /*
    |--------------------------------------------------------------------------
    | Authentication Guards
    |--------------------------------------------------------------------------
    |
    | Here, you can define every authentication guard for your application.
    | A default configuration using session storage and the Eloquent user 
    | provider has been defined for you. All authentication drivers have 
    | a user provider. This defines how users are retrieved from your database.
    |
    | Supported: "session"
    |
    */

    'guards' => [
        'web' => [
            'driver' => 'session',  // Uses session driver
            'provider' => 'users',  // Associated with the 'users' provider
        ],

        'admin' => [
            'driver' => 'session',  // Uses session driver
            'provider' => 'admins',  // Associated with the 'admins' provider
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | User Providers
    |--------------------------------------------------------------------------
    |
    | All authentication drivers have a user provider. This defines how users
    | are actually retrieved from your database or other storage mechanisms 
    | used by this application to persist your user's data.
    |
    | You may configure multiple sources if you have multiple user tables 
    | or models. These sources may then be assigned to any extra authentication
    | guards you have defined.
    |
    | Supported: "database", "eloquent"
    |
    */

    'providers' => [
        'users' => [
            'driver' => 'eloquent',  // Uses Eloquent ORM
            'model' => App\Models\User::class,  // References the User model
        ],

        'admins' => [
            'driver' => 'eloquent',  // Uses Eloquent ORM
            'model' => App\Models\Admin::class,  // References the Admin model
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Resetting Passwords
    |--------------------------------------------------------------------------
    |
    | You may specify multiple password reset configurations if you have more 
    | than one user table or model in the application and you want to have
    | separate password reset settings based on the specific user types.
    |
    | The expire time is the number of minutes that each reset token will be 
    | considered valid. This security feature keeps tokens short-lived so 
    | they have less time to be guessed. You may change this as needed.
    |
    */

    'passwords' => [
        'users' => [
            'provider' => 'users',  // Associated with the 'users' provider
            'table' => 'password_resets',  // Table used for password resets
            'expire' => 60,  // Tokens expire after 60 minutes
            'throttle' => 60,  // 60 minutes throttle for requests
        ],

        'admins' => [
            'provider' => 'admins',  // Associated with the 'admins' provider
            'table' => 'password_resets',  // Table used for password resets
            'expire' => 60,  // Tokens expire after 60 minutes
            'throttle' => 60,  // 60 minutes throttle for requests
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Password Confirmation Timeout
    |--------------------------------------------------------------------------
    |
    | This defines the amount of seconds before a password confirmation 
    | times out, and the user is prompted to re-enter their password via the
    | confirmation screen. By default, the timeout lasts for three hours.
    |
    */

    'password_timeout' => 10800,  // Password confirmation timeout is 3 hours (10800 seconds)

];
