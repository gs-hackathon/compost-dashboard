<main class="main-content mt-1 border-radius-lg">
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur"
        navbar-scroll="true">
        <div class="container-fluid py-1 px-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                    <li class="breadcrumb-item text-md"><a class="opacity-5 text-dark" href="javascript:;">Pages</a>
                    </li>
                    <li class="breadcrumb-item text-sm text-dark active text-capitalize" aria-current="page">
                        {{ str_replace('-', ' ', Route::currentRouteName()) }}</li>
                </ol>
                <h6 class="font-weight-bolder mb-0 text-capitalize">
                    {{ str_replace('-', ' ', Route::currentRouteName()) }}</h6>
            </nav>
            <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4 d-flex justify-content-end" id="navbar">
                <ul class="navbar-nav ms-md-3 pe-md-3 justify-content-end">
                    <li class="nav-item d-flex align-items-center">
                        <a href="javascript:;" class="nav-link text-body font-weight-bold px-0">
                            Points to Give: <span class="text-dark">4560 <i class="fa fa-star text-warning"></i></span>
                        </a>
                    </li>
                    <li class="nav-item dropdown d-flex align-items-center" style="margin-left: 2vw;">
                        <a href="javascript:;" class="nav-link text-body p-0" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa fa-user cursor-pointer"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end px-2 py-3 me-sm-n4" aria-labelledby="dropdownMenuButton">
                            <div class="sidenav-toggler-inner" style="width: 100%!important;">
                                <p class="mb-0 user-name font-weight-bold d-flex">Mirhan Almendi</p>
                                <i class="sidenav-toggler-line bg-black"></i>
                                <i class="sidenav-toggler-line bg-white"></i>
                                <a href="{{ route('profile') }}" class="nav-link text-body p-0 d-flex align-items-center">
                                    <i class="fa fa-user me-2"></i> Profile
                                </a>
                                <i class="sidenav-toggler-line bg-white"></i>
                                <a href="javascript:;" class="nav-link text-body p-0 d-flex align-items-center">
                                <i class="fa fa-sign-out-alt me-2"></i> <span class="d-sm-inline d-none {{ in_array(request()->route()->getName(),['profile', 'my-profile']) ? 'text-white' : '' }}" wire:click="logout">Logout</span>
                                </a>
                                <i class="sidenav-toggler-line bg-white"></i>
                                <a href="javascript:;" class="nav-link text-body p-0 d-flex align-items-center">
                                    <i class="fa fa-cog me-2"></i> Settings
                                </a>
                                <i class="sidenav-toggler-line bg-white"></i>
                                <a href="javascript:;" class="nav-link text-body p-0 d-flex align-items-center">
                                    <i class="fa fa-question-circle me-2"></i> Help
                                </a>
                            </div>
                        </ul>
                    </li>
                    <li class="nav-item dropdown d-flex align-items-center" style="margin-left: 2vw;">
                        <a href="javascript:;" class="nav-link text-body p-0" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa fa-bell cursor-pointer"></i>
                        </a>
                        <ul class="dropdown-menu  dropdown-menu-end  px-2 py-3 me-sm-n4" aria-labelledby="dropdownMenuButton">
                            <li class="mb-2">
                                <a class="dropdown-item border-radius-md" href="javascript:;">
                                    <div class="d-flex py-1">
                                        <div class="my-auto">
                                            <img src="../assets/img/icons/delivery-man.png" class="avatar avatar-sm  me-3 ">
                                        </div>
                                        <div class="d-flex flex-column justify-content-center">
                                            <h6 class="text-sm font-weight-normal mb-1">
                                                <span class="font-weight-bold">Logistic Team #7</span> picked up from <span class="font-weight-bold">location #2</span> on Zincirlikuyu, İstanbul
                                            </h6>
                                            <p class="text-xs text-secondary mb-0">
                                                <i class="fa fa-clock me-1"></i>
                                                10 minutes ago
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="mb-2">
                                <a class="dropdown-item border-radius-md" href="javascript:;">
                                    <div class="d-flex py-1">
                                        <div class="my-auto">
                                            <img src="../assets/img/icons/location.png" class="avatar avatar-sm  me-3 ">
                                        </div>
                                        <div class="d-flex flex-column justify-content-center">
                                            <h6 class="text-sm font-weight-normal mb-1">
                                                <span class="font-weight-bold">Logistic Team #7</span> are at <span class="font-weight-bold">location #2</span> on Zincirlikuyu, İstanbul
                                            </h6>
                                            <p class="text-xs text-secondary mb-0">
                                                <i class="fa fa-clock me-1"></i>
                                                13 minutes ago
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="mb-2">
                                <a class="dropdown-item border-radius-md" href="javascript:;">
                                    <div class="d-flex py-1">
                                    <div class="my-auto">
                                            <img src="../assets/img/icons/pick-up-truck.png" class="avatar avatar-sm  me-3 ">
                                        </div>
                                        <div class="d-flex flex-column justify-content-center">
                                            <h6 class="text-sm font-weight-normal mb-1">
                                                <span class="font-weight-bold">Logistic Team #1</span> are on their way to Beşiktaş, İstanbul
                                            </h6>
                                            <p class="text-xs text-secondary mb-0">
                                                <i class="fa fa-clock me-1"></i>
                                                36 minutes ago
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item border-radius-md" href="javascript:;">
                                    <div class="d-flex py-1">
                                    <div class="my-auto">
                                            <img src="../assets/img/icons/pickup-car.png" class="avatar avatar-sm  me-3 ">
                                        </div>
                                        <div class="d-flex flex-column justify-content-center">
                                            <h6 class="text-sm font-weight-normal mb-1">
                                                <span class="font-weight-bold">Logistic Team #5</span> are on their way back to the warehouse
                                            </h6>
                                            <p class="text-xs text-secondary mb-0">
                                                <i class="fa fa-clock me-1"></i>
                                                1 hour ago
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item border-radius-md" href="javascript:;">
                                    <div class="d-flex py-1">
                                    <div class="my-auto">
                                            <img src="../assets/img/icons/notification.png" class="avatar avatar-sm  me-3 ">
                                        </div>
                                        <div class="d-flex flex-column justify-content-center">
                                            <h6 class="text-sm font-weight-normal mb-1">
                                                <span class="font-weight-bold">New pick-up request</span> from near Beşiktaş, İstanbul
                                            </h6>
                                            <p class="text-xs text-secondary mb-0">
                                                <i class="fa fa-clock me-1"></i>
                                                2.5 hours ago
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

