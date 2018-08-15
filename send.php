
<?php
if((isset($_POST['name'])&&$_POST['tel']!="")&&(isset($_POST['tel'])&&$_POST['tel']!="")){ //Проверка отправилось ли наше поля name и не пустые ли они
        $to = 'gidravlik.bel@mail.ru'; //Почта получателя, через запятую можно указать сколько угодно адресов
        $subject = 'Обратный звонок'; //Загаловок сообщения
        $message = '
                <html>
                    <head>
                        <title>'.$subject.'</title>
                    </head>
                    <body>
                        <p>Имя: '.$_POST['name'].'</p>
                        <p>Телефон: '.$_POST['tel'].'</p>  
                        <p>сообщение: '.$_POST['text'].'</p>                         
                    </body>
                </html>'; //Текст нащего сообщения можно использовать HTML теги
        $headers  = "Content-type: text/html; charset=utf-8 \r\n"; //Кодировка письма
        $headers .= "From: Отправитель <гидравлик@гидравлик.бел>\r\n"; //Наименование и почта отправителя
        mail($to, $subject, $message, $headers); //Отправка письма с помощью функции mail
}
?>