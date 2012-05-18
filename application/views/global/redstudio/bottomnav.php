
<ul class="bottomnav">
   
   


    <?php
    $is_logged_in = $this->session->userdata('is_logged_in');
    $role = $this->session->userdata('role');
    if ($is_logged_in != 0 || $role == 1) {

        echo "<li>".anchor('admin', 'Admin')."</li>";
    }
    ?>

</ul>

&copy; 2012 Redstudio Design Limited. Website Developed by Redstudio Design Limited, duh.