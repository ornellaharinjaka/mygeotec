<?php

/* core/themes/classy/templates/views/views-exposed-form.html.twig */
class __TwigTemplate_94f67cdb5b8e8886698c42ffc03fed8523dac857ae3084ce23fbace3891a0afc extends Twig_Template
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
        $__internal_10e176d759f6814b19dd8009e14de654daa380a4c5f3756b5183b7aca0e99802 = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_10e176d759f6814b19dd8009e14de654daa380a4c5f3756b5183b7aca0e99802->enter($__internal_10e176d759f6814b19dd8009e14de654daa380a4c5f3756b5183b7aca0e99802_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "core/themes/classy/templates/views/views-exposed-form.html.twig"));

        $tags = array("if" => 12);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if'),
                array(),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 12
        if ( !twig_test_empty(($context["q"] ?? null))) {
            // line 13
            echo "  ";
            // line 17
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["q"] ?? null), "html", null, true));
            echo "
";
        }
        // line 19
        echo "<div class=\"form--inline clearfix\">
  ";
        // line 20
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["form"] ?? null), "html", null, true));
        echo "
</div>
";
        
        $__internal_10e176d759f6814b19dd8009e14de654daa380a4c5f3756b5183b7aca0e99802->leave($__internal_10e176d759f6814b19dd8009e14de654daa380a4c5f3756b5183b7aca0e99802_prof);

    }

    public function getTemplateName()
    {
        return "core/themes/classy/templates/views/views-exposed-form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 20,  55 => 19,  50 => 17,  48 => 13,  46 => 12,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "core/themes/classy/templates/views/views-exposed-form.html.twig", "C:\\xampp\\htdocs\\mygeotec\\core\\themes\\classy\\templates\\views\\views-exposed-form.html.twig");
    }
}
