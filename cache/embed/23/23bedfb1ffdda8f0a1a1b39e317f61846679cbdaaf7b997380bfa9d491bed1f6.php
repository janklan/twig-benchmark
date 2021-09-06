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

/* embed-runner.html.twig */
class __TwigTemplate_c2b862a52ae9763695773e4a516dbfdb9352b1b967d05b686376cfdfda4f6659 extends Template
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
            // line 2
            echo "    ";
            $this->loadTemplate("embed-runner.html.twig", "embed-runner.html.twig", 2, "1110261940")->display($context);
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
        return "embed-runner.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "embed-runner.html.twig", "/dev/twig-benchmark/templates/embed-runner.html.twig");
    }
}


/* embed-runner.html.twig */
class __TwigTemplate_c2b862a52ae9763695773e4a516dbfdb9352b1b967d05b686376cfdfda4f6659___1110261940 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'header' => [$this, 'block_header'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "embed.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("embed.html.twig", "embed-runner.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "            Header ";
        echo twig_escape_filter($this->env, ($context["i"] ?? null), "html", null, true);
        echo "
        ";
    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "            ";
        $macros["shared"] = $this->loadTemplate("shared-macro.html.twig", "embed-runner.html.twig", 7)->unwrap();
        // line 8
        echo "            <p>Body ";
        echo twig_escape_filter($this->env, ($context["i"] ?? null), "html", null, true);
        echo "</p>
            ";
        // line 9
        echo twig_call_macro($macros["shared"], "macro_macro", [("Value" . ($context["i"] ?? null))], 9, $context, $this->getSourceContext());
        echo "
        ";
    }

    public function getTemplateName()
    {
        return "embed-runner.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 9,  141 => 8,  138 => 7,  134 => 6,  127 => 4,  123 => 3,  54 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "embed-runner.html.twig", "/dev/twig-benchmark/templates/embed-runner.html.twig");
    }
}
