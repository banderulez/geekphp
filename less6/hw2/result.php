<?php

        if (isset($_POST['submit'])) {
            switch ($_POST['submit']) {
                case '+':
                    $result = $_POST['x1'] + $_POST['x2'];
                    break;
                case '-':
                    $result = $_POST['x1'] - $_POST['x2'];
                    break;
                case '*':
                    $result = $_POST['x1'] * $_POST['x2'];
                    break;
                case '/':
                    $result = $_POST['x1'] / $_POST['x2'];
                    break;
            }
        }


