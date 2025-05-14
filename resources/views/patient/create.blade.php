<!DOCTYPE html>
<html>
<head>
    <title>Create Patient Account</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-image: url('/images/hopital.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
        }

        .header {
            text-align: center;
            padding: 20px;
            background-color: rgba(0, 123, 255, 0.85);
            color: white;
            font-size: 32px;
            font-weight: bold;
            letter-spacing: 2px;
        }

        .form-container {
            width: 400px;
            margin: 40px auto;
            padding: 20px;
            border-radius: 10px;
            background: rgba(255, 255, 255, 0.95);
            box-shadow: 0 0 10px rgba(0,0,0,0.2);
        }

        label {
            font-weight: bold;
            display: block;
            margin-top: 15px;
        }

        input, select, textarea {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        button {
            margin-top: 20px;
            width: 100%;
            padding: 10px;
            background-color: #28a745;
            color: white;
            font-weight: bold;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>
    <div class="header">
        Hostolib
    </div>

    <div class="form-container">
        <form>
            <h2>Create Patient Account</h2>

            <label>First Name</label>
            <input type="text" name="first_name" placeholder="John">

            <label>Last Name</label>
            <input type="text" name="last_name" placeholder="Doe">

            <label>Email</label>
            <input type="email" name="email" placeholder="example@email.com">

            <label>Password</label>
            <input type="password" name="password" placeholder="******">

            <label>Date of Birth</label>
            <input type="date" name="birth_date">

            <label>Gender</label>
            <select name="gender">
                <option value="">-- Select --</option>
                <option value="M">Male</option>
                <option value="F">Female</option>
            </select>

            <label>Address</label>
            <textarea name="address" rows="3" placeholder="123 Main Street, City, Zip Code"></textarea>

            <label>Phone Number</label>
            <input type="tel" name="phone" placeholder="123-456-7890">

            <button type="submit">Create Account</button>
        </form>
    </div>
</body>
</html>
