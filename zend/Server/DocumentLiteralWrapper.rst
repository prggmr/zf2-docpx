.. Soap/Server/DocumentLiteralWrapper.php generated using docpx on 01/30/13 03:02pm


Class
*****

Zend\\Soap\\Server\\DocumentLiteralWrapper
==========================================

Wraps WSDL Document/Literal Style service objects to hide SOAP request
message abstraction from the actual service object.

When using the document/literal SOAP message pattern you end up with one
object passed to your service methods that contains all the parameters of
the method. This obviously leads to a problem since Zend\Soap\Wsdl tightly
couples method parameters to request message parameters.

Example:

  class MyCalculatorService
  {
     /**
      * @param int $x
      * @param int $y
      * @return int
      *
     public function add($x, $y) {}
  }

The document/literal wrapper pattern would lead php ext/soap to generate a
single "request" object that contains $x and $y properties. To solve this a
wrapper service is needed that extracts the properties and delegates a
proper call to the underlying service.

The input variable from a document/literal SOAP-call to the client
MyCalculatorServiceClient#add(10, 20) would lead PHP ext/soap to create
the following request object:

$addRequest = new \stdClass;
$addRequest->x = 10;
$addRequest->y = 20;

This object does not match the signature of the server-side
MyCalculatorService and lead to failure.

Also the response object in this case is supposed to be an array
or object with a property "addResult":

$addResponse = new \stdClass;
$addResponse->addResult = 30;

To keep your service object code free from this implementation detail
of SOAP this wrapper service handles the parsing between the formats.

Methods
-------

__construct
+++++++++++

.. function:: __construct()


    Pass Service object to the constructor

    :param object: 



__call
++++++

.. function:: __call()


    Proxy method that does the heavy document/literal decomposing.

    :param string: 
    :param array: 

    :rtype: mixed 



_parseArguments
+++++++++++++++

.. function:: _parseArguments()


    Parse the document/literal wrapper into arguments to call the real
    service.

    :param string: 
    :param object: 

    :throws UnexpectedValueException: 

    :rtype: array 



_getResultMessage
+++++++++++++++++

.. function:: _getResultMessage()



_assertServiceDelegateHasMethod
+++++++++++++++++++++++++++++++

.. function:: _assertServiceDelegateHasMethod()



_assertOnlyOneArgument
++++++++++++++++++++++

.. function:: _assertOnlyOneArgument()



