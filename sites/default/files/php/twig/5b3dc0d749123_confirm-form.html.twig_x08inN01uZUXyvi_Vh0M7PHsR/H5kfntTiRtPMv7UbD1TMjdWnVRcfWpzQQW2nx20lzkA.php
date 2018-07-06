<?php

/* core/themes/classy/templates/form/confirm-form.html.twig */
class __TwigTemplate_660139978a017295810971e296953a9ea1a3d8a614600586697e9af6a4e7c1e2 extends Twig_Template
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
        $__internal_d93c6e3b716a145143dd60e2f22737de9e3dbd716d92e7ab4a4df2cd6a3cef43 = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_d93c6e3b716a145143dd60e2f22737de9e3dbd716d92e7ab4a4df2cd6a3cef43->enter($__internal_d93c6e3b716a145143dd60e2f22737de9e3dbd716d92e7ab4a4df2cd6a3cef43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "core/themes/classy/templates/form/confirm-form.html.twig"));

        $tags = array();
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array(),
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

        // line 13
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["form"] ?? null), "html", null, true));
        echo "
";
        
        $__internal_d93c6e3b716a145143dd60e2f22737de9e3dbd716d92e7ab4a4df2cd6a3cef43->leave($__internal_d93c6e3b716a145143dd60e2f22737de9e3dbd716d92e7ab4a4df2cd6a3cef43_prof);

    }

    public function getTemplateName()
    {
        return "core/themes/classy/templates/form/confirm-form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 13,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "core/themes/classy/templates/form/confirm-form.html.twig", "C:\\xampp\\htdocs\\mygeotec\\core\\themes\\classy\\templates\\form\\confirm-form.html.twig");
    }
}
