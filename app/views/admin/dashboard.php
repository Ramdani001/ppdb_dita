<div class="d-flex align-items-center" style="background-color: #f8f9fa;">
    <?php
        // Component Sidebar
        $cardUrl = COMPONENT_PATH . 'Sidebar.php';
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $cardUrl);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $cardContent = curl_exec($ch);
        curl_close($ch);
        eval('?>' . $cardContent);
    ?>
   <div class="p-3 op-0 w-75 p-p  m-0" style="height: 99.6vh;">
    <div class="bg-white shadow rounded p-2 w-100 h-100">

        <h3>Section Body</h3>
    </div>    
   </div>
</div>