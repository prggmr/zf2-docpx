.. Code/Generator/MethodGenerator.php generated using docpx on 01/30/13 03:26pm


Class
*****

Zend\\Code\\Generator\\MethodGenerator
======================================

Methods
-------

fromReflection
++++++++++++++

.. function:: fromReflection()


    @param  MethodReflection $reflectionMethod

    :rtype: MethodGenerator 



fromArray
+++++++++

.. function:: fromArray()


    Generate from array


    :param array: 

    :rtype: MethodGenerator 



__construct
+++++++++++

.. function:: __construct()


    @param  string $name

    :param array: 
    :param int|array: 
    :param string: 
    :param DocBlockGenerator|string: 



setParameters
+++++++++++++

.. function:: setParameters()


    @param  array $parameters

    :rtype: MethodGenerator 



setParameter
++++++++++++

.. function:: setParameter()


    @param  ParameterGenerator|string $parameter


    :rtype: MethodGenerator 



getParameters
+++++++++++++

.. function:: getParameters()


    @return ParameterGenerator[]



setBody
+++++++

.. function:: setBody()


    @param  string $body

    :rtype: MethodGenerator 



getBody
+++++++

.. function:: getBody()


    @return string



generate
++++++++

.. function:: generate()


    @return string



__toString
++++++++++

.. function:: __toString()



