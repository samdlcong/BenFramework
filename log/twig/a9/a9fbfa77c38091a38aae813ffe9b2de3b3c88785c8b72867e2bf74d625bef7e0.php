<?php

/* index/layout.html */
class __TwigTemplate_089cfa4b5add43a8697db15e064e5bfd4db88c996d4577d2efdda5205c9a0ab0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
\t<meta charset=\"UTF-8\">
\t<title>Document</title>
</head>
<body>
<header>header</header>\t
<div>
\t";
        // line 10
        $this->displayBlock('content', $context, $blocks);
        // line 13
        echo "</div>
<footer>footer</footer>
</body>
</html>";
    }

    // line 10
    public function block_content($context, array $blocks = array())
    {
        // line 11
        echo "
\t";
    }

    public function getTemplateName()
    {
        return "index/layout.html";
    }

    public function getDebugInfo()
    {
        return array (  43 => 11,  40 => 10,  33 => 13,  31 => 10,  20 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/* <head>*/
/* 	<meta charset="UTF-8">*/
/* 	<title>Document</title>*/
/* </head>*/
/* <body>*/
/* <header>header</header>	*/
/* <div>*/
/* 	{% block content %}*/
/* */
/* 	{% endblock %}*/
/* </div>*/
/* <footer>footer</footer>*/
/* </body>*/
/* </html>*/
