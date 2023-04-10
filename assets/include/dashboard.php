<div class="main-content">

<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Analytics</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboards</a></li>
                            <li class="breadcrumb-item active">Analytics</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <!-- end page title -->

                <div class="row">
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-header border-0 align-items-center d-flex">
                        <h4 class="card-title mb-0 flex-grow-1">Audiences Metrics</h4>
                        <div>
                            <button type="button" class="btn btn-soft-secondary btn-sm">
                                ALL
                            </button>
                            <button type="button" class="btn btn-soft-secondary btn-sm">
                                1M
                            </button>
                            <button type="button" class="btn btn-soft-secondary btn-sm">
                                6M
                            </button>
                            <button type="button" class="btn btn-soft-primary btn-sm">
                                1Y
                            </button>
                        </div>
                    </div><!-- end card header -->
                    <div class="card-header p-0 border-0 bg-soft-light">
                        <div class="row g-0 text-center">
                            <div class="col-6 col-sm-4">
                                <div class="p-3 border border-dashed border-start-0">
                                    <h5 class="mb-1"><span class="counter-value" data-target="854">0</span>
                                        <span class="text-success ms-1 fs-12">49%<i class="ri-arrow-right-up-line ms-1 align-middle"></i></span>
                                    </h5>
                                    <p class="text-muted mb-0">Avg. Session</p>
                                </div>
                            </div>
                            <!--end col-->
                            <div class="col-6 col-sm-4">
                                <div class="p-3 border border-dashed border-start-0">
                                    <h5 class="mb-1"><span class="counter-value" data-target="1278">0</span>
                                        <span class="text-success ms-1 fs-12">60%<i class="ri-arrow-right-up-line ms-1 align-middle"></i></span>
                                    </h5>
                                    <p class="text-muted mb-0">Conversion Rate</p>
                                </div>
                            </div>
                            <!--end col-->
                            <div class="col-6 col-sm-4">
                                <div class="p-3 border border-dashed border-start-0 border-end-0">
                                    <h5 class="mb-1"><span class="counter-value" data-target="3">0</span>m
                                        <span class="counter-value" data-target="40">0</span>sec
                                        <span class="text-success ms-1 fs-12">37%<i class="ri-arrow-right-up-line ms-1 align-middle"></i></span>
                                    </h5>
                                    <p class="text-muted mb-0">Avg. Session Duration</p>
                                </div>
                            </div>
                            <!--end col-->
                        </div>
                    </div><!-- end card header -->
                    <div class="card-body p-0 pb-2">
                        <div>
                            <div id="audiences_metrics_charts" data-colors='["--vz-primary", "--vz-gray-300"]' class="apex-charts" dir="ltr"></div>
                        </div>
                    </div><!-- end card body -->
                </div><!-- end card -->
            </div><!-- end col -->

            <div class="col-xl-6">
                <div class="card card-height-100">
                    <div class="card-header align-items-center d-flex">
                        <h4 class="card-title mb-0 flex-grow-1">Audiences Sessions by Country</h4>
                        <div class="flex-shrink-0">
                            <div class="dropdown card-header-dropdown">
                                <a class="text-reset dropdown-btn" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="fw-semibold text-uppercase fs-12">Sort by: </span><span class="text-muted">Current Week<i class="mdi mdi-chevron-down ms-1"></i></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a class="dropdown-item" href="#">Today</a>
                                    <a class="dropdown-item" href="#">Last Week</a>
                                    <a class="dropdown-item" href="#">Last Month</a>
                                    <a class="dropdown-item" href="#">Current Year</a>
                                </div>
                            </div>
                        </div>
                    </div><!-- end card header -->
                    <div class="card-body p-0">
                        <div>
                            <div id="audiences-sessions-country-charts" data-colors='["--vz-info", "--vz-primary"]' class="apex-charts" dir="ltr">
                            </div>
                        </div>
                    </div><!-- end cardbody -->
                </div><!-- end card -->
            </div><!-- end col -->
        </div><!-- end row -->

        <div class="row">
            <div class="col-xl-4">
                <div class="card card-height-100">
                    <div class="card-header align-items-center d-flex">
                        <h4 class="card-title mb-0 flex-grow-1">Users by Device</h4>
                        <div class="flex-shrink-0">
                            <div class="dropdown card-header-dropdown">
                                <a class="text-reset dropdown-btn" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="text-muted fs-16"><i class="mdi mdi-dots-vertical align-middle"></i></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a class="dropdown-item" href="#">Today</a>
                                    <a class="dropdown-item" href="#">Last Week</a>
                                    <a class="dropdown-item" href="#">Last Month</a>
                                    <a class="dropdown-item" href="#">Current Year</a>
                                </div>
                            </div>
                        </div>
                    </div><!-- end card header -->
                    <div class="card-body">
                        <div id="user_device_pie_charts" data-colors='["--vz-primary", "--vz-warning", "--vz-info"]' class="apex-charts" dir="ltr"></div>

                        <div class="table-responsive mt-3">
                            <table class="table table-borderless table-sm table-centered align-middle table-nowrap mb-0">
                                <tbody class="border-0">
                                    <tr>
                                        <td>
                                            <h4 class="text-truncate fs-14 fs-medium mb-0"><i class="ri-stop-fill align-middle fs-18 text-primary me-2"></i>Desktop Users</h4>
                                        </td>
                                        <td>
                                            <p class="text-muted mb-0"><i data-feather="users" class="me-2 icon-sm"></i>78.56k</p>
                                        </td>
                                        <td class="text-end">
                                            <p class="text-success fw-medium fs-12 mb-0"><i class="ri-arrow-up-s-fill fs-5 align-middle"></i>2.08% </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h4 class="text-truncate fs-14 fs-medium mb-0"><i class="ri-stop-fill align-middle fs-18 text-warning me-2"></i>Mobile Users</h4>
                                        </td>
                                        <td>
                                            <p class="text-muted mb-0"><i data-feather="users" class="me-2 icon-sm"></i>105.02k</p>
                                        </td>
                                        <td class="text-end">
                                            <p class="text-danger fw-medium fs-12 mb-0"><i class="ri-arrow-down-s-fill fs-5 align-middle"></i>10.52%
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h4 class="text-truncate fs-14 fs-medium mb-0"><i class="ri-stop-fill align-middle fs-18 text-info me-2"></i>Tablet Users</h4>
                                        </td>
                                        <td>
                                            <p class="text-muted mb-0"><i data-feather="users" class="me-2 icon-sm"></i>42.89k</p>
                                        </td>
                                        <td class="text-end">
                                            <p class="text-danger fw-medium fs-12 mb-0"><i class="ri-arrow-down-s-fill fs-5 align-middle"></i>7.36%
                                            </p>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div><!-- end card body -->
                </div><!-- end card -->
            </div><!-- end col -->

            <div class="col-xl-4 col-md-6">
                <div class="card card-height-100">
                    <div class="card-header align-items-center d-flex">
                        <h4 class="card-title mb-0 flex-grow-1">Top Referrals Pages</h4>
                        <div class="flex-shrink-0">
                            <button type="button" class="btn btn-soft-primary btn-sm">
                                Export Report
                            </button>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="row align-items-center">
                            <div class="col-6">
                                <h6 class="text-muted text-uppercase fw-semibold text-truncate fs-12 mb-3">Total Referrals Page</h6>
                                <h4 class="mb-0">725,800</h4>
                                <p class="mb-0 mt-2 text-muted"><span class="badge badge-soft-success mb-0"> <i class="ri-arrow-up-line align-middle"></i> 15.72 % </span> vs. previous month</p>
                            </div><!-- end col -->
                            <div class="col-6">
                                <div class="text-center">
                                    <img src="assets/images/illustrator-1.png" class="img-fluid" alt="">
                                </div>
                            </div><!-- end col -->
                        </div><!-- end row -->
                        <div class="mt-3 pt-2">
                            <div class="progress progress-lg rounded-pill">
                                <div class="progress-bar bg-primary" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                <div class="progress-bar bg-info" role="progressbar" style="width: 18%" aria-valuenow="18" aria-valuemin="0" aria-valuemax="100"></div>
                                <div class="progress-bar bg-success" role="progressbar" style="width: 22%" aria-valuenow="22" aria-valuemin="0" aria-valuemax="100"></div>
                                <div class="progress-bar bg-warning" role="progressbar" style="width: 16%" aria-valuenow="16" aria-valuemin="0" aria-valuemax="100"></div>
                                <div class="progress-bar bg-danger" role="progressbar" style="width: 19%" aria-valuenow="19" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div><!-- end -->

                        <div class="mt-3 pt-2">
                            <div class="d-flex mb-2">
                                <div class="flex-grow-1">
                                    <p class="text-truncate text-muted fs-14 mb-0"><i class="mdi mdi-circle align-middle text-primary me-2"></i>www.google.com </p>
                                </div>
                                <div class="flex-shrink-0">
                                    <p class="mb-0">24.58%</p>
                                </div>
                            </div><!-- end -->
                            <div class="d-flex mb-2">
                                <div class="flex-grow-1">
                                    <p class="text-truncate text-muted fs-14 mb-0"><i class="mdi mdi-circle align-middle text-info me-2"></i>www.youtube.com </p>
                                </div>
                                <div class="flex-shrink-0">
                                    <p class="mb-0">17.51%</p>
                                </div>
                            </div><!-- end -->
                            <div class="d-flex mb-2">
                                <div class="flex-grow-1">
                                    <p class="text-truncate text-muted fs-14 mb-0"><i class="mdi mdi-circle align-middle text-success me-2"></i>www.meta.com </p>
                                </div>
                                <div class="flex-shrink-0">
                                    <p class="mb-0">23.05%</p>
                                </div>
                            </div><!-- end -->
                            <div class="d-flex mb-2">
                                <div class="flex-grow-1">
                                    <p class="text-truncate text-muted fs-14 mb-0"><i class="mdi mdi-circle align-middle text-warning me-2"></i>www.medium.com </p>
                                </div>
                                <div class="flex-shrink-0">
                                    <p class="mb-0">12.22%</p>
                                </div>
                            </div><!-- end -->
                            <div class="d-flex">
                                <div class="flex-grow-1">
                                    <p class="text-truncate text-muted fs-14 mb-0"><i class="mdi mdi-circle align-middle text-danger me-2"></i>Other </p>
                                </div>
                                <div class="flex-shrink-0">
                                    <p class="mb-0">17.58%</p>
                                </div>
                            </div><!-- end -->
                        </div><!-- end -->

                        <div class="mt-2 text-center">
                            <a href="javascript:void(0);" class="text-muted text-decoration-underline">Show All</a>
                        </div>

                    </div><!-- end card body -->
                </div><!-- end card -->
            </div><!-- end col -->

            <div class="col-xl-4 col-md-6">
                <div class="card card-height-100">
                    <div class="card-header align-items-center d-flex">
                        <h4 class="card-title mb-0 flex-grow-1">Top Pages</h4>
                        <div class="flex-shrink-0">
                            <div class="dropdown card-header-dropdown">
                                <a class="text-reset dropdown-btn" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="text-muted fs-16"><i class="mdi mdi-dots-vertical align-middle"></i></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a class="dropdown-item" href="#">Today</a>
                                    <a class="dropdown-item" href="#">Last Week</a>
                                    <a class="dropdown-item" href="#">Last Month</a>
                                    <a class="dropdown-item" href="#">Current Year</a>
                                </div>
                            </div>
                        </div>
                    </div><!-- end card header -->
                    <div class="card-body">
                        <div class="table-responsive table-card">
                            <table class="table align-middle table-borderless table-centered table-nowrap mb-0">
                                <thead class="text-muted table-light">
                                    <tr>
                                        <th scope="col" style="width: 62;">Active Page</th>
                                        <th scope="col">Active</th>
                                        <th scope="col">Users</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <a href="javascript:void(0);">/themesbrand/skote-25867</a>
                                        </td>
                                        <td>99</td>
                                        <td>25.3%</td>
                                    </tr><!-- end -->
                                    <tr>
                                        <td>
                                            <a href="javascript:void(0);">/dashonic/chat-24518</a>
                                        </td>
                                        <td>86</td>
                                        <td>22.7%</td>
                                    </tr><!-- end -->
                                    <tr>
                                        <td>
                                            <a href="javascript:void(0);">/skote/timeline-27391</a>
                                        </td>
                                        <td>64</td>
                                        <td>18.7%</td>
                                    </tr><!-- end -->
                                    <tr>
                                        <td>
                                            <a href="javascript:void(0);">/themesbrand/minia-26441</a>
                                        </td>
                                        <td>53</td>
                                        <td>14.2%</td>
                                    </tr><!-- end -->
                                    <tr>
                                        <td>
                                            <a href="javascript:void(0);">/dashon/dashboard-29873</a>
                                        </td>
                                        <td>33</td>
                                        <td>12.6%</td>
                                    </tr><!-- end -->
                                    <tr>
                                        <td>
                                            <a href="javascript:void(0);">/doot/chats-29964</a>
                                        </td>
                                        <td>20</td>
                                        <td>10.9%</td>
                                    </tr><!-- end -->
                                    <tr>
                                        <td>
                                            <a href="javascript:void(0);">/minton/pages-29739</a>
                                        </td>
                                        <td>10</td>
                                        <td>07.3%</td>
                                    </tr><!-- end -->
                                </tbody><!-- end tbody -->
                            </table><!-- end table -->
                        </div><!-- end -->
                    </div><!-- end cardbody -->
                </div><!-- end card -->
            </div><!-- end col -->
        </div><!-- end row -->

    </div>
    <!-- container-fluid -->
</div>
<!-- End Page-content -->

<footer class="footer">
    <div class="container-fluid">
        <div class="row">
            
            <div class="col-sm-6">
                <div class="text-sm-end d-none d-sm-block">
                    Design & Develop by HashCode Systems.
                </div>
            </div>
        </div>
    </div>
</footer>
</div>