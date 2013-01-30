.. Authentication/Adapter/Http/ResolverInterface.php generated using docpx on 01/30/13 03:02pm


Function
********

Zend\\Authentication\\Adapter\\Http\\resolve
============================================

.. function:: Zend\Authentication\Adapter\Http\resolve()


    Resolve username/realm to password/hash/etc.

    :param string: Username
    :param string: Authentication Realm
    :param string: Password (optional)

    :rtype: string|array|false User's shared secret as string if found in realm, or User's identity as array
        if resolved, false otherwise.



