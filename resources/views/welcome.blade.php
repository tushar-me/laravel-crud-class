<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Crud Class</title>
    @vite('resources/css/app.css', 'resources/css/app.css')
</head>
<body>
    <main class="py-10  h-screen">
        <div class="flex items-center justify-between w-full max-w-4xl mx-auto">
            <h2 class="text-black text-xl font-semibold">All User({{ $users->count() }})</h2>
            <a href="/create-user" class="bg-gray-900 text-white px-4 py-2 rounded">Add New User</a>
        </div>
        <div class="max-w-4xl mx-auto bg-white rounded-lg overflow-hidden mt-10 shadow-lg">
            <table class="w-full text-center ">
                <tr>
                    <th class="py-3 bg-black text-white">Name</th>
                    <th class="py-3 bg-black text-white">Phone</th>
                    <th class="py-3 bg-black text-white">Email</th>
                </tr>
                @foreach($users as $user)
                    <tr class="border-b border-gray-300">
                        <td class="py-2 ">{{ $user->name }}</td>
                        <td class="py-2">{{ $user->phone }}</td>
                        <td class="py-2">{{ $user->email }}</td>
                    </tr>
                @endforeach
            </table>
        </div>
    </main>
</body>
</html>
