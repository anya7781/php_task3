<?php
// регистрируем функцию автозагрузки, на вход принимает полное название класса, включая неймспейс. функция анонимная (не имеет названия и передается в качестве параметра прямо так)
spl_autoload_register(function ($class) {
    // собираем путь к предполагаемому файлу с классом <текущая папка>/src/<полное наименование класса с неймспейсом>.php
    // например для класса Ino\Shop\Cart путь будет приблизительно такой: C:\OpenServer\domains\php-course.local\shop\src\Ino\Shop\Cart.php
    // при этом заменяем разделители неймспейса на корректные для нашей файловй системы на диске
	$filePath = __DIR__ . DIRECTORY_SEPARATOR . 'model'
                // DIRECTORY_SEPARATOR - корректный разделитесь файловой системы, для разных систем может быть разным
	            . DIRECTORY_SEPARATOR
                // заменяем обратный слэш из полного имени класса на разделитель для файловой системы
	            . str_replace('\\', DIRECTORY_SEPARATOR, $class)
                // добавляем расширение .php, т.к. мы ищем конкретный файл .php
	            . '.php';
	// проверяем существует ли файл по собранному нами пути
	if (file_exists($filePath)) {
	    // если есть - загрузаем его
		require $filePath;
	}
});