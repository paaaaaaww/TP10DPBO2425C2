<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Skin Treatment Clinic</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@500;600&display=swap" rel="stylesheet">

    <style>
        .page-title {
            font-size: 36px;
            font-weight: 800;
            margin: 30px 0 20px 0;
            color: #1e293b;
            text-align: center;
            letter-spacing: 1px;
        }
    </style>
</head>

<body class="bg-gray-50">

<!-- ====================== HEADER ====================== -->
<header class="bg-red-900 shadow-md">
    <div class="container mx-auto py-10 text-center">

        <!-- WEBSITE TITLE -->
        <h1 class="text-4xl font-extrabold text-red-50 tracking-wide">
            Skin Treatment Clinic
        </h1>

        <!-- DESCRIPTION -->
        <p class="mt-1 text-2xl text-red-200"
        style="font-family: 'Dancing Script', cursive;">
            Professional • Trusted • Modern Beauty Care
        </p>


        <!-- NAVIGATION -->
        <nav class="mt-6 flex justify-center space-x-10 text-lg font-semibold">
            <a href="index.php?entity=pasien&action=list"
               class="text-red-50 hover:text-red-200 transition duration-200">
               Pasien
            </a>

            <a href="index.php?entity=dokter&action=list"
               class="text-red-50 hover:text-red-200 transition duration-200">
               Dokter
            </a>

            <a href="index.php?entity=treatment&action=list"
               class="text-red-50 hover:text-red-200 transition duration-200">
               Treatment
            </a>

            <a href="index.php?entity=booking&action=list"
               class="text-red-50 hover:text-red-200 transition duration-200">
               Booking
            </a>
        </nav>

    </div>
</header>


<!-- CONTENT WRAPPER -->
<div class="container mx-auto">
