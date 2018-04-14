<html><head>
    <meta charset="UTF-8">
    <title>PHP MySQL</title>

    <style>
        /* 
        ========================================================
            Formatting 
        ========================================================
        */
        body, h1, #data {
            margin: 1em;
            padding: 1em;
            text-align: center;
        }

        table, tr, th, td {
            margin: .2em;
            padding: .2em;
            text-align: center;
        }

        th, td {
            padding: 1em;
        }

        table {
            margin: 0 auto;
        }

        .navbarItem {
            margin: 1em;
            padding: 1em 3em;
            display: inline-block;
        }

        /* 
        ========================================================
            Display / Colours 
        ========================================================
        */
        body {
            background: cornsilk;
            border: 3px solid green;
        }

        h1 {
            border: 3px solid red;
        }

        #data {
            border: 3px solid blue;
        }

        table, tr, th, td {
            border: 1px solid black;
        }

        #navbar, .navbarItem {
            border: 5px solid lightblue;
            border-style: outset;
        }

        .navbarItem:hover {
            background: lightblue;
        }

        /* 
        ========================================================
            Text
        ========================================================
        */
        .navbarItem {
            text-decoration: none;
        }
    </style>
</head>

<!-- ================================================================ -->
<!-- ================================================================ -->
<!-- ================================================================ -->

<body>
    <?php include "navbar.php" ?> 

    <h1>Home Page</h1>

    <div id="data">
        <?php include "retriveData.php"; ?>
    </div>
</body>
</html>