<div class="offcanvas offcanvas-start sidebar-nav " tabindex="-1" id="sidebar" aria-labelledby="sidebar">
      
        
    <ul class="navbar-nav my-2">
      <h5 class="offcanvas-title" id="offcanvasLabel">Mega Games Store</h5>
    </ul>
    <ul class="navbar-nav">
      <div class="offcanvas-body sidebar-body">
        <li class="d-flex">
          <img src="img/ico/home-ico.svg" alt="">
          <a href="{{ url('home') }}" class="a-nav"> Beranda</a>
        </li>
        <li class="mt-4 d-flex">
          <img src="img/ico/about-ico.svg" alt="">
          <a href="{{ url('about') }}" class="a-nav">Tentang Kami</a>
        </li>
        <li class="mt-4">
          <a href="#" class="a-nav"></a>
        </li>
        <li class="mt-4">
          <a href="#" class="a-nav"></a>
        </li>
      </div>
    </ul>
  

</div>
<nav class="navbar navbar-light bg-light napbar" style="border-radius: 15px;">
<div class="container-fluid">

<button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebar" aria-controls="sidebar" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
</button>

<a href="{{ url('home') }}" class="navbar-brand">
  <img src="img/Mega_games.png" alt="" class="p-0 m-0">
</a>
<div class="wrapper">
<div class="search-box">
  <input type="text" class="search" placeholder="Search">
  
  <button type="submit" class="search-btn">
    <img src="img/round_search_black.png" class="img-search rounded-circle" alt="">
  </button>
</div>
</div>
</div>
</nav>