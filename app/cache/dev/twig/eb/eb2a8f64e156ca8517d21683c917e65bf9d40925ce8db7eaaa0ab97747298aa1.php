<?php

/* default/register.html.twig */
class __TwigTemplate_29687131f183ad9194f20bc089aa51f8e38d32ed1483b4c3f955bd1508cfaa90 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/register.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_88f50e81994dc17356837a1b4624dd7ba68608f908bd64b12333511e538db04c = $this->env->getExtension("native_profiler");
        $__internal_88f50e81994dc17356837a1b4624dd7ba68608f908bd64b12333511e538db04c->enter($__internal_88f50e81994dc17356837a1b4624dd7ba68608f908bd64b12333511e538db04c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_88f50e81994dc17356837a1b4624dd7ba68608f908bd64b12333511e538db04c->leave($__internal_88f50e81994dc17356837a1b4624dd7ba68608f908bd64b12333511e538db04c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c96870ba7781d2f8d992c6f74ebfd98d22044ea42e05b3875028f89571293520 = $this->env->getExtension("native_profiler");
        $__internal_c96870ba7781d2f8d992c6f74ebfd98d22044ea42e05b3875028f89571293520->enter($__internal_c96870ba7781d2f8d992c6f74ebfd98d22044ea42e05b3875028f89571293520_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
";
        // line 6
        echo "
<div class=\"col-md-6 col-md-offset-6 register-div\">
\t";
        // line 8
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("method" => "post", "action" => $this->env->getExtension('routing')->getPath("user_register"), "attr" => array("class" => "fos_user_registration_register")));
        echo "

\t\t<div class=\"col-md-12 \">
\t\t\t<div class=\"col-md-6\">
\t\t    \tNom d'utilisateur :
\t\t    </div>
\t\t\t<div class=\"col-md-6\">
\t\t\t\t";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'widget');
        echo "
\t\t\t\t";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'errors');
        echo "
\t\t    </div>
\t\t</div>

\t\t<div class=\"col-md-12 register-form\">
\t\t\t<div class=\"col-md-6\">
\t\t    \tAdresse E-mail :
\t\t    </div>
\t\t\t<div class=\"col-md-6\">
\t\t\t\t";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget');
        echo "
\t\t\t\t";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'errors');
        echo "
\t\t    </div>
\t\t</div>

\t\t<div class=\"col-md-12 register-form\">
\t\t\t<div class=\"col-md-6\">
\t\t    \tMot de passe :
\t\t    </div>
\t\t\t<div class=\"col-md-6\">
\t\t\t\t";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'widget');
        echo "
\t\t\t\t";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'errors');
        echo "
\t\t    </div>
\t\t</div>

\t\t<div class=\"col-md-12 register-form\">
\t\t\t<div class=\"col-md-6\">
\t\t    \tConfirmation :
\t\t    </div>
\t\t\t<div class=\"col-md-6\">
\t\t\t\t";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'widget');
        echo "
\t\t\t\t";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'errors');
        echo "
\t\t    </div>
\t\t</div>

\t    <div class=\"col-md-12 register-but\">
\t        <input class=\"btn btn-success\" type=\"submit\" value=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
\t    </div>
\t";
        // line 53
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
</div>

";
        
        $__internal_c96870ba7781d2f8d992c6f74ebfd98d22044ea42e05b3875028f89571293520->leave($__internal_c96870ba7781d2f8d992c6f74ebfd98d22044ea42e05b3875028f89571293520_prof);

    }

    public function getTemplateName()
    {
        return "default/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 53,  117 => 51,  109 => 46,  105 => 45,  93 => 36,  89 => 35,  77 => 26,  73 => 25,  61 => 16,  57 => 15,  47 => 8,  43 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* <div class="col-md-6 col-md-offset-6 register-div">*/
/* 	{{ form_start(form, {'method': 'post', 'action': path('user_register'), 'attr': {'class': 'fos_user_registration_register'}}) }}*/
/* */
/* 		<div class="col-md-12 ">*/
/* 			<div class="col-md-6">*/
/* 		    	Nom d'utilisateur :*/
/* 		    </div>*/
/* 			<div class="col-md-6">*/
/* 				{{ form_widget(form.username) }}*/
/* 				{{ form_errors(form.username) }}*/
/* 		    </div>*/
/* 		</div>*/
/* */
/* 		<div class="col-md-12 register-form">*/
/* 			<div class="col-md-6">*/
/* 		    	Adresse E-mail :*/
/* 		    </div>*/
/* 			<div class="col-md-6">*/
/* 				{{ form_widget(form.email) }}*/
/* 				{{ form_errors(form.email) }}*/
/* 		    </div>*/
/* 		</div>*/
/* */
/* 		<div class="col-md-12 register-form">*/
/* 			<div class="col-md-6">*/
/* 		    	Mot de passe :*/
/* 		    </div>*/
/* 			<div class="col-md-6">*/
/* 				{{ form_widget(form.plainPassword.first) }}*/
/* 				{{ form_errors(form.plainPassword.first) }}*/
/* 		    </div>*/
/* 		</div>*/
/* */
/* 		<div class="col-md-12 register-form">*/
/* 			<div class="col-md-6">*/
/* 		    	Confirmation :*/
/* 		    </div>*/
/* 			<div class="col-md-6">*/
/* 				{{ form_widget(form.plainPassword.second) }}*/
/* 				{{ form_errors(form.plainPassword.second) }}*/
/* 		    </div>*/
/* 		</div>*/
/* */
/* 	    <div class="col-md-12 register-but">*/
/* 	        <input class="btn btn-success" type="submit" value="{{ 'registration.submit'|trans }}" />*/
/* 	    </div>*/
/* 	{{ form_end(form) }}*/
/* </div>*/
/* */
/* {% endblock %}*/
/* */
