<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/RepeatCounter.php";

    session_start();
    if (empty($_SESSION['inputs'])) {
        $_SESSION['inputs'] = array();
    }

    $app  = new Silex\Application();
    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__.'/../views'
    ));

    $app->get("/", function() use ($app){
        return $app['twig']->render('form.html.twig');
    });

    $app->post("/results", function() use ($app){
        $counter = new RepeatCounter;
        $result = $counter->CountRepeats($_POST['string'], $_POST['count']);

        return $app['twig']->render('result.html.twig', array('result' => $result));
    });

    return $app;
?>
