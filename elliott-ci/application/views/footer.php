        <?php
        if ($this->agent->browser() == 'Internet Explorer')
        {
            echo PHP_EOL.'<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>'.PHP_EOL;
            echo '<script>window.jQuery || document.write(\'<script src="'.base_url('js/vendor/jquery-1.9.0.min.js').'"><\/script>\')</script>'.PHP_EOL;
        }
        else
        {
            echo PHP_EOL.'<script src="'.base_url('js/zepto.min.js').'"></script>'.PHP_EOL;
        }
        ?>
        <script src="<?php echo base_url('js/alertify.0.3.8.min.js'); ?>"></script>
        <script src="<?php echo base_url('js/main.js'); ?>"></script>

        <script>
            var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
            (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
            g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g,s)}(document,'script'));
        </script>
    </body>
</html>
