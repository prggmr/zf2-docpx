.. Captcha/AbstractAdapter.php generated using docpx on 01/30/13 03:32am


Zend\\Captcha\\AbstractAdapter
==============================

Base class for Captcha adapters

Provides some utility functionality to build on

Methods
+++++++

getName
-------

.. function:: getName()


    Get name

    :rtype: string 



setName
-------

.. function:: setName()


    Set name

    :param string: 

    :rtype: AbstractAdapter 



setOption
---------

.. function:: setOption()


    Set single option for the object

    :param string: 
    :param string: 

    :rtype: AbstractAdapter 



setOptions
----------

.. function:: setOptions()


    Set object state from options array

    :param array|Traversable: 

    :throws Exception\InvalidArgumentException: 

    :rtype: AbstractAdapter 



getOptions
----------

.. function:: getOptions()


    Retrieve options representing object state

    :rtype: array 



getHelperName
-------------

.. function:: getHelperName()


    Get helper name used to render captcha
    
    By default, return empty string, indicating no helper needed.

    :rtype: string 



