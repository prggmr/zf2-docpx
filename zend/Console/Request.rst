.. Console/Request.php generated using docpx on 01/30/13 03:02pm


Class
*****

Zend\\Console\\Request
======================

Methods
-------

__construct
+++++++++++

.. function:: __construct()


    Create a new CLI request

    :param array|null: Console arguments. If not supplied, $_SERVER['argv'] will be used
    :param array|null: Environment data. If not supplied, $_ENV will be used

    :throws Exception\RuntimeException: 



setParams
+++++++++

.. function:: setParams()


    Exchange parameters object

    :param \Zend\Stdlib\Parameters: 

    :rtype: Request 



getParams
+++++++++

.. function:: getParams()


    Return the container responsible for parameters

    :rtype: \Zend\Stdlib\Parameters 



getParam
++++++++

.. function:: getParam()


    Return a single parameter.
    Shortcut for $request->params()->get()

    :param string: Parameter name
    :param string: (optional) default value in case the parameter does not exist

    :rtype: mixed 



params
++++++

.. function:: params()


    Return the container responsible for parameters

    :rtype: \Zend\Stdlib\Parameters 



setEnv
++++++

.. function:: setEnv()


    Provide an alternate Parameter Container implementation for env parameters in this object, (this is NOT the
    primary API for value setting, for that see env())

    :param \Zend\Stdlib\Parameters: 

    :rtype: \Zend\Console\Request 



env
+++

.. function:: env()


    Return the parameter container responsible for env parameters

    :rtype: \Zend\Stdlib\Parameters 



toString
++++++++

.. function:: toString()


    @return string



__toString
++++++++++

.. function:: __toString()


    Allow PHP casting of this object

    :rtype: string 



setScriptName
+++++++++++++

.. function:: setScriptName()


    @param string $scriptName



getScriptName
+++++++++++++

.. function:: getScriptName()


    @return string



