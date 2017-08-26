<!--, Footer -->

<footer id="down" class="w3-container w3-padding-64 w3-center w3-white">  
    <div class="w3-xlarge w3-padding-32">
        <img id="img1" src="/wp-content/themes/myfirstwptheme/images/jewish.png">
        <img src="/wp-content/themes/myfirstwptheme/images/tzvi.png">
        <img src="/wp-content/themes/myfirstwptheme/images/edu.png">
        <img src="/wp-content/themes/myfirstwptheme/images/yeroham.jpg">
    </div>
    <p>מכינת ירוחם</p>
    <p>2016-2017 | כפר הסטודנטים ירוחם  | 08-860-3041   </p>
    <p>האתר נבנה ע"י לירון צבוטרו ומתן אלקלעי &copy; </p>
</footer>



<?php wp_footer(); ?>

<script>
// Used to toggle the menu on small screens when clicking on the menu button
function togglemenusmall() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else { 
        x.className = x.className.replace(" w3-show", "");
    }
}

</script>



</body>
</html>