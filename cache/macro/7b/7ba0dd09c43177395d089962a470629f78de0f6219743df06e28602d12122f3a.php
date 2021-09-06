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

/* macro-runner.html.twig */
class __TwigTemplate_a968a281eddae6d6a82ad53daff195672865843c281fb6b484f5c90416498d67 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $macros["benchmark"] = $this->macros["benchmark"] = $this->loadTemplate("macro.html.twig", "macro-runner.html.twig", 1)->unwrap();
        // line 2
        $macros["shared"] = $this->macros["shared"] = $this->loadTemplate("shared-macro.html.twig", "macro-runner.html.twig", 2)->unwrap();
        // line 3
        echo "
";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, ($context["count"] ?? null)));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 5
            echo "    ";
            ob_start(function () { return ''; });
            // line 6
            echo "        <p>Body ";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "</p>
        ";
            // line 7
            echo twig_call_macro($macros["shared"], "macro_macro", [("Value" . $context["i"])], 7, $context, $this->getSourceContext());
            echo "
    ";
            $context["body"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 9
            echo "
    ";
            // line 10
            echo twig_call_macro($macros["benchmark"], "macro_macro", [("Header " . $context["i"]), ($context["body"] ?? null)], 10, $context, $this->getSourceContext());
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "macro-runner.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 10,  61 => 9,  56 => 7,  51 => 6,  48 => 5,  44 => 4,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "macro-runner.html.twig", "/dev/twig-benchmark/templates/macro-runner.html.twig");
    }
}
