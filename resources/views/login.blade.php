<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.3/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://unpkg.com/bs-brain@2.0.4/components/logins/login-4/assets/css/login-4.css">
</head>
<body>
    <!-- Login 4 - Bootstrap Brain Component -->
<section class="p-3 p-md-4 p-xl-5">
  <div class="container">
    <div class="card border-light-subtle shadow-sm">
      <div class="row g-0">
        <div class="col-12 col-md-6">
          <img class="img-fluid rounded-start w-100 h-100 object-fit-cover" loading="lazy" src="../images/télécharger.jpeg" alt="BootstrapBrain Logo">
        </div>
        <div class="col-12 col-md-6">
          <div class="card-body p-3 p-md-4 p-xl-5">
            <div class="row">
              <div class="col-12">
                <div class="mb-5">
                  <h3>Se Connecter</h3>
                </div>
              </div>
            </div>
            <form action="{{ route('loginP') }}" method="POST">
                @csrf
              <div class="row gy-3 gy-md-4 overflow-hidden">
                <div class="col-12">
                  <label for="email" class="form-label">Email <span class="text-danger">*</span></label>
                  <input type="email" class="form-control" name="email" id="email" placeholder="name@example.com" required>
                </div>
                <div class="col-12">
                  <label for="password" class="form-label">Mot De Passe <span class="text-danger">*</span></label>
                  <input type="password" class="form-control" name="motDePasse" id="motDePasse" value="" required>
                </div>
                  @error('motDePasse')
                  <div class="text-danger mt-2">{{ $message }}</div>
                  @enderror
                <div class="col-12">
                  <div class="d-grid">
                    <button class="btn bsb-btn-xl btn-primary" type="submit">Connectez-vous </button>
                  </div>
                </div>
              </div>
            </form>
            <div class="row">
              <div class="col-12">
                <hr class="mt-5 mb-4 border-secondary-subtle">
                <div class="d-flex gap-2 gap-md-4 flex-column flex-md-row justify-content-md-end">
                  <a href="{{ route('register') }}" class="link-secondary text-decoration-none">Creer un compte</a>
                  <a href="#!" class="link-secondary text-decoration-none">Mot De Passe Oublier</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</body>
</html>
