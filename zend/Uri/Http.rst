.. Uri/Http.php generated using docpx on 01/30/13 03:27pm


Class
*****

Zend\\Uri\\Http
===============

HTTP URI handler

Methods
-------

isValid
+++++++

.. function:: isValid()


    Check if the URI is a valid HTTP URI
    
    This applies additional HTTP specific validation rules beyond the ones
    required by the generic URI syntax

    :rtype: bool 

    :see:  



getUser
+++++++

.. function:: getUser()


    Get the username part (before the ':') of the userInfo URI part

    :rtype: null|string 



getPassword
+++++++++++

.. function:: getPassword()


    Get the password part (after the ':') of the userInfo URI part

    :rtype: string 



setUser
+++++++

.. function:: setUser()


    Set the username part (before the ':') of the userInfo URI part

    :param string: 

    :rtype: Http 



setPassword
+++++++++++

.. function:: setPassword()


    Set the password part (after the ':') of the userInfo URI part

    :param string: 

    :rtype: Http 



validateHost
++++++++++++

.. function:: validateHost()


    Validate the host part of an HTTP URI
    
    This overrides the common URI validation method with a DNS or IP only
    default. Users may still enforce allowing other host types.

    :param string: 
    :param integer: 

    :rtype: bool 



parseUserInfo
+++++++++++++

.. function:: parseUserInfo()


    Parse the user info into username and password segments
    
    Parses the user information into username and password segments, and
    then sets the appropriate values.

    :rtype: void 



getPort
+++++++

.. function:: getPort()


    Return the URI port
    
    If no port is set, will return the default port according to the scheme

    :rtype: integer 

    :see:  



parse
+++++

.. function:: parse()


    Parse a URI string

    :param string: 

    :rtype: Http 



