<footer>

    <ul data-aos="zoom-in">
        <li><a title="facebook" target="_blank" href="https://www.facebook.com/vall.kharitonashvili"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
        <li><a title="twitter" target="_blank" href="https://twitter.com/valeri879"><i class="fa fa-twitter-square" aria-hidden="true"></i></a></li>
        <li><a title="behance" target="_blank" href="https://www.behance.net/valeri879/"><i class="fa fa-behance-square" aria-hidden="true"></i></a></li>
        <li><a title="pinterest" target="_blank" href="https://www.pinterest.com/Valeri879/"><i class="fa fa-pinterest-square" aria-hidden="true"></i></a></li>
        <li><a title="github" target="_blank" href="https://www.github.com/valeri879/"><i class="fa fa-github" aria-hidden="true"></i></a></li>
        <li><a title="stackoverflow" target="_blank" href="https://stackoverflow.com/users/2678346/val-kharitonashvili/"><i class="fa fa-stack-overflow" aria-hidden="true"></i></a></li>
        <li><a title="bitbucket" target="_blank" href="https://bitbucket.org/valeri879/"><i class="fa fa-bitbucket-square" aria-hidden="true"></i></a></li>

    </ul>

    <!--js lib-->
    <?php
    $jquery = file_get_contents('assets/js/build/libs/jquery.min.js');
    echo '<script>' . $jquery . '</script>';
    ?>

    <!--js plugins-->
    <?php
 
    $parallax = file_get_contents('assets/js/build/plugins/parallax.min.js');
    echo '<script>' . $parallax . '</script>';

    $aos = file_get_contents('assets/js/build/plugins/aos.min.js');
    echo '<script>' . $aos . '</script>';

    $scripts = file_get_contents('assets/js/build/view/scripts.min.js');
    echo '<script>' . $scripts . '</script>';

    $analitycs = file_get_contents('assets/js/build/plugins/analitycs.min.js');
    echo '<script>' . $analitycs . '</script>';
    
    ?>

</footer>