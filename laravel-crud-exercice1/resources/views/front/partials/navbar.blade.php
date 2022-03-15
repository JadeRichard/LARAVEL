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
      <a href="{{ route("back.users.all") }}">
        <i class='bx bx-grid-alt'></i>
        <span class="links_name">Users</span>
      </a>
       <span class="tooltip">Users</span>
    </li>
    <li>
      <a href= "{{ route("back.cars.all") }}" >
       <i class='bx bx-user' ></i>
       <span class="links_name">Cars</span>
     </a>
     <span class="tooltip">Cars</span>
   </li>
   <li>
    <a href= "{{ route("back.teams.all") }}" >
       <i class='bx bx-chat' ></i>
       <span class="links_name">Teams</span>
     </a>
     <span class="tooltip">Teams</span>
   </li>
   <li>
    <a href= "{{ route("back.articles.all") }}" >
       <i class='bx bx-pie-chart-alt-2' ></i>
       <span class="links_name">Articles</span>
     </a>
     <span class="tooltip">Articles</span>
   </li>
   
   
   
  </ul>
</div>
