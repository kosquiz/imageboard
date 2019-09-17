<?php

class Output{

    public function __construct(){

    }

    public function render($title, $json){
        ?>
        <html>
        <head>
        <title><?php echo $title?></title>

        <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
        <script>
            jsonVar = <?php echo json_encode($json)?>;
        </script>

        </head>

        <body>
        
        </body>
        </html>

        <?php
    }
}