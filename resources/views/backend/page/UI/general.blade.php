@extends('backend.layouts.master')
@section('content')
<main class="app-main"> <!--begin::App Content Header-->
            <div class="app-content-header"> <!--begin::Container-->
                <div class="container-fluid"> <!--begin::Row-->
                    <div class="row">
                        <div class="col-sm-6">
                            <h3 class="mb-0">General UI Elements</h3>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-end">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page"> General UI Elements </li>
                            </ol>
                        </div>
                    </div> <!--end::Row-->
                </div> <!--end::Container-->
            </div> <!--end::App Content Header--> <!--begin::App Content-->
            <div class="app-content"> <!--begin::Container-->
                <div class="container-fluid"> <!--begin::Row-->
                    <div class="row g-4"> <!--begin::Col-->
                        <div class="col-12">
                            <div class="callout callout-info">
                                For detailed documentation of Components visit <a href="https://getbootstrap.com/docs/5.3/components/" target="_blank" rel="noopener noreferrer" class="callout-link">
                                    Bootstrap Components
                                </a> </div>
                        </div> <!--end::Col--> <!--begin::Col-->
                        <div class="col-md-6"> <!--begin::Accordion-->
                            <div class="card card-primary card-outline mb-4"> <!--begin::Header-->
                                <div class="card-header">
                                    <div class="card-title">Accordion</div>
                                </div> <!--end::Header--> <!--begin::Body-->
                                <div class="card-body">
                                    <div class="accordion" id="accordionExample">
                                        <div class="accordion-item">
                                            <h2 class="accordion-header"> <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                    Accordion Item #1
                                                </button> </h2>
                                            <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                                                <div class="accordion-body"> <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin
                                                    adds the appropriate classes that we use to style
                                                    each element. These classes control the overall
                                                    appearance, as well as the showing and hiding via
                                                    CSS transitions. You can modify any of this with
                                                    custom CSS or overriding our default variables. It's
                                                    also worth noting that just about any HTML can go
                                                    within the <code>.accordion-body</code>, though the
                                                    transition does limit overflow.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header"> <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                    Accordion Item #2
                                                </button> </h2>
                                            <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                <div class="accordion-body"> <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin
                                                    adds the appropriate classes that we use to style
                                                    each element. These classes control the overall
                                                    appearance, as well as the showing and hiding via
                                                    CSS transitions. You can modify any of this with
                                                    custom CSS or overriding our default variables. It's
                                                    also worth noting that just about any HTML can go
                                                    within the <code>.accordion-body</code>, though the
                                                    transition does limit overflow.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header"> <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                    Accordion Item #3
                                                </button> </h2>
                                            <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                <div class="accordion-body"> <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin
                                                    adds the appropriate classes that we use to style
                                                    each element. These classes control the overall
                                                    appearance, as well as the showing and hiding via
                                                    CSS transitions. You can modify any of this with
                                                    custom CSS or overriding our default variables. It's
                                                    also worth noting that just about any HTML can go
                                                    within the <code>.accordion-body</code>, though the
                                                    transition does limit overflow.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <!--end::Body-->
                            </div> <!--end::Accordion--> <!--begin::Alert-->
                            <div class="card card-success card-outline mb-4"> <!--begin::Header-->
                                <div class="card-header">
                                    <div class="card-title">Alert</div>
                                </div> <!--end::Header--> <!--begin::Body-->
                                <div class="card-body">
                                    <div class="alert alert-primary" role="alert">
                                        A simple primary alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
                                    </div>
                                    <div class="alert alert-secondary" role="alert">
                                        A simple secondary alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
                                    </div>
                                    <div class="alert alert-success" role="alert">
                                        A simple success alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
                                    </div>
                                    <div class="alert alert-danger" role="alert">
                                        A simple danger alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
                                    </div>
                                    <div class="alert alert-warning" role="alert">
                                        A simple warning alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
                                    </div>
                                    <div class="alert alert-info" role="alert">
                                        A simple info alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
                                    </div>
                                    <div class="alert alert-light" role="alert">
                                        A simple light alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
                                    </div>
                                    <div class="alert alert-dark" role="alert">
                                        A simple dark alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
                                    </div>
                                </div> <!--end::Body-->
                            </div> <!--end::Alert--> <!--begin::Badge-->
                            <div class="card card-warning card-outline mb-4"> <!--begin::Header-->
                                <div class="card-header">
                                    <div class="card-title">Badge</div>
                                </div> <!--end::Header--> <!--begin::Body-->
                                <div class="card-body">
                                    <h1>
                                        Example heading <span class="badge bg-secondary">New</span> </h1>
                                    <h2>
                                        Example heading <span class="badge bg-secondary">New</span> </h2>
                                    <h3>
                                        Example heading <span class="badge bg-secondary">New</span> </h3>
                                    <h4>
                                        Example heading <span class="badge bg-secondary">New</span> </h4>
                                    <h5>
                                        Example heading <span class="badge bg-secondary">New</span> </h5>
                                    <h6>
                                        Example heading <span class="badge bg-secondary">New</span> </h6>
                                    <hr> <button type="button" class="btn btn-primary">
                                        Notifications <span class="badge text-bg-secondary">4</span> </button>
                                    <hr> <button type="button" class="btn btn-primary position-relative">
                                        Inbox
                                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                            99+
                                            <span class="visually-hidden">unread messages</span> </span> </button>
                                    <hr> <button type="button" class="btn btn-primary position-relative">
                                        Profile
                                        <span class="position-absolute top-0 start-100 translate-middle p-2 bg-danger border border-light rounded-circle"> <span class="visually-hidden">New alerts</span> </span> </button>
                                    <hr> <span class="badge text-bg-primary">Primary</span> <span class="badge text-bg-secondary">Secondary</span> <span class="badge text-bg-success">Success</span> <span class="badge text-bg-danger">Danger</span> <span class="badge text-bg-warning">Warning</span> <span class="badge text-bg-info">Info</span> <span class="badge text-bg-light">Light</span> <span class="badge text-bg-dark">Dark</span>
                                    <hr> <span class="badge rounded-pill text-bg-primary">Primary</span> <span class="badge rounded-pill text-bg-secondary">Secondary</span> <span class="badge rounded-pill text-bg-success">Success</span> <span class="badge rounded-pill text-bg-danger">Danger</span> <span class="badge rounded-pill text-bg-warning">Warning</span> <span class="badge rounded-pill text-bg-info">Info</span> <span class="badge rounded-pill text-bg-light">Light</span> <span class="badge rounded-pill text-bg-dark">Dark</span>
                                </div> <!--end::Body-->
                            </div> <!--end::Badge--> <!--begin::Button-->
                            <div class="card card-danger card-outline mb-4"> <!--begin::Header-->
                                <div class="card-header">
                                    <div class="card-title">Button</div>
                                </div> <!--end::Header--> <!--begin::Body-->
                                <div class="card-body"> <button type="button" class="btn btn-primary mb-2">Primary</button> <button type="button" class="btn btn-secondary mb-2">Secondary</button> <button type="button" class="btn btn-success mb-2">Success</button> <button type="button" class="btn btn-danger mb-2">Danger</button> <button type="button" class="btn btn-warning mb-2">Warning</button> <button type="button" class="btn btn-info mb-2">Info</button> <button type="button" class="btn btn-light mb-2">Light</button> <button type="button" class="btn btn-dark mb-2">Dark</button> <button type="button" class="btn btn-link mb-2">Link</button>
                                    <hr> <button type="button" class="btn btn-primary mb-2" disabled>Primary (disabled)</button> <button type="button" class="btn btn-secondary mb-2" disabled>Secondary (disabled)</button> <button type="button" class="btn btn-success mb-2" disabled>Success (disabled)</button> <button type="button" class="btn btn-danger mb-2" disabled>Danger (disabled)</button> <button type="button" class="btn btn-warning mb-2" disabled>Warning (disabled)</button> <button type="button" class="btn btn-info mb-2" disabled>Info (disabled)</button>
                                    <hr> <button type="button" class="btn btn-outline-primary mb-2">Primary</button> <button type="button" class="btn btn-outline-secondary mb-2">Secondary</button> <button type="button" class="btn btn-outline-success mb-2">Success</button> <button type="button" class="btn btn-outline-danger mb-2">Danger</button> <button type="button" class="btn btn-outline-warning mb-2">Warning</button> <button type="button" class="btn btn-outline-info mb-2">Info</button> <button type="button" class="btn btn-outline-light mb-2">Light</button> <button type="button" class="btn btn-outline-dark mb-2">Dark</button>
                                    <hr> <button type="button" class="btn btn-primary btn-lg">Large button</button> <button type="button" class="btn btn-warning btn-sm">Small button</button> <button type="button" class="btn btn-danger" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">Custom button</button>
                                </div> <!--end::Body-->
                            </div> <!--end::Button-->
                        </div> <!--end::Col--> <!--begin::Col-->
                        <div class="col-md-6"> <!--begin::Button Group-->
                            <div class="card card-info card-outline mb-4"> <!--begin::Header-->
                                <div class="card-header">
                                    <div class="card-title">Button Group</div>
                                </div> <!--end::Header--> <!--begin::Body-->
                                <div class="card-body">
                                    <div class="btn-group mb-2" role="group" aria-label="Basic example"> <button type="button" class="btn btn-primary">Left</button> <button type="button" class="btn btn-primary">Middle</button> <button type="button" class="btn btn-primary">Right</button> </div>
                                    <div class="btn-group mb-2" role="group" aria-label="Basic mixed styles example"> <button type="button" class="btn btn-danger">Left</button> <button type="button" class="btn btn-warning">Middle</button> <button type="button" class="btn btn-success">Right</button> </div>
                                    <div class="btn-group mb-2" role="group" aria-label="Basic outlined example"> <button type="button" class="btn btn-outline-primary">Left</button> <button type="button" class="btn btn-outline-primary">Middle</button> <button type="button" class="btn btn-outline-primary">Right</button> </div>
                                    <hr>
                                    <div class="btn-group mb-2" role="group" aria-label="Basic checkbox toggle button group"> <input type="checkbox" class="btn-check" id="btncheck1" autocomplete="off"> <label class="btn btn-outline-primary" for="btncheck1">Checkbox 1</label> <input type="checkbox" class="btn-check" id="btncheck2" autocomplete="off"> <label class="btn btn-outline-primary" for="btncheck2">Checkbox 2</label> <input type="checkbox" class="btn-check" id="btncheck3" autocomplete="off"> <label class="btn btn-outline-primary" for="btncheck3">Checkbox 3</label> </div>
                                    <div class="btn-group mb-2" role="group" aria-label="Basic radio toggle button group"> <input type="radio" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off" checked> <label class="btn btn-outline-primary" for="btnradio1">Radio 1</label> <input type="radio" class="btn-check" name="btnradio" id="btnradio2" autocomplete="off"> <label class="btn btn-outline-primary" for="btnradio2">Radio 2</label> <input type="radio" class="btn-check" name="btnradio" id="btnradio3" autocomplete="off"> <label class="btn btn-outline-primary" for="btnradio3">Radio 3</label> </div>
                                    <hr>
                                    <div class="btn-group mb-2" role="group" aria-label="Button group with nested dropdown"> <button type="button" class="btn btn-primary">1</button> <button type="button" class="btn btn-primary">2</button>
                                        <div class="btn-group" role="group"> <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                Dropdown
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li> <a class="dropdown-item" href="#">Dropdown link</a> </li>
                                                <li> <a class="dropdown-item" href="#">Dropdown link</a> </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div> <!--end::Body-->
                            </div> <!--end::Button Group--> <!--begin::Collapse-->
                            <div class="card card-primary card-outline mb-4"> <!--begin::Header-->
                                <div class="card-header">
                                    <div class="card-title">Collapse</div>
                                </div> <!--end::Header--> <!--begin::Body-->
                                <div class="card-body">
                                    <p class="d-inline-flex gap-1"> <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                                            Link with href
                                        </a> <button class="btn btn-success" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                                            Button with data-bs-target
                                        </button> </p>
                                    <div class="collapse" id="collapseExample">
                                        <div class="card card-body">
                                            Some placeholder content for the collapse component.
                                            This panel is hidden by default but revealed when the
                                            user activates the relevant trigger.
                                        </div>
                                    </div>
                                </div> <!--end::Body-->
                            </div> <!--end::Collapse--> <!--begin::Dropdowns-->
                            <div class="card card-success card-outline mb-4"> <!--begin::Header-->
                                <div class="card-header">
                                    <div class="card-title">Dropdowns</div>
                                </div> <!--end::Header--> <!--begin::Body-->
                                <div class="card-body">
                                    <div class="btn-group"> <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                            Primary
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Action</a></li>
                                            <li> <a class="dropdown-item" href="#">Another action</a> </li>
                                            <li> <a class="dropdown-item" href="#">Something else here</a> </li>
                                            <li>
                                                <hr class="dropdown-divider">
                                            </li>
                                            <li> <a class="dropdown-item" href="#">Separated link</a> </li>
                                        </ul>
                                    </div>
                                    <div class="btn-group"> <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                            Secondary
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Action</a></li>
                                            <li> <a class="dropdown-item" href="#">Another action</a> </li>
                                            <li> <a class="dropdown-item" href="#">Something else here</a> </li>
                                            <li>
                                                <hr class="dropdown-divider">
                                            </li>
                                            <li> <a class="dropdown-item" href="#">Separated link</a> </li>
                                        </ul>
                                    </div>
                                    <hr>
                                    <div class="btn-group"> <button type="button" class="btn btn-danger">Danger Split</button> <button type="button" class="btn btn-danger dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false"> <span class="visually-hidden">Toggle Dropdown</span> </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Action</a></li>
                                            <li> <a class="dropdown-item" href="#">Another action</a> </li>
                                            <li> <a class="dropdown-item" href="#">Something else here</a> </li>
                                            <li>
                                                <hr class="dropdown-divider">
                                            </li>
                                            <li> <a class="dropdown-item" href="#">Separated link</a> </li>
                                        </ul>
                                    </div>
                                    <div class="btn-group"> <button type="button" class="btn btn-warning">Warning Split</button> <button type="button" class="btn btn-warning dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false"> <span class="visually-hidden">Toggle Dropdown</span> </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Action</a></li>
                                            <li> <a class="dropdown-item" href="#">Another action</a> </li>
                                            <li> <a class="dropdown-item" href="#">Something else here</a> </li>
                                            <li>
                                                <hr class="dropdown-divider">
                                            </li>
                                            <li> <a class="dropdown-item" href="#">Separated link</a> </li>
                                        </ul>
                                    </div>
                                </div> <!--end::Body-->
                            </div> <!--end::Dropdowns--> <!--begin::List Group-->
                            <div class="card card-warning card-outline mb-4"> <!--begin::Header-->
                                <div class="card-header">
                                    <div class="card-title">List Group</div>
                                </div> <!--end::Header--> <!--begin::Body-->
                                <div class="card-body">
                                    <div class="list-group"> <a href="#" class="list-group-item list-group-item-action active" aria-current="true">
                                            The current link item
                                        </a> <a href="#" class="list-group-item list-group-item-action">A second link item</a> <a href="#" class="list-group-item list-group-item-action">A third link item</a> <a href="#" class="list-group-item list-group-item-action">A fourth link item</a> <a class="list-group-item list-group-item-action disabled" aria-disabled="true">A disabled link item</a> </div>
                                </div> <!--end::Body-->
                            </div> <!--end::List Group--> <!--begin::Navbar-->
                            <div class="card card-danger card-outline mb-4"> <!--begin::Header-->
                                <div class="card-header">
                                    <div class="card-title">Navbar</div>
                                </div> <!--end::Header--> <!--begin::Body-->
                                <div class="card-body">
                                    <nav class="navbar navbar-expand-lg bg-body-tertiary">
                                        <div class="container-fluid"> <a class="navbar-brand" href="#">Navbar</a> <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
                                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                                    <li class="nav-item"> <a class="nav-link active" aria-current="page" href="#">Home</a> </li>
                                                    <li class="nav-item"> <a class="nav-link" href="#">Link</a> </li>
                                                    <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                            Dropdown
                                                        </a>
                                                        <ul class="dropdown-menu">
                                                            <li> <a class="dropdown-item" href="#">Action</a> </li>
                                                            <li> <a class="dropdown-item" href="#">Another action</a> </li>
                                                            <li>
                                                                <hr class="dropdown-divider">
                                                            </li>
                                                            <li> <a class="dropdown-item" href="#">Something else here</a> </li>
                                                        </ul>
                                                    </li>
                                                    <li class="nav-item"> <a class="nav-link disabled" aria-disabled="true">Disabled</a> </li>
                                                </ul>
                                                <form class="d-flex" role="search"> <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"> <button class="btn btn-outline-success" type="submit">Search</button> </form>
                                            </div>
                                        </div>
                                    </nav>
                                </div> <!--end::Body-->
                            </div> <!--end::Navbar--> <!--begin::Pagination-->
                            <div class="card card-info card-outline mb-4"> <!--begin::Header-->
                                <div class="card-header">
                                    <div class="card-title">Pagination</div>
                                </div> <!--end::Header--> <!--begin::Body-->
                                <div class="card-body">
                                    <nav aria-label="Page navigation example">
                                        <ul class="pagination">
                                            <li class="page-item"> <a class="page-link" href="#">Previous</a> </li>
                                            <li class="page-item"> <a class="page-link" href="#">1</a> </li>
                                            <li class="page-item"> <a class="page-link" href="#">2</a> </li>
                                            <li class="page-item"> <a class="page-link" href="#">3</a> </li>
                                            <li class="page-item"> <a class="page-link" href="#">Next</a> </li>
                                        </ul>
                                    </nav>
                                    <hr>
                                    <nav aria-label="Page navigation example">
                                        <ul class="pagination">
                                            <li class="page-item"> <a class="page-link" href="#" aria-label="Previous"> <span aria-hidden="true">&laquo;</span> </a> </li>
                                            <li class="page-item"> <a class="page-link" href="#">1</a> </li>
                                            <li class="page-item"> <a class="page-link" href="#">2</a> </li>
                                            <li class="page-item"> <a class="page-link" href="#">3</a> </li>
                                            <li class="page-item"> <a class="page-link" href="#" aria-label="Next"> <span aria-hidden="true">&raquo;</span> </a> </li>
                                        </ul>
                                    </nav>
                                    <hr>
                                    <nav aria-label="...">
                                        <ul class="pagination">
                                            <li class="page-item disabled"> <a class="page-link">Previous</a> </li>
                                            <li class="page-item active" aria-current="page"> <a class="page-link" href="#">1</a> </li>
                                            <li class="page-item"> <a class="page-link" href="#">2</a> </li>
                                            <li class="page-item"> <a class="page-link" href="#">3</a> </li>
                                            <li class="page-item"> <a class="page-link" href="#">Next</a> </li>
                                        </ul>
                                    </nav>
                                </div> <!--end::Body-->
                            </div> <!--end::Pagination--> <!--begin::Placeholder-->
                            <div class="card card-secondary card-outline mb-4"> <!--begin::Header-->
                                <div class="card-header">
                                    <div class="card-title">Placeholder</div>
                                </div> <!--end::Header--> <!--begin::Body-->
                                <div class="card-body">
                                    <div class="card" aria-hidden="true">
                                        <div class="card-body">
                                            <h5 class="card-title placeholder-glow"> <span class="placeholder col-6"></span> </h5>
                                            <p class="card-text placeholder-glow"> <span class="placeholder col-7"></span> <span class="placeholder col-4"></span> <span class="placeholder col-4"></span> <span class="placeholder col-6"></span> <span class="placeholder col-8"></span> </p>
                                        </div>
                                    </div>
                                </div> <!--end::Body-->
                            </div> <!--end::Placeholder--> <!--begin::Progress-->
                            <div class="card card-primary card-outline mb-4"> <!--begin::Header-->
                                <div class="card-header">
                                    <div class="card-title">Progress</div>
                                </div> <!--end::Header--> <!--begin::Body-->
                                <div class="card-body">
                                    <div class="progress mb-2" role="progressbar" aria-label="Success example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar bg-success" style="width: 25%; border-radius: 0.375rem;"></div>
                                    </div>
                                    <div class="progress mb-2" role="progressbar" aria-label="Default striped example" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar" style="width: 10%; border-radius: 0.375rem;"></div>
                                    </div>
                                    <div class="progress mb-2" role="progressbar" aria-label="Info striped example" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar progress-bar-striped bg-info" style="width: 50%; border-radius: 0.375rem;"></div>
                                    </div>
                                    <div class="progress mb-2" role="progressbar" aria-label="Warning striped example" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning" style="width: 75%; border-radius: 0.375rem;"></div>
                                    </div>
                                    <div class="progress mb-2" role="progressbar" aria-label="Danger striped example" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" style="width: 100%; border-radius: 0.375rem;"></div>
                                    </div>
                                </div> <!--end::Body-->
                            </div> <!--end::Progress--> <!--begin::Toast-->
                            <div class="card card-primary card-outline mb-4"> <!--begin::Header-->
                                <div class="card-header">
                                    <div class="card-title">Toast</div>
                                </div> <!--end::Header--> <!--begin::Body-->
                                <div class="card-body"> <button type="button" class="btn btn-primary mb-2" data-bs-toggle="toast" data-bs-target="toastDefault">Show default toast</button>
                                    <hr> <button type="button" class="btn btn-primary mb-2" data-bs-toggle="toast" data-bs-target="toastPrimary">Show primary toast</button> <button type="button" class="btn btn-secondary mb-2" data-bs-toggle="toast" data-bs-target="toastSecondary">Show secondary toast</button> <button type="button" class="btn btn-success mb-2" data-bs-toggle="toast" data-bs-target="toastSuccess">Show success toast</button> <button type="button" class="btn btn-danger mb-2" data-bs-toggle="toast" data-bs-target="toastDanger">Show danger toast</button> <button type="button" class="btn btn-warning mb-2" data-bs-toggle="toast" data-bs-target="toastWarning">Show warning toast</button> <button type="button" class="btn btn-info mb-2" data-bs-toggle="toast" data-bs-target="toastInfo">Show info toast</button> <button type="button" class="btn btn-light mb-2" data-bs-toggle="toast" data-bs-target="toastLight">Show light toast</button> <button type="button" class="btn btn-dark mb-2" data-bs-toggle="toast" data-bs-target="toastDark">Show dark toast</button>
                                    <div class="toast-container position-fixed bottom-0 end-0 p-3">
                                        <div id="toastDefault" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                                            <div class="toast-header"> <i class="bi bi-circle me-2"></i> <strong class="me-auto">Bootstrap</strong> <small>11 mins ago</small> <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button> </div>
                                            <div class="toast-body">
                                                Hello, world! This is a toast message.
                                            </div>
                                        </div>
                                        <div id="toastPrimary" class="toast toast-primary" role="alert" aria-live="assertive" aria-atomic="true">
                                            <div class="toast-header"> <i class="bi bi-circle me-2"></i> <strong class="me-auto">Bootstrap</strong> <small>11 mins ago</small> <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button> </div>
                                            <div class="toast-body">
                                                Hello, world! This is a toast message.
                                            </div>
                                        </div>
                                        <div id="toastSecondary" class="toast toast-secondary" role="alert" aria-live="assertive" aria-atomic="true">
                                            <div class="toast-header"> <i class="bi bi-circle me-2"></i> <strong class="me-auto">Bootstrap</strong> <small>11 mins ago</small> <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button> </div>
                                            <div class="toast-body">
                                                Hello, world! This is a toast message.
                                            </div>
                                        </div>
                                        <div id="toastSuccess" class="toast toast-success" role="alert" aria-live="assertive" aria-atomic="true">
                                            <div class="toast-header"> <i class="bi bi-circle me-2"></i> <strong class="me-auto">Bootstrap</strong> <small>11 mins ago</small> <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button> </div>
                                            <div class="toast-body">
                                                Hello, world! This is a toast message.
                                            </div>
                                        </div>
                                        <div id="toastDanger" class="toast toast-danger" role="alert" aria-live="assertive" aria-atomic="true">
                                            <div class="toast-header"> <i class="bi bi-circle me-2"></i> <strong class="me-auto">Bootstrap</strong> <small>11 mins ago</small> <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button> </div>
                                            <div class="toast-body">
                                                Hello, world! This is a toast message.
                                            </div>
                                        </div>
                                        <div id="toastWarning" class="toast toast-warning" role="alert" aria-live="assertive" aria-atomic="true">
                                            <div class="toast-header"> <i class="bi bi-circle me-2"></i> <strong class="me-auto">Bootstrap</strong> <small>11 mins ago</small> <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button> </div>
                                            <div class="toast-body">
                                                Hello, world! This is a toast message.
                                            </div>
                                        </div>
                                        <div id="toastInfo" class="toast toast-info" role="alert" aria-live="assertive" aria-atomic="true">
                                            <div class="toast-header"> <i class="bi bi-circle me-2"></i> <strong class="me-auto">Bootstrap</strong> <small>11 mins ago</small> <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button> </div>
                                            <div class="toast-body">
                                                Hello, world! This is a toast message.
                                            </div>
                                        </div>
                                        <div id="toastLight" class="toast toast-light" role="alert" aria-live="assertive" aria-atomic="true">
                                            <div class="toast-header"> <i class="bi bi-circle me-2"></i> <strong class="me-auto">Bootstrap</strong> <small>11 mins ago</small> <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button> </div>
                                            <div class="toast-body">
                                                Hello, world! This is a toast message.
                                            </div>
                                        </div>
                                        <div id="toastDark" class="toast toast-dark" role="alert" aria-live="assertive" aria-atomic="true">
                                            <div class="toast-header"> <i class="bi bi-circle me-2"></i> <strong class="me-auto">Bootstrap</strong> <small>11 mins ago</small> <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button> </div>
                                            <div class="toast-body">
                                                Hello, world! This is a toast message.
                                            </div>
                                        </div>
                                    </div>
                                </div> <!--end::Body-->
                            </div> <!--end::Toast--> <!--begin::Tooltip-->
                            <div class="card card-primary card-outline mb-4"> <!--begin::Header-->
                                <div class="card-header">
                                    <div class="card-title">Tooltip</div>
                                </div> <!--end::Header--> <!--begin::Body-->
                                <div class="card-body">
                                    <p class="muted">
                                        Placeholder text to demonstrate some <a href="#" data-bs-toggle="tooltip" data-bs-title="Default tooltip">inline links</a> with tooltips. This is now just filler, no killer.
                                        Content placed here just to mimic the presence of <a href="#" data-bs-toggle="tooltip" data-bs-title="Another tooltip">real text</a>. And all that just to give you an idea of how tooltips
                                        would look when used in real-world situations. So
                                        hopefully you've now seen how <a href="#" data-bs-toggle="tooltip" data-bs-title="Another one here too">these tooltips on links</a> can work in practice, once you use them on <a href="#" data-bs-toggle="tooltip" data-bs-title="The last tip!">your own</a> site or project.
                                    </p>
                                </div> <!--end::Body-->
                            </div> <!--end::Toast--> <!--begin::Spinner-->
                            <div class="card card-success card-outline mb-4"> <!--begin::Header-->
                                <div class="card-header">
                                    <div class="card-title">Spinner</div>
                                </div> <!--end::Header--> <!--begin::Body-->
                                <div class="card-body">
                                    <div class="spinner-border text-primary" role="status"> <span class="visually-hidden">Loading...</span> </div>
                                    <div class="spinner-border text-secondary" role="status"> <span class="visually-hidden">Loading...</span> </div>
                                    <div class="spinner-border text-success" role="status"> <span class="visually-hidden">Loading...</span> </div>
                                    <div class="spinner-border text-danger" role="status"> <span class="visually-hidden">Loading...</span> </div>
                                    <div class="spinner-border text-warning" role="status"> <span class="visually-hidden">Loading...</span> </div>
                                    <div class="spinner-border text-info" role="status"> <span class="visually-hidden">Loading...</span> </div>
                                    <div class="spinner-border text-light" role="status"> <span class="visually-hidden">Loading...</span> </div>
                                    <div class="spinner-border text-dark" role="status"> <span class="visually-hidden">Loading...</span> </div>
                                </div> <!--end::Body-->
                            </div> <!--end::Spinner-->
                        </div> <!--end::Col-->
                    </div> <!--end::Row-->
                </div> <!--end::Container-->
            </div> <!--end::App Content-->
        </main> <!--end::App Main--> <!--begin::Footer-->
@endsection