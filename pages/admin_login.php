<div class="container d-flex justify-content-center align-items-center vh-100">
    <div class="row w-100">
        <div class="col-lg-6 mx-auto shadow p-4 rounded bg-white">
            <h3 class="text-center mb-4">Login</h3>
            <form method="post" action="index.php?execute=login" class="needs-validation" novalidate>
                <!-- Email Field -->
                <div class="mb-3">
                    <label for="email" class="form-label">E-mail</label>
                    <input type="email" id="email" name="email" class="form-control" placeholder="example@example.com" required>
                    <div class="invalid-feedback">Please enter a valid email address.</div>
                </div>

                <!-- Password Field -->
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" id="password" name="password" class="form-control" placeholder="Enter your password" required>
                    <div class="invalid-feedback">Password is required.</div>
                </div>

                <!-- Submit Button -->
                <div class="d-grid">
                    <button type="submit" class="btn btn-primary">Login</button>
                </div>
            </form>

            <!-- Additional Options -->
            <div class="mt-3 text-center">
                <a href="index.php?action=forgot_password" class="text-decoration-none">Forgot your password?</a>
            </div>
        </div>
    </div>
</div>
