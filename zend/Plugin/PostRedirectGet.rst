.. Mvc/Controller/Plugin/PostRedirectGet.php generated using docpx on 01/30/13 03:32am


Zend\\Mvc\\Controller\\Plugin\\PostRedirectGet
==============================================

Plugin to help facilitate Post/Redirect/Get (http://en.wikipedia.org/wiki/Post/Redirect/Get)

Methods
+++++++

__invoke
--------

.. function:: __invoke()


    Perform PRG logic
    
    If a null value is present for the $redirect, the current route is
    retrieved and use to generate the URL for redirect.
    
    If the request method is POST, creates a session container set to expire
    after 1 hop containing the values of the POST. It then redirects to the
    specified URL using a status 303.
    
    If the request method is GET, checks to see if we have values in the
    session container, and, if so, returns them; otherwise, it returns a
    boolean false.

    :param null|string: 
    :param bool: 

    :rtype: \Zend\Http\Response|array|Traversable|false 



getSessionContainer
-------------------

.. function:: getSessionContainer()


    @return Container



setSessionContainer
-------------------

.. function:: setSessionContainer()


    @param  Container $container

    :rtype: PostRedirectGet 



redirect
--------

.. function:: redirect()


    TODO: Good candidate for traits method in PHP 5.4 with FilePostRedirectGet plugin

    :param string: 
    :param boolean: 

    :rtype: Response 

    :throws: \Zend\Mvc\Exception\RuntimeException 



