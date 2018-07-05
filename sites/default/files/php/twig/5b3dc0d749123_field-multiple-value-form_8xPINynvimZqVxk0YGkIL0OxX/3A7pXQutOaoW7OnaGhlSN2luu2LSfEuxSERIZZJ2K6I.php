<?php

/* core/themes/classy/templates/form/field-multiple-value-form.html.twig */
class __TwigTemplate_3f0543ac63f058253cd75cd78d7aa416bacfb2b061982058a5eb042c6bf108d0 extends Twig_Template
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
        $__internal_8fdf7611d5b5d4f7a269b09a2ffbe4062a3cb7ab0c1aeaf530a4844322fa5588 = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_8fdf7611d5b5d4f7a269b09a2ffbe4062a3cb7ab0c1aeaf530a4844322fa5588->enter($__internal_8fdf7611d5b5d4f7a269b09a2ffbe4062a3cb7ab0c1aeaf530a4844322fa5588_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "core/themes/classy/templates/form/field-multiple-value-form.html.twig"));

        $tags = array("if" => 22, "for" => 33);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if', 'for'),
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

        // line 22
        if (($context["multiple"] ?? null)) {
            // line 23
            echo "  <div class=\"js-form-item form-item\">
    ";
            // line 24
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["table"] ?? null), "html", null, true));
            echo "
    ";
            // line 25
            if ($this->getAttribute(($context["description"] ?? null), "content", array())) {
                // line 26
                echo "      <div";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["description"] ?? null), "attributes", array()), "addClass", array(0 => "description"), "method"), "html", null, true));
                echo " >";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["description"] ?? null), "content", array()), "html", null, true));
                echo "</div>
    ";
            }
            // line 28
            echo "    ";
            if (($context["button"] ?? null)) {
                // line 29
                echo "      <div class=\"clearfix\">";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["button"] ?? null), "html", null, true));
                echo "</div>
    ";
            }
            // line 31
            echo "  </div>
";
        } else {
            // line 33
            echo "  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["elements"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
                // line 34
                echo "    ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["element"], "html", null, true));
                echo "
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_8fdf7611d5b5d4f7a269b09a2ffbe4062a3cb7ab0c1aeaf530a4844322fa5588->leave($__internal_8fdf7611d5b5d4f7a269b09a2ffbe4062a3cb7ab0c1aeaf530a4844322fa5588_prof);

    }

    public function getTemplateName()
    {
        return "core/themes/classy/templates/form/field-multiple-value-form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 34,  78 => 33,  74 => 31,  68 => 29,  65 => 28,  57 => 26,  55 => 25,  51 => 24,  48 => 23,  46 => 22,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "core/themes/classy/templates/form/field-multiple-value-form.html.twig", "C:\\xampp\\htdocs\\mygeotec\\core\\themes\\classy\\templates\\form\\field-multiple-value-form.html.twig");
    }
}
