@props(['links'])
<div class="flex items-center justify-between py-2.5 mx-6 mb-4 border-b border-gray-200">
    <div id="breadcrumb" class="flex items-center gap-2 overflow-x-scroll max-w-30 sm:w-auto">
        <a href="#" class="text-xs lg:text-sm text-sky-900">Application</a>
        @if (isset($links))
        @foreach ($links as $item)
            <i class="mt-0.5 text-slate-800 text-xs bi bi-caret-right-fill"></i>
            @if ($item['url'] === '#')
            <span class="text-xs lg:text-sm text-slate-400">{{ $item['text'] }}</span>
            @else
            <span class="text-xs text-primary-1 hover:opacity-90 lg:text-sm">
                <a href="{{ $item['url'] }}">{{ $item['text'] }}</a>
            </span>
            @endif
        @endforeach
        @endif
    </div>
    <div id="userAccount" class="flex items-center gap-4">
        <div class="hidden px-4 py-2 text-xs text-white bg-indigo-800 rounded-full sm:block">
            <h4>TP 2024/2025 SM1</h4>
        </div>


<button id="dropdownNotificationButton" data-dropdown-placement="bottom-end" data-dropdown-toggle="dropdownNotification" class="relative inline-flex items-center text-sm font-medium text-center text-gray-500 hover:text-gray-900 focus:outline-none" type="button">
    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 14 20">
    <path d="M12.133 10.632v-1.8A5.406 5.406 0 0 0 7.979 3.57.946.946 0 0 0 8 3.464V1.1a1 1 0 0 0-2 0v2.364a.946.946 0 0 0 .021.106 5.406 5.406 0 0 0-4.154 5.262v1.8C1.867 13.018 0 13.614 0 14.807 0 15.4 0 16 .538 16h12.924C14 16 14 15.4 14 14.807c0-1.193-1.867-1.789-1.867-4.175ZM3.823 17a3.453 3.453 0 0 0 6.354 0H3.823Z"/>
    </svg>

    <div class="absolute block w-3 h-3 bg-lime-500 border-2 border-white rounded-full -top-0.5 start-2.5"></div>
    </button>

    <!-- Dropdown menu -->
    <div id="dropdownNotification" class="z-20 hidden w-full max-w-sm bg-white divide-y divide-gray-100 rounded-lg shadow" aria-labelledby="dropdownNotificationButton">
      <div class="block px-4 py-2 font-medium text-center text-gray-700 rounded-t-lg bg-gray-50">
          User Online
      </div>
      <div class="divide-y divide-gray-100">
        <a href="#" class="flex px-4 py-3 hover:bg-gray-100">
          <div class="flex-shrink-0">
            <img class="rounded-full w-11 h-11" src="{{ asset('images/profile-1.jpeg') }}" alt="Jese image">
            <div class="absolute flex items-center justify-center w-5 h-5 -mt-5 bg-blue-600 border border-white rounded-full ms-6">
              <svg class="w-2 h-2 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 18">
                <path d="M1 18h16a1 1 0 0 0 1-1v-6h-4.439a.99.99 0 0 0-.908.6 3.978 3.978 0 0 1-7.306 0 .99.99 0 0 0-.908-.6H0v6a1 1 0 0 0 1 1Z"/>
                <path d="M4.439 9a2.99 2.99 0 0 1 2.742 1.8 1.977 1.977 0 0 0 3.638 0A2.99 2.99 0 0 1 13.561 9H17.8L15.977.783A1 1 0 0 0 15 0H3a1 1 0 0 0-.977.783L.2 9h4.239Z"/>
              </svg>
            </div>
          </div>
          <div class="w-full ps-3">
              <div class="text-gray-500 text-sm mb-1.5">New message from <span class="font-semibold text-gray-900">Jese Leos</span>: "Hey, what's up? All set for the presentation?"</div>
              <div class="text-xs text-blue-600">a few moments ago</div>
          </div>
        </a>
        <a href="#" class="flex px-4 py-3 hover:bg-gray-100">
          <div class="flex-shrink-0">
            <img class="rounded-full w-11 h-11" src="{{ asset('images/profile-1.jpeg') }}" alt="Joseph image">
            <div class="absolute flex items-center justify-center w-5 h-5 -mt-5 bg-gray-900 border border-white rounded-full ms-6">
              <svg class="w-2 h-2 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 18">
                <path d="M6.5 9a4.5 4.5 0 1 0 0-9 4.5 4.5 0 0 0 0 9ZM8 10H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5Zm11-3h-2V5a1 1 0 0 0-2 0v2h-2a1 1 0 1 0 0 2h2v2a1 1 0 0 0 2 0V9h2a1 1 0 1 0 0-2Z"/>
              </svg>
            </div>
          </div>
          <div class="w-full ps-3">
              <div class="text-gray-500 text-sm mb-1.5"><span class="font-semibold text-gray-900">Joseph Mcfall</span> and <span class="font-medium text-gray-900">5 others</span> started following you.</div>
              <div class="text-xs text-blue-600">10 minutes ago</div>
          </div>
        </a>
        <a href="#" class="flex px-4 py-3 hover:bg-gray-100">
          <div class="flex-shrink-0">
            <img class="rounded-full w-11 h-11" src="{{ asset('images/profile-1.jpeg') }}" alt="Bonnie image">
            <div class="absolute flex items-center justify-center w-5 h-5 -mt-5 bg-red-600 border border-white rounded-full ms-6">
              <svg class="w-2 h-2 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 18">
                <path d="M17.947 2.053a5.209 5.209 0 0 0-3.793-1.53A6.414 6.414 0 0 0 10 2.311 6.482 6.482 0 0 0 5.824.5a5.2 5.2 0 0 0-3.8 1.521c-1.915 1.916-2.315 5.392.625 8.333l7 7a.5.5 0 0 0 .708 0l7-7a6.6 6.6 0 0 0 2.123-4.508 5.179 5.179 0 0 0-1.533-3.793Z"/>
              </svg>
            </div>
          </div>
          <div class="w-full ps-3">
              <div class="text-gray-500 text-sm mb-1.5 "><span class="font-semibold text-gray-900 ">Bonnie Green</span> and <span class="font-medium text-gray-900">141 others</span> love your story. See it and view more stories.</div>
              <div class="text-xs text-blue-600">44 minutes ago</div>
          </div>
        </a>
        <a href="#" class="flex px-4 py-3 hover:bg-gray-100">
          <div class="flex-shrink-0">
            <img class="rounded-full w-11 h-11" src="{{ asset('images/profile-1.jpeg') }}" alt="Leslie image">
            <div class="absolute flex items-center justify-center w-5 h-5 -mt-5 bg-green-400 border border-white rounded-full ms-6 ">
              <svg class="w-2 h-2 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 18">
                <path d="M18 0H2a2 2 0 0 0-2 2v9a2 2 0 0 0 2 2h2v4a1 1 0 0 0 1.707.707L10.414 13H18a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2Zm-5 4h2a1 1 0 1 1 0 2h-2a1 1 0 1 1 0-2ZM5 4h5a1 1 0 1 1 0 2H5a1 1 0 0 1 0-2Zm2 5H5a1 1 0 0 1 0-2h2a1 1 0 0 1 0 2Zm9 0h-6a1 1 0 0 1 0-2h6a1 1 0 1 1 0 2Z"/>
              </svg>
            </div>
          </div>
          <div class="w-full ps-3">
              <div class="text-gray-500 text-sm mb-1.5"><span class="font-semibold text-gray-900">Leslie Livingston</span> mentioned you in a comment: <span class="font-medium text-blue-500" href="#">@bonnie.green</span> what do you say?</div>
              <div class="text-xs text-blue-600">1 hour ago</div>
          </div>
        </a>
      </div>
      <a href="#" class="block py-2 text-sm font-medium text-center text-gray-900 rounded-b-lg bg-gray-50 hover:bg-gray-100">
        <div class="inline-flex items-center ">
          <svg class="w-4 h-4 text-gray-500 me-2 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 14">
            <path d="M10 0C4.612 0 0 5.336 0 7c0 1.742 3.546 7 10 7 6.454 0 10-5.258 10-7 0-1.664-4.612-7-10-7Zm0 10a3 3 0 1 1 0-6 3 3 0 0 1 0 6Z"/>
          </svg>
            View all
        </div>
      </a>
    </div>

        <button id="dropdownUserAvatarButton" data-dropdown-placement="bottom-end" data-dropdown-toggle="dropdownAvatar" class="flex text-sm bg-gray-800 rounded-full md:me-0 focus:ring-2 focus:ring-blue-300" type="button">
        <span class="sr-only">Open user menu</span>
        <img class="w-8 h-8 rounded-full" src="{{ asset('images/user-1.jpg') }}" alt="user photo">
        </button>

        <!-- Dropdown menu -->
        <div id="dropdownAvatar" class="z-10 hidden bg-[#1D3A8A] divide-y divide-sky-900 rounded-lg shadow w-44 sm:w-52">
            <div class="px-4 py-3 text-sm text-gray-900 dark:text-white">
                <div>Bonnie Green</div>
                <div class="text-xs truncate font-base">name@flowbite.com</div>
            </div>
            <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownUserAvatarButton">
                <li>
                    <a href="#" class="block px-4 py-2 hover:bg-gray-50/10">Dashboard</a>
                </li>
                <li>
                    <a href="#" class="block px-4 py-2 hover:bg-gray-50/10">Settings</a>
                </li>
                <li>
                    <a href="#" class="block px-4 py-2 hover:bg-gray-50/10">Bank Soal</a>
                </li>
            </ul>
            <div class="py-2">
                <a href="#" class="block px-4 py-2 text-sm text-white hover:bg-gray-50/10">Logout</a>
            </div>
        </div>

    </div>
</div>
