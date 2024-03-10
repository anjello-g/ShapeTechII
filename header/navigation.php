<div class="navbar bg-base-100 dark:bg-gray-900">
    <div class="navbar-start md:hidden">
        <div class="dropdown md:hidden">
            <div tabindex="0" role="button" class="btn btn-ghost btn-circle dark:text-gray-200">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h7" />
                </svg>
            </div>
            <ul tabindex="0"
                class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-base-100 rounded-box dark:text-gray-200 dark:bg-gray-800 w-52">
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About Us</a></li>
                <li><a href="services.php">Services</a></li>
                <li><a href="support.php">Support</a></li>
            </ul>
        </div>
    </div>

    <div class="navbar-start hidden md:block">
        <img src="images/shapetechlogo-light.png" class="dark:hidden w-36" alt="ShapeTech" id="lightLogo">
        <img src="images/shapetechlogo-dark.png" class="w-36 hidden dark:block" alt="ShapeTech" id="darkLogo">
    </div>

    <div class="navbar-center md:hidden">
        <img src="images/shapetechlogo-light.png" class="dark:hidden w-36" alt="ShapeTech" id="lightLogo">
        <img src="images/shapetechlogo-dark.png" class="w-36 hidden dark:block" alt="ShapeTech" id="darkLogo">
    </div>

    <div id="scrollNavbar" class="fixed top-1 left-0 right-0 z-50 flex justify-center ">
        <ul tabindex="0"
            class="ring-1 ring-base-300 dark:ring-gray-500 px-2 py-1 shadow bg-base-100 dark:bg-gray-900 rounded-box w-auto flex space-x-1 hidden md:flex">
            <a href="index.php" class="flex items-center dark:text-white">
                <li class="btn btn-ghost flex items-center">

                    <img src="images/house-solid.svg" class="dark:hidden h-4 w-4 lg:h-5 lg:w-5 mr-2 dark:text-white"
                        id="lightLogo">
                    <img src="images/house-solid-dark.svg"
                        class="hidden dark:block h-4 w-4 lg:h-5 lg:w-5 mr-2 dark:text-white" id="darkLogo">
                    <span class="text-xs lg:text-sm">Home</span>
                </li>
            </a>
            <a href="about.php" class="flex items-center dark:text-white">
                <li class="btn btn-ghost flex items-center">

                    <img src="images/building-solid.svg" class="dark:hidden h-4 w-4 lg:h-5 lg:w-5 mr-2" id="lightLogo">
                    <img src="images/building-solid-dark.svg"
                        class="hidden dark:block h-4 w-4 lg:h-5 lg:w-5 mr-2 dark:text-white" id="darkLogo">
                    <span class="text-xs lg:text-sm">About Us</span>
                </li>
            </a>
            <a href="services.php" class="flex items-center dark:text-white">
                <li class="btn btn-ghost flex items-center">

                    <img src="images/gears-solid.svg" class="dark:hidden h-4 w-4 lg:h-5 lg:w-5 mr-2" id="lightLogo">
                    <img src="images/gears-solid-dark.svg"
                        class="hidden dark:block h-4 w-4 lg:h-5 lg:w-5 mr-2 dark:text-white" id="darkLogo">
                    <span class="text-xs lg:text-sm">Services</span>
                </li>
            </a>
            <a href="support.php" class="flex items-center dark:text-white">
                <li class="btn btn-ghost flex items-center">

                    <img src="images/life-ring-solid.svg" class="dark:hidden h-4 w-4 lg:h-5 lg:w-5 mr-2" id="lightLogo">
                    <img src="images/life-ring-solid-dark.svg"
                        class="hidden dark:block h-4 w-4 lg:h-5 lg:w-5 mr-2 dark:text-white" id="darkLogo">
                    <span class="text-xs lg:text-sm">Support</span>
                </li>
            </a>
        </ul>
    </div>

    <div class="navbar-end md:flex md:items-center">
        <label class="grid place-items-center z-50 relative">
            <img src="images/bullhorn-solid.svg" class="dark:hidden h-5 w-5  mr-4" id="lightLogo">
            <img src="images/bullhorn-solid-dark.svg" class="hidden dark:block h-5 w-5 mr-4 dark:text-white"
                id="darkLogo">
        </label>
    </div>

</div>