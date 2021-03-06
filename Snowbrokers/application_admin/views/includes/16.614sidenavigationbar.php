<ul id="dashboard-menu">
    <!-- <a class="btn-glow success" href="new-movies.html"> &nbsp;+ NEW MOVIES &nbsp;</a> -->
    <li class="<?php echo ($this->uri->segment(1)==='dashboard')?'active':''; ?>">
        <?php
        if($this->uri->segment(1)==='dashboard')
        {
            ?>
            <div class="pointer">
                <div class="arrow"></div>
                <div class="arrow_border"></div>
            </div>
            <?php
        }
        ?>
        <a href="<?php echo base_url(); ?>index.php/dashboard/index">
            <span><img src="<?php echo base_url(); ?>images/home_icon.png" class="menu_icon"></span>
            <span>Home</span>
        </a>
    </li>
    <li class="<?php echo ($this->uri->segment(1)==='site_settings' || $this->uri->segment(1)==='changepassword')?'active':''; ?>">
        <?php
        if($this->uri->segment(1)==='site_settings')
        {
            ?>
            <div class="pointer">
                <div class="arrow"></div>
                <div class="arrow_border"></div>
            </div>
            <?php
        }
        ?>
        <a href="javascript:void(0)" class="dropdown-toggle">
            <span><img src="<?php echo base_url(); ?>images/settings.png" style="height: 20px;" class="menu_icon"></span>
            <span>Settings</span>
        </a>
        <ul class="submenu"<?php echo ($this->uri->segment(1)==='site_settings' || $this->uri->segment(1)==='changepassword')?' style="display:block"':''; ?>>
            <li class="<?php echo ($this->uri->segment(1)==='site_settings' && $this->uri->segment(2)==='index')?'active':''; ?>"><a href="<?php echo base_url(); ?>index.php/site_settings/index">Site Settings</a></li>
            <li class="<?php echo ($this->uri->segment(1)==='changepassword' && $this->uri->segment(2)==='index')?'active':''; ?>"><a href="<?php echo base_url(); ?>index.php/changepassword/index">Change Password</a></li>
        </ul>
    </li>
    <li class="<?php echo ($this->uri->segment(1)==='user')?'active':''; ?>">
        <?php
        if($this->uri->segment(1)==='user')
        {
            ?>
            <div class="pointer">
                <div class="arrow"></div>
                <div class="arrow_border"></div>
            </div>
            <?php
        }
        ?>
        <a href="javascript:void(0)" class="dropdown-toggle">
            <span><img src="<?php echo base_url(); ?>assets/img/admin/icons/1398858732_87.png" class="menu_icon"></span>
            <span>User Management</span>
        </a>
        <ul class="submenu"<?php echo ($this->uri->segment(1)==='user')?' style="display:block"':''; ?>>
            <li class="<?php echo ($this->uri->segment(1)==='user' && $this->uri->segment(2)==='index')?'active':''; ?>"><a href="<?php echo base_url(); ?>index.php/user/index">View User</a></li>
            <li class="<?php echo ($this->uri->segment(1)==='user' && $this->uri->segment(2)==='adduser')?'active':''; ?>"><a href="<?php echo base_url(); ?>index.php/user/adduser">Add New User</a></li>
        </ul>
    </li>
  
    <li class="<?php echo ($this->uri->segment(1)==='category')?'active':''; ?>">
        <?php
        if($this->uri->segment(1)==='category')
        {
            ?>
            <div class="pointer">
                <div class="arrow"></div>
                <div class="arrow_border"></div>
            </div>
            <?php
        }
        ?>
        <a href="javascript:void(0)" class="dropdown-toggle">
            <span><img src="<?php echo base_url(); ?>assets/img/admin/icons/1398857978_category.png" class="menu_icon"></span>
            <span>category Management</span>
        </a>
        <ul class="submenu"<?php echo ($this->uri->segment(1)==='category')?' style="display:block"':''; ?>>
            <li class="<?php echo ($this->uri->segment(1)==='category' && $this->uri->segment(2)==='index')?'active':''; ?>"><a href="<?php echo base_url(); ?>index.php/category/index">View category</a></li>
            <li class="<?php echo ($this->uri->segment(1)==='category' && $this->uri->segment(2)==='addcategory')?'active':''; ?>"><a href="<?php echo base_url(); ?>index.php/category/addcategory">Add New category</a></li>
        </ul>
    </li>
    
    <li class="<?php echo ($this->uri->segment(1)==='article')?'active':''; ?>">
        <?php
        if($this->uri->segment(1)==='article')
        {
            ?>
            <div class="pointer">
                <div class="arrow"></div>
                <div class="arrow_border"></div>
            </div>
            <?php
        }
        ?>
        <a href="javascript:void(0)" class="dropdown-toggle">
            <span><img src="<?php echo base_url(); ?>images/1392902479_article_square_black.png" class="menu_icon"></span>
            <span>Article Management</span>
        </a>
        <ul class="submenu"<?php echo ($this->uri->segment(1)==='article')?' style="display:block"':''; ?>>
            <li class="<?php echo ($this->uri->segment(1)==='article' && $this->uri->segment(2)==='index')?'active':''; ?>"><a href="<?php echo base_url(); ?>index.php/article/index">View Articles</a></li>
            <li class="<?php echo ($this->uri->segment(1)==='article' && $this->uri->segment(2)==='adduser')?'active':''; ?>"><a href="<?php echo base_url(); ?>index.php/article/addarticle">Add New Article</a></li>
        </ul>
    </li>
    <li class="<?php echo ($this->uri->segment(1)==='specialist')?'active':''; ?>">
        <?php
        if($this->uri->segment(1)==='specialist')
        {
            ?>
            <div class="pointer">
                <div class="arrow"></div>
                <div class="arrow_border"></div>
            </div>
            <?php
        }
        ?>

        <a href="javascript:void(0)" class="dropdown-toggle">
            <span><img src="<?php echo base_url(); ?>assets/img/admin/icons/1398868344_69.png" class="menu_icon"></span>
            <span>FAQ Management</span>
        </a>
        <ul class="submenu"<?php echo ($this->uri->segment(1)==='faq')?' style="display:block"':''; ?>>
            <li class="<?php echo ($this->uri->segment(1)==='faq' && $this->uri->segment(2)==='index')?'active':''; ?>"><a href="<?php echo base_url(); ?>index.php/faq/index">View FAQ</a></li>
            <li class="<?php echo ($this->uri->segment(1)==='faq' && $this->uri->segment(2)==='addfaqtype')?'active':''; ?>"><a href="<?php echo base_url(); ?>index.php/faq/addfaqtype">Add FAQ</a></li>
        </ul>
    </li>
    <li class="<?php echo ($this->uri->segment(1)==='emailmanagement')?'active':''; ?>">
        <?php
        if($this->uri->segment(1)==='emailmanagement')
        {
            ?>
            <div class="pointer">
                <div class="arrow"></div>
                <div class="arrow_border"></div>
            </div>
            <?php
        }
        ?>
        <a href="javascript:void(0)" class="dropdown-toggle">
            <span><img src="<?php echo base_url(); ?>assets/img/admin/icons/1394651942_icon-ios7-email.png" class="menu_icon"></span>
            <span>Email Management</span>
        </a>
        <ul class="submenu"<?php echo ($this->uri->segment(1)==='emailmanagement')?' style="display:block"':''; ?>>
            <li class="<?php echo ($this->uri->segment(1)==='emailmanagement' && $this->uri->segment(2)==='index')?'active':''; ?>"><a href="<?php echo base_url(); ?>index.php/emailmanagement/index">View Email</a></li>
            <li class="<?php echo ($this->uri->segment(1)==='emailmanagement' && $this->uri->segment(2)==='addemail')?'active':''; ?>"><a href="<?php echo base_url(); ?>index.php/emailmanagement/addemail">Add New Email</a></li>
        </ul>
    </li>
    <li class="<?php echo ($this->uri->segment(1)==='workfeild')?'active':''; ?>">
        <?php
        if($this->uri->segment(1)==='workfeild')
        {
            ?>
            <div class="pointer">
                <div class="arrow"></div>
                <div class="arrow_border"></div>
            </div>
            <?php
        }
        ?>
        <!--<a href="javascript:void(0)" class="dropdown-toggle">
            <span><img src="<?php echo base_url(); ?>assets/img/admin/icons/1398875479_95.png" class="menu_icon"></span>
            <span>workfield Management</span>
        </a>
        <ul class="submenu"<?php echo ($this->uri->segment(1)==='workfeild')?' style="display:block"':''; ?>>
            <li class="<?php echo ($this->uri->segment(1)==='workfeild' && $this->uri->segment(2)==='index')?'active':''; ?>"><a href="<?php echo base_url(); ?>index.php/workfeild/index">View workfield</a></li>
            <li class="<?php echo ($this->uri->segment(1)==='workfeild' && $this->uri->segment(2)==='addworkfeild')?'active':''; ?>"><a href="<?php echo base_url(); ?>index.php/workfeild/addworkfeild">Add New workfield</a></li>
        </ul>
    </li>
    <li class="<?php echo ($this->uri->segment(1)==='task_category')?'active':''; ?>">
        <?php
        if($this->uri->segment(1)==='task_category')
        {
            ?>
            <div class="pointer">
                <div class="arrow"></div>
                <div class="arrow_border"></div>
            </div>
            <?php
        }
        ?>
        <a href="javascript:void(0)" class="dropdown-toggle">
            <span><img src="<?php echo base_url(); ?>assets/img/admin/icons/1398858287_category_settings.png" class="menu_icon"></span>
            <span>Task Category</span>
        </a>
        <ul class="submenu"<?php echo ($this->uri->segment(1)==='task_category')?' style="display:block"':''; ?>>
            <li class="<?php echo ($this->uri->segment(1)==='task_category' && $this->uri->segment(2)==='index')?'active':''; ?>"><a href="<?php echo base_url(); ?>index.php/task_category/index">View </a></li>
            <li class="<?php echo ($this->uri->segment(1)==='task_category' && $this->uri->segment(2)==='add_task_category')?'active':''; ?>"><a href="<?php echo base_url(); ?>index.php/task_category/add_task_category">Add New </a></li>
        </ul>
    </li>
    
    <li class="<?php echo ($this->uri->segment(1)==='task_sub_category')?'active':''; ?>">
        <?php
        if($this->uri->segment(1)==='task_sub_category')
        {
            ?>
            <div class="pointer">
                <div class="arrow"></div>
                <div class="arrow_border"></div>
            </div>
            <?php
        }
        ?>
        <a href="javascript:void(0)" class="dropdown-toggle">
            <span><img src="<?php echo base_url(); ?>assets/img/admin/icons/1395150078_category.png" class="menu_icon"></span>
            <span>Task Sub-Category</span>
        </a>
        <ul class="submenu"<?php echo ($this->uri->segment(1)==='task_sub_category')?' style="display:block"':''; ?>>
            <li class="<?php echo ($this->uri->segment(1)==='task_sub_category' && $this->uri->segment(2)==='index')?'active':''; ?>"><a href="<?php echo base_url(); ?>index.php/task_sub_category/index">View </a></li>
            <li class="<?php echo ($this->uri->segment(1)==='task_sub_category' && $this->uri->segment(2)==='add_task_sub_category')?'active':''; ?>"><a href="<?php echo base_url(); ?>index.php/task_sub_category/add_task_sub_category">Add New </a></li>
        </ul>
    </li>
    <li class="<?php echo ($this->uri->segment(1)==='who_we_are')?'active':''; ?>">
        <?php
        if($this->uri->segment(1)==='who_we_are')
        {
            ?>
            <div class="pointer">
                <div class="arrow"></div>
                <div class="arrow_border"></div>
            </div>
            <?php
        }
        ?>
        <a href="javascript:void(0)" class="dropdown-toggle">
            <span><img src="<?php echo base_url(); ?>assets/img/admin/icons/1398877316_man-24.png" class="menu_icon"></span>
            <span>Who We Are</span>
        </a>
        <ul class="submenu"<?php echo ($this->uri->segment(1)==='who_we_are')?' style="display:block"':''; ?>>
            <li class="<?php echo ($this->uri->segment(1)==='who_we_are' && $this->uri->segment(2)==='index')?'active':''; ?>"><a href="<?php echo base_url(); ?>index.php/who_we_are/index">View </a></li>
            <li class="<?php echo ($this->uri->segment(1)==='who_we_are' && $this->uri->segment(2)==='add_who_we_are')?'active':''; ?>"><a href="<?php echo base_url(); ?>index.php/who_we_are/add_who_we_are">Add New </a></li>
        </ul>
    </li>-->
     <li class="<?php echo ($this->uri->segment(1)==='country')?'active':''; ?>">
        <?php
        if($this->uri->segment(1)==='country')
        {
            ?>
            <div class="pointer">
                <div class="arrow"></div>
                <div class="arrow_border"></div>
            </div>
            <?php
        }
        ?>
        <a href="javascript:void(0)" class="dropdown-toggle">
            <span><img src="<?php echo base_url(); ?>images/1402305886_672380-compose.png" class="menu_icon"></span>
            <span>Country Management</span>
        </a>
        <ul class="submenu"<?php echo ($this->uri->segment(1)==='country')?' style="display:block"':''; ?>>
            <li class="<?php echo ($this->uri->segment(1)==='country' && $this->uri->segment(2)==='index')?'active':''; ?>"><a href="<?php echo base_url(); ?>index.php/country/index">View Country</a></li>
            <li class="<?php echo ($this->uri->segment(1)==='country' && $this->uri->segment(2)==='addcountry')?'active':''; ?>"><a href="<?php echo base_url(); ?>index.php/country/addcountry">Add New Country</a></li>
            
        </ul>
        <li class="<?php echo ($this->uri->segment(1)==='state')?'active':''; ?>">
        <?php
        if($this->uri->segment(1)==='state')
        {
            ?>
            <div class="pointer">
                <div class="arrow"></div>
                <div class="arrow_border"></div>
            </div>
            <?php
        }
        ?>
        <a href="javascript:void(0)" class="dropdown-toggle">
            <span><img src="<?php echo base_url(); ?>assets/img/admin/icons/1398861238_33.png" class="menu_icon"></span>
            <span>State Management</span>
        </a>
        <ul class="submenu"<?php echo ($this->uri->segment(1)==='state')?' style="display:block"':''; ?>>
            <li class="<?php echo ($this->uri->segment(1)==='state' && $this->uri->segment(2)==='index')?'active':''; ?>"><a href="<?php echo base_url(); ?>index.php/state/index">View state</a></li>
            <li class="<?php echo ($this->uri->segment(1)==='state' && $this->uri->segment(2)==='addstate')?'active':''; ?>"><a href="<?php echo base_url(); ?>index.php/state/addstate">Add New state</a></li>
        </ul>
    </li>
 <!--   <li class="<?php echo ($this->uri->segment(1)==='citymanagement')?'active':''; ?>">
        <?php
        if($this->uri->segment(1)==='citymanagement')
        {
            ?>
            <div class="pointer">
                <div class="arrow"></div>
                <div class="arrow_border"></div>
            </div>
            <?php
        }
        ?>
        <a href="javascript:void(0)" class="dropdown-toggle">
            <span><img src="<?php echo base_url(); ?>assets/img/admin/icons/1398861145_137.png" class="menu_icon"></span>
            <span>City Management</span>
        </a>
        <ul class="submenu"<?php echo ($this->uri->segment(1)==='citymanagement')?' style="display:block"':''; ?>>
            <li class="<?php echo ($this->uri->segment(1)==='citymanagement' && $this->uri->segment(2)==='index')?'active':''; ?>"><a href="<?php echo base_url(); ?>index.php/citymanagement/index">View City</a></li>
            <li class="<?php echo ($this->uri->segment(1)==='citymanagement' && $this->uri->segment(2)==='addcity')?'active':''; ?>"><a href="<?php echo base_url(); ?>index.php/citymanagement/addcity">Add New City</a></li>
        </ul>
    </li>-->
