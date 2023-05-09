



<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>





<div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
  <div class="sm:mx-auto sm:w-full sm:max-w-sm">
    <img class="mx-auto h-10 w-auto" src="https://cuberoute.co.za/wp-content/uploads/2022/10/Cube-logo-CMYK-scaled-e1666001814183.jpg" alt="Your Company">
    <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Log In to your account</h2>
  </div>

  <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
    <form class="space-y-6" action="{{ route('login') }}" method="POST">
    @csrf
     

      <div>
        <label for="email" class="block text-sm font-medium leading-6 text-gray-900">{{ __('Email Address') }}</label>
        <div class="mt-2">
          <input id="email" name="email" type="email" autocomplete="email" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-cyan-600 sm:text-sm sm:leading-6">
        </div>
      </div>


      <div>
        <label for="password" class="block text-sm font-medium leading-6 text-gray-900">{{ __('Password') }}</label>
        <div class="mt-2">
          <input id="password" name="password" type="password" autocomplete="email" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-cyan-600 sm:text-sm sm:leading-6">
        </div>
      </div>
      @if (Route::has('password.request'))
      <div class="text-sm">
            <a href="{{ route('password.request') }}" class="font-semibold text-cyan-600 hover:text-cyan-500">{{ __('Forgot Your Password?') }}</a>
          </div>

          @endif

          <div class="text-sm">
            <a href="/register" class="font-semibold text-cyan-600 hover:text-cyan-500">Don't Have a Account? Register</a>
          </div>

      
       

      <div>
        <button type="submit" class="flex w-full justify-center rounded-md bg-cyan-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-cyan-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-cyan-600"> {{ __('Login') }}</button>
      </div>
    </form>

    
  </div>
</div>


