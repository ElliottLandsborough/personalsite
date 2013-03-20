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
        <script src="<?php echo base_url('/min/b=js&amp;f=alertify.0.3.8.min.js,main.js'); ?>"></script>
        <script>var _gaq=[['_setAccount','UA-33351041-1'],['_trackPageview']];(function(d){var g=d.createElement('script'),s=d.scripts[0];g.src='//www.google-analytics.com/ga.js';s.parentNode.insertBefore(g,s);}(document));</script>
    </body>
</html>
