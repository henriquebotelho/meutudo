<script src="<?php echo HB_THEME_URL; ?>js/jquery.min.js"></script>
<script src="<?php echo HB_THEME_URL; ?>js/popper.min.js"></script>
<script src="<?php echo HB_THEME_URL; ?>js/bootstrap.min.js"></script>
<script src="<?php echo HB_THEME_URL; ?>js/scripts.js"></script>
<?php wp_footer(); ?>
<script src="<?php echo HB_THEME_URL; ?>js/cookieconsent.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/js-cookie/2.2.1/js.cookie.min.js"></script>
    <script>
        window.cookieconsent.initialise({
            "palette": {
                "popup": {
                    "background": "#9f134e",
                    "text": "#ffffff"
                },
                "button": {
                    "background": "#ffffff"
                }
            },
            "content": {
                "message": "Nós usamos cookies e outras tecnologias semelhantes para melhorar a sua experiência em nosso site. Ao concordar com as nossas condições, você aceita o monitoramento.",
                "dismiss": "ACEITAR",
                "href": "",
                "link": "",
            }
        })
    </script>