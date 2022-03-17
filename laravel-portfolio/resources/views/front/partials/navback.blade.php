<!DOCTYPE html>
<!-- Created by CodingLab |www.youtube.com/CodingLabYT-->
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <!--<title> Responsive Sidebar Menu  | CodingLab </title>-->
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <div class="sidebar">
        <div class="logo-details">
            <i class='bx bxl-c-plus-plus icon'></i>
            <div class="logo_name">CodingLab</div>
            <i class='bx bx-menu' id="btn"></i>
        </div>
        <ul class="nav-list">
            <li>
                <i class='bx bx-search'></i>
                <input type="text" placeholder="Search...">
                <span class="tooltip">Search</span>
            </li>
            <li>
                <a href="#">
                    <i class='bx bx-grid-alt'></i>
                    <span class="links_name">Dashboard</span>
                </a>
                <span class="tooltip">Dashboard</span>
            </li>
            <li>
                <a href="{{ route('back.abouts.all') }}">
                    <i class='bx bx-user'></i>
                    <span class="links_name">About</span>
                </a>
                <span class="tooltip">About</span>
            </li>
            <li>
                <a href="{{ route('back.facts.all') }}">
                    <i class='bx bx-chat'></i>
                    <span class="links_name">Fact</span>
                </a>
                <span class="tooltip">Fact</span>
            </li>
            <li>
                <a href="{{ route('back.navlinks.all') }}">
                    <i class='bx bx-pie-chart-alt-2'></i>
                    <span class="links_name">Navlink</span>
                </a>
                <span class="tooltip">Navlink</span>
            </li>
            <li>
                <a href="{{ route('back.portfolios.all') }}">
                    <i class='bx bx-folder'></i>
                    <span class="links_name">Portfolio</span>
                </a>
                <span class="tooltip">Portfolio</span>
            </li>
            <li>
                <a href="{{ route('back.skills.all') }}">
                    <i class='bx bx-cart-alt'></i>
                    <span class="links_name">Skill</span>
                </a>
                <span class="tooltip">Skill</span>
            </li>
            <li>
                <a href="{{ route('back.testimonials.all') }}">
                    <i class='bx bx-heart'></i>
                    <span class="links_name">Testimonial</span>
                </a>
                <span class="tooltip">Testimonial</span>
            </li>
            <li>
                <a href="{{ route('back.titles.all') }}">
                    <i class='bx bx-cog'></i>
                    <span class="links_name">Title</span>
                </a>
                <span class="tooltip">Title</span>
            </li>
            <li class="profile">
                <div class="profile-details">
                    <!--<img src="profile.jpg" alt="profileImg">-->
                    <div class="name_job">
                        <div class="name">Prem Shahi</div>
                        <div class="job">Web designer</div>
                    </div>
                </div>
                <a href="/"><i class='bx bx-log-out' id="log_out"></i></a>
            </li>
        </ul>
    </div>


    <div class="container">

    </div>



    <script>
        let sidebar = document.querySelector(".sidebar");
        let closeBtn = document.querySelector("#btn");
        let searchBtn = document.querySelector(".bx-search");

        closeBtn.addEventListener("click", () => {
            sidebar.classList.toggle("open");
            menuBtnChange(); //calling the function(optional)
        });

        searchBtn.addEventListener("click", () => { // Sidebar open when you click on the search iocn
            sidebar.classList.toggle("open");
            menuBtnChange(); //calling the function(optional)
        });

        // following are the code to change sidebar button(optional)
        function menuBtnChange() {
            if (sidebar.classList.contains("open")) {
                closeBtn.classList.replace("bx-menu", "bx-menu-alt-right"); //replacing the iocns class
            } else {
                closeBtn.classList.replace("bx-menu-alt-right", "bx-menu"); //replacing the iocns class
            }
        }
    </script>
</body>

</html>
