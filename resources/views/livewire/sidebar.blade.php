<div class="flex h-screen bg-gray-100">
    <!-- Sidebar -->
    <aside class="w-64 bg-blue-800 text-white p-5 space-y-6" id="sidebar">
        <h2 class="text-2xl font-bold">Emergency Response</h2>
        <nav>
            <ul class="space-y-4">
                <li><a href="/dashboard" class="block p-2 hover:bg-blue-700 rounded">Dashboard</a></li>
                <li><a href="/incidents" class="block p-2 hover:bg-blue-700 rounded">Incidents</a></li>
                <li><a href="/reports" class="block p-2 hover:bg-blue-700 rounded">Reports</a></li>
                <li><a href="/contacts" class="block p-2 hover:bg-blue-700 rounded">Contacts</a></li>
            </ul>
        </nav>
        <div>
            @auth
                <span class="block mt-6">Welcome, {{ auth()->user()->name }}</span>
                <form method="POST" action="{{ route('logout') }}" class="mt-2">
                    @csrf
                    <button type="submit" class="w-full bg-red-500 hover:bg-red-700 p-2 rounded">Logout</button>
                </form>
            @else
                <a href="{{ route('login') }}" class="block w-full bg-green-500 hover:bg-green-700 p-2 rounded">Login</a>
            @endauth
        </div>
    </aside>

    <!-- Main Content -->
    <div class="flex-1 p-6">
        <nav class="bg-blue-600 p-4 text-white shadow-md flex justify-between">
            <button class="md:hidden text-white text-2xl" id="sidebar-toggle">☰</button>
            <span>Emergency Response System</span>
        </nav>

        <main class="mt-4">
            @yield('content')
        </main>
    </div>
</div>

<script>
    document.getElementById('sidebar-toggle').addEventListener('click', function () {
        document.getElementById('sidebar').classList.toggle('-translate-x-full');
    });
</script>

