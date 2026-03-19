<div class="offcanvas offcanvas-start d-md-none" tabindex="-1" id="sidebarMenu" aria-labelledby="sidebarMenuLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="sidebarMenuLabel">Menu</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body p-4 bg-dark">
            <div class="sidebar">
                
                        <!-- Home -->
                        <a href="dashboard.php" class="active">
                            <i class="bi bi-house-fill"></i>
                            Home
                        </a>

                        <!-- Users Dropdown -->
                        <a class="d-flex justify-content-between align-items-center"
                        data-bs-toggle="collapse"
                        href="#usersMenu"
                        role="button"
                        aria-expanded="false">

                            <span>
                                <i class="bi bi-people-fill"></i>
                                Users
                            </span>

                            <i class="bi bi-chevron-right small"></i>
                        </a>

                        <div class="collapse ps-4" id="usersMenu">
                            <a href="#" class="submenu-item">
                                Admins
                            </a>
                            <a href="#" class="submenu-item">
                                Users
                            </a>
                            <a href="#" class="submenu-item">
                                Agents
                            </a>
                            <a href="#" class="submenu-item">
                                Builders
                            </a>
                        </div>

                        <!-- City and State Dropdown -->
                        <a class="d-flex justify-content-between align-items-center"
                        data-bs-toggle="collapse"
                        href="#settingsMenu"
                        role="button"
                        aria-expanded="false">

                            <span>
                                <i class="bi bi-gear-fill"></i>
                                City & State
                            </span>

                            <i class="bi bi-chevron-right small"></i>
                        </a>

                        <div class="collapse ps-4" id="settingsMenu">
                            <a href="#" class="submenu-item">
                                City
                            </a>
                            <a href="#" class="submenu-item">
                                State
                            </a>
                        </div>

                        <!-- Properties Dropdown -->
                        <a class="d-flex justify-content-between align-items-center"
                        data-bs-toggle="collapse"
                        href="#propertiesMenu"
                        role="button"
                        aria-expanded="false"
                        aria-controls="propertiesMenu">

                            <span>
                                <i class="bi bi-house-door-fill"></i>
                                Properties
                            </span>

                            <i class="bi bi-chevron-right small"></i>
                        </a>

                        <div class="collapse ps-4" id="propertiesMenu">
                            <a href="#" class="submenu-item">
                                Add Property
                            </a>
                            <a href="#" class="submenu-item">
                                View Properties
                            </a>
                        </div>

                        <!-- Contact and feedback Dropdown -->
                        <a class="d-flex justify-content-between align-items-center"
                        data-bs-toggle="collapse"
                        href="#contactMenu"
                        role="button"
                        aria-expanded="false"
                        aria-controls="contactMenu">

                            <span>
                                <i class="bi bi-chat-dots-fill"></i>
                                Contacts & Feedback
                            </span>

                            <i class="bi bi-chevron-right small"></i>
                        </a>

                        <div class="collapse ps-4" id="contactMenu">
                            <a href="#" class="submenu-item">
                                Contact
                            </a>
                            <a href="#" class="submenu-item">
                                Feedback
                            </a>
                        </div>

                        <!-- About page Dropdown -->
                        <a class="d-flex justify-content-between align-items-center"
                        data-bs-toggle="collapse"
                        href="#aboutMenu"
                        role="button"
                        aria-expanded="false">

                            <span>
                                <i class="bi bi-info-circle-fill"></i>
                                About
                            </span>

                            <i class="bi bi-chevron-right small"></i>
                        </a>

                        <div class="collapse ps-4" id="aboutMenu">
                            <a href="#" class="submenu-item">
                                Add About
                            </a>
                            <a href="#" class="submenu-item">
                                View About
                            </a>
                        </div>

                        <!-- Logout -->
                        <a href="#">
                            <i class="bi bi-box-arrow-right"></i>
                            Logout
                        </a>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="d-none d-md-block col-md-3 col-lg-2 bg-dark sidebar">
                    <div>
                        <!-- Home -->
                        <a href="dashboard.php" class="active">
                            <i class="bi bi-house-fill"></i>
                            Home
                        </a>

                        <!-- Users Dropdown -->
                        <a class="d-flex justify-content-between align-items-center"
                        data-bs-toggle="collapse"
                        href="#usersMenu"
                        role="button"
                        aria-expanded="false">

                            <span>
                                <i class="bi bi-people-fill"></i>
                                Users
                            </span>

                            <i class="bi bi-chevron-down small"></i>
                        </a>

                        <div class="collapse ps-4" id="usersMenu">
                            <a href="admins.php" class="submenu-item">
                                Admins
                            </a>
                            <a href="users.php" class="submenu-item">
                                Users
                            </a>
                            <a href="agents.php" class="submenu-item">
                                Agents
                            </a>
                            <a href="builders.php" class="submenu-item">
                                Builders
                            </a>
                        </div>

                        <!-- City and State Dropdown -->
                        <a class="d-flex justify-content-between align-items-center"
                        data-bs-toggle="collapse"
                        href="#settingsMenu"
                        role="button"
                        aria-expanded="false">

                            <span>
                                <i class="bi bi-gear-fill"></i>
                                City & State
                            </span>

                            <i class="bi bi-chevron-down small"></i>
                        </a>

                        <div class="collapse ps-4" id="settingsMenu">
                            <a href="city.php" class="submenu-item">
                                City
                            </a>
                            <a href="state.php" class="submenu-item">
                                State
                            </a>
                        </div>

                        <!-- Properties Dropdown -->
                        <a class="d-flex justify-content-between align-items-center"
                        data-bs-toggle="collapse"
                        href="#propertiesMenu"
                        role="button"
                        aria-expanded="false">

                            <span>
                                <i class="bi bi-house-door-fill"></i>
                                Properties
                            </span>

                            <i class="bi bi-chevron-down small"></i>
                        </a>

                        <div class="collapse ps-4" id="propertiesMenu">
                            <a href="propertyadd.php" class="submenu-item">
                                Add Property
                            </a>
                            <a href="propertyview.php" class="submenu-item">
                                View Properties
                            </a>
                        </div>

                        <!-- Contact and feedback Dropdown -->
                        <a class="d-flex justify-content-between align-items-center"
                        data-bs-toggle="collapse"
                        href="#contactMenu"
                        role="button"
                        aria-expanded="false">

                            <span>
                                <i class="bi bi-chat-dots-fill"></i>
                                Contacts & Feedback
                            </span>

                            <i class="bi bi-chevron-down small"></i>
                        </a>

                        <div class="collapse ps-4" id="propertiesMenu">
                            <a href="contactlist.php" class="submenu-item">
                                Contact
                            </a>
                            <a href="feedback.php" class="submenu-item">
                                Feedback
                            </a>
                        </div>

                        <!-- About page Dropdown -->
                        <a class="d-flex justify-content-between align-items-center"
                        data-bs-toggle="collapse"
                        href="#aboutMenu"
                        role="button"
                        aria-expanded="false">

                            <span>
                                <i class="bi bi-info-circle-fill"></i>
                                About
                            </span>

                            <i class="bi bi-chevron-down small"></i>
                        </a>

                        <div class="collapse ps-4" id="aboutMenu">
                            <a href="about-add.php" class="submenu-item">
                                Add About
                            </a>
                            <a href="about-view.php" class="submenu-item">
                                View About
                            </a>
                        </div>

                        <!-- Logout -->
                        <a href="#">
                            <i class="bi bi-box-arrow-right"></i>
                            Logout
                        </a>

                    </div>
                </div>