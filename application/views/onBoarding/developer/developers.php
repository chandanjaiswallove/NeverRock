<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url('modules/assets/images/favicon.ico'); ?>">

  <!-- SweetAlert2 CDN -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <style>
    :root {
      --primary:#553cdf;
      --soft-border:#dcd8ff;
    }
    body{
      background:#f9f9ff;
      min-height:100vh;
      display:flex;align-items:center;justify-content:center;
      padding:16px;
      margin:0;
    }
    .auth-container{
      width:100%;
      max-width:920px;
      border:1px solid var(--soft-border);
      border-radius:10px;
      box-shadow:0 4px 16px rgba(0,0,0,.08);
      overflow:hidden;
      display:flex;
      flex-direction:row;
      background:#fff;
    }
    .auth-left,.auth-right{
      flex:1;
      padding:32px 36px;
      box-sizing:border-box;
    }
    .auth-left{
      background:#f3f4ff;
      display:flex; align-items:center; justify-content:center;
    }
    .auth-illustration{
      width:100%;
      height:100%;
      border-radius:8px;
      object-fit:cover;
      animation:fadeIn .8s ease both;
    }
    @keyframes fadeIn{from{opacity:0;transform:translateY(12px)}to{opacity:1;transform:none}}
    .btn-primary{background:var(--primary)!important;border-color:var(--primary)!important;transition:.25s}
    .btn-primary:hover{background:#fff!important;color:var(--primary)!important;border:1px solid var(--primary)!important}
    .btn-outline-secondary{border-color:var(--soft-border)}
    .btn-outline-secondary:hover{background:#fff;color:var(--primary);border-color:var(--primary)}
    .form-control:focus,.form-select:focus{
      border-color:var(--primary);
      box-shadow:0 0 0 .2rem rgba(85,60,223,.2)
    }
    .switch-link{color:var(--primary);cursor:pointer}
    .hidden{display:none!important}
    .brand-logo{width:110px}
    .title{color:var(--primary); margin:8px 0 4px}
    .fine-text{font-size:.875rem}

    @media (max-width: 768px) {
      .auth-container{flex-direction:column;max-width:100%;}
      .auth-left{order:-1;padding:18px;}
      .auth-right{padding:20px;}
      .auth-illustration{max-height:220px;object-fit:cover;}
      .brand-logo{width:80px}
    }

    @media (max-width: 420px) {
      .auth-left,.auth-right{padding:14px;}
      .brand-logo{width:70px}
    }
  </style>
</head>
<body>

<div class="auth-container">
  <!-- Left: Image -->
  <div class="auth-left">
    <img id="sideImage" class="auth-illustration"
         src="https://st2.depositphotos.com/2171279/9264/i/450/depositphotos_92644432-stock-photo-businesswoman-typing-on-laptop-at.jpg"
         alt="Illustration"/>
  </div>

  <!-- Right: Login Form -->
  <div class="auth-right bg-white">
    <div id="loginForm">
      <div class="text-center mb-3">
        <img class="brand-logo mb-1" src="<?php echo base_url('modules/assets/images/logo/logo_1.png'); ?>" alt="Logo">
        <h4 class="title">Login to Your Account 👋</h4>
      </div>
      <form id="loginFormEl" action="<?php echo base_url('developerLogin'); ?>" method="POST">
        <div class="mb-3">
          <label class="form-label">Unique ID</label>
          <input type="text" class="form-control" id="developerLoginUniqueId" name="developerUniqueId" placeholder="Enter your unique ID" maxlength="10" required oninput="changetoUpper()">
          <div class="invalid-feedback">Unique ID is required.</div>
        </div>
        
        <div class="mb-3">
          <label class="form-label">Email</label>
          <input type="email" class="form-control" id="loginEmail" name="loginEmail" placeholder="Enter email" maxlength="35" required>
          <div class="invalid-feedback">Enter a valid email.</div>
        </div>
        
        <div class="mb-3">
          <label class="form-label">Password</label>
          <div class="input-group">
            <input type="password" class="form-control" id="loginPassword" name="loginPassword" placeholder="Enter password" maxlength="35" required>
            <button type="button" class="btn btn-outline-secondary rounded-end" onclick="togglePassword('loginPassword', this)">Show</button>
            <div class="invalid-feedback">Password required.</div>
          </div>
        </div>
        
        <div class="d-flex justify-content-between align-items-center mb-3">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="rememberCheck">
            <label class="form-check-label" for="rememberCheck">Remember me</label>
          </div>
        </div>
        
        <button class="btn btn-primary w-100 mb-3" type="submit" name="developerLogin">Login</button>
      </form>
    </div>
  </div>
</div>

 <script>
  const emailRx = /^[^\s@]+@[^\s@]+\.[^\s@]{2,}$/;

  function togglePassword(id, btn){
    const inp = document.getElementById(id);
    if(inp.type === 'password'){ inp.type = 'text'; btn.textContent = 'Hide'; }
    else{ inp.type = 'password'; btn.textContent = 'Show'; }
  }


  function changetoUpper() {
    const input = document.getElementById('developerLoginUniqueId');
    input.value = input.value.toUpperCase();
  }
  
</script> 

</body>
</html>
