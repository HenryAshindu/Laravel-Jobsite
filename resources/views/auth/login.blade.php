<x-layout>
    <x-page-heading>Login</x-page-heading>

    <form action="/login" method="POST" class="mt-6 space-y-6">
        @csrf
        @method("POST")

        <div class="text-center flex flex-col">
            <div class="inline-flex items-center">
                <span class="w-2 h-2 bg-white inline-block"></span>
                <label for="Email" class="px-5 text-lg font-bold">Email</label>

            </div>
            <input type="email" name="email" class="bg-white/5 border-white/10 rounded-xl px-5 py-4 w-full">
        </div>

        <div class="text-center flex flex-col">
            <div class="inline-flex items-center">
                <span class="w-2 h-2 bg-white inline-block"></span>
                <label for="Password" class="px-5 text-lg font-bold">Password</label>

            </div>
            <input type="password" name="password" class="bg-white/5 border-white/10 rounded-xl px-5 py-4 w-full">
        </div>

        <div>
            <input type="submit" class="rounded-lg border border-transparent font-bold bg-blue-800 py-6 px-10 text-lg" value="Login">
        </div>
    </form>
</x-layout>