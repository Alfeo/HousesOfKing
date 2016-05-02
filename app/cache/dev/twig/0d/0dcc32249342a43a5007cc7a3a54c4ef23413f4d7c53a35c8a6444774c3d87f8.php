<?php

/* default/register.html.twig */
class __TwigTemplate_a942f16082294d961c2548eea659f695c531e5e82bb67a47ea58a52c7867f3da extends Twig_Template
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
        $__internal_18b56830cfd964497bb32c0fc595d2e7599fe9bb33c8a8c9043c7e93ad33a307 = $this->env->getExtension("native_profiler");
        $__internal_18b56830cfd964497bb32c0fc595d2e7599fe9bb33c8a8c9043c7e93ad33a307->enter($__internal_18b56830cfd964497bb32c0fc595d2e7599fe9bb33c8a8c9043c7e93ad33a307_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_18b56830cfd964497bb32c0fc595d2e7599fe9bb33c8a8c9043c7e93ad33a307->leave($__internal_18b56830cfd964497bb32c0fc595d2e7599fe9bb33c8a8c9043c7e93ad33a307_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_2c3f6bdc1f87620b91f3095d2b023f071c321cc16f29ccc5686da2bc61b91859 = $this->env->getExtension("native_profiler");
        $__internal_2c3f6bdc1f87620b91f3095d2b023f071c321cc16f29ccc5686da2bc61b91859->enter($__internal_2c3f6bdc1f87620b91f3095d2b023f071c321cc16f29ccc5686da2bc61b91859_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
";
        // line 6
        echo "
<div class=\"col-md-6 col-md-offset-3 register-div\">
\t";
        // line 8
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("method" => "post", "action" => $this->env->getExtension('routing')->getPath("user_register"), "attr" => array("class" => "fos_user_registration_register")));
        echo "

\t\t<div class=\"col-md-12 register-title\">
\t\t\t<h3>Enregistrement</h3>
\t\t\t<hr>
\t\t</div>
\t\t<div class=\"col-md-12 \">
\t\t\t<div class=\"col-md-6\">
\t\t    \tNom d'utilisateur :
\t\t    </div>
\t\t\t<div class=\"col-md-6\">
\t\t\t\t";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'widget');
        echo "
\t\t\t\t";
        // line 20
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
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget');
        echo "
\t\t\t\t";
        // line 30
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
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'widget');
        echo "
\t\t\t\t";
        // line 40
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
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'widget');
        echo "
\t\t\t\t";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'errors');
        echo "
\t\t    </div>
\t\t</div>

\t    <div class=\"col-md-12 register-but\">
\t        <input class=\"btn btn-success\" type=\"submit\" value=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
\t    </div>
\t";
        // line 57
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
</div>

";
        
        $__internal_2c3f6bdc1f87620b91f3095d2b023f071c321cc16f29ccc5686da2bc61b91859->leave($__internal_2c3f6bdc1f87620b91f3095d2b023f071c321cc16f29ccc5686da2bc61b91859_prof);

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
        return array (  126 => 57,  121 => 55,  113 => 50,  109 => 49,  97 => 40,  93 => 39,  81 => 30,  77 => 29,  65 => 20,  61 => 19,  47 => 8,  43 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* <div class="col-md-6 col-md-offset-3 register-div">*/
/* 	{{ form_start(form, {'method': 'post', 'action': path('user_register'), 'attr': {'class': 'fos_user_registration_register'}}) }}*/
/* */
/* 		<div class="col-md-12 register-title">*/
/* 			<h3>Enregistrement</h3>*/
/* 			<hr>*/
/* 		</div>*/
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
