<?php

/* core/themes/bartik/templates/page-title.html.twig */
class __TwigTemplate_4cf0a1ee4e5a29c92635383ae6fda8b07530deb4011d2b6018acd3240cd541c7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@classy/content/page-title.html.twig", "core/themes/bartik/templates/page-title.html.twig", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "@classy/content/page-title.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2d2d8ac676508b805748516282a423c6a49d9cebaed7db1c1914119bec221597 = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d2d8ac676508b805748516282a423c6a49d9cebaed7db1c1914119bec221597->enter($__internal_2d2d8ac676508b805748516282a423c6a49d9cebaed7db1c1914119bec221597_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "core/themes/bartik/templates/page-title.html.twig"));

        $tags = array("set" => 16);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set'),
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

        // line 16
        $context["title_attributes"] = $this->getAttribute(($context["title_attributes"] ?? null), "addClass", array(0 => "title"), "method");
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2d2d8ac676508b805748516282a423c6a49d9cebaed7db1c1914119bec221597->leave($__internal_2d2d8ac676508b805748516282a423c6a49d9cebaed7db1c1914119bec221597_prof);

    }

    public function getTemplateName()
    {
        return "core/themes/bartik/templates/page-title.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 1,  51 => 16,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "core/themes/bartik/templates/page-title.html.twig", "C:\\xampp\\htdocs\\mygeotec\\core\\themes\\bartik\\templates\\page-title.html.twig");
    }
}
