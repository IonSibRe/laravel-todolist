<x-layout>
    <div class="auth-container">
        <form action="" class="auth-form">
            @csrf
            <h2 class="auth-title">Login</h2>

            <div class="auth-item">
                <label for="email" class="auth-label">Email</label>
                <input type="email" name="email" class="auth-input">
            </div>

            <div class="auth-item">
                <label for="password" class="auth-label">Password</label>
                <input type="password" name="password" class="auth-input">
            </div>

            <button type="submit" class="auth-submit-btn">Login</button>
        </form>
    </div>
</x-layout>