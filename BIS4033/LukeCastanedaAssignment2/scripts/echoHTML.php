<?php
function echoHead($product_discount_calculator_js, $cssfile) {
    echo '
        <!DOCTYPE html>
        <html>
        <head>
            <title>Product Discount Calculator</title>
            <link rel="stylesheet" type="text/css" href="'.$cssfile.'">
            <script src="'.$product_discount_calculator_js.'"></script>
        </head>
    ';
}
function echoHeader($title) {
    echo '
        <body>
        <header> 
             <h2>'.$title. '</h2>
             <img src="../images/company.jpg" alt="Logo" width="80px" height="80px">
    </header>
    ';
}
function echoFooter() {
    $currYear = date('y');
    echo '
        <footer>
            &copy; Luke Castaneda, '.$currYear.'. Please contact <a href="mailto:chimp@gmail.com"> Admin</a> for more information.
        </footer>
        </body>
        </html>
    ';
}