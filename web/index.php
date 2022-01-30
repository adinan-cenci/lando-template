<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, user-scalable=0" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Full Stack lando template</title>
        <style>
        body {
            margin: 0px;
        }
        #layout {
            display: flex;
            width: 100vw;
            height: 100vh;
            overflow: hidden;
        }
        #directories {
            width: 300px;
            padding: 20px;
            overflow: auto;
        }
        iframe {
            width: calc(100% - 300px);
        }
        @media screen and (max-width: 700px) {
            #layout {
                flex-wrap: wrap;
            }
            #directories {
                width: 100%;
            }
            iframe {
                width: 100%;
            }
        }
        </style>
    </head>
    <body>
        <div id="layout">
            <div id="directories">
                <?php 
                $directories = scandir('.');
                $directories = array_filter($directories, function($entry) 
                {
                    return is_dir($entry) && !in_array($entry, ['.', '..']);
                });

                foreach ($directories as $dir) {
                    echo '<a href="' . $dir . '">' . $dir . '</a><br>';
                }
                ?>
            </div>
            <iframe src="phpinfo.php" frameborder="0"></iframe>
        </div>
    </body>
</html>