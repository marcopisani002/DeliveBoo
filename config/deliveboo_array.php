<?php

return [

    // "categories" => [

    //     [
    //         "name" => "Cinese",  //10 piatti
        
    //         "image" => "https://images.unsplash.com/photo-1591214896508-22fc74d84a75?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1740&q=80",
    //     ],

    //     [
    //         "name" => "Giapponese",
            
    //         "image" => "https://images.unsplash.com/photo-1568018508399-e53bc8babdde?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1174&q=80",
    //     ],
        
    //     [
    //         "name" => "Pizzeria",
            
    //         "image" => "https://images.unsplash.com/photo-1569230516306-5a8cb5586399?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=735&q=80",
    //     ],

    //     [
    //         "name" => "Americano",
            
    //         "image" => "https://images.unsplash.com/photo-1600713080871-116c252a520e?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=735&q=80",
    //     ],

    //     [
    //         "name" => "Kebab",
            
    //         "image" => "https://plus.unsplash.com/premium_photo-1661310088696-ee28264b6d2e?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80",
    //     ],

    //     [
    //         "name" => "Bisteccheria",
            
    //         "image" => "https://images.unsplash.com/photo-1600251284086-6417eff9f5fd?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=677&q=80",
    //     ],
    // ],

    "types" => [

        [
            "id" => [1],
            "name" => "Cinese",
        ],

        [
            "id" => [2],
            "name" => "Giapponese",
        ],
        
        [
            "id" => [3],
            "name" => "Pizzeria",
        ],

        [
            "id" => [4],
            "name" => "Americano",
        ],

        [
            "id" => [5],
            "name" => "Kebab",
        ],

        [
            "id" => [6],
            "name" => "Bisteccheria",
        ],

    ],

    "dishes" => [

        [   
            "name" => "Pollo alla Kung Pao",    
            "cover_img" => "https://bakeitwithlove.com/wp-content/uploads/2020/05/Panda-Express-Kung-Pao-Chicken-lg-sq.jpg.webp",    
            "ingredients" => "pollo, peperoncini, arachidi",
            "description" => "Un classico piatto cinese fatto con pollo saltato in padella, peperoncini e arachidi.",
            "price" => "10.99",
            "show" => true,         
            "restaurant_id" => [2,3,18,20],
        ],
        
        [
            "name" => "Ravioli al vapore",
            "cover_img" => "https://images.unsplash.com/photo-1602143249253-9805c88841ac?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80",
            "ingredients" => "carne di maiale, zenzero, cipolla verde",
            "description" => "Deliziosi ravioli ripieni di carne di maiale, zenzero e cipolla verde.",
            "price" => "8.50",
            "show" => true,
            "restaurant_id" => [2,3,20],
        ],

        [
            "name" => "Zuppa di wonton",
            "cover_img" => "https://images.unsplash.com/photo-1559948271-7d5c98d2e951?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80",
            "ingredients" => "wonton, brodo di pollo, spinaci",
            "description" => "Una zuppa di wonton tradizionale con wonton ripieni di carne di maiale, servita in brodo di pollo con spinaci.",
            "price" => "6.99",
            "show" => true,
            "restaurant_id" => [18,20],
        ],

        [
            "name" => "Maiale agrodolce",
            "cover_img" => "https://i2.wp.com/www.piccolericette.net/piccolericette/wp-content/uploads/2018/01/3476_Maiale.jpg?resize=895%2C616&ssl=1",
            "ingredients" => "maiale, ananas, peperoni",
            "description" => "Un piatto di maiale agrodolce fatto con cubetti di maiale, ananas e peperoni in una salsa dolce e acidula.",
            "price" => "12.99",
            "show" => true,
            "restaurant_id" => [2,3,18],
        ],

        [
            "name" => "Chow mein di verdure",
            "cover_img" => "https://images.unsplash.com/photo-1609690963718-0b55905aef78?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=999&q=80",
            "ingredients" => "tagliatelle, verdure miste, salsa di soia",
            "description" => "Un piatto di chow mein vegetariano fatto con tagliatelle saltate in padella e verdure miste in una salsa di soia.",
            "price" => "9.50",
            "show" => true,
            "restaurant_id" => [3,18],
        ],

        [
            "name" => "Gamberi in salsa di aglio",
            "cover_img" => "https://wips.plug.it/cips/buonissimo.org/cms/2012/01/gamberi-all-aglio-in-salsa-piccante.jpg?w=713&a=c&h=407",
            "ingredients" => "gamberi, aglio, peperoncino",
            "description" => "Gamberi saltati in padella con aglio e peperoncino in una salsa piccante.",
            "price" => "13.52",
            "show" => true,
            "restaurant_id" => [2,3,18,20],
        ],

        [
            "name" => "Anatra alla pechinese",
            "cover_img" => "https://www.gustissimo.it/articoli/ricette/pollame/anatra-alla-pechinese.jpg",
            "ingredients" => "anatra, cipolla, pancake",
            "description" => "Un piatto di anatra alla pechinese fatto con anatra cotta in umido, cipolla e pancake sottili.",
            "price" => "16.99",
            "show" => true,
            "restaurant_id" => [2,3,18,20],
        ],          

        [
            "name" => "Manzo alla Szechuan",    
            "cover_img" => "https://www.buttalapasta.it/wp-content/uploads/2021/02/manzo-stufato-alla-cinese.jpg",    
            "ingredients" => "manzo, peperoncini secchi, tofu",
            "description" => "Un piatto piccante della cucina Szechuan, fatto con bocconcini di manzo, peperoncini secchi e tofu.",
            "price" => "12.99",
            "show" => true,
            "restaurant_id" => [2],
        ],

        [
            "name" => "Gamberi in salsa di fagioli neri",
            "cover_img" => "https://www.dolcifrutti.it/risorse/ricette/thumbs/m_mexican-shrimp-salad-5.jpg",
            "ingredients" => "gamberi, salsa di fagioli neri, zenzero, aglio",
            "description" => "Un piatto salato e saporito con gamberi freschi e salsa di fagioli neri, insaporiti con zenzero e aglio.",
            "price" => "14.99",
            "show" => true,
            "restaurant_id" => [2],
        ],

        [
            "name" => "Sushi assortito",    
            "cover_img" => "https://images.unsplash.com/photo-1625938145312-c18f06f53be0?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=880&q=80",    
            "ingredients" => "riso, pesce crudo, alga nori, wasabi, salsa di soia",
            "description" => "Un assortimento di sushi fresco, fatto con riso giapponese, pesce crudo, alga nori e condimenti come wasabi e salsa di soia.",
            "price" => "18.99",
            "show" => true,
            "restaurant_id" => [3,18,20],
        ],

        [
            "name" => "Tonkatsu",
            "cover_img" => "https://images.unsplash.com/photo-1644037423703-e4a8e979fcf0?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1074&q=80",
            "ingredients" => "maiale, panko, uovo, farina, cavolo",
            "description" => "Un piatto di maiale fritto impanato con panko, servito con cavolo tagliato sottile.",
            "price" => "15.99",
            "show" => true,
            "restaurant_id" => [2,3,18,20],
        ],
        
        [
            "name" => "Soba noodles",
            "cover_img" => "https://images.unsplash.com/photo-1496114212242-bac8bd9de53d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80",
            "ingredients" => "soba noodles, dashi, mirin, sake, nori",
            "description" => "Un piatto di soba noodles in brodo dashi con mirin, sake e alga nori.",
            "price" => "12.99",
            "show" => true,
            "restaurant_id" => [2,20],
        ],
         
        [
            "name" => "Okonomiyaki",
            "cover_img" => "https://images.unsplash.com/photo-1629579436553-6b34e5ddd9de?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1740&q=80",
            "ingredients" => "farina, uovo, cavolo, bacon, salsa okonomiyaki",
            "description" => "Un pancake salato fatto con farina, uova, cavolo, bacon e salsa okonomiyaki.",
            "price" => "10.99",
            "show" => true,
            "restaurant_id" => [2,18,20],
        ],
         
        [
            "name" => "Tempura",
            "cover_img" => "https://images.unsplash.com/photo-1636381310731-0e851c654cff?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80",
            "ingredients" => "gamberi, verdure miste, farina, uovo, acqua frizzante",
            "description" => "Un piatto di gamberi e verdure miste fritte in pastella di farina, uovo e acqua frizzante.",
            "price" => "16.99",
            "show" => true,
            "restaurant_id" => [3,18,],
        ],
         
        [
            "name" => "Yakitori",
            "cover_img" => "https://cdn.chefincamicia.com/images/a41c789988215311a8b922614a675764.1920.jpg",
            "ingredients" => "pollo, salsa teriyaki, cipollotto",
            "description" => "Spiedini di pollo glassati con salsa teriyaki e cipollotto.",
            "price" => "13.99",
            "show" => true,
            "restaurant_id" => [2,3,20],
        ],
         
        [
            "name" => "Gyudon",
            "cover_img" => "https://thewoksoflife.com/wp-content/uploads/2016/02/gyudon-9.jpg",
            "ingredients" => "manzo, cipolla, soia, mirin, uovo",
            "description" => "Un piatto di riso con carne di manzo tagliata sottile, cipolla, salsa di soia e mirin, servito con uovo crudo sulla parte superiore.",
            "price" => "14.99",
            "show" => true,
            "restaurant_id" => [18],
        ],

        [
            "name" => "Sushi",
            "cover_img" => "https://images.unsplash.com/photo-1553621042-f6e147245754?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1025&q=80",
            "ingredients" => "Riso, Pesce crudo",
            "description" => "Il sushi è un piatto giapponese composto da riso insaporito con aceto di riso, zucchero e sale, accompagnato da pesce crudo o verdure.",
            "price" => "15.99",
            "show" => true,
            "restaurant_id" => [2,3,18,20],
        ],

        [
            "name" => "Ramen",
            "cover_img" => "https://images.unsplash.com/photo-1617421753170-46511a8d73fc?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1965&q=80",
            "ingredients" => "Brodo di carne, Noodles, Carne di maiale, Uova, Verdure",
            "description" => "Il ramen è una zuppa giapponese a base di noodles in brodo di carne, accompagnata da carne di maiale, uova e verdure.",
            "price" => "12.99",
            "show" => true,
            "restaurant_id" => [18],
        ],
        
        [
            "name" => "Margherita",
            "cover_img" => "https://images.unsplash.com/photo-1564936281291-294551497d81?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1052&q=80",
            "ingredients" => "pomodoro, mozzarella, basilico",
            "description" => "Pizza con pomodoro, mozzarella e basilico fresco",
            "price" => "8.99",
            "show" => true,
            "restaurant_id" => [4,6,1,14,17],            
        ],

        [
            "name" => "Prosciutto e funghi",
            "cover_img" => "https://i1.wp.com/www.piccolericette.net/piccolericette/wp-content/uploads/2019/10/4102_Pizza.jpg?resize=895%2C616&ssl=1",
            "ingredients" => "pomodoro, mozzarella, prosciutto cotto, funghi",
            "description" => "Pizza con pomodoro, mozzarella, prosciutto cotto e funghi champignon",
            "price" => "10.99",
            "show" => true,
            "restaurant_id" => [4,6,1,14,17],
        ],

        [
            "name" => "Diavola",
            "cover_img" => "https://www.misya.info/wp-content/uploads/2007/08/Pizza-alla-diavola.jpg",
            "ingredients" => "pomodoro, mozzarella, salame piccante, peperoncino",
            "description" => "Pizza con pomodoro, mozzarella, salame piccante e peperoncino",
            "price" => "9.99",
            "show" => true,
            "restaurant_id" => [4,6,1],
        ],

        [
            "name" => "Quattro formaggi",
            "cover_img" => "https://www.insidetherustickitchen.com/wp-content/uploads/2020/07/Quattro-formaggi-pizza-square-Inside-the-rustic-kitchen.jpg",
            "ingredients" => "gorgonzola, mozzarella, parmigiano reggiano, pecorino romano",
            "description" => "Pizza con quattro formaggi: gorgonzola, mozzarella, parmigiano reggiano e pecorino romano",
            "price" => "11.99",
            "show" => true,
            "restaurant_id" => [14,17],
        ],

        [
            "name" => "Calzone",
            "cover_img" => "https://www.allrecipes.com/thmb/Bwkz2gVOQUJcPYSzOJgD94XDi5Q=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/18874-Real-Italian-Calzones-ddmfs-127-4x3-1-a30a0e72801f42bcb0643ed4b57e8a3c.jpg",
            "ingredients" => "pomodoro, mozzarella, prosciutto cotto, funghi",
            "description" => "Calzone ripieno di pomodoro, mozzarella, prosciutto cotto e funghi champignon",
            "price" => "12.99",
            "show" => true,
            "restaurant_id" => [4],
        ],
        
        [
            "name" => "Capricciosa",
            "cover_img" => "https://upload.wikimedia.org/wikipedia/commons/2/2a/Pizza_capricciosa.jpg",
            "ingredients" => "pomodoro, mozzarella, prosciutto cotto, funghi, carciofini, olive nere",
            "description" => "Pizza con pomodoro, mozzarella, prosciutto cotto, funghi champignon, carciofini e olive nere",
            "price" => "12.99",
            "show" => true,
            "restaurant_id" => [4,6,17],
        ],
        
        [
            "name" => "Vegetariana",
            "cover_img" => "https://www.guardini.com/images/guardinispa/ricette/full/pizza_set_2021_full.jpg",
            "ingredients" => "pomodoro, mozzarella, melanzane, zucchine, peperoni, funghi",
            "description" => "Pizza vegetariana con pomodoro, mozzarella, melanzane, zucchine, peperoni e funghi",
            "price" => "11.99",
            "show" => true,
            "restaurant_id" => [4,6,1,14,17],
        ],
        
        [
            "name" => "Tonno e cipolla",
            "cover_img" => "https://www.bofrost.it/on/demandware.static/-/Sites-IT-master-catalog/default/dwe1d74287/images/15196-Pizza-Tonno-e-Cipolla-R.jpg",
            "ingredients" => "pomodoro, mozzarella, tonno, cipolla rossa",
            "description" => "Pizza con pomodoro, mozzarella, tonno e cipolla rossa",
            "price" => "10.99",
            "show" => true,
            "restaurant_id" => [4,6,14],
        ],

        [
            "name" => "Pizza bianca",
            "cover_img" => "https://www.lamiabuonaforchetta.it/wp-content/uploads/2018/01/MG_1360.jpg",
            "ingredients" => "mozzarella, ricotta, prosciutto crudo, rucola",
            "description" => "Pizza bianca con mozzarella, ricotta, prosciutto crudo e rucola fresca",
            "price" => "12.99",
            "show" => true,
            "restaurant_id" => [6,1,14,17],
        ],

        [
            "name" => "Hamburger",
            "cover_img" => "https://images.unsplash.com/photo-1568901346375-23c9450c58cd?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=999&q=80",
            "ingredients" => "pane per hamburger, carne di manzo, lattuga, pomodoro, cipolla, formaggio cheddar",
            "description" => "Hamburger di carne di manzo con formaggio cheddar fuso, lattuga, pomodoro e cipolla su un morbido pane per hamburger",
            "price" => "9.99",
            "show" => true,
            "restaurant_id" => [5,7,1,13,19],
        ],

        [
            "name" => "Hot dog",
            "cover_img" => "https://images.unsplash.com/photo-1599599810694-b5b37304c041?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=627&q=80",
            "ingredients" => "pane per hot dog, salsiccia di pollo, ketchup, senape, cipolla fritta",
            "description" => "Hot dog con salsiccia di pollo, ketchup, senape e cipolla fritta, servito su un morbido pane per hot dog",
            "price" => "6.99",
            "show" => true,
            "restaurant_id" => [5,7,1,13,19],
        ],

        [
            "name" => "BBQ ribs",
            "cover_img" => "https://images.unsplash.com/photo-1544025162-d76694265947?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1169&q=80",
            "ingredients" => "costine di maiale, salsa barbecue, patate fritte",
            "description" => "Costine di maiale glassate con salsa barbecue, servite con patatine fritte",
            "price" => "16.99",
            "show" => true,
            "restaurant_id" => [5,13,19],
        ],          

        [
            "name" => "Mac and cheese",
            "cover_img" => "https://images.unsplash.com/photo-1487532195053-ae7d32261c6a?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1138&q=80",
            "ingredients" => "pasta corta, formaggio cheddar, burro, latte",
            "description" => "Pasta corta con salsa di formaggio cheddar, burro e latte",
            "price" => "8.99",
            "show" => true,
            "restaurant_id" => [5,7,13,19],
        ],

        [
            "name" => "Fried chicken",
            "cover_img" => "https://images.unsplash.com/photo-1626645738196-c2a7c87a8f58?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80",
            "ingredients" => "pollo fritto, salsa piccante, patatine fritte",
            "description" => "Pollo fritto croccante con salsa piccante, servito con patatine fritte",
            "price" => "12.99",
            "show" => true,
            "restaurant_id" => [5,7,1,13,19],
        ],

        [
            "name" => "Clam chowder",
            "cover_img" => "https://images.unsplash.com/photo-1448043552756-e747b7a2b2b8?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1052&q=80",
            "ingredients" => "vongole, patate, pancetta, cipolla, brodo di pesce, panna",
            "description" => "Zuppa di vongole con patate, pancetta, cipolla, brodo di pesce e panna",
            "price" => "10.99",
            "show" => true,
            "restaurant_id" => [5,13,19],
        ],

        [
            "name" => "Chili con carne",
            "cover_img" => "https://wips.plug.it/cips/buonissimo.org/cms/2013/03/chili-carne.jpg",
            "ingredients" => "carne macinata, fagioli rossi, pomodori pelati, cipolla, peperoncino",
            "description" => "Chili con carne fatto con carne macinata, fagioli rossi, pomodori pelati, cipolla e peperoncino",
            "price" => "9.99",
            "show" => true,
            "restaurant_id" => [19],
        ],

        [
            "name" => "Buffalo wings",
            "cover_img" => "https://assets.bonappetit.com/photos/57ad22671b334044149753ed/1:1/w_2560%2Cc_limit/BAS-BEST-HOT-WINGS.jpg",
            "ingredients" => "ali di pollo, salsa piccante, burro",
            "description" => "Ali di pollo croccanti con salsa piccante al burro",
            "price" => "8.99",
            "show" => true,
            "restaurant_id" => [13,19],
        ],

        [
            "name" => "Philly cheesesteak",
            "cover_img" => "https://www.willcookforsmiles.com/wp-content/uploads/2022/09/Philly-Cheesesteak-closeup-sq.jpg",
            "ingredients" => "bistecca di manzo, cipolla, peperoni, formaggio provolone",
            "description" => "Sandwich con bistecca di manzo, cipolla, peperoni e formaggio provolone",
            "price" => "11.99",
            "show" => true,
            "restaurant_id" => [5,7,19],
        ],

        [
            "name" => "Cornbread",
            "cover_img" => "https://cdn.loveandlemons.com/wp-content/uploads/2020/10/cornbread-recipe.jpg",
            "ingredients" => "farina di mais, zucchero, burro, latte",
            "description" => "Pane di farina di mais dolce e morbido, perfetto come accompagnamento ai piatti americani",
            "price" => "4.99",
            "show" => true,
            "restaurant_id" => [5,7,1,13,19],
        ],

        [
            "name" => "Kebab Classico",
            "cover_img" => "https://images.dissapore.com/wp-content/uploads/2015/02/panino-al-kebab.jpg",
            "ingredients" => "pane, carne di pollo, insalata, pomodoro, cipolla, salsa yogurt",
            "description" => "Il kebab classico con carne di pollo, insalata, pomodoro, cipolla e salsa yogurt",
            "price" => "6.99",
            "show" => true,
            "restaurant_id" => [5,13,19,9],
        ],

        [
            "name" => "Kebab Piccante",
            "cover_img" => "https://thumbs.dreamstime.com/b/insegna-di-panorama-con-il-kebab-turco-piccante-del-doner-92951000.jpg",
            "ingredients" => "pane, carne di manzo, insalata, pomodoro, peperoncino, salsa piccante",
            "description" => "Il kebab con carne di manzo piccante, insalata, pomodoro, peperoncino e salsa piccante",
            "price" => "7.99",
            "show" => true,
            "restaurant_id" => [5,13,19,9],
        ],

        [
            "name" => "Kebab Vegetariano",
            "cover_img" => "https://www.giallozafferano.it/images/195-19577/Kebab-vegetariano_780x520_wm.jpg",
            "ingredients" => "pane, falafel, insalata, pomodoro, cipolla, salsa tzatziki",
            "description" => "Il kebab vegetariano con falafel, insalata, pomodoro, cipolla e salsa tzatziki",
            "price" => "6.99",
            "show" => true,
            "restaurant_id" => [5,13,19,9],
        ],

        [
            "name" => "Kebab Salmone",
            "cover_img" => "https://www.cucchiaio.it/content/cucchiaio/it/ricette/2013/04/ricetta-panino-salmone-timo/jcr:content/imagePreview.img10.jpg/1414518403012.jpg",
            "ingredients" => "pane, salmone, insalata, pomodoro, cipolla, salsa yogurt",
            "description" => "Il kebab con salmone affumicato, insalata, pomodoro, cipolla e salsa yogurt",
            "price" => "8.99",
            "show" => true,
            "restaurant_id" => [5,19],
        ],

        [
            "name" => "Kebab Gourmet",
            "cover_img" => "https://res.cloudinary.com/glovoapp/h_225,f_auto,q_auto/Stores/vjhmetmhony8lyslcgu8",
            "ingredients" => "pane, carne di manzo Wagyu, rucola, pomodoro secco, cipolla caramellata, salsa al tartufo",
            "description" => "Il kebab gourmet con carne di manzo Wagyu, rucola, pomodoro secco, cipolla caramellata e salsa al tartufo",
            "price" => "14.99",
            "show" => true,
            "restaurant_id" => [19,9],
        ],

        [
            "name" => "Kebab con Patatine",
            "cover_img" => "https://media-cdn.tripadvisor.com/media/photo-s/0b/bd/fb/84/panino-con-kebab-provola.jpg",
            "ingredients" => "pane, carne di pollo, patatine fritte, insalata, pomodoro, cipolla, salsa kebab",
            "description" => "Il kebab con carne di pollo, patatine fritte, insalata, pomodoro, cipolla e salsa kebab",
            "price" => "8.99",
            "show" => true,
            "restaurant_id" => [5,13,19,9],
        ],

        [
            "name" => "Kebab Falafel",
            "cover_img" => "https://milleeunanottelivakebab.it/wp-content/uploads/2022/11/kebab-2-1024x692.jpg",
            "ingredients" => "pane, falafel, insalata, pomodoro, cipolla, salsa tahina",
            "description" => "Il kebab vegetariano con falafel, insalata, pomodoro, cipolla e salsa tahina",
            "price" => "6.99",
            "show" => true,
            "restaurant_id" => [5,9],
        ],

        [
            "name" => "Kebab Pollo Tikka",
            "cover_img" => "https://tadan-static.s3-eu-west-1.amazonaws.com/static/img/og-images/restaurants/terme-kebab-pisa.jpg",
            "ingredients" => "pane, pollo tikka, insalata, pomodoro, cipolla, salsa raita",
            "description" => "Il kebab con pollo tikka, insalata, pomodoro, cipolla e salsa raita",
            "price" => "7.99",
            "show" => true,
            "restaurant_id" => [5],
        ],

        [
            "name" => "Kebab Tandoori",
            "cover_img" => "https://res.cloudinary.com/glovoapp/h_225,f_auto,q_auto/Stores/z9tyvjkudvtt1ffxtohs",
            "ingredients" => "pane, pollo tandoori, insalata, pomodoro, cipolla, salsa al coriandolo",
            "description" => "Il kebab con pollo tandoori, insalata, pomodoro, cipolla e salsa al coriandolo",
            "price" => "7.99",
            "show" => true,
            "restaurant_id" => [13],
        ],

        [
            "name" => "Bistecca alla fiorentina",
            "cover_img" => "https://d21klxpge3tttg.cloudfront.net/wp-content/uploads/2016/02/BISTECCA-093022.jpg",
            "ingredients" => "bistecca di manzo, sale, pepe",
            "description" => "La celebre bistecca alla fiorentina, con carne di manzo selezionata, cotta alla brace e servita al sangue",
            "price" => "22.99",
            "show" => true,
            "restaurant_id" => [4,11,16,17],
        ],

        [
            "name" => "Bistecca al pepe verde",
            "cover_img" => "https://www.giallozafferano.it/images/184-18454/Filetto-al-pepe-verde_650x433_wm.jpg",
            "ingredients" => "bistecca di manzo, sale, pepe verde, panna",
            "description" => "Bistecca di manzo con una gustosa salsa al pepe verde, a base di panna e aromi",
            "price" => "19.99",
            "show" => true,
            "restaurant_id" => [1,2,4,5,7,8],
        ],

        [
            "name" => "Bistecca ai funghi",
            "cover_img" => "https://media.grandchef.net/ricette/filetto-ai-funghi/galleria/filetto-ai-funghi.jpg",
            "ingredients" => "bistecca di manzo, sale, pepe, funghi misti, prezzemolo",
            "description" => "Bistecca di manzo servita con funghi misti trifolati e aromatizzati con prezzemolo",
            "price" => "21.99",
            "show" => true,
            "restaurant_id" => [1,10,11,17],
        ],

        [
            "name" => "Bistecca al gorgonzola",
            "cover_img" => "https://www.giallozafferano.it/images/220-22064/Scaloppine-al-gorgonzola-con-noci-e-cacao_780x520_wm.jpg",
            "ingredients" => "bistecca di manzo, sale, pepe, gorgonzola, panna",
            "description" => "Bistecca di manzo con una golosa salsa al gorgonzola, a base di panna e formaggio",
            "price" => "19.99",
            "show" => true,
            "restaurant_id" => [1,2],
        ],

        [
            "name" => "Bistecca alla griglia",
            "cover_img" => "https://mangiarebene.s3.amazonaws.com/uploads/recipe/image/2141/mb_asset.jpg",
            "ingredients" => "bistecca di manzo, sale, pepe, erbe aromatiche",
            "description" => "La classica bistecca alla griglia, cotta al punto giusto e insaporita con erbe aromatiche",
            "price" => "18.99",
            "show" => true,
            "restaurant_id" => [1,2,4,8,9,10,11,],
        ],

        [
            "name" => "Bistecca con patate al forno",
            "cover_img" => "https://www.alberghiera.it/Img/ricette/1832013-147-Tagliata-alla-rucola-con-patate-al-rosmarino.jpg",
            "ingredients" => "bistecca di manzo, sale, pepe, patate, rosmarino",
            "description" => "Bistecca di manzo accompagnata da patate al forno profumate con rosmarino",
            "price" => "20.99",
            "show" => true,
            "restaurant_id" => [1,2,4,5,7,8,9,10,11,17],
        ],

        [
            "name" => "Bistecca ai ferri",
            "cover_img" => "https://staticcookist.akamaized.net/wp-content/uploads/sites/21/2020/03/bistecca-alla-fiorentina.jpg",
            "ingredients" => "bistecca di manzo, sale, pepe, aglio, prezzemolo",
            "description" => "Bistecca di manzo marinata con aglio e prezzemolo, poi cotta ai ferri",
            "price" => "19.99",
            "show" => true,
            "restaurant_id" => [1,8,9,10,12,15,16,17],
        ],

        [
            "name" => "Bistecca di maiale alla griglia",
            "cover_img" => "https://cdn.ilclubdellericette.it/wp-content/uploads/2019/08/braciole-di-maiale-alla-griglia-1280x720.jpg",
            "ingredients" => "bistecca di maiale, sale, pepe, aglio",
            "description" => "Bistecca di maiale cotta alla griglia con aglio e pepe",
            "price" => "15.99",
            "show" => true,
            "restaurant_id" => [1,2,4,5,7,8,9,10,11,12,14,15,16,17],
        ],

        [
            "name" => "Bistecca di pollo al limone",
            "cover_img" => "https://www.mangiaconme.it/wp-content/uploads/2017/07/chicken_breast_with_lemon_sauce_161_risultato.jpg",
            "ingredients" => "bistecca di pollo, sale, pepe, limone",
            "description" => "Bistecca di pollo marinata con limone e poi grigliata",
            "price" => "13.99",
            "show" => true,
            "restaurant_id" => [1,2,16,17],             
        ],

        [
            "name" => "Bistecca alla pizzaiola",
            "cover_img" => "https://www.chiarapassion.com/wp-content/uploads/2018/11/carne-alla-pizzaiola-ricetta.jpg",
            "ingredients" => "bistecca di manzo, pomodoro, cipolla, origano, aglio",
            "description" => "Bistecca di manzo cotta in una gustosa salsa di pomodoro, cipolla e spezie",
            "price" => "21.99",
            "show" => true,
            "restaurant_id" => [1,7,8,12,14],                  
        ],
    ],

    "users" => [
        [
            "name" => "Pippo",
            "surname" => "Rossi",
            "password" => "deliveboo",
            "email" => "pippo.rossi@gmail.com"
        ],

        [
            "name" => "Antonio",
            "surname" => "Verdi",
            "password" => "deliveboo",
            "email" => "antonio.verdi@gmail.com"
        ],

        [
            "name" => "Ugò",
            "surname" => "Marroni",
            "password" => "deliveboo",
            "email" => "ugò.marroni@gmail.com"
        ],

        [
            "name" => "Gino",
            "surname" => "Gialli",
            "password" => "deliveboo",
            "email" => "gino.gialli@gmail.com"
        ],

        [
            "name" => "Alice",
            "surname" => "Azzurri",
            "password" => "deliveboo",
            "email" => "alice.azzurri@gmail.com"
        ],

        [
            "name" => "Elisa",
            "surname" => "Arancioni",
            "password" => "deliveboo",
            "email" => "elisa.arancioni@gmail.com"
        ],

        [
            "name" => "Arianna",
            "surname" => "Violi",
            "password" => "deliveboo",
            "email" => "arianna.violi@gmail.com"
        ],

        [
            "name" => "Siria",
            "surname" => "Bianchi",
            "password" => "deliveboo",
            "email" => "siria.bianchi@gmail.com"
        ],

        [
            "name" => "Michele",
            "surname" => "ferro",
            "password" => "deliveboo",
            "email" => "michele.ferro@gmail.com"
        ],

        [
            "name" => "Alberto",
            "surname" => "Legno",
            "password" => "deliveboo",
            "email" => "alberto.legno@gmail.com"
        ],

        [
            "name" => "Mario",
            "surname" => "Plasti",
            "password" => "deliveboo",
            "email" => "mario.plasti@gmail.com"
        ],

        [
            "name" => "Simone",
            "surname" => "Vetri",
            "password" => "deliveboo",
            "email" => "simone.verdi@gmail.com"
        ],

        [
            "name" => "Giulia",
            "surname" => "Rosa",
            "password" => "deliveboo",
            "email" => "giulia.rosa@gmail.com"
        ],

        [
            "name" => "Giulietta",
            "surname" => "Margherita",
            "password" => "deliveboo",
            "email" => "giulietta.margherita@gmail.com"
        ],

        [
            "name" => "Gianna",
            "surname" => "Tulipano",
            "password" => "deliveboo",
            "email" => "gianna.tulipano@gmail.com"
        ],

        [
            "name" => "Giorgia",
            "surname" => "Violetta",
            "password" => "deliveboo",
            "email" => "giorgia.violetta@gmail.com"
        ],

        [
            "name" => "Alessandro",
            "surname" => "Russo",
            "password" => "deliveboo",
            "email" => "alessandro.russo@gmail.com"
        ],

        [
            "name" => "Marco",
            "surname" => "Pellegrini",
            "password" => "deliveboo",
            "email" => "marco.pellegrini@gmail.com"
        ],

        [
            "name" => "Giacomo",
            "surname" => "Fontana",
            "password" => "deliveboo",
            "email" => "giacomo.fontana@gmail.com"
        ],

        [
            "name" => "Davide",
            "surname" => "Conti",
            "password" => "deliveboo",
            "email" => "davide.conti@gmail.com"
        ],

        [
            "name" => "Martina",
            "surname" => "Mancini",
            "password" => "deliveboo",
            "email" => "martina.mancini@gmail.com"
        ],

        [
            "name" => "Federica",
            "surname" => "Neri",
            "password" => "deliveboo",
            "email" => "federica.neri@gmail.com"
        ],

        [
            "name" => "Valentina",
            "surname" => "Grasso",
            "password" => "deliveboo",
            "email" => "valentina.grasso@gmail.com"
        ],

        [
            "name" => "Sara",
            "surname" => "Fabbri",
            "password" => "deliveboo",
            "email" => "sara.fabbri@gmail.com"
        ],

        [
            "name" => "Roberto",
            "surname" => "Galli",
            "password" => "deliveboo",
            "email" => "roberto.galli@gmail.com"
        ],

        [
            "name" => "Andrea",
            "surname" => "Greco",
            "password" => "deliveboo",
            "email" => "andrea.greco@gmail.com"
        ],

        [
            "name" => "Carlo",
            "surname" => "Greco",
            "password" => "deliveboo",
            "email" => "carlo.greco@gmail.com"
        ],

        [
            "name" => "Angelo",
            "surname" => "Greco",
            "password" => "deliveboo",
            "email" => "angelo.greco@gmail.com"
        ],

        [
            "name" => "Chiara",
            "surname" => "Lombardi",
            "password" => "deliveboo",
            "email" => "chiara.lombardi@gmail.com"
        ],

        [
            "name" => "Elisa",
            "surname" => "Ferrari",
            "password" => "deliveboo",
            "email" => "elisa.ferrari@gmail.com"
        ],

        [
            "name" => "Andrea",
            "surname" => "Friarello",
            "password" => "deliveboo",
            "email" => "andrea.friarello@gmail.com"
        ],

        [
            "name" => "Vittoria",
            "surname" => "Fria",
            "password" => "deliveboo",
            "email" => "vittoria.fria@gmail.com"
        ],

    ],

    "restaurants" => [

        [
            "id" => 1,
            "name" => "Gusto Italiano",
            "address" => "Via del Corso, 15, 00186 Roma",
            "vat" => "92255625968",
            "phone_number" => "3774362879",
            "cover_img" => "https://media.posterlounge.com/images/l/1895299.jpg",
            "user_id" => 1,
        ],

        [
            "id" => 2,
            "name" => "il gusto della nebbia",
            "address" => "Via crociata, 22, 00186 Roma",
            "vat" => "76723625922",
            "phone_number" => "3774552773",
            "cover_img" => "https://images.dissapore.com/wp-content/uploads/2020/01/gusto_nebbia_esterno_.jpeg",
            "user_id" => 2,
        ],

        [
            "id" => 3,
            "name" => "Sushi Wok",
            "address" => "Via Giuseppe Mazzini, 47, 00195 Roma",
            "vat" => "31978647182",
            "phone_number" => "0644243678",
            "cover_img" => "https://thumbs.dreamstime.com/z/insegna-di-un-ristorante-giapponese-tipico-dei-frutti-mare-109994272.jpg",
            "user_id" => 3,
        ],
        [
            "id" => 4,
            "name" => "La Trattoria",
            "address" => "Via di San Giovanni in Laterano, 24, 00184 Roma",
            "vat" => "14786253982",
            "phone_number" => "0687135784",
            "cover_img" => "https://www.casatrattoria.it/wp-content/uploads/2021/02/Progetto-senza-titolo-59.png",
            "user_id" => 4,
        ],
        [
            "id" => 5,
            "name" => "El Mericanos",
            "address" => "Via delle Muratte, 35, 00187 Roma",
            "vat" => "26719385672",
            "phone_number" => "0687192385",
            "cover_img" => "https://www.conoscounposto.com/wp-content/uploads/2017/10/tacombi.jpg",
            "user_id" => 5,
        ],

     
        [
            "id" => 6,
            "name" => "Pizzeria del Corso",
            "address" => "Via del Corso, 26, 00186 Roma",
            "vat" => "12345678901",
            "phone_number" => "3061234567",
            "cover_img" => "https://upload.wikimedia.org/wikipedia/commons/thumb/6/66/Pizzeria_in_Venice.jpg/1200px-Pizzeria_in_Venice.jpg",
            "user_id" => 6,
        ],

        [
            "id" => 7,
            "name" => "Ristorante Trastevere",
            "address" => "Via della Scala, 53, 00153 Roma",
            "vat" => "23456789012",
            "phone_number" => "3452345678",
            "cover_img" => "https://media-cdn.tripadvisor.com/media/photo-s/1b/73/be/dd/giardino-esterno.jpg",
            "user_id" => 7,
        ],    
      
        [
            "id" => 8,
            "name" => "Osteria alla frasca",
            "address" => "Piazza del Popolo, 4, 00187 Roma",
            "vat" => "34567890123",
            "phone_number" => "6783456789",
            "cover_img" => "https://aalsdnxkwq.cloudimg.io/v7/www.mamablip.com/ir/800/storage/trattoria_osteria_3091652187298.jpg",
            "user_id" => 8,
        ],
        
        [
            "id" => 9,
            "name" => "Il Passetto",
            "address" => "Via dei Pellegrini, 68, 00186 Roma",
            "vat" => "45678901234",
            "phone_number" => "9064567890",
            "cover_img" => "https://media-cdn.tripadvisor.com/media/photo-s/0b/51/95/3d/external-shot-of-restaurant.jpg",
            "user_id" => 9,
        ],    
        
        [
            "id" => 10,
            "name" => "Ristorante La Pergola",
            "address" => "Via Alberto Cadlolo, 101, 00136 Roma",
            "vat" => "56789012345",
            "phone_number" => "6455678901",
            "cover_img" => "https://media-cdn.tripadvisor.com/media/photo-s/1d/7c/1b/5a/ristorante-la-pergola.jpg",
            "user_id" => 10,
        ],

        [
            "id" => 11,
            "name" => "Taverna Trilussa",
            "address" => "Via del Politeama, 23, 00153 Roma",
            "vat" => "67890123456",
            "phone_number" => "9576789012",
            "cover_img" => "https://burst.shopifycdn.com/photos/dinner-table-in-a-restaurant.jpg?width=925&format=pjpg&exif=1&iptc=1",
            "user_id" => 11,
        ],

        [
            "id" => 12,
            "name" => "Roscioli",
            "address" => "Via dei Giubbonari, 21, 00186 Roma",
            "vat" => "76543210987",
            "phone_number" => "0648902005",
            "cover_img" => "https://youimg1.tripcdn.com/target/100v0i0000009ck0q918D.jpg",
            "user_id" => 12,
        ],
            
        [
            "id" => 13,
            "name" => "kebabba halid",
            "address" => "Via Alberto Cadlolo, 101, 00136 Roma",
            "vat" => "54321098765",
            "phone_number" => "6063509383",
            "cover_img" => "https://lecconotizie.com/wp-content/uploads/2013/01/kebab.jpg",
            "user_id" => 13,
        ],
            
        [
            "id" => 14,
            "name" => "Eataly",
            "address" => "Piazzale 12 Ottobre 1492, 00154 Roma",
            "vat" => "87654321098",
            "phone_number" => "7706583771",
            "cover_img" => "https://media-cdn.tripadvisor.com/media/photo-s/18/29/1b/db/eataly.jpg",
            "user_id" => 14,
        ],

        [
            "id" => 15,
            "name" => "Ristorante Alfredo alla Scrofa",
            "address" => "Via della Scrofa, 104, 00186 Roma",
            "vat" => "09876543210",
            "phone_number" => "0668803034",
            "cover_img" => "https://www.efanews.eu/resources/cf2ccc8818167fe97142100eb6c2fb4f.jpg",
            "user_id" => 15,
        ],
            
        [
            "id" => 16,
            "name" => "Hostaria Antica Roma",
            "address" => "Via Ferruccio, 12, 00185 Roma",
            "vat" => "34567890123",
            "phone_number" => "064469178",
            "cover_img" => "https://media-cdn.tripadvisor.com/media/photo-s/05/39/d0/72/springtime.jpg",
            "user_id" => 16,
        ],
            
        [
            "id" => 17,
            "name" => "Rosetta",
            "address" => "Via della Rosetta, 8, 00186 Roma",
            "vat" => "67890123456",
            "phone_number" => "066864068",
            "cover_img" => "https://qul.imgix.net/af55b509-ab7f-4ffb-a26b-5d85d0b02c6f/387140_sld.jpg",
            "user_id" => 17,
        ],

        [
            "id" => 18,
            "name" => "thao mato",
            "address" => "Via dei Gracchi, 55, 00192 Roma",
            "vat" => "12345678901",
            "phone_number" => "065817686",
            "cover_img" => "https://thumbs.dreamstime.com/z/ristorante-cinese-asiatico-che-vende-le-tagliatelle-toronto-ad-ovest-chinatown-ontario-canada-novembre-%C3%A8-il-distretto-etnico-150414977.jpg",
            "user_id" => 18,
        ],
            
        [
            "id" => 19,
            "name" => "bristo ararat",
            "address" => "Via Alberto Cadlolo, 101, 00136 Roma",
            "vat" => "34567890123",
            "phone_number" => "06688110",
            "cover_img" => "https://www.repstatic.it/content/nazionale/img/2014/08/28/124413898-a3e764e4-8a3c-4791-9ad5-b0050f0135c5.jpg",
            "user_id" => 19,
        ],
            
        [
            "id" => 20,
            "name" => "taste aest",
            "address" => "Via di San Marco, 31, 00186 Roma",
            "vat" => "56789012345",
            "phone_number" => "066880030",
            "cover_img" => "https://i2.wp.com/www.puntarellarossa.it/wp/wp-content/uploads/2015/05/ristorante-taste-east-cucina-cinese-asiatica-roma-asian-food1.jpeg",
            "user_id" => 20,
        ],

    ],
];