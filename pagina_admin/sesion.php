<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    
    <?php
    session_start();
    if(isset( $_SESSIONS['u_usuario'])){
        
        echo "session exitosa";
    }
    
    else "que paso;";
    
    ?>
    
</body>
</html>