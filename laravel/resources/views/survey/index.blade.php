<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Survey</title>

    <!-- Tailwind CSS -->
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
    <div class="flex flex-col justify-center items-center h-screen">
        <h1 class="text-lg font-bold my-4">What is the best fight game for you?</h1>
        <div class="w-96">
            <form method="POST" action="{{ route('votes.store') }}">
                @csrf
                
                <div class="flex flex-col my-2">
                    <label for="username" class="font-semibold">Username</label>
                    <input type="text" name="username" class="bg-gray-200 p-2" required />
                </div>
                
                <div class="flex flex-col my-2">
                    <label for="choice" class="font-semibold">Choice</label>
                    <select name="choice" class="bg-gray-200 p-2">
                        <option value="ssf4">Super Street Fighter IV</option>
                        <option value="ssbm">Super Smash Bros Melee</option>
                        <option value="s4">Soulcalibur IV</option>
                        <option value="mku">Mortal Kombat Ultimate</option>
                    </select>
                </div>

                <button type="submit" class="my-2 px-4 py-2 bg-blue-800 text-white hover:bg-blue-600">Vote</button>
            </form>
        </div>

        <a href="{{ route('survey.stats') }}" class="w-auto block hover:bg-blue-600 mt-10 px-4 py-2 bg-blue-800 text-white">See survey stats</a>



    </div>
</body>
</html>