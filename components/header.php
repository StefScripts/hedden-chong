<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hedden Chong LLP - Chartered Professional Accountants</title>
    <link rel="stylesheet" href="<?php echo file_exists(__DIR__ . '/../style.css') ? '../style.css' : '/style.css'; ?>">
</head>
<body>
    <div class="container">
    
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        const mobileMenuToggle = document.querySelector('.mobile-menu-toggle');
        const navMenu = document.querySelector('.nav-menu');
        
        if (mobileMenuToggle && navMenu) {
            mobileMenuToggle.addEventListener('click', function() {
                mobileMenuToggle.classList.toggle('active');
                navMenu.classList.toggle('active');
            });
            
            // Close menu when clicking on a link
            const navLinks = navMenu.querySelectorAll('a');
            navLinks.forEach(link => {
                link.addEventListener('click', function() {
                    mobileMenuToggle.classList.remove('active');
                    navMenu.classList.remove('active');
                });
            });
            
            // Close menu when clicking outside
            document.addEventListener('click', function(event) {
                if (!mobileMenuToggle.contains(event.target) && !navMenu.contains(event.target)) {
                    mobileMenuToggle.classList.remove('active');
                    navMenu.classList.remove('active');
                }
            });
        }
    });
    </script>

<div class="header">
    <div class="header-content">
        <a href="/"><img src="<?php echo file_exists(__DIR__ . '/../images/logo-hedden-chong.jpg') ? '../images/logo-hedden-chong.jpg' : '/images/logo-hedden-chong.jpg'; ?>" alt="Hedden Chong LLP Logo" class="logo"></a>
        <div class="header-text">
            <a href="/">
                <h1>HEDDEN CHONG LLP</h1>
            </a>
            <p class="tagline">since 1961</p>
        </div>
    </div>
</div>