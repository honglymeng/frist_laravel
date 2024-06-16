<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Category</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
 <style>
    body {
      min-height: 75rem;
      padding-top: 4.5rem;
    }
  </style>
  </head>
<body>
<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
  <div class="container-fluid">
  <a class="navbar-brand" href="#">
      <img src="https://getbootstrap.com/docs/5.0/assets/brand/bootstrap-logo.svg" alt="" width="30" height="24">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="/category">Category</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
</head>
<body>
   <main class="container">
    <div class="row">
        <div class="col">
            <a href="/category/create" class="btn btn-primary float-end">
                <i class="bi
                 bi-plus-lg"></i>
                Category
            </a>
        </div>
    </div>
   <div class="row">
    <div class="col">
        <table class="table  table-bordered table-hover">
            <thead>
                <tr class="bg-light">
                    <th width="50px">#</th>
                    <th>Name</th>
                    <th>Img</th>
                    <th width="160px"></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="align-middle">1</td>
                    <td class="align-middle">Water</td>
                    <td>
                        <img width="40px" src="https://via.placeholder.com/150" alt="Water" class="img-thumbnail">
                    </td>
                    <td class="align-middle">
                        <a href="#" class="btn btn-outline-primary btn-sm">
                            <i class="bi bi-pencil-square"></i>
                            Edit
                        </a>
                        <a href="#" class="btn btn-outline-danger btn-sm">
                            <i class="bi bi-trash3"></i>
                            Delete
                        </a>
                    </td>
                </tr>
                <tr>
                    <td class="align-middle">2</td>
                    <td class="align-middle">Food</td>
                    <td>
                        <img width="40px" src="https://via.placeholder.com/150" alt="Water" class="img-thumbnail">
                    </td>
                    <td class="align-middle">
                        <a href="#" class="btn btn-outline-primary btn-sm">
                            <i class="bi bi-pencil-square"></i>
                            Edit
                        </a>
                        <a href="#" class="btn btn-outline-danger btn-sm">
                            <i class="bi bi-trash3"></i>
                            Delete
                        </a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

   </main>

</body>
</html>