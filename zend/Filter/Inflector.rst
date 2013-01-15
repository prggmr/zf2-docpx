.. /Filter/Inflector.php generated using docpx on 01/15/13 05:29pm


Zend\\Filter\\Inflector
***********************


Filter chain for string inflection



Methods
=======

__construct
-----------

.. function:: __construct([$options = false])


    Constructor

    :param string|array|Traversable $options: Options to set



getPluginManager
----------------

.. function:: getPluginManager()


    Retrieve plugin manager

    :rtype: FilterPluginManager 



setPluginManager
----------------

.. function:: setPluginManager($manager)


    Set plugin manager

    :param FilterPluginManager $manager: 

    :rtype: Inflector 



setOptions
----------

.. function:: setOptions($options)


    Set options

    :param array|Traversable $options: 

    :rtype: Inflector 



setThrowTargetExceptionsOn
--------------------------

.. function:: setThrowTargetExceptionsOn($throwTargetExceptionsOn)


    Set Whether or not the inflector should throw an exception when a replacement
    identifier is still found within an inflected target.

    :param bool $throwTargetExceptionsOn: 

    :rtype: Inflector 



isThrowTargetExceptionsOn
-------------------------

.. function:: isThrowTargetExceptionsOn()


    Will exceptions be thrown?

    :rtype: bool 



setTargetReplacementIdentifier
------------------------------

.. function:: setTargetReplacementIdentifier($targetReplacementIdentifier)


    Set the Target Replacement Identifier, by default ':'

    :param string $targetReplacementIdentifier: 

    :rtype: Inflector 



getTargetReplacementIdentifier
------------------------------

.. function:: getTargetReplacementIdentifier()


    Get Target Replacement Identifier

    :rtype: string 



setTarget
---------

.. function:: setTarget($target)


    Set a Target
    ex: 'scripts/:controller/:action.:suffix'

    :param string: 

    :rtype: Inflector 



getTarget
---------

.. function:: getTarget()


    Retrieve target

    :rtype: string 



setTargetReference
------------------

.. function:: setTargetReference($target)


    Set Target Reference

    :param reference $target: 

    :rtype: Inflector 



setRules
--------

.. function:: setRules($rules)


    SetRules() is the same as calling addRules() with the exception that it
    clears the rules before adding them.

    :param array $rules: 

    :rtype: Inflector 



addRules
--------

.. function:: addRules($rules)


    AddRules(): multi-call to setting filter rules.
    
    If prefixed with a ":" (colon), a filter rule will be added.  If not
    prefixed, a static replacement will be added.
    
    ex:
    array(
        ':controller' => array('CamelCaseToUnderscore','StringToLower'),
        ':action'     => array('CamelCaseToUnderscore','StringToLower'),
        'suffix'      => 'phtml'
        );

    :param array: 

    :rtype: Inflector 



getRules
--------

.. function:: getRules([$spec = false])


    Get rules
    
    By default, returns all rules. If a $spec is provided, will return those
    rules if found, false otherwise.

    :param string $spec: 

    :rtype: array|false 



getRule
-------

.. function:: getRule($spec, $index)


    getRule() returns a rule set by setFilterRule(), a numeric index must be provided

    :param string $spec: 
    :param int $index: 

    :rtype: FilterInterface|false 



clearRules
----------

.. function:: clearRules()


    ClearRules() clears the rules currently in the inflector

    :rtype: Inflector 



setFilterRule
-------------

.. function:: setFilterRule($spec, $ruleSet)


    Set a filtering rule for a spec.  $ruleSet can be a string, Filter object
    or an array of strings or filter objects.

    :param string $spec: 
    :param array|string|\Zend\Filter\FilterInterface $ruleSet: 

    :rtype: Inflector 



addFilterRule
-------------

.. function:: addFilterRule($spec, $ruleSet)


    Add a filter rule for a spec

    :param mixed $spec: 
    :param mixed $ruleSet: 

    :rtype: Inflector 



setStaticRule
-------------

.. function:: setStaticRule($name, $value)


    Set a static rule for a spec.  This is a single string value

    :param string $name: 
    :param string $value: 

    :rtype: Inflector 



setStaticRuleReference
----------------------

.. function:: setStaticRuleReference($name, $reference)


    Set Static Rule Reference.
    
    This allows a consuming class to pass a property or variable
    in to be referenced when its time to build the output string from the
    target.

    :param string $name: 
    :param mixed $reference: 

    :rtype: Inflector 



filter
------

.. function:: filter($source)


    Inflect

    :param string|array $source: 

    :throws Exception\RuntimeException: 

    :rtype: string 



_normalizeSpec
--------------

.. function:: _normalizeSpec($spec)


    Normalize spec string

    :param string $spec: 

    :rtype: string 



_getRule
--------

.. function:: _getRule($rule)


    Resolve named filters and convert them to filter objects.

    :param string $rule: 

    :rtype: FilterInterface 





