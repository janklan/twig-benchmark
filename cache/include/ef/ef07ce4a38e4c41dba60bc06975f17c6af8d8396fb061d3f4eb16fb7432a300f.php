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

/* include-runner.html.twig */
class __TwigTemplate_414f10ed1c86a6b9e7cfd37c75408a844fad68fe2bb163728956e9684dc7ae4e extends Template
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
        $macros["shared"] = $this->macros["shared"] = $this->loadTemplate("shared-macro.html.twig", "include-runner.html.twig", 1)->unwrap();
        // line 2
        echo "
";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, ($context["count"] ?? null)));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 4
            echo "    ";
            ob_start(function () { return ''; });
            // line 5
            echo "        <p>Body ";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "</p>
        ";
            // line 6
            echo twig_call_macro($macros["shared"], "macro_macro", [("Value" . $context["i"])], 6, $context, $this->getSourceContext());
            echo "
    ";
            $context["body"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 8
            echo "
    ";
            // line 9
            $this->loadTemplate("include.html.twig", "include-runner.html.twig", 9)->display(twig_array_merge($context, ["header" => ("Header " .             // line 10
$context["i"]), "body" =>             // line 11
($context["body"] ?? null)]));
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "include-runner.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 11,  76 => 10,  75 => 9,  72 => 8,  67 => 6,  62 => 5,  59 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "include-runner.html.twig", "/dev/twig-benchmark/templates/include-runner.html.twig");
    }
}
