<?php
        if (isset($_POST['res'])) {
            switch ($_POST['operation']) {
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


