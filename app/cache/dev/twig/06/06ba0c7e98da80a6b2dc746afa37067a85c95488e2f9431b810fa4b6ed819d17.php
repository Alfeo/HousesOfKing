<?php

/* default/login.html.twig */
class __TwigTemplate_df9b62d735b38e67cca21f8ea4e1e51990dc2d28561f6c0758b47bc876ddea97 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/login.html.twig", 1);
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
        $__internal_0dc97c0c7a85f119a059b5df3a782ed12644b346b7dadbb665f26615ddd4092d = $this->env->getExtension("native_profiler");
        $__internal_0dc97c0c7a85f119a059b5df3a782ed12644b346b7dadbb665f26615ddd4092d->enter($__internal_0dc97c0c7a85f119a059b5df3a782ed12644b346b7dadbb665f26615ddd4092d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0dc97c0c7a85f119a059b5df3a782ed12644b346b7dadbb665f26615ddd4092d->leave($__internal_0dc97c0c7a85f119a059b5df3a782ed12644b346b7dadbb665f26615ddd4092d_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_889708a0906e35366058ab6211a3dc4c78a6e5dac3672af8ae132a88c05885a0 = $this->env->getExtension("native_profiler");
        $__internal_889708a0906e35366058ab6211a3dc4c78a6e5dac3672af8ae132a88c05885a0->enter($__internal_889708a0906e35366058ab6211a3dc4c78a6e5dac3672af8ae132a88c05885a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 7
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
";
        }
        // line 9
        echo "
<div class=\"col-md-6 col-md-offset-3 register-div\">
\t<form action=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("user_login_check");
        echo "\" method=\"post\">

\t\t<div class=\"col-md-12 register-title\">
\t\t\t<h3>Connection</h3>
\t\t\t<hr>
\t\t</div>

\t\t<div class=\"col-md-12 \">
\t\t\t<input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />
\t\t\t
    \t\t<div class=\"col-md-6\">
\t\t    \tNom d'utilisateur :
\t\t    </div>
\t\t\t<div class=\"col-md-6\">
\t\t\t\t<input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" />
\t\t    </div>

\t\t</div>

\t\t<div class=\"col-md-12 register-form\">
    \t\t<div class=\"col-md-6\">
\t\t    \tMot de passe :
\t\t    </div>
\t\t\t<div class=\"col-md-6\">
\t\t\t\t<input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" />
\t\t    </div>
\t\t</div>

\t\t<div class=\"col-md-12 register-form\">
    \t\t<div class=\"col-md-6\">
\t\t    \tSe souvenir de moi :
\t\t    </div>
\t\t\t<div class=\"col-md-6\">
\t\t\t\t<input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
\t\t    </div>
\t\t</div>

\t    <div class=\"col-md-12 register-but\">
\t        <input class=\"btn btn-success\" type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"Se connecter\" />
\t    </div>
\t</form>
</div>

";
        
        $__internal_889708a0906e35366058ab6211a3dc4c78a6e5dac3672af8ae132a88c05885a0->leave($__internal_889708a0906e35366058ab6211a3dc4c78a6e5dac3672af8ae132a88c05885a0_prof);

    }

    public function getTemplateName()
    {
        return "default/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 25,  63 => 19,  52 => 11,  48 => 9,  42 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block body %}*/
/* {% if error %}*/
/*     <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>*/
/* {% endif %}*/
/* */
/* <div class="col-md-6 col-md-offset-3 register-div">*/
/* 	<form action="{{ path("user_login_check") }}" method="post">*/
/* */
/* 		<div class="col-md-12 register-title">*/
/* 			<h3>Connection</h3>*/
/* 			<hr>*/
/* 		</div>*/
/* */
/* 		<div class="col-md-12 ">*/
/* 			<input type="hidden" name="_csrf_token" value="{{ csrf_token }}" />*/
/* 			*/
/*     		<div class="col-md-6">*/
/* 		    	Nom d'utilisateur :*/
/* 		    </div>*/
/* 			<div class="col-md-6">*/
/* 				<input type="text" id="username" name="_username" value="{{ last_username }}" required="required" />*/
/* 		    </div>*/
/* */
/* 		</div>*/
/* */
/* 		<div class="col-md-12 register-form">*/
/*     		<div class="col-md-6">*/
/* 		    	Mot de passe :*/
/* 		    </div>*/
/* 			<div class="col-md-6">*/
/* 				<input type="password" id="password" name="_password" required="required" />*/
/* 		    </div>*/
/* 		</div>*/
/* */
/* 		<div class="col-md-12 register-form">*/
/*     		<div class="col-md-6">*/
/* 		    	Se souvenir de moi :*/
/* 		    </div>*/
/* 			<div class="col-md-6">*/
/* 				<input type="checkbox" id="remember_me" name="_remember_me" value="on" />*/
/* 		    </div>*/
/* 		</div>*/
/* */
/* 	    <div class="col-md-12 register-but">*/
/* 	        <input class="btn btn-success" type="submit" id="_submit" name="_submit" value="Se connecter" />*/
/* 	    </div>*/
/* 	</form>*/
/* </div>*/
/* */
/* {% endblock %}*/
/* */
