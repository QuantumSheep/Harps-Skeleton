<html>
<head>
    <style>
        @import url('https://fonts.googleapis.com/css?family=Roboto');

        * {
            font-family: 'Roboto', sans-serif;
            word-wrap:break-word;
        }

        body, html {
            margin:0;
            padding:0;
            background:#ffeee5;
        }

        .container {
            max-width:1200px;
            margin:auto;
        }

        .error-body {
            width:100%;
        }

        .error-title {
            font-size:2rem;
            background:#cf4040;
            padding:5px;
        }

        .error-subtitle {
            font-size: 1rem;
        }

        .error-type {
            padding: 5px;
            background: #e06666;
            border: solid 1px;
            border-top: none;
            transition:.2s;
        }

        .error-type:hover {
            background: #fa9c9c;
            transition:.2s;
        }
    </style>
</head>
<body>
    <div class="error-body">
        <div class="error-title">
            <div class="container">
                <?php
                echo get_class($e) . " : ";
                if($e_special = explode('|||', $e->getMessage())) {
                    echo $e_special[0] . "<br />";
                ?>
                    <span class="error-subtitle">
                        <?php echo $e_special[1]; ?>
                    </span>
                <?php
                } else {

                    echo $e->getMessage() . "<br />";
                    ?>
                    <span class="error-subtitle">
                        <?php echo $e->getFile() . " line " . $e->getLine(); ?>
                    </span>
                <?php
                }
                ?>
            </div>
        </div>
    </div>
</body>
</html>