<?php

/* base.html.twig */
class __TwigTemplate_7de6d1fd72b8f212c067c56a5a3e5e5a9183f80947168dff4953195e3a7a9a01 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_106201901a2e6c6c7fea147340d637ea49701ae8802a7258d1fbe62315b5c3d3 = $this->env->getExtension("native_profiler");
        $__internal_106201901a2e6c6c7fea147340d637ea49701ae8802a7258d1fbe62315b5c3d3->enter($__internal_106201901a2e6c6c7fea147340d637ea49701ae8802a7258d1fbe62315b5c3d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" >
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" >
        <script type=\"text/javascript\" src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\" ></script>
        <script type=\"text/javascript\" src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\" ></script>
        <script type=\"text/javascript\" src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/script.js"), "html", null, true);
        echo "\" ></script>
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" >
    </head>

    <body>
        <div class=\"col-md-12 header-top\">
          <img class=\"img-responsive\" src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/sword.jpg"), "html", null, true);
        echo "\">
        </div>

        <div class=\"col-md-12\">
            <nav class=\"navbar navbar-inverse row\">
              <div class=\"container-fluid\">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class=\"navbar-header\">
                  <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\" aria-expanded=\"false\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                  </button>
                  <a class=\"navbar-brand\" href=\"#\">Houses Of King</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                  <ul class=\"nav navbar-nav\">
                    <li class=\"active\"><a href=\"#\">Accueil <span class=\"sr-only\">(current)</span></a></li>
                    <li><a href=\"#\">A propos</a></li>
                    <li><a href=\"#\">FAQ</a></li>
                    <li><a href=\"#\">Forum</a></li>
                  </ul>
                  
                  <ul class=\"nav navbar-nav navbar-right\">
                    ";
        // line 43
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            echo "                      
                      <li class=\"dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Bonjour ";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo " <span class=\"caret\"></span></a>
                        <ul class=\"dropdown-menu\">
                          <li><a href=\"#\">Mon espace</a></li>
                          <li><a href=\"#\">Mes paramètres</a></li>
                          <li><a href=\"#\">Messagerie</a></li>
                          <li role=\"separator\" class=\"divider\"></li>
                          <li><a href=\"";
            // line 51
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">Se déconnecter</a></li>
                        </ul>
                      </li>
                    ";
        } else {
            // line 55
            echo "                      <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("user_register");
            echo "\">S'enregitrer</a></li>
                      <li><a href=\"";
            // line 56
            echo $this->env->getExtension('routing')->getPath("user_login");
            echo "\">Se connecter</a></li>
                    ";
        }
        // line 58
        echo "                  </ul>
                </div><!-- /.navbar-collapse -->
              </div><!-- /.container-fluid -->
            </nav>
        </div>

        <div class=\"col-md-10 col-md-offset-1\">
          ";
        // line 65
        $this->displayBlock('body', $context, $blocks);
        // line 66
        echo "        </div>

        <div class=\"empty-div col-md-12\">

        </div>

        <div class=\"col-md-12 top-footer\">
        </div>

        <div class=\"col-md-12 main-footer\">
        </div>

    </body>
