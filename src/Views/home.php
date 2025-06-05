<?php
/**
 * HOME VIEW TEMPLATE
 * Responsibilities:
 * 1. Display user data in HTML format
 * 2. Maintain IE compatibility
 * 3. Present data from UserController
 */
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<html>
    <head>
        <!-- CHARACTER ENCODING -->
        <meta charset="utf-8">
        
        <!-- IE COMPATIBILITY -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        
        <!-- PAGE TITLE -->
        <title>List Of Doctors in Aden</title>
        
        <!-- META DESCRIPTION -->
        <meta name="description" content="Displaying user information">
        
        <!-- VIEWPORT CONFIG -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!-- CSS LINK -->
        <style>
            /* ADD SOME BASIC STYLING FOR THE LINK */
            .add-doctor-link {
                display: inline-block;
                margin: 20px 0;
                padding: 10px 15px;
                background-color: #3498db;
                color: white;
                text-decoration: none;
                border-radius: 4px;
                font-weight: bold;
                transition: background-color 0.3s;
            }
            
            .add-doctor-link:hover {
                background-color: #2980b9;
            }
            
            /* IMPROVE THE LIST STYLING */
            ul {
                border: 1px solid #ddd;
                border-radius: 4px;
                padding: 15px;
                margin-bottom: 20px;
                list-style-type: none;
                background-color: #f9f9f9;
            }
            
            li {
                margin-bottom: 8px;
                padding-bottom: 8px;
                border-bottom: 1px solid #eee;
            }
            
            li:last-child {
                border-bottom: none;
                margin-bottom: 0;
                padding-bottom: 0;
            }
        </style>
    </head>
    <body>
        <!-- ADD DOCTOR LINK -->
        <a href="<?= BASE_PATH ?>/doctor/add" class="add-doctor-link">Add New Doctor</a>
        <!-- USER DATA LOOP -->
        <?php foreach ($data['users'] as $user): ?>
        <ul>
            <!-- USER NAME -->
            <li>Doctor Name: <?= htmlspecialchars($user['doctor_name'] ?? 'N/A') ?></li>
            <li>General Specialist: <?= htmlspecialchars($user['GenSpec'] ?? 'N/A') ?></li>
            <li>Specific Specialist: <?= htmlspecialchars($user['SpeSpec'] ?? 'N/A') ?></li>
            <li>Hospital: <?= htmlspecialchars($user['Hospital'] ?? 'N/A') ?></li>
            <li>Governorate: <?= htmlspecialchars($user['Gove'] ?? 'N/A') ?></li>
            <li>District: <?= htmlspecialchars($user['District'] ?? 'N/A') ?></li>
            <li>Shift Period: <?= htmlspecialchars($user['Shift_Period'] ?? 'N/A') ?></li>
            <li>Phone Number: <?= htmlspecialchars($user['Phone'] ?? 'N/A') ?></li>
        </ul>
        <?php endforeach; ?>
        
        <!-- EMPTY SCRIPTS SECTION -->
       
    </body>
</html>