<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_53764d5f8fbbdaa9a3dc7695fc0f897240b709689f1cb113c2f53949eb032ca7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a616817fd9c5229f7b91d4d8ff3f661a70da6642b3b2c1fffc8d7a86e157c780 = $this->env->getExtension("native_profiler");
        $__internal_a616817fd9c5229f7b91d4d8ff3f661a70da6642b3b2c1fffc8d7a86e157c780->enter($__internal_a616817fd9c5229f7b91d4d8ff3f661a70da6642b3b2c1fffc8d7a86e157c780_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a616817fd9c5229f7b91d4d8ff3f661a70da6642b3b2c1fffc8d7a86e157c780->leave($__internal_a616817fd9c5229f7b91d4d8ff3f661a70da6642b3b2c1fffc8d7a86e157c780_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_85884175fb916aa4e60c8023e37d1e2ed3b54a1459ad4901bb644820284f6eaf = $this->env->getExtension("native_profiler");
        $__internal_85884175fb916aa4e60c8023e37d1e2ed3b54a1459ad4901bb644820284f6eaf->enter($__internal_85884175fb916aa4e60c8023e37d1e2ed3b54a1459ad4901bb644820284f6eaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.confirmed", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if ((isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_85884175fb916aa4e60c8023e37d1e2ed3b54a1459ad4901bb644820284f6eaf->leave($__internal_85884175fb916aa4e60c8023e37d1e2ed3b54a1459ad4901bb644820284f6eaf_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 8,  45 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/*     <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>*/
/*     {% if targetUrl %}*/
/*     <p><a href="{{ targetUrl }}">{{ 'registration.back'|trans }}</a></p>*/
/*     {% endif %}*/
/* {% endblock fos_user_content %}*/
/* */
