
<head>
<?php include('common/head.php');?>
</head>
<body>
<?php
//   if (window.matchMedia("(min-width: 1000px)").matches)
//   {
//     include('common/header.php' );
//   }
//@media (min-width: 1000px) {include('common/header.php' );}
include('common/header.php' );
include('common/navigation.php' );
/*include('content/index_content.php' );*/
$loc =filter_input(INPUT_GET,"loc");
        switch($loc){
            case 'index':
                include("content/index_content.php");
                break;
            case 'about':
                include("content/about_content.php");
                break;
            case 'products':
                include("content/product_content.php");
                break;
            case 'realisation':
                include("content/realisation_content.php");
                break;
                case 'commentaires':
                    include("content/commentaires_content.php");
                    break;
            case null:
                include("content/index_content.php");
                break;
            default:
                include ("content/404.php");
                break;
        }
        echo $_GET['loc'];
include('common/footer.php' );
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
<script src="js/scripts.js"></script>
</body>
