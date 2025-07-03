<!-- Navbar -->
<nav class="bg-white/80 rounded-4xl shadow px-10 py-3 flex items-center justify-between w-9/10 mx-auto mt-3 fixed top-0 left-0 right-0 z-[100] backdrop-blur-sm">
  <!-- Tengah: Menu navigasi -->
  <ul class="flex gap-8 mx-auto text-sm font-medium text-gray-800">
    <li><a href="/" class="hover:text-blue-600">Home</a></li>
    <li><a href="/listing" class="hover:text-blue-600">Listing</a></li>
    <li><a href="/contact" class="hover:text-blue-600">Contact</a></li>
  </ul>

  <!-- Kanan: User Icon + Dropdown -->
  <div class="relative">
    <button id="userButton" class="text-2xl text-gray-700 focus:outline-none">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
          d="M5.121 17.804A7.969 7.969 0 0112 15c2.21 0 4.209.896 5.656 2.344M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
      </svg>
    </button>

    <!-- Dropdown -->
    <div id="userDropdown" class="hidden absolute right-0 mt-2 w-40 bg-white rounded-lg shadow-lg py-2 z-50">
      @auth
        <a href="{{ route('profile') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Profile</a>
        <form action="{{ route('logout') }}" method="POST">
          @csrf
          <button type="submit" class="w-full text-left px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Logout</button>
        </form>
      @endauth

      @guest
        <a href="{{ route('login') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Login</a>
      @endguest
    </div>
  </div>
</nav>

<script>
  const userButton = document.getElementById('userButton');
  const userDropdown = document.getElementById('userDropdown');

  userButton.addEventListener('click', () => {
    userDropdown.classList.toggle('hidden');
  });

  // Close dropdown if clicked outside
  window.addEventListener('click', (e) => {
    if (!userButton.contains(e.target) && !userDropdown.contains(e.target)) {
      userDropdown.classList.add('hidden');
    }
  });
</script>
