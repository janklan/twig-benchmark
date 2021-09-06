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

/* macro.html.twig */
class __TwigTemplate_aabf763a5ad3425f82c92c8d2af475cd3f89dbbab811a840315cff1189b7e862 extends Template
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
    }

    // line 8
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        (((array_key_exists("body", $context) &&  !(null === ($context["body"] ?? null)))) ? (print (twig_escape_filter($this->env, ($context["body"] ?? null), "html", null, true))) : (print ("Default Body")));
    }

    // line 1
    public function macro_macro($__header__ = null, $__body__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "header" => $__header__,
            "body" => $__body__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 2
            echo "<div>
        <h1>";
            // line 4
            (((array_key_exists("header", $context) &&  !(null === ($context["header"] ?? null)))) ? (print (twig_escape_filter($this->env, ($context["header"] ?? null), "html", null, true))) : (print ("Default Header")));
            // line 5
            echo "</h1>

        <div>";
            // line 8
            $this->displayBlock('body', $context, $blocks);
            // line 11
            echo "</div>
    </div>";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "macro.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 11,  71 => 8,  67 => 5,  65 => 4,  62 => 2,  48 => 1,  44 => 9,  40 => 8,);
    }

    public function getSourceContext()
    {
        return new Source("", "macro.html.twig", "/dev/twig-benchmark/templates/macro.html.twig");
    }
}
