.. View/Helper/Identity.php generated using docpx on 01/30/13 03:02pm


Class
*****

Zend\\View\\Helper\\Identity
============================

View helper plugin to fetch the authenticated identity.

Methods
-------

getAuthenticationService
++++++++++++++++++++++++

.. function:: getAuthenticationService()


    @return AuthenticationService



setAuthenticationService
++++++++++++++++++++++++

.. function:: setAuthenticationService()


    @param AuthenticationService $authenticationService



__invoke
++++++++

.. function:: __invoke()


    Retrieve the current identity, if any.
    
    If none available, returns null.

    :rtype: mixed|null 

    :throws: Exception\RuntimeException 



