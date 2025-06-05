<?php
/**
 * INSERT DOCTOR VIEW TEMPLATE
 * Responsibilities:
 * 1. Display form for adding new doctors
 * 2. Handle form submission
 * 3. Present data from UserController
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Doctor</title>
    <style>
        /* CSS RESET */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background-color: #f5f5f5;
            color: #333;
            line-height: 1.6;
            padding: 20px;
        }

        .form-container {
            max-width: 800px;
            margin: 30px auto;
            padding: 30px;
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            margin-bottom: 30px;
            color: #2c3e50;
        }

        form {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: 600;
            color: #2c3e50;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 16px;
            transition: border 0.3s;
        }

        input[type="text"]:focus {
            border-color: #3498db;
            outline: none;
        }

        .full-width {
            grid-column: 1 / -1;
        }

        input[type="submit"] {
            grid-column: 1 / -1;
            background-color: #3498db;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            font-weight: 600;
            transition: background-color 0.3s;
        }

        input[type="submit"]:hover {
            background-color: #2980b9;
        }

        .message {
            grid-column: 1 / -1;
            padding: 10px;
            margin-bottom: 20px;
            border-radius: 4px;
            text-align: center;
        }

        .success {
            background-color: #d4edda;
            color: #155724;
        }

        .error {
            background-color: #f8d7da;
            color: #721c24;
        }

        @media (max-width: 768px) {
            form {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2>Add New Doctor Information</h2>

        <?php if (isset($data['success'])): ?>
            <div class="message success">
                <?= htmlspecialchars($data['success']) ?>
            </div>
        <?php endif; ?>

        <?php if (isset($data['error'])): ?>
            <div class="message error">
                <?= htmlspecialchars($data['error']) ?>
            </div>
        <?php endif; ?>

        <form method="post" action="<?= BASE_PATH ?>/doctor/insert">
          
            <div class="form-group">
                <label for="doctor_name">Doctor Name:</label>
                <input type="text" id="doctor_name" name="doctor_name" 
                       value="<?= htmlspecialchars($data['formData']['doctor_name'] ?? '') ?>" required>
            </div>

            <div class="form-group">
                <label for="gen_spec">General Specialty:</label>
                <input type="text" id="gen_spec" name="GenSpec" 
                       value="<?= htmlspecialchars($data['formData']['GenSpec'] ?? '') ?>" required>
            </div>

            <div class="form-group">
                <label for="spe_spec">Specific Specialty:</label>
                <input type="text" id="spe_spec" name="SpeSpec" 
                       value="<?= htmlspecialchars($data['formData']['SpeSpec'] ?? '') ?>" required>
            </div>

            <div class="form-group">
                <label for="Hospital">Hospital:</label>
                <input type="text" id="Hospital" name="Hospital" 
                       value="<?= htmlspecialchars($data['formData']['Hospital'] ?? '') ?>" required>
            </div>

            <div class="form-group">
                <label for="gove">Governorate:</label>
                <input type="text" id="gove" name="Gove" 
                       value="<?= htmlspecialchars($data['formData']['Gove'] ?? '') ?>" required>
            </div>

            <div class="form-group">
                <label for="district">District:</label>
                <input type="text" id="district" name="District" 
                       value="<?= htmlspecialchars($data['formData']['District'] ?? '') ?>" required>
            </div>

            <div class="form-group">
                <label for="shift_period">Shift Period:</label>
                <input type="text" id="shift_period" name="Shift_Period" 
                       value="<?= htmlspecialchars($data['formData']['Shift_Period'] ?? '') ?>" required>
            </div>

            <div class="form-group full-width">
                <label for="Phone">Phone Number:</label>
                <input type="text" id="Phone" name="Phone" 
                       value="<?= htmlspecialchars($data['formData']['Phone'] ?? '') ?>" required>
            </div>

            <input type="submit" value="Add New Doctor">
        </form>
    </div>
</body>
</html>