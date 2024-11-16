<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Login Form</title>
    <style>
        /* General styles */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f7fc;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        h2 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }

        /* Form container */
        .form-container {
            background-color: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }

        /* Form elements */
        label {
            display: block;
            font-size: 14px;
            font-weight: bold;
            margin-bottom: 5px;
            color: #555;
        }

        input[type="text"], input[type="email"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 16px;
            box-sizing: border-box;
        }

        input[type="text"]:focus, input[type="email"]:focus {
            border-color: #0066cc;
            outline: none;
        }

        button[type="submit"], button[type="reset"] {
            width: 100%;
            padding: 12px;
            background-color: #0066cc;
            color: #fff;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
            margin-top: 10px;
        }

        button[type="submit"]:hover, button[type="reset"]:hover {
            background-color: #005bb5;
        }

        /* Error message styling */
        span {
            color: red;
            font-size: 12px;
            margin-top: 5px;
            display: block;
        }

        /* Responsive design for smaller screens */
        @media (max-width: 500px) {
            .form-container {
                padding: 20px;
                width: 90%;
            }
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2>Simple Login Form</h2>

        <!-- Simple Form -->
        <form action="{{ url('simple') }}" method="POST">
            @csrf

            <!-- Username input -->
            <div>
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required placeholder="Enter your username">
                @error('username')
                    <span>{{ $message }}</span>
                @enderror
            </div>
            
            <!-- Email input -->
            <div>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required placeholder="Enter your email">
                @error('email')
                    <span>{{ $message }}</span>
                @enderror
            </div>

            <!-- Submit button -->
            <button type="submit">Submit</button>

            <!-- Reset button -->
            <button type="reset">Reset</button>
        </form>
    </div>
</body>
</html>
