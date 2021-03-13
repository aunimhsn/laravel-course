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
        <h1 class="text-lg font-bold my-4">Survey stats</h1>
        <div class="flex flex-col items-start">
            <div class="my-2 w-96">
                <h2>Super Street Fighter IV ({{ $results['ssf4'] }}%)</h2>
                <div class="h-6 my-1 bg-blue-500 rounded-sm" style="width: {{ $results['ssf4'] }}%"></div>
            </div>
            <div class="my-2 w-96">
                <h2>Super Smash Bros Melee ({{ $results['ssbm'] }}%)</h2>
                <div class="h-6 my-1 bg-blue-500 rounded-sm" style="width: {{ $results['ssbm'] }}%"></div>
            </div>
            <div class="my-2 w-96">
                <h2>Soulcalibur IV ({{ $results['s4'] }}%)</h2>
                <div class="h-6 my-1 bg-blue-500 rounded-sm" style="width: {{ $results['s4'] }}%"></div>
            </div>
            <div class="my-2 w-96">
                <h2>Mortal Kombat ({{ $results['mku'] }}%)</h2>
                <div class="h-6 bg-blue-500 rounded-sm" style="width: {{ $results['mku'] }}%"></div>
            </div>

            <a href="{{ route('survey.index') }}" class="hover:bg-blue-600 mt-4 px-4 py-2 bg-blue-800 text-white">Back to vote</a>
        </div>

        
    </div>
</body>
</html>