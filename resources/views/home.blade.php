<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Welcome Laravel</title>
</head>
<body>
   <header class="bg-light py-3 mb-5">
    <div class="container d-flex justify-content-between">
        <h1> {{ $title }} </h1>
        <div class="navbar text-black text-decoration-none">
            <a class="mx-3 text-black text-decoration-none" href="{{route ('home')}}">Home</a>
            <a class="text-black text-decoration-none" href="{{route ('about')}}">PHP Plain</a>
        </div>   
    </div>
   </header>
   <main class="py-3">
    <div class="container">
        <div class="d-flex justify-content-center">
            <img class="w-100" src="https://upload.wikimedia.org/wikipedia/commons/3/36/Logo.min.svg" alt="">
        </div>
    </div>
   </main>
   <footer class="text-center bg-light py-3 position-fixed bottom-0 w-100">
    <p> <i class="fa-solid fa-copyright"></i> Roberto Nesta 2023 | Boolean </p>
    </footer>
</body>

</html>