<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/custom/gavias_daudo/templates/page/header-1.html.twig */
class __TwigTemplate_7fffb043990366a1d7f9d4bdb43cbbcb extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<header id=\"header\" class=\"header-1\">

  ";
        // line 3
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topbar", [], "any", false, false, true, 3)) {
            // line 4
            echo "    <div class=\"topbar\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-12\">
            <div class=\"topbar-content-inner clearfix";
            // line 8
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "language", [], "any", false, false, true, 8)) {
                echo " has-language-block";
            }
            echo "\"> 
              <div class=\"topbar-content\">";
            // line 9
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topbar", [], "any", false, false, true, 9), 9, $this->source), "html", null, true);
            echo "</div>
              ";
            // line 10
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "language", [], "any", false, false, true, 10)) {
                // line 11
                echo "                <div class=\"language-region\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "language", [], "any", false, false, true, 11), 11, $this->source), "html", null, true);
                echo "</div>
              ";
            }
            // line 13
            echo "            </div>  
          </div>
        </div>
      </div>
    </div>
  ";
        }
        // line 19
        echo "  
  ";
        // line 20
        $context["class_sticky"] = "";
        // line 21
        echo "  ";
        if ((($context["sticky_menu"] ?? null) == 1)) {
            // line 22
            echo "    ";
            $context["class_sticky"] = "gv-sticky-menu";
            // line 23
            echo "  ";
        }
        echo "  

   <div class=\"header-main ";
        // line 25
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["class_sticky"] ?? null), 25, $this->source), "html", null, true);
        echo "\">
      <div class=\"container header-content-layout\">
         <div class=\"header-main-inner p-relative\">
            <div class=\"row\">
              <div class=\"col-md-12 col-sm-12 col-xs-12 content-inner\">
                <div class=\"branding\">
                  ";
        // line 31
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "branding", [], "any", false, false, true, 31)) {
            // line 32
            echo "                    ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "branding", [], "any", false, false, true, 32), 32, $this->source), "html", null, true);
            echo "
                  ";
        }
        // line 33
        echo "  
                </div>
                <div class=\"header-inner clearfix\">
                  <div class=\"main-menu\">
                    <div class=\"area-main-menu\">
                      <div class=\"area-inner\">
                          <div class=\"gva-offcanvas-mobile\">
                            <div class=\"close-offcanvas hidden\"><i class=\"fa fa-times\"></i></div>
                            <div class=\"main-menu-inner\">
                              ";
        // line 42
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "main_menu", [], "any", false, false, true, 42)) {
            // line 43
            echo "                                ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "main_menu", [], "any", false, false, true, 43), 43, $this->source), "html", null, true);
            echo "
                              ";
        }
        // line 45
        echo "                            </div>

                            ";
        // line 47
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "quick_menu", [], "any", false, false, true, 47)) {
            // line 48
            echo "                              <div class=\"quick-menu\">
                                <div class=\"icon\"><a><span class=\"fas fa-grip-horizontal\"></span></a></div>
                                <div class=\"content-inner\">
                                  ";
            // line 51
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "quick_menu", [], "any", false, false, true, 51), 51, $this->source), "html", null, true);
            echo "
                                </div>  
                              </div>
                            ";
        }
        // line 55
        echo "
                            ";
        // line 56
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "offcanvas", [], "any", false, false, true, 56)) {
            // line 57
            echo "                              <div class=\"after-offcanvas hidden\">
                                ";
            // line 58
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "offcanvas", [], "any", false, false, true, 58), 58, $this->source), "html", null, true);
            echo "
                              </div>
                           ";
        }
        // line 61
        echo "                          </div> 
                          
                          <div id=\"menu-bar\" class=\"menu-bar menu-bar-mobile d-lg-none d-xl-none\">
                            <span class=\"one\"></span>
                            <span class=\"two\"></span>
                            <span class=\"three\"></span>
                          </div>

                          ";
        // line 69
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "search", [], "any", false, false, true, 69)) {
            // line 70
            echo "                            <div class=\"gva-search-region search-region\">
                              <span class=\"icon\"><i class=\"fas fa-search\"></i></span>
                              <div class=\"search-content\">  
                                ";
            // line 73
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "search", [], "any", false, false, true, 73), 73, $this->source), "html", null, true);
            echo "
                              </div>  
                            </div>
                          ";
        }
        // line 77
        echo "                          
                          ";
        // line 78
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "quick_side", [], "any", false, false, true, 78)) {
            // line 79
            echo "                            <div class=\"quick-side-icon d-none d-lg-block d-xl-block\">
                              <div class=\"icon\"><a href=\"#\"><span class=\"qicon fas fa-bars\"></span></a></div>
                            </div>
                          ";
        }
        // line 82
        echo "  
                      </div>
                    </div>
                  </div>  
                </div> 
              </div>

            </div>
         </div>
      </div>
   </div>

</header>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["page", "sticky_menu"]);    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/custom/gavias_daudo/templates/page/header-1.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  197 => 82,  191 => 79,  189 => 78,  186 => 77,  179 => 73,  174 => 70,  172 => 69,  162 => 61,  156 => 58,  153 => 57,  151 => 56,  148 => 55,  141 => 51,  136 => 48,  134 => 47,  130 => 45,  124 => 43,  122 => 42,  111 => 33,  105 => 32,  103 => 31,  94 => 25,  88 => 23,  85 => 22,  82 => 21,  80 => 20,  77 => 19,  69 => 13,  63 => 11,  61 => 10,  57 => 9,  51 => 8,  45 => 4,  43 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/gavias_daudo/templates/page/header-1.html.twig", "/var/www/html/Truckfoodie/themes/custom/gavias_daudo/templates/page/header-1.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 3, "set" => 20);
        static $filters = array("escape" => 9);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set'],
                ['escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
