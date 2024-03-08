<?php include 'header/header.php'; ?>

<body>

<!--nav-->
<?php include 'header/navigation.php'; ?>

<!--hero-->
<div class="max-w-screen-xl px-4 mx-auto mt-8 sm:mt-12 sm:px-6 md:mt-16 dark:bg-white">
  <div class="lg:grid lg:grid-cols-12 lg:gap-8">
    <div class="sm:text-center md:max-w-2xl md:mx-auto lg:col-span-6 lg:text-left">
     
      <h2
        class="mt-1 text-4xl font-extrabold leading-10 tracking-tight text-gray-900 sm:leading-none sm:text-6xl lg:text-5xl xl:text-6xl">
        Together, We Shape the Future
      </h2>
      <p class="mt-3 text-base text-gray-600 sm:mt-5 sm:text-xl lg:text-lg xl:text-xl">
      It's more than just tech. It's a partnership for innovation. Start yours today.
      </p>
      <div class="mt-5 sm:mt-8 sm:flex sm:justify-center lg:justify-start">
        <div class="rounded-md shadow">
          <a href="/docs"
            class="flex items-center justify-center w-full px-8 py-3 text-base font-medium leading-6 text-black hover:text-white transition duration-150 ease-in-out bg-green-400 border border-transparent rounded-md hover:bg-gray-800 focus:outline-none focus:shadow-outline md:py-4 md:text-lg md:px-10">
            Inquire Now
          </a>
        </div>
        <div class="mt-3 sm:mt-0 sm:ml-3">
          <a href=""
            class="flex items-center justify-center w-full px-8 py-3 text-base font-medium leading-6 text-indigo-700 transition duration-150 ease-in-out bg-indigo-100 border border-transparent rounded-md hover:text-indigo-600 hover:bg-indigo-50 focus:outline-none focus:shadow-outline focus:border-indigo-300 md:py-4 md:text-lg md:px-10">
            learn More
          </a>
        </div>
      </div>
    </div>
    <div
      class="relative mt-12 sm:max-w-lg sm:mx-auto lg:mt-0 lg:max-w-none lg:mx-0 lg:col-span-6 lg:flex lg:items-center">
      <svg
        class="absolute top-0 hidden origin-top transform scale-75 -translate-x-1/2 -translate-y-8 left-1/2 sm:scale-100 lg:hidden"
        width="640" height="784" fill="none" viewBox="0 0 640 784">
        <defs>
          <pattern id="4f4f415c-a0e9-44c2-9601-6ded5a34a13e" x="118" y="0" width="20" height="20"
            patternUnits="userSpaceOnUse">
            <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor"></rect>
          </pattern>
        </defs>
        <rect y="72" width="640" height="640" class="text-gray-50" fill="currentColor"></rect>
        <rect x="118" width="404" height="784" fill="url(#4f4f415c-a0e9-44c2-9601-6ded5a34a13e)"></rect>
      </svg>
      <div class="relative justify-end hidden w-full lg:flex">
        <div
          class="flex justify-end inline-block p-8 pr-8 text-base leading-relaxed text-green-400 bg-gray-900 rounded-lg shadow-lg xl:text-lg xl:pr-16">
          <pre><span class="text-blue-100">// Inquire Now</span>
$tenant = Tenant::create();
$tenant-&gt;createDomain([
  'domain' =&gt; 'acme.com',
]);

<span class="text-blue-100">// Write your app like you're used to</span>
Order::where('status', 'shipped')-&gt;get();
Cache::get('order_count');
asset('logo.png');
dispatch(new SendOrderCreatedMail);</pre>
        </div>
      </div>
    </div>
  </div>

  <div class="mt-10 flow-root sm:mt-20">
            <div
                class="-m-2 rounded-xl bg-gray-900/5 p-2 ring-1 ring-inset ring-gray-900/10 lg:-m-4 lg:rounded-2xl lg:p-4">
                <!-- Photo by '@tvick' on Unsplash -->
                <img src="https://images.unsplash.com/photo-1558494949-ef010cbdcc31?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w0NzEyNjZ8MHwxfHNlYXJjaHw1fHxiYWNrdXB8ZW58MHwwfHx8MTY5MjAwMjg2M3ww&ixlib=rb-4.0.3&q=80&w=1080" width="2432" height="1442" class="rounded-md shadow-2xl ring-1 ring-gray-900/10">
            </div>
        </div>
</div>
<!--footer-->
<?php include 'header/footer.php'; ?>
</body>
</html>