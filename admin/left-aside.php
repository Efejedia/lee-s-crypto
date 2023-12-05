

        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- User Profile-->
                <div class="user-profile">
                    <div class="user-pro-body">
                        <div>
                            <img src="assets/images/users/2.jpg" alt="user-img" class="img-circle">
                        </div>
                        <div class="dropdown">
                            <a href="javascript:void(0)" class="dropdown-toggle u-dropdown link hide-menu" data-toggle="dropdown" role="button" aria-haspopup="true"
                                aria-expanded="false">Steave Gection
                                <span class="caret"></span>
                            </a>
                            <div class="dropdown-menu animated flipInY">
                                <!-- text-->
                                <a href="javascript:void(0)" class="dropdown-item">
                                    <i class="ti-user"></i> My Profile</a>
                                <!-- text-->
                                <a href="javascript:void(0)" class="dropdown-item">
                                    <i class="ti-wallet"></i> My Balance</a>
                                <!-- text-->
                                <a href="javascript:void(0)" class="dropdown-item">
                                    <i class="ti-email"></i> Inbox</a>
                                <!-- text-->
                                <div class="dropdown-divider"></div>
                                <!-- text-->
                                <a href="javascript:void(0)" class="dropdown-item">
                                    <i class="ti-settings"></i> Account Setting</a>
                                <!-- text-->
                                <div class="dropdown-divider"></div>
                                <!-- text-->
                                <a href="pages-login.html" class="dropdown-item">
                                    <i class="fa fa-power-off"></i> Logout</a>
                                <!-- text-->
                            </div>
                        </div>
                    </div>
                </div>
                 
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav mt-3">
                    <ul id="sidebarnav"> 
                        <li>
                            <a class="waves-effect waves-dark" href="index" aria-expanded="false">
                                <i class="mdi mdi-baby text-success"></i>
                                <span class="hide-menu">Dashboard</span>
                            </a>
                        </li>

                        <li>
                            <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                            <i class="mdi mdi-baby text-success"></i>
                                <span class="hide-menu">Manage User</span>
                            </a>
                            <ul aria-expanded="false" class="collapse">
                                <li>
                                    <a href="manage_users">All Users</a>
                                    <a href="pending_users">Pending Users</a>
                                </li>
                                <li>
                                    <a href="active_users">Active Users</a>
                                </li>
                                <li>
                                    <a href="baned">Baned</a>
                                </li>
                                
                            </ul>
                        </li>
                                                
                        <li>
                            <a class="waves-effect waves-dark" href="manage_plan" aria-expanded="false">
                                <i class="mdi mdi-baby text-success"></i>
                                <span class="hide-menu">Manage Plans</span>
                            </a>
                        </li>
                        <!-- <li>
                            <a class="waves-effect waves-dark" href="manage_plans" aria-expanded="false">
                                <i class="mdi mdi-baby text-success"></i>
                                <span class="hide-menu">Manage Plans</span>
                            </a>
                        </li> -->
                     

                        <!-- <li>
                            <a class="waves-effect waves-dark" href="subscriptions" aria-expanded="false">
                                <i class="mdi mdi-baby text-success"></i>
                                <span class="hide-menu"> Subscriptions </span>
                            </a>
                        </li> -->
                        
                        <li>
                            <a class="waves-effect waves-dark" href="manage_crypto" aria-expanded="false">
                                <i class="mdi mdi-baby text-success"></i>
                                <span class="hide-menu">Manage Crypto</span>
                            </a>
                        </li>
                     
                         
                       
                         
                        <!-- <li>
                            <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                                <i class="ti-align-left"></i>
                                <span class="hide-menu">Manage Gallery</span>
                            </a>
                            <ul aria-expanded="false" class="collapse">
                                 
                                <li> <a href="gallery/Photo/" aria-expanded="false"> Photo Gallery</a> </li>
                                <li>  <a href="gallery/Video/" aria-expanded="false">Video Gallery</a> </li> 
                                 
                            </ul>
                        </li> -->

                        <!-- <li>
                            <a class="waves-effect waves-dark" href="manage_investment" aria-expanded="false">
                                <i class="mdi mdi-baby text-success"></i>
                                <span class="hide-menu">Manage Investment</span>
                            </a>
                        </li> -->

                        <li>
                            <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                            <i class="mdi mdi-baby text-success"></i>
                                <span class="hide-menu">Manage Investment</span>
                            </a>
                            <?php
                                $fetch_status = mysqli_query($conn, "SELECT * FROM invest WHERE status = 'Runing'");
                                if (mysqli_num_rows($fetch_status) > 0) {
                                    while ($investment_status = mysqli_fetch_assoc($fetch_status)) {
                                        echo $pending = $investment_status['status'];
                                  
                                                            ?>
                            <?php
                                $fetch_status1 = mysqli_query($conn, "SELECT * FROM invest where status = 'Completed'");
                                if (mysqli_num_rows($fetch_status1) > 0) {
                                    while ($investment_status1 = mysqli_fetch_assoc($fetch_status1)) {
                                        $complete = $investment_status1['status'];
                                  
                                                            ?>
                            <ul aria-expanded="false" class="collapse">
                                <li>
                                    <a href="manage_investment?status=<?php echo $pending ?>">Runing Investment</a>
                                </li>
                                <li>
                                    <a href="manage_investment?status=<?php echo $complete ?>">Complete Invest</a>
                                </li>
                               
                                
                            </ul>
                            <?php }} }}?>
                        </li>

                        <li>
                            <a class="waves-effect waves-dark" href="deposite" aria-expanded="false">
                                <i class="mdi mdi-baby text-success"></i>
                                <span class="hide-menu">Deposites</span>
                            </a>
                        </li>

                         
                        
                         
                      
                         
                          

                        
                        <li>
                            <a class="waves-effect waves-dark" href="change-password" aria-expanded="false">
                                <i class="mdi mdi-baby text-success"></i>
                                <span class="hide-menu"> Change Password</span>
                            </a>
                        </li>

                        <li>
                            <a class="waves-effect waves-dark" href="logout" aria-expanded="false">
                                <i class="mdi mdi-baby text-danger"></i>
                                <span class="hide-menu">Log Out</span>
                            </a>
                        </li>
                        
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>