<div class="container-fluid">
    <div class="row">

<!-- MOBILE SIDEBAR -->
<div class="offcanvas offcanvas-start d-md-none" tabindex="-1" id="sidebarMenu">
    <div class="offcanvas-header">
        <h5>Menu</h5>
        <button class="btn-close" data-bs-dismiss="offcanvas"></button>
    </div>

    <div class="offcanvas-body bg-dark sidebar">

        <!-- Home -->
        <a href="dashboard.php" class="active sidebar-toggle">
            <i class="bi bi-house-fill"></i> Home
        </a>

        <!-- Users -->
        <button class="sidebar-toggle"
            data-bs-toggle="collapse"
            data-bs-target="#usersMenuMobile">
            <span><i class="bi bi-people-fill"></i> Users</span>
            <i class="bi bi-chevron-down"></i>
        </button>

        <div class="collapse submenu" id="usersMenuMobile" data-bs-parent="#sidebarMenu">
            <a href="admins.php">Admins</a>
            <a href="users.php">Users</a>
            <a href="agents.php">Agents</a>
            <a href="builders.php">Builders</a>
        </div>

        <!-- City & State -->
        <button class="sidebar-toggle"
            data-bs-toggle="collapse"
            data-bs-target="#stateMenuMobile">
            <span><i class="bi bi-gear-fill"></i> City & State</span>
            <i class="bi bi-chevron-down"></i>
        </button>

        <div class="collapse submenu" id="stateMenuMobile" data-bs-parent="#sidebarMenu">
            <a href="city.php">City</a>
            <a href="state.php">State</a>
        </div>

        <!-- Properties -->
        <button class="sidebar-toggle"
            data-bs-toggle="collapse"
            data-bs-target="#propertyMenuMobile">
            <span><i class="bi bi-house-door-fill"></i> Properties</span>
            <i class="bi bi-chevron-down"></i>
        </button>

        <div class="collapse submenu" id="propertyMenuMobile" data-bs-parent="#sidebarMenu">
            <a href="propertyadd.php">Add Property</a>
            <a href="propertyview.php">View Properties</a>
        </div>

        <!-- Contact -->
        <button class="sidebar-toggle"
            data-bs-toggle="collapse"
            data-bs-target="#contactMenuMobile">
            <span><i class="bi bi-chat-dots-fill"></i> Contacts</span>
            <i class="bi bi-chevron-down"></i>
        </button>

        <div class="collapse submenu" id="contactMenuMobile" data-bs-parent="#sidebarMenu">
            <a href="contactlist.php">Contact</a>
            <a href="feedback.php">Feedback</a>
        </div>

        <!-- About -->
        <button class="sidebar-toggle"
            data-bs-toggle="collapse"
            data-bs-target="#aboutMenuMobile">
            <span><i class="bi bi-info-circle-fill"></i> About</span>
            <i class="bi bi-chevron-down"></i>
        </button>

        <div class="collapse submenu" id="aboutMenuMobile" data-bs-parent="#sidebarMenu">
            <a href="about-add.php">Add About</a>
            <a href="about-view.php">View About</a>
        </div>

    </div>
</div>


<!-- DESKTOP SIDEBAR -->
<div class="d-none d-md-block col-md-2 col-lg-2 bg-dark sidebar" id="desktopSidebar">

    <a href="dashboard.php" class="active sidebar-toggle">
        <i class="bi bi-house-fill"></i> Home
    </a>

    <!-- Users -->
    <button class="sidebar-toggle"
        data-bs-toggle="collapse"
        data-bs-target="#usersMenu">
        <span><i class="bi bi-people-fill"></i> Users</span>
        <i class="bi bi-chevron-down"></i>
    </button>

    <div class="collapse submenu" id="usersMenu" data-bs-parent="#desktopSidebar">
        <a href="admins.php">Admins</a>
        <a href="users.php">Users</a>
        <a href="agents.php">Agents</a>
        <a href="builders.php">Builders</a>
    </div>

    <!-- City & State -->
    <button class="sidebar-toggle"
        data-bs-toggle="collapse"
        data-bs-target="#stateMenu">
        <span><i class="bi bi-gear-fill"></i> City & State</span>
        <i class="bi bi-chevron-down"></i>
    </button>

    <div class="collapse submenu" id="stateMenu" data-bs-parent="#desktopSidebar">
        <a href="city.php">City</a>
        <a href="state.php">State</a>
    </div>

    <!-- Properties -->
    <button class="sidebar-toggle"
        data-bs-toggle="collapse"
        data-bs-target="#propertyMenu">
        <span><i class="bi bi-house-door-fill"></i> Properties</span>
        <i class="bi bi-chevron-down"></i>
    </button>

    <div class="collapse submenu" id="propertyMenu" data-bs-parent="#desktopSidebar">
        <a href="propertyadd.php">Add Property</a>
        <a href="propertyview.php">View Properties</a>
    </div>

    <!-- Contact -->
    <button class="sidebar-toggle"
        data-bs-toggle="collapse"
        data-bs-target="#contactMenu">
        <span><i class="bi bi-chat-dots-fill"></i> Contacts</span>
        <i class="bi bi-chevron-down"></i>
    </button>

    <div class="collapse submenu" id="contactMenu" data-bs-parent="#desktopSidebar">
        <a href="contactlist.php">Contact</a>
        <a href="feedback.php">Feedback</a>
    </div>

    <!-- About -->
    <button class="sidebar-toggle"
        data-bs-toggle="collapse"
        data-bs-target="#aboutMenu">
        <span><i class="bi bi-info-circle-fill"></i> About</span>
        <i class="bi bi-chevron-down"></i>
    </button>

    <div class="collapse submenu" id="aboutMenu" data-bs-parent="#desktopSidebar">
        <a href="about-add.php">Add About</a>
        <a href="about-view.php">View About</a>
    </div>

</div>

<?php include 'includes/footer.php'; ?>