<!--<li class="<?php echo ($this->uri->segment(1)==='location')?'active':''; ?>">
        <?php
        if($this->uri->segment(1)==='location')
        {
            ?>
            <div class="pointer">
                <div class="arrow"></div>
                <div class="arrow_border"></div>
            </div>
            <?php
        }
        ?>
        <a href="javascript:void(0)" class="dropdown-toggle">
            <span><img src="<?php echo base_url(); ?>assets/img/admin/icons/1398861145_137.png" class="menu_icon"></span>
            <span>Location Management</span>
        </a>
        <ul class="submenu"<?php echo ($this->uri->segment(1)==='location')?' style="display:block"':''; ?>>
            <li class="<?php echo ($this->uri->segment(1)==='location' && $this->uri->segment(2)==='index')?'active':''; ?>"><a href="<?php echo base_url(); ?>index.php/location/index">View Location</a></li>
            <li class="<?php echo ($this->uri->segment(1)==='location' && $this->uri->segment(2)==='addlocation')?'active':''; ?>"><a href="<?php echo base_url(); ?>index.php/location/addlocation">Add New Location</a></li>
        </ul>
    </li>-->
    <li class="<?php echo ($this->uri->segment(1)==='taskamount')?'active':''; ?>">
        <?php
        if($this->uri->segment(1)==='taskamount')
        {
            ?>
            <div class="pointer">
                <div class="arrow"></div>
                <div class="arrow_border"></div>
            </div>
            <?php
        }
        ?>
        <!--<a href="javascript:void(0)" class="dropdown-toggle">
            <span><img src="<?php echo base_url(); ?>assets/img/admin/icons/1398877540_cmd-24.png" class="menu_icon"></span>
            <span>Task Amount Management</span>
        </a>
        <ul class="submenu"<?php echo ($this->uri->segment(1)==='taskamount')?' style="display:block"':''; ?>>
            <li class="<?php echo ($this->uri->segment(1)==='taskamount' && $this->uri->segment(2)==='index')?'active':''; ?>"><a href="<?php echo base_url(); ?>index.php/taskamount/index">View Task amount</a></li>
            <li class="<?php echo ($this->uri->segment(1)==='citymanagement' && $this->uri->segment(2)==='addcity')?'active':''; ?>"><a href="<?php echo base_url(); ?>index.php/taskamount/addtaskamount">Add New Task amount</a></li>
        </ul>
    </li>-->
    <li class="<?php echo ($this->uri->segment(1)==='slider')?'active':''; ?>">
        <?php
        if($this->uri->segment(1)==='slider')
        {
            ?>
            <div class="pointer">
                <div class="arrow"></div>
                <div class="arrow_border"></div>
            </div>
            <?php
        }
        ?>
        <a href="javascript:void(0)" class="dropdown-toggle">
            <span><img src="<?php echo base_url(); ?>assets/img/admin/icons/slider-4-24.png" class="menu_icon"></span>
            <span>Slider Management</span>
        </a>
        <ul class="submenu"<?php echo ($this->uri->segment(1)==='slider')?' style="display:block"':''; ?>>
            <li class="<?php echo ($this->uri->segment(1)==='slider' && $this->uri->segment(2)==='index')?'active':''; ?>"><a href="<?php echo base_url(); ?>index.php/slider/index">View Slider</a></li>
            <li class="<?php echo ($this->uri->segment(1)==='slider' && $this->uri->segment(2)==='addslider')?'active':''; ?>"><a href="<?php echo base_url(); ?>index.php/slider/addslider">Add New Slider</a></li>
        </ul>
    </li>
    <li class="<?php echo ($this->uri->segment(1)==='clientsay')?'active':''; ?>">
        <?php
        if($this->uri->segment(1)==='clientsay')
        {
            ?>
            <div class="pointer">
                <div class="arrow"></div>
                <div class="arrow_border"></div>
            </div>
            <?php
        }
        ?>
        <!--<a href="javascript:void(0)" class="dropdown-toggle">
            <span><img src="<?php echo base_url(); ?>assets/img/admin/icons/1398877154_89.png" class="menu_icon"></span>
            <span>clientsay Management</span>
        </a>
        <ul class="submenu"<?php echo ($this->uri->segment(1)==='clientsay')?' style="display:block"':''; ?>>
            <li class="<?php echo ($this->uri->segment(1)==='clientsay' && $this->uri->segment(2)==='index')?'active':''; ?>"><a href="<?php echo base_url(); ?>index.php/clientsay/index">View clientsay</a></li>
            <li class="<?php echo ($this->uri->segment(1)==='clientsay' && $this->uri->segment(2)==='addclientsay')?'active':''; ?>"><a href="<?php echo base_url(); ?>index.php/clientsay/addclientsay">Add New clientsay</a></li>
        </ul>
    </li>-->
   <!-- <li class="<?php echo ($this->uri->segment(1)==='task_management')?'active':''; ?>">
        <?php
        if($this->uri->segment(1)==='task_management')
        {
            ?>
            <div class="pointer">
                <div class="arrow"></div>
                <div class="arrow_border"></div>
            </div>
            <?php
        }
        ?>
        <a href="javascript:void(0)" class="dropdown-toggle">
            <span><img src="<?php echo base_url(); ?>assets/img/admin/icons/1398877540_cmd-24.png" class="menu_icon"></span>
            <span>Task/Project Management</span>
        </a>
        <ul class="submenu"<?php echo ($this->uri->segment(1)==='task_management')?' style="display:block"':''; ?>>
            <li class="<?php echo ($this->uri->segment(1)==='task_management' && $this->uri->segment(2)==='index')?'active':''; ?>"><a href="<?php echo base_url(); ?>index.php/task_management/index">View task/project</a></li>
            <li class="<?php echo ($this->uri->segment(1)==='task_management' && $this->uri->segment(2)==='addtask_management')?'active':''; ?>"><a href="<?php echo base_url(); ?>index.php/task_management/addtask_management">Add New task/project</a></li>
        </ul>
    </li>-->
    <!-- <li class="<?php echo ($this->uri->segment(1)==='payment')?'active':''; ?>">
        <?php
        if($this->uri->segment(1)==='payment')
        {
            ?>
            <div class="pointer">
                <div class="arrow"></div>
                <div class="arrow_border"></div>
            </div>
            <?php
        }
        ?>
        <a href="javascript:void(0)" class="dropdown-toggle">
            <span><img src="<?php echo base_url(); ?>assets/img/admin/icons/1398871967_29-paypal.png" class="menu_icon"></span>
            <span>Payment Management</span>
        </a>
        <ul class="submenu"<?php echo ($this->uri->segment(1)==='payment')?' style="display:block"':''; ?>>
            <li class="<?php echo ($this->uri->segment(1)==='payment' && $this->uri->segment(2)==='index')?'active':''; ?>"><a href="<?php echo base_url(); ?>index.php/payment/index">View Payment</a></li>
        </ul>
    </li>
    
   <!-- <li class="<?php echo ($this->uri->segment(1)==='blog_category')?'active':''; ?>">
        <?php
        if($this->uri->segment(1)==='blog_category')
        {
            ?>
            <div class="pointer">
                <div class="arrow"></div>
                <div class="arrow_border"></div>
            </div>
            <?php
        }
        ?>
         <a href="javascript:void(0)" class="dropdown-toggle">
            <span><img src="<?php echo base_url(); ?>images/1392902479_article_square_black.png" class="menu_icon"></span>
            <span>Blog Category Management</span>
        </a>
        <ul class="submenu"<?php echo ($this->uri->segment(1)==='blog_category')?' style="display:block"':''; ?>>
            <li class="<?php echo ($this->uri->segment(1)==='blog_category' && $this->uri->segment(2)==='index')?'active':''; ?>"><a href="<?php echo base_url(); ?>index.php/blog_category/index">View Blog Category</a></li>
            <li class="<?php echo ($this->uri->segment(1)==='blog_category' && $this->uri->segment(2)==='addblog_article')?'active':''; ?>"><a href="<?php echo base_url(); ?>index.php/blog_category/addblog_category">Add New Blog Category</a></li>
        </ul>
       
    </li>-->
    
   <!-- <li class="<?php echo ($this->uri->segment(1)==='blog_article')?'active':''; ?>">
        <?php
        if($this->uri->segment(1)==='blog_article')
        {
            ?>
            <div class="pointer">
                <div class="arrow"></div>
                <div class="arrow_border"></div>
            </div>
            <?php
        }
        ?>
        <a href="javascript:void(0)" class="dropdown-toggle">
            <span><img src="<?php echo base_url(); ?>images/1392902479_article_square_black.png" class="menu_icon"></span>
            <span>Blog Article Management</span>
        </a>
        <ul class="submenu"<?php echo ($this->uri->segment(1)==='blog_article')?' style="display:block"':''; ?>>
            <li class="<?php echo ($this->uri->segment(1)==='blog_article' && $this->uri->segment(2)==='index')?'active':''; ?>"><a href="<?php echo base_url(); ?>index.php/blog_article/index">View Blog Articles</a></li>
            <li class="<?php echo ($this->uri->segment(1)==='blog_article' && $this->uri->segment(2)==='addblog_article')?'active':''; ?>"><a href="<?php echo base_url(); ?>index.php/blog_article/addblog_article">Add New Blog Article</a></li>
        </ul>-->
       
    <!--</li>-->
     
   <li class="<?php echo ($this->uri->segment(1)==='plan')?'active':''; ?>">
        <?php
        if($this->uri->segment(1)==='plan')
        {
            ?>
            <div class="pointer">
                <div class="arrow"></div>
                <div class="arrow_border"></div>
            </div>
            <?php
        }
        ?>
        <a href="javascript:void(0)" class="dropdown-toggle">
            <span><img src="<?php echo base_url(); ?>images/1401907556_64.png" class="menu_icon"></span>
            <span>plan Management</span>
        </a>
        <ul class="submenu"<?php echo ($this->uri->segment(1)==='plan')?' style="display:block"':''; ?>>
            <li class="<?php echo ($this->uri->segment(1)==='plan' && $this->uri->segment(2)==='index')?'active':''; ?>"><a href="<?php echo base_url(); ?>index.php/plan/index">View Plan</a></li>
            <li class="<?php echo ($this->uri->segment(1)==='plan' && $this->uri->segment(2)==='addplan')?'active':''; ?>"><a href="<?php echo base_url(); ?>index.php/plan/addplan">Add New Plan</a></li>
        </ul>
       
    </li>
    <li class="<?php echo ($this->uri->segment(1)==='sports')?'active':''; ?>">
        <?php
        if($this->uri->segment(1)==='sports')
        {
            ?>
            <div class="pointer">
                <div class="arrow"></div>
                <div class="arrow_border"></div>
            </div>
            <?php
        }
        ?>
        <a href="javascript:void(0)" class="dropdown-toggle">
            <span><img src="<?php echo base_url(); ?>images/fitness-24.png" class="menu_icon"></span>
            <span>Sports Management</span>
        </a>
        <ul class="submenu"<?php echo ($this->uri->segment(1)==='sports')?' style="display:block"':''; ?>>
            <li class="<?php echo ($this->uri->segment(1)==='sports' && $this->uri->segment(2)==='index')?'active':''; ?>"><a href="<?php echo base_url(); ?>index.php/sports/index">View Sports</a></li>
            <li class="<?php echo ($this->uri->segment(1)==='sports' && $this->uri->segment(2)==='addsports')?'active':''; ?>"><a href="<?php echo base_url(); ?>index.php/sports/addsports">Add New Sports</a></li>
        </ul>
       
    </li>
    <li class="<?php echo ($this->uri->segment(1)==='goal')?'active':''; ?>">
        <?php
        if($this->uri->segment(1)==='goal')
        {
            ?>
            <div class="pointer">
                <div class="arrow"></div>
                <div class="arrow_border"></div>
            </div>
            <?php
        }
        ?>
        <a href="javascript:void(0)" class="dropdown-toggle">
            <span><img src="<?php echo base_url(); ?>images/1402479216_finish_flag.png" class="menu_icon"></span>
            <span>Goal Management</span>
        </a>
        <ul class="submenu"<?php echo ($this->uri->segment(1)==='goal')?' style="display:block"':''; ?>>
            <li class="<?php echo ($this->uri->segment(1)==='goal' && $this->uri->segment(2)==='index')?'active':''; ?>"><a href="<?php echo base_url(); ?>index.php/goal/index">View Goal</a></li>
            <li class="<?php echo ($this->uri->segment(1)==='goal' && $this->uri->segment(2)==='addgoal')?'active':''; ?>"><a href="<?php echo base_url(); ?>index.php/goal/addgoal">Add New Goal</a></li>
        </ul>
       
    </li>
    <li class="<?php echo ($this->uri->segment(1)==='skill')?'active':''; ?>">
        <?php
        if($this->uri->segment(1)==='skill')
        {
            ?>
            <div class="pointer">
                <div class="arrow"></div>
                <div class="arrow_border"></div>
            </div>
            <?php
        }
        ?>
        <a href="javascript:void(0)" class="dropdown-toggle">
            <span><img src="<?php echo base_url(); ?>images/31-24.png" class="menu_icon"></span>
            <span>Skill Management</span>
        </a>
        <ul class="submenu"<?php echo ($this->uri->segment(1)==='skill')?' style="display:block"':''; ?>>
            <li class="<?php echo ($this->uri->segment(1)==='skill' && $this->uri->segment(2)==='index')?'active':''; ?>"><a href="<?php echo base_url(); ?>index.php/skill/index">View Skill</a></li>
            <li class="<?php echo ($this->uri->segment(1)==='skill' && $this->uri->segment(2)==='addskill')?'active':''; ?>"><a href="<?php echo base_url(); ?>index.php/skill/addskill">Add New Skill</a></li>
        </ul>
       
    </li>
    <li class="<?php echo ($this->uri->segment(1)==='lifestyle')?'active':''; ?>">
        <?php
        if($this->uri->segment(1)==='lifestyle')
        {
            ?>
            <div class="pointer">
                <div class="arrow"></div>
                <div class="arrow_border"></div>
            </div>
            <?php
        }
        ?>
        <a href="javascript:void(0)" class="dropdown-toggle">
            <span><img src="<?php echo base_url(); ?>images/1401907269_111.png" class="menu_icon"></span>
            <span>lifestyle Management</span>
        </a>
        <ul class="submenu"<?php echo ($this->uri->segment(1)==='lifestyle')?' style="display:block"':''; ?>>
            <li class="<?php echo ($this->uri->segment(1)==='lifestyle' && $this->uri->segment(2)==='index')?'active':''; ?>"><a href="<?php echo base_url(); ?>index.php/lifestyle/index">View lifestyle</a></li>
            <li class="<?php echo ($this->uri->segment(1)==='lifestyle' && $this->uri->segment(2)==='addlifestyle')?'active':''; ?>"><a href="<?php echo base_url(); ?>index.php/lifestyle/addlifestyle">Add New lifestyle</a></li>
        </ul>
       
    </li>
    <li class="<?php echo ($this->uri->segment(1)==='bodytype')?'active':''; ?>">
        <?php
        if($this->uri->segment(1)==='bodytype')
        {
            ?>
            <div class="pointer">
                <div class="arrow"></div>
                <div class="arrow_border"></div>
            </div>
            <?php
        }
        ?>
        <a href="javascript:void(0)" class="dropdown-toggle">
            <span><img src="<?php echo base_url(); ?>images/1402479495_cmd-24.png" class="menu_icon"></span>
            <span>Bodytype Management</span>
        </a>
        <ul class="submenu"<?php echo ($this->uri->segment(1)==='bodytype')?' style="display:block"':''; ?>>
            <li class="<?php echo ($this->uri->segment(1)==='bodytype' && $this->uri->segment(2)==='index')?'active':''; ?>"><a href="<?php echo base_url(); ?>index.php/bodytype/index">View Bodytype</a></li>
            <li class="<?php echo ($this->uri->segment(1)==='bodytype' && $this->uri->segment(2)==='addbodytype')?'active':''; ?>"><a href="<?php echo base_url(); ?>index.php/bodytype/addbodytype">Add New Bodytype</a></li>
        </ul>
       
    </li>
    <li class="<?php echo ($this->uri->segment(1)==='currency')?'active':''; ?>">
        <?php
        if($this->uri->segment(1)==='currency')
        {
            ?>
            <div class="pointer">
                <div class="arrow"></div>
                <div class="arrow_border"></div>
            </div>
            <?php
        }
        ?>
        <a href="javascript:void(0)" class="dropdown-toggle">
            <span><img src="<?php echo base_url(); ?>images/1402479391_aiga_currency_exchange.png" class="menu_icon"></span>
            <span>Currency Management</span>
        </a>
        <ul class="submenu"<?php echo ($this->uri->segment(1)==='currency')?' style="display:block"':''; ?>>
            <li class="<?php echo ($this->uri->segment(1)==='currency' && $this->uri->segment(2)==='index')?'active':''; ?>"><a href="<?php echo base_url(); ?>index.php/currency/index">View Currency</a></li>
            
        </ul>
       
    </li>
   <!--<li class="<?php echo ($this->uri->segment(1)==='media')?'active':''; ?>">
        <?php
        if($this->uri->segment(1)==='media')
        {
            ?>
            <div class="pointer">
                <div class="arrow"></div>
                <div class="arrow_border"></div>
            </div>
            <?php
        }
        ?>
        <a href="javascript:void(0)" class="dropdown-toggle">
            <span><img src="<?php echo base_url(); ?>images/1402305886_672380-compose.png" class="menu_icon"></span>
            <span>Media Management</span>
        </a>
        <ul class="submenu"<?php echo ($this->uri->segment(1)==='media')?' style="display:block"':''; ?>>
            <li class="<?php echo ($this->uri->segment(1)==='media' && $this->uri->segment(2)==='index')?'active':''; ?>"><a href="<?php echo base_url(); ?>index.php/media/index">View Media</a></li>
            
        </ul>
       
    </li>-->
       
    </li>
</ul>