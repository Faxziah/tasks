<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <title>Калькулятор</title>
</head>
<body class="body">
    <main class="main">
        <section>
            <div class="calculator">
                <form method="get" action="/">
                    <input type="number" step=any name="number1" placeholder="Первое число" class="number" id="number1">
                    <select name="operation" class="operation">
                        <option value="+">+</option>
                        <option value="-">-</option>
                        <option value="*">*</option>
                        <option value="/">/</option>
                    </select>
                    <input type="number" step=any name="number2" placeholder="Второе число" class="number" id="number2">
                    <button class="count">Посчитать</button>
                </form>
            </div>
            <div class="result">
            <!-- Сюда выводится результат -->
            </div>
        </section>
    </main>

    <script type="text/javascript" src="script.js"></script>
</body>
</html>