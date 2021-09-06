<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* include.html.twig */
class __TwigTemplate_e4e6ebc8b9b2ecb45ac4ff04db1a39a6ca46c255bdf46941bc4d609e21775f2a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<div>
    <h1>";
        // line 3
        (((array_key_exists("header", $context) &&  !(null === ($context["header"] ?? null)))) ? (print (twig_escape_filter($this->env, ($context["header"] ?? null), "html", null, true))) : (print ("Default Header")));
        // line 4
        echo "</h1>

    <div>
        ";
        // line 7
        $this->displayBlock('body', $context, $blocks);
        // line 10
        echo "    </div>
</div>
";
    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        (((array_key_exists("body", $context) &&  !(null === ($context["body"] ?? null)))) ? (print (twig_escape_filter($this->env, ($context["body"] ?? null), "html", null, true))) : (print ("Default Body")));
    }

    public function getTemplateName()
    {
        return "include.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 8,  56 => 7,  50 => 10,  48 => 7,  43 => 4,  41 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "include.html.twig", "/dev/twig-benchmark/templates/include.html.twig");
    }
}
