<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Profil</title>
  <style>
    body {
    font-family: sans-serif;
    margin: 0;
    padding: 0;
    background-color: #E8E8E8;
  }
  
  header {
    text-align: center;
    background-color: #F4F4F2;
    padding: 20px;
  }
  
  .container {
    max-width: 960px;
    margin: 0 auto;
  }
  
  main {
    padding: 20px;
  }
  
  .profile {
    text-align: center;
  }
  
  .profile img {
    max-width: 150px;
    border-radius: 50%;
  }
  
  .profile h2 {
    font-size: 24px;
    margin-bottom: 10px;
  }
  
  .profile p {
    font-size: 16px;
    margin-bottom: 20px;
  }
  
  .social-media {
    text-align: center;
  }
  
  .social-media li {
    display: inline-block;
    width: 25%;
    margin: 0 auto;
  }
  
  .social-media img {
    max-width: 20%;
  }
  
  footer {
    text-align: center;
    background-color: #BBBFCA;
    padding: 20px;
  }
  </style>
</head>
<body>
  <header>
    <div class="container">
      <h1>Profil Pribadi</h1>
    </div>
  </header>
  <main>
    <section class="profile">
      <div class="container">
        <img src="https://storage.googleapis.com/profile-app/profile.jpg" alt="Foto Profil">
        <h2>Nama</h2>
        <p>Bagus Angkasawan Sumantri Putra</p>
        <h2>Email</h2>
        <p>bagusasp01@gmail.com</p>
        <h2>No. HP</h2>
        <p>088210397399</p>
      </div>
    </section>
    <section class="social-media">
        <div class="container">
          <h2>Sosial Media</h2>
          <ul>
            <li>
              <a href="https://www.github.com/bagusasp">
                <img src="https://storage.googleapis.com/profile-app/img/github.svg" alt="GitHub">
              </a>
            </li>
            <li>
              <a href="https://www.instagram.com/bagusangkasawan">
                <img src="https://storage.googleapis.com/profile-app/img/instagram.svg" alt="Instagram">
              </a>
            </li>
            <li>
              <a href="https://www.linkedin.com/in/bagus-angkasawan-sumantri-putra">
                <img src="https://storage.googleapis.com/profile-app/img/linkedin.svg" alt="LinkedIn">
              </a>
            </li>
          </ul>
        </div>
      </section>
  </main>
  <footer>
    <div class="container">
      <p>Copyright &copy; 2023</p>
    </div>
  </footer>
</body>
</html>
