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

/* themes/custom/gavias_daudo/templates/block/block--system-branding-block.html.twig */
class __TwigTemplate_600f4651b05b73ef4ea8bb508da37cba extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 15
        echo "
";
        // line 16
        $context["attributes"] = twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", ["site-branding"], "method", false, false, true, 16);
        // line 17
        $this->displayBlock('content', $context, $blocks);
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["site_logo", "setting_logo", "site_name", "site_slogan"]);    }

    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 18
        echo "  ";
        if (($context["site_logo"] ?? null)) {
            // line 19
            echo "    <a href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("<front>"));
            echo "\" title=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Home"));
            echo "\" rel=\"home\" class=\"site-branding-logo\">
      ";
            // line 20
            if (($context["setting_logo"] ?? null)) {
                // line 21
                echo "         <img class=\"logo-default\" src=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_replace_filter($this->sandbox->ensureToStringAllowed(($context["site_logo"] ?? null), 21, $this->source), [".svg" => ".png"]), "html", null, true);
                echo "\" alt=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Home"));
                echo "\" />
         <img class=\"logo-default logo-white hidden\" src=\"";
                // line 22
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_replace_filter($this->sandbox->ensureToStringAllowed(($context["site_logo"] ?? null), 22, $this->source), ["logo.svg" => "logo-white.png"]), "html", null, true);
                echo "\" alt=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Home"));
                echo "\" />
      ";
            } else {
                // line 23
                echo "  
        <img class=\"logo-site\" src=\"";
                // line 24
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_logo"] ?? null), 24, $this->source), "html", null, true);
                echo "\" alt=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Home"));
                echo "\" />
      ";
            }
            // line 25
            echo "  
    </a>
  ";
        }
        // line 28
        echo "  ";
        if ((($context["site_name"] ?? null) || ($context["site_slogan"] ?? null))) {
            // line 29
            echo "    <div class=\"site-branding__text\">
      ";
            // line 30
            if (($context["site_name"] ?? null)) {
                // line 31
                echo "        <div class=\"site-branding__name\">
          <a href=\"";
                // line 32
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("<front>"));
                echo "\" title=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Home"));
                echo "\" rel=\"home\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_name"] ?? null), 32, $this->source), "html", null, true);
                echo "</a>
        </div>
      ";
            }
            // line 35
            echo "      ";
            if (($context["site_slogan"] ?? null)) {
                // line 36
                echo "        <div class=\"site-branding__slogan\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_slogan"] ?? null), 36, $this->source), "html", null, true);
                echo "</div>
      ";
            }
            // line 38
            echo "    </div>
  ";
        }
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/custom/gavias_daudo/templates/block/block--system-branding-block.html.twig";
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
        return array (  124 => 38,  118 => 36,  115 => 35,  105 => 32,  102 => 31,  100 => 30,  97 => 29,  94 => 28,  89 => 25,  82 => 24,  79 => 23,  72 => 22,  65 => 21,  63 => 20,  56 => 19,  53 => 18,  45 => 17,  43 => 16,  40 => 15,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/gavias_daudo/templates/block/block--system-branding-block.html.twig", "/var/www/html/Truckfoodie/themes/custom/gavias_daudo/templates/block/block--system-branding-block.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 16, "block" => 17, "if" => 18);
        static $filters = array("t" => 19, "escape" => 21, "replace" => 21);
        static $functions = array("path" => 19);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'block', 'if'],
                ['t', 'escape', 'replace'],
                ['path']
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
