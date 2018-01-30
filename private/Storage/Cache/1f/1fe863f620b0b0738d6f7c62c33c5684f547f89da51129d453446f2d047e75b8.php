<?php

/* index.html */
class __TwigTemplate_30a0b609839cd9091768cb15da0e5d7ae690cd1b59ef5a12115b4b9a0050db03 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <title>Title</title>
</head>
<body>
<h1 style='text-align: center ; color: #dd4444; size: 80px'>";
        // line 8
        echo twig_escape_filter($this->env, ($context["post"] ?? null), "html", null, true);
        echo "</h1>

</body>
</html>";
    }

    public function getTemplateName()
    {
        return "index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 8,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "index.html", "/opt/lampp/htdocs/mvc-beta.0.1/private/App/Views/index.html");
    }
}
