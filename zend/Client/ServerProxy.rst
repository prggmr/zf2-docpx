.. XmlRpc/Client/ServerProxy.php generated using docpx on 01/30/13 03:27pm


Class
*****

Zend\\XmlRpc\\Client\\ServerProxy
=================================

The namespace decorator enables object chaining to permit
calling XML-RPC namespaced functions like "foo.bar.baz()"
as "$remote->foo->bar->baz()".

Methods
-------

__construct
+++++++++++

.. function:: __construct()


    Class constructor

    :param \Zend\XmlRpc\Client: 
    :param string: 



__get
+++++

.. function:: __get()


    Get the next successive namespace

    :param string: 

    :rtype: \Zend\XmlRpc\Client\ServerProxy 



__call
++++++

.. function:: __call()


    Call a method in this namespace.

    :param string: 
    :param array: 

    :rtype: mixed 



