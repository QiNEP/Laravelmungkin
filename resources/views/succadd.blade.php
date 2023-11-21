<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Success</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-900">
    <div class="text-white mt-40">
        <h1 class="text-3xl font-extralight text-center mb-8">Success</h1>
        <div class="flex justify-center">
            <div class="bg-gray-950 w-[50%] p-3 flex flex-col">
                <p class="text-center mb-12 mt-6">New Album has been added</p>
                <a href="{{ route('dashboard') }}" class="text-center mb-3 cursor-pointer p-1 bg-blue-600 hover:bg-blue-700 duration-200 active:bg-blue-800">Back to Dashboard</a>
                <a href="{{ route('adddata') }}" class="  text-center cursor-pointer p-1 bg-blue-600 hover:bg-blue-700 duration-200 active:bg-blue-800">Add More Album</a>
            </div>
        </div>
    <div>
</body>
</html>