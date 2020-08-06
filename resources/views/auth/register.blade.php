<x-master>

    <div class="m-10">

        <div style="
        width: 100%;
        height: 100vh;
        background-color: #046FBC;
        position: fixed;
        top: 0;" />

        <div id="circle" style="
        width: 1500px;
        height: 1500px;
        background: #F0F0F0;
        border-radius: 50%;
        position: fixed;
        z-index: -1;
        right: 46%;
        top: -41%;"/>
    </div>

    <div id="login-container" class="flex items-center justify-center" style="position: relative; top: calc(50% - 19em);">
        <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 flex justify-center flex-col items-center">
            <div id="title" class="my-10">
                <h1 class="font-bold text-lg text-blue-700">< BUG TRACKER \></h1>
            </div>

            <form method="POST" action="{{ route('register') }}" class="px-20">
                @csrf

                <div class="mb-4">
                    <label for="Name" class="block text-gray-700 text-sm font-bold mb-2">Name</label>
                    <input type="name" name="name" id="name" class="shadow appearance-none border w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>

                    @error('Name')
                        <p class="text-sm text-red-600">{{$message}}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="Email" class="block text-gray-700 text-sm font-bold mb-2">Email</label>
                    <input type="email" name="email" id="email" class="shadow appearance-none border w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>

                    @error('email')
                        <p class="text-sm text-red-600">{{$message}}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="Password" class="block text-gray-700 text-sm font-bold mb-2">Password</label>
                    <input type="password" name="password" id="password" class="shadow appearance-none border w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>

                    @error('email')
                        <p class="text-sm text-red-600">{{$message}}</p>
                    @enderror
                </div>

                <div class="mb-8">
                    <label for="password_confirmation" class="block text-gray-700 text-sm font-bold mb-2">Confirm Password</label>
                    <input type="password" name="password_confirmation" id="password_confirmation" class="shadow appearance-none border w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>

                    @error('email')
                        <p class="text-sm text-red-600">{{$message}}</p>
                    @enderror
                </div>

                <div>
                    <div class="mb-4">
                        <button type="submit" class="text-sm text-white bg-blue-600 w-full py-2 hover:bg-blue-700">Register</button>
                    </div>

                    <div class="mb-4 flex items-center justify-center">
                        <a href="/login" class="text-gray-700 hover:text-gray-900 text-sm">Login</a>
                    </div>
                </div>

            </form>
        </div>
    </div>

    {{-- <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Register') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
</x-master>
