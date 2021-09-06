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

/* embed.html.twig */
class __TwigTemplate_63c59d64deedb69f144b2caa379c0dd280814a846a09782bfce8f28c4bcc4c58 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'header' => [$this, 'block_header'],
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
        $this->displayBlock('header', $context, $blocks);
        // line 6
        echo "</h1>

    <div>";
        // line 9
        $this->displayBlock('body', $context, $blocks);
        // line 12
        echo "</div>
</div>
";
    }

    // line 3
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "Default Header";
    }

    // line 9
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "Default Body";
    }

    public function getTemplateName()
    {
        return "embed.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  68 => 10,  64 => 9,  60 => 4,  56 => 3,  50 => 12,  48 => 9,  44 => 6,  42 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "embed.html.twig", "/dev/twig-benchmark/templates/embed.html.twig");
    }
}
