<!-- ========== App Menu ========== -->
<div class="app-menu navbar-menu">
            <!-- LOGO -->
            <div class="navbar-brand-box">
                <!-- Dark Logo-->
                <a href="index.html" class="logo logo-dark">
                    <span class="logo-sm">
                        <img src="assets/images/logo-sm.png" alt="" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="assets/images/logo-dark.png" alt="" height="17">
                    </span>
                </a>
                <!-- Light Logo-->
                <a href="index.html" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="assets/images/logo-sm.png" alt="" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="assets/images/logo-light.png" alt="" height="17">
                    </span>
                </a>
                <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover" id="vertical-hover">
                    <i class="ri-record-circle-line"></i>
                </button>
            </div>

            <div id="scrollbar">
                <div class="container-fluid">
                            <!-- add time and button-->
                    <div id="two-column-menu">
                    </div>
                    <ul class="navbar-nav" id="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="dashboard.php">
                                <i class=" lab las la-home"></i>Dashboards
                            </a>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="#sidebarConsignor" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarConsignor">
                                <i class=" ri-user-3-fill"></i> <span data-key="t-Consignors">Consignor</span>
                            </a>
                            <div class="collapse menu-dropdown" id="sidebarConsignor">        
                            <ul class="nav nav-sm flex-column">
                                        <li class="nav-item"><a class="nav-link" href="add-consignor.php"  data-key="t-addconsignor">
                                        Add Consignor
                                        </a>
                                        </li>
                                        <li class="nav-item"><a class="nav-link " href="consignor-list.php" data-key="t-viewconsignor">
                                        View Consignor
                                        </a>
                                        </li>
                                        <li class="nav-item"><a class="nav-link" href="add-consignee.php" data-key="t-addconsignee">
                                        Add Consignee
                                        </a>
                                        </li>
                                        <li class="nav-item"><a class="nav-link" href="consignee-list.php" data-key="t-viewconsignee">
                                        View Consignee
                                        </a>
                                        </li>
                                        <li class="nav-item"><a class="nav-link" href="add-thirdparty.php" data-key="t-addthirdparty">
                                        Add Third Party
                                        </a>
                                        </li>
                                        <li class="nav-item"><a class="nav-link" href="thirdparty-list.php"data-key="t-viewthirdparty">
                                        View Third Party
                                        </a>
                                        </li>
                                        <li class="nav-link"><a class="nav-link" href="outstandinh-sms.php" data-key="t-outstandingsms">
                                        Outstanding SMS
                                        </a>
                                        </li>
                                        <li class="nav-link"><a class="nav-link" href="callback-schedule.php" data-key="t-callbackshedule">
                                        Callback Schedule
                                        </a>
                                        </li>
                                    </ul>
                            </div></li> <!-- end Dashboard Menu -->
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="broker-list.php" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarBroker">
                                <i class="ri-dashboard-2-line"></i> <span data-key="t-Broker">Broker</span>
                            </a>
                            <div class="collapse menu-dropdown" id="sidebarBroker">        
                            <ul class="nav nav-sm flex-column">
                                        <li class="nav-link"><a class="nav-link" href="add-broker.php" data-key="t-addbroker">
                                        Add Broker
                                        </a>
                                        </li>
                                        <li class="nav-link"><a class="nav-link" href="broker-list.php" data-key="t-viewbroker">
                                        View Broker
                                        </a>
                                        </li>
                                        <li> class="nav-item"<a class="nav-link" href="outstanding-sms.php" data-key="t-outstandingsms">
                                        Outstanding SMS
                                        </a>
                                        </li>
                                    </ul>
                            </div>
                        </li> <!-- end Dashboard Menu -->
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="vehicle-list.php" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarDashboards">
                                <i class=" bx  bx bx-directions "></i> <span data-key="t-Vehicle">Vehicle</span>
                            </a>
                            <div class="collapse menu-dropdown" id="sidebarrVehicle">        
                            <ul class="nav nav-sm flex-column">
                                        <li class="nav-link"><a class="nav-link" href="vehicle-list.php" data-key="t-vehiclelist">
                                        Vehicle Master
                                        </a>
                                        </li>
                                        <li class="nav-link"><a class="nav-link" href="vehicle-size.php" data-key="t-vehiclesize">
                                        Vehicle Size
                                        </a>
                                        </li>
                                    </ul>
                            </div>
                        </li> <!-- end Dashboard Menu --><li class="nav-item">
                            <a class="nav-link menu-link" href="staff-list.php" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarDashboards">
                                <i class=" ri-user-3-fill"></i> <span data-key="t-Staff">Staff</span>
                            </a>
                            <div class="collapse menu-dropdown" id="sidebarStaff">        
                            <ul class="nav nav-sm flex-column">
                                        <li class="nav-link"><a class="nav-link" href="staff-list.php" data-key="t-staff">
                                        Staff
                                        </a>
                                        </li>
                                        <li class="nav-link"><a class="nav-link" href="#" data-key="t-driver">
                                        Driver
                                        </a>
                                        </li>
                                        <li class="nav-link"><a class="nav-link" href="#" data-key="t-department">
                                        Department
                                        </a>
                                        </li>
                                    </ul>
                            </div>
                        </li> <!-- end Dashboard Menu -->
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="leave-request.php" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarDashboards">
                                <i class="bx bx-time-five"></i> <span data-key="t-dashboards">HR & Payroll</span>
                            </a>
                            <div class="collapse menu-dropdown" id="sidebarHR&Payroll">        
                            <ul class="nav nav-sm flex-column">
                                        <li class="nav-link"><a class="nav-link" href="#"data-key="t-addtendance">
                                        Attendance
                                        </a>
                                        </li>
                                        <li class="nav-link"><a class="nav-link menu-link" href="#sideleave" data-key="t-leave">
                                        Leave
                                        </a>
                                        <div class="collapse menu-dropdown" id="sideleave" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarDashboards"></div>
                                        </li>
                                        <li class="nav-link"><a class="nav-link" href="#" data-key="t-paysalary">
                                        Pay Salary
                                        </a>
                                        </li>
                                        <li class="nav-link"><a class="nav-link" href="#" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarDashboards">
                                        Pay Advance
                                        </a>
                                        </li>
                                        <li class="nav-link"><a class="nav-link " href="#" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarDashboards">
                                        Staff Debit
                                        </a>
                                        </li>
                                        <li class="nav-link"><a class="nav-link" href="settings.php" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarDashboards">
                                        <span data-key="t-dashboards">Attendance Report</span>
                                        </a>
                                        </li>
                                        <li class="nav-link"><a class="nav-link menu-link" href="#" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarDashboards">
                                        <span data-key="t-dashboards">Generate Salary</span>
                                        </a>
                                        </li>
                                        <li><a class="nav-link menu-link" href="#" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarDashboards">
                                        <span data-key="t-dashboards">Salary Report</span>
                                        </a>
                                        </li>
                                    </ul>
                                    </div>
                        </li> <!-- end Dashboard Menu --><li class="nav-item">
                            <a class="nav-link menu-link" href="#Expensepages" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarDashboards">
                                <i class="bx bx-pie-chart-alt "></i> <span data-key="t-dashboards">Expenses</span>
                            </a>
                            <div class="collapse menu-dropdown" id="Expensepages">        
                            <ul class="nav nav-sm flex-column">
                                        <li><a class="nav-link menu-link" href="#" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarDashboards">
                                        <span data-key="t-dashboards">Expenses</span>
                                        </a>
                                        </li>
                                        <li><a class="nav-link menu-link" href="#" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarDashboards">
                                        <span data-key="t-dashboards">Expenses Category</span>
                                        </a>
                                        </li>
                                        <li><a class="nav-link menu-link" href="#" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarDashboards">
                                        <span data-key="t-dashboards">Expense Payto</span>
                                        </a>
                                        </li>
                                        <li><a class="nav-link menu-link" href="#" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarDashboards">
                                        <span data-key="t-dashboards">Petty Cash Report</span>
                                        </a>
                                        </li>
                                    </ul>
                                    </div>
                        </li> <!-- end Dashboard Menu --><li class="nav-item">
                            <a class="nav-link menu-link" href="#SidebarCashBook" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarDashboards">
                                <i class="mdi mdi-book-open-variant "></i> <span data-key="t-dashboards">Cash Book</span>
                            </a>
                            <div class="collapse menu-dropdown" id="SidebarCashBook">        
                            <ul class="nav nav-sm flex-column">
                                        <li><a class="nav-link menu-link" href="#" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarDashboards">
                                        <span data-key="t-dashboards">Add Bank Detail</span>
                                        </a>
                                        </li>
                                        <li><a class="nav-link menu-link" href="#" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarDashboards">
                                        <span data-key="t-dashboards">View Bank Detail</span>
                                        </a>
                                        </li>
                                        <li><a class="nav-link menu-link" href="#" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarDashboards">
                                        <span data-key="t-dashboards">Cash Book</span>
                                        </a>
                                        </li>
                                    </ul>
                                </div>
                        </li> <!-- end Dashboard Menu -->
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="company-list.php" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarDashboards">
                                <i class="lab  las la-cog "></i> <span data-key="t-dashboards">Masters</span>
                            </a>
                            <div class="collapse menu-dropdown" id="SidebarMasters">        
                            <ul class="nav nav-sm flex-column">
                                <li><a class="nav-link menu-link" href="company-list.php" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarDashboards">
                                <span data-key="t-dashboards">Company Master</span>
                                </a>
                                </li>
                                <li><a class="nav-link menu-link" href="city-list.php" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarDashboards">
                                <span data-key="t-dashboards">City Master</span>
                                </a>
                                </li>
                                <li><a class="nav-link menu-link" href="settings.php" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarDashboards">
                                <span data-key="t-dashboards">Main Master</span>
                                </a>
                                </li>
                            </ul>
                            </div>
                        </li> <!-- end Dashboard Menu --><li class="nav-item">
                            <a class="nav-link menu-link" href="#SidebarReports" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarDashboards">
                                <i class="lab las la-list-ul "></i> <span data-key="t-dashboards">Reports</span>
                            </a>
                            <div class="collapse menu-dropdown" id="SidebarReports">        
                            <ul class="nav nav-sm flex-column">
                                        <li><a class="nav-link menu-link" href="#" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarDashboards">
                                        <span data-key="t-dashboards">Customers Report</span>
                                        </a>
                                        </li>
                                        <li><a class="nav-link menu-link" href="#" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarDashboards">
                                        <span data-key="t-dashboards">Vendors Report</span>
                                        </a>
                                        </li>
                                    </ul>
                        </li> <!-- end Dashboard Menu -->
                       

                        
                       
                    </ul>
                </div>
                <!-- Sidebar -->
            </div>

            <div class="sidebar-background"></div>
        </div>
        <!-- Left Sidebar End -->
        <!-- Vertical Overlay-->
        <div class="vertical-overlay"></div>