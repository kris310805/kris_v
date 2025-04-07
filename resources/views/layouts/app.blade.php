<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
        header {
            background-color: #f8f9fa;
            padding: 20px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        nav {
            display: flex;
            gap: 20px;
        }
        nav a {
            text-decoration: none;
            color: #333;
            font-weight: bold;
        }
        main {
            flex: 1;
            padding: 20px;
        }
        footer {
            background-color: #343a40;
            color: white;
            text-align: center;
            padding: 10px;
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
        }

        .articles-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        .articles-table th, .articles-table td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        .articles-table th {
            background-color: #f2f2f2;
        }

        .gallery-container {
            text-align: center;
            margin-top: 30px;
        }

        .gallery-image {
            max-width: 100%;
            height: auto;
            margin: 20px 0;
        }

        .back-link {
            display: inline-block;
            margin-top: 20px;
            color: #333;
            text-decoration: none;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <header>
        <div class="container">
            <nav>
                <a href="/">Главная</a>
                <a href="/about">О нас</a>
                <a href="/contacts">Контакты</a>
            </nav>
        </div>
    </header>

    <main class="container">
        @yield('content')
    </main>

    <footer>
        <div class="container">
            Васькина Кристина Витальевна, группа 231-321
        </div>
    </footer>
</body>
</html>
