<!DOCTYPE html>
<html lang="en">
<head>
   <?= include 'components/header.php'; ?>
</head>
<body>
    <!--Navbar-->
    <nav class="navbar-nav w-100 border-bottom position-fixed">
        <div class="container-fluid d-grid grid-custom h-100">
            <div class="d-flex">
               <div class="menu-key d-flex justify-content-center align-items-center h-100 color-gr pr-3">
                   <ion-icon name="menu-outline" class="fs-22 "></ion-icon>
               </div>
               <div class="logo d-flex justify-content-center align-items-center h-100">
                   <img src="<?= '../assets/imgs/logo.white.png' ?>"/>
               </div>
            </div>
            <form class=" d-flex justify-content-center align-items-center h-100 position-relative">
                <input class="form-control fs-12 fw-500" type="search" placeholder="Search...">
                <label class="position-absolute color-wh ">
                   <ion-icon name="search-outline"></ion-icon>
                </label>
            </form>
            <div class="sign d-flex justify-content-end align-items-center pr-3">
                <p class="fs-14 fw-500  mb-0 d-flex justify-content-end align-items-center color-gr mr-3"><ion-icon name="search-outline"></ion-icon></p>
                <p class="fs-12 fw-500  mb-0 d-flex justify-content-end align-items-center color-gr"><ion-icon name="person-circle-outline" class="fs-20 pr-2"></ion-icon><span>Sign in / Register</span></p>
            </div>
        </div>
    </nav> 
    <nav></nav>
    <!--Container-->
    <div class="tb-container d-flex">
        <!-- sidebar -->
        <aside class="">
            <div class="position-fixed border-right pl-4 pt-4 content">
                 <p class="color-gr fs-12"><span>Browse</span></p>
                 <ul class="navbar-nav">
                     <li class="nav-item color-sv"><ion-icon name="logo-firefox"></ion-icon><span>Discover</span></li>
                     <li class="nav-item color-sv"><ion-icon name="radio-outline"></ion-icon><span>Browse</span></li>
                     <li class="nav-item color-sv"><ion-icon name="apps-outline"></ion-icon><span>New Release</span></li>
                     <li class="nav-item color-sv"><ion-icon name="bonfire-outline"></ion-icon><span>Popular</span></li>
                     <li class="nav-item color-sv"><ion-icon name="analytics-outline"></ion-icon><span>Charts</span></li>
                 </ul>
                 <p class="color-gr fs-12 mt-4 splitter"><span>Users</span></p>
                 <ul class="navbar-nav">
                     <li class="nav-item color-sv"><ion-icon name="grid-outline"></ion-icon><span>Playlists</span></li>
                     <li class="nav-item color-sv"><ion-icon name="people-outline"></ion-icon><span>Profile</span></li>
                     <li class="nav-item color-sv"><ion-icon name="log-in-outline"></ion-icon><span>Login</span></li>
                     <li class="nav-item d-flex justify-content-start align-item-center">
                         <label class="switch">
                             <input type="checkbox" class="d-none" checked>
                             <span class="slider round d-flex justify-content-center align-items-center"></span>
                         </label>
                         <p><span>Dark Mode</span></p>
                     </li>
                 </ul>
            </div>
        </aside>
        <Div class="tb-page d-flex flex-column contaier mt-3">
           <?= print_r(auth::user()); ?>
        </Div>
    </div>
    <?= include('components/footer.php'); ?>
</body>
</html>
