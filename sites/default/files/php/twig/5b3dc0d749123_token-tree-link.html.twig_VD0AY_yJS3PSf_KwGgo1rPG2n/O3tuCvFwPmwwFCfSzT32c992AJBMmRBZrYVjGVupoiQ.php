<?php

/* modules/contrib/token/templates/token-tree-link.html.twig */
class __TwigTemplate_91b5c5a2332cce638919611a45eaf69d73584a2698cc4bc83a9e52086adec419 extends Twig_Template
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
        $__internal_e1e88f8300894f5e03cfc2b7b454524dafdb24ba2761d0eeb09e8381c5c1cc04 = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1e88f8300894f5e03cfc2b7b454524dafdb24ba2761d0eeb09e8381c5c1cc04->enter($__internal_e1e88f8300894f5e03cfc2b7b454524dafdb24ba2761d0eeb09e8381c5c1cc04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "modules/contrib/token/templates/token-tree-link.html.twig"));

        $tags = array("if" => 17);
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

        // line 17
        if (($context["link"] ?? null)) {
            // line 18
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["link"] ?? null), "html", null, true));
        }
        
        $__internal_e1e88f8300894f5e03cfc2b7b454524dafdb24ba2761d0eeb09e8381c5c1cc04->leave($__internal_e1e88f8300894f5e03cfc2b7b454524dafdb24ba2761d0eeb09e8381c5c1cc04_prof);

    }

    public function getTemplateName()
    {
        return "modules/contrib/token/templates/token-tree-link.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 18,  46 => 17,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "modules/contrib/token/templates/token-tree-link.html.twig", "C:\\xampp\\htdocs\\mygeotec\\modules\\contrib\\token\\templates\\token-tree-link.html.twig");
    }
}
