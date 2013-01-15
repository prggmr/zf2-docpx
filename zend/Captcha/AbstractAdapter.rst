.. /Captcha/AbstractAdapter.php generated using docpx on 01/15/13 05:29pm


Zend\\Captcha\\AbstractAdapter
******************************


Base class for Captcha adapters

Provides some utility functionality to build on



Methods
=======

getName
-------

.. function:: getName()


    Get name

    :rtype: string 



setName
-------

.. function:: setName($name)


    Set name

    :param string $name: 

    :rtype: AbstractAdapter 



setOption
---------

.. function:: setOption($key, $value)


    Set single option for the object

    :param string $key: 
    :param string $value: 

    :rtype: AbstractAdapter 



setOptions
----------

.. function:: setOptions([$options = false])


    Set object state from options array

    :param array|Traversable $options: 

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





