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
        @php($id = 0)
        @foreach ($getAllDetails as $usersData)
        <tr>
            <th scope="row">{{++$id}}</th>
            <td>{{$usersData->name}}</td>
            <td>{{$usersData->username}}</td>
            @if($usersData->email == null || $usersData->email == '')
            <td>Email Empty</td>
            @elseif(str_contains( $usersData->email, '@' ))
            <td>{{$usersData->email}}</td>
            @else
            <td>Invalid Email</td>
            @endif
            {{-- Validation  on Phone Number  Start--}}
            @if ($usersData->phone == null || $usersData->phone == '' )
                <td>Phone Not Available</td>
            @elseif(strlen($usersData->phone) < 10 || strlen($usersData->phone) > 10)
            <td>Wrong Number</td>
            @else
            <td>{{$usersData->phone}}</td>
            @endif
            {{-- Validation  on Phone Number End--}}
            @if($usersData->status == 0)
            <td>Deactivate</td>
            @else($usersData->status == 1)
            <td>Active</td>
            @endif
            <td>
              <ul class="list-inline m-0">
                <li class="list-inline-item">
                  <a href="" class="btn btn-primary btn-sm rounded-0"><i class="fa fa-table"></i></a></li><li class="list-inline-item">
                  <a href="{{ route('viewUserData', ['id' => $usersData->user_id]) }}" class="btn btn-success btn-sm rounded-0"><i class="fa fa-edit"></i></a></li><li class="list-inline-item">
                  <a href="{{ route('deleteUserData', ['id' => $usersData->user_id]) }}" id="delete" value="3" class="btn btn-danger btn-sm rounded-0"><i class="fa fa-trash"></i></a></li>
              </ul>
            </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>