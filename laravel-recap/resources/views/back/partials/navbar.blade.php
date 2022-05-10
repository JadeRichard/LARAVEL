
  <div class="sidebar">
    <div class="logo-details">
      <i class='bx bxl-c-plus-plus icon'></i>
        <div class="logo_name">CodingLab</div>
        <i class='bx bx-menu' id="btn" ></i>
    </div>
    <ul class="nav-list">
      <li>
          <i class='bx bx-search' ></i>
         <input type="text" placeholder="Search...">
         <span class="tooltip">Search</span>
      </li>
      <li>
        <a href="{{ route('dashboard') }}">
          <i class='bx bx-grid-alt'></i>
          <span class="links_name">Dashboard</span>
        </a>
         <span class="tooltip">Dashboard</span>
      </li>
      <li>
       <a href="{{ route('users.index') }}">
         <i class='bx bx-user' ></i>
         <span class="links_name">Users</span>
       </a>
       <span class="tooltip">Users</span>
     </li>
     <li>
       <a href="{{ route('banners.index') }}">
         <i class='bx bx-chat' ></i>
         <span class="links_name">Banner</span>
       </a>
       <span class="tooltip">Banner</span>
     </li>
     <li>
       <a href="{{ route('services.index') }}">
         <i class='bx bx-pie-chart-alt-2' ></i>
         <span class="links_name">Services</span>
       </a>
       <span class="tooltip">Services</span>
     </li>
     <li>
       <a href="{{ route('testimonials.index') }}">
         <i class='bx bx-cart-alt' ></i>
         <span class="links_name">Testimonials</span>
       </a>
       <span class="tooltip">Testimonials</span>
     </li>
     <li>
       <a href="{{ route('images.index') }}">
         <i class='bx bx-heart' ></i>
         <span class="links_name">Images</span>
       </a>
       <span class="tooltip">Images</span>
     </li>
     
     <li class="profile">
         <div class="profile-details">
           <!--<img src="profile.jpg" alt="profileImg">-->
           
         </div>
         <form method="POST" action="{{ route('logout') }}">
          @csrf
          <div :href="route('logout')"
              style="cursor: pointer"
              onclick="event.preventDefault();
                          this.closest('form').submit();">
              {{ __('Log Out') }}
      </form>
     </li>
    </ul>
  </div>
  

