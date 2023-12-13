<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wine Shop Registration</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
    <style>
        /* Additional Custom Styles */
        body {
            background-color: #f7f3f0;
            font-family: 'Roboto', sans-serif;
        }

        .registration-box {
            background-color: #fff;
            border-radius: 20px;
            box-shadow: 0px 10px 30px -10px rgba(0, 0, 0, 0.1);
        }

        .registration-box input[type="text"],
        .registration-box input[type="email"],
        .registration-box input[type="password"] {
            border-radius: 10px;
            border: 1px solid #ccc;
            padding: 12px;
            margin-bottom: 20px;
            width: calc(100% - 24px);
        }

        .registration-box input[type="text"]:focus,
        .registration-box input[type="email"]:focus,
        .registration-box input[type="password"]:focus {
            outline: none;
            border-color: #805d4d;
        }

        .registration-box button {
            background-color: #805d4d;
            color: #fff;
            padding: 12px 20px;
            border-radius: 10px;
            border: none;
            cursor: pointer;
            width: 100%;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }

        .registration-box button:hover {
            background-color: #9c7460;
        }
    </style>
</head>

<body>
<div class="flex justify-center items-center h-screen">
    <div class="registration-box p-8 mx-4 sm:mx-auto sm:max-w-md">
        <h2 class="text-3xl font-bold mb-6 text-center text-gray-800">Join Our Exclusive Wine Club</h2>
        <form action="#" method="POST">
            <div class="mb-4">
                <input type="text" id="username" name="username" placeholder="Username" required>
            </div>
            <div class="mb-4">
                <input type="email" id="email" name="email" placeholder="Email" required>
            </div>
            <div class="mb-6">
                <input type="password" id="password" name="password" placeholder="Password" required>
            </div>
            <button type="submit">Register</button>
        </form>
    </div>
</div>
</body>

</html>
