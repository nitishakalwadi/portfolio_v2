<?php

/* forms/fields/captcha/captcha.html.twig */
class __TwigTemplate_a57d523ee573e8eed5ac786acc9fd249726c8c9a314b07705c3c89866a022073 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("forms/field.html.twig", "forms/fields/captcha/captcha.html.twig", 1);
        $this->blocks = array(
            'input' => array($this, 'block_input'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "forms/field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_input($context, array $blocks = array())
    {
        // line 4
        echo "    <script src=\"https://www.google.com/recaptcha/api.js?onload=captchaOnloadCallback&render=explicit\"
        async defer>
    </script>

    <script>
        var captchaOnloadCallback = function captchaOnloadCallback() {
            grecaptcha.render('g-recaptcha', {
                'sitekey': \"";
        // line 11
        echo $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "recatpcha_site_key", array());
        echo "\",
                'callback': captchaValidatedCallback,
                'expired-callback': captchaExpiredCallback
            });
        };

        var captchaValidatedCallback = function captchaValidatedCallback() {

        };

        var captchaExpiredCallback = function captchaExpiredCallback() {
            grecaptcha.reset();
        };
    </script>

    <div class=\"g-recaptcha\" id=\"g-recaptcha\"></div>
";
    }

    public function getTemplateName()
    {
        return "forms/fields/captcha/captcha.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 11,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends "forms/field.html.twig" %}*/
/* */
/* {% block input %}*/
/*     <script src="https://www.google.com/recaptcha/api.js?onload=captchaOnloadCallback&render=explicit"*/
/*         async defer>*/
/*     </script>*/
/* */
/*     <script>*/
/*         var captchaOnloadCallback = function captchaOnloadCallback() {*/
/*             grecaptcha.render('g-recaptcha', {*/
/*                 'sitekey': "{{field.recatpcha_site_key}}",*/
/*                 'callback': captchaValidatedCallback,*/
/*                 'expired-callback': captchaExpiredCallback*/
/*             });*/
/*         };*/
/* */
/*         var captchaValidatedCallback = function captchaValidatedCallback() {*/
/* */
/*         };*/
/* */
/*         var captchaExpiredCallback = function captchaExpiredCallback() {*/
/*             grecaptcha.reset();*/
/*         };*/
/*     </script>*/
/* */
/*     <div class="g-recaptcha" id="g-recaptcha"></div>*/
/* {% endblock %}*/
/* */
