<?php

/* index\index.html */
class __TwigTemplate_f72aa8d14f1a3419ad87a735f90336ca063a0f029922aa3bb56254438a959489 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("index/layout.html", "index\\index.html", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "index/layout.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "\t<h1>";
        echo twig_escape_filter($this->env, (isset($context["data"]) ? $context["data"] : null), "html", null, true);
        echo "</h1>
\t<h2>当前时间是：";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["date"]) ? $context["date"] : null), "html", null, true);
        echo "</h2>
";
    }

    public function getTemplateName()
    {
        return "index\\index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 4,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {% extends "index/layout.html" %}*/
/* {% block content %}*/
/* 	<h1>{{data}}</h1>*/
/* 	<h2>当前时间是：{{date}}</h2>*/
/* {% endblock %}*/
/* */
/* */
/* 	*/
/* */
/* */
