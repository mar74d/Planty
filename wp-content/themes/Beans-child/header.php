<!DOCTYPE html>
    <html lang="fr">
        <head>
            <meta charset="utf-8">
            <title>Planty</title>
            <link href="style.css" rel="stylesheet" type="text/css">
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Syne:wght@400;700;800&display=swap" rel="stylesheet">
            
            <style>
                header {
                height: 80px;
                background: #FFFFFF;
                display: flex;
                flex-direction: row;
                justify-content: space-between;
                align-items: center;
                }

                #logo_image {
                width: 201px;
                height: 19px;
                }

                ul {
                list-style-type: none;
                width: 35%;
                display: flex;
                flex-direction: row;
                justify-content: space-between;
                align-items: center;
                }

                a[href*="#nous rencontrer"] {
                font-family: 'Syne';
                font-style: normal;
                font-weight: 400;
                font-size: 16px;
                line-height: 16px;
                /* identical to box height */
                color: #000000;
                text-decoration: none;
                }

                a[href*="#admin"] {
                font-family: 'Syne';
                font-style: normal;
                font-weight: 400;
                font-size: 16px;
                line-height: 19px; 
                color: #000000;
                text-decoration: none;
                }

                a[href*="#commander"] {
                font-family: 'Syne';
                font-style: normal;
                font-weight: 400;
                font-size: 16px;
                line-height: 19px;
                color: #FFFFFF;
                text-decoration: none;
                }

                li {
                display: flex;
                justify-content: center;
                align-items: center;
                width: 236px;
                height: 80px;
                }

                .commander {
                    background-color: #DC9F96;
                }
            </style>
        </head>
        <body>
            <header>
                <div id="logo_image">
                <img src="<?= get_stylesheet_directory_uri()."/images/Logo.png" ?>" alt="Logo du site Planty" title="Logo du site Planty">
                <!-- génère un lien absolu vers dossier images !-->
                </div>
                    
                <?php wp_nav_menu() ?>

                        <ul>
                            <li><a href="#nous rencontrer">Nous rencontrer</a></li>
                            <li><a href="#admin">Admin</a></li>
                            <li class="commander"><a href="#commander">Commander</a></li>
                        </ul>
                      
            </header>
            