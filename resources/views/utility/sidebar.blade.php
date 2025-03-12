

<div class="container-fluid">
    <div class="row flex-nowrap">
        <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark">
           
            <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">

                <div class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                    @if( $user_role == 0)
                    No role yet
                </div>
                    @else
                <div class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none fs-5 d-none d-sm-inline">
                    You have role
                </div>
                    @endif
            
                
                <div class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none fs-5 d-none d-sm-inline">
                    Welcome, {{ $user_name }}
                </div>


                <a href="/" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                    <span class="fs-5 d-none d-sm-inline">Menu</span>
                    
                </a>
                <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu" role="tablist">
                    <li class="nav-item">
                        <a href="/welcome" class="nav-link align-middle px-0" data-bs-toggle="tab" role="tab">
                            <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline">Avvanz</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#dashboard" class="nav-link px-0 align-middle" data-bs-toggle="tab" role="tab">
                            <i class="fs-4 bi-speedometer2"></i> <span class="ms-1 d-none d-sm-inline">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#orders" class="nav-link px-0 align-middle" data-bs-toggle="tab" role="tab">
                            <i class="fs-4 bi-table"></i> <span class="ms-1 d-none d-sm-inline">Orders</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#bootstrap" class="nav-link px-0 align-middle" data-bs-toggle="tab" role="tab">
                            <i class="fs-4 bi-bootstrap"></i> <span class="ms-1 d-none d-sm-inline">Bootstrap</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#products" class="nav-link px-0 align-middle" data-bs-toggle="tab" role="tab">
                            <i class="fs-4 bi-grid"></i> <span class="ms-1 d-none d-sm-inline">Products</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#customers" class="nav-link px-0 align-middle" data-bs-toggle="tab" role="tab">
                            <i class="fs-4 bi-people"></i> <span class="ms-1 d-none d-sm-inline">Customers</span>
                        </a>
                    </li>
                </ul>
                <hr>
                <div class="dropdown pb-4">
                    <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="https://github.com/mdo.png" alt="hugenerd" width="30" height="30" class="rounded-circle">
                        <span class="d-none d-sm-inline mx-1">loser</span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                        <li><a class="dropdown-item" href="#">New project...</a></li>
                        <li><a class="dropdown-item" href="#">Settings</a></li>
                        <li><a class="dropdown-item" href="#">Profile</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Sign out</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col py-3 tab-content">
            <div class="tab-pane fade" id="home" role="tabpanel">Home content</div>
            <div class="tab-pane fade" id="dashboard" role="tabpanel">Dashboard content</div>
            <div class="tab-pane fade" id="orders" role="tabpanel">Orders content</div>
            <div class="tab-pane fade" id="bootstrap" role="tabpanel">Bootstrap content</div>
            <div class="tab-pane fade" id="products" role="tabpanel">Products content</div>
            <div class="tab-pane fade" id="customers" role="tabpanel">Customers content</div>
        </div>
    </div>
</div>
