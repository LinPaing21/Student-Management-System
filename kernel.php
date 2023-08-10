<?php
    use Symfony\Component\EventDispatcher\EventDispatcher;
    use Symfony\Component\HttpFoundation\Request;
    use Symfony\Component\HttpFoundation\RequestStack;
    use Symfony\Component\HttpFoundation\Response;
    use Symfony\Component\HttpKernel\Controller\ArgumentResolver;
    use Symfony\Component\HttpKernel\Controller\ControllerResolver;
    use Symfony\Component\HttpKernel\EventListener\RouterListener;
    use Symfony\Component\Routing\Exception\ResourceNotFoundException; 

    use Symfony\Component\HttpKernel\HttpKernel;
    
    $dispatcher = new EventDispatcher();
    $dispatcher->addSubscriber(new RouterListener($matcher, new RequestStack()));

    $controllerResolver = new ControllerResolver();
    $argumentResolver = new ArgumentResolver();

    $kernel = new HttpKernel($dispatcher, $controllerResolver, new RequestStack(), $argumentResolver);

    
    try {
        extract($matcher->match($request->getPathInfo()), EXTR_SKIP);
        $response = $kernel->handle($request);
        
    } catch (ResourceNotFoundException $exception) {
        $response = notFound();
    } catch (Exception $exception) {
        $response = new Response('An error occurred', 500);
    }
    $response->send();

    $kernel->terminate($request, $response);
?>