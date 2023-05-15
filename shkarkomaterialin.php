<!DOCTYPE html>
<html>
<head>
    <title>Trajnime në gjuhën e IT - Materials</title>
    <style>
        /* Stilizimi për faqen e re */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f2f2f2;
        }

        header {
            background-color: #df2d45;
            padding: 20px;
            text-align: center;
            color: #fff;
        }

        h1 {
            margin: 0;
        }

        main {
            padding: 20px;
            margin: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .material-list {
            list-style-type: none;
            padding: 0;
        }

        .material-list li {
            margin-bottom: 10px;
            border-bottom: 1px solid #ccc;
            padding-bottom: 10px;
        }

        .material-list li:last-child {
            border-bottom: none;
        }

        .material-list li h3 {
            margin: 0;
            color: #0066cc;
        }

        .material-list li p {
            margin: 0;
            color: #666;
        }

        .material-list li a {
            color: #0066cc;
            text-decoration: none;
        }

        .material-list li a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <header>
        <h1>Trajnime në gjuhën e IT</h1>
    </header>

    <main>
        <h2>Materials</h2>
        <ul class="material-list">
        <?php
            // Array me materialet e kursit dhe të dhënat e tyre shtesë
            $materialet = array(
                array(
                    'titulli' => 'Materialet e kursit 1',
                    'pershkrimi' => 'Kjo seri materialesh trajnuese përmban një përmbledhje të hollësishme të koncepteve themelore të gjuhës së programimit.',
                    'linku' => '#'
                ),
                array(
                    'titulli' => 'Materialet e kursit 2',
                    'pershkrimi' => 'Ky set materialesh i ofron pjesëmarrësve një udhëzues të hollësishëm për ndërtimin e aplikacioneve web duke përdorur teknologjitë e reja.',
                    'linku' => '#'
                ),
                array(
                    'titulli' => 'Materialet e kursit 3',
                    'pershkrimi' => 'Ky kurs përmban një seri video-leksione që përshkruajnë metodologjitë më të fundit për zhvillimin e aplikacioneve mobile.',
                    'linku' => '#'
                )
                // Shtoni materialet e tjera të nevojshme për trajnimin në gjuhën e IT
            );

            // Krijo një element <li> për çdo material në listën e materialeve
            foreach ($materialet as $material) {
                echo "<li>";
                echo "<h3>{$material['titulli']}</h3>";
                echo "<p>{$material['pershkrimi']}</p>";
                echo "<a href='{$material['linku']}'>Shkarko materialet</a>";
                echo "</li>";
            }
            
            ?>
        </ul>
    </main>
</body>
</html>