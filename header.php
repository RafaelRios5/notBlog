<link href="http://localhost/blog/assets/style.css" rel="stylesheet" type="text/css">
</head>
<body>
<ul class="ulclass">
<li><a href="http://localhost/blog/">Home</a></li>
<?php
$baseUrl="http://localhost/blog/page/"; 
        try {

            $stmt = $db->query('SELECT pageTitle,pageSlug FROM techno_pages ORDER BY pageId ASC');
            while($rowlink = $stmt->fetch()){
                
                echo '<li><a href="'.$baseUrl.''.$rowlink['pageSlug'].'">'.$rowlink['pageTitle'].'</a></li>';
            }

        } catch(PDOException $e) {
            echo $e->getMessage();
        }
    ?>
    <li><a href='http://localhost/blog/admin/'><font color="red">Login</font></a></li>
</ul>