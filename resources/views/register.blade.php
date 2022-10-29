<x-layout>
    <div class="auth-container">
        <form action="" class="auth-form">
            @csrf
            <h2 class="auth-title">Register</h2>

            <div class="auth-item">
                <label for="email" class="auth-label">Email</label>
                <input type="email" name="email" class="auth-input">
            </div>

            <div class="auth-item">
                <label for="username" class="auth-label">Username</label>
                <input type="text" name="username" class="auth-input">
            </div>

            <div class="auth-item">
                <label for="password" class="auth-label">Password</label>
                <input type="password" name="password" class="auth-input">
            </div>

            <button type="submit" class="auth-submit-btn">Register</button>
        </form>
    </div>
</x-layout>