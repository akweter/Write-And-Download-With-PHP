<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./node_modules/bootstrap.min.css">
    <title>Write & Download Online</title>
</head>
<body>
<header>
            <!-- Navigation -->
            <nav class="navbar navbar-expand-sm bg-dark">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#"><img src="./" alt="Logo"></a>
                    <div class="collapse row navbar-collapse" id="mainNavbar">
                        <ul class="navbar-nav">
                    <h1 style="color:white;" class="justify-content-center">Write and Download</h1>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
    <main>
        <div class="p-5">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="col-md-12">
                    <form action="export.php" method="post">
                        <h4>Title</h4>
                        <input type="text" name="topic" class="form-control"/>
                        <br/>
                        <h4>Body</h4>
                        <textarea name="bodyContent" class="form-control" cols="95" rows="10"></textarea>
                        <button name="create_doc" class="btn btn-info m-3">Download as Word Doc</button>
                    </form>
                </div>
            </div>
        </div>
    </main>
    <footer></footer>
    <script src="./node_modules/bootstrap.min.js"></script>
</body>
</html>