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
    <main class="w-full h-screen bg-gray-700 flex items-center justify-center">
        <div class="bg-white w-full max-w-96 p-4 rounded-md shadow-md">
            <h3 class="uppercase font-semibold text-center mb-4">create a user</h3>
            <form action="/create" class="w-full" method="POST">
                @csrf
                <div class="w-full mb-2">
                    <label for="name" class="block mb-2">Name</label>
                    <input type="text" name="name" class="p-2 border rounded border-gray-400 w-full">
                </div>
                <div class="w-full mb-2">
                    <label for="name" class="block mb-2">Email</label>
                    <input type="email" name="email" class="p-2 border rounded border-gray-400 w-full">
                </div>
                <div class="w-full mb-2">
                    <label for="name" class="block mb-2">Phone</label>
                    <input type="text" name="phone" class="p-2 border rounded border-gray-400 w-full">
                </div>
                <div class="text-center mt-5 block">
                    <button class="w-full px-4 py-2 bg-green-600  text-white rounded-md">Submit</button>                 
                </div>
            </form>
        </div>
    </main>
</body>
</html>
