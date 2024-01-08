<!DOCTYPE html>
<html lang="en" dir="ltr" class="">

<head>
    <meta charset="utf-8" />
    <title>Casa bella</title>
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta
      content="Tailwind Multipurpose Admin & Dashboard Template"
      name="description"
    />
    <meta content="" name="Mannatthemes" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <link rel="stylesheet" href="assets/css/icons.css" />
    <link rel="stylesheet" href="assets/css/tailwind.css" />

</head>

<body data-layout-mode="light" class="bg-gray-100 dark:bg-gray-900 bg-[url('../images/bg-body.png')] dark:bg-[url('../images/bg-body-2.png')]">


    <!-- leftbar-tab-menu -->
    <nav  class="border-gray-200 bg-gray-900 px-2.5 py-2.5 shadow-sm dark:bg-slate-800 sm:px-4 block print:hidden">
      <div class="container mx-0 flex max-w-full flex-wrap items-center lg:mx-auto">
        <div class="flex items-center">
          <a href="#" class="flex items-center outline-none">
            <img src="assets/images/logo-sm.png" alt="" class="h-6" />
            <img src="assets/images/logo.png" alt="" class="ml-2 hidden xl:block mt-1" />
          </a>
        </div>

        <div
          class="order-2 hidden w-full items-center justify-between md:order-1 md:ml-5 md:flex md:w-auto"
          id="mobile-menu-2"
        >
          <ul
            class="font-body mt-4 flex flex-col font-medium md:mt-0 md:flex-row md:text-sm md:font-medium space-x-0 md:space-x-4 lg:space-x-6 xl:space-x-8 navbar"
          >
            <li class="dropdown">
              <button
                id="navDashboardLink"
                data-dropdown-toggle="navDashboard"
                class="dropdown-toggle flex w-full items-center border-b border-gray-800 py-2 px-3 font-medium md:border-0 md:p-0"
              >
                <i class="ti ti-smart-home mr-1 pb-1 text-lg"></i> Dashboards
                <i class="ti ti-chevron-down ml-auto lg:ml-1"></i>
              </button>
              <!-- Dropdown menu -->
              <div
                id="navDashboard"
                class="dropdown-menu z-10 my-1 hidden w-full list-none divide-y divide-gray-100 rounded bg-gray-800 md:bg-white text-base shadow border border-slate-700 md:border-white dark:border-slate-700/50 dark:divide-gray-600 dark:bg-gray-900 md:w-44 dropdown-menu"
              >
                <ul class="py-1">
                  <li>
                    <a href="index.html" class="nav-link  dark:hover:bg-slate-800/70">Analytics</a>
                  </li>
                  <li>
                    <a href="ecommerce-index.html" class="nav-link  dark:hover:bg-slate-800/70">Ecommerce</a>
                  </li>
                  <li>
                    <a href="project-index.html" class="nav-link  dark:hover:bg-slate-800/70">Project</a>
                  </li>
                  <li>
                    <a href="nft-index.html" class="nav-link  dark:hover:bg-slate-800/70">NFTs</a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="dropdown">
              <button
                id="navAppsLink"
                data-dropdown-toggle="navApps"
                class="dropdown-toggle flex w-full items-center border-b border-gray-800 py-2 px-3 font-medium md:border-0 md:p-0"
              >
                <i class="ti ti-apps mr-1 pb-1 text-lg"></i> Apps
                <i class="ti ti-chevron-down ml-auto lg:ml-1"></i>
              </button>
              <!-- Dropdown menu -->
              <div
                id="navApps"
                class="dropdown-menu z-10 my-1 hidden w-full list-none divide-y divide-gray-100 rounded bg-gray-800 md:bg-white text-base shadow dark:divide-gray-600 border border-slate-700 md:border-white dark:border-slate-700/50 dark:bg-gray-900 md:w-44 dropdown-menu"
              >
                <ul class="py-1">
                  <li>
                    <a href="inbox.html" class="nav-link  dark:hover:bg-slate-800/70">Emails</a>
                  </li>
                  <li>
                    <a href="email-read.html" class="nav-link  dark:hover:bg-slate-800/70">Email Read</a>
                  </li>
                  <li>
                    <a href="chat.html" class="nav-link  dark:hover:bg-slate-800/70">Chat</a>
                  </li>
                  <li>
                    <a href="contact-list.html" class="nav-link  dark:hover:bg-slate-800/70">Contact List</a>
                  </li>
                  <li>
                    <a href="calendar.html" class="nav-link  dark:hover:bg-slate-800/70">Calendar</a>
                  </li>
                  <li>
                    <a href="invoice.html" class="nav-link  dark:hover:bg-slate-800/70">Invoice</a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="dropdown">
              <button
                id="navUIkitLink"
                data-dropdown-toggle="navUIkit"
                class="dropdown-toggle flex w-full items-center border-b border-gray-800 py-2 px-3 font-medium md:border-0 md:p-0"
              >
                <i class="ti ti-planet mr-1 pb-1 text-lg"></i> UI KIt
                <i class="ti ti-chevron-down ml-auto lg:ml-1"></i>
              </button>
              <!-- Dropdown menu -->
              <div
                id="navUIkit"
                class="dropdown-menu z-20 my-1 hidden w-full sm:left-0 sm:right-0 md:left-0 md:right-0 lg:left-0 lg:right-0 xl:left-auto xl:right-auto  xl:max-w-screen-lg list-none divide-y divide-gray-100 rounded bg-gray-800 md:bg-white text-base shadow dark:divide-gray-600 border border-slate-700 md:border-white dark:border-slate-700/50 dark:bg-gray-900
                bg-[url('../images/widgets/m-p2.png')] bg-no-repeat bg-right-bottom dropdown-menu"
              >
                <div class="grid grid-cols-12 gap-4 px-4 pb-4"> 
                  <div class="col-span-6 md:col-span-3">
                    <h5 class="font-medium text-base p-4  border-b border-dashed border-slate-500 dark:border-slate-600 md:border-slate-300 text-slate-300 dark:text-slate-500 md:text-slate-700">
                      <span class="w-8 h-8 rounded-md inline-flex justify-center items-center mr-1 bg-pink-500 bg-opacity-10">
                        <i class="ti ti-planet text-pink-500"></i>
                      </span>                  
                      UI Elements</h5>
                    <ul class="py-1">
                      <li>
                        <a href="ui-alerts.html" class="nav-link  dark:hover:bg-slate-800/70">Alerts</a>
                      </li>
                      <li>
                        <a href="ui-avatars.html" class="nav-link  dark:hover:bg-slate-800/70">Avatars</a>
                      </li>
                      <li>
                        <a href="ui-buttons.html" class="nav-link  dark:hover:bg-slate-800/70">Buttons</a>
                      </li>
                      <li>
                        <a href="ui-budges.html" class="nav-link  dark:hover:bg-slate-800/70">Budges</a>
                      </li>
                      <li>
                        <a href="ui-cards.html" class="nav-link  dark:hover:bg-slate-800/70">Cards</a>
                      </li>
                      <li>
                        <a href="ui-carousels.html" class="nav-link  dark:hover:bg-slate-800/70">Carousels</a>
                      </li>
                      <li>
                        <a href="ui-dropdowns.html" class="nav-link  dark:hover:bg-slate-800/70">Dropdown</a>
                      </li>
                      <li>
                        <a href="ui-images.html" class="nav-link  dark:hover:bg-slate-800/70">Images</a>
                      </li>
                      <li>
                        <a href="ui-lists.html" class="nav-link  dark:hover:bg-slate-800/70">Lists</a>
                      </li>
                      <li>
                        <a href="ui-modals.html" class="nav-link  dark:hover:bg-slate-800/70">Modals</a>
                      </li>
                      <li>
                      <li>
                        <a href="ui-navbars.html" class="nav-link  dark:hover:bg-slate-800/70">Navbars</a>
                      </li>
                      <li>
                        <a href="ui-paginations.html" class="nav-link  dark:hover:bg-slate-800/70">Paginations</a>
                      </li>
                      <li>
                        <a href="ui-progress.html" class="nav-link  dark:hover:bg-slate-800/70">Progress</a>
                      </li>
                      <li>
                        <a href="ui-tab-accordions.html" class="nav-link  dark:hover:bg-slate-800/70">Tab & Accordions</a>
                      </li>
                      <li>
                        <a href="ui-typography.html" class="nav-link  dark:hover:bg-slate-800/70">Typography</a>
                      </li>
                    </ul>                
                  </div>
                  <div class="col-span-6 md:col-span-3">
                    <h5 class="font-medium text-base p-4  border-b border-dashed border-slate-500 dark:border-slate-600 md:border-slate-300 text-slate-300 dark:text-slate-500 md:text-slate-700">
                      <span class="w-8 h-8 rounded-md inline-flex justify-center items-center mr-1 bg-blue-500 bg-opacity-10">
                        <i class="ti ti-tent text-blue-500"></i>
                      </span>                  
                      Advanced UI</h5>
                    <ul class="py-1">
                      <li>
                        <a href="advanced-animation.html" class="nav-link  dark:hover:bg-slate-800/70">Animation</a>
                      </li>
                      <li>
                        <a href="advanced-clipboard.html" class="nav-link  dark:hover:bg-slate-800/70">Clip Board</a>
                      </li>
                      <li>
                        <a href="advanced-dragula.html" class="nav-link  dark:hover:bg-slate-800/70">Dragula</a>
                      </li>
                      <li>
                        <a href="advanced-files.html" class="nav-link  dark:hover:bg-slate-800/70">File Manager</a>
                      </li>
                      <li>
                        <a href="advanced-highlight.html" class="nav-link  dark:hover:bg-slate-800/70">Highlight</a>
                      </li>
                      <li>
                        <a href="advanced-range-slider.html" class="nav-link  dark:hover:bg-slate-800/70">Range Slider</a>
                      </li>
                      <li>
                        <a href="advanced-ribbons.html" class="nav-link  dark:hover:bg-slate-800/70">Ribbons</a>
                      </li>
                      <li>
                        <a href="advanced-sweet-alerts.html" class="nav-link  dark:hover:bg-slate-800/70">Sweet Alerts</a>
                      </li>
                    </ul>
                    <div>
                      <h5 class="font-medium text-base p-4  border-b border-dashed border-slate-500 dark:border-slate-600 md:border-slate-300 text-slate-300 dark:text-slate-500 md:text-slate-700">
                        <span class="w-8 h-8 rounded-md inline-flex justify-center items-center mr-1 bg-purple-500 bg-opacity-10">
                          <i class="ti ti-columns text-purple-500"></i>
                        </span>                  
                        Tables</h5>
                      <ul class="py-1">
                        <li>
                          <a href="tables-basic.html" class="nav-link  dark:hover:bg-slate-800/70">Basic</a>
                        </li>
                        <li>
                          <a href="tables-datatable.html" class="nav-link  dark:hover:bg-slate-800/70">Datatables</a>
                        </li>
                        <li>
                          <a href="tables-editable.html" class="nav-link  dark:hover:bg-slate-800/70">Editable</a>
                        </li>
                      </ul>
                    </div>
                  </div> 
                  <div class="col-span-6 md:col-span-3">
                    <h5 class="font-medium text-base p-4  border-b border-dashed border-slate-500 dark:border-slate-600 md:border-slate-300 text-slate-300 dark:text-slate-500 md:text-slate-700">
                      <span class="w-8 h-8 rounded-md inline-flex justify-center items-center mr-1 bg-yellow-500 bg-opacity-10">
                        <i class="ti ti-file-report text-yellow-500"></i>
                      </span>                  
                      Forms</h5>
                    <ul class="py-1">
                      <li>
                        <a href="forms-elements.html" class="nav-link  dark:hover:bg-slate-800/70">Basic Elements</a>
                      </li>
                      <li>
                        <a href="forms-advanced.html" class="nav-link  dark:hover:bg-slate-800/70">Advance Elements</a>
                      </li>
                      <li>
                        <a href="forms-validation.html" class="nav-link  dark:hover:bg-slate-800/70">Validation</a>
                      </li>
                      <li>
                        <a href="forms-wizard.html" class="nav-link  dark:hover:bg-slate-800/70">Wizard</a>
                      </li>
                      <li>
                        <a href="forms-editors.html" class="nav-link  dark:hover:bg-slate-800/70">Editors</a>
                      </li>
                      <li>
                        <a href="forms-upload.html" class="nav-link  dark:hover:bg-slate-800/70">File Upload</a>
                      </li>
                      <li>
                        <a href="forms-img-crop.html" class="nav-link  dark:hover:bg-slate-800/70">Image Crop</a>
                      </li>
                    </ul>
                    <div>
                      <h5 class="font-medium text-base p-4  border-b border-dashed border-slate-500 dark:border-slate-600 md:border-slate-300 text-slate-300 dark:text-slate-500 md:text-slate-700">
                        <span class="w-8 h-8 rounded-md inline-flex justify-center items-center mr-1 bg-orange-500 bg-opacity-10">
                          <i class="ti ti-box text-orange-500"></i>
                        </span>                  
                        Icons</h5>
                      <ul class="py-1">
                        <li>
                          <a href="icons-tabler.html" class="nav-link  dark:hover:bg-slate-800/70">Tabler</a>
                        </li>
                        <li>
                          <a href="icons-fa.html" class="nav-link  dark:hover:bg-slate-800/70">Font Awesome</a>
                        </li>
                        <li>
                          <a href="icons-md.html" class="nav-link  dark:hover:bg-slate-800/70">Material Design</a>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div class="col-span-6 md:col-span-3">
                    <h5 class="font-medium text-base p-4  border-b border-dashed border-slate-500 dark:border-slate-600 md:border-slate-300 text-slate-300 dark:text-slate-500 md:text-slate-700">
                      <span class="w-8 h-8 rounded-md inline-flex justify-center items-center mr-1 bg-teal-500 bg-opacity-10">
                        <i class="ti ti-chart-infographic text-teal-500"></i>
                      </span>                  
                      Charts</h5>
                    <ul class="py-1">
                      <li>
                        <a href="charts-apex.html" class="nav-link  dark:hover:bg-slate-800/70">Apex</a>
                      </li>
                      <li>
                        <a href="charts-echart.html" class="nav-link  dark:hover:bg-slate-800/70">Echart</a>
                      </li>
                      <li>
                        <a href="charts-chartjs.html" class="nav-link  dark:hover:bg-slate-800/70">Chartjs</a>
                      </li>
                    </ul>
                    <div>
                      <h5 class="font-medium text-base p-4  border-b border-dashed border-slate-500 dark:border-slate-600 md:border-slate-300 text-slate-300 dark:text-slate-500 md:text-slate-700">
                        <span class="w-8 h-8 rounded-md inline-flex justify-center items-center mr-1 bg-slate-500 bg-opacity-10">
                          <i class="ti ti-map-pin text-slate-500"></i>
                        </span>                  
                        Maps</h5>
                      <ul class="py-1">
                        <li>
                          <a href="maps-google.html" class="nav-link  dark:hover:bg-slate-800/70">Google Maps</a>
                        </li>
                        <li>
                          <a href="maps-leaflet.html" class="nav-link  dark:hover:bg-slate-800/70">Leaflet Maps</a>
                        </li>
                        <li>
                          <a href="maps-vector.html" class="nav-link  dark:hover:bg-slate-800/70">Vector Maps</a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>            
              </div>
            </li>
            <li class="dropdown"> 
              <button
                id="navPagesLink"
                data-dropdown-toggle="navPages"
                class="dropdown-toggle flex w-full items-center border-b border-gray-800 py-2 px-3 font-medium md:border-0 md:p-0"
              >
                <i class="ti ti-file-diff mr-1 pb-1 text-lg"></i> Pages
                <i class="ti ti-chevron-down ml-auto lg:ml-1"></i>
              </button>
              <!-- Dropdown menu -->
              <div
                id="navPages"
                class="dropdown-menu z-10 my-1 hidden w-full list-none divide-y divide-gray-100 rounded bg-gray-800 md:bg-white text-base shadow dark:divide-gray-600 border border-slate-700 md:border-white dark:border-slate-700/50 dark:bg-gray-900 md:w-44 dropdown-menu"
              >
                <ul class="py-1">
                  <li>
                    <a href="starter.html" class="nav-link  dark:hover:bg-slate-800/70">Starter</a>
                  </li>
                  <li>
                    <a href="profile.html" class="nav-link  dark:hover:bg-slate-800/70">Profile</a>
                  </li>
                  <li>
                    <a href="timeline.html" class="nav-link  dark:hover:bg-slate-800/70">Timeline</a>
                  </li>
                  <li>
                    <a href="pricing.html" class="nav-link  dark:hover:bg-slate-800/70">Pricing</a>
                  </li>
                  <li>
                    <a href="blogs.html" class="nav-link  dark:hover:bg-slate-800/70">Blogs</a>
                  </li>
                  <li>
                    <a href="faqs.html" class="nav-link  dark:hover:bg-slate-800/70">FAQs</a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="dropdown">
              <button
                id="navAuthLink"
                data-dropdown-toggle="navAuth"
                class="dropdown-toggle flex w-full items-center border-b border-gray-800 py-2 px-3 font-medium md:border-0 md:p-0"
              >
                <i class="ti ti-shield-lock mr-1 pb-1 text-lg"></i> Authentication
                <i class="ti ti-chevron-down ml-auto lg:ml-1"></i>
              </button>
              <!-- Dropdown menu -->
              <div
                id="navAuth"
                class="dropdown-menu z-10 my-1 hidden w-full list-none divide-y divide-gray-100 rounded bg-gray-800 md:bg-white text-base shadow dark:divide-gray-600 border border-slate-700 md:border-white dark:border-slate-700/50 dark:bg-gray-900 md:w-44 dropdown-menu"
              >
                <ul class="py-1">
                  <li>
                    <a href="login.html" class="nav-link  dark:hover:bg-slate-800/70">Log In</a>
                  </li>
                  <li>
                    <a href="register.html" class="nav-link  dark:hover:bg-slate-800/70">Register</a>
                  </li>
                  <li>
                    <a href="re-password.html" class="nav-link  dark:hover:bg-slate-800/70">Re-Password</a>
                  </li>
                  <li>
                    <a href="lock-screen.html" class="nav-link  dark:hover:bg-slate-800/70">Lock Screen</a>
                  </li>
                  <li>
                    <a href="404.html" class="nav-link  dark:hover:bg-slate-800/70">Error 404</a>
                  </li>
                  <li>
                    <a href="500.html" class="nav-link  dark:hover:bg-slate-800/70">Error 500</a>
                  </li>
                </ul>            
              </div>
            </li>
          </ul>
        </div>
        <div class="order-1 ml-auto flex items-center md:order-2">
          <div class="relative mr-2 hidden lg:mr-4 lg:block">
            <div
              class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
              <i class="ti ti-search text-gray-400 z-10"></i>
            </div>
            <input
              type="text"
              id="email-adress-icon"
              class="block w-full rounded-lg border border-gray-700 bg-gray-900 p-2 pl-10 text-gray-300 outline-none focus:border-gray-700 focus:ring-gray-700 dark:bg-slate-800 sm:text-sm"
              placeholder="Search..."
            />
          </div>
          <div class="mr-2 lg:mr-4">
            <button id="toggle-theme" class="flex rounded-full md:mr-0 relative">
              <i class="ti ti-sun top-icon"></i>
            </button>
          </div>
          <div class="mr-2 lg:mr-4 dropdown relative">
            <button
              type="button"
              class="dropdown-toggle flex rounded-full md:mr-0"
              id="Notifications"
              aria-expanded="false"
              data-dropdown-toggle="navNotifications"
            >
              <i class="ti ti-bell text-2xl text-gray-400"></i>
            </button> 

            <div
              class="dropdown-menu dropdown-menu-right z-50 my-1 hidden w-64 list-none divide-y h-52 divide-gray-100 rounded border-slate-700 md:border-white text-base shadow dark:divide-gray-600 bg-white dark:bg-slate-800"
              id="navNotifications" data-simplebar
            >
              <ul class="py-1" aria-labelledby="navNotifications">
                <li class="py-2 px-4">
                  <a href="javascript:void(0);" class="dropdown-item">
                    <div class="flex align-items-start">
                        <img class="object-cover rounded-full h-8 w-8 shrink-0 mr-3" src="assets/images/users/avatar-2.jpg" alt="logo" />
                        <div class="flex-grow ml-0.5 overflow-hidden">
                            <p class="text-sm font-medium text-gray-800 truncate dark:text-gray-300">Karen Robinson</p>
                            <p class="text-gray-500 mb-0 text-xs  truncate dark:text-gray-400">
                                Hey ! i'm available here
                            </p>
                        </div>
                    </div>
                  </a>              
                </li>
                <li class="py-2 px-4">
                  <a href="javascript:void(0);" class="dropdown-item">
                    <div class="flex align-items-start">
                        <img class="object-cover rounded-full h-8 w-8 shrink-0 mr-3" src="assets/images/users/avatar-3.jpg" alt="logo" />
                        <div class="flex-grow ml-0.5 overflow-hidden">
                            <p class="text-sm font-medium text-gray-800 truncate dark:text-gray-300">Your order is placed</p>
                            <p class="text-gray-500 mb-0 text-xs  truncate dark:text-gray-400">
                              Dummy text of the printing and industry.
                            </p>
                        </div>
                    </div>
                  </a>     
                </li>
                <li class="py-2 px-4">
                  <a href="javascript:void(0);" class="dropdown-item">
                    <div class="flex align-items-start">
                        <img class="object-cover rounded-full h-8 w-8 shrink-0 mr-3" src="assets/images/users/avatar-9.jpg" alt="logo" />
                        <div class="flex-grow ml-0.5 overflow-hidden">
                            <p class="text-sm font-medium text-gray-800 truncate dark:text-gray-300">Robert McCray</p>
                            <p class="text-gray-500 mb-0 text-xs  truncate dark:text-gray-400">
                                Good Morning!
                            </p>
                        </div>
                    </div>
                  </a>     
                </li>
                <li class="py-2 px-4">
                  <a href="javascript:void(0);" class="dropdown-item">
                    <div class="flex align-items-start">
                        <img class="object-cover rounded-full h-8 w-8 shrink-0 mr-3" src="assets/images/users/avatar-6.jpg" alt="logo" />
                        <div class="flex-grow ml-0.5 overflow-hidden">
                            <p class="text-sm font-medium text-gray-800 truncate dark:text-gray-300">Meeting with designers</p>
                            <p class="text-gray-500 mb-0 text-xs  truncate dark:text-gray-400">
                              It is a long established fact that a reader.
                            </p>
                        </div>
                    </div>
                  </a>     
                </li>
              </ul>
            </div>
          </div>
          <div class="mr-2 lg:mr-0 dropdown relative"> 
            <button
              type="button"
              class="dropdown-toggle flex items-center rounded-full text-sm focus:bg-none focus:ring-0 dark:focus:ring-0 md:mr-0"
              id="user-profile"
              aria-expanded="false"
              data-dropdown-toggle="navUserdata"
            >
              <img
                class="h-8 w-8 rounded-full"
                src="assets/images/users/avatar-1.jpg"
                alt="user photo"
              />
              <span class="ml-2 hidden text-left xl:block">
                <span class="block font-medium text-gray-400">Maria Gibson</span>
                <span class="-mt-1 block text-sm font-medium text-gray-500"
                  >Admin</span
                >
              </span>
            </button>

            <div
              class="dropdown-menu dropdown-menu-right z-50 my-1 hidden list-none divide-y divide-gray-100 rounded border-slate-700 md:border-white text-base shadow dark:divide-gray-600 bg-white dark:bg-slate-800"
              id="navUserdata"
            >
              <div class="py-3 px-4">
                <span
                  class="block text-sm font-medium text-gray-900 dark:text-white"
                  >Bonnie Green</span
                >
                <span
                  class="block truncate text-sm font-normal text-gray-500 dark:text-gray-400"
                  >name@flowbite.com</span
                >
              </div>
              <ul class="py-1" aria-labelledby="navUserdata">
                <li>
                  <a
                    href="#"
                    class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-900/20 dark:hover:text-white"
                    >Dashboard</a
                  >
                </li>
                <li>
                  <a
                    href="#"
                    class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-900/20 dark:hover:text-white"
                    >Settings</a
                  >
                </li>
                <li>
                  <a
                    href="#"
                    class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-900/20 dark:hover:text-white"
                    >Earnings</a
                  >
                </li>
                <li>
                  <a
                    href="#"
                    class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-900/20 dark:hover:text-white"
                    >Sign out</a
                  >
                </li>
              </ul>
            </div>
          </div>

          <button
            data-collapse-toggle="mobile-menu-2"
            type="button" id="toggle-menu"
            class="ml-1 inline-flex items-center rounded-lg text-sm text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-0 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600 md:hidden"
            aria-controls="mobile-menu-2"
            aria-expanded="false"
          >
            <span class="sr-only">Open main menu</span>
            <i class="ti ti-menu-2 h-6 w-6 text-lg leading-6"></i>
            <i class="ti ti-X hidden h-6 w-6 text-lg leading-6"></i>
          </button>
        </div>
      </div>
    </nav>

    @yield('content')

    <div class="absolute bottom-0 left-2 right-2 block print:hidden">
          <div class="container mx-auto">
            <!-- Footer Start -->
            <footer
              class="footer mt-4 rounded-tr-md rounded-tl-md bg-white dark:bg-slate-800 p-4 text-center font-medium text-slate-600 dark:text-slate-400 shadow md:text-left"
            >
              &copy;
              <script>
                document.write(new Date().getFullYear());
              </script>
             
             <span class="float-right hidden text-slate-600 dark:text-slate-400 md:inline-block">
    Crafted with <i class="ti ti-heart text-red-500"></i> by
    <a href="https://www.facebook.com/rabie.zouita.37/" target="_blank" rel="noopener noreferrer">Rabie Zouita</a>
</span>

              
            </footer>
            <!-- end Footer -->
          </div>
        </div>
    
    <script src="assets/libs/simplebar/simplebar.min.js"></script>
    <script src="assets/js/app.js"></script>
</body>

</html>