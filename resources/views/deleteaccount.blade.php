<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Account | Security Center</title>
    <style>
        :root {
            --danger-color: #e74c3c;
            --danger-hover: #c0392b;
            --bg-color: #f4f7f6;
            --text-color: #2c3e50;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: var(--bg-color);
            color: var(--text-color);
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }

        .container {
            background: white;
            padding: 2.5rem;
            border-radius: 12px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
            max-width: 450px;
            width: 90%;
        }

        h2 {
            margin-top: 0;
            color: var(--danger-color);
            font-size: 1.5rem;
        }

        p {
            font-size: 0.95rem;
            line-height: 1.6;
            color: #555;
        }

        .info-box {
            background: #fff5f5;
            border-left: 4px solid var(--danger-color);
            padding: 1rem;
            margin-bottom: 1.5rem;
            font-size: 0.85rem;
        }

        .form-group {
            margin-bottom: 1.2rem;
        }

        label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: 600;
            font-size: 0.9rem;
        }

        input {
            width: 100%;
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 6px;
            box-sizing: border-box; /* Ensures padding doesn't affect width */
            font-size: 1rem;
        }

        input:focus {
            outline: none;
            border-color: var(--danger-color);
            box-shadow: 0 0 0 2px rgba(231, 76, 60, 0.1);
        }

        .btn-delete {
            width: 100%;
            background-color: var(--danger-color);
            color: white;
            padding: 12px;
            border: none;
            border-radius: 6px;
            font-size: 1rem;
            font-weight: bold;
            cursor: pointer;
            transition: background 0.3s ease;
        }

        .btn-delete:hover {
            background-color: var(--danger-hover);
        }

        .footer-note {
            text-align: center;
            margin-top: 1.5rem;
            font-size: 0.8rem;
            color: #888;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Delete Account</h2>
    <p>Please enter your details to request account deactivation.</p>

    <div class="info-box">
        <strong>Important:</strong> After admin review, your account will be deactivated. Your data will be permanently deleted after <strong>90 days</strong>.
    </div>

    <form id="deleteForm">
        <div class="form-group">
            <label for="fullName">Full Name</label>
            <input type="text" id="fullName" placeholder="John Doe" required>
        </div>

        <div class="form-group">
            <label for="phoneNumber">Phone Number</label>
            <input type="tel" id="phoneNumber" placeholder="+1 234 567 890" required>
        </div>

        <button type="submit" class="btn-delete">Request Deletion</button>
    </form>

    <div class="footer-note">
        This action is subject to administrative review.
    </div>
</div>

<script>
    document.getElementById('deleteForm').addEventListener('submit', function(e) {
        e.preventDefault();

        const name = document.getElementById('fullName').value;

        // This is where you would typically send data to your server/API
        alert("Thank you, " + name + ".\n\nYour request has been submitted for admin review. Your account will be deactivated shortly, and data will be purged in 90 days.");

        // Optionally clear the form
        this.reset();
    });
</script>

</body>
</html>
