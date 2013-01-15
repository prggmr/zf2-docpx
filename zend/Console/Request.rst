.. /Console/Request.php generated using docpx on 01/15/13 05:29pm


Zend\\Console\\Request
**********************


@category   Zend



Methods
=======

__construct
-----------

.. function:: __construct([$args = false, [$env = false]])


    Create a new CLI request

    :param array|null $args: Console arguments. If not supplied, $_SERVER['argv'] will be used
    :param array|null $env: Environment data. If not supplied, $_ENV will be used

    :throws Exception\RuntimeException: 



setParams
---------

.. function:: setParams($params)


    Exchange parameters object

    :param \Zend\Stdlib\Parameters $params: 

    :rtype: Request 



getParams
---------

.. function:: getParams()


    Return the container responsible for parameters

    :rtype: \Zend\Stdlib\Parameters 



getParam
--------

.. function:: getParam($name, [$default = false])


    Return a single parameter.
    Shortcut for $request->params()->get()

    :param string $name: Parameter name
    :param string $default: (optional) default value in case the parameter does not exist

    :rtype: mixed 



params
------

.. function:: params()


    Return the container responsible for parameters

    :rtype: \Zend\Stdlib\Parameters 



setEnv
------

.. function:: setEnv($env)


    Provide an alternate Parameter Container implementation for env parameters in this object, (this is NOT the
    primary API for value setting, for that see env())

    :param \Zend\Stdlib\Parameters $env: 

    :rtype: \Zend\Console\Request 



env
---

.. function:: env()


    Return the parameter container responsible for env parameters

    :rtype: \Zend\Stdlib\Parameters 



toString
--------

.. function:: toString()


    @return string



__toString
----------

.. function:: __toString()


    Allow PHP casting of this object

    :rtype: string 



setScriptName
-------------

.. function:: setScriptName($scriptName)


    @param string $scriptName



getScriptName
-------------

.. function:: getScriptName()


    @return string





