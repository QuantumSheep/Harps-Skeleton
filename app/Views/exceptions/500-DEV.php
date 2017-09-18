<!DOCTYPE html>
<html>
<head>
    <style>
        @import url('https://fonts.googleapis.com/css?family=Roboto');

        * {
            font-family: 'Roboto', sans-serif;
            word-wrap: break-word;
            -moz-box-sizing: border-box;
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
            transition:.5s;
        }

        body, html {
            margin: 0;
            padding: 0;
        }

        html {
            position: relative;
            min-height: 100%;
        }

        body {
            margin-bottom: 60px;
        }

        button {
            padding: 10px;
            border: 0;
            cursor: pointer;
        }

        button:hover {
            opacity:0.8;
        }

        button:active {
            transform:scale(0.9);
        }

        .error-body span {
            width: 100%;
            display: inline-block;
            padding: 5px;
        }

            .error-body span:nth-child(even) {
                background: #e6e6e6;
            }

            .error-body span:first-child {
                font-weight: bold;
                font-size: 35px;
                background-color: #ff9090;
            }

        .footer {
            position: absolute;
            bottom: 0;
            width: 100%;
            line-height: 60px;
        }

            .footer .footer-content {
                width: 100%;
                height: 100%;
                padding: 10px;
            }

                .footer .footer-content .credits-logo {
                    float: right;
                }
    </style>
</head>
<body>
    <div class="error-body">
        <div>
            <?php
            if($type == "Exception") {
                echo Harps\Core\Handler::ExceptionTracing($e);
            } else {
                echo "<span>Fatal error ($errno)</span>\n";
                echo "<span>in $errfile line $errline</span>";
            }
            ?>
        </div>
    </div>
    <footer class="footer">
        <div class="footer-content">
            <button type="button" id="daynight" onclick="changeColorMode();">Switch to night mode</button>
            <div class="credits-logo">Harps.</div>
        </div>
    </footer>

    <script type="text/javascript">
        (function () {
            if (getCookie("exception_handler_night_mode") == "true") {
                document.body.style.background = "#000";
                document.body.style.filter = "invert(100%)";

                document.getElementById("daynight").innerText("Switch to night mode");
            } else {
                document.body.style.background = "";
                document.body.style.filter = "";

                document.getElementById("daynight").innerText("Switch to day mode");
            }
        })();

        function changeColorMode() {
            if (getCookie("exception_handler_night_mode") == "true") {
                document.body.style.background = "";
                document.body.style.filter = "";

                document.cookie = "exception_handler_night_mode=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
                document.getElementById("daynight").innerText("Switch to night mode");
            } else {
                document.body.style.background = "#000";
                document.body.style.filter = "invert(100%)";

                setCookie("exception_handler_night_mode", "true", 365);
                document.getElementById("daynight").innerText("Switch to day mode");
            }
        }

        function setCookie(cname, cvalue, exdays) {
            var d = new Date();
            d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
            var expires = "expires=" + d.toUTCString();
            document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
        }

        function getCookie(cname) {
            var name = cname + "=";
            var decodedCookie = decodeURIComponent(document.cookie);
            var ca = decodedCookie.split(';');
            for (var i = 0; i < ca.length; i++) {
                var c = ca[i];
                while (c.charAt(0) == ' ') {
                    c = c.substring(1);
                }
                if (c.indexOf(name) == 0) {
                    return c.substring(name.length, c.length);
                }
            }
            return "";
        }
    </script>
</body>
</html>