<?php 

if ($_POST['cpnj'] ==  '123456789' && $_POST['password'] == '12345') {
    $template = $twig->render('bemVindo.html', [
        // 'usuario' => $_POST['cpnj']
    ]);
} else {
    $template = $twig->render('login.html', [
        // 'usuario' => $_POST['cpnj'],
        'ehErro'  => true
    ]);
}

echo $template;