</html>
";
        
        $__internal_106201901a2e6c6c7fea147340d637ea49701ae8802a7258d1fbe62315b5c3d3->leave($__internal_106201901a2e6c6c7fea147340d637ea49701ae8802a7258d1fbe62315b5c3d3_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_992935ebd4537a0a6d622ffb381d2bfe0398baed083d2e7429b126bd98fbff36 = $this->env->getExtension("native_profiler");
        $__internal_992935ebd4537a0a6d622ffb381d2bfe0398baed083d2e7429b126bd98fbff36->enter($__internal_992935ebd4537a0a6d622ffb381d2bfe0398baed083d2e7429b126bd98fbff36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_992935ebd4537a0a6d622ffb381d2bfe0398baed083d2e7429b126bd98fbff36->leave($__internal_992935ebd4537a0a6d622ffb381d2bfe0398baed083d2e7429b126bd98fbff36_prof);

    }

    // line 65
    public function block_body($context, array $blocks = array())
    {
        $__internal_7fcc2ccb3b4b8f6beb4ccd60983bb4527998196b3be9256dd10b27d836028ee4 = $this->env->getExtension("native_profiler");
        $__internal_7fcc2ccb3b4b8f6beb4ccd60983bb4527998196b3be9256dd10b27d836028ee4->enter($__internal_7fcc2ccb3b4b8f6beb4ccd60983bb4527998196b3be9256dd10b27d836028ee4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_7fcc2ccb3b4b8f6beb4ccd60983bb4527998196b3be9256dd10b27d836028ee4->leave($__internal_7fcc2ccb3b4b8f6beb4ccd60983bb4527998196b3be9256dd10b27d836028ee4_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 65,  155 => 5,  134 => 66,  132 => 65,  123 => 58,  118 => 56,  113 => 55,  106 => 51,  97 => 45,  92 => 43,  62 => 16,  54 => 11,  50 => 10,  46 => 9,  42 => 8,  38 => 7,  34 => 6,  30 => 5,  24 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css') }}" >*/
/*         <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" >*/
/*         <script type="text/javascript" src="{{ asset('js/jquery.js') }}" ></script>*/
/*         <script type="text/javascript" src="{{ asset('js/bootstrap.js') }}" ></script>*/
/*         <script type="text/javascript" src="{{ asset('js/script.js') }}" ></script>*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" >*/
/*     </head>*/
/* */
/*     <body>*/
/*         <div class="col-md-12 header-top">*/
/*           <img class="img-responsive" src="{{ asset('img/sword.jpg') }}">*/
/*         </div>*/
/* */
/*         <div class="col-md-12">*/
/*             <nav class="navbar navbar-inverse row">*/
/*               <div class="container-fluid">*/
/*                 <!-- Brand and toggle get grouped for better mobile display -->*/
/*                 <div class="navbar-header">*/
/*                   <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">*/
/*                     <span class="sr-only">Toggle navigation</span>*/
/*                     <span class="icon-bar"></span>*/
/*                     <span class="icon-bar"></span>*/
/*                     <span class="icon-bar"></span>*/
/*                   </button>*/
/*                   <a class="navbar-brand" href="#">Houses Of King</a>*/
/*                 </div>*/
/* */
/*                 <!-- Collect the nav links, forms, and other content for toggling -->*/
/*                 <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">*/
/*                   <ul class="nav navbar-nav">*/
/*                     <li class="active"><a href="#">Accueil <span class="sr-only">(current)</span></a></li>*/
/*                     <li><a href="#">A propos</a></li>*/
/*                     <li><a href="#">FAQ</a></li>*/
/*                     <li><a href="#">Forum</a></li>*/
/*                   </ul>*/
/*                   */
/*                   <ul class="nav navbar-nav navbar-right">*/
/*                     {% if is_granted("IS_AUTHENTICATED_REMEMBERED") %}                      */
/*                       <li class="dropdown">*/
/*                         <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Bonjour {{ app.user.username }} <span class="caret"></span></a>*/
/*                         <ul class="dropdown-menu">*/
/*                           <li><a href="#">Mon espace</a></li>*/
/*                           <li><a href="#">Mes paramètres</a></li>*/
/*                           <li><a href="#">Messagerie</a></li>*/
/*                           <li role="separator" class="divider"></li>*/
/*                           <li><a href="{{ path('fos_user_security_logout') }}">Se déconnecter</a></li>*/
/*                         </ul>*/
/*                       </li>*/
/*                     {% else %}*/
/*                       <li><a href="{{ path('user_register') }}">S'enregitrer</a></li>*/
/*                       <li><a href="{{ path('user_login') }}">Se connecter</a></li>*/
/*                     {% endif %}*/
/*                   </ul>*/
/*                 </div><!-- /.navbar-collapse -->*/
/*               </div><!-- /.container-fluid -->*/
/*             </nav>*/
/*         </div>*/
/* */
/*         <div class="col-md-10 col-md-offset-1">*/
/*           {% block body %}{% endblock %}*/
/*         </div>*/
/* */
/*         <div class="empty-div col-md-12">*/
/* */
/*         </div>*/
/* */
/*         <div class="col-md-12 top-footer">*/
/*         </div>*/
/* */
/*         <div class="col-md-12 main-footer">*/
/*         </div>*/
/* */
/*     </body>*/
/* </html>*/
/* */
