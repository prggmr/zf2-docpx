.. Mvc/Controller/Plugin/Identity.php generated using docpx on 01/30/13 03:32am


Zend\\Mvc\\Controller\\Plugin\\Identity
=======================================

Controller plugin to fetch the authenticated identity.

Methods
+++++++

getAuthenticationService
------------------------

.. function:: getAuthenticationService()


    @return AuthenticationService



setAuthenticationService
------------------------

.. function:: setAuthenticationService()


    @param AuthenticationService $authenticationService



__invoke
--------

.. function:: __invoke()


    Retrieve the current identity, if any.
    
    If none is present, returns null.

    :rtype: mixed|null 

    :throws: Exception\RuntimeException 



