<div class="dashboardsidebar" id="dashboardsidebar">
               <h3 class="dashboardlogo" id="dashboardlogo">IMS</h3>
          <div class="dashboardSidebarUser">
               <img src="images/user/testpic1x1.jpg" alt="User image." id="userImage" />
               <span><?= $user['first_name'].' '. $user['last_name'] ?></span>
          </div>
          <div class="dashboardsidebarmenus">
               <ul class="dashboardMenuLists">
                    <!-- class="menuActive" -->
                <li>
                    <a href="./dashboard.php"><i class="fa fa-dashboard"></i><span class="menuText">Dashboard</span></a>
                </li>
                <li>
                    <a href="./users-add.php"><i class="fa fa-user-plus"></i><span class="menuText">Add User</span></a>
               </li>
            </ul>
          </div>
     </div>