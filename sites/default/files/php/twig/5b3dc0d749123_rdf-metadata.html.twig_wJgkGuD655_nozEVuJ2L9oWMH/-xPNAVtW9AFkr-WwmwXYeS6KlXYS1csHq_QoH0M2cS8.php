<?php

/* core/themes/classy/templates/misc/rdf-metadata.html.twig */
class __TwigTemplate_e7c23daf01c688a69ce0eb7405addbacafdf74d1ddecfc61a9d56412ac0b2c33 extends Twig_Template
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
        $__internal_b16ab5f9a8995908fcb0858a386ebccbef7a5b00f1db9dc736f02526087bde9d = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_b16ab5f9a8995908fcb0858a386ebccbef7a5b00f1db9dc736f02526087bde9d->enter($__internal_b16ab5f9a8995908fcb0858a386ebccbef7a5b00f1db9dc736f02526087bde9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "core/themes/classy/templates/misc/rdf-metadata.html.twig"));

        $tags = array("for" => 18);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('for'),
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

        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["metadata"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["attributes"]) {
            // line 19
            echo "  <span";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["attributes"], "addClass", array(0 => "rdf-meta", 1 => "hidden"), "method"), "html", null, true));
            echo "></span>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attributes'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_b16ab5f9a8995908fcb0858a386ebccbef7a5b00f1db9dc736f02526087bde9d->leave($__internal_b16ab5f9a8995908fcb0858a386ebccbef7a5b00f1db9dc736f02526087bde9d_prof);

    }

    public function getTemplateName()
    {
        return "core/themes/classy/templates/misc/rdf-metadata.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 19,  46 => 18,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "core/themes/classy/templates/misc/rdf-metadata.html.twig", "C:\\xampp\\htdocs\\mygeotec\\core\\themes\\classy\\templates\\misc\\rdf-metadata.html.twig");
    }
}
