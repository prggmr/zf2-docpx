.. /Code/Generator/MethodGenerator.php generated using docpx on 01/15/13 05:29pm


Zend\\Code\\Generator\\MethodGenerator
**************************************


@category   Zend



Methods
=======

fromReflection
--------------

.. function:: fromReflection($reflectionMethod)


    fromReflection()

    :param MethodReflection $reflectionMethod: 

    :rtype: MethodGenerator 



__construct
-----------

.. function:: __construct([$name = false, [$parameters = false, [$flags = 16, [$body = false, [$docBlock = false]]]]])



setParameters
-------------

.. function:: setParameters($parameters)


    setParameters()

    :param array $parameters: 

    :rtype: MethodGenerator 



setParameter
------------

.. function:: setParameter($parameter)


    setParameter()

    :param ParameterGenerator|string $parameter: 

    :throws Exception\InvalidArgumentException: 

    :rtype: MethodGenerator 



getParameters
-------------

.. function:: getParameters()


    getParameters()

    :rtype: ParameterGenerator[] 



setBody
-------

.. function:: setBody($body)


    setBody()

    :param string $body: 

    :rtype: MethodGenerator 



getBody
-------

.. function:: getBody()


    getBody()

    :rtype: string 



generate
--------

.. function:: generate()


    generate()

    :rtype: string 



__toString
----------

.. function:: __toString()





