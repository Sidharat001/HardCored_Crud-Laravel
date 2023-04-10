<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    {{-- Bootstrap Cdn Links  --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <section class="pb-5 header text-center">
        <div class="container py-5 text-white">
          <header class="pt-3 pb-5">
            <h1 class="display-4">Bootstrap add, edit, delete buttons</h1>
            <!-- <p class="font-italic mb-1">Use bootstrap button variants to create call to action buttons inside a table, that's just for design, I'm sure you can make them work.</p><p class="font-italic">Snippet by <a class="text-white" href="https://bootstrapious.com/"><u>Bootstrapious</u></a></p> -->
          </header>
          <div class="row">
            <div class="col-lg-12 mx-auto">
              <h1 class="text-bg-dark">Crud Table <span>
                  <button type="button" class="float-end mx-2 my-1 btn btn-danger" data-bs-toggle="modal" data-bs-target="#AddModal" title="Delete All">Delete All</button>
                  <button type="button" class="float-end mx-2 my-1 btn btn-success" data-bs-toggle="modal" data-bs-target="#AddModal" title="Add User">Add Users</button>
                </span>
              </h1>
              <div class="card border-0 shadow">
                <div class="card-body p-5">
                  <!-- Responsive table -->
                  <div class="table-responsive">
                    <table class="table m-0" id="example" class="display" style="width:100%">
                      <thead>
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">Name</th>
                          <th scope="col">UserName</th>
                          <th scope="col">Email</th>
                          <th scope="col">Phone</th>
                          <th scope="col">Status</th>
                          {{-- <th scope="col">Handle</th> --}}
                          <th scope="col">Action</th>
                        </tr>
                      </thead>
                      <tbody id="GetData_ROw">
                        @foreach ($data as $usersData)
                        <tr>
                            <th scope="row">{{$usersData->user_id}}</th>
                            <td>{{$usersData->name}}</td>
                            <td>{{$usersData->username}}</td>
                            <td>{{$usersData->email}}</td>
                            <td>{{$usersData->phone}}</td>
                            <td>{{$usersData->status}}</td>
                            <td><ul class="list-inline m-0"><li class="list-inline-item"><button class="btn btn-primary btn-sm rounded-0" type="button" data-bs-toggle="modal" data-bs-target="#viewModal" title="View"><i class="fa fa-table"></i></button></li><li class="list-inline-item"><button class="btn btn-success btn-sm rounded-0" type="button" data-bs-toggle="modal" data-bs-target="#editModal" title="Edit"><i class="fa fa-edit"></i></button></li><li class="list-inline-item"><button id="delete" value="3" class="btn btn-danger btn-sm rounded-0" type="button" data-bs-toggle="modal" data-bs-target="#deleteModal" title="Delete"><i class="fa fa-trash"></i></button></li></ul></td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!--Static Crud Table Start-->
      {{-- <section class="view _modal">
        <div class="modal fade" id="viewModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body"> ... </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="edit_modal">
        <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body"> ... </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="delete_modal">
        <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body"> ... </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="addUser_modal">
        <div class="modal fade" id="AddModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Add User</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <!-- add User Form In modal Start -->
                <section class="addUsers modalForm">
                  <div class="container-fluid">
                    <div class="col-md-12">
                      <form action="" method="post">
                        <div class="row g-3 mb-3">
                          <div class="col">
                            <input type="text" id="AddUsername" class="form-control" placeholder="First name" aria-label="First name">
                            <div id="NameError" class="form-text text-danger"></div>
                          </div>
                          <div class="col">
                            <input type="text" id="AddUserlastName" class="form-control" placeholder="Last name" aria-label="Last name">
                            <div id="lastNameError" class="form-text text-danger"></div>
                          </div>
                        </div>
                        <div class="mb-3">
                          <!-- <label for="exampleInputEmail1" class="form-label">Email address</label> -->
                          <input type="email" id="AddUserEmail" class="form-control" aria-describedby="emailHelp" placeholder="Email">
                          <div id="EmailError" class="form-text text-danger"></div>
                        </div>
                        <div class="mb-3">
                          <input type="number" id="AddUserNumber" class="form-control" placeholder="Phone Number">
                          <div id="PhoneError" class="form-text text-danger"></div>
                        </div>
                        <div class="mb-3">
                          <!-- <label for="formGroupExampleInput" class="form-label">Example label</label> -->
                          <input type="text" id="AddUserAddress" class="form-control" placeholder="Address">
                          <div id="AddressError" class="form-text text-danger"></div>
                        </div>
                      </form>
                    </div>
                  </div>
                </section>
                <!-- add User Form In modal End  -->
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" onclick="" class="btn btn-primary">Save changes</button>
              </div>
              <p id="SuccessMsg" class="text-bg-success text-center"></p>
            </div>
          </div>
        </div>
      </section> --}}
    {{-- Cdn Link --}}
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>