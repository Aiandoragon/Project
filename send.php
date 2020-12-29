<?php
    $ourMail = '';
    if(isset($_POST)){
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        if(isset($_POST['message']))
            $message = $_POST['message'];
        else {
            if($_POST['H'] == "H1")
                $message = 'Экспресс Доставка';
            else if ($_POST['H'] == "H2")
                $message = 'Авто Ж/Д Доставка';
            else if ($_POST['H'] == 'H3')
                $message = 'Доставка морем';
        }
        switch ($_POST['T']){
            case 'H': $subject = 'Горячее предложение';
            break;
            case 'O': $subject = 'Рассчет стоимости доставки';
            break;
            case 'H': $subject = 'Вопрос';
            break;
            default: $subject = 'Пустое';
        }
        $messageFinal = "Новое сообщение от: $name\nНомер: $phone\nТекст сообщения:\n$message";
        mail($ourMail, $subject, $messageFinal);
    }
    header("Location: index.html");
?>