<x-layout>
    <div class="auth-container">
        <form action="/users/store" class="auth-form" method="POST">
            @csrf
            <h2 class="auth-title">Register</h2>

            <div class="auth-item">
                <label for="email" class="auth-label">Email</label>
                <input type="email" name="email" class="auth-input">

                @error("email")
                <p class="auth-error">{{$message}}</p>
                @enderror
            </div>

            <div class="auth-item">
                <label for="username" class="auth-label">Username</label>
                <input type="text" name="username" class="auth-input">

                @error("username")
                <p class="auth-error">{{$message}}</p>
                @enderror
            </div>

            <div class="auth-item">
                <label for="password" class="auth-label">Password</label>
                <input type="password" name="password" class="auth-input">

                @error("password")
                <p class="auth-error">{{$message}}</p>
                @enderror
            </div>

            <div class="auth-item">
                <label for="password_confirmation" class="auth-label">Confirm Password</label>
                <input type="password" name="password_confirmation" class="auth-input">

                @error("password_confirmation")
                <p class="auth-error">{{$message}}</p>
                @enderror
            </div>

            <button type="submit" class="auth-submit-btn">Register</button>
        </form>
    </div>
</x-layout>